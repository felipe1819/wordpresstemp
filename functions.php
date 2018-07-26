<?php
	//widgets -> REGISTRO
	//nome do widget: Mywidget1
	if (function_exists('register_sidebar')) {
		register_sidebar(array(
			'name'			=> 'Mywidget1',
			'before_widget'	=> '<div class="widget">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<h3>',
			'after_title'	=> '</h3>',
		));
	}

	//nome do widget: Mywidget2
	if (function_exists('register_sidebar')) {
		register_sidebar(array(
			'name'			=> 'Mywidget2',
			'before_widget'	=> '<div class="widget">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<h3>',
			'after_title'	=> '</h3>',
		));
	}
	?>