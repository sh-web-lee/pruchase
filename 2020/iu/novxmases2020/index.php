<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

function microtime_float()
{
  list($usec, $sec) = explode(' ', microtime());
  return ((float)$usec + (float)$sec);
}

if(preg_match('/^([0-9]*)\.([0-9]*)\./',$_GET['ver'],$matches)){
    $ver=$matches[1].'-'.$matches[2];
    $refStr.='-'.$ver;
}
$refStr.=empty($_GET['st'])?'':('-'.$_GET['st']);
$refStr.=empty($_GET['pop'])?'':('-'.$_GET['pop']);
$refStr.=empty($_GET['r'])?'':('-'.$_GET['r']);
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['user'])?'':('-'.$_GET['user']);
$refStr.=empty($_GET['insday'])?'':('-'.$_GET['insday']);
$refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Oferta Especial para IObit Uninstaller PRO – IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="<?php echo getStaticUrl('static/css/common.css')?>" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700i&display=swap" rel="stylesheet">
  <script src="https://cdn.bootcdn.net/ajax/libs/less.js/3.9.0/less.min.js"></script>
  <script src="https://cdn.bootcdn.net/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <?php echo $gJavascript['public']; ?>
  <?php echo $gJavascript['head'] ?>
</head>

<body>
  <nav class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com/es/index.php" target="_blank">IObit</a>
      <h1 class="title">Oferta Especial para IObit Uninstaller PRO – IObit</h1>
      <div class="clearfix">
        <div class="offer">
          <h2>Oferta Normal</h2>
          <p class="price"><strong>15<small>,99€</small></strong> <del>29,99€</del></p>
          <div class="imgbox"><img src="<?php echo getStaticUrl('static/img/iu-box.png')?>" alt=""/></div>
          <a class="buybtn empty"
             href="https://www.iobit.com/buy.php?product=es-iu103pc1599&ref=es_iu103pc1599purchase2011<?php echo $refStr;?>&refs=es_purchase_iu"
             onclick="ga('send', 'event', 'iubuy', 'buy', 'iu3pcpurchase2011-es');">
            COMPRA YA
          </a>
        </div>
        <div class="offer big">
          <div class="top-wrap">
            <h2>Oferta del Año Nuevo</h2>
            <div class="countdown"><i></i> Vence en <span><b>00</b>:<b>00</b>:<b>00</b>:<b>00</b></span></div>
          </div>
          <p class="price"><strong>15<small>,99€</small></strong> <del>99,93€</del></p>
          <div class="imgbox">
            <img src="<?php echo getStaticUrl('static/img/iu-box.png')?>" alt=""/>
            <img class="isu" src="<?php echo getStaticUrl('static/img/isu-box.png')?>" alt=""/>
            <img class="sd" src="<?php echo getStaticUrl('static/img/sd-box.png')?>" alt=""/>
          </div>
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=es-iu103pcpfsd1599&ref=es_iu103pcpfsd1599purchase2011<?php echo $refStr;?>&refs=es_purchase_iu"
             onclick="ga('send', 'event', 'iubuy', 'buy', 'iu3pcpfsdpurchase2011-es');">
            COMPRA YA
          </a>
        </div>
      </div>
      <div class="payment">
        <img src="<?php echo getStaticUrl('static/img/payment.png')?>" alt=""/>
      </div>
      <span class="snow"></span>
    </div>
  </nav>

  <div class="feature">
    <h2 class="wrapper">¡Disfruta de la desinstalación potente para tu PC<br> más rápido y seguro!</h2>
    <div class="wrapper clearfix">
      <div class="computer fl">
        <div class="screen">
          <ul>
            <li><img src="<?php echo getStaticUrl('static/img/screen01.png')?>" alt=""/></li>
            <li><img src="<?php echo getStaticUrl('static/img/screen02.png')?>" alt=""/></li>
            <li><img src="<?php echo getStaticUrl('static/img/screen03.png')?>" alt=""/></li>
            <li><img src="<?php echo getStaticUrl('static/img/screen04.png')?>" alt=""/></li>
          </ul>
        </div>
      </div>
      <div class="feature-message fr">
        <ul>
          <li>
            <h3>Desinstalación completa</h3>
            <p>Elimina programas obstinados y paquetes de programas<br> para liberar espacio del disco y elimina plugins maliciosos y basados en anuncios para una navegación segura.</p>
          </li>
          <li>
            <h3>Navegador rápido y seguro</h3>
            <p>Identifica complementos maliciosos y basados en anuncios y elimina las notificaciones del navegador para garantizar una experiencia de navegación segura y limpia.</p>
          </li>
          <li>
            <h3>Detección y desinstalación de bundleware</h3>
            <p>Detecta y desinstala bundleware tales como adware, plugins de navegador y otro software de terceros que puede ser parte del proceso de instalación.</p>
          </li>
          <li>
            <h3>Actualización de software segura</h3>
            <p>Con sólo un clic, puede actualizar software importante sin la intervención del usuario.</p>
          </li>
        </ul>
        <span class="feature-tag"></span>
      </div>
    </div>
  </div>

  <div class="gifts">
    <div class="wrapper">
      <h2><span>¡Te Preparamos las Maravillosos Regalos de Navidad!</span></h2>
      <h3>¡Aprovecha 45% de descuento navideño!</h3>
      <div class="gifts-offer clearfix">
        <div class="imgbox fl">
          <img src="<?php echo getStaticUrl('static/img/iu-box.png')?>" alt=""/>
          <img class="isu" src="<?php echo getStaticUrl('static/img/isu-box.png')?>" alt=""/>
          <img class="sd" src="<?php echo getStaticUrl('static/img/sd-box.png')?>" alt=""/>
        </div>
        <div class="gifts-list fl">
          <dl>
            <dt><i class="all-icons"></i> Smart Defrag PRO</dt>
            <dd>Máximo rendimiento del disco duro y mayor<br> velocidad de acceso a datos.</dd>
          </dl>
          <dl>
            <dt><i class="all-icons"></i> Protected Folder</dt>
            <dd>Archivos y datos más seguros con<br> una contraseña.</dd>
          </dl>
        </div>
        <div class="price fr">
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=es-iu103pcpfsd1599&ref=es_iu103pcpfsd1599purchase2011<?php echo $refStr;?>&refs=es_purchase_iu"
             onclick="ga('send', 'event', 'iubuy', 'buy', 'iu3pcpfsdpurchase2011-es');">
            Abrir Mis Regalos
          </a>
          <div class="countdown"><i></i> vence en <span><b>00</b>:<b>00</b>:<b>00</b>:<b>00</b></span></div>
        </div>
      </div>
    </div>
  </div>

  <div class="review">
    <div class="wrapper">
      <div class="review-wrap">
        <div class="review-list">
          <h3>Comentario de usuario</h3>
          <p>
            "IObit Uninstaller es una herramienta excelente para desinstalar programas, barras de herramientas y plugins. Su uso ha sido muy útil para mí, ya que desinstala programas y aplicaciones. Además, limpia su registro asociado, en la mayoría de los casos desconocidos para los usuarios como yo. Tiene una interfaz de usuario agradable e intuitiva sin necesidad de habilidades informáticas principales. Lo recomiendo fuertemente."
          </p>
        </div>
        <div class="review-list">
          <h3>Reseña de los Medios</h3>
          <p>
            "Si necesita una aplicación para que desinstale fácilmente aplicaciones limpiamente y completamente, IObit Uninstaller es la mejor opción. La utilidad, compatible con Windows 10, elimina fácilmente aplicaciones, incluyendo los archivos quedados frecuentemente cuando un programa es eliminado desde PC y barras de herramientas y plugins molestos de navegador. En resumen, si usa un PC de Windows, debería descargar IObit Uninstaller."
          </p>
        </div>
        <div class="review-list">
          <h3>Comentario de usuario</h3>
          <p>
            "IObit Uninstaller PRO es uno de los cinco productos de "mantenimiento" de IObit que he invertido para mi PC como los cocineros invierten en sus cuchillos. IObit Uninstaller es genial para encontrar los restos de bits y bytes que permanecen ocultamente en su PC, tomando espacio en disco y afectando el registro. Si uso el programa de desinstalación básica para desinstalar, lo funcionó. Pero Uninstaller Pro encontró 35 archivos que necesitaron ser limpiados. Todo lo que necesito es hacer clic en "OK". Lo recomendé encarecidamente e incluso conseguí una licencia para 3 PCs. El servicio al cliente es atento y eficiente."
          </p>
        </div>
        <div class="review-list">
          <h3>Comentario de usuario</h3>
          <p>
            "IObit Uninstaller es uno de los mejores programas con su uso. Es fácil de utilizar y limpieza profunda. Despúes de versión 5 tiene más funciones de utilizar no solo con Windows 10. La limpieza de los plugins también es útil extremadamente. Búsqueda para programas duplicados no utilizados es perfecta. "
          </p>
        </div>
      </div>
      <ul class="review-icon">
        <li>
          <img src="<?php echo getStaticUrl('static/img/fernando.png')?>" alt="Fernando Lourenço Gomes"/>
          <h4>Fernando Lourenço Gomes</h4>
        </li>
        <li class="on">
          <img src="<?php echo getStaticUrl('static/img/pc-magazine.png')?>" alt="PC.MAGAZINE"/>
          <h4>PC.MAGAZINE</h4>
        </li>
        <li>
          <img src="<?php echo getStaticUrl('static/img/joseph-yu.png')?>" alt="Joseph Yu"/>
          <h4>Joseph Yu</h4>
        </li>
        <li>
          <img src="<?php echo getStaticUrl('static/img/ada-gortler.png')?>" alt="Áda Görtler"/>
          <h4>Áda Görtler</h4>
        </li>
      </ul>
    </div>
  </div>

  <div class="tablebox">
    <div class="wrapper">
      <div class="table-title">
        <h3>IObit Uninstaller Free </h3>
        <div class="table-center">¿Cuales ventajas tiene la<br> PRO edición?</div>
        <h3 class="pro"> IObit Uninstaller PRO</h3>
      </div>
      <table cellpadding="0" cellspacing="0" border="0">
        <tr>
          <td class="free"><i class="all-icons grayfork right"></i></td>
          <td class="text">Desinstala programas, plugins y aplicaciones con 1 solo clic</td>
          <td class="pro"><i class="all-icons yellowfork"></i></td>
        </tr>
        <tr>
          <td class="free"><i class="all-icons grayfork right"></i></td>
          <td class="text"> Escaneo los restos durante la desinstalación</td>
          <td class="pro"><i class="all-icons yellowfork"></i></td>
        </tr>
        <tr>
          <td class="free"><i class="all-icons grayfork"></i></td>
          <td class="text">Limpia en profundidad los archivos que no pueden ser eliminados con la desinstalación por defecto</td>
          <td class="pro"><i class="all-icons yellowfork"></i></td>
        </tr>
        <tr>
          <td class="free"><i class="all-icons grayfork"></i></td>
          <td class="text">Elimina programas que no se pueden desinstalar por medios convencionales</td>
          <td class="pro"><i class="all-icons yellowfork"></i></td>
        </tr>
        <tr>
          <td class="free"><i class="all-icons grayfork"></i></td>
          <td class="text">Desinstala programas de terceros que han sido instalados por otro software</td>
          <td class="pro"><i class="all-icons yellowfork"></i></td>
        </tr>
        <tr>
          <td class="free"><i class="all-icons grayfork"></i></td>
          <td class="text">Limpia automáticamente los restos de programas desinstalados</td>
          <td class="pro"><i class="all-icons yellowfork"></i></td>
        </tr>
        <tr>
          <td class="free"><i class="all-icons grayfork"></i></td>
          <td class="text"> Identifica y elimina plugins maliciosos y basados en anuncios</td>
          <td class="pro"><i class="all-icons yellowfork"></i></td>
        </tr>
        <tr>
          <td class="free"><i class="all-icons grayfork"></i></td>
          <td class="text">Un clic para actualizar todo el software importante</td>
          <td class="pro"><i class="all-icons yellowfork"></i></td>
        </tr>
        <tr>
          <td class="free"><i class="all-icons grayfork"></i></td>
          <td class="text">Actualiza a la última versión de forma automática</td>
          <td class="pro"><i class="all-icons yellowfork"></i></td>
        </tr>
        <tr class="last">
          <td class="free"><i class="all-icons grayfork"></i></td>
          <td class="text">Soporte técnico 24/7 disponible</td>
          <td class="pro"><i class="all-icons yellowfork"></i></td>
        </tr>
      </table>
    </div>
  </div>

  <div class="footbuy">
    <h2>¡Aprovecha la oportunidad para obtener hermosos regalos de navidad!</h2>
    <div class="wrapper clearfix">
      <div class="imgbox fl">
        <img src="<?php echo getStaticUrl('static/img/iu-box.png')?>" alt=""/>
        <img class="isu" src="<?php echo getStaticUrl('static/img/isu-box.png')?>" alt=""/>
        <img class="sd" src="<?php echo getStaticUrl('static/img/sd-box.png')?>" alt=""/>
        <span class="discount">-84%</span>
      </div>
      <div class="price fr">
        <p><strong>15<small>,99€</small></strong> <del>99,93€</del></p>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=es-iu103pcpfsd1599&ref=es_iu103pcpfsd1599purchase2011<?php echo $refStr;?>&refs=es_purchase_iu"
           onclick="ga('send', 'event', 'iubuy', 'buy', 'iu3pcpfsdpurchase2011-es');">
          Abrir Mis Regalos
        </a>
        <div class="countdown"><i></i> vence en <span><b>00</b>:<b>00</b>:<b>00</b>:<b>00</b></span></div>
      </div>
    </div>
  </div>

  <!-- service -->
  <div class="service ">
    <div class="wrapper clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('static/img/moneyback.png')?>" alt=""></dt>
        <dd><strong>Garantía de reembolso</strong></dd>
        <dd>Si no está satisfecho en los primeros 60 días, le devolveremos su dinero</dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('static/img/secure.png')?>" alt=""></dt>
        <dd><strong>Pago seguro</strong></dd>
        <dd>100% pago seguro para su pedido</dd>
      </dl>
      <dl class="last">
        <dt><img src="<?php echo getStaticUrl('static/img/servies.png')?>" alt=""></dt>
        <dd><strong>Servicio al cliente</strong></dd>
        <dd>24/7 Soporte Técnico gratis</dd>
      </dl>
    </div>
  </div>
  <!-- end service -->

  <!-- footer -->
  <div class="footer">
    <div class="wrapper">
      <dl class="annotation">
        <dt>Notas:</dt>
        <dd>1*.Estos programas promocionales están sujetos a cambios sin previo aviso, dependiendo de nuestra discreción exclusiva en cualquier momento.</dd>
        <dd>2*.Datos pueden variar basados en diferentes sistemas u ordenadores.</dd>
      </dl>
      <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Todos los derechos reservados</p>
    </div>
  </div>
  <!-- end footer -->
</body>

<script src="<?php echo getStaticUrl('static/js/script.js')?>"></script>
</html>