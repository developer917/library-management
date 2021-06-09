<?php

$conn = mysqli_connect("localhost","parth","","library");
if (!$conn) {
	echo "Connection Faild";
}
$i_date = $_POST['date'];
$u_id = $_POST['id'];
$b_name = $_POST['nam'];
$sql = "SELECT * FROM books where book_id='$u_id' and book_name='$b_name'";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result)>0) {
	

while ($row = mysqli_fetch_assoc($result)) {
	$db_id = $row['book_id'];
	$db_name = $row['book_name'];
}

if ($u_id == $db_id && $b_name == $db_name  ) {
	header("Location:issuemain.php");
	}
else{
	echo "Error";
}

}
else
echo "error";

$query = "INSERT INTO issuedbooks(book_id,book_name,issued_date) VALUES ('$u_id','$b_name','$i_date')";
if(mysqli_query($conn,$query)){
	session_start();
    }
    else{
    	echo "Smothing Wrong....";
    }
   

?>
