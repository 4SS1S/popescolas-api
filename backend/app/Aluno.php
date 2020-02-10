<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{

    protected $table = 'aluno';
    protected $primaryKey = 'id_aluno';

    protected $fillable = [
        'fk_user',
        'fk_turma'
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_user', 'fk_user');
    }

    public function turmas()
    {
        return $this->hasOne(Turma::class, 'id_turma','fk_turma');
    }

    public $timestamps = false;
}
