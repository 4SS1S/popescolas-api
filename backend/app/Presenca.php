<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Presenca extends Model
{
    protected $table = 'presenca';

    protected $primaryKey = 'fk_turma';

    protected $fillable = [
        'fk_aula',
        'fk_alunoID',
        'presenca'
    ];

    protected $timestamps = false;

    public function aula()
    {
        return $this->hasOne(Aula::class, 'id_aula', 'fk_aula');
    }

    public function aluno()
    {
        return $this->hasOne(Aluno::class, 'id_aluno', 'fk_alunoID');
    }
}
