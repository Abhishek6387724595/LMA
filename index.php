<!-- changes made in line 352-412 -->

<?php
//index.php
session_start();
include('conn.php');
// function make_query($connect)
// {
//  $query = "SELECT * FROM carousal ORDER BY id DESC LIMIT 5";
//  $result = mysqli_query($connect, $query);
//  return $result;
// }

// function make_slide_indicators($connect)
// {
//  $output = ''; 
//  $count = 0;
//  $result = make_query($connect);
//  while($row = mysqli_fetch_array($result))
//  {
//   if($count == 0)
//   {
//    $output .= '<li data-target="#dynamic_slide_show" data-slide-to="'.$count.'" class="active"></li>';
//   }
//   else
//   {
//    $output .= '<li data-target="#dynamic_slide_show" data-slide-to="'.$count.'"></li>';
//   }
//   $count = $count + 1;
//  }
//  return $output;
// }

// function make_slides($connect)
// {
//  $output = '';
//  $count = 0;
//  $result = make_query($connect);
//  while($row = mysqli_fetch_array($result))
//  {
//   if($count == 0)
//   {
//    $output .= '<div class="item active">';
//   }
//   else
//   {
//    $output .= '<div class="item"  class="carousel slide" data-ride="carousel">';
//   }
//   $output .= '<img src="carousal/'.$row["image"].'" width="100%" height="500px"alt="First slide"/></div>';
//   $count = $count + 1;
//  }
//  return $output;
// }

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>La Militaire Academy</title>
    <style>
    html,body{
        width:100%;
        height:100%;
        margin:0px;
        padding:0px;
        overflow-x:hidden;
    }
    
    
    </style>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
    <link rel="stylesheet" href="news_scroll.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="bootstrap.min.css" />
  <link rel="stylesheet" href="animate.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- for slider -->
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
  
<script lanaguage="javascript">
function validatecontact() 
{
        if(document.register.name.value=="")
        {
            alert("Please enter Full Name");
            document.register.name.focus();
            return false;
        }
        if(document.register.email.value=="")
        {
            alert("Please enter Email");
            document.register.email.focus();
            return false;
        }

        var adres = document.register.email.value;
        var re = new RegExp("[^@]{1,}[@]{1}[^@.]{1,}[.]{1}[^@]{1,}","gi");
        var wynik = re.test(adres);
        if(wynik == false){
        alert("Incorrect E-Mail address.");
        document.register.email.focus();
        return false;   
        }
        if(document.register.mobile.value=="")
        {
            alert("Please enter Mobile No.");
            document.register.mobile.focus();
            return false;
        }
        if(document.register.class.value=="")
        {
            alert("Please enter class.");
            document.register.class.focus();
            return false;
        }
        if(document.register.city.value=="")
        {
            alert("Please enter city.");
            document.register.city.focus();
            return false;
        }
    }
</script>
<style>
    .blink_me {
        animation: blinker 2s linear infinite;
        color: red;
        
    }



    @keyframes blinker {
      50% {
        opacity: 0.3;
      }
    }
</style>
</head>

<body>

<?php 
include("header.php");
include("conn.php");
date_default_timezone_set("Asia/Kolkata");
                    if(isset($_REQUEST['submit']))
                    {
                        
                        $name=$_POST['name'];
                        $email=$_POST['email'];
                        $mobile=$_POST['mobile'];
                        $city=$_POST['city'];
                        $class=$_POST['class'];
                        $date=date("Y-m-d");
                    $query="insert into enquiry (name,email,mobile,class,city,date)values('$name','$email','$mobile','$class','$city','$date')";
                    if($run=mysqli_query($connect,$query))
                    {
                        echo '<script type="text/javascript">alert("Enquiry Successfully Submit !!!");</script>';
                    }
                    else{
                        echo '<script type="text/javascript">alert("OOPS! Something Went Wrong...");</script>';
                    }
                    }
