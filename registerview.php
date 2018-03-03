<html>
<body>
<form action="" method=POST>
<input type="text" name="register" placeholder="Enter the register number"/>
<input type="submit" name="sub" value="submit"/>
</form>
</body>
</html>
<?php
if(isset($_POST['sub']))
{
  $w=$_POST['register'];
 require_once 'database.php';
 $query_ret="select * from  form where register='$w'";
 $result=mysqli_query($conn,$query_ret);
 if(mysqli_num_rows($result)>0){?>
 	<table>
	 	<tr>

<th>id</th>
	 	<th>name</th>
	 	<th>mobile</th>
	 	<th>email</th>
	 	<th>register</th>
	 	</tr>
	 	
<?php
	 while($row=mysqli_fetch_array($result))
	 {?>
	 		<tr> 

        <td>    <?php echo $row ['id'];?>"</td>
	 	<td>    <?php echo $row ['name'];?></td>
		<td>    <?php echo $row ['mobile']; ?></td>
		  <td>  <?php echo $row ['email'];?></td>
		  <td>  <?php echo $row ['register']; ?></td>
		</tr><br>
		


 	<style>
	table, th, td ,tr{
    border: 1px solid black;
  
}
	</style>
<?php
	 }
 }
	 else{
		 echo "no records found";
	 }
	

 
?>
</table>
 <a href="editform.php"> Edit</a>
<?php
}
?>