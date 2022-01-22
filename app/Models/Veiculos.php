<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veiculos extends Model
{
    use HasFactory;

  private $nome_veiculo;
  private $marca_modelo;
  private $placa;
  private $ano;
  private $modelo;
  private $renavam;
  private $cpt;
  private $cor;
  private $observacoes;

}
