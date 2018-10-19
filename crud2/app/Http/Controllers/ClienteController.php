<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index(){
        return view('clientes.listagem');
    }
    public function novo(){
        $cliente = new Cliente();
        return view('clientes.fomulario', ['cliente'=>$cliente]);
    }
}
