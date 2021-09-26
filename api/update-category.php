<?php
require __DIR__ . '/base.php';

$id = isset($_POST['id']) ? $_POST['id'] : NULL;
$idFlag = isset($_POST['flag_id']) ? $_POST['flag_id'] : NULL;

if (!$id || !$idFlag) {
    http_response_code(400);
    die("Malformed parameters");
}

$comment = R::load('comments', $id);
$comment->flag_id = $idFlag;
R::store($comment);

echo json_encode($comment);