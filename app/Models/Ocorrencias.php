<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ocorrencias extends Model
{
    use HasFactory;

private $autor_ocorrencia;
private $tipo_ocorrencia;
private $data;
private $hora;
private $data_ocorrencia;
private $hora_ocorrencia;
private $supervisor_registro;
private $descricao;

}
