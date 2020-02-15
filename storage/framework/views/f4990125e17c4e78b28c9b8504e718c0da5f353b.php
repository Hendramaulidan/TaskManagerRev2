<?php $__env->startSection('content'); ?>

<?php $__currentLoopData = $mencoba; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $men): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <div class="card border-success mb-3" style="max-width: 18rem;border: 2px solid;padding:1rem;">
            <div class="card-header text-success"> <?php echo e($men->status); ?></div>
            <div class="card-body text-success">
                <h5 class="card-title"><?php echo e($men->name_task); ?></h5>
                <p class="card-text"><?php echo e($men->kegiatan); ?>.</p>
                <p><?php echo e($men->updated_at); ?></p>
              
                <?php if(auth()->guard()->guest()): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                            </li>
                            <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal<?php echo e($men->id_task); ?>">
                    asda
                    </button>
                        <?php endif; ?>
                    
                
              </div>
            </div>
        
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__currentLoopData = $mencoba; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mew): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<div class="modal fade" id="modal<?php echo e($mew->id_task); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo e($mew->kegiatan); ?>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\TaskManager\resources\views/mencoba.blade.php ENDPATH**/ ?>