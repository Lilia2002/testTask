	<?php
	require_once("db.php");
	if($connection == false){
		echo "Error!";
		echo mysqli_connect_errno();
		exit();
	}
	if (isset($_GET['page'])){
		$page = $_GET['page'];
	} else {
		$page = 1;
	}
	//по какому количеству выводить аккаунты на одной странице
	$limit = 10;
	$number = ($page * $limit) - $limit;
	$res_count = mysqli_query($connection, "SELECT COUNT(*) FROM `users` ");
	$row = mysqli_fetch_row($res_count);
	$total = $row[0];
	$str_pag = ceil($total / $limit);
	$query = mysqli_query($connection, "SELECT * FROM users LIMIT $number, $limit ");
	?>

	<link rel="stylesheet" type="text/css" href="style.css">
	  
	<div>
	<center>

	<?php 
	//выводим нумерацию всех страниц по 10 аккаунтов в каждой
	for ($i = 1; $i <=$str_pag; $i++){
		echo " <a href=index.php?page=".$i.">".$i."</a> ";
	}
	//если нет аккаунтов, то выводим сообщение об этом
	if(mysqli_num_rows($query) == 0){
		echo "There are no records!";
	}	else { ?><br><br>
	<p><a href="add.php">Добавить аккаунт</a></p>
	<!-- таблица с аккаунтами -->
	<table border="1">
				<tr>
				  <th>id</th>
				  <th>First name</th>
				  <th>Last name</th>
				  <th>Email</th>
				  <th>Company name</th>
				  <th>Position</th>
				  <th>Phone numbers</th>
				</tr>

	<?php while($users = mysqli_fetch_assoc($query)){ ?>
	  
	  <tr>
		<td><?php echo $users['id'];?> </td>
		<td><?php echo $users['fname'];?> </td>
		<td><?php echo $users['lname'];?> </td>
		<td><?php echo $users['email'];?> </td>
		<td><?php echo $users['cname'];?> </td>
		<td><?php echo $users['position'];?> </td>
		<td><?php echo $users['number1'].'<br>';?> 
		<?php echo $users['number2'].'<br>';?> 
		<?php echo $users['number3'].'<br>';?> </td>
		<td><p><a href="edit.php?id=<?= $users["id"]?>" class="">Изменить</a></p>
			<p><a href="delete.php?id=<?= $users["id"]?>" class="">Удалить</a></p></td>
			
	  </tr>
		<?php 
	} 
	  }
		?>
		</center>
		</div>
	</table>

