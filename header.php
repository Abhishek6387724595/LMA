<?php
//session_start();
?>
<style>
@import url('https://fonts.googleapis.com/css?family=Montserrat');
/*.title {*/
/*	font-family: "Montserrat";*/
/*	text-align: center;*/
/*	color: #FFF;*/
/*	display: flex;*/
/*	flex-direction: column;*/
/*	align-items: center;*/
/*	justify-content: center;*/
/*	animation:blinkingText 1.2s infinite;*/
/*	letter-spacing: 1px;*/
/*}*/

h1 {
	background-image: url(https://media.giphy.com/media/26BROrSHlmyzzHf3i/giphy.gif);
	background-size: cover;
	color: transparent;
	-moz-background-clip: text;
	-webkit-background-clip: text;
	text-transform: uppercase;
	font-size: 14px;
	line-height: .75;
	
}
/* styling my button */

.white-mode {
	text-decoration: none;
	padding: 7px 10px;
	background-color: #122;
	border-radius: 3px;
	color: #FFF;
	transition: .35s ease-in-out;
	position: absolute;
	left: 15px;
	bottom: 15px;
	font-family: "Montserrat";
}

.white-mode:hover {
	background-color: #FFF;
	color: #122;
}
#main-navlinks>li>a:hover {
    background-color: #f9ca3c;
}
.pp .mm .tt .kk .nn:hover{
	background-color: #f9ca3c;
}
.pp .mm .zz .gg .oo:hover{
	background-color: #f9ca3c;
}
@-webkit-keyframes blinker>a>h2 {
  from {opacity: 1.0;}
  to {opacity: 0.0;}
}
.blink>a>h2{
	text-decoration: blink;
	-webkit-animation-name: blinker;
	-webkit-animation-duration: 0.6s;
	-webkit-animation-iteration-count:infinite;
	-webkit-background-clip: text;
	-webkit-animation-timing-function:ease-in-out;
	-webkit-animation-direction: alternate;
	color:red;
	
}
</style>
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
<nav class="navbar navbar-light navbar-expand-md sticky-top custom-header" style="background-color:#29166F;">
        <div class="container-fluid" >
            <div><a href="index.php" style="font-family:arial;background-color:#29166F;text-decoration:none;font-size:28px;color:#FFF;margin-right:30px;margin-left:-17px;">La Militaire Academy </a><button data-toggle="collapse" class="navbar-toggler" data-target="#navbar-collapse"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            </div>
            <div class="pp collapse navbar-collapse" id="navbar-collapse">
                <ul class="mm nav navbar-nav links" id="main-navlinks" >
                    <li class="nav-item" role="presentation"><a class="nav-link" href="index.php">Home </a></li>
                    <li class="tt nav-item dropdown" role="presentation"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false">About </a>
					<div class="kk dropdown-menu dropdown-menu-right" role="menu">
					<a class="nn dropdown-item" role="presentation" href="about.php">About Us </a>
					<!--<a class="nn dropdown-item" role="presentation"  href="course.php">About Courses </a>-->
					<a class="nn dropdown-item" role="presentation" href="advisors.php">Patron Advisors</a>
					<a class="nn dropdown-item" role="presentation" href="ecadvisors.php">EC Members</a>
					</div>
					</li>
					<li class="zz nav-item dropdown" role="presentation"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false">Courses </a>
					<div class="gg dropdown-menu dropdown-menu-right" role="menu">
					<a class="oo dropdown-item" role="presentation" href="classroom.php">LMA Class Rooms </a>
					<a class="oo dropdown-item" role="presentation" href="digital.php">LMA Digital </a>
					<!--<a class="dropdown-item" role="presentation" href="distance.php">LMA Distance </a></div>-->
					</li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="achievements.php">Achievements</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="gallery.php">Gallery</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link custom-navbar" href="contact.php">Contact</a></li>
              </ul>
<script lanaguage="javascript">
function validatesearch() 
{
		if(document.search1.search.value=="")
		{
			alert("Please enter Search Detail");
			document.search1.search.focus();
			return false;
		}
}
</script>
<div class="blink" style="margin-left:15px;margin-top:-10px;">
 <a href="register.php" style="text-decoration:none;"><h2 style="font-size:22px; margin-left:150px;">Apply Now</h2></a>
</div>
                <div style="margin-left:20px;">
                 <form method="post" name="search1" action="search.php" onSubmit="return validatesearch();">
                 <input type="text" name="search"  style="width:200px;background:#fff;border-radius: 40px;color:#002737;transition: all .15s ease-in-out;font-size: 14px;height: 34px;border: 1px solid #C2C2C2;box-sizing: border-box;box-shadow: inset 2px 2px 8px rgba(0,0,0,.05);padding: 0 10px;" placeholder="Search" />
                 
                 <button class="btn btn-info" type="submit" style="height: 34px;padding: 0 10px;" name="submit">Search</button>
                </form>
                </div>
                
                <ul class="nav navbar-nav ml-auto">
                
                    
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">
                     <!--<img class="dropdown-image" src="https://www.pavilionweb.com/wp-content/uploads/2017/03/man-300x300.png">-->Login</a>
                        <div class="dropdown-menu dropdown-menu-right" role="menu">
						<!--<a class="dropdown-item" role="presentation" href="login/slogin.php">Student Login</a>-->
						<a class="dropdown-item" role="presentation" href="admin/onlinetest2/login.php">Student Login</a>
						<!--<a class="dropdown-item" role="presentation" href="login/plogin.php">Parent Login</a></div>-->

                    </li>
                </ul>
                
        </div>
        </div>
    </nav>