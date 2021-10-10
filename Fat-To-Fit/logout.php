<?php 

session_start();
session_destroy();

header("Location: welcomemenu.php");

?>