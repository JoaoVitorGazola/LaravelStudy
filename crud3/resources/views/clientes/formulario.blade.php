@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Informe os dados do cliente
                        <a class="float-right" href="{{url('clientes')}}">Lista de Cliente</a>
                    </div>

                    <div class="card-body">
                        @if (session('mensagem_sucesso'))
                            <div class="alert alert-success" role="alert">
                                {{ session('mensagem_sucesso') }}
                            </div>
                        @endif
                        @if(Request::has('*/editar'))
                                {!! Form::model($clientes, ['method'=>'PATCH', 'url'=>'clientes/'.$clientes->id]) !!}
                            @else
                                {!! Form::open(['url'=>'clientes/salvar']) !!}
                            @endif
                        {!! Form::label('nome', 'Nome') !!}
                        {!! Form::input('text', 'nome', null, ['class'=>'form-control', 'autofocus', 'placeholder'=>'Nome']) !!}
                        {!! Form::label('endereco', 'Endereço') !!}
                        {!! Form::input('text', 'endereco', null, ['class'=>'form-control', 'placeholder'=>'Endereço']) !!}
                        {!! Form::label('numero', 'Numero') !!}
                        {!! Form::input('text', 'numero', null, ['class'=>'form-control', 'placeholder'=>'Numero']) !!}
                        {!! Form::submit('Salvar',['class'=>'btn btn-primary']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
