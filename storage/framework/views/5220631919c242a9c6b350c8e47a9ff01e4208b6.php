<?php $__env->startSection('customcss'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

  
     <div class="col-md-12">
     <?php echo $__env->make('common.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
              <!-- formulario general de create -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h2 class="box-title">Crear nuevo  Proyecto de Investigaciòn</h2>
                </div><!-- /.box-header -->

        <?php echo Form::open(['route' => 'proyectoInvestigacions.store']); ?>

            <div class="box-body">
             <?php echo $__env->make('proyectoInvestigacions.fields', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                         <!-- Submit Field -->
              <div class="form-group col-sm-12">
                  <?php echo Form::button('<span class="glyphicon glyphicon-floppy-disk" ></span> Guardar', ['type' => 'submit', 'class' => 'btn btn-success']); ?>

                  <a href="<?php echo route('proyectoInvestigacions.index'); ?>" class="btn btn-primary"><i class="fa fa-ban"></i> Cancelar</a>

                  <?php echo Form::close(); ?>


        <?php echo e(Form::open(array(
             'url'=>'upload/', 
             'method' => 'post',
             'enctype'=>'multipart/form-data'
        ) )); ?>

<br>
       
        <?php echo Form::file('archivo', ['class' => 'form-control']); ?>

        <br>
        <?php echo Form::button('<span class="glyphicon glyphicon-cloud-upload" ></span> Subir', ['type' => 'submit', 'class' => 'btn btn-success']); ?>


        <?php echo e(Form::close()); ?>

              </div>
            </div>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('customjs'); ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>