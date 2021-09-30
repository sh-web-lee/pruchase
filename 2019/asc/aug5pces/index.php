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

if(!empty($_GET['action'])&&($_GET['action']=='getSales')){
  $date=$_GET['d'];
  $cName='esascaugpa'.$date;
  $cookie=$_COOKIE[$cName];
  if($cookie){
    $packsNum=$_COOKIE[$cName];
    if($packsNum>3){
      $packsNum--;
      setcookie($cName,$packsNum);
    }else{
      $packsNum=3;
      setcookie($cName,$packsNum);
    }
  }else{
    $packsNum=58;
    setcookie($cName,$packsNum);
  }
  echo $packsNum;
  exit();
}
$refStr=empty($_GET['st'])?'':('-'.$_GET['st']);
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Hasta un 85% en Advanced SystemCare 14 PRO y obtén regalos gratis - IObit</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a href="https://www.iobit.com/es/index.php" target="_blank" class="logo">IObit</a>
      <h1>VENTA FLASH</h1>
      <div class="box">
        <span class="img-box"> <img src="<?php echo $pResUrl; ?>images/asc-three-box.png" alt=""></span>
        <p class="price">
           <strong><b>22</b>,99€  </strong> <del>69,99€</del>
        </p>
        <a href="https://www.iobit.com/buy.php?product=es-asc145pc2299&ref=es_asc145pcpurchase1908<?php echo $refStr; ?>&refs=es_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase5pc1908-es')  " class="buybtn nobg">Comprar ahora </a>
      </div>
      <div class="box three-active">
        <h3>Sólo quedan <strong><span class="packsNum"></span> <img src="<?php echo $pResUrl; ?>images/raduem.png" alt="" class="raduem"></strong> paquetes</h3>
        <span class="img-box"><img src="<?php echo $pResUrl; ?>images/asc-gift-box.png" alt="" > <img src="<?php echo $pResUrl; ?>images/raduem-gift.png" alt="" class="raduem-gift" ></span>
        <p class="price">
          <strong><b>17</b>,99€  </strong> <del>119,93€</del>
        </p>
        <a href="https://www.iobit.com/buy.php?product=es-asc143pcpfsd1799&ref=es_asc143pcpfsdpurchase1908<?php echo $refStr; ?>&refs=es_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3pc1908-es')  " class="buybtn">Comprar ahora </a>
        <p class="last">Más de <strong class="buyNum">6,396,949</strong> personas han comprado</p>
      </div>
      
      
    </div>
  </div>
  <!-- banner end -->
  <div class="paymentop wrapper">
    <img src="<?php echo $pResUrl; ?>images/payment.png" alt="">
  </div>
  <!-- feature start -->
  <div class="feature">
    <div class="wrapper clearfix">
      <!-- title -->
      <h2>
        Disfruta de un PC más rápido y seguro con el mejor rendimiento y protección con <br> Advanced SystemCare 14 PRO
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
  <div class="gift-message clearfix">
    <h2>Disfruta de un PC más rápido, limpio y seguro con ASC Pro y las  </h2>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/sd-gift.png" alt=""></dt>
      <dd>
        <h3><strong>0€</strong>  <del>29,99€</del></h3>
        <p>El máximo rendimiento del disco. <br> El acceso más rápido a los archivos. </p>
      </dd>
    </dl>
     <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/pf-gift.png" alt=""></dt>
      <dd>
        <h3><strong>0€</strong>  <del>39,95€</del></h3>
        <p>Una contraseña para proteger los <br> archivos o los datos importantes. </p>
      </dd>
    </dl>
    <a href="https://www.iobit.com/buy.php?product=es-asc143pcpfsd1799&ref=es_asc143pcpfsdpurchase1908<?php echo $refStr; ?>&refs=es_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3pc1908-es')  " class="buybtn">Comprar ahora</a>
    <p>Cantidades limitadas, sólo quedan <strong><span class="packsNum"></span> <img src="<?php echo $pResUrl; ?>images/raduem.png" alt="" class="raduem"></strong> paquetes</p>
  </div>
  <!-- review start -->
  <div class="reviews wrapper">
    <!-- title -->
    <h2>Premios y reseñas en todo el mundo</h2>
    <p>Elegido por más de <span>250 millones </span> de usuarios en todo el mundo</p>
    <!-- map and points -->
    <div class="map">
      <span class="recover recover01 big"></span>
      <span class="recover recover02 middle"></span>
      <span class="recover recover03 smail"></span>
      <span class="recover recover04 big"></span>
      <span class="recover recover05 middle"></span>
      <span class="recover recover06 smail"></span>
      <span class="recover recover07 big"></span>
      <span class="recover recover08 middle"></span>
      <span class="recover recover09 smail"></span>
      <span class="recover recover10 smail"></span>
      <span class="recover recover11 smail"></span>
      <span class="recover recover12 smail"></span>
      <span class="recover recover13 middle"></span>
      <span class="recover recover14 middle"></span>
      <span class="recover recover15 smail"></span>
      <span class="recover recover16 smail"></span>
      <span class="recover recover17 big"></span>
      <span class="recover recover18 smail"></span>
      <span class="recover recover19 smail"></span>
      <span class="recover recover20 big"></span>
      <span class="recover recover21 middle"></span>
      <!-- tradotto-da-tedesco -->
      <dl class="tradotto-da-tedesco">
        <dt><img src="<?php echo $pResUrl; ?>images/tradotto-da-tedesco.png"></dt>
        <dd>Es el mejor programa que limpia y acelera mi PC de manera confiable y <br> segura. Si desea aprovechar al máximo tu PC (ahora y en el futuro), el <br> nuevo IObit Advanced SystemCare debe ser el mejor en la versión Pro.</dd>
      </dl>
      <!-- html-it -->
      <dl class="html-it">
        <dt><img src="<?php echo $pResUrl; ?>images/html-it.png"></dt>
        <dd>Advanced SystemCare Pro incluye una nueva tecnología de protección para <br> mejorar la seguridad al navegar por Internet, una instalación más sencilla y un <br> nuevo motor para desfragmentar discos duros a una mayor velocidad.</dd>
      </dl>
      <!-- baixaki -->
      <dl class="baixaki">
        <dt><img src="<?php echo $pResUrl; ?>images/baixaki.png"></dt>
        <dd>En nuestras pruebas, notamos que Advanced SystemCare tiene una eficiencia excepcional. </dd>
      </dl>
      <!-- charles-r-widick -->
      <dl class="charles-r-widick">
        <dd>¿Quién necesita un técnico cuando tiene Advanced SystemCare Pro <br> que trabaja para su sistema 24-7? Es el mejor producto para usuarios <br> doméstico. Muchas gracias por hacer mi trabajo más fácil." </dd>
        <dt><img src="<?php echo $pResUrl; ?>images/charles-r-widick.png"></dt>
      </dl>
      <!-- cnet -->
      <dl class="cnet">
        <dd>Advanced SystemCare es diseñado para solucionar <br> cualquier problema que afecte a su computadora.</dd>
        <dt><img src="<?php echo $pResUrl; ?>images/cnet.png"></dt>
      </dl>
    </div>
  </div>
  <!-- review end -->
  
  <div class="awards wrapper">
    <h2>Recomendado y premiado por estos Medios</h2>
    <img src="<?php echo $pResUrl; ?>images/awards-icon.png" alt="">
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
         Advanced SystemCare  <br> FREE   <br> 
        </p>
        
      </th>
      <th class="spac"></th>
      <th class="itema">
        <p>
          Advanced SystemCare <br> PRO <br>
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
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_14.png"></td>
      <td class="virtue">Detecta enlaces maliciosos en tu correo electrónico web</td>
      <td class="spac"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/mark-free-yes.png"></td>
      <td class="spac"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/mark-pro.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_15.png"></td>
      <td class="virtue">Modo IA más inteligente para escaneo inteligente y limpieza y optimización premium de PC </td>
      <td class="spac"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/mark-free.png"></td>
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
  <div class="bottom-buy">
    <div class="wrapper">
      <div class="img-box"></div>
      <ul>
        <li class="one-pc " data-num="0"><i></i> <span>1 año / 5 PCs</span> </li>
        <li class="three-gift active" data-num="1"><i></i> <span>1 año / 3 PCs + 2 herramientas gratis</span> </li>
      </ul>
      <div class="message">
         <p class="price">
          <strong> <b>17</b>,99€</strong>
          <del>€119,93</del>
        </p>
        <a href="https://www.iobit.com/buy.php?product=es-asc143pcpfsd1799&ref=es_asc143pcpfsdpurchase1908<?php echo $refStr; ?>&refs=es_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3pc1908-es')" class="buybtn"><i></i> <span>Comprar ahora</span></a>
      </div>
    </div>
  </div>
  <!-- comparison end -->
  <div class="payment wrapper clearfix">
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/payments.png"></dt>
      <dd>
        <strong>Formas de pago</strong> Aceptamos varios formas de pago por <br> tu pedido
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/money-back.png"></dt>
      <dd>
        <strong>Garantía de reembolso</strong> Si no está satisfecho en los primeros 60 <br> días, le devolveremos tu dinero
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/godaddy.png"></dt>
      <dd>
        <strong>Pago seguro</strong> 100% pago seguro para tu pedido
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/servicio.png"></dt>
      <dd>
        <strong>Servicio al cliente</strong> 24/7 Soporte Técnico gratis
    </dl>
  </div>
<div class="footer">
  <dl class="annotation wrapper">
    <dt>Nota:</dt>
    <dd>
      *.Estos programas promocionales están sujetos a cambios sin previo aviso, dependiendo de nuestra discreción exclusiva en cualquier momento.</dd>
  </dl>
  <p>Copyright © 2005 - <?php echo date('Y')?> IObit. Todos los derechos reservados</p>
</div>
<script type="text/javascript" src="<?php echo $pResUrl; ?>js/script.js"></script>
</body>
</html>