   
    {!! Form::hidden('proyecto_id', $id, ['class' => 'form-control']) !!}
    {!! Form::hidden('user_id', Auth::user()->id, ['class' => 'form-control']) !!}
    {!! Form::hidden('tipo', Auth::user()->role, ['class' => 'form-control']) !!}

<div class="form-group col-sm-6">
    {!! Form::label('estado_id', 'Cambiar Estado:') !!}
    {!! Form::select('estado_id', $selectores['estado'], $proyecto->estado_id, ['class' => 'form-control']) !!}
</div>
<!-- Nota Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('nota', 'Observaciones / Notas / Correcciones') !!}
    {!! Form::textarea('nota', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-4">
    {!! Form::label('tipo_test', 'Tipo de Usuario:') !!}
    {!! Form::text('tipo_test', Auth::user()->role, ['class' => 'form-control', 'disabled' => 'disabled']) !!}
</div>

<div class="form-group col-sm-4">
    {!! Form::label('ds', 'Resposable:') !!}
    {!! Form::text('ds', Auth::user()->nombres.' '.Auth::user()->apellidos. ' ID: '.Auth::user()->cedula, ['class' => 'form-control', 'disabled' => 'disabled']) !!}
</div>
