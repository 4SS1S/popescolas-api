<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComunicadosTurma extends Model
{
    protected $table = 'comunicados_turma';

    protected $primaryKey = 'id_comunicados_turma';

    protected $fillable = [
        'fk_turma',
        'fk_usuario',
        'text',
        'comunicadoData'
    ];

    protected $timestamps = false;

    public function turmas()
    {
        return $this->hasOne(Turma::class, 'id_turma', 'fk_turma');
    }

    public function user()
    {
        return $this->hasOne(Usuario::class, 'id_user', 'fk_usuario');
    }
}
