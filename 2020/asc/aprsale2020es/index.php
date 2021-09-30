<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';

if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'esascapr_p' . $date;
  $c_name_t='esascapr_t' . $date;
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=50;
    setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
    setcookie($c_name_t,$totalNum, time() + 3600 * 24 *2);
  } else {
    if (intval($_COOKIE[$c_name]) <= 3) {
      $packsNum = 3;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    } else {
      if((rand(1,100)%2)==0){
        $packsNum=$_COOKIE[$c_name];
      }else {
        $packsNum = $_COOKIE[$c_name] - 1;
        setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
      }
    }
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

$refStr=empty($_GET['st'])?'':('-'.$_GET['st']);
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);
if(in_array($_GET['pop'],array('xr_sdpasc','xr_dbpasc','x_asc','xi_asc','xb_asc'))){
  $refStr.='-'.$_GET['pop'];
}
if(in_array($_GET['type'],array('pro','giveawayexp'))){
  $refStr.='-'.$_GET['type'];
}
$refStr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-l'.$_GET['litype'].'-e'.$_GET['expd'];

?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>75% de descuento y regalos gratis para Advanced SystemCare PRO - IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>
</head>
<body>
<!-- banner -->
<div class="banner">
  <div class="wrapper">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/es/index.php" target="_blank">IObit</a>
    <!-- h1 -->
    <h1>OFERTA especial limitada Advanced SystemCare PRO 13 <span><em>75% descuento + </em><br> Software de regalo</span></h1>
    <!-- h2 -->
    <h2>¡Barre archivos basura y rastros de privacidad además de eliminar amenazas potenciales con un solo clic!</h2>
    <!-- content -->
    <div class="content clearfix">
      <!-- box -->
      <div class="fl box clearfix">
        <dl class="fl">
          <dt>
            <img src="<?php echo getStaticUrl('images/banner-asc.png')?>" alt="Advanced SystemCare PRO">
          </dt>
          <dd>
            <del>49.99 €</del> (1 año/3 PCs)
          </dd>
        </dl>
        <dl class="fl">
          <dt>
            <img src="<?php echo getStaticUrl('images/banner-regalo.png')?>" alt="IObit Uninstaller PRO">
          </dt>
          <dd>
            <del>29.99 €</del> (1 año/1 PC)
          </dd>
        </dl>
      </div>
      <!-- dl -->
      <div class="message fr">
        <!-- solo -->
        <p class="solo"><span class="all-icons"></span> Solo quedan <b class="packsNum">21</b> paquetes <span class="reduce">-1</span></p>
        <!-- price -->
        <p class="price"><big>17</big> <del>79.98€</del></p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=es-asc143pciu1799&ref=es_asc143pciu1799purchase2004<?php echo $refStr;?>&refs=es_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc3pcpurchase2004-es');">
          <span class="all-icons"></span>
          COMPRAR
        </a>
        <!-- notice -->
        <p class="notice">Entrega inmediata por correo electrónico</p>
        <!-- bottom -->
        <p class="bottom">
          <img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""> 60 Días Reembolso
          <img src="<?php echo getStaticUrl('images/seguro.png')?>" alt=""> Pago seguro
          <img src="<?php echo getStaticUrl('images/service.png')?>" alt="">
        </p>
      </div>
    </div>
  </div>
</div>
<!-- end banner -->

<!-- feature -->
<div class="feature">
  <div class="wrapper">
    <h2>Advanced SystemCare 14 PRO</h2>
    <!-- content -->
    <div class="content">
      <a class="prev" href="javascript: void(0);"><span class="all-icons"></span></a>
      <div class="listboxs">
        <div id="switcher">
          <ul class="content_1">
            <li class="one">
              <dl>
                <dt><img src="<?php echo getStaticUrl('images/feature-icon01.png')?>" alt=""></dt>
                <dd>
                  <h3>
                  Limpieza más profunda <br> de registros con IA
                  </h3>
                  <p>
                  Realiza una limpieza profunda de registros ocultos, inútiles o <br> no válidos para liberar espacio en el disco y mejorar por <br> completo el rendimiento del PC con el nuevo modo IA. 
                  </p>
                </dd>
              </dl>
            </li>
            <li class="two">
              <dl>
                <dt><img src="<?php echo getStaticUrl('images/feature-icon02.png')?>" alt=""></dt>
                <dd>
                  <h3>
                    Velocidad de Internet <br>
                    hasta 300% más rápida
                  </h3>
                  <p>
                    Optimiza las configuraciones del navegador <br>
                    para acelerar la conexión a Internet.
                  </p>
                </dd>
              </dl>
            </li>
            <li class="three">
              <dl>
                <dt><img src="<?php echo getStaticUrl('images/feature-icon03.png')?>" alt=""></dt>
                <dd>
                  <h3>
                    Seguridad en <br>
                    la Privacidad de tu PC
                  </h3>
                  <p>
                    Limpia rastros en línea, oculta tu firma digital <br>
                    y bloquea el acceso secreto a archivos personales para <br>
                    proteger destacablemente tu PC y tu privacidad online.
                  </p>
                </dd>
              </dl>
            </li>
          </ul>
          <ul class="content_2"></ul>
        </div>
        <span class="hover"></span>
      </div>
      <a class="next" href="javascript: void(0);"><span class="all-icons"></span></a>
    </div>
  </div>
