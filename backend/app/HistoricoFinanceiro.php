<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HistoricoFinanceiro extends Model
{
    protected $table = 'historico_financeiro';

    protected $primaryKey = 'id_historico';

    protected $fillable = [
        'fk_usuario',
        'fk_colaborador',
        'data',
        'historico'
    ];

    protected $timestamps = false;

    public function colaborador()
    {
        return $this->hasOne(Usuario::class, 'id_user', 'fk_colaborador');
    }

    public function usuarios()
    {
        return $this->hasOne(Usuario::class, 'id_user', 'fk_usuario');
    }
}
