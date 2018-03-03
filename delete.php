
<?php
  include ('database.php');
        $formupdate = $_GET['id'];
$sql= " delete from form WHERE id='$formupdate'";
    $res= mysqli_query($conn,$sql)  or die("Could not update".mysqli_error($conn));
    echo "<meta http-equiv='refresh' content='0;url=editform.php'>";
 
?>
