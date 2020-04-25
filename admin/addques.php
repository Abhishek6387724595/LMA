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
    <title>Test</title>
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
	      $insert = "INSERT INTO question(test_name,quesno,ques)VALUES('".$_POST['hdn']."','".$_POST['quesNo']."','".$_POST['ques']."')";
            if(mysqli_query($connect,$insert))
			{
				 $ans = array();
				 $ans[1] = $_POST['ans1'];
				 $ans[2] = $_POST['ans2'];
				 $ans[3] = $_POST['ans3'];
				 $ans[4] = $_POST['ans4'];
				 $test = array();
				 $test[1] = $_POST['hdn'];
				 $rightAns = $_POST['rightAns'];
				 foreach ($test as $key => $testName) {
				 foreach ($ans as $key => $ansName) {
			       if ($ansName != '') {
					 $s2=$_POST['hdn'][$key];
					 if ($rightAns == $key) {
				 $insert1 = "INSERT INTO ans(test_name,quesNo,rightAns,ans)VALUES('".$testName."','".$_POST['quesNo']."','1','".$ansName."')";
				 mysqli_query($connect,$insert1);
				 }else{
          		 $insert1 = "INSERT INTO ans(test_name,quesNo,rightAns,ans)VALUES('".$testName."','".$_POST['quesNo']."','0','".$ansName."')";
                 mysqli_query($connect,$insert1);	
				      }
					 }
					}
				  }
			     $statusMsg = "Data Uploaded Successfully!";
		       echo '<script>alert("'.$statusMsg.'");</script>'; 
            }else{
                $statusMsg = "Sorry, Data Not Uploaded.";
				 echo '<script>alert("'.$statusMsg.'");</script>';
            }   
	   
            
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
                                <h1>Add Test</h1>
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
                                <form action="#" method="post" name="form6" id="form6"  class="form-horizontal">
                                  
									 <div class="row form-group">
                                        <div class="col col-md-3"><label for="password-input" class=" form-control-label">Test Name</label></div>
                                        <div class="col-12 col-md-9">
                                        <select name="test" class="form-control" required=""  onchange="form6.submit()" >
			  <option  value="">----------Select Test-----------</option>
        	  <?php
			  
		        $str = "SELECT * FROM test order by id asc";    
                $Res = mysqli_query($connect,$str) or die(mysqli_error());
                $num=mysqli_num_rows($Res);
				for($i=0;$i<$num;$i++)
 					{
 					$array=mysqli_fetch_array($Res);
				    $test_name=htmlspecialchars(stripslashes($array["test_name"]));
					 $id=htmlspecialchars(stripslashes($array["id"]));
					if($_REQUEST['test']==$test_name)
					    {
			  			?>
			  			<option  value="<?php echo $test_name ; ?>"  selected="selected"><?php echo $test_name ; ?></option>
						<?php
						}
						else
						{
						?>
					    <option  value="<?php echo $test_name ; ?>" ><?php echo $test_name ; ?></option>
						<?php
						}
						?>
              <?php		
			      }
			  ?>
			  </select>
              </div>
                                    </div>
									
                                </div>
                            </form>
                            <form action="#" method="post"  class="form-horizontal"> 
                                     <?php
									   if(@$_POST['test']!=''){
									 	$query = "SELECT * FROM question where test_name='".$_POST['test']."'";
										$getResult = mysqli_query($connect,$query);
										$total = mysqli_num_rows($getResult);
										$next = $total+1;
									   }
									 ?>
									 <div class="row form-group">
                                        <div class="col col-md-3" style="margin-left:20px;"><label for="password-input" class=" form-control-label">Question No</label></div>
                                        <div class="col-12 col-md-7">
                                        
                                        <input type="number" value="<?php if(isset($next)){echo $next;}?>"  name="quesNo">
                                       
                                        </div>
                                    </div>
                                     <div class="row form-group">
                                        <div class="col col-md-3" style="margin-left:20px;"><label for="password-input" class=" form-control-label">Question</label></div>
                                        <div class="col-12 col-md-7">
                                        
                                        <input type="text"  id="ques" name="ques">
                                        <input type="hidden" name="hdn" value="<?php echo $_REQUEST['test'];?>" > 
                                        </div>
                                    </div>
                                    
                                    <div class="row form-group">
                                        <div class="col col-md-3" style="margin-left:20px;"><label for="password-input" class=" form-control-label">Choice One</label></div>
                                        <div class="col-12 col-md-7">
                                        
                                        <input type="text"  id="ans1" name="ans1">
                                      
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3" style="margin-left:20px;"><label for="password-input" class=" form-control-label">Choice Two</label></div>
                                        <div class="col-12 col-md-7">
                                        
                                        <input type="text"  id="ans2" name="ans2">
                                      
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3" style="margin-left:20px;"><label for="password-input" class=" form-control-label">Choice Three</label></div>
                                        <div class="col-12 col-md-7">
                                        
                                        <input type="text"  id="ans3" name="ans3">
                                      
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3" style="margin-left:20px;"><label for="password-input" class=" form-control-label">Choice Four</label></div>
                                        <div class="col-12 col-md-7">
                                        
                                        <input type="text"  id="ans4" name="ans4">
                                      
                                        </div>
                                    </div> 
                                    <div class="row form-group">
                                        <div class="col col-md-3" style="margin-left:20px;"><label for="password-input" class=" form-control-label">Correct Ans No.</label></div>
                                        <div class="col-12 col-md-7">
                                        
                                        <input type="number"  name="rightAns" required="">
                                      
                                        </div>
                                    </div>   
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm" name="submit" style="font-size:20px;color:green">
                                    <i class="fa fa-check"></i> Add A Question
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
