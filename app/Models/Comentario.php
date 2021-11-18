<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    protected $fillable = ['id_usuario', 'id_ideia', 'comentario', 'qtd_curtidas'];
    use HasFactory;
}
