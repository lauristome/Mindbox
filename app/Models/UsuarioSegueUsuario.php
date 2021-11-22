<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuarioSegueUsuario extends Model
{
    protected $fillable = ['id_usuario', 'id_seguido'];
    use HasFactory;
}
