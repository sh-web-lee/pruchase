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
  $cName='esimfpre'.$date;
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

$refStr='';
if(in_array($_GET['pop'],array('xr_imf'))){
  $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title> -88% para conseguir IObit Malware Fighter 6 Pro y regalos gratis sólo para navidad- IObit</title>
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
        <a class="logo" href="https://www.iobit.com/es/index.php" target="_blank">
          <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
        </a>
        <h1>OFERTA ESPECIAL DE NAVIDAD</h1>
        <p class="best">La mejor oportunidad de ahorrar más, sólo una vez al año!</p>
        <div class="palen clearfix">
          <div class="left fl">
            <img src="<?php echo getStaticUrl('images/imf-box.png')?>" alt="IObit Malware Fighter PRO"/>
          </div>
          <div class="right fr">
            <h2>IObit Malware Fighter 6 Pro</h2>
            <div class="price">
              <div class="count">
                <p class="watching">
                  <span class="surplusGift viewNum"><?php echo $viewNum;?></span> usuarios están viendo,<em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> paquetes disponibles!
                </p>
                <div class="progressbar">
                  <span></span>
                </div>
                <p id="bandown" class="countdown"> Termina en:  <b>05</b>M:<b>00</b>S:<b class="last">00</b>Ms</p>
              </div>
              <p><strong>17<big>,</big></strong><span>99€ <del>149,88€</del></span></p>
              <a class="buybtn" href="https://www.iobit.com/buy.php?product=es-imf63pcsdpf1799&ref=es_imf63pcsdpfpurchase1812rc<?php echo $refStr;?>&refs=es_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf6purchase1812rc-es')">
                 Comprar ahora
              </a>
              <p class="year"> 1 año de suscripción / 3 PCs</p>
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
        <h2>Obtén la seguridad cibernética completa para mantener alejado de hacking malicioso   </h2>
        <p class="over">
          Más de 5,500,000 usuarios elige IObit Malware Fighter Pro como su seguridad en línea para proteger contra virus, ransomware, spyware, troyanos, adware, fishing y otro malware. 
        </p>
        <img class="screen" src="<?php echo getStaticUrl('images/imf-screen.png')?>" alt="IObit Malware Fighter PRO"/>
        <div class="clearfix">
          <div class="fl">
            <dl class="clearfix">
              <dt><img src="<?php echo getStaticUrl('images/feature-01.png')?>" alt=""/></dt>
              <dd>
                <h3>Protección integral en tiempo real <b class="sign">Mejorado </b></h3>
                <p>
                Doble protección con el motor avanzado de anti-virus de Bitdefender y el de IObit con mayor base de datos. 
                </p>
              </dd>
            </dl>
            <dl class="clearfix">
              <dt><img src="<?php echo getStaticUrl('images/feature-03.png')?>" alt=""/></dt>
              <dd>
                <h3>Protección de disco en tiempo de arranque <b>Nuevo  </b></h3>
                <p>Evita PC contra ataques maliciosos, especialmente los ataques de ransomware durante el proceso de arranque.</p>
              </dd>
            </dl>
          </div>
          <div class="fr">
            <dl class="clearfix">
              <dt><img src="<?php echo getStaticUrl('images/feature-02.png')?>" alt=""/></dt>
              <dd>
                <h3>No ataque de ransomware <b class="sign">Mejorado</b></h3>
                <p>Motor de Anti-ransomware detiene proactivamente cualquier ransomware que intente ingresar en tu PC, como Petya / GoldenEye.</p>
              </dd>
            </dl>
            <dl class="clearfix">
              <dt><img src="<?php echo getStaticUrl('images/feature-04.png')?>" alt=""/></dt>
              <dd>
                <h3>Protección en tiempo real <b class="sign">Mejorado</b></h3>
                <p>Bloquea y elimina automáticamente más de 200 millones de amenazas en tiempo real y limpia datos maliciosos de seguimiento. </p>
              </dd>
            </dl>
          </div>
        </div>
      </div>
    </div>
    <!-- feature end -->
    <!-- donation start -->
    <div class="donation clearfix">
      <h2>Regalos gratis sólo para oferta exclusiva de Navidad</h2>
      <dl class="clearfix">
        <dt><img src="<?php echo getStaticUrl('images/sd-box.png')?>" alt="SD"/></dt>
        <dd>
          <h3> Smart Defrag 6 PRO <strong>0€</strong> </h3>
          <p>Desfragmentador de disco confiable e <br> inteligente con 7,000,000+ usuarios. </p>
        </dd>
      </dl>
      <dl class="clearfix">
        <dt><img src="<?php echo getStaticUrl('images/pf-box.png')?>" alt="Protected Folder"/></dt>
        <dd>
          <h3> Protected Folder <strong>0€</strong></h3>
          <p>La herramienta de protección de carpeta fácil de usar y con una contraseña. </p>
        </dd>
      </dl>
    </div>
    <!-- donation end -->
    <!-- centbuy start -->
    <div class="centbuy">
      <h2>Conoce más sobre Pro para protección en línea más completa, inteligente y rápida </h2>
      <div class="wrapper clearfix">
        <div class="fl">
          <img src="<?php echo getStaticUrl('images/imf-small-box.png')?>" alt="IObit Malware Fighter PRO"/>
        </div>
        <div class="price fr">
          <div class="count">
            <p class="watching">
              <span class="surplusGift viewNum"><?php echo $viewNum;?></span> usuarios están viendo, <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> paquetes disponibles!
            </p>
          </div>
          <p><strong>17<big>,</big></strong> <span>99€<del>149,88€</del></span></p>
          <a class="buybtn" href="https://www.iobit.com/buy.php?product=es-imf63pcsdpf1799&ref=es_imf63pcsdpfpurchase1812rc<?php echo $refStr;?>&refs=es_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf6purchase1812rc-es')">
            Comprar ahora
          </a>
          <p class="year"> 1 año de suscripción / 3 PCs </p>
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
              <th class="itema">IObit Malware Fighter <br>Free</th>
              <th class="itemb"><img src="<?php echo getStaticUrl('images/vs.png')?>"></th>
              <th class="itemc"><span>IObit Malware Fighter <b>Pro</b></span></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="itema">Básico </td>
              <td class="itemb">Protección de malware y virus  </td>
              <td class="itemc">Motor de Bitdefender Anti-virus </td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Protección de Anti-ransomware </td>
              <td class="itemc">Motor de Anti-ransomware</td>
            </tr>
            <tr>
              <td class="itema">Básico </td>
              <td class="itemb">Protección en tiempo real</td>
              <td class="itemc"> Comprensivo</td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Protección de disco en tiempo de arranque</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Protección de cámara </td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Protección de carpeta importante </td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Limpia automáticamente el rastreo de navegación </td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Guardían de USB</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema last"><i class="all-icons close">×</i></td>
              <td class="itemb">Protecctión de RAM </td>
              <td class="itemc last"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema last"><i class="all-icons close">×</i></td>
              <td class="itemb">Actualización automática </td>
              <td class="itemc last"><i class="all-icons pro">√</i></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <!-- comparison end -->

    <!-- footbuy start -->
    <div class="footbuy">
      <div class="wrapper">
        <h3>¡NO TE PIERDAS!</h3>
        <h2>88% de descuento exclusivo para proteger tu PC completamente</h2>
        <div class="price">
          <p><strong>17<big>,</big></strong> <span>99 €<del>149,88€</del></span></p>
          <a class="buybtn" href="https://www.iobit.com/buy.php?product=es-imf63pcsdpf1799&ref=es_imf63pcsdpfpurchase1812rc<?php echo $refStr;?>&refs=es_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf6purchase1812rc-es')">
            Comprar ahora
          </a>
          <p id="footdown" class="countdown">¡Date prisa! Termina en: <b>05</b>M:<b>00</b>S:<b class="last">00</b>Ms</p>
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
            <dt><img src="<?php echo getStaticUrl('images/software.png')?>" alt="Software Informer"></dt>
            <dd>
              <h2>Comentarios mediáticos</h2>
              <p>"El programa utiliza dos motores de AV, el suyo y BitDefender, y parece ser efectivo contra el malware que no puede ser detectado por otras herramientas similares, por lo que es bueno que se pueda ejecutar junto con su software AV estándar. Puede detectar una gran variedad de spyware, ransomware, adware, troyanos, gusanos, keyloggers y bots."</p>
              <cite>Software Informer</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/bob-bassett.png')?>" alt="Bob Bassett"></dt>
            <dd>
              <h2>Comentarios del usuario</h2>
              <p>"Solíamos utilizar hasta una docena de programas diferentes para mantener nuestras máquinas funcionando sin problemas. Tomaba horas cada semana para mantener la seguridad y el rendimiento. Ahora, con IObit Malware Fighter Pro y Advanced System Care Pro, todo está un solo lugar y nos toma sólo unos minutos cada dos días hacer los mismos trabajos con mucha más confianza. No hemos tenido ningún problema desde el uso de sus productos.”</p>
              <cite>Bob Bassett</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/peter-stoffers.png')?>" alt="Peter Stoffers"></dt>
            <dd>
              <h2>Comentarios del usuario</h2>
              <p>"Hace algunos años alguien llamó mi atención sobre IObit Malware Fighter. Primero fuí escéptico. Pero después de instalarlo, se convirtió en mi programa anti-malware favorito. Es muy fácil de usar. A través de los años ya ha detectado varias amenazas y las ha eliminado. En cooperación con otros programas IObit, como por ejemplo ASC, tengo una buena protección para mi PC. Ahora recomiendo estos programas a todos mis amigos y familiares." </p>
              <cite>Peter Stoffers</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/gelu-batir.png')?>" alt="Gelu Batir"></dt>
            <dd>
              <h2>Comentarios del usuario</h2>
              <p>"Estoy muy satisfecho con su producto IObit Malware Fighter. Anteriormente, este producto se me ocurrió. Tenía muchos problemas con interferencias maliciosas, no podía ver una película entera o un concierto. Debido a su nuevo producto, ahora cada operación es clara, segura y bien protegida. Escanea mi ordenador portátil sin afectar su rendimiento, mientras que también recomendé este producto a dos de mis amigos."</p>
              <cite>Gelu Batir</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/david-cassidy.png')?>" alt="David Cassidy"></dt>
            <dd>
              <h2>Comentarios del usuario</h2>
              <p>"Me gustaría dar las gracias a todo el personal de IObit por trabajar duro para proveernos los mejores programas. Es una gran actualización que ha hecho para sus usuarios. Es mucho más rápido en el escáner y fácil de usar. Las personas que realmente desean un buen programa de Malware y Antivirus que también tenga una buena relación calidad-precio no deben buscar más allá de IObit Malware Fighter. Yo recomendaría que olviden el resto y obtengan lo mejor que es IObit Malware Fighter."</p>
              <cite>David Cassidy</cite>
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
              <p>¡Estamos seguros de que la activación de la edición PRO te ayuda a solucionar problemas de drivers con precio asequible!</p>
            </dd>
          </dl>
          <dl class="fr">
            <dd>
              <h4>Formas de pago </h4>
            </dd>
            <dt><img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/></dt>
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
    var imgSrc = "<?php echo getStaticUrl('images/imf-mask-box.png')?>";
    var _href = "https://www.iobit.com/buy.php?product=es-imf63pcsdpf1699&ref=es_imf63pcsdpfpurchase1812poprc<?php echo $refStr;?>&refs=es_purchase_imf&tw=-8";
    var _ga = "ga('send', 'event', 'imfbuy', 'buy', 'imf6purchase1812poprc-es')";
    var viewNum = "<?php echo $viewNum;?>";
  </script>
   <script src="<?php echo getStaticUrl('script/modernizr.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/review-3d-carousel.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>

</body>
</html>