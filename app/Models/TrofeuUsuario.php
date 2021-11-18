<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrofeuUsuario extends Model
{
    protected $fillable = ['id_usuario', 'id_trofeu'];
    use HasFactory;
}
