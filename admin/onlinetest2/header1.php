<style>
    
    body{
        background-image: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/sections-3.jpg");
    }

    .img-fluid{
        height: 30%;
        width: 100%;
        border-radius: 20px;
   
    }
</style>

<!DOCTYPE html>
<html lang="en">
<head>
  	<title>Online Examination System in PHP</title>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  	<script src="https://cdn.jsdelivr.net/gh/guillaumepotier/Parsley.js@2.9.1/dist/parsley.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
  	<link rel="stylesheet" href="style/style.css" />
    <link rel="stylesheet" href="style/TimeCircles.css" />
    <script src="style/TimeCircles.js"></script>
</head>
<body>
	<div class="jumbotron text-center" style="margin-bottom:0; padding: 1rem 1rem;">
    <img src="master/loop.png" class="img-fluid" width="300" alt="Online Examination System in PHP" />
  </div>

  <?php
  if(isset($_SESSION['user_id']))
  {
  ?>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      
    </div>
    <ul class="nav navbar-nav">
      <a class="navbar-brand" href="index.php">User Side</a>
      <li class="active"><a href="enroll_exam.php">Enroll Exam</a></li>
      <li><a href="profile.php">Profile</a></li>
      <li><a href="change_password.php">Change Password</a></li>
      <li><a href="logout.php">Log Out</a></li>
    </ul>
  </div>
</nav>

  <div class="container-fluid">
  <?php
  }
  ?>