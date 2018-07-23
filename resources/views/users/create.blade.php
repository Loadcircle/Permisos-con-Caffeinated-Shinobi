@extends('layouts.app')
@section('content')
<div class="container">
    {!! Form::open(['route' => ['products.store']]) !!}
        @include('products.partials.form')
    {!! Form::close() !!}
</div>

@endsection