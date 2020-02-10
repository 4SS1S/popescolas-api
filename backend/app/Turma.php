<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    protected $table = 'turma';

    protected $primaryKey = 'id_turma';

    protected $fillable = [
        'cod_turma',
        'fk_curso',
        'fk_professor',
        'dataDeInicio',
        'horaDeComeço',
        'horaDeFim',
        'status',
        'max_de_alunons',
        'fk_unidade'
    ];

    public function curso()
    {
        return $this->hasOne(Curso::class, 'id_curso', 'fk_curso');
    }

    public function alunos()
    {
        return $this->hasMany(Aluno::class, 'fk_turma', 'id_turma');
    }

    public function professores()
    {
        return $this->hasOne(Usuario::class,'id_user', 'fk_professor');
    }

    public function unidades()
    {
        return $this->hasOne(Unidade::class, 'id_unidade','fk_unidade');
    }
}
