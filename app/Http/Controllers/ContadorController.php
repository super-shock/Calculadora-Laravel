<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ContadorController extends Controller
{
    public function adicao()
    {
        return view ('adicao');
    }
    public function subtracao()
    {
        return view ('subtracao');
    }
    public function multiplicacao()
    {
        return view ('multiplicacao');
    }
    public function divisao()
    {
        return view ('divisao');
    }
    public function porcentagem()
    {
        return view ('porcentagem');
    }
}
