<main class="container">
<?php get_header('dois') ?>
	
	<h1 class="main-title-entry">O que <br>
		Oferecemos?
	</h1>

	<section class="servicos">
		
		<div class="item">

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

		<div class="item">
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

		<div class="item">
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


    
