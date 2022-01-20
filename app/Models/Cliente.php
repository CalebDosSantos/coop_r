<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    private $nome;
    private $cnpj;
    private $codigo;
    private $endereco;
    private $nomeResponsavel;
    private $telefone;
    private $distanciaGalpao;
    private $distanciaTransbordo;
    private $distanciaRecicla;
    private $qtdCasas;
    private $rotaInterna;
    private $observacoes;

}
