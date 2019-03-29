<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
	<?php echo $__env->make('includes.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>
<?php 
	$bodyClass = (!empty($boxedLayout)) ? 'boxed-layout ' : '';
	$bodyClass .= (!empty($paceTop)) ? 'pace-top ' : '';
	$bodyClass .= (!empty($bodyExtraClass)) ? $bodyExtraClass . ' ' : '';
 ?>
<body class="<?php echo e($bodyClass); ?>">
	<?php echo $__env->make('includes.component.page-loader', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	
	<?php echo $__env->yieldContent('content'); ?>
			
	<?php echo $__env->make('includes.page-js', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</body>
</html>
