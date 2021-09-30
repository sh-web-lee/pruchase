<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../../';
}
include $pRootUrl.'include/common.inc.php';
if(!empty($_GET['AFF'])) $_GET['aff']=$_GET['AFF'];
if (empty($_GET['ref'])) $_GET['ref'] = 'esaff_imf7_2020specialsale';
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
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>
</head>
<body>
<!-- container -->
<div class="container">
  <!-- tree -->
  <div class="tree wrapper">
    <span class="tree-l"></span>
    <span class="tree-r"></span>
  </div>
  <!-- end tree -->

  <!-- spree -->
  <div class="spree wrapper">
    <div class="spree-box">
      <p>Solo quedan <b class="packsNum"><?php echo $packsNum?></b></p>
      <a class="spree-buy"
         href="https://www.iobit.com/buy.php?product=esaff-imf73pcpfsdamc1999&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>"
         onclick="ga('send', 'event', 'imfbuy', 'buy', 'esaffimf72020specialsale')">
      </a>
    </div>
  </div>
  <!-- end spree -->

  <!-- star -->
  <div class="star wrapper">
    <span class="star-l"></span>
    <span class="star-r"></span>
  </div>
  <!-- end star -->
</div>
<!-- end container -->

<!-- main -->
<div class="main wrapper">

  <!-- banner -->
  <div class="banner">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/es/index.php" target="_blank">IObit</a>
    <!-- title -->
    <h1>VENTA FLASH - AÑO NUEVO ESPECIAL</h1>
    <!-- subtitle -->
    <p>La mejor oferta en todo el año, ¡Descuendo hasta <span>87%</span> y tres regalos gratis!</p>
    <!-- panel -->
    <div class="panel clearfix">

      <!-- imf-55 -->
      <div class="message small fl">
        <img class="box" src="<?php echo getStaticUrl('images/imf-55.png')?>" alt="IObit Malware Fighter PRO">
        <p>1 año, 1 PC</p>
        <dl>
          <dd class="clearfix">
            Ahorras: <span class="fr">21,96€</span>
          </dd>
          <dd class="two">
            <p class="price"><b>17</b> <del>39,95€</del></p>
          </dd>
          <dd>
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=esaff-imf71pc1799&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>"
               onclick="ga('send', 'event', 'imfbuy', 'buy', 'esaffimf72020specialsale')"
               data-num="2">
              <i class="all-icons"></i> COMPRAR AHORA
            </a>
          </dd>
        </dl>  
      </div>

      <!-- imf-85 -->
      <div class="message large fl">
        <img class="box" src="<?php echo getStaticUrl('images/imf-85.png')?>" alt="IObit Malware Fighter PRO">
        <p>1 año, 3 PCs</p>
        <!-- progress -->
        <div class="progress clearfix">
          <div class="progressbar fl clearfix">
            <p class="fr"></p>
          </div>
          <p class="countdown fl">
            <strong>00</strong>d
            <strong>00</strong>h
            <strong>00</strong>m
            <strong>30</strong>s
          </p>
        </div>
        <!-- dl -->
        <dl>
          <dd class="clearfix">
            Ahorras: <span class="fr">129,89€</span>
          </dd>
          <dd class="one">
            Regalos de Navidad <i class="all-icons"></i>
            <p class="point">
              Los regalos de Navidad incluyen IObit<br> Uninstaller PRO, Protected Folder y AMC Security.
            </p>
          </dd>
          <dd class="two">
            <p class="price red"><b>19</b> <del>149,88€</del></p>
          </dd>
          <dd>
            <a class="buybtn large"
               href="https://www.iobit.com/buy.php?product=esaff-imf73pcpfsdamc1999&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>"
               onclick="ga('send', 'event', 'imfbuy', 'buy', 'esaffimf72020specialsale')"
               data-num="0">
              <i class="all-icons"></i> COMPRAR AHORA
            </a>
            <p class="note"><i class="all-icons"></i><b class="viewNum">4,006,553</b> personas han comprado!</p>
          </dd>
        </dl>
      </div>

      <!-- imf-70 -->
      <div class="message small fr">
        <img class="box" src="<?php echo getStaticUrl('images/imf-70.png')?>" alt="IObit Malware Fighter PRO">
        <p>1 año, 3 PCs</p>
        <dl>
          <dd class="clearfix">
            Ahorras: <span class="fr">59,96€</span>
          </dd>
          <dd class="two">
            <p class="price"><b>19</b> <del>79,95€</del></p>
          </dd>
          <dd>
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=esaff-imf73pc1999&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>"
               onclick="ga('send', 'event', 'imfbuy', 'buy', 'esaffimf72020specialsale')"
               data-num="1">
              <i class="all-icons"></i> COMPRAR AHORA
            </a>
          </dd>
        </dl>
      </div>

    </div>
    <!-- payment -->

    <img class="payment" src="<?php echo getStaticUrl('images/payment.jpg')?>" alt="">
  </div>
  <!-- end banner -->

  <!-- feature start -->
  <div class="feature">
    <div class="wrapper clearfix">
      <h2><span>Las funciones más destacadas de IObit Malware Fighter PRO</span></h2>
      <img class="computer" src="<?php echo $pResUrl; ?>images/computer.png" alt="">
      <div class="right-lists">
        <ul>
          <li class="icon1">Caja Fuerte mantiene archivos importantes limpios<br>
            y fuera del alcance de terceros.</li>
          <li class="icon2">El motor de anti-ransomware detiene proactivamente<br>
            ransomware como Petya / GoldenEye.
          </li>
          <li class="icon3"> Evita que más de 200 millones de amenazas de seguridad infecten y dañen tu ordenador con el motor bitdefender. 
          </li>
          <li class="icon4">Protege tu cámara contra el acceso no autorizado.</li>
        </ul>
        <a class="more" href="javascript:void(0)">  Ver más sobre la versión Pro >></a>
      </div>
    </div>
  </div>
  <!-- feature end -->

  <!-- gifts -->
  <div class="gifts">
    <!-- title -->
    <h2 class="on">OFERTA LIMITADA, ¡PAGA UN PRECIO CON DESCUENTO Y OBTÉN TRES REGALOS! *</h2>
    <!-- dl -->
    <div class="content clearfix">
      <!-- iu -->
      <dl class="iu">
        <dt></dt>
        <dd>
          <p class="cost"><del>29,99€</del> <span><big>0</big>€</span></p>
          <p class="detail">
            Desfragmentador de disco confiable e<br> inteligente con 7,000,000+ usuarios.
          </p>
        </dd>
      </dl>
      <!-- pf -->
      <dl class="pf">
        <dt></dt>
        <dd>
          <p class="cost"><del>29,95€</del> <span><big>0</big>€</span></p>
          <p class="detail">
            La herramienta de protección de carpeta<br> fácil de usar con una contraseña. 
          </p>
        </dd>
      </dl>
      <!-- amc -->
      <dl class="amc">
        <dt></dt>
        <dd>
          <p class="cost"><del>19,99€</del> <span><big>0</big>€</span></p>
          <p class="detail">
            Escanea automáticamente y limpia tu<br> Android móvil. Asegura el pago de tus<br> compras. 
          </p>
        </dd>
      </dl>
    </div>
  </div>
  <!-- end gifts -->

  <!-- comparison -->
  <div class="comparison">
    <!-- title -->
    <!-- table -->
    <table>
      <thead>
        <tr>
          <th class="item-b">Vea por qué IObit Malware Fighter PRO es necesario para tu PC</th>
          <th class="item-c"><p>IObit Malware Fighter 7 PRO</p></th>
        </tr>
      </thead>
      <tbody>
        <!-- 01 -->
        <tr>
          <td class="item-b">Base de datos de antimalware</td>
          <td class="item-c">más de 203 millones</td>
        </tr>
        <!-- 02 -->
        <tr>
          <td class="item-b">Motor de antivirus Bitdefender</td>
          <td class="item-c"><i class="all-icons"></td>
        </tr>
        <!-- 03 -->
        <tr>
          <td class="item-b">Motor de Anti-Ransomware</td>
          <td class="item-c"><i class="all-icons"></td>
        </tr>
        <!-- 04 -->
        <tr>
          <td class="item-b">
            <span>Archivos Específicos Protegidos contra Accesos no Autorizados en Caja Fuerte</span>
          </td>
          <td class="item-c"><i class="all-icons"></td>
        </tr>
        <!-- 05 -->
        <tr>
          <td class="item-b">
            <span>Protección completa en tiempo real para la mejor seguridad del PC</span>
          </td>
          <td class="item-c"><i class="all-icons"></td>
        </tr>
        <!-- 06 -->
        <tr>
          <td class="item-b">Protege tu cámara contra el acceso no autorizado</td>
          <td class="item-c"><i class="all-icons"></td>
        </tr>
        <!-- 07 -->
        <tr>
          <td class="item-b">Previene infecciones de virus transmitidas por discos USB</td>
          <td class="item-c"><i class="all-icons"></td>
        </tr>
        <!-- 08 -->
        <tr>
          <td class="item-b">Detecta un proceso malicioso que se ejecuta en la RAM</td>
          <td class="item-c"><i class="all-icons"></td>
        </tr>
        <!-- 09 -->
        <tr>
          <td class="item-b">Detecta amenazas mediante el análisis de acciones maliciosas</td>
          <td class="item-c"><i class="all-icons"></td>
        </tr>
        <tr>
          <td class="item-b">
            <span>Limpia automáticamente el rastreo de navegación para evitar el seguimiento malicioso</span>
          </td>
          <td class="item-c"><i class="all-icons"></td>
        </tr>
        <tr>
          <td class="item-b">Actualización automática a la última versión</td>
          <td class="item-c"><i class="all-icons"></td>
        </tr>
        <tr>
          <td class="item-b">Soporte técnico gratuito las 24 horas, 7 días a la semana</td>
          <td class="item-c"><i class="all-icons"></td>
        </tr>
      </tbody>
    </table>
    <!-- subtitle -->
    <h3>Compra IObit Malware Fighter PRO con <span>87%</span> de descuento para protección completa a tu PC</h3>
    <!-- imf-85 buybtn -->
    <a class="buybtn red"
       href="https://www.iobit.com/buy.php?product=esaff-imf73pcpfsdamc1999&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>"
       onclick="ga('send', 'event', 'imfbuy', 'buy', 'esaffimf72020specialsale')">
      <i class="all-icons"></i> COMPRAR AHORA
    </a>

  </div>
  <!-- end comparison -->

  <!-- review -->
  <div class="review">
    <h2 class="on">LO HACEMOS LO MEJOR QUE PODEMOS PARA SATISFACER A<br> NUESTROS USUARIOS EN DONDE SEA QUE ESTÉN</h2>
    <div class="content">
      <h3>Lo que dicen de nosotros</h3>
      <ul>
        <li class="one"><img src="<?php echo getStaticUrl('images/peter-stoffers.png')?>" alt="Peter Stoffers"></li>
        <li class="two"><img src="<?php echo getStaticUrl('images/software-informer.png')?>" alt="Software Informer"></li>
        <li class="three"><img src="<?php echo getStaticUrl('images/bob-bassett.png')?>" alt="Bob Bassett"></li>
        <li class="four"><img src="<?php echo getStaticUrl('images/david-cassidy.png')?>" alt="David Cassidy"></li>
        <li class="five"><img src="<?php echo getStaticUrl('images/gelu-batir.png')?>" alt="Gelu Batir"></li>
      </ul>
      <div class="details">
        <div>
          <h4>Peter Stoffers</h4>
          <p>
            "Hace algunos años alguien llamó mi atención sobre IObit Malware Fighter. Primero fuí escéptico. Pero después de instalarlo, se convirtió en mi programa anti-malware favorito. Es muy fácil de usar. A través de los años ya ha detectado varias amenazas y las ha eliminado. En cooperación con otros programas IObit, como por ejemplo ASC, tengo una buena protección para mi PC. Ahora recomiendo estos programas a todos mis amigos y familiares."
          </p>
        </div>
        <div class="active">
          <h4>Software.Informer</h4>
          <p>
            "El programa utiliza dos motores de AV, el suyo y BitDefender, y parece ser efectivo contra el malware que no puede ser detectado por otras herramientas similares, por lo que es bueno que se pueda ejecutar junto con su software AV estándar. Puede detectar una gran variedad de spyware, ransomware, adware, troyanos, gusanos, keyloggers y bots."
          </p>
        </div>
        <div>
          <h4>Bob Bassett</h4>
          <p>
            "Solíamos utilizar hasta una docena de programas diferentes para mantener nuestras máquinas funcionando sin problemas. Tomaba horas cada semana para mantener la seguridad y el rendimiento. Ahora, con IObit Malware Fighter Pro y Advanced System Care Pro, todo está un solo lugar y nos toma sólo unos minutos cada dos días hacer los mismos trabajos con mucha más confianza. No hemos tenido ningún problema desde el uso de sus productos.”
          </p>
        </div>
        <div>
          <h4>David Cassidy</h4>
          <p>
            "Me gustaría dar las gracias a todo el personal de IObit por trabajar duro para proveernos los mejores programas. Es una gran actualización que ha hecho para sus usuarios. Es mucho más rápido en el escáner y fácil de usar. Las personas que realmente desean un buen programa de Malware y Antivirus que también tenga una buena relación calidad-precio no deben buscar más allá de IObit Malware Fighter. Yo recomendaría que olviden el resto y obtengan lo mejor que es IObit Malware Fighter."
          </p>
        </div>
        <div>
          <h4>Gelu Batir</h4>
          <p>
            "Estoy muy satisfecho con su producto IObit Malware Fighter. Anteriormente, este producto se me ocurrió. Tenía muchos problemas con interferencias maliciosas, no podía ver una película entera o un concierto. Debido a su nuevo producto, ahora cada operación es clara, segura y bien protegida. Escanea mi ordenador portátil sin afectar su rendimiento, mientras que también recomendé este producto a dos de mis amigos."
          </p>
        </div>
      </div>
      <a class="next" href="javascript: nextFun();"></a>
      <a class="prev" href="javascript: prevFun();"></a>
    </div>
  </div>
  <!-- end review -->

  <!-- bottom-buy -->
  <div class="bottom-buy clearfix">
    <!-- title -->
    <h2 class="on">!Aprovecha la oportunidad solo una vez al año de la oferta exclusiva!</h2>
    <!-- box -->
    <div class="box fl">
      <img class="on" src="<?php echo getStaticUrl('images/bottombuy-imf-bundle.png')?>" alt="IObit Malware Fighter PRO">
      <img src="<?php echo getStaticUrl('images/bottombuy-imf.png')?>" alt="IObit Malware Fighter PRO">
      <img src="<?php echo getStaticUrl('images/bottombuy-imf.png')?>" alt="IObit Malware Fighter PRO">
    </div>
    <!-- ul -->
    <ul class="fl">
      <li class="active top">1 Año / 3 PCs + Regalos</li>
      <li class="mid">1 Año / 3 PCs</li>
      <li class="bot">1 Año / 1 PC</li>
    </ul>
    <!-- dl -->
    <dl class="fr">
      <dd>
        <p class="price"><b>19</b> <del>149,88€</del></p>
      </dd>
      <dd>
        <a class="buybtn small"
           href="https://www.iobit.com/buy.php?product=esaff-imf73pcpfsdamc1999&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>"
           onclick="ga('send', 'event', 'imfbuy', 'buy', 'esaffimf72020specialsale')">
          <i class="all-icons"></i> ACQUISTA ORA
        </a>
      </dd>
    </dl>
  </div>
  <!-- end bottom-buy -->

  <!-- service -->
  <div class="service">
    <div class="content clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/opswat.png')?>" alt="" /></dt>
        <dd>
          <h3>Certificación</h3>
          <p>Certificado por expertos profesionales de OPSWAT</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt="" /></dt>
        <dd>
          <h3>Garantía de reembolso</h3>
          <p>Si no está satisfecho en los primeros 60 días, le devolveremos su dinero</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/godaddy-secure.png')?>" alt="" /></dt>
        <dd>
          <h3>Pago seguro</h3>
          <p>100% pago seguro para su pedido</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/service.png')?>" alt="" /></dt>
        <dd>
          <h3>Servicio al cliente</h3>
          <p>24/7 Soporte Técnico gratis</p>
        </dd>
      </dl>
    </div>
  </div>
  <!-- end service -->

  <!-- footer -->
  <div class="footer">
    <div class="content">
      <dl>
        <dt>Nota:</dt>
        <dd>
          *.Estos programas promocionales están sujetos a cambios sin previo aviso, dependiendo de nuestra discreción exclusiva en cualquier momento.<br>
          *.Datos pueden variar basados en diferentes sistemas u ordenadores.
        </dd>
      </dl>
      <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Todos los derechos reservados</p>
    </div>
  </div>
  <!-- end footer -->

</div>
<!-- end main -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>