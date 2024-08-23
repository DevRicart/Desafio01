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

    if (array_key_exists($busca, $mercadorias)) {
      return $mercadorias[$busca];
    } else {
      $content = file_get_contents(__DIR__ . '/../views/404.html');
      require(__DIR__ . '/../views/layout.php');
    }
  }
   
  public function render($mercadoria) {
      $mercadoria = new Mercadoria($mercadoria);
      ob_start();
      require(__DIR__ . '/../views/dados-mercadoria.php');
      $content = ob_get_clean();

      require(__DIR__ . '/../views/layout.php');
  }
  
  public function run() {
    if (isset($_GET['mercadoria'])) {
      $mercadoria = $this->findMercadoria($_GET['mercadoria']);
      $this->render($mercadoria); 
    }
    else if ($_SERVER['REQUEST_URI'] == "/") {
      $content = file_get_contents(__DIR__ . '/../views/selecione.html');
      require(__DIR__ . '/../views/layout.php');
    } 
    else {
      $content = file_get_contents(__DIR__ . '/../views/404.html');
      require(__DIR__ . '/../views/layout.php');
    }
  }

}


