<?php
  include 'db/conexion.php';
  if(isset($_POST['submit'])){
    $nombre=$_POST['name'];
    $correo=$_POST['email'];
    $celular=$_POST['cel'];
    $contraseña=$_POST['password'];
    $sql="insert into `crud` (nombre,correo,celular,contraseña)
    values('$nombre','$correo','$celular','$contraseña')";
    $resultado= mysqli_query($conexion,$sql);
    if ($resultado) {
      //echo "Datos agregados correctamente";
      header('location:tabla_usuarios.php');
  }else{
    die(mysqli_error($conexion));
  }
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/style.css">
  <title>crud</title>
</head>
<body>
  <form  method="POST">
      <div class="numeros">
        <label for="name">Nombre</label>
        <input type="text" name ="name" id="name" placeholder="Ingrese su Nombre" required />
        <label for="email">Correo</label>
        <input type="email" name ="email" id="email" placeholder="Ingrese su Correo" required />
        <label for="cel">Celular</label>
        <input type="text" name ="cel" id="cel" placeholder="Ingrese su numero celular" required />
        <label for="password">Contraseña</label>
        <input type="text" name ="password" id="password" placeholder="Ingrese su contraseña" required />
      </div>
        <button type="submit" name="submit">Enviar</button>
    </form>
</body>
</html>