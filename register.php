<?php

$con = mysqli_connect('localhost','root','');
/*if($con)
    {
    echo "success";
     }*/ 
$db = mysqli_select_db($con,'la');
/*if($db)
    {
        echo "Hello Abhishek I am connected";
    }
*/
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title>La Militaire Academy - Registration</title>
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
	<link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
	<link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
	<link rel="stylesheet" href="assets/css/styles.min.css">
	<style>
	.razorpay-payment-button
	{
		width:300px;
		height: auto;
		color:#ffffff !important;
		background-color: #0275d8;
		border-radius:5px !important;
		border-color:#0275d8;
		padding:10px;
		font-size: 14px;
		cursor: pointer;
		position: absolute;
		bottom:-70px;
		left:40%;

	}
	table {
		font-family: arial, sans-serif;
		border-collapse: collapse;
		width: 100%;
	}

	td, th {
		border: 1px solid #dddddd;
		text-align: left;
		padding: 8px;
	}

	tr:nth-child(even) {
		background-color: #dddddd;
	}
</style>
</head>

<body>
	<?php include("header.php");?>
	<?php $order_id = "lam".mt_rand(10000, 99999); 
			define("REGISTRATION", TRUE);
	?>
	<div class="wrapper wrapper-content" style="background-color: #f3f7f9;padding-top:30px">
		<div style="background-color:#007bff;">
			<h2 style="text-align:center;padding:6px;color:white">REGISTRATION</h2>
		</div>
		<form method="post" action="student_reg.php" enctype="multipart/form-data">
			<input type="hidden" name="order_id" value="<?php echo $order_id; ?>">
			<input type="hidden" name="status" value="true">
			<?php include("razorpay-php/razor_config.php"); ?>
			<script src="https://checkout.razorpay.com/v1/checkout.js" 
			data-key="rzp_test_DJtyC6oT674I3b"
			data-amount="120000"
			data-currency="INR"
			data-order_id=""
			data-buttontext="Register &amp; Pay Now"
			data-name="La Militaire Academy"
			data-description=" "
			data-image="images/LMA-ACADEMY-LOGO.png"
			data-prefill.name=""
			data-prefill.email=""
			data-theme.color="#F37254" >

		</script>

		<div class="container d-flex bg-white">
			<div class="p-2 m-2"><div class="form-group">
				<label>Name</label>
				<input class="form-control" type="text" name="name" required> 
			</div>
		</div>
		<div class="p-2 m-2"><div class="form-group">
			<label>DOB</label>
			<input class="form-control" type="date" name="dob" required> 
		</div>
	</div>
	<div class="p-2 m-2"><div class="form-group">
		<label>Gender</label>
		<select name="gender" class="form-control" required>
			<option selected disabled>Select Gender</option>
			<option value="Male">Male</option>
			<option value="Female">Female</option>
			<option value="Other">Other</option>
		</select>
	</div>


</div>
<div class="p-2 m-2"><div class="form-group">
	<label>Country</label>
	<input class="form-control" type="text" name="country" required> 
</div>


</div>


<div class="p-2 m-2"><div class="form-group">
	<label>Student Mobile</label>
	<input class="form-control" type="text" name="smobile" id="stxtPhoneNo" onkeypress="return isNumber(event)" required > 
</div>


</div></div>
<div class="container d-flex bg-white">
	<div class="p-2 m-2">
		<div class="form-group">
			<label>Marital Status</label>
			<select name="marital" class="form-control" required>
				<option selected disabled>Select Status</option>
				<option value="Married">Married</option>
				<option value="Unmarried">Unmarried</option>
			</select>
		</div>
	</div>

	<div class="p-2 m-2"><div class="form-group">
		<label>Category</label>
		<select name="category" class="form-control" required>
			<option selected disabled>Select Category</option>
			<option value="SC/ST">SC/ST</option>
			<option value="OBC">OBC</option>
			<option value="General">General</option>
		</select>
		Duration: <select name="" class="form-control" id="" onchange="myfun(this.value)"><br>
                        <option>Select Any One</option>

                        <?php

                            $q = "select * from degree";
                            $result = mysqli_query($con,$q);
                                while($row = mysqli_fetch_array($result)){
                        ?>
                            <option value="<?php echo $row['mid']; ?>"> <?php echo $row['degree']; ?> </option>                
                        <?php
                            }
                        ?>
                    </select><br>
					Course: <select name="" class="form-control" id="dataget">
                                <option> Choose any One </option>
                            </select>
                           <br><br>
                          
	


	
	</div>
	
