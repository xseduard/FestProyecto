<?php $__env->startSection('content'); ?>

 
        <section class="content">
            <div class="clearfix"></div>
               <?php echo $__env->make('flash::message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="clearfix"></div>

          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Pais</h3>
                   <a class="btn btn-primary pull-right" style="margin-top: 25px" href="<?php echo route('pais.create'); ?>"><i class="fa fa-plus"></i> Agregar</a>
                </div><!-- /.box-header -->
                <div class="box-body">

        <?php if($pais->isEmpty()): ?>
            <div class="well text-center">No se encontraron registros de Pais en esta consulta.</div>
        <?php else: ?>
            <?php echo $__env->make('pais.table', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <?php endif; ?>
         <?php echo $__env->make('common.paginate', ['records' => $pais], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                </div>
              </div>
            </div>
          </div>
        </section>
             


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>