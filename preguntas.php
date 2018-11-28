<?php require_once("config.php");
if ($auth->estaLogueado()) {
  $user = $db->traerPorMail($_SESSION["logueado"]);
}
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/home-index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/home-index.css">
  </head>
  <body>
    <!-- Header -->
    <?php include('main-header.php') ?>
    <!-- --------------- -->

    <!-- Menu-Bar -->
    <?php include('main-nav.php') ?>
    <!-- --------------- -->

    <!-- Contenido-->
  <div class="preguntas">

    <h2 class=titleHome align=center>PREGUNTAS FRECUENTES</h2>
<br>
    <div id="accordion" role="tablist">
      <div class="card">
        <div class="card-header" role="tab" id="headingOne">
          <h5 class="mb-0">
            <a class="collapsed" data-toggle="collapse" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
              <p class="pregunta">¿Como comprar en DH-Electronics?</p>
            </a>
          </h5>
        </div>

        <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne">
          <div class="card-body">
            <p class="respuesta"> Para realizar la compra desde Garbarino.com deberás seguir los siguientes pasos:</p><br>

            <p class="respuesta">1. Seleccioná el producto elegido y hacé click en botón de ' Comprar'. La página te redirecciona al carrito de compras. </p>
            <p class="respuesta">2. Si el producto cuenta con el beneficio de la garantía de reparación podés sumarla en este paso. El costo adicional se acumula al monto del producto.</p>
            <p class="respuesta">3. Seleccioná la forma de entrega:</p>
            <p class="respuesta"> a. Retiro en Sucursal: Podés seleccionar retirar el producto en la sucursal más cercana sin ningún costo adicional.</p>
            <p class="respuesta"> b. Envío a Domicilio: Cargá los datos del domicilio en el que querés recibir tu compra. El costo de envío se calcula en base a la dirección ingresada.</p>
            <p class="respuesta">4. Completá los datos de forma de pago, seleccionando entre las diferentes tarjetas de crédito habilitadas con sus respectivas cuotas y promociones.</p>
            <p class="respuesta">5. Completá los datos del titular de la tarjeta de crédito y el domicilio de facturación.</p>
            <p class="respuesta">a. Si seleccionaste 'Envío a Domicilio' podés elegir la misma dirección sin tener que completarla nuevamente.</p>
            <p class="respuesta">b. Si seleccionaste ' Retiro en Sucursal' necesitamos que completes el formulario para validad tu identidad.</p>
            <p class="respuesta">6. Tu compra se ha realizado con éxito. ¡Sólo resta que recibas o retires tu pedido, según la modalidad de entrega que hayas elegido!.
            Recordá que en caso de haber optado por 'Retiro en Sucursal' con fecha diferida, deberás esperar el e-mail que confirma que tu producto ya está disponible para que lo retires.</p>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" role="tab" id="headingTwo">
          <h5 class="mb-0">
            <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              <p class="pregunta">Conocé los costos de envío</p>
            </a>
          </h5>
        </div>
        <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
          <div class="card-body">
            <p class="respuesta">El costo de envío dentro del Gran Buenos Aires es totalmente GRATUITO !!</p>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" role="tab" id="headingThree">
          <h5 class="mb-0">
            <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            <p class="pregunta">¿Qué incluye el envío a domicilio?</p>
            </a>
          </h5>
        </div>
        <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
          <div class="card-body">
            <p class="respuesta">El traslado del producto hasta el domicilio informado al momento de la compra. La ubicación del producto en el lugar indicado por el receptor, dentro del domicilio, cuando las instalaciones lo permitan. En caso de necesitar ascenso por escaleras, se debe informar al momento de la compra, ya que tiene un costo adicional a partir del 3er piso</p>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" role="tab" id="headingFour">
          <h5 class="mb-0">
            <a class="collapsed" data-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
            <p class="pregunta">Retiro en Sucursal</p>
            </a>
          </h5>
        </div>
        <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour">
          <div class="card-body">
            <p class="respuesta">Al momento de realizar la compra podés optar por la opción 'Retiro en sucursal' y seleccionar la sucursal que te quede más cómoda. Esta opción no tiene ningún costo adicional.</p>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" role="tab" id="headingFive">
          <h5 class="mb-0">
            <a class="collapsed" data-toggle="collapse" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
            <p class="pregunta">¿Puede otra persona retirar mi compra en sucursal?</p>
            </a>
          </h5>
        </div>
        <div id="collapseFive" class="collapse" role="tabpanel" aria-labelledby="headingFive">
          <div class="card-body">
            <p class="respuesta">Solamente el titular de la tarjeta con la que se realizó la compra puede retirar el producto. Debe presentar:</p>
            <p class="respuesta">- Número de pedido de la compra.</p>
            <p class="respuesta">- DNI del Titular de la tarjeta de crédito.</p>
            <p class="respuesta">- Tarjeta de crédito con la que se realizó la compra.</p>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" role="tab" id="headingSix">
          <h5 class="mb-0">
            <a class="collapsed" data-toggle="collapse" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
            <p class="pregunta">¿Puedo pagar con 2 medios de pago?</p>
            </a>
          </h5>
        </div>
        <div id="collapseSix" class="collapse" role="tabpanel" aria-labelledby="headingSix">
          <div class="card-body">
            <p class="respuesta">sólo podés comprar con un medio de pago habilitado. Si querés abonar con 2 medios de pago podés hacerlo en cualquiera de nuestras sucursales o a través de Venta Telefónica al 0810-000-1111 opción 1.</p>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" role="tab" id="headingSeven">
          <h5 class="mb-0">
            <a class="collapsed" data-toggle="collapse" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
            <p class="pregunta">¿Cómo me registro?</p>
            </a>
          </h5>
        </div>
        <div id="collapseSeven" class="collapse" role="tabpanel" aria-labelledby="headingSeven">
          <div class="card-body">
            <p class="respuesta">Registrate en dhelectronics.com y empezá a disfrutar de todos nuestros descuentos y promociones.</p>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" role="tab" id="headingEight">
          <h5 class="mb-0">
            <a class="collapsed" data-toggle="collapse" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
            <p class="pregunta">¿Cómo puedo editar mis datos personales?</p>
            </a>
          </h5>
        </div>
        <div id="collapseEight" class="collapse" role="tabpanel" aria-labelledby="headingEight">
          <div class="card-body">
            <p class="respuesta">Para editar tus datos personales iniciá sesión en tu cuenta de dhelectronics.com y elegí la opción editar perfil.</p>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" role="tab" id="headingNine">
          <h5 class="mb-0">
            <a class="collapsed" data-toggle="collapse" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
            <p class="pregunta">>Información sobre envíos a domicilio</p>
            </a>
          </h5>
        </div>
        <div id="collapseNine" class="collapse" role="tabpanel" aria-labelledby="headingNine">
          <div class="card-body">
            <p class="respuesta">La entrega se realizará en el día, horario y domicilio elegidos durante la compra.

      Recepción del pedido: el receptor deberá ser mayor de 18 años, exhibir DNI y la factura de compra. Para compras vía web, podrá recibirlo el titular o un autorizado registrado durante la compra.

      Podemos desembalar el producto para que verifiques su integridad.

      En todos los envíos a domicilio es necesario que el receptor firme el remito de entrega en papel y/o en la aplicación móvil.</p>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" role="tab" id="headingTen">
          <h5 class="mb-0">
            <a class="collapsed" data-toggle="collapse" href="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
            <p class="pregunta">Tengo problemas con el despacho</p>
            </a>
          </h5>
        </div>
        <div id="collapseTen" class="collapse" role="tabpanel" aria-labelledby="headingTen">
          <div class="card-body">
            <p class="respuesta">Si tienes algún tipo comunicate con nosotros al Telefóno al 0810-000-1111 opción 2.</p>
          </div>
        </div>
      </div>

    </div>

<br><br><br>
<base href="#" target="_blank">

  </div>
    <!-- --------------- -->

    <!-- Aside-Bar -->
    <?php include('aside.php') ?>
    <!-- --------------- -->

    <!-- Header -->
    <?php include('main-footer.php') ?>
    <!-- --------------- -->

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>
