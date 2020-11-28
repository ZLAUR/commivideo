<?php include '../../php/cn.php';?>
<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql="DELETE FROM login_user WHERE id=$id";
    $consult=mysqli_query($conn, $sql);
    if (!$consult) {
        $_SESSION['tipe_message']= "Error al intentar eliminar al usuario";
        $_SESSION['tipe_message_type']= "danger";
        header("Location:../home.php");
    }else{
        $_SESSION['tipe_message']= "El usuario ha sido eleminado con exito";
        $_SESSION['tipe_message_type']= "success";
        header("Location:../home.php");
    }
}

?>
