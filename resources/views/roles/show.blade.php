@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Vista de Roles<h1>
        <p><strong>Nombre</strong> {{ $roles->name}}</p>
        <p><strong>Slug</strong> {{ $roles->slug}}</p>
        <p><strong>Description</strong> {{ $roles->description}}</p>

</div>

@endsection