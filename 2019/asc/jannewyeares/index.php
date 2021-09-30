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
  $cName='esascoct'.$date;
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

$name=explode(' ',trim(get_line('data/name_oct.txt',rand(1,26))));
$firstName=preg_replace("/(.*)(.{3})/",'${1}'.str_repeat('*',3),$name[0]);
$lastName=preg_replace("/(.*)(.{3})/",'${1}'.str_repeat('*',3),$name[1]);
//$saleType=(rand(1,6)%6==0)?1:3;
$saleType=3;
if($_GET['action']=='getUser'){
  echo json_encode(array('firstName'=>$firstName,'lastName'=>$lastName,'buyNum'=>$buyNum));
  exit();
}

if (in_array($_GET['st'], array('asc_c6', 'asc_c2', 'asc_c3',
        'asc_t2', 'asc_t3', 'asc_t4', 'asc_t5', 'asc_t6', 'asc_t7', 'asc_t8', 'asc_t9', 'asc_t10', 'asc_t11', 'asc_s1',
        'asc_s3', 'asc_s4', 'asc_s5', 'asc_s6', 'asc_s7', 'asc_s8', 'asc_ac2', 'asc_ac3', 'asc_report',
        'asc_promote', 'asc_autocare', 'asc_buypro', 'asc_pro1', 'asc_pro2', 'asc_pro3', 'asc_pro4', 'asc_pro5',
        'asc_pro6', 'asc_protip1', 'asc_protip2', 'asc_protip3', 'asc_protip4', 'asc_protip5', 'asc_protip6',
        'asc_c8','23','asc_s11','asc_qs3','asc_qs4','asc_qs5','asc_qs6','asc_qs7','asc_qs8',
        'asc_qs9','asc_qs10','asc_qs11','asc_pm1','asc_pm2','asc_pm3','asc_c9','asc_pro7','asc_pro8','asc_pro9','asc_pro10',
        'asc_gift','asc_pro11','asc_pro12','asc_s13','asc_s14','asc_s15','asc_p8','asc_p9','asc_p11','maxcode','garegion',
        'invalidcode','asc_install','asc_p6','asc_p7','ascofficialfree','ascofficialpro','asc_promotec','asc_promoted',
        'asc_ac4','asc_su8','asc_su9','asc_protip7','asc_protip8','asc_wr','crcur',
        'asc_promote3','asc_promote4','asc_promote5','asc_promote6','asc_promote7','asc_promote8',
        'asc_promote9','asc_promote10','asc_promote11','asc_promote12','asc_pm5','asc_pm6','asc_so1','asc_so3')
)) {
  $refStr = '-' . $_GET['st'];
} else {
  $refStr = '';
}
if(in_array($_GET['pop'],array('x_asc','xr_sdpasc','xr_dbpasc'))){
  $refStr.='-'.$_GET['pop'];
}
if(in_array($_GET['type'],array('pro','giveawayexp'))){
  $refStr.='-'.$_GET['type'];
}
if(in_array($_GET['to'],array('event1','ascrenew'))){
  $refStr.='-'.$_GET['to'];
}
$refStr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-l'.$_GET['litype'].'-e'.$_GET['expd'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>85% de descuento y regalos para ASC PRO – IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <!-- Google Analytics Content Experiment code -->
  <script>function utmx_section(){}function utmx(){}(function(){var
  k='17473586-700',d=document,l=d.location,c=d.cookie;
  if(l.search.indexOf('utm_expid='+k)>0)return;
  function f(n){if(c){var i=c.indexOf(n+'=');if(i>-1){var j=c.
  indexOf(';',i);return escape(c.substring(i+n.length+1,j<0?c.
  length:j))}}}var x=f('__utmx'),xx=f('__utmxx'),h=l.hash;d.write(
  '<sc'+'ript src="'+'http'+(l.protocol=='https:'?'s://ssl':
  '://www')+'.google-analytics.com/ga_exp.js?'+'utmxkey='+k+
  '&utmx='+(x?x:'')+'&utmxx='+(xx?xx:'')+'&utmxtime='+new Date().
  valueOf()+(h?'&utmxhash='+escape(h.substr(1)):'')+
  '" type="text/javascript" charset="utf-8"><\/sc'+'ript>')})();
  </script><script>utmx('url','A/B');</script>
  <!-- End of Google Analytics Content Experiment code -->
  <?php echo $gJavascript['head']; ?>
