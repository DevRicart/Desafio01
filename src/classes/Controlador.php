<?php

namespace App\classes;

class Controlador
{
  private $mercadorias;

  public function getMercadorias() {
    $mercadorias = require('data/mercadorias.php');
    return $mercadorias;
  }
  
  public function findMercadoria($busca) {
    $mercadorias = $this->getMercadorias();

    if (isset($mercadorias[$busca])) {
      return $mercadorias[$busca];

    } else {
      return [];
    }
  }
   
  public function render($mercadoria) {
    if ($mercadoria == []) {
      require_once(__DIR__ . '/../views/selecione.html');
      

    } else {
      require_once(__DIR__ . '/../views/dados-mercadoria.php');    
    }
  }
  
  public static function run() {
    $controlador = new self();

    if (isset($_GET)) {
      $mercadoria = $controlador->findMercadoria('mercadoria');
      print_r($mercadoria);
      $controlador->render($mercadoria);
      
    } else {
      require_once(__DIR__ . '/../views/404.html');
    }
  }

}


