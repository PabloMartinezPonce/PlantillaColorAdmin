@extends('layouts.default', ['contentFullWidth' => true])

@section('title', 'Google Map')

@push('css')
	<link href="/assets/plugins/jquery-jvectormap/jquery-jvectormap.min.css" rel="stylesheet" />
@endpush

@section('content')
	<!-- begin breadcrumb -->
	<ol class="breadcrumb pull-right">
		<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
		<li class="breadcrumb-item"><a href="javascript:;">Map</a></li>
		<li class="breadcrumb-item active">Google Map</li>
	</ol>
	<!-- end breadcrumb -->
	<!-- begin page-header -->
	<h1 class="page-header">Google Map <small>header small text goes here...</small></h1>
	<!-- end page-header -->
	
	<div class="map-content">
		<div class="btn-group map-btn pull-right">
			<button type="button" class="btn btn-inverse" id="map-theme-text">Default Theme</button>
			<button type="button" class="btn btn-inverse dropdown-toggle" data-toggle="dropdown">
			</button>
			<ul class="dropdown-menu" id="map-theme-selection">
				<li class="active"><a href="javascript:;" data-map-theme="default">Default</a></li>
				<li><a href="javascript:;" data-map-theme="flat">Flat</a></li>
				<li><a href="javascript:;" data-map-theme="turquoise-water">Turquoise Water</a></li>
				<li><a href="javascript:;" data-map-theme="icy-blue">Icy Blue</a></li>
				<li><a href="javascript:;" data-map-theme="cobalt">Cobalt</a></li>
				<li><a href="javascript:;" data-map-theme="old-dry-mud">Old Dry Mud</a></li>
				<li><a href="javascript:;" data-map-theme="dark-red">Dark Red</a></li>
			</ul>
		</div>
	</div>
	<div class="map">
		<div id="google-map-default" class="height-full width-full"></div>
	</div>
@endsection

@push('scripts')
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
	<script src="/assets/js/demo/map-google.demo.js"></script>
	<script>
		$(document).ready(function() {
			MapGoogle.init();
		});
	</script>
@endpush