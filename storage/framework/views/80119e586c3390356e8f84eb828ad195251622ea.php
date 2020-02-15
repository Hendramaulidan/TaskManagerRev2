<?php $__env->startSection('content'); ?>
<?php if(session('status')): ?>
<?php echo e(session('status')); ?>

<?php endif; ?>
<div class="container"> 
  <h2 class="display-4  mb-3 text-center"> 
      Parent Task <?php echo e($item->status); ?>

  </h2> 
  

  <div class="row justify-content-center">
  
  <div class="col-md-8">  
    
    <p><b><a  href="/home" class="text-danger btn btn-outline-dark"><i class="fas fa-arrow-left "></i>&nbsp;Back</a>&nbsp;&nbsp;&nbsp;&nbsp; 
      <a href="#" data-target="#exampleModal" data-toggle="modal"class="btn btn-outline-dark">New Task&nbsp;<i class="fas fa-plus-square"></i></a>
    </b></p>
  
<div class="accordion" id="accordionExample">
  <?php $__currentLoopData = $item->tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $itemku): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  
  <div class="card border-top-0 shadow">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-secondary" type="button" data-toggle="collapse" data-target="#collapseOne<?php echo e($itemku->id); ?>" aria-expanded="true" aria-controls="collapseOne">
            <?php echo e($itemku->name_task); ?>

        </button>
      </h2>
    </div>

    <div id="collapseOne<?php echo e($itemku->id); ?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <p> <?php echo e($itemku->kegiatan); ?></p>
          <p>Created at <?php echo e($itemku->created_at); ?></p>
          <p> Updated at <?php echo e($itemku->updated_at); ?></p>
      </div>
    </div>
  </div>

  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

</div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Task</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/home/newTask/<?php echo e($item->id); ?>"method="post"class="form-group"> 
              <?php echo e(csrf_field()); ?>

            Name:
              <input type="text" name="nameTask"required="required"placeholder="insert task name"class="form-control mb-3">
              Activity:
              <textarea class="form-control mb-3" name="Activity"placeholder="insert text"></textarea>
              <input type="hidden"value="<?php echo e($item->id); ?>" name="id_col">
              <input type="submit"class="btn btn-primary">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\TaskManager\resources\views/home.blade.php ENDPATH**/ ?>