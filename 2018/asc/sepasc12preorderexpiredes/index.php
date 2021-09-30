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

$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);

$params=json_decode(base64_decode($_GET['data']));
$reg=empty($params->reg)?1113:$params->reg;
$junk=round((empty($params->junk)?9762:(($params->junk)/1024)),2);
$startUp=empty($params->startup)?19:$params->startup;
$internet=empty($params->internet)?21:$params->internet;
$privacy=empty($params->privacy)?2014:$params->privacy;
$ad=empty($params->ad)?0:$params->ad;
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>0€ para renovar el nuevo Advanced SystemCare 12 PRO</title>
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
        <h1>¡Bienvenido de vuelta & Disfruta de 0€ prevenda mundial!</h1>
        <h3>¡Rápido! 500 cantidades limitadas disponibles, <span class="soldNum">453</span> se han vendido ahora </h3>
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
                 href="https://www.iobit.com/buy.php?product=es-asc12preorder30&ref=es_asc12preorderexpired<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=es_purchase_asc "
                 onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc12predorderexpired-es');"
                 data-text="Ordenar ahora">
                <span>Ordenar ahora</span>
              </a>
              <h5>1 año de suscripción / 3 PCs</h5>
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

    <!-- intro-part01 start -->
    <div class="intro intro-part01">
      <div class="wrapper">
        <h3>Vamos a una breve retrospectiva:</h3>
        <h2>¿Cómo está tu computadora con Advanced SystemCare 11 PRO?</h2>
        <div class="event">
          <!-- bight -->
          <div class="bight"></div>
          <!-- optimized for faster PC -->
          <dl class="optimized clearfix">
            <dd class="fr">
              <p>
                <strong class="startupNum"><?php echo $startUp;?></strong> elementos de inicio y
                <strong class="browserNum"><?php echo $internet;?></strong><br> configuraciones del navegador<br>
                optimizados para PC más rápido.
              </P>
              <span></span>
            </dd>
            <dt class="fr"><img src="<?php echo $pResUrl;?>images/intro-icon01.png" alt=""></dt>
          </dl>
          <!-- during online surfing  -->
          <dl class="online clearfix">
            <dd>
              <p>
                <strong class="personalNum"><?php echo $privacy;?></strong> rastros personales y<br>
                <strong class="popupNum"><?php echo $ad;?></strong> anuncios eliminados<br>
                durante la navegación en línea.
              </P>
              <span></span>
            </dd>
            <dt class="fr"><img src="<?php echo $pResUrl;?>images/intro-icon02.png" alt=""></dt>
          </dl>
          <!-- to free up disk  -->
          <dl class="disk">
            <dd>
              <p>
                <strong class="bytesNum"><?php echo $junk;?></strong> MB archivos basura y<br>
                <strong class="regNum"><?php echo $reg;?></strong> registros eliminados para<br>
                liberar espacio en el disco.
              </P>
              <span></span>
            </dd>
            <dt><img src="<?php echo $pResUrl;?>images/intro-icon03.png" alt=""></dt>
          </dl>
          <!-- Better PC Performance -->
          <p class="better">Mejor rendimiento de PC</p>
        </div>
      </div>
    </div>
    <!-- intro-part01 end -->

    <!-- intro-part02 start -->
    <div class="intro intro-part02">
      <div class="wrapper clearfix">
        <h3>De ahora en adelante:</h3>
        <h2>1 Encuentras funciones sólo disponibles en nuevo Advanced SystemCare 12 PRO</h2>
        <img class="intro-pc fl" src="<?php echo $pResUrl;?>images/intro-pc.jpg" alt="">
        <div class="right-message fr">
          <!-- Privacy Shield -->
          <dl>
            <dt><img src="<?php echo $pResUrl;?>images/intro-icon04.png" alt=""></dt>
            <dd>
              <h4>Protector de privacidad <span>exclusivo</span></h4>
              <p>Los datos sensibles no se revelan para los programas no confiables.</p>
            </dd>
          </dl>
          <!-- Digital Fingerprint Protection -->
          <dl>
            <dt><img src="<?php echo $pResUrl;?>images/intro-icon05.png" alt=""></dt>
            <dd>
              <h4>Protectcción de huella digital <span>exclusivo</span></h4>
              <p>Ningún hacker puede rastrear e invadir tu información.</p>
            </dd>
          </dl>
          <!-- Unfinished Downloads File Cleaning -->
          <dl>
            <dt><img src="<?php echo $pResUrl;?>images/intro-icon06.png" alt=""></dt>
            <dd>
              <h4>Limpieza de archivo inacabado de descargas <span>exclusivo</span></h4>
              <p>Elimina rápidamente los archivos inacabados de descargas para<br> liberar espacio del disco. </p>
            </dd>
          </dl>
        </div>
      </div>
    </div>
    <!-- intro-part02 end -->

    <!-- intro-part03 start -->
    <div class="intro intro-part03">
      <div class="wrapper clearfix">
        <h2>2 Disfruta de mejoras importantes en comparación con Advanced SystemCare 11 PRO</h2>
        <!-- Cleaner -->
        <dl class="cleaner fl">
          <dt>
            <h4>Más limpio</h4>
            <img src="<?php echo $pResUrl;?>images/intro-cleaner.png" alt="">
          </dt>
          <dd>
            <img src="<?php echo $pResUrl;?>images/intro-more30.png" alt="">
            <p>espacio de disco libre</p>
          </dd>
        </dl>
        <!-- Faster -->
        <dl class="faster fl">
          <dt>
            <h4>Más rápido</h4>
            <img src="<?php echo $pResUrl;?>images/intro-faster.png" alt="">
          </dt>
          <dd>
            <img src="<?php echo $pResUrl;?>images/intro-faster20.png" alt="">
            <p> inicio de PC </p>
          </dd>
        </dl>
        <!-- Safer -->
        <dl class="safer fl">
          <dt>
            <h4>Más seguro</h4>
            <img src="<?php echo $pResUrl;?>images/intro-safer.png" alt="">
          </dt>
          <dd>
            <img src="<?php echo $pResUrl;?>images/intro-more40.png" alt="">
            <p>eliminación de anuncios</p>
          </dd>
        </dl>
      </div>
    </div>
    <!-- intro-part03 end -->

    <!-- centbuy start -->
    <div class="centbuy">
      <div class="wrapper">
        <h2>¡<b>0€</b><span>para renovar a PRO y disfrutar de todas estas funciones emocionantes!</span></h2>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=es-asc12preorder30&ref=es_asc12preorderexpired<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=es_purchase_asc "
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc12predorderexpired-es');"
           data-text="Ordenar ahora">
          <span>Ordenar ahora</span>
        </a>
        <p class="price">1 año de suscripción / 3 PCs</p>
      </div>
    </div>
    <!-- centbuy end -->

    <!-- intro-part04 start -->
    <div class="intro-part04">
      <div class="wrapper">
        <h3>
          Sin la edición PRO ahora,<br>
          ¿estás sufriendo los siguientes problemas?
        </h3>
        <div class="intro-top clearfix">
          <!-- slow computer -->
          <dl class="fl clearfix">
            <dd class="fl">
              <strong>La computadora lenta </strong>tarda demasiado <br>
              tiempo en responder y cargar páginas web
            </dd>
            <dt class="fr"><img src="<?php echo $pResUrl;?>images/intro-icon08.png" alt=""></dt>
          </dl>
          <!-- system freezes or crashes -->
          <dl class="fr clearfix">
            <dt class="fl"><img src="<?php echo $pResUrl;?>images/intro-icon09.png" alt=""></dt>
            <dd class="fl">
               Surgen <strong>fallos o bloqueos repentinos </strong><br>
              <strong>del sistema</strong> ocasionalmente
            </dd>
          </dl>
        </div>
        <div class="intro-bottom clearfix">
          <!-- cluttering up -->
          <dl class="fl clearfix">
            <dd class="fl">
              Archivos inútiles y sin importancia<br>
              <strong>desordenan </strong>tu disco duro
            </dd>
            <dt class="fr"><img src="<?php echo $pResUrl;?>images/intro-icon10.png" alt=""></dt>
          </dl>
          <!-- annoying ads -->
          <dl class="fr clearfix">
            <dt class="fl"><img src="<?php echo $pResUrl;?>images/intro-icon11.png" alt=""></dt>
            <dd class="fr">
              <strong>Anuncios molestos</strong> aparecen cada vez <br>
              que navegas en línea
            </dd>
          </dl>
        </div>
        <h2>Es hora de actualizar a Advanced SystemCare 12 PRO con <b>$0</b></h2>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=es-asc12preorder30&ref=es_asc12preorderexpired<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=es_purchase_asc "
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc12predorderexpired-es');"
           data-text="Ordenar ahora">
          <span>Ordenar ahora</span>
        </a>
        <p class="price">1 año de suscripción / 3 Pcs</p>
      </div>
    </div>
    <!-- intro-part04 end -->

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
           href="https://www.iobit.com/buy.php?product=es-asc12preorder30&ref=es_asc12preorderexpired<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=es_purchase_asc "
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc12predorderexpired-es');"
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
    var imgUrl = "<?php echo getStaticUrl('images/asc-off-box.png')?>";
    var _ga = "ga('send', 'event', 'ascbuy', 'buy', 'asc12predorderexpiredpopup-es');";
    var _url = "https://www.iobit.com/buy.php?product=es-asc12preorder1499&ref=es_asc12preorderexpired1499<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=es_purchase_asc ";
  </script>

</body>
</html>