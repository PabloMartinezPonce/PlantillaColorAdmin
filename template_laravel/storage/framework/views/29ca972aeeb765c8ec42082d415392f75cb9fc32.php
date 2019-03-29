<?php $__env->startSection('title', 'Coming Soon Page'); ?>

<?php $__env->startPush('css'); ?>
    <link href="/assets/plugins/jquery.countdown/jquery.countdown.css" rel="stylesheet" />
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
	<!-- begin coming-soon -->
	<div class="coming-soon">
		<!-- begin coming-soon-header -->
		<div class="coming-soon-header">
			<div class="bg-cover"></div>
			<div class="brand">
				<span class="logo"></span> <b>Color</b> Admin
			</div>
			<div class="desc">
				Our website is almost there and it’s rebuilt from scratch! A lot of great new features <br />and improvements are coming.
			</div>
			<div class="timer">
				<div id="timer"></div>
			</div>
		</div>
		<!-- end coming-soon-header -->
		<!-- begin coming-soon-content -->
		<div class="coming-soon-content">
			<div class="desc">
				We are launching a closed <b>beta</b> soon!<br /> Sign up to try it before others and be the first to know when we <b>launch</b>.
			</div>
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Email Address" />
				<div class="input-group-append">
					<button type="button" class="btn btn-inverse">Notify Me</button>
				</div>
			</div>
			<p class="help-block m-b-25"><i>We don't spam. Your email address is secure with us.</i></p>
			<p>
				Follow us on 
				<a href="javascript:;" class="text-inverse"><i class="fab fa-twitter fa-lg fa-fw text-info"></i> Twitter</a> and 
				<a href="javascript:;" class="text-inverse"><i class="fab fa-facebook fa-lg fa-fw text-primary"></i> Facebook</a>
			</p>
		</div>
		<!-- end coming-soon-content -->
	</div>
	<!-- end coming-soon -->
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script src="/assets/plugins/jquery.countdown/jquery.plugin.js"></script>
    <script src="/assets/plugins/jquery.countdown/jquery.countdown.js"></script>
	<script src="/assets/js/demo/coming-soon.demo.js"></script>
	<script>
		$(document).ready(function() {
			ComingSoon.init();
		});
	</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.empty', ['paceTop' => true, 'bodyExtraClass' => 'bg-white'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>