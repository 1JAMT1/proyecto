<?php
    require '../../includes/config/database.php';
    $jamt_db = conectarDB();
    require '../../includes/funciones.php';
    incluirTemplate('header');
?>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f9;
        margin: 0;
        padding: 0;
    }
    .jamt-container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .jamt-header {
        color: #333;
        border-bottom: 2px solid #4CAF50;
        padding-bottom: 10px;
    }
    .jamt-image {
        max-width: 100%;
        height: auto;
        display: block;
        margin: 20px 0;
        border-radius: 10px;
    }
    .jamt-pedido, .jamt-blog {
        border: 1px solid #ddd;
        padding: 10px;
        margin: 20px 0;
        border-radius: 10px;
        background-color: #f9f9f9;
    }
    .jamt-blog {
        display: flex;
        align-items: flex-start;
    }
    .jamt-blog-content {
        flex: 1;
        margin-left: 20px;
    }
    .jamt-blog img {
        max-width: 200px;
        height: auto;
        border-radius: 10px;
    }
</style>

<div class="jamt-container">
    <?php 
        $jamt_cod = $_GET['cod'];
        $jamt_contador = 1;
        $jamt_con_sql = "SELECT * FROM usuarios WHERE idusuario='$jamt_cod'";
        $jamt_res = mysqli_query($jamt_db, $jamt_con_sql);
        if ($jamt_res) {
            $jamt_usuario = mysqli_fetch_array($jamt_res);
        } else {
            echo "Error en la consulta " . mysqli_error($jamt_db);
        }
    ?>
    <h2 class="jamt-header">Bienvenido a tu perfil, <?php echo htmlspecialchars($jamt_usuario['nickname']); ?></h2>
    <img class="jamt-image" src="../usuarios/imagenes/<?php echo htmlspecialchars($jamt_usuario['imagenUsuario']); ?>" alt="Imagen de perfil">

    <h2 class="jamt-header">Tus pedidos son:</h2>
    <?php 
    $jamt_con_sql = "SELECT * FROM pedido WHERE idusuario='$jamt_cod'";
    $jamt_res1 = mysqli_query($jamt_db, $jamt_con_sql);
    while ($jamt_pedido = mysqli_fetch_array($jamt_res1)) {
    ?>
        <div class="jamt-pedido">
            <h3>Fecha de pedido: <?php echo htmlspecialchars($jamt_pedido['fechacompra']); ?></h3>
            <h3>Cantidad: <?php echo htmlspecialchars($jamt_pedido['cantidad']); ?></h3>
            <?php
            $jamt_codLibro = $jamt_pedido['idlibro'];
            $jamt_con_sql1 = "SELECT * FROM libros WHERE idLibro='$jamt_codLibro'";
            $jamt_res2 = mysqli_query($jamt_db, $jamt_con_sql1);
            $jamt_libro = mysqli_fetch_array($jamt_res2);
            ?>
            <h3>Título: <?php echo htmlspecialchars($jamt_libro['titulo']); ?></h3>
        </div>
    <?php
    }
    ?>

    <h2 class="jamt-header">Tus blogs son:</h2>
    <?php 
    $jamt_con_sql = "SELECT * FROM blog WHERE idusuario='$jamt_cod'";
    $jamt_res3 = mysqli_query($jamt_db, $jamt_con_sql);
    while ($jamt_blog = mysqli_fetch_array($jamt_res3)) {
    ?>
        <div class="jamt-blog">
            <img class="jamt-image" src="../blog/imagenes/<?php echo htmlspecialchars($jamt_blog['imagen']); ?>" alt="Imagen del blog">
            <div class="jamt-blog-content">
                <h3>Título: <?php echo htmlspecialchars($jamt_blog['titulo']); ?></h3>
                <p><?php echo nl2br(htmlspecialchars($jamt_blog['contenido'])); ?></p>
            </div>
        </div>
    <?php
    }
    ?>
</div>

<?php
incluirTemplate('footer');
?>
