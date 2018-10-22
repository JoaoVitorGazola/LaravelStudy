@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-header">Lista de Clientes
                        <a class="float-right" href="{{url('clientes/novo')}}">Novo cliente</a>
                    </div>
                    <div class="card-body">
                        @if(Session::has('mensagem_sucesso'))
                        <div class="alert alert-success">{{Session::get('mensagem_sucesso')}}</div>
                        @endif
                            <table class="table">
                            <th>Nome</th>
                            <th>Endereço</th>
                            <th>Numero</th>
                            <th>Ação</th>
                            <tbody>
                            @foreach($clientes as $cliente)
                                <tr>
                                    <td>{{$cliente->nome}}</td>
                                    <td>{{$cliente->endereco}}</td>
                                    <td>{{$cliente->numero}}</td>
                                   <td><button class="btn btn-sm float-left"><a href="clientes/{{$cliente->id}}/editar">Editar</a> </button>
                                   {{Form::open(['method'=> 'DELETE', 'url'=>'clientes/'.$cliente->id])}}
                                       <button type="submit" class="btn btn-sm float-right" style="color: red">Excluir</button>
                                       {{Form::close()}}
                                   </td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
