<?php
//inicio seguridad
session_start();
$auth=$_SESSION['login'];
if(!$auth){
    header('Location:/espaciodeliteratura');
}
//fin de seguridad
if (!isset($_SESSION)) {
    session_start();
}
$auth = $_SESSION['login'] ?? false;
$cod = $_SESSION['idUsuario']? $_SESSION['idUsuario']: null;

require '../../includes/config/database.php';
$db = conectarDB();
if ($_POST) {
    $u = $_GET['cod'];
    $t = $_POST['tit'];
    $c = $_POST['con'];
    $i = $_FILES['ima']['name'];
    $fechaHoraActual = new DateTime();
    $fecha_actual = $fechaHoraActual->format("Y-m-d");
    $con_sql = "INSERT INTO blog (idusuario,titulo,contenido,imagen,fechablog) 
                VALUES ('$u','$t','$c','$i','$fecha_actual')";
    $res = mysqli_query($db, $con_sql);
    if ($res) {
        $tmp = $_FILES['ima']['tmp_name'];
        @copy($tmp, 'imagenes/' . $i);
            echo "
            <script> 
                alert('Se registró');
                window.location.href = '/espaciodeliteratura/admin/perfilUsuario?cod=$cod';
            </script>";
    }
}
?>
