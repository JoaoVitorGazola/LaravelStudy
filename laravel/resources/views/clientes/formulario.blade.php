@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"> Informe abaixo os dados do novo cliente
                        <a class="float-right" href="{{url('clientes')}}">Lista de clientes</a>
                    </div>
                    <div class="card-body">
                        Dados:

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
