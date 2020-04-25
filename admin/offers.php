<?php 
include("ses.php");
?>
<?php

require_once("dbcontroller.php");
$db_handle = new DBController();
$query ="SELECT * FROM category";
$results = $db_handle->runQuery($query);
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Add Offers</title>
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
<script>
function getState(val) {
	$.ajax({
	type: "POST",
	url: "getsub.php",
	data:'category='+val,
	success: function(data){
		$("#state-list").html(data);
		getCity();
	}
	});
}

</script>
</head>
<body>
    <!-- Left Panel -->
<?php 
include("header.php");
include("../conn.php");?>
   <!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->
<?php
if(isset($_POST['submit'])){		
$category=$_POST['category'];
$subcategory=$_POST['subcategory'];

$discount=$_POST['discount'];
$ImageSavefolder = "../offer/";
$query="insert into offer (offer,category,subcategory,discount) values ('".$_FILES['files']['name']."','$category','$subcategory','$discount')";
					 if($run=mysql_query($query))
					{
						move_uploaded_file($_FILES["files"]["tmp_name"] , "$ImageSavefolder".$_FILES["files"]["name"]);
						     echo '<script type="text/javascript">alert("Carousel Offer Added Successfully!!!...");</script>';
				    }
					else{
						echo '<script type="text/javascript">alert("OOPS! Something Went Wrong...");</script>';
					}

    }
   

?>


    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"> Zairo International</a>
                    <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
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
                                <h1>Homepage Offer</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a>Dashboard</a></li>
                                    <li><a>Website Setting</a></li>
                                    <li class="active">Homepage Offer</li>
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
                                <strong>Offer</strong>
                            </div>
                            <div class="card-body card-block">
                                <form method="post" enctype="multipart/form-data" class="form-horizontal">
                                	   <div class="row form-group">
                                        <div class="col col-md-3"><label for="select" class=" form-control-label">Category</label></div>
                                        <div class="col-12 col-md-9">
										<select name="category" id="country-list" class="form-control" onChange="getState(this.value);">
										<option value disabled selected>Select Category</option>
										<?php
										foreach($results as $office) {
										?>
										<option value="<?php echo $office["category"]; ?>"><?php echo $office["category"]; ?></option>
										<?php
										}
										?>
										</select>                                           
                                        </div>
                                    </div>
									 <div class="row form-group">
                                        <div class="col col-md-3"><label for="select" class=" form-control-label">Sub Category</label></div>
                                        <div class="col-12 col-md-9">
                                           <select name="subcategory" id="state-list" class="form-control" onChange="getCity(this.value);">
											<option value="">Waiting......</option>
										   </select>
                                        </div>
                                    </div>
										<div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Discount <small>(upto)</small></label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="discount" placeholder="Discount" class="form-control"></div>
                                    </div>
									 <div class="row form-group">
                                        <div class="col col-md-3"><label for="password-input" class=" form-control-label">Offer Image</label></div>
                                        <div class="col-12 col-md-9"><input type="file" id="file-input" name="files"></div>
                                    </div>
									<div id="preview" class="preview"></div><i style="color:red;font-size:15px">Offer Output...</i>
                                </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm" name="submit" style="font-size:20px;color:green">
                                    <i class="fa fa-check"></i> Add
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
