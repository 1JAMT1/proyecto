<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<link rel="stylesheet" href="/espaciodeliteratura/styles.css">
	<link rel="stylesheet" href="/espaciodeliteratura/estilos.css">
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
						<i class="fa-solid fa-user" href="/espaciodeliteratura/admin/usuario/index.php" opendir=""></i>
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
						<li><a href="../espaciodeliteratura/index.php">Inicio</a></li>
						<li><a href="../espaciodeliteratura/CATALOGO.php">Catalogo</a></li>
						<li><a href="../espaciodeliteratura/ESPACIO.php">Espacio</a></li>
						<li><a href="../espaciodeliteratura/QUIENES SOMOS.php">Quienes Somos</a></li>
						<li><a href="../espaciodeliteratura/BLOG.php">Blog</a></li>
						<li><a href="../espaciodeliteratura/CONTACTANOS.php">Contactanos</a></li>
						<li><a href="../espaciodeliteratura/BASEDEDATOS.php">Base de Datos</a></li>
					</ul>

					<form class="search-form">
						<input type="search" placeholder="Buscar..." />
						<button class="btn-search">
							<i class="fa-solid fa-magnifying-glass"></i>
						</button>
					</form>
				</nav>
			</div>
	</header>
	<script>
    function openPopup() {
        var url = 'carrito.php'; 
        var opciones = 'width=600,height=400,scrollbars=yes,resizable=yes';
        window.open(url, '_blank', opciones);
    }
</script>