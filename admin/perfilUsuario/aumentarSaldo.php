<?php 
//inicio seguridad
session_start();
$auth = $_SESSION['login'];
if (!$auth) {
    header('Location:/espaciodeliteratura');
}
//fin de seguridad
require '../../includes/config/database.php';
$db = conectarDB();
require '../../includes/funciones.php';
incluirTemplate('header');

$cod = $_GET['cod'];
if (isset($_POST['Modificar'])) {
    $saldo = $_POST['sal'];
    $con_sql = "UPDATE usuarios SET saldo = saldo + '$saldo' WHERE idusuario = '$cod'";
    $resm = mysqli_query($db, $con_sql);
    if ($resm) {
        echo "
        <script>
            window.alert('Registro modificado con éxito');
            window.location='/espaciodeliteratura/admin/perfilUsuario?cod=$cod';
            </script>
        ";
    }
}
?>
<link rel="stylesheet" href="../../cssa/bootstrap.min.css">
<main class="contenedor seccion">
    <br>
    <h1>Cargar</h1>
    <br>
    <a href="/espaciodeliteratura/admin/perfilUsuario?cod=<?php echo $cod;?>" class="btn btn-success">Volver</a>
    <br><br>
    <?php
    $consulta = "SELECT * FROM usuarios WHERE idusuario='$cod'";
    $res = mysqli_query($db, $consulta);
    $usuario = mysqli_fetch_assoc($res);
    ?>
    <form action="aumentarSaldo.php?cod=<?php echo $usuario['idusuario']; ?>" method="post">
        <table class="table table-striped table-bordered table-hover">
            <tr>
                <td>Agregar Saldo</td>
                <td><input type="number" class="form-control" name="sal" id="sal" value=""></td>
            </tr>
            <tr>
                <td colspan="2">
                    <div align="center">
                        <input type="submit" name="Modificar" id="Modificar" value="Modificar" class="btn btn-primary">
                    </div>
                </td>
            </tr>
        </table>
        <br>
    </form>
</main>
<script src="../../jsa/bootstrap.min.js"></script>
<?php
incluirTemplate('footer');
?>
