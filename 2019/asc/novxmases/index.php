<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'esascxnov_p' . $date;
  $c_name_t = 'esascxnov_t' . $date;
  if ($_COOKIE[$c_name] === null) {
    $totalNum = $packsNum = 50;
    setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    setcookie($c_name_t, $totalNum, time() + 3600 * 24 * 2);
  } else {
    if (intval($_COOKIE[$c_name]) <= 3) {
      $packsNum = 3;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    } else {
      if ((rand(1, 100) % 2) == 0) {
        $packsNum = $_COOKIE[$c_name];
      } else {
        $packsNum = $_COOKIE[$c_name] - 1;
        setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
      }
    }
  }
  echo json_encode(array('packsNum' => $packsNum));
  exit();
}


$refStr = empty($_GET['st']) ? '' : ('-' . $_GET['st']);
$refStr .= empty($_GET['ref']) ? '' : ('-' . $_GET['ref']);
$refStr .= empty($_GET['to']) ? '' : ('-' . $_GET['to']);
if (in_array($_GET['pop'], array('xr_sdpasc', 'xr_dbpasc', 'x_asc', 'xi_asc', 'xb_asc'))) {
  $refStr .= '-' . $_GET['pop'];
}
if (in_array($_GET['type'], array('pro', 'giveawayexp'))) {
  $refStr .= '-' . $_GET['type'];
}
$refStr .= '-i' . $_GET['instd'] . '-u' . $_GET['usr'] . '-l' . $_GET['litype'] . '-e' . $_GET['expd'];
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Oferta Especial para Advanced SystemCare PRO – IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700&display=swap" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css') ?>" rel="stylesheet">
  <?php echo $gJavascript['public']; ?>
  <?php echo $gJavascript['head'] ?>
</head>

