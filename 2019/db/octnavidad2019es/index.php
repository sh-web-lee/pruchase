<?php //    初始化
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
    $pResUrl = './';
    $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

function microtime_float()
{
    list($usec, $sec) = explode(' ', microtime());
    return ((float) $usec + (float) $sec);
}

$viewNum = rand(96, 125);
if (!empty($_GET['action']) && ($_GET['action'] == 'getPacks')) {
    $date = $_GET['d'];
    $cName = 'octnavidad2019es' . $date;
    $cookie = $_COOKIE[$cName];
    if ($cookie) {
        $packsNum = $_COOKIE[$cName];
        if ($packsNum > 5) {
            $packsNum--;
            setcookie($cName, $packsNum);
            if (rand(0, 100) % 2 == 0) {
                $packsNum = $packsNum + 1;
            }
        } else {
            $packsNum = 5;
        }
    } else {
        $packsNum = 50;
        setcookie($cName, $packsNum);
    }
    echo json_encode(array('packsNum' => $packsNum, 'viewNum' => $viewNum));
    exit();
}

if(in_array($_GET['st'],array('dbxmasr','officialfree','officialpro'))){
  $refStr='-'.$_GET['st'];
}else{
  $refStr='';
}
if(in_array($_GET['pop'],array('x_db','xi_db','xb_db'))){
  $refStr.='-'.$_GET['pop'];
}
if(!empty($_GET['to'])){
  $refStr.='-'.$_GET['to'];
}
if(preg_match_all('/([0-9]*)\./',$_GET['ver'],$matches)){
  $ver=$matches[1][0].$matches[1][1];
  $refStr.='-'.$ver;
}
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['user'])?'':('-'.$_GET['user']);
$refStr.=empty($_GET['insday'])?'':('-'.$_GET['insday']);
$refStr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-t'.$_GET['type'].'-e'.$_GET['expd'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" >
  <title>88% de descuento y regalos para DB PRO de oferta navidad 2019 – IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css') ?>" rel="stylesheet">
    <?php echo $gJavascript['public']; ?>
    <?php echo $gJavascript['head']; ?>
</head>
<body>

<!-- banner start -->
<div class="banner">
  <span class="snow"></span>
  <div class="wrapper">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/es/index.php" target="_blank">IObit</a>
    <!-- title -->
    <h1>
      ¡OFERTA ESPECIAL DE NAVIDAD!
    </h1>
    <div class="left-box">
      <span class="hand"></span>
      <span class="head"></span>
      <h2><strong>88%</strong> de descuento <span>Una vez al año, ¡solo para Navidad!</span></h2>
      <img src="<?php echo $pResUrl; ?>images/db-box.png" alt="">
      <img src="<?php echo $pResUrl; ?>images/raduem-box.png" alt="" class="raduem-box">
      <strong class="raduem"></strong>
    </div>
    <div class="right-box">
      <h3> Hoy solo quedan <strong class="raduem"></strong> <span class="surplus"><b class="one"><span>0</span></b><b class="two"><span>0</span></b></span>  paquetes</h3>
      <dl>
        <dt><strong>Driver Booster 7 PRO</strong> <span>19,99€</span> <del>74,85€</del></dt>
        <dd><strong>Protected Folder</strong> <span>0€</span></dd>
        <dd><strong>Smart Defrag 6 PRO</strong> <span>0€</span></dd>
        <dd><strong>IObit Uninstaller 9 PRO</strong> <span>0€</span></dd>
        <dd class="last"><span>Valor de</span> <b>89,93€</b></dd>
      </dl>
    </div>
    <dl class="price">
      <dt> <del>164,78€</del> <strong>19,99€</strong></dt>
      <dd>
        <a href="https://www.iobit.com/buy.php?product=es-db73pcsdpfiu1999&ref=es_db73pcsdpfiupurchase1910<?php echo $refStr;?>&refs=es_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchasexmas1910-es')" class="buybtn">Comprar ahora</a>
      </dd>
      <dd>Más de <b id="bynum">8,007,680</b> personas han comprado</dd>
    </dl>
    </div>
  </div>
</div>
<!-- banenr end -->

