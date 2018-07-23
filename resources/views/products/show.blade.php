@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Vista de producto<h1>
        <p><strong>Nombre</strong> {{ $product->name}}</p>
        <p><strong>Description</strong> {{ $product->description}}</p>

</div>

@endsection