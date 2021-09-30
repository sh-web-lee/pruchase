<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
  $pResUrl = './';
  $pRootUrl = '../../../../';
}
$ref1pc='esaff_asc13_2020buya1pc';
$ref3pc='esaff_asc13_2020buya3pc';
if(!empty($_GET['ref'])){
  $ref1pc=$ref3pc=$_GET['ref'];
}
include $pRootUrl.'include/common.inc.php';

$reduceNum=74041325;
$buyNum = number_format(ceil(microtimeFloat()*1000/20000) - $reduceNum);
if($_GET['action']=='maskCount'){
  $maskType=$_GET['maskType'];
  if(in_array($maskType,array(1,2))) {
    $buttonClick=$_GET['buttonClick'];
    $ip=empty($_GET['ip']) ? getIP() : $_GET['ip'];
    $time=time();
    try {
      $dsn="mysql:host=purchase-iobit-com-db.cylexcs6bned.us-east-1.rds.amazonaws.com;dbname=purchase";
      $pdo=new PDO($dsn,'purchase','PXdNZdCE68iz');
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $pdo->query("set names utf8");

      $sql = "insert into affascmaskcount2019 (ip,addTime,maskType,buttonClick) values(:ip,:addTime,:maskType,:buttonClick)";
      $pre = $pdo->prepare($sql);
      $pre->bindParam(':ip', $ip);
      $pre->bindParam(':addTime', $time);
      $pre->bindParam(':maskType', $maskType);
      $pre->bindParam(':buttonClick', $buttonClick);
      $pre->execute();
    } catch (PDOException $e) {
      var_dump($e->getMessage());
    }
  }
  exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Activa Advanced SystemCare PRO ahora para que tu PC lento funcione a su máxima capacidad</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
  <script type="text/javascript">
    function getBuyNum(){
      $.ajax({
        type: "GET",
        url: "<?php echo $pRootUrl;?>callback.php",
        data: "action=getBuyNum&reduceNum=<?php echo $reduceNum;?>&reTime=&r="+Math.random(),
        success: function(packs){
          $('.buynum').html(packs);
          setTimeout('getBuyNum()', 20000);
        }
      });
    }
    setTimeout('getBuyNum()', 20000);
  </script>
</head>

<body>

<!-- banner start -->
<div class="banner">
  <div class="wrapper clearfix">
    <dl class="fl clearfix">
      <dt class="fl"><img src="<?php echo getStaticUrl('images/ascbox.png')?>" alt="" /></dt>
      <dd class="fl">
        <span>Estás activando:</span>
        <h1>Advanced SystemCare 13 PRO</h1>
        <p>¡Comprálo ahora para optimizar tu PC lento y hacerlo funcionar a su <br> máxima capacidad!</p>
      </dd>
    </dl>
    <div class="right fr">
      <p>“Advanced Systemcare soluciona diversos problemas de tu ordenador”</p>
      <img src="<?php echo getStaticUrl('images/clnet.png')?>" alt="" />
    </div>
  </div>
</div>
<!-- banner end -->

<!-- container start -->
<div class="wrapper">
  <!-- title -->
  <h2 class="title"></h2>
  <!-- offer start -->
  <div class="offer clearfix">

    <!-- 1PC BOX -->
    <div class="box pc">
      <!-- computer -->
      <img src="<?php echo getStaticUrl('images/computer.png')?>" alt="" />
      <!-- title -->
      <h2>1 año / 1 licencia</h2>
      <!-- details -->
      <ul>
        <li><i></i>Limpieza completa del PC</li>
        <li><i></i>Optimización del sistema</li>
        <li><i></i>Protección completa de privacidad</li>
        <li><i></i>Limpieza automática RAM</li>
        <li><i></i>Actualizaciones gratuitas</li>
      </ul>
      <div class="price">
        <!-- price -->
        <p><strong>14,99<small>€</small></strong> <del>29,99€</del></p>
        <!-- 1pc buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=esaff-asc131pc1499&ref=esaff_asc13_2020buya1pc&aff=<?php echo $_GET['aff']?>"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'esaffasc132020buya1pc')">
          Añadir a la cesta
        </a>
      </div>
    </div>

    <!-- 3PC BOX -->
    <div class="box pcs">
      <!-- computer -->
      <img src="<?php echo getStaticUrl('images/computer-pcs.png')?>" alt="" />
      <!-- title -->
      <h2>1 año / 3 licencias</h2>
      <!-- detailes -->
      <ul>
        <li><i></i>Limpieza completa del PC</li>
        <li><i></i>Optimización del sistema</li>
        <li><i></i>Protección completa de privacidad</li>
        <li><i></i>Limpieza automática RAM</li>
        <li><i></i>Actualizaciones gratuitas</li>
      </ul>
      <div class="price">
        <!-- price -->
        <p><strong>17,99<small>€</small></strong> <del>44,98€</del></p>
        <!-- 3pc buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=esaff-asc133pc1799&ref=esaff_asc13_2020buya3pc&aff=<?php echo $_GET['aff']?>"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'esaffasc132020buya3pc')">
          Añadir a la cesta
        </a>
        <p class="people"><i></i>Lo han comprado <b class="buynum"><?php echo $buyNum;?></b> personas</p>
      </div>
    </div>
  </div>
  <!-- offer end -->

  <!-- payment start -->
  <div class="payment">
    <span>Aceptamos</span>
    <img src="<?php echo getStaticUrl('images/payment.png')?>" alt="" />
  </div>
  <!-- payment end -->

  <!-- feature start -->
  <div class="feature clearfix">
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/feature-01.png')?>" alt="" /></dt>
      <dd>
        <h2>GARANTÍA DE REEMBOLSO DE 60 DÍAS</h2>
        <p>
          Si no estás satisfecho con Advanced SystemCare PRO, te devolveremos tu dinero en un plazo de 60 días.
        </p>
      </dd>
    </dl>
    <dl class="right">
      <dt><img src="<?php echo getStaticUrl('images/feature-02.png')?>" alt="" /></dt>
      <dd>
        <h2>Pago 100% seguro</h2>
        <p>
          Protegemos tus datos personales con la encriptación avanzada y la protección anti-spam.
        </p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/feature-03.png')?>" alt="" /></dt>
      <dd>
        <h2>Soporte técnico Gratuito 24/7</h2>
        <p>
          Nuestro equipo de soporte premium te responderá para cualquier pregunta que puedas tener sobre nuestros productos en un plazo de 24 horas.
        </p>
      </dd>
    </dl>
    <dl class="right">
      <dt><img src="<?php echo getStaticUrl('images/feature-04.png')?>" alt="" /></dt>
      <dd>
        <h2>ACTUALIZACIONES GRATIS</h2>
        <p>
          Recibirás todas las actualizaciones del programa durante el período de suscripción.
        </p>
      </dd>
    </dl>
  </div>
  <!-- feature end -->
</div>
<!-- container end -->

<!-- review start -->
<div class="container bordertop clearfix">
  <div class="review wrapper">
    <div class="review-box">
      <!-- 01 -->
      <div class="reviews clearfix">
        <h2>Comentarios de Usuario</h2>
        <h3>"Definitivamente sobrepasó mis expectativas"</h3>
        <p>"He perdido la cuenta de cuántos programas he intentado en años y ninguno ha estado cerca de Advanced SystemCare Pro. Desdeque tengo este programa no he tenido que  llamar a ningún técnico para reparar mi ordenador. Ahora, con Advanced System Care Pro, todo está en un solo lugar y nos lleva tan sólo unos minutos cada dos días para hacer los mismos trabajos con mucha más confianza."</p>
      </div>
      <!-- 02 -->
      <div class="reviews clearfix active">
        <h2>Comentarios Mediáticos</h2>
        <h3>"Advanced Systemcare soluciona diversos problemas de tu equipo."</h3>
        <p>"No hay nada peor que un ordenador que se atasca tanto que impide tu capacidad para trabajar o jugar a juegos. Advanced Systemcare soluciona y optimiza diversos problemas de tu equipo, no sólo a través de la limpieza de archivos inútiles, malware y entradas no válidas del registro, sino también impulsando la velocidad de tu ordenador para optimizar tu experiencia del PC."</p>
      </div>
      <!-- 03 -->
      <div class="reviews clearfix">
        <h2>Comentarios de Usuario</h2>
        <h3>"Mi elección es Advanced SystemCare Pro"</h3>
        <p>"Como técnico de ordenadores, encuentro que al descargar y escanear con la versión gratuita de ASC, la mayoría de problemas estan resueltos. Cuando acabo una reparación, usualmente sugiero al cliente comprar el paquete PRO. ¿Quién necesita un técnico cuando tienes el poder de ASC PRO trabajando en tu sistema 24-7? Este es el mejor producto que un usuario puede comprar desde casa. Gracias por hacer mi trabajo más fácil."</p>
      </div>
    </div>

    <ul class="handle clearfix">
      <li>
        <div class="badge"><img src="<?php echo $pResUrl; ?>images/bob-bassett.png" alt="Bob Bassett"><span></span></div>
        <strong>Bob Bassett</strong>
      </li>
      <li class="active">
        <div class="badge"><img src="<?php echo $pResUrl; ?>images/cnet.png" alt="Cnet"><span></span></div>
        <strong>Cnet</strong>
      </li>
      <li>
        <div class="badge"><img src="<?php echo $pResUrl; ?>images/charles-r-widick.png" alt="Charles R. Widick"><span></span></div>
        <strong>Charles R. Widick</strong>
      </li>
    </ul>
  </div>
</div>
<!-- review end -->

<!-- footer start -->
<div class="footer">Copyright © 2005 - <?php echo date('Y')?> IObit. Todos los derechos reservados</div>
<!-- footer end -->

<!-- mask start -->
<div class="mask">
  <div class="mask-box">
    <div class="close" onclick="maskClose()">x</div>
  </div>
</div>
<!-- mask end -->

<script>var imgSrc = "<?php echo getStaticUrl('images/off.png')?>";</script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>