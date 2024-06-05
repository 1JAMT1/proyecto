<?php
    require '../../includes/config/database.php';
    $db=conectarDB();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<script src="https://kit.fontwesone.com/41bcea2ae3.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="/espaciodeliteratura/styles.css">
	<link rel="stylesheet" href="/espaciodeliteratura/estilos.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <header class="header <?php echo $inicio ? 'inicio' : ''; ?>">
			<div class="container-hero">
				<div class="container hero">
					<div class="customer-support">
						<i class="fa-solid fa-headset"></i>
						<div class="content-customer-support">
							<span class="text">Soporte al cliente</span>
							<span class="number">1234567890</span>
						</div>
					</div>

					<div class="container-logo">
						<i class="fa-solid fa-book"></i>
                        <h1> ESPACIO DE LITERATURA </h1>
                        <i class="fa-solid fa-book"></i>
					</div>

					<div class="container-user">
					<a href="/espaciodeliteratura/login.php">
    					<i class="fa-solid fa-user"></i>
					</a>


						<i class="fa-solid fa-basket-shopping" onclick="openPopup()"></i>
						<div class="content-shopping-cart">
							<span class="text">Carrito</span>
							<span class="number">(0)</span>
						</div>
					</div>
				</div>
			</div>

			<div class="container-navbar">
				<nav class="navbar container">
					<i class="fa-solid fa-bars"></i>
					<ul class="menu">
						<li><a href="/espaciodeliteratura/index.php">Inicio</a></li>
						<li><a href="/espaciodeliteratura/CATALOGO.php">Catalogo</a></li>
						<li><a href="/espaciodeliteratura/ESPACIO.php">Espacio</a></li>
						<li><a href="/espaciodeliteratura/QUIENES SOMOS.php">Quienes Somos</a></li>
						<li><a href="/espaciodeliteratura/BLOG.php">Blog</a></li>
						<li><a href="/espaciodeliteratura/CONTACTANOS.php">Contactanos</a></li>
					</ul>

				</nav>
			</div>
			<form action="" method="get">
						<input type = "text" name="busqueda"> <br>
						<input type = "submit" name="enviar" value="Buscar">
					</form>

					<br>

					<?php

						if(isset($_GET['enviar'])) {
							$busqueda = $_GET['busqueda'];

							$consulta = $db->query("SELECT * FROM libros WHERE titulo LIKE '%$busqueda%'");

							while ($row = $consulta->fetch_array()) {
								echo $row['titulo'].'<br>';
								echo $row['fechacreacion'].'<br>';
								echo $row['generoLibro'].'<br>';
								echo $row['portada'].'<br>';
								echo $row['precio'].'<br>';
								echo $row['descripcion'].'<br>';
								echo $row['editorial'].'<br>';
							}
						}

					?>

	</header>
	<script
	src="https://kit.fontawesome.com/81581fb069.js">
	</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>	
<script>
    function openPopup() {
        var url = 'carrito.php'; 
        var opciones = 'width=600,height=400,scrollbars=yes,resizable=yes';
        window.open(url, '_blank', opciones);
    }
</script>
