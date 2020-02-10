<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Historico extends Model
{
    protected $table = 'historico';

    protected $primaryKey = 'id_historico';

    protected $fillable = [
        'fk_aluno',
        'fk_quem',
        'texto',
        'dataOcorrencia'
    ];

    protected $timestamps = false;

    public function aluno()
    {
        return $this->hasOne(Usuario::class, 'id_user', 'fk_alunuo');
    }

    public function author()
    {
        return $this->hasOne(Usuario::class, 'id_user', 'fk_quem');
    }
}
