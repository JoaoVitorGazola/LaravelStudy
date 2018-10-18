<?php

namespace CRUD_básico\Http\Controllers;

use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function index(){
        return view('clientes.lista');
    }
    public function novo(){
        return view('clientes.formulario');
    }
}
