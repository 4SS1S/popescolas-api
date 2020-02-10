<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = 'curso';

    protected $primaryKey = 'id_curso';

    protected $fillable = ['nome_curso'];

    protected $timestamps = false;

    public function turmas()
    {
        return $this->hasMany(Turma::class, 'fk_curso','id_curso');
    }
}
