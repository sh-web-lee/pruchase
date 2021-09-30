<?php //    初始化
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../../';
}
include $pRootUrl . 'include/common.inc.php';
if(!empty($_GET['AFF'])) $_GET['aff']=$_GET['AFF'];
function microtime_float()
{
  list($usec, $sec) = explode(' ', microtime());
  return ((float) $usec + (float) $sec);
}

$viewNum = rand(96, 125);
if (!empty($_GET['action']) && ($_GET['action'] == 'getPacks')) {
  $date = $_GET['d'];
  $cName = 'febofferes' . $date;
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

if (empty($_GET['ref'])) $_GET['ref'] = 'esaff_db8_2020bigsale';

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
  <title>Hasta 86% de descuento y regalos gratis en Driver Booster 7 PRO. - IObit</title>
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
  <div class="wrapper">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/es/index.php" target="_blank">IObit</a>
    <!-- title -->
    <h1>
      La mayor oferta de la semana
    </h1>

    <div class="box">
      <img src="<?php echo getStaticUrl('images/db-box.png') ?>" alt=""/ class="img-box">
      <h3><span>50% DTO</span></h3>
      <p><del>35,98€  </del> <strong>17,<span><span>99</span>€</span></strong></p>
      <!-- buybtn -->
      <a href="https://www.iobit.com/buy.php?product=esaff-db81pc1799&ref=<?php echo $_GET['ref']?>&aff=<?php echo $_GET['aff']?>"
         onclick="ga('send', 'event', 'dbbuy', 'buy', 'esaffdb72020bigsale')"
         class="buybtn border">
        Comprar ahora
      </a>
    </div>

    <div class="box gift-box">
      <img src="<?php echo getStaticUrl('images/db-gift-box.png') ?>" alt=""/ class="img-box">
      <img src="<?php echo getStaticUrl('images/raduem-box.png') ?>" alt="" class="raduem">
      <div class="raduemnum"></div>
      <div class="num surplus"> <b class="one"><span>0</span></b><b class="two"><span>0</span></b></div>
      <div class="info">
        <div class="popgift">
          <strong>Smart Defrag PRO  </strong>
          <p class="margin">Desfragmenta rápidamente optimizando el rendimiento del disco duro y del PC.</p>
          <strong>Protected Folder</strong>
          <p>Garantiza la seguridad de tu privacidad, tus carpetas y datos más importantes</p>
        </div>
      </div>
      <h3><span>86% DTO</span></h3>
      <p><del>144,79€  </del> <strong>19,<span><span>99</span>€</span></strong></p>
      <!-- buybtn -->
      <a href="https://www.iobit.com/buy.php?product=esaff-db83pcpfsd1999&ref=<?php echo $_GET['ref']?>&aff=<?php echo $_GET['aff']?>"
         onclick="ga('send', 'event', 'dbbuy', 'buy', 'esaffdb72020bigsale')"
         class="buybtn center">
        Comprar ahora
      </a>
      <p class="last">Sólo quedan <b class="packsNum">50</b>* paquetes, date prisa!</p>
    </div>

    <div class="box three-box">
      <img src="<?php echo getStaticUrl('images/db-three-box.png') ?>" alt=""/ class="img-box">
      <h3><span>73% DTO</span></h3>
      <p><del>74,85€  </del> <strong>19,<span><span>99</span>€</span></strong></p>
      <!-- buybtn -->
      <a href="https://www.iobit.com/buy.php?product=esaff-db83pc1999&ref=<?php echo $_GET['ref']?>&aff=<?php echo $_GET['aff']?>"
         onclick="ga('send', 'event', 'dbbuy', 'buy', 'esaffdb72020bigsale')"
         class="buybtn border">
        Comprar ahora
      </a>
    </div>
  </div>
</div>
<!-- banner end -->

<!-- service -->
<div class="service">
  <div class="wrapper clearfix">
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/visa.png" alt=""></dt>
      <dd><h3>Formas de pago</h3></dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/moneyback.png" alt=""></dt>
      <dd><h3>Garantía de reembolso</h3></dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/godaddy-secure.png" alt=""></dt>
      <dd><h3>Pago 100% seguro</h3></dd>
    </dl>
  </div>
</div>

<!-- benefits start -->
<div class="benefits">
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
        <dt><i class="benefits01"></i></dt>
        <dd>
          <h3>Soporta más de 4,500,000 drivers y componentes  </h3>
          <p>
            Soporta la actualización de más de 4,500,000 drivers y <br>
            componentes que pasaron la prueba WHQL de Microsoft y <br>
            las reglas de evaluación estrictas de IObit.
          </p>
        </dd>
      </dl>
      <dl>
        <dt><i class="benefits02"></i></dt>
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
        <dt><i class="benefits03"></i></dt>
        <dd>
          <h3>El máximo rendimiento de juego garantizado </h3>
          <p>
            Consigue mejor rendimiento con nuevos drivers de “Game Ready” <br>
            y componentes actualizados.
          </p>
        </dd>
      </dl>
      <dl>
        <dt><i class="benefits04"></i></dt>
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
<!-- benefits end -->

<!-- comparison-table start -->
<div class="comparison-table" id="compare">
  <table border="0" cellspacing="0" cellpadding="0" width="100%">
    <thead>
    <tr>
      <th colspan="2">¿Cuales ventajas tiene la PRO edición?</th>
      <th class="space"></th>
      <th class="itema"><div>Driver Booster PRO</div></th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_01.png"></td>
      <td class="virtue">Descarga y actualiza los controladores obsoletos con un solo clic</td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_03.png"></td>
      <td class="virtue">Desbloquea límite de velocidad de actualización de controlador</td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_04.png"></td>
      <td class="virtue">Prioridad para actualizar más controladores obsoletos y raros Mejorado<sup>Mejorado</sup></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_05.png"></td>
      <td class="virtue">Reduce bloqueos y fallos del sistema para mejor rendimiento con mayor base de datos  </td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_06.png"></td>
      <td class="virtue">Descarga e instala automáticamente controladores en el tiempo de inactividad del sistema </td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_07.png"></td>
      <td class="virtue">Hace copia de seguridad de todos los controladores automáticamente para restauración segura </td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_08.png"></td>
      <td class="virtue">Prioridad de actualizar componentes de juego para mejor experiencia de juego<sup class="nou"> Novedad</sup></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <!-- ADD NEW -->
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_09.png"></td>
      <td class="virtue">Detecta y repara efectivamente errores de dispositivos  <sup class="nou"> Novedad </sup></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <!-- AMEND OLD -->
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_10.png"></td>
      <td class="virtue">Actualización automática a la última versión</td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_11.png"></td>
      <td class="virtue">24/7 soporte técnico gratuito para demanda </td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    </tbody>
    <tfoot>
    <tr>
      <th colspan="3"></th>
      <th class="itema">
        <del>144,79€ </del> <strong>19,99€</strong>
        <a href="https://www.iobit.com/buy.php?product=esaff-db83pcpfsd1999&ref=<?php echo $_GET['ref']?>&aff=<?php echo $_GET['aff']?>"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'esaffdb72020bigsale')"
           class="buybtn center">
          Comprar ahora
        </a>
        <p>¡Solo quedan <span class="raduemtab"></span> <b class="packsNum">50</b> paquetes! </p>
      </th>
    </tr>
    </tfoot>
  </table>
