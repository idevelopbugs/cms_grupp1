<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


$options = [ 
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
  PDO::ATTR_EMULATE_PREPARES   => false
];

$pdo = new PDO(
  "mysql:host=localhost;dbname=cms_grupp1;charset=utf8",
  "root",
  "root", $options);

spl_autoload_register(function ($class) {
       include(dirname(__DIR__)) . "/classes/" . $class . ".php";
   });
$user = new User($pdo);
