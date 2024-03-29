<?php

//register.php

include('Examination.php');

$exam = new Examination;

$exam->admin_session_public();

?>

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
  	<link rel="stylesheet" href="../style/style.css" />
</head>
<body>
	<div class="jumbotron text-center" style="margin-bottom:0; padding: 1rem 1rem;">
	   	<img src="loop.png" class="img-fluid" width="300" alt="Online Examination System in PHP" />
	</div>

	<div class="container">
  		<div class="row">
    		<div class="col-md-3">

    		</div>
    		<div class="col-md-6" style="margin-top:20px;">
    			<span id="message"></span>
      			<div class="card1">
        			<div class="card-header">Admin Registration</div>
        			<div class="card-body"><br><br>   <img src ="data:image/jpeg;base64,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" class="avatar"><br><br>
          				<form method="post" id="admin_register_form">
                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="text" name="admin_email_address" id="admin_email_address" class="form-control" data-parsley-checkemail data-parsley-checkemail-message='Email Address already Exists' />
                    </div><br><br>
                    <div class="form-group">
                      <label>Password</label>
                      <input type="password" name="admin_password" id="admin_password" class="form-control" />
                    </div><br><br>
                    <div class="form-group">
                      <label>Confirm Password</label>
                      <input type="password" name="confirm_admin_password" id="confirm_admin_password" class="form-control" />
                    </div><br><br>
                    <div class="form-group">
                      <input type="hidden" name="page" value="register" />
                      <input type="hidden" name="action" value="register" />
                      <input type="submit" name="admin_register" id="admin_register" class="btn btn-info" value="Register" />
                    </div>
                  </form><br><br><br>
          				<div align="center">
          					<a href="login.php">Login</a>
          				</div><br><br>
          				<div align="center">
          					<a href="http://snarwebprojects.000webhostapp.com/">Back To Home</a>
          				</div><br><br><br><br>
        			</div>
      			</div>
    		</div>
		    <div class="col-md-3">

		    </div>
  		</div>
	</div>

</body>
</html>

<script>

$(document).ready(function(){

	window.ParsleyValidator.addValidator('checkemail', {
    validateString: function(value)
    {
      return $.ajax({
        url:"ajax_action.php",
        method:"POST",
        data:{page:'register', action:'check_email', email:value},
        dataType:"json",
        async: false,
        success:function(data)
        {
          return true;
        }
      });
    }
  });

  $('#admin_register_form').parsley();

  $('#admin_register_form').on('submit', function(event){

    event.preventDefault();

    $('#admin_email_address').attr('required', 'required');

    $('#admin_email_address').attr('data-parsley-type', 'email');

    $('#admin_password').attr('required', 'required');

    $('#confirm_admin_password').attr('required', 'required');

    $('#confirm_admin_password').attr('data-parsley-equalto', '#admin_password');

    if($('#admin_register_form').parsley().isValid())
    {
      $.ajax({
        url:"ajax_action.php",
        method:"POST",
        data:$(this).serialize(),
        dataType:"json",
        beforeSend:function(){
          $('#admin_register').attr('disabled', 'disabled');
          $('#admin_register').val('please wait...');
        },
        success:function(data)
        {
          if(data.success)
          {
            $('#message').html('<div class="alert alert-success">Please check your email</div>');
            $('#admin_register_form')[0].reset();
            $('#admin_register_form').parsley().reset();
          }

          $('#admin_register').attr('disabled', false);
          $('#admin_register').val('Register');
        }
      });
    }

  });

});

</script>

<style>
  .img-fluids{
    width: 100%;
    height:28%;
    border-radius: 20px;
  }

body{
  color: blue;
background-image: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/sections-3.jpg");
}
  .card1 {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 30px;
  margin-bottom: 10%;
  margin-top:10;
  margin-right: 29%;
  margin-left: 29%;
  border-radius: 12px;
    font-size: 20px;
  text-align: center;
  background-color: #FBEAEB ;
  
}

.avatar{
  height:80px;
  border-radius: 100px;
  width:80px;

}



.btn{
    display: block;
  margin: 0 auto;
  width: 100%;
  height: 40px;
  border-radius: 30px;
  color: white;
  background:#2F3C7E;
  font-size: 15px;
  cursor: pointer;
}

.card-header{
  font-size: 30px;
}




.form-control{
border:none;
outline:none;
background:none;
 font-family: 'Open Sans', Helvetica, Arial, sans-serif;
   display: block;
  width: 100%;
  margin-top: 5px;
  padding-bottom: 5px;
  font-size: 19px;
  border-bottom: 1px solid rgba(0,0,0,0.4);
  text-align: center;

}

.img-fluid{
    width:100%;
    height:27%;
    border-radius:20px;
}

</style>
