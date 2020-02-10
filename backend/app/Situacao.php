<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Situacao extends Model
{
    protected $table = 'situacao';

    protected $primaryKey = 'id_situacao';

    protected $fillable = [
        'fk_user',
        'fk_turma',
        'status',
        'updated'
    ];

    public function user()
    {
        return $this->hasOne(Usuario::class, 'id_user', 'fk_user');
    }

    public function turma()
    {
        return $this->hasOne(Turma::class, 'id_turma', 'fk_turma');
    }
}
