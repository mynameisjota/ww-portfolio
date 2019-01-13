<div class="main-content">
	<div class="container">
		<?php get_header();?>

		<div class="callHome">
			<h1 class="animated fadeInLeft">
				<?php echo get_theme_mod('banner_heading'); ?>
			</h1>

			<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Contato' ) ) ); ?>" class="main-btn animated fadeInLeft">
				Contato
			</a>
		</div>

	</div>
</div>

<main class="container">	
	<h1 class="main-title-entry services-title">O que <br>
		Oferecemos?
	</h1>

	<section class="servicos">

		<ul class="lista-servicos">
			<li><a href="#ui">UI/UX Design</a></li>
			<li><a href="#dev">Desenvolvimento</a></li>
			<li><a href="#mark">Marketing Digital</a></li>
			<li><a href="#sup">Suporte</a></li>
		</ul>
		
		<div class="item uow fadeInLeft" id="ui">

			<header>
				<h2><?php echo the_field('servico_01'); ?></h2>
				<p><?php echo the_field('servico_01_descricao'); ?></p>
			</header>

			<div class="left">
				<img src = '<?php bloginfo('template_directory'); ?>/images/icones/design.svg' alt = 'Design UX/UI' />
			</div> <!-- LEFT -->

			<div class="right">
				<?php echo the_field('servico_01_lista'); ?>

				<p>
					<?php echo the_field('conteudo_do_servico_01'); ?>
				</p>
			</div>
		</div>

		<div class="item" id="dev">
				<header>
					<h2><?php echo the_field('servico_02'); ?></h2>
					<p><?php echo the_field('servico_02_descricao'); ?></p>
				</header>
			<div class="left">
				<img src = '<?php bloginfo('template_directory'); ?>/images/icones/codigo.svg' alt = 'Design UX/UI' />
			</div> <!-- LEFT -->

			<div class="right">
				<?php echo the_field('servico_02_lista'); ?>

				<p>
					<?php echo the_field('conteudo_do_servico_02'); ?>
				</p>
			</div>
		</div>

		<div class="item" id="mark">
				<header>
					<h2><?php echo the_field('servico_03'); ?></h2>
					<p><?php echo the_field('servico_03_descricao'); ?></p>
				</header>
			<div class="left">

				<img src = '<?php bloginfo('template_directory'); ?>/images/icones/suporte.svg' alt = 'Design UX/UI' />
			</div> <!-- LEFT -->

			<div class="right">
				<?php echo the_field('servico_03_lista'); ?>

				<p>
					<?php echo the_field('conteudo_do_servico_03'); ?>
				</p>
			</div>
		</div>

		<div class="item" id="sup">
				<header>
					<h2><?php echo the_field('servico_03'); ?></h2>
					<p><?php echo the_field('servico_03_descricao'); ?></p>
				</header>
			<div class="left">

				<img src = '<?php bloginfo('template_directory'); ?>/images/icones/suporte.svg' alt = 'Design UX/UI' />
			</div> <!-- LEFT -->

			<div class="right">
				<?php echo the_field('servico_03_lista'); ?>

				<p>
					<?php echo the_field('conteudo_do_servico_03'); ?>
				</p>
			</div>
		</div>

	</section> <!-- Servicos -->

	<div class="call-to-action">
		<h1>Parece bom, mas eu tenho algumas perguntas</h1>
		<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Contato' ) ) ); ?>" class="contato">
			Contato
		</a>
	</div>

	<h1 class="main-title-entry services-title">Últimos<br>
		Trabalhos
	</h1>

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

	<div class="mais-trabalhos">
		<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Portfolio' ) ) ); ?>" class="">
			Mais Trabalhos
		</a>
	</div>

		<h1 class="main-title-entry">Nossos <br>
		Clientes dizem
	</h1>

	<section class="depoimentos slide">
		<div class="item">

			<div class="left">
				<?php if( get_field('foto_depoimento_01') ): ?>

					<img src="<?php the_field('foto_depoimento_01'); ?>" />

				<?php endif; ?>
			</div>

			<div class="right">
				<h3><?php echo  the_field('titulo_depoimento_01'); ?></h3>
				<a href="<?php the_field('link_depoimento_01'); ?>" target="_blank"><?php echo the_field('site_depoimento_01'); ?></a>

				<p>
					<?php echo the_field('depoimento_01'); ?>
				</p>
			</div>

		</div>

		<div class="item">

			<div class="left">
				<?php if( get_field('foto_depoimento_02') ): ?>

					<img src="<?php the_field('foto_depoimento_02'); ?>" />

				<?php endif; ?>
			</div>

			<div class="right">
				<h3><?php echo  the_field('titulo_depoimento_02'); ?></h3>
				<a href="<?php the_field('link_depoimento_02'); ?>" target="_blank"><?php echo the_field('site_depoimento_02'); ?></a>

				<p>
					<?php echo the_field('depoimento_02'); ?>
				</p>
			</div>

		</div>

		<div class="item">

			<div class="left">
				<?php if( get_field('foto_depoimento_03') ): ?>

					<img src="<?php the_field('foto_depoimento_03'); ?>" />

				<?php endif; ?>
			</div>

			<div class="right">
				<h3><?php echo  the_field('titulo_depoimento_03'); ?></h3>
				<a href="<?php the_field('link_depoimento_03'); ?>" target="_blank"><?php echo the_field('site_depoimento_03'); ?></a>

				<p>
					<?php echo the_field('depoimento_03'); ?>
				</p>
			</div>

		</div>
	</section>
</main>

<?php get_footer('dois') ?>


    









    
