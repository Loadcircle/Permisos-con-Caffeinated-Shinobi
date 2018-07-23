@extends('layouts.app')
@section('content')
<div class="container">
    {!! Form::open(['route' => ['roles.store']]) !!}
        @include('roles.partials.form')
    {!! Form::close() !!}
</div>

@endsection