<?php
    include(dirname(__DIR__) . '/includes/db.php');
	  include(dirname(__DIR__) . '/includes/header.php');
    include(dirname(__DIR__) . '/includes/headerloggedin.php');
?>
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-lg-offset-2 col-sm-12">
      <form method="post" action="createpost.php" id="postform">
		    <input type="text" class="form-control titlerow" placeholder="Title" name="title" autocomplete="off" required>
      	<textarea class="form-control" rows="10" cols="30" name="postcontent" required></textarea>
	  	  <button class="btn btn-primary addpostbtn" type="submit" name="submit" value="Add post">Add post</button>
      </form>
    </div>
  </div>
</div>