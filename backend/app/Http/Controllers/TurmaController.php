<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Turma;


class TurmaController extends Controller
{
    protected $turma;

    public function __construct()
    {
        $this->turma = new Turma;
    }

    public function index()
    {
        return $this->turma->all();
    }

    public function get(int $id)
    {
        return $this->turma->findOrFail($id)->alunos;
    }

    public function alunos()
    {
        return $this->turma->alunos(162);
    }

    public function store(Request $data)
    {

    }

    public function update(Request $data, int $id)
    {

    }
}
