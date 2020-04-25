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
    <title>Student Detail</title>
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
include("../conn.php");?>
 <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                  <!--  <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"> Zairo International</a>
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
                                <h1>Student Detail</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a>Dashboard</a></li>
                                    <li><a>Student</a></li>
                                    <li class="active">Student Detail</li>
                                </ol>
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
                            <div class="card-header">
                                <strong>Student</strong> Details
                            </div>
                            <div class="card-body card-block">
                                <form action="#" method="post" class="form-horizontal">
									<div class="wrapper wrapper-content" style="background-color: #f3f7f9;padding-top:30px">
							<?php
				include("../conn.php");
									$sql="select * from registration where id='".$_GET["id"]."'";
									$result=$conn-> query($sql);
	  
	  if($result-> num_rows > 0){
		  while($row=mysqli_fetch_assoc($result)){
	?>  		
		<div class="container d-flex bg-white">
            <div class="p-2 m-2"><div class="form-group">
          <label>Name</label>
          <input class="form-control" readonly value="<?php echo $row["name"]?>">
        </div>


</div>
            <div class="p-2 m-2"><div class="form-group">
          <label>DOB</label>
          <input class="form-control" readonly value="<?php echo $row["dob"]?>">
        </div>


</div>
            <div class="p-2 m-2"><div class="form-group">
          <label>Gender</label>
		 <input class="form-control" readonly value="<?php echo $row["gender"]?>">
        </div>


</div>
            <div class="p-2 m-2"><div class="form-group">
          <label>Country</label>
          <input class="form-control" readonly value="<?php echo $row["country"]?>">
        </div>


</div>
      
       
            <div class="p-2 m-2"><div class="form-group">
          <label>Student Mobile</label>
          <input class="form-control" readonly value="<?php echo $row["smobile"]?>">
        </div>


</div></div>
<div class="container d-flex bg-white">
            <div class="p-2 m-2">
			<div class="form-group">
          <label>Marital Status</label>
           <input class="form-control" readonly value="<?php echo $row["marital"]?>">
        </div>
			</div>
			
            <div class="p-2 m-2"><div class="form-group">
			<label>Category</label>
		 <input class="form-control" readonly value="<?php echo $row["category"]?>">
			</div>
			</div>
			
            <div class="p-2 m-2"><div class="form-group">
			<label>Email</label>
				<input class="form-control" readonly value="<?php echo $row["email"]?>">
			</div>
			</div>
			<div class="p-2 m-2"><div class="form-group">
			<label>Father Name</label>
				<input class="form-control" readonly value="<?php echo $row["fname"]?>">
			</div>
			</div>
			<div class="p-2 m-2"><div class="form-group">
			<label>Aadhar Number</label>
				<input class="form-control" readonly value="<?php echo $row["aadhar"]?>">
			</div>
			</div></div>
			<div class="container d-flex bg-white">
			<div class="p-2 m-2"><div class="form-group">
			<label>Permanent Address</label>
				<input class="form-control" readonly value="<?php echo $row["address"]?>">
			</div>
			</div>
			<div class="p-2 m-2"><div class="form-group">
			<label>District</label>
				<input class="form-control" readonly value="<?php echo $row["district"]?>">
			</div>
			</div>
			<div class="p-2 m-2"><div class="form-group">
			<label>State</label>
				<input class="form-control" readonly value="<?php echo $row["state"]?>">
			</div>
			</div>
			<div class="p-2 m-2"><div class="form-group">
			<label>Pincode</label>
				<input class="form-control" readonly value="<?php echo $row["pincode"]?>">
			</div>
			</div></div>
			
			<div class="container d-flex bg-white">
			<div class="p-2 m-2"><div class="form-group">
			<label>Correspondence Address</label>
				<input class="form-control" readonly value="<?php echo $row["address1"]?>">
			</div>
			</div>
			<div class="p-2 m-2"><div class="form-group">
			<label>District</label>
				<input class="form-control" readonly value="<?php echo $row["district1"]?>">
			</div>
			</div>
			<div class="p-2 m-2"><div class="form-group">
			<label>State</label>
				<input class="form-control" readonly value="<?php echo $row["state1"]?>">
			</div>
			</div>
			<div class="p-2 m-2"><div class="form-group">
			<label>Pincode</label>
				<input class="form-control" readonly value="<?php echo $row["pincode1"]?>">
			</div>
			</div>
			</div>
			<div class="container d-flex bg-white">
			<div class="p-2 m-2"><div class="form-group">
			<label>Height</label>
				<input class="form-control" readonly value="<?php echo $row["height"]?>">
			</div>
			</div>
			<div class="p-2 m-2"><div class="form-group">
			<label>Weight</label>
				<input class="form-control" readonly value="<?php echo $row["weight"]?>">
			</div>
			</div>
			<div class="p-2 m-2"><div class="form-group">
			<label>Identity Mark</label>
				<input class="form-control" readonly value="<?php echo $row["mark"]?>">
			</div>
			</div>
			<div class="p-2 m-2"><div class="form-group">
			<label>Parent Contact Number</label>
				<input class="form-control" readonly value="<?php echo $row["pmobile"]?>">
			</div>
			</div>
			<div class="p-2 m-2"><div class="form-group">
			<label>Course</label>
			<input class="form-control" readonly value="<?php echo $row["course"]?>">
			</div>
			</div>
			</div>
			<div class="container d-flex bg-white">
				<h5>EDUCATIONAL QUALIFICATION</h5>
				</div>
				<div class="container d-flex bg-white" style="padding-top:50px"><table>
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
				<td><input class="form-control" value="<?php echo $row["pgyear"]?>" readonly> </td>
				<td><input class="form-control" value="<?php echo $row["pgsubject"]?>" readonly> </td>
				<td><input class="form-control" value="<?php echo $row["pgmarks"]?>" readonly> </td>
				<td><input class="form-control" value="<?php echo $row["pgcollege"]?>" readonly> </td>
				<td><input class="form-control" value="<?php echo $row["pguniversity"]?>" readonly> </td>
				</tr>
				<tr>
				<td>Graduation</td>
				<td><input class="form-control" value="<?php echo $row["gyear"]?>" readonly> </td>
				<td><input class="form-control" value="<?php echo $row["gsubject"]?>" readonly> </td>
				<td><input class="form-control" value="<?php echo $row["gmarks"]?>" readonly> </td>
				<td><input class="form-control" value="<?php echo $row["gcollege"]?>" readonly> </td>
				<td><input class="form-control" value="<?php echo $row["guniversity"]?>" readonly> </td>
				</tr>
				<tr>
				<td>10+2</td>
				<td><input class="form-control" value="<?php echo $row["iyear"]?>" readonly> </td>
				<td><input class="form-control" value="<?php echo $row["isubject"]?>" readonly> </td>
				<td><input class="form-control" value="<?php echo $row["imarks"]?>" readonly> </td>
				<td><input class="form-control" value="<?php echo $row["icollege"]?>" readonly> </td>
				<td><input class="form-control" value="<?php echo $row["iuniversity"]?>" readonly> </td>
				</tr>
				<tr>
				<td>High School</td>
				<td><input class="form-control" value="<?php echo $row["hyear"]?>" readonly> </td>
				<td><input class="form-control" value="<?php echo $row["hsubject"]?>" readonly> </td>
				<td><input class="form-control" value="<?php echo $row["hmarks"]?>" readonly> </td>
				<td><input class="form-control" value="<?php echo $row["hcollege"]?>" readonly> </td>
				<td><input class="form-control" value="<?php echo $row["huniversity"]?>" readonly> </td>
				</tr>
				<tr>
				<td>Other Qualification</td>
				<td><input class="form-control"  value="<?php echo $row["oyear"]?>" readonly> </td>
				<td><input class="form-control" value="<?php echo $row["osubject"]?>" readonly> </td>
				<td><input class="form-control" value="<?php echo $row["omarks"]?>" readonly> </td>
				<td><input class="form-control" value="<?php echo $row["ocollege"]?>" readonly> </td>
				<td><input class="form-control" value="<?php echo $row["ouniversity"]?>" readonly> </td>
				</tr>
				  </table>
			
	</div>
	<div class="container d-flex bg-white">
	<div class="p-2 m-2"><div class="form-group">
			<label>Password</label>
				<input class="form-control"  value="<?php echo $row["password"]?>" readonly> 
			</div>
			</div>
			<div class="p-2 m-2"><div class="form-group">
			<label>Amount</label>
				<input class="form-control" value="<?php echo $row["amount"]?>" readonly> 
			</div>
			</div>
			<div class="p-2 m-2"><div class="form-group">
			<label>Payment Status</label>
				<input class="form-control" value="<?php echo $row["payment"]?>" readonly> 
			</div>
			</div>
	</div>
	
	  <?php }}?>
	</div>
									
									
                                </div>
                            <div class="card-footer">
                               
                            </div>
							</form>
                        </div>
                      </div>


        </div><!-- .animated -->
    </div><!-- .content -->
    </div><!-- .content -->

    <div class="clearfix"></div>
<?php include("footer.php");?>

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
      image.width = 200;
      image.height = 200;
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
