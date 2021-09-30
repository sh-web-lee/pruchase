<?php //	初始化
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

function microtime_float() {
  list($usec, $sec) = explode(' ', microtime());
  return ((float)$usec + (float)$sec);
}

$reduceNum=76036125;
$buyNum = number_format(ceil(microtime_float()*1000/20000) - $reduceNum);

$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
if(in_array($_GET['pop'],array('x_imf'))){
  $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <title>Hasta 85% de descuento y regalos exclusivos para IObit Malware Fighter PRO – IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet">
  <link href="<?php echo $pResUrl; ?>style/style.css" rel="stylesheet">
  <?php echo $gJavascript['public']; ?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
<script type="text/javascript">
  function getBuyNum(){
    $.ajax({
      type: "GET",
      url: "<?php echo $pRootUrl;?>callback.php",
      data: "action=getBuyNum&reduceNum=<?php echo $reduceNum;?>&reTime=&r="+Math.random(),
      success: function(packs){
        $('.buyNum').html(packs);
        setTimeout('getBuyNum()', 20000);
      }
    });
  }
  setTimeout('getBuyNum()', 20000);
</script>
<!-- banner -->
<div class="banner">
  <div class="wrapper">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/es/index.php" target="_blank">IObit</a>
    <!-- title -->
    <h1> VENTA FLASH  Obtén la mejor protección para tu PC en tiempo real  </h1>
    <div class="panel clearfix">
      <div class="box small">
        <img src="<?php echo $pResUrl; ?>images/imf-box.png" alt="">
        <p><strong>17</strong><span><b>99</b> <del class="original">39,95€</del></span></p>
        <!-- 1pc buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=es-imf71pc1799&ref=es_imf71pcpurchase1905<?php echo $refStr;?>&refs=es_purchase_imf"
           onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf1pcpurchase1905-es')">
          <i></i> <span>Comprar ahora</span>
        </a>
      </div>
      <div class="box">
        <ul>
          <li><strong>11</strong> H :</li>
          <li><strong>43</strong> MIN :</li>
          <li><strong>44</strong> S :</li>
          <li><strong>644</strong> MS*</li>
        </ul>
        <img src="<?php echo $pResUrl; ?>images/imf-three-box.png" alt="">
        <p><strong>19</strong><span><b>99</b> <del class="original">149,89€</del></span></p>
        <!-- 3pc buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=es-imf73pcpfsd1999&ref=es_imf73pcpfsdpurchase1905<?php echo $refStr;?>&refs=es_purchase_imf"
           onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf3pcpurchase1905-es')">
          <i></i> <span>Comprar ahora</span>
        </a>
        <p class="bought">
          <img src="<?php echo $pResUrl; ?>images/people.png" alt=""> Más de <span class="buyNum"><?php echo $buyNum;?></span> personas han comprado
        </p>
      </div>
    </div>
  </div>
</div>
<!-- banner end -->
<!-- awards start -->
<div class="awards">
  <h2>Recomendado y premiado por estos Medios</h2>
  <img src="<?php echo $pResUrl; ?>images/awards.png" alt="">
</div>
<!-- awards end -->
<div class="bg">
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
        <a class="intro" href="javascript:void(0)">  Ver más sobre la versión Pro >></a>
      </div>
    </div>
  </div>
  <!-- feature end -->
  <!-- gift message start -->
  <div class="gift-message">
    <div class="wrapper">
      <img src="<?php echo $pResUrl; ?>images/imf-center-box.png" alt="" class="img-box">
      <div class="right-message">
        <img src="<?php echo $pResUrl; ?>images/pf-box.png" alt="" class="img-box">
        <div class="box">
          <h3><i></i>Protected Folder</h3>
          <p>La herramienta de protección de carpeta fácil de usar y con una contraseña.</p>
          <h3><i></i>Smart Defrag 6 PRO</h3>
          <p>Desfragmentador de disco confiable e inteligente con 7,000,000+ usuarios. </p>
        </div>
      </div>
    </div>
  </div>
  <!-- gift message end -->
</div>
<!-- between-buy start -->
<div class="between-buy">
  <div class="wrapper">
    <p class="price"><strong>19,99€ </strong> <del>149,89€</del></p>
    <!-- 3pc buybtn -->
    <a href="https://www.iobit.com/buy.php?product=es-imf73pcpfsd1999&ref=es_imf73pcpfsdpurchase1905<?php echo $refStr;?>&refs=es_purchase_imf"
       onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf3pcpurchase1905-es')" class="buybtn">
      <i></i>
      <span>Comprar ahora</span>
    </a>
    <p class="last"> <i></i> Más de <span class="buyNum"><?php echo $buyNum;?></span> personas han comprado</p>
  </div>
</div>
<!-- between-buy end -->
<!-- review start -->
<div class="review wrapper">
  <h2>Comentarios</h2>
  <div class="clearfix">
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/gelu-batir.png" alt="Gelu Batir"></dt>
      <dd>
        <h3>Gelu Batir</h3>
        <p>"Estoy muy satisfecho con su producto IObit Malware Fighter. Escanea mi ordenador portátil sin afectar su rendimiento, mientras que también recomendé este producto a dos de mis amigos." </p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/software.png" alt=""></dt>
      <dd>
        <h3>Software.Informer</h3>
        <p>"Puede detectar una gran variedad de spyware, ransomware, adware, troyanos, gusanos, keyloggers y bots."</p>
      </dd>
    </dl>
    <dl class="david">
      <dt><img src="<?php echo $pResUrl; ?>images/david-cassidy.png" alt="David Cassidy"></dt>
      <dd>
        <h3>David Cassidy</h3>
        <p>"Es mucho más rápido en el escáner y fácil de usar. Yo recomendaría que olviden el resto y obtengan lo mejor que es IObit Malware Fighter."</p>
      </dd>
    </dl>
  </div>
</div>
<!-- review end -->
<!-- comparison_table start -->
<div class="comparison_table wrapper" id="compare">
  <table border="0" cellspacing="0" cellpadding="0" width="100%">
    <thead>
    <tr>
      <th colspan="2" class="text">La comparación entre FREE y PRO</th>
      <th class="itemb"><span>IMF FREE</span></th>
      <th class="itema">
        <span class="font16">IMF PRO  para 3PCs </span>
        <strong>19,99€</strong>
        <del> 149,89€</del>
        <!-- 3pc buybtn -->
        <a href="https://www.iobit.com/buy.php?product=es-imf73pcpfsd1999&ref=es_imf73pcpfsdpurchase1905<?php echo $refStr;?>&refs=es_purchase_imf"
           onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf3pcpurchase1905-es')"
           class="buybtn">
          Comprar ahora
        </a>
      </th>
      <th class="itemb">
        <span class="font16">IMF PRO para 1PC </span>
        <strong>17,99€</strong>
        <del> 39,95€</del>
        <!-- 1pc buybtn -->
        <a href="https://www.iobit.com/buy.php?product=es-imf71pc1799&ref=es_imf71pcpurchase1905<?php echo $refStr;?>&refs=es_purchase_imf"
           onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf1pcpurchase1905-es')"
           class="buybtn">
          Comprar ahora
        </a>
      </th>
    </tr>
    </thead>
    <tbody>
    <!-- 01 -->
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_01.png"></td>
      <td class="virtue">Función básica anti-malware</td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/greymark.png"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
    </tr>
    <!-- 02 -->
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_07.png"></td>
      <td class="virtue">Detecta más de 203,000,000 de amenazas con los motores Bitdefender y IObit <sup class="improved">MEJORADO</sup></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/greyerror.png"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
    </tr>
    <!-- 03 -->
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_03.png"></td>
      <td class="virtue">Bloquea ransomware que intentan cifrar tus archivos importantes 	 <sup class="improved">MEJORADO</sup></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/greyerror.png"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
    </tr>
    <!-- 04 -->
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_04.png"></td>
      <td class="virtue">Archivos Específicos Protegidos contra Accesos no<br>
        Autorizados en Caja Fuerte  <sup class="improved">MEJORADO</sup></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/greyerror.png"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
    </tr>
    <!-- 05 -->
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_10.png"></td>
      <td class="virtue">Protección completa en tiempo real para la mejor<br>
        seguridad de la PC <sup class="improved">MEJORADO</sup></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/greyerror.png"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
    </tr>
    <!-- 06 -->
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_09.png"></td>
      <td class="virtue">Protege tu cámara contra el acceso no autorizado <sup class="improved">MEJORADO</sup></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/greyerror.png"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
    </tr>
    <!-- 07 -->
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_11.png"></td>
      <td class="virtue">Previene infecciones de virus transmitidas por discos USB</td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/greyerror.png"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
    </tr>
    <!-- 08 -->
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_12.png"></td>
      <td class="virtue">Detecta un proceso malicioso que se ejecuta en la RAM</td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/greyerror.png"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
    </tr>
    <!-- 09 -->
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_17.png"></td>
      <td class="virtue">Detecta amenazas mediante el análisis de acciones<br>
        maliciosas</td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/greyerror.png"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
    </tr>
    <!-- 10 -->
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_13.png"></td>
      <td class="virtue">Limpia automáticamente el rastreo de navegación para<br>
        evitar el seguimiento malicioso </td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/greyerror.png"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
    </tr>
    <!-- 11 -->
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_15.png"></td>
      <td class="virtue">Actualización automática a la última versión</td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/greyerror.png"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
    </tr>
    <!-- 12 -->
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_16.png"></td>
      <td class="virtue">Soporte técnico gratuito las 24 horas, 7 días a la semana</td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/greyerror.png"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
    </tr>
    </tbody>
    <tfoot>
    <tr>
      <th colspan="2"></th>
      <th class="itemb">IMF FREE<br> <span class="font18">Tu versión actual</span></th>
      <th class="itema">
        <strong>19,99€</strong>
        <del>149,89€</del>
        <!-- 3pc buybtn -->
        <a href="https://www.iobit.com/buy.php?product=es-imf73pcpfsd1999&ref=es_imf73pcpfsdpurchase1905<?php echo $refStr;?>&refs=es_purchase_imf"
           onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf3pcpurchase1905-es')"
           class="buybtn">
          Comprar ahora
        </a>
        <span>1 año / 3 PCs</span>
      </th>
      <th class="itemb">
        <strong>17,99€</strong>
        <del>39,95€</del>
        <!-- 1pc buybtn -->
        <a href="https://www.iobit.com/buy.php?product=es-imf71pc1799&ref=es_imf71pcpurchase1905<?php echo $refStr;?>&refs=es_purchase_imf"
           onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf1pcpurchase1905-es')"
           class="buybtn">
          Comprar ahora
        </a>
        <span>1 año / 1 PC</span>
      </th>
    </tr>
    </tfoot>
  </table>
</div>
<!-- comparison_table end -->

<div class="wrapper">
  <!-- service start -->
  <div class="service clearfix">
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
  <!-- service end -->
</div>
<div class="finally">
  <div class="wrapper">
    <!-- annotation start -->
    <dl class="annotation">
      <dt>Nota:</dt>
      <dd>
        *.Estos programas promocionales están sujetos a cambios sin previo aviso, dependiendo de nuestra discreción exclusiva en cualquier momento.<br>
        *.Datos pueden variar basados en diferentes sistemas u ordenadores.
      </dd>
    </dl>
    <!-- annotation end -->

    <!-- footer start -->
    <div class="footer">Copyright 2005 - <?php echo date('Y')?> IObit. Todos los derechos reservados</div>
    <!-- footer end -->
  </div>
</div>
<script>
  function cycleCountdown(){
    var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 22:17:00');
    var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
    d = MApp(2.2).packages.zeroize(datetime[0], 2);
    h = MApp(2.2).packages.zeroize(datetime[1], 2);
    i = MApp(2.2).packages.zeroize(datetime[2], 2);
    s = MApp(2.2).packages.zeroize(datetime[3], 2);
    mi = MApp(2.2).packages.zeroize(datetime[4], 3);
    $(".banner .box ul strong").eq(0).text(h).end().eq(1).text(i).end().eq(2).text(s).end().eq(3).text(mi);
    setTimeout('cycleCountdown()', 1);
  }
  $(function () {
    $.fn.target=function (target) {
      $(this).click(function() {
        var Theigth = target.offset().top;
        $("html, body").animate({scrollTop: Theigth}, 'slow');
      });
    };
    $("a.intro").target($("#compare"));
    cycleCountdown();
  })
</script>
</body>
</html>