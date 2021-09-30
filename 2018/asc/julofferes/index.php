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
  
  $buyNum = ceil(microtime_float()*1000/20000) - 69041325;
  $buyNum = number_format($buyNum);

if(!empty($_GET['action'])&&($_GET['action']=='getSales')){
  $date=$_GET['d'];
  $cName='esascjulpa'.$date;
  $cookie=$_COOKIE[$cName];
  if($cookie){
    $packsNum=$_COOKIE[$cName];
    if($packsNum>2){
      $packsNum--;
      setcookie($cName,$packsNum);
    }else{
      $packsNum=2;
    }
  }else{
    $packsNum=59;
    setcookie($cName,$packsNum);
  }
  echo $packsNum;
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
        'invalidcode','asc_install','asc_p6','asc_p7','asc_wr')
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
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Hasta 85% de descuento en Advanced SystemCare PRO</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a href="https://www.iobit.com/es/index.php" target="_blank" class="logo">IObit</a>
      <h1>OFERTA EXCLUSIVA</h1>
      <div class="box" data-num="2">
        <span class="img-box"> <img src="<?php echo $pResUrl; ?>images/asc-one-box.png" alt=""></span>
        <p class="price">
          1 PC / 1 año <br> <strong><b>15</b>,99€  </strong> <del>29,99€</del>
        </p>
        <a href="https://www.iobit.com/buy.php?product=es-asc121pc1599&ref=es_asc121pcpurchase1810<?php echo $refStr;?>&refs=es_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc1pcpurchase1810-es')" class="buybtn nobg"><i></i>Comprar ahora </a>
      </div>
      <div class="three-active">
        <h3><i></i> <strong>00</strong> h: <strong>00</strong> min: <strong>00</strong> s: <strong>000</strong> ms*</h3>
        
        <div class="box" data-num="1">
          <span class="img-box"><span class="img"></span></span>
          <p class="price">
            3 PCs / 1 año <br> <strong><b>17</b>,99€  </strong> <del>119,93€</del>
          </p>
          <a href="https://www.iobit.com/buy.php?product=es-asc123pcpfsd1799&ref=es_asc123pcpfsdpurchase1810<?php echo $refStr;?>&refs=es_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc3pcpfsdpurchase1810-es')" class="buybtn"><i></i>Comprar ahora </a>
          <p class="last">Más de <strong class="buyNum">6,396,949</strong> personas han comprado</p>
        </div>
      </div>
      <div class="box" data-num="0">
        <span class="img-box"><span class="img"></span></span>
        <p class="price">
          3 PCs / 1 año <br> <strong><b>17</b>,99€  </strong> <del>49,99€</del>
        </p>
        <a href="https://www.iobit.com/buy.php?product=es-asc123pc1799&ref=es_asc123pcpurchase1810<?php echo $refStr;?>&refs=es_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc3pcpurchase1810-es')" class="buybtn nobg"><i></i>Comprar ahora </a>
      </div>
      
    </div>
  </div>
  <!-- banner end -->
  <!-- feature start -->
  <div class="feature">
    <div class="wrapper clearfix">
      <!-- title -->
      <h2>
        Disfruta de un PC más rápido y seguro con el mejor rendimiento y protección con<br>
        Advanced SystemCare 12 PRO
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
        <?php if($_GET['st']!='asc_wr'):?>
        <li class="padding-left180  middle">
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
        <?php else:?>
        <li class="padding-left180 padding-left180size middle">
          <dl class="clearfix">
            <dt class="fl"><img src="<?php echo $pResUrl; ?>images/upd_software.png" alt=""></dt>
            <dd class="fl">
              <h3>Actualización de software segura <img src="<?php echo $pResUrl; ?>images/attention.png"
                                                        alt="ATTENTION"></h3>

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
        <?php endif;?>
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
  <div class="gift-message clearfix">
    <h2>No te pierdas paquete de regalo exclusivo  </h2>
    <h3>Termina en：<strong>00</strong> h: <strong>00</strong> min: <strong>00</strong> s: <strong>00</strong> ms*</h3>
   
    <dl class="pf">
      <dt> <span></span></dt>
      <dd>
        <h3><strong>0€</strong>  1 año / 1 PC</h3>
        <p>La herramienta de protección de carpeta <br> fácil de usar y con una contraseña. </p>
      </dd>
    </dl>
     <dl class="sd">
      <dt> <span></span></dt>
      <dd>
        <h3><strong>0€</strong>  1 año / 1 PC</h3>
        <p>Desfragmentador de disco confiable e <br> inteligente con 7,000,000+ usuarios. </p>
      </dd>
    </dl>
    <a href="https://www.iobit.com/buy.php?product=es-asc123pcpfsd1799&ref=es_asc123pcpfsdpurchase1810<?php echo $refStr;?>&refs=es_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc3pcpfsdpurchase1810-es')" class="buybtn"><i></i> Obtener mis regalos gratis</a>
  </div>
  <!-- review start -->
  <div class="reviews wrapper">
    <!-- title -->
    <h2>Premios y reseñas en todo el mundo</h2>
    <p>Elegido por más de <span>250 millones </span> de usuarios en todo el mundo</p>
    <!-- map and points -->
    <div class="map">
      <span class="recover recover01 big"></span>
      <span class="recover recover02 middle"></span>
      <span class="recover recover03 smail"></span>
      <span class="recover recover04 big"></span>
      <span class="recover recover05 middle"></span>
      <span class="recover recover06 smail"></span>
      <span class="recover recover07 big"></span>
      <span class="recover recover08 middle"></span>
      <span class="recover recover09 smail"></span>
      <span class="recover recover10 smail"></span>
      <span class="recover recover11 smail"></span>
      <span class="recover recover12 smail"></span>
      <span class="recover recover13 middle"></span>
      <span class="recover recover14 middle"></span>
      <span class="recover recover15 smail"></span>
      <span class="recover recover16 smail"></span>
      <span class="recover recover17 big"></span>
      <span class="recover recover18 smail"></span>
      <span class="recover recover19 smail"></span>
      <span class="recover recover20 big"></span>
      <span class="recover recover21 middle"></span>
      <!-- tradotto-da-tedesco -->
      <dl class="tradotto-da-tedesco">
        <dt><img src="<?php echo $pResUrl; ?>images/tradotto-da-tedesco.png"></dt>
        <dd>Es el mejor programa que limpia y acelera mi PC para correcto y seguro. - <br> Traducido del alemán</dd>
      </dl>
      <!-- html-it -->
      <dl class="html-it">
        <dt><img src="<?php echo $pResUrl; ?>images/html-it.png"></dt>
        <dd>Advanced SystemCare Pro incluye una nueva tecnología de protección para <br> mejorar la seguridad al navegar por Internet, una instalación más sencilla y un <br> nuevo motor para desfragmentar discos duros a una mayor velocidad.</dd>
      </dl>
      <!-- baixaki -->
      <dl class="baixaki">
        <dt><img src="<?php echo $pResUrl; ?>images/baixaki.png"></dt>
        <dd>En nuestras pruebas, notamos que Advanced SystemCare tiene una eficiencia excepcional. </dd>
      </dl>
      <!-- charles-r-widick -->
      <dl class="charles-r-widick">
        <dd>Mi elección todavía es Advanced <br> SystemCare Pro. </dd>
        <dt><img src="<?php echo $pResUrl; ?>images/charles-r-widick.png"></dt>
      </dl>
      <!-- cnet -->
      <dl class="cnet">
        <dd>Advanced SystemCare es diseñado para solucionar <br> cualquier problema que afecte a su computadora.</dd>
        <dt><img src="<?php echo $pResUrl; ?>images/cnet.png"></dt>
      </dl>
    </div>
  </div>
  <!-- review end -->
  
  <!-- comparison start -->
  <!-- comparison start -->
