<div class="container">
	<?php get_header('dois') ?>

	<h1 class="main-title-entry services-title">Nossos<br>
		Trabalhos
	</h1>

	<div class="portfolio-page">


	<div class="portfolio-list-home">
		<?php
		$PortfolioItems = new WP_Query(array(
			'paged' => get_query_var('paged', 1),
			'post_type' => 'portfolio',
			'posts_per_page' => 8
		));

		while($PortfolioItems->have_posts()) {
			$PortfolioItems->the_post(); ?>

			<div class="item">
				<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail('port-home'); ?>
				</a>
				<a href="<?php the_permalink(); ?>">
					<h2><?php the_title(); ?></h2>
				</a>
			</div>	
		<?php wp_reset_postdata(); ?>
		<?php } ?>
	</div>


		<div class="row pagination">
			<div class="col-md-12">
				<?php 
				echo paginate_links(array(
					'total' => $PortfolioItems->max_num_pages
				));
				?>
			</div>
		</div>

	</div>
</div>
<?php get_footer('dois'); ?>

<?php wp_reset_postdata(); ?>
	









