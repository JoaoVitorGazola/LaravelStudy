@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">Lista de compras</div>
                        <a class="float-right" href="{{url('clientes')}}">Lista de clientes</a>
                    </div>
                    <div class="card-body">
                        @if (Session::has('mensagem_sucesso'))
                            <div class="alert alert-success" role="alert">
                                {{ Session('mensagem_sucesso') }}
                            </div>
                        @endif
                            @if($compras->isEmpty())
                                <h2>Sem compras registradas</h2>
                            @else
                        <table class="table table-responsive-lg">
                            <th>Nome do cliente</th>
                            <th>Valor da compra</th>
                            <th>Item</th>
                            <th>Ação</th>
                            @foreach($compras as $compra)
                                <?php
                                $cliente = App\Cliente::findOrFail($compra->idCliente);
                                ?>
                                <tr>
                                    <td>{{$cliente->nome}}</td>
                                    <td>{{$compra->valorItem}}</td>
                                    <td>{{$compra->nomeItem}}</td>
                                    <td>
                                        <button class="btn btn-sm res m-1"><a style="color: red" data-toggle="modal" data-target="#confirmarExcluir" href="#">Excluir</a></button>
                                    </td>
                                </tr>
                                    <div class="modal fade" id="confirmarExcluir" tabindex="-1" role="alert">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content" style="background-color: lightgray">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="background-color: #333333; color: red">&times;</button>
                                                </div>
                                                <div class="modal-body">
                                                    <h2>
                                                        Tem certeza que deseja excluir essa compra?
                                                    </h2>
                                                    <div class="modal-footer">
                                                        <a type="button" class="btn btn-sm m-2" style="text-decoration: -webkit-link; color: blue" data-dismiss="modal">Não excluir</a>
                                                        <a type="button" class="btn btn-sm m-2" style="text-decoration: -webkit-link; color: red"  href="{{url('compras/deletar/'.$compra->id)}}">Excluir</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                            @endforeach
                            @endif
                        </table>

                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
