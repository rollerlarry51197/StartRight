<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Create sections using the WordPress Customizer API.
 */
function startright_kirki_section_general( $wp_customize ) {

	/**
	 * Add sections
	 */
	//General
	$wp_customize->add_section( 'startright_section_general_logo', array(
		'title'			 => __( 'Logo', 'startright' ),
		'panel'			 => 'startright_panel_general',
		'priority'		 => 10,
		'description'	 => __( 'Upload your logo', 'startright' ),
	) );

	$wp_customize->add_section( 'startright_section_general_footer', array(
		'title'			 => __( 'Footer Copyright Text', 'startright' ),
		'panel'			 => 'startright_panel_general',
		'priority'		 => 10,
		'description'	 => __( 'Manage your Footer copyright text', 'startright' ),
	) );
}

add_action( 'customize_register', 'startright_kirki_section_general' );
