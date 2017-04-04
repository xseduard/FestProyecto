<table class="table table-responsive" id="rRealizas-table">
    <thead>
        <th>Id Academico</th>
        <th>Id Proyecto Aula</th>
        <th>Periodo</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th>Deleted At</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($rRealizas as $rRealiza)
        <tr>
            <td>{!! $rRealiza->id_academico !!}</td>
            <td>{!! $rRealiza->id_proyecto_aula !!}</td>
            <td>{!! $rRealiza->periodo !!}</td>
            <td>{!! $rRealiza->created_at !!}</td>
            <td>{!! $rRealiza->updated_at !!}</td>
            <td>{!! $rRealiza->deleted_at !!}</td>
            <td>
                {!! Form::open(['route' => ['rRealizas.destroy', $rRealiza->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('rRealizas.show', [$rRealiza->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('rRealizas.edit', [$rRealiza->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>