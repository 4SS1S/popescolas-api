<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unidade extends Model
{
    protected $table = 'unidade';

    protected $primaryKey = 'id_unidade';

    protected $fillable = [
        'nome_unidade',
        'endereco',
        'franqueado'
    ];
}
