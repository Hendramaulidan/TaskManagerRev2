<?php $__env->startSection('content'); ?>
<?php if(session('status')): ?>
<?php echo e(session('status')); ?>

<?php endif; ?>
<div class="container"> 
		<h1 class="display-3">See Your Parent Task Here </h1>
		<table class="table"> 
			<tr>
				<th>	
					
				</th>
				<th> 
					Status
				</th>
				<th> 
					your email
				</th>
				<th> 
					created at
				</th>
				<th>
					<a href="" data-toggle="modal" data-target="#exampleModal"class="text-dark">New Parent Task&nbsp;<i class="fas fa-plus-circle"></i></a>
				</th>
			</tr>
      

    <?php $__currentLoopData = $use; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    
    		<tr> 

    				<td> 
          
    				</td>
    				<td> 
    						<?php echo e($item->status); ?>

    				</td>
    				<td> 
    						<?php echo e($item->email); ?>

    				</td>
    				<td> 
    						<?php echo e($item->created_at); ?>

    				</td>
    				<td> 
    					<a href="home/<?php echo e($item->id); ?>"><i class="fas fa-forward"></i></a>	
              &nbsp;&nbsp;&nbsp;
              <a href="#"data-toggle="modal" data-target="#modalku<?php echo e($item->id); ?>"class="text-warning"><i class="fas fa-edit"></i></a> &nbsp;&nbsp;&nbsp;
              <a href="/home/ParDel/<?php echo e($item->id); ?>"class="text-danger"><i class="fas fa-trash"></i></a> 
    				</td>
          
    		</tr>
  
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Parent Task</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/home/newParent"method="post"class="form-group"> 
        			<?php echo e(csrf_field()); ?>

        		Insert Here : 
        			<input type="text" name="parentTask"required="required"placeholder="insert parent task name"class="form-control mb-3">
              Insert Email For Parent Task :
        			<input type="email" name="email"required="required"placeholder="insert Email Here"class="form-control mb-3">
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
    <?php $__currentLoopData = $use; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="modal fade" id="modalku<?php echo e($item->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Parent Task</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/home/editParent/<?php echo e($item->id); ?>"method="post"class="form-group"> 
              <?php echo e(csrf_field()); ?>

            Insert Here : 
              <input type="text" name="status"required="required"class="form-control mb-3" value="<?php echo e($item->status); ?>">
              Edit For Parent Task :
              <input type="email" name="email"required="required"class="form-control mb-3"value="<?php echo e($item->email); ?>">
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
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<!-- Modal -->

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\TaskManager\resources\views/first.blade.php ENDPATH**/ ?>