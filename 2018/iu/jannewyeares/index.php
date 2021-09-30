<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
if(!empty($_GET['action'])&&($_GET['action']=='getSales')){
  $date=$_GET['d'];
  $cName='itaugiu'.$date;
  $cookie=$_COOKIE[$cName];
  if($cookie){
    $packsNum=$_COOKIE[$cName];
    if($packsNum>19){
      $packsNum--;
      setcookie($cName,$packsNum);
      if(rand(1,100)%2==0){
        $packsNum++;
      }
    }else{
      $packsNum=19;
    }
  }else{
    $packsNum=137;
    setcookie($cName,$packsNum);
  }
  echo $packsNum;
  exit();
}
  include $pRootUrl.'include/common.inc.php';
  $reduceNum=94689561;
  $reTime=15;
  $buyNum = number_format(ceil(microtimeFloat()*1000/(1000*$reTime)) - $reduceNum);
$refStr='';
if(in_array($_GET['pop'],array('x_iu'))){
  $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>77% de descuento y regalo para IObit Uninstaller PRO – IObit</title>
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
      <a class="logo" href="http://www.iobit.com" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit" />
      </a>
      <h1>OFERTA EXCLUSIVA</h1>
      <p>Ahorra <b>77%</b> y obtenga regalos exclusivos para IObit Uninstaller PRO</p>
      <!-- time -->
      <ul id="countdown" class="countdown">
        <li class="first"><strong>00</strong> h: </li>
        <li><strong>00</strong> min: </li>
        <li><strong>00</strong> s: </li>
        <li><strong>00</strong> ms</li>
      </ul>
      <div class="panel clearfix">
        <div class="left fl">
          <img class="iubox" src="<?php echo getStaticUrl('images/iubox.png')?>" alt="" />
          <div class="seven"></div>
        </div>
        <div class="offer fl">
          <h2>IObit Uninstaller 7 PRO</h2>
          <span class="name">1 año / 3 PCs</span>
          <p class="gift"><i class="all-icons"></i> Protected Folder+Smart Defrag PRO vale <b>39,94€</b></p>
          <strong>15,<small>99€</small></strong> <del>69,93€</del>
          <a class="buybtn" 
             href="http://www.iobit.com/buy.php?product=es-iu73pcpfsd1599&ref=es_iu73pcpfsdpurchase1801<?php echo $refStr;?>&aff=&refs=es_purchase_iu"
             onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase1801-es')">
            <div class="solid-layer"></div>
            <div class="border-layer"></div>
            <div class="text-layer">Comprar ahora</div>
          </a>
          <p class="people"><i class="all-icons"></i> Más de <span class="buyNum"><?php echo $buyNum;?></span> personas han comprado</p>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- patment start -->
  <div class="payment wrapper"><img src="<?php echo getStaticUrl('images/payments.png')?>" alt="" /></div>
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
      <h2>¡Regalos exclusivos de IObit Uninstaller PRO!</h2>
      <div class="cont clearfix">
        <dl class="pf">
          <dt><img src="<?php echo getStaticUrl('images/gift-pf.png')?>" alt="" /></dt>
          <dd>
            <h3>Protected Folder <strong>0€ </strong> <del>19,95€</del></h3>
            <ul>
              <li><i class="all-icons">√</i> Protege sus archivos importantes y personales.</li>
              <li>
                <i class="all-icons">√</i> 
                <span>No hay preocupaciones de robo de datos y fugas de privacidad.</span>
              </li>
            </ul>
          </dd>
        </dl>
        <dl class="sd">
          <dt><img src="<?php echo getStaticUrl('images/gift-sd.png')?>" alt="" /></dt>
          <dd>
            <h3>Smart Defrag PRO <strong>0€ </strong> <del>19,99€</del></h3>
            <ul>
              <li><i class="all-icons">√</i> Máxima velocidad de acceso a archivos.</li>
              <li><i class="all-icons">√</i> Desfragmentación de disco segura y estable.</li>
            </ul>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- donation end -->

  <!-- awards start -->
  <div class="awards wrapper">
    <h2>Recomendado y premiado por estos Medios</h2>
    <img src="<?php echo getStaticUrl('images/awards.png')?>" alt="" />
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
    </ul>
  </div>
  <!-- review end -->

  <!-- comparison start -->
  <div class="comparison wrapper" id="compare">
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
      <thead>
        <tr>
          <th class="text" colspan="2">¿Cuales ventajas tiene la PRO editición?</th>
          <th class="itemb">IObit Uninstaller 7 FREE</th>
          <th class="itema">IObit Uninstaller 7 PRO</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_01.png')?>" alt="" /></td>
          <td class="virtue">Desinstalar programas no deseados profundamente y rápidamente<span>Mejorado</span></td>
          <td class="itemb"><i class="all-icons">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_02.png')?>" alt="" /></td>
          <td class="virtue">Eliminar plugins y extensiones en Edge, Chrome, IE, Firefox, etc. <span class="nuo">Novedad</span></td>
          <td class="itemb"><i class="all-icons">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_03.png')?>" alt="" /></td>
          <td class="virtue">Eliminar fácilmente actualizaciones de Windows problemáticas <span>Mejorado</span></td>
          <td class="itemb"><i class="all-icons">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt="" /></td>
          <td class="virtue">Detectar y desinstalarBundleware y Plugins incluidos</td>
          <td class="itemb"><i class="all-icons">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_05.png')?>" alt="" /></td>
          <td class="virtue">Un clic para actualizar todos los software importantes <span class="nuo">Novedad</span></td>
          <td class="itemb"><i class="all-icons circle">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_06.png')?>" alt="" /></td>
          <td class="virtue">Desinstalar plugins maliciosos para navegador más seguro <span class="nuo">Novedad</span> </td>
          <td class="itemb"><i class="all-icons circle">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_07.png')?>" alt="" /></td>
          <td class="virtue">Experiencia en línea más limpia y más rápida con eliminación de Adware <span class="nuo">Novedad</span> </td>
          <td class="itemb"><i class="all-icons circle">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt="" /></td>
          <td class="virtue">Elimina automáticamente restos que otras utilidades no pudieron quitar </td>
          <td class="itemb"><i class="all-icons circle">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_09.png')?>" alt="" /></td>
          <td class="virtue">Actualizar a la última versión automáticamente</td>
          <td class="itemb"><i class="all-icons circle">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_10.png')?>" alt="" /></td>
          <td class="virtue">24/7 Soporte Técnico gratis bajo demanda</td>
          <td class="itemb"><i class="all-icons circle">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
      </tbody>
      <tfoot>
        <tr>
          <th colspan="2"></th>
          <th class="itemb">IObit Uninstaller 7 FREE<p>Su edición actual </p></th>
          <th class="itema">
            IObit Uninstaller 7 PRO
            <p><strong>15,99€ </strong> <del>69,93€</del></p>
            <a class="buybtn" 
               href="http://www.iobit.com/buy.php?product=es-iu73pcpfsd1599&ref=es_iu73pcpfsdpurchase1801<?php echo $refStr;?>&aff=&refs=es_purchase_iu"
               onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase1801-es')">
              <div class="solid-layer"></div>
              <div class="border-layer"></div>
              <div class="text-layer">Comprar ahora</div>
            </a>
          </th>
        </tr>
      </tfoot>
    </table>
  </div>
  <!-- comparison end -->

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
      <dd>2*.Datos pueden variar basados en diferentes sistemas o ordenadores.</dd>
    </dl>
    <!-- annotation end -->

    <!-- footer start -->
    <div class="footer">Copyright © 2005 - <?php echo date('Y')?> IObit. Todos los derechos reservados</div>
    <!-- footer end -->
  </div>

  <!-- floatlayer start -->
  <div class="floatlayer" id="floatlayer">
    <div class="wrapper clearfix">
      <div class="left fl">
        <h2>¡SÚPER BARATA, SÓLO HOY!</h2>
        <h3>Sólo <b>0,02€</b> por día para conseguir nuevo IObit Uninstaller 7 y regalos gratis.</h3>
      </div>
      <div class="offer fr">
        <strong>15,<small>99€</small></strong> <del>69,93€</del>
        <a class="buybtn" 
           href="http://www.iobit.com/buy.php?product=es-iu73pcpfsd1599&ref=es_iu73pcpfsdpurchase1801<?php echo $refStr;?>&aff=&refs=es_purchase_iu"
           onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase1801-es')">
          <div class="solid-layer"></div>
          <div class="border-layer"></div>
          <div class="text-layer">Comprar ahora</div>
        </a>
      </div>
    </div>
    <div class="close"></div>
  </div>
  <!-- floatlayer end -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>