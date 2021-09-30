<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
    $pResUrl = './';
    $pRootUrl = '../../../';
}
if ($_GET['action'] == 'getPacks') {
    $date = $_GET['d'];
    $c_name = 'esdbrc_p' . $date;
    $c_name_t = 'esdbrc_t' . $date;
    if ($_COOKIE[$c_name] === null) {
        $totalNum = $packsNum = rand(78, 98);
        setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
        setcookie($c_name_t, $totalNum, time() + 3600 * 24 * 2);
    } else {
        if (intval($_COOKIE[$c_name]) <= 0) {
            $packsNum = 0;
            setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
        } else {
            $packsNum = $_COOKIE[$c_name] - 1;
            setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
        }
    }
    echo json_encode(array('packsNum' => $packsNum));
    exit();
}

$viewNum = rand(99, 156);
if ($_GET['action'] == 'getViewNum') {
    echo $viewNum;
    exit();
}
include $pRootUrl . 'include/common.inc.php';

function paramDeal($num)
{
    return (intval($num) > 0) ? ('<span class="dataNum">' . number_format(intval($num)) . '</span>') : '';
}

$paramData = json_decode(base64_decode($_GET['udata']));

$refStr = empty($_GET['to']) ? '' : ('-' . $_GET['to']);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="IE=Edge,chrome=1">
  <title>Consigue Driver Booster 7 PRO con 0€</title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css') ?>" rel="stylesheet">
    <?php echo $gJavascript['public']; ?>
    <?php echo $gJavascript['head']; ?>
</head>
<body>
<!-- banner start -->
<div class="banner">
  <div class="wrapper">
    <a class="logo" href="https://www.iobit.com/es/index.php" target="_blank">
      <img src="<?php echo getStaticUrl('images/logo.png') ?>" alt="IObit" />
    </a>
    <p class="name">Driver Booster 7 PRO</p>
    <h1>COMIENZA LA PREVENTA</h1>
    <div class="offer clearfix">
      <div class="left fl">
        <img src="<?php echo getStaticUrl('images/db-box.png') ?>" alt="Driver Booster PRO" />
      </div>
      <div class="right fl">
        <h2>PARA LOS PRIMEROS <big>1,000</big> CLIENTES DE CADA DÍA</h2>
        <div class="numbox">
          <h3>
            Sólo quedan
            <span id="topNum" class="giftNum">
                <b class="nwrap"><b class="numlist"></b></b>
                <b class="nwrap"><b class="numlist"></b></b>
                <b class="nwrap"><b class="numlist"></b></b>
                <b class="nwrap"><b class="numlist"></b></b>
              </span>
          </h3>
          <p><span class="buyNum"><?php echo $viewNum; ?></span> usuarios están viendo esta página ahora</p>
        </div>
        <ul class="price clearfix">
          <li class="first"><strong>0
              <small>€</small>
            </strong></li>
          <li class="last">
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=es-db7preorder&ref=es_db7preorderofficial<?php echo $refStr; ?>&aff=<?php echo $_GET['aff'] ?>&refs=es_purchase_db"
               onclick="ga('send', 'event', 'dbbuy', 'buy', 'db7preorderofficial-es');">
              Resérvalo ahora
            </a>
          </li>
      </div>
    </div>
  </div>
</div>
<!-- banner end -->

