<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuario';

    protected $primaryKey = 'id_user';

    protected $fillable = [
        'username',
        'password',
        'nome',
        'sobrenome',
        'level',
        'pai',
        'mae',
        'email',
        'dataDeNascimento',
        'cpf',
        'rg',
        'telefone1',
        'telefone2',
        'endereco',
        'endereco_cidade',
        'endereco_estado',
        'endereco_numero',
        'endereco_bairro',
        'cep',
        'fk_unidade',
        'profile_pic',
        'estado_civil',
        'sexo'
    ];

    protected $hidden = ['password'];

    public function aluno()
    {
        return $this->hasMany(Aluno::class,'fk_user');
    }

    public function unidades()
    {
        return $this->hasOne(Unidade::class, 'id_unidade','fk_unidade');
    }
}
