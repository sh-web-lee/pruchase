<?php //	初始化
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
    $pResUrl = './';
    $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';
//创建浮点计算，取 购买人数 及 剩余礼品数，根据情况选择使用
function microtime_float(){
    list($usec, $sec) = explode(' ', microtime());
    return ((float)$usec + (float)$sec);
}

// 已购买人数
// 需要精确到某个值时，先输出 ceil(microtime_float()*1000/20000) 再 由此结果计算需要减去的量
$cName='frdbau_re';
$reduceNum=empty($_COOKIE[$cName])?(ceil(microtime_float()*1000/20000)):$_COOKIE[$cName];
$buyNum = ceil(microtime_float()*1000/20000) - $reduceNum;
if($_GET['action']=='getBuyNum'){
  setcookie($cName, $reduceNum, time() + 3600 * 24 *30 *7);
  echo $buyNum;
  exit();
}


$refStr=empty($_GET['st'])?'':('-'.$_GET['st']);
if(in_array($_GET['pop'],array('x_db','xi_db','xb_db'))){
  $refStr.='-'.$_GET['pop'];
}
if(!empty($_GET['to'])){
  $refStr.='-'.$_GET['to'];
}
if(preg_match_all('/([0-9]*)\./',$_GET['ver'],$matches)){
  $ver=$matches[1][0].$matches[1][1];
  $refStr.='-'.$ver;
}
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['user'])?'':('-'.$_GET['user']);
$refStr.=empty($_GET['insday'])?'':('-'.$_GET['insday']);
$refStr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-t'.$_GET['type'].'-e'.$_GET['expd'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrom
  e=1" >
  <title>Actualiza a Driver Booster PRO con un 75% de descuento para mantener todos tus controladores actualizados - IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
    <?php echo $gJavascript['public']; ?>
    <?php echo $gJavascript['head']; ?>
</head>
<body>

<!-- banner start -->
<div class="banner">
  <div class="wrapper">
    <a class="logo" href="https://www.iobit.com/es/index.php" target="_blank">IObit</a>
    <div class="top-box">
      <img src="<?php echo $pResUrl;?>images/banner-db-box.png" alt="">
      <p>Gracias por ser un magnífico cliente</p>
      <h1>Driver Booster PRO</h1>
      <h2>¡Consigue PRO y siempre tendrás los drivers actualizados y un PC eficaz!</h2>
    </div>
    <div class="content">
      <div class="box" data-name="pc3">
        <h3>3 meses</h3>
        <p><strong><b>3</b>,33€</strong> / mes</p>
        <a href="https://www.iobit.com/buy.php?product=es-db83pc999&ref=es_db83months999oldspecial2006<?php echo $refStr;?>&refs=es_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchaseoldspecial3m-es')" class="buybtn border">COMPRAR AHORA</a>
        <ul>
          <li>3 meses / 3 PCs  <strong>9,99€ </strong></li>
          <li class="border">Total  <strong class="red">9,99€ </strong></li>
          <li> <span>Ahorra 0€ </span></li>
        </ul>
      </div>
       <div class="box twelve" data-name="pc12">
        <h3>12 meses</h3>
        <p><strong><b>1</b>,49€</strong> / mes</p>
        <a href="https://www.iobit.com/buy.php?product=es-db83pc1799&ref=es_db812months1799oldspecial2006<?php echo $refStr;?>&refs=es_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchaseoldspecial12m-es')" class="buybtn yellow">COMPRAR AHORA</a>
        <ul>
          <li>12 meses / 3 PCs  <strong>74,85€  </strong></li>
          <li class="border">Descuento  <strong>-75%  </strong></li>
          <li class="border">Total  <strong class="red">17,99€ </strong></li>
          <li> <span>Ahorra 56,86€</span></li>
        </ul>
      </div>
      <div class="box sixmouth" data-name="pc6">
        <h3>6 meses</h3>
        <p><strong><b>2</b>,16€</strong> / mes</p>
        <a href="https://www.iobit.com/buy.php?product=es-db83pc1299&ref=es_db86months1499oldspecial2006<?php echo $refStr;?>&refs=es_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchaseoldspecial6m-es')" class="buybtn border">COMPRAR AHORA</a>
        <ul>
          <li>6 meses / 3 PCs <strong>39,99€</strong></li>
          <li class="border">Descuento  <strong>-65%  </strong></li>
          <li class="border">Total  <strong class="red">12,99€ </strong></li>
          <li> <span>Ahorra 27€ </span></li>
        </ul>
      </div>
    </div>   
  </div>
