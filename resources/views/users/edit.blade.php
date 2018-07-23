@extends('layouts.app')
@section('content')
<div class="container">
    {!! Form::model($users, ['route' => ['users.update', $users->id],
    'method' => 'PUT']) !!}
        @include('users.partials.form')
    {!! Form::close() !!}
</div>

@endsection