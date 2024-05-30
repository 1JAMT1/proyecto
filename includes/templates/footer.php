<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<link rel="stylesheet" href="/espaciodeliteratura/css/gotop.css">
	<link rel="stylesheet" href="/espaciodeliteratura/styles.css">
	<link rel="stylesheet" href="/espaciodeliteratura/estilos.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
	<div class="go-top-container">
		<div class="go-top-button">
			<i class="fas fa-chevron-up"></i>
		</div>
	</div>
    <footer class="footer">
			<div class="container container-footer">
				<div class="menu-footer">
					<div class="contact-info">
						<p class="title-footer">Información de Contacto</p>
						<ul>
							<li>
								Dirección: 777 LA paz bo, 
							</li>
							<li>Teléfono: 1234567890</li>
							<li>Fax: 4444444444</li>
							<li>EmaiL: pepito@support.com</li>
						</ul>
						<div class="social-icons">
							<span class="facebook">
								<a href="https://www.facebook.com/Librosyliteratura/?locale=es_LA"><i class="fa-brands fa-facebook-f"></i></a>
							</span>
							<span class="twitter">
								<a href="https://x.com/librosylit?lang=es"><i class="fa-brands fa-twitter"></i></a>
							</span>
							<span class="youtube">
								<a href="https://www.youtube.com/@AMAAudiolibros"><i class="fa-brands fa-youtube"></i></a>
							</span>
							<span class="pinterest">
								<a href="https://ar.pinterest.com/elsicat/libros/"><i class="fa-brands fa-pinterest-p"></i></a>
							</span>
							<span class="instagram">
								<a href="https://www.instagram.com/librosylit/?hl=es"><i class="fa-brands fa-instagram"></i></a>
							</span>
						</div>
					</div>

					<div class="information">
						<p class="title-footer">Información</p>
						<ul>
							<li><a href="/espaciodeliteratura/QUIENES SOMOS.php">Acerca de Nosotros</a></li>
							<li><a href="/espaciodeliteratura/delivery.php">Información Delivery</a></li>
							<li><a href="/espaciodeliteratura/privacidad.php">Politicas de Privacidad</a></li>
							<li><a href="/espaciodeliteratura/terminos.php">Términos y condiciones</a></li>
							<li><a href="/espaciodeliteratura/CONTACTANOS.php">Contactános</a></li>
						</ul>
					</div>

					<div class="my-account">
						<p class="title-footer">Mi cuenta</p>

						<ul>
							<li><a href="/espaciodeliteratura/admin/usuario/index.php">Mi cuenta</a></li>
							<li><a href="/espaciodeliteratura/admin/pedido/listado.php">Historial de ordenes</a></li>
							<li><a href="/espaciodeliteratura/boletin.php">Boletín</a></li>
							<li><a href="/espaciodeliteratura/reembolsos.php">Reembolsos</a></li>
						</ul>
					</div>

					<div class="newsletter">
						<p class="title-footer">Boletín informativo</p>

						<div class="content">
							<p>
								Suscríbete a nuestros boletines ahora y mantente al
								día con nuevas colecciones y ofertas exclusivas.
							</p>
							<input type="email" placeholder="Ingresa el correo aquí...">
							<button onclick="openPopup1()">Suscríbete</button>
						</div>
					</div>
				</div>

				<div class="copyright">
					<p>
						Desarrollado por G1
					</p>

					<img src="/espaciodeliteratura/img/payment.png" onclick="openPopup9()">
				</div>
			</div>
			<script src="/espaciodeliteratura/js/gotop.js"></script>
			<script>
        		function openPopup1() {
        		var url = 'suscribete.php'
        		var opciones = 'width=400,height=400,scrollbars=yes,resizable=yes';
        		window.open(url, '_blank', opciones);
        		}
			</script>
			<script>
        		function openPopup9() {
        		var url = 'pagos.php'
        		var opciones = 'width=400,height=400,scrollbars=yes,resizable=yes';
        		window.open(url, '_blank', opciones);
        		}
			</script>
			<script
			src="https://kit.fontawesome.com/81581fb069.js"
			></script>
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

	</footer>
</body>
</html>