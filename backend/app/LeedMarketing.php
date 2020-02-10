<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LeedMarketing extends Model
{
    protected $talbe = 'leed_marketing';

    protected $primaryKey = 'id_leed';

    protected $fillable = [
        'aluno',
        'responsavel',
        'fone_aluno',
        'fone_responsavel',
        'idade',
        'escola',
        'fk_unidade',
        'curso',
        'data',
        'hora',
        'fk_colaborador',
        'status'
    ];

    protected $timestamps = true;

    public function unidade()
    {
        return $this->hasOne(Unidade::class, 'id_unidade', 'fk_unidade');
    }

    public function colaborador()
    {
        return $this->hasOne(Usuario::class, 'id_user', 'fk_colaborador');
    }
}
