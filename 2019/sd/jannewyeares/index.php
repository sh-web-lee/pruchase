<?php 
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
    $pResUrl = './';
    $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

function microtime_float(){
    list($usec, $sec) = explode(' ', microtime());
    return ((float)$usec + (float)$sec);
}

$viewNum=rand(96,125);
if(!empty($_GET['action'])&&($_GET['action']=='getPacks')){
  $date=$_GET['d'];
  $cName='essdoct'.$date;
  $cookie=$_COOKIE[$cName];
  if($cookie){
    $packsNum=$_COOKIE[$cName];
    if($packsNum>2){
      $packsNum--;
      setcookie($cName,$packsNum);
    }else{
      $packsNum=2;
    }
  }else{
    $packsNum=97;
    setcookie($cName,$packsNum);
  }
  echo json_encode(array('packsNum'=>$packsNum,'viewNum'=>$viewNum));
  exit();
}

$refStr='';
if(in_array($_GET['ref'],array('sdfeatures_luckshow','sdddact_luckshow','sdfeatures_luckhide','sdddact_luckhide',
    'sdddact','sdgoact','sdbtdact','sdacact','sdadact','sddrfact','sddcfact','sdaad','sdaadsd',
    'sdfeatures_noaction','sdddact_noaction','actreport'))){
  $refStr.='-'.$_GET['ref'];
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" >
  <title>Ahorra 74% de descuento y regalos exclusivos para Smart Defrag PRO – IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
    <?php echo $gJavascript['public']; ?>
    <?php echo $gJavascript['head']; ?>
</head>
<body>

<!-- banner start -->
<div class="banner">
  <div class="wrapper">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/es/index.php" target="_blank">
      <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
    </a>
    <!-- stars -->
    <div class="stars">
      <span class="one"></span>
      <span class="two"></span>
      <span class="three"></span>
      <span class="four"></span>
      <span class="five"></span>
    </div>
    <!-- title -->
    <h1>VENTA FLASH DE LA SEMANA</h1>
    <h4>El mejor precio del año, no te pierdas</h4>
    <!-- content -->
    <div class="clearfix">
      <!-- left-message -->
      <div class="left reduce-box fl">
        <img src="<?php echo getStaticUrl('images/sd-box.png')?>" alt="">
      </div>
      <!-- right-message -->
      <div class="offer fl">
        <h3>500 cantidades limitadas disponibles hoy</h3>
        <p class="surplus">
          <b class="one">0</b><b class="two">0</b><b class="three">0</b> paquetes disponibles ahora
        </p>
        <div class="progressbar">
          <span></span>
        </div>
        <p class="view">
          <i class="all-icons"></i> <b class="viewNum"><?php echo $viewNum;?></b> clientes están viendo 
        </p>
        <p class="price"><strong>17,99€</strong> <del>69,94€</del></p>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=es-sd63pcpf1799&ref=es_sd63pcpfpurchase1901<?php echo $_GET['ref']; ?>&refs=es_purchase_sd"
           onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdpurchase1901-es')">
          Comprar ahora
        </a>
        <p class="attention">1 año de suscripción / 3 PCs</p>
        <img class="moneyback" src="<?php echo getStaticUrl('images/moneyback.png')?>" alt="">
      </div>
    </div>
  </div>
</div>
<!-- banenr end -->

<!-- payment start -->
<div class="payment">
  <img src="<?php echo getStaticUrl('images/payment.png')?>" alt="">
</div>
<!-- payment end -->

<div class="intro wrapper">
  <h2>Maximiza el rendimiento del disco duro & Acelera tu PC con SD 6 PRO</h2>
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

<!-- gift-box start -->
<div class="gift-box">
  <div class="wrapper">
    <!-- gift-box title -->
    <h2>¡Disfruta de regalo exclusivo para la oferta exclusiva!</h2>
    <div class="clearfix">
      <!-- PF -->
      <dl class="pf-box">
        <dt><img src="<?php echo $pResUrl;?>images/pf-box.png" alt=""></dt>
        <dd>
          <h3>Protected Folder</h3>
          <p><b>0€</b></p>
          <p>
            La herramienta de protección de carpeta fácil de usar y <br> con una contraseña.
          </p>
        </dd>
      </dl>
    </div>
    <!-- words -->
    <h4>  ¡Rápido, cantidades limitadas disponibles!</h4>
    <p class="surplus"><b class="packsNum"><?php echo $packsNum ?></b> paquetes disponibles ahora</p>
    <!-- buybtn -->
    <a class="buybtn"
       href="https://www.iobit.com/buy.php?product=es-sd63pcpf1799&ref=es_sd63pcpfpurchase1901<?php echo $_GET['ref']; ?>&refs=es_purchase_sd"
       onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdpurchase1901-es')">
      Comprar ahora
    </a>
  </div>
</div>
<!-- gift-box end -->

  <!-- awards start -->
  <div class="awards">
    <div class="wrapper">
      <h2>Recomendado y premiado por estos Medios</h2>
      <img src="<?php echo getStaticUrl('images/awards.jpg')?>" alt="" />
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
          <h4>"Smart Defrag v6 es esencial para mi sistema, que hace todo lo que necesito y quiero hacer."</h4>
        </dd>
        <dd>"Estoy más satisfecho con Smart Defrag v6. Cada vez que funciona como un encanto y todo lo que tengo que hacer es ejecutar el programa y todo está limpio y me deja satisfecho al 100%. No sólo con el programa, sino también con la repuesta rápida cuando necesitaba consejo sobre cómo solucionar los problemas que podría haber tenido. Me gusta el programa mucho."</dd>
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

  <!-- compare -->
  <!-- comparison start -->
  <div class="comparison wrapper" id="compare">
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
      <thead>
        <tr>
          <th class="text" colspan="2">Ver la comparación entre FREE y PRO:</th>
          <td class="space"></td>
          <th class="itemb">Smart Defrag <b>FREE</b></th>
          <td class="space"></td>
          <th class="itema">
            Smart Defrag PRO
            <p>1 Año, 3 PCs + Regalo</p>
            <a class="buybtn" href="https://www.iobit.com/buy.php?product=es-sd63pcpf1799&ref=es_sd63pcpfpurchase1901<?php echo $_GET['ref']; ?>&refs=es_purchase_sd"
           onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdpurchase1901-es')">
              Comprar ahora
            </a>
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_01.png')?>" alt="" /></td>
          <td class="virtue">Desfragmentación y optimización básica de disco duro</td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_02.png')?>" alt="" /></td>
          <td class="virtue">Velocidad hasta 200% más rápida de acceso a archivos</td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons close"></i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_03.png')?>" alt="" /></td>
          <td class="virtue">Desfragmentación del Tiempo de Arranque para el inicio de PC más rápido    </td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons close"></i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt="" /></td>
          <td class="virtue">Desfragmentar archivos fragmentados automáticamente e inteligentemente</td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons close"></i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_05.png')?>" alt="" /></td>
          <td class="virtue">Personalizar modo de desfragmentación y discos / archivos que van a ser desfragmentados</td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons close"></i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_06.png')?>" alt="" /></td>
          <td class="virtue">DMA aplicada para transferencia de datos mejor, más rápido y más estable </td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons close"></i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_07.png')?>" alt="" /></td>
          <td class="virtue">No hay interrupción en trabajo o juego con el Modo Silencioso</td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt="" /></td>
          <td class="virtue">Experiencia superior de juego con optimización de juego</td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_11.png')?>" alt="" /></td>
          <td class="virtue">Soportar tarea programada para desfragmentación desocupada</td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_09.png')?>" alt="" /></td>
          <td class="virtue">Actualización automática a la última versión</td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons close"></i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_10.png')?>" alt="" /></td>
          <td class="virtue">24/7 Soporte Técnico gratis</td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons close"></i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- comparison end -->

<!-- bottomcart start -->
<div class="bottomcart">
  <div class="wrapper clearfix">
    <div class="left-message reduce-box fl">
      <img src="<?php echo getStaticUrl('images/sd-foot-box.png')?>" alt=""/>
    </div>
    <dl class="content fl">
      <dt>
        <h3>¡Cantidades limitadas! Sólo 089 disponibles ahora!</h3>
        <p class="surplus"><b class="one">0</b><b class="two">0</b><b class="three">0</b></p>
      </dt>
      <dd>
        <p class="price"><strong>17,99€</strong> <del>69,94</del></p>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=es-sd63pcpf1799&ref=es_sd63pcpfpurchase1901<?php echo $_GET['ref']; ?>&refs=es_purchase_sd"
           onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdpurchase1901-es')">
          Comprar ahora
        </a>
        <p class="attention">
          <i class="all-icons"></i> Más de <b>973,837</b> personas han comprado
        </p>
      </dd>
    </dl>
  </div>
</div>
<!-- bottomcart end -->

<!--  footer start-->
<div class="footer">
  <!-- annotation -->
  <dl class="annotation wrapper">
    <dt>Nota:</dt>
    <dd>*Estos programas promocionales están sujetos a cambios sin previo aviso, dependiendo de nuestra discreción exclusiva en cualquier momento.</dd>
    <dd>*Datos pueden variar basados en diferentes sistemas u ordenadores.</dd>
  </dl>
  <!-- copyright -->
  <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Todos los derechos reservados*.</p>
</div>
<!-- footer end -->
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>