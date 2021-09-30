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

$reduceNum=69041325;
$buyNum = number_format(ceil(microtime_float()*1000/20000) - $reduceNum);

if(!empty($_GET['action'])&&($_GET['action']=='getSales')){
  $date=$_GET['d'];
  $cName='esascuoct'.$date;
  $cookie=$_COOKIE[$cName];
  if($cookie){
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
  echo $packsNum;
  exit();
}

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

$name=explode(' ',trim(get_line('../asc/data/name_oct.txt',rand(1,26))));
$firstName=preg_replace("/(.*)(.{3})/",'${1}'.str_repeat('*',3),$name[0]);
$lastName=preg_replace("/(.*)(.{3})/",'${1}'.str_repeat('*',3),$name[1]);
//$saleType=(rand(1,6)%6==0)?1:3;
$saleType=3;
if($_GET['action']=='getUser'){
  echo json_encode(array('firstName'=>$firstName,'lastName'=>$lastName,'buyNum'=>$buyNum));
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
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Disfruta de 83% de descuento en Advanced SystemCare Ultimate y regalos gratis – IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>

<body>
<!-- banner start -->
<div class="banner">
  <div class="wrapper clearfix">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/es/index.php" target="_blank">IObit</a>
    <!-- title -->
    <h1>¡Feliz Navidad! OFERTA EXCLUSIVA</h1>
    <!-- gift-box -->
    <span class="gift-box"></span>
    <!-- left-message -->
    <div class="left-message fl">
      <img class="banner-asc" src="<?php echo $pResUrl;?>images/banner-ascu.png" alt="">
      <img class="banner-reduce" src="<?php echo $pResUrl;?>images/banner-ascu-reduce.png" alt="">
    </div>
    <!-- right-message -->
    <div class="right-message fr">
      <!-- ASC12 -->
      <h3>
        Advanced SystemCare Ultimate 12 PRO
        <span>
          +<br>
          Paquete de Navidad gratis
        </span>
      </h3>
      <!-- notes -->
      <p class="notes"><i></i> ¡Cantidades limitadas! Sólo quedan <b class="packsNum"><?php echo $packsNum ?></b> <span class="reduce">-1</span></p>
      <!-- line -->
      <hr>
      <!-- price -->
      <p class="price">
        <del>139,92€</del> <strong>22</strong><b>,95€</b><br>
        ¡Se ahorra 116,97€!
      </p>
      <!-- buybtn -->
      <a class="buybtn"
         href="https://www.iobit.com/buy.php?product=es-ascu123pcsdpfamc2295&ref=es_ascu123pcpfsdamcpurchase1812<?php echo $refStr;?>&refs=es_purchase_ascu"
         onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascupurchase1812-es')">
        <span>Comprar ahora</span>
        <!-- ribbon -->
        <i class="ribbon ribbon2"></i>
      </a>
      <!-- moneyback -->
      <img class="moneyback" src="<?php echo $pResUrl;?>images/moneyback.png" alt="">
      <!-- attention -->
      <p class="attention"><i></i> Más de <b class="buyNum"><?php echo $buyNum ?></b> personas han comprado</p>
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
  <div class="wrapper clearfix">
    <!-- title -->
    <h2>
     ¡Disfruda de mejor protección y PC con Advanced SystemCare Ultimate 12 PRO!
    </h2>
    <!-- feature details -->
      <dl class="list01">
        <dt class="fl"><img src="<?php echo $pResUrl;?>images/feature-icon01.png" alt=""></dt>
        <dd class="fl">
          <h3>115%* Mayor base de datos de virus </h3>
          <p>
            Permite que Advanced SystemCare Ultimate <br> detecte y elimine más amenazas de <br> seguridad para una mejor protección.
          </p>
        </dd>
      </dl>
      <dl class="list02">
        <dt class="fl"><img src="<?php echo $pResUrl;?>images/feature-icon02.png" alt=""></dt>
        <dd class="fl">
          <h3>PC 100% seguro</h3>
          <p>
           Nuevo Escudo de privacidad protege tus datos <br> sensibles contra software de chantaje, sitios <br> de phishing y mensajes basura.
          </p>
        </dd>
      </dl>
      <dl class="list03">
        <dt class="fl"><img src="<?php echo $pResUrl;?>images/feature-icon03.png" alt=""></dt>
        <dd class="fl">
          <h3>Motor Anti-ransomware </h3>
          <p>
           Proactivamente bloque amenazas ransomware <br> & mantiene tus archivos y dinero seguros en <br> todo momento.
          </p>
        </dd>
      </dl>

      <dl class="list04">
        <dt class="fl"><img src="<?php echo $pResUrl;?>images/feature-icon04.png" alt=""></dt>
        <dd class="fl">
          <h3>Eliminación de Anuncios</h3>
          <p>
           Se bloquearán los anuncios maliciosos para una <br> navegación en línea más segura y fluida.
          </p>
        </dd>
      </dl>
    <!-- clear float -->
    <div class="clear"></div>
    <!-- a.intro -->
    <a class="intro" href="javascript:void (0);">Más información sobre la edición PRO>></a>
  </div>
</div>
<!-- feature end -->

<!-- betweenbuy start -->
<div class="betweenbuy clearfix">
  <!-- title -->
  <p><span>83% DTO.</span> para activar Advanced SystemCare Ultimate 12 hoy,</p>
  <h3><i></i>Obtenga paquete de regalo<span>(Valor de 89,93€)</span> sólo para oferta exclusiva de Navidad</h3>
  <div class="wrapper clearfix">
    <!-- SD box -->
    <dl class="fl">
      <dt><img src="<?php echo $pResUrl;?>images/sd-box.png" alt=""></dt>
      <dd>
        <p class="rate"><del>€29,99</del> <span>€<b>0</b></span></p>
        <p class="des">
          Desfragmentador de disco confiable e inteligente<br>
          con 7,000,000+ usuarios.
        </p>
      </dd>
    </dl>
    <!-- PF box -->
    <dl class="fl margin-left135">
      <dt><img src="<?php echo $pResUrl;?>images/pf-box.png" alt=""></dt>
      <dd>
        <p class="rate"><del>€39,95</del> <span>€<b>0</b></span></p>
        <p class="des">
          La herramienta de protección de carpeta fácil<br>
          de usar y con una contraseña.
        </p>
      </dd>
    </dl>
    <!-- AMCS box-->
    <dl class="fr">
      <dt><img src="<?php echo $pResUrl;?>images/amcs-box.png" alt=""></dt>
      <dd>
        <p class="rate"><del>€19,99</del> <span>€<b>0</b></span></p>
        <p class="des">
          Limpiador y amplificador todo en uno<br>
          para dispositivos Android
        </p>
      </dd>
    </dl>
    <!-- clear float  -->
    <div class="clear"></div>
    <!-- price -->
    <p class="price">
      <del>139,92€</del> <strong>22</strong><b>,95€</b><br>
    </p>
    <!-- buybtn -->
    <a class="buybtn"
       href="https://www.iobit.com/buy.php?product=es-ascu123pcsdpfamc2295&ref=es_ascu123pcpfsdamcpurchase1812<?php echo $refStr;?>&refs=es_purchase_ascu"
       onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascupurchase1812-es')">
      Obtener mi descuento + regalo gratis
      <!-- ribbon -->
      <i class="ribbon ribbon2"></i>
    </a>
    <!-- notes -->
    <p class="notes"><i></i> Cantidades limitadas, sólo quedan <b class="packsNum"><?php echo $packsNum ?></b> paquete de regalos</p>
  </div>
</div>
<!-- betweenbuy end -->


<!-- review start -->
<div class="review wrapper">
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

<!-- awards start -->
<div class="awards wrapper">
  <h2>Recomendado y premiado por estos Medios</h2>
  <img src="<?php echo $pResUrl;?>images/awards-icon.png" alt="">
</div>
<!-- awards end -->
<!-- comparison start -->
<div class="comparison wrapper">
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

<!-- bottombuy start -->
<div class="bottombuy">
  <div class="wrapper clearfix">
    <!-- left-message -->
    <div class="left-message fl">
      <img class="banner-asc" src="<?php echo $pResUrl;?>images/bottombuy-ascu.png" alt="">
      <img class="banner-reduce" src="<?php echo $pResUrl;?>images/bottombuy-ascu-reduce.png" alt="">
    </div>
    <!-- right-message -->
    <div class="right-message fr">
      <!-- ASC12 -->
      <h3>
        <b>OFERTA EXCLUSIVA DE NAVIDAD</b>
        <span>Paquete de Navidad gratis</span>
      </h3>
      <!-- notes -->
      <p class="notes"><i></i> ¡Cantidades limitadas! Sólo quedan <b class="packsNum"><?php echo $packsNum ?></b> <span class="reduce">-1</span></p>
      <!-- line -->
      <hr>
      <!-- price -->
      <p class="price">
        <del>139,92€</del> <strong>22</strong><b>,95€</b><br>
      </p>
      <!-- ribbon -->
      <i class="ribbon ribbon1"></i>
      <!-- buybtn -->
      <a class="buybtn"
         href="https://www.iobit.com/buy.php?product=es-ascu123pcsdpfamc2295&ref=es_ascu123pcpfsdamcpurchase1812<?php echo $refStr;?>&refs=es_purchase_ascu"
         onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascupurchase1812-es')">
        <span>Comprar ahora</span>
        <!-- ribbon -->
        <i class="ribbon ribbon2"></i>
      </a>
      <!-- attention -->
      <p class="attention"><i></i> Más de <b class="buyNum"><?php echo $buyNum ?></b> personas han comprado</p>
    </div>
  </div>
</div>
<!-- bottombuy end -->

<!-- footer start -->
<div class="footer">
  <!-- payment -->
  <div class="payment wrapper clearfix">
    <!-- visa -->
    <dl class="visa">
      <dt><img src="<?php echo $pResUrl; ?>images/payment.png" alt=""></dt>
      <dd><strong>Formas de pago</strong></dd>
      <dd>Aceptamos varios formas de pago por <br> su pedido</dd>
    </dl>
    <!-- moneyback -->
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/moneyback.png" alt=""></dt>
      <dd><strong>Garantía de reembolso</strong></dd>
      <dd>Si no está satisfecho en los primeros <br> 60 días, le devolveremos su dinero</dd>
    </dl>
    <!-- godaddy -->
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/godaddy.png" alt=""></dt>
      <dd><strong>Pago seguro</strong></dd>
      <dd>100% pago seguro para su pedido</dd>
    </dl>
    <!-- servicion -->
    <dl class="servicion">
      <dt><img src="<?php echo $pResUrl; ?>images/servicio.png" alt=""></dt>
      <dd><strong>Servicio al cliente</strong></dd>
      <dd>24/7 Soporte Técnico gratis</dd>
    </dl>
  </div>
  <div class="container">
  <dl class="annotation wrapper">
    <dt>Nota:</dt>
    <dd>1*.Estos programas promocionales están sujetos a cambios sin previo aviso, dependiendo de nuestra discreción exclusiva en cualquier momento.</dd>
    <dd>2*.Datos pueden variar basados en diferentes sistemas o ordenadores.</dd>
  </dl>
  <p class="copyright">Copyright  2005 - <?php echo date('Y')?> IObit. Todos los derechos reservados</p>
  </div>
</div>
<!-- footer end -->

<!-- float start -->
<div class="float">
  <!-- close -->
  <a class="close fr" href="javascript: closeFloat();">-</a>
  <div class="clear"></div>
  <p>
    <span id="firstName"><?php echo $firstName;?></span> <span id="lastName"><?php echo $lastName;?></span> ha comprado.<br>
    Date prisa, sólo quedan <b class="packsNum"><?php echo $packsNum ?></b> paquetes de Navidad
  </p>

</div>
<!-- float end -->

<div class='popout'><p>La licencia de ASCU v11 está válida en la <strong>versión nueva 12.</strong></p></div>

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>

</body>
</html>