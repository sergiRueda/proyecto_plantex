<?php
include_once("Conectar.php");

$id=$_GET['id'];
//$cone= mysqli_connect("localhost","root","","universidad");
$sql="DELETE FROM plantillas  WHERE id='$id'";
$query=mysqli_query($micon->conexion,$sql);
if($query)
    {
        header("Location:crudproductos.php");
    }
?>