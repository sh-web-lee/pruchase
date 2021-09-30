<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';

    function microtime_float(){
      list($usec, $sec) = explode(' ', microtime());
      return ((float)$usec + (float)$sec);
    }
    
    $buyNum = ceil(microtime_float()*1000/20000) - 69041325;
    $buyNum = number_format($buyNum);

  function get_line($file, $line)
  {
    $fp = fopen($file, 'r');
    $i = 0;
    while (!feof($fp)) {
      $i++;
      $c = fgets($fp);
      if ($i == $line) {
        return $c;
        break;
      }
    }
  }
  $viewNum=rand(60,88);

  if ($_GET['action'] == 'getPacks') {
    $date = $_GET['d'];
    $time = time();
    $c_name = 'esascuxmax2019' . $date;
    if (!isset($_COOKIE[$c_name])) {
      setcookie($c_name, '321'.'-'.$time, $time + 3600 * 24 *2);
    } else {
      $packsNum = explode('-',$_COOKIE[$c_name]);
      $outtime = $time-$packsNum[1];
      if($outtime>10){
        $addPacks = ceil($outtime/4);
        $packsNum = $_COOKIE[$c_name] + $addPacks;
      }else{
        $packsNum = $_COOKIE[$c_name] + 1;
      }
      setcookie($c_name, $packsNum.'-'.$time, $time + 3600 * 24 * 2);
    }
    echo json_encode(array('packsNum'=>$packsNum,'saleType'=>$saleType,'viewNum'=>$viewNum));
    exit();
  }
  $refStr='';
