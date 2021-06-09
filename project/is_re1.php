
<!Doctype Html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="DetailsUB.css">
	<title>details</title>
</head>
<body >
	<form class="container-fluid justify-content-start">
    <button class="btn btn-outline-success me-2" type="button"><a  href="Details.php"><img src="back.jfif" height="35px" width="35px"></a></button>
  </form>

  <form class="container-fluid justify-content-start" id="d">
    <button class="btn btn-outline-success me-2" type="button"><a  href="HomePage.php"><img src="logo.jfif" height="35px" width="35px"></a></button>
  </form>
<center><h1>Issued and Return Books Details</h1></center><hr>
<br><br>
<form action="" method="POST" id="c">
	<br><br>
<center><h2 id="z">Issued Books Details</h2></center>
	<table id="A">
		<tr>
			<th id="b"><b>Book Id</b></th>
			<th id="b"><b>Book Name</b></th>
			<th id="b"><b>return Date</b></th>
			
		</tr>
	
</table>
<br><br>
<center><h2>Return Books Details</h2></center>
<table id="A">
		<tr>
			<th id="b"><b>Book Id</b></th>
			<th id="b"><b>Book Name</b></th>
			<th id="b"><b>Issued Date</b></th>
			
		</tr>
	

<?php
$conn = mysqli_connect("localhost","parth","","library");
if (!$conn) {
	die("Connecation faild");
	}
	$query = "SELECT * FROM returnbooks";

	$q=mysqli_query($conn,$query);

	
	while ($result=mysqli_fetch_assoc($q)) {
		?>
		<tr id="e">
			<td style="background-color:gray "><?php echo $result['book_id']; ?></td>
			<td style="background-color:white "><?php echo $result['book_name']; ?></td>
			<td style="background-color:gray "><?php echo $result['return_date']; ?></td>

		</tr>
	<?php 
}

?>
</table>
</form>


</body>
</html>