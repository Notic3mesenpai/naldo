<?php include './elements/header.php'; ?>

<?php
	$WHERES = array();
	$lesson_num = isset( $_GET[ 'lesson_num' ] ) ? $_GET[ 'lesson_num' ] : null;
	$lesson_query = isset( $lesson_num ) ? " id = " . $lesson_num : "";
	$user_type = isset( $_SESSION[ 'User.type_id' ] ) ? " user_type_id = " . $_SESSION[ 'User.type_id' ] : "";

	if( $lesson_num ) {
		$WHERES[] = $lesson_query;
	}
	if( $user_type ) {
		$WHERES[] = $user_type;
	}

	$WHERES = "WHERE" . implode( ' AND ', $WHERES );
	$q = "SELECT * FROM lessons $WHERES";
	
	$lessons = $DB->query( $q );
?>

<h1>Lessons</h1>

<div class="col-lg-8">
	<?php while( $lesson = $lessons->fetch_object() ) : ?>
		
	<?php endwhile; ?>
</div>

<?php include './elements/footer.php'; ?>