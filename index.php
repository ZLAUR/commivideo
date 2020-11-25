<?php include 'php/cn.php'; ?>
<?php $_SESSION['logo']='https://i.ibb.co/RBwxqtw/LG1.png';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="red">
    <title>login</title>
    <link rel="shortcut icon" href="<?php echo $_SESSION['logo'] ?>" type="image/x-icon">
    <?php include 'includes/css.php'?>
    <link rel="stylesheet" href="css/login.css">
</head>

<body>


    <form action="php/login.php" method="POST">
        <div class="contendor">
            <h1 class="tile">Iniciar sesión <span class="tile_span">Commi video</span></h1>
            <img class="logo" src="<?php echo $_SESSION['logo'] ?>" width="20" height="20" alt="logo">
            <input class="input100 form-control" type="text" name="email" placeholder="Correo Electrónico">
            <input class="input100 form-control" type="password" name="password" placeholder="Contraseña">
            <?php if(isset($_SESSION['user_incorrect'])){?>
            <div class="alert alert-<?= $_SESSION['type_error_user_incorrect']?> alert-dismissible fade show"
                role="alert">
                <strong>UPS :(!</strong> <?= $_SESSION['user_incorrect']?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php } session_unset()?>

            <div class="position_botones">
                <input class="btn boton input50" type="submit" name="ingresar" value="Ingresar">
                <a class="new_boton" href="sing_ing.php"><span class="nameboton">Crear una cunta</span></a>
            </div>
        </div>
    </form>
    <?php include 'includes/js.php'?>
</body>

</html>