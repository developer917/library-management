
<!Doctype Html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="DetailsUB.css">
	<title>details</title>
</head>
<body>
	<form class="container-fluid justify-content-start">
    <button class="btn btn-outline-success me-2" type="button"><a  href="Details.php"><img src="back.jfif" height="35px" width="35px"></a></button>
  </form>

  <form class="container-fluid justify-content-start" id="d">
    <button class="btn btn-outline-success me-2" type="button"><a  href="HomePage.php"><img src="logo.jfif" height="35px" width="35px"></a></button>
  </form>
<center><h1>User Registration Details</h1></center><hr>
<br><br>
<form action="" method="POST" id="c">

	<table id="A">
		<tr>
			<th id="b"><b>User Name</b></th>
			<th id="b"><b>Email-id</b></th>
			<th id="b"><b>Password</b></th>
			
		</tr>
<?php 
$conn = mysqli_connect("localhost","parth","","library");
  if(!$conn){
    die("Connection filed");
  }


$query = "SELECT * FROM register";

$q = mysqli_query($conn,$query);


while ($result = mysqli_fetch_assoc($q)) {
	
	?>

		<tr>
			<td style="background-color:gray "><?php echo $result['name']; ?></td>
			<td style="background-color:silver "><?php echo $result['email']; ?></td>
			<td style="background-color:gray "><?php echo $result['password']; ?></td>


		</tr>
	<?php	
	}
?>
	</table>
	


</form>

</body>
</html>