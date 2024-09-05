<?php
/**
 * Hooks for importer
 *
 * @package Restimo
 */


/**
 * Importer the demo content
 *
 * @since  1.0
 *
 */
function restimo_importer() {
	return array(
		array(
			'name'       => 'Coffee 1',
			'preview'    => get_template_directory_uri().'/inc/backend/data/coffee/home1.jpg',
			'content'    => get_template_directory_uri().'/inc/backend/data/coffee/demo-content.xml',
			'customizer' => get_template_directory_uri().'/inc/backend/data/coffee/customizer.dat',
			'widgets'    => get_template_directory_uri().'/inc/backend/data/coffee/widgets.wie',
			'sliders'    => 'https://dpsample.com/sliders.zip',
			'pages'      => array(
				'front_page' => 'Home',
				'blog'       => 'Blog',
				'shop'       => 'Shop',
				'cart'       => 'Cart',
				'checkout'   => 'Checkout',
				'my_account' => 'My Account',
			),
			'menus'      => array(
				'primary'   => 'main-menu',
			)
		),
	);
}

add_filter( 'soo_demo_packages', 'restimo_importer', 30 );