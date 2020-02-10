<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
    protected $table = 'agendamento';

    protected $primaryKey = 'id_agendamento';

    protected $fillable = [
        'fk_colaborador',
        'fk_aluno',
        'data_do_agendamento',
        'data_de_agendamento',
        'assunto',
        'tipo'
    ];

    public $timestamps = false;
}
