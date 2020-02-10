<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Responsavel extends Model
{
    protected $table = 'responsavel';

    protected $primaryKey = 'id_responsavel';

    protected $fillable = [
        'fk_id',
        'fk_aluno',
        'fk_modo_pagamento'
    ];

    public function responsavel()
    {
        return $this->hasOne(Usuario::class, 'id_user', 'fk_id');
    }

    public function aluno()
    {
        return $this->hasOne(Usuario::class, 'id_user', 'fk_aluno');
    }
}
