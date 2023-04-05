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

    public function exercicio1() {

        $pessoas = [
            [
                'image' => 'https://i.pravatar.cc/150?img='.rand(0,50),
                'nome' => 'Alessandro',
                'birth' => '29/01/90',
                'idade' => 29],

              [
                'image' => 'https://i.pravatar.cc/150?img='.rand(0,50),
                'nome' => 'Bonieky',
                'birth' => '10/11/1933',
                'idade' => 90],

              [
                'image' => 'https://i.pravatar.cc/150?img='.rand(0,50),
                'nome' => 'Maria',
                'birth' => '01/01/2020',
                'idade' => 2]
        ];

        $dados['pessoas'] = $pessoas;

        return view('exercicio1', $dados);
    }

    public function exercicio2() {

        $numero = 1;


        $url = 'https://i.pravatar.cc/150?img='.$numero;


        $dados['url'] = $url;

        return view('exercicio2', $dados);
    }

    public function include() {
        return view('include');
    }

    public function layout() {
        return view('site');
    }

    public function layout2() {
        return view('pagina2');
    }

}
