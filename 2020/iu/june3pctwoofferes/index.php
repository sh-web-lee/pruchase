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

$refStr = empty($_GET['st']) ? '' : ('-' . $_GET['st']);
if (preg_match('/^([0-9]*)\.([0-9]*)\./', $_GET['ver'], $matches)) {
  $ver = $matches[1] . '-' . $matches[2];
  $refStr .= '-' . $ver;
}
if (in_array($_GET['pop'], array('x_iu', 'xi_iu', 'xb_iu', 'xnc_iu'))) {
  $refStr .= '-' . $_GET['pop'];
}
$refStr .= empty($_GET['to']) ? '' : ('-' . $_GET['to']);
$refStr .= empty($_GET['ref']) ? '' : ('-' . $_GET['ref']);
$refStr .= empty($_GET['user']) ? '' : ('-' . $_GET['user']);
$refStr .= empty($_GET['insday']) ? '' : ('-' . $_GET['insday']);
$refStr .= empty($_GET['insur']) ? '' : ('-' . $_GET['insur']);
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
  <?php echo $gJavascript['public']; ?>
  <?php echo $gJavascript['head'] ?>
</head>

<body>
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com/es/index.php" target="_blank">IObit</a>
      <h1>OFERTA ESPECIAL</h1>
      <h3>┬íCelebramos juntos el aniversario de IObit y aprovechamos las mejores ofertas que se hayan visto antes!</h3>
      <div class="bundle-container clearfix">
        <div class="bundle left">
          <img src="<?php echo getStaticUrl('images/bundle-0.png') ?>" alt="" />
          <p class="price">
            <b class="discount">15</b>
            <span>
              <i>ÔéČ99</i>
              <del class="original">29,99ÔéČ</del>
            </span>
          </p>
          <a class="buybtn" href="https://www.iobit.com/buy.php?product=es-iu113pc1599&ref=es_iu113pcpurchase2108<?php echo $refStr; ?>&refs=es_purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase3pc2108-es');">
            Comprar ahora
          </a>
        </div>

        <div class="bundle right">
          <div class="countdown-container"><i></i><span>12</span>H : <span>24</span>MIN : <span>52</span>S : <span>235</span>MS*
          </div>
          <img src="<?php echo getStaticUrl('images/bundle-1.png') ?>" alt="" />
          <p class="price">
            <b class="discount">15</b>
            <span>
              <i>ÔéČ99</i>
              <del class="original">69,94ÔéČ</del>
            </span>
          </p>
          <a class="buybtn" href="https://www.iobit.com/buy.php?product=es-iu113pcpf1599&ref=es_iu113pcpfpurchase2108<?php echo $refStr; ?>&refs=es_purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase3pcpf2108-es');">
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
      <h2>┬íDisfruta de la desinstalaci├│n potente para tu PC m├ís r├ípido y seguro!</h2>
      <div class="showcase">
        <div class="inner">
          <ul class="screenshot">
            <li>
              <img src="<?php echo getStaticUrl('images/screenshot-00.png') ?>" alt="" />
            </li>
            <li class="active">
              <img src="<?php echo getStaticUrl('images/screenshot-01.png') ?>" alt="" />
            </li>
            <li>
              <img src="<?php echo getStaticUrl('images/screenshot-02.png') ?>" alt="" />
            </li>
            <li>
              <img src="<?php echo getStaticUrl('images/screenshot-03.png') ?>" alt="" />
            </li>
            <li>
              <img src="<?php echo getStaticUrl('images/screenshot-04.png') ?>" alt="" />
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
            <h3>Desinstalaci├│n completa</h3>
            <p>Desinstala por completo todos los programas, incluso aquellos con problemas de desinstalaci├│n, y los cambios que hayan realizado en el sistema.</p>
          </dd>
        </dl>
        <dl class="two">
          <dt><i class="benfits02"></i></dt>
          <dd>
            <h3>Navegador r├ípido y seguro</h3>
            <p>Identifica complementos maliciosos y basados en anuncios y elimina las notificaciones del navegador para garantizar una experiencia de navegaci├│n segura y limpia.</p>
          </dd>
        </dl>
        <dl class="two">
          <dt><i class="benfits04"></i></dt>
          <dd>
            <h3>Detecci├│n y desinstalaci├│n de bundleware</h3>
            <p>Detecta y desinstala bundleware tales como adware, plugins de navegador y otro software de terceros que puede ser parte del proceso de instalaci├│n.</p>
          </dd>
        </dl>
        <dl>
          <dt><i class="benfits01"></i></dt>
          <dd>
            <h3>Actualizaci├│n de software segura</h3>
            <p>Con s├│lo un clic, puede actualizar software importante sin la intervenci├│n del usuario.</p>
          </dd>
        </dl>
        <a class="textlink" href="Javascript:void(0);">M├ís informaci├│n sobre la edici├│n PRO >></a>
      </div>
    </div>
  </div>
  <!-- benfits end -->

  <!-- gifubox start -->
  <div class="giftbox">
    <h2>┬íTambi├ęn recibir├ís el programa Protected Folder totalmente gratis!</h2>
    <div class="wrapper">
      <div class="clearfix">
        <dl class="pf">
          <dt><img src="<?php echo getStaticUrl('images/pf-box.png') ?>" alt="" /></dt>
          <dd>
            <h3>Protected Folder</h3>
            <p>Archivos y datos m├ís seguros con una contrase├▒a</p>
            <p>El modo de protecci├│n de privacidad mejorado</p>
          </dd>
        </dl>
        <dl class="else">
          <dd>
            <h5><big>0ÔéČ</big> <del>39,95ÔéČ</del></h5>
            <a href="https://www.iobit.com/buy.php?product=es-iu113pcpf1599&ref=es_iu113pcpfpurchase2108<?php echo $refStr; ?>&refs=es_purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase3pcpf2108-es');">
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
    <img src="<?php echo $pResUrl; ?>images/awards-icon.png" alt="">
  </div>
  <!-- awards end -->

  <!-- review start -->
  <div class="review wrapper">
    <div class="content">
      <dl>
        <dt>
          <h3>Comentario de usuario</h3>
        </dt>
        <dd>
          "IObit Uninstaller es una herramienta excelente para desinstalar programas, barras de herramientas y plugins. Su uso ha sido muy ├║til para m├ş, ya que desinstala programas y aplicaciones. Adem├ís, limpia su registro asociado, en la mayor├şa de los casos desconocidos para los usuarios como yo. Tiene una interfaz de usuario agradable e intuitiva sin necesidad de habilidades inform├íticas principales. Lo recomiendo fuertemente."
        </dd>
      </dl>
      <dl class="active">
        <dt>
          <h3>Rese├▒a de los Medios</h3>
        </dt>
        <dd>
          "Si necesita una aplicaci├│n para que desinstale f├ícilmente aplicaciones limpiamente y completamente, IObit Uninstaller es la mejor opci├│n. La utilidad, compatible con Windows 10, elimina f├ícilmente aplicaciones, incluyendo los archivos quedados frecuentemente cuando un programa es eliminado desde PC y barras de herramientas y plugins molestos de navegador. En resumen, si usa un PC de Windows, deber├şa descargar IObit Uninstaller."
        </dd>
      </dl>
      <dl>
        <dt>
          <h3>Comentario de usuario</h3>
        </dt>
        <dd>
          "IObit Uninstaller PRO es uno de los cinco productos de "mantenimiento" de IObit que he invertido para mi PC como los cocineros invierten en sus cuchillos. IObit Uninstaller es genial para encontrar los restos de bits y bytes que permanecen ocultamente en su PC, tomando espacio en disco y afectando el registro. Si uso el programa de desinstalaci├│n b├ísica para desinstalar, lo funcion├│. Pero Uninstaller Pro encontr├│ 35 archivos que necesitaron ser limpiados. Todo lo que necesito es hacer clic en "OK". Lo recomend├ę encarecidamente e incluso consegu├ş una licencia para 3 PCs. El servicio al cliente es atento y eficiente."
        </dd>
      </dl>
      <dl>
        <dt>
          <h3>Comentario de usuario</h3>
        </dt>
        <dd>
          "IObit Uninstaller es uno de los mejores programas con su uso. Es f├ícil de utilizar y limpieza profunda. Desp├║es de versi├│n 5 tiene m├ís funciones de utilizar no solo con Windows 10. La limpieza de los plugins tambi├ęn es ├║til extremadamente. B├║squeda para programas duplicados no utilizados es perfecta. " </dd>
      </dl>
    </div>
    <ul class="users clearfix">
      <li>
        <div class="pic"><img src="<?php echo getStaticUrl('images/fernando.png') ?>" alt="Fernando Louren├žo Gomes">
        </div>
        <p>Fernando Louren├žo Gomes</p>
      </li>
      <li class="active">
        <div class="pic"><img src="<?php echo getStaticUrl('images/pc-magazine.png') ?>" alt="PC.MAGAZINE"></div>
        <p>PC.MAGAZINE</p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo getStaticUrl('images/joseph-yu.png') ?>" alt="Joseph Yu">
        </div>
        <p>Joseph Yu</p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo getStaticUrl('images/ada-gortler.png') ?>" alt="├üda G├Ârtler">
        </div>
        <p>├üda G├Ârtler</p>
      </li>
    </ul>
  </div>
  <!-- review end -->

  <!-- comparison start -->
  <div class="comparison wrapper" id="compare">
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
      <thead>
        <tr>
          <th class="text" colspan="2">┬┐Qu├ę ventajas tiene la PRO edci├│n?</th>
          <th class="space"></th>
          <th class="itemb">
            <div class="free">IObit Uninstaller 11 FREE</div>
          </th>
          <th class="space"></th>
          <th class="itema">
            <div class="pro">IObit Uninstaller 11 PRO</div>
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_01.png') ?>" alt="" /></td>
          <td class="virtue">Desinstala programas a trav├ęs del icono de escritorio, la ventana abierta o el icono de la bandeja del sistema</td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons">ÔłÜ</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">ÔłÜ</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_02.png') ?>" alt="" /></td>
          <td class="virtue">Elimina plugins y extensiones en Edge, Chrome, IE, Firefox, etc.</td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons">ÔłÜ</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">ÔłÜ</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_14.png') ?>" alt="" /></td>
          <td class="virtue">Elimina programas con problemas de desinstalaci├│n <span class="nuo">Nuevo</span></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons">ÔłÜ</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">ÔłÜ</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_13.png') ?>" alt="" /></td>
          <td class="virtue">Soporta la eliminaci├│n de notificaciones del navegador web <span class="nuo">Nuevo</span></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons">ÔłÜ</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">ÔłÜ</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_12.png') ?>" alt="" /></td>
          <td class="virtue"> El algoritmo avanzado detecta con precisi├│n software menos conocido y bundleware <span class="nuo">Nuevo</span></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons">ÔłÜ</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">ÔłÜ</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_11.png') ?>" alt="" /></td>
          <td class="virtue">Revierte autom├íticamente los cambios del sistema que un programa ha realizado al desinstalarlo
            <!-- <span class="nuo">Nuevo</span> -->
          </td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons circle">ÔłÜ</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">ÔłÜ</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_03.png') ?>" alt="" /></td>
          <td class="virtue">Remueve programas obstinados <span>Mejorado</span></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons circle">ÔłÜ</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">ÔłÜ</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_04.png') ?>" alt="" /></td>
          <td class="virtue">Detecta y desinstala programas de terceros junto con software gratis</td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons circle">ÔłÜ</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">ÔłÜ</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_05.png') ?>" alt="" /></td>
          <td class="virtue">Elimina autom├íticamente restos que otras utilidades no pudieron quitar <span>Mejorado</span></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons circle">ÔłÜ</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">ÔłÜ</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_06.png') ?>" alt="" /></td>
          <td class="virtue">Identifica y elimina plugins maliciosos <span>Mejorado</span> </td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons circle">ÔłÜ</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">ÔłÜ</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_07.png') ?>" alt="" /></td>
          <td class="virtue">Identifica y elimina plugins basados en anuncios
            <!--  <span>Mejorado</span> -->
          </td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons circle">ÔłÜ</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">ÔłÜ</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_08.png') ?>" alt="" /></td>
          <td class="virtue">Un clic para actualizar todos los software importantes
            <!-- <span>Mejorado</span> -->
          </td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons circle">ÔłÜ</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">ÔłÜ</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_09.png') ?>" alt="" /></td>
          <td class="virtue">Actualiza a la ├║ltima versi├│n autom├íticamente</td>


          <td class="space"></td>
          <td class="itemb"><i class="all-icons circle">ÔłÜ</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">ÔłÜ</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_10.png') ?>" alt="" /></td>
          <td class="virtue">24/7 Soporte T├ęcnico gratis bajo demanda</td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons circle">ÔłÜ</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">ÔłÜ</i></td>
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
        <li class="on" data-num="1"><span>1 a├▒o / 3 PCs<em> + regalo GRATIS</em></span></li>
        <li data-num="0"><span>1 a├▒o / 3 PCs </span></li>
      </ul>
      <div class="price fl">
        <p>
          <b class="discount">15</b>
          <span>
            <i>ÔéČ99</i>
            <del class="original">69,94ÔéČ</del>
          </span>
        </p>
        <a href="https://www.iobit.com/buy.php?product=es-iu113pcpf1599&ref=es_iu113pcpfpurchase2108<?php echo $refStr; ?>&refs=es_purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase3pcpf2108-es');">
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
        <h3>Garant├şa de reembolso</h3>
        <p>Si no est├í satisfecho en los primeros 60 d├şas, le devolveremos su dinero</p>
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
        <p>24/7 Soporte T├ęcnico gratis</p>
      </dd>
    </dl>
  </div>
  <!-- service end -->

  <!-- footer start -->
  <div class="footer wrapper">
    <div class="notes">
      <p>Nota:</p>
      <p>1*.Estos programas promocionales est├ín sujetos a cambios sin previo aviso, dependiendo de nuestra discreci├│n exclusiva en cualquier momento.</p>
      <p>2*.Datos pueden variar basados en diferentes sistemas u ordenadores.</p>
    </div>
    <p class="copyright">Copyright ┬ę 2005 - <?php echo date('Y') ?> IObit. Todos los derechos reservados</p>
  </div>
  <!-- footer end -->

  <script src="<?php echo getStaticUrl('script/script.js') ?>"></script>
</body>

</html>