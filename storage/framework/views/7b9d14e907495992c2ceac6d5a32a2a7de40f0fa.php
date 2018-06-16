<?php $__env->startSection('content'); ?>
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <?php echo Form::open(['url' => 'submission/modify']); ?>

          <div class="form-group">
            <?php echo e(Form::label('title', 'Title')); ?>

            <?php echo e(Form::text('title', 'The main titlae and its context', ['class' => 'form-control', ])); ?>

          </div>
          <div class="form-group">
            <?php echo e(Form::label('description', 'Description')); ?>

            <?php echo e(Form::textarea('description', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim. eiusmod tempor incididunt ut labore e...

', ['class' => 'form-control'])); ?>

          </div>
          <div>
            <?php echo e(Form::submit('Make The Post', ['class' => 'btn btn-primary'])); ?>

          </div>
          <?php echo Form::close(); ?>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>