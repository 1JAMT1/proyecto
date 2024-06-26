<?php
//inicio seguridad
session_start();
$auth=$_SESSION['login'];
if(!$auth){
    header('Location:/espaciodeliteratura');
}
//fin de seguridad
    $inicio=false;
    include "../espaciodeliteratura/includes/templates/header.php";
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <main class="contenedor seccion">
        <center>
        <br>
        <h1>Administrador de Espacio de Literatura</h1>
        <br>
        <a href="../espaciodeliteratura/admin/usuarios/listado.php" class="btn btn-primary">Usuarios</a>
        <a href="../espaciodeliteratura/admin/libros/listado.php" class="btn btn-danger">Libros</a>
        <a href="../espaciodeliteratura/admin/pedido/listado.php" class="btn btn-dark">Pedidos</a>
        <a href="../espaciodeliteratura/admin/blog/listado.php" class="btn btn-warning">Blogs</a>
        <a href="../espaciodeliteratura/admin/editoriales/listado.php" class="btn btn-primary">Editoriales</a>
        <a href="../espaciodeliteratura/admin/generoLibro/listado.php" class="btn btn-danger">Genero de Libros</a>
        </center>
        <br><br>
    </main>

<script
	src="https://kit.fontawesome.com/81581fb069.js"
></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<?php 
	include "../espaciodeliteratura/includes/templates/footer.php"; 
?>