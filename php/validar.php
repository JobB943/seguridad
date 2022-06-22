<?php 
$email = $_POST['email'];
$psw = $_POST['psw'];

include 'conexion.php';

$consulta = mysqli_query($cone, "SELECT * FROM usuarios WHERE email = '$email' AND psw = '$psw';");

if ($row = mysqli_fetch_array($consulta)) {
	session_start();
	$_SESSION['id'] = $row['id'];
}
 ?>
 <?php
 $email = $_POST['email'];
 $psw = $_POST['psw'];
 
 include 'conexion.php';
 
 $consulta = mysqli_query($cone, "SELECT * FROM usuarios WHERE email = '$email' AND psw = '$psw';");
 $filas=mysqli_fetch_array($consulta);
 if($filas['rol_id']==1){
	 session_start();
		$_SESSION['id'] = $row['id'];
	 header("location: indexlogin.php");
 }
 if($filas['rol_id']==2){
	 session_start();
	$_SESSION['id'] = $row['id'];
	header("location: ../home/home.php");
}
 
 ?>