?> 
    <section>
        <div style="margin-top:0px;">
            <img src="assets/img/LMA.jpg" alt="lma" width="100%" height="80%" >
        </div>
    </section>
    <section style="margin-top:-20px; background-color:#D3D3D3;">
        <div >
         <h2 class="text-center font-size-bold" style="padding-top: 10px;padding-bottom:10px;color:#000;">Most Trusted Defence Preparation Institute For</h2>
         <!--<hr>-->
         </div>
        <div class="row" style="background-color:#29166F;">
            <div class="col-lg-12" style="text-align:center;">
                <a href="https://www.upsc.gov.in/sites/default/files/Notif-NDANA-I-2020-Eng.pdf"><div class="btn " style="margin:10px; background-color: #f9ca3c; font-weight: bold;">NDA</div></a>
                <a href="https://upsc.gov.in/sites/default/files/Notice-CDS-I-2019-English.pdf"><div class="btn " style="margin:10px; background-color: #f9ca3c; font-weight: bold;">CDS</div></a>
                <a href="https://afcat.cdac.in/AFCAT/assets/images/news/afcatGuidlines/GuidelinesForOnlineApplication.pdf"><div class="btn " style="margin:10px; background-color: #f9ca3c; font-weight: bold;">AFCAT</div></a>
                <a href="https://www.hindustantimes.com/static/ht2019/4/Notice-CAPF-2019-Engl.pdf"><div class="btn " style="margin:10px; background-color: #f9ca3c; font-weight: bold;">CPF</div></a>
                <a href="https://ssbtest.com/SSBTEST.pdf"><div class="btn " style="margin:10px; background-color: #f9ca3c; font-weight: bold;">SSB</div></a>
                <a href="https://www.wifistudy.com/assets/frontend/pdf/post/Indian_Air_Force_Group_X_and_Y_Syllabus_Exam_Pattern.pdf"><div class="btn " style="margin:10px; background-color: #f9ca3c; font-weight: bold;">AIRFORCE X-Y</div></a>
                <a href="https://mod.gov.in/dod/sites/default/files/RegsNavyIV.pdf"><div class="btn " style="margin:10px; background-color: #f9ca3c; font-weight: bold;">NAVY</div></a>
                <a href="https://drive.google.com/file/d/1azIHI0IEcp3SJOs7YCDuolwB9tCqKfK6/view"><div class="btn " style="margin:10px; background-color: #f9ca3c; font-weight: bold;">AA</div></a>
                <a href="https://www.joinindianarmy.nic.in/writereaddata/Portal/Images/pdf/UES_27_Detailed_Notification.pdf"><div class="btn " style="margin:10px; background-color: #f9ca3c; font-weight: bold;">ARMY</div></a>
                <a href="https://mha.gov.in/sites/default/files/ar0708-Eng.pdf"><div class="btn " style="margin:10px; background-color: #f9ca3c; font-weight: bold;">PARAMILITARY</div></a>
                <a href="https://joinindianarmy.nic.in/writereaddata/Portal/NotificationPDF/TA_Notification.pdf"><div class="btn " style="margin:10px; background-color: #f9ca3c; font-weight: bold;">TERRITORIAL ARMY</div></a>
            </div>
        </div>
   </section>
    
    
    <div style="margin-top:40px;">
        <div class="row">
            <div class="col-md-8">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    
                     <!-- CHANGEs -->

                    <!-- Indicators -->                    
                    <ul class="carousel-indicators">

                    <?php
                    include("conn.php");
                            $sql="SELECT image from carousal";
                            $result=$connect-> query($sql);
                            //$result = mysqli_query($connect, $sql);
                    $i=0;
                    foreach ($result as $row) {
                            $actives='';
                            if ($i==0) {
                                $actives='active';
                            }
                     
                    ?>

                    <li data-target="#demo" data-slide-to="<?= $i; ?>" class="<? $actives; ?>"></li>

                    <?php $i++; } ?>
                    </ul>
                    
                    <div class="carousel-inner">
                    <?php
                    $i=0;
                    foreach ($result as $row) {
                            $actives='';
                            if ($i==0) {
                                $actives='active';
                            }
                    ?>
                    <div class="carousel-item <?= $actives; ?>">
                         <img class="d-block w-100" src="carousal/<?= $row['image']; ?>" >
                     </div>
                    <?php $i++; } ?>



                      <!-- END CHANGES -->
                    
                    
                    
                    
                   <!--<div class="carousel-inner">-->
                       
                   <!--     <div class="carousel-item active">-->
                   <!--         <img class="d-block w-100" src="carousal/5.jpeg" alt="First slide">-->
                   <!--     </div>-->
                   <!--     <div class="carousel-item">-->
                   <!--         <img class="d-block w-100" src="carousal/6.jpg" alt="Second slide">-->
                   <!--     </div>-->
                   <!--     <div class="carousel-item">-->
                   <!--         <img class="d-block w-100" src="carousal/8.jpg" alt="Third slide">-->
                   <!--     </div>-->
                        
                        
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div id="news_iframe_scroll">
                    <div class="news_scroll-title">
                        News and Updates<br>
                    </div>
                    <div>
                        <iframe name="NewsIFrame" src="news_scroll.php" style="height:440px;" frameborder="0" scrolling="no"></iframe>
                    </div>
                </div>
            </div>
        </div> 
    </div>
    

    <!--<img src="assets/img/3.jpg" width="100%">-->
   
    <div style="padding-bottom:50px;padding-left:60px; background-color:#bebebe!important;">
        <h2 class="text-center bounce" style="padding-top: 44px;padding-bottom:30px; font-size:5vw; ">WHY LMA?</h2><hr>
        <div class="row">
        <div class="col-md-4" style="text-align:center!important;">
        <p style="font-size:20px;"><div class="happ"><img  src="assets/img/class.png" width="80px"></div> Adequate Batch Size</p><br>
        <style>
        
        .happ{
              
              transition: width 2s, height 4s;
        }
        
            .happ :hover{
                  width: 300px;
                  height: 300px;
                 
                
            }
        </style>
        
           <p style="font-size:20px"><div class="happ"><img src="assets/img/7.png" width="80px"></div> Proper Teacher / Student Ratio.</p><br>
           <p style="font-size:20px"><div class="happ"><img src="assets/img/6.png" width="80px"></div> Hostel Facility (Only For Boys).</p><br>
           <p style="font-size:20px"><div class="happ"><img src="assets/img/21.png" width="80px"></div> One to One Counselling.</p><br><br>
          
        
        </div>
        <div class="col-md-4" style="text-align:center!important;"> 
        <p style="font-size:20px"><div class="happ"><img src="assets/img/digital.png" width="80px"></div> Well Equiped Digital Studio Lab.</p><br>
           <p style="font-size:20px"><div class="happ"><img src="assets/img/20.jpg" width="80px"></div> SMS Alerts to Parents.</p><br>
           <p style="font-size:20px"><div class="happ"><img src="assets/img/23.jfif" width="80px"></div> Biometric Attendence.</p><br>
            <p style="font-size:20px"><div class="happ"><img src="assets/img/4.png" width="80px"></div> Security Guards and CCTV.</p><br>
        </div>
        <div class="col-md-4" style="text-align:center!important;">
        
            <p style="font-size:20px"><div class="happ"><img src="assets/img/10.png" width="80px"></div> Well Equiped Infrastructure.</p><br>
            <p style="font-size:20px"><div class="happ"><img src="assets/img/11.png" width="80px"></div> Well Equiped Class and Lab.</p><br>
            <p style="font-size:20px"><div class="happ"><img src="assets/img/12.png" width="80px"></div> Expert Faculty.</p><br>
            <p style="font-size:20px"><div class="happ"><img src="assets/img/water.png" width="80px"></div> RO Purified Drinking Water.</p><br>
        </div>
    
    </div>
    </div>
    
