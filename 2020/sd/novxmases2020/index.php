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
  $cName = 'novxmases2020' . $date;
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

if(!empty($_GET['ver'])){
    $ver = explode('.',$_GET['ver']);
    $refStr .= '-'.$ver[3];
}
$refStr=empty($_GET['st'])?'':('-'.$_GET['st']);
$refStr=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['user'])?'':('-'.$_GET['user']);
$refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);
$refStr.=empty($_GET['insday'])?'':('-'.$_GET['insday']);
$refStr.=empty($_GET['pop'])?'':('-'.$_GET['pop']);
$refStr.=empty($_GET['r'])?'':('-'.$_GET['r']);
$refStr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-t'.$_GET['type'].'-e'.$_GET['expd'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" >
  <title>Oferta Exclusiva para Smart Defrag – IObit</title>
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
    <div class="title">
      <h1>OFERTA ESPECIAL PARA AÑO NUEVO</h1>
      <p>¡Te Ofrecemos Excelentes Regalos y No los Pierdas!</p>
    </div>

    <div class="left-box">
      <h2><strong>82%</strong> de descuento </h2>
      <img src="<?php echo getStaticUrl('images/sd-box.png')?>" alt="">
      <img src="<?php echo $pResUrl; ?>images/raduem-box.png" alt="" class="raduem-box">
    </div>
    <div class="right-box">
      <h3> Hoy solo quedan <strong class="raduem"></strong> <span class="surplus"><b class="one"><span>0</span></b><b class="two"><span>0</span></b></span>  paquetes</h3>
      <dl>
        <dt><strong>Smart Defrag 7 PRO</strong> <span>15,99€</span> <del>29,99€</del></dt>
        <dd><strong>Protected Folder</strong> <span>0€</span></dd>
        <dd><strong>IObit Software Updater </strong> <span>0€</span></dd>
        <dd class="last"><span>Valor de</span> <b>59,94€</b></dd>
      </dl>
    </div>
    <dl class="price">
      <dt> <del>89,93€</del> <strong>15,99€</strong></dt>
      <dd>
        <a href="https://www.iobit.com/buy.php?product=es-sd63pcpfisu1599&ref=es_sd63pcpfisu1599purchase2011<?php echo $refStr;?>&refs=es_purchase_sd"
           onclick="ga('send', 'event', 'sdbuy', 'buy', 'sd63pcpfisupurchase2011-es')"
           class="buybtn">
          Comprar ahora
        </a>
      </dd>
      <dd>Más de <b id="bynum">585,980</b> personas han comprado</dd>
    </dl>
  </div>
</div>
<!-- banenr end -->

<!-- intro start -->
<div class="intro">
  <div class="wrapper">
    <h2>Maximiza el rendimiento del disco duro & Acelera tu PC con SD 7 PRO</h2>
    <div class="cont clearfix">
      <img class="fl" src="<?php echo getStaticUrl('images/computer.png')?>" alt="" />
      <div class="fl">
        <ul>
          <li>
            <i class="all-icons"></i>
            <span>Desfragmenta archivos eficietemente y completamente por menos tiempo.</span>
          </li>
          <li>
            <i class="all-icons"></i>
            <span>Acelera la velocidad de acceso a los archivos y la velocidad de lanzamiento de juegos. </span>
          </li>
          <li>
            <i class="all-icons"></i>
            <span>Desfragmenta automáticamente e inteligentemente archivos y discos seleccionados sin interrupción</span>
          </li>
          <li>
            <i class="all-icons"></i>
            <span>Disfrute de inicio de PC más rápido y velocidad superior del sistema.</span>
          </li>
        </ul>
        <a class="compareBtn" href="javascript: void(0);">Diferencias entre las versiones de Free y Pro</a>
      </div>
    </div>
  </div>
</div>
<!-- intro end -->

