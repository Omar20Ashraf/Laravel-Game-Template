<?php $__env->startSection('content'); ?>
	
<h3>Add Hero Things</h3>
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<?php echo Form::open(['route'=>'recentreview.store','method'=>'Post','files'=>true]); ?>


			<div class="form-group">
				<?php echo e(Form::label('title','Title')); ?>

				<?php echo e(Form::text('title',null,array('class'=>'form-control'))); ?>

			</div>

			<div class="form-group">
				<?php echo e(Form::label('par','Par')); ?>

				<?php echo e(Form::text('par',null,array('class'=>'form-control'))); ?>

			</div>

			<div class="form-group">
				<?php echo e(Form::label('evalution','Evalution')); ?>

				<?php echo e(Form::text('evalution',null,array('class'=>'form-control'))); ?>

			</div>

			<div class="form-group">
				<?php echo e(Form::label('evalution_color','Evalution Color')); ?>

				<?php echo e(Form::text('evalution_color',null,array('class'=>'form-control'))); ?>

			</div>

			<div class="form-group">
				<?php echo e(Form::label('image','Image')); ?>

				<?php echo e(Form::file('image',['class'=>'form-control'])); ?>

			</div>

			<?php echo e(Form::submit('Create',array('class'=>'btn btn-default'))); ?>	

		<?php echo Form::close(); ?>


	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>