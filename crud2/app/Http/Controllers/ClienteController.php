<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index(){
        $clientes = Cliente::get();
        return view('clientes.listagem', ['clientes'=>$clientes]);
    }
    public function novo(){

        return view('clientes.fomulario');
    }
    public function salvar(Request $request){
        $cliente = $cliente = new Cliente($request->all());
        $cliente->save();
        \Session::flash('mensagem_sucesso', 'Cliente adicionado com sucesso!');
        return \Redirect::to('clientes/novo');
    }
    public function editar($id){
        $cliente = Cliente::findOrFail($id);
        return view('clientes.fomulario', ['cliente'=>$cliente]);
    }
    public function atualizar($id, Request $request){
        $cliente = Cliente::findOrFail($id);
        $cliente->update($request->all());
        \Session::flash('mensagem_sucesso', 'Cliente atualizado com sucesso!');
        return \Redirect::to('clientes/'.$cliente->id.'/editar');
    }
    public function delete($id){
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();
        \Session::flash('mensagem_sucesso', 'Cliente deletado com sucesso!');
        return \Redirect::to('clientes');
    }
}
