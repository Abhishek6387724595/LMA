<?php
if(!@$_POST['status'])
{
	exit("<script>window.location='index.php';</script>");
}
include("conn.php");
	date_default_timezone_set("Asia/Kolkata");

					
						$name=$_POST['name'];
						$dob=$_POST['dob'];
						$gender=$_POST['gender'];
						$country=$_POST['country'];
						$smobile=$_POST['smobile'];
						$marital=$_POST['marital'];
						$category=$_POST['category'];
						$email=$_POST['email'];
						$fname=$_POST['fname'];
						$aadhar=$_POST['aadhar'];
						$address=$_POST['address'];
						$district=$_POST['district'];
						$state=$_POST['state'];
						$pincode=$_POST['pincode'];
						$address1=$_POST['address1'];
						$district1=$_POST['district1'];
						$state1=$_POST['state1'];
						$pincode1=$_POST['pincode1'];
						$height=$_POST['height'];
						$weight=$_POST['weight'];
						$mark=$_POST['mark'];
						$pmobile=$_POST['pmobile'];
						$course=$_POST['course'];
						$pgyear=$_POST['pgyear'];
						$pgsubject=$_POST['pgsubject'];
						$pgmarks=$_POST['pgmarks'];
						$pgcollege=$_POST['pgcollege'];
						$pguniversity=$_POST['pguniversity'];
						$gyear=$_POST['gyear'];
						$gsubject=$_POST['gsubject'];
						$gmarks=$_POST['gmarks'];
						$gcollege=$_POST['gcollege'];
						$guniversity=$_POST['guniversity'];
						$iyear=$_POST['iyear'];
						$isubject=$_POST['isubject'];
						$imarks=$_POST['imarks'];
						$icollege=$_POST['icollege'];
						$iuniversity=$_POST['iuniversity'];
						$hyear=$_POST['hyear'];
						$hsubject=$_POST['hsubject'];
						$hmarks=$_POST['hmarks'];
						$hcollege=$_POST['hcollege'];
						$huniversity=$_POST['huniversity'];
						$oyear=$_POST['oyear'];
						$osubject=$_POST['osubject'];
						$omarks=$_POST['omarks'];
						$ocollege=$_POST['ocollege'];
						$ouniversity=$_POST['ouniversity'];
						$password=$_POST['password'];
						$amount=$_POST['amount'];
						$image=$_FILES['image']['name'];
						$sign=$_FILES['sign']['name'];
						$date=date("Y-m-d");
						$directoryName='images/'.$_POST["name"];
						$allowTypes = array('jpg','png','jpeg');
						$key=$_POST['order_id'];
					    $query="insert into registration (name,dob,gender,country,smobile,marital,category,email,fname,aadhar,address,district,state,pincode,address1,district1,state1,pincode1,height,weight,mark,pmobile,course,pgyear,pgsubject,pgmarks,pgcollege,pguniversity,gyear,gsubject,gmarks,gcollege,guniversity,iyear,isubject,imarks,icollege,iuniversity,hyear,hsubject,hmarks,hcollege,huniversity,oyear,osubject,omarks,ocollege,ouniversity,password,amount,image,sign,otp,date)values('$name','$dob','$gender','$country','$smobile','$marital','$category','$email','$fname','$aadhar','$address','$district','$state','$pincode','$address1','$district1','$state1','$pincode1','$height','$weight','$mark','$pmobile','$course','$pgyear','$pgsubject','$pgmarks','$pgcollege','$pguniversity','$gyear','$gsubject','$gmarks','$gcollege','$guniversity','$iyear','$isubject','$imarks','$icollege','$iuniversity','$hyear','$hsubject','$hmarks','$hcollege','$huniversity','$oyear','$osubject','$omarks','$ocollege','$ouniversity','$password','$amount','$image','$sign','$key','$date')";
					
					if($run=mysqli_query($connect,$query))
					{
						 move_uploaded_file($_FILES['image']['name'],$directoryName);
						 echo "<script>alert('Registration Successful!');</script>";
						 echo "<center><a href='index.php'><button>Go To HOME</button></a></center>";
				    }
					else
					{
						echo '<script type="text/javascript">alert("OOPS! Something Went Wrong...");</script>';
					}
					
	?>