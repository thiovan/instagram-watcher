<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/':
        require __DIR__ . '/dashboard.php';
        break;
    case '':
        require __DIR__ . '/dashboard.php';
        break;
    case (preg_match('/\/api\/panel.*/', $request) ? true : false):
        require __DIR__ . '/api/get-panel.php';
        break;
    case (preg_match('/\/api\/table.*/', $request) ? true : false):
        require __DIR__ . '/api/get-table.php';
        break;
    case (preg_match('/\/api\/chart.*/', $request) ? true : false):
        require __DIR__ . '/api/get-chart.php';
        break;
    case (preg_match('/\/api\/category\/update.*/', $request) ? true : false):
        require __DIR__ . '/api/update-category.php';
        break;
    case (preg_match('/\/api\/category.*/', $request) ? true : false):
        require __DIR__ . '/api/get-category.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/404.php';
        break;
}
