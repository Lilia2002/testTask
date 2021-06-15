	<?php
	require_once("db.php");
		if(isset($_GET['id']))
	 {
	   if($connection == false){
		echo "Error!";
		echo mysqli_connect_errno();
		exit();
	   }
	
	   $id = mysqli_real_escape_string($connection, $_GET['id']);
	   
	   //запрос на удаление записи по id
	   $query ="DELETE FROM users WHERE id = '$id'";
	 
	   $result = mysqli_query($connection, $query) or die("Ошибка " . mysqli_error($connection)); 
	   mysqli_close($connection);
	   echo 'Запись успешно удалена';
	   
	}
	 else echo "id не установлено";
	?>
	

