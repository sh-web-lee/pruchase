<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';

function microtime_float(){
  list($usec, $sec) = explode(' ', microtime());
  return ((float)$usec + (float)$sec);
}

$buyNum = ceil(microtime_float()*1000/20000) - 69041325;
$buyNum = number_format($buyNum);

function get_line($file, $line)
{
  $fp = fopen($file, 'r');
  $i = 0;
  while (!feof($fp)) {
    $i++;
    $c = fgets($fp);
    if ($i == $line) {
      return $c;
      break;
    }
  }
}
$viewNum=rand(60,88);

if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'promolaes20200727_p' . $date;
  $c_name_t='promolaes20200727_t' . $date;
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=99;
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
  echo json_encode(array('packsNum'=>$packsNum,'saleType'=>$saleType,'viewNum'=>$viewNum));
  exit();
}

// if ($_GET['action'] == 'getPacks') {
//   $date = $_GET['d'];
//   $time = time();
//   $c_name = 'promolaes20200727' . $date;
//   if (!isset($_COOKIE[$c_name])) {
//     setcookie($c_name, '99'.'-'.$time, $time + 3600 * 24 *2);
//   } else {
//     $packsNum = explode('-',$_COOKIE[$c_name]);
//     // $outtime = $time-$packsNum[1];
//     if($packsNum < 3){
//       // $addPacks = ceil($outtime/4);
//       $packsNum = 3;
//       return;
//       // $packsNum = $_COOKIE[$c_name] + $addPacks;
//     }else{
//       $packsNum = $_COOKIE[$c_name] - 1;
//     }
//     setcookie($c_name, $packsNum.'-'.$time, $time + 3600 * 24 * 2);
//   }
//   echo json_encode(array('packsNum'=>$packsNum,'saleType'=>$saleType,'viewNum'=>$viewNum));
//   exit();
// }
$refStr=empty($_GET['st'])?'':('-'.$_GET['st']);
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);
if(in_array($_GET['pop'],array('xr_sdpasc','xr_dbpasc','x_asc','xi_asc','xb_asc'))){
  $refStr.='-'.$_GET['pop'];
}
if(in_array($_GET['type'],array('pro','giveawayexp'))){
  $refStr.='-'.$_GET['type'];
}
$refStr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-l'.$_GET['litype'].'-e'.$_GET['expd'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Oferta especial para nuestros usuarios de Latinoamérica - IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800&display=swap" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>

<body>

<!-- banner start -->
<div class="banner">
  <div class="wrapper clearfix">
    <a class="logo" href="https://www.iobit.com/es/index.php" target="_blank">IObit</a>
    <h1>¡Promo de Locura!</h1>
    <p class="subtitle">Aprovecha la primera promoción especial para nuestros usuarios de Latinoamérica</p>
    <div class="banlist">
      <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt=""/>
      <div class="price">
        <p><strong>$<big>14</big>.99</strong>  <del>$29.99</del></p>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=es-asc131pc1499la&ref=es_asc131pc1499purchase2007la<?php echo $refStr;?>&refs=es_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc1pcpurchase2007la-es');">
          Comprar
        </a>
      </div>
      <ul class="txtlist">
        <li><i class="all-icons"></i> $15 ahorrado</li>
        <li><i class="all-icons"></i> Advanced SystemCare <del>$29.99</del></li>
      </ul>
      <div class="discount">
        <b>-50%</b>
        <p>1 año / 1 PC</p>
      </div>
    </div>
    <div class="banlist big">
      <div class="gift"><i class="all-icons"></i> <b class="reduce"><span class="first">99</span></b> personas han comprado</div>
      <img src="<?php echo getStaticUrl('images/asc-gift-box.png')?>" alt=""/>
      <div class="price">
        <p><strong>$<big>17</big>.99</strong> <del>$109.97</del></p>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=es-asc133pciusd1799la&ref=es_asc133pciusd1799purchase2007la<?php echo $refStr;?>&refs=es_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc3pcpurchase2007la-es');">
          Comprar
        </a>
      </div>
      <ul class="txtlist">
        <li><i class="all-icons"></i> $91.98 ahorrado</li>
        <li><i class="all-icons"></i> Advanced SystemCare <del>$49.99</del></li>
        <li><i class="all-icons red"></i> Smart Defrag PRO <del>$29.99</del></li>
        <li><i class="all-icons red"></i> IObit Uninstaller PRO <del>$29.99</del></li>
      </ul>
      <div class="discount">
        <b>-84%</b>
        <p>1 año / 3 PCs</p>
      </div>
    </div>
  </div>
