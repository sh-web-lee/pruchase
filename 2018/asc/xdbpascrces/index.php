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
    $packsNum=80;
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
if(in_array($_GET['pop'],array('xr_dbpasc'))){
  $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Hasta 60% en Advanced SystemCare 12 PRO. Oferta especial de Navidad – IObit</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
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
        <h1>OFERTA ESPECIAL DE NAVIDAD</h1>
        <p class="best">La mejor oportunidad de ahorrar más, sólo una vez al año!</p>
        <div class="palen clearfix">
          <div class="left fl">
            <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="Advanced SystemCare 12 Pro"/>
          </div>
          <div class="right fr">
            <h2>Advanced SystemCare 12 Pro</h2>
            <div class="price">
              <div class="count">
                <p class="watching">
                  ¡<span class="surplusGift viewNum"><?php echo $viewNum;?></span> usuarios están viendo,  <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em>paquetes disponibles!
                </p>
                <div class="progressbar">
                  <span></span>
                </div>
                <p id="bandown" class="countdown">¡Date prisa! Termina en: <b>05</b>M:<b>00</b>S:<b class="last">00</b>Ms*verbleibend</p>
              </div>
              <p><strong>19<big>,</big></strong> <span>99€ <del>49,99€</del></span></p>
              <a class="buybtn" href="https://www.iobit.com/buy.php?product=es-asc123pc1999&ref=es_asc123pcdbpascpurchase1812rc<?php echo $refStr;?>&refs=es_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc12dbpascpurchase1812rc-es')">
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
        <h2>¿Qué te beneficiará de Advanced SystemCare 12 Pro?</h2>
        <p class="over">
          Más de 35,000,000 usuarios en todo el mundo elige Advanced SystemCare Pro como su herramienta de optimización de PC para hacer que su antiguo PC funcione como un nuevo y optimizar nuevo PC más rápido.
        </p>
        <img class="screen" src="<?php echo getStaticUrl('images/asc-screen.png')?>" alt="Advanced SystemCare 12 Pro"/>
        <div class="clearfix">
            <dl class="clearfix fl">
              <dt><img src="<?php echo getStaticUrl('images/feature-01.png')?>" alt=""/></dt>
              <dd>
                <h3>Privacidad más segura <b class="sign">Nuevo</b></h3>
                <p>Elimina los rastros de privacidad para evitar que seas rastreado por los hackers y proteger tu dato sensible contra cualquier acceso secreto.</p>
              </dd>
            </dl>
            <dl class="clearfix fr">
              <dt><img src="<?php echo getStaticUrl('images/feature-03.png')?>" alt=""/></dt>
              <dd>
                <h3>PC 200%* más rápido <b>Mejorado</b></h3>
                <p>Reduce fallos del sistema y acelera PC hasta 200% más rápido.</p>
              </dd>
            </dl>
            <div class="clearfix"></div>
            <dl class="clearfix fr">
              <dt><img src="<?php echo getStaticUrl('images/feature-04.png')?>" alt=""/></dt>
              <dd>
                <h3>Internet 300% * más rápido<b>Mejorado</b></h3>
                <p>Acerela velocidad de descarga, navegación, juegos en línea y visualización de YouTube hasta 300% más rápida.</p>
              </dd>
            </dl>
            <dl class="clearfix fl">
              <dt><img src="<?php echo getStaticUrl('images/feature-02.png')?>" alt=""/></dt>
              <dd>
                <h3>Limpieza profunda<b>Mejorado</b></h3>
                <p>Libera RAM automáticamente para mejor rendimiento del PC y repara problemas de registro para sistema estable.</p>
              </dd>
            </dl>
        </div>
      </div>
    </div>
    <!-- feature end -->
    <!-- together start -->
    <div class="together">
      <div class="wrapper">
        <h2>
          ¡Junto con Driver Booster Pro, disfrutarás de la mejor experiencia de juego y del mejor rendimiento de tu PC!
        </h2>
        <div class="panel clearfix">
          <div class="asc-box fl clearfix">
            <div class="box fl">
              <h3>MEJOR EXPERINCIA DE JUEGO<i></i></h3>
              <dl>
                <dt><strong>Juego más rápido</strong></dt>
                <dd>
                  Limpia automáticamente RAM y detiene procesos inútiles.
                  <span>*Sólo disponible en Advanced SystemCare pro</span>
                </dd>
              </dl>
              <dl>
                <dt><strong>Juego más fluido</strong></dt>
                <dd>
                  Drivers de Game Ready y componentes disponibles para mejorar la experiencia de juego.
                  <span>*Sólodisponible enDriver Booster Pro</span>
                </dd>
              </dl>
            </div>
            <div class="imgbox fr"><img src="<?php echo getStaticUrl('images/left-part.png')?>" alt=""/></div>
          </div>
          <div class="db-box fl clearfix">
            <div class="imgbox fl"><img src="<?php echo getStaticUrl('images/right-part.png')?>" alt=""/></div>
            <div class="box fl">
              <h3><i></i>MEJOR RENDIMIENTO DE PC</h3>
              <dl>
                <dt><strong>PC más limpio y rápido</strong></dt>
                <dd>Limpia automáticamente archivos basura y optimiza registros para acelerar la velocidad de PC.
                  <span>*Sólo disponible en Advanced SystemCare pro</span>
                </dd>
              </dl>
              <dl>
                <dt><strong>PC más estable</strong></dt>
                <dd>Actualización de los drivers obsoletos, faltantes, defectuosos o raros de PC.
                  <span>*Sólodisponible en Driver Booster Pro</span>
                </dd>
              </dl>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- together end -->
    <!-- centbuy start -->
    <div class="centbuy">
      <h2>Activa Advanced SystemCare Pro-El mejor precio del año!</h2>
      <div class="wrapper clearfix">
        <div class="fl">
          <img src="<?php echo getStaticUrl('images/asc-small-box.png')?>" alt="Advanced SystemCare 12 Pro"/>
        </div>
        <div class="price fr">
          <div class="count">
            <p class="watching">
              ¡<span class="surplusGift viewNum"><?php echo $viewNum;?></span> usuarios están viendo, <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> paquetes disponibles!
            </p>
          </div>
          <p><strong>19<big>,</big></strong> <span>99€ <del>49,99€</del></span></p>
          <a class="buybtn" href="https://www.iobit.com/buy.php?product=es-asc123pc1999&ref=es_asc123pcdbpascpurchase1812rc<?php echo $refStr;?>&refs=es_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc12dbpascpurchase1812rc-es')">
            Comprar ahora
          </a>
          <p class="year">1 año de suscripción / 3 PCs</p>
        </div>
      </div>
    </div>
    <!-- centbuy end -->

    <!-- comparison start -->
    <div class="comparison" id="compare">
      <div class="wrapper">
        <h2>Ver la comparación entre FREE y PRO</h2>
        <table border="0" cellspacing="0" cellpadding="0" width="100%">
          <thead>
            <tr>
              <th class="itema">Advanced SystemCare<br>FREE</th>
              <th class="itemb"><img src="<?php echo getStaticUrl('images/vs.png')?>"></th>
              <th class="itemc"><span>Advanced SystemCare<b>PRO</b></span></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="itema"><i class="all-icons free">√</i></td>
              <td class="itemb">Limpieza, reparación y optimización basica</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Bloquea el acceso no autorizado a tus archivos privados</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Previene spyware y malware en tiempo real</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Reduce y repara fallos y errores del sistema.</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Acelera computadora hasta 200% más rápida</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Acelera Internet hasta 300% más rápido</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Mantiene automáticamente programas esenciales actualizados</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Elimina automáticamente los rastros de privacidad para navegac</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Actualización automática a la última versión</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema last"></td>
              <td class="itemb"></td>
              <td class="itemc last"></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <!-- comparison end -->

    <!-- footbuy start -->
    <div class="footbuy">
      <div class="wrapper">
        <h3>¡No te pierdas!</h3>
        <h2>¡<b>60%</b> de descuento exclusivo para obtener un PC más limpio, rápido y seguro!</h2>
        <div class="price">
          <p><strong>19<big>,</big></strong> <span>99€<del>49,99€ </del></span></p> 
          <a class="buybtn" href="https://www.iobit.com/buy.php?product=es-asc123pc1999&ref=es_asc123pcdbpascpurchase1812rc<?php echo $refStr;?>&refs=es_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc12dbpascpurchase1812rc-es')">
            Comprar ahora
          </a>
          <p id="footdown" class="countdown">¡Date prisa! Termina en:<b>05</b>M:<b>00</b>S:<b class="last">00</b>Ms*verbleibend</p>
        </div>
      </div>
    </div>
    <!-- footbuy end -->
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
              <p>"Advanced SystemCare Pro incluye una nueva tecnología de protección para mejorar la seguridad al navegar por Internet, una instalación más sencilla y un nuevo motor para desfragmentar discos duros a una mayor velocidad."</p>
              <cite>Softonic</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/hank-ewert.png')?>" alt="Hank Ewert"></dt>
            <dd>
              <h2>Comentarios del usuario</h2>
              <p>"Como la mayoría de gente, no soy un experto en informática. Se me ha olvidado cuantos programas he probado en los últimos años. Todos afirman ser el mejor, pero nunca es similar a protección de Advanced SystemCare Pro que tengo ahora. Desde que tuve este excelente programa no he tenido que llamar a soporte técnico ni siquiera una vez. ¡Ha superado mis expectaciones, siempre actualizado, y el aspecto es bastante moderno! Muchas gracias a todos por hacer mi vida más fácil."</p>
              <cite>Hank Ewert</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/bruce-ramsay.png')?>" alt="Bruce Ramsay"></dt>
            <dd>
              <h2>Comentarios del usuario</h2>
              <p>"Al principio me gusta mucho la versión gratis y finalmente compré la versión completa. Es efectivo mantener mi equipo limpio y libre de"bug" durante años y todavía no me ha defraudado. Me puse en contacto con Advanced SystemCare recientemente y me respondieron dentro de uno o dos día con todo lo que necesitaba saber. En mi mente soporte es muy importante en la decisión de usar un producto a largo plazo y ASC cuenta con tanto producto y soporte."</p>
              <cite>Bruce Ramsay</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/loretta-harnarine.png')?>" alt="Loretta Harnarine"></dt>
            <dd>
              <h2>Comentarios del usuario</h2>
              <p>"Este programa es el mejor que he utilizado. Mi ordenador está ejecutando mucho más rápido y mucho mejor ahora desde que he descargado ASC. El programa ha limpiado archivos innecesarios y duplicados, carpetas vacías y yo lo he utilizado para destruir archivos. También limpió y desfragmentó el registro y todos los archivos en mi PC. Le recomiendo que compre este programa. No es caro y lo que va a hacer para su ordenador es totalmente impresionante. Le encantará, prometo."</p>
              <cite>Loretta Harnarine</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/jorge-esteban-jaramillo-perez.png')?>" alt="Jorge Esteban Jaramillo Perez"></dt>
            <dd>
              <h2>Comentarios del usuario</h2>
              <p>"Mi computadora se hizo más rapida por la limpieza de Ram, me ha prevenido de muchos problemas tanto en su versión gratitua como en su versión paga. Si no fuera por el Systemcare talvez hubiera formateado mi computadora así que estoy completamente agradecido con el Systemcare y los programas de Iobit. "</p>
              <cite>Jorge Esteban Jaramillo Perez</cite>
            </dd>
          </dl>
        </div>
      </div>
    </div>
    <!-- review end -->

    <!-- awards start -->
    <div class="awards wrapper">
      <h2>Recomendado y premiado por estos Medios</h2>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
    </div>
    <!-- awards end -->

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
    var _href = "https://www.iobit.com/buy.php?product=es-asc123pc2199&ref=es_asc123pcdbpascpurchase1812poprc<?php echo $refStr;?>&refs=es_purchase_asc";
    var _ga = "ga('send', 'event', 'ascbuy', 'buy', ' asc12dbpascpurchase1812poprc-es')";
    var viewNum = "<?php echo $viewNum;?>";
  </script>
  
  <script src="<?php echo getStaticUrl('script/modernizr.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/review-3d-carousel.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>

</body>
</html>