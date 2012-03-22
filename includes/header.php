<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title><?php echo page_title('Page can’t be found'); ?> - <?php echo site_name(); ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php echo site_description(); ?>">
		<meta name="" content="">

		<!-- Le Styles -->
		<link rel="stylesheet" href="<?php echo theme_url('/css/bootstrap.min.css'); ?>">
		<link rel="stylesheet" href="<?php echo theme_url('/css/bootstrap-responsive.min.css'); ?>">

		<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo rss_url(); ?>">

		<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    	<!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    	<![endif]-->
		
	</head>
	<body>
		<div class="navbar navbar-fixed-top">
			<?php if(has_menu_items()): ?>
      		<div class="navbar-inner">
        		<div class="container">
          			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
	            		<span class="icon-bar"></span>
	            		<span class="icon-bar"></span>
	            		<span class="icon-bar"></span>
          			</a>
          			<a class="brand" href="<?php echo base_url(); ?>"><?php echo site_name(); ?></a>
          			<div class="nav-collapse">
            			<ul class="nav">
            				<?php while(menu_items()): ?>
              				<li <?php echo (menu_active() ? 'class="active"' : ''); ?>>
								<a href="<?php echo menu_url(menu_id); ?>" title="<?php echo menu_title(); ?>">
								<?php echo menu_name(); ?>
								</a>
							</li>
							<?php endwhile; ?>
            			</ul>
            			<form class="navbar-search pull-left" id="search" action="<?php echo search_url(); ?>" method="post">
            				<input class="search-query" type="search" name="term" placeholder="Search" value="<?php echo search_term(); ?>">
            			</form>
            			<p class="navbar-text pull-right"><a href="<?php echo admin_url(); ?>" title="Administer your site!">Login</a></p>
          			</div><!--/.nav-collapse -->
        		</div><!--/.container -->
     		 </div><!--/.navbar-inner -->
      		<?php endif; ?>
    	</div><!--/.navbar -->

    <!-- Start Page Container (Ends:  footer.php)
        ================================================== -->
    <div class="container">