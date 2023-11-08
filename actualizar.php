<?php
  include 'db/conexion.php';
  $id=$_GET['updateid'];
  $sql="select * from `crud` where id=$id";
  $resultado_db=mysqli_query($conexion,$sql);
  $fila_db=mysqli_fetch_assoc($resultado_db);
  $nombre=$fila_db['nombre'];
  $correo=$fila_db['correo'];
  $celular=$fila_db['celular'];
  $contraseña=$fila_db['contraseña'];

  if(isset($_POST['submit'])){
    $nombre=$_POST['name'];
    $correo=$_POST['email'];
    $celular=$_POST['cel'];
    $contraseña=$_POST['password'];
    $sql="update `crud` set id='$id',nombre='$nombre',correo='$correo',celular='$celular',contraseña='$contraseña'
    where id=$id";
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
    <h1>Actualizacion de datos</h1>
    <form  method="POST">
      <div class="formato">
        <label for="name">Nombre</label>
        <input type="text" name ="name"  value=<?php echo $nombre?> required />
        <label for="email">Correo</label>
        <input type="email" name ="email"  value=<?php echo $correo?> required />
        <label for="cel">Celular</label>
        <input type="text" name ="cel"  value=<?php echo $celular?> required />
        <label for="password">Contraseña</label>
        <input type="text" name ="password"  value=<?php echo $contraseña?> required />
        <button type="submit" name="submit">Actualizar</button>
      </div>
    </form>
  </section>
</body>
</html>