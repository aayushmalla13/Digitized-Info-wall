<?php
if(isset($_POST['submit']))
	
mail($_POST["email"], 'Registration Success', 'Thanks for registering with digitized info wall','From: digitizedinfowall@gmail.com');

?>
<!DOCTYPE html>
<html>
<head>
  <title>Digitixed Info Wall</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
  
  <link href="https://fonts.googleapis.com/css?family=Rajdhani:400,700" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css?family=Bungee+Inline|Gruppo|Orbitron:400,700" rel="stylesheet">
  <script type="text/javascript" src="js/jquery.js"></script>
  <link rel="stylesheet" type="text/css" href="css/index.css"> 
  <link rel="stylesheet" type="text/css" href="css/signup.css">
  <link rel="stylesheet" type="text/css" href="css/login.css"> 

</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-md-6 col-lg-12">
        <div class="jumbotron" id="content"><h1>DIGITIZED INFO WALL</h1>
            <h3>Stay Connected Stay Tuned !</h3>
        </div>
        <div class="container buttonbox" >
          <button type="submit" class="login">LOGIN</button>
          <button type="submit" class="signup">SIGNUP</button>
        </div>
          
          <div class="slide">
            <hr>
          <img class="Slides img-thumbnail" src="imgs/ku.jpg">
          <img class="Slides img-thumbnail" src="imgs/sle.png">
          <img class="Slides img-thumbnail" src="imgs/sl.PNG">
          <img class="Slides img-thumbnail" src="imgs/index.jpeg">
          <img class="Slides img-thumbnail" src="imgs/indx.jpeg">  
          <img class="Slides img-thumbnail" src="imgs/bell.jpg">
          <img class="Slides img-thumbnail" src="imgs/slide.jpg">
          
          </div>
          <hr>
          <div class="contain container"></div>
          


          <div class="lform">
      
            <div class="loginBox">
            
              <h2>Login</h2>
              <form method="post" action="">
                <label for="groupcode">Group Code</label>
                <input id="groupcode" type="text" name="" required placeholder="Enter Group">

                <label for="username">Username</label>
                <input id="username" type="text" name="" required="" placeholder="Ex:Jhonplayer">
              
                <label for="email">Email</label>
                <input id="email" type="email" name="email" required placeholder="Your Email address">
                <label for="groupcode">Group Code</label>
                <input id="groupcode" type="text" name="" required placeholder="Enter Group">
                <label for="Password">Password:</label>
                <input type="Password" name="password" required placeholder="**********"> 
                <input type="submit" name="" value="Log In">

                <hr>
              </form>
            </div>
          </div>
        </div>  
        <div class="sform">
          <div class="signupBox">
            <h2>SignUp</h2>
            <form action = "signin.php" method = "post">
              <label for="regNo">University Reg.No:</label>
              <input id="regNo" type="text" name="regNo"  placeholder="Enter Your Registration Number">
              <label for="fullName">Full Name</label>
              <input id="fullName" type="text" name="fullName" placeholder="Enter Your Full Name">
              <label for="email">Email</label>
              <input id="email" type="email" name="email"  placeholder="Your Email address">
              <label for="Password">Password:</label>
                <input type="Password" min="8" name="password" placeholder="**************">
              <label for="rePassword">Re-enter Password:</label>
                <input type="Password" name="repassword"  placeholder="**************"> 
              <div><label>I agree to the terms and conditions: <input id="check" type="checkbox" name="agree" value="Yes"></label></div>
            
                <input type="submit" name="submit" value="Sign Up">
              
                <hr>
				
            </form>
          </div>
    
        </div>
      </div>
    </div>

</div>


















<script type="text/javascript" src="js/landingpage.js"></script>
<script type="text/javascript" src="js/learn.js"></script>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>