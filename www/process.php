<?php
session_start();

$username = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['film_name'] ?? '');

$_SESSION['name'] = $username;
$_SESSION['film_name'] = $_POST['film_name'];

header("Location: index.php");
exit();