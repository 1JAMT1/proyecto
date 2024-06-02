<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<script src="https://kit.fontwesone.com/41bcea2ae3.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="../espaciodeliteratura/styles.css">
	<link rel="stylesheet" href="../espaciodeliteratura/estilos.css">
	<link rel="stylesheet" href="../espaciodeliteratura/buscador.css">
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

					<div id="icon-menu">
						<i class="fas fa-bars"></i>
						<input type="search" placeholder="Buscar..." />
						<i class="fa-solid fa-magnifying-glass"></i>
					</div>

						<ul id="box-search">
							<li><a href="#"><i class="fas fa-search"></i>Romance</a></li>
							<li><a href="#"><i class="fas fa-search"></i>Fantasía</a></li>
							<li><a href="#"><i class="fas fa-search"></i>Ficción</a></li>
							<li><a href="#"><i class="fas fa-search"></i>Terror</a></li>
							<li><a href="#"><i class="fas fa-search"></i>Cocina</a></li>
							<li><a href="#"><i class="fas fa-search"></i>Poesía</a></li>
						</ul>

						<div id="cover-ctn-search"></div>

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
