<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $titulo->id !!}</p>
</div>

<!-- Titulo Field -->
<div class="form-group">
    {!! Form::label('titulo', 'Titulo:') !!}
    <p>{!! $titulo->titulo !!}</p>
</div>

<!-- Capitulo Field -->
<div class="form-group">
    {!! Form::label('capitulo', 'Capitulo:') !!}
    <p>{!! $titulo->capitulo !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $titulo->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $titulo->updated_at !!}</p>
</div>

