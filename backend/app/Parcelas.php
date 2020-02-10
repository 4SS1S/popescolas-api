<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parcelas extends Model
{
    protected $table = 'parcelas';

    protected $primaryKey = 'id_pagamento';

    protected $fillable = [
        'fk_user',
        'em_aberto',
        'vendimento',
        'valor',
        'fk_forma_pagamento'
    ];

    protected $timestamps = false;

    public function user()
    {
        return $this->hasOne(Usuario::class, 'id_user', 'fk_user');
    }

    public function modo_pagamento()
    {
        return $this->hasOne(ModoDePagamento::class, 'id_modo', 'fk_forma_pagamento');
    }
}
