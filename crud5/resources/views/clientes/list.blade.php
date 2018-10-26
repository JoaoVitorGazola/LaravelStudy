@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                    <div class="float-left">Lista de clientes</div>
                    <a class="float-right" href="{{url('clientes/novo')}}">Novo cliente</a>
                    </div>
                        <div class="card-body">
                        @if (Session::has('mensagem_sucesso'))
                            <div class="alert alert-success" role="alert">
                                {{ Session('mensagem_sucesso') }}
                            </div>
                        @endif
                            <table class="table table-responsive-lg">
                                <th>Nome</th>
                                <th>Endereço</th>
                                <th>Numero</th>
                                <th>CPF</th>
                                <th>Ação</th>
                                @foreach($clientes as $cliente)
                                <tr>
                                    <td>{{$cliente->nome}}</td>
                                    <td>{{$cliente->endereco}}</td>
                                    <td>{{$cliente->numero}}</td>
                                    <td>{{$cliente->cpf}}</td>
                                    <td>
                                        <button class="btn btn-sm res m-1"><a style="color: green" href="{{url('compras/'.$cliente->id.'/registrar')}}">Registrar compra</a></button>
                                        <button class="btn btn-sm res m-1"><a style="color: blue" href="{{url('clientes/'.$cliente->id.'/editar')}}">Editar</a></button>
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
                                                        Tem certeza que deseja excluir o cliente {{$cliente->nome}}?
                                                    </h2>
                                                    <p>
                                                        obs: Todas as compras desse cliente serão excluidas.
                                                    </p>
                                                    <div class="modal-footer">
                                                        <a type="button" class="btn btn-sm m-2" style="text-decoration: -webkit-link; color: blue" data-dismiss="modal">Não excluir</a>
                                                        <a type="button" class="btn btn-sm m-2" style="text-decoration: -webkit-link; color: red"  href="{{url('clientes/deletar/'.$cliente->id)}}">Excluir</a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                @endforeach
                            </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
