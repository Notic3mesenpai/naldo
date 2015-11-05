<?php include './elements/header.php'; ?>

<?php
	$WHERES = array();
	$lesson_num = isset( $_GET[ 'lesson_num' ] ) ? " id = " . $_GET[ 'lesson_num' ] : "";
	$user_type = isset( $_SESSION[ 'User.type_id' ] ) ? " user_type_id = " . $_SESSION[ 'User.type_id' ] : "";

	if( $lesson_num ) {
		$WHERES[] = $lesson_num;
	}
	if( $user_type ) {
		$WHERES[] = $user_type;
	}

	$WHERES = implode( ' AND ', $WHERES );

	$lessons = $DB->query( "SELECT * FROM $WHERES" );
?>

<h1>Lessons</h1>

<div class="col-lg-8">
	<?php while( $lesson = $lessons->fetch_object() ) : ?>

	<?php endwhile; ?>
</div>

<?php include './elements/footer.php'; ?>