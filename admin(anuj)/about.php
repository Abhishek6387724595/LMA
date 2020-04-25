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
    <title>About Content</title>
    <meta name="description" content="Veer WD">
    <meta name="viewport" content="Veer WD">

    <link rel="apple-touch-icon" href="images/logo.png">
    <link rel="shortcut icon" href="images/logo.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/lib/chosen/chosen.min.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>
<body>
<?php include("header.php");?>
    <div id="right-panel" class="right-panel">
<?php 
include("../conn.php");
					if(isset($_REQUEST['submit']))
					{
						
						$about=$_POST['about'];
						$mission=$_POST['mission'];
					$query="update about set about='$about' , ourmission='$mission' where id='1'";
					if($run=mysql_query($query))
					{
						echo '<script type="text/javascript">alert("About Updated Successfully !!!");</script>';
				    }
					else{
						echo '<script type="text/javascript">alert("OOPS! Something Went Wrong...");</script>';
					}
					}
?> 
        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
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
                            <a class="nav-link" href="profile.php"><i class="fa fa- user"></i>My Profile</a>
                            <a class="nav-link" href="logout.php"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                </div>
            </div>
        </header>
        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Dashboard</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li><a href="#">Website Setting</a></li>
                                    <li class="active">About Content</li>
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

                    <div class="col-xs-6 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>About Content</strong>
                            </div>
							<form method="post">
                            <div class="card-body card-block">
                               <div class="row form-group">
							    <?php
	 include("../conn.php");
	  $sql="SELECT * from about";
	  $result=$conn-> query($sql);
	  
	  if($result-> num_rows > 0){
		  $row=mysqli_fetch_assoc($result);
			  
						?>  
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Our Story</label></div>
                                        <div class="col-12 col-md-9"><textarea id="TypeHere" rows="8" name="about" class="form-control"><?php echo $row["about"];?></textarea></div>
	 </div>
	   <div class="row form-group">
	   <div class="col col-md-3"><label for="text-input" class=" form-control-label">Our Mission</label></div>
                                        <div class="col-12 col-md-9"><textarea id="TypeHere1" rows="8" name="mission" class="form-control"><?php echo $row["ourmission"];?></textarea></div>
                            </div>
							 <?php }?>
                            </div>
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

                  



  </div>


</div><!-- .animated -->
</div><!-- .content -->
    <div class="clearfix"></div>
</br></br></br></br></br></br></br></br></br>
   <?php include("footer.php");?>


</div><!-- /#right-panel -->

<!-- Right Panel -->

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/lib/chosen/chosen.jquery.min.js"></script>
<script src="http://js.nicedit.com/nicEdit-latest.js"></script>
<script>

bkLib.onDomLoaded(function()

{

new nicEditor().panelInstance('TypeHere');
});
bkLib.onDomLoaded(function()

{

new nicEditor().panelInstance('TypeHere1');
});

</script>
<script>
    jQuery(document).ready(function() {
        jQuery(".standardSelect").chosen({
            disable_search_threshold: 10,
            no_results_text: "Oops, nothing found!",
            width: "100%"
        });
    });
</script>

</body>
</html>
