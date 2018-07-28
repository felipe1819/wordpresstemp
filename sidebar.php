<aside class="sidebar">
	<div id="sidebar">
		
		<?php //IMPRIMIR SIDEBAR Mywidget1
			if ( !function_exists('dynamic_sidebar')
		 			|| !dynamic_sidebar('Mywidget1') ) : ?> 

		<?php endif; ?>

	</div>

	<div id="sidebar">
		
		<?php //IMPRIMIR SIDEBAR Mywidget2
			if ( !function_exists('dynamic_sidebar')
		 			|| !dynamic_sidebar('Mywidget2') ) : ?> 

		<?php endif; ?>

	</div>



</aside>