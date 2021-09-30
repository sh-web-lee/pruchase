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
  $cName='ascprepa'.$date;
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
  echo $viewNum;
  exit();
}

$refStr=(empty($_GET['ref'])?'':('-'.$_GET['ref'])).(empty($_GET['st'])?'':('-'.$_GET['st']));
if(in_array($_GET['type'],array('pro','giveawayexp'))){
  $refStr.='-'.$_GET['type'];
}
if(in_array($_GET['to'],array('event1','ascrenew'))){
  $refStr.='-'.$_GET['to'];
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>0€ para ordenar el nuevo Advanced SystemCare PRO</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Lato:400,700'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
  <div class="main">
    <!-- banner start -->
    <div class="banner">
      <div class="wrapper">
        <a class="logo" href="https://www.iobit.com/es/index.php" target="_blank">
          <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
        </a>
        <h1>Preventa mundial comienza</h1>
        <h3>¡Rápido! 500 cantidades limitadas disponibles, <span class="soldNum">453</span> se han vendido ahora</h3>
        <div class="palen clearfix">
          <div class="left fl"><img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="Advanced SystemCare 12 PRO"/></div>
          <div class="right fr">
            <h2>Advanced SystemCare 12 PRO</h2>
            <div class="price">
              <p>
                Ahora: <del>49,99€</del>
                <img src="<?php echo getStaticUrl('images/price.png')?>" alt=""/>
              </p>
              <ul>
                <li>
                  <span class="surplusGift viewNum"><?php echo $viewNum;?></span> viendo, <b class="reduceGift"><span class="packsNum">**</span></b> paquetes quedan ahora!
                </li>
                <li id="bandown" class="countdown">Termina en: <b>05</b>M: <b>00</b>S: <b>00</b>Ms</li>
              </ul>
              <div class="progressbar">
                <span></span>
              </div>
              <a class="buybtn" 
                 href="https://www.iobit.com/buy.php?product=es-asc12preorder30&ref=es_asc12preorderofficial<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=es_purchase_asc"
                 onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc12predorderofficial-es')"
                 data-text="Ordenar ahora">
                <span>Ordenar ahora</span>
              </a>
              <h5>1 año de suscripción / 3 PC</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- banner end -->

    <!-- flow start -->
    <div class="flow wrapper clearfix">
      <p>Si estás satisfecho, después de<br> 30 días, obtendrás 60% de<br> descuento en precio original</p>
      <h2>0€ ordenar hoy</h2>
      <p>Si no estás satisfecho, cancelas<br> el pedido dentro de 30 días sin<br> pagar una tarifa</p>
    </div>
    <!-- flow end -->

    <!-- intro start -->
    <div class="intro wrapper">
      <h2>¿Por qué ordenar Advanced SystemCare 12 PRO por adelantado?</h2>
      <div class="top clearfix">
        <div class="fl">
          <h3> Utiliza nuevas funciones antes que los demás</h3>
          <img src="<?php echo getStaticUrl('images/computer_01.png')?>" alt="Advanced SystemCare 12 PRO"/>
        </div>
        <div class="fr">
          <dl>
            <dt><img src="<?php echo getStaticUrl('images/intro_01.png')?>" alt="Advanced SystemCare 12 PRO"/></dt>
            <dd>
              <h4>Protector de privacidad</h4>
              <h5>Bloquea el acceso secreto a tus archivos y fotos</h5>
              <p>
                Te informará cuando haya accesos secretos a tus archivos y fotografías privados y te permite bloquearlo.
              </p>
              <span>Sólo disponible en versión PRO</span>
            </dd>
          </dl>
          <dl>
            <dt><img src="<?php echo getStaticUrl('images/intro_02.png')?>" alt=""/></dt>
            <dd>
              <h4>Limpieza de huella digital</h4>
              <h5>Nadie puede saber lo que haces en línea </h5>
              <p>
                Evita que los seguidores espían lo que lees, ves y compras por disfrazar tu huella digital.
              </p>
              <span>Sólo disponible en versión PRO</span>
            </dd>
          </dl>
          <dl>
            <dt><img src="<?php echo getStaticUrl('images/intro_03.png')?>" alt=""/></dt>
            <dd>
              <h4>Anti-Criptomoneda Minería</h4>
              <h5>Detiene los bloqueos repentinos, el sobrecalentamiento y<br> el apagado de computadora</h5>
              <p>
                Detiene los sitios web maliciosos que utiliza tu computadora a minerar criptomonedas, lo que puede resultar en fallas del navegador, sobrecalentamiento de computadora y apagado del sistema.
              </p>
            </dd>
          </dl>
        </div>
      </div>
      <div class="bot clearfix">
        <div class="fl">
          <h3>Disfruta de estas mejoras lo antes posible</h3>
          <dl>
            <dt><img src="<?php echo getStaticUrl('images/intro_04.png')?>" alt=""/></dt>
            <dd>
              <h4>Limpieza y optimización </h4>
              <h5>Acelera la computadora lenta hasta<br>un 200%* más rápida</h5>
              <p>
                Limpia todos los archivos inútiles y optimiza<br> CPU y RAM para la velocidad de inicio y<br> sistema hasta 2 veces más rápida.
              </p>
              <span>Sólo disponible en versión PRO</span>
            </dd>
          </dl>
          <dl class="last">
            <dt><img src="<?php echo getStaticUrl('images/intro_05.png')?>" alt=""/></dt>
            <dd>
              <h4>Acelerador de red </h4>
              <h5>Acelera la conexión a Internet hasta<br>un 300%* más rápida</h5>
              <p class="width360">
                Optimiza la configuración del navegador para la velocidad de descarga, navegación de web, juegos en línea y visualización en YouTube hasta 3 veces más rápida.
              </p>
              <span>Sólo disponible en versión PRO</span>
            </dd>
          </dl>
        </div>
        <div class="fr">
          <img src="<?php echo getStaticUrl('images/computer_02.png')?>" alt=""/>
        </div>
      </div>
    </div>
    <!-- intro end -->

    <!-- comparison start -->
    <div class="comparison" id="compare">
      <div class="wrapper">
        <h2>Soluciona problemas frustrantes de tu PC con 1 clic</h2>
        <table border="0" cellspacing="0" cellpadding="0" width="100%">
          <thead>
            <tr>
              <th class="itema"><span class="cry">Problema</span></th>
              <th class="itemb"></th>
              <th class="itemc"><span class="smile">Solución</span></th>
            </tr>
          </thead>
          <tbody>

            <tr class="first">
              <td class="itema">
                <p>Recibirás el mensaje que no tienes suficiente espacio en disco</p>
              </td>
              <td class="itemb"><img src="<?php echo getStaticUrl('images/icons_01.png')?>" alt=""/></td>
              <td class="itemc">
                <p>Escanea automáticamente y elimina archivos basura<br> para liberar espacio en disco</p>
                <b><i class="all-icons">■</i> Sólo disponible en versión PRO</b>
              </td>
            </tr>
            <tr><td class="space"></td></tr>

            <tr>
              <td class="itema">
                <p>El sistema arranca y corre lentamente </p>
              </td>
              <td class="itemb"><img src="<?php echo getStaticUrl('images/icons_02.png')?>" alt=""/></td>
              <td class="itemc">
                <p>Libera automáticamente memoria para acelerar PC hasta un<br> 200% más rápido cuando tu computadora se vuelve lenta</p>
                <b><i class="all-icons">■</i> Sólo disponible en versión PRO</b>
              </td>
            </tr>
            <tr><td class="space"></td></tr>

            <tr>
              <td class="itema">
                <p>Descarga, navegación, juegos en línea y visualización de<br> YouTube lentos </p>
              </td>
              <td class="itemb"><img src="<?php echo getStaticUrl('images/icons_03.png')?>" alt=""/></td>
              <td class="itemc">
                <p>Optimiza las configuraciones del navegador para acelerar<br> la conexión a Internet hasta un 300% más rápida </p>
                <b><i class="all-icons">■</i> Sólo disponible en versión PRO</b>
              </td>
            </tr>
            <tr><td class="space"></td></tr>

            <tr>
              <td class="itema">
                <p>El sistema se bloquea repentinamente cuando<br> navegas por Internet </p>
              </td>
              <td class="itemb"><img src="<?php echo getStaticUrl('images/icons_04.png')?>" alt=""/></td>
              <td class="itemc">
                <p>Limpia y repara registros para mejorar la estabilidad<br> y seguridad del sistema </p>
                <b><i class="all-icons">■</i> Sólo disponible en versión PRO</b>
              </td>
            </tr>
            <tr><td class="space"></td></tr>

            <tr>
              <td class="itema">
                <p>Los anuncios de las cosas que has visto en línea te<br> siguen siguiendo</p>
              </td>
              <td class="itemb"><img src="<?php echo getStaticUrl('images/icons_05.png')?>" alt=""/></td>
              <td class="itemc">
                <p>Bloquea automáticamente y elimina los rastros de tus actividades<br> en línea para evitar que seas rastreado por los hackers</p>
                <b><i class="all-icons">■</i> Sólo disponible en versión PRO</b>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <!-- comparison end -->

    <!-- ad-points start -->
    <div class="ad-points wrapper">
      <h2>Vea lo que hemos hecho para nuestros usuarios</h2>
      <ul class="clearfix">
        <li>
          <div class="imgbox"><img src="<?php echo getStaticUrl('images/ad_01.png')?>" alt=""/></div>
          <p class="light">Solucionamos</p>
          <div class="imgbox num"><img src="<?php echo getStaticUrl('images/ad_num01.png')?>" alt=""/></div>
          <p>problemas de PC por mes</p>
        </li>
        <li>
          <div class="imgbox"><img src="<?php echo getStaticUrl('images/ad_02.png')?>" alt=""/></div>
          <p class="light">Ahorra</p>
          <div class="imgbox num"><img src="<?php echo getStaticUrl('images/ad_num02.png')?>" alt=""/></div>
          <p>horas por mes</p>
        </li>
        <li class="last">
          <div class="imgbox"><img src="<?php echo getStaticUrl('images/ad_03.png')?>" alt=""/></div>
          <p class="light">Ahorra</p>
          <div class="imgbox num"><img src="<?php echo getStaticUrl('images/ad_num03.png')?>" alt=""/></div>
          <p>billones por año</p>
        </li>
      </ul>
    </div>
    <!-- ad-points end -->

    <!-- centbuy start -->
    <div class="centbuy">
      <div class="wrapper">
        <h2>Paga <b>0€</b> ahora para tu PC más rápido, limpio y seguro</h2>
        <a class="buybtn" 
           href="https://www.iobit.com/buy.php?product=es-asc12preorder30&ref=es_asc12preorderofficial<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=es_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc12predorderofficial-es')"
           data-text="Ordenar ahora - 0€">
          <span>Ordenar ahora - 0€</span>
        </a>
        <ul class="price">
          <li><span class="surplusGift viewNum"><?php echo $viewNum;?></span> viendo, <b class="reduceGift"><span class="packsNum">**</span></b> paquetes quedan ahora</li>
        </ul>
      </div>
    </div>
    <!-- centbuy end -->

    <!-- review start -->
    <div class="review wrapper">
      <div id="dg-container" class="dg-container">
        <div class="nav">
          <span class="dg-prev"></span>
          <span class="dg-next"></span>
        </div>
        <div class="content dg-wrapper">
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/softonic.png')?>" alt="Softonic"></dt>
            <dd>
              <h2>Comentarios mediáticos</h2>
              <p>
                “Advanced SystemCare Pro incluye una nueva tecnología de protección para mejorar la seguridad al navegar por Internet, una instalación más sencilla y un nuevo motor para desfragmentar discos duros a una mayor velocidad.”
              </p>
              <cite>Softonic</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/bruce-ramsay.png')?>" alt="Bruce Ramsay"></dt>
            <dd>
              <h2>Comentarios del usuario</h2>
              <p>
                "Con la nueva compra de la versión complete, mi ordenador ha estado libre de “bugs” por años y no me ha dejado solo en ningun momento. Contacte ASC recientemente y respondieron en 1 dia con todo lo que necesitaba saber."
              </p>
              <cite>Bruce Ramsay</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/hank-ewert.png')?>" alt="Hank Ewert"></dt>
            <dd>
              <h2>Comentarios del usuario</h2>
              <p>
                "No soy un expert en ordenadores como mucha gente lo es. No sw cuantos programas he probado durante años, todos diciendo ser los mejores pero nunca llegando cerca a ASC que yo sepa. Desde que tengo este programa no he tenido que llamar a un tecnico. A sobrepasado mis expectativas, siempre actualizado y los graficos son geniales. Muchas gracias a todos los que estan hacienda mi vida mas facil."
              </p>
              <cite>Hank Ewert</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/loretta-harnarine.png')?>" alt="Loretta Harnarine"></dt>
            <dd>
              <h2>Comentarios del usuario</h2>
              <p>
                "Este programa es lo major que he probado. Mi ordenador trabaja mucho major y rapido ahora que he descargado ASC. A limpiado archivos innecesarios y carpetas vacias. A limpiado y desfragmentado los registros en todos los archivos de la PC. Recomiendo ASC, no es caro y lo que hara para tu ordenador sera totalmente incredible. Lo amaras, lo prometo."
              </p>
              <cite>Loretta Harnarine</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/charles-r-widick.png')?>" alt="Charles R. Widick"></dt>
            <dd>
              <h2>Comentarios del usuario</h2>
              <h4>"My choice is still overwhelmingly Advanced SystemCare Pro"</h4>
              <p>
                "Como tecnico de ordenadores, encuentro que al descargar y escanear ASC Gratis, la mayoría de problemas estan resueltos. Cuando acabo una reparación, usualmente sugiero al cliente comprar el paquete PRO. Quien necesita un tecnico cuando tienes el poder de ASC PRO trabajando en tu sistema 24-7? Este es el major product que un usuario puede comprar desde casa. Gracias por hacer mi trabajo más fácil."
              </p>
              <cite>Charles R. Widick</cite>
            </dd>
          </dl>
        </div>
      </div>
    </div>
    <!-- review end -->

    <!-- awards start -->
    <div class="awards">
      <div class="wrapper">
        <h2>Recomendado y premiado por estos Medios</h2>
        <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
      </div>
    </div>
    <!-- awards end -->

    <div class="bottom">
      <div class="wrapper">
        <!-- service start -->
        <div class="service clearfix">
          <dl>
            <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
            <dd>
              <h4>Garandía de reembolso</h4>
              <p>Si no está satisfecho en los primeros 60 días, le devolveremos tu dinero</p>
            </dd>
          </dl>
          <dl>
            <dt><img src="<?php echo getStaticUrl('images/godaddy.png')?>" alt=""/></dt>
            <dd>
              <h4>Pago seguro</h4>
              <p>100% pago seguro para tu pedido</p>
            </dd>
          </dl>
          <dl>
            <dt><img src="<?php echo getStaticUrl('images/car.png')?>" alt=""/></dt>
            <dd>
              <h4>Servicio al cliente</h4>
              <p>24/7 Soporte Técnico gratis</p>
            </dd>
          </dl>
        </div>
        <!-- service end -->

        <!-- footer start -->
        <div class="footer">
          <dl>
            <dd>
              *.Al final del período de prueba gratis de 30 días, tu tarjeta de crédito o cuenta de PayPal se te cobrará 17,99€ automáticamente. ¡Este descuento de 60% del precio original de 49,99€ es sólo para prepedidos!
            </dd>
            <dd>*.Datos pueden variar basados en diferentes sistemas u ordenadores.</dd>
          </dl>
          <p>Copyright © 2005 - <?php echo date('Y')?> IObit. Todos los derechos reservados</p>
        </div>
        <!-- footer end -->
      </div>
    </div>

    <!-- floatlayer start -->
    <div id="floatlayer" class="floatlayer">
      <div class="wrapper clearfix">
        <img class="fl" src="<?php echo getStaticUrl('images/asc-small-box.png')?>" alt="Advanced SystemCare 12 PRO"/>
        <div class="price fl">
          <ul>
            <li>
              <span class="surplusGift viewNum"><?php echo $viewNum;?></span> viendo, <b class="reduceGift"><span class="packsNum">**</span></b> paquetes quedan ahora!
            </li>
            <li id="floatdown" class="countdown">Termina en: <b>05</b>M: <b>00</b>S: <b>00</b>Ms</li>
          </ul>
          <div class="progressbar">
            <span></span>
          </div>
        </div>
        <a class="buybtn fr" 
           href="https://www.iobit.com/buy.php?product=es-asc12preorder30&ref=es_asc12preorderofficial<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=es_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc12predorderofficial-es')"
           data-text="Ordenar ahora - 0€">
          <span>Ordenar ahora - 0€</span>
        </a>
      </div>
    </div>
    <!-- floatlayer end -->
  </div>

  <script src="<?php echo $pRootUrl;?>tpl/js/TweenMax.min.js"></script>
  <script src="<?php echo getStaticUrl('script/modernizr.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/review-3d-carousel.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
  <script>
    refStr="<?php echo $refStr;?>";
    var imgUrl = "<?php echo getStaticUrl('images/asc-off-box.png')?>";
    var onGa = "ga('send', 'event', 'ascbuy', 'buy', 'asc12predorderofficialpop-es')";
    var aff = "<?php echo $_GET['aff'];?>";
  </script>

</body>
</html>