<!-- giftbox start -->
<div class="giftbox">
  <div class="wrapper">
    <h2>¡No te pierdas los regalos que hemos preparado para ti!</h2>
    <div class="clearfix">
      <div class="gift-list">
        <img class="fl" src="<?php echo getStaticUrl('images/isu-box.png')?>" alt=""/>
        <ul class="fl">
          <li>Accede a cientos de actualizaciones de Software.</li>
          <li>Te ofrece las actualizaciones rápidas e instalaciones seguras.</li>
        </ul>
      </div>
      <div class="gift-list pf">
        <img class="fl" src="<?php echo getStaticUrl('images/pf-box.png')?>" alt=""/>
        <ul class="fl">
          <li>Protege tus archivos de ataques maliciosos.</li>
          <li>Una sola contraseña para todos los archivos.</li>
        </ul>
      </div>
    </div>
    <div class="price">
      <h3>Smart Defrag PRO + regalos gratis</h3>
      <p><strong>15,99€</strong> <del>89,93€</del></p>
      <a class="buybtn"
         href="https://www.iobit.com/buy.php?product=es-sd63pcpfisu1599&ref=es_sd63pcpfisu1599purchase2011<?php echo $refStr;?>&refs=es_purchase_sd"
         onclick="ga('send', 'event', 'sdbuy', 'buy', 'sd63pcpfisupurchase2011-es')">
        Comprar ahora
      </a>
      <p>¡Date prisa, solo quedan <span class="reduce"><b class="packsNum">123</b></span> paquetes!</p>
    </div>
  </div>
</div>
<!-- giftbox end -->

<div class="container">
  <!-- awards start -->
  <div class="awards">
    <div class="wrapper">
      <h2>Recomendado y premiado por estos Medios</h2>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt="" />
    </div>
  </div>
  <!-- awards end -->

  <!-- review start -->
  <div class="review wrapper">
    <div class="content">
      <dl>
        <dt>
          <h3>Comentario de usuario</h3></dt>
        <dd>
          <h4>"Smart defrag es un software con buen comportamiento de desfragmentación de disco."</h4>
        </dd>
        <dd>"Smart defrag es un software con buen comportamiento de desfragmentación de disco, funcionado en segundo plano cuando el ordenador es libre por eso apenas lo te das cuenta. Por lo tanto, las unidades se desfragmentan permanentemente para acceso rápido y menos desgaste. Smart defrag es el mejor desfragmentador de disco gratuito que he utilizado y recomendarlo a mis familias y amigos."</dd>
      </dl>
      <dl>
        <dt>
          <h3>Comentario de usuario</h3></dt>
        <dd>
          <h4>"Es utilidad fácil de usar y vale la pena utilizar para su disco duro o SSD."</h4>
        </dd>
        <dd>"Ejecuto una combinación de RAID 0 SSD y RAID 0 HDDs. Uso Smart Defrag Pro para analizar, desfragmentar y mantener mis controladores funcionar al máximo rendimiento. Al igual que con todos los programas de IObit, es fácil de instalar, usar y es muy fiable. Sólo tienes que configurar y olvidarse de él. Smart Defrag tiene una muy pequeña huella de memoria para que no ralentizar el sistema. ¡Sin duda lo recomiendo!"</dd>
      </dl>
      <dl class="active">
        <dt>
          <h3>Reseña de los Medios</h3></dt>
        <dd>
          <h4>"IObit Smart Defrag es una excelente herramienta gratuita para desfragmentar discos duros."</h4>
        </dd>
        <dd>"IObit Smart Defrag es mucho mejor que la propia herramienta de desfragmentación que trae Windows, así que es uno de esos programas imprescindibles en cualquier PC. Iobit Smart Defrag es muy fácil de usar, incluso para aquellos que se enfrentan por primera vez a una herramienta similar." -Softonic</dd>
      </dl>
      <dl>
        <dt>
          <h3>Comentario de usuario</h3></dt>
        <dd>
          <h4>"Desde que uso este fantástico software, mi ordenador y mi coputadora portátil son rápidos y se ha ahorre mucho tiempo."</h4>
        </dd>
        <dd>"Soy un usuario de Smart Defrag durante muchos años. Desde que uso este fantástico software, mi ordenador y mi coputadora portátil son rápidos y se ha ahorre mucho tiempo. Junto con Advance SystemCare Ultimate tienes una herramienta completa para mantener tu sistema rápido y seguro. No necesitas esperar (PC se cierra por sí mismo) utilizando SD todos los días. Matiene tu sistema en las mejores condiciones, aunque no tienes experiencia técnica."</dd>
      </dl>
      <dl>
        <dt>
          <h3>Comentario de usuario</h3></dt>
        <dd>
          <h4>"Smart Defrag v7 es esencial para mi sistema, que hace todo lo que necesito y quiero hacer."</h4>
        </dd>
        <dd>"Estoy más satisfecho con Smart Defrag v7. Cada vez que funciona como un encanto y todo lo que tengo que hacer es ejecutar el programa y todo está limpio y me deja satisfecho al 100%. No sólo con el programa, sino también con la repuesta rápida cuando necesitaba consejo sobre cómo solucionar los problemas que podría haber tenido. Me gusta el programa mucho."</dd>
      </dl>
    </div>
    <ul class="users clearfix">
      <li>
        <div class="pic"><img src="<?php echo getStaticUrl('images/amnon.png')?>" alt="Amnon">
        </div>
        <p>Amnon</p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo getStaticUrl('images/edward-lee-ah-yen.png')?>" alt="Edward Lee Ah Yen"></div>
        <p>Edward Lee Ah Yen</p>
      </li>
      <li class="active">
        <div class="pic"><img src="<?php echo getStaticUrl('images/softonic.png')?>" alt="Softonic">
        </div>
        <p>Softonic</p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo getStaticUrl('images/hans.png')?>" alt="Hans">
        </div>
        <p>Hans</p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo getStaticUrl('images/jim-parten.png')?>" alt="Jim Parten">
        </div>
        <p>Jim Parten</p>
      </li>
    </ul>
  </div>
  <!-- review end -->
