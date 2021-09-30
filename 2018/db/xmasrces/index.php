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
  $cName='frdbpre'.$date;
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

$viewNum=rand(50,92);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}

$refStr='';
if(in_array($_GET['pop'],array('x_db','xr_db'))){
  $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>-88% para conseguir Driver Booster 6 PRO y regalos gratis sólo para navidad- IObit</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Montserrat:500,600,700,800'>
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
        <h1>OFERTA ESPECIL DE NAVIDAD</h1>
        <p class="best">La mejor oportunidad de ahorrar mucho, sólo una vez al año! </p>
        <div class="palen clearfix">
          <div class="left fl">
            <img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="Driver Booster PRO"/>
            <div class="ghost"></div>
          </div>
          <div class="right fr">
            <h2>Driver Booster 6 PRO</h2>
            <div class="price">
              <div class="count">
                <p class="watching">
                  <span class="surplusGift viewNum"><?php echo $viewNum;?></span> usuarios están viendo, <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> paquetes disponibles! 
                </p>
                <div class="progressbar">
                  <span></span>
                </div>
                <p id="bandown" class="countdown">¡Date prisa! Termina en: <b>05</b>M:<b>00</b>S:<b class="last">00</b>MS</p>
              </div>
              <p><strong>17<big>,</big></strong><span>99€ <del>164,78€</del></span></p>
              <a class="buybtn" href="https://www.iobit.com/buy.php?product=es-db6iupfsd1799&ref=es_db63pciupfsdpurchase1812rc<?php echo $refStr;?>&refs=es_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'db6purchase1812rc-es')">
                Comprar ahora
              </a>
              <p class="year">1 año de suscripción / 3 PCs</p>
              <em class="moneyback"></em>
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
        <h2>Un clic para actualizar los drivers perdidos, obsoletos y defectuosos!</h2>
        <p class="over">
          Más 150,000,000 usuarios de todo el mundo escoge Driver Booster Pro como su actualizador de driver para hacer la actualización del driver más fácil y el rendimiento del juego más rápido.
        </p>
        <img class="screen" src="<?php echo getStaticUrl('images/db-screen.png')?>" alt="Driver Booster PRO"/>
        <div class="clearfix">
          <div class="fl">
            <dl class="clearfix">
              <dt><img src="<?php echo getStaticUrl('images/feature-01.png')?>" alt=""/></dt>
              <dd>
                <h3>Actualizar más de 3,000,000 de drivers de dispositivo</h3>
                <p>
                  Detecta automáticamente 3,000,000+ drivers y recomienda los adecuados para reducir fallos de PC y mejorar la estabilidad del sistema.
                </p>
                <p><b>Más 20% en comparación con la versión gratis</b></p>
              </dd>
            </dl>
            <dl class="clearfix">
              <dt><img src="<?php echo getStaticUrl('images/feature-02.png')?>" alt=""/></dt>
              <dd>
                <h3>Mejor rendimiento del juego</h3>
                <p>
                  Detecta automáticamente drivers relacionados con el juego y componentes del juego para juego más rápido. La velocidad de algunos juegos incrementa hasta un 39%.
                </p>
                <p><b>*Sólo disponible en versión PRO</b></p>
              </dd>
            </dl>
          </div>
          <div class="fr">
            <dl class="clearfix">
              <dt><img src="<?php echo getStaticUrl('images/feature-03.png')?>" alt=""/></dt>
              <dd>
                <h3>Actualización del driver más rápida</h3>
                <p>
                  Prioridad de descargar tus drivers para ahorrar tiempo de actualización y reducir el fallo / retraso de computadora durante la actualización. 
                </p>
                <p><b>*Sólo disponible en versión PRO</b></p>
              </dd>
            </dl>
            <dl class="clearfix">
              <dt><img src="<?php echo getStaticUrl('images/feature-04.png')?>" alt=""/></dt>
              <dd>
                <h3>Repara problemas de sonido e Internet</h3>
                <p>
                  Repara los errores del dispositivo para reducir los problemas y fallos con tu impresora, pantalla, Internet, ratón y dispositivos externos. 
                </p>
                <p><b>*Sólo disponible en versión PRO</b></p>
              </dd>
            </dl>
          </div>
        </div>
      </div>
    </div>
    <!-- feature end -->

    <!-- donation start -->
    <div class="donation wrapper clearfix">
      <h2>Regalos gratis sólo para oferta exclusiva de Navidad</h2>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/sd-box.png')?>" alt="Smart Defrag 6 PRO"/></dt>
        <dd>
          <h3>Smart Defrag 6 PRO</h3>
          <strong>0€</strong> 
          <p>Desfragmentador de disco confiable e inteligente con 7,000,000+ usuarios. </p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/pf-box.png')?>" alt="Protected Folder"/></dt>
        <dd>
          <h3>Protected Folder </h3>
          <strong>0€</strong>  
          <p>La herramienta de protección de carpeta fácil de usar y con una contraseña. </p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="IObit Uninstaller 8 PRO"/></dt>
        <dd>
          <h3>IObit Uninstaller 8 PRO</h3>
          <strong>0€</strong> 
          <p>El mejor desinstalador para remover programs y plugins maliciosos.</p>
        </dd>
      </dl>
    </div>
    <!-- donation end -->

    <!-- centbuy start -->
    <div class="centbuy">
      <h2>Facilitez la mise à jour des pilotes et profitez des performances de jeu maximales</h2>
      <div class="wrapper clearfix">
        <div class="fl">
          <img src="<?php echo getStaticUrl('images/db-small-box.png')?>" alt="Driver Booster PRO"/>
        </div>
        <div class="price fr">
          <div class="count">
            <p class="watching">
              <span class="surplusGift viewNum"><?php echo $viewNum;?></span> usuarios están viendo, <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> paquetes disponibles! 
            </p>
          </div>
          <p><strong>17<big>,</big></strong><span>99€ <del>164,78€</del></span></p>
          <a class="buybtn" href="https://www.iobit.com/buy.php?product=es-db6iupfsd1799&ref=es_db63pciupfsdpurchase1812rc<?php echo $refStr;?>&refs=es_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'db6purchase1812rc-es')">
            Comprar ahora
          </a>
          <p class="year">1 año de suscripción / 3 PCs</p>
          <em class="moneyback"></em>
        </div>
      </div>
    </div>
    <!-- centbuy end -->

    <!-- comparison start -->
    <div class="comparison" id="compare">
      <div class="wrapper">
        <h2>Ver claramente lo que obtendrás, si lo activas ahora:</h2>
        <table border="0" cellspacing="0" cellpadding="0" width="100%">
          <thead>
            <tr>
              <th class="itema">Driver Booster  <br>Free</th>
              <th class="itemb"><img src="<?php echo getStaticUrl('images/vs.png')?>"></th>
              <th class="itemc"><span>Driver Booster  <b>Pro</b></span></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="itema">2,500,000+</td>
              <td class="itemb">Base de datos de drivers</td>
              <td class="itemc">3,000,000+</td>
            </tr>
            <tr>
              <td class="itema">Limitado</td>
              <td class="itemb">Velocidad de descarga del driver</td>
              <td class="itemc">Ilimitado</td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Actualización automática de drivers obsoletos</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Copia de seguridad automática de todos los</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">drivers contra accidentes</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Repara errores del dispositivo</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Detecta componentes del juego</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Prioridad de detectar drivers de game ready</td>
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
        <h3>¡NO TE PIERDAS!</h3>
        <h2>88% de descuento exclusivo para mantener drivers actualizados con 1 clic</h2>
        <div class="price">
          <p><strong>17<big>,</big></strong><span>99€ <del>164,78€</del></span></p>
          <a class="buybtn" href="https://www.iobit.com/buy.php?product=es-db6iupfsd1799&ref=es_db63pciupfsdpurchase1812rc<?php echo $refStr;?>&refs=es_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'db6purchase1812rc-es')">
            Comprar ahora
          </a>
          <p id="footdown" class="countdown">¡Date prisa! Termina en: <b>05</b>M:<b>00</b>S:<b class="last">00</b>MS</p>
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
          <dt><img src="<?php echo getStaticUrl('images/pc-mag.png')?>" alt="PC Magazine"></dt>
          <dd>
            <h2>Comentarios mediáticos</h2>
            <p>
              "IObit ofrece muchas utilidades  y Driver Booster PRO, que actualiza automáticamente tus drivers, es uno de los mejores. La funcionalidad simple de Driver Booster PRO se hace aún más atractiva gracias a la inclusión de múltiples licencias a un precio muy económico, así como una interfaz personalizable que hace un buen trabajo al mostrar información específica relacionada con el hardware. Competidores como Ashampoo Driver Updater y SlimWare Utilities DriverUpdate ofrecen características atractivas, pero IObit Driver Booster PRO lidera el mercado."
            </p>
            <cite>PC Magazine</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/myo-thuya.png')?>" alt="Myo Thuya"></dt>
          <dd>
            <h2>Comentarios del usuario</h2>
            <p>
              "Con Driver Booster puedo saber fácilmente qué dispositivos están desactualizados y puedo actualizarlos instantáneamente. Además, me ayuda a corregir el error de sonido, error de red, error de dispositivo, etc. No lo creía antes de utilizarlo, pero después de usarlo realmente me encanta ... Mi PC es más rápida, más segura y más nueva que hace 8 meses atrás ... así que gracias IObit."
            </p>
            <cite>Myo Thuya</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/adam-backlund.png')?>" alt="Adam Backlund"></dt>
          <dd>
            <h2>Comentarios del usuario</h2>
            <p>
              "Driver Booster es una aplicación increíble. Alguien que tiene muchas aplicaciones y unidades de disco ya que no tiene tiempo para actualizarlas manualmente, recomiendo Driver Booster, que ayudará a actualizar el controlador de forma rápida y sencilla."
            </p>
            <cite>Adam Backlund</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/wayne-bowler.png')?>" alt=""></dt>
          <dd>
            <h2>Comentarios del usuario</h2>
            <p>
              "Este es uno de los mejores programas de actualización de drivers. Microsoft incluso me ha desviado al sugerir actualizaciones que no funcionarían con mi ordenador. Este programa sabía qué actualizaciones necesitaba sin ningún conflicto. Funcionó perfectamente. Fácil de usar, informativo  e intuitivo. Este permanecerá en mi caja de herramientas para siempre... ¡Buen trabajo!"
            </p>
            <cite>Wayne Bowler</cite>
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
    var imgSrc = "<?php echo getStaticUrl('images/db-mask-box.png')?>";
    var _href = "https://www.iobit.com/buy.php?product=es-db6iupfsd1699&ref=es_db63pciupfsdpurchase1812poprc<?php echo $refStr;?>&refs=es_purchase_db&tw=-8";
    var _ga = "ga('send', 'event', 'dbbuy', 'buy', 'db6purchase1812poprc-es')";
    var viewNum = "<?php echo $viewNum;?>";
  </script>
  <script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
  <script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>

</body>
</html>