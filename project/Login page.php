<!doctype html>
<html>
	<head>
		
		<title>Login Page</title>
		
		<link rel="stylesheet" type="text/css" href="Login page.css">

		<style >
			body{
				background-color: lightcyan;
			}
			#B{
				padding-left: 150px;
				color: green;
			}
		</style>
		
	</head>

	<body>
		<script type="text/javascript" src="Login page.js"></script>
		<nav class="navbar navbar-light bg-light">
			<script src="https://kit.fontawesome.com/cb761609a1.js" crossorigin="anonymous"></script>
  <form class="container-fluid justify-content-start" >
    <button class="btn btn-outline-success me-2" type="button"><a  href="parth.php"><img src="logo.jfif" height="35px" width="35px"></a></button>
    
  </form>
</nav>
	<form name="login" action="Login.php" method="POST" onsubmit="return myfnm()">
		<h1 id="b">Library Management</h1>
			<div id="c">
			<div id="a">
			<p style="color:blue">Login</p><hr>
			<br>
				<p1 id="d"> <i class="fas fa-user" style="padding-right: 10px; color: red;"></i>Username<br><br></p1>
				<span>
				<input type="text" name="nam" id="d"></span><br>
				<span id="re"></span><br><br>
				
				<p1 id="d"><i class="fas fa-key" style="padding-right: 10px; color: red;"></i> Password<br><br></p1>
				<span>
				<input type="password" name="pass" id="d"></span><br>
				<span id="re1"></span><br><br>
				<input type="checkbox" name="na" id="d" checked>Remember my id?
				<br><br>
				<input type="submit" name="submit" value="Sign In" id="d" style="color:red" >
				
				<br><br><hr>
				<span>
          		<b><a href="adminlogin.php" id="B">AdminLogin</a></b>
        		</span>
			</div>
			</div>

	</body>
    
</html>