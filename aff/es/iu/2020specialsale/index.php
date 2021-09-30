<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
    $pResUrl = './';
    $pRootUrl = '../../../../';
}
include $pRootUrl . 'include/common.inc.php';
if(!empty($_GET['AFF'])) $_GET['aff']=$_GET['AFF'];
function microtime_float()
{
    list($usec, $sec) = explode(' ', microtime());
    return ((float)$usec + (float)$sec);
}

if (empty($_GET['ref'])) $_GET['ref'] = 'esaff_iu10_2020specialsale';
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Oferta especial con regalo gratis para IObit Uninstaller Pro - IObit</title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css') ?>">
  <?php echo $gJavascript ['public']; ?>
  <?php echo $gJavascript ['head'] ?>
</head>
<body>
<!-- banner start -->
<div class="banner">
  <div class="wrapper">
    <a class="logo" href="https://www.iobit.com/es/index.php" target="_blank">IObit</a>
    <h1>OFERTA ESPECIAL</h1>
    <h3>¡Celebramos juntos el 15 aniversario de IObit y aprovechamos las mejores ofertas que se hayan visto antes!</h3>
    <div class="bundle-container clearfix">
      <div class="bundle left">
        <img src="<?php echo getStaticUrl('images/bundle-0.png')?>" alt=""/>
        <p class="price">
          <b class="discount">15</b>
          <span>
            <i>€99</i>
            <del class="original">29,99€</del>
          </span>
        </p>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=esaff-iu103pc1599&ref=<?php echo $_GET['ref']?>&aff=<?php echo $_GET['aff']?>"
           onclick="ga('send', 'event', 'iubuy', 'buy', 'esaffiu102020specialsale')">
          Comprar ahora
        </a>
      </div>

      <div class="bundle right">
        <div class="countdown-container"><i></i><span>12</span>H : <span>24</span>MIN : <span>52</span>S : <span>235</span>MS*
        </div>
        <img src="<?php echo getStaticUrl('images/bundle-1.png')?>" alt=""/>
        <p class="price">
          <b class="discount">15</b>
          <span>
            <i>€99</i>
            <del class="original">69,94€</del>
          </span>
        </p>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=esaff-iu103pcpf1599&ref=<?php echo $_GET['ref']?>&aff=<?php echo $_GET['aff']?>"
           onclick="ga('send', 'event', 'iubuy', 'buy', 'esaffiu102020specialsale')">
          Comprar ahora
        </a>
        <p class="note"><span>7,390,557</span> personas han comprado</p>
      </div>
    </div>
  </div>
</div>
<!-- banner end -->

<!--payment start-->
<div class="payment"></div>
<!--payment end-->

<!-- benfits start -->
<div class="feature clearfix">
  <div class="wrapper">
    <h2>¡Disfruta de la desinstalación potente para tu PC más rápido y seguro!</h2>
    <div class="showcase">
      <div class="inner">
        <ul class="screenshot">
          <li>
            <img src="<?php echo getStaticUrl('images/screenshot-00.png')?>" alt=""/>
          </li>
          <li class="active">
            <img src="<?php echo getStaticUrl('images/screenshot-01.png')?>" alt=""/>
          </li>
          <li>
            <img src="<?php echo getStaticUrl('images/screenshot-02.png')?>" alt=""/>
          </li>
          <li>
            <img src="<?php echo getStaticUrl('images/screenshot-03.png')?>" alt=""/>
          </li>
          <li>
            <img src="<?php echo getStaticUrl('images/screenshot-04.png')?>" alt=""/>
          </li>
        </ul>
      </div>
      <ul class="zoom">
        <li class="fun1 active"></li>
        <li class="fun2"></li>
        <li class="fun3"></li>
        <li class="fun4"></li>
      </ul>
    </div>
    <div class="detail-list">
      <dl class="two active">
        <dt><i class="benfits03"></i></dt>
        <dd>
          <h3>Desinstalación completa</h3>
          <p>Elimina programas obstinados y paquetes de programas para liberar espacio del disco y elimina plugins maliciosos y basados en anuncios para una navegación segura.</p>
        </dd>
      </dl>
      <dl class="two">
        <dt><i class="benfits02"></i></dt>
        <dd>
          <h3>Navegador rápido y seguro</h3>
          <p>Identifica complementos maliciosos y basados en anuncios y elimina las notificaciones del navegador para garantizar una experiencia de navegación segura y limpia.</p>
        </dd>
      </dl>
      <dl class="two">
        <dt><i class="benfits04"></i></dt>
        <dd>
          <h3>Detección y desinstalación de bundleware</h3>
          <p>Detecta y desinstala bundleware tales como adware, plugins de navegador y otro software de terceros que puede ser parte del proceso de instalación.</p>
        </dd>
      </dl>
      <dl>
        <dt><i class="benfits01"></i></dt>
        <dd>
          <h3>Actualización de software segura</h3>
          <p>Con sólo un clic, puede actualizar software importante sin la intervención del usuario.</p>
        </dd>
      </dl>
      <a class="textlink" href="Javascript:void(0);">Más información sobre la edición PRO >></a>
    </div>
  </div>
</div>
<!-- benfits end -->

