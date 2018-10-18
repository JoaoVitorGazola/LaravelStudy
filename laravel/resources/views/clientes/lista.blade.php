@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Clientes
                    <a class="float-right" href="{{url('clientes/novo')}}">Novo Cliente</a>
                    </div>
                    <div class="card-body">
                        Listagem de clientes

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
