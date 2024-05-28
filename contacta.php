<?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $user = filter_var($_POST['Nombre'], FILTER_SANITIZE_STRING);
        $mail = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $cell = filter_var($_POST['Celular'], FILTER_SANITIZE_NUMBER_INT);
        $msg  = filter_var($_POST['Mensaje'], FILTER_SANITIZE_STRING);
        
        $formErrors = array();
        if (strlen($user) <= 3) {
            $formErrors[] = 'Nombre tiene que ser más largo que<strong>3</strong> Caracteres';
        }
        if (strlen($msg) < 10) {
            $formErrors[] = 'El mensaje no puede ser más pequeño que <strong>10</strong> Caracteres'; 
        }
        
        $headers = 'From: ' . $mail . '\r\n';
        $myEmail = 'pepito.@gmail.com';
        $subject = 'Contact Form';
        
        if (empty($formErrors)) {
            
            mail($myEmail, $subject, $msg, $headers);
            
            $user = '';
            $mail = '';
            $cell = '';
            $msg = '';
            
            $success = '<div class="alert alert-success">Se ha enviado correctamente su mensaje</div>';
            
        }
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contactanos</title>
    <link rel="stylesheet" href="cssc/bootstrap.min.css" />
    <link rel="stylesheet" href="cssc/font-awesome.min.css" />
    <link rel="stylesheet" href="cssc/contact.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,700,900,900i">
</head>
<body> 
    <div class="container">
        <h1 class="titulo-contacto text-center">Contactanos</h1>
        <form class="contact-form" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            <?php if (!empty($formErrors)) { ?>
            <div class="alert alert-danger alert-dismissible" role="start">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <?php
                foreach ($formErrors as $error) {
                    echo $error . '<br/>';
                }
                ?>
            </div>
            <?php } ?>
            <?php if (isset($success)) {
                echo $success;
            } ?>
            <div class="form-group">
                <input class="username form-control" type="text" name="Nombre" placeholder="Escriba su nombre" value="<?php if (isset($user)) {
                                                                                                                                echo $user;
                                                                                                                            } ?>" />
                <i class="fa fa-user fa-fw"></i>
                <span class="asterisx">*</span>
                <div class="alert alert-danger custom-alert">
                    Nombre tiene que ser más largo que <strong>3</strong> Caracteres
                </div>
            </div>
            <div class="form-group">
                <input class="email form-control" type="email" name="email" placeholder="Escriba su email" value="<?php if (isset($mail)) {
                                                                                                                            echo $mail;
                                                                                                                        } ?>" />
                <i class="fa fa-envelope fa-fw"></i>
                <span class="asterisx">*</span>
                <div class="alert alert-danger custom-alert">
                    El email no puede estar <strong>vacio</strong>
                </div>
            </div>
            <input class="form-control" type="text" name="Celular" placeholder="Escriba su numero de telefono" value="<?php if (isset($cell)) {
                                                                                                                                echo $cell;
                                                                                                                            } ?>" />
            <i class="fa fa-phone fa-fw"></i>
            <div class="form-group">
                <textarea class="message form-control" name="Mensaje" placeholder="Escriba su mensaje!"><?php if (isset($msg)) {
                                                                                                            echo $msg;
                                                                                                        } ?></textarea>
                <span class="asterisx">*</span>
                <div class="alert alert-danger custom-alert">
                    El mensaje no puede ser menor a <strong>10</strong> Caracteres
                </div>
            </div>
            <input class="btn btn-success" type="submit" value="Send Message" />
            <i class="fa fa-send fa-fw send-icon"></i>
        </form>
    </div>

    <script src="jsc/jquery-1.12.4.min.js"></script>
    <script src="jsc/bootstrap.min.js"></script>
    <script src="jsc/custom.js"></script>
</body>
</html>
