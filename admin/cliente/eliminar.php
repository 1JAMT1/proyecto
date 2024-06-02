<?php 
    if(!isset($_GET['id_cliente'])){
        header('Location: index.php?mensaje=error');
        exit();
    }

    include 'model/conexion.php';
    $id_cliente = $_GET['id_cliente'];

    $sentencia = $bd->prepare("DELETE FROM tbl_cliente where id_cliente = ?;");
    $resultado = $sentencia->execute([$id_cliente]);

    if ($resultado === TRUE) {
        header('Location: index.php?mensaje=eliminado');
    } else {
        header('Location: index.php?mensaje=error');
    }
    
?>