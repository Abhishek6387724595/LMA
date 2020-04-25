<?php
include_once './inc/header.php';

if(isset($_POST["submit"])){
    $getImage=  basename($_FILES["Image"]["name"]);
    if($getImage==""){
        echo "Please choose";
    }
    else
    {
        $target="../sliderImage/";
        $ran=time();
        $target=$target.$ran.$getImage;
        $imageName=$ran.$getImage;
        
        if($_FILES["Image"]["type"]=="image/jpg"||$_FILES["Image"]["type"]=="image/jpeg"){
            move_uploaded_file($_FILES["Image"]["tmp_name"], $target);
            if(move_uploaded_file){
                include_once './slider/sliderClass.php';
                $sliderClass=new SliderClass();
                $sliderClass->uploadSlider($imageName,$_POST["Big"],$_POST["Small"]);
            }
            else
            {
                echo "File is not uploaded";
            }
        }
        else
        {
            echo "Please choose Image";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Justified Nav Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jhttp://getbootstrap.com/docs/4.0/examples/justified-nav/justified-nav.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">

      <div class="masthead">
          <br/>
        <h3 class="text-muted">Add Slider</h3>
        <br/>

        <nav class="navbar navbar-expand-md navbar-light bg-light rounded mb-3">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav text-md-center nav-justified w-100">
              <li class="nav-item active">
                  <a class="nav-link" href="dashboard.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="addSlider.php">Add Slider</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="listSlider.php">List Slider</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="logout.php">Logout</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>


      <!-- Example row of columns -->
      <div class="col-md-6">
          <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>" enctype="multipart/form-data">
              <div class="form-group">
                  <label>Choose Image</label>
                  <input type="file" name="Image" id="Image" value="" class="form-control">
              </div>
              <div class="form-group">
                  <label>Big Text</label>
                  <input type="text" name="Big" id="Big" value="" class="form-control">
              </div>
              <div class="form-group">
                  <label>Small Text</label>
                  <input type="text" name="Small" id="Small" value="" class="form-control">
              </div>
              <button id="submit" name="submit" type="Submit" class="btn btn-primary">Upload Image</button>
          </form>
      </div>


    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="http://getbootstrap.com/assets/js/vendor/popper.min.js"></script>
    <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
  </body>
</html>
