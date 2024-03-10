<?php 
include './connect.php';

$sql=mysqli_query($conn,"SELECT * from user");

 ?>
 <ul>
 	<?php while($result=mysqli_fetch_assoc($sql)): ?>
 	<li>
 		<h4>Username:<?php echo $result['name'] ?></h4>
 		<h4>Password:<?php echo $result['password'] ?></h4>
 	</li>
 <?php endwhile; ?>
 </ul>