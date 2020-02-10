<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'post';

    protected $primaryKey = 'id_post';

    protected $fillable = [
        'fk_turma',
        'fk_usuario',
        'texto',
        'data'
    ];

    protected $timestamps = false;


    public function turmas()
    {
        return $this->hasOne(Turma::class, 'id_turma', 'fk_turma');
    }

    public function user()
    {
        return $this->hasOne(Usuario::class, 'id_user', 'fk_usuario');
    }
}
