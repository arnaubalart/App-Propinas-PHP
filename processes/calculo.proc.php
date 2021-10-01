<?php
session_start();

if(isset($_POST["enviar"])){
    $total=$_POST["total"];
    $calidad=$_POST["calidad"];
    $personas=$_POST["personas"];
    $propina=(float)$total*(float)$calidad/100/(float)$personas;
    if(is_nan($propina)){
        $_SESSION['resultado']=0;
        header('location:../index.php');
    }

    $_SESSION['resultado']=$propina;
    //header('location:../index.php');
}else{header('location:../index.php');}