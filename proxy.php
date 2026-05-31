<?php
$url = 'https://viku.mypdftools.site/api/generate';
$data = file_get_contents('php://input');

$options = [
    'http' => [
        'header'  => "Content-type: application/json\r\n",
        'method'  => 'POST',
        'content' => $data,
    ],
];
$context  = stream_context_create($options);
echo file_get_contents($url, false, $context);
?>
