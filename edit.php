<?php 
	require_once("db.php");
	error_reporting(0);
	if(isset($_GET['id']))
	{ 
	  if($connection == false){
		echo "Error!";
		echo mysqli_connect_errno();
		exit();
	}
	
	$id = mysqli_real_escape_string($connection, $_GET['id']);
	
	//запрос, чтобы вывести данные из бд	
	$query ="SELECT id, fname, lname, email, cname, position, number1, number2, number3  FROM users WHERE id = '$id'";
	   
	$result = mysqli_query($connection, $query) or die("Ошибка " . mysqli_error($connection)); 
	   $users = $result->fetch_assoc();
	   mysqli_close($connection);
	} else echo "id не установлено";

	  ?>

<link rel="stylesheet" type="text/css" href="style.css">
  
<div>
  <center>
       <h2>Редактирование</h2>
       <!-- Форма в которую выводятся данные по id с возможностью редактирования -->
       <form action="" name="users" method="post"> 
            <p><label><span style='color:red;'>* First name:</span></label><br>
            <textarea type="text" class="text" name="fname" value="" size="90"><?php echo $users["fname"];?></textarea></p>
			<p><label><span style='color:red;'>* Last name:</span></label><br>
            <textarea type="text" class="text" name="lname" value="" size="90"><?php echo $users["lname"];?></textarea></p>
            <p><label><span style='color:red;'>* Email:</span></label><br>
            <textarea type="text" class="text" name="email" value="" size="90"><?php echo $users["email"];?></textarea></p>
            <p><label>Company name:</label><br>
            <textarea type="text" class="text" name="cname" value="" size="90"><?php echo $users["cname"];?></textarea></p>
            <p><label>Position:</label><br>
	        <textarea type="text" class="text" name="position" value="" size="90"><?php echo $users["position"];?></textarea></p>
			<p><label>Number1:</label><br>
	        <textarea type="text" class="text" name="number1" value="" size="90"><?php echo $users["number1"];?></textarea></p>
			<p><label>Number2:</label><br>
	        <textarea type="text" class="text" name="number2" value="" size="90"><?php echo $users["number2"];?></textarea></p>
			<p><label>Number3:</label><br>
	        <textarea type="text" class="text" name="number3" value="" size="90"><?php echo $users["number3"];?></textarea></p>
            <button class="" type="submit">Сохранить</button>
       </form>
	
	<?php 
	
	
	$id=(int) $_GET["id"];   
	$fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $cname = $_POST['cname'];
	$position = $_POST['position'];
	$number1 = $_POST['number1'];
	$number2 = $_POST['number2'];
	$number3 = $_POST['number3'];
    $id = $id; 
	
    //проверка на заполнение обязательных полей
	if (!empty($fname) && !empty($lname) && !empty($email)) 
    {
		
	$mysql = new mysqli('localhost', 'root', '', 'test');
	
	//запрос на изменение данных в бд
	$mysql->query("UPDATE `users` SET `fname` = '$fname', `lname` = '$lname', `email` = '$email', 
	`cname` = '$cname', `position` ='$position', `number1` ='$number1', `number2` ='$number2', 
	`number3` ='$number3' WHERE `id` = '$id'");
	
    mysqli_close($connection);
	echo "<span style='color:green;'>Запись отредактирована</span>";
	} else echo "<span style='color:red;'>* Заполните обязательные поля</span>"; 
	?>
  </center>
</div>
  
	
