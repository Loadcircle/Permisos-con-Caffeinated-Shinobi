<div class="form-group">
    {{ Form::label('name', 'Nombre del usuario') }}
    {{ Form::text('name', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('email', 'Email') }}
    {{ Form::text('email', null, ['class' => 'form-control']) }}
</div>
<h3>Lista de roles</h3>
<div class="form-group">
    <ul class="list-group">
        @foreach ($roles as $rol)
        <li>
            <label>
                {{Form::checkbox('roles[]', $rol->id, null) }}
                {{ $rol->name }}
                <em>({{$rol->description ?: 'N/A' }})</em>
            </label>    
        </li>            
        @endforeach
    </ul>
</div>
<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}    
</div>
