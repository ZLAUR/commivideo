<?php include '../../php/cn.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql="SELECT * FROM login_user WHERE id = $id";
    $consult = mysqli_query($conn, $sql);
    if (mysqli_num_rows($consult) == 1) {
        $row = mysqli_fetch_array($consult);
        $idu = $row['id'];
        $nombre = $row['name'];
        $apellido = $row['lastname'];
        $correo = $row['email'];
        $contrasena = $row['password'];
        $foto = $row['foto'];
        $tipodeusuario = $row['tipe_user'];
        $fechadecreacion = $row['date_user_created'];
    }
}
 

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="rebeccapurple">
    <title>Editar perfil como administrador</title>
    <link rel="stylesheet" href="../css/edit_perfil.css">
</head>

<body>
    <div class="contendor1">
        <section class="perfil">
        </section>
        <img class="perfil2" src="../../foto/<?php echo $foto?>" width="100" alt="">
        <h1><?php echo $nombre . $apellido?></h1>
    </div>
    
    <div class="form">
        <form action="edit.php?=<?php echo $row['id']?>" method="POST">
            <input name="nombre" type="text" value="<?php echo $nombre?>">
            <input name="apellido" type="text" value="<?php echo $apellido?>">
            <input name="correo" type="email" value="<?php echo $correo?>">
            <input name="contrasena" type="password" value="<?php echo $contrasena?>">
            <input name="foto" type="text" value="<?php echo $foto?>">
            <input name="tipo_de_usuario" type="text" value="<?php echo $tipodeusuario?>">
            <input name="fecha" type="text" value="<?php echo $fechadecreacion?>">
            <input name="actualisar" type="submit" class="btn btn-success" value="Actualizar">
        </form>
    </div>

</body>

</html>