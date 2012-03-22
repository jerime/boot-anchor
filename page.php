	<div class="row-fluid">
		<div class="span12">
      <div class="hero-unit">
        <h1>Hello, world!</h1>
          <p>This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
          <p><a class="btn btn-primary btn-large">Learn more »</a></p>
      </div><!--/.hero-unit -->
    </div><!--/.span-->
  </div><!--/.row-fluid -->
  <div class="row-fluid">
    <div class="span9">
			<h1><?php echo page_title(); ?></h1>
			<?php echo page_content(); ?>
		</div>
	  <?php include 'includes/sidebar.php'; ?><!--/ Sidebar content -->
	</div><!--/.row-fluid -->
	<!--
		If you want to add custom functionality per-page, you can do so by using the bind() function, which is stored in the functions.php of your theme.
		Then, if you want to echo out your custom function, you just add a recieve() function. Here's an example: "<?php echo recieve(); ?>".
	 -->