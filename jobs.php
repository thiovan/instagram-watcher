<?php
require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/libs/rb-mysql.php';
require __DIR__ . '/libs/EmailVerification.php';

date_default_timezone_set('Asia/Jakarta');

$ERROR_LOGGER;
$INFO_LOGGER;
$TELEBOT;
$TELEBOT2;

try {

    // init dot env
    $DOTENV = Dotenv\Dotenv::createImmutable(__DIR__);
    $DOTENV->load();

    // init DB
    R::setup(
        'mysql:host=' . $_ENV['DATABASE_HOST'] . ';dbname=' . $_ENV['DATABASE_NAME'],
        $_ENV['DATABASE_USER'],
        $_ENV['DATABASE_PASS'],
        TRUE
    );
    // R::fancyDebug(TRUE);

    function getConfig($key)
    {
        $config = R::findOne('configs', '`key`=?', [$key]);
        if ($config) {
            return $config->value;
        } else {
            return NULL;
        }
    }

    // init telegram bot
    $TELEBOT = new Telegram\Bot\Api(getConfig('BOT_TOKEN'));
    $TELEBOT2 = new Telegram\Bot\Api(getConfig('BOT_TOKEN_2'));

    // init logger
    $ERROR_LOGGER = new Monolog\Logger('error');
    $ERROR_LOGGER->pushHandler(new Monolog\Handler\RotatingFileHandler(__DIR__ . '/logs/error.log', 7, Monolog\Logger::DEBUG, true, 0664));
    $INFO_LOGGER = new Monolog\Logger('info');
    $INFO_LOGGER->pushHandler(new Monolog\Handler\RotatingFileHandler(__DIR__ . '/logs/info.log', 7, Monolog\Logger::DEBUG, true, 0664));

    // init email verification
    $emailVerification = new EmailVerification(
        $_ENV['EMAIL_NAME'],
        $_ENV['EMAIL_HOST'],
        $_ENV['EMAIL_PASS']
    );

    // init instagram scraper
    $INSTAGRAM = new \InstagramScraper\Instagram(new \GuzzleHttp\Client());
    $INSTAGRAM = \InstagramScraper\Instagram::withCredentials(
        new \GuzzleHttp\Client(),
        getConfig('INSTAGRAM_USERNAME'),
        getConfig('INSTAGRAM_PASSWORD'),
        new Phpfastcache\Helper\Psr16Adapter('Files')
    );
    $INSTAGRAM->login(false, $emailVerification);

    function sendMessage($message)
    {
        global $TELEBOT;

        $sendTos = R::findAll('send_to');
        foreach ($sendTos as $sendTo) {
            $response = $TELEBOT->sendMessage([
                'chat_id'       => $sendTo->chat_id,
                'text'          => $message,
                'parse_mode'    => 'HTML',
                'disable_web_page_preview' => true
            ]);
        }

        return $response;
    }

    $timeStart = date('d-m-Y H:i:s');
    $INFO_LOGGER->info('Process Started');

    $accounts = R::find('accounts', 'action = ?', ['enable']);
    $keywords = R::findAll('keywords');

    foreach ($accounts as $account) {
        $medias = $INSTAGRAM->getMedias($account->username, getConfig('MAX_POST'));

        foreach ($medias as $media) {
            $comments = $INSTAGRAM->getMediaCommentsByCode($media->getShortCode(), getConfig('MAX_COMMENT'));

            foreach ($comments as $comment) {

                foreach ($keywords as $keyword) {
                    if (strpos(strtolower($comment->getText()), strtolower($keyword->value)) !== FALSE) {

                        $commentExist = R::findOne('comments', 'text=?', [json_encode($comment->getText())]);
                        if (!$commentExist) {
                            $commentExist = R::dispense('comments');
                            $commentExist->from = $comment->getOwner()->getUsername();
                            $commentExist->text = json_encode($comment->getText());
                            $commentExist->time = date('Y-m-d H:i:s', $comment->getCreatedAt());
                            $commentExist->url = $media->getLink();
                            $commentExist->is_sent = 0;
                            R::store($commentExist);
                        }

                        if ($commentExist->is_sent == 0) {
                            $message = "⚠️ <b>LAPOR HENDI DETECTED</b> ⚠️\n\n";
                            $message .= "<b>Time: </b> <code>" . date('H:i:s d-m-Y', strtotime($commentExist->time)) . "</code>\n";
                            $message .= '<b>From: </b> <a href="http://instagram.com/' . $commentExist->from . '">@' . $commentExist->from . "</a>\n";
                            $message .= '<b>URL: </b> <a href="' . $commentExist->url . '">' . $commentExist->url . "</a>\n";
                            $message .= "<b>Comment: </b> <code>" . json_decode($commentExist->text) . "</code>\n";
                            sendMessage($message);

                            $commentExist->is_sent = 1;
                            R::store($commentExist);
                        }
                    }
                }
            }
        }
    }

    $timeEnd = date('d-m-Y H:i:s');
    $message = "💙 <b>HEARTBEAT REPORTER</b> 💙\n\n";
    $message .= "Apps: <code>Instagram Comment Watcher 2</code>\n";
    $message .= "Start: <code>$timeStart</code>\n";
    $message .= "End: <code>$timeEnd</code>\n";
    $TELEBOT2->sendMessage([
        'chat_id'       => '218510007',
        'text'          => $message,
        'parse_mode'    => 'HTML',
        'disable_web_page_preview' => true
    ]);
    
    $INFO_LOGGER->info('Process Finished');
    die('OK');

} catch (\Exception $e) {
    $ERROR_LOGGER->error((string) $e);
    $message = "❌ <b>ERROR DETECTED</b> ❌\n\n";
    $message .= "Apps: <code>Instagram Comment Watcher 2</code>\n";
    $message .= "Error: <code>" . $e->getMessage() . "</code>\n";
    $TELEBOT2->sendMessage([
        'chat_id'       => '218510007',
        'text'          => $message,
        'parse_mode'    => 'HTML',
        'disable_web_page_preview' => true
    ]);
    die(var_dump($e));
}
