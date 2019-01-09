<main class="container">
<?php get_header('dois') ?>
	
	<h1 class="main-title-entry">Entre <br>
		Em Contato
	</h1>

	<section class="contato">

		<div class="left">
			<p class="intro">
				<strong>O seu contato é importante.</strong> <br>
				Nós estamos disponíveis para tirar qualquer duvida. Apresente o seu projeto e vamos trabalhar juntos, para que ele alcance os seus objetivos de negocio. 
			</p>
			<h3>Dados</h3>
				<address>
				<p>Escreva para: <a href="mailto:contato@wolfsway.com.br">Wolfsway</a>.<br></p> 
				<span><strong>Telefone: </strong>+55 (11) 95352-4954</span>
				<span><strong>Local: </strong>Brasil / São Paulo - Capital</span>
				</address>

				<h3 class="sociais-contato">Somos Sociaveis</h3>
				<p class="intro2">Considere nos seguir nas redes sociais</p>
				<ul>
					<a href="https://www.facebook.com/agenciawolfsway" target="_blank"><li><img src = '<?php bloginfo('template_directory'); ?>/images/icones/facebook.svg' alt = 'Design UX/UI' /></li></a>
					<li><a href="https://www.instagram.com/hello.wolfsway" target="_blank"><li><img src = '<?php bloginfo('template_directory'); ?>/images/icones/instagram.svg' alt = 'Design UX/UI' /></li></a>
					<li><a href="https://www.behance.net/wolfsway" target="_blank"><li><img src = '<?php bloginfo('template_directory'); ?>/images/icones/behance.svg' alt = 'Design UX/UI' /></li></a>
				</ul>
		</div>

		<div class="right">

			<form action="<?php echo get_template_directory_uri(); ?>/enviar.php" method="post" name="form" class="formphp contato_form grid-8">
				<label for="nome">Nome</label>
				<input id="nome" name="nome" type="text">
				<label for="email">E-mail</label>
				<input id="email" name="email" type="text">
				<label for="mensagem">Mensagem</label>

				<textarea name="mensagem" id="mensagem"></textarea>

				<div class="submmit">
				<button id="enviar" name="enviar" type="submit" class="btn btn-preto">Enviar</button>

				<p>Ou pelo e-mail: <a href="mailto:hello@wolfsway.com.br">hello@wwcomunicacao.com.br</a></p>
				</div>

			</form>
		</div>

	</section> <!-- Servicos -->	
</main>

<?php get_footer('dois') ?>


    
