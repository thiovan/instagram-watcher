<?php
require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../libs/rb-mysql.php';

date_default_timezone_set('Asia/Jakarta');

header('Content-Type: application/json; charset=utf-8');
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

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