</div>
<!-- end feature -->

<!-- review -->
<div class="review">
  <div class="wrapper clearfix">
    <!-- photo -->
    <dl class="fl">
      <dt>
        <img class="on" src="<?php echo getStaticUrl('images/bruce-ramsay.png')?>" alt="">
        <img src="<?php echo getStaticUrl('images/hank-ewert.png')?>" alt="">
        <img src="<?php echo getStaticUrl('images/charles-r-widick.png')?>" alt="">
        <img src="<?php echo getStaticUrl('images/loretta-harnarine.png')?>" alt="">
        <img src="<?php echo getStaticUrl('images/softonic.png')?>" alt="">
      </dt>
      <dd>
        <p class="on">Bruce Ramsay</p>
        <p>Hank Ewert</p>
        <p>Charles R. Widick</p>
        <p>Loretta Harnarine</p>
        <p>Softonic</p>
      </dd>
    </dl>
    <!-- content -->
    <div class="content fr">
      <div class="on">
        <h3>Comentarios del usuario</h3>
        <p>"Con la nueva compra de la versión complete, mi ordenador ha estado libre de “bugs” por años y no me ha dejado solo en ningun momento. Contacte ASC recientemente y respondieron en 1 dia con todo lo que necesitaba saber."</p>
      </div>
      <div>
        <h3>Comentarios del usuario</h3>
        <p>"No soy un expert en ordenadores como mucha gente lo es. No cuantos programas he probado durante años, todos diciendo ser los mejores pero nunca llegando cerca a ASC que yo sepa. Desde que tengo este programa no he tenido que llamar a un tecnico. A sobrepasado mis expectativas, siempre actualizado y los graficos son geniales. Muchas gracias a todos los que estan hacienda mi vida mas facil."</p>
      </div>
      <div>
        <h3>Comentarios del usuario</h3>
        <p>"Como tecnico de ordenadores, encuentro que al descargar y escanear ASC Gratis, la mayoría de problemas estan resueltos. Cuando acabo una reparación, usualmente sugiero al cliente comprar el paquete PRO. Quien necesita un tecnico cuando tienes el poder de ASC PRO trabajando en tu sistema 24-7? Este es el major product que un usuario puede comprar desde casa. Gracias por hacer mi trabajo más fácil."</p>
      </div>
      <div>
        <h3>Comentarios del usuario</h3>
        <p>"Este programa es lo major que he probado. Mi ordenador trabaja mucho major y rapido ahora que he descargado ASC. A limpiado archivos innecesarios y carpetas vacias. A limpiado y desfragmentado los registros en todos los archivos de la PC. Recomiendo ASC, no es caro y lo que hara para tu ordenador sera totalmente incredible. Lo amaras, lo prometo."</p>
      </div>
      <div>
        <h3>Comentarios mediáticos</h3>
        <p>“Advanced SystemCare Pro incluye una nueva tecnología de protección para mejorar la seguridad al navegar por Internet, una instalación más sencilla y un nuevo motor para desfragmentar discos duros a una mayor velocidad.”</p>
      </div>
    </div>
    <!-- small photo -->
    <ul class="small-person clearfix">
      <li class="on"><img src="<?php echo getStaticUrl('images/bruce-ramsay.png')?>" alt=""></li>
      <li><img src="<?php echo getStaticUrl('images/hank-ewert.png')?>" alt=""></li>
      <li><img src="<?php echo getStaticUrl('images/charles-r-widick.png')?>" alt=""></li>
      <li><img src="<?php echo getStaticUrl('images/loretta-harnarine.png')?>" alt=""></li>
      <li><img src="<?php echo getStaticUrl('images/softonic.png')?>" alt=""></li>
    </ul>
    <!-- point -->
    <ul class="point clearfix">
      <li class="on"></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
    </ul>
  </div>
