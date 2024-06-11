<?php
//inicio seguridad
session_start();
$auth=$_SESSION['login'];
if(!$auth){
    header('Location:/espaciodeliteratura');
}
//fin de seguridad
    require '../../includes/config/database.php';
    $db=conectarDB();
    require '../../includes/funciones.php';
    incluirTemplate('header');
?>
<link rel="stylesheet" href="../../cssa/bootstrap.min.css">
    <main class="contenedor seccion">
        <br>
        <h1>Crear Pedido</h1>
        <br>
        <a href="/espaciodeliteratura/admin/pedido/listado.php" class="btn btn-success">Volver</a>
        <br><br>
        <form method="post" action="/espaciodeliteratura/admin/pedido/registrarpedido.php" class="formulario">
            <fieldset>
                <legend>Información General</legend>

                <label for="">Cantidad:</label>
                <input type="int" name="can" id="can" placeholder="Cantidad">
            </fieldset>
             <!-- inicio libro -->
            <fieldset>
            <label for="">Libro:</label>
                <select name="idl" id="idl">
                    <?php
                    $con_sql='SELECT * FROM libros';
                    $res=mysqli_query($db,$con_sql);
                    while($reg=$res->fetch_assoc())
                    {
                    ?>
                    <option value="<?php echo $reg['idlibro']; ?>">
                        <?php echo $reg['titulo']; ?>
                    </option>
                    <?php 
                         } 
                    ?>
                </select>
            </fieldset>
            <!-- fin de libro -->
            <fieldset>
            <!-- inicio usuario -->
            <label for="">Usuario:</label>
                <select name="idu" id="idu">
                    <?php
                    $con_sql='SELECT * FROM usuarios';
                    $res=mysqli_query($db,$con_sql);
                    while($reg=$res->fetch_assoc())
                    {
                    ?>
                    <option value="<?php echo $reg['idusuario']; ?>">
                        <?php echo $reg['nickname']; ?>
                    </option>
                    <?php 
                         } 
                    ?>
                </select>
                <!-- fin de usuario -->
            </fieldset>
            <br>
            <input type="submit" value="Regristar Pedido" class="btn btn-success">
            <br><br>
        </form>
    </main>
    <script src="../../jsa/bootstrap.min.js" ></script>
<?php
    incluirTemplate('footer');
?>