<?php $__env->startSection('content'); ?>


<div class="accordion" id="accordionExample">

    <?php $__currentLoopData = $kolom; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kol): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne<?php echo e($kol->id); ?>" aria-expanded="true" aria-controls="collapseOne<?php echo e($kol->id); ?>">
          <?php echo e($kol->status); ?>

        </button>
      </h2>
    </div>
    <div id="collapseOne<?php echo e($kol->id); ?>" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis ducimus distinctio reiciendis? Quia possimus blanditiis ipsa est repellat quaerat soluta quisquam inventore. Deleniti repellat repellendus iusto possimus non error enim.
      </div>
    </div>
  </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\TaskManager\resources\views/column/task.blade.php ENDPATH**/ ?>