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
  <section class="sec_form">
  <h1>Registro de usuarios</h1>
    <form  method="POST">
      <div class="formato">
        <label for="name">Nombre</label>
        <input type="text" name ="name"  placeholder="Ingrese su Nombre" required />
        <label for="email">Correo</label>
        <input type="email" name ="email"  placeholder="Ingrese su Correo" required />
        <label for="cel">Celular</label>
        <input type="text" name ="cel"  placeholder="Ingrese su numero celular" required />
        <label for="password">Contraseña</label>
        <input type="text" name ="password"  placeholder="Ingrese su contraseña" required />
        <button type="submit" name="submit">Enviar</button>
      </div>
    </form>
  </section>
  </body>
  </html>