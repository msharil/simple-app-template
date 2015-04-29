<?php
session_start();

$user = $_POST['user'];
$_SESSION['pengguna'] = $user;

$passwd = $_POST['passwd'];

if(!isset($_SESSION['pengguna'])){
    header('Location: index.php');
} else	{
	header('Location: index.php?method=ShowHome');
}
	
?>