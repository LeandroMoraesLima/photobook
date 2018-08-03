<?php 
	define('IMG', get_template_directory_uri().'/assets/img');
	define('CSS', get_template_directory_uri().'/assets/css');
	define('JS', get_template_directory_uri().'/assets/js');


	function load_scripts()
	{

		/* Registering style */
		wp_register_style('bootstrapcss', CSS . '/bootstrap.min.css', array(), '0.0.1', false );
		//wp_register_style('swipercss', CSS . '/swiper.css', array(), '0.0.1', false );
		//wp_register_style('style_css', CSS . '/app.css', array(), '0.0.4', false );

		/* Registering scripts */
		//wp_register_script( 'swiperjs', JS . '/swiper.js', array('jquery'), '0.0.1');
		wp_register_script( 'bootstrapjs', JS . '/bootstrap.min.js', array('jquery'), '0.0.1');
		//wp_register_script( 'masterjs', JS . '/master.js', array(), '0.0.1');
		

		wp_enqueue_style('bootstrapcss');
		//wp_enqueue_style('swipercss');
		//wp_enqueue_style('style_css');

		wp_enqueue_script('bootstrapjs');
		//wp_enqueue_script('swiperjs');
		//wp_enqueue_script('masterjs');
		
	}

	add_action('wp_enqueue_scripts', 'load_scripts');



 ?>