<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Satisfacao extends Model
{
    protected $table = 'satisfacao_2020';

    protected $primaryKey = 'id_satisfacao';

    protected $fillable = [
        'fk_unidade',
        'fk_curso',
        'nota'
    ];

    protected $timestamps = true;

    public function unidade()
    {
        return $this->hasOne(Unidade::class,'id_unidade', 'fk_unidade');
    }

    public function curso()
    {
        return $this->hasOne(Curso::class, 'id_curso', 'fk_curso');
    }
}
