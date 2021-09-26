<?php
require __DIR__ . '/base.php';

$totalAduan = R::count('comments');
$totalAduanBulanan = R::getCell("SELECT COUNT(*) AS total FROM `comments` WHERE MONTH(`created_at`) = MONTH(CURRENT_DATE())");
$totalAduanKeluhan = R::getCell("SELECT COUNT(*) AS total FROM `comments` WHERE `flag_id` = 1");
$totalAduanLainnya = R::getCell("SELECT COUNT(*) AS total FROM `comments` WHERE `flag_id` != 1 OR `flag_id` IS NULL");

echo json_encode([
    'total' => [
        'aduan'   => intval($totalAduan),
        'bulanan' => intval($totalAduanBulanan),
        'keluhan' => intval($totalAduanKeluhan),
        'lainnya' => intval($totalAduanLainnya)
    ]
]);
