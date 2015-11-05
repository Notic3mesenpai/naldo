<div class="col-lg-4">	
	<div class="panel panel-primary">
		<div class="panel-heading">Add New Lesson</div>
		<div class="panel-body">
			<form method="post" enctype="multipart/form-data">
				<input type="hidden" name="action" value="add_new_lesson">
				<div class="form-group">
			    <label for="exampleInputEmail1">Title</label>
			    <input type="text" class="form-control" name="title" placeholder="Title">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Content</label>			    
			    <textarea class="form-control" name="content" placeholder="Type your lesson's content here." rows="4"></textarea>
			  </div>			  
			  <div class="form-group">
			  	<label for="exampleInputPassword1">Upload File</label>
	  	    <input type="file" name="swf_file" class="form-control">
			  </div>
			  <div class="form-group">
			  	<label for="exampleInputPassword1">Parent Lesson</label>
				  <select class="form-control" name="parent_lesson">
				  	<option value="">- NONE -</option>
			  	<?php 
			  		$types = $DB->query( "SELECT * FROM lessons ORDER BY title ASC" );	  	
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
		$lessons = $DB->query( "SELECT l.*, lp.title AS parent_title FROM lessons AS l LEFT JOIN lessons AS lp ON l.parent = lp.id ORDER BY parent_title, title ASC" );
	?>	
	<div class="panel panel-danger">
		<div class="panel-heading">Lessons</div>		
		<table class="table table-bordered table-hovered">
			<thead>
				<tr>
					<th style="width: 30px;"><input type="checkbox"></th>
					<th>Title</th>
					<th>Parent</th>
					<th>Created</th>
					<th style="width: 130px;"></th>
				</tr>
			</thead>
			<tbody>
			<?php if( $lessons && $lessons->num_rows > 0 ) : ?>
				<?php while( $lesson = $lessons->fetch_object() ) : ?>
				<tr>
					<th><input type="checkbox"></th>
					<td>
						<?php echo $lesson->title ?>
					</td>
					<td><?php echo $lesson->parent_title ?></td>
					<td><?php echo $lesson->created ?></td>
					<td>
						<a class="btn btn-success btn-xs" href="">Edit</a>
						<a class="btn btn-warning btn-xs" href="?page=lessons&amp;action=delete_user&amp;id=<?php echo $lesson->id ?>">Delete</a>
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
