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
                                        <button class="btn btn-sm res m-1"><a href="{{url('compras/'.$cliente->id.'/registrar')}}">Registrar compra</a></button>
                                        <button class="btn btn-sm res m-1"><a href="{{url('clientes/'.$cliente->id.'/editar')}}">Editar</a></button>
                                        {!! Form::open(['url'=>'clientes/deletar/'.$cliente->id,'method'=>'DELETE']) !!}
                                        {!! Form::submit('Excluir', ['class'=>'btn btn-sm m-1', 'style'=>'color : red']) !!}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                                    @endforeach
                            </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
