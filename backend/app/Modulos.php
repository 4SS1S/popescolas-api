<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modulos extends Model
{
    protected $table = 'modulos';

    protected $primaryKey = 'id_modulo';

    protected $fillable = [
        'fk_curso',
        'nome_modulo',
        'horasAula'
    ];

    protected $timestamps = false;

    public function curso()
    {
        return $this->hasOne(Curso::class, 'id_curso', 'fk_curso');
    }
}
