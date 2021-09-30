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
  $cName='esiumon'.$date;
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


function changeCont($to, $transData){
    switch ($to){
        case 'cleanuninstall':
            $fileSize=$transData->cleanuninstall->extra;
            $fileSizeShow=number_format($fileSize/(1024*1024),0);
            if(($fileSize/(1024*1024))>=10){
                $fileSizeStr=$fileSizeShow.' MB';
            }else{
                $fileSizeStr='';
            }
            $dataNum = $transData->cleanuninstall->reg
                +$transData->cleanuninstall->file
                +$transData->cleanuninstall->task
                +$transData->cleanuninstall->service
                +$transData->cleanuninstall->dll;
            return 'Limpia todos los '. $dataNum .' elementos registrados y libera más de '. $fileSizeStr .' de espacio';
            break;
        case 'prom_d':
            $dataNum = $transData->promote3->reg
                +$transData->promote3->file
                +$transData->promote3->task
                +$transData->promote3->service
                +$transData->promote3->dll;
            return 'Limpia '. $dataNum .' restos más con el modo de Desinstalación Limpia';
            break;
    }
}
$to = empty($_GET['to']) ? '' : $_GET['to'];
$data = empty($_GET['data']) ? '' : $_GET['data'];
$tData=json_decode(base64_decode($data));

