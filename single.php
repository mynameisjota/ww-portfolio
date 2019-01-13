
<div class="container">
	<?php get_header('dois'); ?>
</div>
<div class="container wrapper">
	<section class="single-post">
		<?php while(have_posts()):the_post(); ?>
		<article>
			<h1><?php the_title(); ?></h1>
			<?php the_post_thumbnail('blog-post'); ?>

			<div class="entry-content">
				<?php the_content(); ?>
			</div>
		</article>
		<?php endwhile; ?> 
	</section>
</div>
<?php get_footer('dois'); ?>