</head>

<body>
<!-- banner start -->
<div class="banner">
  <div class="wrapper clearfix">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com" target="_blank">IObit</a>
    <!-- title -->
    <h1>OFERTA EXCLUSIVA</h1>
    <!-- left-message -->
    <div class="left-message fl">
      <img class="banner-asc" src="<?php echo $pResUrl;?>images/banner-asc.png" alt="">
      <img class="banner-off" src="<?php echo $pResUrl;?>images/banner-85off.png" alt="">
      <img class="banner-reduce" src="<?php echo $pResUrl;?>images/banner-asc-reduce.png" alt="">
    </div>
    <!-- right-message -->
    <div class="right-message fr">
      <!-- ASC12 -->
      <h3>
        Advanced SystemCare 13 PRO
        <span>
          +<br>
          Paquete de regalo gratis
        </span>
      </h3>
      <!-- notes -->
      <p class="notes"><i></i> ¡Cantidades limitadas! Sólo quedan <b class="packsNum"><?php echo $packsNum ?></b></p>
      <!-- line -->
      <hr>
      <!-- price -->
      <p class="price">
        <del>119,93€</del> <strong>17</strong><b>,99€</b><br>
        ¡Se ahorra 101,94€!
      </p>
      <!-- ribbon -->
      <i class="ribbon ribbon1"></i>
      <!-- buybtn -->
      <a class="buybtn"
         href="https://www.iobit.com/buy.php?product=es-asc133pcpfsd1799&ref=es_asc133pcpfsdpurchase1901<?php echo $refStr;?>&refs=es_purchase_asc"
         onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1901-es')">
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
</div>
<!-- banner end -->
<?php if($_GET['st']!='asc_wr'):?>
<!-- feature start -->
<div class="feature">
  <div class="wrapper clearfix">
    <!-- title -->
    <h2>
      Disfruta de un PC más rápido y seguro con el mejor rendimiento y protección con<br>
      Advanced SystemCare 13 PRO
    </h2>
    <!-- feature details -->
    <ul class="left-details fl">
      <!-- 01 -->
      <li class="padding-left50 top">
        <dl class="clearfix">
          <dt class="fl"><img src="<?php echo $pResUrl;?>images/feature-icon01.png" alt=""></dt>
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
          <dt class="fl"><img src="<?php echo $pResUrl;?>images/feature-icon02.png" alt=""></dt>
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
          <dt class="fl"><img src="<?php echo $pResUrl;?>images/feature-icon03.png" alt=""></dt>
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
          <dt class="fl"><img src="<?php echo $pResUrl;?>images/feature-icon04.png" alt=""></dt>
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
          <dt class="fl"><img src="<?php echo $pResUrl;?>images/feature-icon05.png" alt=""></dt>
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
          <dt class="fl"><img src="<?php echo $pResUrl;?>images/feature-icon06.png" alt=""></dt>
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
<?php else:?>
<!-- feature start -->
<div class="feature upd">
  <div class="wrapper clearfix">
    <!-- title -->
    <h2>
      Disfruta de un PC más rápido y seguro con el mejor rendimiento y protección con<br>
      Advanced SystemCare 13 PRO
    </h2>
    <!-- feature details -->
    <ul class="left-details fl">
      <!-- 01 -->
      <li class="padding-left50 top">
        <dl class="clearfix">
          <dt class="fl"><img src="<?php echo $pResUrl;?>images/feature-icon01.png" alt=""></dt>
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
          <dt class="fl"><img src="<?php echo $pResUrl;?>images/feature-icon02.png" alt=""></dt>
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
          <dt class="fl"><img src="<?php echo $pResUrl;?>images/feature-icon03.png" alt=""></dt>
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
          <dt class="fl"><img src="<?php echo $pResUrl;?>images/feature-icon04.png" alt=""></dt>
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
          <dt class="fl"><img src="<?php echo $pResUrl;?>images/upd_software.png" alt=""></dt>
          <dd class="fl">
            <h3>Actualización de software <br>
              segura <img src="<?php echo $pResUrl;?>images/attention.png" alt="ATTENTION"></h3>
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
          <dt class="fl"><img src="<?php echo $pResUrl;?>images/feature-icon06.png" alt=""></dt>
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
<?php endif;?>

