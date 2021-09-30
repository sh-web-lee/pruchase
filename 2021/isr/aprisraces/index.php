<?php
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../../';
}
include $pRootUrl . 'include/common.inc.php';

$refStr = empty($_GET['ref']) ? '' : '-'.$_GET['ref'];
$refStr .= empty($_GET['st']) ? '' : '-'.$_GET['st'];
$refStr .= empty($_GET['to']) ? '' : '-'.$_GET['to'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>70% de descuento especial para iFun Screen Recorder PRO - IObit</title>
<meta name="Copyright" content="IObit">
<meta property="og:url" content="https://purchase.iobit.com/asc-ac-register/index.php">
<meta property="og:type" content="website">
<meta property="og:title" content="70% de descuento especial para iFun Screen Recorder PRO - IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Montserrat:400,500,700'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://recorder.iobit.com/es/" target="_blank">
        <img src="<?php echo $pResUrl; ?>images/logo.png" alt="IObit">
      </a>
      <div class="title">
        <h1>iFun Screen Recorder PRO</h1>
        <p>Graba todo lo que aparece en tu pantalla sin marcas de agua ni limitaciones</p>
      </div>
      <div class="offer clearfix">
        <img class="fl" src="<?php echo getStaticUrl('images/boxshot-asc.png')?>" alt="" />
        <div class="discount fl">
          <h2><b>70%</b> <span>DE DESCUENTO</span></h2>
          <p>Oferta exclusiva para usuarios de IObit</p>
        </div>
      </div>
      <div class="price">
        <p>Sólo: <strong>14,99€ </strong><del>49,99€</del></p>
        <a class="buybtn bigbtn"
           href="https://www.iobit.com/buy.php?product=es-isr11pc1499&ref=es_isr-ac1499<?= $refStr; ?>&aff=&refs=es_ac_isr"
           onclick="ga('send', 'event', 'isrbuy', 'buy', 'israc1499-es')">
              <div class="inner">
                <i class="all-icons"></i>
                <span>Activar Ahora</span>
              </div>
        </a>
        <span>1 Año / 1 PC</span>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- container start -->
  <!-- feature start -->
  <h2 class="feature-h2">¿Por qué necesitas iFun Screen Recorder PRO?</h2>
  <div class="feature wrapper">
    <div class="clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_01.png')?>" alt=""></dt>
        <dd>
          <h3>GRABAR CUALQUIER PARTE DE TU PANTALLA</h3>
          <p>Selecciona cualquier ventana o región personalizada de tu pantalla y grábala exactamente como quieras.</p>
        </dd>
      </dl>
      <dl class="right">
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_02.png')?>" alt=""></dt>
        <dd>
          <h3>CAPTURAR LA CÁMARA WEB Y EL MICRÓFONO</h3>
          <p>Graba simultáneamente tu pantalla, la cámara web y el micrófono para explicar lo que ven tus espectadores. Ideal para tutoriales, videos de juegos y clases en línea.</p>
        </dd>
      </dl>
    </div>
    <div class="clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_03.png')?>" alt=""></dt>
        <dd>
          <h3>ELIMINAR LA MARCA DE AGUA</h3>
          <p>Con iFun Screen Recorder PRO no hay ninguna marca de agua predeterminada en tu video. <strong style="color: #b80000; font-weight: 500;">¡Y lo mejor es que puedes añadir tu propia marca de agua si deseas!</strong></p>
        </dd>
      </dl>
      <dl class="right">
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_04.png')?>" alt=""></dt>
        <dd>
          <h3>GRABAR TODO EL TIEMPO QUE QUIERAS</h3>
          <p>A diferencia de los grabadores gratuitos que solo te admiten grabar unos minutos, iFun Screen Recorder PRO te permite grabar todo el tiempo que quieras. Puedes grabar películas y conferencias enteras, así como horas de juegos.</p>
        </dd>
      </dl>
    </div>
    <div class="clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_05.png')?>" alt=""></dt>
        <dd>
          <h3>HACER VIDEOS DE ALTA CALIDAD</h3>
          <p>Gracias a la aceleración de GPU, se garantiza la máxima calidad, hasta una resolución de 4K y 60 FPS para conseguir videos sin ningún retraso.</p>
        </dd>
      </dl>
      <dl class="right">
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_06.png')?>" alt=""></dt>
        <dd>
          <h3>EDITAR TU VIDEO</h3>
          <p>Después de la grabación, puedes editar inmediatamente tu video sin descargar otro software. ¡Crea directamente tu video perfecto!</p>
        </dd>
      </dl>
    </div>
  </div>
  <!-- feature end -->

  <!-- awards start -->
  <div class="awards">
    <div class="wrapper">
      <h2>Premios Mundiales</h2>
      <img src="<?php echo $pResUrl; ?>images/awards.png" alt="">
    </div>
  </div>
  <!-- awards end -->

  <!-- review -->
  <div class="review wrapper">
    <div id="dg-container" class="dg-container">
      <div class="nav">
        <span class="dg-prev"></span>
        <span class="dg-next"></span>
      </div>
      <div class="content dg-wrapper">
        <dl class="reviews active">
          <dt><h2><span>Qué Dicen los Usuarios</span></h2></dt>
          <dd>
            <p>
              "Bueno, hasta ahora todo bien. iFun Screen Recorder es realmente una herramienta completa y fácil de usar. No sabía cómo grabar la pantalla en Windows, pero con este software es fácil. Con iFun Screen Recorder, puedo tomar capturas de pantalla mientras grabo en HD y agregar subtítulos para el video después de la grabación. Luego lo subo a mi Instagram y capto una atención masiva. Este potente grabador de pantalla me ha ayudado a impulsar mi negocio. Por cierto, es totalmente gratis."
            </p>
           <cite>Elsie Weston</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><h2><span>Qué Dicen los Usuarios</span></h2></dt>
          <dd> 
            <p>
              "Encontré este grabador de pantalla gratuito y me volví fan por sus sencillas funciones de edición. Me gusta grabar el proceso de operación para ayudar a las personas a resolver problemas del ordenador, y este software de grabación me permite grabar con audio para poder subir directamente el video editado a YouTube. ¡Combina grabación y edición, lo cual es muy conveniente para youtubers como yo que quieren compartir videos tutoriales!"
            </p>
            <cite>Enrico Valencia</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><h2><span>Qué Dicen los Usuarios</span></h2></dt>
          <dd>
            <p>
              "Como secretaria, necesito usar mucho software de grabación de pantalla. Fue difícil encontrar un grabador de pantalla gratis ideal para mí, pero iFun Screen Recorder resulta ser una herramienta perfecta para la grabación de videoconferencias y me ayuda mucho. Puedo grabar la pantalla HD con él y convertir el video en diferentes formatos. ¡Lo recomiendo ampliamente!"
            </p>
            <cite>Marielle Irvine</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><h2><span>Qué Dicen los Usuarios</span></h2></dt>
          <dd>
            <p>
              "¡Hola! Este fantástico grabador de pantalla gratuito me sorprende. Puedo grabar todos estos momentos preciosos y maravillosos con iFun Screen Recorder, especialmente para videos en vivo. Los videos que grabo con iFun Screen Recorder son de muy alta calidad. Puedo guardarlos y compartirlos con mis amigos. Al principio, no estaba seguro sobre el software, pero los resultados son asombrosos. ¡Es increíble!"
            </p>
            <cite>Robbins Hilton</cite>
          </dd>
        </dl>
      </div>
      <ul class="switchHead">
		<li class="active" ><img src="<?php echo getStaticUrl('images/user1.png')?>"></li>
        <li class="" ><img src="<?php echo getStaticUrl('images/user2.png')?>"></li>
        <li class="" ><img src="<?php echo getStaticUrl('images/user3.png')?>"></li>
        <li class="" ><img src="<?php echo getStaticUrl('images/user4.png')?>"></li>
      </ul>
    </div>
  </div>

  <!-- footbuy start -->
  <div class="footbuy">
    <div class="wrapper">
      <h2>Crea videos de máxima calidad sin marcas de agua ni limitaciones</h2>
      <div class="price">
        <p>Sólo: <strong>14,99€ </strong><del>49,99€</del></p>
        <a class="buybtn bigbtn"
           href="https://www.iobit.com/buy.php?product=es-isr11pc1499&ref=es_isr-ac1499<?= $refStr; ?>&aff=&refs=es_ac_isr"
           onclick="ga('send', 'event', 'isrbuy', 'buy', 'israc1499-es')">
              <div class="inner">
                <i class="all-icons"></i>
                <span>Activar Ahora</span>
              </div>
        </a>
        <span>1 Año / 1 PC</span>
      </div>
    </div>
  </div>
  <!-- footbuy end -->
  
  <!-- container end -->

  <!-- bottom start -->
  <div class="bottom">
    <div class="wrapper">
      <!-- annotation start -->
      <!-- <p class="annotation" >*Opmerking:.Data kan variëren afhankelijk van verschillende computer systemen.</p> -->
      <!-- annotation end -->
      
      <!-- footer start -->
      <div class="footer" style="margin-top: 0;">©2005 - <?php echo date('Y')?> IObit. Todos los derechos reservados</div>
      <!-- footer end -->
    </div>
  </div>
  <!-- bottom end -->

  <!-- floatlayer start -->
  <div class="floatlayer" id="floatlayer">
    <div class="wrapper clearfix">
      <div class="left">
        <h2>OFERTA EXCLUSIVA</h2>
        <p><strong>70% de descuento</strong> para grabar tu pantalla sin limitaciones</p>
      </div>
      <div class="pricebox">
        <dl class="price fr">
          <dt>Sólo: <strong>14,99€ </strong><del>49,99€</del></dt>
          <dd>
            <a class="buybtn smallbtn"
               href="https://www.iobit.com/buy.php?product=es-isr11pc1499&ref=es_isr-ac1499<?= $refStr; ?>&aff=&refs=es_ac_isr"
               onclick="ga('send', 'event', 'isrbuy', 'buy', 'israc1499-es')">
              <div class="inner">
                <i class="all-icons"></i>
                <span>Activar Ahora</span>
              </div>
            </a>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- floatlayer end -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>