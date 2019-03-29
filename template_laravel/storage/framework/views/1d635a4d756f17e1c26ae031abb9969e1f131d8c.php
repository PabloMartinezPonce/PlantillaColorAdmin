<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
	<?php echo $__env->make('includes.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>
<?php 
	$bodyClass = (!empty($boxedLayout)) ? 'boxed-layout' : '';
	$bodyClass .= (!empty($paceTop)) ? 'pace-top ' : '';
	$bodyClass .= (!empty($bodyExtraClass)) ? $bodyExtraClass . ' ' : '';
	$sidebarHide = (!empty($sidebarHide)) ? $sidebarHide : '';
	$sidebarTwo = (!empty($sidebarTwo)) ? $sidebarTwo : '';
	$topMenu = (!empty($topMenu)) ? $topMenu : '';
	$footer = (!empty($footer)) ? $footer : '';
	
	$pageContainerClass = (!empty($topMenu)) ? 'page-with-top-menu ' : '';
	$pageContainerClass .= (!empty($sidebarRight)) ? 'page-with-right-sidebar ' : '';
	$pageContainerClass .= (!empty($sidebarLight)) ? 'page-with-light-sidebar ' : '';
	$pageContainerClass .= (!empty($sidebarWide)) ? 'page-with-wide-sidebar ' : '';
	$pageContainerClass .= (!empty($sidebarHide)) ? 'page-without-sidebar ' : '';
	$pageContainerClass .= (!empty($sidebarMinified)) ? 'page-sidebar-minified ' : '';
	$pageContainerClass .= (!empty($sidebarTwo)) ? 'page-with-two-sidebar ' : '';
	$pageContainerClass .= (!empty($contentFullHeight)) ? 'page-content-full-height ' : '';
	
	$contentClass = (!empty($contentFullWidth) || !empty($contentFullHeight)) ? 'content-full-width ' : '';
	$contentClass .= (!empty($contentInverseMode)) ? 'content-inverse-mode ' : '';
 ?>
<body class="<?php echo e($bodyClass); ?>">
	<?php echo $__env->make('includes.component.page-loader', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	
	<div id="page-container" class="page-container fade page-sidebar-fixed page-header-fixed <?php echo e($pageContainerClass); ?>">
		
		<?php echo $__env->make('includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		
		<?php echo $__env->renderWhen($topMenu, 'includes.top-menu', array_except(get_defined_vars(), array('__data', '__path'))); ?>
		
		<?php echo $__env->renderWhen(!$sidebarHide, 'includes.sidebar', array_except(get_defined_vars(), array('__data', '__path'))); ?>
		
		<?php echo $__env->renderWhen($sidebarTwo, 'includes.sidebar-right', array_except(get_defined_vars(), array('__data', '__path'))); ?>
		
		<div id="content" class="content <?php echo e($contentClass); ?>">
			<?php echo $__env->yieldContent('content'); ?>
		</div>
		
		<?php echo $__env->renderWhen($footer, 'includes.footer', array_except(get_defined_vars(), array('__data', '__path'))); ?>
		
		<?php echo $__env->make('includes.component.theme-panel', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		
		<?php echo $__env->make('includes.component.scroll-top-btn', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		
	</div>
	
	<?php echo $__env->make('includes.page-js', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</body>
</html>
