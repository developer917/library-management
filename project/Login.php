<?php
  $conn = mysqli_connect("localhost","parth","","library");
  if(!$conn){
    die("Connection filed");
  }
  $u_name= $_POST['nam'];
 $u_pwd= $_POST['pass'];
 $query = "INSERT INTO login(username,password) VALUES('$u_name','$u_pwd')";
 if(mysqli_query($conn,$query)){
      echo "Successfully";
    }
    else{
      echo "Error:". mysqli_coonect_error();

    }
  
$uname = $_POST['nam'];
$upwd = $_POST['pass'];

 $sql= "SELECT * FROM register WHERE  name='$uname' and password='$upwd'";
 $result = mysqli_query($conn,$sql);

 while ($row = mysqli_fetch_assoc($result)) {
   $dbname=$row['name'];
   $dbpwd=$row['password'];
 }
 if($upwd == $dbpwd){
  session_start();
  $_SESSION['uname'] = $name;
  header("Location:HomePage.php");
 }
 else{
  header("Location:Login page.php");
 }

    
 ?>