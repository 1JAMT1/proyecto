<?php
    require 'includes/config/database.php';
    $db=conectarDB();
    $errores=[];
    if($_SERVER['REQUEST_METHOD']='POST'){
        echo "<pre>";
        var_dump($_POST);
        echo "</pre>";
        $e=mysqli_real_escape_string($db,$_POST['ema']);
        $p=mysqli_real_escape_string($db,$_POST['pas']);
        if(!$e){
            $errores[]="El email es obligatorio";
        }
        if(!$p){
            $errores[]="El password es obligatorio";
        }
        if(empty($errores)){
            $con_sql="SELECT * FROM usuarios WHERE email='$e'";
            echo $con_sql;
            $res=mysqli_query($db,$con_sql);
            var_dump($res);
            if($res->num_rows){
                $usuario=mysqli_fetch_array($res);
                var_dump($usuario);
                $auth=password_verify($p,$usuario['pasword']);
                var_dump($auth);
                if($auth){
                    session_start();
                    $_SESSION['usuario']=$usuario['email'];
                    $_SESSION['login']=true;
                    echo "<pre>";
                    var_dump($_SESSION);
                    echo "</pre>";
                    header("Location:/bienes1/admin");
                }else{
                    $errores[]="El password es incorrecto ";
                }
            }
            else{
                $errores[]="El usuario no existe";
        }
        }
    }
    require 'includes/funciones.php';
    incluirTemplate('header');
?>