<!-- betweenbuy start -->
<div class="betweenbuy clearfix">
  <!-- title -->
  <p><span>85% DTO.</span> para activar Advanced SystemCare PRO hoy,</p>
  <h3>Obtenga paquete de regalo<span>(Valor de 69,94€)</span> sólo para oferta exclusiva</h3>
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
    <dl class="fl">
      <dt><img src="<?php echo $pResUrl;?>images/pf-box.png" alt=""></dt>
      <dd>
        <p class="rate"><del>€39,95</del> <span>€<b>0</b></span></p>
        <p class="des">
          La herramienta de protección de carpeta fácil<br>
          de usar y con una contraseña.
        </p>
      </dd>
    </dl>
    <!-- AMCS box
    <dl class="fr">
      <dt><img src="<?php echo $pResUrl;?>images/amcs-box.png" alt=""></dt>
      <dd>
        <p class="rate"><del>€19,99</del> <span>€<b>0</b></span></p>
        <p class="des">
          Limpiador y amplificador todo en uno<br>
          para dispositivos Android
        </p>
      </dd>
    </dl>-->
    <!-- clear float  -->
    <div class="clear"></div>
    <!-- price -->
    <p class="price">
      <del>119,93€</del> <strong>17</strong><b>,99€</b><br>
    </p>
    <!-- ribbon -->
    <i class="ribbon ribbon1"></i>
    <!-- buybtn -->
    <a class="buybtn"
       href="https://www.iobit.com/buy.php?product=es-asc133pcpfsd1799&ref=es_asc133pcpfsdpurchase1901<?php echo $refStr;?>&refs=es_purchase_asc"
       onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1901gift-es')">
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
<div class="review">
  <div class="wrapper ">
    <!-- title -->
    <h2>Premios y reseñas en todo el mundo</h2>
    <h3>Elegido por más de <span>250 millones</span> de usuarios en todo el mundo</h3>
    <!-- review messages -->
    <div class="review-message">
      <span class="drop"></span>
      <!-- Charles.R.Widick -->
      <dl class="charles">
        <dt>
          <div class="img-box">
            <h4>Charles.R.Widick</h4>
            <img src="<?php echo $pResUrl; ?>images/charles-r-widick.png" alt="">
          </div>
          <div class="line"></div>
        </dt>
        <dd>¿Quién necesita un técnico cuando tiene Advanced SystemCare Pro que trabaja para su sistema 24-7? Es el mejor producto para usuarios doméstico. Muchas gracias por hacer mi trabajo más fácil."</dd>
      </dl>
      <!-- Baixaki -->
      <dl class="baixaki">
        <dt>
          <div class="img-box">
            <h4>Baixaki</h4>
            <img src="<?php echo $pResUrl; ?>images/baixaki.png" alt="">
          </div>
          <div class="line"></div>
        </dt>
        <dd>En nuestras pruebas, notamos que Advanced SystemCare tiene una eficiencia excepcional.</dd>
      </dl>
      <!-- CNET -->
      <dl class="cnet">
        <dt>
          <div class="img-box">
            <h4>CNET</h4>
            <img src="<?php echo $pResUrl; ?>images/cnet.png" alt="">
          </div>
          <div class="line"></div>
        </dt>
        <dd>Advanced SystemCare es diseñado para solucionar cualquier problema que afecte a su computadora.</dd>
      </dl>
      <!-- Markus Thomas Geldermann -->
      <dl class="markus">
        <dt>
          <div class="img-box">
            <h4>Markus Thomas Geldermann</h4>
            <img src="<?php echo $pResUrl; ?>images/markus-thomas-geldermann.png" alt="">
          </div>
          <div class="line"></div>
        </dt>
        <dd>Es el mejor programa que limpia y acelera mi PC de manera confiable y segura. Si desea aprovechar al máximo tu PC (ahora y en el futuro), el nuevo IObit Advanced SystemCare debe ser el mejor en la versión Pro.</dd>
      </dl>
      <!-- Softonic -->
      <dl class="softonic red-round active">
        <dt>
          <div class="img-box">
            <h4>Softonic</h4>
            <img src="<?php echo $pResUrl; ?>images/softonic.png" alt="">
          </div>
          <div class="line"></div>
        </dt>
        <dd>Advanced SystemCare Pro incluye una nueva tecnología de protección para mejorar la seguridad al navegar por Internet, una instalación más sencilla y un nuevo motor para desfragmentar discos duros a una mayor velocidad.</dd>
      </dl>
    </div>
  </div>
