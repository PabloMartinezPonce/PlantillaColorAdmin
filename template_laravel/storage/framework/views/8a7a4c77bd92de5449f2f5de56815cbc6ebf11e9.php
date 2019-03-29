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