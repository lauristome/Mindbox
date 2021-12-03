<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publicacao extends Model
{

    public function comentarios()
    {
        return $this->hasMany(Publicacao::class, 'id_publicacao');
    }

    public function curtidas()
    {
        return $this->belongsToMany(Usuario::class, 'usuario_curte_publicacoes', 'id_publicacao', 'id_usuario');
    }

    public function denuncias()
    {
        return $this->belongsToMany(Usuario::class, 'usuario_denuncia_publicacaos', 'id_publicacao', 'id_usuario');
    }

    protected $fillable = ['id_usuario', 'id_publicacao', 'conteudo', 'ups', 'downs', 'qtd_comentarios'];
    use HasFactory;
}
