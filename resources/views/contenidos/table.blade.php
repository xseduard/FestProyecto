<table class="table table-responsive" id="contenidos-table">
    <thead>
        <th>A1</th>
        <th>A2</th>
        <th>A3</th>
        <th>A4</th>
        <th>A5</th>
        <th>A6</th>
        <th>A7</th>
        <th>A8</th>
        <th>A9</th>
        <th>A10</th>
        <th>A11</th>
        <th>A12</th>
        <th>A13</th>
        <th>A14</th>
        <th>A15</th>
        <th>A16</th>
        <th>A17</th>
        <th>A18</th>
        <th>A19</th>
        <th>A20</th>
        <th>A21</th>
        <th>A22</th>
        <th>A23</th>
        <th>A24</th>
        <th>A25</th>
        <th>A26</th>
        <th>A27</th>
        <th>A28</th>
        <th>A29</th>
        <th>A30</th>
        <th colspan="3">Acciones</th>
    </thead>
    <tbody>
    @foreach($contenidos as $contenido)
        <tr>
            <td>{!! $contenido->a1 !!}</td>
            <td>{!! $contenido->a2 !!}</td>
            <td>{!! $contenido->a3 !!}</td>
            <td>{!! $contenido->a4 !!}</td>
            <td>{!! $contenido->a5 !!}</td>
            <td>{!! $contenido->a6 !!}</td>
            <td>{!! $contenido->a7 !!}</td>
            <td>{!! $contenido->a8 !!}</td>
            <td>{!! $contenido->a9 !!}</td>
            <td>{!! $contenido->a10 !!}</td>
            <td>{!! $contenido->a11 !!}</td>
            <td>{!! $contenido->a12 !!}</td>
            <td>{!! $contenido->a13 !!}</td>
            <td>{!! $contenido->a14 !!}</td>
            <td>{!! $contenido->a15 !!}</td>
            <td>{!! $contenido->a16 !!}</td>
            <td>{!! $contenido->a17 !!}</td>
            <td>{!! $contenido->a18 !!}</td>
            <td>{!! $contenido->a19 !!}</td>
            <td>{!! $contenido->a20 !!}</td>
            <td>{!! $contenido->a21 !!}</td>
            <td>{!! $contenido->a22 !!}</td>
            <td>{!! $contenido->a23 !!}</td>
            <td>{!! $contenido->a24 !!}</td>
            <td>{!! $contenido->a25 !!}</td>
            <td>{!! $contenido->a26 !!}</td>
            <td>{!! $contenido->a27 !!}</td>
            <td>{!! $contenido->a28 !!}</td>
            <td>{!! $contenido->a29 !!}</td>
            <td>{!! $contenido->a30 !!}</td>
            <td>
                {!! Form::open(['route' => ['contenidos.destroy', $contenido->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                <!--
                    <a href="{!! route('contenidos.show', [$contenido->id]) !!}" class='btn btn-default btn-sm'><i class="glyphicon glyphicon-eye-open"></i></a>
                -->
                    <a href="{!! route('contenidos.edit', [$contenido->id]) !!}" class='btn btn-default btn-sm'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm btn-eliminar']) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
