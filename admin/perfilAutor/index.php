<?php
//inicio seguridad
session_start();
$auth=$_SESSION['login'];
if(!$auth){
    header('Location:/espaciodeliteratura');
}
//fin de seguridad
    require '../../includes/config/database.php';
    $jamt_db = conectarDB();
    require '../../includes/funciones.php';
    incluirTemplate('header');
?>
<?php
$jamt_cod = $_GET['cod'];
$jamt_contador = 1;
$jamt_con_sql = "SELECT * FROM usuarios WHERE idusuario='$jamt_cod'";
$jamt_res = mysqli_query($jamt_db, $jamt_con_sql);
if ($jamt_res) {
    $jamt_row = mysqli_fetch_array($jamt_res);
} else {
    echo "Error en la consulta " . mysqli_error($jamt_db);
}
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
    .jamt-image {
        max-width: 100%;
        height: auto;
        display: block;
        margin: 20px 0;
        border-radius: 10px;
    }
    .jamt-libros-container {
        display: grid;
        grid-template-columns: repeat(3, 1fr); 
        gap: 20px;
    }
    .jamt-libro {
        border: 1px solid #ddd;
        padding: 10px;
        border-radius: 10px;
        background-color: #f9f9f9;
    }.jamt-profile {
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
</style>
<div class="jamt-container">
<div class="jamt-profile">
<img src="../usuarios/imagenes/<?php echo htmlspecialchars($jamt_row['imagenUsuario']); ?>" alt="Imagen de perfil">
    <h2 class="jamt-header">Bienvenido a tu perfil: <?php echo htmlspecialchars($jamt_row['nombre'] . " " . $jamt_row['paterno'] . " " . $jamt_row['materno']); ?>
    <?php $cod=$jamt_cod; ?>
    <a href="/espaciodeliteratura/admin/perfilAutor/libro.php?cod=<?php echo $cod; ?>" class="btn btn-success">Publicar libro</a>
    <a href="/espaciodeliteratura/admin/usuarios/actualizar.php?cod=<?php echo $cod;?>" class="btn btn-primary">Actualizar perfil</a>
</h2>
</div>
    <h2 class="jamt-header">Tus libros son:</h2>
    <div class="jamt-libros-container">
        <?php
        $jamt_con_sql1 = "SELECT * FROM libros WHERE idusuario='$jamt_cod'";
        $jamt_res1 = mysqli_query($jamt_db, $jamt_con_sql1);
        while ($jamt_libro = mysqli_fetch_array($jamt_res1)) {
        ?>
            <div class="jamt-libro">
                <h3>Título: <?php echo htmlspecialchars($jamt_libro['titulo']); ?></h3>
                <h3>Fecha: <?php echo htmlspecialchars($jamt_libro['fechacreacion']); ?></h3>
                <h3>Descripcion: <?php echo htmlspecialchars($jamt_libro['descripcion']); ?></h3>
                <?php
                $codGenero=$jamt_libro['generoLibro'];
                $sql="SELECT *FROM generolibros WHERE idGenero='$codGenero'";
                $res4=mysqli_query($jamt_db,$sql);
                $gen=mysqli_fetch_array($res4);
                $r=$gen['nombreGenero'];
                ?>
                <h3>Genero: <?php echo htmlspecialchars($r); ?></h3>
                <img class="jamt-image" src="../libros/imagenes/<?php echo htmlspecialchars($jamt_libro['portada']); ?>" alt="Portada del libro">
            </div>
        <?php
        }
        ?>
    </div>
</div>
    </div>
<?php 
    incluirTemplate('footer');
?>
