<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aluno;
use App\Usuario;
use Illuminate\Support\Facades\DB;


class AlunoController extends Controller
{
    protected $aluno;

    public function __construct()
    {
        $this->aluno = new Aluno;
    }

    public function index()
    {
        return $this->aluno->all()->usuario;
    }

    public function find(int $id){
        $user = new Usuario;

        $profile = $this->aluno->findOrFail($id);
        $userLevel = $user->level;

        return [
            "usuario" => $user->find($profile->fk_user),
            "aluno" => $profile
        ];
    }

    public function unidade(int $unidade)
    {
        $beginStr = "SELECT * FROM aluno LEFT JOIN turma ON
            turma.id_turma = aluno.fk_turma WHERE fk_unidade = $unidade";

        return DB::select($beginStr, [1]);
    }
}
