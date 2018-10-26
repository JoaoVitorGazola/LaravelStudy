<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Compra;
use Illuminate\Http\Request;

class ComprasController extends Controller
{
    public function index(){
        $compras = Compra::all();
        return view('compras.listCompras', ['compras'=>$compras]);
    }
    public function registrar($id){
        $cliente = Cliente::findOrFail($id);
        return view('compras.formCompras', ['cliente'=>$cliente]);
    }
    public function salvar(Request $request){
        $compra = new Compra($request->all());
        $compra->save();
        \Session::flash('mensagem_sucesso', 'Compra registrada com sucesso');
        return \Redirect::to('compras');
    }
    public function deletar($id){
        $compra = Compra::findOrFail($id);
        $compra->delete();
        \Session::flash('mensagem_sucesso', 'Compra deletado com sucesso!');
        return \Redirect::to('compras');
    }
}
