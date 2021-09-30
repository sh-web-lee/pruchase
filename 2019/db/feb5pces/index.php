<?php //	初始化
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

if(!empty($_GET['action'])&&($_GET['action']=='getPacks')){
  $date=$_GET['d'];
  $cName='esdbfeb'.$date;
  $cookie=$_COOKIE[$cName];
  if($cookie){
    $packsNum=$_COOKIE[$cName];
    if($packsNum>3){
      $packsNum--;
      setcookie($cName,$packsNum);
    }else{
      $packsNum=3;
    }
  }else{
    $packsNum=58;
    setcookie($cName,$packsNum);
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['st'])?'':('-'.$_GET['st']);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" >
  <title>Consigue Driver Booster 6 Pro con 80% de descuento y regalo gratis – IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
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
      <h1>Compra más, ahorra más</h1>
      <p>Hasta 80% en Driver Booster PRO + Regalo Gratis </p>
    </div>
    <div class="box">
      <img src="<?php echo $pResUrl; ?>images/db-one-pc.png" alt="">
      <p><span></span><em><b>1 PC </b>/ 1 Año</em><span></span></p>
      <p class="price"><strong>35,</strong>98€ </p>
      <a href="https://www.iobit.com/buy.php?product=es-db61pc3598&ref=es_db61pcpurchase1902<?php echo $refStr?>&&refs=es_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'db1PCpurchase1902-es')  " class="buybtn border">Comprar ahora</a>
    </div>
    <div class="box packs active">
      <h3>¡Cantidad limitada! Sólo quedan <strong><span class="packsNum">*</span> <i class="db-reduce"></i></strong> piezas</h3>
      <img src="<?php echo $pResUrl; ?>images/packs-db-box.png" alt="">
      <span class="dissolve"></span>
      <p><span></span><em><b>5 PC </b>/ 1 Año</em><span></span></p>
      <p class="price"><strong>24,</strong>99€ <del>129,98€</del></p>
      <a href="https://www.iobit.com/buy.php?product=es-db65pciu2499&ref=es_db65pciupurchase1902<?php echo $refStr?>&&refs=es_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'db5PCpurchase1902-es')  " class="buybtn">Comprar ahora</a>
      <p class="last"><img src="<?php echo $pResUrl; ?>images/people.png" alt=""> Más de <strong class="buyNum">10,633</strong> comprados</p>
    </div>
    <div class="box three-box">
      <img src="<?php echo $pResUrl; ?>images/three-db-box.png" alt="">
      <p><span></span><em><b>3 PC </b>/ 1 Año</em><span></span></p>
      <p class="price"><strong>19,</strong>99€ <del>74,85€</del></p>
      <a href="https://www.iobit.com/buy.php?product=es-db63pc1999&ref=es_db63pcpurchase1902<?php echo $refStr?>&&refs=es_purchase_db  " onclick="ga('send', 'event', 'dbbuy', 'buy', 'db3PCpurchase1902-es')    " class="buybtn border">Comprar ahora</a>
    </div>
  </div>
</div>
<!-- banenr end -->

<!-- payment start -->
<div class="payment">
  <img src="<?php echo $pResUrl; ?>images/payment.jpg" alt="">
</div>
<!-- payment end -->

<!-- benfits start -->
<div class="benfits wrapper clearfix">
  <h2>¡Obtén el máximo rendimiento para tu PC con los últimos drivers!</h2>
  <div class="showcase">
    <div class="inner">
      <ul class="screenshot">
        <li>
          <img src="<?php echo getStaticUrl('images/screenshot-01.jpg')?>" alt=""/>
        </li>
        <li>
          <img src="<?php echo getStaticUrl('images/screenshot-02.jpg')?>" alt=""/>
        </li>
        <li>
          <img src="<?php echo getStaticUrl('images/screenshot-03.jpg')?>" alt=""/>
        </li>
        <li>
          <img src="<?php echo getStaticUrl('images/screenshot-04.jpg')?>" alt=""/>
        </li>
      </ul>
    </div>
    <ul class="zoom">
      <li class="fun1 active">
        <div class="container">
          <img src="<?php echo getStaticUrl('images/screenshot-01-zoom.png')?>" alt=""/>
        </div>
      </li>
      <li class="fun2">
        <div class="container">
          <img src="<?php echo getStaticUrl('images/screenshot-02-zoom.png')?>" alt=""/>
        </div>
      </li>
      <li class="fun3">
        <div class="container">
          <img src="<?php echo getStaticUrl('images/screenshot-03-zoom.png')?>" alt=""/>
        </div>
      </li>
      <li class="fun4">
        <div class="container">
          <img src="<?php echo getStaticUrl('images/screenshot-04-zoom.png')?>" alt=""/>
        </div>
      </li>
    </ul>
  </div>
  <div class="detail-list">
    <dl class="active first">
      <dt><i class="benfits01"></i></dt>
      <dd>
        <h3>Soporta más de 3,000,000 drivers y componentes  </h3>
        <p>
          Soporta la actualización de más de 3,000,000 drivers y <br>
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
<!-- benfits end -->

<!-- gift-box start -->
<div class="gift-box">
  <div class="wrapper clearfix">
    <!-- gift-box title -->
    <h2>Paquete de regalo sólo para oferta exclusiva de Navidad</h2>
    <img src="<?php echo $pResUrl; ?>images/iu-box.png" alt="" class="img-box">
    <dl>
      <dt>REGALO GRATIS – IObit Uninstaller 8 PRO</dt>
      <dd>Mayor base de datos en tiempo real para desinstalar más programas obstinados</dd>
      <dd>Desinstalar plugins maliciosos para navegador más seguro</dd>
      <dd>Experiencia en línea más limpia y más rápida con eliminación de Adware</dd>
    </dl>
    <div class="clear"></div>
    <!-- buybtn -->
    <a class="buybtn"
       href="https://www.iobit.com/buy.php?product=es-db65pciu2499&ref=es_db65pciupurchase1902<?php echo $refStr?>&&refs=es_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'db5PCpurchase1902-es')  ">
       Obtener el regalo gratis
    </a>
    <p>¡Cantidad limitada! Sólo quedan <strong><span class="packsNum">*</span> <i class="db-reduce"></i></strong> regalos </p>
  </div>
</div>
<!-- gift-box end -->

<!-- review start -->
<div class="review">
  <div class="wrapper ">
    <h2>Comentarios en todo el mundo</h2>
    <div class="review-message">
      <dl class="wayne">
        <dt>
          <div class="img-box">
            <h4>Wayne Bowler</h4>
            <img src="<?php echo $pResUrl; ?>images/wayne-bowler.png" alt="">
          </div>
          <div class="line"></div>
        </dt>
        <dd>""Este es uno de los mejores programas de actualizador de controladores.""</dd>
      </dl>
      <dl class="myo ">
        <dt>
          <div class="img-box">
            <h4>Myo Thuya</h4>
            <img src="<?php echo $pResUrl; ?>images/myo-thuya.png" alt="">
          </div>
          <div class="line"></div>
        </dt>
        <dd>"Con Driver Booster, puedo encontrar los drivers de dispositivos obsoletos y actualizarlos fácilmente." </dd>
      </dl>
      <dl class="pcmag red-round active">
        <dt>
          <div class="img-box">
            <h4>PC-MAG</h4>
            <img src="<?php echo $pResUrl; ?>images/pc-mag.png" alt="">
          </div>
          <div class="line"></div>
        </dt>
        <dd>“IObit ha hecho muchas utilidades y Driver Booster PRO, que actualiza automáticamente tus controladores, es una de las mejores utilidades.”</dd>
      </dl>
      <dl class="chip ">
        <dt>
          <div class="img-box">
            <h4>chip</h4>
            <img src="<?php echo $pResUrl; ?>images/chip.png" alt="">
          </div>
          <div class="line"></div>
        </dt>
        <dd> "Driver Booster PRO: la actualización automática del driver sólo está disponible en la versión PRO."</dd>
      </dl>
      <dl class="fabio red-round active">
        <dt>
          <div class="img-box">
            <h4>Fabio Tursi</h4>
            <img src="<?php echo $pResUrl; ?>images/fabio-tursi.png" alt="">
          </div>
          <div class="line"></div>
        </dt>
        <dd>"Con Driver Booster PRO, encontré el programa perfecto para mantener mi sistema limpio y actualizado."</dd>
      </dl>
      <dl class="vector ">
        <dt>
          <div class="img-box">
            <h4>Vector</h4>
            <img src="<?php echo $pResUrl; ?>images/vector.png" alt="">
          </div>
          <div class="line"></div>
        </dt>
        <dd> "¡Un programa mantiene mi sistema actualizado más fácilmente!"</dd>
      </dl>
      <dl class="adam">
        <dt>
          <div class="img-box">
            <img src="<?php echo $pResUrl; ?>images/adam-backlund.png" alt="">
            <h4>Adam Backlund</h4>
          </div>
          <div class="line"></div>
        </dt>
        <dd>"Yo recomiendo encarecidamente Driver Booster, que le ayuda a actualizar los drivers rápida y fácilmente."</dd>
      </dl>
      <dl class="olnet">
        <dt>
          <div class="img-box">
            <img src="<?php echo $pResUrl; ?>images/olnet.png" alt="">
            <h4>01net</h4>
          </div>
          <div class="line"></div>
        </dt>
        <dd> "Todas estas operaciones se realizan en un solo clic, lo que le ayuda a ahorrar tiempo y hacer que su PC sea más estable."</dd>
      </dl>
      <dl class="olorin red-round active">
        <dt>
          <div class="img-box">
            <img src="<?php echo $pResUrl; ?>images/olorin.png" alt="">
            <h4>Olorin 89</h4>
          </div>
          <div class="line"></div>
        </dt>
        <dd>"Driver Booster es una herramienta de actualización de driver, lo que hace la vida más fácil para todos."</dd>
      </dl>
      <dl class="html ">
        <dt>
          <div class="img-box">
            <img src="<?php echo $pResUrl; ?>images/html-it.png" alt="">
            <h4>HTML-it</h4>
          </div>
          <div class="line"></div>
        </dt>
        <dd> "IObit Driver Booster mantiene todos los drivers siempre actualizados con su tecnología avanzada."</dd>
      </dl>

    </div>
  </div>
</div>
<!-- review end -->

<!-- comparison-table start -->
<div class="comparison-table" id="compare">
  <table border="0" cellspacing="0" cellpadding="0" width="100%">
    <thead>
    <tr>
      <th colspan="2">Ver la comparación entre FREE y PRO</th>
      <th class="space"></th>
      <th class="itemb">Driver Booster FREE</th>
      <th class="space"></th>
      <th class="itema">Driver Booster PRO</th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_01.png"></td>
      <td class="virtue">Descarga y actualiza los controladores obsoletos con un solo clic</td>
      <td class="space"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-star.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_03.png"></td>
      <td class="virtue">Desbloquea límite de velocidad de actualización de controlador</td>
      <td class="space"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_04.png"></td>
      <td class="virtue">Prioridad para actualizar más controladores obsoletos y raros Mejorado<sup>Mejorado</sup></td>
      <td class="space"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_05.png"></td>
      <td class="virtue">Reduce bloqueos y fallos del sistema para mejor rendimiento con mayor base de datos  </td>
      <td class="space"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_06.png"></td>
      <td class="virtue">Descarga e instala automáticamente controladores en el tiempo de inactividad del sistema </td>
      <td class="space"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_07.png"></td>
      <td class="virtue">Hace copia de seguridad de todos los controladores automáticamente para restauración segura </td>
      <td class="space"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_08.png"></td>
      <td class="virtue">Prioridad de actualizar componentes de juego para mejor experiencia de juego<sup class="nou top"> Novedad</sup></td>
      <td class="space"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <!-- ADD NEW -->
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_09.png"></td>
      <td class="virtue">Detecta y repara efectivamente errores de dispositivos  <sup class="nou"> Novedad </sup></td>
      <td class="space"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <!-- AMEND OLD -->
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_10.png"></td>
      <td class="virtue">Actualización automática a la última versión</td>
      <td class="space"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_11.png"></td>
      <td class="virtue">24/7 soporte técnico gratuito para demanda </td>
      <td class="space"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    </tbody>
  </table>
</div>
<!-- comparison-table end -->

<!-- bottomcart start -->
<div class="bottomcart">
  <div class="wrapper">
    <div class="left-img"></div>
    <ul>
      <li><i></i> <span>1PC / 1 Año </span></li>
      <li class="packs active"><i></i> <span>5PC / 1 Año</span> <strong>-80%</strong></li>
      <li class="three-box"><i></i> <span>3PC / 1 Año</span> <strong>-73%</strong></li>
    </ul>
    <dl>
      <dt><strong><b>24,</b> 99€ </strong> <del>129,98€</del></dt>
      <dd><a href="https://www.iobit.com/buy.php?product=es-db65pciu2499&ref=es_db65pciupurchase1902<?php echo $refStr?>&&refs=es_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'db5PCpurchase1902-es')  " class="buybtn">Comprar ahora</a></dd>
    </dl>
  </div>
</div>
<!-- bottomcart end -->

<!--  footer start-->
<div class="footer">
  <!-- service -->
  <div class="service wrapper clearfix">
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/moneyback.png" alt=""></dt>
      <dd><h3>Garantía de reembolso</h3></dd>
      <dd class="small">Si no está satisfecho en los primeros <br> 60 días,le devolveremos su dinero.</dd>
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
    <dd>1*.Estos programas promocionales están sujetos a cambios sin previo aviso, dependiendo de nuestra discreción exclusiva en cualquier momento.</dd>
    <dd>2*.Datos pueden variar basados en diferentes sistemas u ordenadores.</dd>
  </dl>
  <!-- copyright -->
  <p class="copyright">Copyright © 2005 - 2019 IObit. Todos los derechos reservados</p>
</div>
<!-- footer end -->
<script src="<?php echo $pRootUrl;?>tpl/js/TweenMax.min.js"></script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>