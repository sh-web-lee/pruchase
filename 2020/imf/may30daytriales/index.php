<?php
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
  return ((float)$usec + (float)$sec);
}

$refstr=empty($_GET['ref'])?'':('-'.$_GET['ref']);

$buyNum = ceil(microtime_float() * 1000 / 20000) -68807174;
$buyNum = number_format($buyNum);

if ($_GET['action'] == 'getPacks'){
  echo $buyNum;
  exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>¡Alarga tu periodo de prueba 30 días gratis!</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:600,700" rel="stylesheet">
  <link href="<?php echo $pResUrl; ?>style/style.css" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <!--
  <script>
    var browserLanguage=MApp(2.2).language.langArr[0];
    if(browserLanguage=='fr'){
      window.location.href='https://purchase.iobit.com/fr/imf/30daytrial.php<?php echo empty($_SERVER["QUERY_STRING"])?"":("?".$_SERVER["QUERY_STRING"])?>';
    }
  </script>
  -->
  <?php echo $gJavascript['head']; ?>
  <script type="text/javascript">
    function decreasingPacks(){
      $.ajax({
        type: "GET",
        url: "./30daytrial.php",
        async:true,
        data: "action=getPacks&r="+Math.random(),
        success: function(packs){
          $('#buyNum').html(packs);
          setTimeout('decreasingPacks()', 20000);
        }
      });
    }
    setTimeout('decreasingPacks()', 20000);
  </script>
</head>
<body>
<!-- header start -->
<div class="banner">
  <div class="wrapper">
    <a href="http://www.iobit.com/es/index.php" class="logo" target="_blank">IObit</a>
    <div class="title">
      <h1>IObit Malware Fighter 8</h1>
      <h2>Disfruta <span>GRATIS</span> de 30 días de protección total con IObit Malware Fighter 8 PRO</h2>
    </div>
    <div class="content">
      <div class="left">
        <img src="<?php echo $pResUrl; ?>images/imf-box.png" alt="">
        <p><img src="<?php echo $pResUrl; ?>images/people.png" alt=""><strong id="buyNum"><?php echo $buyNum; ?></strong> personas ya han probado la versión PRO GRATIS</p>
      </div>
      <div class="right">
        <p class="now clearfix"><span class="text">Ahora</span> <span class="price">0€</span></p>
        <dl>
          <dt>Aprovecha la Oportunidad y Prueba la Versión PRO GRATIS</dt>
          <dd>Paga 0€ y prueba la versión PRO 30 días<dd>
          <dd>Puedes cancelarlo en cualquier momento durante el periodo de 30 días.</dd>
        </dl>
        <p class="leaving">¡Al salirte de esta página perderás tu oportunidad!</p>
        <a href="https://www.iobit.com/buy.php?product=es-imf30daytrial&ref=es_imf3pc30daytrial<?php echo $refstr;?>&refs=es_purchase_imf"
           onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf3pc30daytrial2005-es');"
           class="buybtn">
          Prueba PRO Gratis ahora
        </a>
      </div>
    </div>
  </div>
</div>
<!-- header end -->

<!-- trial -->
<div class="trial">
  <dl class="wrapper">
    <dt>Términos de la promoción de 30 días de periodo de prueba</dt>
    <dd>Al finalizar los 30 días de prueba se aplicarán cargos de 19,,99€ a tu tarjeta de crédito o cuenta PayPal de manera automática. El 70% de descuento sobre el precio original de 79,95€ es un bonus sólo para los usuarios que hayan alargado el periodo de prueba.</dd>
  </dl>
</div>
<!-- end trial -->

<!-- container start -->
<div class="main wrapper">
  <!-- enjoy -->
  <div class="enjoy clearfix">
    <h2>Continua Disfrutando de Protección Total Gratis los Próximos 30 Días</h2>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/icons01.jpg" alt=""></dt>
      <dd>
        <strong>Doble Protección de IObit y Bitdefender</strong>
        Combina el potente motor anti-malware de IObit con el motor antivirus líder mundial de Bitdefender para proporcionar una solución de seguridad anti-malware y anti-virus total y comprehensiva.
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/icons02.jpg" alt=""></dt>
      <dd>
        <strong>Detecta, Bloquea y Elimina más de 200,000,000 Amenazas</strong>
        El doble motor de ayuda a detectar, bloquear y eliminar más de 200 millones de amenazas como spyware, ransomware, adware, troyanos, keyloggers, bots, gusanos y hijackers profunda y eficientemente.
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/icons03.jpg" alt=""></dt>
      <dd>
        <strong>Protección de Cámara y Anti-Rastreo</strong>
        Te informa inmediatamente si algún programa está intentando acceder a tu cámara secretamente y limpia automáticamente los rastros dañinos para proteger la información sensible que has puesto online, como tus datos bancarios, correos electrónicos u otros datos de cuentas de redes sociales.
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/icons04.jpg" alt=""></dt>
      <dd>
        <strong>Bloquea el Ransomware y Protege tu Dinero y tus Archivos</strong>
        Previene de forma proactiva cualquier ransomware que intente entrar en tu PC. Ransomware como Petya/GoldenEye pueden ser bloqueados y eliminados fácilmente.
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/icons05.jpg" alt=""></dt>
      <dd>
        <strong>Protección de datos personales con contraseña</strong>
        Tus datos personales pueden guardarse separados de otro y protegerse con una contraseña personalizada. Nadie sin autorización podrá conseguir acceso a estos datos.
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/icons06.jpg" alt=""></dt>
      <dd>
        <strong>Previene Procesos Maliciosos y Virus del USB</strong>
        Bloquea y elimina procesos maliciosos que se ejecutan en el sistema así como virus que provienen de un USB.
      </dd>
    </dl>
  </div>

  <!-- opt-out -->
  <dl class="opt-out">
    <dt><span>Ahora</span> <span class="price">0€</span></dt>
    <dd>
      <a href="https://www.iobit.com/buy.php?product=es-imf30daytrial&ref=es_imf3pc30daytrial<?php echo $refstr;?>&refs=es_purchase_imf"
         onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf3pc30daytrial2005-es');"
         class="buybtn">
        Prueba PRO Gratis ahora
      </a>
    </dd>
    <dd><span>Puedes cancelarlo en cualquier momento durante los 30 días</span><span>Disfruta exclusivamente de un 55% de descuento una vez el periodo de prueba finalice</span></dd>
  </dl>

  <!-- media -->
  <div class="media clearfix">
    <h2>Comentarios de Medios y Usuarios</h2>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/software.jpg" alt=""></dt>
      <dd>
        <strong>Software.Informer</strong>
        <p>Es capaz de detectar una gran cantidad de spyware, ransomware, adware, troyanos, gusanos, keyloggers y bots.</p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/gelu-batir.jpg" alt=""></dt>
      <dd>
        <strong>Gelu Batir</strong>
        <p>Escanea mi portátil sin afectar a su rendimiento, por lo que ya se lo he recomendado a varios de mis amigos.</p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/clnet.jpg" alt=""></dt>
      <dd>
        <strong>Cnet</strong>
        <p>Está aplicación es fácil de usar e informativa, y limpia, configura y optimiza tu PC.</p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/david-cassidy.jpg" alt=""></dt>
      <dd>
        <strong>David Cassidy </strong>
        <p>El escáner es bastante rápido y es fácil de usar.</p>
      </dd>
    </dl>
  </div>

  <!-- comparison -->
  <div class="comparison">
    <!-- title -->
    <h2 class="on">La comparación entre FREE y PRO</h2>
    <!-- table -->
    <table>
      <thead>
      <tr>
        <th class="item-a"><p>Tu versión actual</p></th>
        <th class="item-b"></th>
        <th class="item-c"><p>IObit Malware Fighter 7 PRO</p></th>
      </tr>
      </thead>
      <tbody>
      <!-- 01 -->
      <tr>
        <td class="item-a">3 millones</td>
        <td class="item-b">Base de datos de antimalware</td>
        <td class="item-c">más de 203 millones</td>
      </tr>
      <!-- 02 -->
      <tr>
        <td class="item-a"><i class="all-icons"></i> No disponible</td>
        <td class="item-b">Motor de antivirus Bitdefender</td>
        <td class="item-c"><i class="all-icons"></td>
      </tr>
      <!-- 03 -->
      <tr>
        <td class="item-a"><i class="all-icons"></i> No disponible</td>
        <td class="item-b">Motor de Anti-Ransomware</td>
        <td class="item-c"><i class="all-icons"></td>
      </tr>
      <!-- 04 -->
      <tr>
        <td class="item-a"><i class="all-icons"></i> No disponible</td>
        <td class="item-b">
          <span>Archivos Específicos Protegidos contra Accesos no Autorizados en Caja Fuerte</span>
        </td>
        <td class="item-c"><i class="all-icons"></td>
      </tr>
      <!-- 05 -->
      <tr>
        <td class="item-a"><i class="all-icons"></i> No disponible</td>
        <td class="item-b">
          <span>Protección completa en tiempo real para la mejor seguridad del PC</span>
        </td>
        <td class="item-c"><i class="all-icons"></td>
      </tr>
      <!-- 06 -->
      <tr>
        <td class="item-a"><i class="all-icons"></i> No disponible</td>
        <td class="item-b">Protege tu cámara contra el acceso no autorizado</td>
        <td class="item-c"><i class="all-icons"></td>
      </tr>
      <!-- 07 -->
      <tr>
        <td class="item-a"><i class="all-icons"></i> No disponible</td>
        <td class="item-b">Previene infecciones de virus transmitidas por discos USB</td>
        <td class="item-c"><i class="all-icons"></td>
      </tr>
      <!-- 08 -->
      <tr>
        <td class="item-a"><i class="all-icons"></i> No disponible</td>
        <td class="item-b">Detecta un proceso malicioso que se ejecuta en la RAM</td>
        <td class="item-c"><i class="all-icons"></td>
      </tr>
      <!-- 09 -->
      <tr>
        <td class="item-a"><i class="all-icons"></i> No disponible</td>
        <td class="item-b">Detecta amenazas mediante el análisis de acciones maliciosas</td>
        <td class="item-c"><i class="all-icons"></td>
      </tr>
      <tr>
        <td class="item-a"><i class="all-icons"></i> No disponible</td>
        <td class="item-b">
          <span>Limpia automáticamente el rastreo de navegación para evitar el seguimiento malicioso</span>
        </td>
        <td class="item-c"><i class="all-icons"></td>
      </tr>
      <tr>
        <td class="item-a"><i class="all-icons"></i> No disponible</td>
        <td class="item-b">Actualización automática a la última versión</td>
        <td class="item-c"><i class="all-icons"></td>
      </tr>
      <tr>
        <td class="item-a"><i class="all-icons"></i> No disponible</td>
        <td class="item-b">Soporte técnico gratuito las 24 horas, 7 días a la semana</td>
        <td class="item-c"><i class="all-icons"></td>
      </tr>
      </tbody>
    </table>
  </div>
</div>
<!-- container end -->

<!-- bottom-buy -->
<div class="bottom-buy">
  <div class="wrapper">
    <img src="<?php echo $pResUrl; ?>images/imf-bottom-box.png" alt="">
    <ul>
      <li>Paga 0€ y prueba la versión PRO 30 días</li>
      <li>Puedes cancelarlo en cualquier momento durante los 30 días</li>
    </ul>
    <a href="https://www.iobit.com/buy.php?product=es-imf30daytrial&ref=es_imf3pc30daytrial<?php echo $refstr;?>&refs=es_purchase_imf"
       onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf3pc30daytrial2005-es');"
       class="buybtn">
      Prueba PRO Gratis ahora
    </a>
  </div>
</div>
<!-- end bottom-buy -->

<!-- product -->
<div class="product">
  <h2>Premios del Producto</h2>
  <img src="<?php echo $pResUrl; ?>images/awrad.png" alt="">
  <!-- footer start -->
  <div class="footer wrapper">Copyright © 2005 - <?php echo date(Y)?> IObit.  Todos los derechos reservados</div>
  <!-- footer end -->
</div>
<!-- end product -->
</body>
</html>