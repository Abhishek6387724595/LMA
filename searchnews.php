<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>La Militaire Academy - About Us</title>
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
                         <!--section title -->
                        <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                            <h2 class="section-title-large sm-section-title-medium xs-section-title-large text-yellow font-weight-600 alt-font tz-text margin-ten-bottom xs-margin-fifteen-bottom">News</h2>
                        
                        </div>
                         <!--end section title -->
                    </div>
                    <div>
                    <?php
                    include("conn.php");
                    $Query="select * from news where id='".$_REQUEST['id']."'";
                    $Result = mysqli_query($connect,$Query);
                    while($QD = mysqli_fetch_object($Result))
                       {
                    ?>
                       <div>
                       
                        <h5><strong>Title : <?php echo $QD->title;?></strong></h5><br>
                        <h5 ><strong>Description</strong></h5><br>
                        <p align="justify">
                        <?php echo $QD->description;?>
                           </p>
                        <!--<p  align="justify">-->
                        <!--<?php //echo $QD->link;?>-->
                        <!--   </p>-->
                        
                         
                <a href="<?php echo $QD->link;?>">Link</a>
                    </div>
                    <?php } ?>
                  </div>
                  
                </div>
            </section>         
        </div>  
        <?php include("footer.php");?>



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