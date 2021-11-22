<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuarioCurtePublicacao extends Model
{
    protected $fillable = ['id_usuario', 'id_publicacao', 'up'];
    use HasFactory;
}
