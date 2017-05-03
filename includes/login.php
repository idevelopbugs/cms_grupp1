<?php
	include 'db.php';

    $user = new User($pdo);
    $user->login();

    