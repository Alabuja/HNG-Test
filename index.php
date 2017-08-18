<?php
session_start();
include("config/connect.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Hotels.ng Intership Program</title>
</head>
<body>
	<form action="main/index.php" method="post">
		<input type="text" name="name" required><br/><br>
		<input type="email" name="email" required><br><br>

		<button type="submit" name="submit_form">Submit</button>
	</form>


	<p><strong>Display's result</strong></p>
	<table>
		<tr>
			<th>S/N</th>
			<th>Name</th>
			<th>Email</th>
		</tr>
		<style type="text/css">
			th{ 
				text-align: center;
			}
		</style>
		<?php 
		    include("config/connect.php");
			$select = "SELECT * FROM users ORDER BY 1 DESC";
			$result = mysql_query($select);
			$i =0;

			while($row = mysql_fetch_array($result)){

				$user_id= $row['id'];
				$name= $row['name'];
				$email= $row['email'];
				$i++;
		?>
		<tr align="center">
			<td><?php echo $i; ?></td>
			<td><?php echo $name; ?></td>
			<td><?php echo $email; ?></td>
		</tr>
		<?php } ?>
		
	</table>

</body>
</html>