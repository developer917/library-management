<?php
  $conn = mysqli_connect("localhost","parth","","library");
  if(!$conn){
    die("Connection filed");
  }
  $U_name = $_POST['nam'];
  $U_email = $_POST['em'];
  $U_password = $_POST['pass'];
  $U_cpassword = $_POST['cpass'];

  $query= "INSERT INTO register(name,email,password,cpassword) values('$U_name','$U_email','$U_password','$U_cpassword')";

    if(mysqli_query($conn,$query)){
      session_start();
      header("location:Login page.php");
    }
    else{
      echo "Error:". mysql_error($conn);
    }


?>