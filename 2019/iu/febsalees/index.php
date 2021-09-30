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

$reduceNum=69041325;
$buyNum = number_format(ceil(microtime_float()*1000/20000) - $reduceNum);

$refStr=empty($_GET['st'])?'':('-'.$_GET['st']);
if(preg_match('/^([0-9]*)\.([0-9]*)\./',$_GET['ver'],$matches)){
  $ver=$matches[1].'-'.$matches[2];
  $refStr.='-'.$ver;
}
if(in_array($_GET['pop'],array('x_iu','xi_iu','xb_iu','xnc_iu'))){
  $refStr.='-'.$_GET['pop'];
}
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['user'])?'':('-'.$_GET['user']);
$refStr.=empty($_GET['insday'])?'':('-'.$_GET['insday']);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Hasta 77% de descuento y regalo gratis en IObit Uninstaller Pro – IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
  <script>
  var queryStr =<?php echo empty($_SERVER['QUERY_STRING'])?'""':('"?'.$_SERVER['QUERY_STRING']).'"';?>;
  var paramTo = MApp(2.2).url.getParameters('to');
    if ((paramTo == 'enable') || (paramTo == 'installmonitor')) {
      window.location.href = "./installmonitor.php" + queryStr;
    }
  </script>
</head>

<body>
<!-- banner start -->
<div class="banner">
  <div class="wrapper clearfix">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/es/index.php" target="_blank">IObit</a>
    <!-- title -->
    <h1>VENTA FLASH DE LA SEMANA </h1>
    <h2>Buena suerte para ti con mejor descuento</h2>
    <div class="box">
      <img src="<?php echo $pResUrl; ?>images/three-box.png" alt="" class="img-box">
      <div class="message">
        <h3><strong>05</strong>H : <strong>05</strong>MIN : <strong>05</strong>S : <strong>005</strong>MS*</h3>
        <h4>IObit Uninstaller 9 PRO (3 PCs) + <span>Regalo Gratis</span></h4>
        <p><strong>15,99€</strong> <del>69,94€</del></p>
        <a href="https://www.iobit.com/buy.php?product=es-iu93pcpf1599&ref=es_iu93pcpfpurchase1902<?php echo $refStr;?>&refs=es_purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase3pcpf1902-es')" class="buybtn">Comprar ahora</a>
      </div>
    </div>
    <div class="box one-box">
      <img src="<?php echo $pResUrl; ?>images/iu-box.png" alt="" class="img-box">
      <div class="message">
        <h4>IObit Uninstaller 9 PRO (1 PC) </h4>
        <p><strong>12,99€</strong> <del>19,99€</del></p>
        <a href="https://www.iobit.com/buy.php?product=es-iu91pc1299&ref=es_iu91pcpurchase1902<?php echo $refStr;?>&refs=es_purchase_iu"  onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase1pc1902-es')" class="buybtn">Comprar ahora</a>
      </div>
    </div>
  </div>
</div>
<!-- banner end -->
<div class="payment">
  <img src="<?php echo $pResUrl; ?>images/payment.png" alt="">
</div>
<!-- feature start -->
<div class="feature">
  <div class="wrapper clearfix">
    <!-- title -->
    <h2>
     ¡Disfruta de la desinstalación potente para tu PC más rápido y seguro!
    </h2>
    <!-- feature details -->
      <dl class="list01">
        <dt class="fl"><img src="<?php echo $pResUrl;?>images/feature-icon04.png" alt=""></dt>
        <dd class="fl">
          <h3>Actualización de software segura <img src="<?php echo $pResUrl;?>images/tag-es.png" alt=""></h3>
          <p>
            Con sólo un clic, puede actualizar <br>software importante sin la intervención <br>del usuario, incluido <b>WinRAR*, que fallo <br>de seguridad descubierto puede pone en <br>peligro su computadora por años.</b>
          </p>
          <span>* Actualizar inmediatamente, una vez que la nueva <br>versión oficial esté lista.</span>
        </dd>
      </dl>
      <dl class="list02">
        <dt class="fl"><img src="<?php echo $pResUrl;?>images/feature-icon02.png" alt=""></dt>
        <dd class="fl">
          <h3>Limpieza Automática </h3>
          <p>
           Escanea y limpia automáticamente <br> los archivos de restos para obtener <br> un PC limpio y rápido.
          </p>
        </dd>
      </dl>
      <dl class="list03">
        <dt class="fl"><img src="<?php echo $pResUrl;?>images/feature-icon01.png" alt=""></dt>
        <dd class="fl">
          <h3>Detección y desinstalación de bundleware </h3>
          <p>
           Detecta y desinstala bundleware tales como adware, <br> plugins de navegador y otro software de terceros que <br> puede ser parte del proceso de instalación.
          </p>
        </dd>
      </dl>

      <dl class="list04">
        <dt class="fl"><img src="<?php echo $pResUrl;?>images/feature-icon03.png" alt=""></dt>
        <dd class="fl">
          <h3>Navegación rápida y segura</h3>
          <p>
           Detecta complementos y extensiones <br> de publicidad maliciosa automáticamente.
          </p>
        </dd>
      </dl>
    <!-- clear float -->
    <div class="clear"></div>
    <!-- a.intro -->
    <a class="intro" href="javascript:void (0);">Más información sobre la edición PRO>></a>
  </div>