</div>
<!-- end review -->

<!-- comparison -->
<div class="comparison wrapper">
  <h2>Advanced SystemCare 14 PRO</h2>
  <p>Limpieza profunda, Internet 300% más rápido y protección en tiempo real para PC.</p>
  <!-- table -->
  <table>
    <thead>
      <tr>
        <th class="text" colspan="2"></th>
        <th class="space"></th>
        <th class="itema"><div>Advanced SystemCare <br> <b>Free</b></div></th>
        <th class="space"></th>
        <th class="itemb"><div>Advanced SystemCare <br> <b>PRO</b></div></th>
      </tr>
    </thead>
    <tbody>
      <!-- 01 -->
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/icons01.png')?>" alt=""></td>
        <td class="text">Limpieza y optimización básica</td>
        <td class="space"></td>
        <td class="itema grey"><span class="all-icons">√</span></td>
        <td class="space"></td>
        <td class="itemb"><span class="all-icons">√</span></td>
      </tr>
      <!-- 02 -->
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt=""></td>
        <td class="text">Bloquea links malicios y mensajeros sospechos en el email <em class="new">NUEVO</em></td>
        <td class="space"></td>
        <td class="itema grey"><span class="all-icons">√</span></td>
        <td class="space"></td>
        <td class="itemb"><span class="all-icons">√</span></td>
      </tr>
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/icons13.png')?>" alt=""></td>
        <td class="text">Modo IA más inteligente para escaneo inteligente y limpieza y optimización premium de PC </td>
        <td class="space"></td>
        <td class="itema"><span class="all-icons">×</span></td>
        <td class="space"></td>
        <td class="itemb"><span class="all-icons">√</span></td>
      </tr>
      <!-- 03 -->
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt=""></td>
        <td class="text">Encendido hasta un 200% más rápido <em>MEJORADO</em></td>
        <td class="space"></td>
        <td class="itema"><span class="all-icons">×</span></td>
        <td class="space"></td>
        <td class="itemb"><span class="all-icons">√</span></td>
      </tr>
      <!-- 04 -->
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/icons04.png')?>" alt=""></td>
        <td class="text">Encendido hasta un 300% de velocidad Web</td>
        <td class="space"></td>
        <td class="itema"><span class="all-icons">×</span></td>
        <td class="space"></td>
        <td class="itemb"><span class="all-icons">√</span></td>
      </tr>
      <!-- 05 -->
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/icons05.png')?>" alt=""></td>
        <td class="text">1 clic para mantener programas importantes actualizados <em>MEJORADO</em></td>
        <td class="space"></td>
        <td class="itema"><span class="all-icons">×</span></td>
        <td class="space"></td>
        <td class="itemb"><span class="all-icons">√</span></td>
      </tr>
      <!-- 06 -->
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/icons06.png')?>" alt=""></td>
        <td class="text">Protección completa de PC para detectar y eliminar las infecciones más profundas <em>MEJORADO</em></td>
        <td class="space"></td>
        <td class="itema"><span class="all-icons">×</span></td>
        <td class="space"></td>
        <td class="itemb"><span class="all-icons">√</span></td>
      </tr>
      <!-- 07 -->
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/icons07.png')?>" alt=""></td>
        <td class="text">Protección Premium automática que limpia información personal que puede ser rastreada</td>
        <td class="space"></td>
        <td class="itema"><span class="all-icons">×</span></td>
        <td class="space"></td>
        <td class="itemb"><span class="all-icons">√</span></td>
      </tr>
      <!-- 08 -->
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/icons08.png')?>" alt=""></td>
        <td class="text">Disimula la huella digital para mantener tu comportamiento privado en línea</td>
        <td class="space"></td>
        <td class="itema"><span class="all-icons">×</span></td>
        <td class="space"></td>
        <td class="itemb"><span class="all-icons">√</span></td>
      </tr>
      <!-- 09 -->
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/icons09.png')?>" alt=""></td>
        <td class="text">Manttine tus datos personales alejados de programas no confiables <em>MEJORADO</em></td>
        <td class="space"></td>
        <td class="itema"><span class="all-icons">×</span></td>
        <td class="space"></td>
        <td class="itemb"><span class="all-icons">√</span></td>
      </tr>
      <!-- 10 -->
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/icons10.png')?>" alt=""></td>
        <td class="text">Detecta y Bloquea continuamente agujeros de seguridad en tiempo real <em>MEJORADO</em></td>
        <td class="space"></td>
        <td class="itema"><span class="all-icons">×</span></td>
        <td class="space"></td>
        <td class="itemb"><span class="all-icons">√</span></td>
      </tr>
      <!-- 11 -->
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/icons11.png')?>" alt=""></td>
        <td class="text">Actualización automática de la última versión</td>
        <td class="space"></td>
        <td class="itema"><span class="all-icons">×</span></td>
        <td class="space"></td>
        <td class="itemb"><span class="all-icons">√</span></td>
      </tr>
      <!-- 12 -->
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/icons12.png')?>" alt=""></td>
        <td class="text">Soporte técnico Gratis 24/7</td>
        <td class="space"></td>
        <td class="itema"><span class="all-icons">×</span></td>
        <td class="space"></td>
        <td class="itemb"><span class="all-icons">√</span></td>
      </tr>
    </tbody>
  </table>
