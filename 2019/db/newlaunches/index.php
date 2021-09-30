<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
    $pResUrl = './';
    $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';
$viewNum=rand(154,196);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}
if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'endbnew_p' . $date;
  $c_name_t='endbnew_t' . $date;
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=rand(78,98);
    setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
    setcookie($c_name_t,$totalNum, time() + 3600 * 24 *2);
  } else {
    if (intval($_COOKIE[$c_name]) <= 3) {
      $packsNum = 3;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    } else {
      $packsNum = $_COOKIE[$c_name] - 1;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    }
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

$refStr=empty($_GET['to'])?'':('-').$_GET['to'];
$refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>86% de descuento en Driver Booster y regalos exclusivos - IObit</title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Prompt:400,600" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com/es/index.php" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
      </a>
      <div class="title">
        <h1>Obtén</h1>
        <p> tu regalo de lanzamiento de Driver Booster 8 PRO</p>
      </div>
      <div class="clearfix">
        <div class="offer left">
          <div class="top">
            <h2>Trimestral</h2>
            <p><strong><big>6.24</big>€  /MES</strong></p>
            <p><span class="sign">Sin descuento</span></p>
            <a class="buybtn small"
               href="https://www.iobit.com/buy.php?product=es-db83pc3m1872&ref=es_db83mpurchase1909newlaunch<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=es_purchase_db"
               onclick="ga('send', 'event', 'db3mbuy', 'buy', 'db3mpurchase-newlaunch-es')">
              <em><i class="all-icons"></i><i class="all-icons icon-cart"></i></em>
              <span>Comprar ahora</span>     
            </a>
          </div>
          <div class="price">
            <h3>Detalle de precios</h3>
            <ul>
              <li><span>3 Meses   </span><span class="right">18,72€</span></li>
              <li><span><b>Total</b></span><span class="right"><b>18,72€</b></span></li>
              <li class="last"><b class="red">(Ahorra 0€)</b></li>
            </ul>
          </div>
        </div>
        <div class="offer right">
          <div class="top">
            <h2>Annual</h2>
            <p><strong><big>1,67</big>€ /MES </strong></p>
            <p><span class="sign">86% DTO + 2 meses gratis+2 regalos gratis </span></p>
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=es-db83pc14mpfsd1999&ref=es_db814mpfsd1909newlaunch<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=es_purchase_db"
               onclick="ga('send', 'event', 'db14mbuy', 'buy', 'db14mpurchase-newlaunch-es')">
              <em><i class="all-icons"></i><i class="all-icons icon-cart"></i></em>
              <span>Comprar ahora </span>  
            </a>
          </div>
          <div class="price">
            <h3>Detalle de precios</h3>
            <ul>
              <li><span>12 Meses </span><span class="right">74,85€</span></li>
              <li><span>Extra 2 meses  </span><span class="right"><del>12,48€</del></span></li>
              <li><span>2 regalos</span><span class="right"> <del>69,94€</del></span></li>
              <li><span>86% de descuento</span><span class="right">-124,8€</span></li>
              <li><span><b>Total</b></span><span class="right"><b>19,99€</b></span></li>
              <li class="last"><b class="red"> (Ahorra 124,8€)  </b></li>
            </ul>
          </div>
          <div class="numbox">
            <h3>
              Date prisa, sólo quedan 
              <span id="topNum" class="giftNum">
                <b class="nwrap"><b class="numlist">0</b></b>
                <b class="nwrap"><b class="numlist">0</b></b>
                <b class="nwrap"><b class="numlist">5</b></b>
                <b class="nwrap"><b class="numlist">5</b></b>
              </span>
            </h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- feature start -->
  <div class="feature first">
    <h2 class="wrapper">Nuevas características y mejoras de <br> Driver Booster 8 PRO</h2>
    <div class="wrapper clearfix">
      <div class="imgbox fl"><img src="<?php echo getStaticUrl('images/device.png')?>" alt=""/></div>
      <div class="content fr">
        <h3>Actualización de controlador con 1 clic</h3>
        <ul>
          <li class="twice">
            <i>●</i>
            <span>Actualiza más de 4,500,000 controladores con un solo clic para reducir los bloqueos y fallos del sistema.</span>
          </li>
          <li>
            <i>●</i>
            <span>Mayor velocidad de escaneo de controladores obsoletos con un nuevo motor de escaneo.</span>
          </li>
          <li>
            <i>●</i>
            <span>Se pueden solucionar más problemas de sonido de red con las herramientas mejoradas. </span>
          </li>
        </ul>
        <div class="clearfix">
          <dl>
            <dt>
              <img src="<?php echo getStaticUrl('images/arrow-icon01.png')?>" alt=""/>
              <span class="_num">3,500,000+</span>
              <span class="_num red">4,500,000+</span>
            </dt>
            <dd>
              <strong>40%</strong>
              <p>Mayor base de datos de controladores</p>
            </dd>
          </dl>
          <dl>
            <dt><img src="<?php echo getStaticUrl('images/arrow-icon02.png')?>" alt=""/></dt>
            <dd>
              <strong>2X</strong>
              <p>Velocidad de escaneo más rápida</p>
            </dd>
          </dl>
        </div>
      </div>
    </div>
  </div>
  <div class="feature second">
    <div class="wrapper clearfix">
      <div class="content fl">
        <h3>Mejor experiencia de juego</h3>
        <ul>
          <li class="twice">
            <i>●</i>
            <span>Aumenta la velocidad de juego para acelerar rápidamente tu PC durante tus partidas.</span>
          </li>
          <li>
            <i>●</i>
            <span>Silencia automáticamente todas las notificaciones de Driver Booster.</span>
          </li>
          <li>
            <i>●</i>
            <span>Mantiene los componentes del juego actualizados para conseguir un juego más rápido y soportar nuevas características del juego. </span>
          </li>
        </ul>
        <div class="clearfix">
          <dl>
            <dt><img src="<?php echo getStaticUrl('images/arrow-icon01.png')?>" alt=""/></dt>
            <dd>
              <strong>15%</strong>
              <p>Juego más rápido </p>
            </dd>
          </dl>
        </div>
      </div>
      <div class="imgbox fr">
        <img src="<?php echo getStaticUrl('images/screen01.png')?>" alt=""/>
        <img class="scan01" src="<?php echo getStaticUrl('images/scan-01.png')?>" alt=""/>
        <img class="scan02" src="<?php echo getStaticUrl('images/scan-02.png')?>" alt=""/>
        <img class="scan03" src="<?php echo getStaticUrl('images/scan-03.png')?>" alt=""/> 
      </div>
    </div>
  </div>
  <div class="feature third wrapper">
    <p>
      <span><i></i> <b>Driver Booster 7 Free</b></span> <span class="red"><i></i> <b>Driver Booster 8 PRO</b></span>
    </p>
    <p class="gray">*.Hemos probado el driver booster 8 PRO en nuestro laboratorio de pruebas. Tus resultados pueden variar ligeramente dependiendo de tu ordenador o sistema.  </p>
  </div>
  <!-- feature end -->

  <!-- unique start -->
  <div class="feature unique">
    <div class="wrapper">
      <h2>Otros beneficios únicos de Driver Booster 8 PRO </h2>
      <div class="clearfix">
        <div class="imgbox fl"><img src="<?php echo getStaticUrl('images/screen02.png')?>" alt=""/></div>
        <ul class="content fr">
          <li>
            <i class="all-icons"></i>
            <span>Desbloquea el límite de velocidad de actualización de los drivers.</span>
          </li>
          <li>
            <i class="all-icons"></i>
            <span>Prioridad de actualizar los últimos controladores de Game Ready. </span>
          </li>
          <li>
            <i class="all-icons"></i>
            <span>Descarga automática e instalación de controladores durante el tiempo de inactividad del sistema.</span>
          </li>
          <li>
            <i class="all-icons"></i>
            <span>Actualiza los componentes necesarios para un juego más rápido.</span>
          </li>
          <li>
            <i class="all-icons"></i>
            <span>Repara fácilmente los errores del dispositivo para un mejor rendimiento.</span>
          </li>
          <li>
            <i class="all-icons"></i>
            <span>Actualización automática de la última versión.</span>
          </li>
          <li>
            <i class="all-icons"></i>
            <span>Soporte técnico Gratuito 24/7.</span>
          </li>
        </ul>
      </div>
      <div class="giftbox">
        <h3>Aquí te dejamos un regalo de lanzamiento para ti </h3>
        <dl class="clearfix">
          <dt><img src="<?php echo getStaticUrl('images/gift-box.png')?>" alt=""/></dt>
          <dd>
            <div class="numbox">
              <h3>
                Date prisa, sólo quedan
                <span id="centNum" class="giftNum">
                  <b class="nwrap"><b class="numlist">0</b></b>
                  <b class="nwrap"><b class="numlist">0</b></b>
                  <b class="nwrap"><b class="numlist">5</b></b>
                  <b class="nwrap"><b class="numlist">5</b></b>
                </span>
              </h3>
            </div>
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=es-db83pc14mpfsd1999&ref=es_db814mpfsd1909newlaunch<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=es_purchase_db"
               onclick="ga('send', 'event', 'db14mbuy', 'buy', 'db14mpurchase-newlaunch-es')">
              <em><i class="all-icons"></i><i class="all-icons icon-cart"></i></em>
              <span>Conseguir ahora</span>     
            </a>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- unique end -->

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
          <dt><img src="<?php echo getStaticUrl('images/pc.png')?>" alt=""></dt>
          <dd>
            <h2>Comentarios mediáticos</h2>
            <h4></h4>
            <p>
              "IObit ofrece muchas utilidades  y Driver Booster PRO, que actualiza automáticamente tus drivers, es uno de los mejores. La funcionalidad simple de Driver Booster PRO se hace aún más atractiva gracias a la inclusión de múltiples licencias a un precio muy económico, así como una interfaz personalizable que hace un buen trabajo al mostrar información específica relacionada con el hardware. Competidores como Ashampoo Driver Updater y SlimWare Utilities DriverUpdate ofrecen características atractivas, pero IObit Driver Booster PRO lidera el mercado."
            </p>
            <cite>PC Magazine</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/dunston-diaz.png')?>" alt="Dunston Diaz"></dt>
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
          <dt><img src="<?php echo getStaticUrl('images/harold-barr.png')?>" alt="Harold Barr"></dt>
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
          <dt><img src="<?php echo getStaticUrl('images/hishaam-salasa.png')?>" alt="Hishaam Salasa"></dt>
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
          <dt><img src="<?php echo getStaticUrl('images/carlos-alexandre.png')?>" alt="Carlos Alexandre Veríssimo"></dt>
          <dd>
            <h2>Comentarios del usuario</h2>
            <h4></h4>
            <p>
              "Me ayudó a solucionar los problemas de lentitud de mi portátil gamer sin dejar de funcionar. A veces cuando he intentado actualizar los drivers, mi ordenador dejaba de funcionar y tenía que formatear para restaurar todas las funciones. Eso con DB8 no pasa y además es fácil de usar y las descargas son rápidas, sinceramente una de las mejores herramientas que hay en el mercado hoy en día."
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
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
    </div>
  </div>
  <!-- awards end -->

<!-- bottom start -->
<div class="bottom">
  <div class="wrapper">
    <!-- service start -->
    <div class="service clearfix">
      <dl class="fl">
        <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dt>
        <dd>
          <h4>Pruébelo SIN RIESGO - con nuestra garantía de devolución de dinero de 60 días</h4>
          <p>
            Estamos seguros de que activando la versión PRO te olvidarás de tus dolores de cabeza a la hora de actualizar tus drivers por un precio asequible
          </p>
        </dd>
      </dl>
      <dl class="fr">
        <dd>
          <h4>Aceptamos</h4>
        </dd>
        <dt><img src="<?php echo getStaticUrl('images/payments.png')?>" alt=""></dt>
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
      <p>Copyright © 2005 - <?php echo date('Y')?> IObit. Todos los derechos reservados</p>
    </div>
    <!-- footer end -->
  </div>
</div>
<!-- bottom end -->

<!-- float start -->
<div class="floatlayer clearfix">
  <div class="wrapper clearfix">
    <div class="left fl">
      <img src="<?php echo getStaticUrl('images/float-gift-box.png')?>" alt="Driver Booster PRO"/>
    </div>
    <div class="numbox fl">
      <h3>
        Date prisa, sólo quedan 
        <span id="botNum" class="giftNum">
          <b class="nwrap"><b class="numlist">0</b></b>
          <b class="nwrap"><b class="numlist">0</b></b>
          <b class="nwrap"><b class="numlist">5</b></b>
          <b class="nwrap"><b class="numlist">5</b></b>
        </span>
      </h3>
      <p><span class="buyNum"><?php echo $viewNum; ?></span> usuarios están viendo esta página ahora</p>
    </div>
    <a class="buybtn fr"
       href="https://www.iobit.com/buy.php?product=es-db83pc14mpfsd1999&ref=es_db814mpfsd1909newlaunch<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=es_purchase_db"
       onclick="ga('send', 'event', 'db14mbuy', 'buy', 'db14mpurchase-newlaunch-es')">
      <em><i class="all-icons"></i><i class="all-icons icon-cart"></i></em>
      <span>Comprar ahora</span>     
    </a>
  </div>
</div>
<!-- float end -->

  <script>refStr='<?php echo $refStr;?>';</script>
  <script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
  <script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>