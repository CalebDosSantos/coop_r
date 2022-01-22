<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompradoresDeReciclado extends Model
{
  use HasFactory;

  private $razao_social;
  private $nome_fantasia;
  private $cnpj;
  private $endereco;
  private $especialidades;
  private $nome_responsavel;
  private $telefones;
  private $email;
  private $distancia_galpao;
  private $observacoes;

}
