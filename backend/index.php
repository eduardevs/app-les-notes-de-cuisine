<?php
//http://localhost:3000
header('Access-Control-Allow-Origin: http://localhost:3000');
header('Access-Control-Allow-Headers: content-type');
header('Access-Control-Allow-Methods: GET, POST');

//echo $message;
echo json_encode([
    $_SERVER
]);