</div>
<!-- banner end -->

<!-- payment start -->
<div class="payment">
  <ul class="wrapper clearfix">
    <li class="fl">
      <img src="<?php echo getStaticUrl('images/moneyback-small.png')?>" alt=""/>
      <span>60 Días Reembolso</span>
      <img src="<?php echo getStaticUrl('images/seguro.png')?>" alt=""/>
      <span>Pago seguro </span>
      <img src="<?php echo getStaticUrl('images/service-small.png')?>" alt=""/>
    </li>
    <li class="last fr">
      <img src="<?php echo getStaticUrl('images/green-fork.png')?>" alt=""/>
      <span>
        Estamos seguros de que activando la versión PRO por un precio asequible 
        te olvidarás de tus dolores de cabeza a la hora de la limpieza y optimización de tu PC
      </span>
    </li>
  </ul>
</div>
<!-- payment end -->

<!-- benefit start -->
<div class="benefit">
  <div class="wrapper">
    <h2>Advanced SystemCare PRO es una edición mejorada de la versión gratuita. Las funciones automáticas y avanzadas te garantizan un mejor rendimiento de tu PC.</h2>
    <div class="original clearfix">
      <div class="showcase">
        <div class="inner">
          <ul class="screenshot">
            <li>
              <img src="<?php echo getStaticUrl('images/screenshot-00.jpg'); ?>" alt="">
            </li>
            <li>
              <img src="<?php echo getStaticUrl('images/screenshot-04.jpg'); ?>" alt="">
            </li>
            <li>
              <img src="<?php echo getStaticUrl('images/screenshot-02.jpg'); ?>" alt="">
            </li>
            <li>
              <img src="<?php echo getStaticUrl('images/screenshot-03.jpg'); ?>" alt="">
            </li>
            <li>
              <img src="<?php echo getStaticUrl('images/screenshot-01.jpg'); ?>" alt="">
            </li>
          </ul>
        </div>
        <ul class="zoom">
          <li></li>
          <li class="fun3">
            <div class="container">
              <img src="<?php echo getStaticUrl('images/screenshot-02-zoom.png'); ?>" alt="">
            </div>
          </li>
          <li class="fun2">
            <div class="container">
              <img src="<?php echo getStaticUrl('images/screenshot-03-zoom.png'); ?>" alt="">
            </div>
          </li>
          <li class="fun4">
            <div class="container">
              <img src="<?php echo getStaticUrl('images/screenshot-04-zoom.png'); ?>" alt="">
            </div>
          </li>
          <li class="fun5 active">
            <div class="container">
              <img src="<?php echo getStaticUrl('images/screenshot-05-zoom.png'); ?>" alt="">
            </div>
          </li>
        </ul>
        <ul class="list-icon"><li></li><li></li><li></li><li></li><li class="active"></li>
        </ul>
      </div>
      <div class="detail-list">
        <dl class="one">
          <dt><i class="benefit04"></i></dt>
          <dd>
            <h3>100% PROTEGIDO</h3>
            <p>Protege tus datos personales y tu privacidad de intrusiones secretas, detiene todos los ataques de programas maliciosos y mantiene tu privacidad dos veces tan segura como en la versión gratuita.</p>
          </dd>
        </dl>
        <dl>
          <dt><i class="benefit02"></i></dt>
          <dd>
            <h3>200% * MÁS RÁPIDO</h3>
            <p>Borra todos los archivos innecesarios y optimiza el CPU y la RAM para acelerar el inicio del PC, aumenta la velocidad del sistema y hace que una computadora lenta sea hasta un 200% más rápida.</p>
          </dd>
        </dl>
        <dl class="three">
          <dt><i class="benefit03"></i></dt>
          <dd>
            <h3>300% * MÁS VELOCIDAD DE NAVEGACIÓN</h3>
            <p>Acelera la velocidad de descarga, navegación, juegos y visualización de YouTube hasta en un 300%.</p>
          </dd>
        </dl>
        <dl class="four three active">
          <dt><i class="benefit01"></i></dt>
          <dd>
            <h3>MÁS ESPACIO DISPONIBLE EN TU COMPUTADORA </h3>
            <p>Elimina archivos basura, enlaces no válidos, archivos de registro del sistema y archivos de descarga incompletos con optimización avanzada. </p>
          </dd>
        </dl>
        <a href="Javascript:void(0);" class="textlink">Ver más sobre versión PRO>></a>
      </div>
    </div>
  </div>
