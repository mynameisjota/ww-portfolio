<div class="container">
	<?php get_header('dois'); ?>
	<section class="single-post">
		<main class="content">
			<?php while(have_posts()):the_post(); ?>
			<article>
				<h1><?php the_title(); ?></h1>
				<?php the_post_thumbnail('blog-post'); ?>

				<div class="entry-content">
					<?php the_content(); ?>
				</div>
			</article>
			<?php endwhile; ?> 
		</main>
		<aside class="sidebar-single">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</aside>
	</section>
	<?php get_footer('dois'); ?>
</div>