<div style="padding-top:50px">    
    <div style=" background-color:#6495ed!important;">
    <div class="container">
        <h2 class="text-center" style="padding-top: 44px;padding-bottom:30px; font-size:5vw;"><b>Our Results</b></h2>
        <div class="row">
            <div class="col-md-12">
                <div>
                    <ul class="nav nav-tabs">
                        <li class="nav-item"><a class="nav-link active" role="tab" data-toggle="tab" href="#tab-1" style="color: #000000;">NDA</a></li>
                        <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-2" style="color: rgb(8,8,8);">NA</a></li>
                        <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-3" style="color: rgb(4,4,4);">AFCAT</a></li>
                        <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-4" style="color: rgb(0,0,0);">CDS</a></li>
                        <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-5" style="color: rgb(0,0,0);">NAVY</a></li>
                        <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-6" style="color: rgb(0,0,0);">SSB</a></li>
                </ul>

<!-- ---------------------------------------------------CHANGES---------------------------------- -->
        <?php
        include("conn.php");
        $sql="select * from result order by id desc LIMIT 1";
        $result=$connect-> query($sql);
        // $result = mysqli_query($connect, $sql);
      
       if($result-> num_rows > 0){
          while($row=mysqli_fetch_assoc($result)){
        ?>  
                    <div class="tab-content">
                        <div class="tab-pane active" role="tabpanel" id="tab-1" style="text-align:center;padding:60px;">
                            <ul class="thread-list">
                                <!--<li class="thread"><span class="title" style="font-size:50px"><i><b>Students Selected last Year</b></i>  <?php //echo $row["nda"];?></span></li>-->
                                <img class="d-block w-100" src="result-images/<?= $row['nda']; ?>" >
                            
                            </ul>
                        </div>
                        <div class="tab-pane" role="tabpanel" id="tab-2" style="text-align:center;padding:60px">
                         <ul class="thread-list">
                            <!--<li class="thread"><span class="title" style="font-size:50px"><i><b>Students Selected last Year</b></i>  <?php //echo $row["na"];?></span></li>-->
                                
                            <img class="d-block w-100" src="result-images/<?= $row['na']; ?>" >
                            </ul>
                        </div>
                        
                        <div class="tab-pane" role="tabpanel" id="tab-3" style="text-align:center;padding:60px">
                         <ul class="thread-list">
                                <!--<li class="thread"><span class="title" style="font-size:50px"><i><b>Students Selected last Year</b></i>  <?php //echo $row["afcat"];?></span></li>-->
                                <img class="d-block w-100" src="result-images/<?= $row['afcat']; ?>" >
                            </ul>
                        </div>
                        
                        <div class="tab-pane" role="tabpanel" id="tab-4" style="text-align:center;padding:60px">
                         <ul class="thread-list">
                                <!--<li class="thread"><span class="title" style="font-size:50px"><i><b>Students Selected last Year</b></i>  <?php //echo $row["cds"];?></span></li>-->
                                <img class="d-block w-100" src="result-images/<?= $row['cds']; ?>" >
                            </ul>
                        </div>
                        
                        <div class="tab-pane" role="tabpanel" id="tab-5" style="text-align:center;padding:60px">
                         <ul class="thread-list">
                            <!--<li class="thread"><span class="title" style="font-size:50px"><i><b>Students Selected last Year</b></i>  <?php //echo $row["navy"];?></span></li>-->
                            <img class="d-block w-100" src="result-images/<?= $row['navy']; ?>" >
                            </ul>
                        </div>
                        
                        <div class="tab-pane" role="tabpanel" id="tab-6" style="text-align:center;padding:60px">
                         <ul class="thread-list">
                            <!--<li class="thread"><span class="title" style="font-size:50px"><i><b>Students Selected last Year</b></i>  <?php //echo $row["ssb"];?></span></li>-->
                                <img class="d-block w-100" src="result-images/<?= $row['ssb']; ?>" >
                            </ul>
                        </div>
                    </div>
      <?php }}?>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
    
