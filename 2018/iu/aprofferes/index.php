<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';
$refStr='';
if(in_array($_GET['pop'],array('x_iu'))){
  $refStr.='-'.$_GET['pop'];
}
if(in_array($_GET['to'],array('softall','soft','iuself','bdplug','plug','uqprom','bdfail',
    'bdprog','iuasc'))){
  $refStr.='-'.$_GET['to'];
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Ahorra 77% de descuento en IObit Uninstaller PRO – IObit</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Lato:400,700'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
  <script type="text/javascript">
    function getBuyNum(){
      $.ajax({
        type: "GET",
        url: "<?php echo $pRootUrl;?>callback.php",
        data: "action=getBuyNum&reduceNum=<?php echo $reduceNum;?>&reTime=<?php echo $reTime;?>&r="+Math.random(),
        success: function(packs){
          $('.buyNum').html(packs);
          setTimeout('getBuyNum()', 15000);
        }
      });
    }
    setTimeout('getBuyNum()', 15000);
  </script>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
  
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com" target="_blank">IObit</a>
      <h1>OFERTA POR TIEMPO LIMITADO</h1>
      <h2><strong>-77%</strong> en IObit Uninstaller PRO y obtén Protected Folder Gratis </h2>
      <div class="img-box">
        <img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="">
        <ul>
          <li>00</li>
          <li>00</li>
          <li>00</li>
          <li class="last">00</li>
        </ul>
      </div>
      <dl class="list">
        <dt>IObit Uninstaller PRO </dt>
        <dd>Eliminar bundleware y paquetes de plugins.</dd>
        <dd>Actualizar tus programas importantes. </dd>
        <dd>Eliminar los anuncios de tu navegador.  </dd>
        <dd>Limpiar todos los restos por otros desinstaladores. </dd>
      </dl>
      <dl class="price">
        <dt><strong><b>15</b>,99€</strong> <del>69,94€</del></dt>
        <dd><a href="https://www.iobit.com/buy.php?product=es-iu83pcpf1599&ref=es_iu83pcpfpurchase1804<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=es_purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase1804-es')" class="buybtn">Comprar ahora</a></dd>
        <dd><i class="all-icons"></i> Más de 6,037,610 personas ya han comprado</dd>
      </dl>
    </div>
  </div>
  <!-- banner end -->

  <!-- patment start -->
  <div class="payment"><img src="<?php echo getStaticUrl('images/payments.png')?>" alt="" /></div>
  <!-- patment end -->

  <!-- intro start -->
  <div class="intro wrapper">
    <h2>¡Disfrute de la desinstalación potente para la navegación más rápida y segura!</h2>
    <p>Suscripción de 1 año para 3 PCs</p>
    <div class="introimg">
      <div class="imglist">
        <ul>
          <li class="shot3"><img src="<?php echo getStaticUrl('images/screenshot02.png')?>" alt=""></li>
          <li class="shot2"><img src="<?php echo getStaticUrl('images/screenshot03.png')?>" alt=""></li>
          <li class="shot1"><img src="<?php echo getStaticUrl('images/screenshot01.png')?>" alt=""></li>
        </ul>
      </div>
      <a href="javascript:;" class="prev btn"><</a>
      <a href="javascript:;" class="next btn">></a>
    </div>
    <div class="feature clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature_01.png')?>" alt=""></dt>
        <dd>
          <h3><b>¡NUEVA!</b> Detección y desinstalación de bundleware</h3>
          <p>Detecta y desinstala bundleware tales como adware, plugins de navegador y otro software de terceros que puede ser parte del proceso de instalación.</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature_02.png')?>" alt=""></dt>
        <dd>
          <h3><b>¡MEJORADA!</b> Limpieza Automática</h3>
          <p>Escanea y limpia automáticamente los archivos de resto para obtener un PC limpio y rápido</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature_03.png')?>" alt=""></dt>
        <dd>
          <h3><b>¡MEJORADA!</b> Navegación rápida y segura</h3>
          <p>Detecta complementos y extensiones de publicidad maliciosa automáticamente</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature_04.png')?>" alt=""></dt>
        <dd>
          <h3><b>¡NUEVA!</b> Actualizador de Software</h3>
          <p>Con un clic, actualiza su software importante de su PC sin cualquier intervención de usuario.</p>
        </dd>
      </dl>
    </div>
    <a href="javascript: void(0);" class="comparebtn">Ver más sobre edición PRO>></a>
  </div>
  <!-- intro end -->
  <!-- donation start -->
  <div class="donation">
    <div class="wrapper">
      <h2>¡Protected Folder GRATIS sólo para Iobit Uninstaller PRO - vale 39,95€!  </h2>
      <img src="<?php echo getStaticUrl('images/pf-box.png')?>" alt="" class="img-box">
      <ul>
        <li>Protege tus archivos importantes y personales</li>
        <li>No hay preocupaciones de robo de datos y fugas de privacidad</li>
      </ul>
      <h3>IObit Uninstaller 8 PRO + Protected Folder <strong>GRATIS</strong></h3>
      <dl class="price">
        <dt><strong><b>15</b>,99€</strong> <del>69,94€</del></dt>
        <dd><a href="https://www.iobit.com/buy.php?product=es-iu83pcpf1599&ref=es_iu83pcpfpurchase1804<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=es_purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase1804-es')" class="buybtn">Comprar ahora</a></dd>
      </dl>
    </div>
  </div>
  <!-- donation end -->
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
  <!-- awards start -->
  <div class="awards wrapper">
    <h2>Recomendado y premiado por estos Medios</h2>
    <img src="<?php echo getStaticUrl('images/awards.png')?>" alt="" />
  </div>
  <!-- awards end -->

  <!-- comparison start -->
  <div class="comparison wrapper" id="compare">
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
      <thead>
        <tr>
          <th class="text" colspan="2">¿Cuales ventajas tiene la PRO editición?</th>
          <th class="space"></th>
          <th class="itemb"><div class="free">IObit Uninstaller 8 FREE</div></th>
          <th class="space"></th>
          <th class="itema"><div class="pro">IObit Uninstaller 8 PRO</div></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_01.png')?>" alt="" /></td>
          <td class="virtue">Desinstala programas a través del icono de escritorio, la ventana abierta o el icono de la bandeja del sistema <span class="nuo">Nuevo</span></td>
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
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_03.png')?>" alt="" /></td>
          <td class="virtue">Remueve programas obstinados <span>Mejorado</span> <em>3x</em></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons circle">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt="" /></td>
          <td class="virtue">Detecta y desinstala programas de terceros junto con software gratis <span class="nuo">Nuevo</span></td>
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
  <div class="bottom-buy">
    <div class="wrapper">
      <h2>Sólo 0,015€ al día, garantiza tu PC y navegación más rápidas y </h2>
      <img src="<?php echo getStaticUrl('images/bottom-pf-box.png')?>" alt="" />
      <dl class="price">
        <dt><strong><b>15</b>,99€</strong> <del>69,94€</del></dt>
        <dd><a href="https://www.iobit.com/buy.php?product=es-iu83pcpf1599&ref=es_iu83pcpfpurchase1804<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=es_purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase1804-es')"   class="buybtn">Comprar ahora</a></dd>
      </dl>
    </div>
  </div>
  <div class="wrapper">
    <!-- service start -->
    <div class="service clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt="" /></dt>
        <dd><h4>Garantía de reembolso</h4></dd>
        <dd>Si no está satisfecho en los primeros <span>60 días,le devolveremos su dinero.</span></dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/godaddy-secure.png')?>" alt="" /></dt>
        <dd><h4>Pago 100% seguro</h4></dd>
        <dd>IObit ofrece métodos de pago seguros <span>para la transacción.</span></dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/24hours.png')?>" alt="" /></dt>
        <dd><h4>Servicio al cliente</h4></dd>
        <dd>Ofrecemos 24/7 Soporte Técnico gratis.</dd>
      </dl>
    </div>
    <!-- service end -->

    <!-- annotation start -->
    <dl class="annotation">
      <dt>Nota:</dt>
      <dd>1*.Estos programas promocionales están sujetos a cambios sin previo aviso, dependiendo de nuestra discreción exclusiva en cualquier momento.</dd>
      <dd>2*.Datos pueden variar basados en diferentes sistemas u ordenadores.</dd>
    </dl>
    <!-- annotation end -->

    <!-- footer start -->
    <div class="footer">Copyright © 2005 - <?php echo date('Y')?> IObit. Todos los derechos reservados</div>
    <!-- footer end -->
  </div>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>