<!DOCTYPE html>
<html>
<head>
	<title>sign up</title>
</head>
<body>
	<form>
	username:<input type="text" name="t">
	pswd:<input type="password" name="p">
	<input type="submit" name="b" value="submit">
	
</form>

</body>
</html>


<?php
echo"hi";

	$u=$_REQUEST['t'];
	$p=$_REQUEST['p'];
echo $u.$p;
$conn=mysqli_connect('localhost','root','');
$connection=mysqli_select_db($conn,"demo");

if($conn->connect_error)
{
	die("Connection failed: " . $conn->connect_error);

}
else
{
	echo"sucessful";

$q2="insert into login (name,pswd) values('".$u."','".$p."');";
echo $q2;
$q2e=mysqli_query($conn,$q2);

$n=mysqli_num_rows($q2e);
echo $n;
if($n!=0)
{
	echo"sucessfully inserted";

}
}


?>