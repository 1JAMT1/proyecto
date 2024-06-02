<?php
    $inicio=false;
    include "../espaciodeliteratura/includes/templates/header.php";
?>
        <section class="banner">
			<div class="content-banner">
				<p>Contactanos</p>
				<h2>Para contactarnos por favor haga clic en el enlace! <br /></h2>
				<a href="#" onclick="openPopup6()">enlace</a>
			</div>
		</section>

        <?php 
		include "../espaciodeliteratura/includes/templates/footer.php";  
		?>
		<script
			src="https://kit.fontawesome.com/81581fb069.js"
		></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script>
        function openPopup6() {
        var url = 'contacta.php'
        var opciones = 'width=400,height=400,scrollbars=yes,resizable=yes';
        window.open(url, '_blank', opciones);
        }
</script>