</div>
<!-- banenr end -->

<!-- payment start -->
<div class="payment wrapper">
  <img src="<?php echo $pResUrl; ?>images/payment.jpg" alt="">
</div>
<!-- payment end -->

<!-- benefits start -->
<div class="benefits">
  <div class="wrapper clearfix">
    <h2>¡El mejor actualizador de controladores te ofrece <br> el máximo rendimiento para tu PC!</h2>
    <div class="showcase">
      <div class="inner">
        <ul class="screenshot">
          <li>
            <img src="<?php echo getStaticUrl('images/screenshot-01.png') ?>" alt=""/>
          </li>
          <li>
            <img src="<?php echo getStaticUrl('images/screenshot-02.png') ?>" alt=""/>
          </li>
          <li>
            <img src="<?php echo getStaticUrl('images/screenshot-03.png') ?>" alt=""/>
          </li>
          <li>
            <img src="<?php echo getStaticUrl('images/screenshot-04.png') ?>" alt=""/>
          </li>
        </ul>
      </div>
      <ul class="zoom">
        <li class="fun1 active">
          <div class="container">
            <img src="<?php echo getStaticUrl('images/screenshot-01-zoom.png') ?>" alt=""/>
          </div>
        </li>
        <li class="fun2">
          <div class="container">
            <img src="<?php echo getStaticUrl('images/screenshot-02-zoom.png') ?>" alt=""/>
          </div>
        </li>
        <li class="fun3">
          <div class="container">
            <img src="<?php echo getStaticUrl('images/screenshot-03-zoom.png') ?>" alt=""/>
          </div>
        </li>
        <li class="fun4">
          <div class="container">
            <img src="<?php echo getStaticUrl('images/screenshot-04-zoom.png') ?>" alt=""/>
          </div>
        </li>
      </ul>
    </div>
    <div class="detail-list">
      <dl class="active first">
        <dt><i class="benefits01"></i></dt>
        <dd>
          <h3>Soporta más de 4,500,000 drivers y componentes  </h3>
          <p>
            Soporta la actualización de más de 4,500,000 drivers y <br>
            componentes que pasaron la prueba WHQL de Microsoft y <br>
            las reglas de evaluación estrictas de IObit.
          </p>
        </dd>
      </dl>
      <dl>
        <dt><i class="benefits02"></i></dt>
        <dd>
          <h3>Actualización del driver 100% segura </h3>
          <p>
            Hace una copia de seguridad automáticamente y crea un punto <br>
            de restauración del sistema antes de actualizar en caso de <br>
            cualquier inesperado.
          </p>
        </dd>
      </dl>
      <dl>
        <dt><i class="benefits03"></i></dt>
        <dd>
          <h3>El máximo rendimiento de juego garantizado </h3>
          <p>
            Consigue mejor rendimiento con nuevos drivers de “Game Ready” <br>
            y componentes actualizados.
          </p>
        </dd>
      </dl>
      <dl>
        <dt><i class="benefits04"></i></dt>
        <dd>
          <h3>Descarga 200%* más rápida </h3>
          <p>
            La descarga de tiempo de inactividad del sistema ahorra <br>
            tiempo con velocidad hasta 200%* más rápida.
          </p>
        </dd>
      </dl>
    </div>
    <div class="clear"></div>
    <a class="intro fr" href="javascript: void(0)">Ver más sobre versión PRO>></a>
  </div>
</div>
<!-- benefits end -->


