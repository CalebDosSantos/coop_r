<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrestadoresDeServico extends Model
{
  use HasFactory;

  private $nome;
  private $endereco;
  private $nome_responsavel;
  private $telefones;
  private $email;
  private $desaricao;
  private $observacoes;

}
