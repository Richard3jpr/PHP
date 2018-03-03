<?php

include 'admindb.php';
if(isset($_POST['sub']))
{

session_start();
  if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $uname = mysqli_real_escape_string($conn,$_POST['uname']);
      $upassword = mysqli_real_escape_string($conn,$_POST['upassword']); 
      
      $sql = "SELECT id FROM admin WHERE username = '$uname' and password = '$upassword'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
     
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
       


         echo "welcome";  
         header("Location: form.php");
         session_destroy();
     
      }else {
         $error = "Your Login Name or Password is invalid";
         echo "$error";
      }

   }}
  

?>