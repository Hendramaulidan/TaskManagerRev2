<?php if(session('status')): ?>
<?php echo e(session('status')); ?>                        
<?php endif; ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="card border-dark md-3">
        <div class="card-header">New Task</div>
        <div class="card-body">
        <form action="/home/actiontambah" class="form-group">
        <?php echo csrf_field(); ?>
        nama task : <input type="text"name="namaTask"class="form-control">
        
        <p> kegiatan : <textarea name="kegiatan"cols="30" rows="5"class="form-control"></textarea></p>
        
        <input type="hidden" name="status"value="mulai">
            <p><input type="submit" value="submit"class="btn btn-outline-dark"></p>
            
             </form>
   

        </div>
        </div>
    
        </div>
    </div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\TaskManager\resources\views/newTask.blade.php ENDPATH**/ ?>