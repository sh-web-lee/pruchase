<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';

}
include $pRootUrl.'include/common.inc.php';

if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'esiuxnovexp_p' . $date;
  $c_name_t='esiuxnovexp_t' . $date;
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=rand(37,50);
    setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
    setcookie($c_name_t,$totalNum, time() + 3600 * 24 *2);
  } else {
    if (intval($_COOKIE[$c_name]) <= 5) {
      $packsNum = 5;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    } else {
      if((rand(1,100)%2)==0){
          $packsNum=$_COOKIE[$c_name];
      }else {
        $packsNum = $_COOKIE[$c_name] - 1;
        setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
      }
    }
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

if(in_array($_GET['st'],array('dbxmasr'))){
  $refStr='-'.$_GET['st'];
}else{
  $refStr='';
}
if(in_array($_GET['pop'],array('xr_iue'))){
  $refStr.='-'.$_GET['pop'];
}
if(!empty($_GET['to'])){
  $refStr.='-'.$_GET['to'];
}
if(preg_match_all('/([0-9]*)\./',$_GET['ver'],$matches)){
  $ver=$matches[1][0].$matches[1][1];
  $refStr.='-'.$ver;
}
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['user'])?'':('-'.$_GET['user']);
$refStr.=empty($_GET['insday'])?'':('-'.$_GET['insday']);
$refStr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-t'.$_GET['type'].'-e'.$_GET['expd'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Hasta 85% de descuento y regalos para IObit Uninstaller PRO de oferta navidad 2019 – IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>
</head>
<body>
<!-- banner -->
<div class="banner">
  <div class="lamp">
    <div class="light hide"></div>
    <div class="light01 hide"></div>
    <div class="light02 hide"></div>
  </div>
  <div class="snow"></div>

  <div class="wrapper">
    <div class="star"></div>
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/es/index.php" target="_blank">IObit</a>
    <!-- title -->
    <h1>Feliz Navidad REBAJA Hasta -85%</h1>
    <div class="box">
      <dl>
        <dt><del>19,99€</del></dt>
        <dd>
          <strong>12,99€</strong>
          <span>1 año / 1 PC</span>
        </dd>
      </dl>
      <img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="IObit Uninstaller PRO" class="img-box">
      <!-- 1pc buybtn -->
      <a href="https://www.iobit.com/buy.php?product=es-iu91pc1299&ref=es_iu91pcexppurchase1911<?php echo $refStr;?>&refs=es_purchase_iu"
         onclick="ga('send', 'event', 'iubuy', 'buy', 'iu91pcexp-es')"
         class="buybtn small">
        Comprar ahora
      </a>
    </div>
    <div class="box gift-box">
      <dl>
        <dt><del>99,93€</del></dt>
        <dd>
          <strong>14,99€</strong>
          <span>1 año / <b>3 PCs</b></span>
        </dd>
      </dl>
      <img src="<?php echo getStaticUrl('images/iu-gift-box.png')?>" alt="IObit Uninstaller PRO" class="img-box">
      <!-- 3pc buybtn -->
      <a href="https://www.iobit.com/buy.php?product=es-iu93pcpfamc1499&ref=es_iu93pcpfamcexp1911<?php echo $refStr;?>&refs=es_purchase_iu"
         onclick="ga('send', 'event', 'iubuy', 'buy', 'iu93pcexp-es')"
         class="buybtn">
        Comprar ahora
      </a>
      <p>Date prisa, cantidades limitadas</p>
    </div>
    <p class="last">Si no estás satisfecho en los primeros 60 días, te devolveremos tu dinero</p>
  </div>
</div>
<!-- end banner -->

<!-- container -->
<div class="container">

  <!-- feature -->
  <div class="feature wrapper clearfix">
    <h2>¡Disfruta de la desinstalación potente para tu PC más rápido y seguro!</h2>
    <img src="<?php echo getStaticUrl('images/boxshot.png')?>" alt="" class="img-box">
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/icons01.png')?>" alt=""></dt>
      <dd>
        <strong>Desinstalación </strong>
        <p>Desinstala completamente Software, bundleware, aplicaciones de Windows y plugins de navegación no deseados.</p>
      </dd>
    </dl>
    <dl class="right">
      <dt><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt=""></dt>
      <dd>
        <strong>Limpieza Automática</strong>
        <p>Escanea y limpia automáticamente los archivos de restos para PC limpio y rápido.</p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt=""></dt>
      <dd>
        <strong>Navegación segura</strong>
        <p>Detecta complementos y extensiones de publicidad maliciosa automáticamente.</p>
      </dd>
    </dl>
    <dl class="right">
      <dt><img src="<?php echo getStaticUrl('images/icons04.png')?>" alt=""></dt>
      <dd>
        <strong>Actualización de software</strong>
        <p>Con sólo un clic, puede actualizar software importante sin la intervención del usuario.</p>
      </dd>
    </dl>
  </div>
  <!-- end feature -->
