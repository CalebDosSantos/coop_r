<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HorarioPonto extends Model
{
  use HasFactory;

  private $tipo_ponto;
  private $id_catador;
  private $horario;
  private $data;
  private $entrada;
  private $descanso_entrada;
  private $descanso_saida;
  private $saida;
  private $uniforme_asseio;
  private $epi;
  private $descarga_caminhao;
  private $pts_bon_extra;
  private $observacoes;
  private $modalidade;
  private $cond_visitas;
  private $periodo_trabalhado;

}
