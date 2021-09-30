<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../../';
}
include $pRootUrl . 'include/common.inc.php';

$viewNum = rand(168, 236);
if ($_GET['action'] == 'getViewNum') {
  echo $viewNum;
  exit();
}

// $refStr .= empty($_GET['st']) ? '' : ('-' . $_GET['st']);
// if (in_array($_GET['pop'], array('x_db', 'xi_db', 'xb_db'))) {
//   $refStr .= '-' . $_GET['pop'];
// }
// if (!empty($_GET['to'])) {
//   $refStr .= '-' . $_GET['to'];
// }
// if (preg_match_all('/([0-9]*)\./', $_GET['ver'], $matches)) {
//   $ver = $matches[1][0] . $matches[1][1];
//   $refStr .= '-' . $ver;
// }
// $refStr .= empty($_GET['ref']) ? 'esaff_ascu14_2021specialsale' : ('-' . $_GET['ref']);
// $refStr .= empty($_GET['user']) ? '' : ('-' . $_GET['user']);
// $refStr .= empty($_GET['insur']) ? '' : ('-' . $_GET['insur']);
// $refStr .= empty($_GET['insday']) ? '' : ('-' . $_GET['insday']);
// $refStr .= '-i' . $_GET['instd'] . '-u' . $_GET['usr'] . '-t' . $_GET['type'] . '-e' . $_GET['expd'];
if (empty($_GET['ref'])) $_GET['ref'] = 'esaff_ascu14_2021specialsale';
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Oferta Especial para Advanced SystemCare Ultimate PRO – IObit</title>
  <meta name="Copyright" content="IObit">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,600,700&display=swap" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css') ?>" rel="stylesheet">
  <?php echo $gJavascript['public']; ?>
  <?php echo $gJavascript['head']; ?>
</head>

