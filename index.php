	
	<?php get_header(); ?>

	<section class="content">
		<h1>Site1</h1>
		
		<?php // Imprimir posts ?>

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 

			<h1>
				<a href="<?php echo get_attachment_link(); ?>">
					<?php the_title(); ?>
				</a>
			</h1>

			<p><?php the_content(); ?></p>

			<p><?php comments_number('0 Comentários', '1Comentário', '% Comentários'); ?></p>

		<?php endwhile; else : ?>
			<p><?php _e( 'Nenhum post encontrado!' ); ?></p>
		<?php endif; ?>

	</section>
	
	<?php get_sidebar(); ?>
	
	<?php get_footer(); ?>