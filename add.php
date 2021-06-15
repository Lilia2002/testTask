<?php 
	require_once("db.php");
	error_reporting(0);
	if($connection == false){
		echo "Error!";
		echo mysqli_connect_errno();
		exit();
	}
	?>

<link rel="stylesheet" type="text/css" href="style.css">
  
<div>
  <center>
       <h2>Добавление аккаунта</h2>
       <!-- форма для заполнения данных -->
       <form action="" name="users" method="post"> 
            <p><label><span style='color:red;'>* First name:</span></label><br>
            <textarea type="text" class="text" name="fname" value="" size="90"></textarea></p>
			<p><label><span style='color:red;'>* Last name:</span></label><br>
            <textarea type="text" class="text" name="lname" value="" size="90"></textarea></p>
            <p><label><span style='color:red;'>* Email:</span></label><br>
            <textarea type="text" class="text" name="email" value="" size="90"></textarea></p>
            <p><label>Company name:</label><br>
            <textarea type="text" class="text" name="cname" value="" size="90"></textarea></p>
            <p><label>Position:</label><br>
	        <textarea type="text" class="text" name="position" value="" size="90"></textarea></p>
			<p><label>Number1:</label><br>
	        <textarea type="text" class="text" name="number1" value="" size="90"></textarea></p>
			<p><label>Number2:</label><br>
	        <textarea type="text" class="text" name="number2" value="" size="90"></textarea></p>
			<p><label>Number3:</label><br>
	        <textarea type="text" class="text" name="number3" value="" size="90"></textarea></p>
            <button class="" type="submit">Сохранить</button>
       </form>
	
	<?php 
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $cname = $_POST['cname'];
	$position = $_POST['position'];
	$number1 = $_POST['number1'];
	$number2 = $_POST['number2'];
	$id = $id; 
	$number3 = $_POST['number3'];
	
    //проверка на заполнение обязательных полей
	if (!empty($fname) && !empty($lname) && !empty($email)) 
    {
		
	$mysql = new mysqli('localhost', 'root', '', 'test');
	
	//Запрос на добавление записи в бд
	$mysql->query("INSERT INTO `users` (`fname`, `lname`, `email`, 
	`cname`, `position`, `number1`, `number2`, `number3` VALUES ('$fname', '$lname', '$email', 
	'$cname', '$position', '$number1', '$number2', '$number3')");
	
    mysqli_close($connection);
	echo "<span style='color:green;'>Запись успешно добавлена!</span>";
	} else {
	echo "<span style='color:red;'>* Заполните обязательные поля</span>"; }
	?>
  </center>
</div>
        

