<?php  
    require '../espaciodeliteratura/includes/funciones.php';
    incluirTemplate('header',$inicio=true);
?>
		<section class="banner">
			<div class="content-banner">
				<p>ESPACIO DE LITERATURA</p>
				<h2>SOMOS LOS<br />LÍDERES</h2>
				<a href="#">Ver más</a>
			</div>
		</section>

		<main class="main-content">
			<section class="container container-features">
				<div class="card-feature">
					<i class="fa-solid fa-plane-up"></i>
					<div class="feature-content">
						<span>Envío gratuito a nivel mundial</span>
						<p>En pedido superior a $150</p>
					</div>
				</div>
				<div class="card-feature">
					<i class="fa-solid fa-wallet"></i>
					<div class="feature-content">
						<span>Contrareembolso</span>
						<p>100% garantía de devolución de dinero</p>
					</div>
				</div>
				<div class="card-feature">
					<i class="fa-solid fa-gift"></i>
					<div class="feature-content">
						<span>Tarjeta regalo especial</span>
						<p>Ofrece bonos especiales con regalo</p>
					</div>
				</div>
				<div class="card-feature">
					<i class="fa-solid fa-headset"></i>
					<div class="feature-content">
						<span>Servicio al cliente 24/7</span>
						<p>LLámenos 24/7 al 123-456-7890</p>
					</div>
				</div>
			</section>

			<section class="container top-categories">
				<h1 class="heading-1">Temas más Leidos</h1>
				<div class="container-categories">
					<div class="card-category category-moca">
						<p>Ficción y Aventura</p>
						<span>Ver más</span>
					</div>
					<div class="card-category category-expreso">
						<p>Comedia</p>
						<span>Ver más</span>
					</div>
					<div class="card-category category-capuchino">
						<p>Romanticas y fantasia</p>
						<span>Ver más</span>
					</div>
				</div>
			</section>

			<section class="container top-products">
				<h1 class="heading-1">Mejores Libros</h1>

				<div class="container-options">
					<span class="active">Destacados</span>
					<span>Más recientes</span>
					<span>Mejores Leidos</span>
				</div>

				<div class="container-products">
					<!-- Producto 1 -->
					<div class="card-product">
						<div class="container-img">
							<img src="img/cafe-irish.jpg" alt="Cafe Irish" />
							<span class="discount">-13%</span>
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
							<h3>Esferas del Tiempo</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$4.60 <span>$5.30</span></p>
						</div>
					</div>
					<!-- Producto 2 -->
					<div class="card-product">
						<div class="container-img">
							<img
								src="img/cafe-ingles.jpg"
								alt="Cafe incafe-ingles.jpg"
							/>
							<span class="discount">-22%</span>
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
								<i class="fa-regular fa-star"></i>
								<i class="fa-regular fa-star"></i>
							</div>
							<h3>Terabithia</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$5.70 <span>$7.30</span></p>
						</div>
					</div>
					<!--  -->
					<div class="card-product">
						<div class="container-img">
							<img
								src="img/cafe-australiano.jpg"
								alt="Cafe Australiano"
							/>
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
								<i class="fa-solid fa-star"></i>
							</div>
							<h3>La niña que bebio luz de luna</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$3.20</p>
						</div>
					</div>
					<!--  -->
					<div class="card-product">
						<div class="container-img">
							<img src="img/cafe-helado.jpg" alt="Cafe Helado" />
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
							<h3>El viaje de Andres</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$5.60</p>
						</div>
					</div>
				</div>
			</section>

			<section class="gallery">
				<img
					src="img/gallery1.jpg"
					alt="Gallery Img1"
					class="gallery-img-1"
				/><img
					src="img/gallery2.jpg"
					alt="Gallery Img2"
					class="gallery-img-2"
				/><img
					src="img/gallery3.jpg"
					alt="Gallery Img3"
					class="gallery-img-3"
				/><img
					src="img/gallery4.jpg"
					alt="Gallery Img4"
					class="gallery-img-4"
				/><img
					src="img/gallery5.jpg"
					alt="Gallery Img5"
					class="gallery-img-5"
				/>
			</section>

			<section class="container specials">
				<h1 class="heading-1">Libros por Comprar</h1>

				<div class="container-products">
					<!-- Producto 1 -->
					<div class="card-product">
						<div class="container-img">
							<img src="img/libro2.jpg" alt="Cafe Irish" />
							<span class="discount">-13%</span>
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
							<h3>La Sombra del Viento</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$4.60 <span>$5.30</span></p>
						</div>
					</div>
					<!-- Producto 2 -->
					<div class="card-product">
						<div class="container-img">
							<img src="img/libro3.jpg" alt="Cafe incafe-ingles.jpg"/>
							<span class="discount">-22%</span>
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
								<i class="fa-regular fa-star"></i>
								<i class="fa-regular fa-star"></i>
							</div>
							<h3>La Odisea</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$5.70 <span>$7.30</span></p>
						</div>
					</div>
					<!--  -->
					<div class="card-product">
						<div class="container-img">
							<img src="img/libro4.jpg" alt="Cafe Viena" />
							<span class="discount">-30%</span>
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
								<i class="fa-solid fa-star"></i>
							</div>
							<h3>Nada</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$3.85 <span>$5.50</span></p>
						</div>
					</div>
					<!--  -->
					<div class="card-product">
						<div class="container-img">
							<img src="img/libro5.jpg" alt="Cafe Liqueurs" />
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
							<h3>Centro de la Tierra</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$5.60</p>
						</div>
					</div>
				</div>
			</section>
<!-- inicio de blog -->
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
	</body>
</html>