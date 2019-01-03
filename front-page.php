<main class="main-content">
	<div class="container">
		<?php get_header();?>

		<div class="callHome">
			<h1>
				<?php echo get_theme_mod('banner_heading'); ?>
			</h1>

			<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Contato' ) ) ); ?>" class="main-btn">
				Contato
			</a>
		</div>

		<?php get_footer(); ?>
	</div>
</main>






    
