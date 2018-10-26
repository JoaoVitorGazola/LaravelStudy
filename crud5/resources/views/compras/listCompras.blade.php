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
                                        {!! Form::open(['url'=>'compras/deletar/'.$compra->id,'method'=>'DELETE']) !!}
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