<!-- function-wrap start -->
<div class="function-wrap">
  <div class="wrapper">
    <h2 class="why">
      El mejor Actualizador de controladores con <br> todas las siguientes funciones:<span class="arrow-wrap"><i class="top"></i><i class="bot"></i></span>
    </h2>
    <div class="db-message">
      <h2>Proceso de actualización inteligente para mantener <span>3,500,000</span> controladores actualizados </h2>
      <div class="screenshot">
        <img src="<?php echo getStaticUrl('images/screenshot.png') ?>" alt="" class="img-box">
        <div class="maglist one">
          <h3>Actualización <big>automática </big> de controladores </h3>
          <span class="tag">solo la versión PRO</span>
          <p>
            Detecta automáticamente el estado del controlador y actualiza automáticamente controladores durante el tiempo de inactividad del sistema.
          </p>
        </div>
        <div class="maglist two">
          <h3>Actualización <big>rápida</big> de controladores </h3>
          <span class="tag">solo la versión PRO</span>
          <p>
            Desbloquea la velocidad de descarga del controlador para ahorrar tiempo.
          </p>
        </div>
        <div class="maglist three">

          <h3>Actualización de controladores <big>segura</big></h3>
          <span class="tag">solo la versión PRO</span>
          <p>Crea un punto de restauración del sistema y hace una copia de seguridad de los controladores anteriores antes de actualizar, garantizando una actualización segura y evitando cualquier cosa inesperada.</p>

        </div>
      </div>
    </div>
    <div class="db-feature">
      <h2>Es más que un simple actualizador de Drivers </h2>
      <div class="featlist one">
        <div class="inner">
          <img src="<?php echo getStaticUrl('images/feature-icons01.png') ?>" alt="" />
          <h3>Mejora el rendimiento<br> de los juegos</h3>
          <span class="tag">solo la versión PRO</span>
          <p>Mantiene los controladores de game-ready actualizados y te recomienda componentes de juego adecuados para reparar la carga lenta y el bajo rendimiento de los juegos.</p>
        </div>
      </div>
      <div class="featlist two">
        <div class="inner">
          <img src="<?php echo getStaticUrl('images/feature-icons02.png') ?>" alt="" />
          <h3>Repara problemas de hardware</h3>
          <span class="tag">solo la versión PRO</span>
          <p>Solo 1 clic para detectar y reparar errores del dispositivo como: “Windows no puede identificar un dispositivo, el dispositivo está deshabilitado o el dispositivo no puede funcionar”, etc.</p>
        </div>
      </div>
      <div class="featlist three">
        <div class="inner">
          <img src="<?php echo getStaticUrl('images/feature-icons03.png') ?>" alt="" />
          <h3>Evita información <br> molesta </h3>
          <span class="tag red">Nuevo</span>
          <p>Silencia automáticamente todas las notificaciones de Driver Booster cuando se ejecuta una tarea de pantalla completa o un programa especificado.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- function-wrap end -->

<!-- review start -->
<div class="review wrapper">
  <h2>Comentarios: </h2>
  <div id="dg-container" class="dg-container">
    <div class="nav">
      <span class="dg-prev"></span>
      <span class="dg-next"></span>
    </div>
    <div class="content dg-wrapper">
      <dl class="reviews">
        <dt><img src="<?php echo getStaticUrl('images/pc.png') ?>" alt=""></dt>
        <dd>
          <h2>Comentarios mediáticos</h2>
          <h4></h4>
          <p>
            "IObit ofrece muchas utilidades y Driver Booster PRO, que actualiza automáticamente tus drivers, es uno de los mejores. La funcionalidad simple de Driver Booster PRO se hace aún más atractiva gracias a la inclusión de múltiples licencias a un precio muy económico, así como una interfaz personalizable que hace un buen trabajo al mostrar información específica relacionada con el hardware. Competidores como Ashampoo Driver Updater y SlimWare Utilities DriverUpdate ofrecen características atractivas, pero IObit Driver Booster PRO lidera el mercado."
          </p>
          <cite>PC Magazine</cite>
        </dd>
      </dl>
      <dl class="reviews">
        <dt><img src="<?php echo getStaticUrl('images/dunston-diaz.png') ?>" alt="Dunston Diaz"></dt>
        <dd>
          <h2>Comentarios del usuario</h2>
          <h4></h4>
          <p>
            "Lo primero quería recalcar que es un programa muy ligero y fácil de usar. Normalmente ejecuto actualizaciones de Windows diariamente para conseguir los últimos controladores pero Driver Booster actualiza y corrige todos los problemas de mis drivers de manera más precisa y mejor que las actualizaciones de Windows. Estoy realmente impresionado con este software y lo recomiendo como el gran producto que es."
          </p>
          <cite>Dunston Diaz</cite>
        </dd>
      </dl>
      <dl class="reviews">
        <dt><img src="<?php echo getStaticUrl('images/harold-barr.png') ?>" alt="Harold Barr"></dt>
        <dd>
          <h2>Comentarios del usuario</h2>
          <h4></h4>
          <p>
            "Que sorpresa haber recibido la nueva versión de Driver Booster de IObit. Una vez lo he instalado y ha empezado a actualizar me he dado cuenta de que no tenía ni idea de la cantidad de programas de mi PC que tenía que actualizar. Ahora que están todos actualizados, mi PC vuelve a funcionar como si estuviera nuevo, increíble!"
          </p>
          <cite>Harold Barr</cite>
        </dd>
      </dl>
      <dl class="reviews">
        <dt><img src="<?php echo getStaticUrl('images/hishaam-salasa.png') ?>" alt="Hishaam Salasa"></dt>
        <dd>
          <h2>Comentarios del usuario</h2>
          <h4></h4>
          <p>
            "Verdaderamente el mejor actualizador de drivers del Mercado. Es fácil de usar, y tiene una interfaz simple que hace su trabajo mejor que cualquier aplicación que haya usado antes. Este programa se merece 5 estrellas, altamente recomendado!"
          </p>
          <cite>Hishaam Salasa</cite>
        </dd>
      </dl>
      <dl class="reviews">
        <dt><img src="<?php echo getStaticUrl('images/carlos-alexandre.png') ?>" alt="Carlos Alexandre Veríssimo"></dt>
        <dd>
          <h2>Comentarios del usuario</h2>
          <h4></h4>
          <p>
            "Me ayudó a solucionar los problemas de lentitud de mi portátil gamer sin dejar de funcionar. A veces cuando he intentado actualizar los drivers, mi ordenador dejaba de funcionar y tenía que formatear para restaurar todas las funciones. Eso con DB7 no pasa y además es fácil de usar y las descargas son rápidas, sinceramente una de las mejores herramientas que hay en el mercado hoy en día."
          </p>
          <cite>Carlos Alexandre Veríssimo</cite>
        </dd>
      </dl>
    </div>
  </div>
