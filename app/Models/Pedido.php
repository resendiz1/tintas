<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;


    protected $fillable = ['name', 'puesto','numero', 'negra', 'amarilla', 'pedido', 'azul', 'rosa', 'foto_tanques', 'entregada', 'user_id'];


    //Se define a que modelo pertenece esta tabla hija 
    public function user(){
        return $this->belongsTo(User::class);
    }

}
