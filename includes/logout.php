<?php
	include(dirname(__DIR__) . '/includes/db.php');
	$user->logout();
    header('Location: ../index.php');
?>