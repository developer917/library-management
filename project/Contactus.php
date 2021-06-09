<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="Contactus.css">
	<title>Contact US</title>
</head>
<body >
<h1><center>Contuc Us</center></h1><hr>
<br><br>
<div id ="a">
<pre>Got a question?We'd love to hear from you.Send us <br>a message and we'll respond as soon as possible.</pre>
<form action="contact11.php" method="POST">
	<fieldset id="b">
		<legend>Contact US</legend>
		<br>
	<span style="color: blue;">Name</span><br><br>
	<input type="text" name="nam" style="width:350px; height:20px; background-color: grey;"><br><br>
	<span style="color: blue;">Email address</span><br><br>
	<input type="Email" name="em" style="width:350px; height:20px; background-color: grey; "><br><br>
	<span style="color: blue;">Message</span><br><br>
	<textarea name="ms" style="width:355px; height:80px; background-color: grey;">
	</textarea><br><br>
	<br>
	<input type="submit" name="btn" value="submit" style="width: 350px; height: 25px; background-color: cyan">
	</fieldset>
</form>
</div>

</body>
</html>