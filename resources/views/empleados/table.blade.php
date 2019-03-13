<table class="table table-responsive" id="empleados-table">
    <thead>
        <tr>
            <th>Nombre</th>
        <th>Apellidos</th>
        <th>Nuip</th>
        <th>Telefono</th>
        <th>Direccion</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($empleados as $empleado)
        <tr>
            <td>{!! $empleado->nombre !!}</td>
            <td>{!! $empleado->apellidos !!}</td>
            <td>{!! $empleado->nuip !!}</td>
            <td>{!! $empleado->telefono !!}</td>
            <td>{!! $empleado->direccion !!}</td>
            <td>
                {!! Form::open(['route' => ['empleados.destroy', $empleado->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('empleados.show', [$empleado->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('empleados.edit', [$empleado->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>