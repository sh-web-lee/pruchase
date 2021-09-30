<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';
  include $pRootUrl.'callback.php';

if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'esascup' . $date;
  if (!isset($_COOKIE[$c_name])) {
    $packsNum = 128;
  } else {
    if (intval($_COOKIE[$c_name]) <= 10) {
      $packsNum = 10;
    } else {
      $packsNum = $_COOKIE[$c_name] - 1;
    }
  }
  setcookie($c_name, $packsNum, time() + 3600 * 24 *30);
  echo $packsNum;
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
<title>Oferta limitada, hasta 80% en Advanced SystemCare Ultimate – IObit</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Lato:400,700,900'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit">
      </a>
      <div class="title">
        <h1>OFERTA POR TIEMPO LIMITADOO</h1>
        <p>Paga 1, llévate 3 3X1</p>
      </div>
      <div class="offer clearfix">
        <div class="left fl">
          <img src="<?php echo getStaticUrl('images/ascu-box.png')?>" alt=""/>
          <ul id="banCountdown" class="countdown clearfix">
            <li><span>HORAS</span><strong>15</strong></li>
            <li><span>MIN</span><strong>30</strong></li>
            <li><span>SEG</span><strong>60</strong></li>
            <li class="last"><span>Ms</span><strong>045</strong><sup>*</sup></li>
          </ul>
        </div>
        <div class="right fl">
          <h2>Advanced SystemCare Ultimate 11</h2>
          <div class="name">3 PCs, 1 año</div>
          <h3><i class="all-icons"></i> Regalos gratis valen 69,94€</h3>
          <div class="price">
            <p><strong>22<small>,95€</small></strong> <del>119,93€</del></p>
            <a class="buybtn" href="https://www.iobit.com/buy.php?product=es-ascu113pcsdpf2295&ref=es_ascu113pcpfsdpurchase1806<?php echo $refStr;?>&refs=es_purchase_ascu" onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascupurchase1806-es')">
              Comprar ahora
            </a>
            <p class="people"><i class="all-icons"></i>  Más de <b class="buyNum"><?php echo $buyNum; ?></b> personas ya han comprado</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- service start -->
  <div class="service">
    <div class="wrapper clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/pays.png')?>"></dt>
        <dd>
          <h3>Formas de pago</h3>
          <p>Aceptamos varios formas de pago <br>por su pedido</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>"></dt>
        <dd>
          <h3>Garandía de reembolso</h3>
          <p>Si no está satisfecho en los primeros 60 días, le devolveremos su dinero</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/godaddy.png')?>"></dt>
        <dd>
          <h3>Pago seguro</h3>
          <p>100% pago seguro para su pedido</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/service.png')?>"></dt>
        <dd>
          <h3>Servicio al cliente</h3>
          <p>24/7 Soporte Técnico gratis</p>
        </dd>
      </dl>
    </div>
  </div>
  <!-- service end -->

  <!-- intro start -->
  <div class="intro wrapper">
    <h2>¡Mejor protección contra virus, spyware y otras amenazas para tu PC!</h2>
    <div class="clearfix panel">
      <dl class="list one">
        <dt class="fl"><img src="<?php echo getStaticUrl('images/list01.png')?>" alt="" /></dt>
        <dd class="fl">Protege PC contra amenazas <span>y ataques de virus</span></dd>
      </dl>
      <dl class="list two">
        <dt class="fl"><img src="<?php echo getStaticUrl('images/list02.png')?>" alt="" /></dt>
        <dd class="fl">PC más limpio y hasta 300% más <span>rápido por limpiar y acelerar con un clic.*</span></dd>
      </dl>
      <dl class="list three">
        <dt><img src="<?php echo getStaticUrl('images/list03.png')?>" alt="" /></dt>
        <dd>Monitoriza y protege tu PC en <span>tiempo real con Módulo</span> de Protección</dd>
      </dl>
      <dl class="list four">
        <dt><img src="<?php echo getStaticUrl('images/list04.png')?>" alt="" /></dt>
        <dd>Protege navegación contra <span>anuncios e intrusos y limpia rastro</span> de privacidad</dd>
      </dl>
      <div class="circle"><img src="<?php echo getStaticUrl('images/circle.png')?>" alt="" /></div>
      <div class="circle sec"><img src="<?php echo getStaticUrl('images/circle.png')?>" alt="" /></div>
      <div class="circle third"><img src="<?php echo getStaticUrl('images/circle.png')?>" alt="" /></div>
      <a class="more" href="javascript: void(0);">Más razón para elegir ASCU>></a>
    </div>
  </div>
  <!-- intro end -->

  <!-- donation start -->
  <div class="donation">
    <div class="wrapper clearfix">
      <h2>¡Rápido, los regalos están limitados ahora!</h2>
      <h3>¡Sólo <b class="packsNum">**</b> paquetes disponibles!</h3>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/pf-box.png')?>" alt="Protected Folder"/></dt>
        <dd>
          <h4>Protected Folder (1 PC, 1 año ) <strong>0€</strong> <del>39,95€</del></h4>
          <ul>
            <li><i class="all-icons"></i> Protege tus archivos importantes y personales.</li>
            <li><i class="all-icons"></i> No robo de datos y fugas de privacidad.</li>
          </ul>
        </dd>
      </dl>
      <dl class="right">
        <dt><img src="<?php echo getStaticUrl('images/sd-box.png')?>" alt="Smart Defrag 6 PRO"/></dt>
        <dd>
          <h4>Smart Defrag 6 PRO (1 PC, 1 año ) <strong>0€</strong> <del>29,99€</del></h4>
          <ul>
            <li><i class="all-icons"></i> Máxima velocidad de acceso a archivos.</li>
            <li><i class="all-icons"></i> Desfragmentación de disco segura y estable.</li>
          </ul>
        </dd>
      </dl>
    </div>
  </div>
  <!-- donation end -->

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
      <h4>¿Por qué elegir Advanced SystemCare Ultimate 11?</h4>
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
          Un clic para limpiar los virus ocultos y difíciles, troyanos, gusanos, spyware, adware y diversos malwares. Advanced SystemCare Ultimate 11 también proporciona una protección proactiva, siempre-online, automática y contra todo tipo de amenazas de seguridad de Internet, con actualización rápida de base de datos de virus.
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

  <!-- footbuy start -->
  <div class="footbuy">
    <div class="wrapper clearfix">
      <img class="imgbox fl" src="<?php echo getStaticUrl('images/ascu-box-foot.png')?>" alt=""/>
      <div class="price fr">
        <ul id="footCountdown" class="countdown">
          <li><strong>15</strong> <span>H: </span></li>
          <li><strong>30</strong> <span>M: </span></li>
          <li><strong>60</strong> <span>S: </span></li>
          <li><strong>045</strong> <span>Ms*</span></li>
        </ul>
        <h2>¡Oferta imperdible, no esperes más!</h2>
        <p><strong>22<small>,95€</small></strong> <del>119,93€</del></p>
        <a class="buybtn" href="https://www.iobit.com/buy.php?product=es-ascu113pcsdpf2295&ref=es_ascu113pcpfsdpurchase1806<?php echo $refStr;?>&refs=es_purchase_ascu" onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascupurchase1806-es')">
          Comprar ahora
        </a>
        <p class="people"><i class="all-icons"></i>  Más de <b class="buyNum"><?php echo $buyNum; ?></b> personas ya han comprado</p>
      </div>
    </div>
  </div>
  <!-- footbuy end -->

  <div class="wrapper">
    <!-- annotation start -->
    <dl class="annotation">
      <dt>Nota:</dt>
      <dd>
        *Estos programas promocionales están sujetos a cambios sin previo aviso, dependiendo de nuestra discreción exclusiva en cualquier momento.
      </dd>
      <dd>*Datos pueden variar basados en diferentes sistemas u ordenadores.</dd>
    </dl>
    <!-- annotation end -->
    
    <!-- footer start -->
    <div class="footer">Copyright 2005 - <?php echo date('Y')?> IObit. Todos los derechos reservados</div>
    <!-- footer end -->
  </div>

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>