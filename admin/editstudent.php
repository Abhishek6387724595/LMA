<?php 
include("ses.php");
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Dashboard</title>
    <meta name="description" content="Veer WD">
    <meta name="viewport" content="Veer WD">

    <link rel="apple-touch-icon" href="images/logo.png">
    <link rel="shortcut icon" href="images/logo.png">

<script src="jquery-3.2.1.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
	<style>
	.preview{
	padding-left:50px;
	padding-right:50px;
}
</style>

</head>
<body>
    <!-- Left Panel -->
<?php 
include("header.php");
?>
   <!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->
<?php
include("../conn.php");
if(isset($_POST['submit']))
      {
	  $name = $_POST['name'];
	  $dob = $_POST['dob'];
	  $gender = $_POST['gender'];
	  $country = $_POST['country'];
	  $smobile = $_POST['smobile'];
	  $marital = $_POST['marital'];
	  $category = $_POST['category'];
	  $email = $_POST['email'];
	  $fname = $_POST['fname'];
	  $aadhar = $_POST['aadhar'];
	  $address = $_POST['address'];
	  $district = $_POST['district'];
	  $state = $_POST['state'];
	  $pincodes = $_POST['pincode'];
	  $address1 = $_POST['address1'];
	  $district1 = $_POST['district1'];
	  $state1 = $_POST['state1'];
	  $pincode1 = $_POST['pincode1'];
	  $height = $_POST['height'];
	  $weight = $_POST['weight'];
	  $imark = $_POST['imark'];
	  $pmobile = $_POST['pmobile'];
	  $category = $_POST['category'];
	  $course = $_POST['course'];
	  $pgyear = $_POST['pgyear'];
	  $pgsubject = $_POST['pgsubject'];
	  $pgmarks = $_POST['pgmarks'];
	  $pgcollege = $_POST['pgcollege'];
	  $pguniversity = $_POST['pguniversity'];
	  $gyear = $_POST['gyear'];
	  $gsubject = $_POST['gsubject'];
	  $gmarks = $_POST['gmarks'];
	  $gcollege = $_POST['gcollege'];
	  $guniversity = $_POST['guniversity'];
	  $iyear = $_POST['iyear'];
	  $isubject = $_POST['isubject'];
	  $imarks = $_POST['imarks'];
	  $icollege = $_POST['icollege'];
	  $iuniversity = $_POST['iuniversity'];
	  $hyear = $_POST['hyear'];
	  $hsubject = $_POST['hsubject'];
	  $hmarks = $_POST['hmarks'];
	  $hcollege = $_POST['hcollege'];
	  $huniversity = $_POST['huniversity'];
	  $oyear = $_POST['oyear'];
	  $osubject = $_POST['osubject'];
	  $omarks = $_POST['omarks'];
	  $ocollege = $_POST['ocollege'];
	  $ouniversity = $_POST['ouniversity'];
	 
				
	  $sql = "UPDATE registration SET  name='$name', dob='$dob', gender='$gender', country='$country', smobile='$smobile', marital='$marital', category='$category', email='$email', fname='$fname', aadhar='$aadhar', address='$address', district='$district', state='$state', pincode='$pincodes', address1='$address1', district1='$district1', state1='$state1', pincode1='$pincode1', height='$height', weight='$weight', mark='$imark', pmobile='$pmobile', course='$course', pgyear='$pgyear', pgsubject='$pgsubject', pgmarks='$pgmarks', pgcollege='$pgcollege', pguniversity='$pguniversity', gyear='$gyear', gsubject='$gsubject', gmarks='$gmarks', gcollege='$gcollege', guniversity='$guniversity', iyear='$iyear', isubject='$isubject', imarks='$imarks', icollege='$icollege', iuniversity='$iuniversity', hyear='$hyear', hsubject='$hsubject', hmarks='$hmarks', hcollege='$hcollege', huniversity='$huniversity', oyear='$oyear', osubject='$osubject', omarks='$omarks', ocollege='$ocollege', ouniversity='$ouniversity' WHERE  id='".$_GET['id']."'";
      mysqli_query($connect, $sql);
	  //$_SESSION['err']="Updated Product Detail!";
	  $statusMsg = "Updated Product Detail!";
	  echo '<script>alert("'.$statusMsg.'");</script>';
      }
		$Query="select * from registration  where id='".$_REQUEST['id']."'";
		$Result = mysqli_query($connect,$Query) or die(mysqli_error());
	    while($row = mysqli_fetch_array($Result))
		{
		   $rowid=$row;
		}
