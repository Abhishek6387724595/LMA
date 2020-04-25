<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_USER_NOTICE);
session_start();
if($_SESSION["username"]==""||$_SESSION["pass"]==""){
    header("location:../login.php");
}
else
{
    include_once 'login/loginClass.php';
    $loginClass=new loginClass;
    $loginClass->sessionLogin();
}