<body>
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper clearfix">
      <a class="logo" href="https://www.iobit.com/es/index.php" target="_blank">IObit</a>
      <div class="title">
        <h1>¡ACELERA Y PROTEGE TU PC AHORA!</h1>
        <p>Limpieza profunda, 300% más rápido y protección de la privacidad personal en tiempo real</p>
      </div>
      <div class="left fl">
        <h4>OFERTA DEL AÑO NUEVO</h4>
        <h2>87% <small>DE DESCUENDO</small></h2>
        <img src="<?php echo getStaticUrl('images/db-box.png') ?>" alt="" />
      </div>
      <div class="right fr">
        <div class="chart">
          <div class="clist one">
            <span class="cost"><strong>19,99€</strong></span>
            <span class="line"></span>
            <span class="point"></span>
            <span class="month">12 Diciembre</span>
          </div>
          <div class="clist two">
            <span class="cost"><strong><big>17</big>,99€</strong></span>
            <span class="line"></span>
            <span class="point"></span>
            <span class="text">Solo quedan <b class="pickNum">50</b>* piezas, ¡date prisa!</span>
          </div>
          <div class="clist three">
            <span class="cost"><strong>22,99€</strong></span>
            <span class="line"></span>
            <span class="point"></span>
            <span class="month">14 Diciembre</span>
          </div>
        </div>
        <div class="price">
          <p><strong><big>17</big>,99€</strong> <del>139,92€</del></p>
          <a class="buybtn" href="https://www.iobit.com/buy.php?product=es-asc133pcsdpfisu1799&ref=es_asc133pcpfsdisu1799purchase1911<?php echo $refStr; ?>&refs=es_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc3pcpurchase1911-es');">
            COMPRAR AHORA
          </a>
        </div>
      </div>
    </div>
    <!--    <span class="snow snow01"></span>-->
    <!--    <span class="snow snow02"></span>-->
    <!--    <span class="snow snow03"></span>-->
  </div>
  <!-- banner end -->

  <!-- payment start -->
  <div class="payment wrapper"><img src="<?php echo getStaticUrl('images/payments.png') ?>" alt="" /></div>
  <!-- payment end -->

  <!-- map start -->
  <div class="map">
    <div class="wrapper">
      <h2>
        Disfruta de un PC más rápido y seguro con el mejor rendimiento y protección con<br>
        Advanced SystemCare 13 PRO
      </h2>
      <p>Elección de más de 10 millones de usuarios internacionales</p>
    </div>
  </div>
  <!-- map end -->

  <!-- feature start -->
  <?php if ($_GET['st'] != 'asc_wr') : ?>
    <!-- feature start -->
    <div class="feature">
      <div class="wrapper clearfix">
        <!-- feature details -->
        <ul class="left-details fl">
          <!-- 01 -->
          <li class="padding-left50 top">
            <dl class="clearfix">
              <dt class="fl"><img src="<?php echo $pResUrl; ?>images/feature-icon01.png" alt=""></dt>
              <dd class="fl">
                <h3>200%*</h3>
                <p>
                  Reduce el retraso de sistema y acelera la<br>
                  velocidad de tu PC hasta 200% más rápida!
                </p>
              </dd>
            </dl>
          </li>
          <!-- 02 -->
          <li class="middle">
            <dl class="clearfix">
              <dt class="fl"><img src="<?php echo $pResUrl; ?>images/feature-icon02.png" alt=""></dt>
              <dd class="fl">
                <h3>100% protección</h3>
                <p>
                  Borra los rastros de privacidad para<br>
                  evitar que se rastreen
                </p>
              </dd>
            </dl>
          </li>
          <!-- 03 -->
          <li class="padding-left30 bottom">
            <dl class="clearfix">
              <dt class="fl"><img src="<?php echo $pResUrl; ?>images/feature-icon03.png" alt=""></dt>
              <dd class="fl">
                <h3>Más profundo</h3>
                <p>
                  Repara los problemas de registro para<br>
                  reducir los bloqueos de Windows y<br>
                  los mensajes de error
                </p>
              </dd>
            </dl>
          </li>
        </ul>
        <ul class="right-details fr">
          <!-- 04 -->
          <li class="padding-left165 top">
            <dl class="clearfix">
              <dt class="fl"><img src="<?php echo $pResUrl; ?>images/feature-icon04.png" alt=""></dt>
              <dd class="fl">
                <h3>300%*</h3>
                <p>
                  Acelere la velocidad de descarga, navegación,<br>
                  juegos, visualización de YouTube hasta un<br>
                  300% más rápida
                </p>
              </dd>
            </dl>
          </li>
          <!-- 05 -->
          <li class="padding-left180 middle">
            <dl class="clearfix">
              <dt class="fl"><img src="<?php echo $pResUrl; ?>images/feature-icon05.png" alt=""></dt>
              <dd class="fl">
                <h3>Función automática</h3>
                <p>
                  Detiene automáticamente los procesos<br>
                  no utilizados para liberar RAM y mejorar el<br>
                  rendimiento de PC
                </p>
              </dd>
            </dl>
          </li>
          <!-- 06 -->
          <li class="padding-left75 bottom">
            <dl class="clearfix">
              <dt class="fl"><img src="<?php echo $pResUrl; ?>images/feature-icon06.png" alt=""></dt>
              <dd class="fl">
                <h3>En Tiempo real </h3>
                <p>
                  Protección contra amenazas de<br>
                  seguridad para PC y navegación en tiempo real
                </p>
              </dd>
            </dl>
          </li>
        </ul>
        <!-- clear float -->
        <div class="clear"></div>
        <!-- a.intro -->
        <a class="intro" href="javascript:void (0);">Más información sobre la edición PRO>></a>
      </div>
    </div>
    <!-- feature end -->
  <?php else : ?>
    <!-- feature start -->
    <div class="feature upd">
      <div class="wrapper clearfix">
        <!-- feature details -->
        <ul class="left-details fl">
          <!-- 01 -->
          <li class="padding-left50 top">
            <dl class="clearfix">
              <dt class="fl"><img src="<?php echo $pResUrl; ?>images/feature-icon01.png" alt=""></dt>
              <dd class="fl">
                <h3>200%*</h3>
                <p>
                  Reduce el retraso de sistema y acelera la<br>
                  velocidad de tu PC hasta 200% más rápida!
                </p>
              </dd>
            </dl>
          </li>
          <!-- 02 -->
          <li class="middle">
            <dl class="clearfix">
              <dt class="fl"><img src="<?php echo $pResUrl; ?>images/feature-icon02.png" alt=""></dt>
              <dd class="fl">
                <h3>100% protección</h3>
                <p>
                  Borra los rastros de privacidad para<br>
                  evitar que se rastreen
                </p>
              </dd>
            </dl>
          </li>
          <!-- 03 -->
          <li class="padding-left30 bottom">
            <dl class="clearfix">
              <dt class="fl"><img src="<?php echo $pResUrl; ?>images/feature-icon03.png" alt=""></dt>
              <dd class="fl">
                <h3>Más profundo</h3>
                <p>
                  Repara los problemas de registro para<br>
                  reducir los bloqueos de Windows y<br>
                  los mensajes de error
                </p>
              </dd>
            </dl>
          </li>
        </ul>
        <ul class="right-details fr">
          <!-- 04 -->
          <li class="padding-left165 top">
            <dl class="clearfix">
              <dt class="fl"><img src="<?php echo $pResUrl; ?>images/feature-icon04.png" alt=""></dt>
              <dd class="fl">
                <h3>300%*</h3>
                <p>
                  Acelere la velocidad de descarga, navegación,<br>
                  juegos, visualización de YouTube hasta un<br>
                  300% más rápida
                </p>
              </dd>
            </dl>
          </li>
          <!-- 05 -->
          <li class="padding-left180 middle">
            <dl class="clearfix">
              <dt class="fl"><img src="<?php echo $pResUrl; ?>images/upd_software.png" alt=""></dt>
              <dd class="fl">
                <h3>Actualización de software <br>
                  segura <img src="<?php echo $pResUrl; ?>images/attention.png" alt="ATTENTION"></h3>
                <p>
                  Con sólo un clic, puede actualizar software <br>
                  importante sin la intervención del usuario, <br>
                  incluido <b>WinRAR*, que fallo de seguridad <br>
                    descubierto puede pone en peligro su <br>
                    computadora por años.</b><br>
                  <em>* Actualizar inmediatamente, una vez que la <br>
                    nueva versión oficial esté lista.</em>
                </p>
              </dd>
            </dl>
          </li>
          <!-- 06 -->
          <li class="padding-left75 bottom">
            <dl class="clearfix">
              <dt class="fl"><img src="<?php echo $pResUrl; ?>images/feature-icon06.png" alt=""></dt>
              <dd class="fl">
                <h3>En Tiempo real </h3>
                <p>
                  Protección contra amenazas de<br>
                  seguridad para PC y navegación en tiempo real
                </p>
              </dd>
            </dl>
          </li>
        </ul>
        <!-- clear float -->
        <div class="clear"></div>
        <!-- a.intro -->
        <a class="intro" href="javascript:void (0);">Más información sobre la edición PRO>></a>
      </div>
    </div>
    <!-- feature end -->
  <?php endif; ?>
  <!-- feature end -->

  <!-- gifts start -->
  <div class="gifts">
    <div class="wrapper clearfix">
      <h2>¡PAGA UN PRECIO REDUCIDO Y ADEMÁS TE LLEVAS 3 REGALOS! *</h2>
      <h3>¡TODO LO QUE DESEAS PARA TU PC ESTÁ AQUÍ, A TU CLIC!</h3>
      <dl class="iu">
        <dt>
          <span class="ribbon"></span>
          <img src="<?php echo getStaticUrl('images/gifts-iu.png') ?>" alt="IObit Software Updater PRO" />
        </dt>
        <dd>
          <h4>IObit Software Updater PRO</h4>
          <strong>0€ </strong> <del>29,99€</del>
          <p>Descarga e instala directamente los softwares y mantiene todo los actualizados con 1 clic.</p>
        </dd>
      </dl>
      <dl class="sd">
        <dt>
          <span class="ribbon"></span>
          <img src="<?php echo getStaticUrl('images/gifts-sd.png') ?>" alt="Smart Defrag PRO" />
        </dt>
        <dd>
          <h4>Smart Defrag PRO</h4>
          <strong>0€ </strong> <del>29,99€</del>
          <p>Desfragmentador de disco confiable e inteligente con 7,000,000+ usuarios.</p>
        </dd>
      </dl>
      <dl class="pf">
        <dt>
          <span class="ribbon"></span>
          <img src="<?php echo getStaticUrl('images/gifts-pf.png') ?>" alt="Protected Folder" />
        </dt>
        <dd>
          <h4>Protected Folder</h4>
          <strong>0€ </strong> <del>39,99€</del>
          <p>La herramienta de protección de carpeta fácil de usar con una contraseña.</p>
        </dd>
      </dl>
    </div>
  </div>
  <!-- gifts end -->

  <!-- centbuy start -->
  <div class="centbuy price wrapper">
    <p><strong>17,99€</strong> <del>139,92€</del></p>
    <!--    <p>PRECIO DE NAVIDAD</p>-->
    <a class="buybtn" href="https://www.iobit.com/buy.php?product=es-asc133pcsdpfisu1799&ref=es_asc133pcpfsdisu1799purchase1911<?php echo $refStr; ?>&refs=es_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc3pcpurchase1911-es');">
      COMPRAR AHORA
    </a>
    <p class="pick">Solo <b class="pickNum">50</b> piezas disponibles ahora, ¡date prisa!</p>
  </div>
  <!-- centbuy end -->

  <!-- review start -->
  <div class="review wrapper">
    <h2>LO HACEMOS LO MEJOR QUE PODEMOS PARA SATISFACER A NUESTROS USUARIOS <br> EN DONDE SEA QUE ESTÉN</h2>
    <div class="reviewbox">
      <h3>Lo que dicen de nosotros</h3>
      <ul>
        <li class="one"><img src="<?php echo getStaticUrl('images/softonic.png') ?>" alt="Softonic"></li>
        <li class="two"><img src="<?php echo getStaticUrl('images/bruce-ramsay.png') ?>" alt="Bruce Ramsay"></li>
        <li class="three"><img src="<?php echo getStaticUrl('images/hank-ewert.png') ?>" alt="Hank Ewert"></li>
        <li class="four"><img src="<?php echo getStaticUrl('images/charles-r-widick.png') ?>" alt="Charles R. Widick"></li>
      </ul>
      <div class="details">
        <div>
          <h4>Softonic</h4>
          <p>
            “Advanced SystemCare Pro incluye una nueva tecnología de protección para mejorar la seguridad al navegar por Internet, una instalación más sencilla y un nuevo motor para desfragmentar discos duros a una mayor velocidad.”
          </p>
        </div>
        <div class="active">
          <h4>Bruce Ramsay</h4>
          <p>
            "Con la nueva compra de la versión complete, mi ordenador ha estado libre de “bugs” por años y no me ha dejado solo en ningun momento. Contacte ASC recientemente y respondieron en 1 dia con todo lo que necesitaba saber."
          </p>
        </div>
        <div>
          <h4>Hank Ewert</h4>
          <p>
            "No soy un expert en ordenadores como mucha gente lo es. No cuantos programas he probado durante años, todos diciendo ser los mejores pero nunca llegando cerca a ASC que yo sepa. Desde que tengo este programa no he tenido que llamar a un tecnico. A sobrepasado mis expectativas, siempre actualizado y los graficos son geniales. Muchas gracias a todos los que estan hacienda mi vida mas facil."
          </p>
        </div>
        <div>
          <h4>Charles R. Widick</h4>
          <p>
            "Como tecnico de ordenadores, encuentro que al descargar y escanear ASC Gratis, la mayoría de problemas estan resueltos. Cuando acabo una reparación, usualmente sugiero al cliente comprar el paquete PRO. Quien necesita un tecnico cuando tienes el poder de ASC PRO trabajando en tu sistema 24-7? Este es el major product que un usuario puede comprar desde casa. Gracias por hacer mi trabajo más fácil."
          </p>
        </div>
      </div>
      <a class="next" href="javascript: nextFun();"></a>
      <a class="prev" href="javascript: prevFun();"></a>
    </div>
  </div>
  <!-- review end -->

  <!-- awards start -->
  <div class="awards">
    <div class="wrapper">
      <h2>Recomendado y premiado por estos Medios</h2>
      <img src="<?php echo getStaticUrl('images/award.png') ?>" alt="" />
    </div>
  </div>
  <!-- awards end -->

  <!-- comparison start -->
  <div class="comparison" id="compare">
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
      <thead>
        <tr>
          <th class="text" colspan="2">Ver la comparación entre FREE y PRO:</th>
          <th class="spac"></th>
          <th class="itemb">
            <p>
              Advanced SystemCare <br> FREE
            </p>
          </th>
          <th class="spac"></th>
          <th class="itema">
            <p>
              Advanced SystemCare <br> PRO
            </p>
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_11.png"></td>
          <td class="virtue">Limpieza, optimización y protección básica de sistema básico</td>
          <td class="spac"></td>
          <td class="itemb"><img src="<?php echo $pResUrl; ?>images/mark-free-yes.png"></td>
          <td class="spac"></td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/mark-pro.png"></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_14.png"></td>
          <td class="virtue">Detecta enlaces maliciosos en tu correo electrónico web</td>
          <td class="spac"></td>
          <td class="itemb"><img src="<?php echo $pResUrl; ?>images/mark-free-yes.png"></td>
          <td class="spac"></td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/mark-pro.png"></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_01.png"></td>
          <td class="virtue">Hasta 300% aceleración de Internet con Internet acelerador*</td>
          <td class="spac"></td>
          <td class="itemb"><img src="<?php echo $pResUrl; ?>images/mark-free.png"></td>
          <td class="spac"></td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/mark-pro.png"></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_02.png"></td>
          <td class="virtue">Optimización potente de sistema en tiempo real para mejor rendimiento</td>
          <td class="spac"></td>
          <td class="itemb"><img src="<?php echo $pResUrl; ?>images/mark-free.png"></td>
          <td class="spac"></td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/mark-pro.png"></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_03.png"></td>
          <td class="virtue">Limpieza profunda de registro de Windows</td>
          <td class="spac"></td>
          <td class="itemb"><img src="<?php echo $pResUrl; ?>images/mark-free.png"></td>
          <td class="spac"></td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/mark-pro.png"></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_04.png"></td>
          <td class="virtue">Máximo rendimiento del disco duro</td>
          <td class="spac"></td>
          <td class="itemb"><img src="<?php echo $pResUrl; ?>images/mark-free.png"></td>
          <td class="spac"></td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/mark-pro.png"></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_05.png"></td>
          <td class="virtue">Detección completa contra amenazas de seguridad</td>
          <td class="spac"></td>
          <td class="itemb"><img src="<?php echo $pResUrl; ?>images/mark-free.png"></td>
          <td class="spac"></td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/mark-pro.png"></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_06.png"></td>
          <td class="virtue">Experiencia segura online con protección de navegación</td>
          <td class="spac"></td>
          <td class="itemb"><img src="<?php echo $pResUrl; ?>images/mark-free.png"></td>
          <td class="spac"></td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/mark-pro.png"></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_07.png"></td>
          <td class="virtue">Limpieza automática de seguridad de privacidad siempre que inicie sesión</td>
          <td class="spac"></td>
          <td class="itemb"><img src="<?php echo $pResUrl; ?>images/mark-free.png"></td>
          <td class="spac"></td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/mark-pro.png"></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_08.png"></td>
          <td class="virtue">Actualización automática a la última versión</td>
          <td class="spac"></td>
          <td class="itemb"><img src="<?php echo $pResUrl; ?>images/mark-free.png"></td>
          <td class="spac"></td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/mark-pro.png"></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_09.png"></td>
          <td class="virtue">Se ejecuta en segundo plano sin molestia</td>
          <td class="spac"></td>
          <td class="itemb"><img src="<?php echo $pResUrl; ?>images/mark-free.png"></td>
          <td class="spac"></td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/mark-pro.png"></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_10.png"></td>
          <td class="virtue">24/7 soporte técnico gratuito para demanda</td>
          <td class="spac"></td>
          <td class="itemb"><img src="<?php echo $pResUrl; ?>images/mark-free.png"></td>
          <td class="spac"></td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/mark-pro.png"></td>
        </tr>
      </tbody>
      <tfoot>
        <tr>
          <th colspan="2" class="text"></th>
          <th class="spac"></th>
          <th class="itemb">Tu edición actual</th>
          <th class="spac"></th>
          <th class="itema">1 año / 3 PCs+ Regalos</th>
        </tr>
      </tfoot>
    </table>
    <div class="line"></div>
  </div>
  <!-- comparison end -->

  <!-- bottombuy start -->
  <div class="bottombuy wrapper clearfix">
    <h2>!Aprovecha la oportunidad de la oferta exclusiva!</h2>
    <div class="left fl"><img src="<?php echo getStaticUrl('images/bottombuy-db.png') ?>" alt="" /></div>
    <div class="right price fr">
      <p><strong>17,99€</strong> <del>139,92€</del></p>
      <a class="buybtn" href="https://www.iobit.com/buy.php?product=es-asc133pcsdpfisu1799&ref=es_asc133pcpfsdisu1799purchase1911<?php echo $refStr; ?>&refs=es_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc3pcpurchase1911-es');">
        COMPRAR AHORA
      </a>
      <p>SOLO HOY, ¡date prisa!</p>
    </div>
  </div>
  <!-- bottombuy end -->

  <!--  footer start-->
  <div class="footer">
    <!-- service -->
    <div class="service wrapper clearfix">
      <dl>
        <dt><img src="<?php echo $pResUrl; ?>images/moneyback.png" alt=""></dt>
        <dd>
          <h3>Garantía de reembolso</h3>
        </dd>
        <dd class="small">Si no está satisfecho en los primeros <br> 60 días,le devolveremos su dinero.</dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl; ?>images/godaddy-secure.png" alt=""></dt>
        <dd>
          <h3>Pago 100% seguro</h3>
        </dd>
        <dd class="small">IObit ofrece métodos de pago seguros <br> para la transacción.</dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl; ?>images/godaddy.png" alt=""></dt>
        <dd>
          <h3>Servicio al cliente</h3>
        </dd>
        <dd class="small">Ofrecemos 24/7 Soporte Técnico gratis.</dd>
      </dl>
    </div>
    <!-- annotation -->
    <dl class="annotation wrapper">
      <dt>Nota:</dt>
      <dd>*. Estos programas promocionales están sujetos a cambios sin previo aviso, dependiendo de nuestra discreción exclusiva en cualquier momento.</dd>
      <dd>*. Datos pueden variar basados en diferentes sistemas u ordenadores.</dd>
    </dl>
    <!-- copyright -->
    <p class="copyright">Copyright © 2005 - <?php echo date('Y') ?> IObit. Todos los derechos reservados</p>
  </div>
  <!-- footer end -->

  <script src="<?php echo getStaticUrl('script/script.js') ?>"></script>
</body>

</html>