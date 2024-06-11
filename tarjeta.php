<?php
    $inicio=false;
    include "includes/templates/header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tarjeta.css">

</head>
<body>
    <div class="container">
        <form action="">
            <div class="row">
                <div class="col">
                    <h3 class="title">Dirección de Facturación</h3>

                    <div class="inputBox">
                        <span>Nombre Completo :</span>
                        <input type="text" placeholder="john deo">
                    </div>
                    <div class="inputBox">
                        <span>Email :</span>
                        <input type="email" placeholder="example@example.come">
                    </div>
                    <div class="inputBox">
                        <span>Dirección :</span>
                        <input type="text" placeholder="room - street - locality">
                    </div>
                    <div class="inputBox">
                        <span>Ciudad :</span>
                        <input type="text" placeholder="mumbai">
                    </div>

                    <div class="flex">
                        <div class="inputBox">
                            <span>Estado :</span>
                            <input type="text" placeholder="india">
                        </div>
                        <div class="inputBox">
                            <span>Código Postal :</span>
                            <input type="text" placeholder="123 456">
                        </div>
                    </div>
                </div>

                <div class="col">
                    <h3 class="title">Pago</h3>

                    <div class="inputBox">
                        <span>Tarjetas Aceptadas :</span>
                        <img src="/espaciodeliteratura/img/payment.png" alt="">
                    </div>
                    <div class="inputBox">
                        <span>Recargar Saldo :</span>
                        <input type="decimal" placeholder="mr. john deo">
                    </div>
                    <div class="inputBox">
                        <span>Número de Tarjeta de Crédito :</span>
                        <input type="number" placeholder="1111-2222-3333-4444">
                    </div>
                    <div class="inputBox">
                        <span>Mes de Vencimiento :</span>
                        <input type="text" placeholder="january">
                    </div>

                    <div class="flex">
                        <div class="inputBox">
                            <span>Año de Vencimiento :</span>
                            <input type="text" placeholder="2022">
                        </div>
                        <div class="inputBox">
                            <span>CW :</span>
                            <input type="text" placeholder="1234">
                        </div>
                    </div>
                </div>
            </div>
            <input type="submit" value="proceed to checkout" class="submit-btn">
        </form>
    </div>
</body>
</html>
<?php 
		include "../espaciodeliteratura/includes/templates/footer.php";  
?>