</div>

<div class="p-2 m-2"><div class="form-group">
	<label>Email</label>
	<input class="form-control" type="email" name="email" required> 
</div>
</div>
<div class="p-2 m-2"><div class="form-group">
	<label>Father Name</label>
	<input class="form-control" type="text" name="fname" required> 
</div>
</div>
<div class="p-2 m-2"><div class="form-group">
	<label>Aadhar Number</label>
	<input class="form-control" type="text" name="aadhar" onkeypress="return isNumber(event)" required > 
</div>
</div></div>
<div class="container d-flex bg-white">
	<div class="p-2 m-2"><div class="form-group">
		<label>Permanent Address</label>
		<input class="form-control" type="text" name="address" id="address" required> 
	</div>
</div>
<div class="p-2 m-2"><div class="form-group">
	<label>District</label>
	<input class="form-control" type="text" name="district" id="district" required> 
</div>
</div>
<div class="p-2 m-2"><div class="form-group">
	<label>State</label>
	<input class="form-control" type="text" name="state" id="state" required> 
</div>
</div>
<div class="p-2 m-2"><div class="form-group">
	<label>Pincode</label>
	<input class="form-control" type="text" name="pincode" id="pincode" required> 
</div>
</div></div>
<div class="container d-flex bg-white" style="width:100%">
	<div class="p-2 m-2"><div class="form-group">
		<div class="row">
			<div class="col-md-2">
				<input id="sameadd" name="sameadd" type="checkbox" value="Sameadd" onchange="CopyAdd(this);" /></div>
				<div class="col-md-10">Correspondence address same as parmanent address.</div></div>

			</div>
		</div></div>
		<div class="container d-flex bg-white">
			<div class="p-2 m-2"><div class="form-group">
				<label>Correspondence Address</label>
				<input class="form-control" type="text" name="address1" id="address1"> 
			</div>
		</div>
		<div class="p-2 m-2"><div class="form-group">
			<label>District</label>
			<input class="form-control" type="text" name="district1" id="district1"> 
		</div>
	</div>
	<div class="p-2 m-2"><div class="form-group">
		<label>State</label>
		<input class="form-control" type="text" name="state1" id="state1"> 
	</div>
</div>
<div class="p-2 m-2"><div class="form-group">
	<label>Pincode</label>
	<input class="form-control" type="text" name="pincode1" id="pincode1"> 
</div>
</div>
</div>
<div class="container d-flex bg-white">
	<div class="p-2 m-2"><div class="form-group">
		<label>Height</label>
		<input class="form-control" type="text" name="height" required> 
	</div>
</div>
<div class="p-2 m-2"><div class="form-group">
	<label>Weight</label>
	<input class="form-control" type="text" name="weight" required> 
</div>
</div>
<div class="p-2 m-2"><div class="form-group">
	<label>Identity Mark</label>
	<input class="form-control" type="text" name="mark" required> 
</div>
</div>
<div class="p-2 m-2"><div class="form-group">
	<label>Parent Contact Number</label>
	<input class="form-control" type="text" name="pmobile" id="txtPhoneNo" onkeypress="return isNumber(event)" required > 
</div>
</div>


