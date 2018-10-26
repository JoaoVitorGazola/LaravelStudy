@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">Insira informações da compra</div>
                        <a class="float-right" href="{{url('compras')}}">Lista de compras</a>
                    </div>
                    <div class="card-body">
                        @if (Session::has('mensagem_sucesso'))
                            <div class="alert alert-success" role="alert">
                                {{ Session('mensagem_sucesso') }}
                            </div>
                        @endif

                        {!! Form::open(['url'=>'compras/salvar']) !!}
                            {!! Form::label('idCliente', 'ID do Cliente') !!}
                            {!! Form::input('text', 'idCliente', $cliente->id, ['class'=>'form-control', 'readonly'=>'readonly']) !!}
                            {!! Form::label('nome', 'Nome do Produto') !!}
                        {!! Form::input('text', 'nomeItem', null, ['class'=>'form-control', 'autofocus', 'placeholder'=>'Nome do produto']) !!}
                        {!! Form::label('valor', 'Preço do produto') !!}
                        {!! Form::input('text', 'valorItem', null, ['class'=>'form-control', 'placeholder'=>'0000.00']) !!}
                        {!! Form::submit('Salvar', ['class'=>'btn btn-primary']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
