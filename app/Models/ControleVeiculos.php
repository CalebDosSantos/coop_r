<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ControleVeiculos extends Model
{
  use HasFactory;

private $data;
private $comdominio;
private $veiculo; //veiculos_id Veiculos
private $motorista;
private $hr_entrd_cond;
private $hr_saida_cond;
private $km_entrd_cond;
private $km_saida_cond;
private $coletor_1; //coletores_id Coletores 
private $coletor_2; //coletores_id Coletores
private $coletor_3; //coletores_id Coletores
private $ocorrencias;

}