?>

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <!--   <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>-->
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                  

                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="profile.php"><i class="fa fa-user"></i>My Profile</a>
							<a class="nav-link" href="logout.php"><i class="fa fa-power-off"></i>Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Update Student Detail</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <!--<ol class="breadcrumb text-right">
                                    <li><a>Dashboard</a></li>
                                    <li><a>Website Setting</a></li>
                                    <li class="active">Carousel</li>
                                </ol>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="animated fadeIn">


                <div class="row">
                      <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body card-block">
                            
                            <form action="#" method="post"  class="form-horizontal"> 
                 					 <div class="row form-group">
                                        <div class="col col-md-3" style="margin-left:20px;"><label for="password-input" class=" form-control-label">Name</label></div>
                                        <div class="col-12 col-md-7">
                                        
                                        <input type="text"  value="<?php echo $rowid['name'];?>" name="name">
                                       
                                        </div>
                                    </div>
                                     <div class="row form-group">
                                        <div class="col col-md-3" style="margin-left:20px;"><label for="password-input" class=" form-control-label">DOB</label></div>
                                        <div class="col-12 col-md-7">
                                        
                                        <input type="date"  id="dob" value="<?php echo $rowid['dob'];?>" name="dob">
                                        </div>
                                    </div>
                                    
                                    <div class="row form-group">
                                        <div class="col col-md-3" style="margin-left:20px;"><label for="password-input" class=" form-control-label">Gender</label></div>
                                        <div class="col-12 col-md-7">
                                        
                                        <input type="text"  id="gender" value="<?php echo $rowid['gender'];?>" name="gender">
                                      
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3" style="margin-left:20px;"><label for="password-input" class=" form-control-label">Country</label></div>
                                        <div class="col-12 col-md-7">
                                        
                                        <input type="text"  id="country" name="country" value="<?php echo $rowid['country'];?>">
                                      
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3" style="margin-left:20px;"><label for="password-input" class=" form-control-label">Student Mobile</label></div>
                                        <div class="col-12 col-md-7">
                                        
                                        <input type="text"  id="smobile" name="smobile"  value="<?php echo $rowid['smobile'];?>">
                                      
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3" style="margin-left:20px;"><label for="password-input" class=" form-control-label">Marital</label></div>
                                        <div class="col-12 col-md-7">
                                        
                                        <input type="text"  id="marital" name="marital" value="<?php echo $rowid['marital'];?>">
                                      
                                        </div>
                                    </div> 
                                    <div class="row form-group">
                                        <div class="col col-md-3" style="margin-left:20px;"><label for="password-input" class=" form-control-label">Category</label></div>
                                        <div class="col-12 col-md-7">
                                        
                                        <input type="text"  value="<?php echo $rowid['category'];?>" name="category" required="">
                                      
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3" style="margin-left:20px;"><label for="password-input" class=" form-control-label">Email</label></div>
                                        <div class="col-12 col-md-7">
                                        
                                        <input type="text"  value="<?php echo $rowid['email'];?>" name="email" required="">
                                      
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3" style="margin-left:20px;"><label for="password-input" class=" form-control-label">Father Name</label></div>
                                        <div class="col-12 col-md-7">
                                        
                                        <input type="text"  value="<?php echo $rowid['fname'];?>" name="fname" required="">
                                      
                                        </div>
                                    </div> 
                                    <div class="row form-group">
                                        <div class="col col-md-3" style="margin-left:20px;"><label for="password-input" class=" form-control-label">Aadhar</label></div>
                                        <div class="col-12 col-md-7">
                                        
                                        <input type="text"  value="<?php echo $rowid['aadhar'];?>" name="aadhar" required="">
                                      
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3" style="margin-left:20px;"><label for="password-input" class=" form-control-label">Address</label></div>
                                        <div class="col-12 col-md-7">
                                        <input type="text"  value="<?php echo $rowid['address'];?>" name="address" required="">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3" style="margin-left:20px;"><label for="password-input" class=" form-control-label">District</label></div>
                                        <div class="col-12 col-md-7">
                                        <input type="text"  value="<?php echo $rowid['district'];?>" name="district" required="">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3" style="margin-left:20px;"><label for="password-input" class=" form-control-label">State</label></div>
                                        <div class="col-12 col-md-7">
                                        <input type="text"  value="<?php echo $rowid['state'];?>" name="state" required="">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3" style="margin-left:20px;"><label for="password-input" class=" form-control-label">Pincode</label></div>
                                        <div class="col-12 col-md-7">
                                        <input type="text"  value="<?php echo $rowid['pincode'];?>" name="pincode" required="">
                                        </div>
                                    </div>
                                    
                                    <h4>Correspondence address same as parmanent address</h4><br><br>
                                    <div class="row form-group">
                                        <div class="col col-md-3" style="margin-left:20px;"><label for="password-input" class=" form-control-label">Address</label></div>
                                        <div class="col-12 col-md-7">
                                        <input type="text"  value="<?php echo $rowid['address1'];?>" name="address1" required="">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3" style="margin-left:20px;"><label for="password-input" class=" form-control-label">District</label></div>
                                        <div class="col-12 col-md-7">
                                        <input type="text"  value="<?php echo $rowid['district1'];?>" name="district1" required="">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3" style="margin-left:20px;"><label for="password-input" class=" form-control-label">State</label></div>
                                        <div class="col-12 col-md-7">
                                        <input type="text"  value="<?php echo $rowid['state1'];?>" name="state1" required="">
                                        </div>
                                    </div>
                                     <div class="row form-group">
                                        <div class="col col-md-3" style="margin-left:20px;"><label for="password-input" class=" form-control-label">Pincode</label></div>
                                        <div class="col-12 col-md-7">
                                        <input type="text"  value="<?php echo $rowid['pincode1'];?>" name="pincode1" required="">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3" style="margin-left:20px;"><label for="password-input" class=" form-control-label">Height</label></div>
                                        <div class="col-12 col-md-7">
                                        <input type="text"  value="<?php echo $rowid['height'];?>" name="height" required="">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3" style="margin-left:20px;"><label for="password-input" class=" form-control-label">Weight</label></div>
                                        <div class="col-12 col-md-7">
                                        <input type="text"  value="<?php echo $rowid['weight'];?>" name="weight" required="">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3" style="margin-left:20px;"><label for="password-input" class=" form-control-label">Identity Mark</label></div>
                                        <div class="col-12 col-md-7">
                                        <input type="text"  value="<?php echo $rowid['mark'];?>" name="imark" required="">
                                        </div>
                                    </div> 
                                    <div class="row form-group">
                                        <div class="col col-md-3" style="margin-left:20px;"><label for="password-input" class=" form-control-label">Parent Contact Number</label></div>
                                        <div class="col-12 col-md-7">
                                        <input type="text"  value="<?php echo $rowid['pmobile'];?>" name="pmobile" required="">
                                        </div>
                                    </div> 
                                    <div class="row form-group">
                                        <div class="col col-md-3" style="margin-left:20px;"><label for="password-input" class=" form-control-label">Course</label></div>
                                        <div class="col-12 col-md-7">
                                        <input type="text"  value="<?php echo $rowid['course'];?>" name="course" required="">
                                        </div>
                                    </div>  
                                     <h4>EDUCATIONAL QUALIFICATION:</h4><br><br>
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
				<td><input class="form-control" type="text" name="pgyear" value="<?php echo $rowid['pgyear'];?>"> </td>
				<td><input class="form-control" type="text" name="pgsubject" value="<?php echo $rowid['pgsubject'];?>"> </td>
				<td><input class="form-control" type="text" name="pgmarks" value="<?php echo $rowid['pgmarks'];?>"> </td>
				<td><input class="form-control" type="text" name="pgcollege" value="<?php echo $rowid['pgcollege'];?>"> </td>
				<td><input class="form-control" type="text" name="pguniversity" value="<?php echo $rowid['pguniversity'];?>"> </td>
				</tr>
				<tr>
				
                <td>Graduation</td>
				<td><input class="form-control" type="text" name="gyear" value="<?php echo $rowid['gyear'];?>"> </td>
				<td><input class="form-control" type="text" name="gsubject" value="<?php echo $rowid['gsubject'];?>"> </td>
				<td><input class="form-control" type="text" name="gmarks" value="<?php echo $rowid['gmarks'];?>"> </td>
				<td><input class="form-control" type="text" name="gcollege" value="<?php echo $rowid['gcollege'];?>"> </td>
				<td><input class="form-control" type="text" name="guniversity" value="<?php echo $rowid['guniversity'];?>"> </td>
				</tr>
				<tr>
				
                <td>10+2</td>
				<td><input class="form-control" type="text" name="iyear" value="<?php echo $rowid['iyear'];?>"> </td>
				<td><input class="form-control" type="text" name="isubject" value="<?php echo $rowid['isubject'];?>"> </td>
				<td><input class="form-control" type="text" name="imarks" value="<?php echo $rowid['imarks'];?>"> </td>
				<td><input class="form-control" type="text" name="icollege" value="<?php echo $rowid['icollege'];?>"> </td>
				<td><input class="form-control" type="text" name="iuniversity" value="<?php echo $rowid['iuniversity'];?>"> </td>
				</tr>
				<tr>
                
				<td>High School</td>
				<td><input class="form-control" type="text" name="hyear" value="<?php echo $rowid['hyear'];?>" required> </td>
				<td><input class="form-control" type="text" name="hsubject" value="<?php echo $rowid['hsubject'];?>" required> </td>
				<td><input class="form-control" type="text" name="hmarks" value="<?php echo $rowid['hmarks'];?>" required> </td>
				<td><input class="form-control" type="text" name="hcollege" value="<?php echo $rowid['hcollege'];?>" required> </td>
				<td><input class="form-control" type="text" name="huniversity" value="<?php echo $rowid['huniversity'];?>" required> </td>
				</tr>
				<tr>
                
				<td>Other Qualification</td>
				<td><input class="form-control" type="text" name="oyear" value="<?php echo $rowid['oyear'];?>"> </td>
				<td><input class="form-control" type="text" name="osubject" value="<?php echo $rowid['osubject'];?>"> </td>
				<td><input class="form-control" type="text" name="omarks" value="<?php echo $rowid['omarks'];?>"> </td>
				<td><input class="form-control" type="text" name="ocollege" value="<?php echo $rowid['ocollege'];?>"> </td>
				<td><input class="form-control" type="text" name="ouniversity" value="<?php echo $rowid['ouniversity'];?>"> </td>
				</tr>
				  </table>
                  <br><br><br>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm" name="submit" style="font-size:20px;color:green">
                                    <i class="fa fa-check"></i> Update
                                </button>
                                <button type="reset" class="btn btn-danger btn-sm" style="font-size:20px;color:red">
                                    <i class="fa fa-ban"></i> Reset
                                </button>
                            </div>
							</form>
                        </div>
                      </div>


        </div><!-- .animated -->
    </div><!-- .content -->
    </div><!-- .content -->

    <div class="clearfix"></div>
