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
    $row = mysqli_fetch_array($result);
    $name = $row['name'];
    $lastname = $row['lastname'];
    $email = $row['email'];
    $password = $row['password'];
    $foto = $row['foto'];
  }

  if (isset($_POST['actualizar'])) {
      # code...
      $id=$_SESSION['id'];
      $name=$_POST['name'];
      $lastname=$_POST['lastname'];
      $email=$_POST['email'];
      $password=$_POST['password'];
      $foto=$_POST['foto'];


      $query = "UPDATE login_user set name = '$name', lastname = '$lastname', email='$email', password='$password', foto='$foto' WHERE id=$id";
      mysqli_query($conn, $query);
      $_SESSION['actualizeuser'] = 'Sus datos estan siendo actualizados..';
      $_SESSION['actualizeuser_type'] = 'success';
      header("Location:../");


  }
}
?>


<!DOCTYPE html>
<html lang="en">

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
        <input name="password" class="form-control input100" type="password"
            value="<?php echo $_SESSION['password'];?>">
        <input name="foto" class="form-control input100" type="text" value="<?php echo $_SESSION['foto'];?>">
        <input type="file" class="file" name="video_file" id="">
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong >Copia el nombre de la imgen y pegala en PERFIL.PNG </strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <input class="btn input10" name="actualizar" type="submit" value="Actualizar">
    </form>

    <?php 
//extraer el nombre del video

$nombre_file=$_FILES['video_file']['name'];
$guardado=$_FILES['video_file']['tmp_name'];
$nombre_foto = $nombre_file;


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