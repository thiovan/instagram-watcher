<?php
require __DIR__ . '/base.php';

$chart = R::getAll("
    SELECT DATE_FORMAT(created_at, '%d/%m/%Y') AS dates, count(*) as count, 
    SUM(case when flag_id = 1 then 1 else 0 end) as keluhan,
    SUM(case when flag_id != 1 OR flag_id IS NULL then 1 else 0 end) as bukan_keluhan
    FROM comments 
    WHERE created_at BETWEEN NOW() - INTERVAL 7 DAY AND NOW()
    GROUP BY dates
    ORDER BY DATE_FORMAT(created_at, '%m/%d/%Y') ASC
");

$labels = [];
$keluhan = [];
$bukanKeluhan = [];

foreach ($chart as $item) {
    array_push($labels, $item['dates']);
    array_push($keluhan, $item['keluhan']);
    array_push($bukanKeluhan, $item['bukan_keluhan']);
}

echo json_encode([
    'labels'    => $labels,
    'data'      => [
        'keluhan'       => $keluhan,
        'bukan_keluhan' => $bukanKeluhan
    ]
]);