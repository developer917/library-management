<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="admin.css">
</head>
<body>
<div id="g">
<nav class="navbar navbar-light bg-light">
  <form class="container-fluid justify-content-start" >
    <button class="btn btn-outline-success me-2" type="button"><a  href="parth.php"><img src="logo.jfif" height="35px" width="35px"></a></button>
    
  </form>
</nav>
	<form name="login" action="Admin.php" method="POST" onsubmit="return myfnm()">
		<h1 id="b">Admin Page</h1>
			<div id="c">
			<div id="a">
			<p style="color:blue">Admin</p><hr>
			<br>
				<p1 id="d">Name<br><br></p1>
				<span>
				<input type="text" name="nam" id="d"></span><br>
				<span id="re"></span><br><br>
				
				<p1 id="d"> Password<br><br></p1>
				<span>
				<input type="password" name="pass" id="d"></span><br>
				<span id="re1"></span><br><br>
				<input type="submit" name="submit" value="Sign In" id="d" style="color:red" >
				<br><br>
			</div>
			</div>
			</div>
		</form>
</body>
</html>