</div>

<!-- comparison-table start -->
<div class="comparison-table" id="compare">
  <table border="0" cellspacing="0" cellpadding="0" width="100%">
    <thead>
    <tr>
      <th colspan="2">Ver la comparación entre FREE y PRO</th>
      <th class="itemb"><div>Smart Defrag FREE</div></th>
      <th class="space"></th>
      <th class="itema"><div>Smart Defrag PRO <span>3 PCs / 1 año+ Paquete de regalo</span></div></th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_01.png"></td>
      <td class="virtue">	Desfragmentación y optimización básica de disco duro</td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-star.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_02.png"></td>
      <td class="virtue">Velocidad hasta 200% más rápida de acceso a archivos</td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_03.png"></td>
      <td class="virtue">Desfragmentación del Tiempo de Arranque para el inicio de PC más rápido</td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_04.png"></td>
      <td class="virtue">Desfragmentar archivos fragmentados automáticamente e inteligentemente</td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_05.png"></td>
      <td class="virtue">	Personalizar modo de desfragmentación y discos / archivos que van a ser desfragmentados</td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_06.png"></td>
      <td class="virtue">	DMA aplicada para transferencia de datos mejor, más rápido y más estable</td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_09.png"></td>
      <td class="virtue">	Actualización automática a la última versión</td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_10.png"></td>
      <td class="virtue">	24/7 Soporte Técnico gratis</td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    </tbody>
    <tfoot>
    <tr>
      <th colspan="4"></th>
      <th class="itema">
        <del>89,93€ </del> <strong>15,99€</strong>
        <a href="https://www.iobit.com/buy.php?product=es-sd63pcpfisu1599&ref=es_sd63pcpfisu1599purchase2011<?php echo $refStr;?>&refs=es_purchase_sd"
           onclick="ga('send', 'event', 'sdbuy', 'buy', 'sd63pcpfisupurchase2011-es')"
           class="buybtn">
          Comprar ahora
        </a>
        <p>¡Solo quedan <strong class="raduem"></strong> <b class="packsNum">50</b> paquetes! </p>
      </th>
    </tr>
    </tfoot>
  </table>
</div>
<!-- comparison-table end -->

<!--  footbuy start-->
<div class="footbuy">
  <div class="wrapper">
    <h2>¡No lo dudes para conseguir los maravilloso regalos!</h2>
    <h3>Date prisa, solo quedan <strong class="raduem"></strong> <span class="surplus"><b class="one"><span>0</span></b><b class="two"><span>0</span></b></span> paquetes</h3>
    <div class="clearfix">
      <div class="imgbox fl"><img src="<?php echo getStaticUrl('images/sd-box-bottom.png')?>" alt=""/></div>
      <ul class="footbuy-list fl">
        <li class="one">1 Año/3 PCs para Smart Defrag 7 </li>
        <li>1 Año/1 PC para los Regalos  </li>
      </ul>
      <div class="price fr">
        <p><strong>15,99€</strong> <del>89,93€</del></p>
        <a href="https://www.iobit.com/buy.php?product=es-sd63pcpfisu1599&ref=es_sd63pcpfisu1599purchase2011<?php echo $refStr;?>&refs=es_purchase_sd"
           onclick="ga('send', 'event', 'sdbuy', 'buy', 'sd63pcpfisupurchase2011-es')"
           class="buybtn">
          Comprar ahora
        </a>
      </div>
    </div>
  </div>
</div>
<!--  footbuy end-->

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