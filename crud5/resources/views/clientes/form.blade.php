@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">Insira informações do cliente</div>
                        <a class="float-right" href="{{url('clientes')}}">Lista de clientes</a>
                    </div>
                    <div class="card-body">
                        @if (Session::has('mensagem_sucesso'))
                            <div class="alert alert-success" role="alert">
                                {{ Session('mensagem_sucesso') }}
                            </div>
                        @endif
                        @if(Request::is('*/editar'))
                            {!! Form::model($cliente, ['method'=>'PATCH', 'url'=>'clientes/editar/'.$cliente->id]) !!}
                            @else
                            {!! Form::open(['url'=>'clientes/novo/salvar']) !!}
                            @endif
                        {!! Form::label('nome', 'Nome') !!}
                        {!! Form::input('text', 'nome', null, ['class'=>'form-control', 'autofocus', 'placeholder'=>'Nome']) !!}
                        {!! Form::label('endereco', 'Endereço') !!}
                        {!! Form::input('text', 'endereco', null, ['class'=>'form-control', 'placeholder'=>'Endereço']) !!}
                        {!! Form::label('numero', 'Numero') !!}
                        {!! Form::input('text', 'numero', null, ['class'=>'form-control', 'placeholder'=>'Numero']) !!}
                        {!! Form::label('cpf', 'CPF do cliente') !!}
                        {!! Form::input('text', 'cpf', null, ['class'=>'form-control', 'placeholder'=>'000.000.000-00']) !!}
                        {!! Form::submit('Salvar', ['class'=>'btn btn-primary']) !!}
                            {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
