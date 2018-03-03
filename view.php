


<?php
 require_once "database.php";
 $query_ret="select *from  form";
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

           <td>  <?php echo $row ['id'];?></td>
	 	<td>  <?php echo $row ['name'];?></td>
		<td><?php echo $row ['mobile']; ?></td>
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
