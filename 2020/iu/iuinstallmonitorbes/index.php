<?php
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './';
    $pRootUrl = '../../../';
  }
  include $pRootUrl.'include/common.inc.php';

$viewNum=rand(126,158);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}
if(!empty($_GET['action'])&&($_GET['action']=='getSales')){
  $date=$_GET['d'];
  $cName='esiumon_b'.$date;
  $cookie=$_COOKIE[$cName];
  if($cookie!==null){
    $packsNum=$_COOKIE[$cName];
    if($packsNum>0){
      $packsNum--;
      setcookie($cName,$packsNum);
    }else{
      $packsNum=0;
      setcookie($cName,$packsNum);
    }
  }else{
    $packsNum=rand(78,98);
    setcookie($cName,$packsNum);
  }
  echo $packsNum;
  exit();
}

$refStr='';
if(in_array($_GET['st'],array('iu_xmas','iuxmasr','iu_ascxmas','iu_dbxmas','iu_imfxmas'))){
  $refStr.='-'.$_GET['st'];
}
if(!empty($_GET['to'])){
  $refStr.='-'.$_GET['to'];
}
if($_GET['pop']=='x_iu'){
  $refStr.='-'.$_GET['pop'];
}
if(preg_match('/^([0-9]*)\.([0-9]*)\./',$_GET['ver'],$matches)){
  $ver=$matches[1].'-'.$matches[2];
  $refStr.='-'.$ver;
}
if(in_array($_GET['st'],array('iu_wr'))){
  $refStr.='-'.$_GET['st'];
}
if(!empty($_GET['user'])){
  $refStr.='-'.$_GET['user'];
}
if(!empty($_GET['insday'])){
  $refStr.='-'.$_GET['insday'];
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="IE=Edge,chrome=1">
  <title>Hasta un 47% de descuento en IObit Uninstaller PRO y obtén regalos gratis - IObit</title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href='https://fonts.googleapis.com/css?family=Cabin:400,500,700' rel='stylesheet' type='text/css'>
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
  <!-- banner -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com/es/index.php" target="_blank">IObit</a>
      <p class="choice">Grabaremos automáticamente en el registro, cambios hechos en el sistema por cada instalación.</p>
      <div class="clearfix">
        <div class="left-img">
          <img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="IObit Uninstalller PRO">
        </div>
        <div class="right-message">
          <h2>Actualiza a IObit Uninstaller 11 PRO</h2>
          <h3>Elimina programas sin dejar ningún rastro</h3>
          <p class="price"><strong><b>15</b>,99€</strong> <del>29,99€</del></p>
          <p class="pc">1 año de subscripción / 3 PCs</p>
          <ul class="btnbox">
            <li>
              <div class="numberbox">
                <span class="scroll"><em>0</em></span>
                <span class="scroll"><em>0</em></span>
                <span class="scroll"><em>5</em></span>
                <span class="scroll last"><em>0</em></span>
              </div>
              <p class="hurry">¡Date prisa, solo quedan <span class="gift">50</span> a este precio!</p>
            </li>
            <li>
              <a class="buybtn"
                 href="https://www.iobit.com/buy.php?product=es-iu113pc1599&ref=es_iu113pcmonitorb2108<?php echo $refStr;?>&refs=es_purchase_iu"
                 onclick="ga('send', 'event', 'iubuy', 'buy', 'iu3pc-monitorb-es');">
                Activar ahora
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end-->

  <!-- feature -->
  <div class="feature">
    <div class="wrapper">
      <div class="title-small">
        <h2>¿Por qué actualizar a IObit Uninstaller 11 PRO?</h2>
        <span>LIMPIO</span>
      </div>
      <div class="feature-box clearfix">
        <div class="feature-list left fl">
          <h3>Más Fácil</h3>
          <p>
            1 clic para eliminar programas, incluyendo los más difíciles de quitar que no pueden ser desinstalados por los métodos convencionales.
          </p>
          <img src="<?php echo getStaticUrl('images/feature01.png')?>" alt=""/>
        </div>
        <div class="feature-list right fr">
          <h3>Limpieza</h3>
          <p>
            Borra automáticamente los archivos y registros del software que ya no se necesita.
          </p>
          <img src="<?php echo getStaticUrl('images/feature02.png')?>" alt=""/>
        </div>
        <img class="screen" src="<?php echo getStaticUrl('images/screen01.png')?>" alt=""/>
        <b class="uninstall">DESINSTALAR</b>
      </div>
      <span class="arrow-down"></span>
    </div>
  </div>
  <!-- feature end -->

  <!-- benfits -->
  <div class="benfits">
    <div class="wrapper">
      <h2>¿Cuáles son otros beneficios de <br> IObit Uninstaller 11  PRO? </h2>
      <div class="benfits-box">
        <img class="screen" src="<?php echo getStaticUrl('images/screen02.png')?>" alt=""/>
        <dl class="list01">
          <dt>Elimina Bundleware</dt>
          <dd>
          Escanea y elimina por completo los programas con problemas de desinstalación que no se pueden desinstalar por medios convencionales.
          </dd>
          <dd><strong>*SOLO PRO</strong></dd>
        </dl>
        <dl class="list02">
          <dt>Actualizador de Software </dt>
          <dd>1 clic para actualizar todo tu software importante sin tener que abrir un navegador web.</dd>
          <dd><strong>*SOLO PRO</strong></dd>
        </dl>
        <dl class="list03 green">
          <dt>Limpieza en profundidad</dt>
          <dd>Limpia automáticamente los restos de archivos de programas desinstalados.</dd>
          <dd><strong>*SOLO PRO</strong></dd>
        </dl>
        <dl class="list04 green">
          <dt>Navegador rápido y seguro</dt>
          <dd>Identifica complementos maliciosos y basados en anuncios y elimina las notificaciones del navegador para garantizar una experiencia de navegación segura y limpia.</dd>
          <dd><strong>*SOLO PRO</strong></dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- benfits end -->

  <!-- review -->
  <div class="review wrapper">
    <h2>Comentarios</h2>
    <div id="dg-container" class="dg-container">
      <div class="nav">
        <span class="dg-prev"></span>
        <span class="dg-next"></span>
      </div>
      <div class="content dg-wrapper">
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/makeuseof.png')?>" alt="MakeUseOf"></dt>
          <dd>
            <h2>Reseña de los medios</h2>
            <p>"IObit Uninstaller es ligero y su interfaz es amigable. Usuarios pueden descargarlo rápidamente. Esta herramienta de desinstalación se pueden clasificar como el mejor programa de desinstalación y permite a los usuarios desinstalar al por mayor. Ofrecerá a los usuarios un "Escaneo potente" para operar más profundo y buscar restos de programas desinstalados. En general, este desinstalador cumple lo que promete: desinstalación completa. El rendimiento hace esta pequeña herramienta de desinstalación valer la pena conservar."</p>
            <cite>MakeUseOf</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/jeff-a-watts.png')?>" alt="Jeff A Watts"></dt>
          <dd>
            <h2>Comentarios de los usuarios</h2>
            <p>"He usado los programas de IObit durante años muy satisfactoriamente y por ello sigo usando su software. En el pasado he trabajado arreglando portátiles y móviles (android) y siempre les he dejado instalados varios programas de IObit. Me acuerdo decirles a mis clientes que pulsarán el botón “C” de vez en cuando para corregir algunos problemas y acelerar sus portátiles, móviles y ordenadores. : ) Recomiendo el desinstalador especialmente, (la última versión) ya que es un programa de confianza que elimina por completo los programas más obstinados. Más importante aún, es capaz de eliminar código “escondido” que el programador tenía intención de dejar en tu sistema para que luego te lleguen anuncios de reinstalación. Todos los productos de IObit son de confianza y fáciles de usar y los recomiendo para cualquier ordenador."</p>
            <cite>Jeff A Watts</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/lynett-van-niekerk.png')?>" alt="Lynette van Niekerk"></dt>
          <dd>
            <h2>Comentarios de los usuarios</h2>
            <p>"El desinstalador de IObit es excelente y tiene todo lo que uno puede esperar. Me encanta el hecho de que desinstala todos los restos y fragmentos. También incluye un actualizador de software que me recuerda cada vez que es necesario actualizar un programa, y el hecho de que también desinstala paquetes enteros de programas lo convierte en un ganador para mí. De hecho es básicamente todo lo que uno necesita para tener el ordenador a punto."</p>
            <cite>Lynette van Niekerk</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/paulo-martins.png')?>" alt="Paulo Martins"></dt>
          <dd>
            <h2>Comentarios de los usuarios</h2>
            <p>"El desinstalador de IObit es el mejor software para eliminar programas de tu ordenador, es rápido y muy efectivo y no tiene nada que ver con el desinstalador predeterminado de Windows. Verdaderamente elimina todos los restos de programas para que no dejen nada en tu ordenador. Lo llevo usando unos cuantos meses y ya no sé cómo vivir sin él así que se lo he recomendado a todos mis amigos y a mi familia. Gracias IObit, vuestro desinstalador es fantástico."</p>
            <cite>Paulo Martins</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/lovro-zuzic.png')?>" alt="Lovro Žužić"></dt>
          <dd>
            <h2>Comentarios de los usuarios</h2>
            <p>"IObit Uninstaller se pone mejor con cada actualización. Ya lo he utilizado más de 3 años. El programa se descarga rápidamente y posee una interfaz de usuario simple. Algunas funciones que utilizo regularmente son Desinstalación de lotes, Escaneo Profundo, Destruir Archivos y función de Recientemente Instalados que me permite tener un acceso rápido a los programas que he instalado recientemente o que no funcionan correctamente. Es fácil de controlar los elementos de inicio para arranque de PC más rápido."</p>
            <cite>Lovro Žužić</cite>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- review end -->

  <!-- bottom -->
  <div class="bottom">
    <div class="award wrapper ">
      <h2>PREMIOS Y GALARDONES</h2>
      <p>Durante los últimos 8 años, contamos con la confianza de medios de comunicación reconocidos mundialmente, por lo que no te equivocarás al elegir IObit Uninstaller.</p>
      <img src="<?php echo getStaticUrl('images/award.png')?>" alt="">
    </div>
    <!-- service start -->
    <div class="service wrapper clearfix">
      <dl class="fl">
        <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dt>
        <dd>
          <h4>Pruébelo SIN RIESGO - con nuestra garantía de devolución de dinero de 60 días</h4>
          <p>
            Estamos seguros de que activando la versión PRO te olvidarás de tus dolores de cabeza a la hora de actualizar tus drivers por un precio asequible
          </p>
        </dd>
      </dl>
      <dl class="fr">
        <dd>
          <h4>Aceptamos</h4>
        </dd>
        <dt><img src="<?php echo getStaticUrl('images/payments.png')?>" alt=""></dt>
      </dl>
    </div>
    <!-- service end -->
    <!-- annotation -->
    <dl class="annotation wrapper">
      <dt>Nota: </dt>
      <dd>1*.Estos programas promocionales están sujetos a cambios sin previo aviso, dependiendo de nuestra discreción exclusiva en cualquier momento.</dd>
      <dd>2*.Datos pueden variar basados en diferentes sistemas u ordenadores.</dd>
    </dl>

    <!-- footer -->
    <div class="footer">
      <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Todos los derechos reservados</p>
    </div>
  </div>
  <!-- bottom -->

  <!-- float -->
  <div class="float clearfix">
    <div class="wrapper">
      <div class="left-img">
        <img src="<?php echo getStaticUrl('images/fl-iu-box.png')?>" alt=" IObit Uninstalller PRO">
      </div>
      <ul class="btnbox fr">
        <li>
          <div class="numberbox">
            <span class="scroll"><em>0</em></span>
            <span class="scroll"><em>0</em></span>
            <span class="scroll"><em>5</em></span>
            <span class="scroll last"><em>0</em></span>
          </div>
          <p class="hurry">
          <p><span class="viewNum"><?php echo $viewNum;?></span> visitantes ahora , solo quedan <span class="gift">50</span> a este precio!</p>
          </p>
        </li>
        <li class="clearfix">
          <div class="price fl"><del>29,99€ </del> <strong><b>15</b>,99€</strong></div>
          <a class="buybtn fr"
             href="https://www.iobit.com/buy.php?product=es-iu113pc1599&ref=es_iu113pcmonitorb2108<?php echo $refStr;?>&refs=es_purchase_iu"
             onclick="ga('send', 'event', 'iubuy', 'buy', 'iu3pc-monitorb-es');">
            Activar ahora
          </a>
        </li>
      </ul>
    </div>
  </div>


  <div class="pop-over ">
    <h2>¡Regalos gratis para nuestro afortunado visitante!</h2>
    <h3>Activa IObit Uninstaller Pro hoy para obtener tus regalos gratis (valor 69,94€)</h3>
    <p>¡Oferta limitada! Termina en <strong><span class="count-time">60</span>s</strong></p>
    <img src="<?php echo getStaticUrl('images/pop-iu-box.png')?>" alt=" IObit Uninstalller PRO" class="imgbox">
    <a class="buybtn buybtn-pop" 
       href="https://www.iobit.com/buy.php?product=es-iu113pcpfsd1599&ref=es_iu113pcpfsdmonitorb2108<?php echo $refStr;?>&refs=es_purchase_iu"
       onclick="ga('send', 'event', 'iubuy', 'buy', 'iubundle-monitorb-es ');" >
      Obtener mis regalos gratis
    </a>
  </div>
  <div class="pop-bg "><span class="close">X</span></div>

  <script>refStr="<?php echo $refStr;?>";</script>
  <script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
  <script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>