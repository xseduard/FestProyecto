<!-- Pais Field -->
<div class="" style="margin-left:20px;">
<div style="margin-left: 1cm; margin-right: 1cm;" >
<!-- Titulo Field -->
<div class="form-group">
    {!! Form::label('titulo', 'Titulo:') !!}
    <h3>{!! $proyectoInvestigacion->titulo !!}</h3>
</div>

<div class="form-group">
<table class="table table-responsive" id="proyectos-table">
    <th>Pais</th>
    <th>Departamento</th>
    <tr>
        <td>{!! $proyectoInvestigacion->Pais->pais !!}</td>
        <td>{!! $proyectoInvestigacion->Nodo->nodo !!}</td>
    </tr>
</table>

</div>


<!-- Universidad Field -->
<div class="form-group">
    <table class="table table-responsive">
        <th>Universidad</th>
            <th>Lineas de atencciòn</th>
            <th>Rector encargado</th>
            <th>Tipo</th>
            <th>Direcciòn</th>
        <tr>
            <td>{!! $proyectoInvestigacion->Universidad->universidad !!}</td>
            <td>{!! $proyectoInvestigacion->Universidad->telefonos !!}</td>
            <td>{!! $proyectoInvestigacion->Universidad->rector !!}</td>
            <td>{!! $proyectoInvestigacion->Universidad->tipo !!}</td>
            <td>{!! $proyectoInvestigacion->Universidad->direccion !!}</td>
        </tr>

    </table>   
</div>

<!-- Semillero Field -->
<div class="form-group">
    <div class="form-group">
    <table class="table table-responsive">
        <th>Semillero</th>
        <th>Facultad</th>
        <th>grupo de investigaciòn</th>
        <th>Fecha de creaciòn</th>
                <tr>
            <td>{!! $proyectoInvestigacion->Semillero->nombre !!}</td>
            <td>{!! $proyectoInvestigacion->Semillero->facultad !!}</td>
            <td>{!! $proyectoInvestigacion->Semillero->grupo_de_investigacion !!}</td>
            <td>{!! $proyectoInvestigacion->Semillero->fecha_de_creacion !!}</td>
                    
        </tr>

    </table>   
    <table class="table table-responsive">
        <th>Docente asesor</th>
        <th>Estudiante lider</th>
        <th>Programa</th>
        <tr>
            
            <td>{!! $proyectoInvestigacion->Semillero->docente_asesor !!}</td>
            <td>{!! $proyectoInvestigacion->Semillero->estudiante_lider !!}</td>
            <td>{!! $proyectoInvestigacion->Semillero->programa !!}</td>
        
        </tr>

    </table>   
    </div>
</div>

<!-- Ponente Field -->
<div class="form-group">
<table class="table table-responsive">
    <th>Nombre Completo</th>
    <th>Identificaciòn</th>
    <th>Correo</th>
    <th>Telèfono</th>
    <tr>
        <td>{!!$proyectoInvestigacion->EStudiantes->nombre_completo!!}</td>
        <td>{!!$proyectoInvestigacion->EStudiantes->identificacion!!}</td>
        <td>{!!$proyectoInvestigacion->EStudiantes->correo!!}</td>
        <td>{!!$proyectoInvestigacion->EStudiantes->telefono!!}</td>
    </tr>
</table>   
</div>

<!-- Categoria Field -->
<div class="form-group">
    {!! Form::label('categoria', 'Estado:') !!}
    <p>@if($proyectoInvestigacion->categoria==1)
                Propuesta de Investigación
            @elseif($proyectoInvestigacion->categoria==2)
                Investigación en Curso
            @else
                Investigación Terminada
            @endif</p>
</div>



    
<!-- Introduccion Field -->
<div class="form-group">
    {!! Form::label('introduccion', 'Introduccion:') !!}
    <p>{!! $proyectoInvestigacion->introduccion !!}</p>
</div>

<!-- Problema Justificacion Field -->
<div class="form-group">
    {!! Form::label('problema_justificacion', 'Problema Justificacion:') !!}
    <p>{!! $proyectoInvestigacion->problema_justificacion !!}</p>
</div>

<!-- Objetivo General Field -->
<div class="form-group">
    {!! Form::label('objetivo_general', 'Objetivo General:') !!}
    <p>{!! $proyectoInvestigacion->objetivo_general !!}</p>
</div>

<!-- Objetivo Especifico Field -->
<div class="form-group">
    {!! Form::label('objetivo_especifico', 'Objetivo Especifico:') !!}
    <p>{!! $proyectoInvestigacion->objetivo_especifico !!}</p>
</div>

<!-- Referente Teorico Field -->
<div class="form-group">
    {!! Form::label('referente_teorico', 'Referente Teorico:') !!}
    <p>{!! $proyectoInvestigacion->referente_teorico !!}</p>
</div>

<!-- Metodologia Field -->
<div class="form-group">
    {!! Form::label('metodologia', 'Metodologia:') !!}
    <p>{!! $proyectoInvestigacion->metodologia !!}</p>
</div>

<!-- Conclusion Field -->
<div class="form-group">
    {!! Form::label('conclusion', 'Conclusion:') !!}
    <p>{!! $proyectoInvestigacion->conclusion !!}</p>
</div>

<!-- Bibliografia Field -->
<div class="form-group">
    {!! Form::label('bibliografia', 'Bibliografia:') !!}
    <p>{!! $proyectoInvestigacion->bibliografia !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Fecha de creaciòn:') !!}
    <p>{!! $proyectoInvestigacion->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Fecha de ultima actualizaciòn:') !!}
    <p>{!! $proyectoInvestigacion->updated_at !!}</p>
</div>
</div>
<div style=""></div>
</div>

