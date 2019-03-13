<table class="table table-responsive" id="entidads-table">
    <thead>
        <tr>
            <th>Nombre</th>
        <th>Telefono</th>
        <th>Direccion</th>
        <th>Tipo</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($entidads as $entidad)
        <tr>
            <td>{!! $entidad->nombre !!}</td>
            <td>{!! $entidad->telefono !!}</td>
            <td>{!! $entidad->direccion !!}</td>
            <td>{!! $entidad->tipo !!}</td>
            <td>
                {!! Form::open(['route' => ['entidads.destroy', $entidad->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('entidads.show', [$entidad->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('entidads.edit', [$entidad->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>