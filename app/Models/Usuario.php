<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    public function ideias()
    {
        return $this->hasMany(Ideia::class, 'id_usuario');
    }

    public function trofeus()
    {
        return $this->belongsToMany(Trofeu::class, 'trofeu_usuarios', 'id_usuario', 'id_trofeu');
    }

    public function comentarios()
    {
        return $this->belongsToMany(Ideia::class, 'comentarios', 'id_usuario', 'id_ideia');
    }

    protected $fillable = ['nome', 'email', 'senha', 'biografia'];
    use HasFactory;
}