</div>
<!-- benefit end -->

<!-- review start -->
<div class="review">
  <div class="wrapper clearfix">
    <dl class="fl">
      <dt>
        <img class="on" src="<?php echo getStaticUrl('images/bruce-ramsay.png')?>" alt="">
        <img src="<?php echo getStaticUrl('images/hank-ewert.png')?>" alt="">
        <img src="<?php echo getStaticUrl('images/charles-r-widick.png')?>" alt="">
        <img src="<?php echo getStaticUrl('images/loretta-harnarine.png')?>" alt="">
        <img src="<?php echo getStaticUrl('images/softonic.png')?>" alt="">
      </dt>
      <dd>
        <p class="on">Bruce Ramsay</p>
        <p>Hank Ewert</p>
        <p>Charles R. Widick</p>
        <p>Loretta Harnarine</p>
        <p>Softonic</p>
      </dd>
    </dl>
    <div class="content fr">
      <div class="on">
        <h3>Comentarios del usuario</h3>
        <p>"Con la nueva compra de la versión complete, mi ordenador ha estado libre de “bugs” por años y no me ha dejado solo en ningun momento. Contacte ASC recientemente y respondieron en 1 dia con todo lo que necesitaba saber."</p>
      </div>
      <div>
        <h3>Comentarios del usuario</h3>
        <p>"No soy un expert en ordenadores como mucha gente lo es. No cuantos programas he probado durante años, todos diciendo ser los mejores pero nunca llegando cerca a ASC que yo sepa. Desde que tengo este programa no he tenido que llamar a un tecnico. A sobrepasado mis expectativas, siempre actualizado y los graficos son geniales. Muchas gracias a todos los que estan hacienda mi vida mas facil."</p>
      </div>
      <div>
        <h3>Comentarios del usuario</h3>
        <p>"Como tecnico de ordenadores, encuentro que al descargar y escanear ASC Gratis, la mayoría de problemas estan resueltos. Cuando acabo una reparación, usualmente sugiero al cliente comprar el paquete PRO. Quien necesita un tecnico cuando tienes el poder de ASC PRO trabajando en tu sistema 24-7? Este es el major product que un usuario puede comprar desde casa. Gracias por hacer mi trabajo más fácil."</p>
      </div>
      <div>
        <h3>Comentarios del usuario</h3>
        <p>"Este programa es lo major que he probado. Mi ordenador trabaja mucho major y rapido ahora que he descargado ASC. A limpiado archivos innecesarios y carpetas vacias. A limpiado y desfragmentado los registros en todos los archivos de la PC. Recomiendo ASC, no es caro y lo que hara para tu ordenador sera totalmente incredible. Lo amaras, lo prometo."</p>
      </div>
      <div>
        <h3>Comentarios mediáticos</h3>
        <p>“Advanced SystemCare Pro incluye una nueva tecnología de protección para mejorar la seguridad al navegar por Internet, una instalación más sencilla y un nuevo motor para desfragmentar discos duros a una mayor velocidad.”</p>
      </div>
    </div>
    <ul class="small-person clearfix">
      <li class="on"><img src="<?php echo getStaticUrl('images/bruce-ramsay.png')?>" alt=""></li>
      <li><img src="<?php echo getStaticUrl('images/hank-ewert.png')?>" alt=""></li>
      <li><img src="<?php echo getStaticUrl('images/charles-r-widick.png')?>" alt=""></li>
      <li><img src="<?php echo getStaticUrl('images/loretta-harnarine.png')?>" alt=""></li>
      <li><img src="<?php echo getStaticUrl('images/softonic.png')?>" alt=""></li>
    </ul>
    <ul class="point clearfix">
      <li class="on"></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
    </ul>
  </div>
