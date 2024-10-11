<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{

    public function index() {

        $nome = 'end';
        $idade = 90;

        return view('bemvindo', [
            'apelido_nome' =>$nome,
            'idade' =>$idade
        ]);

    }

    public function exit() {
        return view('sair');
    }
}
