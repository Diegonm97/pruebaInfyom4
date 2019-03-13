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

<!-- Tipo Cliente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_cliente', 'Tipo Cliente:') !!}
    {!! Form::text('tipo_cliente', null, ['class' => 'form-control']) !!}
</div>

<!-- Direccion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('direccion', 'Direccion:') !!}
    {!! Form::text('direccion', null, ['class' => 'form-control']) !!}
</div>

<!-- Salario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('salario', 'Salario:') !!}
    {!! Form::text('salario', null, ['class' => 'form-control']) !!}
</div>




<!-- Entidad Field -->



<div class="form-group col-sm-6">

<label for="eps">EPS.</label>
<select class="form-control" id="eps" required="required" name="eps">
<option value=""></option>
	@foreach ($epss as $eps)

	<option value="{{$eps->id}}">{{$eps->nombre}}</option>

@endforeach
</select>


</div>
<div class="form-group col-sm-6">

<label for="arl">ARL.</label>
<select class="form-control" id="arl" required="required" name="arl">
<option value=""></option>
    @foreach ($arls as $arl)

	<option value="{{$arl->id}}">{{$arl->nombre}}</option>

@endforeach
</select>


</div>
<div class="form-group col-sm-6">

<label for="afp">AFP.</label>
<select class="form-control" id="afp" required="required" name="afp">
<option value=""></option>
	@foreach ($afps as $afp)

	<option value="{{$afp->id}}">{{$afp->nombre}}</option>

@endforeach
</select>


</div>

<div class="form-group col-sm-6">

<label for="cajacomp">Caja Compensacion.</label>
<select class="form-control" id="cajacomp" required="required" name="cajacomp">
<option value=""></option>
	@foreach ($cajacomps as $cajacomp)

	<option value="{{$cajacomp->id}}">{{$cajacomp->nombre}}</option>

@endforeach
</select>


</div>






<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('clientes.index') !!}" class="btn btn-default">Cancel</a>
</div>


