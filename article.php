	<div class="row-fluid">
		<div class="span9" id="article-<?php echo article_id(); ?>">
			<h1><?php echo article_title(); ?></h1>
	    		<?php echo article_html(); ?>
	    		<?php include 'includes/comment_form.php'; ?>
	    		<p>This article is my <?php echo numeral(article_id()); ?> oldest. It is <?php echo count_words(article_html()); ?> words long. 
				<?php echo article_custom_field('attribution'); ?></p>
		</div><!--/.span-->
		<?php include 'includes/sidebar.php'; ?><!--/ Sidebar content -->
	</div><!--/.row-fluid -->