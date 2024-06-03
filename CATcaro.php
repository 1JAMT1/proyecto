<?php
    require '../espaciodeliteratura/includes/config/database.php';
    $db=conectarDB();
    //var_dump($db);
    require '../espaciodeliteratura/includes/funciones.php';
    incluirTemplate('header');
?>
<link rel="stylesheet" href="../../cssa/bootstrap.min.css">
    <main class="contenedor seccion">
        <br><br>
        <link rel="stylesheet" href="../../css/dropdown.css">
		<style>
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 12px 16px;
  z-index: 1;
}
.dropdown-content a {
  color: black;
  text-decoration: none;
  display: block;
}
.dropdown-content a:hover {
  background-color: #ddd;
}
.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown{
  position: relative;
  display: inline-block;
}
</style>
<div class="dropdown">
  <button class="btn btn-primary">Filtre por</button>
  <div class="dropdown-content">
    <a href="../espaciodeliteratura/CATALOGO.php">Más destacados</a>
    <a href="../espaciodeliteratura/CATascendente.php">Ascendente</a>
    <a href="../espaciodeliteratura/CATdescendente.php">Descendente</a>
    <a href="../espaciodeliteratura/CATbarato.php">Más baratos</a>
    <a href="../espaciodeliteratura/CATcaro.php">Más caros</a>
    <a href="../espaciodeliteratura/CATdisponible.php">Disponibles</a>
  </div>
</div>

        <div class="container-products">

                <?php
                    //SELECT * FROM libros ORDER BY titulo ASC
                    $consql = "SELECT p.* FROM libros AS p WHERE p.precio > 6";
                    $resultado=mysqli_query($db,$consql);
                    while($var=mysqli_fetch_array($resultado))
                    {
                ?>

<div class="card-product">
						<div class="container-img">
                        <img src="/espaciodeliteratura/admin/libros/imagenes/<?php echo $var['portada']; ?>" alt="Cafe Irish" />
							<div class="button-group">
								<span>
									<i class="fa-regular fa-eye"></i>
								</span>
								<span>
									<i class="fa-regular fa-heart"></i>
								</span>
								<span>
									<i class="fa-solid fa-code-compare"></i>
								</span>
							</div>
						</div>
						<div class="content-card-product">
							<div class="stars">
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-regular fa-star"></i>
							</div>
							<h3><?php echo $var['titulo']; ?></h3>
							<span class="add-cart">
							<a href="#" onclick="openPopup()"><i class="fa-solid fa-basket-shopping"></i> </a>
							</span>
							<p class="price"><?php echo $var['precio']; ?></p>
						</div>
					</div>
                <?php
                    }
                ?>
</div>
        <br><br>
    </main>
    <script src="../../jsa/bootstrap.min.js" ></script>
<?php
    incluirTemplate('footer');
?>