<!-- gifubox start -->
<div class="giftbox">
  <h2>¡También recibirás el programa Protected Folder totalmente gratis!</h2>
  <div class="wrapper">
    <div class="clearfix">
      <dl class="pf">
        <dt><img src="<?php echo getStaticUrl('images/pf-box.png')?>" alt=""/></dt>
        <dd>
          <h3>Protected Folder</h3>
          <p>Archivos y datos más seguros con una contraseña</p>
          <p>El modo de protección de privacidad mejorado</p>
        </dd>
      </dl>
      <dl class="else">
        <dd>
          <h5><big>0€</big> <del>39,95€</del></h5>
          <a href="https://www.iobit.com/buy.php?product=esaff-iu103pcpf1599&ref=<?php echo $_GET['ref']?>&aff=<?php echo $_GET['aff']?>"
             onclick="ga('send', 'event', 'iubuy', 'buy', 'esaffiu102020specialsale')">
            Obtener mi regalo ahora
          </a>
          <div class="countdown-container countdown-lab"><i></i><span>12</span>H : <span>24</span>MIN : <span>52</span>S : <span>235</span>MS*</div>
        </dd>
      </dl>
    </div>
  </div>
</div>
<!-- gifubox end -->

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
      <th class="itema"><div class="pro">IObit Uninstaller 10 PRO</div></th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_01.png')?>" alt="" /></td>
      <td class="virtue">Desinstala programas a través del icono de escritorio, la ventana abierta o el icono de la bandeja del sistema</td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_02.png')?>" alt="" /></td>
      <td class="virtue">Elimina plugins y extensiones en Edge, Chrome, IE, Firefox, etc.</td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_13.png')?>" alt="" /></td>
      <td class="virtue">Soporta la eliminación de notificaciones del navegador web <span class="nuo">Nuevo</span></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_12.png')?>" alt="" /></td>
      <td class="virtue"> El algoritmo avanzado detecta con precisión software menos conocido y bundleware <span class="nuo">Nuevo</span></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_11.png')?>" alt="" /></td>
      <td class="virtue">Revierte automáticamente los cambios del sistema que un programa ha realizado al desinstalarlo <span class="nuo">Nuevo</span></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_03.png')?>" alt="" /></td>
      <td class="virtue">Remueve programas obstinados <span>Mejorado</span></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt="" /></td>
      <td class="virtue">Detecta y desinstala programas de terceros junto con software gratis</td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_05.png')?>" alt="" /></td>
      <td class="virtue">Elimina automáticamente restos que otras utilidades no pudieron quitar  <span>Mejorado</span></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_06.png')?>" alt="" /></td>
      <td class="virtue">Identifica y elimina plugins maliciosos <span>Mejorado</span> </td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_07.png')?>" alt="" /></td>
      <td class="virtue">Identifica y elimina plugins basados en anuncios <span>Mejorado</span></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt="" /></td>
      <td class="virtue">Un clic para actualizar todos los software importantes  <span>Mejorado</span></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_09.png')?>" alt="" /></td>
      <td class="virtue">Actualiza a la última versión automáticamente</td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_10.png')?>" alt="" /></td>
      <td class="virtue">24/7 Soporte Técnico gratis bajo demanda</td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    </tbody>
  </table>
</div>
<!-- comparison end -->

<!-- footbuy start -->
<div class="footbuy">
  <div class="wrapper clearfix">
    <div class="imgbox fl">
      <img class="small on" src="<?php echo getStaticUrl('images/iu-one-box.png') ?>" alt="" />
      <img class="small" src="<?php echo getStaticUrl('images/iu-three-box.png') ?>" alt="" />
    </div>
    <ul class="fl">
      <li class="on" data-num="1"><span>1 año / 3 PCs<em> +  regalo GRATIS</em></span></li>
      <li data-num="0"><span>1 año / 3 PCs </span></li>
    </ul>
    <div class="price fl">
      <p>
        <b class="discount">15</b>
        <span>
            <i>€99</i>
            <del class="original">69,94€</del>
          </span>
      </p>
      <a href="https://www.iobit.com/buy.php?product=esaff-iu103pcpf1599&ref=<?php echo $_GET['ref']?>&aff=<?php echo $_GET['aff']?>"
         onclick="ga('send', 'event', 'iubuy', 'buy', 'esaffiu102020specialsale')">
        Obtener mi regalo ahora
      </a>
    </div>
  </div>
</div>
<!-- footbuy end -->

<!-- service start -->
<div class="service wrapper clearfix">
  <dl class="astisfait fl">
    <dt><img src="<?php echo getStaticUrl('images/moneyback.png') ?>" alt=""></dt>
    <dd>
      <h3>Garantía de reembolso</h3>
      <p>Si no está satisfecho en los primeros 60 días, le devolveremos su dinero</p>
    </dd>
  </dl>
  <dl class="paiement fl">
    <dt><img src="<?php echo getStaticUrl('images/godaddy-secure.png') ?>" alt=""></dt>
    <dd>
      <h3>Pago seguro</h3>
      <P>100% pago seguro para su pedido</P>
    </dd>
  </dl>
  <dl class="service-client fr">
    <dt><img src="<?php echo getStaticUrl('images/service-client.png') ?>" alt=""></dt>
    <dd>
      <h3>Servicio al cliente</h3>
      <p>24/7 Soporte Técnico gratis</p>
    </dd>
  </dl>
</div>
<!-- service end -->

<!-- footer start -->
<div class="footer wrapper">
  <div class="notes">
    <p>Nota:</p>
    <p>1*.Estos programas promocionales están sujetos a cambios sin previo aviso, dependiendo de nuestra discreción exclusiva en cualquier momento.</p>
    <p>2*.Datos pueden variar basados en diferentes sistemas u ordenadores.</p>
  </div>
  <p class="copyright">Copyright © 2005 - <?php echo date('Y') ?> IObit. Todos los derechos reservados</p>
</div>
<!-- footer end -->

<script src="<?php echo getStaticUrl('script/script.js') ?>"></script>
</body>
</html>