<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
	<meta charset="utf-8" />
	<title>Color Admin | <?php echo $__env->yieldContent('title'); ?></title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet" />
	<link href="/assets/css/bundle.css" rel="stylesheet" />
	<link href="/assets/css/default/style.min.css" rel="stylesheet" />
	<link href="/assets/css/default/style-responsive.min.css" rel="stylesheet" />
	<link href="/assets/css/default/theme/default.css" rel="stylesheet" id="theme" />
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="/assets/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<?php echo $__env->yieldPushContent('css'); ?>
</head>
<body>
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade show"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
		<?php echo $__env->make('header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		
		<?php echo $__env->make('sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		
		<!-- begin #content -->
		<div id="content" class="content">
			<?php echo $__env->yieldContent('content'); ?>
		</div>
		<!-- end #content -->
		
		<?php echo $__env->make('theme-panel', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		
		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="/assets/js/bundle.js"></script>
	<script src="/assets/js/apps.min.js"></script>
	<script src="/assets/js/theme/default.min.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<?php echo $__env->yieldPushContent('scripts'); ?>
	
	<script>
		$(document).ready(function() {
			App.init();
		});
	</script>
</body>
</html>