<!-- -------------------------------------------------------------END CHANGES---------------------------- -->
 <div style="padding-top:50px">
    <div class="p-5" style="background-color: #18191b;">
        <div>
            <h2 class="text-center" style="color: white;  font-size:5vw;"><strong>Testimonials</strong><br></h2>
        </div>
        <div class="carousel slide" data-ride="carousel" id="carousel-2" style="background-color: #18191b;">
            <div class="carousel-inner" role="listbox">
              <?php
                        $sql1="select * from testimonial order by id desc";
                        $res=$connect-> query($sql1);
                        $count = ceil($res->num_rows/3);
                        $i=0; $y=0;
                        echo $count;
                        for($j=0; $j<$count; $j++)
                        {
                            if($i==0)
                            {?>
                                <div class="carousel-item active">
                            <?php }else{?>

                                <div class="carousel-item ">
                            <?php }
                            $i++;
                            ?>   
                    <div class="container p-5">
                        <div class="row">
                            <?php 
                             $sql="select * from testimonial order by id desc limit $y,3";
                             $y=$y+3;
                            $result=$connect-> query($sql);
      
                            if($result->num_rows > 0){
          
                            while($row=mysqli_fetch_assoc($result))
                            { 
                            ?>
                            <div class="col-md-4">
                                <div class="card shadow mt-2"><img class="card-img-top w-100 d-block" src="testimonial/<?php echo $row["image"]?>">
                                    
                                    <div class="card-body">
                                        <h4 class="card-title hSizeCont"><?php echo $row["name"]?></h4>
                                        <h6 class="text-muted card-subtitle mb-2">
                                        </h6>
                                        <p class="card-text fSizeCont" align="justify"><?php print substr($row["description"], 0, 280);?>...
                                        <a href="testimonial.php?id=<?php echo $row["id"];?>" >More</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                           <?php } }?>
                        </div>
                    </div>
                </div>
                <?php } ?>

            </div>
            <div><a class="carousel-control-prev" href="#carousel-2" role="button" data-slide="prev"><span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-2" role="button"
                    data-slide="next"><span class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a></div>
            <ol class="carousel-indicators">
                <?php  
                        $sql1="select * from testimonial order by id desc";
                        $res=$connect-> query($sql1);
                        $count = ceil($res->num_rows/3);
                        for($i=0; $i<$count; $i++)
                        {

                            if($i==0)
                            {
                                echo '<li data-target="#carousel-2" data-slide-to="'.$i.'" class="active"></li>';
                            }
                            else
                            {
                                echo '<li data-target="#carousel-2" data-slide-to="'.$i.'"></li>';
                            }
                        } 
                ?>
                
            </ol>
        </div>
    </div>
    </div>
    
    <div class="container-fluid">
        <div class="row mh-100vh">
            <div class="col-10 col-sm-8 col-md-6 col-lg-12 offset-1 offset-sm-2 offset-md-3 offset-lg-0 align-self-center d-lg-flex align-items-lg-center align-self-lg-stretch bg-white p-5 rounded rounded-lg-0 my-5 my-lg-0" id="login-block">
                <div class="m-auto w-lg-75 w-xl-50">
                    <h2 class="text-info font-weight-light mb-5" style="width: 550px;margin-left:-50px;">&nbsp;Register <br>&nbsp;Free Counselling</h2>
                    <form method="post" name="register" onSubmit="return validatecontact();">
                        <div class="form-group"><label class="text-secondary">Name</label>
                        <input class="form-control" type="text" style="border-radius:30px;" name="name">
                        </div>
                        <div class="form-group"><label class="text-secondary" >Email &nbsp;ID<sup style="color:red; font-size:10px;">*</sup></label>
                        <input class="form-control" type="email" name="email" style="border-radius:30px;" >
                        </div>
                        <div class="form-group"><label class="text-secondary">Mobile Number<sup style="color:red; font-size:10px;">*</sup></label>
                        <input class="form-control" type="text" name="mobile" maxlength="10" style="border-radius:30px;"  >
                        </div>
                        <div class="form-group"><label class="text-secondary">Class</label>
                        <input class="form-control" type="text" name="class" style="border-radius:30px;" >
                        </div>
                        <div class="form-group"><label class="text-secondary">City</label>
                        <input class="form-control" type="text" name="city" style="border-radius:30px;" >
                        </div>
                        <button class="btn btn-danger mt-2" type="submit" name="submit">Register NOW</button>
                     </form>
                </div>
            </div>
            
        </div>
    </div>
    
    <?php include("footer.php");?>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/1744f3f671.js"></script>
    <script src="assets/js/script.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>

</body>
</html>