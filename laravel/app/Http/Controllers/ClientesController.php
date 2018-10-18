<?php

namespace CRUD_básico\Http\Controllers;

use CRUD_básico\Cliente;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function index(){
        return view('clientes.lista');
    }
    public function novo(){
        return view('clientes.formulario');
    }
    public function salvar(Request $request){

        $cliente = $cliente = new Cliente($request->all());
        $cliente->save();
        \Session::flash('mensagem_sucesso', 'Cliente adicionado com sucesso!');
        return \Redirect::to('clientes/novo');
    }
}
