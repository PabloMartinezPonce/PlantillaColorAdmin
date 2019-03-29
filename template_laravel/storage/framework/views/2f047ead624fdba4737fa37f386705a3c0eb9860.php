<?php $__env->startSection('title', '404 Error Page'); ?>

<?php $__env->startSection('content'); ?>
	<!-- begin error -->
	<div class="error">
		<div class="error-code m-b-10">404</div>
		<div class="error-content">
			<div class="error-message">We couldn't find it...</div>
			<div class="error-desc m-b-30">
				The page you're looking for doesn't exist. <br />
				Perhaps, there pages will help find what you're looking for.
			</div>
			<div>
				<a href="index.html" class="btn btn-success p-l-20 p-r-20">Go Home</a>
			</div>
		</div>
	</div>
	<!-- end error -->
<?php $__env->stopSection(); ?>
        

<?php echo $__env->make('layouts.empty', ['paceTop' => true], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>