<!-- benfits start -->
<div class="benfits">
  <div class="wrapper clearfix">
    <h2>¡El mejor actualizador de controladores te ofrece <br> el máximo rendimiento para tu PC!</h2>
    <div class="showcase">
      <div class="inner">
        <ul class="screenshot">
          <li>
            <img src="<?php echo getStaticUrl('images/screenshot-01.png') ?>" alt=""/>
          </li>
          <li>
            <img src="<?php echo getStaticUrl('images/screenshot-02.png') ?>" alt=""/>
          </li>
          <li>
            <img src="<?php echo getStaticUrl('images/screenshot-03.png') ?>" alt=""/>
          </li>
          <li>
            <img src="<?php echo getStaticUrl('images/screenshot-04.png') ?>" alt=""/>
          </li>
        </ul>
      </div>
      <ul class="zoom">
        <li class="fun1 active">
          <div class="container">
            <img src="<?php echo getStaticUrl('images/screenshot-01-zoom.png') ?>" alt=""/>
          </div>
        </li>
        <li class="fun2">
          <div class="container">
            <img src="<?php echo getStaticUrl('images/screenshot-02-zoom.png') ?>" alt=""/>
          </div>
        </li>
        <li class="fun3">
          <div class="container">
            <img src="<?php echo getStaticUrl('images/screenshot-03-zoom.png') ?>" alt=""/>
          </div>
        </li>
        <li class="fun4">
          <div class="container">
            <img src="<?php echo getStaticUrl('images/screenshot-04-zoom.png') ?>" alt=""/>
          </div>
        </li>
      </ul>
    </div>
    <div class="detail-list">
      <dl class="active first">
        <dt><i class="benfits01"></i></dt>
        <dd>
          <h3>Soporta más de 3,500,000 drivers y componentes  </h3>
          <p>
            Soporta la actualización de más de 3,500,000 drivers y <br>
            componentes que pasaron la prueba WHQL de Microsoft y <br>
            las reglas de evaluación estrictas de IObit.
          </p>
        </dd>
      </dl>
      <dl>
        <dt><i class="benfits02"></i></dt>
        <dd>
          <h3>Actualización del driver 100% segura </h3>
          <p>
            Hace una copia de seguridad automáticamente y crea un punto <br>
            de restauración del sistema antes de actualizar en caso de <br>
            cualquier inesperado.
          </p>
        </dd>
      </dl>
      <dl>
        <dt><i class="benfits03"></i></dt>
        <dd>
          <h3>El máximo rendimiento de juego garantizado </h3>
          <p>
            Consigue mejor rendimiento con nuevos drivers de “Game Ready” <br>
            y componentes actualizados.
          </p>
        </dd>
      </dl>
      <dl>
        <dt><i class="benfits04"></i></dt>
        <dd>
          <h3>Descarga 200%* más rápida </h3>
          <p>
            La descarga de tiempo de inactividad del sistema ahorra <br>
            tiempo con velocidad hasta 200%* más rápida.
          </p>
        </dd>
      </dl>
    </div>
    <div class="clear"></div>
    <a class="intro fr" href="javascript: void(0)">Ver más sobre versión PRO>></a>
  </div>
</div>
<!-- benfits end -->

<!-- gift-box start -->
<div class="gift-box">
  <div class="wrapper clearfix">
    <!-- gift-box title -->
    <h2>El paquete de regalo exclusivo sólo para la navidad, no te lo p</h2>
    <!-- SD -->
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/sd-box.png" alt=""></dt>
      <dd>
        <p>
         Obtén el máximo rendimiento de disco duro.
        </p>
        <p><b>0€</b> <del> 19,99€</del></p>
      </dd>
    </dl>
    <!-- PF -->
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/iu-box.png" alt=""></dt>
      <dd>
        <p>
         El potente desinstalador te ayuda a desinstalar programas completa y fácilmente.
        </p>
        <p><b>0€</b> <del> 29,99€</del></p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/pf-box.png" alt=""></dt>
      <dd>
        <p>
        ¡No te preocupes por el robo de datos o las fugas de privacidad!
        </p>
        <p><b>0€</b> <del> 39,95€</del></p>
      </dd>
    </dl>
    <div class="message">
      <div class="left-message">
        <img src="<?php echo $pResUrl; ?>images/gift-db-box.png" alt="" class="img-box">
        <div class="title">
          <h3>Driver Booster 7 PRO</h3>
          <p>3 PCs / 1 año <strong>19,99€</strong> <del>74,85€</del></p>
        </div>
        <ul>
          <li><i></i> <span>Smart Defrag 6 PRO </span> <b>0€</b> <del>19,99€</del></li>
          <li><i></i> <span>IObit Uninstaller 9 PRO </span> <b>0€</b> <del>29,99€</del></li>
          <li><i></i> <span>Protected Folder </span> <b>0€</b> <del>39,95€</del></li>
        </ul>
      </div>
      <dl class="price">
        <dt> <del>164,78€</del> <strong>19,99€</strong></dt>
        <dd>
          <a href="https://www.iobit.com/buy.php?product=es-db73pcsdpfiu1999&ref=es_db73pcsdpfiupurchase1910<?php echo $refStr;?>&refs=es_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchasexmas1910-es')" class="buybtn">Comprar ahora</a>
        </dd>
        <dd>¡Date prisa, solo quedan <strong class="raduem"></strong> <b class="packsNum">50</b> paquetes! </dd>
      </dl>
    </div>


  </div>
