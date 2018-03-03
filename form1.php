<?php
include 'database.php';
if (isset($_POST['submit'])){	 
$x=$_POST['name'];
$y=$_POST['mobile'];
$z=$_POST['email'];
$w=$_POST['register'];
$query=("insert into form (name,mobile,email,register) values('$x','$y','$z','$w')");
$row=mysqli_query($conn,$query);
echo "sucess";
header("Location: editform.php");
}
else
{
echo "fail";	
}
mysqli_close($conn);
 

?>