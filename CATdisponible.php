<?php
    require '../espaciodeliteratura/includes/config/database.php';
    $db=conectarDB();
    //var_dump($db);
    require '../espaciodeliteratura/includes/funciones.php';
    incluirTemplate('header');
?>
<link rel="stylesheet" href="../../cssa/bootstrap.min.css">
<link rel="stylesheet" href="../../css/dropdown.css">
    <main class="contenedor seccion">
        <br><br>

        <div class="dropdown">
			<button>--Seleccione--</button>
			<div class="dropdown-content"> 
  				<a href="../espaciodeliteratura/CATALOGO.php">Mas destacados</a>
  				<a href="../espaciodeliteratura/CATascendente.php">Ascendente</a>
  				<a href="../espaciodeliteratura/CATdescendente.php">Descendente</a>
  				<a href="../espaciodeliteratura/CATbarato.php">Mas baratos</a>
  				<a href="../espaciodeliteratura/CATcaro.php">Mas caros</a>
  				<a href="../espaciodeliteratura/CATdisponible.php">Disponibles</a>
			</div>
		</div>

        <h3>
        <div class="container-products">
                <?php
                    //SELECT * FROM libros ORDER BY titulo ASC
                    $consql=("SELECT p.*,v.idautor,v.nombre,v.paterno FROM libros
                    p INNER JOIN autor v ON 
                    p.idautor=v.idautor where p.estado = 'Disponible'");
                    $resultado=mysqli_query($db,$consql);
                    while($var=mysqli_fetch_array($resultado))
                    {
                ?>

<div class="card-product">
						<div class="container-img">
							<img src="img/<?php echo $var['portada']; ?>" alt="Cafe Irish" />
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

        </h3>
        <a href="/espaciodeliteratura/BASEDEDATOS.php" class="btn btn-warning">Volver</a>
        <br><br>
    </main>
    <script src="../../jsa/bootstrap.min.js" ></script>
<?php
    incluirTemplate('footer');
?>