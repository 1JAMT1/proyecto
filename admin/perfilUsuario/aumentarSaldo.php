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
            <!--<tr>
                <td>Agregar Saldo</td>
                <td><input type="number" class="form-control" name="sal" id="sal" value=""></td>
            </tr>
            <tr>
                <td colspan="2">
                    <div align="center">
                        <input type="submit" name="Modificar" id="Modificar" value="Modificar" class="btn btn-primary">
                    </div>
                </td>
            </tr>-->
            <div class="row">
                <div class="col">
                    <h3 class="title">Dirección de Facturación</h3>

                    <div class="inputBox">
                        <span>Nombre Completo :</span>
                        <input type="text" placeholder="john deo">
                    </div>
                    <div class="inputBox">
                        <span>Email :</span>
                        <input type="email" placeholder="example@example.come">
                    </div>
                    <div class="inputBox">
                        <span>Dirección :</span>
                        <input type="text" placeholder="room - street - locality">
                    </div>
                    <div class="inputBox">
                        <span>Ciudad :</span>
                        <input type="text" placeholder="mumbai">
                    </div>

                    <div class="flex">
                        <div class="inputBox">
                            <span>Estado :</span>
                            <input type="text" placeholder="india">
                        </div>
                        <div class="inputBox">
                            <span>Código Postal :</span>
                            <input type="text" placeholder="123 456">
                        </div>
                    </div>
                </div>

                <div class="col">
                    <h3 class="title">Pago</h3>

                    <div class="inputBox">
                        <span>Tarjetas Aceptadas :</span>
                        <img src="/espaciodeliteratura/img/payment.png" alt="">
                    </div>
                    <div class="inputBox">
                        <span>Recargar Saldo :</span>
                        <input type="decimal" name="sal" id="sal" value="" placeholder="00.00">
                    </div>
                    <div class="inputBox">
                        <span>Número de Tarjeta de Crédito :</span>
                        <input type="number" placeholder="1111-2222-3333-4444">
                    </div>
                    <div class="inputBox">
                        <span>Mes de Vencimiento :</span>
                        <input type="text" placeholder="january">
                    </div>

                    <div class="flex">
                        <div class="inputBox">
                            <span>Año de Vencimiento :</span>
                            <input type="text" placeholder="2022">
                        </div>
                        <div class="inputBox">
                            <span>CW :</span>
                            <input type="text" placeholder="1234">
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div align="center">
                <input type="submit" name="Modificar" id="Modificar" value="Recargar" class="btn btn-primary">
            </div>
        </form>
        </table>
        <br>
    </form>
</main>
<script src="../../jsa/bootstrap.min.js"></script>
<?php
incluirTemplate('footer');
?>
