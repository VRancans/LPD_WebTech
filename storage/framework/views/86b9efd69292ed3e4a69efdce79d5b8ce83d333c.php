<?php $__env->startSection('content'); ?>
<div class="jumbotron">
  <h1 class="text-center">This is the submission page.</h1>
  <p class="text-center">Here you can view submissions and if you are registered, also make submissions</p>
</div>
<div class="container py-2">
  <?php if(!Auth::guest()): ?>
  <div class="list-group  float-right">
    <div class="list-group-item">
      <a href="/submission/create" class="btn btn-info" role="button">Make a Submission</a>
    </div>
    <div class="list-group-item">
      <a href="/submission/view" class="btn btn-info" role="button">My Submissions</a>
    </div>
  </div>
  <?php endif; ?>
  <div class="list-group">
    <?php if(count($submissions) > 0): ?>
      <?php $__currentLoopData = $submissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $submission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="bg-white border list-group-item">
            <div class="row bg-light">
              <h2 class="text-dark"><?php echo e($submission->title); ?></h2>
            </div>
            <p><?php echo e($submission->description); ?></p>
            <p class="text-success text-right"><?php echo e($submission->user->name); ?></p>
            <?php if(!Auth::guest() && Auth::user()->isAdmin()): ?>
              <p class="text-left small">
                <a href="/submission/delete">Delete post</a>
              </p>
            <?php endif; ?>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php else: ?>
      <div class="alert alert-info">
        <p>No submissions have been made</p>
      </div>
    <?php endif; ?>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>