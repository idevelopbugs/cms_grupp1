<?php
	include "header.php";
?>

<!--<form method="post" action="createpost.php" id="postform">
	<input type="text" value="Title" name="title" required> <br>
	<textarea rows="10" cols="30" name="postcontent" required></textarea><br>
	<input type="submit" value="Add post" name="submit">
</form>-->

<div class="container-fluid">
  <form method="post" action="createpost.php" id="postform">
    <div class="form-group col-sm-4">
		<input type="text" class="form-control" placeholder="Title" name="title" autocomplete="off">
      	<textarea class="form-control" rows="10" cols="30" name="postcontent" required></textarea>
	  	<button class="btn btn-primary" type="submit" name="submit" value="Add post">Add post</button>
    </div>
  </form>
</div>