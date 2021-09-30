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
    $c_name = 'esimf8exp_p' . $date;
    $c_name_t='esimf8exp_t' . $date;
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
  // $transData=json_decode(base64_decode($_GET['num']));
  // if(!empty($transData)){
  //   if(@intval($transData->seats)){
  //     $packsNum=@intval($transData->seats);
  //   }
  // }

  $transData=$_GET['fileto'].$_GET['rsto'].$_GET['camto'].$_GET['traceto'];

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
<title>Paga 0€ para conseguir el último IObit Malware Fighter PRO</title>
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
          <h2>Consigue de nuevo tu Versión PRO por 0€</h2>
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
            <li>0€*</li>
            <li class="last">19,99€</li>
          </ul>
          <ul class="price">
            <li class="first">
              <p><strong>0€</strong><sup>*</sup></p>
            </li>
            <li>
              <a class="buybtn"
                 href="https://www.iobit.com/buy.php?product=es-imf8preorder&ref=es_imf8preorder<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=es_purchase_imf"
                 onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf8predorderexp-es');">
                Resérvalo ahora
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- feature start -->
  <div class="feature">
    <div class="wrapper">
      <div class="arrow-down"></div>
      <h2>¿Qué ha hecho IObit Malware Fighter PRO por ti?</h2>
      <div class="clearfix">
        <div class="imgbox fl">
          <img src="<?php echo getStaticUrl('images/screen01.png')?>" alt=""/>
          <span class="line-left line"></span>
        </div>
        <div class="message fr">
          <h3>Ha Protegido Tu Ordenador</h3>
          <ul>
            <li>
              Ha eliminado <?php if(!empty($_GET['fileto'])):?><b class="remove"><?php echo number_format($_GET['fileto'])?></b><?php endif;?> amenazas contra tu seguridad para un PC más seguro 
            </li>
            <li>
              Evitó que <?php if(!empty($_GET['rsto'])):?><b class="stop"><?php echo number_format($_GET['rsto'])?></b><?php endif;?> ransomware atacaran tu PC
            </li>
            <li>Evitó que amenazas de la entrada USB infectaran tu ordenador</li>
            <li>Habilitó la protección <b>360º</b> en tiempo real</li>
          </ul>
        </div>
      </div>
      <div class="clearfix">
        <div class="message message2 fl">
          <h3>Ha Protegido tu Privacidad</h3>
          <ul>
            <li>
              Ha detectado <?php if(!empty($_GET['camto'])):?><b class="detect"><?php echo number_format($_GET['camto'])?></b><?php endif;?> accesos no autorizados a tu cámara web
            </li>
            <li>
              Ha eliminado <?php if(!empty($_GET['traceto'])):?><b class="online"><?php echo number_format($_GET['traceto'])?></b><?php endif;?> rastros online para evitar que seas rastreado
            </li>
            <li><b>Ha protegido con contraseña</b> tus archivos personales</li>
          </ul>
        </div>
        <div class="imgbox imgbox2 fr">
          <img src="<?php echo getStaticUrl('images/screen02.png')?>" alt=""/>
          <span class="line-right line"></span>
          <span class="shield-box"><em class="shield"></em><em class="shield-shadow"></em></span>
        </div>
      </div>
      <div class="fbottom">
        <h2>Sin la versión PRO, le tienes <b>que decir adios a:</b></h2>
        <div class="clearfix">
          <div class="imgbox fl">
            <img src="<?php echo getStaticUrl('images/screen03.png')?>" alt=""/>
            <span class="warning"></span>
          </div>
          <div class="message fr">
            <ul>
              <li>Protección del motor de Bitdefender contra Malware y Virus;</li>
              <li>Protección ransomware del motor Anti-ransomware de IObit;</li>
              <li>Protección de la Cámara Web contra accesos no autorizados;</li>
              <li>Protección contra amenazas de seguridad desde la entrada USB;</li>
              <li>Protección de privacidad con la eliminación automática de tu rastro online;</li>
              <li>Actualización automática de la base de datos de malware;</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- feature end -->

  <!-- moregives start -->
  <div class="moregives">
    <h2>Vuelve ahora, la versión PRO te da Mucho Más</h2>
    <div class="wrapper">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature01.png')?>" alt=""/></dt>
        <dd>
          <big>100% más Grande</big>
          <p>Base de Datos de Malware</p>
        </dd>
      </dl>
      <dl class="center">
        <dt><img src="<?php echo getStaticUrl('images/feature02.png')?>" alt=""/></dt>
        <dd>
          <big>50%* más Rápida</big>
          <p>Velocidad de Escaneo</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature03.png')?>" alt=""/></dt>
        <dd>
          <big>Protección de Email</big>
          <p>para identificar links maliciosos</p>
        </dd>
      </dl>
    </div>
  </div>
  <!-- moregives end -->

  <!-- review start -->
  <div class="review">
    <div class="wrapper">
      <h2>¿Qué dicen otros?</h2>
      <div class="review-box">
        <div class="reviews">
          <div class="inner">
            <dl>
              <dt>Filipe</dt>
              <dd>
                IObit Malware Fighter es el mejor eliminador de malware que he usado en mi trabajo. Soy un técnico informático y IMF es mi mejor herramienta para luchar contra los virus. Ten cuidado si eres un malware o acabarás destrozado. IMF es un programa intuitivo con funciones avanzadas y una muy buena interfaz. Una herramienta moderna para usar a diario.
              </dd>
            </dl>
            <dl>
              <dt>Software.Informer</dt>
              <dd>
                "El programa utiliza dos motores de AV, el suyo y BitDefender, y parece ser efectivo contra el malware que no puede ser detectado por otras herramientas similares, por lo que es bueno que se pueda ejecutar junto con su software AV estándar. Puede detectar una gran variedad de spyware, ransomware, adware, troyanos, gusanos, keyloggers y bots."
              </dd>
            </dl>
            <dl>
              <dt>Adam Cullen</dt>
              <dd>
                IObit Malware Fighter es genial, ya que puede escanear archivos y usb’s y protegerte contraamenazas online y offline. En general, siempre he tenido buenos resultados con los productos de IObit, incluso con las versiones gratuitas, ya que siempre me han ayudado a mí y a mi ordenador. Recomiendo IObit y todos sus programas a cualquiera que esté buscando más protección y velocidad de su ordenador y hacer su vida un poco más fácil
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
        *Al final de periodo de prueba de 30 días, se te cobrarán 19,99€ automáticamente de tu tarjeta de crédito o cuenta PayPal o tarjeta de crédito. Esto supone un 70% de descuento sobre el precio original de 79,95€, el cual sólo podrán obtener los usuarios que lo reserven por adelantado.
      </dd>
      <dd>
        *Si no estás satisfecho, puedes cancelar el pedido en un plazo de 30 días sin pagar ninguna cuota.
      </dd>
    </dl>
    <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Todos los derechos reservados</p>
  </div>
  <!-- footer end -->

  <!-- floatlayer start -->
  <div id="floatlayer" class="floatlayer">
    <div class="wrapper clearfix">
      <div class="imgbox fl">
        <img src="<?php echo getStaticUrl('images/imf-box.png')?>" alt=""/>
      </div>
      <div class="barbox fl">
        <h2>Paga 0€ ahora para hacer la reserva</h2>
        <div class="numbox">
          Solo para los 500 primeros clientes, solo quedan <b class="reduceNum"><em>2</em><em class="packsNum">2</em></b> hoy
        </div>
      </div>
      <ul class="price fl">
        <li class="first">
          <p><strong>0€</strong><sup>*</sup></p>
        </li>
        <li>
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=es-imf8preorder&ref=es_imf8preorder<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=es_purchase_imf"
             onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf8predorderexp-es');">
            Resérvalo ahora
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
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>