</div>
<!-- feature end -->

<!-- betweenbuy start -->
<div class="betweenbuy clearfix">
  <!-- title -->
  <h2>Regalo gratis sólo para la oferta de 3 PCs / 1 año</h2>
  <div class="wrapper">
    <div class="clearfix">
      <!-- PF box -->
      <dl>
        <dt><img src="<?php echo $pResUrl;?>images/pf-box.png" alt=""></dt>
        <dd>
          <h3>Protected Folder </h3>
          <p class="rate"> <strong> 0<b>€</b></strong> <del>39,95€</del></p>
          <p class="des">
           Archivos y datos más seguros con una contraseña
          </p>
          <p class="des">El modo de protección de privacidad mejorado</p>
        </dd>
      </dl>
    </div>
    <!-- buybtn -->
    <a class="buybtn" href="https://www.iobit.com/buy.php?product=es-iu93pcpf1599&ref=es_iu93pcpfpurchase1902<?php echo $refStr;?>&refs=es_purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase3pcpf1902-es')">
       Obtener mi regalo ahora
    </a>
    <!-- notes -->
  </div>
</div>
<!-- betweenbuy end -->

<!-- awards start -->
<div class="awards wrapper">
  <h2>Recomendado y premiado por estos Medios</h2>
  <img src="<?php echo $pResUrl;?>images/awards-icon.png" alt="">
</div>
<!-- awards end -->

<!-- review start -->
<div class="review wrapper">
  <div class="content">
    <dl>
      <dt>
      <h3>Comentario de usuario</h3></dt>
      <dd>
        "IObit Uninstaller es una herramienta excelente para desinstalar programas, barras de herramientas y plugins. Su uso ha sido muy útil para mí, ya que desinstala programas y aplicaciones. Además, limpia su registro asociado, en la mayoría de los casos desconocidos para los usuarios como yo. Tiene una interfaz de usuario agradable e intuitiva sin necesidad de habilidades informáticas principales. Lo recomiendo fuertemente."
      </dd>
    </dl>
    <dl class="active">
      <dt>
      <h3>Reseña de los Medios</h3></dt>
      <dd>
        "Si necesita una aplicación para que desinstale fácilmente aplicaciones limpiamente y completamente, IObit Uninstaller es la mejor opción. La utilidad, compatible con Windows 10, elimina fácilmente aplicaciones, incluyendo los archivos quedados frecuentemente cuando un programa es eliminado desde PC y barras de herramientas y plugins molestos de navegador. En resumen, si usa un PC de Windows, debería descargar IObit Uninstaller."
      </dd>
    </dl>
    <dl>
      <dt>
      <h3>Comentario de usuario</h3></dt>
      <dd>
        "IObit Uninstaller PRO es uno de los cinco productos de "mantenimiento" de IObit que he invertido para mi PC como los cocineros invierten en sus cuchillos. IObit Uninstaller es genial para encontrar los restos de bits y bytes que permanecen ocultamente en su PC, tomando espacio en disco y afectando el registro. Si uso el programa de desinstalación básica para desinstalar, lo funcionó. Pero Uninstaller Pro encontró 35 archivos que necesitaron ser limpiados. Todo lo que necesito es hacer clic en "OK". Lo recomendé encarecidamente e incluso conseguí una licencia para 3 PCs. El servicio al cliente es atento y eficiente."
      </dd>
    </dl>
    <dl>
      <dt>
      <h3>Comentario de usuario</h3></dt>
      <dd>
        "IObit Uninstaller es uno de los mejores programas con su uso. Es fácil de utilizar y limpieza profunda. Despúes de versión 5 tiene más funciones de utilizar no solo con Windows 10. La limpieza de los plugins también es útil extremadamente. Búsqueda para programas duplicados no utilizados es perfecta. "        </dd>
    </dl>
  </div>
  <ul class="users clearfix">
    <li>
      <div class="pic"><img src="<?php echo getStaticUrl('images/fernando.png')?>" alt="Fernando Lourenço Gomes">
      </div>
      <p>Fernando Lourenço Gomes</p>
    </li>
    <li class="active">
      <div class="pic"><img src="<?php echo getStaticUrl('images/pc-magazine.png')?>" alt="PC.MAGAZINE"></div>
      <p>PC.MAGAZINE</p>
    </li>
    <li>
      <div class="pic"><img src="<?php echo getStaticUrl('images/joseph-yu.png')?>" alt="Joseph Yu">
      </div>
      <p>Joseph Yu</p>
    </li>
    <li>
      <div class="pic"><img src="<?php echo getStaticUrl('images/ada-gortler.png')?>" alt="Áda Görtler">
      </div>
      <p>Áda Görtler</p>
    </li>
  </ul>
