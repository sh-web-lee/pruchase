<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';

if (!empty($_GET['action']) && $_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $isPop=($_GET['pop']==1)?true:false;
  $c_name = ($isPop?'esascjun_pop':'esascjun_p') . $date;
  if ($_COOKIE[$c_name]===null) {
    $packsNum = $isPop?38:89;
    setcookie($c_name, $packsNum, time() + 3600 * 24);
  } else {
    if (intval($_COOKIE[$c_name]) <= 3) {
      setcookie($c_name, 3, time() + 3600 * 24);
      $packsNum = 3;
    } else {
      $packsNum = $_COOKIE[$c_name] - 1;
      setcookie($c_name, $packsNum, time() + 3600 * 24);
    }
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ahorra hasta un 83% en Advanced SystemCare 12 PRO y obtén regalos gratis - IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600&display=swap" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>

<body>
<!-- banner start -->
<div class="banner">
  <div class="wrapper clearfix">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/es/index.php" target="_blank">IObit</a>
    <!-- title -->
    <h1>OFERTA ESPECIAL DE VERANO</h1>
    <h2>Hasta un <span>83%</span> en Advanced SystemCare 12 PRO y obtén regalos gratis!</h2>
    <div class="content three-box">
      <div class="left-message">
        <span class="imgbox"></span>
        <span class="reduce"></span>
        <p>¡Ahora sólo quedan <strong class="packsNum">136</strong> disponibles!</p>
      </div>
      <div class="right-message">
        <h3><strong>06</strong> H : <strong>06</strong> MIN : <strong>06</strong> S : <strong>006</strong> MS*</h3>
        <h4>Elige la solución de optimización completa <br> para que tu PC funcione como si fuera nuevo</h4>
        <ul>
          <li class="active" data-num="0" data-name="pcs">Profesional</li>
          <li data-num="1" data-name="pc">Básico</li>
        </ul>
        <dl class="price">
         <dt><strong>19,99€</strong> <del>119,93€</del></dt>
         <dd><a href="https://www.iobit.com/buy.php?product=es-asc123pcpfsd1999&ref=es_asc123pcpfsdpurchase1906&refs=es_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3pc1906-es')" class="buybtn">Comprar ahora</a></dd>
         <dd>Más de <span class="buyNum"></span> personas han comprado</dd>
       </dl>
      </div>
    </div>
  </div>
</div>
<!-- banner end -->

<!-- feature start -->
<div class="feature">
  <div class="wrapper clearfix">
    <!-- title -->
    <h2>
      Disfruta de un PC más rápido y seguro con el mejor rendimiento y protección con <br>
      Advanced SystemCare 12 PRO
    </h2>
    <img src="<?php echo getStaticUrl('images/feature-box.png')?>" alt="" class="asc-box">
    <dl class="left">
      <dt><img src="<?php echo getStaticUrl('images/feature-icon01.png')?>" alt=""></dt>
      <dd>
        <h3>200%*</h3>
        <p>Reduce el retraso de sistema y acelera la <br> velocidad de tu PC hasta 200% más rápida!</p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/feature-icon04.png')?>" alt=""></dt>
      <dd>
        <h3>300%*</h3>
        <p>Acelere la velocidad de descarga, navegación, juegos, <br> visualización de YouTube hasta un 300% más rápida</p>
      </dd>
    </dl>
    <dl class="left">
      <dt><img src="<?php echo getStaticUrl('images/feature-icon02.png')?>.png" alt=""></dt>
      <dd>
        <h3>100% protección</h3>
        <p>Borra los rastros de privacidad para <br> evitar que se rastreen</p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/feature-icon05.png')?>" alt=""></dt>
      <dd>
        <h3>Función automática</h3>
        <p>Detiene automáticamente los procesos no <br> utilizados para liberar RAM y mejorar el <br> rendimiento de PC</p>
      </dd>
    </dl>
    <dl class="left">
      <dt><img src="<?php echo getStaticUrl('images/feature-icon03.png')?>" alt=""></dt>
      <dd>
        <h3>Más profundo</h3>
        <p>Repara los problemas de registro para <br> reducir los bloqueos de Windows y  <br> los mensajes de error</p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/feature-icon06.png')?>" alt=""></dt>
      <dd>
        <h3>En Tiempo real </h3>
        <p>Protección contra amenazas de <br> seguridad para PC y navegación en tiempo real</p>
      </dd>
    </dl>
    <!-- a.intro -->
    <a class="intro" href="javascript:void (0);">Más información sobre la edición PRO>></a>
  </div>
</div>
<!-- feature end -->


<!-- betweenbuy start -->
<div class="betweenbuy wrapper clearfix">
  <!-- title -->
  <h2>¡Todo lo que quieras para tu pc está aquí, no te pierdas la oportunidad!</h2>
  <dl>
    <dt>
      <img src="<?php echo getStaticUrl('images/asc-gift.png')?>" alt="">
    </dt>
    <dd>
      <h3>Advanced SystemCare PRO <del>49,99€</del></h3>
      <p>Optimización profesional disponible para <br> los PCs de toda tu familia!</p>
    </dd>
  </dl>
   <dl>
    <dt>
      <img src="<?php echo getStaticUrl('images/pf-gift.png')?>" alt="">
    </dt>
    <dd>
      <h3>Protected Folder <del>39,95€</del></h3>
      <p>La efectiva herramienta de protección <br> de archivos que garantiza la seguridad <br> de tu privacidad.</p>
    </dd>
  </dl>
   <dl>
    <dt>
      <img src="<?php echo getStaticUrl('images/sd-gift.png')?>" alt="">
    </dt>
    <dd>
      <h3>Smart Defrag 6 PRO <del>29,99€</del></h3>
      <p>Desfragmentador de disco confiable e <br> inteligentecon 7,000,000+ usuarios.</p>
    </dd>
  </dl>
    <!-- price -->
    <p class="price">
      <strong>19,99€</strong> <del>119,93€</del>
    </p>
    <!-- buybtn -->
    <a class="buybtn"
       href="https://www.iobit.com/buy.php?product=es-asc123pcpfsd1999&ref=es_asc123pcpfsdpurchase1906&refs=es_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3pc1906-es')">
      Comprar ahora
    </a>

</div>
<!-- betweenbuy end -->


<!-- awards start -->
<div class="awards wrapper">
  <h2>Recomendado y premiado por estos Medios</h2>
  <img src="<?php echo getStaticUrl('images/awards-icon.png')?>" alt="">
</div>
<!-- awards end -->
<div class="review wrapper">
  <div class="reviews">
    <h2>Comentarios del usuario</h2>
    <p>"Este programa es lo major que he probado. Mi ordenador trabaja mucho major y rapido ahora que he descargado ASC. A limpiado archivos innecesarios y carpetas vacias. A limpiado y desfragmentado los registros en todos los archivos de la PC. Recomiendo ASC, no es caro y lo que hara para tu ordenador sera totalmente incredible. Lo amaras, lo prometo."</p>
  </div>
  <div class="reviews">
    <h2>Comentarios del usuario</h2>
    <p>"Como tecnico de ordenadores, encuentro que al descargar y escanear ASC Gratis, la mayoría de problemas estan resueltos. Cuando acabo una reparación, usualmente sugiero al cliente comprar el paquete PRO. Quien necesita un tecnico cuando tienes el poder de ASC PRO trabajando en tu sistema 24-7? Este es el major product que un usuario puede comprar desde casa. Gracias por hacer mi trabajo más fácil."</p>
  </div>
  <div class="reviews active">
    <h2>Comentarios mediáticos</h2>
    <p>“Advanced SystemCare Pro incluye una nueva tecnología de protección para mejorar la seguridad al navegar por Internet, una instalación más sencilla y un nuevo motor para desfragmentar discos duros a una mayor velocidad.”</p>
  </div>
  <div class="reviews">
    <h2>Comentarios del usuario</h2>
    <p>"Con la nueva compra de la versión complete, mi ordenador ha estado libre de “bugs” por años y no me ha dejado solo en ningun momento. Contacte ASC recientemente y respondieron en 1 dia con todo lo que necesitaba saber."</p>
  </div>
  <div class="reviews ">
    <h2>Comentarios del usuario</h2>
    <p>"No soy un expert en ordenadores como mucha gente lo es. No cuantos programas he probado durante años, todos diciendo ser los mejores pero nunca llegando cerca a ASC que yo sepa. Desde que tengo este programa no he tenido que llamar a un tecnico. A sobrepasado mis expectativas, siempre actualizado y los graficos son geniales. Muchas gracias a todos los que estan hacienda mi vida mas facil."</p>
  </div>
  <ul class="handle clearfix">
    <li>
      <div class="badge"><img src="<?php echo getStaticUrl('images/loretta-harnarine.png')?>" alt="Loretta Harnarine"><span></span></div>
      <strong>Loretta Harnarine</strong>
    </li>
    <li>
      <div class="badge"><img src="<?php echo getStaticUrl('images/charles-r-widick.png')?>" alt="Charles R. Widick"><span></span></div>
      <strong>Charles R. Widick</strong>
    </li>
    <li  class="active">
      <div class="badge"><img src="<?php echo getStaticUrl('images/softonic.png')?>" alt="software.informer.com"><span></span></div>
      <strong>software.informer</strong>
    </li>
    <li>
      <div class="badge"><img src="<?php echo getStaticUrl('images/bruce-ramsay.png')?>" alt="Bruce Ramsay"><span></span></div>
      <strong>Bruce Ramsay</strong>
    </li>
     <li>
      <div class="badge"><img src="<?php echo getStaticUrl('images/hank-ewert.png')?>" alt="Hank Ewert"><span></span></div>
      <strong>Hank Ewert</strong>
    </li>
  </ul>
</div>

<!-- comparison start -->
<div class="comparison" id="compare">
  <table border="0" cellspacing="0" cellpadding="0" width="100%">
    <thead>
    <tr>
      <th class="text" colspan="2">Ver la comparación entre FREE y PRO:</th>
      <th class="spac"></th>
      <th class="itemb">
        <p>
          Advanced SystemCare <br> FREE
        </p>
      </th>
      <th class="spac"></th>
      <th class="itema">
        <p>
          Advanced SystemCare <br> PRO
        </p>
      </th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_11.png"></td>
      <td class="virtue">Limpieza, optimización y protección básica de sistema básico</td>
      <td class="spac"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/mark-free-yes.png"></td>
      <td class="spac"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/mark-pro.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_01.png"></td>
      <td class="virtue">Hasta 300% aceleración de Internet con Internet acelerador*</td>
      <td class="spac"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/mark-free.png"></td>
      <td class="spac"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/mark-pro.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_02.png"></td>
      <td class="virtue">Optimización potente de sistema en tiempo real para mejor rendimiento</td>
      <td class="spac"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/mark-free.png"></td>
      <td class="spac"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/mark-pro.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_03.png"></td>
      <td class="virtue">Limpieza profunda de registro de Windows</td>
      <td class="spac"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/mark-free.png"></td>
      <td class="spac"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/mark-pro.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_04.png"></td>
      <td class="virtue">Máximo rendimiento del disco duro</td>
      <td class="spac"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/mark-free.png"></td>
      <td class="spac"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/mark-pro.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_05.png"></td>
      <td class="virtue">Detección completa contra amenazas de seguridad</td>
      <td class="spac"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/mark-free.png"></td>
      <td class="spac"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/mark-pro.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_06.png"></td>
      <td class="virtue">Experiencia segura online con protección de navegación</td>
      <td class="spac"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/mark-free.png"></td>
      <td class="spac"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/mark-pro.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_07.png"></td>
      <td class="virtue">Limpieza automática de seguridad de privacidad siempre que inicie sesión</td>
      <td class="spac"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/mark-free.png"></td>
      <td class="spac"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/mark-pro.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_08.png"></td>
      <td class="virtue">Actualización automática a la última versión</td>
      <td class="spac"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/mark-free.png"></td>
      <td class="spac"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/mark-pro.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_09.png"></td>
      <td class="virtue">Se ejecuta en segundo plano sin molestia</td>
      <td class="spac"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/mark-free.png"></td>
      <td class="spac"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/mark-pro.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_10.png"></td>
      <td class="virtue">24/7 soporte técnico gratuito para demanda</td>
      <td class="spac"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/mark-free.png"></td>
      <td class="spac"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/mark-pro.png"></td>
    </tr>
    </tbody>
  </table>
</div>
<!-- comparison end -->

<!-- bottombuy start -->
<div class="bottombuy">
  <div class="wrapper clearfix">
   <span class="imgbox"></span>
   <ul>
     <li class="active three-pc" data-num="0" data-name="pcs"><i></i> <span>Profesional</span> <strong>-83%</strong></li>
     <li data-num="1" data-name="pc"><i></i> <span>Básico</span> <strong>-43%</strong></li>
   </ul>
   <dl class="price">
     <dt><strong>19,99€</strong> <del>119,93€</del></dt>
     <dd><a href="https://www.iobit.com/buy.php?product=es-asc123pcpfsd1999&ref=es_asc123pcpfsdpurchase1906&refs=es_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3pc1906-es')" class="buybtn">Comprar ahora</a></dd>
   </dl>
  </div>
</div>
<!-- bottombuy end -->

<!-- footer start -->
<div class="footer">
  <!-- payment -->
  <div class="payment wrapper clearfix">
    <!-- visa -->
    <dl class="visa">
      <dt><img src="<?php echo $pResUrl; ?>images/payment.png" alt=""></dt>
      <dd><strong>Formas de pago</strong></dd>
      <dd>Aceptamos varios formas de pago por <br> su pedido</dd>
    </dl>
    <!-- moneyback -->
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/moneyback.png" alt=""></dt>
      <dd><strong>Garantía de reembolso</strong></dd>
      <dd>Si no está satisfecho en los primeros <br> 60 días, le devolveremos su dinero</dd>
    </dl>
    <!-- godaddy -->
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/godaddy.png" alt=""></dt>
      <dd><strong>Pago seguro</strong></dd>
      <dd>100% pago seguro para su pedido</dd>
    </dl>
    <!-- servicion -->
    <dl class="servicion">
      <dt><img src="<?php echo $pResUrl; ?>images/servicio.png" alt=""></dt>
      <dd><strong>Servicio al cliente</strong></dd>
      <dd>24/7 Soporte Técnico gratis</dd>
    </dl>
  </div>
  <div class="container">
  <dl class="annotation wrapper">
    <dt>Nota:</dt>
    <dd>1*.Estos programas promocionales están sujetos a cambios sin previo aviso, dependiendo de nuestra discreción exclusiva en cualquier momento.</dd>
    <dd>2*.Datos pueden variar basados en diferentes sistemas o ordenadores.</dd>
  </dl>
  <p class="copyright">Copyright  2005 - <?php echo date('Y')?> IObit. Todos los derechos reservados</p>
  </div>
</div>
<!-- footer end -->
<div class="pop-bg"></div>
<div class="pop">
   <h4><a class="smaller" href="javascript: void(0);">Minimizar</a> <a class="close" href="javascript: void(0);">Cerrar</a></h4>
    <!-- title -->
    <h3>FELICITACIONES</h3>
    <div class="title">Obtendrás un cupón para paquete profesional. ¡Date prisa, sólo 
      <div class="reduceGift packbox">
        <b class="list"><strong>0</strong></b>
        <b class="list"><strong>0</strong></b>

      </div>
      <img src="<?php echo $pResUrl; ?>images/reduce-number.png" alt="" class="reduce-number">
      cupones!
      </div>
    <!-- buybtn -->
    <a class="buybtn" href="https://www.iobit.com/buy.php?product=es-asc123pc1799pfsdcoupon&ref=es_asc123pcpfsdpurchase1906popup&refs=es_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1906pop-es')">
      Obtener mi descuento
    </a>
</div>
<div class="pop-small">
  <!-- the button for larger -->
  <a class="larger" href="javascript: void(0);">Maximizar</a>
  <!-- countdown -->
  <p class="countdown">
    Sólo quedan 
    <img src="<?php echo $pResUrl; ?>images/reduce-number.png" alt="" width="25" class="reduce-number">
    <b class="reduceGift packbox">
        <b class="list"><strong>0</strong></b>
        <b class="list"><strong>0</strong></b>
    </b> 
  cupones
  </p>
  <p class="price">Ahorra 2€  extra</p>
  <!-- buybtn -->
  <a class="buybtn" href="https://www.iobit.com/buy.php?product=es-asc123pc1799pfsdcoupon&ref=es_asc123pcpfsdpurchase1906popup&refs=es_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1906pop-es')">
  Obtener mi descuento
  </a>
</div>

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
<script>

</script>

</body>
</html>