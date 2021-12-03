<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends \Illuminate\Foundation\Auth\User
{
    protected $fillable = ['nome', 'email', 'senha'];

    public function getAuthPassword()
    {
        return $this->senha;
    }
}
