<?php if( isset( $_SESSION[ 'User.type_id' ] ) ) : ?>
	<div class="list-group">
	  <a href="#" class="list-group-item active">
	    Your available Series:
	  </a>
	  <?php
	  	$type_id = isset( $_SESSION[ 'User.type_id' ] ) ? $_SESSION[ 'User.type_id' ] : null;

	  	if( $type_id ) :
	  		$series = $DB->query( "SELECT * FROM series WHERE user_type_id = $type_id" );
	  		if( $series && $series->num_rows ) :
	  			while( $s = $series->fetch_object() ) :
	  ?>
				  <a href="#" class="list-group-item"><?php echo $s->title ?></a>								  
	  		<?php endwhile; ?>
	  	<?php endif; ?>
		<?php endif; ?>
	</div>
<?php endif; ?>