<?php

$conn = mysqli_connect("localhost", "root", "1234", "fruits");
if (!$conn) 
{
	die("No hay conexion: ".mysqli_connect_error());
}

$nombre = $_POST["txtusuario"];
$pass = $_POST["txtpassword"];

$query = mysqli_query($conn,"SELECT * FROM login WHERE usuario = '".$nombre."' and password = '".$pass."'");
$nr = mysqli_num_rows($query);

if($nr == 1)
{
	header("Location: index.html");
}
else if ($nr == 0) 
{
	header("Location: login.html"); 
	echo "<script> alert('Error');window.location= 'login.html' </script>";
}

?>