<?php
include 'db/conexion.php';
if(isset($_GET['deleteid'])){
  $id=$_GET['deleteid'];

  $sql="delete from `crud` where id=$id";
  $resultado=mysqli_query($conexion,$sql);
  if($resultado){
    header('location:tabla_usuarios.php');
  }else{
    die(mysqli_error($conexion));
  }
}
  

?>