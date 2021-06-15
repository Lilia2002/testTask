	<?php
	require_once("db.php");
	if($connection == false){
		echo "Error!";
		echo mysqli_connect_errno();
		exit();
	}
	$page = $_GET['id'];
	echo $page;
	$query = mysqli_query($connection, "SELECT * FROM users WHERE id='$page' ");
	?>

	<?php 
	$users = mysqli_fetch_assoc($query);
		echo $users['id'].'<br>';
		echo $users['fname'].'<br>';
		echo $users['lname'].'<br>';
		echo $users['email'].'<br>';
		echo $users['cname'].'<br>';
		echo $users['position'].'<br>';
		echo $users['number1'].'<br>';
		echo $users['number2'].'<br>';
		echo $users['number3'].'<br>';
	?>


