<?php session_start ();?>
<?php include '../php/cn.php'?>
<?php $_SESSION['logo']='https://i.ibb.co/RBwxqtw/LG1.png';?>
<?php
$session = $_SESSION['email'];
if ($session == null || $session = '') {
  header("location:../index.php");
  die();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="theme-color" content="black">
    <title>Panel de administración</title>
    <link rel="shortcut icon" href="<?php echo $_SESSION['logo']?>" type="image/x-icon">
    <?php include '../includes/css.php' ?>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/home.css">
</head>

<body>

    <?php include 'includes/header.php'?>

    <?php if(isset($_SESSION['tipe_message'])){?>
    <div class="alert alert-<?= $_SESSION['tipe_message_type'] ?> alert-dismissible fade show" role="alert">
        <strong>Genial!</strong> <?= $_SESSION['tipe_message'] ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <?php } ?>

    <section class="contenedor">
        <h1 class="info1">Bienvenido: <span class="name_user"><?php echo $_SESSION['name']?>
                <?php echo $_SESSION['lastname']?> </span></h1>
        <h2 class="info2">Email: <?php echo $_SESSION['email']?></h2>
        <h3 class="info3">Tipo de usurio: Administrador <span
                class="user_tipe"><?php echo $_SESSION['tipe_user']?></span> </h3>
    </section>

    <table>
        <tr>
            <td class="tabla_cabe action">Foto</td>
            <td class="tabla_cabe action">Nombre</td>
            <td class="tabla_cabe action">Apellido</td>
            <td class="tabla_cabe action">Correo</td>
            <td class="tabla_cabe action">Teléfono</td>
            <td class="tabla_cabe action">Contraseña</td>
            <td class="tabla_cabe action">Tipo de usuario</td>
            <td class="tabla_cabe action">Acción</td>
        </tr>
        <?php
$sql="SELECT * FROM login_user ";
$consult= mysqli_query($conn, $sql);

while ($row=mysqli_fetch_array($consult)) {?>

        <tr>
            <td class="fototabla"><a href="pefil.php?=<?php echo $row['id']?>"><img class="foto_perfil"
                        src="../foto/<?php echo $row['foto']?>" width="40" height="40" alt="foto"></a>
            </td>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['lastname']?></td>
            <td><a href="mailto:<?php echo $row['email']?>"><?php echo $row['email']?></a></td>
            <td><a href="https://api.whatsapp.com/send?phone=593<?php echo $row['telefono']?>&text=Sr.a%20<?php echo $row['lastname']?> <?php echo $row['name'] ?>%20..&&fbclid=IwAR3GVG7aG--f9sQtIVjSQBEKjxyHEIt9yROLR0s00nZVN7m1UXKp-Wut_1k" target=”_blank”><?php echo $row['telefono']?></a></td>
            <td><?php echo $row['password']?></td>
            <td><?php if($row['tipe_user'] == 0){
                     echo "admin";
                 }else{
                     echo"normal user";
                 }?>
            </td>
            <td class="action">
                <a href="php/edit.php?id=<?php echo $row['id']?>"><span class="btn btn-primary fa fa-pen"></span></a>
                <a href="php/delete.php?id=<?php echo $row['id']?>"><span class="btn btn-danger fa fa-trash"></span></a>
            </td>
        </tr>

        <?php }?>
    </table>
    <?php include '../includes/js.php' ?>
</body>

</html>