<!-- review start -->
<div class="review">
  <div class="wrapper clearfix">
    <h2>Los usuarios de todo el mundo comparten sus experiencias.</h2>
    <div class="media"><img src="<?php echo getStaticUrl('images/media.png')?>" alt=""/></div>
    <div class="usereview">
      <ul class="users clearfix">
        <li class="first current">
          <div class="imgbox">
            <img src="<?php echo getStaticUrl('images/pc.png')?>" alt="PC Magazine"/>
          </div>
          <b> PC Magazine</b>
        </li>
        <li>
          <div class="imgbox">
            <img src="<?php echo getStaticUrl('images/carlos-alexandre.png')?>" alt="Christian Cappelle"/>
          </div>
          <b>Carlos Alexandre Veríssimo</b>
        </li>
        <li>
          <div class="imgbox">
            <img src="<?php echo getStaticUrl('images/dunston-diaz.png')?>" alt="Dunston Diaz"/>
          </div>
          <b>Dunston Diaz</b>
        </li>
        <li>
          <div class="imgbox">
            <img src="<?php echo getStaticUrl('images/harold-barr.png')?>" alt="Harold Barr"/>
          </div>
          <b>Harold Barr</b>
        </li>
      </ul>
      <div class="userbox">
        <dl class="one active">
          <dd>
            <p>
              "IObit ofrece muchas utilidades  y Driver Booster PRO, que actualiza automáticamente tus drivers, es uno de los mejores. La funcionalidad simple de Driver Booster PRO se hace aún más atractiva gracias a la inclusión de múltiples licencias a un precio muy económico, así como una interfaz personalizable que hace un buen trabajo al mostrar información específica relacionada con el hardware. Competidores como Ashampoo Driver Updater y SlimWare Utilities DriverUpdate ofrecen características atractivas, pero IObit Driver Booster PRO lidera el mercado."
            </p>
            
          </dd>
        </dl>
        <dl>
          <dd>
            <p>
              "Me ayudó a solucionar los problemas de lentitud de mi portátil gamer sin dejar de funcionar. A veces cuando he intentado actualizar los drivers, mi ordenador dejaba de funcionar y tenía que formatear para restaurar todas las funciones. Eso con DB8 no pasa y además es fácil de usar y las descargas son rápidas, sinceramente una de las mejores herramientas que hay en el mercado hoy en día."
            </p>
          </dd>
        </dl>
        <dl>
          <dd>
            <p>
              "Lo primero quería recalcar que es un programa muy ligero y fácil de usar. Normalmente ejecuto actualizaciones de Windows diariamente para conseguir los últimos controladores pero Driver Booster actualiza y corrige todos los problemas de mis drivers de manera más precisa y mejor que las actualizaciones de Windows. Estoy realmente impresionado con este software y lo recomiendo como el gran producto que es."
            </p>
          </dd>
        </dl>
        <dl>
          <dd>
            <p>
              "Que sorpresa haber recibido la nueva versión de Driver Booster de IObit. Una vez lo he instalado y ha empezado a actualizar me he dado cuenta de que no tenía ni idea de la cantidad de programas de mi PC que tenía que actualizar. Ahora que están todos actualizados, mi PC vuelve a funcionar como si estuviera nuevo, increíble!"
            </p>
          </dd>
        </dl>
      </div>
    </div>
  </div>
</div>
<!-- review end -->


