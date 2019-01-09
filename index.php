<main class="container">
<?php get_header('dois') ?>

<div class="main-blog">
<h1 class="main-title-entry" style="width: 100%;">Nossas<br> Postagens</h1>
<div class="left">

<?php

  $page = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;

  $aboutPosts = new WP_Query(array(
    'paged' => $page,
    'category__not_in' => 3
  ));

  if ($aboutPosts->have_posts()) :
    while ($aboutPosts->have_posts()) :
      $aboutPosts->the_post();
      ?>

	<article>
		<a href="<?php the_permalink(); ?>">
			<h2><?php the_title(); ?></h2>
			<span><?php the_category(); ?></span>
		</a>
	</article>

      <?php
    endwhile;

    echo paginate_links(array(
      'total' => $aboutPosts->max_num_pages
    ));

  endif; wp_reset_postdata;

?>


</div> <!-- left -->




<div class="right">
	<?php
	global $post;
	$args = array(
		'posts_per_page' => 1
	);
	$myposts = get_posts( $args );
	foreach( $myposts as $post ) : setup_postdata($post); ?>
		<div class="right-image">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail('blog-list'); ?>
			</a>
		</div>
		<a href="<?php the_permalink(); ?>">
			<h1><?php the_title(); ?></h1>
		</a>
		<span><?php the_category(); ?></span>
	<?php endforeach; wp_reset_postdata(); ?>
</div> <!-- right -->

</div>
</main>

<?php get_footer('dois') ?>


    
