@extends('layouts.app')

@section('template_title')
    {{ $carrito->name ?? 'Show Carrito' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Carrito</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('carritos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Users Id:</strong>
                            {{ $carrito->users_id }}
                        </div>
                        <div class="form-group">
                            <strong>Productos Id:</strong>
                            {{ $carrito->productos_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
