<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';
  if(!empty($_GET['AFF'])) $_GET['aff']=$_GET['AFF'];
$affStr=empty($_GET['AFF'])?$_GET['aff']:$_GET['AFF'];
$buyLink="https://www.iobit.com/buy.php?product=esaff-db63pc1499&ref=".(empty($_GET['ref'])?'esaff_db8_2017generaltrial':$_GET['ref'])."&aff=".$affStr;
$refStr=$_GET['ref'];
if(preg_match('/fspi([0-9]*)/',$refStr,$matches)){
  $buyLink='https://iobit.onfastspring.com/driver-booster-pro-1-year-subscription-3-pcs-1993';
  $pregNum=$matches[1];
  if(!empty($pregNum)){
    $buyLink='http://macbooster.7eer.net/c/'.$pregNum.'/558401/4385';
  }
}
if (preg_match_all('/ir([0-9]*)/', $_GET['ref'], $arr)) {

    $buyLink = "https://iobit.onfastspring.com/driver-booster-pro-1-year-subscription-3-pcs-1993";

    if ($arr[1][0] != null) {

        $buyLink = "http://macbooster.7eer.net/c/" . $arr[1][0] . "/535215/4385";
    }
}

function statistic($status){
  try{
    $dsn="mysql:host=purchase-iobit-com-db.cylexcs6bned.us-east-1.rds.amazonaws.com;dbname=purchase";
    $pdo=new PDO($dsn,'purchase','PXdNZdCE68iz');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->query("set names utf8");
    $insertSql="insert into affdbgeneral(ip,refStr,addtime,status) values(:ip,:refStr,:addtime,:status)";
    $pre=$pdo->prepare($insertSql);

    $ip=getIP();
    $refStr=$_GET['ref'].'-'.$_GET['aff'];
    $addTime=time();
    $pre->bindParam(':ip',$ip);
    $pre->bindParam(':refStr',$refStr);
    $pre->bindParam(':addtime',$addTime);
    $pre->bindParam(':status',$status);
    $pre->execute();
  }catch (PDOException $e){
  }
}

if($_GET['action']=='downloadCount'){
  statistic(2);
  exit();
}