if(in_array($_GET['st'],array('pm_t3','ob_2','pm_t4','pm_t5','pm_p1','pm_p2','pm_r1','pm_p3','pm_r2','reg','news',
    'pm_t1','ob_1','pm_t2','no_patch_db','patch_installed_db','no_patch_imf','patch_installed_imf'))){
  $refStr.='-'.$_GET['st'];
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Oferta Especial para Advanced SystemCare Ultimate – IObit</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700,800&display=swap" rel="stylesheet">
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>

<!-- banner start -->
<div class="banner">
  <div class="wrapper clearfix">
    <a class="logo" href="https://www.iobit.com/es/index.php" target="_blank">IObit</a>
    <h1>Luchamos juntos contra el virus, ¡siempre estamos contigo!</h1>
    <div class="banlist">
      <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt=""/>
      <div class="price">
        <p><strong><big>22</big>,95€</strong>  <del>49,99€</del></p>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=es-ascu133pc2295&ref=es_ascu133pc2295purchase1911<?php echo $refStr;?>&refs=es_purchase_ascu"
           onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascu3pcpurchase1911-es')">
          COMPRAR AHORA 
        </a>
      </div>
      <ul class="txtlist">
        <li><i class="all-icons"></i> 27,04€ ahorrado</li>
        <li><i class="all-icons"></i> Advanced SystemCare Ultimate  <del>49,99€</del></li>
      </ul>
      <div class="discount">
        <b>-45%</b>
        <p>1 año, 3PCs</p>
      </div>
    </div>
    <div class="banlist big">
      <div class="gift"><i class="all-icons"></i> <b class="reduce"><span class="first"></span></b> personas han comprado</div>
      <img src="<?php echo getStaticUrl('images/asc-gift-box.png')?>" alt=""/>
      <div class="price">
        <p><strong><big>22</big>,95€</strong> <del>139.92€</del></p>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=es-ascu133pcsdpfamc2295&ref=es_ascu133pcpfsdamc2295purchase1911<?php echo $refStr;?>&refs=es_purchase_ascu"
           onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascu3pcpfsdamcpurchase1911-es');">
          COMPRAR AHORA
        </a>
      </div>
      <ul class="txtlist">
        <li><i class="all-icons"></i> 116,97€ ahorrado</li>
        <li><i class="all-icons"></i> Advanced SystemCare Ultimate  <del>49,99€</del></li>
        <li><i class="all-icons red"></i> Smart Defrag PRO   <del>29,99€</del></li>
        <li><i class="all-icons red"></i> Protected Folder    <del>39,95€</del></li>
        <li><i class="all-icons red"></i> AMC Security PRO   <del>19,99€</del></li>
      </ul>
      <div class="discount">
        <b>-83%</b>
        <p>1 año, 3PCs</p>
      </div>
    </div> 
  </div>
</div>
<!-- banner end -->

<!-- intro start -->
<div class="intro">
  <div class="wrapper">
    <h2>¡Disfruda de protección completa con Advanced SystemCare Ultimate 13 PRO!</h2>
    <div class="panel clearfix">
      <div class="left fl">
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/list01.png')?>" alt=""></dt>
          <dd>
            <h4>Datos personales protegidos</h4>
            <p>
              Nuevo Escudo de privacidad y Protección de huella digital protege tus datos sensibles contra software de chantaje, sitios de phishing y mensajes basura. 
            </p>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/list03.png')?>" alt=""></dt>
          <dd>
            <h4>Protección eficaz contra virus y malware</h4>
            <p>
              Previene y elimina virus y malware con motor de Bitdefender para bloquear ataques de ransomware y capturar intrusos espías.
            </p>
          </dd>

        </dl>
      </div>
      <div class="right fr">
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/list02.png')?>" alt=""></dt>
          <dd>
            <h4>Protección integral de navegación</h4>
            <p>
              Bloquea anuncios, interrumpe la minería de criptomonedas en el navegador web y te informa inmediatamente cuando se cambia tu página de inicio para asegurar tu navegación en línea. 
            </p>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/list04.png')?>" alt=""></dt>
          <dd>
            <h4>PC más limpio y rápido</h4>
            <p>
              Limpia archivos basura y registros innecesarios para liberar espacio en disco, administra los elementos de inicio para acelerar el sistema, monitorizando en tiempo real tu PC para reducir el tiempo de respuesta del mismo.
            </p>
          </dd>
        </dl>
      </div>
      <img class="screen" src="<?php echo getStaticUrl('images/ascu-screen.png')?>" alt="Advanced SystemCare Ultimate PRO">
      <a class="more" href="javascript: void(0);">La razón de elegir Advanced SystemCare Ultimate &gt;&gt;</a>
    </div>
  </div>
</div>
<!-- intro end -->

<!-- giftbox start -->
<div class="giftbox">
  <div class="wrapper clearfix">
    <h2>CANTIDAD LIMITADA, ¡PAGA UN PRECIO CON DESCUENTO Y OBTÉN TRES REGALOS! *</h2>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/gift-pf.png')?>" alt="Protected Folder"/></dt>
      <dd>
        <h3>Protected Folder</h3>
        <strong>0€</strong> <del>29,95€</del>
        <p>La herramienta de protección de carpeta fácil de usar con una contraseña. </p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/gift-sd.png')?>" alt="Smart Defrag PRO"/></dt>
      <dd>
        <h3>Smart Defrag PRO</h3>
        <strong>0€</strong> <del>29,99€</del>
        <p>Desfragmentador de disco confiable e inteligente con 7,000,000+ usuarios.</p>
      </dd>
    </dl>
    <dl class="last">
      <dt><img src="<?php echo getStaticUrl('images/gift-amc.png')?>" alt="AMC Security PRO"/></dt>
      <dd>
        <h3>AMC Security PRO</h3>
        <strong>0€</strong> <del>19,99€</del>
        <p>Escanea automáticamente y limpia tu Android móvil. Asegura el pago de tus compras. </p>
      </dd>
    </dl>
    <div class="price">
      <p><strong><big>22</big>,95€</strong> <del>139.92€</del></p>
      <a class="buybtn"
         href="https://www.iobit.com/buy.php?product=es-ascu133pcsdpfamc2295&ref=es_ascu133pcpfsdamc2295purchase1911<?php echo $refStr;?>&refs=es_purchase_ascu"
         onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascu3pcpfsdamcpurchase1911-es');">
        COMPRAR AHORA  
      </a>
    </div>
    <ul class="payment clearfix">
      <li class="first">
        <span>60 Días de Garantía de Reembolso </span>
        <img src="<?php echo getStaticUrl('images/moneyback-small.png')?>" alt=""/>
      </li>
      <li>
        <span>Formas de pago</span>
        <img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/>
      </li>
    </ul>
  </div>
</div>
<!-- giftbox end -->
<div class="awards wrapper">
    <h2>Recomendado y premiado por estos Medios</h2>
    <img src="<?php echo getStaticUrl('images/awards.png')?>" alt="">
  </div>
<div class="review">
  <div class="wrapper">
    <div class="content">
      <dl>
        <dt>
        <h3>Reseña de los Medios</h3></dt>
        <dd>
          <h4>“Advanced SystemCare Ultimate es una completísima solución todo en uno muy recomendable.”</h4>
        </dd>
        <dd>
          “Advanced SystemCare Ultimate es una potente suite de optimización para Windows que con su nueva actualización viene cargada de nuevas e interesantes herramientas.”
        </dd>
      </dl>
      <dl class="active">
        <dt>
        <h3>Comentarios de usuarios</h3></dt>
        <dd>
          <h4>"¡Advanced SystemCare Ultimate es el asistente inteligente. Grande victoria!"</h4>
        </dd>
        <dd>
          “El tiempo pasado tuve frecuentemente un problema de desordenar mi ordenador. Después de obtener mi código de Advanced Systemcare Ultimate, este caso nunca ocurrió. En este software incluido función de antivirus, ya no necesita segundo producto. Advanced SystemCare Ultimate es el asistente inteligente. Mi ordenador está ejecutando más suave y más rápido como un nuevo. A diferencia de otros productos, no ha habido conflictos constantes."
        </dd>
      </dl>
      <dl>
        <dt>
        <h3>Comentarios de usuarios</h3></dt>
        <dd>
          <h4>"Recomendé advanced systemcare ultimate para optimización de su antivirus o del sistema."</h4>
        </dd>
        <dd>
          “En la versión obsoleta de advanced systemcare ultimate, no tuve problemas en casi todo, tales como sistema, malware, etc. Ahora, se ha actualizado y más funciones de advanced systemcare ultimate aceleran mi ordenador portátil ejecutando 5 veces más rápido que antes. También me gusta mucho la piel nueva. Cuando arreglo otros ordenadores, recomendaré advanced systemcare ultimate para optimización de su antivirus o del sistema."
        </dd>
      </dl>
      <dl>
        <dt>
        <h3>Comentarios de usuarios</h3></dt>
        <dd>
          <h4>"Uno de los programas más simples pero más efectivos que he encontrado para mantener mis tres computadores sanos."</h4>
        </dd>
        <dd>
          "He utilizado varias versiones de Advanced SystemCare durante algunos años. Cuando encontré la función de Advanced SystemCare Ultimate yo supe que lo necesitaba. No me ha decepcionado. Uno de los programas más simples pero más efectivos que he encontrado para mantener mis tres computadores sanos."
        </dd>
      </dl>
    </div>
    <ul class="users clearfix">
      <li>
        <div class="pic"><img src="<?php echo getStaticUrl('images/softonic.png')?>" alt="Softonic">
        </div>
        <p>Softonic</p>
      </li>
      <li class="active">
        <div class="pic"><img src="<?php echo getStaticUrl('images/rod-garnett.png')?>" alt="Rod Garnett"></div>
        <p>Rod Garnett</p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo getStaticUrl('images/dareen-lim.png')?>" alt="Dareen Lim">
        </div>
        <p>Dareen Lim</p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo getStaticUrl('images/russell-peck.png')?>" alt="Russell Peck">
        </div>
        <p>Russell Peck</p>
      </li>
    </ul>
  </div>
</div>

<!-- comparison start -->
<div class="comparison ">
  <div class="wrapper">
    <h4>¿Por qué elegir Advanced SystemCare Ultimate 13?</h4>
    <h5><span>Mejor protección y no retraso de rendimiento.</span> Ver comparación abajo</h5>
    <div class="ctable">
      <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <thead>
          <tr>
            <th class="text"></th>
            <th class="blue">
              <p><span>Advanced SystemCare</span> Ultimate</p>
            </th>
            <th>AVG<span>Anti-virus</span></th>
            <th>Norton Security<span>Deluxe</span></th>
            <th>Avast! Pro<span>Antivirus</span></th>
            <th>Microsoft<span>Security Essentials</span></th>
            <th>McAfee® AntiVirus</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="title first">Tesa de detección</td>
            <td class="gray">Muy alto</td>
            <td>Normal</td>
            <td>Alto</td>
            <td>Normal</td>
            <td>Alto</td>
            <td>Alto</td>
          </tr>
          <tr>
            <td class="title">Retraso de rendimiento</td>
            <td class="gray">No</td>
            <td>Sí</td>
            <td>Sí</td>
            <td>Sí</td>
            <td>Sí</td>
            <td>Sí</td>
          </tr>
          <tr>
            <td class="title">Limpieza y optimización<br> superior de PC</td>
            <td class="gray"><i class="tb-icons red">√</i></td>
            <td><i class="tb-icons">×</i></td>
            <td><i class="tb-icons">×</i></td>
            <td><i class="tb-icons">×</i></td>
            <td><i class="tb-icons">×</i></td>
            <td><i class="tb-icons">×</i></td>
          </tr>
          <tr>
            <td class="title">Más de 20 herramientas para rendimiento de PC</td>
            <td class="gray"><i class="tb-icons red">√</i></td>
            <td><i class="tb-icons">×</i></td>
            <td><i class="tb-icons">×</i></td>
            <td><i class="tb-icons">×</i></td>
            <td><i class="tb-icons">×</i></td>
            <td><i class="tb-icons">×</i></td>
          </tr>
        </tbody>
      </table>
    </div>
    <dl class="comlist">
      <dt>
        <i class="tb-icons">√</i>
        Inigualable tasa de detección y protección máxima
      </dt>
      <dd>
        Un clic para limpiar los virus ocultos y difíciles, troyanos, gusanos, spyware, adware y diversos malwares. Advanced SystemCare Ultimate también proporciona una protección proactiva, siempre-online, automática y contra todo tipo de amenazas de seguridad de Internet, con actualización rápida de base de datos de virus.
      </dd>
    </dl>
    <dl class="comlist">
      <dt>
        <i class="tb-icons">√</i>
        Disfrute de seguridad confiada sin ralentización del sistema
      </dt>
      <dd>
        Su sistema funciona a su velocidad máxima y sin ningún retraso de rendimiento, gracias a nuestra tecnología de líder industrial en seguridad de Internet.
      </dd>
    </dl>
    <dl class="comlist">
      <dt>
        <i class="tb-icons">√</i>
        Navegación segura, buscar, descargar y compartir con confianza
      </dt>
      <dd>
        Comportamiento de procesos de monitores tecnológicos de control proactivo de virus en tiempo real, escanea los archivos compartidos con correo electrónico y bloquea las amenazas posibles. Tasa de detección sin precedentes asegura un entorno más seguro cuando usa su PC.
      </dd>
    </dl>
    <dl class="comlist">
      <dt>
        <i class="tb-icons">√</i>
        Obtener un rendimiento optimizado altamente y disfrutar de la experiencia nueva de PC
      </dt>
      <dd>
        Ya han probado la gran capacidad de optimización de PC suelta a la potencia de su PC. Con la optimización en tiempo real y característica de ActiveBoost, los recursos del sistema se gestionan de forma inteligente para asegurar su PC super rápido.
      </dd>
    </dl>
  </div>
</div>
<!-- comparison end -->

<!-- service start -->
<div class="service wrapper clearfix">
  <dl>
    <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
    <dd>
      <h3>Garantía de reembolso</h3>
      <p>Si no está satisfecho en los primeros 60 días,le devolveremos su dinero.</p>
    </dd>
  </dl>
  <dl class="two">
    <dt><img src="<?php echo getStaticUrl('images/godaddy-secure.png')?>" alt=""/></dt>
    <dd>
      <h3>Pago 100% seguro</h3>
      <p>IObit ofrece métodos de pago seguros para la transacción.</p>
    </dd>
  </dl>
  <dl class="three">
    <dt><img src="<?php echo getStaticUrl('images/godaddy.png')?>" alt=""/></dt>
    <dd>
      <h3>Servicio al cliente</h3>
      <p>Ofrecemos 24/7 Soporte Técnico gratis.</p>
    </dd>
  </dl>
</div>
<!-- service end -->

<!-- footer start -->
<div class="footer">
  <div class="wrapper">
    <dl>
      <dt>Nota:</dt>
      <dd>
        *. Estos programas promocionales están sujetos a cambios sin previo aviso, dependiendo de nuestra discreción exclusiva en cualquier momento.
      </dd>
      <dd>*. Datos pueden variar basados en diferentes sistemas u ordenadores.</dd>
    </dl>
    <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Todos los derechos reservados</p>
  </div>
</div>
<!-- footer end -->

<!-- floatlayer start -->
<div id="floatlayer" class="floatlayer">
  <div class="wrapper clearfix">
    <div class="left fl">
      <img src="<?php echo getStaticUrl('images/fl-asc-box.png')?>" alt="Advanced SystemCare Ultimate 12 PRO"/>
<!--      <span class="cap"></span>-->
    </div>
    <h2 class="fl">¡Protege tu PC contra virus en tiempo real!</h2>
    <div class="price fr">
      <p><strong><big>22</big>,95€</strong> <del>139.92€</del></p>
      <a class="buybtn"
         href="https://www.iobit.com/buy.php?product=es-ascu133pcsdpfamc2295&ref=es_ascu133pcpfsdamc2295purchase1911<?php echo $refStr;?>&refs=es_purchase_ascu"
         onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascu3pcpfsdamcpurchase1911-es');">
        Conseguir 83% de descuento
      </a>
    </div>
  </div>
</div>
<!-- floatlayer end -->

  <script>refStr="<?php echo $refStr;?>";</script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>