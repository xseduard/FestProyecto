<!-- Titulo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codigo', 'Codigo:') !!}
    {!! Form::text('codigo', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('titulo', 'Titulo:') !!}
    {!! Form::text('titulo', null, ['class' => 'form-control']) !!}
</div>

<!-- Capitulo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('capitulo', 'Capitulo:') !!}
    {!! Form::select('capitulo', [
    	'RAE' => 'RAE',
    'CAPITULO I. PROBLEMA' 
    => 'CAPITULO I. PROBLEMA',
    'CAPÍTULO II: OBJETIVOS DE LA INVESTIGACIÓN' 
    => 'CAPÍTULO II: OBJETIVOS DE LA INVESTIGACIÓN',
    'CAPÍTULO III: JUSTIFICACIÓN DE LA INVESTIGACIÓN' 
    => 'CAPÍTULO III: JUSTIFICACIÓN DE LA INVESTIGACIÓN',
    'CAPÍTULO IV: MARCO REFERENCIAL' 
    => 'CAPÍTULO IV: MARCO REFERENCIAL',
    'CAPÍTULO V: MARCO TEÓRICO' 
    => 'CAPÍTULO V: MARCO TEÓRICO',
    'CAPÍTULO VI: DISEÑO METODOLÓGICO Ó DISEÑO TECNOLÓGICO' 
    => 'CAPÍTULO VI: DISEÑO METODOLÓGICO Ó DISEÑO TECNOLÓGICO',
    'CAPÍTULO VII: CONCLUSIONES Y RECOMENDACIONES' 
    => 'CAPÍTULO VII: CONCLUSIONES Y RECOMENDACIONES',
    'CAPÍTULO VIII: FUENTES DE INFORMACIÓN' 
    => 'CAPÍTULO VIII: FUENTES DE INFORMACIÓN'
    ], null, ['class' => 'form-control']) !!}
</div>
