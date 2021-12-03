<?php

namespace App\Models;

class Usuario extends \Illuminate\Foundation\Auth\User
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

    public function seguindo()
    {
        return $this->belongsToMany(Usuario::class, 'usuario_segue_usuarios', 'id_usuario', 'id_seguido');
    }

    public function getAuthPassword()
    {
        return $this->senha;
    }

    protected $fillable = ['nome', 'email', 'senha', 'biografia'];
}
