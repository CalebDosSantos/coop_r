<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaterialTriado extends Model
{
  use HasFactory;

  private $tipo;
  private $especificacao;
  private $vlr_prev_vnd;
  private $vlr_agregado;
  private $capital;

}
