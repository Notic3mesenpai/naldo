<?php	

	$DB = new mysqli( DBHOST, DBUSER, DBPASS, DBNAME );

	$MESSAGE = "";	
	
	/*
		values: success, warning, danger, info
	*/
	$MESSAGE_TYPE = "";	

	$folder = dirname( $_SERVER[ 'PHP_SELF' ] );
	$port = isset( $_SERVER[ 'SERVER_PORT' ] ) && ! empty( $_SERVER[ 'SERVER_PORT' ] ) ? ':' . $_SERVER[ 'SERVER_PORT' ] : '';
	$protocol = isset( $_SERVER[ 'HTTPS' ] ) ? $_SERVER[ 'HTTPS' ] : 'http://';

	define('DS', DIRECTORY_SEPARATOR);
	define( 'ROOT_URL', $protocol . $_SERVER[ 'SERVER_NAME' ] . $port . $folder );	