</div>
<!-- review end -->

<!-- comparison start -->
<div class="comparison wrapper">
  <h2>Advanced SystemCare 13 PRO</h2>
  <p>Limpieza profunda, Internet 300% más rápido y protección en tiempo real para PC.</p>
  <table>
    <thead>
      <tr>
        <th class="text" colspan="2"></th>
        <th class="space"></th>
        <th class="itema"><div>Advanced SystemCare <br> <b>Free</b></div></th>
        <th class="space"></th>
        <th class="itemb"><div>Advanced SystemCare <br> <b>PRO</b></div></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/icons01.png')?>" alt=""></td>
        <td class="text">Limpieza y optimización básica</td>
        <td class="space"></td>
        <td class="itema grey"><span class="all-icons">√</span></td>
        <td class="space"></td>
        <td class="itemb"><span class="all-icons">√</span></td>
      </tr>
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt=""></td>
        <td class="text">Bloquea links malicios y mensajeros sospechos en el email <em class="new">NUEVO</em></td>
        <td class="space"></td>
        <td class="itema grey"><span class="all-icons">√</span></td>
        <td class="space"></td>
        <td class="itemb"><span class="all-icons">√</span></td>
      </tr>
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt=""></td>
        <td class="text">Encendido hasta un 200% más rápido <em>MEJORADO</em></td>
        <td class="space"></td>
        <td class="itema"><span class="all-icons">×</span></td>
        <td class="space"></td>
        <td class="itemb"><span class="all-icons">√</span></td>
      </tr>
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/icons04.png')?>" alt=""></td>
        <td class="text">Encendido hasta un 300% de velocidad Web</td>
        <td class="space"></td>
        <td class="itema"><span class="all-icons">×</span></td>
        <td class="space"></td>
        <td class="itemb"><span class="all-icons">√</span></td>
      </tr>
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/icons05.png')?>" alt=""></td>
        <td class="text">1 clic para mantener programas importantes actualizados <em>MEJORADO</em></td>
        <td class="space"></td>
        <td class="itema"><span class="all-icons">×</span></td>
        <td class="space"></td>
        <td class="itemb"><span class="all-icons">√</span></td>
      </tr>
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/icons06.png')?>" alt=""></td>
        <td class="text">Protección completa de PC para detectar y eliminar las infecciones más profundas <em>MEJORADO</em></td>
        <td class="space"></td>
        <td class="itema"><span class="all-icons">×</span></td>
        <td class="space"></td>
        <td class="itemb"><span class="all-icons">√</span></td>
      </tr>
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/icons07.png')?>" alt=""></td>
        <td class="text">Protección Premium automática que limpia información personal que puede ser rastreada</td>
        <td class="space"></td>
        <td class="itema"><span class="all-icons">×</span></td>
        <td class="space"></td>
        <td class="itemb"><span class="all-icons">√</span></td>
      </tr>
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/icons08.png')?>" alt=""></td>
        <td class="text">Disimula la huella digital para mantener tu comportamiento privado en línea</td>
        <td class="space"></td>
        <td class="itema"><span class="all-icons">×</span></td>
        <td class="space"></td>
        <td class="itemb"><span class="all-icons">√</span></td>
      </tr>
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/icons09.png')?>" alt=""></td>
        <td class="text">Manttine tus datos personales alejados de programas no confiables <em>MEJORADO</em></td>
        <td class="space"></td>
        <td class="itema"><span class="all-icons">×</span></td>
        <td class="space"></td>
        <td class="itemb"><span class="all-icons">√</span></td>
      </tr>
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/icons10.png')?>" alt=""></td>
        <td class="text">Detecta y Bloquea continuamente agujeros de seguridad en tiempo real <em>MEJORADO</em></td>
        <td class="space"></td>
        <td class="itema"><span class="all-icons">×</span></td>
        <td class="space"></td>
        <td class="itemb"><span class="all-icons">√</span></td>
      </tr>
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/icons11.png')?>" alt=""></td>
        <td class="text">Actualización automática de la última versión</td>
        <td class="space"></td>
        <td class="itema"><span class="all-icons">×</span></td>
        <td class="space"></td>
        <td class="itemb"><span class="all-icons">√</span></td>
      </tr>
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/icons12.png')?>" alt=""></td>
        <td class="text">Soporte técnico Gratis 24/7</td>
        <td class="space"></td>
        <td class="itema"><span class="all-icons">×</span></td>
        <td class="space"></td>
        <td class="itemb"><span class="all-icons">√</span></td>
      </tr>
    </tbody>
  </table>
