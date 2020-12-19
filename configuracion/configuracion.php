<?php session_start()?>
<?php include '../php/cn.php'?>
<?php
$session = $_SESSION['email'];
if ($session == null || $session = '') {
  header("location:../index.php");
  die();
}
?>
<?php
if(isset($_SESSION['id'])){
    $id=$_SESSION['id'];
    $sql="SELECT * FROM login_user WHERE id=$id";
    $consulta= mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($consulta) == 1) {
    $row = mysqli_fetch_array($consulta);
    $name = $row['name'];
    $lastname = $row['lastname'];
    $email = $row['email'];
    $telefono = $row['telefono'];
    $password = $row['password'];
    $foto = $row['foto'];
  }

  if (isset($_POST['actualizar'])) {
      # code...
      $id=$_SESSION['id'];
      $name=$_POST['name'];
      $lastname=$_POST['lastname'];
      $email=$_POST['email'];
      $telefono=$_POST['telefono'];
      $password=$_POST['password'];
      $nombre_file=$_FILES['video_file']['name'];

      $query = "UPDATE login_user set name = '$name', lastname = '$lastname', email='$email', telefono='$telefono' ,password='$password', foto='$nombre_file' WHERE id=$id";
      $consulta= mysqli_query($conn, $query);
      if (!$consulta) {
          echo "ERROR";
      }else{
        $_SESSION['user_incorrect'] = 'Sus datos estan han sido actualizados..';
        $_SESSION['type_error_user_incorrect'] = 'success';
        header("Location:../index.php");
      }

  }
}
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configuraciones <?php echo $_SESSION['name']?></title>
    <meta name="theme-color" content="#032b43">
    <link rel="shortcut icon" href="../foto/<?php echo $_SESSION['foto']?>" type="image/x-icon">
    <?php include '../includes/css.php';?>
    <link rel="stylesheet" href="css/configuracion.css">
</head>

<body>

    <form class="contendor" action="configuracion.php?id=<?php echo $_SESSION['id'];?>" method="POST"
        enctype="multipart/form-data">
        <img src="../foto/<?php echo $_SESSION['foto']?>" class="foto" alt="">
        <h1>Actualiza tus datos</h1>
        <h6>Tipo de usuario: Normal</h6>
        <input name="name" class="form-control input100" type="text" value="<?php echo $_SESSION['name'];?>">
        <input name="lastname" class="form-control input100" type="text" value="<?php echo $_SESSION['lastname'];?>">
        <input name="email" class="form-control input100" type="email" value="<?php echo $_SESSION['email'];?>">
        <input name="telefono" class="form-control input100" type="number" value="<?php echo $telefono?>">
        <input name="password" class="form-control input100" type="password"
            value="<?php echo $_SESSION['password'];?>">
        <input type="file" class="file" name="video_file" id="">
        <input class="btn input10" name="actualizar" type="submit" value="Actualizar">
    </form>

    <?php 
//extraer el nombre del video

$nombre_file=$_FILES['video_file']['name'];
$guardado=$_FILES['video_file']['tmp_name'];


if (!file_exists('foto')) {
    # code...
    mkdir('../foto',0777,true);
    if (file_exists('../foto')) {
        # code...
        if (move_uploaded_file($guardado, '../foto/'.$nombre_file)) {
            # code...
            echo 'save file';

        }else{
            echo '';
        }
    }
}else{
    if (move_uploaded_file($guardado, '../foto/'.$nombre_file)) {
        # code...
        echo 'save file';

    }else{
        echo '';
    }

}

?>


    <?php include '../includes/js.php';?>
</body>

</html>