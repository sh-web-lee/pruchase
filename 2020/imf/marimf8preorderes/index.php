<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';

  $viewNum=rand(98,165);
  if($_GET['action']=='getViewNum'){
    echo $viewNum;
    exit();
  }
  if ($_GET['action'] == 'getPacks') {
    $date = $_GET['d'];
    $c_name = 'esimf8xr_p' . $date;
    $c_name_t='esimf8xr_t' . $date;
    $isInit=$_GET['isInit'];
    if ($_COOKIE[$c_name]===null) {
      $totalNum=$packsNum=(intval($_GET['packsNum'])>0)?intval($_GET['packsNum']):49;
      setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
      setcookie($c_name_t,$totalNum, time() + 3600 * 24 *2);
    } else {
      if (intval($_COOKIE[$c_name]) <= 0) {
        $packsNum = 0;
        setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
      } else {
        if($isInit==1){
          $packsNum = intval($_COOKIE[$c_name]);
        }else {
          $packsNum = $_COOKIE[$c_name] - 1;
        }
        setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
      }
    }
    echo json_encode(array('packsNum'=>$packsNum));
    exit();
  }

  $refStr=empty($_GET['id'])?'':('-'.$_GET['id']);

  $isNewUser=false;
  $isNewUserV = false;
  $isNewRef = false;
  if(preg_match('/^7\./',$_GET['ver']) ||in_array($_GET['ref'],array('ascfree','ascpro','imffree',
        'imfpro','iufree','iupro','dbfree',
        'dbpro','isu'))){
    $isNewUser=true;
    if(in_array($_GET['ref'],array('ascfree','ascpro','imffree',
        'imfpro','iufree','iupro','dbfree',
        'dbpro','isu'))){
      $isNewRef = true;
    }
  }
  if(preg_match('/^5\./',$_GET['ver']) ||in_array($_GET['ref'],array('ascfree','ascpro','imffree',
        'imfpro','iufree','iupro','dbfree',
        'dbpro','isu'))){
    $isNewUserV = true;
    if(in_array($_GET['ref'],array('ascfree','ascpro','imffree',
        'imfpro','iufree','iupro','dbfree',
        'dbpro','isu'))){
      $isNewRef = true;
    }
  }

  $packsNum=49;
  $transData=json_decode(base64_decode($_GET['num']));
  if(!empty($transData)){
    if(@intval($transData->seats)){
      $packsNum=@intval($transData->seats);
    }
  }

  $popStr=empty($_GET['pop'])?'':('-'.$_GET['pop']);
  $refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);

  $isNewRef = false;
  if(in_array($_GET['ref'],array('ascfree','ascpro','imffree',
      'imfpro','iufree','iupro','dbfree',
      'dbpro','isu'))){
    $isNewRef = true;
  }
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Paga 0??? para conseguir el ??ltimo IObit Malware Fighter PRO</title>
<meta name="Copyright" content="IObit">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600&display=swap" rel="stylesheet">
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com/es/index.php" target="_blank">IObit</a>
      <h1 class="title">Comienza la preventa</h1>
      <div class="clearfix">
        <div class="imgbox fl">
          <img src="<?php echo getStaticUrl('images/imf-box.png')?>" alt="IObit Malware Fighter PRO"/>
        </div>
        <div class="msgbox fl">
          <h2>Res??rvalo por 0???, solo para los primeros 500 clientes de cada d??a</h2>
          <div class="barbox clearfix">
            <div class="progressbar fl">
              <span class="reducebar">Los primeros 500 clientes</span>
              <div class="numbox">
                Hoy se han hecho ya <span class="totalNum">498</span> Hoy se han hecho ya <b class="reduceNum"><em>2</em></b>
              </div>
            </div>
            <div class="changebar fl"><span>Los siguientes 500+ Clientes</span></div>
          </div>
          <ul class="barprice">
            <li>0???*</li>
            <li class="last">19,99???</li>
          </ul>
          <ul class="price">
            <li class="first">
              <p><strong>0???</strong><sup>*</sup></p>
            </li>
            <li>
              <a class="buybtn"
                 href="https://www.iobit.com/buy.php?product=es-imf8preorder&ref=es_imf8preorder<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=es_purchase_imf"
                 onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf8predorder-es');">
                Res??rvalo ahora
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- feature start -->
  <div class="feature ftop">
    <div class="wrapper">
      <h2>Mantente seguro en l??nea con IObit Malware Fighter 8 PRO</h2>
      <div class="arrow-down"></div>
      <h3 class="hfirst">Previene que el malware infecte tu ordenador</h3>
      <div class="feature-step clearfix">
        <div class="imgbox fl">
          <span class="browser"></span>
          <span class="files file-left"></span>
          <span class="files file-right"></span>
          <span class="worm">
            <em class="worm-legs-left01 on"></em>
            <em class="worm-legs-left02 on"></em>
            <em class="worm-legs-left03 on"></em>
            <em class="worm-legs-right01 on"></em>
            <em class="worm-legs-right02 on"></em>
            <em class="worm-legs-right03 on"></em>
          </span>
          <span class="worm-small worm-small-left"></span>
          <span class="worm-small worm-small-right"></span>
          <span class="worm-mask"></span>
          <span class="lock close"></span>
          <!-- <span class="lock open"></span> -->
          <span class="chain left"></span>
          <span class="chain right"></span>
          <span class="shield"><em class="star"></em></span>
        </div>
        <div class="message fr">
          <dl>
            <dt><h4>Motor Bitdefender</h4></dt>
            <dd>Detecta m??s de 200 millones de amenazas de malware con precisi??n en tiempo real.</dd>
          </dl>
          <dl>
            <dt><h4>Protecci??n contra Ransomware</h4></dt>
            <dd>Protege tu ordenador contra el ransomware que encripta tus archivos y evita que acceda a ellos. </dd>
          </dl>
          <dl>
            <dt><h4>Protecci??n USB</h4></dt>
            <dd>Protege tu ordenador contra virus y malware que puedan entrar a trav??s de la conexi??n de dispositivos USB.</dd>
          </dl>
        </div>
      </div>
    </div>
  </div>
  <div class="feature fbottom">
    <div class="wrapper">
      <h3 class="hlast">Evita que los Hackers te Esp??en</h3>
      <div class="feature-step clearfix">
        <div class="message fl">
          <dl>
            <dt><h4>Caja Fuerte</h4></dt>
            <dd>Protege tu privacidad y tus datos sensibles de accesos<br> no autorizados.</dd>
          </dl>
          <dl>
            <dt><h4>Protecci??n de la C??mara</h4></dt>
            <dd>Detecta y evita que intrusos accedan a tu c??mara web para espiarte.</dd>
          </dl>
          <dl>
            <dt><h4>Anti-Seguimiento</h4></dt>
            <dd>Borra tu rastro online autom??ticamente para esconder tus actividades en la web cada vez que cierras el navegador.</dd>
          </dl>
        </div>
        <div class="imgbox fr">
          <span class="inner"></span>
          <span class="webpage"></span>
          <span class="red-circle"></span>
          <span class="codebox"></span>
          <span class="thief"></span>
          <span class="thief-hook"></span>
          <span class="password"></span>
          <span class="wordbox left"></span>
          <span class="safebox"><em class="safe-handle"></em></span>
          <span class="shieldtwo"><em class="fork"></em></span>
        </div>
      </div>
      <h3>Proporciona protecci??n 360?? en tiempo real</h3>
      <div class="realtime">
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/feature01.png')?>" alt=""/></dt>
          <dd><h4>Protecci??n de Email <span><em>Nuevo</em></span></h4></dd>
          <dd>Detecta enlaces<br> maliciosos en tus emails.</dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/feature02.png')?>" alt=""/></dt>
          <dd><h4>Deteccci??n de P??ginas Web Maliciosas</h4></dd>
          <dd>Protege tu navegador contra ataques<br> de phising y anuncios molestos.</dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/feature03.png')?>" alt=""/></dt>
          <dd><h4>Protecci??n de Descarga</h4></dd>
          <dd>Mant??n tu ordenador alejado<br> de archivos maliciosos.</dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- feature end -->

  <!-- review start -->
  <div class="review">
    <div class="wrapper">
      <h2>??Qu?? dicen otros?</h2>
      <div class="review-box">
        <div class="reviews">
          <div class="inner">
            <dl>
              <dt>Filipe</dt>
              <dd>
                IObit Malware Fighter es el mejor eliminador de malware que he usado en mi trabajo. Soy un t??cnico inform??tico y IMF es mi mejor herramienta para luchar contra los virus. Ten cuidado si eres un malware o acabar??s destrozado. IMF es un programa intuitivo con funciones avanzadas y una muy buena interfaz. Una herramienta moderna para usar a diario.
              </dd>
            </dl>
            <dl>
              <dt>Software.Informer</dt>
              <dd>
                "El programa utiliza dos motores de AV, el suyo y BitDefender, y parece ser efectivo contra el malware que no puede ser detectado por otras herramientas similares, por lo que es bueno que se pueda ejecutar junto con su software AV est??ndar. Puede detectar una gran variedad de spyware, ransomware, adware, troyanos, gusanos, keyloggers y bots."
              </dd>
            </dl>
            <dl>
              <dt>Adam Cullen</dt>
              <dd>
                IObit Malware Fighter es genial, ya que puede escanear archivos y usb???s y protegerte contraamenazas online y offline. En general, siempre he tenido buenos resultados con los productos de IObit, incluso con las versiones gratuitas, ya que siempre me han ayudado a m?? y a mi ordenador. Recomiendo IObit y todos sus programas a cualquiera que est?? buscando m??s protecci??n y velocidad de su ordenador y hacer su vida un poco m??s f??cil
              </dd>
            </dl>
          </div>
        </div>
        <div class="handle">          
          <span class="one"><img src="<?php echo getStaticUrl('images/filipe.png')?>" alt="Filipe"/></span>
          <span class="two on"><img src="<?php echo getStaticUrl('images/software.informer.png')?>" alt=""/></span>
          <span class="three"><img src="<?php echo getStaticUrl('images/adam-cullen.png')?>" alt="Adam Cullen"></span>
        </div>
      </div>
    </div>
  </div>
  <!-- review end -->

  <!-- awards start -->
  <div class="awards">
    <div class="wrapper">
      <h2>Premios y Galardones</h2>
      <div class="imgbox"><img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/></div>
    </div>
  </div>
  <!-- awards end -->

  <!-- footer start -->
  <div class="footer">
    <dl class="wrapper">
      <dt>Nota:</dt>
      <dd>
        *Al final de periodo de prueba de 30 d??as, se te cobrar??n 19,99??? autom??ticamente de tu tarjeta de cr??dito o cuenta PayPal o tarjeta de cr??dito. Esto supone un 70% de descuento sobre el precio original de 79,95???, el cual s??lo podr??n obtener los usuarios que lo reserven por adelantado.
      </dd>
      <dd>
        *Si no est??s satisfecho, puedes cancelar el pedido en un plazo de 30 d??as sin pagar ninguna cuota.
      </dd>
    </dl>
    <p class="copyright">Copyright ?? 2005 - <?php echo date('Y')?> IObit. Todos los derechos reservados</p>
  </div>
  <!-- footer end -->

  <!-- floatlayer start -->
  <div id="floatlayer" class="floatlayer">
    <div class="wrapper clearfix">
      <div class="imgbox fl">
        <img src="<?php echo getStaticUrl('images/imf-box.png')?>" alt=""/>
      </div>
      <div class="barbox fl">
        <h2>Paga 0??? ahora para hacer la reserva</h2>
        <div class="numbox">
          Solo para los 500 primeros clientes, solo quedan <b class="reduceNum"><em>2</em><em class="packsNum">2</em></b> hoy
        </div>
      </div>
      <ul class="price fl">
        <li class="first">
          <p><strong>0???</strong><sup>*</sup></p>
        </li>
        <li>
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=es-imf8preorder&ref=es_imf8preorder<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=es_purchase_imf"
             onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf8predorder-es');">
            Res??rvalo ahora
          </a>
        </li>
      </ul>
    </div>
  </div>
  <!-- floatlayer end -->

  <script>
    packsNum=<?php echo $packsNum;?>;
    refStr="<?php echo $refStr;?><?php echo $popStr;?>";
  </script>
  <script src="<?php echo $pRootUrl;?>tpl/js/TweenMax.min.js"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>