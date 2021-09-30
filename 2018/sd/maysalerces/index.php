<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
  $packsCount=299;
  include $pRootUrl.'include/common.inc.php';
  include $pRootUrl.'callback.php';
$refStr='';
if(in_array($_GET['ref'],array('sdfeatures_luckshow','sdddact_luckshow','sdfeatures_luckhide','sdddact_luckhide',
    'sdddact','sdgoact','sdbtdact','sdacact','sdadact','sddrfact','sddcfact','sdaad','sdaadsd',
    'sdfeatures_noaction','sdddact_noaction','actreport'))){
  $refStr.='-'.$_GET['ref'];
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>70% de descuento en Smart Defrag 6 PRO – IObit</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Montserrat:400,600'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
  <script>
    function getPacksNum(){
      $.ajax({
        type: "GET",
        url: "<?php echo $pRootUrl;?>callback.php",
        data: "action=getPacksNum&packsCount=<?php echo $packsCount;?>r="+Math.random(),
        success: function(packs){
          $('.packsNum').html(packs);
          setTimeout('getPacksNum()', 10000);
        }
      });
    }
    setTimeout('getPacksNum()', 10000);
  </script>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit" />
      </a>
      <div class="title">
        <h1>70% DE DESCUENTO </h1>
        <h2> OFERTA EXCLUSIVA  Oferta de tiempo Limitado</h2>
      </div>
      <div class="offer clearfix">
        <dl class="first">
          <dt><img src="<?php echo getStaticUrl('images/sdbox.png')?>" alt="" /></dt>
          <dd><strong>19,99€ </strong> <del>29,99€</del></dd>
          <dd class="name"><i class="all-icons"></i> <b>1</b> año para <b>3</b> ordenadores</dd>
          <dd class="last">Desfragmentador de disco  seguro, estable e inteligente</dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/pfbox.png')?>" alt="" /></dt>
          <dd><strong>0€ </strong> <del>39,95€</del></dd>
          <dd class="name"><i class="all-icons"></i>1 año para 1 ordenador</dd>
          <dd class="last">Mejor protección para sus datos</dd>
        </dl>
        <div class="fr informa">
          <img src="<?php echo getStaticUrl('images/sdpfbox.png')?>" alt="" />
          <div class="price">
            <p><strong>17,99€</strong> <span><del>69,94€</del> <b>Ahorra 51,95€</b></span></p>
            <a class="buybtn" href="https://www.iobit.com/buy.php?product=es-sd63pcpf1799&ref=es_sd63pcpfrcpurchase1805<?php echo $refStr;?>&refs=es_purchase_sd" onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdrcpurchase1805-es')">
             Comprar ahora
            </a>
            <p>¡Sólo <span class="packsNum"><?php echo $packsNum;?></span> paquetes disponibles hoy!</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- container start -->
  <!-- payments start -->
  <div class="payments ">
    <div class="wrapper">
      <img src="<?php echo getStaticUrl('images/payments.png')?>" alt="" />
    </div>
  </div>
  <!-- payments end -->

  <!-- intro start -->
  <div class="intro wrapper">
    <h2>Maximiza el rendimiento del disco duro & Acelera su PC con SD 6 PRO</h2>
    <div class="cont clearfix">
      <img class="fl" src="<?php echo getStaticUrl('images/computer.png')?>" alt="" />
      <div class="fl">
        <ul>
          <li>Desfragmenta archivos eficietemente y completamente por <br> menos tiempo.</li>
          <li>Acelera la velocidad de acceso a los archivos y la velocidad de <br> lanzamiento de juegos. </li>
          <li>Desfragmenta automáticamente e inteligentemente archivos y discos <br>  seleccionados sin interrupción</li>
          <li>Disfrute de inicio de PC más rápido y velocidad superior del sistema.</li>
        </ul>
        <a class="compareBtn" href="javascript: void(0);">Diferencias entre las versiones de Free y Pro</a>
      </div>
    </div>
  </div>
  <!-- intro end -->

  <!-- awards start -->
  <div class="awards">
    <div class="wrapper">
      <h2>Recomendado y premiado por estos Medios</h2>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt="" />
    </div>
  </div>
  <!-- awards end -->
  <!-- review start -->
  <div class="review wrapper">
    <div class="content">
      <dl>
        <dt>
        <h3>Comentario de usuario</h3></dt>
        <dd>
          <h4>"Smart defrag es un software con buen comportamiento de desfragmentación de disco."</h4>
        </dd>
        <dd>"Smart defrag es un software con buen comportamiento de desfragmentación de disco, funcionado en segundo plano cuando el ordenador es libre por eso apenas lo te das cuenta. Por lo tanto, las unidades se desfragmentan permanentemente para acceso rápido y menos desgaste. Smart defrag es el mejor desfragmentador de disco gratuito que he utilizado y recomendarlo a mis familias y amigos."</dd>
      </dl>
      <dl>
        <dt>
        <h3>Comentario de usuario</h3></dt>
        <dd>
          <h4>"Es utilidad fácil de usar y vale la pena utilizar para su disco duro o SSD."</h4>
        </dd>
        <dd>"Ejecuto una combinación de RAID 0 SSD y RAID 0 HDDs. Uso Smart Defrag Pro para analizar, desfragmentar y mantener mis controladores funcionar al máximo rendimiento. Al igual que con todos los programas de IObit, es fácil de instalar, usar y es muy fiable. Sólo tienes que configurar y olvidarse de él. Smart Defrag tiene una muy pequeña huella de memoria para que no ralentizar el sistema. ¡Sin duda lo recomiendo!"</dd>
      </dl>
      <dl class="active">
        <dt>
        <h3>Reseña de los Medios</h3></dt>
        <dd>
          <h4>"IObit Smart Defrag es una excelente herramienta gratuita para desfragmentar discos duros."</h4>
        </dd>
        <dd>"IObit Smart Defrag es mucho mejor que la propia herramienta de desfragmentación que trae Windows, así que es uno de esos programas imprescindibles en cualquier PC. Iobit Smart Defrag es muy fácil de usar, incluso para aquellos que se enfrentan por primera vez a una herramienta similar." -Softonic</dd>
      </dl>
      <dl>
        <dt>
        <h3>Comentario de usuario</h3></dt>
        <dd>
          <h4>"Desde que uso este fantástico software, mi ordenador y mi coputadora portátil son rápidos y se ha ahorre mucho tiempo."</h4>
        </dd>
        <dd>"Soy un usuario de Smart Defrag durante muchos años. Desde que uso este fantástico software, mi ordenador y mi coputadora portátil son rápidos y se ha ahorre mucho tiempo. Junto con Advance SystemCare Ultimate tienes una herramienta completa para mantener tu sistema rápido y seguro. No necesitas esperar (PC se cierra por sí mismo) utilizando SD todos los días. Matiene tu sistema en las mejores condiciones, aunque no tienes experiencia técnica."</dd>
      </dl>
      <dl>
        <dt>
        <h3>Comentario de usuario</h3></dt>
        <dd>
          <h4>"Smart Defrag v6 es esencial para mi sistema, que hace todo lo que necesito y quiero hacer."</h4>
        </dd>
        <dd>"Estoy más satisfecho con Smart Defrag v6. Cada vez que funciona como un encanto y todo lo que tengo que hacer es ejecutar el programa y todo está limpio y me deja satisfecho al 100%. No sólo con el programa, sino también con la repuesta rápida cuando necesitaba consejo sobre cómo solucionar los problemas que podría haber tenido. Me gusta el programa mucho."</dd>
      </dl>
    </div>
    <ul class="users clearfix">
      <li>
        <div class="pic"><img src="<?php echo getStaticUrl('images/amnon.png')?>" alt="Amnon">
        </div>
        <p>Amnon</p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo getStaticUrl('images/edward-lee-ah-yen.png')?>" alt="Edward Lee Ah Yen"></div>
        <p>Edward Lee Ah Yen</p>
      </li>
      <li class="active">
        <div class="pic"><img src="<?php echo getStaticUrl('images/softonic.png')?>" alt="Softonic">
        </div>
        <p>Softonic</p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo getStaticUrl('images/hans.png')?>" alt="Hans">
        </div>
        <p>Hans</p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo getStaticUrl('images/jim-parten.png')?>" alt="Jim Parten">
        </div>
        <p>Jim Parten</p>
      </li>
    </ul>
  </div>
  <!-- review end -->

  <!-- comparison start -->
  <div class="comparison wrapper" id="compare">
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
      <thead>
        <tr>
          <th class="text" colspan="2">Ver la comparación entre FREE y PRO:</th>
          <td class="space"></td>
          <th class="itemb">Smart Defrag <b>FREE</b></th>
          <td class="space"></td>
          <th class="itema">
            Smart Defrag PRO
            <p>1 Año, 3 PCs + Regalo</p>
            <a class="buybtn" href="https://www.iobit.com/buy.php?product=es-sd63pcpf1799&ref=es_sd63pcpfrcpurchase1805<?php echo $refStr;?>&refs=es_purchase_sd" onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdrcpurchase1805-es')">
              Comprar ahora
            </a>
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_01.png')?>" alt="" /></td>
          <td class="virtue">Desfragmentación y optimización básica de disco duro</td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_02.png')?>" alt="" /></td>
          <td class="virtue">Velocidad hasta 200% más rápida de acceso a archivos</td>
          <td class="space"></td>
          <td class="itemb"><span class="circle"></span></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_03.png')?>" alt="" /></td>
          <td class="virtue">Desfragmentación del Tiempo de Arranque para el inicio de PC más rápido    </td>
          <td class="space"></td>
          <td class="itemb"><span class="circle"></span></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt="" /></td>
          <td class="virtue">Desfragmentar archivos fragmentados automáticamente e inteligentemente</td>
          <td class="space"></td>
          <td class="itemb"><span class="circle"></span></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_05.png')?>" alt="" /></td>
          <td class="virtue">Personalizar modo de desfragmentación y discos / archivos que van a ser desfragmentados</td>
          <td class="space"></td>
          <td class="itemb"><span class="circle"></span></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_06.png')?>" alt="" /></td>
          <td class="virtue">DMA aplicada para transferencia de datos mejor, más rápido y más estable </td>
          <td class="space"></td>
          <td class="itemb"><span class="circle"></span></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_07.png')?>" alt="" /></td>
          <td class="virtue">No hay interrupción en trabajo o juego con el Modo Silencioso</td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt="" /></td>
          <td class="virtue">Experiencia superior de juego con optimización de juego</td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_11.png')?>" alt="" /></td>
          <td class="virtue">Soportar tarea programada para desfragmentación desocupada</td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_09.png')?>" alt="" /></td>
          <td class="virtue">Actualización automática a la última versión</td>
          <td class="space"></td>
          <td class="itemb"><span class="circle"></span></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_10.png')?>" alt="" /></td>
          <td class="virtue">24/7 Soporte Técnico gratis</td>
          <td class="space"></td>
          <td class="itemb"><span class="circle"></span></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
      </tbody>
      <tfoot>
        <tr>
          <th class="text" colspan="2"></th>
          <td class="space"></td>
          <th class="itemb">Smart Defrag <b>FREE</b></th>
          <td class="space"></td>
          <th class="itema">
            <p>1 Año, 3 PCs + Regalo</p>
            <p><strong>17,99€ </strong> <del>69,94€</del></p>
            <a class="buybtn" href="https://www.iobit.com/buy.php?product=es-sd63pcpf1799&ref=es_sd63pcpfrcpurchase1805<?php echo $refStr;?>&refs=es_purchase_sd" onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdrcpurchase1805-es')">
             Comprar ahora
            </a>
          </th>
        </tr>
      </tfoot>
    </table>
  </div>
  <!-- comparison end -->
  <div class="footer">
    <!-- annotation start -->
    <dl class="annotation wrapper">
      <dt>Nota:</dt>
      <dd>*Estos programas promocionales están sujetos a cambios sin previo aviso, dependiendo de nuestra discreción exclusiva en cualquier momento.</dd>
      <dd>*Datos pueden variar basados en diferentes sistemas o ordenadores.</dd>
    </dl>
    <!-- annotation end -->

    <!-- footer start -->
    <p> Copyright © 2005 - <?php echo date('Y')?> IObit. Todos los derechos reservados*.</p>
  </div>
  <!-- footer end -->


  <!-- backtotop start -->
  <div class="backtotop">
    <a href="javascript: void(0);"><img src="<?php echo getStaticUrl('images/backtotop.png')?>" alt="" /></a>
    <p>Hacia arriba</p>
  </div>
  <!-- backtotop end -->
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>