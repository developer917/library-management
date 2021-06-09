<?php 
$conn = mysqli_connect("localhost","parth","","library");
if(!$conn){
	die("Connection fail..");
}

$name = $_POST['nam'];
$email = $_POST['em'];
$msg = $_POST['ms'];

$query = "INSERT INTO contactus(Name,Email Address,Message) VALUES('$name','$email','$msg')";

if (mysqli_query($conn,$query)) {
	
	echo "success";
}
else
{
	echo "error";
}
?>