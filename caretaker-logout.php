<?php 

session_start();
session_destroy();

header('Location: caretaker-login.php');

?>