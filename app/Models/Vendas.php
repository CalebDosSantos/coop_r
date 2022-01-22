<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendas extends Model
{
    use HasFactory;

private $data;
private $ticket_de_venda;
private $data_coletada;
private $empresa_compradora;
private $tipo;
private $especificacao;
private $origem;
private $pesagem;
private $vlr_pago_kg;
private $peso_descontado ;
private $vlr_desc;
private $valor_total_item;
private $data_deposito;
private $subtotal;
private $observacoes;

}