</div>

<!-- gift-box end -->
<div class="reviews wrapper clearfix">
  <h2>Premios a Nivel Mundial</h2>
  <p>Los usuarios de todo el mundo comparten sus experiencias.</p>
  <div class="content">
    <div class="media">
      <img src="<?php echo $pResUrl; ?>images/media.png" alt="">
    </div>
    <div class="reviews-box">
      <ul class="message">
        <li>"Me ayudó a solucionar los problemas de lentitud de mi portátil gamer sin dejar de funcionar. A veces cuando he intentado actualizar los drivers, mi ordenador dejaba de funcionar y tenía que formatear para restaurar todas las funciones. Eso con DB7 no pasa y además es fácil de usar y las descargas son rápidas, sinceramente una de las mejores herramientas que hay en el mercado hoy en día."</li>
        <li  class="active">"IObit ofrece muchas utilidades  y Driver Booster PRO, que actualiza automáticamente tus drivers, es uno de los mejores. La funcionalidad simple de Driver Booster PRO se hace aún más atractiva gracias a la inclusión de múltiples licencias a un precio muy económico, así como una interfaz personalizable que hace un buen trabajo al mostrar información específica relacionada con el hardware. Competidores como Ashampoo Driver Updater y SlimWare Utilities DriverUpdate ofrecen características atractivas, pero IObit Driver Booster PRO lidera el mercado."</li>
        <li>"Verdaderamente el mejor actualizador de drivers del Mercado. Es fácil de usar, y tiene una interfaz simple que hace su trabajo mejor que cualquier aplicación que haya usado antes. Este programa se merece 5 estrellas, altamente recomendado!"</li>
        <li> "Lo primero quería recalcar que es un programa muy ligero y fácil de usar. Normalmente ejecuto actualizaciones de Windows diariamente para conseguir los últimos controladores pero Driver Booster actualiza y corrige todos los problemas de mis drivers de manera más precisa y mejor que las actualizaciones de Windows. Estoy realmente impresionado con este software y lo recomiendo como el gran producto que es."</li>
        <li> "Que sorpresa haber recibido la nueva versión de Driver Booster de IObit. Una vez lo he instalado y ha empezado a actualizar me he dado cuenta de que no tenía ni idea de la cantidad de programas de mi PC que tenía que actualizar. Ahora que están todos actualizados, mi PC vuelve a funcionar como si estuviera nuevo, increíble!"</li>
      </ul>
      <ul class="img-box">
        <li class="first">
          <div><img src="<?php echo $pResUrl; ?>images/carlos-alexandre.png" alt="Carlos Alexandre Veríssimo"></div>
          <p>Carlos Alexandre Veríssimo</p>
        </li>
        <li class="active">
          <div><img src="<?php echo $pResUrl; ?>images/pc.png" alt="PC Magazine"></div>
          <p>PC Magazine </p>
        </li>
        <li>
          <div><img src="<?php echo $pResUrl; ?>images/hishaam-salasa.png" alt="Hishaam Salasa"></div>
          <p>Hishaam Salasa </p>
        </li>
        <li>
          <div><img src="<?php echo $pResUrl; ?>images/dunston-diaz.png" alt="Dunston Diaz"></div>
          <p>Dunston Diaz</p>
        </li>

        <li>
          <div><img src="<?php echo $pResUrl; ?>images/harold-barr.png" alt="Harold Barr"></div>
          <p>Harold Barr</p>
        </li>
      </ul>
    </div>
  </div>