</div>
<!-- end comparison -->

<!-- bottombuy -->
<div class="bottombuy">
  <div class="wrapper clearfix">
    <h2>¡También recibirás el programa IObit Uninstaller PRO totalmente gratis!</h2>
    <!-- box -->
    <div class="box fl">
      <img src="<?php echo getStaticUrl('images/bottombuy-iu.png')?>" alt="">
      <p>IObit Uninstaller PRO</p>
    </div>
    <!-- message -->
    <ul class="fl">
      <li>
        <h3><span class="all-icons"></span> Desinstalación completa:</h3>
        <p>
          Elimina programas obstinados y paquetes de programas para liberar espacio del disco y elimina <br>
          plugins maliciosos y basados en anuncios para una navegación segura.
        </p>
      </li>
      <li>
        <h3><span class="all-icons"></span> Monitor de Instalación:</h3>
        <p>
          Revierta automáticamente los cambios que un programa ha realizado en tu sistema después de <br>
          desinstalarlo.
        </p>
      </li>
      <li>
        <h3><span class="all-icons"></span> Limpieza de resto:</h3>
        <p>
          Elimina completamente los restos de los programas desinstalados por otras utilidades o <br>
          desinstalados antes de usar IObit Uninstaller.
        </p>
      </li>
    </ul>
  </div>
</div>
<!-- end bottombuy -->

<!-- awards -->
<div class="awards">
  <div class="wrapper">
    <h2>Premios de todo el mundo.</h2>
    <p>
      Teniendo la confianza y reconocimiento de la prensa de clase mundial <br>
      en los últimos 12 años, sabes que estas obteniendo el mejor optimizador para PC.
    </p>
    <img src="<?php echo getStaticUrl('images/awards.png')?>" alt="">
  </div>
</div>
<!-- end awards -->

<!-- service -->
<div class="service wrapper clearfix">
  <dl class="clearfix">
    <dt class="fl"><img src="<?php echo getStaticUrl('images/footer-moneyback.png')?>" alt=""></dt>
    <dd class="fl">
      <h3>Garantía de reembolso</h3>
      <p>
        Si no estás satisfecho en los primeros <br>
        60 días, te devolvemos el dinero
      </p>
    </dd>
  </dl>
  <dl class="last">
    <dd><h3>Formas de pago</h3></dd>
    <dt><img src="<?php echo getStaticUrl('images/payments.png')?>" alt=""></dt>
  </dl>
</div>
<!-- end service -->

<!-- footer -->
<div class="footer wrapper">
  <dl>
    <dt>Nota:</dt>
    <dd>*. Estos programas promocionales están sujetos a cambios sin previo aviso, dependiendo de nuestra discreción exclusiva en cualquier momento.</dd>
    <dd>*. Datos pueden variar basados en diferentes sistemas u ordenadores.</dd>
  </dl>
  <p class="copyright">Copyright ©2005 - <?php echo date('Y')?> IObit. Todos los derechos reservados</p>
</div>
<!-- end footer -->

<!-- float -->
<div class="float">
  <div class="wrapper clearfix">
    <div class="box fl">
      <p>OFERTA especial limitada <b>75%</b> descuento + Software de regalo</p>
      <img src="<?php echo getStaticUrl('images/float-box.png')?>" alt="">
    </div>
    <dl class="fr">
      <dd>
        <!-- price -->
        <p class="price"><big>17</big> <del>79.98€</del></p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=es-asc143pciu1799&ref=es_asc143pciu1799purchase2004<?php echo $refStr;?>&refs=es_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc3pcpurchase2004-es');">
          <span class="all-icons"></span>
          COMPRAR
        </a>
      </dd>
    </dl>
  </div>
</div>
<!-- end float -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
<script src="<?php echo getStaticUrl('script/switcher.js')?>"></script>
</body>
</html>