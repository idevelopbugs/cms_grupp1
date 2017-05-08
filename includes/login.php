<?php
	include(dirname(__DIR__) . '/includes/db.php');
    $errormessage = $user->login();
    if($errormessage) {
        header('refresh:2; url=../index.php?error=' . $errormessage);
    } else {
        header('refresh:2; url=../index.php');
    }
    


    