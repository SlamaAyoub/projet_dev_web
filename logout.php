<?php
session_start();
include('connexion.php');
session_unset();
session_destroy();
header('location:login.php');
?>