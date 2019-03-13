<table class="table table-responsive" id="clientes-table">
    <thead>
        <tr>
            <th>Nombre</th>
        <th>Apellidos</th>
        <th>Nuip</th>
        <th>Tipo Cliente</th>
        <th>Direccion</th>
        <th>Salario</th>
        <th>Entidad</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($clientes as $cliente)
        <tr>
            <td>{!! $cliente->nombre !!}</td>
            <td>{!! $cliente->apellidos !!}</td>
            <td>{!! $cliente->nuip !!}</td>
            <td>{!! $cliente->tipo_cliente !!}</td>
            <td>{!! $cliente->direccion !!}</td>
            <td>{!! $cliente->salario !!}</td>
            <td>{!! $cliente->entidad !!}</td>
            <td>
                {!! Form::open(['route' => ['clientes.destroy', $cliente->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('clientes.show', [$cliente->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('clientes.edit', [$cliente->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>