</div>
<!-- review end -->


  <!-- comparison start -->
  <div class="comparison wrapper" id="compare">
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
      <thead>
        <tr>
          <th class="text" colspan="2">¿Cuales ventajas tiene la PRO edición?</th>
          <th class="space"></th>
          <th class="itemb"><div class="free">IObit Uninstaller 9 FREE</div></th>
          <th class="space"></th>
          <th class="itema"><div class="pro">IObit Uninstaller 9 PRO</div></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_01.png')?>" alt="" /></td>
          <td class="virtue">Desinstala programas a través del icono de escritorio, la ventana abierta o el icono de la bandeja del sistema</td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_02.png')?>" alt="" /></td>
          <td class="virtue">Elimina plugins y extensiones en Edge, Chrome, IE, Firefox, etc.</td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_11.png')?>" alt="" /></td>
          <td class="virtue">Revierte automáticamente los cambios del sistema que un programa ha realizado al desinstalarlo <span class="nuo">Nuevo</span></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons circle">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_03.png')?>" alt="" /></td>
          <td class="virtue">Remueve programas obstinados <span>Mejorado</span> <em>3x</em></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons circle">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt="" /></td>
          <td class="virtue">Detecta y desinstala programas de terceros junto con software gratis</td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons circle">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_05.png')?>" alt="" /></td>
          <td class="virtue">Elimina automáticamente restos que otras utilidades no pudieron quitar  <span>Mejorado</span></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons circle">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_06.png')?>" alt="" /></td>
          <td class="virtue">Identifica y elimina plugins maliciosos <span>Mejorado</span> <em>2x</em> </td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons circle">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_07.png')?>" alt="" /></td>
          <td class="virtue">Identifica y elimina plugins basados en anuncios <span>Mejorado</span> <em>2x</em> </td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons circle">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt="" /></td>
          <td class="virtue">Un clic para actualizar todos los software importantes  <span>Mejorado</span> <em>5x</em></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons circle">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_09.png')?>" alt="" /></td>
          <td class="virtue">Actualiza a la última versión automáticamente</td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons circle">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_10.png')?>" alt="" /></td>
          <td class="virtue">24/7 Soporte Técnico gratis bajo demanda</td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons circle">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- comparison end -->
<!-- bottombuy start -->
<div class="bottombuy">
  <div class="wrapper">
    <h2>¡Aprovecha tu oportunidad para ahorrar hasta 53,95€!</h2>
    <div class="left-img"></div>
    <ul>
      <li class="active"><span>1 año / 3 PCs + <b>regalo GRATIS</b> </span> <strong>-77%</strong></li>
      <li class="one-box"><span>1 año / 1 PC  </span> <strong>-35%</strong></li>
    </ul>
    <!-- right-message -->
    <div class="price">
      <p><strong><b>15</b>,99€</strong> <del>69,94€</del> </p>
      <a class="buybtn" href="https://www.iobit.com/buy.php?product=es-iu93pcpf1599&ref=es_iu93pcpfpurchase1902<?php echo $refStr;?>&refs=es_purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase3pcpf1902-es')">
       Comprar ahora
      </a>
    </div>      
  </div>
</div>
<!-- bottombuy end -->
<!-- footer start -->
<div class="footer">
  <!-- payment -->
  <div class="visa wrapper clearfix">
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
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/servicio.png" alt=""></dt>
      <dd><strong>Servicio al cliente</strong></dd>
      <dd>24/7 Soporte Técnico gratis</dd>
    </dl>
  </div>
  <div class="container">
  <dl class="annotation wrapper">
    <dt>Nota:</dt>
    <dd>1*.Estos programas promocionales están sujetos a cambios sin previo aviso, dependiendo de nuestra discreción exclusiva en cualquier momento.</dd>
    <dd>2*.Datos pueden variar basados en diferentes sistemas u ordenadores.</dd>
  </dl>
  <p class="copyright">Copyright  2005 - <?php echo date('Y')?> IObit. Todos los derechos reservados</p>
  </div>
</div>
<!-- footer end -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>