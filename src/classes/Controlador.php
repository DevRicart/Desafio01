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

    if (array_key_exists($busca, $mercadorias)) { //TODO: verificar a existencia da chave $busca no array $mercadorias. (FOOOOOOOI)
      return $mercadorias[$busca];
       
    } else {
      $content = file_get_contents(__DIR__ . '/../views/404.html');

      require(__DIR__ . '/../views/layout.php'); // aqui cabe adicionar o 404 (fooooi)
    }
  }
   
  public function render($mercadoria) {
 // nao precisa mais (feito)
 // remover esse if todo (feito)
      $mercadoria = new Mercadoria($mercadoria);
      ob_start();
      require(__DIR__ . '/../views/dados-mercadoria.php');
      $content = ob_get_clean();
      
      require(__DIR__ . '/../views/layout.php');
  }
  
  public function run() {
    if (isset($_GET['mercadoria'])) { // show (show)
      $mercadoria = $this->findMercadoria($_GET['mercadoria']);
      $this->render($mercadoria); 
    }
    else if ($_SERVER['REQUEST_URI'] == "/") { // caso a url não seja a padrão (somento o dominio)
      $content = file_get_contents(__DIR__ . '/../views/selecione.html');
      require(__DIR__ . '/../views/layout.php');
    } 
    else { // show (show)
      $content = file_get_contents(__DIR__ . '/../views/404.html');
      require(__DIR__ . '/../views/layout.php');
    }
  }

}


