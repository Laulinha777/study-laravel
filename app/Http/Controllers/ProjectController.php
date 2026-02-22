<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
    $nome = 'Bruna';
    $idade = '20';

    return view('welcome',
    [
        'nome' => $nome,
        'idade' => $idade
    ]);
    }

    public function inicio(){
        return view('inicio');
    }
}
