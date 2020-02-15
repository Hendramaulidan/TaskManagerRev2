<?php $__env->startSection('content'); ?>
<div class="container-fluid">
	<table class="table table-striped table-light table-borderless table-hover">
		<thead class="thead-dark text-center">
			<tr>
				<th>Id Task</th>
				<th>Task Name</th>
				<th>My Activity</th>
				<th>Created At</th>
				<th></th>
			</tr>
		</thead>	
		<tbody>
		<?php $__currentLoopData = $history; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $histo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr class="table-light text-center">
				<th class="alert alert-danger"><?php echo e($histo->id); ?></th>
						<td ><?php echo e($histo->name_task); ?></td>
						<td><?php echo e($histo->kegiatan); ?></td>		
						<td class="alert alert-primary"><?php echo e($histo->created_at); ?></td>
						<td><a href="/home/history/<?php echo e($histo->id); ?>"class="text-danger"><i class="fas fa-trash"></i></a></td>
			</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			
		</tbody>
		
	</table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\TaskManager\resources\views/history.blade.php ENDPATH**/ ?>