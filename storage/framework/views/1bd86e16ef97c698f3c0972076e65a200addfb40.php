<?php $__env->startSection('content'); ?>
    <div class="col-md-12">
     <?php echo $__env->make('common.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
              <!-- general form elements -->
              <div class="box box-success">
                <div class="box-header with-border">
                  <h2 class="box-title">Edit Doncencia</h2>
                </div><!-- /.box-header -->

        <?php echo Form::model($doncencia, ['route' => ['doncencias.update', $doncencia->id], 'method' => 'patch']); ?>

            <div class="box-body">
            <?php echo $__env->make('doncencias.fields', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <!-- Submit Field -->
              <div class="form-group col-sm-12">
                  <?php echo Form::button('<span class="glyphicon glyphicon-floppy-disk" ></span> Actualizar', ['type' => 'submit', 'class' => 'btn btn-success']); ?>

                  <a href="<?php echo route('doncencias.index'); ?>" class="btn btn-primary"><i class="fa fa-ban"></i> Cancelar</a>
              </div>

            </div>
        <?php echo Form::close(); ?>

    </div>
</div>
<?php $__env->stopSection(); ?>


 
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>