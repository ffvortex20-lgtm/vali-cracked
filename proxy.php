<?php
// proxy.php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

$url = 'https://viku.mypdftools.site/api/generate';

// Pega os dados que o seu site enviou
$data = file_get_contents('php://input');

// Faz a requisição para a API real
$options = [
    'http' => [
        'header'  => "Content-type: application/json\r\n",
        'method'  => 'POST',
        'content' => $data,
    ],
];

$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);

// Devolve a resposta para o seu site
echo $result;
?>
