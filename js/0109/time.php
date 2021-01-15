<?php
$ll = '你好';
$response = [
    'error' => 0,
    'msg' => 'ok',
    'data' => [
        'll' => $ll
    ]
];
echo json_encode($response);