 <?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ciassign";


$conn = mysqli_connect($servername,$username,$password,$dbname);


if($conn)
{
		// echo "connection successfully ";
}else
{
		die("Connection Failed because".mysqli_connect_error());
}
?>