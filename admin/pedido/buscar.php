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
    //var_dump($db);
    require '../../includes/funciones.php';
    incluirTemplate('header');
?>
    <?php
    // Retrieve the value of the 'titulo' query parameter
    if (isset($_GET['titulo'])) {
        $titulo = htmlspecialchars($_GET['titulo'], ENT_QUOTES, 'UTF-8');
    ?>
    <table class="table table-striped">
    <thead>
        <th> Fecha de compra </th>
        <th> Fecha de Compra </th>
        <th> Titulo </th>
    </thead>
    <tbody>
    <?php
        $consql=("SELECT * FROM libros WHERE titulo='$titulo'");
        $resultado=mysqli_query($db,$consql);
        $var=mysqli_fetch_array($resultado);
        $cod=$var['idlibro'];

            $consql=("SELECT p.*,v.* FROM pedido
            p INNER JOIN usuarios v ON 
            p.idusuario=v.idusuario WHERE idlibro='$cod'");
            $resultado=mysqli_query($db,$consql);
            while($var2=mysqli_fetch_array($resultado))
            {
    ?>        
   
    
    <tr>
        <td><?php echo $var2['fechacompra']; ?> </td>
        <td><?php echo $var2['nickname']; ?> </td>
        <?php
            $codLibro=$var2['idlibro'];
            $con_sql="SELECT * FROM libros WHERE idlibro='$codLibro'";
            $pregunta=mysqli_query($db,$con_sql);
            $libro=mysqli_fetch_array($pregunta);
        ?>
        <td><?php echo $libro['titulo']; ?> </td>
        </tr>

            <?php
                }
            ?>
            </tbody>
        </table>

   <?php 
    } else {
        echo "<h1>No se ha proporcionado ningún título para buscar.</h1>";
    }
    ?>

<script src="../../jsa/bootstrap.min.js" ></script>
<?php
    incluirTemplate('footer');
?>
