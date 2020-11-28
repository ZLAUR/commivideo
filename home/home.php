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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#032b43">
    <title>home</title>
    <link rel="shortcut icon" href="<?php echo $_SESSION['logo'] ?>" type="image/x-icon">
    <?php include '../includes/css.php' ?>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/header.css">
</head>
<body>
<!--Heder cabesera-->
    <?php include 'includes/header.php'?>

    <video src="video/BC1.mp4" autoplay loop></video>

<section class="contenedor">
    <h1 class="info1">Bienvenido: <span class="name_user"><?php echo $_SESSION['name']?> <?php echo $_SESSION['lastname']?> </span></h1>
    <h2 class="info2">Email: <?php echo $_SESSION['email']?></h2>
    <h3 class="info3" >Tipo de usurio: Normal</h3>
</section>

<!--DNC JS-->
    <?php include '../includes/js.php' ?>
</body>
</html>