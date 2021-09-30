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
  $cName='frasc'.$date;
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
    $packsNum=50;
    setcookie($cName,$packsNum);
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

$viewNum=rand(60,88);
if($_GET['action']=='getViewNum'){
  $packsNow=intval($_GET['p']);
  $viewNum=rand($packsNow+1,$packsNow+20);
  echo $viewNum;
  exit();
}

$refStr='';
if(in_array($_GET['pop'],array('x_ascdb','x_dbasc','xr_ascdb'))){
  $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Consigue Advanced SystemCare 12 Pro y Driver Booster 6 PRO con 75% de descuento sólo para oferta especial de Navidad – IObit</title>
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
        <p class="best">La mejor oportunidad de ahorrar mucho, sólo una vez al año!</p>
        <div class="palen clearfix">
          <div class="left fl">
            <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="Advanced SystemCare 12 Pro"/>
          </div>
          <div class="right fr">
            <h2>Driver Booster 6 PRO & Advanced SystemCare 12 PRO</h2>
            <div class="price">
              <div class="count">
                <p class="watching">
                  <span class="surplusGift viewNum"><?php echo $viewNum;?></span> usarios están viendo,&nbsp;&nbsp;<em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em>paquetes disponibles!
                </p>
                <div class="progressbar">
                  <span></span>
                </div>
                <p id="bandown" class="countdown">¡Date prisa! Termina en: <b>05</b>M:<b>00</b>S:<b class="last">00</b>Ms</p>
              </div>
              <p><strong>29<big>,</big></strong> <span><del>124,84€</del>99€ </span></p>
              <a class="buybtn" href="https://www.iobit.com/buy.php?product=es-ascdb3pc2999&ref=es_ascdb3pcxascdbpurchase1812rc<?php echo $refStr;?>&refs=es_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascdbpurchase1812rc-es')">
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
        <h2>Doble garantía de IObit: PC más rápido & mejor experiencia de juego</h2>
        <p class="over">Driver Booster 6 PRO junto con la utilidad de optimización de líder mundial– Advanced SystemCare 12 PRO, hace que tu computadora y los juegos de PC funcionen bien.</p>
      </div>
    </div>
    <!-- feature end -->
    <!-- together start -->
    <div class="together">
      <div class="wrapper">
        <div class="panel clearfix">
          <div class="asc-box fl clearfix on">
            <div class="box fl">
              <h3>Advanced SystemCare 12 PRO<i></i></h3>
              <dl>
                <dt><strong>Un sistema mucho más estable</strong></dt>
                <dd>que no hay registros inútiles acumulando en tu disco.</dd>
              </dl>
              <dl>
                <dt><strong>Rendimiento de juego más rápido</strong></dt>
                <dd>ya que los procesos innecesarios se detuvieron automáticamente para limpiar la RAM.</dd>
              </dl>
              <dl>
                <dt><strong>Respuesta más rápida de PC </strong></dt>
                <dd>se debe a un 300% más rápido de conexión a Internet y un 200% más rápido al inicio.</dd>
              </dl>
            </div>
            <div class="imgbox fr"><img src="<?php echo getStaticUrl('images/left-part.png')?>" alt=""/></div>
          </div>
          <div class="db-box fl clearfix on">
            <div class="imgbox fl"><img src="<?php echo getStaticUrl('images/right-part.png')?>" alt=""/></div>
            <div class="box fl">
              <h3><i></i>Driver Booster 6 PRO</h3>
              <dl>
                <dt><strong>Carga de juego más fluida </strong></dt>
                <dd>equipada con componentes de juego necesarios y actualizados .</dd>
              </dl>
              <dl>
                <dt><strong>Mejor rendimiento de PC</strong></dt>
                <dd>a través de 3.000.000+ controladores que se pueden mantener actualizados.
                </dd>
              </dl>
              <dl>
                <dt><strong>Mejor experiencia de juego</strong></dt>
                <dd>con los controladores de Game Ready y componentes de juego que se mantienen actualizados.</dd>
              </dl>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- together end -->
    <!-- features -->
    <div class="features">
      <div class="wrapper">
        <h2>Además, puedes disfrutar de las siguientes funciones increíbles:</h2>
        <ul>
          <li>
            <span><img src="<?php echo getStaticUrl('images/feature-01.png')?>" alt=""/></span>
            <p>Protección de datos personales</p>
          </li>
          <li>
            <span><img src="<?php echo getStaticUrl('images/feature-02.png')?>" alt=""/></span>
            <p>Protección de huella digital</p>
          </li>
          <li>
            <span><img src="<?php echo getStaticUrl('images/feature-03.png')?>" alt=""/></span>
            <p>Actualización automática del controlador</p>
          </li>
          <li>
            <span><img src="<?php echo getStaticUrl('images/feature-04.png')?>" alt=""/></span>
            <p>Reparación de errores de dispositivo</p>
          </li>
        </ul>
      </div>
    </div>
    <!-- end features -->
    <!-- centbuy start -->
    <div class="centbuy">
      <h2>¡No te la pierdas! Obtén estas dos herramientas poderosas para tu PC y juego ahora </h2>
      <div class="wrapper clearfix">
        <div class="fl">
          <img src="<?php echo getStaticUrl('images/asc-small-box.png')?>" alt="Advanced SystemCare 12 Pro"/>
        </div>
        <div class="price fr">
          <div class="count">
            <p class="watching">
              <span class="surplusGift viewNum"><?php echo $viewNum;?></span> usarios están viendo,&nbsp;&nbsp;<em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> paquetes disponibles!
            </p>
          </div>
          <p><strong>29<big>,</big></strong> <span><del>124,84€</del>99€ </span></p>
          <a class="buybtn" href="https://www.iobit.com/buy.php?product=es-ascdb3pc2999&ref=es_ascdb3pcxascdbpurchase1812rc<?php echo $refStr;?>&refs=es_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascdbpurchase1812rc-es')">
            Comprar ahora
          </a>
          <p class="year">1 año de suscripción / 3 PCs</p>
        </div>
      </div>
    </div>
    <!-- centbuy end -->


    <!-- awards start -->
    <div class="awards wrapper">
      <h2>Recomendado y premiado por estos Medios</h2>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
    </div>
    <!-- awards end -->
    <!-- review -->
    <div class="review wrapper">
      <div class="review-box">
        <div class="reviews clearfix">
          <h2>Comentario de usuario</h2>
          <p>"Este es uno de los mejores programas de actualizador de controladores. Microsoft incluso me ha llevado por mala dirección que actualizaciones no funcionarán con mi PC. Este programa sabía qué actualización necesitaba sin conflictos. Funcionó perfectamente. Fácil de usar, informativo y intuitivo. Este se quedará en mi caja de herramienta para siempre... buena herramienta."</p>
        </div>
        <div class="reviews clearfix">
          <h2>Comentario de usuario</h2>
          <p>"Con Driver Booster, puedo encontrar fácilmente los controladores de dispositivos obsoletos y actualizarlos fácilmente. Además, me ayuda a reparar los errores de sonido, los de red y los de dispositivo etc. No lo creo antes de usar, pero después de probarlo me encanta. Mi PC es más rápido, más seguro y más nuevo que hace ocho meses. Muchas gracias, IObit."</p>
        </div>
        <div class="reviews clearfix active">
          <h2>Reseña de los Medios</h2>
          <p>“Driver Booster ofrece múltiples funciones atractivas y precio de licencia es muy asequible. Además, una interfaz personalizable hace un buen trabajo de mostrar la información específica relacionada con hardware.”</p>
        </div>
        <div class="reviews clearfix">
          <h2>Reseña de los Medios</h2>
          <p>"Advanced SystemCare Pro incluye una nueva tecnología de protección para mejorar la seguridad al navegar por Internet, una instalación más sencilla y un nuevo motor para desfragmentar discos duros a una mayor velocidad."</p>
        </div>
        <div class="reviews clearfix">
          <h2>Comentario de usuario</h2>
          <p>"Este programa es el mejor que he utilizado. Mi ordenador está ejecutando mucho más rápido y mucho mejor ahora desde que he descargado ASC. El programa ha limpiado archivos innecesarios y duplicados, carpetas vacías y yo lo he utilizado para destruir archivos. También limpió y desfragmentó el registro y todos los archivos en mi PC. Le recomiendo que compre este programa. No es caro y lo que va a hacer para su ordenador es totalmente impresionante. Le encantará, prometo."</p>
        </div>
        <div class="reviews clearfix">
          <h2>Comentario de usuario</h2>
          <p>"Al principio me gusta mucho la versión gratis y finalmente compré la versión completa. Es efectivo mantener mi equipo limpio y libre de"bug" durante años y todavía no me ha defraudado. Me puse en contacto con Advanced SystemCare recientemente y me respondieron dentro de uno o dos día con todo lo que necesitaba saber. En mi mente soporte es muy importante en la decisión de usar un producto a largo plazo y ASC cuenta con tanto producto y soporte."</p>
        </div>
      </div>

      <ul class="handle clearfix">
        <li>
          <div class="badge"><img src="<?php echo $pResUrl; ?>images/Wayne-Bowler.png" alt="Wayne Bowler"><span></span></div>
          <strong>Wayne Bowler</strong>
        </li>
        <li>
          <div class="badge"><img src="<?php echo $pResUrl; ?>images/Myo-Thuya.png" alt="Myo Thuya"><span></span></div>
          <strong>Myo Thuya</strong>
        </li>
        <li class="active">
          <div class="badge"><img src="<?php echo $pResUrl; ?>images/PCMAG-editchoice.png" alt="PC Magazine"><span></span></div>
          <strong>PC Magazine</strong>
        </li>
        <li>
          <div class="badge"><img src="<?php echo $pResUrl; ?>images/media.png" alt="Softonic"><span></span></div>
          <strong>Softonic</strong>
        </li>
        <li>
          <div class="badge"><img src="<?php echo $pResUrl; ?>images/Loretta-Harnarine.png" alt="Loretta Harnarine"><span></span></div>
          <strong>Loretta Harnarine</strong>
        </li>
        <li class="last">
          <div class="badge"><img src="<?php echo $pResUrl; ?>images/Bruce-Ramsay.png" alt="Bruce Ramsay"><span></span></div>
          <strong>Bruce Ramsay</strong>
        </li>
      </ul>
    </div>
    <!-- end review  -->
    <!-- bottomcart -->
    <div class="btmcart">
      <div class="wrapper">
        <div class="leftpart">
          <img src="<?php echo getStaticUrl('images/btmpacks.png')?>" alt="Advanced SystemCare 12 Pro"/>
        </div>
        <div class="count">
          <p class="watching">
            <span class="surplusGift viewNum"><?php echo $viewNum;?></span> usarios están viendo,&nbsp;&nbsp;<em class="packimg">
              <b id="packbox" class="reduceGift packbox">
                  <b class="list">
                    <strong>0</strong>
                  </b>
                  <b class="list">
                    <strong>0</strong>
                  </b>
              </b></em>paquetes disponibles!
          </p>
          <div class="progressbar">
            <span></span>
          </div>
          <p id="bandown" class="countdown">¡Date prisa! Termina en: <b>05</b>M:<b>00</b>S:<b class="last">00</b>Ms</p>
        </div>
        <div class="price">
          <p><strong>29<big>,</big></strong> <span><del>124,84€</del>99€ </span></p>
          <a class="buybtn" href="https://www.iobit.com/buy.php?product=es-ascdb3pc2999&ref=es_ascdb3pcxascdbpurchase1812rc<?php echo $refStr;?>&refs=es_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascdbpurchase1812rc-es')">
                 Comprar ahora
              </a>
        </div>
      </div>
    </div>
    <!-- end btmcart -->
    <div class="bottom">
      <div class="wrapper">
        <!-- service start -->
        <div class="service clearfix">
          <dl class="fl">
            <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
            <dd>
              <h4>Pruébalo SIN RIESGO: Garantía de Reembolso de 60 días</h4>
              <p>Estamos seguros de que la activación de la edición PRO te ofrece un PC más limpio, rápido y seguro con precio asequible!</p>
            </dd>
          </dl>
          <dl class="fr">
            <dd>
              <h4>Aceptamos varios formas de pago</h4>
            </dd>
            <dt><img src="<?php echo getStaticUrl('images/payments.png')?>" alt=""/></dt>
          </dl>
        </div>
        <!-- service end -->

        <!-- footer start -->
        <div class="footer">
          <dl>
            <dt>Nota:</dt>
            <dd>1*.Estos programas promocionales están sujetos a cambios sin previo aviso, dependiendo de nuestra discreción exclusiva en cualquier momento.</dd>
            <dd>2*.Datos pueden variar basados en diferentes sistemas u ordenadores.</dd>
          </dl>
          <p>Copyright © 2005 - <?php echo date('Y')?> IObit. Todos los derechos reservados</p>
        </div>
        <!-- footer end -->
      </div>
    </div>

    <!-- backtotop start -->
    <div id="backtotop" class="backtotop">top</div>
    <!-- backtotop end -->

  </div>
  <script>
    var refStr = '<?php echo $refStr;?>';
    var imgSrc = "<?php echo getStaticUrl('images/asc-mask-box.png')?>";
    var _href = "https://www.iobit.com/buy.php?product=es-ascdb3pc2899&ref=es_ascdb3pcxascdbpurchase1812poprc<?php echo $refStr;?>&refs=es_purchase_asc";
    var _ga = "ga('send', 'event', 'ascbuy', 'buy', 'ascdbpurchase1812poprc-es')";
    var viewNum = "<?php echo $viewNum;?>";
  </script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>

</body>
</html>