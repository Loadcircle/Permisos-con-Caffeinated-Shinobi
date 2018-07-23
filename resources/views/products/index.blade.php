@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Productos</h1>
            @can('products.create')
            <a href="{{ route('products.create') }}" class="btn btn-primary float-right my-3">Crear</a>
            @endcan

            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th width="10px">ID</th>
                        <th>Nombre</th>
                        <th colspan="3">&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $pro)
                        <tr>
                            <th>{{$pro->id}}</th>
                            <th>{{$pro->name}}</th>
                            <th>
                            @can('products.show')
                            <a href="{{ route('products.show', $pro->id) }}" class="btn btn-sm btn-success">
                                Ver    
                            </a>
                            @endcan
                            @can('products.edit')
                            <a href="{{ route('products.edit', $pro->id) }}" class="btn btn-sm btn-warning">
                                Editar    
                            </a>
                            @endcan
                            @can('products.destroy')
                            {!! Form::open(['route' => ['products.destroy', $pro->id],
                            'method' => 'DELETE', 'style' => 'display: inline']) !!}
                            <button class="btn btn-sm btn-danger"> Eliminar </button>
                            {!! Form::close() !!}
                            @endcan
                            </th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $products->render() }}
        </div>
    </div>
</div>
@endsection