<?php
include_once("Conectar.php");


$id=$_POST['id'];
$plantilla	=$_POST['plantilla'];
$precio=$_POST['precio'];
$clase=$_POST['clase'];

$sql="INSERT INTO plantillas VALUES('$id','$plantilla','$precio','$clase')";
$query=mysqli_query($micon->conexion,$sql);

if($query)
{
    header("Location:crudproductos.php");
 }
else 
{
    //
}
?>