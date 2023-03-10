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
            'apelido_idade' => $idade,
            'html' => '<b style="color=red">Negrito</b>'
        ];

        $bolo = [
            'ingredientes' => ['trazer' => 'farinha','ovos','leite','chocolate',],

            'ingredientes2' => ['farinha','ovos','leite','chocolate',],
            ];


        return view('bemvindo', $data, $bolo);

    }

    public function sair() {

        return view('sair');
    }

    /* Request: pegar dados enviados pelo usuário, seja via formulário ou diretamente na URL */
    public function users(Request $r) {

        $data = [
            'quantidade' => $r->qnt
        ];
        return view('usuarios', $data);
    }
}
