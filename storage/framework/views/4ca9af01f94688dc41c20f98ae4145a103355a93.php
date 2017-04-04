<?php $__env->startSection('customcss'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

  
     <div class="col-md-12">
     <?php echo $__env->make('common.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
              <!-- formulario general de create -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h2 class="box-title">Crear nuevo  Subarea</h2>
                </div><!-- /.box-header -->

        <?php echo Form::open(['route' => 'subareas.store']); ?>

            <div class="box-body">
             <?php echo $__env->make('subareas.fields', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                         <!-- Submit Field -->
              <div class="form-group col-sm-12">
                  <?php echo Form::button('<span class="glyphicon glyphicon-floppy-disk" ></span> Guardar', ['type' => 'submit', 'class' => 'btn btn-success']); ?>

                  <a href="<?php echo route('subareas.index'); ?>" class="btn btn-primary"><i class="fa fa-ban"></i> Cancelar</a>
              </div>
            </div>
        <?php echo Form::close(); ?>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('customjs'); ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>