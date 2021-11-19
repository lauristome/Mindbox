<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    public function publicacoes()
    {
        return $this->hasMany(Publicacao::class, 'id_usuario');
    }

    public function trofeus()
    {
        return $this->belongsToMany(Trofeu::class, 'trofeu_usuarios', 'id_usuario', 'id_trofeu');
    }

    public function curtidas()
    {
        return $this->belongsToMany(Publicacao::class, 'usuario_curte_publicacoes', 'id_usuario', 'id_publicacao');
    }

    protected $fillable = ['nome', 'email', 'senha', 'biografia'];
    use HasFactory;
}
