<div class="container">
	<?php get_header('dois') ?>

	<div class="portfolio">


			<?php
			$PortfolioItems = new WP_Query(array(
				'paged' => get_query_var('paged', 1),
				'post_type' => 'portfolio',
			));

			while($PortfolioItems->have_posts()) {
				$PortfolioItems->the_post(); ?>

			<div class="item">
				<a href="<?php the_permalink(); ?>">
					<div class="overlay"></div>
					<?php the_post_thumbnail('portfolio-image'); ?>
					<span class="marc"></span>
					<h2><?php the_title(); ?></h2>
				</a>
			</div>	
		<?php } ?>
	</div>


		<div class="pagination">
				<?php 
				echo paginate_links(array(
					'total' => $PortfolioItems->max_num_pages
				));
				?>
		</div>

	</div>
</div>
<?php get_footer('dois'); ?>
	