<body>
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com/es/index.php" target="_blank">IObit</a>
      <div class="title">
        <h1>Oferta Especial del Año Nuevo</h1>
        <h2>¡Última oportunidad para ahorrar a lo grande!</h2>
      </div>
      <div class="clearfix">
        <div class="offer big">
          <div class="countdown"><span>Expira en: </span><b>15</b>m<b>24</b>s<b>00</b>ms</div>
          <b class="discount"><em>-</em><big>84</big>%</b>
          <div class="imgbox">
            <img src="<?php echo getStaticUrl('images/ascu-box.png') ?>" alt="" />
            <div class="giftbox">
              <span class="gift-bg"></span>
              <img class="iu" src="<?php echo getStaticUrl('images/iu-box.png') ?>" alt="" />
              <img class="sd" src="<?php echo getStaticUrl('images/sd-box.png') ?>" alt="" />
              <img class="pf" src="<?php echo getStaticUrl('images/pf-box.png') ?>" alt="" />
              <span class="gift-line one"></span>
              <!-- <span class="gift-line two"></span> -->
              <span class="gift-flower"></span>
            </div>
          </div>
          <div class="tag"><span>1 año /</span> 3 PC + 3 regalos PRO</div>
          <div class="price">
            <p><strong>22.95<small>€</small></strong> <del>139.92 €</del></p>
            <a class="buybtn" href="https://www.iobit.com/buy.php?product=esaff-ascu143pcsdpfiu2295&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>" onclick="ga('send', 'event', 'ascubuy', 'buy', 'esaffascu142021specialsale')">
              Comprar Ahora
            </a>
            <p>licencia válida para futuras versiones</p>
          </div>
        </div>


        <div class="offer">
          <b class="discount"><em>-</em><big>55</big>%</b>
          <div class="imgbox">
            <img src="<?php echo getStaticUrl('images/ascu-box.png') ?>" alt="" />
          </div>
          <div class="tag"><span>1 año /</span> 3 PC</div>
          <div class="price">
            <p><strong>22.95<small>€</small></strong> <del>49.99 €</del></p>
            <a class="buybtn empty" href="https://www.iobit.com/buy.php?product=esaff-ascu143pc2295&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>" onclick="ga('send', 'event', 'ascubuy', 'buy', 'esaffascu142021specialsale')">
              Comprar Ahora
            </a>
            <p>licencia válida para futuras versiones</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- service start -->
  <div class="service">
    <div class="wrapper clearfix">
      <dl class="first">
        <dt><img src="<?php echo getStaticUrl('images/payment.png') ?>" alt="" /></dt>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/pagamento-sicuro.png') ?>" alt="" /></dt>
        <dd>Pago 100% seguro</dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/moneyback.png') ?>" alt="" /></dt>
        <dd>Garantía de reembolso</dd>
      </dl>
      <dl class="last">
        <dt><img src="<?php echo getStaticUrl('images/service.png') ?>" alt="" /></dt>
        <dd>Servicio al cliente 24/7</dd>
      </dl>
    </div>
  </div>
  <!-- service end -->

  <!-- feature start -->
  <div class="feature">
    <h2>¡Disfruta de protección completa con Advanced SystemCare Ultimate 14!</h2>
    <div class="wrapper">
      <!-- <p>Solo PRO ottimizza e pulisce il tuo PC automaticamente e in modo completo con la nuova modalità AI</p> -->
      <div class="feature-wrap clearfix">
        <div class="feature-screen fl">
          <div class="feature-list">
            <img src="<?php echo getStaticUrl('images/asc-screen01.png') ?>" alt="" />
          </div>
          <div class="feature-list">
            <img src="<?php echo getStaticUrl('images/asc-screen02.png') ?>" alt="" />
            <img class="feature-screen-small one" src="<?php echo getStaticUrl('images/asc-screen02-small.png') ?>" alt="" />
          </div>
          <div class="feature-list on">
            <img src="<?php echo getStaticUrl('images/asc-screen03.png') ?>" alt="" />
            <img class="feature-screen-small two" src="<?php echo getStaticUrl('images/asc-screen03-small.png') ?>" alt="" />
          </div>
          <div class="feature-list">
            <img src="<?php echo getStaticUrl('images/asc-screen04.png') ?>" alt="" />
          </div>
        </div>
        <div class="feature-tab fr">
          <dl class="one on">
            <dt><img src="<?php echo getStaticUrl('images/feature-icon01.png') ?>" alt="" /></dt>
            <dd>
              <h3>PC más limpio y rápido</h3>
              <p>
                Limpia archivos basura y registros innecesarios para liberar espacio en disco, administra los elementos de inicio para acelerar el sistema, monitorizando en tiempo real tu PC para reducir el tiempo de respuesta del mismo. </p>
            </dd>
          </dl>
          <dl class="two">
            <dt><img src="<?php echo getStaticUrl('images/feature-icon02.png') ?>" alt="" /></dt>
            <dd>
              <h3>Protección integral de navegación</h3>
              <p>
                Bloquea anuncios, interrumpe la minería de criptomonedas en el navegador web y te informa inmediatamente cuando se cambia tu página de inicio para asegurar tu navegación en línea. </p>
            </dd>
          </dl>
          <dl class="three">
            <dt><img src="<?php echo getStaticUrl('images/feature-icon03.png') ?>" alt="" /></dt>
            <dd>
              <h3>Datos personales protegidos</h3>
              <p>
                Nuevo Escudo de privacidad y Protección de huella digital protege tus datos sensibles contra software de chantaje, sitios de phishing y mensajes basura. </p>
            </dd>
          </dl>
          <dl class="four">
            <dt><img src="<?php echo getStaticUrl('images/feature-icon04.png') ?>" alt="" /></dt>
            <dd>
              <h3>Protección eficaz contra virus y malware</h3>
              <p>
                Previene y elimina virus y malware con motor de Bitdefender para bloquear ataques de ransomware y capturar intrusos espías. </p>
            </dd>
          </dl>
        </div>
      </div>
    </div>
  </div>
  <!-- feature end -->

  <!-- gifts start -->
  <div class="gifts">
    <div class="wrapper">
      <h2>CANTIDAD LIMITADA, ¡PAGA UN PRECIO CON DESCUENTO Y OBTÉN TRES REGALOS! *</h2>
      <div class="gift-list clearfix">
        <dl class="first">
          <dt><img src="<?php echo getStaticUrl('images/iu-box.png') ?>" alt="IObit Uninstaller PRO" /></dt>
          <dd>
            <h4>IObit Uninstaller PRO</h4>
            <p>Monitor de Instalación</p>
            <p>Algoritmo de desinstalación</p>
            <p>Eliminación de software obstinado</p>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/sd-box.png') ?>" alt="IObit Smart Defrag PRO" /></dt>
          <dd>
            <h4>IObit Smart Defrag PRO</h4>
            <p>Motor Desfragmentación</p>
            <p>Desfragmentación de archivos grandes</p>
            <p>Estadísticas del disco</p>
          </dd>
        </dl>
        <dl class="last">
          <dt><img src="<?php echo getStaticUrl('images/pf-box.png') ?>" alt="Protected Folder" /></dt>
          <dd>
            <h4>Protected Folder</h4>
            <p>Opción de bloquear carpetas</p>
            <p>Lista exclusiva</p>
          </dd>
        </dl>
      </div>
      <div class="price">
        <h3>Advanced SystemCare Ultimate 14 + 3 REGALOS PRO</h3>
        <p>Solo <strong>22.95<small>€</small></strong> <span>Ahorra 132€</span></p>
        <a class="buybtn" href="https://www.iobit.com/buy.php?product=esaff-ascu143pcsdpfiu2295&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>" onclick="ga('send', 'event', 'ascubuy', 'buy', 'esaffascu142021specialsale')">
          Comprar Ahora
        </a>
      </div>
    </div>
  </div>
  <!-- gifts end -->

  <!-- comparison start -->
  <div class="comparison ">
    <div class="wrapper">
      <h4>¿Por qué elegir Advanced SystemCare Ultimate 14?</h4>
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

  <!-- review start -->
  <div class="review">
    <div class="wrapper">
      <div class="content">
        <dl>
          <dt>
            <h3>Reseña de los Medios</h3>
          </dt>
          <dd>
            <h4>“Advanced SystemCare Ultimate es una completísima solución todo en uno muy recomendable.”</h4>
          </dd>
          <dd>
            “Advanced SystemCare Ultimate es una potente suite de optimización para Windows que con su nueva actualización viene cargada de nuevas e interesantes herramientas.”
          </dd>
        </dl>
        <dl class="active">
          <dt>
            <h3>Comentarios de usuarios</h3>
          </dt>
          <dd>
            <h4>"¡Advanced SystemCare Ultimate es el asistente inteligente. Grande victoria!"</h4>
          </dd>
          <dd>
            “El tiempo pasado tuve frecuentemente un problema de desordenar mi ordenador. Después de obtener mi código de Advanced Systemcare Ultimate, este caso nunca ocurrió. En este software incluido función de antivirus, ya no necesita segundo producto. Advanced SystemCare Ultimate es el asistente inteligente. Mi ordenador está ejecutando más suave y más rápido como un nuevo. A diferencia de otros productos, no ha habido conflictos constantes."
          </dd>
        </dl>
        <dl>
          <dt>
            <h3>Comentarios de usuarios</h3>
          </dt>
          <dd>
            <h4>"Recomendé advanced systemcare ultimate para optimización de su antivirus o del sistema."</h4>
          </dd>
          <dd>
            “En la versión obsoleta de advanced systemcare ultimate, no tuve problemas en casi todo, tales como sistema, malware, etc. Ahora, se ha actualizado y más funciones de advanced systemcare ultimate aceleran mi ordenador portátil ejecutando 5 veces más rápido que antes. También me gusta mucho la piel nueva. Cuando arreglo otros ordenadores, recomendaré advanced systemcare ultimate para optimización de su antivirus o del sistema."
          </dd>
        </dl>
        <dl>
          <dt>
            <h3>Comentarios de usuarios</h3>
          </dt>
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
          <div class="pic"><img src="<?php echo getStaticUrl('images/softonic.png') ?>" alt="Softonic">
          </div>
          <p>Softonic</p>
        </li>
        <li class="active">
          <div class="pic"><img src="<?php echo getStaticUrl('images/rod-garnett.png') ?>" alt="Rod Garnett"></div>
          <p>Rod Garnett</p>
        </li>
        <li>
          <div class="pic"><img src="<?php echo getStaticUrl('images/dareen-lim.png') ?>" alt="Dareen Lim">
          </div>
          <p>Dareen Lim</p>
        </li>
        <li>
          <div class="pic"><img src="<?php echo getStaticUrl('images/russell-peck.png') ?>" alt="Russell Peck">
          </div>
          <p>Russell Peck</p>
        </li>
      </ul>
    </div>
  </div>
  <!-- review end -->

  <!-- awards start -->
  <div class="awards">
    <div class="wrapper">
      <h2>Recomendado y premiado por estos Medios</h2>
      <img src="<?php echo getStaticUrl('images/awards.png') ?>" alt="" />
    </div>
  </div>
  <!-- awards end -->

  <!-- footbuy start -->
  <div class="footbuy">
    <h2>Mejor protección y no retraso de rendimiento</h2>
    <div class="wrapper clearfix">
      <div class="imglist fl">
        <img class="asc" src="<?php echo getStaticUrl('images/ascu-box.png') ?>" alt="" />
        <img class="iu" src="<?php echo getStaticUrl('images/iu-box.png') ?>" alt="" />
        <img class="sd" src="<?php echo getStaticUrl('images/sd-box.png') ?>" alt="" />
        <img class="pf" src="<?php echo getStaticUrl('images/pf-box.png') ?>" alt="" />
        <span class="gift-line"></span>
        <span class="gift-flower"></span>
        <div class="tag"><span>1 año /</span> 3 PC + 3 regalos PRO</div>
        <b class="gift-font">Gratis</b>
      </div>
      <div class="changelist fl">
        <div class="changeprice">
          <p class="price" style="padding-top: 36px;">
            <strong>22.95<small>€</small></strong>
            <del>139.92 €</del>
          </p>
          <!-- <p>0,05€ al giorno</p> -->
        </div>
        <h3>¡Paga 1 precio y Obtén 4! *</h3>
      </div>
      <a class="buybtn fr" href="https://www.iobit.com/buy.php?product=esaff-ascu143pcsdpfiu2295&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>" onclick="ga('send', 'event', 'ascubuy', 'buy', 'esaffascu142021specialsale')">
        Comprar Ahora
      </a>
    </div>
  </div>
  <!-- footbuy end -->

  <!-- footer start -->
  <div class="footer">
    <dl class="wrapper">
      <dt>Nota:</dt>
      <dd>*. Estos programas promocionales están sujetos a cambios sin previo aviso, dependiendo de nuestra discreción exclusiva en cualquier momento.</dd>
      <dd>*. Datos pueden variar basados en diferentes sistemas u ordenadores.</dd>
    </dl>
    <p class="copyright">Copyright © 2005 - <?php echo date('Y') ?> IObit. Todos los derechos reservados</p>
  </div>
  <!-- footer end -->

  <script src="<?php echo getStaticUrl('script/jquery.min.js') ?>"></script>
  <script src="<?php echo $pRootUrl; ?>tpl/js/TweenMax.min.js"></script>
  <script src="<?php echo $pRootUrl; ?>tpl/js/modernizr.min.js"></script>
  <script src="<?php echo $pRootUrl; ?>tpl/js/review-3d-carousel.min.js"></script>
  <script src="<?php echo getStaticUrl('script/script.js') ?>"></script>
</body>

</html>