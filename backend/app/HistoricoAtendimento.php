<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HistoricoAtendimento extends Model
{
    protected $table = 'historico_atendimento';

    protected $primaryKey = 'id_historico';

    protected $fillable = [
        'fk_aten',
        'fk_aluno',
        'historico',
        'data'
    ];

    protected $timestamps = false;

    public function colaborador()
    {
        return $this->hasOne(Usuario::class, 'id_user', 'fk_aten');
    }

    public function aluno()
    {
        return $this->hasOne(Usuario::class, 'id_user', 'fk_aluno');
    }
}
