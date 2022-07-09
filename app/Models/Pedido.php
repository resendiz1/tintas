<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;


    protected $fillable = ['numero', 'negra', 'amarilla', 'pedido', 'azul', 'rosa', 'foto_tanques', 'entregada', 'id_usuario'];
}
