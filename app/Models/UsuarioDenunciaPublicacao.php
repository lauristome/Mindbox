<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuarioDenunciaPublicacao extends Model
{
    protected $fillable = ['id_usuario', 'id_publicacao', 'motivo'];
    use HasFactory;
}
