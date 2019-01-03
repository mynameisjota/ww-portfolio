<div class="container">
	<?php get_header('dois') ?>

	<div class="portfolio-page">


			<?php
			$PortfolioItems = new WP_Query(array(
				'paged' => get_query_var('paged', 1),
				'post_type' => 'portfolio',
			));

			while($PortfolioItems->have_posts()) {
				$PortfolioItems->the_post(); ?>


		        <article class="main-project">
		            <div class="left">
		                <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
		                <span>
		                	<?php
								foreach((get_the_category()) as $category) { 
								    echo $category->cat_name . ' '; 
								} 
							?>
		                </span>
		            </div>

		            <div class="right">
		                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('portfolio-image'); ?></a>
		            </div>
		        </article> 


			<?php } ?>


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
	<?php get_footer('dois'); ?>
</div>

<?php wp_reset_postdata(); ?>
	









