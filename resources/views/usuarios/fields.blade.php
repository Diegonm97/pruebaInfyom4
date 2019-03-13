<!-- Id Empresa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_empresa', 'Id Empresa:') !!}
    {!! Form::text('id_empresa', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Apellidos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('apellidos', 'Apellidos:') !!}
    {!! Form::text('apellidos', null, ['class' => 'form-control']) !!}
</div>

<!-- Nuip Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nuip', 'Nuip:') !!}
    {!! Form::text('nuip', null, ['class' => 'form-control']) !!}
</div>

<!-- Entidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('entidad', 'Entidad:') !!}
    {!! Form::text('entidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('usuarios.index') !!}" class="btn btn-default">Cancel</a>
</div>
