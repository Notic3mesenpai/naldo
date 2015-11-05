<?php include './elements/header.php'; ?>

<h1>Accounts</h1>

<div class="col-lg-4">	
	<div class="panel panel-primary">
		<div class="panel-heading">Add New User</div>
		<div class="panel-body">
			<form method="post">
				<input type="hidden" name="action" value="add_new_user">
				<div class="form-group">
			    <label for="exampleInputEmail1">ID Number</label>
			    <input type="text" class="form-control" name="id_number" placeholder="ID Number">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Username</label>
			    <input type="text" class="form-control" name="username" placeholder="Username">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Password</label>
			    <input type="text" class="form-control" name="password" placeholder="Password">
			  </div>	  
			  <div class="form-group">
			  	<label for="exampleInputPassword1">Type</label>
				  <select class="form-control" name="type_id">
			  	<?php 
			  		$types = $DB->query( "SELECT * FROM user_types ORDER BY title ASC" );	  	
						while( $type = $types->fetch_object() ) :	  		
			  	?>
			  		<option value="<?php echo $type->id ?>"><?php echo strtoupper( $type->title ) ?></option>
			  	<?php endwhile; ?>
				  </select>	  
			  </div>
			  <button type="submit" class="btn btn-default">Submit</button>
			</form>
		</div>
	</div>	
</div>

<div class="col-lg-8">
	<?php
		$users = $DB->query( "SELECT u.*, ut.title FROM users AS u LEFT JOIN user_types AS ut ON u.type_id = ut.id ORDER BY username ASC" );
	?>	
	<div class="panel panel-danger">
		<div class="panel-heading">User</div>		
		<table class="table table-bordered table-hovered">
			<thead>
				<tr>
					<th style="width: 30px;"><input type="checkbox"></th>
					<th>ID</th>
					<th>Username</th>
					<th>Type</th>
					<th style="width: 130px;"></th>
				</tr>
			</thead>
			<tbody>
			<?php if( $users && $users->num_rows > 0 ) : ?>
				<?php while( $user = $users->fetch_object() ) : ?>
				<tr>
					<th><input type="checkbox"></th>
					<td>
						<?php echo $user->id_number ?>
					</td>
					<td><?php echo $user->username ?></td>
					<td><?php echo $user->title ?></td>
					<td>
						<a class="btn btn-success btn-xs" href="">Edit</a>
						<a class="btn btn-warning btn-xs" href="?page=accounts&amp;action=delete_user&amp;id=<?php echo $user->id ?>">Delete</a>
					</td>
				</tr>
				<?php endwhile; ?>
			<?php else : ?>
				<tr>
					<td colspan="4">No Current record.</td>
				</tr>			
			<?php endif; ?>
			</tbody>
		</table>		
		<div class="panel-footer">
			1 2 3
		</div>
	</div>	

</div>

<?php include './elements/footer.php'; ?>