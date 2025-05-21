<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    function add(){
        return view('add-cliente');
    }

    function store(Request $dados){
         dd($dados->all()); 
    }
}
