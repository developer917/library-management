<!DOCTYPE html>
<html>
<head>
	<title>Return Book</title>
	<style>
		#a{
			margin-left: 40%;
			margin-top: 100px;
			margin-right: 40%;
		}
		#f{
			color: blue;
			font-size: 20px;
		}
		#b{
			color: red;
			font-size: 25px;
		}
		#c{
			background-image: url(issue.jfif);
			background-repeat: no-repeat;
			background-size: cover;
		}
	</style>
</head>

<body id="c">
	<form class="container-fluid justify-content-start">
    <button class="btn btn-outline-success me-2" type="button"><a  href="HomePage.php"><img src="back.jfif" height="35px" width="35px"></a></button>
  </form><br><br>
<form method="POST" action="return.php">
	
<div id="a">
	<fieldset>
 			<legend id="b"><b>Return Books</b></legend><br>
	<lable id="f">Enter Book Id </lable><br><br>
	<input type="text" name="id">
	<br><br>
	<lable id="f">Enter Book name</lable><br><br>
	<input type="text" name="nam">
	<br><br>
	<lable id="f">return Date</lable><br><br>
	<input type="date" name="date">
	<br><br>
	<input type="submit" name="btn" value="return" style="background-color: yellow">
</fieldset>
</div>

</form>

</body>
</html>