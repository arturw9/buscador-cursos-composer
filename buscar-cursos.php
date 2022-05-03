<?php

require 'vendor/autoload.php';



use Alura\BuscadorDeCursos\Buscador;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$httpClient = new \GuzzleHttp\Client([
    'base_uri' => 'https://www.alura.com.br/',
    'verify' => false
]);

$crawler = new Crawler();

$buscardor = new Buscador($httpClient, $crawler);
$cursos = $buscardor->buscar('/cursos-online-programacao/php');

foreach ($cursos as $curso) {
    echo exibeMensagem($curso);
}


