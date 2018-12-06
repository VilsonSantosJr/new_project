<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function login()
    {
        $titulo = "Sistema de Controle - Casa do Caminho";

        return view('login',[
            'titulo' => $titulo
        ]);
    }

    public function cadastrar()
    {
         echo "tela de cadastro";
    }
}
