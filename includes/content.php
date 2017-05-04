
<?php 
include(dirname(__DIR__) . '/includes/db.php');
	if($user->isloggedin()){
		include(dirname(__DIR__) . '/includes/headerloggedin.php');
		include(dirname(__DIR__) . '/includes/maincontent.php');
	}
    else{
        include(dirname(__DIR__) . '/includes/mainheader.php');
        include(dirname(__DIR__) . '/includes/maincontent.php');    
    }    
?>