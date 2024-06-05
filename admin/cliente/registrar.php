<?php
//inicio seguridad
session_start();
$auth=$_SESSION['login'];
if(!$auth){
    header('Location:/espaciodeliteratura');
}
//fin de seguridads
    if(empty($_POST["oculto"]) || empty($_POST["nombre_completo"]) || empty($_POST["correo"]) || empty($_POST["telefono"]) || empty($_POST["direccion"]) || empty($_POST["fecha_nacimiento"]) || empty($_POST["contrasena"]) || empty($_POST["puntos_acumulados"]) || empty($_POST["genero"])){
        header('Location: index.php?mensaje=falta');
        exit();
    }

    include_once 'model/conexion.php';
    $nombre_completo = $_POST["nombre_completo"];
    $correo = $_POST["correo"];
    $telefono = $_POST["telefono"];
    $direccion = $_POST["direccion"];
    $fecha_nacimiento = $_POST["fecha_nacimiento"];
    $contrasena = $_POST["contrasena"];
    $puntos_acumulados = $_POST["puntos_acumulados"];
    $genero = $_POST["genero"];

    $sentencia = $bd->prepare("INSERT INTO tbl_cliente(nombre_completo,correo,telefono,direccion,fecha_nacimiento,contrasena,puntos_acumulados,genero) VALUES (?,?,?,?,?,?,?,?);");
    $resultado = $sentencia->execute([$nombre_completo,$correo,$telefono,$direccion,$fecha_nacimiento,$contrasena,$puntos_acumulados,$genero]);

    if ($resultado === TRUE) {
        header('Location: index.php?mensaje=registrado');
    } else {
        header('Location: index.php?mensaje=error');
        exit();
    }
    
?>