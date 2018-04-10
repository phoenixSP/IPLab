<!DOCTYPE html>
<html>
<head>
	<title>Database</title>
	<?php
	$name = $_POST['name'];
	$f_name = $_POST['f_name'];
	$l_add = $_POST['l_add_text_val'];
	$p_add = $_POST['p_add_text_val'];
	$mob = $_POST['mobile_number'];
	$email = $_POST['email'];
	$flag = $_POST['flag'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$cnfpass = $_POST['cnfpass'];
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "@Naman1997";
	$dbname = "assignment";
	if($password!=$cnfpass){
		die("Password not matched");
	}
	$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
	if(mysqli_connect_errno()){
		die("connection unsuccessful");
	}
	elseif($flag!="1"){
		$query = "INSERT INTO studentlogin(name,f_name,l_add,p_add,mob,email,username,password) values('{$name}','{$f_name}','{$l_add}','{$p_add}','{$mob}','{$email}','{$username}','{$password}');";
		$result = mysqli_query($conn,$query);
		if($result){
			echo "Submitted to database!";
		}
		else{
			echo "unsuccessful conn to database, email already in use!";
		}
	}
	else{
		$query = "SELECT * FROM student where email='{$email}'";
		$result = mysqli_query($conn,$query);
		$row = mysqli_fetch_row($result);
		echo '<pre>'; print_r($row); echo '</pre>';

		var_dump($row);
	}

	?>
</head>
<body>

</body>
</html>