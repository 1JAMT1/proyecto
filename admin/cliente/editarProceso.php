<?php
    print_r($_POST);


    if (!isset($_POST['id_cliente']) || !is_numeric($_POST['id_cliente'])) {
        header('Location: index.php?mensaje=error');
        exit();
    }

    include 'model/conexion.php';

    $id_cliente = $_POST['id_cliente'];
    $nombre_completo = $_POST["nombre_completo"];
    $correo = $_POST["correo"];
    $telefono = $_POST["telefono"];
    $direccion = $_POST["direccion"];
    $fecha_nacimiento = $_POST["fecha_nacimiento"];
    $contrasena = $_POST["contrasena"];
    $puntos_acumulados = $_POST["puntos_acumulados"];
    $genero = $_POST["genero"];


    $sentencia = $bd->prepare("UPDATE tbl_cliente SET nombre_completo = ?, correo = ?, telefono = ?, direccion = ?, fecha_nacimiento = ?, contrasena = ?, puntos_acumulados = ?, genero = ? WHERE id_cliente = ?");
    

    $resultado = $sentencia->execute([$nombre_completo, $correo, $telefono, $direccion, $fecha_nacimiento, $contrasena, $puntos_acumulados, $genero, $id_cliente]);

    if ($resultado === TRUE) {
        header('Location: index.php?mensaje=editado');
    } else {
        header('Location: index.php?mensaje=error');
        exit();
    }
?>
