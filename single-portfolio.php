<div class="container">
	<?php get_header('dois'); ?>
</div>
<div class="container wrapper">
	<div class="portfolio-single">
		<?php while(have_posts()){ the_post();?>
			 <h1><?php the_title(); ?></h1>

			 <main>
			 	<?php the_content(); ?>
			 </main>
		<?php } ?>
		<!-- //// Footer -->
	</div>
</div>
<?php get_footer('dois'); ?>