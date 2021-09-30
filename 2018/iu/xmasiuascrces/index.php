<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';

if(!empty($_GET['action'])&&($_GET['action']=='getSales')){
  $date=$_GET['d'];
  $cName='esasc'.$date;
  $cookie=$_COOKIE[$cName];
  if($cookie!==null){
    $packsNum=$_COOKIE[$cName];
    if($packsNum>=0){
      $packsNum--;
      setcookie($cName,$packsNum);
    }else{
      $packsNum=0;
    }
  }else{
    $packsNum=45;
    setcookie($cName,$packsNum);
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

$viewNum=rand(60,88);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}

$refStr='';
if(in_array($_GET['pop'],array('x_iuasc','xr_iuasc'))){
  $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Consigue Advanced SystemCare 12 Pro e IObit Uninstaller Pro con 75% de descuento sólo para oferta especial de Navidad - IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Montserrat:500,600,800'>
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
<div class="main">
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com/es/" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
      </a>
      <h1>OFERTA ESPECIL DE NAVIDAD</h1>
      <p class="best">La mejor oportunidad de ahorrar más, sólo una vez al año!</p>
      <div class="palen clearfix">
        <div class="left fl">
          <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="Advanced SystemCare 12 Pro"/>
        </div>
        <div class="right fr">
          <h2>IObit Uninstaller 8 PRO & Advanced SystemCare 12 PRO</h2>
          <div class="price">
            <div class="count">
              <p class="watching">
                <span class="surplusGift viewNum"><?php echo $viewNum;?></span> están viendo, <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em>paquetes disponibles ahora!
              </p>
              <div class="progressbar">
                <span></span>
              </div>
              <p id="bandown" class="countdown">¡Date prisa! Termina en: <b>05</b>M:<b>00</b>S:<b class="last">000</b>Ms</p>
            </div>
            <p><strong><small></small>19</strong> <span><del>79,98€</del><b>,99€</b> </span></p>
            <!-- buybtn -->
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=es-iuasc123pc1999&ref=es_iuasc123pcpurchase1812rc<?php echo $refStr;?>&refs=es_purchase_iu"
               onclick="ga('send', 'event', 'iubuy', 'buy', 'iuascpurchase1812rc-es')">
              Comprar ahora
            </a>
            <p class="year">1 año de suscripción / 3 PCs</p>
          </div>
        </div>
      </div>
    </div>
    <span class="snow list01"></span>
    <span class="snow snow-clarity  list02"></span>
    <span class="snow snow-smail list03"></span>
    <span class="round  list04"></span>
    <span class="round round-smail list05"></span>
    <span class="round round-clarity list06"></span>
    <span class="round round-large list07"></span>
    <span class="snow snow-clarity  list15"></span>
    <span class="snow snow-smail  list16"></span>
    <span class="snow snow-clarity  list17"></span>
    <span class="snow snow-smail  list18"></span>
    <span class="round round-clarity list23"></span>
    <span class="round round-clarity list24"></span>

    <span class="round round-clarity list08"></span>
    <span class="round round-smail list09"></span>
    <span class="round round-large  list10"></span>
    <span class="round list11"></span>
    <span class="snow snow-clarity list12"></span>
    <span class="snow snow-smail list13"></span>
    <span class="snow list14"></span>
    <span class="snow snow-clarity  list19"></span>
    <span class="snow snow-smail  list20"></span>
    <span class="snow snow-clarity  list21"></span>
    <span class="snow snow-smail  list22"></span>
    <span class="round round-clarity list25"></span>
    <span class="round round-clarity list26"></span>
  </div>
  <!-- banner end -->

  <!-- feature start -->
  <div class="feature">
    <div class="wrapper">
      <h2>Doble garantía de IObit: PC más limpio, rápido y seguro</h2>
      <p class="over">
        IObit Uninstaller 8 PRO junto con la utilidad de optimización de líder mundial– Advanced SystemCare 12 PRO, hace que tu vieja computadora funcione como una nueva otra vez y elimina cualquier rastro de programas obstinados.
      </p>
      <!-- computer -->
      <img class="computer" src="<?php echo $pResUrl;?>images/computer.png" alt="">
      <span class="circle circle-out"></span>
      <span class="circle circle-mid"></span>
      <span class="circle circle-int"></span>
      <!-- Schonere PC -->
      <dl class="schonere clearfix">
        <dd class="fl">
          <h3>PC más limpio</h3>
          <p>
            Limpia profundamente archivos basura y registros para liberar espacio
            <span>*Sólo disponible en Advanced SystemCare PRO</span>
            Remuevelos programas obstinados o adjuntos para ahorrar espacio
            <span>*Sólo disponible en IObit Uninstaller PRO</span>
          </p>
        </dd>
        <dt class="fr"><img src="<?php echo $pResUrl;?>images/feature-icon01.png" alt=""></dt>
      </dl>
      <!-- Sneller Browsen -->
      <dl class="sneller clearfix">
        <dt class="fl"><img src="<?php echo $pResUrl;?>images/feature-icon02.png" alt=""></dt>
        <dd class="fl">
          <h3>Navegación más rápida</h3>
          <p>
            Optimiza la configuración del navegador para acelerar Internet hasta un 300% más rápido
            <span>*Sólo disponible en Advanced SystemCare PRO</span>
            Remueve plugins basados en anuncios que ralentizan el navegador.
            <span>*Sólo disponible en IObit Uninstaller PRO</span>
          </p>
        </dd>
      </dl>
      <!-- Veiligere PC -->
      <dl class="veiligere">
        <dt><img src="<?php echo $pResUrl;?>images/feature-icon03.png" alt=""></dt>
        <dd>
          <h3>PC más limpio</h3>
          <p>
            Protege los datos personales y el rastro en línea seguros contra programas no confiables y malware
            <span>* Sólo disponible en Advanced SystemCare PRO</span>
            Remueve bundleware malicioso y plugins
            <span>* Sólo disponible en IObit Uninstaller PRO</span>
          </p>
        </dd>
      </dl>
    </div>
  </div>
  <!-- feature end -->

  <!-- intro start -->
  <div class="intro">
    <div class="wrapper">
      <div class="arrow"><i></i></div>
      <h2>Además, puedes disfrutar de las siguientes funciones increíbles:</h2>
      <dl>
        <dt><img src="<?php echo $pResUrl;?>images/feature-01.png" alt=""></dt>
        <dd>
          Inicio 200% más <br> rápido
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl;?>images/feature-02.png" alt=""></dt>
        <dd>
          Protección de <br> huella digital
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl;?>images/feature-03.png" alt=""></dt>
        <dd>
          Limpieza automática <br> de RAM
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl;?>images/feature-04.png" alt=""></dt>
        <dd>
          1 clic para actualizar todos los softwares
        </dd>
      </dl>
    </div>
  </div>
  <!-- intro end -->

  <!-- centbuy start -->
  <div class="centbuy">
    <h2>¡No lo dudes! Obtenga estas dos herramientas potentes de optimización de PC ahora</h2>
    <div class="wrapper clearfix">
      <div class="fl">
        <img src="<?php echo getStaticUrl('images/asc-small-box.png')?>" alt="Advanced SystemCare 12 Pro"/>
      </div>
      <div class="price fr">
        <div class="count">
          <p class="watching">
            <span class="surplusGift viewNum"><?php echo $viewNum;?></span> están viendo, <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> paquetes disponibles ahora!
          </p>
        </div>
        <p><strong><small></small>19</strong> <span><del>79,98€</del><b>,99€</b> </span></p>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=es-iuasc123pc1999&ref=es_iuasc123pcpurchase1812rc<?php echo $refStr;?>&refs=es_purchase_iu"
           onclick="ga('send', 'event', 'iubuy', 'buy', 'iuascpurchase1812rc-es')">
          Comprar ahora
        </a>
        <p class="year">1 año de suscripción / 3 PCs</p>
      </div>
    </div>
  </div>
  <!-- centbuy end -->

  <!-- award start -->
  <div class="award wrapper">
    <h2>Recomendado y premiado por estos Medios</h2>
    <img src="<?php echo $pResUrl;?>images/awards.png" alt="">
  </div>
  <!-- award end -->

  <!-- review start -->
  <div class="review">
    <div class="wrapper">
      <div class="content ">
        <!-- 01 -->
        <dl class="active">
          <dt>
            <h3>Comentarios</h3>
          </dt>
          <dd>
           "Como la mayoría de gente, no soy un experto en informática. Se me ha olvidado cuantos programas he probado en los últimos años. Todos afirman ser el mejor, pero nunca es similar a protección de Advanced SystemCare Pro que tengo ahora. Desde que tuve este excelente programa no he tenido que llamar a soporte técnico ni siquiera una vez. ¡Ha superado mis expectaciones, siempre actualizado, y el aspecto es bastante moderno! Muchas gracias a todos por hacer mi vida más fácil."
          </dd>
        </dl>
        <!-- 02 -->
        <dl>
          <dt>
            <h3>Comentarios</h3></dt>
          <dd>
            "Como un técnico de reparación de computadoras, encuentro que mediante la descarga y el escaneo con ASC gratis se pueden solucionar problemas más comunes. Cuando terminó la reparación de PC, en general recomiendo al cliente que compren la versión Pro. ¿Quién necesita un técnico cuando tiene Advanced SystemCare Pro que trabaja para su sistema 24-7? Es el mejor producto para usuarios doméstico. Muchas gracias por hacer mi trabajo más fácil."
          </dd>
        </dl>
        <!-- 03 -->
        <dl>
          <dt>
            <h3>Comentarios</h3></dt>
          <dd>
            "Advanced SystemCare Pro incluye una nueva tecnología de protección para mejorar la seguridad al navegar por Internet, una instalación más sencilla y un nuevo motor para desfragmentar discos duros a una mayor velocidad."
          </dd>
        </dl>
        <!-- 04 -->
        <dl>
          <dt>
            <h3>Comentarios</h3></dt>
          <dd>
            "Si necesita una aplicación para que desinstale fácilmente aplicaciones limpiamente y completamente, IObit Uninstaller es la mejor opción. La utilidad, compatible con Windows 10, elimina fácilmente aplicaciones, incluyendo los archivos quedados frecuentemente cuando un programa es eliminado desde PC y barras de herramientas y plugins molestos de navegador. En resumen, si usa un PC de Windows, debería descargar IObit Uninstaller."
          </dd>
        </dl>
        <!-- 05 -->
        <dl>
          <dt>
            <h3>Comentarios</h3></dt>
          <dd>
            "IObit Uninstaller PRO es uno de los cinco productos de "mantenimiento" de IObit que he invertido para mi PC como los cocineros invierten en sus cuchillos. IObit Uninstaller es genial para encontrar los restos de bits y bytes que permanecen ocultamente en su PC, tomando espacio en disco y afectando el registro. Si uso el programa de desinstalación básica para desinstalar, lo funcionó. Pero Uninstaller Pro encontró 35 archivos que necesitaron ser limpiados. Todo lo que necesito es hacer clic en "OK". Lo recomendé encarecidamente e incluso conseguí una licencia para 3 PCs. El servicio al cliente es atento y eficiente."
          </dd>
        </dl>
        <!-- 06 -->
        <dl>
          <dt>
            <h3>Comentarios</h3></dt>
          <dd>
            "IObit Uninstaller es uno de los mejores programas con su uso. Es fácil de utilizar y limpieza profunda. Despúes de versión 5 tiene más funciones de utilizar no solo con Windows 10. La limpieza de los plugins también es útil extremadamente. Búsqueda para programas duplicados no utilizados es perfecta. "
          </dd>
        </dl>
      </div>
      <ul class="users clearfix lato">
        <!-- hank-ewert -->
        <li class="current">
            <div class="pic"><img src="<?php echo $pResUrl; ?>images/hank-ewert.png" alt="Hank Ewert"></div>
            <p>Hank Ewert</p>
          </a>
        </li>
        <!-- 02 -->
        <li>
          <div class="pic"><img src="<?php echo $pResUrl; ?>images/charles-r-widick.png" alt="Charles R. Widick"></div>
          <p>Charles R. Widick</p>
        </li>
        <!-- 03 -->
        <li>
          <div class="pic"><img src="<?php echo $pResUrl; ?>images/media.png" alt="Softonic"></div>
          <p>Softonic</p>
        </li>
        <!-- 04 -->
        <li>
          <div class="pic"><img src="<?php echo $pResUrl; ?>images/pc-magazine.png" alt="PC.MAGAZINE">
          </div>
          <p>PC.MAGAZINE</p>
        </li>
        <!-- 05 -->
        <li>
          <div class="pic"><img src="<?php echo $pResUrl; ?>images/joseph-yu.png" alt="Joseph Yu"></div>
          <p>Joseph Yu</p>
        </li>
        <!-- 06 -->
        <li>
          <div class="pic"><img src="<?php echo $pResUrl; ?>images/ada-gortler.png" alt="Áda Görtler">
          </div>
          <p>Áda Görtler</p>
        </li>
      </ul>
    </div>
  </div>
  <!-- review end -->

  <!-- bottombuy start -->
  <div class="bottombuy">
    <div class="wrapper clearfix">
      <div class="box fl">
        <img src="<?php echo getStaticUrl('images/asc-bottom-box.png')?>" alt="Advanced SystemCare 12 Pro"/>
      </div>
      <div class="count fl">
        <p class="watching">
          <span class="surplusGift viewNum"><?php echo $viewNum;?></span> están viendo, <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> paquetes disponibles ahora!
        </p>
        <div class="progressbar">
          <span></span>
        </div>
        <p id="bandown" class="countdown">¡Date prisa! Termina en: <b>05</b>M:<b>00</b>S:<b class="last">000</b>Ms over</p>
      </div>
      <div class="price fr">
        <p><strong><small></small>19</strong> <span><del>79,98€</del><b>,99€</b> </span></p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=es-iuasc123pc1999&ref=es_iuasc123pcpurchase1812rc<?php echo $refStr;?>&refs=es_purchase_iu"
           onclick="ga('send', 'event', 'iubuy', 'buy', 'iuascpurchase1812rc-es')">
          Comprar ahora
        </a>
      </div>
    </div>
  </div>
  <!-- bottombuy end -->

  <!-- footer start -->
  <div class="footer wrapper">
    <div class="service clearfix">
      <dl class="fl moneyback clearfix">
        <dt class="fl"><img src="<?php echo $pResUrl;?>images/moneyback.png" alt=""></dt>
        <dd class="fl">
          <h3>
            PruébaloSIN RIESGO: <br>Garantía de Reembolso de 60 días
          </h3>
          <p>
            Estamos seguros de que la activación de la edición PRO <br> te ofreceun PCmás limpio, rápido y seguro con precio asequible!
          </p>
        </dd>
      </dl>
      <dl class="fl payments">
        <dd><h3>Aceptamos varios formas de pago</h3></dd>
        <dt><img src="<?php echo $pResUrl;?>images/payments.png" alt=""></dt>
      </dl>
    </div>
    <p class="notes">
      Nota:<br>
      1*.Estos programas promocionales están sujetos a cambios sin previo aviso, dependiendo de nuestra discreción exclusiva en cualquier momento.<br>
      2*.Datos pueden variar basados en diferentes sistemas u ordenadores.
    </p>
    <p class="copyright">Copyright © 2005 - 2018 IObit. Todos los derechos reservados</p>
  </div>
  <!-- footer end -->

  <!-- backtotop start -->
  <div id="backtotop" class="backtotop">top</div>
  <!-- backtotop end -->

</div>
<script>
  var refStr = '<?php echo $refStr;?>';
  var imgSrc = "<?php echo getStaticUrl('images/asc-mask-box.png')?>";
  var _href = "https://www.iobit.com/buy.php?product=es-iuasc123pc1899&ref=es_iuasc123pcpurchase1812poprc<?php echo $refStr;?>&refs=es_purchase_iu";
  var _ga = "ga('send', 'event', 'iubuy', 'buy', 'iuascpurchase1812poprc-es')";
  var viewNum = "<?php echo $viewNum;?>";
</script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>

</body>
</html>