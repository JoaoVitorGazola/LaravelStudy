<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function index(){
            $clientes = Cliente::get();
          return view('clientes.lista_clientes', ['clientes'=>$clientes]);
    }
    public function novo(){
        return view('clientes.formulario');
    }
    public function salvar(Request $request){
        $cliente = new Cliente($request->all());
        $cliente->save();
        \Session::flash('mensagem_sucesso', 'Cliente adicionado com sucesso!');
        return \Redirect::to('clientes/novo');

    }
}
