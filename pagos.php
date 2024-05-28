<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Carrito</title>
<link rel="stylesheet" href="css/bootstrap-min.css">
<link rel="stylesheet" href="cssc/font-awesome.min.css" />
<link rel="stylesheet" href="cssc/contact.css" />
<link rel="stylesheet" href="css/bootstrap-formhelpers-min.css" media="screen">
<link rel="stylesheet" href="css/bootstrapValidator-min.css"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,700,900,900i">
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" />
<link rel="stylesheet" href="css/bootstrap-side-notes.css" />
<style type="text/css">
.col-centered {
    display:inline-block;
    float:none;
    text-align:left;
    margin-right:-4px;
}
.row-centered {
	margin-left: 9px;
	margin-right: 9px;
}
</style>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/bootstrap-min.js"></script>
<script src="js/bootstrap-formhelpers-min.js"></script>
<script type="text/javascript" src="js/bootstrapValidator-min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('#payment-form').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
		submitHandler: function(validator, form, submitButton) {
                    Stripe.card.createToken({
                        number: $('.card-number').val(),
                        cvc: $('.card-cvc').val(),
                        exp_month: $('.card-expiry-month').val(),
                        exp_year: $('.card-expiry-year').val(),
			name: $('.card-holder-name').val(),
			address_line1: $('.address').val(),
			address_city: $('.city').val(),
			address_zip: $('.zip').val(),
			address_state: $('.state').val(),
			address_country: $('.country').val()
                    }, stripeResponseHandler);
                    return false; 
        },
        fields: {
            street: {
                validators: {
                    notEmpty: {
                        message: 'La calle se requiere y no puede estar vacio'
                    },
					stringLength: {
                        min: 6,
                        max: 96,
                        message: 'La calle debe tener 6 y menos de 96 caracteres de largo'
                    }
                }
            },
            city: {
                validators: {
                    notEmpty: {
                        message: 'La ciudad se requiere y no puede estar vacio'
                    }
                }
            },
			zip: {
                validators: {
                    notEmpty: {
                        message: 'El codigo postal se requiere y no puede estar vacio'
                    },
					stringLength: {
                        min: 3,
                        max: 9,
                        message: 'El codigo postal debe tener más de 3 y menos de 9 caracteres de largo'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'La dirección del correo se requiere y no se puede dejar vacio'
                    },
                    emailAddress: {
                        message: 'Se ingreso un correo no valido'
                    },
					stringLength: {
                        min: 6,
                        max: 65,
                        message: 'The email must be more than 6 and less than 65 characters long'
                    }
                }
            },
			cardholdername: {
                validators: {
                    notEmpty: {
                        message: 'El titular se requiere y no se puede dejar vacio'
                    },
					stringLength: {
                        min: 6,
                        max: 70,
                        message: 'El titular debe contener almenos más de 6 y menos de 70 caracteres de largo'
                    }
                }
            },
			cardnumber: {
		selector: '#cardnumber',
                validators: {
                    notEmpty: {
                        message: 'El numero de tarjeta se requiere y no se puede dejar vacio'
                    },
					creditCard: {
						message: 'El numero de tarjeta es invalido'
					},
                }
            },
			expMonth: {
                selector: '[data-stripe="exp-month"]',
                validators: {
                    notEmpty: {
                        message: 'El mes de expiracion es requerido'
                    },
                    digits: {
                        message: 'El mes de expiracion contiene solo digitos'
                    },
                    callback: {
                        message: 'Expired',
                        callback: function(value, validator) {
                            value = parseInt(value, 10);
                            var year         = validator.getFieldElements('expYear').val(),
                                currentMonth = new Date().getMonth() + 1,
                                currentYear  = new Date().getFullYear();
                            if (value < 0 || value > 12) {
                                return false;
                            }
                            if (year == '') {
                                return true;
                            }
                            year = parseInt(year, 10);
                            if (year > currentYear || (year == currentYear && value > currentMonth)) {
                                validator.updateStatus('expYear', 'VALID');
                                return true;
                            } else {
                                return false;
                            }
                        }
                    }
                }
            },
            expYear: {
                selector: '[data-stripe="exp-year"]',
                validators: {
                    notEmpty: {
                        message: 'La expiracion del año es requerida'
                    },
                    digits: {
                        message: 'La expiracion del año debe contener solo digitos'
                    },
                    callback: {
                        message: 'Expired',
                        callback: function(value, validator) {
                            value = parseInt(value, 10);
                            var month        = validator.getFieldElements('expMonth').val(),
                                currentMonth = new Date().getMonth() + 1,
                                currentYear  = new Date().getFullYear();
                            if (value < currentYear || value > currentYear + 100) {
                                return false;
                            }
                            if (month == '') {
                                return false;
                            }
                            month = parseInt(month, 10);
                            if (value > currentYear || (value == currentYear && month > currentMonth)) {
                                validator.updateStatus('expMonth', 'VALID');
                                return true;
                            } else {
                                return false;
                            }
                        }
                    }
                }
            },
			cvv: {
		selector: '#cvv',
                validators: {
                    notEmpty: {
                        message: 'El cvv es requerido y no puede estar vacio'
                    },
					cvv: {
                        message: 'El valor no es valido, valido es CVV',
                        creditCardField: 'numtarjeta'
                    }
                }
            },
        }
    });
});
</script>
<script type="text/javascript">
            
            Stripe.setPublishableKey('pk_test_xxx');
 
            function stripeResponseHandler(status, response) {
                if (response.error) {
                    
                    $('.submit-button').removeAttr("disabled");
					
					document.getElementById('a_x200').style.display = 'block';
                    
                    $(".payment-errors").html(response.error.message);
                } else {
                    var form$ = $("#payment-form");
                    
                    var token = response['id'];
                    
                    form$.append("<input type='hidden' name='stripeToken' value='" + token + "' />");
                    
                    form$.get(0).submit();
                }
            }
 

