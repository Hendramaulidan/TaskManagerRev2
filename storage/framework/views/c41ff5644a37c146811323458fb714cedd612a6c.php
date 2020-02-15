<?php $__env->startSection('content'); ?>


	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<a href="#" data-toggle="modal" data-target="#staticBackdrop"><h3 class="text-center text-dark">Start Task + </h3></a>
				<?php $__currentLoopData = $start; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="card border-dark mb-2 text-dark">
						<div class="card-body">
							<div class="card-title"><?php echo e($item->created_at); ?></div>
							<?php echo e($item->kegiatan); ?>

							
							<div class="card-footer mb-1"><?php echo e(Auth::user()->name); ?></div>
							&nbsp;&nbsp;&nbsp;<a href="/home/delete/<?php echo e($item->id); ?>"class="text-danger"><h1 class="fas fa-trash"></h1></a>
								&nbsp;&nbsp;&nbsp;<a href="/home/toprocess/<?php echo e($item->id); ?>"><i class="fas fa-arrow-right"></i></a>
						</div>
					</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>
			<div class="col-md-4">
				<a href='#'data-toggle="modal"data-target="#ProcessTask"> <h3 class="text-center text-primary">Process Task + </h3></a>
				<?php $__currentLoopData = $Process; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="card border-primary mb-2 text-primary">
						<div class="card-body">
							<div class="card-title"><?php echo e($item->created_at); ?></div>
							<?php echo e($item->kegiatan); ?>

							
							<div class="card-footer mb-1"><?php echo e(Auth::user()->name); ?></div>
							&nbsp;&nbsp;&nbsp;<a href="/home/delete/<?php echo e($item->id); ?>"class="text-danger"><i class="fas fa-trash"></i>  
							</a>
							&nbsp;&nbsp;&nbsp;<a href="/home/tofinish/<?php echo e($item->id); ?>"><i class="fas fa-check-square text-success"></i></a>
						</div>
					</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>
				<div class="col-md-4">
				<a href='#'data-toggle="modal"data-target="#FinishTask"> <h3 class="text-center text-success">Finish Task + </h3></a>
				<?php $__currentLoopData = $Finish; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="card border-success mb-2  text-success">
						<div class="card-body">
							<div class="card-title"><?php echo e($item->created_at); ?></div>
							<?php echo e($item->kegiatan); ?>

							
							<div class="card-footer mb-1"><?php echo e(Auth::user()->name); ?></div>
&nbsp;&nbsp;&nbsp;<a href="/home/delete/<?php echo e($item->id); ?>" class="text-danger"><i class="fas fa-trash"></i>  </a>
						</div>
					</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>
			</div>
		</div>
	</div>



<!-- Modal start -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">New Start Task</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="\taskdef\newstart"class="form-group">
          <?php echo e(csrf_field()); ?>

        	Insert new activity : 
        	<textarea required="required"name="activity"class="form-control mb-2"></textarea>
        	<input type="submit" value="Submit"class="btn btn-dark">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



<!-- Modal Process -->
<div class="modal fade" id="ProcessTask" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">New Process Task</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="\taskdef\newprocess"class="form-group">
          <?php echo e(csrf_field()); ?>

        	Insert new activity : 
        	<textarea required="required"name="activity"class="form-control mb-2"></textarea>
        	<input type="submit" value="Submit"class="btn btn-dark">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



<!-- Modal Finish -->
<div class="modal fade" id="FinishTask" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">New Finish Task</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="\taskdef\newfinish"class="form-group">
          <?php echo e(csrf_field()); ?>

        	Insert new activity : 
        	<textarea required="required"name="activity"class="form-control mb-2"></textarea>
        	<input type="submit" value="Submit"class="btn btn-dark">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\TaskManager\resources\views/new.blade.php ENDPATH**/ ?>