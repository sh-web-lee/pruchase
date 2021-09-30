<?php
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './';
    $pRootUrl = '../../../';
  }
include $pRootUrl . 'include/common.inc.php';
$viewNum=rand(115,156);
if (!empty($_GET['action'])&&$_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name='esimftra'.$date;
  if (!isset($_COOKIE[$c_name])) {
    $packsNum = 97;
    setcookie($c_name, $packsNum, time() + 3600 * 24);
  } else {
    if ($_GET['t'] == 1) {
      $packsNum = $_COOKIE[$c_name];
    }
    else {
      if (intval($_COOKIE[$c_name]) <= 0) {
        setcookie($c_name, 0, time() + 3600 * 24);
        $packsNum = 0;
      } else {
        $packsNum = $_COOKIE[$c_name] - 1;
        setcookie($c_name, $packsNum, time() + 3600 * 24);
        if (rand(1, 100) % 2 == 0) {
          $packsNum++;
        }
      }
    }
  }
  echo $packsNum;
  exit;
}

$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="IE=Edge,chrome=1">
  <title>Hasta 75% de descuento para obtener IObit Malware Fighter PRO </title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href='https://fonts.googleapis.com/css?family=Montserrat:500,600' rel='stylesheet' type='text/css'>
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
  <!-- banner -->
  <div class="banner">
    <div class="wrapper">
      <a href="https://www.iobit.com/es/index.php" target="_blank" class="logo" target="_blank">IObit</a>
      <p class="fast <?php echo (intval($_GET['cookie'])>0)?'':'hide';?>">Ahora <?php echo (intval($_GET['cookie'])>0)?intval($_GET['cookie']):'';?> encontradas </p>
      <h1>Limpia cookies dañinas automáticamente  </h1>
      <div class="box three-pcs">
        <div class="img-box"></div>
        <p>Ahora:  <strong> 19,99€</strong> <del>79,95€</del></p>
        <a href="https://www.iobit.com/buy.php?product=es-imf83pc1999&ref=es_imf83pctracking2005<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=es_purchase_imf" onclick="ga('send', 'event', 'imftrackbuy', 'buy', 'imfpurchase1904track-es'); " class="buybtn"><span>Comprar ahora</span></a>
        <div class="number">
         Rápido, sólo quedan
          <div class="countdown">
            <div class="scroll-tick" ><span>0</span></div>
            <div class="scroll-tick"><span>0</span></div>
          </div>
            paquetes  
        </div>
      </div>
      <div class="box one-pc">
        <div class="img-box"></div>
        <p>Ahora: <strong>17,99€ </strong> <del>39,95€</del></p>
        <a href="https://www.iobit.com/buy.php?product=es-imf81pc1799&ref=es_imf81pctracking2005<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=es_purchase_imf " onclick="ga('send', 'event', 'imftrack1pcbuy', 'buy', 'imfpurchase1904track1pc-es');" class="buybtn border"><span>Comprar ahora</span></a>
      </div>
    </div>
  </div>
  <!-- end banner -->
  <!-- feature -->
  <div class="feature feature01 wrapper clearfix">
    <h2>¿POR QUÉ DEBERÍAS ELIMINAR LAS COOKIES ALMACENADAS   <br> EN EL NAVEGADOR?</h2>
    <div class="img-box"><img src="<?php echo getStaticUrl('images/feature-box.jpg')?>"></div>
    <dl class="list01">
      <dt>Anuncios están en todas partes</dt>
      <dd>Los anuncios de los sitios que has visitado <br> pueden realizar un seguimiento de tu <br> comportamiento y mostrar anuncios <br> donde quieras visitar.</dd>
    </dl>
    <dl class="list02">
      <dt>Fugas de privacidad en línea</dt>
      <dd>Los hackers pueden obtener acceso a tu <br> información personal, como cuentas sin <br> contraseña y aprovecharlas.  </dd>
    </dl>
  </div>
  <!-- feature -->
  <div class="feature feature02 ">
    <div class="wrapper">
      <h2>¿CÓMO TE AYUDA EL ANTI-TRACKING A OBTENER UN <br> NAVEGADOR LIMPIO Y PROTEGER LA INFORMACIÓN PRIVADA? </h2>
      <div class="img-box"><img src="<?php echo getStaticUrl('images/feature-box02.jpg')?>"></div>
      <dl class="list01">
        <dt><img src="<?php echo getStaticUrl('images/list01.png')?>"> Borra cookies automáticamente</dt>
        <dd>Una vez habilitado el anti-tracking, las cookies <br> de seguimiento se eliminarán <br> automáticamente.  </dd>
      </dl>
      <dl class="list02">
        <dt><img src="<?php echo getStaticUrl('images/list02.png')?>">Protege datos personales </dt>
        <dd>Los anunciantes no pueden realizar un <br> seguimiento de tus actividades en línea, <br> tu información personal está segura. </dd>
      </dl>
    </div>
  </div>
  <!-- benfits -->
  <div class="feature03">
    <h2>MÁS CARACTERÍSTICAS   <br>QUE SOLO PODRÁS OBTENER CON IOBIT MALWARE FIGHTER 8 PRO</h2>
    <div class="message">
      <div class="wrapper">
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/list03.png')?>"></dt>
          <dd><strong>El último motor Bitdefender</strong></dd>
          <dd>203,000,000+ amenazas de <br> seguridad pueden ser detectadas <br> rápidamente para después ser <br> eliminadas</dd>
          <dd><span>* SÓLO VERSIÓN PRO</span></dd>
        </dl>
         <dl>
          <dt><img src="<?php echo getStaticUrl('images/list04.png')?>"></dt>
          <dd><strong>Detener los ataques de ransomware</strong></dd>
          <dd>Cualquier acción sospechosa <br> que intente cifrar tus archivos <br> será detenida. </dd>
          <dd><span>* SÓLO VERSIÓN PRO</span></dd>
        </dl>
         <dl>
          <dt><img src="<?php echo getStaticUrl('images/list05.png')?>"></dt>
          <dd><strong>Proteger archivos con contraseña</strong></dd>
          <dd>Los hackers no pueden <br> acceder a tus datos <br> personales con contraseña..</dd>
          <dd><span>* SÓLO VERSIÓN PRO</span></dd>
        </dl>
         <dl class="last">
          <dt><img src="<?php echo getStaticUrl('images/list06.png')?>"></dt>
          <dd><strong>Sin infección a través del driver USB</strong></dd>
          <dd>Los virus ocultos en un disco <br> USB no podrán infectar tu <br> ordenador.</dd>
          <dd><span>* SÓLO VERSIÓN PRO</span></dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- end benfits -->
    <!-- awards -->
  <div class="awards">
    <div class="wrapper">
      <h2>Recomendado y premiado por estos Medios</h2>
      <img src="<?php echo $pResUrl; ?>images/awards.jpg" alt="">
    </div>
  </div>
  <!-- review -->
  <div class="review wrapper">
    <div class="reviews">
      <h2>Comentarios del usuario</h2>
      <p>"Solíamos utilizar hasta una docena de programas diferentes para mantener nuestras máquinas funcionando sin problemas. Tomaba horas cada semana para mantener la seguridad y el rendimiento. Ahora, con IObit Malware Fighter Pro y Advanced System Care Pro, todo está un solo lugar y nos toma sólo unos minutos cada dos días hacer los mismos trabajos con mucha más confianza. No hemos tenido ningún problema desde el uso de sus productos.”</p>
    </div>
    <div class="reviews">
      <h2>Comentarios del usuario</h2>
      <p>"Me gustaría dar las gracias a todo el personal de IObit por trabajar duro para proveernos los mejores programas. Es una gran actualización que ha hecho para sus usuarios. Es mucho más rápido en el escáner y fácil de usar. Las personas que realmente desean un buen programa de Malware y Antivirus que también tenga una buena relación calidad-precio no deben buscar más allá de IObit Malware Fighter. Yo recomendaría que olviden el resto y obtengan lo mejor que es IObit Malware Fighter."</p>
    </div>
    <div class="reviews active">
      <h2>Comentarios mediáticos</h2>
      <p>"El programa utiliza dos motores de AV, el suyo y BitDefender, y parece ser efectivo contra el malware que no puede ser detectado por otras herramientas similares, por lo que es bueno que se pueda ejecutar junto con su software AV estándar. Puede detectar una gran variedad de spyware, ransomware, adware, troyanos, gusanos, keyloggers y bots."</p>
    </div>
    <div class="reviews">
      <h2>Comentarios del usuario</h2>
      <p>"Estoy muy satisfecho con su producto IObit Malware Fighter. Anteriormente, este producto se me ocurrió. Tenía muchos problemas con interferencias maliciosas, no podía ver una película entera o un concierto. Debido a su nuevo producto, ahora cada operación es clara, segura y bien protegida. Escanea mi ordenador portátil sin afectar su rendimiento, mientras que también recomendé este producto a dos de mis amigos."</p>
    </div>
    <div class="reviews">
      <h2>Comentarios del usuario</h2>
      <p>"Hace algunos años alguien llamó mi atención sobre IObit Malware Fighter. Primero fuí escéptico. Pero después de instalarlo, se convirtió en mi programa anti-malware favorito. Es muy fácil de usar. A través de los años ya ha detectado varias amenazas y las ha eliminado. En cooperación con otros programas IObit, como por ejemplo ASC, tengo una buena protección para mi PC. Ahora recomiendo estos programas a todos mis amigos y familiares."</p>
    </div>
    <ul class="handle clearfix">
      <li>
        <div class="badge"><img src="<?php echo $pResUrl; ?>images/bob-bassett.png" alt="Bob Bassett"><span></span></div>
        <strong>Bob Bassett</strong>
      </li>
      <li>
        <div class="badge"><img src="<?php echo $pResUrl; ?>images/david-cassidy.png" alt="David Cassidy"><span></span></div>
        <strong>David Cassidy</strong>
      </li>
      <li class="active">
        <div class="badge"><img src="<?php echo $pResUrl; ?>images/software.png" alt="software.informer.com"><span></span></div>
        <strong>software.informer</strong>
      </li>
      <li>
      <div class="badge"><img src="<?php echo $pResUrl; ?>images/gelu-batir.png" alt="Gelu Batir"><span></span></div>
        <strong>Gelu Batir</strong>
      </li>
      <li>
      <div class="badge"><img src="<?php echo $pResUrl; ?>images/peter-stoffers.png" alt="Peter Stoffers"><span></span></div>
        <strong>Peter Stoffers</strong>
      </li>
    </ul>
  </div>
  <div class="bottom">
      <!-- service start -->
    <div class="service wrapper clearfix">
      <dl class="fl">
        <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dt>
        <dd>
          <h4>Pruébalo SIN RIESGO - con nuestra garantía de reembolso de 60 días</h4>
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
    <!-- annotation -->
    <dl class="annotation wrapper">
      <dt>Nota: </dt>
      <dd>*.Estos programas promocionales están sujetos a cambios sin previo aviso, dependiendo de nuestra discreción exclusiva en cualquier momento.</dd>
    </dl>

    <!-- footer -->
    <div class="footer">    
      <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Todos los derechos reservados.</p>
    </div>
  </div>

  <!-- float -->
  <div class="float clearfix">
    <div class="wrapper">
      <div class="left-img"></div>
      <div class="message">
        <h2>!Protección total para toda la familia! </h2>
        <div class="number">
          Date prisa, sólo quedan 
          <div class="countdown">
            <div class="scroll-tick" ><span>0</span></div>
            <div class="scroll-tick"><span>0</span></div>
          </div>
          paquetes
        </div>
      </div>
      <!-- buybtn -->
     <dl>
       <dt>Ahora: <strong>19,99€</strong> <del>79,95€</del></dt>
       <dd><a href="https://www.iobit.com/buy.php?product=es-imf83pc1999&ref=es_imf83pctracking2005<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=es_purchase_imf" onclick="ga('send', 'event', 'imftrackbuy', 'buy', 'imfpurchase1904track-es'); " class="buybtn"><span>Comprar ahora</span></a></dd>
     </dl>
    </div>
  </div>
  <script>refStr="<?php echo $refStr;?>";</script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>