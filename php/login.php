<?php
session_start();
include 'cn.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if (isset($_POST['ingresar'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM login_user WHERE email='$email' &&  password='$password'";
    
    $consulta = mysqli_query($conn, $sql);
    $validar = mysqli_num_rows($consulta);
    
   
    if ($validar === 1){
         $detalles=mysqli_fetch_array($consulta);
         
         $_SESSION['id']=$detalles['id'];
         $_SESSION['name']=$detalles['name'];
         $_SESSION['lastname']=$detalles['lastname'];
         $_SESSION['email']=$detalles['email'];
         $_SESSION['password']=$detalles['password'];
         $_SESSION['tipe_user']=$detalles['tipe_user'];
         $_SESSION['foto']=$detalles['foto'];
         
        if( $_SESSION['tipe_user'] == '1'){
            header("location:../home/home.php");
        }elseif ( $_SESSION['tipe_user'] == '0') {
            header("location:../admin/home.php");
        }
    } else {
        $_SESSION['user_incorrect']='El correo y la contraseña son incorrectos';
        $_SESSION['type_error_user_incorrect']='danger';
        header("location:../index.php");
        
    }
    
}