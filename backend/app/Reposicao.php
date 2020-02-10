<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reposicao extends Model
{
    protected $table = 'reposicao';

    protected $primaryKey = 'id_reposicao';

    protected $fillable = [
        'fk_aluno',
        'fk_aula',
        'status',
        'fk_curso',
        'dataDeAula',
        'horario'
    ];

    public function aluno()
    {
        return $this->hasOne(Usuario::class, 'id_user', 'fk_aluno');
    }

    public function curso()
    {
        return $this->hasOne(Curso::class, 'id_curso', 'fk_curso');
    }

}
