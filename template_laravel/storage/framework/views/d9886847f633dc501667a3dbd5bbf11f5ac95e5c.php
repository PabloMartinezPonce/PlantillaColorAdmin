<?php $__env->startSection('title', 'Managed Tables - Scroller'); ?>

<?php $__env->startPush('css'); ?>
	<link href="/assets/plugins/datatables/css/dataTables.bootstrap4.css" rel="stylesheet" />
	<link href="/assets/plugins/datatables/css/scroller/scroller.bootstrap4.min.css" rel="stylesheet" />
	<link href="/assets/plugins/datatables/css/responsive/responsive.bootstrap4.css" rel="stylesheet" />
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
	<!-- begin breadcrumb -->
	<ol class="breadcrumb pull-right">
		<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
		<li class="breadcrumb-item"><a href="javascript:;">Tables</a></li>
		<li class="breadcrumb-item"><a href="javascript:;">Managed Tables</a></li>
		<li class="breadcrumb-item active">Scroller</li>
	</ol>
	<!-- end breadcrumb -->
	<!-- begin page-header -->
	<h1 class="page-header">Managed Tables - Scroller <small>header small text goes here...</small></h1>
	<!-- end page-header -->
	
	<!-- begin row -->
	<div class="row">
		<!-- begin col-2 -->
		<div class="col-lg-2">
			<h5>
				Key features include:
			</h5>
			<ul class="p-l-25 m-b-15">
				<li>Speed! The aim of Scroller for DataTables is to make rendering large data sets fast</li>
				<li>Full compatibility with DataTables' deferred rendering for maximum speed</li>
				<li>Display millions of rows in a scrollable table</li>
				<li>Integration with state saving in DataTables (scrolling position is saved)</li>
				<li>Easy to use</li>
			</ul>
			<p class="m-b-20">
				<a href="http://www.datatables.net/extensions/scroller/" target="_blank" class="btn btn-inverse btn-sm">View Official Website</a>
			</p>
		</div>
		<!-- end col-2 -->
		<!-- begin col-10 -->
		<div class="col-lg-10">
			<!-- begin panel -->
			<div class="panel panel-inverse">
				<!-- begin panel-heading -->
				<div class="panel-heading">
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
					</div>
					<h4 class="panel-title">DataTable - Scroller</h4>
				</div>
				<!-- end panel-heading -->
				<!-- begin alert -->
				<div class="alert alert-yellow fade show">
					<button type="button" class="close" data-dismiss="alert">
						<span aria-hidden="true">&times;</span>
					</button>
					Scroller is a virtual rendering plug-in for DataTables which allows large datasets to be drawn on screen every quickly. What the virtual rendering means is that only the visible portion of the table (and a bit to either side to make the scrolling smooth) is drawn, while the scrolling container gives the visual impression that the whole table is visible. This is done by making use of the pagination abilities of DataTables and moving the table around in the scrolling container DataTables adds to the page. The scrolling container is forced to the height it would be for the full table display using an extra element.
				</div>
				<!-- end alert -->
				<!-- begin panel-body -->
				<div class="panel-body">
					<table id="data-table-scroller" class="table table-striped table-bordered display" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>ID</th>
								<th>First name</th>
								<th>Last name</th>
								<th>ZIP / Post code</th>
								<th>Country</th>
							</tr>
						</thead>
					</table>
				</div>
				<!-- end panel-body -->
			</div>
			<!-- end panel -->
		</div>
		<!-- end col-10 -->
	</div>
	<!-- end row -->

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
	<script src="/assets/plugins/datatables/js/jquery.dataTables.js"></script>
	<script src="/assets/plugins/datatables/js/dataTables.bootstrap4.js"></script>
	<script src="/assets/plugins/datatables/js/scroller/dataTables.scroller.js"></script>
	<script src="/assets/plugins/datatables/js/responsive/dataTables.responsive.js"></script>
	<script src="/assets/plugins/datatables/js/responsive/responsive.bootstrap4.js"></script>
	<script src="/assets/js/demo/table-manage-scroller.demo.js"></script>
	<script>
		$(document).ready(function() {
			TableManageScroller.init();
		});
	</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>