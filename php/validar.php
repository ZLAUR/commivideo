<?php
include 'cn.php';

if (isset($_POST['created'])) {
    $name=$_POST['name'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $foto= 'PERFIL.png';
    $tipe_user= '1';

    $sql="INSERT INTO login_user(name, lastname, email, password, foto, tipe_user) VALUES ('$name', '$lastname', '$email', '$password', '$foto', '$tipe_user')";
    $consult = mysqli_query($conn, $sql);

     if (!$consult) {
        echo "error";
     }else{
         header("Location:../index.php");
        }
}
?>