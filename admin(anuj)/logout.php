<?php
session_start();
$_SESSION=array();
if(isset($_COOKIE["id"]) && isset($_COOKIE["type"]) && isset($_COOKIE["email"])){
	setcookie("id",'',strtotime('-5 days'),'/');
	setcookie("user",'',strtotime('-5 days'),'/');
	setcookie("pass",'',strtotime('-5 days'),'/');
}
session_destroy();
if(isset($_SESSION['type'])){
	echo '<script language="javascript">';
	echo 'alert("Logout Failed")';
	echo '</script>';
}
else{
	header("Location: ./index.php");
	exit();
}
?>