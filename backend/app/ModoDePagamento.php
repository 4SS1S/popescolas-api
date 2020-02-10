<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModoDePagamento extends Model
{
    protected $table = 'modo_de_pagamento';

    protected $primaryKey = 'id_modo';

    protected $fillable = ['forma'];

    protected $timestamps = false;

    public function lancamentos()
    {
        return $this->belongsToMany(Lancamentos::class, 'fk_forma', 'id_modo');
    }


}
