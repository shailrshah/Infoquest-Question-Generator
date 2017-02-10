<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


  <style>
    .register-form{

    /*width: 500px;*/

    margin: 40 auto;

    text-align: center;

    padding: 10px;

    color: #000;

    background : #c4c4c4;

    border-radius: 10px;

    -webkit-border-radius:10px;

    -moz-border-radius:10px;

}

 

.register-form form input{padding: 5px;}

.register-form .btn{background: #726E6E;

padding: 7px;

border-radius: 5px;

text-decoration: none;

width: 50px;

display: inline-block;

color: #FFF;}

 

.register-form .register{

border: 0;

width: 60px;

padding: 8px;

}
    </style>
</head>
<body>

  <body >
   
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

<div class="container-fluid">
  
  <div class="row">
    <div class="col-md-6" >

      <div class="register-form">

<h1>Login</h1>

<form action="login.php" method="POST">

    

     

    <p><label>E-Mail&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : </label>

     <input id="password" type="email" name="email"/></p>

  
      <p><label>Password&nbsp;&nbsp; : </label>

     <input id="password" type="password" name="password" placeholder="password" /></p>

     <p><a><label>Forgot Password?&nbsp;&nbsp; : </label></a>
     </p>
     <input class="btn register" type="submit" name="submit" value="GO" />

    </form>

</div>

    </div>
    <div class="col-md-6" >
      

      <div class="register-form">

<h1>Register</h1>

<form action="putuser.php" method="POST">

    <p><label>User Name : </label>

    <input id="username" type="text" name="username" placeholder="username" /></p>

     

    <p><label>E-Mail&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : </label>

     <input id="password" type="email" name="email"/></p>

  
      <p><label>Password&nbsp;&nbsp; : </label>

     <input id="password" type="password" name="password" placeholder="password" /></p>
     <input class="btn register" type="submit" name="submit" value="GO" />

    </form>

</div>

    </div>
  </div>
</div>

</body>
</html>
