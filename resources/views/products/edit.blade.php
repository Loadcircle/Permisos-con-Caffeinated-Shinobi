@extends('layouts.app')
@section('content')
<div class="container">
    {!! Form::model($product, ['route' => ['products.update', $product->id],
    'methods' => 'GET']) !!}
        @include('products.partials.form')
    {!! Form::close() !!}
</div>

@endsection