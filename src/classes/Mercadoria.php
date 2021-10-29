<?php

namespace App\classes;

class Mercadoria
{
  public $nome;
  public $peso;
  public $valor;
  public $categoria;

  function __construct($params)
  {
    $this->nome = $params['nome'];
    $this->peso = $params['peso'];
    $this->valor = $params['valor'];

    if (isset($params['categoria'])) {
      $this->categoria = new Categoria($params['categoria']);
    }    
  }
}