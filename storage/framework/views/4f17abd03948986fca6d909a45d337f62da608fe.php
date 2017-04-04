<!-- Pais Field -->
<div class="" style="margin-left:20px;">
<div style="margin-left: 1cm; margin-right: 1cm;" >
<!-- Titulo Field -->
<div class="form-group">
    <?php echo Form::label('titulo', 'Titulo:'); ?>

    <h3><?php echo $proyectoInvestigacion->titulo; ?></h3>
</div>

<div class="form-group">
<table class="table table-responsive" id="proyectos-table">
    <th>Pais</th>
    <th>Departamento</th>
    <tr>
        <td><?php echo $proyectoInvestigacion->Pais->pais; ?></td>
        <td><?php echo $proyectoInvestigacion->Nodo->nodo; ?></td>
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
            <td><?php echo $proyectoInvestigacion->Universidad->universidad; ?></td>
            <td><?php echo $proyectoInvestigacion->Universidad->telefonos; ?></td>
            <td><?php echo $proyectoInvestigacion->Universidad->rector; ?></td>
            <td><?php echo $proyectoInvestigacion->Universidad->tipo; ?></td>
            <td><?php echo $proyectoInvestigacion->Universidad->direccion; ?></td>
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
            <td><?php echo $proyectoInvestigacion->Semillero->nombre; ?></td>
            <td><?php echo $proyectoInvestigacion->Semillero->facultad; ?></td>
            <td><?php echo $proyectoInvestigacion->Semillero->grupo_de_investigacion; ?></td>
            <td><?php echo $proyectoInvestigacion->Semillero->fecha_de_creacion; ?></td>
                    
        </tr>

    </table>   
    <table class="table table-responsive">
        <th>Docente asesor</th>
        <th>Estudiante lider</th>
        <th>Programa</th>
        <tr>
            
            <td><?php echo $proyectoInvestigacion->Semillero->docente_asesor; ?></td>
            <td><?php echo $proyectoInvestigacion->Semillero->estudiante_lider; ?></td>
            <td><?php echo $proyectoInvestigacion->Semillero->programa; ?></td>
        
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
        <td><?php echo $proyectoInvestigacion->EStudiantes->nombre_completo; ?></td>
        <td><?php echo $proyectoInvestigacion->EStudiantes->identificacion; ?></td>
        <td><?php echo $proyectoInvestigacion->EStudiantes->correo; ?></td>
        <td><?php echo $proyectoInvestigacion->EStudiantes->telefono; ?></td>
    </tr>
</table>   
</div>

<!-- Categoria Field -->
<div class="form-group">
    <?php echo Form::label('categoria', 'Estado:'); ?>

    <p><?php if($proyectoInvestigacion->categoria==1): ?>
                Propuesta de Investigación
            <?php elseif($proyectoInvestigacion->categoria==2): ?>
                Investigación en Curso
            <?php else: ?>
                Investigación Terminada
            <?php endif; ?></p>
</div>



    
<!-- Introduccion Field -->
<div class="form-group">
    <?php echo Form::label('introduccion', 'Introduccion:'); ?>

    <p><?php echo $proyectoInvestigacion->introduccion; ?></p>
</div>

<!-- Problema Justificacion Field -->
<div class="form-group">
    <?php echo Form::label('problema_justificacion', 'Problema Justificacion:'); ?>

    <p><?php echo $proyectoInvestigacion->problema_justificacion; ?></p>
</div>

<!-- Objetivo General Field -->
<div class="form-group">
    <?php echo Form::label('objetivo_general', 'Objetivo General:'); ?>

    <p><?php echo $proyectoInvestigacion->objetivo_general; ?></p>
</div>

<!-- Objetivo Especifico Field -->
<div class="form-group">
    <?php echo Form::label('objetivo_especifico', 'Objetivo Especifico:'); ?>

    <p><?php echo $proyectoInvestigacion->objetivo_especifico; ?></p>
</div>

<!-- Referente Teorico Field -->
<div class="form-group">
    <?php echo Form::label('referente_teorico', 'Referente Teorico:'); ?>

    <p><?php echo $proyectoInvestigacion->referente_teorico; ?></p>
</div>

<!-- Metodologia Field -->
<div class="form-group">
    <?php echo Form::label('metodologia', 'Metodologia:'); ?>

    <p><?php echo $proyectoInvestigacion->metodologia; ?></p>
</div>

<!-- Conclusion Field -->
<div class="form-group">
    <?php echo Form::label('conclusion', 'Conclusion:'); ?>

    <p><?php echo $proyectoInvestigacion->conclusion; ?></p>
</div>

<!-- Bibliografia Field -->
<div class="form-group">
    <?php echo Form::label('bibliografia', 'Bibliografia:'); ?>

    <p><?php echo $proyectoInvestigacion->bibliografia; ?></p>
</div>

<!-- Created At Field -->
<div class="form-group">
    <?php echo Form::label('created_at', 'Fecha de creaciòn:'); ?>

    <p><?php echo $proyectoInvestigacion->created_at; ?></p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    <?php echo Form::label('updated_at', 'Fecha de ultima actualizaciòn:'); ?>

    <p><?php echo $proyectoInvestigacion->updated_at; ?></p>
</div>
</div>
<div style=""></div>
</div>

