<?php $__env->startSection('content'); ?>
<div class="container py-2">
  <div class="list-group  float-right">
    <div class="list-group-item">
      <a href="/submission/create" class="btn btn-info" role="button">Make a Submission</a>
    </div>
  </div>
  <div class="list-group">
  <?php if(count($submissions) > 0): ?>
    <?php $__currentLoopData = $submissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $submission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php if($submission->user->name == Auth::user()->name): ?>
        <div class="bg-white border list-group-item">
          <div class="row bg-light">
            <h2 class="text-dark"><?php echo e($submission->title); ?></h2>
          </div>
          <p><?php echo e($submission->description); ?></p>
          <p class="text-success text-right"><?php echo e($submission->user->name); ?></p>
          <p class="text-left small">
            <a href="/submission/delete">Delete post</a>
          </p>
        </div>
      <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  <?php else: ?>
    <div class="alert alert-info">
      <p>You have not made any Submissions</p>
    </div>
  <?php endif; ?>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>