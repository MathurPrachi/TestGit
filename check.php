<?php 
echo"hi";
$u=$_REQUEST['txt'];
$p=$_REQUEST['pswd'];
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
}
$q1="select * from login where name='".$u."' and pswd='".$p."';";
echo $q1;
$q1e=mysqli_query($conn,$q1);

$n=mysqli_num_rows($q1e);
echo $n;
if($n!=0)
{
	echo"<html>
	<body></br>
	welcome ".$u."
	</body>
	</html>";
}

else
{
	
	echo '
	<html>
	<body><br></br>
		no account create one 
		<a href="http://localhost/TestGit/create.php">create now </a>
		</body>
		</html>';
	

}

?>
