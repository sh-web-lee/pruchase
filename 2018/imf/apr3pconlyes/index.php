<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';
  include $pRootUrl.'callback.php';
$refStr='';
if(in_array($_GET['ref'],array('aractivatemain','aractivatesg','aractivatenow','aractivatesee','bdprotectnow',
    'bdactivatemain','bdactivatescan','bdactivatesg','trayscanbd','rootkitdb','traybd','cameraguard','trayanti-tracking',
    'trayusbguard','traycameraguard','traytrial','purchasear','purchasebd','imf2arguardc','ffbdt','ffart',
    'ffaut','ffcgt','ffupt','atn','fixall','asf','auf','atf','ugf','mbr','trayusbguard','sgup','autip','newgift',
    'bdda','arda','box','notibc','box13thbc'))){
  $refStr.='-'.$_GET['ref'];
}
if(in_array($_GET['pop'],array('x_imf'))){
  $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>80% de descuento para IObit Malware Fighter PRO – IObit</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Lato:400,700'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com/es/index.php" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit" />
      </a>
      <h1>OFERTA POR TIEMPO LIMITADO</h1>
      <div class="subtitle clearfix">
        <p>Compra IObit Malware Fighter PRO y obtén regalos gratis durante </p>
        <ul id="banCountdown" class="cuntdown">
          <li><span>12</span>h: </li>
          <li><span>12</span>min: </li>
          <li><span>12</span>s: </li>
          <li><span>12</span>ms*</li>
        </ul>
      </div>
      <div class="offer">
        <img src="<?php echo getStaticUrl('images/box.png')?>" alt=""/>
        <div class="price">
          <p><strong>19<small>,99€</small></strong> <del>99,89€</del></p>
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=es-imf63pcsdpf1999&ref=es_imf63pcpurchasesdpf1809<?php echo $refStr;?>&refs=es_purchase_imf"
             onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1809-es')">
            <i class="all-icons"></i>
            <span>Comprar ahora</span>
          </a>
          <p>Más de <span class="buyNum">7,714,837</span> personas han comprado</p>
        </div>
        <div class="info">
          <ul class="info-box">
            <li>
              <h6><i class="all-icons">★</i> Smart Defrag 6 PRO:</h6>
              <p>Desfragmentador de disco confiable e inteligente con 7,000,000+ usuarios.</p>
            </li>
            <li>
              <h6><i class="all-icons">★</i> Protected Folder:</h6>
              <p>La herramienta de protección de carpeta fácil de usar y con una contraseña.</p>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- payments start -->
  <div class="payments">
    <div class="wrapper"><img src="<?php echo getStaticUrl('images/payments.png')?>" alt="" /></div>
  </div>
  <!-- payments end -->

  <!-- feature start -->
  <div class="feature">
    <div class="wrapper">
      <h2>Para IObit Malware Fighter 6 PRO, no existen hackeos que se resistan.</h2>
      <div class="clearfix">
        <div class="left fl">
          <dl>
            <dt><img src="<?php echo getStaticUrl('images/icons01.png')?>" alt=""/></dt>
            <dd>
              <h4>No ataques Ransomware</h4>
              <p>
                Los famosos Ransomware nos hacen la vida imposible como por ejemplo, el WannaCry. Ahora IMF 6 PRO detecta y evita los ataques de ransomware proactivamente.
              </p>
            </dd>
          </dl>
          <dl>
            <dt><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt=""/></dt>
            <dd>
              <h4>Protección de cámara web </h4>
              <p>Te proporciona una protección total para que nadie lo vigile, acceda a información en tiempo real ni rastree las conversaciones personales en nuestro espacio privado.</p>
            </dd>
          </dl>
        </div>
        <img class="fl imgbox" src="<?php echo getStaticUrl('images/computer.png')?>" alt=""/>
        <div class="right fr">
          <dl>
            <dt><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt=""/></dt>
            <dd>
              <h4>Protección de archivos importantes</h4>
              <p>
                La Caja Fuerte mantiene archivos y carpetas importantes protegidos contra accesos No Autorizados & Recientes Amenazas.
              </p>
            </dd>
          </dl>
          <dl>
            <dt><img src="<?php echo getStaticUrl('images/icons04.png')?>" alt=""/></dt>
            <dd>
              <h4>Triple protección de PC </h4>
              <p>
                Tu PC protegida por el Motor Bitdefender, el Motor IObit Anti-malware y el Motor Antiransomware.
              </p>
            </dd>
          </dl>
        </div>
      </div>
    </div>
  </div>
  <!-- feature end --> 

  <!-- comparison start -->
  <div class="comparison wrapper" id="compare">
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
      <thead>
        <tr>
          <th class="text" colspan="2">La comparación entre FREE y PRO</th>
          <th class="itemb">
            <h3>IObit Malware Fighter <b>FREE</b></h3>
            <p> Tu versión actual</p>
          </th>
          <th class="itema">
            <h3>IObit Malware Fighter <b>PRO</b></h3>
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=es-imf63pcsdpf1999&ref=es_imf63pcpurchasesdpf1809<?php echo $refStr;?>&refs=es_purchase_imf"
               onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1809-es')">
              <i class="all-icons"></i>
              <span>Comprar ahora</span>
            </a>
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_01.png')?>" alt="" /></td>
          <td class="virtue">Función básica anti-malware</td>
          <td class="itemb"><i class="all-icons">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_02.png')?>" alt="" /></td>
          <td class="virtue">
            Protección avanzada contra amenazas con motor antivirus Bitdefender <span class="sign">MEJORADO</span>
          </td>
          <td class="itemb"><i class="all-icons fork">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_03.png')?>" alt="" /></td>
          <td class="virtue">
            Nuevo Motor Anti-ransomware para bloquear Accesos no Autorizados <span class="sign nuevo">NUEVO</span>
          </td>
          <td class="itemb"><i class="all-icons fork">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_12.png')?>" alt="" /></td>
          <td class="virtue">
            Archivos Específicos Protegidos contra Accesos no Autorizados en Caja Fuerte <span class="sign nuevo">NUEVO</span>
          </td>
          <td class="itemb"><i class="all-icons fork">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt="" /></td>
          <td class="virtue">
            Protección completa en tiempo real para la mejor seguridad de la PC <span class="sign">MEJORADO</span>
          </td>
          <td class="itemb"><i class="all-icons fork">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_05.png')?>" alt="" /></td>
          <td class="virtue">
            Protege tu cámara contra el acceso no autorizado <span class="sign nuevo">NUEVO</span>
          </td>
          <td class="itemb"><i class="all-icons fork">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_06.png')?>" alt="" /></td>
          <td class="virtue">Previene infecciones de virus transmitidas por discos USB</td>
          <td class="itemb"><i class="all-icons fork">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_07.png')?>" alt="" /></td>
          <td class="virtue">Detecta un proceso malicioso que se ejecuta en la RAM</td>
          <td class="itemb"><i class="all-icons fork">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt="" /></td>
          <td class="virtue">Detecta amenazas mediante el análisis de acciones maliciosas</td>
          <td class="itemb"><i class="all-icons fork">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_09.png')?>" alt="" /></td>
          <td class="virtue">Limpia automáticamente el rastreo de navegación para evitar el seguimiento malicioso</td>
          <td class="itemb"><i class="all-icons fork">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_10.png')?>" alt="" /></td>
          <td class="virtue">Actualización automática a la última versión</td>
          <td class="itemb"><i class="all-icons fork">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_11.png')?>" alt="" /></td>
          <td class="virtue">Soporte técnico gratuito las 24 horas, 7 días a la semana</td>
          <td class="itemb"><i class="all-icons fork">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- comparison end -->

  <!-- review start -->
  <div class="review">
    <div class="wrapper">
      <div class="content">
        <dl>
          <dt><h3>Comentarios de usuarios IObit</h3></dt>
          <dd>
            Estoy muy satisfecho con su producto IObit Malware Fighter. Anteriormente, este producto se me ocurrió. Tenía muchos problemas con interferencias maliciosas, no podía ver una película entera o un concierto. Debido a su nuevo producto, ahora cada operación es clara, segura y bien protegida. Escanea mi ordenador portátil sin afectar su rendimiento, mientras que también recomendé este producto a dos de mis amigos.
          </dd>
        </dl>
        <dl class="active">
          <dt><h3>Comentarios de Sitios Web</h3></dt>
          <dd>
            El programa utiliza dos motores de AV, el suyo y BitDefender, y parece ser efectivo contra el malware que no puede ser detectado por otras herramientas similares, por lo que es bueno que se pueda ejecutar junto con su software AV estándar. Puede detectar una gran variedad de spyware, ransomware, adware, troyanos, gusanos, keyloggers y bots.
          </dd>
        </dl>
        <dl>
          <dt>
          <h3>Comentarios de usuarios IObit</h3></dt>
          <dd>
            Me gustaría dar las gracias a todo el personal de IObit por trabajar duro para proveernos los mejores programas. Es una gran actualización que ha hecho para sus usuarios. Es mucho más rápido en el escáner y fácil de usar. Las personas que realmente desean un buen programa de Malware y Antivirus que también tenga una buena relación calidad-precio no deben buscar más allá de IObit Malware Fighter. Yo recomendaría que olviden el resto y obtengan lo mejor que es IObit Malware Fighter.
          </dd>
        </dl>
      </div>
      <ul class="users clearfix">
        <li>
          <div class="pic"><img src="<?php echo $pResUrl; ?>images/gelu-batir.png" alt="Gelu Batir">
          </div>
          <p>Gelu Batir</p>
        </li>
        <li class="center active">
          <div class="pic"><img src="<?php echo $pResUrl; ?>images/software-informer.png" alt="Software.Informer"></div>
          <p>Software.Informer</p>
        </li>
        <li class="last">
          <div class="pic"><img src="<?php echo $pResUrl; ?>images/david-cassidy.png" alt="David Cassidy">
          </div>
          <p>David Cassidy</p>
        </li>
      </ul>
      <div class="arrow"><img src="<?php echo getStaticUrl('images/arrow.png')?>"></div>
    </div>
  </div>
  <!-- review end -->

  <!-- footbuy start -->
  <div class="footbuy">
    <div class="wrapper">
      <div class="top">
        <h2>Sólo 04h: 57min: 22s: 906ms* para PC más segura con protección inteligente.</h2>
        <ul id="botCountdown" class="cuntdown">
          <li><span>12</span>h: </li>
          <li><span>12</span>min: </li>
          <li><span>12</span>s: </li>
          <li><span>12</span>ms*</li>
        </ul>
      </div>
      <div class="offer clearfix">
        <img class="fl" src="<?php echo getStaticUrl('images/box-bottom.png')?>" alt=""/>
        <div class="price fl">
          <p>
            <strong>19<small>,99€</small></strong> <del>99,89€</del>
            <span class="sign">Ahorra 79,90€</span>
          </p>
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=es-imf63pcsdpf1999&ref=es_imf63pcpurchasesdpf1809<?php echo $refStr;?>&refs=es_purchase_imf"
             onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1809-es')">
            <i class="all-icons"></i>
            <span>Comprar ahora</span>
          </a>
          <p>Más de <b class="buyNum">7,714,837</b> personas han comprado</p>
        </div>
        <div class="info">
          <ul class="info-box">
            <li>
              <h6><i class="all-icons">★</i> Smart Defrag 6 PRO:</h6>
              <p>Desfragmentador de disco confiable e inteligente con 7,000,000+ usuarios.</p>
            </li>
            <li>
              <h6><i class="all-icons">★</i> Protected Folder:</h6>
              <p>La herramienta de protección de carpeta fácil de usar y con una contraseña.</p>
            </li>
          </ul>
        </div>
      </div>
    </div>
    
  </div>
  <!-- footbuy end -->

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

    <!-- annotation start -->
    <dl class="annotation">
      <dt>Nota:</dt>
      <dd>*.Estos programas promocionales están sujetos a cambios sin previo aviso, dependiendo de nuestra discreción exclusiva en cualquier momento.</dd>
    </dl>
    <!-- annotation end -->

    <!-- footer start -->
    <div class="footer">Copyright 2005 - <?php echo date('Y')?> IObit. Todos los derechos reservados</div>
    <!-- footer end -->
  </div>

<script>    
  var countdown = function(countdown) {
    getCycleCountdown();
    $(countdown).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
    setTimeout("countdown('" + countdown + "')", 1);
  };

  function getCycleCountdown() {
    var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 22:17:00');
    var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
    d = MApp(2.2).packages.zeroize(datetime[0], 2);
    h = MApp(2.2).packages.zeroize(datetime[1], 2);
    i = MApp(2.2).packages.zeroize(datetime[2], 2);
    s = MApp(2.2).packages.zeroize(datetime[3], 2);
    mi = MApp(2.2).packages.zeroize(datetime[4], 3);
  }
  $(function(){
    countdown(("#banCountdown span"));
    countdown(("#botCountdown span"));
    //userreview 
    $(".users li").mouseover(function(event) {
      var num = $(this).index();
      $(".users li").eq(num).addClass('active').siblings().removeClass('active');
      $(".review .content > dl").eq(num).addClass('active').siblings().removeClass('active');
    });
  });
</script>
</body>
</html>