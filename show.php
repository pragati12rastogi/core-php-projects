<?php
session_start();
$conn=mysqli_connect('localhost','root','','practice');
$sql="SELECT * FROM `form`";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
	echo '<table>';
    while($row = mysqli_fetch_assoc($result)) {
	   ?>
	   <tr>
	   <td><?php echo $row['name'];?></td>
	    <td><?php echo $row['last'];?></td>
		 <td><?php echo $row['pass'];?></td>
	   </tr>
	   
	   
	   <?php
	   
    }
	echo'</table>';
} else {
	
    echo "0 results";
}

?>
<a href="mylog.php">LOGOUT</a>