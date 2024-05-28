<?php
    $inicio=false;
    include "../espaciodeliteratura/includes/templates/header.php";
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <section class="banner">
			<div class="content-banner">
				<p>Base de Datos</p>
				<h2>En este sitio encontrar <br />registros de la página</h2>
				<a href="#">Ver más</a>
			</div>
		</section>
        <main class="contenedor seccion">
        <center>
        <br>
        <h1>Administrador de Espacio de Literatura</h1>
        <br>
        <a href="../espaciodeliteratura/admin/usuarios/listado.php" class="btn btn-primary">Usuarios</a>
        <a href="../espaciodeliteratura/admin/libros/listado.php" class="btn btn-danger">Libros</a>
        <a href="../espaciodeliteratura/admin/autor/listado.php" class="btn btn-success">Autores</a>
        <a href="../espaciodeliteratura/admin/pedido/listado.php" class="btn btn-dark">Pedidos</a>
        <a href="../espaciodeliteratura/admin/blog/listado.php" class="btn btn-warning">Blogs</a>
        <a href="../espaciodeliteratura/admin/editoriales/listado.php" class="btn btn-primary">Editoriales</a>
        <a href="../espaciodeliteratura/admin/cliente/idclientes.php" class="btn btn-info">Clientes</a>
        </center>
        <br><br>
    </main>
<?php 
	include "../espaciodeliteratura/includes/templates/footer.php"; 
?>
<script
	src="https://kit.fontawesome.com/81581fb069.js"
></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
