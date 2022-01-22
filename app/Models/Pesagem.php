<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesagem extends Model
{
  use HasFactory;

  private $data;
  private $equipe_triador;
  private $origem;
  private $tipo;
  private $especificacao;
  private $peso;
  private $supervisor;
  private $observacoes;

}