</div>

<!-- comparison -->
<div class="comparison">
  <h2>DIFERENCIAS ENTRE TU EDICIÓN ACTUAL Y <br> IOBIT UNINSTALLER 9 PRO</h2>
  <div class="wrapper">
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
      <thead>
      <tr>
        <th class="text" colspan="2"></th>
        <td class="space"></td>
        <th class="itema"><span>Versión Gratis</span></th>
        <td class="space"></td>
        <th class="itemb"><span>Versión PRO</span></th>
      </tr>
      </thead>
      <tbody>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_01.png')?>" alt="" /></td>
        <td class="virtue">Desinstala programas a través del icono de escritorio, la ventana abierta o el icono de la bandeja del sistema</td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons">√</i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_02.png')?>" alt="" /></td>
        <td class="virtue">Elimina plugins y extensiones en Edge, Chrome, IE, Firefox, etc</td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons">√</i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_11.png')?>" alt="" /></td>
        <td class="virtue">Revierte automáticamente los cambios del sistema que un programa ha realizado al desinstalarlo </td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons gray">√</i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_03.png')?>" alt="" /></td>
        <td class="virtue">	Remueve programas obstinados </td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons gray">√</i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt="" /></td>
        <td class="virtue">Detecta y desinstala programas de terceros junto con software gratis</td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons gray">√</i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_05.png')?>" alt="" /></td>
        <td class="virtue">	Elimina automáticamente restos que otras utilidades no pudieron quitar</td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons gray">√</i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_06.png')?>" alt="" /></td>
        <td class="virtue">	Identifica y elimina plugins maliciosos </td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons gray">√</i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_07.png')?>" alt="" /></td>
        <td class="virtue">Identifica y elimina plugins basados en anuncios </td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons gray">√</i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt="" /></td>
        <td class="virtue">Un clic para actualizar todos los software importantes </td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons gray">√</i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_09.png')?>" alt="" /></td>
        <td class="virtue">Actualiza a la última versión automáticamente </td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons gray">√</i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_10.png')?>" alt="" /></td>
        <td class="virtue">24/7 Soporte Técnico gratis bajo demanda </td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons gray">√</i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      </tbody>
    </table>
  </div>
</div>
<!-- end comparison -->

<!-- intro start -->
<div class="intro">
  <div class="wrapper clearfix">
    <h2>¡La última versión IObit Uninstaller 9 PRO <br> puede hacer mucho más de lo que crees! </h2>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/intro-icons01.png')?>" alt=""/></dt>
      <dd>
        <h3>Más limpio</h3>
        <p>
          Elimina un 150%* más programas que no pueden ser desinstalados por medios convencionales
        </p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/intro-icons02.png')?>" alt=""/></dt>
      <dd>
        <h3>Más profundo</h3>
        <p>
          Pueden ser detectados y eliminados 15%* más archivos y registros sobrantes después de una desinstalación
        </p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/intro-icons03.png')?>" alt=""/></dt>
      <dd>
        <h3>Más rápido</h3>
        <p>Proceso de desinstalación un 10%* más rápido </p>
      </dd>
    </dl>
    <dl class="last">
      <dt><img src="<?php echo getStaticUrl('images/intro-icons04.png')?>" alt=""/></dt>
      <dd>
        <h3>Más seguro</h3>
        <p>Se pueden detectar y eliminar un 50%* más de complementos maliciosos</p>
      </dd>
    </dl>
  </div>
</div>
<!-- intro end -->

<!-- end container -->

