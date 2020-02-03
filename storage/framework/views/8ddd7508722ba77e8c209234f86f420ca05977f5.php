<?php $__env->startSection('content'); ?>
<?php if(session('status')): ?>
<?php echo e(session('status')); ?>                        
<?php endif; ?>
<div class="container">
<a href="home/newtask"><input type="submit" value="New Task +" class="btn btn-outline-dark"></a>
    <div class="row"style="padding : 2em;">
        <div class="col-md-4">
    <h3><div class="text-left text-dark">My New Task</div></h3>
    
        <?php $__currentLoopData = $task; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $use): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card border-dark mb-3" style="max-width: 18rem;">
            <div class="card-header text-dark"> Task Ku</div>
            <div class="card-body text-dark">
                <h5 class="card-title"><?php echo e($use->name_task); ?></h5>
                <p class="card-text"><?php echo e($use->kegiatan); ?>.</p>
                <p><?php echo e($use->waktu); ?></p>
                <p class="card alert alert-dark"><?php echo e($use->name_user); ?></p>
                <form action="/home/edit/<?php echo e($use->id_task); ?>">
                    <input type="hidden" name="status"value="In Progress">
                    <input type="submit" value="<?php echo e($use->status); ?>"class="btn btn-outline-dark">
                </form>
                <br><a href="/home/delete/<?php echo e($use->id_task); ?>"><input type="submit" value="Delete"class="btn btn-outline-danger"></a></br>
              </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
        <div class="col-md-4">
        <h3><div class="text-left text-primary">My Progress task</div></h3>
        <?php $__currentLoopData = $task2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $use): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card border-primary mb-3" style="max-width: 18rem;">
            <div class="card-header text-primary"> <?php echo e($use->status); ?></div>
            <div class="card-body text-primary">
                <h5 class="card-title"><?php echo e($use->name_task); ?></h5>
                <p class="card-text"><?php echo e($use->kegiatan); ?>.</p>
                <p><?php echo e($use->waktu); ?></p>
                <p class="card alert alert-primary"><?php echo e($use->name_user); ?></p>
                <form action="/home/finish/<?php echo e($use->id_task); ?>">
                    <input type="hidden" name="status"value="Finish">
                <input type="submit" value="Selesai"class="btn btn-outline-primary">
                </form>
                <br><a href="/home/delete/<?php echo e($use->id_task); ?>"><input type="submit" value="Delete"class="btn btn-outline-danger"></a></br>
              </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


        </div>
        <div class="col-md-4">
        <h3><div class="text-left text-success">Finish</div></h3>
        <?php $__currentLoopData = $task3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $use): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card border-success mb-3" style="max-width: 18rem;">
            <div class="card-header text-success"> <?php echo e($use->status); ?></div>
            <div class="card-body text-success">
                <h5 class="card-title"><?php echo e($use->name_task); ?></h5>
                <p class="card-text"><?php echo e($use->kegiatan); ?>.</p>
                <p><?php echo e($use->waktu); ?></p>
                <p class="card alert alert-success"><?php echo e($use->name_user); ?></p>
                <br><a href="/home/delete/<?php echo e($use->id_task); ?>"><input type="submit" value="Delete"class="btn btn-outline-danger"></a></br>
                
              </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
        
        </div>


    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\dashboardku\resources\views/home.blade.php ENDPATH**/ ?>