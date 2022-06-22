<?php

include("../php/conexion.php");

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $eliminar="DELETE FROM usuarios WHERE id='$id'";
    $respuesta=mysqli_query($cone,$eliminar);
    if($respuesta){
        header("location: home.php");
    }else{
        header("location: home.php");
        echo "error eliminado";
    }
}


?>