<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiaDaAula extends Model
{
    protected $table = 'dia_da_aula';

    protected $primaryKey = 'id_dia';

    protected $fillable = [
        'fk_turma',
        'dia_da_semana'
    ];

    protected $timestamps = false;

    public function user()
    {
        return $this->hasOne(Turma::class, 'id_turma', 'fk_turma');
    }
}
