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

<?php
include("../conn.php");
if(isset($_POST['submit']))
{
    $id=$_REQUEST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $date = $_POST['date'];
    
    //$oldfile = $_POST['old'];
    $imgfile = $_FILES['postimage']['name'];
    if($imgfile!="") 
    {
        $extension = substr($imgfile,strlen($imgfile)-4,strlen($imgfile));
        // allowed extensions
        $allowed_extensions = array(".jpg","jpeg",".png",".gif");
        // Validation for allowed extensions .in_array() function searches an array for a specific value.
        if(!in_array($extension,$allowed_extensions))
        {
            echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
        }
        else
        {
           
            move_uploaded_file($_FILES["postimage"]["tmp_name"],"../testimonial/".$imgfile);
            //move_uploaded_file($_FILES['postimage']['tmp_name'],'../testimonial/'.$file);
            $sql = "UPDATE testimonial SET  name='$name', image='$imgfile', description='$description', date='$date' WHERE  id='$id'";
    mysqli_query($connect, $sql);
      //$_SESSION['err']="Updated Product Detail!";
    $statusMsg = "Details Updated!";
    echo '<script>alert("'.$statusMsg.'");</script>';
        } 
    }
    else 
    {
        //$imgfile = $oldfile;
        $sql = "UPDATE testimonial SET  name='$name', description='$description', date='$date' WHERE  id='$id'";
    mysqli_query($connect, $sql);
      //$_SESSION['err']="Updated Product Detail!";
    $statusMsg = "Details Updated!";
    echo '<script>alert("'.$statusMsg.'");</script>';
    }


    // $imgfile=$_FILES["postimage"]["name"];
    // // get the image extension
    // $extension = substr($imgfile,strlen($imgfile)-4,strlen($imgfile));
    // // allowed extensions
    // $allowed_extensions = array(".jpg","jpeg",".png",".gif");
    // // Validation for allowed extensions .in_array() function searches an array for a specific value.
    // if(!in_array($extension,$allowed_extensions))
    // {
    // echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
    // }
    // else
    // {
    // //rename the image file
    // //$imgnewfile=md5($imgfile).$extension;
    // // Code for move image into directory
    // move_uploaded_file($_FILES["postimage"]["tmp_name"],"../testimonial/".$imgfile);



// 	$sql = "UPDATE testimonial SET  name='$name', image='$imgfile', description='$description', date='$date' WHERE  id='$id'";
//     mysqli_query($connect, $sql);
// 	  //$_SESSION['err']="Updated Product Detail!";
// 	$statusMsg = "Updated Product Detail!";
// 	echo '<script>alert("'.$statusMsg.'");</script>';
}
//}


		$Query="select * from testimonial  where id='".$_REQUEST['id']."'";
		$Result = mysqli_query($connect,$Query) or die(mysqli_error());
	    while($row = mysqli_fetch_array($Result))
		{
		   $rowid=$row;
		}

?>

 <!-- Right Panel -->
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

                                <h1>Update Testimonial</h1>
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
                            
                            <form action="#" method="post"  class="form-horizontal" enctype="multipart/form-data"> 

                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" value="<?php echo $rowid['name'];?>" name="name" class="form-control" autocomplete="off" id="name" ><br>
                                </div>

                                <div class="form-group">
                                    <label for="">Description</label>
                                    <textarea name="description" rows="10" class="form-control" id="description" autocomplete="off"><?php echo $rowid['description'];?></textarea><br>
                                </div>

                                <div class="form-group">
                                    <label for="">Date</label>
                                    <input type="date" name="date" value="<?php echo $rowid['date'];?>" class="form-control" id="date" autocomplete="off"><br>
                                </div>

                                <div class="form-group">
                                    <label for="">Image</label>
                                    <input type="file" name="postimage"> <span name="old" value="<?=$rowid['image']?>"><?php echo $rowid['image']?></span>
                                    
                                    <!--<input type="file" name="postimage" value="../testimonial/<?php //echo $rowid['image'];?>"class="form-control" id="postimage" autocomplete="off">-->
                                    <!--<input type="file" name="postimage" value="" class="form-control" id="postimage" autocomplete="off">-->
                                     <!--<img src="../testimonial/<?php //echo $rowid['image'];?>" width="300"/> -->
                                    <br>
                                </div>
                            <br>
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
<!-- <script>

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
</script> -->
<!-- Right Panel -->

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
<script src="assets/js/main.js"></script>


</body>
</html>
