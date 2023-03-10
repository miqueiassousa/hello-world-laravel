<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        /* Aqui eu poderia criar uma logia
    Verificar se um usuarios existe
    Buscar dados de um usuarios, etc....*/

        $nome = 'Miquéias';
        $idade = 100;

        $data = [
            'apelido_nome' => $nome,
            'apelido_idade' => $idade
        ];


        return view('bemvindo', $data);

    }

    public function sair() {

        return view('sair');
    }
}
