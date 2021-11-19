<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario_curte_Publicacao extends Model
{
    protected $fillable = ['id_usuario', "id_publicacao"];
    use HasFactory;
}
