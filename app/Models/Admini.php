<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admini extends Authenticatable
{
    use HasFactory;
   protected $table = 'adminis';

    protected $fillable = ['nombre', 'email', 'planta', 'password'];
}
