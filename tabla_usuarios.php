<?php
include "db/conexion.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/style.css">
  <title>Tabla usuarios</title>
</head>
<body>
  <section id="main">
    <div id="barra">
      <h1>Usuarios Ejemplo</h1>
    </div>
      
        <table>

          <tbody class="fila_p">
            <thead>
              <tr>
                <th>cod</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>celular</th>
                <th>Contraseña</th>
                <th>Operacion</th>
              </tr>
    </thead>
    
    <?php
  $sql="select * from `crud`";
  $resultado=mysqli_query($conexion,$sql);
  if($resultado){
    while($fila=mysqli_fetch_assoc($resultado)){
      $id=$fila['id'];
      $nombre=$fila['nombre'];
      $correo=$fila['correo'];
      $celular=$fila['celular'];
      $contraseña=$fila['contraseña'];
      
      echo '  <tr class="fila_p">
      <th>'.$id.'</th>
      <td>'.$nombre.'</td>
      <td>'.$correo.'</td>
      <td>'.$celular.'</td>
      <td>'.$contraseña.'</td>
      <td>
    <button id="bttn1"><a href="actualizar.php?updateid='.$id.'">Actualizar</a></button>
    <button id="bttn2"><a href="borrar.php?deleteid='.$id.'">Borrar</a></button>
  </td>
      </tr>';
    }
  }
  ?>
  
</tbody>
</table>
<button id="bttn_add"> <a href="usuario.php">Agregar Usuario</a></button>
</section>
</body>
</html>