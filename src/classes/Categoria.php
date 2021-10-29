<?php

namespace App\classes;

class Categoria
{
  public $nome;

  function __construct($nome)
  {
    $this->nome = $nome;
  }
}