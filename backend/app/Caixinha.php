<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caixinha extends Model
{

    protected $table = 'caixinha';
    protected $primaryKey = 'id_caixinha';

    protected $fillable = [
        'fk_lancamento',
        'motivo'
    ];

    protected $timestamps = false;

}
