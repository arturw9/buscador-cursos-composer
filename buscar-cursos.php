<?php

require 'vendor/autoload.php';
require 'src/Buscador.php';

use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$client =  new Client(['base-uri' => 'https://alura.com.br/']);
$crawler = new Crawler();

$buscador = new \Artur\BuscadorDeCursos\Buscador($client, $crawler);
$cursos = $buscador->buscar('/cursos-online-programacao/php');

foreach ($cursos as $curso) {
    echo $curso.PHP_EOL;
}