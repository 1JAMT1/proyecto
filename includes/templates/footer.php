<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/espaciodeliteratura/css/gotop.css">
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
							<li><a href="#" onclick="openPopup1()">Información Delivery</a></li>
							<li><a href="#" onclick="openPopup2()">Politicas de Privacidad</a></li>
							<li><a href="#" onclick="openPopup3()">Términos y condiciones</a></li>
							<li><a href="/espaciodeliteratura/CONTACTANOS.php">Contactános</a></li>
						</ul>
					</div>

					<div class="my-account">
						<p class="title-footer">Mi cuenta</p>

						<ul>
							<li><a href="/espaciodeliteratura/admin/usuario/index.php">Mi cuenta</a></li>
							<li><a href="/espaciodeliteratura/admin/pedido/listado.php">Historial de ordenes</a></li>
							<li><a href="#">Lista de deseos</a></li>
							<li><a href="#" onclick="openPopup5()">Boletín</a></li>
							<li><a href="#" onclick="openPopup6()">Reembolsos</a></li>
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
							<button>Suscríbete</button>
						</div>
					</div>
				</div>

				<div class="copyright">
					<p>
						Desarrollado por G1
					</p>

					<img src="img/payment.png" href="#" onclick="openPopup9()" alt="Pagos">
				</div>
			</div>
	    		<script src="/espaciodeliteratura/js/gotop.js"></script>
			<script>
        		function openPopup1() {
        		var url = 'delivery.php'
        		var opciones = 'width=400,height=400,scrollbars=yes,resizable=yes';
        		window.open(url, '_blank', opciones);
        		}
			</script>
			<script>
        		function openPopup2() {
        		var url = 'privacidad.php'
        		var opciones = 'width=400,height=400,scrollbars=yes,resizable=yes';
        		window.open(url, '_blank', opciones);
        		}
			</script>
			<script>
        		function openPopup3() {
        		var url = 'terminos.php'
        		var opciones = 'width=400,height=400,scrollbars=yes,resizable=yes';
        		window.open(url, '_blank', opciones);
        		}
			</script>
			<script>
        		function openPopup5() {
        		var url = 'boletin.php'
        		var opciones = 'width=400,height=400,scrollbars=yes,resizable=yes';
        		window.open(url, '_blank', opciones);
        		}
			</script>
			<script>
        		function openPopup6() {
        		var url = 'reembolsos.php'
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
	</footer>
</body>
</html>
