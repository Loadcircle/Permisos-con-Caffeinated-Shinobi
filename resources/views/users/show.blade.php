@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Vista de Usuario<h1>
        <p><strong>Nombre</strong> {{ $users->name}}</p>
        <p><strong>Email</strong> {{ $users->email}}</p>

</div>

@endsection