<?php 

 $conn = mysqli_connect("localhost", "root", "", "register");
 
 if($conn->connect_error) {
	 die("Connection Field".$conn->connect_error);
 }
 
 $email = $_REQUEST['email1'];
 $password = $_REQUEST['psw1'];
 $c_password = $_REQUEST['psw1_repeat'];
 
 
  $sql = "INSERT INTO regis VALUES ('$email','$password','$c_password')";
 
 
  if(mysqli_query($conn,$sql)){
	  echo '<h3>Record Inserted</h3>';
  } else {
	  echo "Not Inserted";
  }
  
  
  mysqli_close($conn);

?>