statistic(0);
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Disfruta de un PC más Estable con Driver BoosterPRO</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Lato:300,400,700'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com/es/index.php" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit" />
      </a>
      <h2>La herramienta  imprescindible de actualización de controladores</h2>
      <h1>Driver Booster PRO</h1>
      <p>Actualiza de forma segura y rápida los controladores obsoletos con un solo clic</p>
      <ul class="btnbox clearfix">
        <li class="first">
          <a class="btn down" href="./download.php?ref=<?php echo (empty($_GET['ref'])?'esdb8gt':$_GET['ref']);?>&aff=<?php echo $_GET['aff'];?>" onclick="ga('send', 'event', 'dbdl', 'download', 'esdb8gt')" data-text="Free Download">
            <span>Descarga gratis</span>
            <i class="all-icons"></i>
          </a>
        </li>
        <li>
          <a class="btn buy" href="<?php echo $buyLink;?>" onclick="ga('send', 'event', 'dbbuy', 'buy', 'esaffdb82017generaltrial')  ;dlCount()" data-text="Compra ahora y ahorra un 50% >>">
            <span>Compra ahora y ahorra un <b>50%</b> >></span>
          </a>
        </li>
      </ul>
      <div class="boxshot"><img src="<?php echo getStaticUrl('images/boxshot.png')?>" alt="" /></div>
    </div>
  </div>
  <!-- banner end -->

  <!-- container start -->
  <div class="container">

    <!-- intro start -->
    <div class="intro">
      <div class="wrapper">
        <h2>¿Qué problemas de PC tienes por culpa de controladores y componentes de juegos obsoletos?</h2>
        <div class="clearfix">
          <img class="computer" src="<?php echo getStaticUrl('images/computer.png')?>" alt="" />
          <div class="describe fr">
            <div class="list">
              <img src="<?php echo getStaticUrl('images/icons01.png')?>" alt="" />
              <span><b>! </b>Bloqueo y congelación frecuente del sistema</span>
            </div>
            <div class="list two">
              <img src="<?php echo getStaticUrl('images/icons02.png')?>" alt="" />
              <span><b>! </b>La conexión de red se cae ocasionalmente</span>
            </div>
            <div class="list three">
              <img src="<?php echo getStaticUrl('images/icons03.png')?>" alt="" />
              <span><b>! </b>La impresora u otro dispositivo externo no funciona correctamente</span>
            </div>
            <div class="list four">
              <img src="<?php echo getStaticUrl('images/icons04.png')?>" alt="" />
              <span><b>! </b>Errores de sonido al escuchar música o al hablar por el micrófono</span>
            </div>
            <div class="list five">
              <img src="<?php echo getStaticUrl('images/icons05.png')?>" alt="" />
              <span><b>! </b>Bajo rendimiento de los juegos,  o bloqueos a causa del controlador de gráficos</span>
            </div>
          </div>
        </div>
        <div class="learn">
          <a href="javascript: void(0)">Haz clic aquí para saber más sobre los controladores</a>
          <div class="drivers">
            <p>Los controladores son software que cada dispositivo o componente de hardware necesita para funcionar. Si conectas un dispositivo a tu PC sin instalar el controlador adecuado para él, Windows no sabrá qué hacer con él.</p>
            <p>Los controladores permiten a tu sistema operativo saber qué es el dispositivo y cómo usarlo.</p>
          </div>
        </div>
      </div>
    </div>
    <!-- intro end -->

    <!-- threepoints start -->
    <div class="threepoints">
      <div class="wrapper">
        <h2>¿Qué hace Driver Booster PRO?</h2>
        <div class="clearfix">
          <div class="pointist one">
            <div class="point-img"><img src="<?php echo getStaticUrl('images/point01.png')?>" alt="" /></div>
            <b>1</b>
            <h4>Detecta y repara controladores con un solo clic</h4>
            <p>
              Detecta y repara fácilmente todos los controladores desactualizados, faltantes e incorrectos de una sola vez.
            </p>
          </div>
          <div class="pointist two">
            <div class="point-img"><img src="<?php echo getStaticUrl('images/point02.png')?>" alt="" /></div>
            <b>2<span class="arrow"></span><span class="arrow right"></span></b>
            <h4>Descargar controladores de forma rápida y segura </h4>
            <p>
              Copia de seguridad automática y creación del punto de restauración del sistema antes de la actualización, en caso de que ocurra algo inesperado.
            </p>
          </div>
          <div class="pointist three">
            <div class="point-img"><img src="<?php echo getStaticUrl('images/point03.png')?>" alt="" /></div>
            <b>3</b>
            <h4>Disfruta de una experiencia de juego y PC sin problemas</h4>
            <p>
              Los últimos controladores Game Ready de varias marcas ayudan a aumentar el rendimiento, corregir errores y mejorar la experiencia de juego.
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- threepoints end -->

    <!-- centbuy start -->
    <div class="centbuy">
      <h2>¡Obtén tu solución integral para el frustrante problema de controladores de dispositivo!</h2>
      <div class="wrapper">
        <a class="btn buy" href="<?php echo $buyLink;?>" onclick="ga('send', 'event', 'dbbuy', 'buy', 'esaffdb82017generaltrial')  ;dlCount()" data-text="Compra ahora y ahorra un 50% >>">
          <span>Compra ahora y ahorra un <b>50%</b> >></span>
        </a>
      </div>
    </div>
    <!-- centbuy end -->

    <!-- feature start -->
    <div class="feature">
      <div class="wrapper clearfix">
        <div class="text">
          <h2>Soporte de actualización de más de 4.500.000 de controladores de dispositivo</h2>
          <span></span>
          <p>
            Obtén automáticamente los controladores y actualizaciones recomendadas para tu hardware con Driver Booster PRO. Al admitir más de 4.500.000 de controladores de dispositivo, Driver Booster PRO puede solucionar problemas de controladores faltantes / defectuosos / obsoletos para ayudarte a reducir la congelación y el bloqueo del sistema.
          </p>
        </div>
        <img src="<?php echo getStaticUrl('images/feature01.png')?>" alt="" />
      </div>
    </div>

    <div class="feature gray">
      <div class="wrapper clearfix">
        <img src="<?php echo getStaticUrl('images/feature02.png')?>" alt="" />
        <div class="text">
          <h2>Actualización segura del controlador</h2>
          <span></span>
          <p>
            Driver Booster PRO realiza automáticamente una copia de seguridad de una copia anterior y crea un punto de restauración del sistema antes de actualizar, en caso de que ocurra algo inesperado. Para garantizar la seguridad del ordenador de los usuarios, Driver Booster PRO solo proporciona controladores WHQL calificados, y la conexión HTTPS recientemente adoptada puede cifrar tu conexión con el servidor mientras descargas los controladores.
          </p>
        </div>
      </div>
    </div>

    <div class="feature">
      <div class="wrapper clearfix">
        <div class="text">
          <h2>Disfruta de una experiencia de juego fluida</h2>
          <span></span>
          <p>
            Driver Booster PRO mantiene fácilmente los controladores gráficos y los controladores Game Ready siempre actualizados para obtener el mejor rendimiento del hardware y llevar los juegos al siguiente nivel. También cierra rápidamente los procesos en segundo plano y los servicios innecesarios de Windows para desbloquear todo el potencial de tus juegos de PC. Los componentes del juego para la mayoría de los juegos de PC también están disponibles para ayudarte a lanzar tu juego con éxito.
          </p>
        </div>
        <img src="<?php echo getStaticUrl('images/feature03.png')?>" alt="" />
      </div>
    </div>

    <div class="feature gray">
      <div class="wrapper clearfix">
        <img src="<?php echo getStaticUrl('images/feature04.png')?>" alt="" />
        <div class="text">
          <h2>Ahorro de tiempo y descarga inteligente de controladores</h2>
          <span></span>
          <p>
            Al eliminar archivos inútiles en el paquete de instalación y comprimirlo claramente, Driver Booster te ayuda a ahorrar tiempo en la actualización de controladores. Driver Booster PRO también ofrece una velocidad de descarga más rápida y permite la descarga e instalación durante el tiempo de inactividad del sistema para que los usuarios puedan concentrarse en sus cosas evitando molestias innecesarias.
          </p>
        </div>
      </div>
    </div>
    <!-- feature end -->

    <!-- footbuy start -->
    <div class="centbuy footbuy">
      <div class="wrapper">
        <h3>¿Cómo mantener actualizados los controladores del PC? <span>¡Prueba Driver Booster PRO y hazlo con un solo clic!</span></h3>
        <ul class="btnbox clearfix">
          <li class="first">
            <a class="btn down" href="./download.php?ref=<?php echo (empty($_GET['ref'])?'esdb8gt':$_GET['ref']);?>&aff=<?php echo $_GET['aff'];?>" onclick="ga('send', 'event', 'dbdl', 'download', 'esdb8gt')" data-text="Free Download">
              <span>Descarga gratis</span>
              <i class="all-icons"></i>
            </a>
          </li>
          <li>
            <a class="btn buy" href="<?php echo $buyLink;?>" onclick="ga('send', 'event', 'dbbuy', 'buy', 'esaffdb82017generaltrial')  ;dlCount()" data-text="Compra ahora y ahorra un 50% >>">
              <span>Compra ahora y ahorra un <b>50%</b> >></span>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <!-- footbuy end -->

    <!-- brands start -->
    <div class="brands wrapper">
      <h2>Admite la actualización de controladores de más de 500 marcas principales</h2>
      <p>con solo un clic</p>
      <ul class="clearfix">
        <li><img src="<?php echo getStaticUrl('images/hp.png')?>" alt=""/></li>
        <li><img src="<?php echo getStaticUrl('images/microsoft.png')?>" alt=""/></li>
        <li><img src="<?php echo getStaticUrl('images/canon.png')?>" alt=""/></li>
        <li><img src="<?php echo getStaticUrl('images/dell.png')?>" alt=""/></li>
        <li><img src="<?php echo getStaticUrl('images/nvidia.png')?>" alt=""/></li>
        <li><img src="<?php echo getStaticUrl('images/snmsung.png')?>" alt=""/></li>
        <li><img src="<?php echo getStaticUrl('images/lg.png')?>" alt=""/></li>
        <li><img src="<?php echo getStaticUrl('images/amd.png')?>" alt=""/></li>
        <li><img src="<?php echo getStaticUrl('images/brother.png')?>" alt=""/></li>
        <li><img src="<?php echo getStaticUrl('images/intel.png')?>" alt=""/></li>
        <li><img src="<?php echo getStaticUrl('images/sony.png')?>" alt=""/></li>
        <li><img src="<?php echo getStaticUrl('images/logitech.png')?>" alt=""/></li>
      </ul>
    </div>
    <!-- brands end -->

    <!-- review start -->
    <div class="review">
      <div class="wrapper">
        <div class="reviews active">
          <h2>Opinión de los medios</h2>
          <h3>IObit es fabricante de muchas herramientas y utilidades, y Driver Booster PRO es una de las mejores para actualizador tus controladores de forma automática. </h3>
          <p>
            La funcionalidad básica simple de Driver Booster PRO se hace aún más atractiva gracias a la inclusión de múltiples licencias a un precio muy económico, así como a una interfaz personalizable que hace un buen trabajo al mostrar información específica relacionada con el hardware. Los competidores Ashampoo Driver Updater y SlimWare Utilities DriverUpdate ofrecen características atractivas, pero IObit Driver Booster PRO está un paso por delante.
          </p>
        </div>
        <div class="reviews">
          <h2>Opiniones de los usuarios</h2>
          <h3></h3>
          <p>
            "Lo primero quería recalcar que es un programa muy ligero y fácil de usar. Normalmente ejecuto actualizaciones de Windows diariamente para conseguir los últimos controladores pero Driver Booster actualiza y corrige todos los problemas de mis drivers de manera más precisa y mejor que las actualizaciones de Windows. Estoy realmente impresionado con este software y lo recomiendo como el gran producto que es."
          </p>
        </div>
        <div class="reviews">
          <h2>Opiniones de los usuarios</h2>
          <h3></h3>
          <p>
            "Que sorpresa haber recibido la nueva versión de Driver Booster de IObit. Una vez lo he instalado y ha empezado a actualizar me he dado cuenta de que no tenía ni idea de la cantidad de programas de mi PC que tenía que actualizar. Ahora que están todos actualizados, mi PC vuelve a funcionar como si estuviera nuevo, increíble!"
          </p>
        </div>
        <div class="reviews">
          <h2>Opiniones de los usuarios</h2>
          <h3></h3>
          <p>
            "Me ayudó a solucionar los problemas de lentitud de mi portátil gamer sin dejar de funcionar. A veces cuando he intentado actualizar los drivers, mi ordenador dejaba de funcionar y tenía que formatear para restaurar todas las funciones. Eso con DB7 no pasa y además es fácil de usar y las descargas son rápidas, sinceramente una de las mejores herramientas que hay en el mercado hoy en día."
          </p>
        </div>
        <ul class="handle clearfix">
          <li class="active">
            <div class="badge">
              <img src="<?php echo getStaticUrl('images/pc-magazine.png')?>" alt="PC Magazine" />
              <span></span>
            </div>
            <strong>PC Magazine</strong>
          </li>
          <li>
            <div class="badge">
              <img src="<?php echo getStaticUrl('images/dunston-diaz.png')?>" alt="Dunston Diaz"/>
              <span></span>
            </div>
            <strong>Dunston Diaz</strong>
          </li>
          <li>
            <div class="badge">
              <img src="<?php echo getStaticUrl('images/harold-barr.png')?>" alt="Harold Barr"/>
              <span></span>
            </div>
            <strong>Harold Barr</strong>
          </li>
          <li>
            <div class="badge">
              <img src="<?php echo getStaticUrl('images/carlos-alexandre.png')?>" alt="Carlos Alexandre Veríssimo"/>
              <span></span>
            </div>
            <strong>Carlos Alexandre Veríssimo</strong>
          </li>
        </ul>
      </div>
    </div>
    <!-- review end -->
  </div>
  <!-- container end -->

  <!-- service start -->
  <div class="service wrapper clearfix">
    <dl>
      <dt><h5>100% Limpio</h5></dt>
      <dd><img src="<?php echo getStaticUrl('images/godaddy.png')?>" alt="" /></dd>
    </dl>
    <dl class="two">
      <dt><h5>Back 60 días de Reembolso</h5></dt>
      <dd><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt="" /></dd>
    </dl>
    <dl>
      <dt><h5>Atención al Cliente 24/7</h5></dt>
      <dd>Atención técnica gratuita 24/7</dd>
    </dl>
  </div>
  <!-- service end -->

  <!-- footer start -->
  <div class="footer">
    <p class="wrapper">Copyright © 2005 - <?php echo date('Y')?> IObit. Todos los derechos reservados</p>
  </div>
  <!-- footer end -->

  <!-- backtotop start -->
  <div class="backtotop">top</div>
  <!-- backtotop end -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>