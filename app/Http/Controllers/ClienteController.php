<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\ClienteModel;

class ClienteController extends Controller
{
    function add(){
        return view('add-cliente');
    }

    function store(Request $dados){
         dd($dados->all()); 
         $cliente = new ClienteModel();
         $cliente = $dados->all();
         $cliente->create();
    }
}
