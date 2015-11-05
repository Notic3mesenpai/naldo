<?php

if( isset( $_GET[ 'id' ] ) ) {

	$id = $_GET[ 'id' ];
		
	if( $DB->query( "DELETE FROM users WHERE id = $id" ) ) {
		$_SESSION[ 'MESSAGE' ] = "Successfully deleted user!";
		$_SESSION[ 'MESSAGE_TYPE' ] = "success";
	} else {
		$_SESSION[ 'MESSAGE' ] = "Failed in deleting user. Please try again.";
		$_SESSION[ 'MESSAGE_TYPE' ] = "danger";
	}
}