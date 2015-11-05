<?php


if( isset( $_POST ) ) {

	$title = $_POST[ 'title' ];
	$content = $_POST[ 'content' ];	
	$parent = (int) $_POST[ 'parent_lesson' ];

	$swf_file = $_FILES[ 'swf_file' ];

	$target_dir = "swf/";
	$target_file = $target_dir . basename( $swf_file[ "name" ] );
	
	$q = "INSERT INTO lessons ( title, content, parent, swf_file, created ) VALUES( '$title', '$content', $parent, '{$swf_file[ "name" ]}', NOW() )";	

	if( $DB->query( $q ) ) {

		/*
			FILE UPLOAD HERE
		*/
		if( move_uploaded_file( $swf_file["tmp_name"], $target_file ) ) {  
	  	$_SESSION[ 'MESSAGE' ] = "SWF uploaded";
	    $_SESSION[ 'MESSAGE_TYPE' ] = "success";
	  } else {
	    $_SESSION[ 'MESSAGE' ] = "Failed to upload SWF.";
	    $_SESSION[ 'MESSAGE_TYPE' ] = "danger";
	  }
	} else {
		$_SESSION[ 'MESSAGE' ] = "Failed to add lesson. " . $DB->error;
		$_SESSION[ 'MESSAGE_TYPE' ] = "danger";
	}
}