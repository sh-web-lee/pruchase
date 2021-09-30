<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../../';
}
include $pRootUrl.'include/common.inc.php';
if(!empty($_GET['AFF'])) $_GET['aff']=$_GET['AFF'];
if (empty($_GET['ref'])) $_GET['ref'] = 'esaff_imf8_2020flashsale';
$refStr=$_GET['ref'];

$affStr=empty($_GET['AFF'])?$_GET['aff']:$_GET['AFF'];
if(preg_match('/ir([0-9]*)/',$_GET['ref'],$matches)){
  $buyHref1="https://iobit.onfastspring.com/iobit-malware-fighter-pro-1-year-subscription-3-pcs-1999";
  $buyHref2="https://iobit.onfastspring.com/iobit-malware-fighter-pro-with-mid-year-gifts-1999";
}else{
  $buyHref1="https://www.iobit.com/buy.php?product=esaff-imf83pc1999&ref=".$refStr."&aff=".$affStr;
  $buyHref2="https://www.iobit.com/buy.php?product=esaff-imf83pcpfsd1999&ref=".$refStr."&aff=".$affStr;
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Oferta Especial para IObit Malware Fighter – IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>
</head>
<body>
<!-- banner -->
<div class="banner">
  <div class="wrapper">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/es/index.php" target="_blank">IObit</a>
    <!-- title -->
    <div class="title">
      <h1>VENTA FLASH</h1>
      <p>¡Descuendo hasta <b>87%</b> y los regalos gratis!</p>
    </div>
    <!-- countdown -->
    <p class="countdown">
      <i class="hourglass"></i>
      <span>Termina en: </span>
      <strong>00</strong> MIN
      <strong>00</strong> S
      <strong>00</strong> MS*
    </p>
    <!-- content -->
    <div class="content">

      <!-- 1pc -->
      <dl class="small left">
        <dt><span>-70%</span></dt>
        <dd>
          <!-- box -->
          <span class="box">IObit Malware Fighter PRO</span>
          <!-- price -->
          <p class="price"><big>19,</big>99 € <del>79,95€</del></p>
          <!-- buybtn -->
          <a class="buybtn"
             href="<?php echo $buyHref1;?>"
             onclick="ga('send', 'event', 'imfbuy', 'buy', 'esaffimf82020flashsale')">
            <i class="all-icons"></i>
            Comprar ahora
          </a>
          <!-- type -->
          <p class="type">1 año / 3 PCs</p>
        </dd>
      </dl>

      <!-- 3pc+bundle -->
      <dl class="large middle">
        <dt><span>-87%</span></dt>
        <dd>
          <!-- box -->
          <span class="box">IObit Malware Fighter PRO+Protected Folder+Smart Defrag PRO</span>
          <!-- price -->
          <p class="price"><big>19,</big>99 € <del>149,89€</del></p>
          <!-- buybtn -->
          <a class="buybtn"
             href="<?php echo $buyHref2;?>"
             onclick="ga('send', 'event', 'imfbuy', 'buy', 'esaffimf82020flashsale')">
            <i class="all-icons"></i>
            Comprar ahora
          </a>
          <!-- type -->
          <p class="type">1 año / 3 PCs</p>
        </dd>
      </dl>

    </div>
    <!-- payments -->
    <ul class="payments clearfix">
      <li class="one">
        <p>Formas de pago</p>
        <img src="<?php echo getStaticUrl('images/payments.png')?>" alt="">
      </li>
      <li class="two">
        <p>Certificación</p>
        <img src="<?php echo getStaticUrl('images/opswat.png')?>" alt="">
      </li>
      <li class="three">
        <p>Garantía de reembolso</p>
        <img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt="">
      </li>
      <li class="four">
        <p>Pago seguro</p>
        <img src="<?php echo getStaticUrl('images/godaddy.png')?>" alt="">
      </li>
    </ul>
  </div>
</div>
<!-- end banner -->

<!-- feature -->
<div class="feature">
  <div class="wrapper">
    <!-- title -->
    <h2><span>Las funciones más destacadas de IObit Malware Fighter PRO</span></h2>
    <!-- computer -->
    <img class="computer" src="<?php echo getStaticUrl('images/computer.png')?>" alt=""/>
    <!-- list -->
    <div class="right-lists">
      <ul>
        <li class="icon1">Caja Fuerte mantiene archivos importantes limpios<br>
          y fuera del alcance de terceros.</li>
        <li class="icon2">
          Añade una nueva capa de protección además del motor anti-ransomware para proteger múltiples archivos y carpetas de los atacantes.
        </li>
        <li class="icon3"> Evita que más de 200 millones de amenazas de seguridad infecten y dañen tu ordenador con el motor bitdefender.
        </li>
        <li class="icon4">Protege tu cámara contra el acceso no autorizado.</li>
      </ul>
      <a class="more" href="javascript:void(0)">  Ver más sobre la versión Pro >></a>
    </div>
  </div>
</div>
<!-- end feature -->

<!-- gifts -->
<div class="gifts">
  <div class="wrapper">
    <!-- title -->
    <h2>OFERTA LIMITADA, <br> ¡PAGA UN PRECIO CON DESCUENTO Y OBTÉN DOS REGALOS!</h2>
    <!-- content -->
    <div class="content clearfix">

      <!-- imf -->
      <dl class="clearfix imf">
        <dt><img src="<?php echo getStaticUrl('images/gifts-imf.png')?>" alt="IObit Malware Fighter PRO"></dt>
        <dd>
          <!-- price -->
          <p class="price"><big>19,</big>99 € <del>79,95€</del></p>
          <!-- buybtn -->
          <a class="buybtn"
             href="<?php echo $buyHref2;?>"
             onclick="ga('send', 'event', 'imfbuy', 'buy', 'esaffimf82020flashsale')">
            <i class="all-icons"></i>
            Comprar ahora
          </a>
        </dd>
      </dl>

      <!-- pf -->
      <dl class="clearfix pf">
        <dt><img src="<?php echo getStaticUrl('images/gifts-pf.png')?>" alt="Protected Folder"></dt>
        <dd>
          <p class="price">0€ <del>39,95€ </del></p>
          <ul>
            <li>
              La herramienta de protección <br>
              de carpeta fácil de usar con <br>
              una contraseña.
            </li>
          </ul>
        </dd>
      </dl>
      <!-- sd -->
      <dl class="clearfix sd">
        <dt><img src="<?php echo getStaticUrl('images/gifts-sd.png')?>" alt="Smart Defrag PRO"></dt>
        <dd>
          <p class="price">0€ <del>29,99€ </del></p>
          <ul>
            <li>
              Desfragmentador de disco <br>
              confiable e inteligente <br>
              con 7,000,000+ usuarios.
            </li>
          </ul>
        </dd>
      </dl>
    </div>
  </div>
</div>
<!-- end gifts -->

<!-- centbuy -->
<div class="centbuy wrapper">
  <h3>IObit Malware Fighter PRO + regalos gratis</h3>
  <!-- price -->
  <p class="price"><big>19,</big>99 € <del>149,89€</del></p>
  <!-- buybtn -->
  <a class="buybtn"
     href="<?php echo $buyHref2;?>"
     onclick="ga('send', 'event', 'imfbuy', 'buy', 'esaffimf82020flashsale')">
    <i class="all-icons"></i>
    Comprar ahora
  </a>
  <!-- countdown -->
  <p class="countdown">
    <i class="all-icons"></i>
    <strong>00</strong> H :
    <strong>00</strong> MIN :
    <strong>00</strong> S :
    <strong>00</strong> MS*
  </p>
</div>
<!-- end centbuy -->

<!-- intro -->
<div class="intro wrapper">
  <!-- top-message -->
  <h2>Premios y comentarios en todo el mundo</h2>
  <p>Lo hacemos lo mejor que podemos para satisfacer a nuestros usuarios en donde sea que estén</p>
  <ul class="message clearfix">
    <li>
      <strong>200+</strong>
      <p>Popular en más de <b>200</b> países y <br> territorios alrededor del mundo.</p>
    </li>
    <li>
      <strong>1,000+</strong>
      <p>Más de <b>1,000</b> medios y hemos <br> comentado nuestros productos.</p>
    </li>
    <li>
      <strong>100,000,000+</strong>
      <p>Más de <b>100</b> millones de usuarios en <br> todo el mundo eligen y recomiendan.</p>
    </li>
    <li>
      <strong>70%+</strong>
      <p>Más del <b>70%</b> de los usuarios de IObit <br> Malware Fighter han activado la versión PRO.</p>
    </li>
  </ul>
</div>
<!-- end intro -->

<!-- review -->
<div class="review">
  <div class="wrapper">
    <!-- title -->
    <h2>Lo que dicen de nosotros </h2>
    <!-- content -->
    <div class="content">
      <!-- details -->
      <div class="details">
        <p>
          "Estoy muy satisfecho con su producto IObit Malware Fighter. Anteriormente, este producto se me ocurrió. Tenía muchos problemas con interferencias maliciosas, no podía ver una película entera o un concierto. Debido a su nuevo producto, ahora cada operación es clara, segura y bien protegida. Escanea mi ordenador portátil sin afectar su rendimiento, mientras que también recomendé este producto a dos de mis amigos."
        </p>
        <p>
          "Solíamos utilizar hasta una docena de programas diferentes para mantener nuestras máquinas funcionando sin problemas. Tomaba horas cada semana para mantener la seguridad y el rendimiento. Ahora, con IObit Malware Fighter Pro y Advanced System Care Pro, todo está un solo lugar y nos toma sólo unos minutos cada dos días hacer los mismos trabajos con mucha más confianza. No hemos tenido ningún problema desde el uso de sus productos.”
        </p>
        <p class="on">
          "El programa utiliza dos motores de AV, el suyo y BitDefender, y parece ser efectivo contra el malware que no puede ser detectado por otras herramientas similares, por lo que es bueno que se pueda ejecutar junto con su software AV estándar. Puede detectar una gran variedad de spyware, ransomware, adware, troyanos, gusanos, keyloggers y bots."
        </p>
        <p>
          "Hace algunos años alguien llamó mi atención sobre IObit Malware Fighter. Primero fuí escéptico. Pero después de instalarlo, se convirtió en mi programa anti-malware favorito. Es muy fácil de usar. A través de los años ya ha detectado varias amenazas y las ha eliminado. En cooperación con otros programas IObit, como por ejemplo ASC, tengo una buena protección para mi PC. Ahora recomiendo estos programas a todos mis amigos y familiares."
        </p>
        <p>
          "Me gustaría dar las gracias a todo el personal de IObit por trabajar duro para proveernos los mejores programas. Es una gran actualización que ha hecho para sus usuarios. Es mucho más rápido en el escáner y fácil de usar. Las personas que realmente desean un buen programa de Malware y Antivirus que también tenga una buena relación calidad-precio no deben buscar más allá de IObit Malware Fighter. Yo recomendaría que olviden el resto y obtengan lo mejor que es IObit Malware Fighter."
        </p>
      </div>
      <!-- photos -->
      <ul>
        <li class="zero">
          <img src="<?php echo getStaticUrl('images/gelu-batir.png')?>" alt="Gelu Bati">
          <cite>Gelu Bati</cite>
        </li>
        <li class="one">
          <img src="<?php echo getStaticUrl('images/bob-bassett.png')?>" alt="Bob Bassett">
          <cite>Bob Bassett</cite>
        </li>
        <li class="two">
          <img src="<?php echo getStaticUrl('images/software-informer.png')?>" alt="Software Informer">
          <cite>Software Informer</cite>
        </li>
        <li class="three">
          <img src="<?php echo getStaticUrl('images/peter-stoffers.png')?>" alt="Peter Stoffers">
          <cite>Peter Stoffers</cite>
        </li>
        <li class="four">
          <img src="<?php echo getStaticUrl('images/david-cassidy.png')?>" alt="David Cassidy">
          <cite>David Cassidy</cite>
        </li>
      </ul>
      <!-- arrow -->
      <a class="prev btn" href="javascript: previous();"></a>
      <a class="next btn" href="javascript: nextpage();"></a>
    </div>
  </div>
</div>
<!-- end review -->

<!-- compare -->
<div class="compare wrapper">
  <!-- title -->
  <!-- table -->
  <table>
    <thead>
      <tr>
        <th class="text" colspan="2"> Vea por qué IObit Malware Fighter PRO es necesario para tu PC </th>
        <th class="pro"><div>IObit Malware Fighter PRO</div></th>
      </tr>
    </thead>
    <tbody>
      <!-- 01 -->
      <tr>
        <td class="icon"></td>
        <td class="text">Base de datos de antimalware</td>
        <td class="pro">más de 209 millones</td>
      </tr>
      <!-- 02 -->
      <tr>
        <td class="icon"></td>
        <td class="text">Motor de antivirus Bitdefender</td>
        <td class="pro"><i class="all-icons"></i></td>
      </tr>
      <!-- 03 -->
      <tr>
        <td class="icon"></td>
        <td class="text">Motor de Anti-Ransomware</td>
        <td class="pro"><i class="all-icons"></i></td>
      </tr>
      <!-- add -->
      <tr>
        <td class="icon"></td>
        <td class="text">Protege tus carpetas principales y múltiples tipos de archivos contra ataques de ransomware.</td>
        <td class="pro"><i class="all-icons"></i></td>
      </tr>
      <!-- 04 -->
      <tr>
        <td class="icon"></td>
        <td class="text">Archivos Específicos Protegidos contra Accesos no Autorizados en Caja Fuerte</td>
        <td class="pro"><i class="all-icons"></i></td>
      </tr>
      <!-- 05 -->
      <tr>
        <td class="icon"></td>
        <td class="text">Protección completa en tiempo real para la mejor seguridad del PC</td>
        <td class="pro"><i class="all-icons"></i></td>
      </tr>
      <!-- 06 -->
      <tr>
        <td class="icon"></td>
        <td class="text">Protege tu cámara contra el acceso no autorizado</td>
        <td class="pro"><i class="all-icons"></i></td>
      </tr>
      <!-- 07 -->
      <tr>
        <td class="icon"></td>
        <td class="text">Previene infecciones de virus transmitidas por discos USB</td>
        <td class="pro"><i class="all-icons"></i></td>
      </tr>
      <!-- 08 -->
      <tr>
        <td class="icon"></td>
        <td class="text">Detecta un proceso malicioso que se ejecuta en la RAM</td>
        <td class="pro"><i class="all-icons"></i></td>
      </tr>
      <!-- 09 -->
      <tr>
        <td class="icon"></td>
        <td class="text">Detecta amenazas mediante el análisis de acciones maliciosas</td>
        <td class="pro last"><i class="all-icons"></i></td>
      </tr>
      <!-- 09 -->
      <tr>
        <td class="icon"></td>
        <td class="text">Limpia automáticamente el rastreo de navegación para evitar el seguimiento malicioso</td>
        <td class="pro last"><i class="all-icons"></i></td>
      </tr>
      <!-- 09 -->
      <tr>
        <td class="icon"></td>
        <td class="text">Actualización automática a la última versión</td>
        <td class="pro last"><i class="all-icons"></i></td>
      </tr>
      <!-- 09 -->
      <tr>
        <td class="icon"></td>
        <td class="text">Soporte técnico gratuito las 24 horas, 7 días a la semana</td>
        <td class="pro last"><i class="all-icons"></i></td>
      </tr>
    </tbody>
  </table>
</div>
<!-- end compare -->

<!-- bottombuy -->
<div class="bottombuy">
  <div class="wrapper">
    <!-- title -->
    <h2>¡Tiempo limitado! Aprovecha la oportunidad ahora</h2>
    <!-- content -->
    <div class="content clearfix">
      <!-- box -->
      <div class="box fl">
        <img class="on" src="<?php echo getStaticUrl('images/bottombuy-3pcbundle.png')?>" alt="IObit Malware Fighter PRO+Protected Folder+Smart Defrag PRO">
        <img src="<?php echo getStaticUrl('images/bottombuy-3pc.png')?>" alt="IObit Malware Fighter PRO">
      </div>
      <!-- selector -->
      <ul class="fl">
        <li class="two active"
            data-url="<?php echo $buyHref2;?>"
            data-ga="ga('send', 'event', 'imfbuy', 'buy', 'esaffimf82020flashsale')"
            data-price="19,"
            data-del="149,89€">
          1 Año / 3 PCs + regalos gratis
        </li>
        <li class="three"
            data-url="<?php echo $buyHref1;?>"
            data-ga="ga('send', 'event', 'imfbuy', 'buy', 'esaffimf82020flashsale')"
            data-price="19,"
            data-del="79,95€">
          1 Año / 3 PCs
        </li>
      </ul>
      <!-- message -->
      <dl class="fr">
        <dd>
          <!-- price -->
          <p class="price"><big>19,</big>99 € <del>149,89€</del></p>
          <!-- buybtn -->
          <a class="buybtn"
             href="<?php echo $buyHref2;?>"
             onclick="ga('send', 'event', 'imfbuy', 'buy', 'esaffimf82020flashsale')">
            <i class="all-icons"></i>
            Comprar ahora
          </a>
          <!-- countdown -->
          <p class="countdown">
            <i class="all-icons"></i>
            <strong>00</strong> H :
            <strong>00</strong> MIN :
            <strong>00</strong> S :
            <strong>00</strong> MS*
          </p>
        </dd>
      </dl>
    </div>
  </div>
</div>
<!-- end bottombuy -->

<!-- footer -->
<div class="footer wrapper">
  <dl>
    <dt>Nota: </dt>
    <dd>
      *.Estos programas promocionales están sujetos a cambios sin previo aviso, dependiendo de nuestra discreción exclusiva en cualquier momento.
    </dd>
    <dd>
      *.Datos pueden variar basados en diferentes sistemas u ordenadores.
    </dd>
  </dl>
  <p class="copyright">Copyright © 2005 - <?php echo date(Y)?> IObit. Todos los derechos reservados</p>
</div>
<!-- end footer -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>