<!-- review -->
<div class="review wrapper clearfix">
  <h2>Los usuarios de todo el mundo comparten <br> sus experiencias </h2>
  <div class="review-content">
    <ul class="clearfix">
      <li class="active">
        <img src="<?php echo $pResUrl;?>images/pc-magazine.png" alt="PC.MAGAZINE">
      </li>
      <li>
        <img src="<?php echo $pResUrl;?>images/joseph-yu.png" alt="Joseph Yu">
      </li>
      <li>
        <img src="<?php echo $pResUrl;?>images/ada-gortler.png" alt="Áda Görtler">
      </li>
      <li>
        <img src="<?php echo $pResUrl;?>images/fernando.png" alt="Fernando Lourenço Gomes">
      </li>
    </ul>
    <span class="line"></span>
    <div class="review-message">
      <!-- PC.MAGAZINE -->
      <p class="active">
        "Si necesita una aplicación para que desinstale fácilmente aplicaciones limpiamente y completamente, IObit Uninstaller es la mejor opción. La utilidad, compatible con Windows 10, elimina fácilmente aplicaciones, incluyendo los archivos quedados frecuentemente cuando un programa es eliminado desde PC y barras de herramientas y plugins molestos de navegador. En resumen, si usa un PC de Windows, debería descargar IObit Uninstaller." <span>– PC.MAGAZINE</span>
      </p>
      <!-- Joseph Yu -->
      <p>
        "IObit Uninstaller PRO es uno de los cinco productos de "mantenimiento" de IObit que he invertido para mi PC como los cocineros invierten en sus cuchillos. IObit Uninstaller es genial para encontrar los restos de bits y bytes que permanecen ocultamente en su PC, tomando espacio en disco y afectando el registro. Si uso el programa de desinstalación básica para desinstalar, lo funcionó. Pero Uninstaller Pro encontró 35 archivos que necesitaron ser limpiados. Todo lo que necesito es hacer clic en "OK". Lo recomendé encarecidamente e incluso conseguí una licencia para 3 PCs. El servicio al cliente es atento y eficiente." <span>- Joseph Yu</span>
      </p>
      <!-- Áda Görtler -->
      <p>
        "IObit Uninstaller es uno de los mejores programas con su uso. Es fácil de utilizar y limpieza profunda. Despúes de versión 5 tiene más funciones de utilizar no solo con Windows 10. La limpieza de los plugins también es útil extremadamente. Búsqueda para programas duplicados no utilizados es perfecta. " <span>- Áda Görtler</span>
      </p>
      <!-- Fernando Lourenço Gomes -->
      <p>
        "IObit Uninstaller es una herramienta excelente para desinstalar programas, barras de herramientas y plugins. Su uso ha sido muy útil para mí, ya que desinstala programas y aplicaciones. Además, limpia su registro asociado, en la mayoría de los casos desconocidos para los usuarios como yo. Tiene una interfaz de usuario agradable e intuitiva sin necesidad de habilidades informáticas principales. Lo recomiendo fuertemente." <span>- Fernando Lourenço Gomes</span>
      </p>
    </div>
  </div>
</div>
<!-- end review -->

<!-- awards start -->
<div class="awards">
  <div class="wrapper">
    <h2>Premios a Nivel Mundial</h2>
    <img src="<?php echo getStaticUrl('images/awards.png') ?>" alt="" />
  </div>
</div>
<!-- awards end -->

<!-- bottom start -->
<div class="bottom">
  <div class="wrapper">
    <!-- service start -->
    <div class="service clearfix">
      <dl class="fl">
        <dt><img src="<?php echo getStaticUrl('images/moneyback.png') ?>" alt=""></dt>
        <dd>
          <h4>
            Pruébelo SIN RIESGO - con nuestra garantía de devolución <br>
            de dinero de 60 días
          </h4>
          <p>
            Estamos seguros de que activando la versión PRO te olvidarás de tus dolores de cabeza a la hora de actualizar tus drivers por un precio asequible
          </p>
        </dd>
      </dl>
      <dl class="fr">
        <dd>
          <h4>Aceptamos</h4>
        </dd>
        <dt><img src="<?php echo getStaticUrl('images/payments.png') ?>" alt=""></dt>
      </dl>
    </div>
    <!-- service end -->

    <!-- footer start -->
    <div class="footer">
      <dl>
        <dt>Nota:</dt>
        <dd>
          *. Estos programas promocionales están sujetos a cambios sin previo aviso, dependiendo de nuestra discreción exclusiva en cualquier momento.
        </dd>
        <dd>
          *. Datos pueden variar basados en diferentes sistemas u ordenadores.
        </dd>
      </dl>
      <p>Copyright © 2005 - <?php echo date('Y') ?> IObit. Todos los derechos reservados</p>
    </div>
    <!-- footer end -->
  </div>
</div>
<!-- bottom end -->

<!-- floatlayer start -->
<div id="floatlayer" class="floatlayer">
  <div class="wrapper clearfix">
    <div class="left fl"><img src="<?php echo getStaticUrl('images/iu-float-box.png')?>" alt=""/></div>
    <div class="center fl">
      <h2>Oferta exclusiva solo para Navidad</h2>
      <div class="numbox">
        <p>Date prisa, cantidades limitadas</p>
      </div>
    </div>
    <div class="price fr">
      <p><strong>14,99€</strong> <del>99,93€</del></p>
      <a class="buybtn small"
         href="https://www.iobit.com/buy.php?product=es-iu93pcpfamc1499&ref=es_iu93pcpfamcexp1911<?php echo $refStr;?>&refs=es_purchase_iu"
         onclick="ga('send', 'event', 'iubuy', 'buy', 'iu93pcexp-es')">
        Renueva y ahorra ahora
      </a>
    </div>
  </div>
</div>
<!-- floatlayer end -->


<script>refStr="<?php echo $refStr;?>";</script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script></body>
</html>