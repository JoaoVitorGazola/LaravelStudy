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
                        <table class="table">
                            <thead>

                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
