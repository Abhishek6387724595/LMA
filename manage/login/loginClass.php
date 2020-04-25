<?php
session_start();
require_once (dirname( __FILE__).'/../functions/connectionClass.php');
class loginClass extends connectionClass{
    
    public function checkLogin($username,$password){
        $select="Select * from login Where Username='$username' && Password =Md5('$password')";
        $result=  $this->query($select) or die($this->error);
        $count= $result->num_rows;
        if($count < 1){
            return "Access Denied";
        }
        else
        {
            $_SESSION["username"]=$username;
            $_SESSION["pass"]=md5($password);
            if($_SESSION["username"]==""||$_SESSION["pass"]==""){
                header("location:login.php");
            }
            else
            {
                header("location: manage/dashboard.php");
            }
        }
    }
    
    public function sessionLogin(){
        $select="select * from login where Username='$_SESSION[username]' && Password='$_SESSION[pass]'";
        $result=$this->query($select);
        $count=$result->num_rows;
        if($count < 1){
            header("location:login.php");
        }
        else{}
    }
}

