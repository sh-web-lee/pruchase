<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';
  include $pRootUrl.'callback.php';

if(!empty($_GET['action'])&&($_GET['action']=='getPacks')){
  $date=$_GET['d'];
  $cName='esascuapr_p'.$date;
  $cookie=$_COOKIE[$cName];
  if($cookie!==null){
    $packsNum=$_COOKIE[$cName];
    if($packsNum>3){
      $packsNum--;
      setcookie($cName,$packsNum);
    }else{
      $packsNum=3;
    }
  }else{
    $packsNum=58;
    setcookie($cName,$packsNum);
  }
  echo json_encode(array('packsNum'=>$packsNum));
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
<title>Hasta 80% de descuento y regalos gratis en Advanced SystemCare Ultimate 12 – IObit</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Montserrat:500,600,700'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <div class="clearfix">
        <a class="logo fl" href="https://www.iobit.com/es/index.php" target="_blank">
          <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit">
        </a>
        <div class="title fr">
          <h1>VENTA FLASH DE LA SEMANA</h1>
          <p>Adiós a los últimos virus, ransomware, y otro malware</p>
        </div>
      </div>
      <div class="clearfix">
        <div class="offer left">
          <img class="smart" src="<?php echo getStaticUrl('images/ascu-box.png')?>" alt="Advanced SystemCare Ultimate PRO"/>
          <h6>3 PCs / 1 año</h6>
          <div class="price">
            <p><strong><big>22</big>,95€</strong> <del class="original">49,99€</del></p>
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=es-ascu123pc2295&ref=es_ascu123pcpurchase1904&refs=es_purchase_ascu"
               onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascupurchase3pc1904-es')">
              Comprar ahora   
            </a>
          </div>
          <div class="off"><span>-54%</span></div>
          <div class="mask"><span>Empezará próximamente </span></div>
          <!-- <div class="countdown">
            Sólo quedan <b class="gift"><span class="giftNum">49</span><span class="giftNum reduce">49</span></b> paquetes
          </div> -->
        </div>
        <div class="offer right on">
          <img class="big" src="<?php echo getStaticUrl('images/ascu-gift-box.png')?>" alt="Advanced SystemCare Ultimate PRO"/>
          <h6>3 PCs / 1 año</h6>
          <div class="price">
            <p><strong><big>22</big>,95€</strong> <del class="original">119,93€</del></p>
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=es-ascu123pcsdpf2295&ref=es_ascu123pcpfsdpurchase1904&refs=es_purchase_ascu"
               onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascupurchase3pcpfsd1904-es')">
              Comprar ahora   
            </a>
          </div>
          <div class="off"><span>-80%</span></div>
          <div class="slogn">La mejor oferta es de tiempo limitado</div>
          <div id="banCountdown" class="countdown">
            <i class="all-icons"></i> <b>06</b>H : <b>58</b>MIN : <b>49</b>S : <b class="last">159</b>MS* 
          </div>
          <!-- <div class="mask"><span>AGOTADO</span></div> -->
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- payment start -->
  <div class="payment">
    <div class="wrapper"><img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/></div>
  </div>
  <!-- payment end -->

  <!-- intro start -->
  <div class="intro wrapper">
    <h2>¡Disfruda de protección completa con Advanced SystemCare Ultimate 12 PRO!</h2>
    <div class="panel clearfix">
      <div class="left fl">
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/list01.png')?>" alt=""/></dt>
          <dd>
            <h4>Datos personales protegidos</h4>
            <p>
              Nuevo Escudo de privacidad y Protección de huella digital protege tus datos sensibles contra software de chantaje, sitios de phishing y mensajes basura. 
            </p>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/list03.png')?>" alt=""/></dt>
          <dd>
            <h4>Protección eficaz contra virus y malware</h4>
            <p>
              ASCU12 previene y elimina virus y malware con motor de Bitdefender para bloquear ataques de ransomware y capturar intrusos espías.
            </p>
          </dd>

        </dl>
      </div>
      <div class="right fr">
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/list02.png')?>" alt=""/></dt>
          <dd>
            <h4>Protección integral de navegación</h4>
            <p>
              Bloquea anuncios, interrumpe la minería de criptomonedas en el navegador web y te informa inmediatamente cuando se cambia tu página de inicio para asegurar tu navegación en línea. 
            </p>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/list04.png')?>" alt=""/></dt>
          <dd>
            <h4>PC más limpio y rápido</h4>
            <p>
              Limpia archivos basura y registros innecesarios para liberar espacio en disco, administra los elementos de inicio para acelerar el sistema, monitorizando en tiempo real tu PC para reducir el tiempo de respuesta del mismo.
            </p>
          </dd>
        </dl>
      </div>
      <img class="screen" src="<?php echo getStaticUrl('images/asc-screen.png')?>" alt="Advanced SystemCare Ultimate PRO"/>
      <a class="more" href="javascript: void(0);">La razón de elegir ASCU 12 >></a>
    </div>
  </div>
  <!-- intro end -->

  <!-- donation start -->
  <div class="donation">
    <div class="wrapper clearfix">
      <h2>Obtenga paquete de regalo sólo para esta oferta exclusiva valor de <big>69,94€</big></h2>
      <div id="giftCountdown" class="countdown">
        Termina en <b>00</b>H : <b>10</b>MIN : <b>49</b>S : <b class="last">159</b>MS* 
      </div>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/pf-box.png')?>" alt="Protected Folder"/></dt>
        <dd>
          <strong><big>0</big>€</strong> <span class="all-icons">1 PC / 1 año </span>
          <p>La herramienta de protección de carpeta fácil de usar y con una contraseña.</p>
        </dd>
      </dl>
      <dl class="right">
        <dt><img src="<?php echo getStaticUrl('images/sd-box.png')?>" alt="Smart Defrag 6 PRO"/></dt>
        <dd>
          <strong><big>0</big>€</strong> <span class="all-icons">1 PC / 1 año </span>
          <p>Desfragmentador de disco confiable e inteligente con 7,000,000+ usuarios. </p>
        </dd>
      </dl>
    </div>
  </div>
  <!-- donation end -->

  <!-- centbuy start -->
  <div id="oneBuy" class="centbuy">
    <div class="wrapper clearfix">
      <div class="imgbox fl">
        <img class="big on" src="<?php echo getStaticUrl('images/ascu-gift-box.png')?>" alt="Advanced SystemCare Ultimate PRO"/>
        <img class="smart" src="<?php echo getStaticUrl('images/ascu-box.png')?>" alt="Advanced SystemCare Ultimate PRO"/>
      </div>
      <ul class="fl">
        <li class="one on" data-num="1">
          <i class="all-icons"></i> <span>3 PCs / 1 año con regalos gratis </span> <b>-80% </b>
          <!-- <div class="mask"><span>Agotado</span></div> -->
        </li>
        <li class="two" data-num="0">
          <i class="all-icons"></i> <span>3 PCs / 1 año</span> <b>-54% </b>
          <div class="mask"><span>Empezará próximamente</span></div>
        </li>
      </ul>
      <div class="price fr">
        <p><strong><big>22</big>,95€</strong> <del class="original">119,93€</del></p>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=es-ascu123pcsdpf2295&ref=es_ascu123pcpfsdpurchase1904&refs=es_purchase_ascu"
           onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascupurchase3pcpfsd1904-es')">
          Comprar ahora   
        </a>
      </div>
    </div>
  </div>
  <!-- centbuy end -->

  <div class="wrapper">
    <!-- awards start -->
    <div class="awards">
      <h2>Recomendado y premiado por estos Medios</h2>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
    </div>
    <!-- awards end -->

    <!-- review start -->
    <div class="review">
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
    <!-- review end -->
    
    <!-- comparison start -->
    <div class="comparison">
      <h4>¿Por qué elegir Advanced SystemCare Ultimate 12?</h4>
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
              <td class="title">Limpieza y optimización<br /> superior de PC</td>
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
          Un clic para limpiar los virus ocultos y difíciles, troyanos, gusanos, spyware, adware y diversos malwares. Advanced SystemCare Ultimate 12 también proporciona una protección proactiva, siempre-online, automática y contra todo tipo de amenazas de seguridad de Internet, con actualización rápida de base de datos de virus.
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
    <!-- comparison end -->
  </div>

  <!-- centbuy start -->
  <div id="twoBuy" class="centbuy">
    <div class="wrapper clearfix">
      <div class="imgbox fl">
        <img class="big on" src="<?php echo getStaticUrl('images/ascu-gift-box.png')?>" alt="Advanced SystemCare Ultimate PRO"/>
        <img class="smart" src="<?php echo getStaticUrl('images/ascu-box.png')?>" alt="Advanced SystemCare Ultimate PRO"/>
      </div>
      <ul class="fl">
        <li class="one on" data-num="1">
          <i class="all-icons"></i> <span>3 PCs / 1 año con regalos gratis </span> <b>-80% </b>
        </li>
        <li class="two" data-num="0">
          <i class="all-icons"></i> <span>3 PCs / 1 año</span> <b>-54% </b>
          <div class="mask"><span>Empezará próximamente</span></div>
        </li>
      </ul>
      <div class="price fr">
        <p><strong><big>22</big>,95€</strong> <del class="original">119,93€</del></p>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=es-ascu123pcsdpf2295&ref=es_ascu123pcpfsdpurchase1904&refs=es_purchase_ascu"
           onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascupurchase3pcpfsd1904-es')">
          Comprar ahora   
        </a>
      </div>
    </div>
  </div>
  <!-- centbuy end -->

  <div class="wrapper">
    <!-- annotation start -->
    <dl class="annotation">
      <dt>Nota:</dt>
      <dd>
        1*.Estos programas promocionales están sujetos a cambios sin previo aviso, dependiendo de nuestra discreción exclusiva en cualquier momento.
      </dd>
      <dd>2*.Datos pueden variar basados en diferentes sistemas o ordenadores.</dd>
    </dl>
    <!-- annotation end -->
    
    <!-- footer start -->
    <div class="footer">Copyright 2005 - <?php echo date('Y')?> IObit. Todos los derechos reservados</div>
    <!-- footer end -->
  </div>

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>