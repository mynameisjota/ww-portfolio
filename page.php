<?php get_header('dois'); ?>
	<div class="container  animated fadeInUp">
		<div class="row">
			<div class="col-md-12">
				<div class="page-wrapper">
				<h1 class="main-title"><?php wp_title(''); ?></h1>
					<?php while(have_posts()){ the_post(); ?> 
						
						<?php the_content(); ?>

					<?php }
					?>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>