</div>
<!-- comparison end -->

<!-- giftbox start -->
<div class="giftbox">
  <div class="wrapper">
    <h2>CANTIDAD LIMITADA, ¡PAGA UN PRECIO CON DESCUENTO Y OBTÉN dos REGALOS! * </h2>
    <div class="clearfix">
      <dl class="first">
        <dt><img src="<?php echo getStaticUrl('images/gift-iu.png')?>" alt="IObit Uninstaller PRO"/></dt>
        <dd>
          <h3>IObit Uninstaller PRO</h3>
          <p>Elimina programas completamente, limpia automáticamente los restos y actualiza fácilmente el software.</p>
          <ul>
            <li>Desinstalación completa.</li>
            <li>Desinstalación limpia.</li>
            <li>Limpieza de restos.</li>
          </ul>
        </dd>
      </dl>
      <dl class="last"> 
        <dt><img src="<?php echo getStaticUrl('images/gift-sd.png')?>" alt="Smart Defrag PRO"/></dt>
        <dd>
          <h3>Smart Defrag PRO</h3>
          <p>Desfragmenta rápida y profundamente optimizando el rendimiento del disco duro y del PC.</p>
          <ul>
            <li><span>Un PC más rápido y una mayor velocidad de acceso.</span></li>
            <li>Menor tiempo de inicio del sistema.</li>
            <li>Rendimiento de juego mejorado.</li>
          </ul>
        </dd>
      </dl>
    </div>
    <!-- <div class="price">
      <p><strong><big>22</big>,95€</strong> <del>139.92€</del></p>
      <a class="buybtn"
         href="https://www.iobit.com/buy.php?product=es-asc133pciusd1799la&ref=es_asc133pciusd1799purchase2007la<?php echo $refStr;?>&refs=es_purchase_asc"
         onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc3pcpurchase2007la-es');">
        COMPRAR AHORA
      </a>
    </div> -->
  </div>
</div>
<!-- giftbox end -->

<!-- awards start -->
<div class="awards">
  <div class="wrapper">
    <h2>Premios de todo el mundo.</h2>
    <p>
      Teniendo la confianza y reconocimiento de la prensa de clase mundial <br>
      en los últimos 12 años, sabes que estas obteniendo el mejor optimizador para PC.
    </p>
    <img src="<?php echo getStaticUrl('images/awards.png')?>" alt="">
  </div>
</div>
<!-- awards end -->

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

<!-- floatlayer start -->
<div id="floatlayer" class="floatlayer">
  <div class="wrapper clearfix">
    <div class="left fl">
      <img class="pc on" src="<?php echo getStaticUrl('images/asc-gift-box.png')?>" alt="Advanced SystemCare Ultimate PRO"/>
      <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="Advanced SystemCare Ultimate PRO"/>
    </div>
    <ul class="float-change fl">
      <li class="on" data-num="1"><span>1 año / 3 PCs + Software de regalo </span> <b>-84%</b></li>
      <li data-num="0"><span>1 año / 1 PC </span> <b>-50%</b></li>
    </ul>
    <div class="price fr">
      <p><strong>$<big>17</big>.99</strong> <del>109.97</del></p>
      <a class="buybtn"
         href="https://www.iobit.com/buy.php?product=es-asc133pciusd1799la&ref=es_asc133pciusd1799purchase2007la<?php echo $refStr;?>&refs=es_purchase_asc"
         onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc3pcpurchase2007la-es');">
        Comprar
      </a>
    </div>
  </div>
</div>
<!-- floatlayer end -->

<script>refStr="<?php echo $refStr;?>";</script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>