<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';
  if(!empty($_GET['AFF'])) $_GET['aff']=$_GET['AFF'];
if (empty($_GET['ref'])) {
  $refStr = 'esaff_asc12_2020general';
  //$refDownloadStr='asc12g17a';
  $refDownloadStr='esasc12g';
}else{
  $refStr=$refDownloadStr=$_GET['ref'];
}
$affStr=empty($_GET['AFF'])?$_GET['aff']:$_GET['AFF'];
if($_GET['ref']=='cb1712en'){
  $buyHref="https://www.iobit.com/buy.php?product=esaff-asc123pc1349a&ref=esaff_asc12_2020general".$refStr."&AFFILIATE=".$affStr;
}elseif($_GET['ref']=='fs1702en'){
  $buyHref="http://www.macboost.net/xhtml/iobit.html?product=advanced-systemcare-10-pro-1-year-subscription-3-pcs&coupon=ASC50OFF";
}elseif($_GET['ref']=='rw1702en'){
  $buyHref="https://safecart.com/iobit/ascpro/1year3pcs?coupon_code=66PQ";
}elseif($_GET['ref']=='fs269814'){
  $buyHref="http://macbooster.7eer.net/c/269814/378283/4385";
}elseif($_GET['ref']=='fs391813'){
  $buyHref="http://macbooster.7eer.net/c/391813/378283/4385";
}else{
  $buyHref="https://www.iobit.com/buy.php?product=esaff-asc123pc1349a&ref=".$refStr."&aff=".$affStr;
}

if(preg_match('/fspi([0-9]*)/',$_GET['ref'],$matches)){
  $buyHref='https://iobit.onfastspring.com/advanced-systemcare-pro-1-year-subscription-3-pcs-1499';
  $pregNum=$matches[1];
  if(!empty($pregNum)){
    $buyHref='http://macbooster.7eer.net/c/'.$pregNum.'/556566/4385';
  }
}

