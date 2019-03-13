<table class="table table-responsive" id="usuarios-table">
    <thead>
        <tr>
            <th>Id Empresa</th>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Nuip</th>
        <th>Entidad</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($usuarios as $usuario)
        <tr>
            <td>{!! $usuario->id_empresa !!}</td>
            <td>{!! $usuario->nombre !!}</td>
            <td>{!! $usuario->apellidos !!}</td>
            <td>{!! $usuario->nuip !!}</td>
            <td>{!! $usuario->entidad !!}</td>
            <td>
                {!! Form::open(['route' => ['usuarios.destroy', $usuario->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('usuarios.show', [$usuario->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('usuarios.edit', [$usuario->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>