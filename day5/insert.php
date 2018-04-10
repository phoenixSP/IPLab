<html>

<body>

 

 

<?php
$dbhost = 'localhost/day5';
$dbuser = 'guest';
$dbpass = 'guest123';

$con = mysql_connect($dbhost,$dbuser,$dbpass);

if (!$con)

  {

  die('Could not connect: ' . mysql_error());

  }

 

mysql_select_db("cis_id", $con);

 

$sql="INSERT INTO Reg (firstname, fathername,paddr,praddr,pin,sex,qual,mobile,mail)

VALUES

('$_POST[firstname]','$_POST[fathername]','$_POST[paddr]','$_POST[praddr]','$_POST[pin]','$_POST[sex]','$_POST[qual]','$_POST[mobile]','$_POST[mail]')";

 

if (!mysql_query($sql,$con))

  {

  die('Error: ' . mysql_error());

  }

echo "1 record added";

 

mysql_close($con)

?>

</body>

</html>