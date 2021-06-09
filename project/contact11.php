<?php
$servername = "localhost";
$username = "parth";
$password = "";
$dbname = "library";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
    $name =$_POST['nam'];
	$email = $_POST['em'];
	$address = $_POST['ms'];

$sql = "INSERT INTO contactus (Name,Email_Address, Message) VALUES ('$name','$email','$address')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>