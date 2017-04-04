<?php $__env->startSection('content'); ?>

<div class="col-md-12">
<div class="box box-warning">
                <div class="box-header with-border">
                  <h2 class="box-title">Detalles academicos</h2>
                  <a href="<?php echo route('academicos.index'); ?>" class="btn btn-default pull-right"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Atrás</a>
                </div><!-- /.box-header -->

    <?php echo $__env->make('academicos.show_fields', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>