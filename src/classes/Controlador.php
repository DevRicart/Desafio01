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

    if (isset($_GET)) {
      return $mercadorias[$busca];
       
    } else {
      return [];
    }
  }
   
  public function render($mercadoria) {
    if ($mercadoria == []) {
      $content = require(__DIR__ . '/../views/selecione.html');
      require_once(__DIR__ . '/../views/layout.php');

    } else if ($_GET) {
      $mercadoria = new Mercadoria($mercadoria);
      $content = require(__DIR__ . '/../views/dados-mercadoria.php');
      require_once(__DIR__ . '/../views/layout.php'); 
    }
  }
  
  public static function run() {
    $controlador = new self();

    if (isset($_GET['mercadoria'])) {
      $mercadoria = $controlador->findMercadoria($_GET['mercadoria']);
      $controlador->render($mercadoria);
      
    }
    else if (isset($_GET)) {
      $content = require(__DIR__ . '/../views/selecione.html');
      require_once(__DIR__ . '/../views/layout.php');
    } 
    else {
      $content = require(__DIR__ . '/../views/404.html');
      require_once(__DIR__ . '/../views/layout.php');
    }
  }

}


