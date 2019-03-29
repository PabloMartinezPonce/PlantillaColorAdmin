@extends('layouts.default')

@section('title', 'Ionicons')

@push('css')
	<link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" />
@endpush

@section('content')
	<!-- begin breadcrumb -->
	<ol class="breadcrumb pull-right">
		<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
		<li class="breadcrumb-item"><a href="javascript:;">UI Elements</a></li>
		<li class="breadcrumb-item active">Ionicons</li>
	</ol>
	<!-- end breadcrumb -->
	<!-- begin page-header -->
	<h1 class="page-header">Ionicons V2.0 <small>bundle with 730 icons (android & ios icons)</small></h1>
	<!-- end page-header -->

	<!-- begin nav-tabs -->
	<ul id="ioniconsTab" class="nav nav-tabs nav-tabs-inverse">
		<li class="nav-item"><a href="#default" data-toggle="tab" class="nav-link active"><i class="ion-ionic fa-2x pull-left t-minus-3"></i> <span class="d-none d-lg-inline m-l-5">Default Icons (252)</span>&nbsp;</a></li>
		<li class="nav-item"><a href="#ios" data-toggle="tab" class="nav-link"><i class="ion-social-apple  fa-2x pull-left t-minus-3"></i> <span class="d-none d-lg-inline m-l-5">IOS Icons (267)</span>&nbsp;</a></li>
		<li class="nav-item"><a href="#android" data-toggle="tab" class="nav-link"><i class="ion-social-android fa-2x pull-left t-minus-3"></i> <span class="d-none d-lg-inline m-l-5">Android Icons (128)</span>&nbsp;</a></li>
		<li class="nav-item"><a href="#social" data-toggle="tab" class="nav-link"><i class="ion-social-twitter fa-2x pull-left t-minus-3"></i> <span class="d-none d-lg-inline m-l-5">Social Icons (83)</span>&nbsp;</a></li>
	</ul>
	<!-- end nav-tabs -->
	<!-- begin tab-content -->
	<div id="ioniconsTabContent" class="tab-content">
		<!-- begin tab-pane -->
		<div class="tab-pane fade show active" id="default">
			<!-- begin row -->
			<div class="row row-space-10">
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ionic fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ionic</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-arrow-up-a fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-arrow-up-a</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-arrow-right-a fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-arrow-right-a</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-arrow-down-a fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-arrow-down-a</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-arrow-left-a fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-arrow-left-a</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-arrow-up-b fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-arrow-up-b</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-arrow-right-b fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-arrow-right-b</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-arrow-down-b fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-arrow-down-b</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-arrow-left-b fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-arrow-left-b</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-arrow-up-c fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-arrow-up-c</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-arrow-right-c fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-arrow-right-c</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-arrow-down-c fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-arrow-down-c</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-arrow-left-c fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-arrow-left-c</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-arrow-return-right fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-arrow-return-right</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-arrow-return-left fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-arrow-return-left</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-arrow-swap fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-arrow-swap</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-arrow-shrink fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-arrow-shrink</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-arrow-expand fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-arrow-expand</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-arrow-move fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-arrow-move</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-arrow-resize fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-arrow-resize</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-chevron-up fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-chevron-up</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-chevron-right fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-chevron-right</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-chevron-down fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-chevron-down</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-chevron-left fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-chevron-left</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-navicon-round fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-navicon-round</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-navicon fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-navicon</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-drag fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-drag</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-log-in fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-log-in</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-log-out fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-log-out</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-checkmark-round fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-checkmark-round</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-checkmark fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-checkmark</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-checkmark-circled fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-checkmark-circled</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-close-round fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-close-round</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-close fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-close</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-close-circled fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-close-circled</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-plus-round fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-plus-round</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-plus fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-plus</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-plus-circled fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-plus-circled</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-minus-round fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-minus-round</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-minus fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-minus</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-minus-circled fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-minus-circled</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-information fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-information</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-information-circled fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-information-circled</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-help fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-help</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-help-circled fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-help-circled</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-backspace-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-backspace-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-backspace fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-backspace</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-help-buoy fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-help-buoy</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-asterisk fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-asterisk</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-alert fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-alert</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-alert-circled fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-alert-circled</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-refresh fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-refresh</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-loop fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-loop</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-shuffle fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-shuffle</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-home fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-home</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-search fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-search</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-flag fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-flag</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-star fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-star</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-heart fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-heart</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-heart-broken fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-heart-broken</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-gear-a fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-gear-a</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-gear-b fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-gear-b</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-toggle-filled fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-toggle-filled</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-toggle fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-toggle</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-settings fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-settings</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-wrench fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-wrench</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-hammer fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-hammer</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-edit fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-edit</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-trash-a fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-trash-a</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-trash-b fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-trash-b</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-document fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-document</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-document-text fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-document-text</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-clipboard fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-clipboard</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-scissors fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-scissors</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-funnel fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-funnel</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-bookmark fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-bookmark</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-email fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-email</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-email-unread fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-email-unread</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-folder fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-folder</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-filing fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-filing</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-archive fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-archive</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-reply fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-reply</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-reply-all fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-reply-all</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-forward fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-forward</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-share fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-share</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-paper-airplane fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-paper-airplane</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-link fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-link</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-paperclip fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-paperclip</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-compose fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-compose</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-briefcase fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-briefcase</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-medkit fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-medkit</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-at fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ionatic</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-pound fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-pound</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-quote fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-quote</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-cloud fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-cloud</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-upload fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-upload</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-more fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-more</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-grid fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-grid</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-calendar fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-calendar</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-clock fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-clock</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-compass fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-compass</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-pinpoint fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-pinpoint</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-pin fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-pin</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-navigate fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-navigate</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-location fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-location</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-map fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-map</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-lock-combination fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-lock-combination</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-locked fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-locked</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-unlocked fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-unlocked</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-key fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-key</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-arrow-graph-up-right fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-arrow-graph-up-right</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-arrow-graph-down-right fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-arrow-graph-down-right</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-arrow-graph-up-left fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-arrow-graph-up-left</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-arrow-graph-down-left fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-arrow-graph-down-left</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-stats-bars fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-stats-bars</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-connection-bars fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-connection-bars</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-pie-graph fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-pie-graph</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-chatbubble fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-chatbubble</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-chatbubble-working fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-chatbubble-working</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-chatbubbles fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-chatbubbles</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-chatbox fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-chatbox</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-chatbox-working fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-chatbox-working</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-chatboxes fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-chatboxes</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-person fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-person</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-person-add fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-person-add</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-person-stalker fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-person-stalker</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-woman fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-woman</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-man fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-man</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-female fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-female</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-male fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-male</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-transgender fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-transgender</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-fork fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-fork</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-knife fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-knife</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-spoon fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-spoon</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-soup-can-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-soup-can-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-soup-can fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-soup-can</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-beer fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-beer</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-wineglass fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-wineglass</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-coffee fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-coffee</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-icecream fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-icecream</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-pizza fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-pizza</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-power fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-power</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-mouse fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-mouse</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-battery-full fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-battery-full</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-battery-half fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-battery-half</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-battery-low fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-battery-low</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-battery-empty fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-battery-empty</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-battery-charging fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-battery-charging</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-wifi fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-wifi</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-bluetooth fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-bluetooth</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-calculator fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-calculator</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-camera fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-camera</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-eye fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-eye</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-eye-disabled fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-eye-disabled</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-flash fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-flash</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-flash-off fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-flash-off</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-qr-scanner fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-qr-scanner</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-image fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-image</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-images fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-images</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-wand fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-wand</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-contrast fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-contrast</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-aperture fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-aperture</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-crop fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-crop</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-easel fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-easel</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-paintbrush fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-paintbrush</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-paintbucket fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-paintbucket</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-monitor fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-monitor</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-laptop fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-laptop</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ipad fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ipad</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-iphone fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-iphone</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ipod fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ipod</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-printer fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-printer</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-usb fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-usb</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-outlet fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-outlet</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-bug fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-bug</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-code fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-code</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-code-working fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-code-working</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-code-download fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-code-download</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-fork-repo fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-fork-repo</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-network fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-network</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-pull-request fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-pull-request</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-merge fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-merge</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-xbox fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-xbox</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-playstation fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-playstation</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-steam fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-steam</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-closed-captioning fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-closed-captioning</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-videocamera fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-videocamera</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-film-marker fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-film-marker</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-disc fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-disc</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-headphone fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-headphone</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-music-note fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-music-note</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-radio-waves fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-radio-waves</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-speakerphone fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-speakerphone</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-mic-a fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-mic-a</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-mic-b fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-mic-b</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-mic-c fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-mic-c</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-volume-high fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-volume-high</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-volume-medium fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-volume-medium</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-volume-low fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-volume-low</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-volume-mute fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-volume-mute</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-levels fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-levels</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-play fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-play</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-pause fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-pause</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-stop fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-stop</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-record fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-record</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-skip-forward fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-skip-forward</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-skip-backward fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-skip-backward</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-eject fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-eject</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-bag fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-bag</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-card fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-card</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-cash fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-cash</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-pricetag fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-pricetag</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-pricetags fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-pricetags</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-thumbsup fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-thumbsup</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-thumbsdown fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-thumbsdown</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-happy-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-happy-outline</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-happy fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-happy</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-sad-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-sad-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-sad fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-sad</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-bowtie fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-bowtie</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-tshirt-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-tshirt-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-tshirt fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-tshirt</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-trophy fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-trophy</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-podium fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-podium</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ribbon-a fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ribbon-a</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ribbon-b fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ribbon-b</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-university fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-university</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-magnet fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-magnet</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-beaker fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-beaker</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-erlenmeyer-flask fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-erlenmeyer-flask</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-egg fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-egg</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-earth fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-earth</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-planet fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-planet</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-lightbulb fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-lightbulb</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-cube fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-cube</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-leaf fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-leaf</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-waterdrop fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-waterdrop</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-flame fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-flame</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-fireball fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-fireball</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-bonfire fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-bonfire</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-umbrella fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-umbrella</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-nuclear fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-nuclear</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-no-smoking fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-no-smoking</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-thermometer fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-thermometer</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-speedometer fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-speedometer</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-model-s fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-model-s</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-plane fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-plane</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-jet fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-jet</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-load-a fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-load-a</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-load-b fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-load-b</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-load-c fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-load-c</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-load-d fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-load-d</p></div>
			</div>
			<!-- end row -->
		</div>
		<!-- end tab-pane -->
		<!-- begin tab-pane -->
		<div class="tab-pane fade" id="ios">
			<!-- begin row -->
			<div class="row row-space-10">
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-ionic-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-ionic-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-arrow-back fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-arrow-back</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-arrow-forward fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-arrow-forward</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-arrow-up fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-arrow-up</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-arrow-right fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-arrow-right</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-arrow-down fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-arrow-down</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-arrow-left fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-arrow-left</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-arrow-thin-up fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-arrow-thin-up</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-arrow-thin-right fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-arrow-thin-right</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-arrow-thin-down fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-arrow-thin-down</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-arrow-thin-left fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-arrow-thin-left</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-circle-filled fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-circle-filled</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-circle-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-circle-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-checkmark-empty fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-checkmark-empty</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-checkmark-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-checkmark-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-checkmark fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-checkmark</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-plus-empty fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-plus-empty</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-plus-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-plus-outline</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-plus fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-plus</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-close-empty fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-close-empty</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-close-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-close-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-close fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-close</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-minus-empty fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-minus-empty</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-minus-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-minus-outline</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-minus fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-minus</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-information-empty fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-information-empty</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-information-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-information-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-information fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-information</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-help-empty fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-help-empty</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-help-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-help-outline</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-help fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-help</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-search fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-search</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-search-strong fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-search-strong</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-star fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-star</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-star-half fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-star-half</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-star-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-star-outline</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-heart fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-heart</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-heart-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-heart-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-more fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-more</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-more-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-more-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-home fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-home</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-home-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-home-outline</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-cloud fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-cloud</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-cloud-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-cloud-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-cloud-upload fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-cloud-upload</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-cloud-upload-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-cloud-upload-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-cloud-download fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-cloud-download</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-cloud-download-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-cloud-download-outline</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-upload fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-upload</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-upload-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-upload-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-download fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-download</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-download-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-download-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-refresh fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-refresh</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-refresh-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-refresh-outline</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-refresh-empty fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-refresh-empty</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-reload fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-reload</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-loop-strong fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-loop-strong</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-loop fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-loop</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-bookmarks fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-bookmarks</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-bookmarks-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-bookmarks-outline</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-book fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-book</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-book-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-book-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-flag fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-flag</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-flag-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-flag-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-glasses fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-glasses</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-glasses-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-glasses-outline</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-browsers fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-browsers</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-browsers-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-browsers-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-at fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-at</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-at-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-at-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-pricetag fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-pricetag</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-pricetag-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-pricetag-outline</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-pricetags fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-pricetags</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-pricetags-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-pricetags-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-cart fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-cart</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-cart-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-cart-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-chatboxes fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-chatboxes</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-chatboxes-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-chatboxes-outline</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-chatbubble fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-chatbubble</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-chatbubble-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-chatbubble-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-cog fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-cog</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-cog-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-cog-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-gear fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-gear</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-gear-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-gear-outline</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-settings fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-settings</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-settings-strong fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-settings-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-toggle fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-toggle</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-toggle-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-toggle-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-analytics fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-analytics</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-analytics-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-analytics-outline</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-pie fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-pie</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-pie-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-pie-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-pulse fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-pulse</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-pulse-strong fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-pulse-strong</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-filing fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-filing</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-filing-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-filing-outline</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-box fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-box</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-box-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-box-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-compose fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-compose</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-compose-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-compose-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-trash fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-trash</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-trash-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-trash-outline</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-copy fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-copy</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-copy-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-copy-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-email fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-email</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-email-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-email-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-undo fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-undo</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-undo-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-undo-outline</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-redo fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-redo</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-redo-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-redo-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-paperplane fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-paperplane</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-paperplane-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-paperplane-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-folder fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-folder</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-folder-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-folder-outline</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-paper fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-paper</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-paper-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-paper-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-list fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-list</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-list-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-list-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-world fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-world</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-world-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-world-outline</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-alarm fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-alarm</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-alarm-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-alarm-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-speedometer fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-speedometer</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-speedometer-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-speedometer-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-stopwatch fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-stopwatch</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-stopwatch-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-stopwatch-outline</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-timer fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-timer</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-timer-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-timer-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-clock fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-clock</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-clock-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-clock-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-time fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-time</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-time-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-time-outline</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-calendar fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-calendar</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-calendar-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-calendar-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-photos fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-photos</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-photos-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-photos-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-albums fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-albums</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-albums-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-albums-outline</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-camera fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-camera</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-camera-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-camera-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-reverse-camera fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-reverse-camera</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-reverse-camera-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-reverse-camera-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-eye fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-eye</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-eye-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-eye-outline</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-bolt fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-bolt</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-bolt-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-bolt-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-color-wand fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-color-wand</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-color-wand-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-color-wand-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-color-filter fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-color-filter</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-color-filter-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-color-filter-outline</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-grid-view fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-grid-view</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-grid-view-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-grid-view-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-crop-strong fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-crop-strong</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-crop fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-crop</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-barcode fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-barcode</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-barcode-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-barcode-outline</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-briefcase fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-briefcase</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-briefcase-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-briefcase-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-medkit fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-medkit</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-medkit-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-medkit-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-medical fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-medical</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-medical-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-medical-outline</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-infinite fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-infinite</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-infinite-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-infinite-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-calculator fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-calculator</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-calculator-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-calculator-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-keypad fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-keypad</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-keypad-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-keypad-outline</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-telephone fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-telephone</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-telephone-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-telephone-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-drag fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-drag</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-location fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-location</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-location-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-location-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-navigate fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-navigate</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-navigate-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-navigate-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-locked fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-locked</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-locked-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-locked-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-unlocked fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-unlocked</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-unlocked-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-unlocked-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-monitor fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-monitor</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-monitor-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-monitor-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-printer fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-printer</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-printer-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-printer-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-game-controller-a fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-game-controller-a</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-game-controller-a-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-game-controller-a-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-game-controller-b fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-game-controller-b</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-game-controller-b-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-game-controller-b-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-americanfootball fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-americanfootball</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-americanfootball-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-americanfootball-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-baseball fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-baseball</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-baseball-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-baseball-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-basketball fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-basketball</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-basketball-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-basketball-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-tennisball fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-tennisball</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-tennisball-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-tennisball-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-football fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-football</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-football-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-football-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-body fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-body</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-body-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-body-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-person fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-person</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-person-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-person-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-personadd fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-personadd</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-personadd-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-personadd-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-people fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-people</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-people-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-people-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-musical-notes fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-musical-notes</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-musical-note fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-musical-note</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-bell fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-bell</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-bell-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-bell-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-mic fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-mic</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-mic-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-mic-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-mic-off fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-mic-off</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-volume-high fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-volume-high</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-volume-low fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-volume-low</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-play fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-play</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-play-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-play-outline</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-pause fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-pause</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-pause-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-pause-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-recording fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-recording</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-recording-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-recording-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-fastforward fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-fastforward</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-fastforward-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-fastforward-outline</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-rewind fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-rewind</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-rewind-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-rewind-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-skipbackward fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-skipbackward</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-skipbackward-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-skipbackward-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-skipforward fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-skipforward</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-skipforward-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-skipforward-outline</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-shuffle-strong fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-shuffle-strong</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-shuffle fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-shuffle</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-videocam fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-videocam</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-videocam-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-videocam-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-film fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-film</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-film-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-film-outline</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-flask fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-flask</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-flask-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-flask-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-lightbulb fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-lightbulb</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-lightbulb-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-lightbulb-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-wineglass fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-wineglass</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-wineglass-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-wineglass-outline</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-pint fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-pint</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-pint-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-pint-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-nutrition fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-nutrition</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-nutrition-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-nutrition-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-flower fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-flower</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-flower-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-flower-outline</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-rose fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-rose</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-rose-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-rose-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-paw fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-paw</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-paw-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-paw-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-flame fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-flame</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-flame-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-flame-outline</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-sunny fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-sunny</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-sunny-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-sunny-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-partlysunny fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-partlysunny</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-partlysunny-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-partlysunny-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-cloudy fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-cloudy</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-cloudy-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-cloudy-outline</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-rainy fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-rainy</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-rainy-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-rainy-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-thunderstorm fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-thunderstorm</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-thunderstorm-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-thunderstorm-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-snowy fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-snowy</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-moon fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-moon</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-moon-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-moon-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-cloudy-night fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-cloudy-night</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-ios-cloudy-night-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-ios-cloudy-night-outline</p></div>
			</div>
			<!-- end row -->
		</div>
		<!-- end tab-pane -->
		<!-- begin tab-pane -->
		<div class="tab-pane fade" id="android">
			<!-- begin row -->
			<div class="row row-space-10">
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-arrow-up fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-arrow-up</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-arrow-forward fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-arrow-forward</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-arrow-down fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-arrow-down</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-arrow-back fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-arrow-back</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-arrow-dropup fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-arrow-dropup</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-arrow-dropup-circle fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-arrow-dropup-circle</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-arrow-dropright fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-arrow-dropright</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-arrow-dropright-circle fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-arrow-dropright-circle</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-arrow-dropdown fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-arrow-dropdown</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-arrow-dropdown-circle fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-arrow-dropdown-circle</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-arrow-dropleft fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-arrow-dropleft</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-arrow-dropleft-circle fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-arrow-dropleft-circle</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-add fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-add</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-add-circle fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-add-circle</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-remove fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-remove</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-remove-circle fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-remove-circle</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-close fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-close</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-cancel fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-cancel</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-radio-button-off fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-radio-button-off</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-radio-button-on fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-radio-button-on</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-checkmark-circle fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-checkmark-circle</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-checkbox-outline-blank fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-checkbox-outline-blank</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-checkbox-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-checkbox-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-checkbox-blank fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-checkbox-blank</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-checkbox fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-checkbox</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-done fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-done</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-done-all fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-done-all</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-menu fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-menu</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-more-horizontal fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-more-horizontal</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-more-vertical fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-more-vertical</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-refresh fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-refresh</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-sync fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-sync</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-wifi fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-wifi</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-call fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-call</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-apps fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-apps</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-settings fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-settings</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-options fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-options</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-funnel fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-funnel</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-search fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-search</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-home fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-home</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-cloud-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-cloud-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-cloud fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-cloud</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-download fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-download</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-upload fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-upload</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-cloud-done fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-cloud-done</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-cloud-circle fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-cloud-circle</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-favorite-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-favorite-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-favorite fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-favorite</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-star-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-star-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-star-half fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-star-half</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-star fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-star</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-calendar fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-calendar</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-alarm-clock fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-alarm-clock</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-time fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-time</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-stopwatch fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-stopwatch</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-watch fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-watch</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-locate fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-locate</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-navigate fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-navigate</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-pin fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-pin</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-compass fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-compass</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-map fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-map</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-walk fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-walk</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-bicycle fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-bicycle</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-car fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-car</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-bus fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-bus</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-subway fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-subway</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-train fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-train</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-boat fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-boat</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-plane fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-plane</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-restaurant fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-restaurant</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-bar fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-bar</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-cart fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-cart</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-camera fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-camera</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-image fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-image</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-film fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-film</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-color-palette fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-color-palette</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-create fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-create</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-mail fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-mail</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-drafts fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-drafts</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-send fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-send</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-archive fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-archive</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-delete fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-delete</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-attach fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-attach</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-share fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-share</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-share-alt fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-share-alt</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-bookmark fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-bookmark</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-document fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-document</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-clipboard fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-clipboard</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-list fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-list</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-folder-open fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-folder-open</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-folder fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-folder</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-print fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-print</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-open fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-open</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-exit fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-exit</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-contract fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-contract</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-expand fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-expand</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-globe fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-globe</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-chat fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-chat</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-textsms fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-textsms</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-hangout fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-hangout</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-happy fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-happy</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-sad fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-sad</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-person fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-person</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-people fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-people</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-person-add fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-person-add</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-contact fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-contact</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-contacts fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-contacts</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-playstore fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-playstore</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-lock fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-lock</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-unlock fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-unlock</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-microphone fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-microphone</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-microphone-off fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-microphone-off</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-notifications-none fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-notifications-none</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-notifications fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-notifications</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-notifications-off fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-notifications-off</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-volume-mute fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-volume-mute</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-volume-down fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-volume-down</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-volume-up fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-volume-up</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-volume-off fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-volume-off</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-hand fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-hand</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-desktop fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-desktop</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-laptop fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-laptop</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-phone-portrait fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-phone-portrait</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-phone-landscape fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-phone-landscape</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-bulb fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-bulb</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-sunny fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-sunny</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-alert fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-alert</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-android-warning fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-android-warning</p></div>
			</div>
			<!-- end row -->
		</div>
		<!-- end tab-pane -->
		<!-- begin tab-pane -->
		<div class="tab-pane fade" id="social">
			<!-- begin row -->
			<div class="row row-space-10">
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-social-twitter fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-social-twitter</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-social-twitter-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-social-twitter-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-social-facebook fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-social-facebook</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-social-facebook-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-social-facebook-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-social-googleplus fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-social-googleplus</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-social-googleplus-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-social-googleplus-outline</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-social-google fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-social-google</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-social-google-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-social-google-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-social-dribbble fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-social-dribbble</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-social-dribbble-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-social-dribbble-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-social-octocat fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-social-octocat</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-social-github fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-social-github</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-social-github-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-social-github-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-social-instagram fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-social-instagram</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-social-instagram-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-social-instagram-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-social-whatsapp fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-social-whatsapp</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-social-whatsapp-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-social-whatsapp-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-social-snapchat fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-social-snapchat</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-social-snapchat-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-social-snapchat-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-social-foursquare fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-social-foursquare</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-social-foursquare-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-social-foursquare-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-social-pinterest fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-social-pinterest</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-social-pinterest-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-social-pinterest-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-social-rss fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-social-rss</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-social-rss-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-social-rss-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-social-tumblr fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-social-tumblr</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-social-tumblr-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-social-tumblr-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-social-wordpress fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-social-wordpress</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-social-wordpress-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-social-wordpress-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-social-reddit fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-social-reddit</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-social-reddit-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-social-reddit-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-social-hackernews fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-social-hackernews</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-social-hackernews-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-social-hackernews-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-social-designernews fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-social-designernews</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-social-designernews-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-social-designernews-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-social-yahoo fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-social-yahoo</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-social-yahoo-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-social-yahoo-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-social-buffer fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-social-buffer</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-social-buffer-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-social-buffer-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-social-skype fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-social-skype</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-social-skype-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-social-skype-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-social-linkedin fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-social-linkedin</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-social-linkedin-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-social-linkedin-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-social-vimeo fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-social-vimeo</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-social-vimeo-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-social-vimeo-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-social-twitch fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-social-twitch</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-social-twitch-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-social-twitch-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-social-youtube fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-social-youtube</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-social-youtube-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-social-youtube-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-social-dropbox fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-social-ionic</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-social-dropbox-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-social-dropbox</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-social-apple fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-social-apple</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-social-apple-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-social-apple-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-social-android fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-social-android</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-social-android-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-social-android-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-social-windows fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-social-windows</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-social-windows-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-social-windows-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-social-html5 fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-social-html5</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-social-html5-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-social-html5-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-social-css3 fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-social-css3</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-social-css3-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-social-css3-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-social-javascript fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-social-javascript</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-social-javascript-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-social-javascript-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-social-angular fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-social-angular</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-social-angular-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-social-angular-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-social-nodejs fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-social-nodejs</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-social-sass fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-social-sass</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-social-python fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-social-python</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-social-chrome fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-social-chrome</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-social-chrome-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-social-chrome-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-social-codepen fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-social-codepen</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-social-codepen-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-social-codepen-outline</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-social-markdown fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-social-markdown</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-social-tux fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-social-tux</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-social-freebsd-devil fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-social-freebsd-devil</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-social-usd fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-social-usd</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-social-usd-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-social-usd-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-social-bitcoin fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-social-bitcoin</p></div>
				<div class="clearfix"><hr class="m-t-5 m-b-10" /></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-social-bitcoin-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-social-bitcoin-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-social-yen fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-social-yen</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-social-yen-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-social-yen-outline</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-social-euro fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-social-euro</p></div>
				<div class="col-lg-2 col-sm-4 col-6"><i class="ion-social-euro-outline fa-2x fa-fw pull-left m-r-10 text-black-lighter"></i><p class="text-ellipsis p-t-5 m-t-3">ion-social-euro-outline</p></div>
			</div>
			<!-- end row -->
		</div>
		<!-- end tab-pane -->
	</div>
	<!-- end tab-content -->
@endsection
