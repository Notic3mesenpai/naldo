<?php

	$id_number = $_POST[ 'id_number' ];
	$username = $_POST[ 'username' ];
	$password = md5( $_POST[ 'password' ] );
	$type_id = $_POST[ 'type_id' ];

	if( $DB->query( "INSERT INTO users ( id_number, username, password, type_id ) VALUES( '$id_number', '$username', '$password', $type_id )" ) ) {
		$_SESSION[ 'MESSAGE' ] = "User successfully added!";
		$_SESSION[ 'MESSAGE_TYPE' ] = "success";
	} else {
		$_SESSION[ 'MESSAGE' ] = "Failes in adding new user. Please try again.";
		$_SESSION[ 'MESSAGE_TYPE' ] = "danger";
	}