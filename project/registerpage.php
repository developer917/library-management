<!doctype html>
<html lang="en">
  <head>
		<link rel="stylesheet" type="text/css" href="Register Page.css">
		<script src="https://kit.fontawesome.com/cb761609a1.js" crossorigin="anonymous"></script>
    <title>Register Page</title>
    <style type="text/css">
      #n,#n1,#n2,#n3,#n4{
        color: red;
      }
     
    </style>
  </head>

  
  <body style="background-color:cyan ">
    <script type="text/javascript" src="Register page.js"></script>
  	<nav class="navbar navbar-light bg-light">
  <form class="container-fluid justify-content-start">
    <button class="btn btn-outline-success me-2" type="button"><a  href="parth.php"><img src="logo.jfif" height="35px" width="35px"></a></button>
    
  </form>
</nav>
      <form action="register.php" method="POST" name="Register" onsubmit="return myre()" >
	<h1 id="a">Library Management</h1>
	<div id="b">
	
	<p1 style><b>Register</b></p1>
	<hr id="c">
	
	<p id="d"> <i class="fas fa-user" style="padding-right: 10px; color: blueviolet;"></i>Username</p>
	<span>
	<input type="text" name="nam" id="d" ></span>
	<br><span id="n"></span>
	<p id="d"> <i class="fas fa-envelope" style="padding-right: 10px; color: blueviolet;"></i> E-mail </p>
	<span>
	<input type="email" name="em" id="d"  ></span>
	<br><span id="n1"></span>
	<p id="d"> <i class="fas fa-key" style="padding-right: 10px; color: blueviolet;"></i>Password </p>
	<span>
	<input type="password" name="pass" id="d"  ></span>
	<br><span id="n2"></span>
	<br>
	<p id="d"> <i class="fas fa-key" style="padding-right: 10px; color: blueviolet;"></i>Confirm Password </p>
	<span>
	<input type="password" name="cpass" id="d"  > </span>
	<br><span id="n3"></span>
	<br>
	<input type="submit"  value="Submit" id="d" style="color:green">
	<input type="reset"  value="Reset" id="e" style="color:blue"><br>
	</div>
	</form>
  
</body>
</html>