<div class="comparison" id="compare">
  <table border="0" cellspacing="0" cellpadding="0" width="100%">
    <thead>
    <tr>
      <th class="text" colspan="2">Ver la comparación entre FREE y PRO:</th>
      <th class="spac"></th>
      <th class="itemb">
        <p>
         Tu versión <br> Actual   <br> 
          <img src="<?php echo $pResUrl; ?>images/weep.png">
        </p>
        
      </th>
      <th class="spac"></th>
      <th class="itema">
        <p>
          La versión PRO <br> Actualizado <br>
          <img src="<?php echo $pResUrl; ?>images/smile.png">
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
  </table>
</div>
<!-- comparison end -->
  <div class="bottom-buy">
    <div class="wrapper">
      <div class="img-box"></div>
      <ul>
        <li class="one-pc active" data-num="1"><i></i> <span>1 año / 3PCs+IU+PF+SD</span> <strong>-85%</strong></li>
        <li class="three-gift" data-num="2"><i></i> <span>1 año / 3PCs</span> <strong>-64%</strong></li>
        <li class="three-pc" data-num="0"><i></i> <span>1 PC / 1 año </span> <strong>-45%</strong></li>
      </ul>
      <div class="message">
         <p class="price">
          <strong> <b>17</b>,99€</strong>
          <del>€119,93</del>
        </p>
        <a href="https://www.iobit.com/buy.php?product=es-asc123pcpfsd1799&ref=es_asc123pcpfsdpurchase1810<?php echo $refStr;?>&refs=es_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc3pcpfsdpurchase1810-es')" class="buybtn"><i></i> <span>Comprar ahora</span></a>
      </div>
    </div>
  </div>
  <!-- comparison end -->
  <div class="payment wrapper clearfix">
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/payment.png"></dt>
      <dd>
        <strong>Formas de pago</strong> Aceptamos varios formas de pago por <br> tu pedido
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/money-back.png"></dt>
      <dd>
        <strong>Garantía de reembolso</strong> Si no está satisfecho en los primeros 60 <br> días, le devolveremos tu dinero
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/godaddy.png"></dt>
      <dd>
        <strong>Pago seguro</strong> 100% pago seguro para tu pedido
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/servicio.png"></dt>
      <dd>
        <strong>Servicio al cliente</strong> 24/7 Soporte Técnico gratis
    </dl>
  </div>
<div class="footer">
  <dl class="annotation wrapper">
    <dt>Nota:</dt>
    <dd>
      *.Estos programas promocionales están sujetos a cambios sin previo aviso, dependiendo de nuestra discreción exclusiva en cualquier momento.
    </dd>
    <dd>*.Datos pueden variar basados en diferentes sistemas u ordenadores.</dd>
  </dl>
  <p>Copyright © 2005 - <?php echo date('Y')?> IObit. Todos los derechos reservados</p>
</div>
<script type="text/javascript" src="<?php echo $pResUrl; ?>js/script.js"></script>
<script type="text/javascript" src="<?php echo $pResUrl; ?>js/jquery.animateNumber.min.js"></script>
</body>
</html>