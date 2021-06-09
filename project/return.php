<?php 
$db_id=null;
$conn =mysqli_connect("localhost","parth","","library");
if(!$conn){
	die("Connection Failed..");
} 

$b_id  = $_POST['id'];
$b_name = $_POST['nam'];
$r_date = $_POST['date'];

$q = "SELECT * FROM books where book_id='$b_id' and book_name='$b_name'";
$result = mysqli_query($conn,$q);

while ($row=mysqli_fetch_assoc($result)) {
	$db_id= $row['book_id'];
	$db_book = $row['book_name'];
}

if ($b_id==$db_id and $b_name==$db_book) {
	
$query = "DELETE  FROM issuedbooks where book_id='$b_id'";
if (mysqli_query($conn,$query)) {
	
	header("Location:Returnmain.php");

}
	else{
		echo "error";
	}
}

$sql = "INSERT INTO returnbooks (book_id,book_name, return_date) VALUES ($b_id,'$b_name','$r_date')";

if ($conn->query($sql) === TRUE) {
  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


 ?>