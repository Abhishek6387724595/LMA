<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>La Militaire Academy - LMA Class Rooms </title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="assets/css/--mp---Testimonials-Slider.css">
    <link rel="stylesheet" href="assets/css/-Login-form-Page-BS4-.css">
    <link rel="stylesheet" href="assets/css/Contact-white--Gmap-1.css">
    <link rel="stylesheet" href="assets/css/Contact-white--Gmap-2.css">
    <link rel="stylesheet" href="assets/css/Contact-white--Gmap.css">
    <link rel="stylesheet" href="assets/css/Forum---Thread-listing-1.css">
    <link rel="stylesheet" href="assets/css/Forum---Thread-listing.css">
    <link rel="stylesheet" href="assets/css/Keet-Testimonial-01.css">
    <link rel="stylesheet" href="assets/css/Pretty-Header.css">
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
    <link rel="stylesheet" href="assets/css/List-item.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Testimonial-Slider-9-1.css">
    <link rel="stylesheet" href="assets/css/Testimonial-Slider-9.css">
</head>

<body>
   <?php include("header.php");?>
    <div id="page" class="page">            
            <section class="padding-110px-tb bg-dark-white builder-bg xs-padding-60px-tb border-none" id="contact-section">
                <div class="container">
                    <div class="row">
                        <!-- section title -->
                        <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                            <h2 class="section-title-large sm-section-title-medium xs-section-title-large text-yellow font-weight-600 alt-font tz-text margin-ten-bottom xs-margin-fifteen-bottom">Search Result</h2>
                        </div>
                        <!-- end section title -->
                    </div>
                    <div class="row">
                       <div class="col-md-12">
                     <table width="100%">
                     <?php
                     include("conn.php");
                     $sreach=$_POST['search'];
                     $c=0;
                     //for result and documents;
                    if(strtoupper($sreach)==='NDA') 
                    {
                        $c++;
                        $sql="select * from result order by id desc LIMIT 1";
                        $result=mysqli_query($connect,$sql);
                        while($row=mysqli_fetch_array($result)) 
                        {?>
                            <img class="d-block w-100" src="result-images/<?= $row['nda']; ?>" ><br>

                    <?php }?>
                        <a href="https://www.upsc.gov.in/sites/default/files/Notif-NDANA-I-2020-Eng.pdf"><div class="btn " style="margin:10px; background-color: #f9ca3c; font-weight: bold;">NDA</div></a><br>
                    <?php } ?>

                    <?php
                    if(strtoupper($sreach)==='AFCAT')
                    {
                        $c++;
                        $sql="select * from result order by id desc LIMIT 1";
                        $result=mysqli_query($connect,$sql);
                        while($row=mysqli_fetch_array($result)) 
                        {?>
                            <img class="d-block w-100" src="result-images/<?= $row['afcat']; ?>" ><br>

                    <?php }?>
                        <a href="https://afcat.cdac.in/AFCAT/assets/images/news/afcatGuidlines/GuidelinesForOnlineApplication.pdf"><div class="btn " style="margin:10px; background-color: #f9ca3c; font-weight: bold;">AFCAT</div></a><br>
                        
                    <?php } ?>

                    <?php
                    if(strtoupper($sreach)==='CDS')  
                    {
                        $c++;
                        $sql="select * from result order by id desc LIMIT 1";
                        $result=mysqli_query($connect,$sql);
                        while($row=mysqli_fetch_array($result)) 
                        {?>
                            <img class="d-block w-100" src="result-images/<?= $row['cds']; ?>" ><br>
                        <?php }?>
                        <a href="https://upsc.gov.in/sites/default/files/Notice-CDS-I-2019-English.pdf"><div class="btn " style="margin:10px; background-color: #f9ca3c; font-weight: bold;">CDS</div></a><br>
                    <?php }?>

                    <?php
                    if(strtoupper($sreach)==='NAVY') 
                    {
                        $c++;
                        $sql="select * from result order by id desc LIMIT 1";
                        $result=mysqli_query($connect,$sql);
                        while($row=mysqli_fetch_array($result)) 
                        {?>
                            <img class="d-block w-100" src="result-images/<?= $row['navy']; ?>" ><br>
                        <?php }?>
                        <a href="https://mod.gov.in/dod/sites/default/files/RegsNavyIV.pdf"><div class="btn " style="margin:10px; background-color: #f9ca3c; font-weight: bold;">NAVY</div></a><br>
                    <?php }?>

                    <?php
                    if(strtoupper($sreach)==='SSB')
                    {
                        $c++;
                        $sql="select * from result order by id desc LIMIT 1";
                        $result=mysqli_query($connect,$sql);
                        while($row=mysqli_fetch_array($result)) 
                        {?>
                            <img class="d-block w-100" src="result-images/<?= $row['ssb']; ?>" ><br>
                        <?php }?>
                         <a href="https://ssbtest.com/SSBTEST.pdf"><div class="btn " style="margin:10px; background-color: #f9ca3c; font-weight: bold;">SSB</div></a><br>

                    <?php }?>
        
                    <?php
                    if(strtoupper($sreach)==='CPF')
                    { 
                        $c++;
                        ?>
                        <a href="https://www.hindustantimes.com/static/ht2019/4/Notice-CAPF-2019-Engl.pdf"><div class="btn " style="margin:10px; background-color: #f9ca3c; font-weight: bold;">CPF</div></a><br>

                    <?php }?>

                    <?php
                    if(strtoupper($sreach)==='AIRFORCE X-Y')
                    { 
                        $c++;
                        ?>
                         <a href="https://www.wifistudy.com/assets/frontend/pdf/post/Indian_Air_Force_Group_X_and_Y_Syllabus_Exam_Pattern.pdf"><div class="btn " style="margin:10px; background-color: #f9ca3c; font-weight: bold;">AIRFORCE X-Y</div></a><br>

                    <?php }?>

                    <?php
                    if(strtoupper($sreach)==='AA')
                    { 
                        $c++;
                        ?>
                        <a href="https://drive.google.com/file/d/1azIHI0IEcp3SJOs7YCDuolwB9tCqKfK6/view"><div class="btn " style="margin:10px; background-color: #f9ca3c; font-weight: bold;">AA</div></a><br>
                    <?php }?>

                    <?php
                    if(strtoupper($sreach)==='ARMY')
                    { 
                        $c++;
                        ?>
                        <a href="https://www.joinindianarmy.nic.in/writereaddata/Portal/Images/pdf/UES_27_Detailed_Notification.pdf"><div class="btn " style="margin:10px; background-color: #f9ca3c; font-weight: bold;">ARMY</div></a><br>
                    <?php }?>

                    <?php
                    if(strtoupper($sreach)==='PARAMILITARY')
                    { 
                        $c++;
                        ?>
                    <a href="https://mha.gov.in/sites/default/files/ar0708-Eng.pdf"><div class="btn " style="margin:10px; background-color: #f9ca3c; font-weight: bold;">PARAMILITARY</div></a><br>
                    <?php }?>

                    <?php
                    if(strtoupper($sreach)==='TERRITORIAL ARMY')
                    {
                        $c++;
                        ?>
                        <a href="https://joinindianarmy.nic.in/writereaddata/Portal/NotificationPDF/TA_Notification.pdf"><div class="btn " style="margin:10px; background-color: #f9ca3c; font-weight: bold;">TERRITORIAL ARMY</div></a><br>

                    <?php }?>
                     <!--  //$counter=1; -->
                    
                    <?php
                     $query="select * from  testimonial where name like '%".$sreach."%' or description like '%".$sreach."%'";
                     $result=mysqli_query($connect,$query);
                     $num=mysqli_num_rows($result);
                     if($num>0)
                     {
                        $c++;
                     while($row=mysqli_fetch_array($result)) 
                     { 
                     ?>
                     <tr class="even">
                     <td><a href="testimonial.php?id=<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a></td>
                     <td><a href="testimonial.php?id=<?php echo $row['id']; ?>"><?php print substr($row['description'], 0, 90) ; ?>&nbsp;...</a></td>
                     </tr>
                     <?php }?>
                    <!--  <?php //}else{?>-->             
                    <?php }?>
                     <?php
                     $query1="select * from  news  where title like '%".$sreach."%' or description like '%".$sreach."%' or link like '%".$sreach."%'";
                     $result1=mysqli_query($connect,$query1);
                     $num1=mysqli_num_rows($result1);
                     if($num1>0)
                     {
                        $c++;
                     while($row1=mysqli_fetch_array($result1)) 
                       {
                     ?>
                           <tr>
                           <td><a href="searchnews.php?id=<?php echo $row1['id']; ?>"><?php echo $row1['title']; ?></a></td>
                           <td><a href="searchnews.php?id=<?php echo $row1['id']; ?>"><?php print substr($row1['description'], 0, 90) ; ?>&nbsp;...</a></td>
                           </tr>
                     <?php } ?>
                     <!--///////end while////////-->

                     <?php }?>
                     <?php
                     // else
                     // {  
                        if($c==0)
                        {
                            echo "NOT FOUND";
                        }
                      ?>
                     <!-- <?php //} ?> -->
                            </table>
                           </div>
                     </div>
                </div>
            </section>         
        </div>   <?php include("footer.php");?>
        <!-- javascript libraries -->
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.appear.js"></script>
        <script type="text/javascript" src="js/smooth-scroll.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <!-- wow animation -->
        <script type="text/javascript" src="js/wow.min.js"></script>
        <!-- owl carousel -->
        <script type="text/javascript" src="js/owl.carousel.min.js"></script>        
        <!-- images loaded -->
        <script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>
        <!-- isotope -->
        <script type="text/javascript" src="js/jquery.isotope.min.js"></script> 
        <!-- magnific popup -->
        <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
        <!-- navigation -->
        <script type="text/javascript" src="js/jquery.nav.js"></script>
        <!-- equalize -->
        <script type="text/javascript" src="js/equalize.min.js"></script>
        <!-- fit videos -->
        <script type="text/javascript" src="js/jquery.fitvids.js"></script>
        <!-- number counter -->
        <script type="text/javascript" src="js/jquery.countTo.js"></script>
        <!-- time counter  -->
        <script type="text/javascript" src="js/counter.js"></script>
        <!-- twitter Fetcher  -->
        <script type="text/javascript" src="js/twitterFetcher_min.js"></script>
        <!-- main -->
        <script type="text/javascript" src="js/main.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/--mp---Testimonials-Slider.js"></script>
    <script src="https://use.fontawesome.com/1744f3f671.js"></script>
    <script src="assets/js/Testimonial-Slider-9.js"></script>
</body>

</html>