</div>
<!-- review end -->

<!-- awards start -->
<div class="awards wrapper">
  <h2>Recomendado y premiado por estos Medios</h2>
  <img src="<?php echo $pResUrl;?>images/awards-icon.png" alt="">
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
<div class="bottombuy">
  <div class="wrapper clearfix">
    <!-- left-message -->
    <div class="left-message fl">
      <img class="banner-asc" src="<?php echo $pResUrl;?>images/bottombuy-asc.png" alt="">
      <img class="banner-off" src="<?php echo $pResUrl;?>images/bottombuy-85off.png" alt="">
      <img class="banner-reduce" src="<?php echo $pResUrl;?>images/bottombuy-asc-reduce.png" alt="">
    </div>
    <!-- right-message -->
    <div class="right-message fr">
      <!-- ASC12 -->
      <h3>
        <b>OFERTA EXCLUSIVA</b>
        <span>Paquete de regalo gratis</span>
      </h3>
      <!-- notes -->
      <p class="notes"><i></i> ¡Cantidades limitadas! Sólo quedan <b class="packsNum"><?php echo $packsNum ?></b></p>
      <!-- line -->
      <hr>
      <!-- price -->
      <p class="price">
        <del>119,93€</del> <strong>17</strong><b>,99€</b><br>
      </p>
      <!-- ribbon -->
      <i class="ribbon ribbon1"></i>
      <!-- buybtn -->
      <a class="buybtn"
         href="https://www.iobit.com/buy.php?product=es-asc133pcpfsd1799&ref=es_asc133pcpfsdpurchase1901<?php echo $refStr;?>&refs=es_purchase_asc"
         onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1901-es')">
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
    <dd>*.Estos programas promocionales están sujetos a cambios sin previo aviso, dependiendo de nuestra discreción exclusiva en cualquier momento.</dd>
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
    Date prisa, sólo quedan <b class="packsNum"><?php echo $packsNum ?></b> paquetes
  </p>

</div>
<!-- float end -->

<script src="<?php echo $pRootUrl;?>tpl/js/TweenMax.min.js"></script>
<script src="<?php echo getStaticUrl('script/modernizr.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/review-3d-carousel.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
<script>
  $(function () {

    $(window).scrollWindow($(".banner .buybtn"),$('.feature ul li'),("on"));
    $(window).scrollWindow($(".banner .buybtn"),$('.float'),("on"));

    $(".review dl dt .img-box").mouseover(function () {
      $(this).parent().parent().addClass("active").siblings().removeClass("active");
    });

    setTimeout(function () {
      $(".gift-box").addClass("active");
    }, 100);

    $(".intro").target($(".awards"),0);
    $(".gift-box").target($(".betweenbuy"),0);

  });
</script>

</body>
</html>