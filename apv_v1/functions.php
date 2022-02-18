<?php

function agregar_css_js(){
    wp_enqueue_style('style', get_stylesheet_uri());

    wp_enqueue_script('count', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js', array('jquery'), '1.0', true);

    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/functions.js', array ( 'count' ), 1.1, true);
    wp_enqueue_script( 'script1', get_template_directory_uri() . '/js/form.js', array ( 'script' ), 1.1, true);
	wp_enqueue_script( 'script2', get_template_directory_uri() . '/js/writting-machine.js', array ( 'script1' ), 1.2, true);
	

    wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js', array('script1'), '1.0', true);
	wp_enqueue_script('slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('popper'), '1.0', true);

	
    //wp_enqueue_script('count', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js', array('popper'), '1.0', true);


}

function bps_enqueue_font() { 
	wp_enqueue_style('google-font-roboto', 'https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@100&display=swap', array());}
	
	add_action( 'wp_enqueue_scripts', 'bps_enqueue_font' );

if ( function_exists( 'add_theme_support' ) )
add_theme_support( 'post-thumbnails' );

add_action('wp_enqueue_scripts', 'agregar_css_js');

	//API Call
	function callAPI($param)
	{
		//extract data from the post
		extract($_POST);
		$fields_string = '';

		//set POST variables
		$url = get_bloginfo( "url" ).'/api/';
		//$param = substr($param, 0, -1);
		//$param.= ',"app":"inc_backend","apikey":"2895b89346258eea8cd184e80876518823d46ac8","platform":"web"}';
		$fields = array
		(
			'param'=>urlencode($param)
		);

		//url-ify the data for the POST
		foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&amp;'; }
		rtrim($fields_string,'&amp;');

		//open connection
		$ch = curl_init();

		//set the url, number of POST vars, POST data
		curl_setopt($ch,CURLOPT_URL,$url);
		curl_setopt($ch,CURLOPT_POST,count($fields));
		curl_setopt($ch,CURLOPT_POSTFIELDS,$fields_string);
		curl_setopt($ch, CURLOPT_HEADER, false);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);

		//execute post
		$result = curl_exec($ch);
		$status = curl_getinfo($ch);

		//close connection
		curl_close($ch);

		return $result;
	}
    //Indent JSON
	function indent($json)
	{
	    $result      = '';
	    $pos         = 0;
	    $strLen      = strlen($json);
	    $indentStr   = '  ';
	    $newLine     = "\n";
	    $prevChar    = '';
	    $outOfQuotes = true;

	    for ($i=0; $i<=$strLen; $i++) {

	        // Grab the next character in the string.
	        $char = substr($json, $i, 1);

	        // Are we inside a quoted string?
	        if ($char == '"' && $prevChar != '\\') {
	            $outOfQuotes = !$outOfQuotes;

	        // If this character is the end of an element,
	        // output a new line and indent the next line.
	        } else if(($char == '}' || $char == ']') && $outOfQuotes) {
	            $result .= $newLine;
	            $pos --;
	            for ($j=0; $j<$pos; $j++) {
	                $result .= $indentStr;
	            }
	        }

	        // Add the character to the result string.
	        $result .= $char;

	        // If the last character was the beginning of an element,
	        // output a new line and indent the next line.
	        if (($char == ',' || $char == '{' || $char == '[') && $outOfQuotes) {
	            $result .= $newLine;
	            if ($char == '{' || $char == '[') {
	                $pos ++;
	            }

	            for ($j = 0; $j < $pos; $j++) {
	                $result .= $indentStr;
	            }
	        }

	        $prevChar = $char;
	    }

	    return $result;
	}

    //Print JSON
	function printJSON($array)
	{
		$json = json_encode($array);
		header('Content-Type: application/json',true);
		echo indent($json);
	}

	/*
	**** POST TYPE TUTORIALES ****
	*/
	function register_escuderia_posttype() {
		$labels = array(
			'name'               => _x( 'Escuderias', 'escuderiaswp' ),
			'singular_name'      => _x( 'Escuderia', 'escuderiaswp' ),
			'add_new'            => __( 'Añadir nuevo','escuderiaswp'),
			'add_new_item'       => __( 'Nuevo','escuderiaswp'),
			'edit_item'          => __( 'Editar','escuderiaswp' ),
			'new_item'           => __( 'Nuevo ','escuderiaswp' ),
			'all_items'          => __( 'Campeonato de constructores','escuderiaswp' ),
			'view_item'          => __( 'Ver','escuderiaswp'),
			'search_items'       => __( 'Buscar','escuderiaswp'),
			'not_found'          => __( 'No encontrado!','escuderiaswp' ),
			'not_found_in_trash' => __( 'No encontrado en la papelera','escuderiaswp' ),
			'parent_item_colon'  => '',
			'menu_name'          => __('Escuderia','escuderiaswp'));
		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'show_ui'            => true,
			'publicly_queryable' => true,
			'rewrite'            => array( 'slug' => 'escuderia' ),
			'has_archive'        => true,
			'capability_type'    => 'post',
			'menu_icon'          => 'dashicons-editor-table',
			'can_export'         => true,
			'menu_position'      => 5,
			'supports'           => array('title')
		);
		register_post_type( 'Escuderia', $args );	
	}

	add_action( 'init', 'register_Escuderia_posttype' );

		/*
	**** POST TYPE TUTORIALES ****
	*/
	function register_tutorial_posttype() {
		$labels = array(
			'name'               => _x( 'Pilotos', 'tutorialeswp' ),
			'singular_name'      => _x( 'Piloto', 'tutorialeswp' ),
			'add_new'            => __( 'Añadir nuevo','tutorialeswp'),
			'add_new_item'       => __( 'Nuevo tutorial','tutorialeswp'),
			'edit_item'          => __( 'Editar tutorial','tutorialeswp' ),
			'new_item'           => __( 'Nuevo tutorial','tutorialeswp' ),
			'all_items'          => __( 'Campeonato de pilotos','tutorialeswp' ),
			'view_item'          => __( 'Ver tutorial','tutorialeswp'),
			'search_items'       => __( 'Buscar tutorial','tutorialeswp'),
			'not_found'          => __( 'No encontrado!','tutorialeswp' ),
			'not_found_in_trash' => __( 'No encontrado en la papelera','tutorialeswp' ),
			'parent_item_colon'  => '',
			'menu_name'          => __('Pilotos','tutorialeswp'));
		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'show_ui'            => true,
			'publicly_queryable' => true,
			'rewrite'            => array( 'slug' => 'piloto' ),
			'has_archive'        => true,
			'capability_type'    => 'post',
			'menu_icon'          => 'dashicons-admin-users',
			'can_export'         => true,
			'menu_position'      => 5,
			'supports'           => array('title')
		);
		register_post_type( 'tutorial', $args );	
	}

	add_action( 'init', 'register_tutorial_posttype' );

			/*
	**** POST TYPE SIGUIENTE CARRERA ****
	*/
	function register_carrera_posttype() {
		$labels = array(
			'name'               => _x( 'Carreras', 'carrerawp' ),
			'singular_name'      => _x( 'Carreras', 'carrerawp' ),
			'add_new'            => __( 'Añadir nuevo','carrerawp'),
			'add_new_item'       => __( 'Nuevo Carrera','carrerawp'),
			'edit_item'          => __( 'Editar Carrera','carrerawp' ),
			'new_item'           => __( 'Nuevo Carrera','carrerawp' ),
			'all_items'          => __( 'Siguiente Carrera','carrerawp' ),
			'view_item'          => __( 'Ver Carrera','carrerawp'),
			'search_items'       => __( 'Buscar Carrera','carrerawp'),
			'not_found'          => __( 'No encontrado!','carrerawp' ),
			'not_found_in_trash' => __( 'No encontrado en la papelera','carrerawp' ),
			'parent_item_colon'  => '',
			'menu_name'          => __('Carreras','carrerawp'));
		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'show_ui'            => true,
			'publicly_queryable' => true,
			'rewrite'            => array( 'slug' => 'carrera' ),
			'has_archive'        => true,
			'capability_type'    => 'post',
			'menu_icon'          => 'dashicons-calendar',
			'can_export'         => true,
			'menu_position'      => 5,
			'supports'           => array('title')
		);
		register_post_type( 'carrera', $args );	
	}

	add_action( 'init', 'register_carrera_posttype' );


	//Change Footer Text
	add_filter( 'admin_footer_text', 'my_footer_text' );
	add_filter( 'update_footer', 'my_footer_version', 11 );
	function my_footer_text() {
	    return '<i>Telemetría F1</i>';
	}
	function my_footer_version() {
	    return 'Version 1.0';
	}

?>