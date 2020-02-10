<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class UsuarioController extends Controller
{
    protected $usuario;

    public function __construct()
    {
        $this->usuario = new Usuario;
    }

    public function index()
    {
        return $this->usuario->all();
    }
}
