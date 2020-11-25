<?php include 'php/cn.php'; ?>
<?php $_SESSION['logo']='https://i.ibb.co/RBwxqtw/LG1.png';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="<?php echo $_SESSION['logo']?>" type="image/x-icon">
    <?php include 'includes/css.php'?>
    <link rel="stylesheet" href="css/sing_up.css">
</head>

<body>

    <form action="php/validar.php" method="POST" class="contenedor">
        <h1 class="title">Registro <span class="title_span">Commi video</span></h1>
        <img class="logo" src="<?php echo $_SESSION['logo']?>" width="20" height="20" alt="logo">
        <input class="" type="text" name="name" placeholder="Nombre">
        <input class="" type="text" name="lastname" placeholder="Apellido">
        <input class="" type="email" name="email" placeholder="Correo Electrónico">
        <input class="" type="password" name="password" placeholder="Contraseña">
        <input class="btn boton" type="submit" name="created" value="Crear cuenta">
    </form>
    <?php include 'includes/js.php'?>
</body>

</html>