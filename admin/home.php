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
    <meta name="theme-color" content="black">
    <title>Document</title>
    <link rel="shortcut icon" href="<?php echo $_SESSION['logo']?>" type="image/x-icon">
    <?php include '../includes/css.php' ?>
    <link rel="stylesheet" href="css/home.css">
</head>

<body>

    <?php include 'includes/header.php'?>

    <section class="contenedor">
        <h1 class="info1">Bienvenido: <span class="name_user"><?php echo $_SESSION['name']?>
                <?php echo $_SESSION['lastname']?> </span></h1>
        <h2 class="info2">Email: <?php echo $_SESSION['email']?></h2>
        <h3 class="info3">Tipo de usurio: Administrador <span
                class="user_tipe"><?php echo $_SESSION['tipe_user']?></span> </h3>
    </section>
    <?php

$sql="SELECT * FROM login_user ";
$consult= mysqli_query($conn, $sql);

while ($row=mysqli_fetch_array($consult)) {?>

    <h1>
      <?php echo $row['name'] ?>
      <?php echo $row['lastname']?>
      <?php echo $row['email']?>
      <?php echo $row['password']?>
      <?php if($row['tipe_user'] == 0){
            echo "admin";
      }else{
       echo"normal user";
      } 
       ?>
       </h1>
    <?php }?>


    <?php include '../includes/js.php' ?>

</body>

</html>