</div>
<!-- review end -->

<!-- awards start -->
<div class="awards">
  <div class="wrapper">
    <h2>Premios a Nivel Mundial</h2>
    <p>
      Hemos sido premiados y contamos con la confianza de los medios de comunicación líderes del mercado durante los últimos 6 años, ahora ya puedes estar seguro de que has elegido el mejor actualizador de drivers
    </p>
    <img src="<?php echo getStaticUrl('images/awards.png') ?>" alt="" />
  </div>
</div>
<!-- awards end -->

<!-- bottom start -->
<div class="bottom">
  <div class="wrapper">
    <!-- service start -->
    <div class="service clearfix">
      <dl class="fl">
        <dt><img src="<?php echo getStaticUrl('images/moneyback.png') ?>" alt=""></dt>
        <dd>
          <h4>
            Pruébelo SIN RIESGO - con nuestra garantía de devolución <br>
            de dinero de 60 días
          </h4>
          <p>
            Estamos seguros de que activando la versión PRO te olvidarás de tus dolores de cabeza a la hora de actualizar tus drivers por un precio asequible
          </p>
        </dd>
      </dl>
      <dl class="fr">
        <dd>
          <h4>Aceptamos</h4>
        </dd>
        <dt><img src="<?php echo getStaticUrl('images/payments.png') ?>" alt=""></dt>
      </dl>
    </div>
    <!-- service end -->

    <!-- footer start -->
    <div class="footer">
      <dl>
        <dt>Nota:</dt>
        <dd>
          *.Al final de los 30 días gratuitos del periodo de prueba, se te cargarán 19,99€ automáticamente a tu cuenta de PayPal o tarjeta de crédito. Esto supone un 73% de descuento sobre el precio original de 74,85€, el cual sólo podrán obtener los usuarios que lo reserven por adelantado.
        </dd>
      </dl>
      <p>Copyright © 2005 - <?php echo date('Y') ?> IObit. Todos los derechos reservados</p>
    </div>
    <!-- footer end -->
  </div>
</div>
<!-- bottom end -->

<!-- float start -->
<div class="floatlayer clearfix">
  <div class="wrapper clearfix">
    <div class="left fl">
      <img src="<?php echo getStaticUrl('images/db-small-box.png') ?>" alt="Driver Booster PRO" />
    </div>
    <div class="numbox fl">
      <h3>
        Date prisa, sólo quedan
        <span id="botNum" class="giftNum">
          <b class="nwrap"><b class="numlist"></b></b>
          <b class="nwrap"><b class="numlist"></b></b>
          <b class="nwrap"><b class="numlist"></b></b>
          <b class="nwrap"><b class="numlist"></b></b>
        </span>
      </h3>
      <p><span class="buyNum"><?php echo $viewNum; ?></span> usuarios están viendo</p>
    </div>
    <ul class="price fr">
      <li class="first"><strong>0
          <small>€</small>
        </strong></li>
      <li class="last">
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=es-db7preorder&ref=es_db7preorderofficial<?php echo $refStr; ?>&aff=<?php echo $_GET['aff'] ?>&refs=es_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'db7preorderofficial-es');">
          Resérvalo ahora
        </a>
      </li>
    </ul>
  </div>
</div>
<!-- float end -->

<script>refStr = '<?php echo $refStr;?>';</script>
<script src="<?php echo $pRootUrl; ?>tpl/js/modernizr.min.js"></script>
<script src="<?php echo $pRootUrl; ?>tpl/js/review-3d-carousel.min.js"></script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js') ?>"></script>
<script src="<?php echo getStaticUrl('script/script.js') ?>"></script>
</body>
</html>