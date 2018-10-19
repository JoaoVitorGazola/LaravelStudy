<?php

namespace CRUD_básico\Http\Controllers;

use CRUD_básico\Cliente;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function index(){
        $clientes = Cliente::get();
        return view('clientes.lista', ['clientes'=>$clientes]);
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
    public function editar($id){

        $cliente = Cliente::findOrFail($id);
        return view('clientes.formulario', ['cliente'=>$cliente]);
    }
    public function atualizar($id, Request $request)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->update($request->all());
        \Session::flash('mensagem_sucesso', 'Cliente atualizado com sucesso!');
        return \Redirect::to('clientes/'.$cliente->id.'/editar');
    }
}
