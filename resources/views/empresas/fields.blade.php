<!-- Nitonuip Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nitonuip', 'Nitonuip:') !!}
    {!! Form::text('nitonuip', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombre Contacto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre_contacto', 'Nombre Contacto:') !!}
    {!! Form::text('nombre_contacto', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefono Contacto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefono_contacto', 'Telefono Contacto:') !!}
    {!! Form::text('telefono_contacto', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Contacto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email_contacto', 'Email Contacto:') !!}
    {!! Form::text('email_contacto', null, ['class' => 'form-control']) !!}
</div>

<!-- Estado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estado', 'Estado:') !!}
    {!! Form::text('estado', null, ['class' => 'form-control']) !!}
</div>

<!-- Direccion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('direccion', 'Direccion:') !!}
    {!! Form::text('direccion', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('empresas.index') !!}" class="btn btn-default">Cancel</a>
</div>
