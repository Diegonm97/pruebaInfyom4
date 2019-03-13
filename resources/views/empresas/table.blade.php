<table class="table table-responsive" id="empresas-table">
    <thead>
        <tr>
            <th>Nitonuip</th>
        <th>Nombre</th>
        <th>Nombre Contacto</th>
        <th>Telefono Contacto</th>
        <th>Email Contacto</th>
        <th>Estado</th>
        <th>Direccion</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($empresas as $empresa)
        <tr>
            <td>{!! $empresa->nitonuip !!}</td>
            <td>{!! $empresa->nombre !!}</td>
            <td>{!! $empresa->nombre_contacto !!}</td>
            <td>{!! $empresa->telefono_contacto !!}</td>
            <td>{!! $empresa->email_contacto !!}</td>
            <td>{!! $empresa->estado !!}</td>
            <td>{!! $empresa->direccion !!}</td>
            <td>
                {!! Form::open(['route' => ['empresas.destroy', $empresa->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('empresas.show', [$empresa->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('empresas.edit', [$empresa->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>