</div>
<!-- comparison-table end -->


<div class="reviews  clearfix">
  <div class="wrapper">
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
</div>

<div class="bottom-buy">
  <div class="wrapper">
    <div class="left-img"></div>
    <ul>
      <li><i></i> <span>1PC</span><strong> -50%</strong></li>
      <li class="active"><i></i> <span>3 PCs+ regalos gratis</span> <strong> -86%</strong></li>
      <li><i></i> <span>3 PCs</span> <strong> -73% </strong></li>
    </ul>
    <dl>
      <dt> <strong>19<b>,</b><span><span>99</span>€</span></strong> <del>144,79€  </del></dt>
      <dd>
        <!-- buybtn -->
        <a href="https://www.iobit.com/buy.php?product=esaff-db83pcpfsd1999&ref=<?php echo $_GET['ref']?>&aff=<?php echo $_GET['aff']?>"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'esaffdb72020bigsale')"
           class="buybtn center">
          Comprar ahora
        </a>
      </dd>
    </dl>
  </div>
</div>
<!--  footer start-->
<div class="footer">

  <!-- annotation -->
  <dl class="annotation wrapper">
    <dt>Nota:</dt>
    <dd>*.Estos programas promocionales están sujetos a cambios sin previo aviso, dependiendo de nuestra discreción exclusiva en cualquier momento.</dd>
    <dd>*.Datos pueden variar basados en diferentes sistemas u ordenadores.</dd>
    <dd>*.Smart Defrag PRO/ Protected Folder para un año de suscripción / 1 PC.</dd>
  </dl>
  <!-- copyright -->
  <p class="copyright">Copyright © 2005 - <?php echo date('Y') ?> IObit. Todos los derechos reservados</p>
</div>
<!-- footer end -->
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js') ?>"></script>
<script src="<?php echo getStaticUrl('script/script.js') ?>"></script>
</body>
</html>