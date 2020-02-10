<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permissoes extends Model
{
    protected $table = 'permissoes';

    protected $primaryKey = 'id_permissao';

    protected $fillable = [
        'fk_usuario',
        'permissao'
    ];

    protected $timestamps = false;


    public function usuario()
    {
        return $this->hasOne(Usuario::class, 'id_user', 'fk_usuario');
    }
}
