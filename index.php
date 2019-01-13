<div class="container">
	<?php get_header('dois'); ?>

	<h1 class="main-title-entry">
		Nossas <br>Últimas Postagens.
	</h1>
</div>

<div class="container wrapper">

	<div class="blog-list">
		<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>    
			<article class="item">
				<header>
					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail('blog-list'); ?>
					</a>
				</header>
				<footer>
					<a href="<?php the_permalink(); ?>">
						<h2><?php the_title(); ?></h2>
					</a>
				</footer>
			</article>
		<?php endwhile; ?>
		<?php endif; ?>
	</div>
</div>

	<div class="pagination">
			<?php 
			echo paginate_links();
			?>
	</div>

<?php get_footer('dois'); ?>