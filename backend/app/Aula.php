<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
    protected $table = 'aula';

    protected $primaryKey = 'id_aula';

    protected $fillable = [
        'fk_turma',
        'fk_professor',
        'conteudo',
        'data',
        'status',
        'cod_aula'
    ];

    protected $timestamps = false;

    public function turmas()
    {
        return $this->hasOne(Turma::class, 'id_turma', 'fk_turma');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id_user', 'fk_professor');
    }
}
