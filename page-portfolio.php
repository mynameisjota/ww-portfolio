<div class="container">
    <div class="portfolio-page">
        <?php get_header('dois'); ?>

<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$args = array(
    'post_type'=>'portfolio', // Your post type name
    'posts_per_page' => 2,
    'paged' => $paged,
);

$loop = new WP_Query( $args );
if ( $loop->have_posts() ) {
    while ( $loop->have_posts() ) : $loop->the_post(); ?>

    <div class="portfolio-list-home">
        <?php
        $PortfolioItems = new WP_Query(array(
            'paged' => get_query_var('paged', 1),
            'post_type' => 'portfolio',
            'posts_per_page' => 2
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

    <?php endwhile; ?>

    <?php $total_pages = $loop->max_num_pages;

    if ($total_pages > 1){

        $current_page = max(1, get_query_var('paged'));

        echo paginate_links(array(
            'base' => get_pagenum_link(1) . '%_%',
            'format' => '/page/%#%',
            'current' => $current_page,
            'total' => $total_pages,
            'prev_text'    => __('« prev'),
            'next_text'    => __('next »'),
        ));
    }    
} ?>

<?php wp_reset_postdata(); ?>
    

    </div>
</div>
<?php get_footer(); ?>







