<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chamada extends Model
{
    protected $table = 'chamada';
    protected $primaryKey = 'id_chamada';

    protected $fillable = [
        'fk_turma',
        'fk_aluno',
        'dia',
        'sitaucao',
        'fk_modulo'
    ];

    protected $timestamps = false;
}
