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
    return (intval($num) > 0) ? number_format(intval($num)) : '';
}

$paramData = json_decode(base64_decode($_GET['udata']));

$refStr = empty($_GET['to']) ? '' : ('-' . $_GET['to']);
if (preg_match_all('/([0-9]*)\./', $_GET['ver'], $matches)) {
    $ver = $matches[1][0] . $matches[1][1];
    $refStr .= '-' . $ver;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
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
    <h1>Comienza la preventa</h1>
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
          <li class="first">
            <strong>0<small>€</small></strong>
          </li>
          <li class="last">
            <a class="buybtn big"
               href="https://www.iobit.com/buy.php?product=es-db7preorder&ref=es_db7preorderexp<?php echo $refStr; ?>&aff=<?php echo $_GET['aff']; ?>&refs=es_purchase_db"
               onclick="ga('send', 'event', 'dbbuy', 'buy', 'db7preorderexp-es');"
            >Resérvalo ahora</a>
          </li>
      </div>
    </div>
  </div>
</div>
<!-- banner end -->

<!-- foryou start -->
<div class="foryou">
  <div class="wrapper">
    <h2>¿Qué hizo Driver Booster 6 PRO por ti?</h2>
    <div class="screen">
      <img src="<?php echo getStaticUrl('images/screen01.png') ?>" alt="" />
      <span class="rocket"></span>
      <div class="forlist left">
        <h3>Mejoró el rendimiento del <b>PC</b></h3>
        <p><i class="circle">.</i> Actualizó <b>x</b> drivers del PC para mantenerse alejado de problemas en el sistema;</p>
        <p><i class="circle">.</i> Reparó <b>x</b> errores de dispositivos para solucionar problemas en el hardware;</p>
      </div>
      <div class="forlist right">
        <h3>Mejoró el rendimiento de los <b>juegos</b></h3>
        <p><i class="circle">.</i> Actualizó <b>x</b> componentes de juego para garantizar con éxito su ejecución;</p>
        <p><i class="circle">.</i> Actualizó con prioridad <b>x</b> controladores de game-ready para disfrutar <br>&nbsp;&nbsp;&nbsp;de nuevas funciones y reparar errores;</p>
      </div>
    </div>
    <span class="arrow-wrap"><i class="top"></i><i class="bot"></i>
  </div>
</div>
<!-- foryou end -->

<!-- hashow start -->
<div class="hashow">
  <div class="wrapper">
    <h2>Tu Driver Booster PRO ha expirado</h2>
    <div class="screen clearfix">
      <div class="left fl">
        <img src="<?php echo getStaticUrl('images/screen02.png') ?>" alt="" />
        <span class="point">!</span>
      </div>
      <ul class="right fr">
        <li><i class="all-icons arrow"></i> <span>La base de datos de controladores se reduce a <b>2,500,000</b></span></li>
        <li><i class="all-icons"></i> <span><b>Sin</b> aceleración de velocidad de descarga</span></li>
        <li><i class="all-icons"></i> <span><b>Sin</b> actualización automática del controlador</span></li>
        <li><i class="all-icons"></i> <span><b>Sin</b> copias de seguridad de controladores anteriores</span></li>
        <li><i class="all-icons"></i> <span><b>Sin</b> solución para el error de código del dispositivo</span></li>
        <li><i class="all-icons"></i> <span><b>Sin</b> actualización de componentes de juego</span></li>
        <li><i class="all-icons"></i> <span><b>Sin</b> prioridad de actualizar drivers de Game Ready</span></li>
      </ul>
    </div>
    <span class="arrow-wrap"><i class="top"></i><i class="bot"></i>
  </div>
</div>
<!-- hashow end -->

<!-- db-feature start -->
<div class="db-feature">
  <div class="wrapper">
    <h2>La preventa de Driver Booster 7 PRO está disponible, <br> y esto es todo lo que puede hacer por ti</h2>
    <div class="clearfix">
      <div class="featlist one">
        <img src="<?php echo getStaticUrl('images/feature-icons01.png') ?>" alt="" />
        <h3>3,500,000+</h3>
        <p>Controladores de PC compatibles</p>
      </div>
      <div class="featlist two">
        <img src="<?php echo getStaticUrl('images/feature-icons02.png') ?>" alt="" />
        <h3>20% más</h3>
        <p>de componentes compatibles</p>
      </div>
      <div class="featlist three">
        <img src="<?php echo getStaticUrl('images/feature-icons03.png') ?>" alt="" />
        <h3>20% más rápido</h3>
        <p>Escaneo de controladores</p>
      </div>
      <div class="featlist four">
        <img src="<?php echo getStaticUrl('images/feature-icons04.png') ?>" alt="" />
        <h3 style="font-size: 17px;">DETIENE NOTIFICACIONES</h3>
        <p>de Driver Booster cuando estás trabajando con pantalla completa</p>
      </div>
    </div>
    <h3 class="subtitle">Vuelve a PRO ahora para disfrutar de todas las funciones PRO</h3>
    <ul class="price">
      <li class="last">
        <a class="buybtn big"
           href="https://www.iobit.com/buy.php?product=es-db7preorder&ref=es_db7preorderexp<?php echo $refStr; ?>&aff=<?php echo $_GET['aff']; ?>&refs=es_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'db7preorderexp-es');"
        >Resérvalo ahora - <big>0€</big></a>
      </li>
    </ul>
    <span class="arrow-wrap"><i class="top"></i><i class="bot"></i></span>
  </div>
</div>
<!-- db-feature end -->

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
      <h3 style="margin-bottom: 0;">
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
           href="https://www.iobit.com/buy.php?product=es-db7preorder&ref=es_db7preorderexp<?php echo $refStr; ?>&aff=<?php echo $_GET['aff']; ?>&refs=es_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'db7preorderexp-es');"
        >Resérvalo ahora</a>
      </li>
    </ul>
  </div>
</div>
<!-- float end -->

<script>
refStr = '<?php echo $refStr;?>';
$('.foryou .screen p b').eq(0).html('<?php echo paramDeal($paramData->UpdDrv);?>').end()
  .eq(1).html('<?php echo paramDeal($paramData->FixedErr);?>').end()
  .eq(2).html('<?php echo paramDeal($paramData->UpdCmp);?>').end()
  .eq(3).html('<?php echo paramDeal($paramData->UpdRdy);?>');
</script>
<script src="<?php echo $pRootUrl; ?>tpl/js/modernizr.min.js"></script>
<script src="<?php echo $pRootUrl; ?>tpl/js/review-3d-carousel.min.js"></script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js') ?>"></script>
<script src="<?php echo getStaticUrl('script/script.js') ?>"></script>
</body>
</html>