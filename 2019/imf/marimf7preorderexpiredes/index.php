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
  $c_name='enimfprea'.$date;
  if (!isset($_COOKIE[$c_name])) {
    $packsNum = 48;
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
  echo json_encode(array('packsNum'=>$packsNum,'viewNum'=>$viewNum));
  exit;
}
$refStr=(empty($_GET['ref'])?'':('-'.$_GET['ref'])).(empty($_GET['expday'])?'':('-'.$_GET['expday']));
$transData=$_GET['fileto'].$_GET['rsto'].$_GET['traceto'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="IE=Edge,chrome=1">
  <title>Resérvalo el nuevo IObit Malware Fighter PRO por 0€</title>
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
      <a href="https://www.iobit.com/es/index.php" class="logo" target="_blank">IObit</a>
      <h1>Únete a nuestra Preventa Global por 0€ y Sigamos Juntos Una Vez Más</h1>
      <p class="fast">¡2,000 unidades limitadas cada día! Actúa rápido y aprovecha esta oportunidad.</p>
      <div class="clearfix wrapper">
        <div class="left-img"><span></span></div>
        <div class="right-message">
          <h2>IObit Malware Fighter 7 PRO</h2>
          <div class="progress">
            <p>Solo quedan <strong class="packnum">*</strong>, ya se han vendido <strong class="buyNum">*</strong></p>
            <div class="bar">
              <span class="box"><span><span class="disappear"></span></span></span>
            </div>
          </div>
          <p class="price">
            Ahora: <strong><b>0</b>€</strong> <del>59,95€</del>
          </p>
          <!-- buybtn -->
           <a class="buybtn"
              href="https://www.iobit.com/buy.php?product=es-imf7preorder30d&ref=es_imf7preorderexpired<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=es_purchase_imf"
              onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf7predorderexpired-es');">
             <span>Resérvalo ya</span>
           </a>
        </div>
      </div>
      <dl class="step clearfix">
        <dd>
          Si estás satisfecho podrás conseguir un 66% de descuento <br>
          sobre el precio original 30 días después de hacer tu reserva.
        </dd>
        <dd class="middle">Resérvalo hoy por 0€</dd>
        <dd>
          Si no te quedas satisfecho, podrás cancelarlo durante <br>
          los 30 primeros días sin pagar nada.
        </dd>
      </dl>
    </div>
    
  </div>
  <!-- end banner -->
  <div class="main-bg">
    <!-- feature -->
    <div class="feature wrapper clearfix">
      <h2>Te acuerdas de cómo IObit Malware Fighter PRO protege tu ordenador?</h2>
      <img src="<?php echo getStaticUrl('images/feature-imgbox.png')?>" alt="" class="img-box">
      <div class="message">
        <dl <?php echo empty($transData)?'class="emp"':'';?>>
          <dt>Elimina</dt>
          <?php if(!empty($_GET['fileto'])):?>
          <dd><strong><?php echo number_format($_GET['fileto'])?></strong></dd>
          <?php endif;?>
          <dd>amenazas contra tu seguridad para mantener tus datos y tu ordenador seguros.</dd>
        </dl>
        <dl <?php echo empty($transData)?'class="emp"':'';?>>
          <dt>Bloquea</dt>
          <?php if(!empty($_GET['rsto'])):?>
          <dd><strong><?php echo number_format($_GET['rsto'])?></strong></dd>
          <?php endif;?>
          <dd>ransomware contra la encriptación de tus archivos</dd>
        </dl>
        <dl <?php echo empty($transData)?'class="emp"':'';?>>
          <dt>Limpia </dt>
          <?php if(!empty($_GET['traceto'])):?>
          <dd><span><?php echo number_format($_GET['traceto'])?></span></dd>
          <?php endif;?>
          <dd>rastros en línea para evitar la fuga de privacidad.</dd>
        </dl>
        <dl <?php echo empty($transData)?'class="emp"':'';?>>
          <dt>Activa</dt>
          <dd><span>la protección eficaz </span></dd>
          <dd>en tiempo real para parar y bloquear actividades sospechosas.</dd>
        </dl>
       </div>
    </div>
    <!-- benfits -->
    <div class="compar-tab wrapper clearfix">
      <h2>
        Sin una protección adecuada, tu ordenador será vulnerable <br>
        a ataques y amenazas
      </h2>
      <div class="message">
        <h3>Estarás desprotegido:</h3>
        <p><strong>Sin</strong> motor antivirus Bitdefender</p>
        <p><strong>Sin</strong> motor anti-ransomware</p>
        <p><strong>Sin</strong> caja fuerte</p>
        <p><strong>Sin</strong> protección de la Cámara</p>
        <p><strong>Sin</strong> protección USB</p>
        <p><strong>Sin</strong> anti-Tracking</p>
        <p><strong>Sin</strong> actualizaciones automáticas</p>
      </div>
      <div class="message right">
        <h3>Puede que te encuentres con:</h3>
        <p>Virus que ataquen tu ordenador y te roben información</p>
        <p>La encriptación de archivos importantes</p>
        <p>Otros accesos a tus archivos personales</p>
        <p>Programas que usen tu cámara secretamente</p>
        <p>Virus escondidos en el USB que dañen tu PC</p>
        <p>Hackers que violen tu privacidad online</p>
        <p>Lo último en amenazas de seguridad que no han sido identificadas</p>
      </div>
    </div>
    <!-- end benfits -->
    <div class="more-than wrapper">
      <h2>EL NUEVO IOBIT MALWARE FIGHTER 7 PRO TE DA MÁS</h2>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/list01.png')?>" alt=""></dt>
        <dd><strong>60% mayor</strong></dd>
        <dd>Datos personales</dd>
      </dl>
      <dl class="center">
        <dt><img src="<?php echo getStaticUrl('images/list02.png')?>" alt=""></dt>
        <dd><strong>Protegido por contraseña</strong></dd>
        <dd>Datos personales</dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/list03.png')?>" alt=""></dt>
        <dd><strong>300% más rápido</strong></dd>
        <dd>Escáner de amenazas</dd>
      </dl>
    </div>
  </div>
  <div class="review wrapper">
    <h2>BTANTO EXPERTOS COMO USUARIOS HABLAN MUY BIEN DE IMF 7 PRO</h2>
    <div id="dg-container" class="dg-container">
      <div class="nav"> 
        <span class="dg-prev"></span>
        <span class="dg-next"></span>
      </div>
        <div class="content dg-wrapper">  
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/software-informer.png')?>" alt="Software.Informer"></dt>
            <dd>
              <h2>Comentarios mediáticos</h2>
              <p>"El programa utiliza dos motores de AV, el suyo y BitDefender, y parece ser efectivo contra el malware que no puede ser detectado por otras herramientas similares, por lo que es bueno que se pueda ejecutar junto con su software AV estándar. Puede detectar una gran variedad de spyware, ransomware, adware, troyanos, gusanos, keyloggers y bots."</p>
              <cite>Software Informer</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/bob-bassett.png')?>" alt="Bob Bassett"></dt>
            <dd>
              <h2>Comentarios del usuario</h2>
              <p>"Solíamos utilizar hasta una docena de programas diferentes para mantener nuestras máquinas funcionando sin problemas. Tomaba horas cada semana para mantener la seguridad y el rendimiento. Ahora, con IObit Malware Fighter Pro y Advanced System Care Pro, todo está un solo lugar y nos toma sólo unos minutos cada dos días hacer los mismos trabajos con mucha más confianza. No hemos tenido ningún problema desde el uso de sus productos.”</p>
              <cite>Bob Bassett</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/peter-stoffers.png')?>" alt="Peter Stoffers"></dt>
            <dd>
              <h2>Comentarios del usuario</h2>
              <p>"Hace algunos años alguien llamó mi atención sobre IObit Malware Fighter. Primero fuí escéptico. Pero después de instalarlo, se convirtió en mi programa anti-malware favorito. Es muy fácil de usar. A través de los años ya ha detectado varias amenazas y las ha eliminado. En cooperación con otros programas IObit, como por ejemplo ASC, tengo una buena protección para mi PC. Ahora recomiendo estos programas a todos mis amigos y familiares."</p>
              <cite>Peter Stoffers</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/gelu-batir.png')?>" alt="Gelu Batir"></dt>
            <dd>
              <h2>Comentarios del usuario</h2>
              <p>"Estoy muy satisfecho con su producto IObit Malware Fighter. Anteriormente, este producto se me ocurrió. Tenía muchos problemas con interferencias maliciosas, no podía ver una película entera o un concierto. Debido a su nuevo producto, ahora cada operación es clara, segura y bien protegida. Escanea mi ordenador portátil sin afectar su rendimiento, mientras que también recomendé este producto a dos de mis amigos."</p>
              <cite>Gelu Batir</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/dave-cassidy.png')?>" alt="David Cassidy"></dt>
            <dd>
              <h2>Comentarios del usuario</h2>
              <p>"Me gustaría dar las gracias a todo el personal de IObit por trabajar duro para proveernos los mejores programas. Es una gran actualización que ha hecho para sus usuarios. Es mucho más rápido en el escáner y fácil de usar. Las personas que realmente desean un buen programa de Malware y Antivirus que también tenga una buena relación calidad-precio no deben buscar más allá de IObit Malware Fighter. Yo recomendaría que olviden el resto y obtengan lo mejor que es IObit Malware Fighter."</p>
              <cite>David Cassidy</cite>
            </dd>
          </dl>                 
        </div>               
    </div>
  </div>
  <div class="bottom">
      <div class="award wrapper ">
        <h2>PREMIOS A NIVEL MUNDIAL</h2>
        <p>
          Después de haber sido premiados por todos estos medios de comunicación durante los últimos 6 años y contando <br>
          con su total confianza, has de saber que ahora tienes el protector de PC que buscabas
        </p>
        <img src="<?php echo getStaticUrl('images/award.png')?>" alt="">
    </div>
    <!-- service start -->
    <div class="service wrapper clearfix">
      <dl class="fl">
        <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dt>
        <dd>
          <h4>
            Pruébalo SIN RIESGO - con nuestra garantía de reembolso <br>
            de 60 días
          </h4>
          <p>
            Estamos seguros de que activando la versión PRO te olvidarás de tus <br>
            dolores de cabeza a la hora de actualizar tus drivers por un precio asequible
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
      <dd>*Al final de los 30 días gratuitos del periodo de prueba, se te cargarán 19,99€ automáticamente a tu cuenta de PayPal o tarjeta de crédito. Esto supone un 66% de descuento</dd>
      <dd> sobre el precio original de 59,95€, el cual sólo podrán obtener los usuarios que lo reserven por adelantado.</dd>
    </dl>

    <!-- footer -->
    <div class="footer">    
      <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Todos los derechos reservados.</p>
    </div>
  </div>



  <div class="float-right">
    ¡ <span class="viewNum"><?php echo $viewNum;?></span> personas están mirando <br> esta página en este instante!
  </div>
  <!-- float -->
  <div class="float clearfix">
    <div class="wrapper">
      <div class="left-img"><img src="<?php echo getStaticUrl('images/fl-imf-box.png')?>" alt=" IObit Malware Fighter 7 PRO"></div>
      <div class="progress">
        <p>Solo quedan <strong class="packnum">*</strong>, ya se han vendido <strong class="buyNum">*</strong></p>
        <div class="bar">
          <span class="box"><span><span class="disappear"></span></span></span>
        </div>
      </div>
      <!-- buybtn -->
      <a class="buybtn"
         href="https://www.iobit.com/buy.php?product=es-imf7preorder30d&ref=es_imf7preorderexpired<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=es_purchase_imf"
         onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf7predorderexpired-es');">
        <span>Resérvalo ahora - 0€</span>
      </a>
    </div>
  </div>
  <div class="pop-over ">
    <h2>OOPS! Te has perdido nuestra oferta de reserva por 0€</h2>
    <h3>No te vuelvas a perder este <strong>66% de descuento</strong></h3>
    <img src="<?php echo getStaticUrl('images/pop-img-box.png')?>" alt=" IObit Malware Fighter 7 PRO" class="img-box">
    <div class="message">
       <p><strong><b>19</b>,99€</strong> <del>59,95€</del></p>
       <a class="buybtn"
         href="https://www.iobit.com/buy.php?product=es-imf7preorder3pc1999&ref=es_imf7preorderexpired1999<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=es_purchase_imf"
         onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf7predorderexpired1999-es');">
         <span>Actívalo ahora</span>
      </a>
      <p class="last">1 año de suscripción / 3 PCs</p>
    </div>
   
  </div>
  <div class="pop-bg "></div>
  <script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
  <script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>