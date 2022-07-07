<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;


    protected $fllable = ['numero', 'negra', 'amarilla', 'azul', 'rosa', 'foto_tanuqes', 'entregada', 'id_usuario'];
}
