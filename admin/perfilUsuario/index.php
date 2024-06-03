<?php
    require '../../includes/config/database.php';
    $jamt_db = conectarDB();
    require '../../includes/funciones.php';
    incluirTemplate('header');
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f9;
        margin: 0;
        padding: 0;
    }
    .jamt-container {
        max-width: 1200px;
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
    .jamt-profile {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
    }
    .jamt-profile img {
        max-width: 150px;
        height: auto;
        border-radius: 50%;
        margin-right: 20px;
    }
    .jamt-image {
        max-width: 100%;
        height: auto;
        display: block;
        border-radius: 10px;
    }
    .jamt-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
    }
    .jamt-card {
        border: 1px solid #ddd;
        padding: 10px;
        border-radius: 10px;
        background-color: #f9f9f9;
    }
    .jamt-blog {
        display: flex;
        flex-direction: column;
    }
    .jamt-blog img {
        max-width: 100%;
        height: auto;
        border-radius: 10px;
    }
    .jamt-blog-content {
        margin-top: 10px;
    }
</style>

<div class="jamt-container">
    <?php 
        $jamt_cod = $_GET['cod'];
        $jamt_con_sql = "SELECT * FROM usuarios WHERE idusuario='$jamt_cod'";
        $jamt_res = mysqli_query($jamt_db, $jamt_con_sql);
        if ($jamt_res) {
            $jamt_usuario = mysqli_fetch_array($jamt_res);
        } else {
            echo "Error en la consulta " . mysqli_error($jamt_db);
        }
    ?>
    <div class="jamt-profile">
        <img src="../usuarios/imagenes/<?php echo htmlspecialchars($jamt_usuario['imagenUsuario']); ?>" alt="Imagen de perfil">
        <h2>Bienvenido  <?php echo htmlspecialchars($jamt_usuario['nickname']); ?>
        <?php $cod=$jamt_cod; ?>
        <a href="/espaciodeliteratura/admin/perfilUsuario/blog.php?cod=<?php echo $cod;?>" class="btn btn-success">Publicar blog</a>
        <a href="/espaciodeliteratura/admin/usuarios/actualizar.php?cod=<?php echo $cod;?>" class="btn btn-primary">Actualizar perfil</a>

    </h2>
    </div>

    <h2 class="jamt-header">Tus pedidos son:</h2>
    <div class="jamt-grid">
        <?php 
        $jamt_con_sql = "SELECT * FROM pedido WHERE idusuario='$jamt_cod'";
        $jamt_res1 = mysqli_query($jamt_db, $jamt_con_sql);
        while ($jamt_pedido = mysqli_fetch_array($jamt_res1)) {
        ?>
            <div class="jamt-card">
                <h3>Fecha de pedido: <?php echo htmlspecialchars($jamt_pedido['fechacompra']); ?></h3>
                <?php
                $jamt_codLibro = $jamt_pedido['idlibro'];
                $jamt_con_sql1 = "SELECT * FROM libros WHERE idLibro='$jamt_codLibro'";
                $jamt_res2 = mysqli_query($jamt_db, $jamt_con_sql1);
                $jamt_libro = mysqli_fetch_array($jamt_res2);
                ?>
                <h3>Título: <?php echo htmlspecialchars($jamt_libro['titulo']); ?></h3>
                <h3>Precio: <?php echo htmlspecialchars($jamt_libro['precio']); ?></h3>
            </div>
        <?php
        }
        ?>
    </div>

    <h2 class="jamt-header">Tus blogs son:</h2>
    <div class="jamt-grid">
        <?php 
        $jamt_con_sql = "SELECT * FROM blog WHERE idusuario='$jamt_cod'";
        $jamt_res3 = mysqli_query($jamt_db, $jamt_con_sql);
        while ($jamt_blog = mysqli_fetch_array($jamt_res3)) {
        ?>
            <div class="jamt-card jamt-blog">
                <img src="../blog/imagenes/<?php echo htmlspecialchars($jamt_blog['imagen']); ?>" alt="Imagen del blog">
                <div class="jamt-blog-content">
                    <h3>Título: <?php echo htmlspecialchars($jamt_blog['titulo']); ?></h3>
                    <p><?php echo nl2br(htmlspecialchars($jamt_blog['contenido'])); ?></p>
                </div>
                <a href="/espaciodeliteratura/admin/blog/borrar.php?cod=<?php echo $jamt_blog['idblog']; ?>"class="btn btn-danger">Eliminar</a>
            </div>
        <?php
        }
        ?>
    </div>
    <br>
    <a href="/espaciodeliteratura/BASEDEDATOSU.php" class="btn btn-warning">Volver</a>
</div>
<?php
incluirTemplate('footer');
?>
<script
	src="https://kit.fontawesome.com/81581fb069.js"
></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
