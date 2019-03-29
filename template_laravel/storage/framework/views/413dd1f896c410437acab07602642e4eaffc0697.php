<?php 
	$headerClass = (!empty($headerInverse)) ? 'navbar-inverse ' : 'navbar-default ';
	$headerMenu = (!empty($headerMenu)) ? $headerMenu : '';
	$hiddenSearch = (!empty($headerLanguageBar)) ? 'hidden-xs' : '';
	$headerMegaMenu = (!empty($headerMegaMenu)) ? $headerMegaMenu : ''; 
 ?>
<!-- begin #header -->
<div id="header" class="header <?php echo e($headerClass); ?>">
	<!-- begin navbar-header -->
	<div class="navbar-header">
		<a href="index.html" class="navbar-brand"><span class="navbar-logo"></span> <b>Color</b> Admin</a>
		<?php if(!$sidebarHide): ?>
		<button type="button" class="navbar-toggle" data-click="sidebar-toggled">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<?php endif; ?>
		<?php if($headerMegaMenu): ?>
			<button type="button" class="navbar-toggle p-0 m-r-5" data-toggle="collapse" data-target="#top-navbar">
				<span class="fa-stack fa-lg text-inverse m-t-2">
					<i class="far fa-square fa-stack-2x"></i>
					<i class="fa fa-cog fa-stack-1x"></i>
				</span>
			</button>
		<?php endif; ?>
	</div>
	<!-- end navbar-header -->
	
	<?php echo $__env->renderWhen($headerMegaMenu, 'includes.header-mega-menu', array_except(get_defined_vars(), array('__data', '__path'))); ?>
	
	<!-- begin header-nav -->
	<ul class="navbar-nav navbar-right">
		<li class="<?php echo e($hiddenSearch); ?>">
			<form class="navbar-form">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Enter keyword" />
					<button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
				</div>
			</form>
		</li>
		<li class="dropdown">
			<a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle f-s-14">
				<i class="fa fa-bell"></i>
				<span class="label">5</span>
			</a>
			<ul class="dropdown-menu media-list dropdown-menu-right">
				<li class="dropdown-header">NOTIFICATIONS (5)</li>
				<li class="media">
					<a href="javascript:;">
						<div class="media-left">
							<i class="fa fa-bug media-object bg-silver-darker"></i>
						</div>
						<div class="media-body">
							<h6 class="media-heading">Server Error Reports <i class="fa fa-exclamation-circle text-danger"></i></h6>
							<div class="text-muted f-s-11">3 minutes ago</div>
						</div>
					</a>
				</li>
				<li class="media">
					<a href="javascript:;">
						<div class="media-left">
							<img src="/assets/img/user/user-1.jpg" class="media-object" alt="" />
							<i class="fab fa-facebook-messenger text-primary media-object-icon"></i>
						</div>
						<div class="media-body">
							<h6 class="media-heading">John Smith</h6>
							<p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
							<div class="text-muted f-s-11">25 minutes ago</div>
						</div>
					</a>
				</li>
				<li class="media">
					<a href="javascript:;">
						<div class="media-left">
							<img src="/assets/img/user/user-2.jpg" class="media-object" alt="" />
							<i class="fab fa-facebook-messenger text-primary media-object-icon"></i>
						</div>
						<div class="media-body">
							<h6 class="media-heading">Olivia</h6>
							<p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
							<div class="text-muted f-s-11">35 minutes ago</div>
						</div>
					</a>
				</li>
				<li class="media">
					<a href="javascript:;">
						<div class="media-left">
							<i class="fa fa-plus media-object bg-silver-darker"></i>
						</div>
						<div class="media-body">
							<h6 class="media-heading"> New User Registered</h6>
							<div class="text-muted f-s-11">1 hour ago</div>
						</div>
					</a>
				</li>
				<li class="media">
					<a href="javascript:;">
						<div class="media-left">
							<i class="fa fa-envelope media-object bg-silver-darker"></i>
							<i class="fab fa-google text-warning media-object-icon f-s-14"></i>
						</div>
						<div class="media-body">
							<h6 class="media-heading"> New Email From John</h6>
							<div class="text-muted f-s-11">2 hour ago</div>
						</div>
					</a>
				</li>
				<li class="dropdown-footer text-center">
					<a href="javascript:;">View more</a>
				</li>
			</ul>
		</li>
		<?php if(isset($headerLanguageBar)): ?>
		<li class="dropdown navbar-language">
			<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
				<span class="flag-icon flag-icon-us" title="us"></span>
				<span class="name">EN</span> <b class="caret"></b>
			</a>
			<ul class="dropdown-menu p-b-0">
				<li class="arrow"></li>
				<li><a href="javascript:;"><span class="flag-icon flag-icon-us" title="us"></span> English</a></li>
				<li><a href="javascript:;"><span class="flag-icon flag-icon-cn" title="cn"></span> Chinese</a></li>
				<li><a href="javascript:;"><span class="flag-icon flag-icon-jp" title="jp"></span> Japanese</a></li>
				<li><a href="javascript:;"><span class="flag-icon flag-icon-be" title="be"></span> Belgium</a></li>
				<li class="divider m-b-0"></li>
				<li class="text-center"><a href="javascript:;">more options</a></li>
			</ul>
		</li>
		<?php endif; ?>
		<li class="dropdown navbar-user">
			<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
				<img src="/assets/img/user/user-13.jpg" alt="" /> 
				<span class="d-none d-md-inline">Adam Schwartz</span> <b class="caret"></b>
			</a>
			<div class="dropdown-menu dropdown-menu-right">
				<a href="javascript:;" class="dropdown-item">Edit Profile</a>
				<a href="javascript:;" class="dropdown-item"><span class="badge badge-danger pull-right">2</span> Inbox</a>
				<a href="javascript:;" class="dropdown-item">Calendar</a>
				<a href="javascript:;" class="dropdown-item">Setting</a>
				<div class="dropdown-divider"></div>
				<a href="javascript:;" class="dropdown-item">Log Out</a>
			</div>
		</li>
	</ul>
	<!-- end header navigation right -->
</div>
<!-- end #header -->
