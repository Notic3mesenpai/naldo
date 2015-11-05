<?php include './elements/header.php'; ?>

<h1>Lessons</h1>

<?php  
	if( isset( $_SESSION[ 'User.type_id' ] ) && $_SESSION[ 'User.type_id' ] == 1 ) {
		include './elements/lesson_admin_view.php';
	} else {
		include './elements/lesson_student_view.php';
	}
?>

<?php include './elements/footer.php'; ?>