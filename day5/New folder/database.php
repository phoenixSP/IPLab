<!DOCTYPE html>
<html>
<head>
	<title>Database</title>
	<?php
	$uname=$_POST['uname'];
	$pass=$_POST['pass'];
	$name = $_POST['name'];
	//echo "<h1>Welcome{$name}</h1>"
	$f_name = $_POST['f_name'];
	$l_add = $_POST['l_add_text_val'];
	$p_add = $_POST['p_add_text_val'];
	$mob = $_POST['mobile_number'];
	$email = $_POST['email'];
	$flag = $_POST['flag'];
	$dbhost = "localhost";
	$dbuser = "root";
	$dbname = "test";

	$conn = mysqli_connect($dbhost,$dbuser,'',$dbname);
	if(mysqli_connect_errno()){
		die("connection unsuccessful");
	}
	elseif($flag!="1"){
		$query = "INSERT INTO student(uname,pass,name,f_name,l_add,p_add,mob,email) values('{$uname}','{$pass}','{$name}','{$f_name}','{$l_add}','{$p_add}','{$mob}','{$email}');";
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