<div class="p-2 m-2"><div class="form-group">
	<label>Course</label>
	<select name="course" class="form-control" required>
		<!--<option>Select Course</option>-->
		<!--<?php// if($_REQUEST['course']=='NAVY AA'){ ?>
		<option value="NAVY AA" selected>NAVY AA</option>
		<?php// }else if($_REQUEST['course']=='NDA NA'){ ?>
		<option value="NDA + NA" selected>NDA + NA</option>
		<?php// }else if($_REQUEST['course']=='AFCAT'){?>
		<option value="AFCAT" selected>AFCAT</option>
		<?php// }else if($_REQUEST['course']=='CDS'){?>
		<option value="CDS" selected>CDS</option>
		<?php// }else if($_REQUEST['course']=='NAVY SSR'){?>
		<option value="NAVY SSR" selected>NAVY SSR</option>
		<?php// }else if($_REQUEST['course']=='SSB'){?>
		<option value="SSB" selected>SSB</option>
		<?php// }else if($_REQUEST['course']=='INET'){?>
		<option value="INET" selected>INET</option>          
		<?php// }else if($_REQUEST['course']=='CPF/CPO'){?>
		<option value="CPF/CPO" selected>CPF/CPO</option>
		<?php// }else if($_REQUEST['course']=='AIRFORCE X Group'){?>
		<option value="AIRFORCE X Group" selected>AIRFORCE X Group</option>
		<?php// }else if($_REQUEST['course']=='AIRFORCE Y Group'){?>
		<option value="AIRFORCE Y Group" selected>AIRFORCE Y Group</option>
		<?php// }else if($_REQUEST['course']=='AIRFORCE Z Group'){?>
		<option value="AIRFORCE Z Group" selected>AIRFORCE Z Group</option>
		<?php// }else if($_REQUEST['course']=='PARAMILITARY'){?>
		<option value="PARAMILITARY" selected>PARAMILITARY</option>
		<?php// }else if($_REQUEST['course']=='COASTGUARD'){?>
		<option value="COASTGUARD" selected>COASTGUARD</option>
		<?php// }else if($_REQUEST['course']==''){?>
		<option>Select Course</option>
		<option value="NAVY AA" >NAVY AA</option>
		<option value="NDA + NA">NDA + NA</option>
		<option value="AFCAT" >AFCAT</option>
		<option value="CDS">CDS</option>
		<option value="NAVY SSR">NAVY SSR</option>
		<option value="SSB">SSB</option>
		<option value="CPF/CPO">CPF/CPO</option>
		<option value="AIRFORCE X Group">AIRFORCE X Group</option>
		<option value="AIRFORCE Y Group">AIRFORCE Y Group</option>
		<option value="AIRFORCE Z Group">AIRFORCE Z Group</option>
		<option value="PARAMILITARY">PARAMILITARY</option>
		<option value="COASTGUARD">COASTGUARD</option>-->

		<?php// } ?>

		<option value="SC/ST">NDA</option>
			<option value="OBC">Others,X CAT (Soldiers Only)</option>
			<option value="General">Airforce Only Y Group(Non-Tech)</option>
			<option value="General">CDS (AFCAT / INET)</option>
			<option value="SC/ST">NDA+SSB+PD+OTHERS+SPEAKING CLASSES</option>

	</select>
</div>
</div>
</div>
<div class="container d-flex bg-white">
	<h5>EDUCATIONAL QUALIFICATION:- <span style="color:#e36b45">If the result is awaited, please fill the 0 in '% of Marks' field.</span></h5>
</div>
<div class="container d-flex bg-white" style="padding-top:50px">
	<table>
		<tr>
			<th>Exam Passed</th>
			<th>Year</th>
			<th>Subjects</th>
			<th>%of marks</th>
			<th>College</th>
			<th>University/Board</th>
		</tr>
		<tr>
			<td>Post Graduation</td>
			<td><input class="form-control" type="text" name="pgyear"> </td>
			<td><input class="form-control" type="text" name="pgsubject"> </td>
			<td><input class="form-control" type="text" name="pgmarks"> </td>
			<td><input class="form-control" type="text" name="pgcollege"> </td>
			<td><input class="form-control" type="text" name="pguniversity"> </td>
		</tr>
		<tr>
			<td>Graduation</td>
			<td><input class="form-control" type="text" name="gyear"> </td>
			<td><input class="form-control" type="text" name="gsubject"> </td>
			<td><input class="form-control" type="text" name="gmarks"> </td>
			<td><input class="form-control" type="text" name="gcollege"> </td>
			<td><input class="form-control" type="text" name="guniversity"> </td>
		</tr>
		<tr>
			<td>10+2</td>
			<td><input class="form-control" type="text" name="iyear" > </td>
			<td><input class="form-control" type="text" name="isubject" > </td>
			<td><input class="form-control" type="text" name="imarks"> </td>
			<td><input class="form-control" type="text" name="icollege" > </td>
			<td><input class="form-control" type="text" name="iuniversity" > </td>
		</tr>
		<tr>
			<td>High School</td>
			<td><input class="form-control" type="text" name="hyear" required> </td>
			<td><input class="form-control" type="text" name="hsubject" required> </td>
			<td><input class="form-control" type="text" name="hmarks" required> </td>
			<td><input class="form-control" type="text" name="hcollege" required> </td>
			<td><input class="form-control" type="text" name="huniversity" required> </td>
		</tr>
		<tr>
			<td>Other Qualification</td>
			<td><input class="form-control" type="text" name="oyear"> </td>
			<td><input class="form-control" type="text" name="osubject"> </td>
			<td><input class="form-control" type="text" name="omarks"> </td>
			<td><input class="form-control" type="text" name="ocollege"> </td>
			<td><input class="form-control" type="text" name="ouniversity"> </td>
		</tr>
	</table>

