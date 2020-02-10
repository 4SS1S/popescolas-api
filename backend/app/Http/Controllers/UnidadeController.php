<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Unidade;

class UnidadeController extends Controller
{
    protected $unidade;

    public function __construct()
    {
        $this->unidade = new Unidade;
    }

    public function index()
    {
        return $this->unidade->all();
    }
}