</script>
</head>
<body>
<form action="" method="POST" id="payment-form" class="form-horizontal">
  <div class="row row-centered">
  <div class="col-md-4 col-md-offset-4">
  <div class="page-header">
    <h2 class="titulo-contacto text-center">PAGOS</h2>
  </div>
  <noscript>
  <div class="bs-callout bs-callout-danger">
    <h4>JavaScript no esta habilitado!</h4>
    <p>Este formulario de pago requiere que su navegador tenga JavaScript habilitado. Por favor active JavaScript y vuelva a cargar esta página. Revisar <a href="http://enable-javascript.com" target="_blank">enable-javascript.com</a> for more informations.</p>
  </div>
  </noscript>
  <?php
require 'lib/Stripe.php';

$error = '';
$success = '';
	  
if ($_POST) {
    \Stripe\Stripe::setApiKey("sk_test_xxx");
  
    try {
      if (empty($_POST['street']) || empty($_POST['city']) || empty($_POST['zip'])) {
        throw new Exception("Por favor llene esto.");
      }
      if (!isset($_POST['stripeToken'])) {
        throw new Exception("The Stripe Token was not generated correctly");
      }
                  
      \Stripe\Charge::create([
        "amount" => 3000,
        "currency" => "bs",
        "source"   => $_POST['stripeToken'], 
        "description" => $_POST['email']
      ]);
                                  
      $success = '<div class="alert alert-success">
                  <strong>Success!</strong> Su pago fue exitoso.
                  </div>';
    } catch (Exception $e) {
      $error = '<div class="alert alert-danger">
                <strong>Error!</strong> '.$e->getMessage().'
                </div>';
    }
  }
  
?>
  <div class="alert alert-danger" id="a_x200" style="display: none;"> <strong>Error!</strong> <span class="payment-errors"></span> </div>
  <span class="payment-success">
  <?= $success ?>
  <?= $error ?>
  </span>
  <fieldset>
  
  
  <legend>Detalles</legend>
  
  <div class="form-group">
    <label class="col-sm-4 control-label" for="textinput">Pais</label>
    <div class="col-sm-6"> 
 
      <div class="country bfh-selectbox bfh-countries" name="country" placeholder="Select Country" data-flags="true" data-filter="true"> </div>
    </div>
  </div>
  
  <div class="form-group">
    <label class="col-sm-4 control-label" for="textinput">Email</label>
    <div class="col-sm-6">
      <input type="text" name="email" maxlength="65" placeholder="Email" class="email form-control">
    </div>
  </div>
  </fieldset>
  <fieldset>
    <legend>Detalles de Tarjeta</legend>
    
    <div class="form-group">
      <label class="col-sm-4 control-label"  for="textinput">Nombre del Titular</label>
      <div class="col-sm-6">
        <input type="text" name="cardholdername" maxlength="70" placeholder="Card Holder Name" class="card-holder-name form-control">
      </div>
    </div>
    
    <div class="form-group">
      <label class="col-sm-4 control-label" for="textinput">Número de Tarjeta</label>
      <div class="col-sm-6">
        <input type="text" id="cardnumber" maxlength="19" placeholder="Card Number" class="card-number form-control">
      </div>
    </div>
    
    <div class="form-group">
      <label class="col-sm-4 control-label" for="textinput">Fecha de Expiración</label>
      <div class="col-sm-6">
        <div class="form-inline">
          <select name="select2" data-stripe="exp-month" class="card-expiry-month stripe-sensitive required form-control">
            <option value="01" selected="selected">01</option>
            <option value="02">02</option>
            <option value="03">03</option>
            <option value="04">04</option>
            <option value="05">05</option>
            <option value="06">06</option>
            <option value="07">07</option>
            <option value="08">08</option>
            <option value="09">09</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
          </select>
          <span> / </span>
          <select name="select2" data-stripe="exp-year" class="card-expiry-year stripe-sensitive required form-control">
          </select>
          <script type="text/javascript">
            var select = $(".card-expiry-year"),
            year = new Date().getFullYear();
 
            for (var i = 0; i < 12; i++) {
                select.append($("<option value='"+(i + year)+"' "+(i === 0 ? "selected" : "")+">"+(i + year)+"</option>"))
            }
        </script> 
        </div>
      </div>
    </div>
    
    <div class="form-group">
      <label class="col-sm-4 control-label" for="textinput">CVV/CVV2</label>
      <div class="col-sm-3">
        <input type="text" id="cvv" placeholder="CVV" maxlength="4" class="card-cvc form-control">
      </div>
    </div>
    
    <div class="form-group">
    <div class="panel panel-success">
      <div class="panel-heading">
        <h3 class="panel-title">Anuncio Importante</h3>
      </div>
      <div class="panel-body">
        <p>A su tarjeta se le va a cargar unos 15bs despues de enviar</p>
        <p>Su estado de cuenta mostrará el siguiente texto de reserva:
          XXXXXXX </p>
      </div>
    </div>
    
    <div class="control-group">
      <div class="controls">
        <center>
          <button class="btn btn-success" type="Enviar">Pagar ahora</button>
        </center>
      </div>
    </div>
  </fieldset>
  <script src="jsc/jquery-1.12.4.min.js"></script>
  <script src="jsc/bootstrap.min.js"></script>
  <script src="jsc/custom.js"></script>
</form>
</body>
</html>
