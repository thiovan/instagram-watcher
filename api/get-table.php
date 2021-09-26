<?php
require __DIR__ . '/base.php';

$aduan = R::getAll("SELECT c.`*`, f.label, f.color FROM `comments` c LEFT JOIN `flags` f ON c.flag_id=f.id");

foreach ($aduan as $key => $item) {
    $aduan[$key]['text'] = json_decode($aduan[$key]['text']);
}

echo json_encode($aduan);