<?php $__env->startSection('content'); ?>

    <div class="container">

        <h1 class="pull-left">Unopruebas</h1>
        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="<?php echo route('unopruebas.create'); ?>">Agregar</a>

        <div class="clearfix"></div>

        <?php echo $__env->make('flash::message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->make('common.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="clearfix"></div>

        <?php if($unopruebas->isEmpty()): ?>
            <div class="well text-center">No se encontraron registros de Unopruebas en esta consulta.</div>
        <?php else: ?>
            <?php echo $__env->make('unopruebas.table', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php endif; ?>
        <?php echo $__env->make('common.paginate', ['records' => $unopruebas], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>  
              
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>