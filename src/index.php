<?php
require_once(__DIR__ . '/init.php');

use App\classes\Mercadoria;

$mercadorias = require_once(__DIR__ . '/data/mercadorias.php');
$busca = $_GET['mercadoria'] ?? null;

if (!$busca) {
  require_once(__DIR__ . '/views/selecione.html');
}

if (isset($mercadorias[$busca])) {
  $mercadoria = new Mercadoria($mercadorias[$busca]);
  require_once(__DIR__ . '/views/dados-mercadoria.php');
}

require_once(__DIR__ . '/views/404.html');
