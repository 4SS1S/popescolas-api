<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caixa extends Model
{

    protected $table = 'caixa';
    protected $primaryKey = 'id_chamada';

    protected $fillable = [
        'data',
        'valor',
        'status',
        'fk_user_ab',
        'fk_user_fc',
        'fk_unidade'
    ];


    protected $timestamps = false;
}
