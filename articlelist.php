<?php

	require('connectivity_script.php');
	require('login_script.php');
	if(!isset($_SESSION['login_user']))
	{
      // session has been started
      header('Location: register.php');
	}
	
	
    $sql="select * from article";
    $result = mysqli_query($con,$sql);
    // while($row1 = mysqli_fetch_array($result,MYSQLI_ASSOC)){
		//$text = $row1[];
		//echo $row1['Title'];
		//printf ("%s\n",$row1['title']);
		//echo "<br/><br/><br/>";
		//}
    
    
    
?>
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Project</title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME CSS -->
<link href="assets/css/font-awesome.min.css" rel="stylesheet" />
     <!-- FLEXSLIDER CSS -->
<link href="assets/css/flexslider.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />    
  <!-- Google   Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css' />
</head>
<body>
	
	
	 <div class="navbar navbar-inverse navbar-fixed-top " id="menu">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img class="logo-custom" src="assets/img/ourlogo.png" alt=""  /></a>
            </div>
            <div class="navbar-collapse collapse move-me">
                <ul class="nav navbar-nav navbar-right">
                    <li ><a href="#home">HOME</a></li>
                     <li><a href="#features-sec">ABOUT</a></li>
                       <li><a href="#experience-sec">KNOW-HOW</a></li>
                    <li><a href="#faculty-sec">TEAM</a></li>
                  <li><a href="#contact-sec">CONTACT US</a></li>
                </ul>
            </div>
           
        </div>
    </div>
      <!--NAVBAR SECTION END-->
       <div class="home-sec" id="home" >
           <div class="overlay">
 <div class="container">
           <div class="row text-center " >
           
               <div class="col-lg-12  col-md-12 col-sm-12">
               
                <div class="flexslider set-flexi" id="main-section" >
                    <ul class="slides move-me">
                        <!-- Slider 01 -->
                        <li>
                              <h2>Delivering Quality Education</h2>
                           <h1>A UNIQUE METHOD</h1>
                            <a  href="#experience-sec" class="btn btn-primary btn-lg" >
                                GET AWESOME 
                            </a>
                             <a  href="assets/login.html" class="btn btn-success btn-lg" >
                               LOGIN/REGISTER
                            </a>
                            <h3>SPEND A FEW MINUTES WITH US AND KNOW THE WORLD AROUND YOU WITH AN INCREDIBLE EXPERIENCE</h3>
                            
                        </li>
                        <!-- End Slider 01 -->
                        
                        <!-- Slider 02 -->
                        <li>
                            <h2>Delivering Quality Education</h2>
                           <h1>AN UNMATCHED SYSTEMATIC APPROACH</h1>
                             <a  href="#experience-sec" class="btn btn-primary btn-lg" >
                               GET AWESOME 
                            </a>
                             <a  href="assets/login.html" class="btn btn-success btn-lg" >
                               LOGIN/REGISTER
                            </a>
                            <h3>SPEND A FEW MINUTES WITH US AND KNOW THE WORLD AROUND YOU WITH AN INCREDIBLE EXPERIENCE</h3>
                        </li>
                        <!-- End Slider 02 -->
                        
                        <!-- Slider 03 -->
                        <li>
                            <h2>Delivering Quality Education</h2>
                           <h1>AN AWESOME TEAM</h1>
                             <a  href="#experience-sec" class="btn btn-primary btn-lg" >
                                GET AWESOME 
                            </a>
                              <a  href="assets/login.html" class="btn btn-success btn-lg" >
                               LOGIN/REGISTER
                            </a>
                            <h3>SPEND A FEW MINUTES WITH US AND KNOW THE WORLD AROUND YOU WITH AN INCREDIBLE EXPERIENCE</h3>
                        </li>
                        <!-- End Slider 03 -->
                    </ul>
                </div>
                   
     
              
              
            </div>
                
               </div>
                </div>
           </div>
           
       </div>
       <!--HOME SECTION END-->   
    <div  class="tag-line" >
         <div class="container">
           <div class="row  text-center" >
           
               <div class="col-lg-12  col-md-12 col-sm-12">
               
        <h1 data-scroll-reveal="enter from the bottom after 0.1s" ><i class="fa fa-circle-o-notch"></i> WELCOME TO INFOQUEST <i class="fa fa-circle-o-notch"></i> </h1>
                   </div>
               </div>
             </div>
        
    </div>
    
    
    <br><br><br>
    
    
	
	<form action=article.php method=get>
		<?php
		while($row1 = mysqli_fetch_array($result,MYSQLI_ASSOC)){
			 echo "<div class=jumbotron>";
		$var=$row1['Title'];
		$sub=$row1['Article_Id'];
		echo'<input type="radio" name="Title" value='.$sub.' >'.$var.' <br>';
		 echo "</div>";
			}
		?>
		<input type=submit value=submit>
	</form>
</body>
