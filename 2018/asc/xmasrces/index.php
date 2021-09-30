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
    $packsNum=50;
    setcookie($cName,$packsNum);
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

$viewNum=rand(46,88);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}

$refStr='';
if(in_array($_GET['pop'],array('xr_asc'))){
  $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>-88% para conseguir Advanced SystemCare 12 Pro y regalos gratis sólo para navidad- IObit</title>
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
        <h1>OFERTA ESPECIAL DE NAVIDAD</h1>
        <p class="best">La mejor oportunidad de ahorrar mucho, sólo una vez al año! </p>
        <div class="palen clearfix">
          <div class="left fl">
            <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="Advanced SystemCare 12 Pro"/>
            <div class="hint">
              <dl class="pop-bg">
                <dt>Smart Defrag 6 PRO    <span><b>0€ </b></span></dt>
                <dd>Desfragmentador de disco confiable e inteligente con 7,000,000+ usuarios. </dd>
                <dt>Protected Folder <span><b>0€ </b></span></dt>
                <dd>La herramienta de protección de carpeta fácil de usar y con una contraseña. </dd>
                <dt>AMC Security PRO     <span><b>0€ </b></span></dt>
                <dd>Limpiador y amplificador para dispositivos móviles todo en uno. </dd>
              </dl>
            </div>       
          </div>
          <div class="right fr">
            <h2>Advanced SystemCare 12 Pro</h2>
            <div class="price">
              <div class="count">
                <p class="watching">
                  <span class="surplusGift viewNum"><?php echo $viewNum;?></span> usuarios están viendo,  <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em>paquetes disponibles
                </p>
                <div class="progressbar">
                  <span></span>
                </div>
                <p id="bandown" class="countdown">¡Date prisa! Termina en: <b>05</b>M:<b>00</b>S:<b class="last">00</b>Ms</p>
              </div>
              <p><strong>16<big>,</big></strong> <span>77€ <del>139,92€</del></span></p>
              <a class="buybtn" href="https://www.iobit.com/buy.php?product=es-asc12pfsdamc1677&ref=es_asc123pcpfsdamcpurchase1812rc<?php echo $refStr;?>&refs=es_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc12purchase1812rc-es')">
                 Comprar ahora
              </a>
              <p class="year">1 año de suscripción / 3 PCs </p>
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
        <h2>¡Obtén una herramienta completa de limpieza, optimización y protección a precio asequible!</h2>
        <p class="over">Más de 35,000,000 usuarios en todo el mundo elige Advanced SystemCare Pro como su herramienta de optimización de PC para hacer que su antiguo PC funcione como un nuevo y optimizar nuevo PC más rápido. </p>
        <img class="screen" src="<?php echo getStaticUrl('images/asc-screen.png')?>" alt="Advanced SystemCare 12 Pro"/>
        <div class="clearfix">
          <div class="fl">
            <dl class="clearfix">
              <dt><img src="<?php echo getStaticUrl('images/feature-01.png')?>" alt=""/></dt>
              <dd>
                <h3>Privacidad más segura<b class="sign">Nuevo </b></h3>
                <p>Elimina los rastros de privacidad para evitar que seas rastreado por los hackers y proteger tu dato sensible contra cualquier acceso secreto. 
                </p>
              </dd>
            </dl>
            <dl class="clearfix">
              <dt><img src="<?php echo getStaticUrl('images/feature-02.png')?>" alt=""/></dt>
              <dd>
                <h3>Internet 300% * más rápido<b>Mejorado </b></h3>
                <p>Acerela velocidad de descarga, navegación, juegos en línea y visualización de YouTube hasta 300% más rápida.</p>
              </dd>
            </dl>
          </div>
          <div class="fr">
            <dl class="clearfix">
              <dt><img src="<?php echo getStaticUrl('images/feature-03.png')?>" alt=""/></dt>
              <dd>
                <h3>PC  200%* más rápido <b>Mejorado </b></h3>
                <p>Reduce fallos del sistema y acelera PC hasta 200% más rápido.</p>
              </dd>
            </dl>
            <dl class="clearfix">
              <dt><img src="<?php echo getStaticUrl('images/feature-04.png')?>" alt=""/></dt>
              <dd>
                <h3>Limpieza profunda<b>Mejorado </b></h3>
                <p>Libera RAM automáticamente para mejor rendimiento del PC y repara problemas de registro para sistema estable.</p>
              </dd>
            </dl>
          </div>
        </div>
      </div>
    </div>
    <!-- feature end -->
    <!-- centbuy start -->
    <div class="centbuy">
      <h2>Activa Advanced SystemCare Pro - ¡Última oportunidad para Ahorrar Más en 2018!</h2>
      <div class="wrapper clearfix">
        <div class="fl">
          <img src="<?php echo getStaticUrl('images/asc-small-box.png')?>" alt="Advanced SystemCare 12 Pro"/>
        </div>
        <div class="price fr">
          <div class="count">
            <p class="watching">
              <span class="surplusGift viewNum"><?php echo $viewNum;?></span> usuarios están viendo,  <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> paquetes disponibles 
            </p>
          </div>
          <p><strong>16<big>,</big></strong> <span>77€ <del>139,92€</del></span></p>
          <a class="buybtn" href="https://www.iobit.com/buy.php?product=es-asc12pfsdamc1677&ref=es_asc123pcpfsdamcpurchase1812rc<?php echo $refStr;?>&refs=es_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc12purchase1812rc-es')">
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
        <h2>Ve claramente lo que obtendrás de Pro, si compras ahora:</h2>
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
              <td class="itemb">Elimina automáticamente los rastros de privacidad para navegación segura</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Actualización automática de la última versión</td>
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
        <h2><b>88%</b> de descuento exclusivo para cuidar tu PC para todo el año</h2>
        <div class="price">
          <p><strong>16<big>,</big></strong> <span>77€ <del>139,92€ </del></span></p> 
          <a class="buybtn" href="https://www.iobit.com/buy.php?product=es-asc12pfsdamc1677&ref=es_asc123pcpfsdamcpurchase1812rc<?php echo $refStr;?>&refs=es_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc12purchase1812rc-es')">
            Comprar ahora
          </a>
          <p id="footdown" class="countdown">¡Date prisa! Termina en: <b>05</b>M:<b>00</b>S:<b class="last">00</b>Ms</p>
        </div>
      </div>
    </div>
    <!-- footbuy end -->

    <!-- awards start -->
    <div class="awards wrapper">
      <h2>Recomendado y premiado por estos Medios</h2>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
    </div>
    <!-- awards end -->

    <!-- review start -->
    <div class="review clearfix wrapper">
      <h2>Comentarios</h2>
      <div class="content">
        <dl>
          <dt>"No sólo es un gran producto, pero el soporte es igualmente excelente."</dt>
          <dd>"Al principio me gusta mucho la versión gratis y finalmente compré la versión completa. Es efectivo mantener mi equipo limpio y libre de"bug" durante años y todavía no me ha defraudado. Me puse en contacto con Advanced SystemCare recientemente y me respondieron dentro de uno o dos día con todo lo que necesitaba saber. En mi mente soporte es muy importante en la decisión de usar un producto a largo plazo y ASC cuenta con tanto producto y soporte."</dd>
        </dl>
        <dl>
          <dt>"Advanced SystemCare Pro es el mejor programa que he probado en los últimos años."</dt>
          <dd>"Como la mayoría de gente, no soy un experto en informática. Se me ha olvidado cuantos programas he probado en los últimos años. Todos afirman ser el mejor, pero nunca es similar a protección de Advanced SystemCare Pro que tengo ahora. Desde que tuve este excelente programa no he tenido que llamar a soporte técnico ni siquiera una vez. ¡Ha superado mis expectaciones, siempre actualizado, y el aspecto es bastante moderno! Muchas gracias a todos por hacer mi vida más fácil."</dd>
        </dl>
        <dl class="active">
          <dt>"El programa ideal para reparar y limpiar su Windows."</dt>
          <dd>"Advanced SystemCare Pro incluye una nueva tecnología de protección para mejorar la seguridad al navegar por Internet, una instalación más sencilla y un nuevo motor para desfragmentar discos duros a una mayor velocidad."</dd>
        </dl>
        <dl>
          <dt>"Le recomiendo mucho que compre este programa. No es caro y lo que va a hacer para su ordenador es totalmente impresionante."</dt>
          <dd>"Este programa es el mejor que he utilizado. Mi ordenador está ejecutando mucho más rápido y mucho mejor ahora desde que he descargado ASC. El programa ha limpiado archivos innecesarios y duplicados, carpetas vacías y yo lo he utilizado para destruir archivos. También limpió y desfragmentó el registro y todos los archivos en mi PC. Le recomiendo que compre este programa. No es caro y lo que va a hacer para su ordenador es totalmente impresionante. Le encantará, prometo."</dd>
        </dl>
        <dl>
          <dt>"Es uno de los mejores programas para cuidar la computadora"</dt>
          <dd>"Mi computadora se hizo más rapida por la limpieza de Ram, me ha prevenido de muchos problemas tanto en su versión gratitua como en su versión paga. Si no fuera por el Systemcare talvez hubiera formateado mi computadora así que estoy completamente agradecido con el Systemcare y los programas de Iobit. "</dd>
        </dl>
      </div>
      <ul class="users">
        <li><img alt="" src="<?php echo $pResUrl; ?>images/bruce-ramsay.png">Bruce Ramsay</li>
        <li><img alt="" src="<?php echo $pResUrl; ?>images/hank-ewert.png">Hank Ewert </li>
        <li class="active"><img alt="" src="<?php echo $pResUrl; ?>images/media.png">Softonic</li>
        <li><img alt="" src="<?php echo $pResUrl; ?>images/loretta-harnarine.png">Loretta Harnarine  </li>
        <li><img alt="" src="<?php echo $pResUrl; ?>images/jorge-esteban-jaramillo-perez.png">Jorge Esteban Jaramillo Perez </li>
      </ul>
      <div class="line"></div>  
    </div>
    <!-- review end -->

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
    var _href = "https://www.iobit.com/buy.php?product=es-asc12pfsdamc1577&ref=es_asc123pcpfsdamcpurchase1812poprc<?php echo $refStr;?>&refs=es_purchase_asc";
    var _ga = "ga('send', 'event', 'ascbuy', 'buy', 'asc12poppurchase1812rc-es')";
    var viewNum = "<?php echo $viewNum;?>";
  </script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>

</body>
</html>