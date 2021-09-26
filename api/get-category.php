<?php
require __DIR__ . '/base.php';

$category = R::findAll("flags");

echo json_encode(array_values($category));