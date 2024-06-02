<?php
    $inicio=false;
    include "../espaciodeliteratura/includes/templates/header.php";
?>
        <section class="banner">
			<div class="content-banner">
				<p>Blog</p>
				<h2>En este sitio encontrar <br />algunos consejos de la literatura</h2>
				<a href="#">Ver más</a>
			</div>
		</section>
        <main class="main-content">
                <br>
				<h1 class="heading-1">Últimos Blogs</h1>
<!-- inicio php -->

<section class="container blogs">
<div class="container-blogs">

<?php 
	require 'includes/config/database.php';
	$db=conectarDB();
    $con_sql="SELECT * FROM blog";
    $res=mysqli_query($db,$con_sql);
    while($reg=$res->fetch_assoc())
    {
?>
					<div class="card-blog">
						<div class="container-img">
							<img src="admin/blog/imagenes/<?php echo $reg['imagen']; ?>"  alt="Imagen Blog 2" />
							<div class="button-group-blog">
								<span>
									<i class="fa-solid fa-magnifying-glass"></i>
								</span>
								<span>
									<i class="fa-solid fa-link"></i>
								</span>
							</div>
						</div>
						<div class="content-blog">
							<h3><?php echo $reg['titulo']; ?></h3>
							<span>31 octubre 2023</span>
							<p>
								<?php echo $reg['contenido']; ?>
							</p>
							<div class="btn-read-more">Leer más</div>
						</div>
					</div>
			
<?php 
	}
?>
</div>
<!-- fin de php -->
			</section>
</main>
<?php 
include "../espaciodeliteratura/includes/templates/footer.php"; 
?>
<script
	src="https://kit.fontawesome.com/81581fb069.js"
></script>