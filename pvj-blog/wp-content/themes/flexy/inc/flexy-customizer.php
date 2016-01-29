<?php


    // Setting group for selecting slider
  
   
   $wp_customize->add_section( 'flexy_slider_options' , array(
    'title'      => __('Slider Options','flexy'),
    'priority'   => 70,
   ) );
   
    $wp_customize->add_section( 'flexy_blogfeed_excerpts' , array(
    'title'      => __('Blogfeed Excerpts','flexy'),
    'priority'   => 80,
   ) );
   
     // Excerpts on blog feed********************************
   
  
$wp_customize->add_setting(
		'flexy_blogfeed_excerpts',
		array(
			'sanitize_callback' => 'flexy_sanitize_checkbox',
		)		
	);	
	
    $wp_customize->add_control(
    'flexy_blogfeed_excerpts',
    array(
        'type' => 'checkbox',
        'label' => __('Switch to exceprts on blog feed?','flexy'),
        'section' => 'flexy_blogfeed_excerpts',
		'priority' => '2',
        )
    );
	
	$wp_customize->add_setting(
    'flexy_excerpt_length', array(
			'sanitize_callback' => 'absint',
		)
    );

    $wp_customize->add_control(
    'flexy_excerpt_length',
    array(
        'type' => 'text',
		'default' => '',
        'label' => __('Define the excerpt length (default is 80 chars)','flexy'),
        'section' => 'flexy_blogfeed_excerpts',
		'priority' => '3',
        )
    );
   
   // Begin slider section
	$wp_customize->add_setting( 'flexy_slider_transition', array(
		'default' => 'slide',
	    'sanitize_callback' => 'flexy_sanitize_slider_transition',
	) );
	
	
    $wp_customize->add_control( 'flexy_slider_transition', array(
    'label'   => __( 'Slider Transition', 'flexy' ),
    'section' => 'flexy_slider_options',
	'priority' => '2',
    'type'    => 'radio',
        'choices' => array(
            'slide' => __( 'Slide', 'flexy' ),
            'slide carousel-fade' => __( 'Fade', 'flexy' ),
        ),
    ));
	
    //  = Category Dropdown =

    $categories = get_categories();
	$cats = array();
	$i = 0;
	foreach($categories as $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cats[$category->slug] = $category->name;
	}
 
	$wp_customize->add_setting('flexy_slide_cat', array(
		'default'        => $default,
		'sanitize_callback' => 'esc_attr',
		 
	));
	$wp_customize->add_control( 'flexy_slide_cat', array(
		'settings' => 'flexy_slide_cat',
		'label'   => __('Select Slider Category:','flexy'),
		'section'  => 'flexy_slider_options',
		'priority' => '3',
		'type'    => 'select',
		'choices' => $cats,
	));
	
	$wp_customize->add_setting(
    'flexy_slide_number', array(
			'sanitize_callback' => 'absint',
		)
	     );

    $wp_customize->add_control(
    'flexy_slide_number',
    array(
        'type' => 'text',
		'default' => 5,
        'label' => __('Number Of Slides To Show - i.e 10 (default is 5)','flexy'),
        'section' => 'flexy_slider_options',
		'priority' => '4',
        )
    );
	
	$wp_customize->add_setting(
    'flexy_slider_excerpt', array(
			'sanitize_callback' => 'absint',
		)
    );

	
	
    $wp_customize->add_control(
    'flexy_slider_excerpt',
    array(
        'type' => 'text',
		'default' => 40,
        'label' => __('Enter excerpt length for the slider (default is 40)','flexy'),
        'section' => 'flexy_slider_options',
        )
    );
	
	$wp_customize->add_setting(
    'flexy_slider_visibility', array(
			'sanitize_callback' => 'flexy_sanitize_checkbox',
		)
    );

    $wp_customize->add_control(
    'flexy_slider_visibility',
    array(
	    'type' => 'checkbox',
        'label' => __('Show Home Slider','flexy'),
		'section' => 'flexy_slider_options',
		'priority' => 1,
        )
    );
/**
 * Sanitization
 */
//Checkboxs
function flexy_sanitize_checkbox( $input ) {
	if ( $input == 1 ) {
		return 1;
	} else {
		return '';
	}
}
//Slider
function flexy_sanitize_slider_transition( $input ) {
    $valid = array(
        'slide' => 'Slide',
        'slide carousel-fade' => 'Fade',
        
    );
 
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

