
<?php
  include_once('database.php');
  $res = mysqli_query($conn,"SELECT * FROM form");

 
  while( $row = mysqli_fetch_array($res) )
                    echo "$row[id]. $row[name], $row[mobile] ,$row[email], $row[register] 
                <a href='edit.php?id=$row[id]'>edit</a>&nbsp<a href='delete.php?id=$row[id]'>delete<br />,";
                   
?>