</div>

<!-- comparison-table start -->
<div class="comparison-table" id="compare">
  <table border="0" cellspacing="0" cellpadding="0" width="100%">
    <thead>
    <tr>
      <th colspan="2">Ver la comparación entre FREE y PRO</th>
      <th class="itemb"><div>Driver Booster FREE</div></th>
      <th class="space"></th>
      <th class="itema"><div>Driver Booster PRO <span>3 PCs / 1 año+ Paquete de navidad</span></div></th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_01.png"></td>
      <td class="virtue">Descarga y actualiza los controladores obsoletos con un solo clic</td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-star.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_03.png"></td>
      <td class="virtue">Desbloquea límite de velocidad de actualización de controlador</td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_04.png"></td>
      <td class="virtue">Prioridad para actualizar más controladores obsoletos y raros Mejorado<sup>Mejorado</sup></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_05.png"></td>
      <td class="virtue">Reduce bloqueos y fallos del sistema para mejor rendimiento con mayor base de datos  </td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_06.png"></td>
      <td class="virtue">Descarga e instala automáticamente controladores en el tiempo de inactividad del sistema </td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_07.png"></td>
      <td class="virtue">Hace copia de seguridad de todos los controladores automáticamente para restauración segura </td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_08.png"></td>
      <td class="virtue">Prioridad de actualizar componentes de juego para mejor experiencia de juego<sup class="nou top"> Novedad</sup></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <!-- ADD NEW -->
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_09.png"></td>
      <td class="virtue">Detecta y repara efectivamente errores de dispositivos  <sup class="nou"> Novedad </sup></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <!-- AMEND OLD -->
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_10.png"></td>
      <td class="virtue">Actualización automática a la última versión</td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_11.png"></td>
      <td class="virtue">24/7 soporte técnico gratuito para demanda </td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    </tbody>
    <tfoot>
      <tr>
        <th colspan="4"></th>
        <th class="itema">
          <del>164,78€ </del> <strong>19,99€</strong>
          <a href="https://www.iobit.com/buy.php?product=es-db73pcsdpfiu1999&ref=es_db73pcsdpfiupurchase1910<?php echo $refStr;?>&refs=es_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchasexmas1910-es')" class="buybtn">Comprar ahora</a>
          <p>¡Solo quedan <strong class="raduem"></strong> <b class="packsNum">50</b> paquetes! </p>
        </th>
      </tr>
    </tfoot>
  </table>
</div>
<!-- comparison-table end -->


<!--  footer start-->
<div class="footer">
  <!-- service -->
  <div class="service wrapper clearfix">
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/visa.png" alt=""></dt>
      <dd><h3>Formas de pago</h3></dd>
      <dd class="small">Aceptamos varios formas de <br> pago por tu pedido</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/moneyback.png" alt=""></dt>
      <dd><h3>Garantía de reembolso</h3></dd>
      <dd class="small">Si no estás satisfecho en los primeros <br> 60 días,te devolveremos tu dinero.</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/godaddy-secure.png" alt=""></dt>
      <dd><h3>Pago 100% seguro</h3></dd>
      <dd class="small">IObit ofrece métodos de pago seguros <br> para la transacción.</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/godaddy.png" alt=""></dt>
      <dd><h3>Servicio al cliente</h3></dd>
      <dd class="small">Ofrecemos 24/7 Soporte Técnico gratis.</dd>
    </dl>
  </div>
  <!-- annotation -->
  <dl class="annotation wrapper">
    <dt>Nota:</dt>
    <dd>* Estos programas promocionales están sujetos a cambios sin previo aviso, dependiendo de nuestra discreción exclusiva en cualquier momento.</dd>
    <dd>* Datos pueden variar basados en diferentes sistemas u ordenadores.</dd>
  </dl>
  <!-- copyright -->
  <p class="copyright">Copyright © 2005 - <?php echo date('Y') ?> IObit. Todos los derechos reservados</p>
</div>
<!-- footer end -->
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js') ?>"></script>
<script src="<?php echo getStaticUrl('script/script.js') ?>"></script>
</body>
</html>