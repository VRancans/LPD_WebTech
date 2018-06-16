<?php $__env->startSection('content'); ?>
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <?php echo Form::open(['url' => 'post/submit', 'files' => true]); ?>

          <div class="form-group">
            <?php echo e(Form::label('title', 'Title')); ?>

            <?php echo e(Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Enter title'])); ?>

          </div>
          <div class="form-group">
            <?php echo e(Form::label('description', 'Description')); ?>

            <?php echo e(Form::textarea('description', '', ['class' => 'form-control', 'placeholder' => 'Enter description'])); ?>

          </div>
          <div class="form-group">
            <?php echo e(Form::label('image', 'Add photo',['class' => 'control-label'])); ?>

            <?php echo e(Form::file('image')); ?>

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