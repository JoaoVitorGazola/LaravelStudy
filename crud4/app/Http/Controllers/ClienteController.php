<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index(){
        $clientes = Cliente::all();
        return view('clientes.list', ['clientes'=>$clientes]);
    }
    public function novo(){
        return view('clientes/form');
    }
    public function salvar(Request $request){
        $cliente = new Cliente($request->all());
        $cliente->save();
        \Session::flash('mensagem_sucesso', 'Cliente salvo com sucesso');
        return \Redirect::to('clientes/novo');
    }
    public function editar($id){
        $cliente = Cliente::findOrFail($id);
        return view('clientes.form', ['cliente'=>$cliente]);
    }
    public function atualizar($id, Request $request){
        $cliente = Cliente::findOrFail($id);
        $cliente->update($request->all());
        \Session::flash('mensagem_sucesso', 'Cliente atualizado com sucesso!');
        return \Redirect::to('clientes');
    }
    public function deletar($id){
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();
        \Session::flash('mensagem_sucesso', 'Cliente deletado com sucesso!');
        return \Redirect::to('clientes');
    }

}
