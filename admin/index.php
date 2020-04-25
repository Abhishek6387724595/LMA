<?php  
//user already logged in skip login page and directly goes to admin	
	session_start();
	/*if(isset($_SESSION['type']) == 1){
		header("Location: ../admin/admin.php");
		exit();
	}
	if(isset($_SESSION['type']) == 2){
		header("Location: ../client/client.php");
		exit();
	}
	if(isset($_SESSION['type']) == 3){
		header("Location: ../traveller/traveller.php");
		exit();
	}*/
	
	
	?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Login</title>
  
  
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
 <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
   <?php
				include("../conn.php");
					if(isset($_REQUEST['login']))
					{
					$email=mysqli_real_escape_string($connect,$_POST['email']);
					$password=mysqli_real_escape_string($connect, $_POST['password']);
					$query1="select*from admin where (email='$email' and password='$password') and (type='1')";
					$query3="select*from admin where (email='$email' and password='$password') and (type='0')";
					
					$run1=mysqli_query($connect,$query1);
					
					$run3=mysqli_query($connect,$query3);
					
					$user1 = mysqli_fetch_array($run1);
					$user3 = mysqli_fetch_array($run3);
					if(mysqli_num_rows($run1)>0)
					{
					         $_SESSION['type']=$user1['type'];
							 $_SESSION['id']=$user1['id'];
							 $_SESSION['username']=$user1['name'];
							 $_SESSION['email']=$user1['email'];
						  echo "<script>window.location.href='admin.php'</script>";
					}
					else if(mysqli_num_rows($run3)>0)
					{
						         $_SESSION['type']=1;
							 $_SESSION['id']=$user3['id'];
                                                  $_SESSION['loggedin'] = true;
                                                  $_SESSION['username']=$user3['name'];
 $_SESSION['email']=$user3['email'];
						   header ("Location: admin.php");
					}
					
					else
					{
						echo "<script>alert('Wrong Email or Password!!');</script>";
					}
					}
?> 
  <div class="login-wrap">
	<div class="login-html"><a href="../index.php"><i class="fa fa-home" style="color:white;font-size:40px;padding-left:90%"></i></a>
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Admin Login</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
		<div class="login-form">
			<form method="post">
			<div class="sign-in-htm">
				<div class="group">
					<label for="user" class="label">Email</label>
					<input id="user" name="email" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" name="password" class="input" data-type="password">
				</div>
				<div class="group">
					<input id="check" type="checkbox" class="check" checked>
					<label for="check"><span class="icon"></span> Keep me Signed in</label>
				</div>
				<div class="group">
					<input type="submit" class="button" name="login" value="Sign In">
				</div>
			</div>
			</form>
			
		</div>
	</div>
</div>
  
  <script>
function isNumber(evt) {
  evt = (evt) ? evt : window.event;
  var charCode = (evt.which) ? evt.which : evt.keyCode;
  if (charCode > 31 && (charCode < 48 || charCode > 57)) {
    alert("Please enter only Numbers.");
    return false;
  }

  return true;
}

function ValidateNo() {
  var phoneNo = document.getElementById('txtPhoneNo');

  if (phoneNo.value == "" || phoneNo.value == null) {
    alert("Please enter your Mobile No.");
    return false;
  }
  if (phoneNo.value.length < 10 || phoneNo.value.length > 10) {
    alert("Mobile No. is not valid, Please Enter 11 Digit Mobile No.");
    return false;
  }

  
  return true;
}
</script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script>
    $(document).ready(function(){
       $('#email').blur(function(){
          var value = $(this).val(); 
          liveCheckEmail(value);
       });
    });
    
    function liveCheckEmail(val) {
        $.post('process.php',{'email':val}, function(data){
            if(data == "Found") {
                $('#search-result').html("<span style='color:red; font-weight:bold;'>Email is already Registered</span>");
            } else {
                $('#search-result').html("<span style='color:green; font-weight:bold;'>Email Address is Available</span>");
            }
        }).fail(function(xhr, ajaxOptions, throwError) {
        alert(throwError);
        });
    }
    </script>
	<script>
	$('#password, #cpass').on('keyup', function () {
    if ($('#password').val() == $('#cpass').val()) {
        $('#message').html('Password Matched').css('color', 'green');
    } else 
        $('#message').html('Password Not Matching').css('color', 'red');
});
	</script>

</body>

</html>
