<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ideia extends Model
{
    protected $fillable = ['id_usuario', 'conteudo', 'qtd_curtidas'];
    use HasFactory;
}