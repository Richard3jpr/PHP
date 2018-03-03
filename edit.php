
<?php
  include ('database.php');
 
  if( isset($_GET['id']) )
  {
    $update = $_GET['id'];
    $res= mysqli_query($conn,"SELECT * FROM form WHERE id='$update'");
    $row= mysqli_fetch_array($res);
  }
 
  if( isset ($_POST['update']))
  {
        $formupdate = $_POST['formupdate'];
         $name = $_POST['name'];
         $mobile= $_POST['mobile'];
          $email= $_POST['email'];
           $register= $_POST['register'];
$sql= "UPDATE form SET name='$name', mobile='$mobile',email='$email',register='$register'WHERE id='$formupdate'";
    $res= mysqli_query($conn,$sql)  or die("Could not update".mysqli_error($conn));
    echo "<meta http-equiv='refresh' content='0;url=editform.php'>";
  }
  
?>
<form action="" method="POST">
  <input type="hidden" name="formupdate" value="<?php echo $row['id'];?>"/>
Name: <input type="text" name="name" id="name" value="<?php echo $row['name'];?>"/><br />

mobile: <input type="num" name="mobile" id="mobile" value="<?php echo $row['mobile'];?>"/><br />

email: <input type="email" name="email" id="email" value="<?php echo $row['email'];?>"/><br />

register: <input type="text" name="register" id="register" value="<?php echo $row['register'];?>"/><br />

<input type="submit" value=" update"  name="update"/>
</form>