if ($to == 'cleanuninstall' || $to == 'prom_d') {
    $transData = changeCont($to, $tData);
}
$refStr='';
if(in_array($_GET['to'],array('installmonitor','enable','cleanuninstall'))){
  $refStr.='-'.$_GET['to'];
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Ahorra hasta un 47% de descuento en IObit Uninstaller PRO y obtén regalos gratis - IObit</title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href='https://fonts.googleapis.com/css?family=Cabin:400,700' rel='stylesheet' type='text/css'>
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
  <!-- banner -->
  <div class="banner">
    <div class="wrapper">
      <a href="https://www.iobit.com/es/index.php" target="_blank" class="logo" target="_blank">IObit</a>
        <ul>
            <li class="first">
                <?php if ($to == 'cleanuninstall'): ?>
                    DESINSTALACIÓN LIMPIA
                <?php elseif ($to == 'prom_d'): ?>
                    DESINSTALACIÓN LIMPIA
                <?php else: ?>
                    MONITOR DE INSTALACIÓN
                <?php endif; ?>
            </li>

            <li class="last">
                <?php if (!in_array($to, array('cleanuninstall', 'prom_d'))): ?>
                    Monitoriza los cambios en el sistema al instalar programas
                <?php else: echo $transData; endif; ?>
            </li>
        </ul>
      <div class="left-img"><img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="IObit Uninstalller PRO"></div>
      <div class="right-message">
        <h1>IObit Uninstaller 11 PRO</h1>
        <h2>Revierte cambios en el sistema al desinstalar programas</h2>
        <h2 class="uninstall _hide">Help to uninstall programs more thoroughly</h2>
        <p class="price"><strong><b>15</b>,99€</strong> <del>29,99€</del></p>
        <p class="pc"><span></span> 1 año de suscripción / 3 PCs</p>
        <div class="number-message">
          <div class="number">
            <div class="countdown">
              <div class="scroll-tick"><span>0</span></div>
              <div class="scroll-tick"><span>0</span></div>
              <div class="scroll-tick"><span>0</span></div>
              <div class="scroll-tick"><span>0</span></div>
            </div>
            <p>¡Date prisa, solo quedan <span class="gift">50</span> a este precio!</p>
          </div>
          <div class="buy-content">
            <a href="https://www.iobit.com/buy.php?product=es-iu113pc1599&ref=es_iu113pcmonitor2108<?php echo $refStr;?>&refs=es_purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iu1599monitor2108-es');" class="buybtn"><i></i> <span>Comprar ahora</span></a>
          </div>
        </div>
      </div>
    </div>
    
  </div>
  <!-- end banner -->

  <!-- problem -->
  <div class="problem">
    <div class="wrapper">
      <h2>¿Qué es el Monitor de <span>Instalación</span>?</h2>
      <div class="message-box">
        <div class="list01">
          <h3>MONITOR DE INSTALACIÓN</h3>
          <p>Ayuda a monitorizar todas las cosas que han hecho los programas en tu sistema durante su instalación.</p>
        </div>
        <div class="list02">
          <h3>GRABA LOS CAMBIOS</h3>
          <p>Graba los cambios en archivos y registro causados por programas.</p>
        </div>
        <img class="screen" src="<?php echo getStaticUrl('images/screen-01.png')?>" alt=""/>
      </div>
    </div>
  </div>
  <!-- end problem -->
  <div class="feature">
    <div class="wrapper clearfix">
      <div class="left-message">
        <h2>¿Por qué activar <span> Monitor de Instalación</span>?</h2>
        <dl class="clearfix">
          <dt><img src="<?php echo getStaticUrl('images/list01.png')?>" alt=""></dt>
          <dd>
            <h3>VISUALIZAR</h3>
            <p>
              Te permite ver los datos para saber exactamente lo que ha hecho un programa durante su instalación.
            </p>
          </dd>
        </dl>
        <dl class="clearfix">
          <dt><img src="<?php echo getStaticUrl('images/list02.png')?>" alt=""></dt>
          <dd>
            <h3>DESINSTALAR</h3>
            <p>Te ayuda a revertir los cambios en archivos y registro causados por programas monitorizados al desinstalarlos.</p>
          </dd>
        </dl>
      </div>
      <img class="img-box" src="<?php echo getStaticUrl('images/screen-02.png')?>" alt=""/>
    </div>
  </div>
  <!-- benfits -->
  <div class="benfits">
    <div class="wrapper">
      <h2>¿Quė otros beneficios puedo obtener de<br>IObit Uninstaller PRO?</h2>
      <div class="box">
        <dl class="list01">
          <dt>Elimina Programas Obstinados</dt>
          <dd>Escanea y elimina por completo los programas con problemas de desinstalación que no se pueden desinstalar por medios convencionales.</dd>
          <dd><strong>*SOLO PRO</strong></dd>
        </dl>
        <dl class="list02 right">
          <dt>Limpieza Completa</dt>
          <dd>Limpia automaticámente los restos de programas desinstalados sin <br> usar el desinstalador de IObit</dd>
          <dd><strong>*SOLO PRO</strong></dd>
        </dl>
        <dl class="list03">
          <dt>Actualizador de Software</dt>
          <dd>1 clic para actualizar tu software sin ninguna <br> intervención del usuario</dd>
          <dd><strong>*SOLO PRO</strong></dd>
        </dl>
        <dl class="list04 right">
          <dt>Navegador rápido y seguro </dt>
          <dd>Identifica complementos maliciosos y basados en anuncios y elimina las notificaciones del navegador para garantizar una experiencia de navegación segura y limpia.</dd>
          <dd><strong>*SOLO PRO</strong></dd>
        </dl>
        <dl class="list05 right botright">
          <dt>Elimina Bundleware</dt>
          <dd>Elimina programas de terceros no deseados y freeware publicitario o de robo de privacidad</dd>
          <dd><strong>*SOLO PRO</strong></dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- end benfits -->


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


  <!-- float -->
  <div class="float clearfix">
    <div class="wrapper">
      <div class="left-img"><img src="<?php echo getStaticUrl('images/fl-iu-box.png')?>" alt=" IObit Uninstalller PRO"></div>
      <div class="number">
        <div class="countdown">
          <div class="scroll-tick"><span>0</span></div>
          <div class="scroll-tick"><span>0</span></div>
          <div class="scroll-tick"><span>0</span></div>
          <div class="scroll-tick"><span>0</span></div>
        </div>
        <p><span class="viewNum"><?php echo $viewNum;?></span> visitantes ahora , solo quedan <span class="gift">50</span> a este precio!</p>
      </div>
      <p class="price"> <del> 29,99€ </del> <strong><b>15</b>,99€</strong></p>
      <a href="https://www.iobit.com/buy.php?product=es-iu113pc1599&ref=es_iu113pcmonitor2108<?php echo $refStr;?>&refs=es_purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iu1599monitor2108-es');" class="buybtn"><i></i> <span>Comprar ahora</span></a>
    </div>
  </div>
  <div class="pop-over ">
    
    <h2>¡Regalos gratis para nuestro afortunado visitante!</h2>
    <h3>Activa IObit Uninstaller Pro hoy para obtener tus regalos gratis (valor 69,94€)</h3>
    <p>¡Oferta limitada! Termina en <strong><span class="count-time">60</span>s</strong></p>
    <img src="<?php echo getStaticUrl('images/pop-iu-box.png')?>" alt=" IObit Uninstalller PRO" class="imgbox">
    <a href="https://www.iobit.com/buy.php?product=es-iu113pcpfsd1599&ref=es_iu113pcpfsdmonitor2108<?php echo $refStr;?>&refs=es_purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iubundlemonitor2108-es');" class="buybtn buybtn-pop">Obtener mis regalos gratis</a>
  </div>
  <div class="pop-bg "><span class="close">X</span></div>
  <script>refStr="<?php echo $refStr;?>";</script>
  <script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
  <script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>