<?php //include("footer.php");?>

</div><!-- /#right-panel -->
<script src="http://js.nicedit.com/nicEdit-latest.js"></script>
<script>

bkLib.onDomLoaded(function()

{

new nicEditor().panelInstance('TypeHere');
});

</script>
<script>
function previewImages() {

  var preview = document.querySelector('#preview');
  
  if (this.files) {
    [].forEach.call(this.files, readAndPreview);
  }

  function readAndPreview(file) {

    // Make sure `file.name` matches our extensions criteria
    if (!/\.(jpe?g|png|gif)$/i.test(file.name)) {
      return alert(file.name + " is not an image");
    } // else...
    
    var reader = new FileReader();
    
    reader.addEventListener("load", function() {
      var image = new Image();
      image.width = 450;
      image.height = 300;
      image.title  = file.name;
      image.src    = this.result;
      preview.appendChild(image);
    });
    
    reader.readAsDataURL(file);
    
  }

}

document.querySelector('#file-input').addEventListener("change", previewImages);
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

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
  var phoneNo = document.getElementById('street');

  if (phoneNo.value == "" || phoneNo.value == null) {
    alert("Please enter your Mobile No.");
    return false;
  }
  if (phoneNo.value.length < 10 || phoneNo.value.length > 10) {
    alert("Mobile No. is not valid, Please Enter 10 Digit Mobile No.");
    return false;
  }

  
  return true;
}
</script>
<!-- Right Panel -->

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
<script src="assets/js/main.js"></script>


</body>
</html>
