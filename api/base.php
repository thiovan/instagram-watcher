<?php
require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../libs/rb-mysql.php';

date_default_timezone_set('Asia/Jakarta');

header('Content-Type: application/json; charset=utf-8');

// init dot env
$DOTENV = Dotenv\Dotenv::createImmutable(__DIR__ . "/..");
$DOTENV->load();

// init DB
R::setup(
    'mysql:host=' . $_ENV['DATABASE_HOST'] . ';dbname=' . $_ENV['DATABASE_NAME'],
    $_ENV['DATABASE_USER'],
    $_ENV['DATABASE_PASS'],
    TRUE
);
// R::fancyDebug(TRUE);

?>