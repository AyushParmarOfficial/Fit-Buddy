<?php
$servername = "localhost";
$username= "root";
$password= "";
$dbname= "ayush";
$cn=mysqli_connect($servername,$username,$password,$dbname);
if($cn)
{
	// echo "connection is done...." ;
}
else
{
	echo "connection failed......." ;
}
?>
