<?php include './elements/header.php'; ?>

<?php
	$products = $DB->query( "SELECT * FROM products" );	
?>

<h1>Lessons</h1>


<?php include './elements/footer.php'; ?>