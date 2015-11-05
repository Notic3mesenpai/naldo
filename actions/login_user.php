<?php

	$username = $_POST[ 'username' ];
	$password = md5( $_POST[ 'password' ] );

	$q = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";	
	$check = $DB->query( $q );	

	if( $check && $check->num_rows ) {
		$user = $check->fetch_object();
		$_SESSION[ 'User.id' ] = $user->id;
		$_SESSION[ 'User.name' ] = $user->username;
		$_SESSION[ 'User.type_id' ] = $user->type_id;
		$_SESSION[ 'MESSAGE' ] = 'Login successful.';		
		$_SESSION[ 'MESSAGE_TYPE' ] = 'success';
		if( $user->type_id == 1 ) {
			header( "Location: " . ROOT_URL . "/?page=admin" );
		} else {
			header( "Location: " . ROOT_URL . "/?page=lessons" );
		}
	} else {
		$_SESSION[ 'MESSAGE' ] = 'Login failed.';		
		$_SESSION[ 'MESSAGE_TYPE' ] = 'danger';
	}	