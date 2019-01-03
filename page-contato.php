<main class="container">
<?php get_header('dois') ?>
	
	<h1 class="main-title-entry">Entre <br>
		Em Contato
	</h1>

	<section class="contato">

		<div class="left">
			<h3>Dados</h3>
				<span>11 953524954</span>
				<span>hello@wwcomunicacao.com.br</span>
				<h3 class="sociais-contato">Redes Sociais</h3>
				<ul>
					<li><img src = '<?php bloginfo('template_directory'); ?>/images/icones/facebook.svg' alt = 'Design UX/UI' /></li>
					<li><img src = '<?php bloginfo('template_directory'); ?>/images/icones/instagram.svg' alt = 'Design UX/UI' /></li>
					<li><img src = '<?php bloginfo('template_directory'); ?>/images/icones/behance.svg' alt = 'Design UX/UI' /></li>
				</ul>
		</div>

		<div class="right">

			<form action="<?php echo get_template_directory_uri(); ?>/enviar.php" method="post" name="form" class="formphp contato_form grid-8">
				<label for="nome">Nome</label>
				<input id="nome" name="nome" type="text">
				<label for="email">E-mail</label>
				<input id="email" name="email" type="text">
				<label for="telefone">Telefone</label>

				<textarea name="mensagem" id="mensagem"></textarea>

				<div class="submmit">
				<button id="enviar" name="enviar" type="submit" class="btn btn-preto">Enviar</button>

				<p>Ou pelo e-mail: <a href="hello@wwcomunicacao.com.br">hello@wwcomunicacao.com.br</a></p>
				</div>

			</form>
		</div>

	</section> <!-- Servicos -->	

<?php get_footer('dois') ?>
</main>


    
