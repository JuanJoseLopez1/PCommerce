@extends('layouts.app')

@section('template_title')
    Producto
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Lista de productos') }}
                            </span>

                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

                                        <th>Foto</th>
                                        <th>Nombre</th>
                                        <th>Precio</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($productos as $producto)
                                        <tr>
                                            <td>{{ ++$i }}</td>

                                            <td>
                                                <img src="{{ asset('storage') . '/' . $producto->Foto }}" alt=""
                                                    width="100px">
                                            </td>
                                            <td>{{ $producto->Nombre }}</td>
                                            <td>{{ $producto->Precio }}</td>

                                            <td>
                                                <form action="{{ route('carritos.store') }}" role="form" method="POST">
                                                    @csrf
                                                    @if (auth()->check())
                                                        <input type="hidden" name="users_id" value={{ Auth::user()->id }}>
                                                        <input type="hidden" name="productos_id"
                                                            value={{ $producto->id }}>
                                                        <button type="submit" class="btn btn-sm btn-success"><i
                                                                class="fa fa-fw fa-trash"></i>Add to car</button>
                                                    @else
                                                        <a class="btn btn-sm btn-success" href="{{ route('login') }}"><i
                                                                class="fa fa-fw fa-edit"></i> Add to car</a>
                                                    @endif

                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $productos->links() !!}
            </div>
        </div>
    </div>
@endsection
