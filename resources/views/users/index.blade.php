@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Usuario</h1>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th width="10px">ID</th>
                        <th>Nombre</th>
                        <th colspan="3">&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $us)
                        <tr>
                            <th>{{$us->id}}</th>
                            <th>{{$us->name}}</th>
                            <th>
                            @can('users.show')
                            <a href="{{ route('users.show', $us->id) }}" class="btn btn-sm btn-success">
                                Ver    
                            </a>
                            @endcan
                            @can('users.edit')
                            <a href="{{ route('users.edit', $us->id) }}" class="btn btn-sm btn-warning">
                                Editar    
                            </a>
                            @endcan
                            @can('users.destroy')
                            {!! Form::open(['route' => ['users.destroy', $us->id],
                            'method' => 'DELETE', 'style' => 'display: inline']) !!}
                            <button class="btn btn-sm btn-danger"> Eliminar </button>
                            {!! Form::close() !!}
                            @endcan
                            </th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $users->render() }}
        </div>
    </div>
</div>
@endsection