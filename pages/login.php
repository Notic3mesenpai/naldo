<?php include './elements/header.php'; ?>


<div class="row">
	<div class="col-lg-12">
		<form method="post" action="">
			<input type="hidden" name="action" value="login_user">
		  <div class="form-group">
		    <label for="exampleInputEmail1">Username</label>
		    <input type="text" name="username" class="form-control" id="exampleInputEmail1" placeholder="Username">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Password</label>
		    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
		  </div>		  
		  <button type="submit" class="btn btn-default">Submit</button>
		</form>
	</div>
</div>

<?php include './elements/footer.php'; ?>