</div>
<div class="container d-flex bg-white">
	<div class="p-2 m-2"><div class="form-group">
		<label>Password</label>
		<input class="form-control" type="password" id="password" name="password" required> 
	</div>
</div>
<div class="p-2 m-2"><div class="form-group">
	<label>Confirm Password</label>
	<input class="form-control" type="password" id="cpassword" name="cpassword" required> 
	<span id='message'></span>
</div>
</div>

<div class="p-2 m-2"><div class="form-group">
	<label>Amount</label>
	<select name="amount" class="form-control">
		<!-- <option selected disabled>Select Amount</option> -->
		<option value="1200">1200</option>

	</select>
</div>
</div>
</div>
<div class="container d-flex bg-white">
	<div class="p-2 m-2"><div class="form-group">
		<label>Upload Image</label>
		<input class="form-control" type="file" name="image" required>
		<span style="text-align:center;color:red">Image Accepted format .jpg, .png, .jpeg.</span>				
	</div>
</div>
<div class="p-2 m-2"><div class="form-group">
	<label>Upload Signature</label>
	<input class="form-control" type="file" name="sign" required> 
	<span style="text-align:center;color:red">Signature Accepted format .jpg, .png, .jpeg.</span>				
</div>
</div>
</div>
<div class="container d-flex bg-white">
	<div class="row">
		<div class="col-md-2">
			<input type="checkbox" name="tc" required>
		</div>
		<div class="col-md-10">
			I understand that the fee deposited in the institute is NON-REFUNDABLE and NON-TRANSFERABLE.
		</div>
	</div>
	
</div>
</div>
</div>
<div class="container d-flex bg-white justify-content-end">
	<div class="p-2 m-2">
		<!-- <button type="submit" name="submit" class="btn btn-primary">Register</button> -->
	</div>
</div>
</div></form><br><br><br><br><br>
<?php include("footer.php");?>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"> 
</script> 
<script>
	 //to disable right button
    $(document).bind("contextmenu",function(e) {
    e.preventDefault();
  });
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
	function ValidateNo() {
		var phoneNo = document.getElementById('stxtPhoneNo');

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
<script>
	$('#password, #cpassword').on('keyup', function () {
		if ($('#password').val() == $('#cpassword').val()) {
			$('#message').html('Password Matched').css('color', 'green');
		} else 
		$('#message').html('Password Not Matching').css('color', 'red');
	});
</script>
<script>
	
	function CopyAdd(cb) 
	{
		var cb = document.getElementById('sameadd');
		var a1 = document.getElementById('address');
		var al1 = document.getElementById('address1');
		var a2 = document.getElementById('district');
		var al2 = document.getElementById('district1');
		var a3 = document.getElementById('state');
		var al3 = document.getElementById('state1');
		var v1 = document.getElementById('pincode');
		var vl1 = document.getElementById('pincode1');


		if (cb.checked) 
		{
			al1.value = a1.value;
			al2.value = a2.value;
			al3.value = a3.value;
			vl1.value = v1.value;


		} 
		else 
		{
			al1.value = '';
			al2.value = '';
			al3.value = '';
			vl1.value = '';


		}
	}
</script>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/1744f3f671.js"></script>
<script src="assets/js/script.min.js"></script>
<script>

        function myfun(datavalue)
        {
            $.ajax({

                url: "class.php",
                type: "POST",
                data: {datapost : datavalue},

                success: function(result) {
                    $('#dataget').html(result);
                }
                
            });
        }
    </script>
</body>

</html>