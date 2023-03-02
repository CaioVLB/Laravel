<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index() {                   // CTRL + D seleciona as palavras iguais
        return view('firstView');
    }

    public function sair() {
        return redirect()->route('bemvindoRoute');
    }

    public function bemvindo() {
        $name = 'Caio Vitor';
        $codHtml = '<b style="color: red">Negrito</b>';

        $data = [
            'nome_apelido' => $name,
            'html' => $codHtml,
        ];

        $qualquerCoisa = [
            'ingredientes' => [
                'farinha',
                'ovos',
                'farinha 2',
                'ovos 2'
            ]
        ];

        return view('bemvindoView', $data, $qualquerCoisa);
    }

    public function users(Request $request) { // passagem de parâmetro no formato QUERYSTRING -> A query string, ou string de consulta, é uma parte da URL utilizada para a definição de parâmetros de consulta. Como especificado anteriormente, a query string pode ser utilizada em diversos contextos, mas o uso que considero mais relevante é em requisições do tipo GET que retornam uma lista de dados.

        $data = [
            'quantidade' => $request->qnt
        ];

        return view('usuarios', $data);
    }
}

/*
class SiteController extends Controller
{
    public function index() {
        return redirect()->route('Qualquer');
    }
}
*/
