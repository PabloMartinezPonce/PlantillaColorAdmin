<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
	<?php echo $__env->make('includes.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>
<body class="boxed-layout">
	<?php echo $__env->make('includes.component.page-loader', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	
	<div id="page-container" class="page-container fade page-sidebar-fixed page-header-fixed">
		
		<?php echo $__env->make('includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		
		<?php echo $__env->make('includes.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		
		<div id="content" class="content">
			<?php echo $__env->yieldContent('content'); ?>
		</div>
		
		<?php echo $__env->make('includes.component.theme-panel', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		
		<?php echo $__env->make('includes.component.scroll-top-btn', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		
	</div>
	
	<?php echo $__env->make('includes.page-js', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</body>
</html>
