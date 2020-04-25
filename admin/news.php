

<!doctype html>

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->

<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->

<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->

<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->

<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Add News Updates</title>

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



<h1 style="margin-left:400px;"><i>Add News Updates</i></h1>



<div class="container">

            <div class="col-lg-8 m-auto">

                <form action="news.php" id="myform" method="POST">



                    <div class="form-group">

                        <label for="">Title</label>

                        <input type="text" name="title" class="form-control" autocomplete="off" id="title" ><br>

                    </div>



                    <div class="form-group">

                        <label for="">Description</label>

                        <input type="text" name="description" class="form-control" id="description" autocomplete="off"><br>

                    </div>

                    <div class="form-group">

                        <label for="">Link</label>

                        <input type="url" name="link" class="form-control" id="link" autocomplete="off"><br>

                    </div>

                    <div class="form-group">

                        <label for="">Date</label>

                        <input type="date" name="date" class="form-control" id="date" autocomplete="off"><br>

                    </div>

                        <input type="submit" name="submit" id="submit" class="btn btn-success" value="Submit">

                        <br><br>

                </form>

            </div>

    </div>

    <script>

        $(document).ready(function(){

           var form = $('#myform');

           $('#submit').click(function(){

              $.ajax({

                 url:"news.php",

                 type: "POST",

                 data: ("#myform input").serialize(),

                 success: function (data) {

                     console.log(data);

                }

              });

           });

        });

    

    

    </script>

    

    



			 

<?php //include("footer.php");?>

<?php



include("../conn.php");;



extract($_POST);





if(isset($_POST['submit']))

{

    

    

    $tit = $_POST['title'];

    $des = $_POST['description'];

    $li = $_POST['link'];

    $da = $_POST['date'];





    $q = "insert into news (title,description,link,date) values ('$tit','$des','$li','$da')";

    

    $query = mysqli_query($connect,$q);
    $statusMsg = "Added News Detail!";
    echo '<script>alert("'.$statusMsg.'");</script>';

    

   // header('location:abhi.php');

}

?>

</div><!-- /#right-panel -->

<script src="http://js.nicedit.com/nicEdit-latest.js"></script>





<!-- Right Panel -->



<!-- Scripts -->

<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>

<script src="assets/js/main.js"></script>





</body>

</html>