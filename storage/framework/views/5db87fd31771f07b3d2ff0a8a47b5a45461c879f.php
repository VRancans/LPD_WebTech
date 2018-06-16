<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link rel="stylesheet" href="/css/app.css">
    <title>Learn and Freerun</title>
</head>
<body>
  <?php echo $__env->make('inc.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-2 sidebar">
        <?php echo $__env->make('inc.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      </div>
      <div class="col-md-8 content">
        <?php if(count($errors) >0): ?>
          <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="alert alert-danger">
              <?php echo e($error); ?>

            </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>

        <?php if(session('post_success')): ?>
          <div class="alert alert-success">
            <?php echo e(session('post_success')); ?>

          </div>
        <?php endif; ?>
        <?php if(session('submission_success')): ?>
          <div class="alert alert-success">
            <?php echo e(session('submission_success')); ?>

          </div>
        <?php endif; ?>

        <?php echo $__env->yieldContent('content'); ?>
      </div>
    </div>
</div>
</body>
</html>
