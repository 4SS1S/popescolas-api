<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Niveis extends Model
{
    protected $table = 'niveis';

    protected $primaryKey = 'id_nivel';

    protected $fillable = [
        'funcao'
    ];

    protected $timestamps = false;

    public function users()
    {
        return $this->belongsTo(Usuario::class, 'level', 'id_nivel');
    }
}
