<?php 
/*
Template Name: mobile contact forms
*/
 ?>
<html>
<head>

			<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen">
			<link rel="icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico">
			<?php wp_enqueue_script('jquery'); ?>
			<?php wp_head(); ?>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js" type="text/javascript"></script>
			
			
</head>
	<style>
		.content p label {
			width: 37%;
			padding-right: 0px;
			text-align: left;
		}
		.wpcf7-text {
			width: 158px;
		}
		
		.wpcf7-select {
			width: 158px;
		}
		.wpcf7-textarea {
			width: 158px;
		}
		.serviceCall .wpcf7-list-item{
			text-align: left;
		}
		span.wpcf7-list-item {
			text-align: left;
			display: block;
		}
		span.wpcf7-not-valid-tip {
			width: 165px;
			top: -89%;
			padding: 0;
		}
		li {
			color: #000;
		}
	</style>
<body>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		
					<?php the_content(); ?>

			
	<?php endwhile; else: ?>

		

	<?php endif; ?>		


		</div> <!--END MAIN CONTAINER-->
		
		<?php wp_footer(); ?>

	</body>
</html>