if(!empty($_GET['ref'])){

    if(preg_match_all('/ir([0-9]*)/', $_GET['ref'], $arr)) {

        $buyHref = "https://iobit.onfastspring.com/advanced-systemcare-pro-1-year-subscription-3-pcs-1499";

        if ($arr[1][0] != null) {

            $buyHref = "http://macbooster.7eer.net/c/" . $arr[1][0] . "/556566/4385";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Disfruta de un PC rápido y sin problemas con ASC PRO</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

  <!-- banner start -->
  <div class="header">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com/es/index.php" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit">
      </a>
      <p>El Número 1 del Mundo en Utilidades de Sistema para PC</p>
      <h1>Advanced SystemCare PRO</h1>
      <h4>Tu PC más Limpio, Rápido y Estable con 1 Solo Clic</h4>
      <div class="btnbox">
        <a class="btn down" href="https://ld.iobit.com/freedownload/affascfreedownload/download.php?product=asc&ref=<?php echo $refDownloadStr;?>&aff=<?php echo $affStr;?>" onclick="ga('send', 'event', 'ascdl', 'download', 'esasc12g')">
          <p>Descárgalo para un escaneo gratis</p>
          Compatible con Win10/8/7/Vista/XP
        </a>
        <a class="btn buy" href="<?php echo $buyHref;?>" onclick="ga('send', 'event', 'ascbuy', 'buy', 'esaffasc122020general');">
          Cómpralo Ahora y Ahorra un <strong>50%</strong> 
        </a>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- container start -->
  <div class="container">

    <!-- mediareview start -->
    <dl class="mediareview wrapper clearfix">
      <dt>
        <img src="<?php echo $pResUrl; ?>images/media_icon.png" alt="">
        <p>La elección de más de 250 millones de usuarios</p>
      </dt>
      <dd>
        <h3>Advanced SystemCare tiene como propósito solucionar cualquier cosa que compromete y ralentiza tu ordenador.</h3>
        <p>
          “No hay nada peor que un ordenador que se ralentiza tanto que te impide trabajar o jugar a juegos de PC. Advanced SystemCare tiene como propósito solucionar cualquier cosa que compromete y ralentiza tu ordenador, no solo mediante la limpia de archivos basura y entradas de registro inválidas, sino también mejorándolo para optimizar tu experiencia de PC”. -Cnet
        </p>
      </dd>
    </dl>
    <!-- mediareview end -->

    <!-- intro start -->
    <div class="intro">
      <div class="wrapper clearfix">
        <h2>La herramienta de Utilidades de PC que Todo Usuario debe Tener</h2>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/intro1.png')?>" alt=""></dt>
          <dd><h3>Ordenador Más Rápido</h3></dd>
          <dd>Identifica y elimina los problemas de rendimiento que ralentizan tu PC</dd>
        </dl>
        <dl class="more">
          <dt><img src="<?php echo getStaticUrl('images/intro2.png')?>" alt=""></dt>
          <dd><h3>Sistema Más Estable</h3></dd>
          <dd>Corrige los errores del sistema para restaurar la estabilidad y reducir los “crashes”</dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/intro3.png')?>" alt=""></dt>
          <dd><h3>Navegación Segura</h3></dd>
          <dd>Limpia automáticamente los datos de navegación y disfraza tu huella digital para evitar el rastreo malicioso</dd>
        </dl>
      </div>
    </div>
    <!-- intro end -->

    <!-- centbuy start -->
    <div class="centbuy">
      <div class="wrapper">
        <h2>Tu PC Limpio, Rápido y Seguro con un Solo Clic</h2>
        <div class="btnbox">
          <a class="btn buy" href="<?php echo $buyHref;?>" onclick="ga('send', 'event', 'ascbuy', 'buy', 'esaffasc122020general');">
            Cómpralo Ahora y Ahorra un <strong>50%</strong> 
          </a>
        </div>
      </div>
    </div>
    <!-- centbuy end -->

    <!-- describe start -->
    <div class="wrapper">
      <div class="describe clearfix">
        <div class="imgbox fr"><img src="<?php echo getStaticUrl('images/describe1.png')?>" alt=""></div>
        <div class="fl txtbox">
          <h2>Limpieza Profunda y Optimización de tu PC</h2>
          <p>
            Advanced SystemCare PRO limpia profundamente los archivos basura, entradas de registro inválidas, programas no deseados, barras de herramientas publicitarias y<br> plugins, y además optimiza el inicio, la RAM, el internet, el sistema y los discos<br> duros para un ordenador limpio y rápido.
          </p>
        </div>
      </div>
      <div class="describe clearfix">
        <div class="imgbox fl"><img src="<?php echo getStaticUrl('images/describe2.png')?>" alt=""></div>
        <div class="txtbox fr">
          <h2>Corrige Cualquier Problema de PC</h2>
          <p>
            Advanced SystemCare PRO identifica y corrige todos los tipos de problemas de<br> Windows incluyendo errores en el registro, discos, de seguridad de Windows, controladores obsoletos, problemas del sistema, etc., para restaurar la<br> estabilidad y prevenir los “crashes” del PC.
          </p>
        </div>
      </div>
      <div class="describe clearfix">
        <div class="imgbox fr"><img src="<?php echo getStaticUrl('images/describe3.png')?>" alt=""></div>
        <div class="txtbox fl">
          <h2>Monitoriza los Recursos del Sistema en Tiempo Real</h2>
          <p>
            Advanced SystemCare PRO te ayuda a administrar tu RAM, el uso del Disco y de la CPU con un solo clic y detecta y deshabilita automáticamente procesos inactivos y programas para liberar memoria y mejorar el rendimiento del PC.
          </p>
        </div>
      </div>
      <div class="describe protege clearfix">
        <div class="imgbox fl"><img src="<?php echo getStaticUrl('images/describe4.png')?>" alt=""></div>
        <div class="txtbox fr">
          <h2>Protege Proactivamente tu Privacidad Online</h2>
          <p>
            Con el Nuevo Escudo de Privacidad y la Protección de Huella Digital integrada, Advanced SystemCare PRO puede detectar y bloquear accesos secretos a tus datos personales y disfrazar la huella digital para limpiar el rastro online, consiguiendo así una mejor protección de tu ordenador y de tu privacidad online. Además, previene modificaciones maliciosas a tu página de inicio, motor de búsqueda y a las opciones DNS, eliminando amenazas online en tiempo real.
          </p>
        </div>
      </div>
      <div class="describe clearfix">
        <div class="imgbox fr"><img src="<?php echo getStaticUrl('images/describe5.png')?>" alt=""></div>
        <div class="txtbox fl">
          <h2>Elimina Anuncios y Bloquea Sitios Webs Maliciosos</h2>
          <p>
            Advanced SystemCare PRO elimina anuncios molestos en Internet Explorer, Chrome y Firefox, además de bloquear sitios webs no seguros mientras exploras la web para asegurar que tienes una mejor experiencia de navegación.
          </p>
        </div>
      </div>
      <div class="describe last clearfix">
        <div class="imgbox fl"><img src="<?php echo getStaticUrl('images/describe6.png')?>" alt=""></div>
        <div class="txtbox fr">
          <h2>Captura Intrusos Automáticamente <span>(Requiere Cámara)</span></h2>
          <p>
            Advanced SystemCare PRO ayuda a capturar intrusos accediendo a tu PC sin permiso o intentando robar tu información personal y archivos importantes. Después de haber grabado tu propia cara, capturará la imagen de intrusos que intenten acceder a tu PC automáticamente.
          </p>
        </div>
      </div>
    </div>
    <!-- describe end -->

    <!-- tool start -->
    <div class="tool">
      <div class="wrapper clearfix">
        <h2>Más herramientas increíbles</h2>
        <dl>
          <dt><img src="<?php echo $pResUrl; ?>images/tool_icon1.png" alt=""></dt>
          <dd><h4>Administrador de Inicio</h4></dd>
          <dd>Administra procesos de inicio para acelerar el arranque<br> del sistema.</dd>
        </dl>
        <dl class="right">
          <dt><img src="<?php echo $pResUrl; ?>images/tool_icon2.png" alt=""></dt>
          <dd><h4>RAM Inteligente</h4></dd>
          <dd>Libera memoria para mejorar el rendimiento del PC.</dd>
        </dl>
        <dl>
          <dt><img src="<?php echo $pResUrl; ?>images/tool_icon3.png" alt=""></dt>
          <dd><h4>Acelerador de Internet</h4></dd>
          <dd>Optimiza los navegadores para acelerar la conexión<br> a Internet.</dd>
        </dl>
        <dl class="right">
          <dt><img src="<?php echo $pResUrl; ?>images/tool_icon4.png" alt=""></dt>
          <dd><h4>Win Fix</h4></dd>
          <dd>Identifica y corrige problemas en Windows.</dd>
        </dl>
        <dl>
          <dt><img src="<?php echo $pResUrl; ?>images/tool_icon5.png" alt=""></dt>
          <dd><h4>Buscador de Archivos Grandes</h4></dd>
          <dd>Busca y elimina archivos de gran tamaño para obtener más espacio.</dd>
        </dl>
        <dl class="right">
          <dt><img src="<?php echo $pResUrl; ?>images/tool_icon6.png" alt=""></dt>
          <dd><h4>Trituradora de Archivos</h4></dd>
          <dd>Elimina archivos no deseados permanentemente.</dd>
        </dl>
        <dl>
          <dt><img src="<?php echo $pResUrl; ?>images/tool_icon7.png" alt=""></dt>
          <dd><h4>Limpiador del Registro</h4></dd>
          <dd>Limpia y repara de forma segura problemas en el registro.</dd>
        </dl>
        <dl class="right">
          <dt><img src="<?php echo $pResUrl; ?>images/tool_icon8.png" alt=""></dt>
          <dd><h4>Limpiador de Disco</h4></dd>
          <dd>Limpia todo tipo de archivos basura para conseguir más<br> espacio en el disco.</dd>
        </dl>
      </div>
    </div>
    <!-- tool end -->
  
    <!-- usereview start -->
    <div id="user" class="usereview wrapper clearfix">
      <h2>Comentarios de los Usuarios</h2>
      <dl class="active">
        <dt><h4>“No solo es un gran producto, la atención al cliente es igual de Buena”</h4></dt>
        <dd>
          “Advanced SystemCare lleva trabajando y limpiando mi ordenador años de forma gratuita y nunca me ha decepcionado. Contacte con Advanced SystemCare recientemente y me han respondido en 24 horas resolviendo mis dudas. Para mí, una buena atención al cliente ha sido la clave para poder seguir con el producto. ASC es muy bueno tanto como producto como por su atención”.
        </dd>
      </dl>
      <dl>
        <dt><h4>“Limpió el Spyware y el Malware que mi antivirus no pudo limpiar”</h4></dt>
        <dd>
          “Anteriormente, solíamos usar un montón de programas para que nuestros ordenadores funcionaran de forma fluida y sin ataques de hackers. Solía llevarnos horas cada semana para mantener la seguridad y el rendimiento pero gracias a Advanced SystemCare Pro, todo está en el mismo sitio y lleva solo un par de minutos cada 2 días hacer el mismo trabajo con mucha más eficacia”.
        </dd>
      </dl>
      <dl>
        <dt><h4>“Mi elección sigue siendo sin duda Advanced SystemCare PRO”</h4></dt>
        <dd>
          “Como técnico de reparación, descargar y escanear con ASC PRO resuelve la mayoría de problemas de PC. Cuando acabo escaneando el PC de un cliente, le suelo recomendar comprar la versión Pro. ¿Quién necesita un técnico cuando puedes hacer que tu PC funcione 24-7 con Advanced SystemCare Pro? Es el mejor producto que un usuario puede comprar. Gracias ASC por hacer mi trabajo más fácil”.
        </dd>
      </dl>
      <dl>
        <dt><h4>“Mi sistema nunca ha funcionado mejor”.</h4></dt>
        <dd>
          “En mi opinion, el programa de IObit ASC Pro es la mejor aplicación de mantenimiento disponible para los usuarios de Windows, ofreciendo un gran valor y funcionalidad. IObit, proporciona además, atención técnica de sus expertos, dándole un valor adicional a sus clientes sobre sus productos y servicios”.
        </dd>
      </dl>
      <ul class="username">
        <li class="current">
          <img src="<?php echo $pResUrl; ?>images/bruce-ramsay.png" alt="Bruce Ramsay">
          <p>Bruce Ramsay</p>
        </li>
        <li>
          <img src="<?php echo $pResUrl; ?>images/bob-bassett.png" alt="Bob Bassett">
          <p>Bob Bassett</p>
        </li>
        <li>
          <img src="<?php echo $pResUrl; ?>images/charles-r-widick.png" alt="Charles R. Widick">
          <p>Charles R. Widick</p>
        </li>
        <li>
          <img src="<?php echo $pResUrl; ?>images/gordon-griswold.png" alt="Gordon Griswold">
          <p>Gordon Griswold</p>
        </li>
      </ul>
    </div>
    <!-- usereview end -->

    <!-- footbuy start -->
    <div class="footbuy">
      <div class="wrapper clearfix">
        <h2>Advanced SystemCare PRO</h2>
        <p>Contamos con la confianza de más de 250 millones de usuarios en todo el mundo</p>
        <div class="btnbox">
          <a class="btn down" href="https://ld.iobit.com/freedownload/affascfreedownload/download.php?product=asc&ref=<?php echo $refDownloadStr;?>&aff=<?php echo $affStr;?>" onclick="ga('send', 'event', 'ascdl', 'download', 'esasc12g')">
            <p>Descárgalo para un escaneo gratis</p>
            Compatible con Win10/8/7/Vista/XP
          </a>
          <a class="btn buy" href="<?php echo $buyHref;?>" onclick="ga('send', 'event', 'ascbuy', 'buy', 'esaffasc122020general');">
            Cómpralo Ahora y Ahorra un <strong>50%</strong> 
          </a>
        </div>
      </div>
    </div>
    <!-- footbuy end -->

    <!-- service start -->
    <div class="service">
      <div class="wrapper clearfix">
        <dl>
          <dt>100% Limpio</dt>
          <dd><img src="<?php echo $pResUrl; ?>images/godaddy.png" alt=""></dd>
        </dl>
        <dl class="back">
          <dt>Back 60 días de Reembolso</dt>
          <dd><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dd>
        </dl>
        <dl class="last">
          <dt>Atención al Cliente 24/7</dt>
          <dd>
            <img src="<?php echo $pResUrl; ?>images/call.png" alt="">
            <span>Atención técnica gratuita 24/7</span>
          </dd>
        </dl>
      </div>
    </div>
    <!-- service end -->

  </div>
  <!-- container end -->

  <!-- footer start -->
  <div class="footer">Copyright © 2005 - <?php echo date('Y')?> IObit. Todos los derechos reservados</div>
  <!-- footer end -->

  <!-- backtop start -->
  <div id="backtop" class="backtop" onclick="goTarget($('.header'))"></div>
  <!-- backtop end -->

<script>    
  //userreview 
  $(".username li").mouseover(function(event) {
    var num = $(this).index();
    $(".username li").eq(num).addClass('current').siblings().removeClass('current');
    $("#user dl").eq(num).addClass('active').siblings().removeClass('active');
  });

  //floatlayer
  $(window).on('scroll', function () {
    var scrollHeight = $(".header:last").offset().top;
    if ($(window).scrollTop() > scrollHeight) {
      $('#backtop').addClass('on');
    }else {
      $('#backtop').removeClass('on');
    }
  });

  function goTarget(target,yoffset) {
    if(!yoffset) yoffset = 0;
    var Theigth = target.offset().top - yoffset;
    $("html, body").animate({scrollTop: Theigth}, 'slow');
  }
</script>
</body>
</html>