<!-- comparison-table start -->
<div class="comparison-table" id="compare">
  <table border="0" cellspacing="0" cellpadding="0" width="100%">
    <thead>
      <tr>
        <th class="text" colspan="2">Ver la comparación entre FREE y PRO</th>
        <th class="itemb"><div>Driver Booster PRO <span></span></div></th>
        <th class="space"></th>
        <th class="itema"><div>Tu edición actual<span></span></div></th>
      </tr>    
    </thead>
    <tbody>
      <tr>
        <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_01.png"></td>
        <td class="virtue">Descarga y actualiza los controladores obsoletos con un solo clic</td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
        <td class="space"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_02.png"></td>
        <td class="virtue">Téléchargez et installez automatiquement et rapidement les pilotes</td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
        <td class="space"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/free-star.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_03.png"></td>
        <td class="virtue">Desbloquea límite de velocidad de actualización de controlador</td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
        <td class="space"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/free-star.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_04.png"></td>
        <td class="virtue">Prioridad para actualizar más controladores obsoletos y raros Mejorado<sup>Mejorado</sup></td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
        <td class="space"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/free-star.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_05.png"></td>
        <td class="virtue">Reduce bloqueos y fallos del sistema para mejor rendimiento con mayor base de datos  </td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
        <td class="space"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/free-star.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_06.png"></td>
        <td class="virtue">Descarga e instala automáticamente controladores en el tiempo de inactividad del sistema </td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
        <td class="space"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/free-star.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_07.png"></td>
        <td class="virtue">Hace copia de seguridad de todos los controladores automáticamente para restauración segura </td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
        <td class="space"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/free-star.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_08.png"></td>
        <td class="virtue">Prioridad de actualizar componentes de juego para mejor experiencia de juego<sup class="nou top"> Novedad</sup></td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
        <td class="space"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/free-star.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_09.png"></td>
        <td class="virtue">Detecta y repara efectivamente errores de dispositivos  <sup class="nou"> Novedad </sup></td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
        <td class="space"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/free-star.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_10.png"></td>
        <td class="virtue">Actualización automática a la última versión</td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
        <td class="space"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/free-star.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_11.png"></td>
        <td class="virtue">24/7 soporte técnico gratuito para demanda </td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
        <td class="space"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/free-star.png"></td>
      </tr>  
    </tbody>
  </table>
</div>
<!-- comparison-table end -->

<!-- bottomcart start -->
<div class="bottomcart">
  <div class="wrapper">
    <div class="showcase">
      <span class="img three-box"></span>
    </div>
    <ul>
      <li class="active twelve" data-name="pc12">
        <span>12 meses, 3 PCs</span>
        <strong>Mejor Precio: 17,99€</strong>
      </li>
      <li class="sixmouth" data-name="pc6">
         <span>6 meses, 3 PCs</span>
         <strong>Precio Reducido: 12,99€</strong>
      </li>
      <li data-name="pc3">
         <span> 3 meses, 3 PCs</span>
        <strong>Precio de Prueba: 9,99€</strong>
      </li>
    </ul>
    <dl class="price-content">
      <dt>
        Sólo <strong><b>1</b>,49€</strong> por mes
      </dt>
      <dd>
        <a class="buybtn yellow"
           href="https://www.iobit.com/buy.php?product=es-db83pc1799&ref=es_db812months1799oldspecial2006<?php echo $refStr;?>&refs=es_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchaseoldspecial12m-es')">
          <span>COMPRAR AHORA</span>
        </a>
      </dd>
    </dl>
  </div>
</div>
<!-- bottomcart end -->

<!--  footer start-->
<div class="footer">
  <!-- service -->
  <div class="service wrapper clearfix">
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/moneyback.png" alt=""></dt>
      <dd><h3>Garantía de reembolso</h3></dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/godaddy-secure.png" alt=""></dt>
      <dd><h3>Pago 100% seguro</h3></dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/service.png" alt=""></dt>
      <dd><h3>Servicio al cliente</h3></dd>
    </dl>
  </div>
  <!-- annotation -->
  <dl class="annotation wrapper">
    <dt>Nota:</dt>
    <dd>*.Estos programas promocionales están sujetos a cambios sin previo aviso, dependiendo de nuestra discreción exclusiva en cualquier momento.</dd>
    <dd>*.Datos pueden variar basados en diferentes sistemas u ordenadores.</dd>
  </dl>
  <!-- copyright -->
  <p>Copyright © 2005 - <?php echo date('Y')?> IObit. Todos los derechos reservados</p>
</div>
<!-- footer end -->



<script src="<?php echo getStaticUrl('js/script.js')?>"></script>
</body>
</html>