<?php get_header(); ?>
	<div>
		<div>
			<h1><?php the_title(); ?></h1>

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 

				<?php the_content(); ?> <!-- Impresso o conteudo da página -->

			<?php endwhile; else: ?> <!-- se não houver conteúdo -->

				<h2>Nada Encontrado</h2>

			<?php endif; ?>
		</div>
	</div>


