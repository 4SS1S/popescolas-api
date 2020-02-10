<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livros extends Model
{
    protected $table = 'livros';

    protected $primaryKey = 'id_livro';

    protected $fillable = [
        'fk_turma',
        'fk_livro'
    ];

    protected $timestamps = false;

    public function turmas()
    {
        return $this->hasOne(Turma::class, 'id_turma', 'fk_turma');
    }

    public function modulo()
    {
        return $this->hasOne(Modulos::class, 'id_modulo', 'fk_livro');
    }
}
