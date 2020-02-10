<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agendamento;

class AgendamentoController extends Controller
{

    protected $agendamentos;

    public function __construct()
    {
        $this->agendamentos = new Agendamento;
    }

    public function index()
    {
        return $this->agendamentos->all();
    }
}
