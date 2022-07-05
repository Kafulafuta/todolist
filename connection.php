<?php
$host="localhost";
$user="root";
$pass="";
$db="todolist";
$conn=mysqli_connect("localhost","root","","todolist");
if($conn)
{
	echo "connection laka";
}
else
{
	echo "connection not laka";
}




?>