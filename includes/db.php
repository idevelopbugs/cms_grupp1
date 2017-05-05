<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $options = [ 
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
      PDO::ATTR_EMULATE_PREPARES   => false
    ];

    $pdo = new PDO(
      "mysql:host=localhost;dbname=cms_grupp1;charset=utf8",
      "root",
      "root", $options);

    //set timezone
    date_default_timezone_set("Europe/Stockholm");

    spl_autoload_register(function ($class) {
           include(dirname(__DIR__)) . "/classes/" . $class . ".php";
       });
    $user = new User($pdo);
    $post = new Post($pdo);
