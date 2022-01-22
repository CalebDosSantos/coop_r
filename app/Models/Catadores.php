<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catadores extends Model
{
  use HasFactory;

  private $nome;
  private $nome_da_mae;
  private $cpf;
  private $rg;
  private $pis;
  private $sexo;
  private $data_nascimento;
  private $raca;
  private $ees;
  private $moradia;
  private $qtd_corresidentes;
  private $agua_encanada;
  private $energia_eletrica;
  private $acesso_internet;
  private $escolaridade;
  private $bolsa_familia;
  private $med_renda;
  private $nome_guerra;
  private $func_principal;
  private $func_secundaria;
  private $cesta_alimentos_1;
  private $cesta_alimentos_2;
  private $obs;

  public function horarioPonto() {
    return $this->hasMany(HorarioPonto::class);
  }

}
