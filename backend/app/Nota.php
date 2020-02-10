<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    protected $table = 'nota';

    protected $primaryKey = 'id_nota';

    protected $fillable = [
        'fk_aluno',
        'fk_curso',
        'fk_materia',
        'nota'
    ];

    public function aluno()
    {
        return $this->belongsTo(Usuario::class, 'id_user', 'fk_aluno');
    }

    public function curso()
    {
        return $this->hasOne(Curso::class, 'id_curso', 'fk_curso');
    }

    public function modulo()
    {
        return $this->hasOne(Modulos::class, 'id_modulo', 'fk_materia');
    }
}
