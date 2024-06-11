<?php
    require '../espaciodeliteratura/includes/config/database.php';
    $db=conectarDB();
    //var_dump($db);
    require '../espaciodeliteratura/includes/funciones.php';
    incluirTemplate('header');
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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
    <a href="../espaciodeliteratura/CATdestacado.php">Más destacados</a>
    <a href="../espaciodeliteratura/CATascendente.php">Ascendente</a>
    <a href="../espaciodeliteratura/CATdescendente.php">Descendente</a>
    <a href="../espaciodeliteratura/CATbarato.php">Más baratos</a>
    <a href="../espaciodeliteratura/CATcaro.php">Más caros</a>
    <a href="../espaciodeliteratura/CATdisponible.php">Disponibles</a>
  </div>
</div>

<h1 class="heading-1">Libros de terror</h1>
<div class="container-products">

                <?php
                    $x=1;
                    $consql = "SELECT * FROM libros where generoLibro='Terror' ORDER BY RAND()";
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
			<a href="/espaciodeliteratura/admin/pedido/registrarpedido1.php?idu=<?php echo $id;?>&
			idl=<?php echo $var['idlibro']; ?>"><i class="fa-solid fa-basket-shopping"></i></a>
			</span>
							<p class="price"><?php echo $var['precio']; ?></p>
						</div>
					</div>
                <?php
                    $x = $x+1;
                    }
                ?>
</div>
        <br><br>

        <h1 class="heading-1">Libros de ficcion</h1>
<div class="container-products">

<?php
                    $x=1;
                    $consql = "SELECT * FROM libros where generoLibro='Ficción' ORDER BY RAND()";
                    $resultado=mysqli_query($db,$consql);
                    while($var=mysqli_fetch_array($resultado)) //&& $x<=3
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
			<a href="/espaciodeliteratura/admin/pedido/registrarpedido1.php?idu=<?php echo $id;?>&
			idl=<?php echo $var['idlibro']; ?>"><i class="fa-solid fa-basket-shopping"></i></a>
			</span>
							<p class="price"><?php echo $var['precio']; ?></p>
						</div>
					</div>
                <?php
                    $x = $x+1;
                    }
                ?>
</div>
        <br><br>

<h1 class="heading-1">Libros de fantasia</h1>
<div class="container-products">

                <?php
                    $x=1;
                    $consql = "SELECT * FROM libros where generoLibro='Fantasia' ORDER BY RAND()";
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
			<a href="/espaciodeliteratura/admin/pedido/registrarpedido1.php?idu=<?php echo $id;?>&
			idl=<?php echo $var['idlibro']; ?>"><i class="fa-solid fa-basket-shopping"></i></a>
			</span>
							<p class="price"><?php echo $var['precio']; ?></p>
						</div>
					</div>
                <?php
                    $x = $x+1;
                    }
                ?>
</div>
        <br><br>

	    <h1 class="heading-1">Libros de romancer</h1>
<div class="container-products">

                <?php
                    $x=1;
                    $consql = "SELECT * FROM libros where generoLibro='Romance' ORDER BY RAND()";
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
			<a href="/espaciodeliteratura/admin/pedido/registrarpedido1.php?idu=<?php echo $id;?>&
			idl=<?php echo $var['idlibro']; ?>"><i class="fa-solid fa-basket-shopping"></i></a>
			</span>
							<p class="price"><?php echo $var['precio']; ?></p>
						</div>
					</div>
                <?php
                    $x = $x+1;
                    }
                ?>
</div>
        <br><br>

<h1 class="heading-1">Libros de poesia</h1>
<div class="container-products">

                <?php
                    $x=1;
                    $consql = "SELECT * FROM libros where generoLibro='Poesia' ORDER BY RAND()";
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
			<a href="/espaciodeliteratura/admin/pedido/registrarpedido1.php?idu=<?php echo $id;?>&
			idl=<?php echo $var['idlibro']; ?>"><i class="fa-solid fa-basket-shopping"></i></a>
			</span>
							<p class="price"><?php echo $var['precio']; ?></p>
						</div>
					</div>
                <?php
                    $x = $x+1;
                    }
                ?>
</div>
        <br><br>

<h1 class="heading-1">Libros de cocina</h1>
<div class="container-products">

                <?php
                    $x=1;
                    $consql = "SELECT * FROM libros where generoLibro='Cocina' ORDER BY RAND()";
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
			<a href="/espaciodeliteratura/admin/pedido/registrarpedido1.php?idu=<?php echo $id;?>&
			idl=<?php echo $var['idlibro']; ?>"><i class="fa-solid fa-basket-shopping"></i></a>
			</span>
							<p class="price"><?php echo $var['precio']; ?></p>
						</div>
					</div>
                <?php
                    $x = $x+1;
                    }
                ?>
</div>
        <br><br>
	    
    </main>
    <script src="../../jsa/bootstrap.min.js" ></script>
<?php
    incluirTemplate('footer');
