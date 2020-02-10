<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Relatorios extends Model
{
    protected $table = 'relatorios';

    protected $primaryKey = 'id_relatorio';

    protected $fillable = [
        'fk_colaborador',
        'relatorio',
        'liberacao'
    ];

    protected $timestamps = false;


    public function colaborador()
    {
        return $this->hasOne(Usuario::class, 'id_user', 'fk_colaborador');
    }

}
