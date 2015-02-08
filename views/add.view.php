
<form method="POST" action="do_add.php" enctype="multipart/form-data" >
	<label>Title</label>
	<input type="text" name="title"> <br>
	<label for="">
		description
	</label><textarea name="body" id="" cols="30" rows="10"></textarea>
	<br>
	<label>Image</label>
	<input type="file" name="picture">
	<br>
	<input type="submit" value="add" name="submit">
</form>