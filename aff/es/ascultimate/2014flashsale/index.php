<?php
//	初始化
	  error_reporting(0);
  define('IObit', 'IObit');
  if (@!$include){
    $pResUrl = './';
    $pRootUrl = '../../../../';
  }
  include $pRootUrl.'include/common.inc.php';
  
  function microtime_float(){
    list($usec, $sec) = explode(' ', microtime());
    return ((float)$usec + (float)$sec);
  }
  $buyNum = ceil(microtime_float()*1000/20000)-68799080;
  
//  禁止ADN缓存
  header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
  header('Cache-Control: no-cache, must-revalidate');
  header('Pragma: no-cache');

//  主要内容
  //if (empty($_GET['ref'])) $_GET['ref'] = 'ascu7';
  //$ref = strtolower($_GET['ref']);
  //$title = $discountListArr['title'][$ref] ? $discountListArr['title'][$ref][$cd] ? $discountListArr['title'][$ref][$cd] : $discountListArr['title'][$ref]['default'] : $discountListArr['title']['default'];
  //$_GET['ref'] = 'es_ascu7purchase';
  $packsNum = ceil(microtime_float()*2000/20000);
  $packsNum = 360-($packsNum%360);
  if ($_GET['action'] == 'getPacks'){
    echo $packsNum;
    exit;
  }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Activa ASC Ultimate para 3 PCs con gran descuento, y consigue regalos gratis</title>
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
<link type="text/css" rel="stylesheet" href="<?php echo $pResUrl; ?>css/style.css"/>
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
<script type="text/javascript">
function decreasingPacks(){
	$.ajax({
		type: "GET",
		url: "index.php",
		data: "action=getPacks&r="+Math.random(),
		success: function(packs){
			$('#packs').html(packs);
			setTimeout('decreasingPacks()', 10000);
		}
	});
}
setTimeout('decreasingPacks()', 10000);
</script>
</head>

<body>
	<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
	<div class="header">
    	<div class="warpper clearfix">
            <a href="http://www.iobit.com" class="logo" target="_blank"></a>
            <div class="title"></div>
            <dl class="time">
                <dt>Oferta de tiempo limitado<sub>①</sub></dt>
                <dd id="counttime"><span>00</span><span>00</span><span>00</span><span>00</span><em>000</em></dd>
            </dl>
        </div>
    </div>
    <div class="middle">
    	<div class="warpper clearfix">
			<div class="lace">
              <div class="introduce">
                <h3>¡Ahorra <span>75%</span> en ASC Ultimate y consigue súper regalo gratis!</h3>
                <p>Activa ASC Ultimate para 3 PCs hoy, consigue paquete de REGALO GRATIS. <span>¡<em id="packs"><?php echo $packsNum; ?></em> paquetes quedados hoy!</span></p>
                <div class="foucs"><img src="<?php echo $pResUrl; ?>img/salepack.jpg"></div>
              </div>
              <div class="control">
                <ul>
                  <li class="name">Protección superior de PC</li>
                  <li class="price">Hoy <span id="money1">22,95€</span></li>
                  <li class="original">Original: <span>89,97€</span></li>
                  <li class="link"><a href="http://www.iobit.com/buy.php?product=es-ascupf-aff&ref=es_ascu7purchase&aff=<?php echo $_GET['aff']; ?>&refs=es_purchase_ascu_aff" onclick="ga('send', 'event', 'ascubuy', 'buy', '2014flashsale-es-aff');" title="Compra Advanced SystemCare Ultimate para conseguir Protected Folder GRATIS">ACTIVA AHORA</a></li>
                  <li class="people"><span><?php echo $buyNum; ?></span> personas activaron</li>
                  <li class="subscription">1 año de suscripción / <span>3 PCs</span></li>
                </ul>
              </div>
            </div>
            
            <h3 class="corssname">Protección superior y rendimiento perfecto de tu PC</h3>
            <div class="whatdo clearfix">
            	<div class="left">
                	<div class="boxshot"></div>
                    <dl>
                        <dt>Advanced SystemCare Ultimate 7:</dt>
                        <dd>Una protección siempre-online, automática y todo-en-uno contra todo tipo de virus, desaceleración,congelación y choque de sistema.</dd>
                        <dd><img src="<?php echo $pResUrl; ?>img/product_awards.png"></dd>
                        <dd class="edition"><a href="#compare">Ver más sobre edición PRO>></a></dd>
                        <dd class="sale"></dd>
                    </dl>
                </div>
                <div class="right">
                	<dl class="clearfix">
                    	<dt><img src="<?php echo $pResUrl; ?>img/add2pcs.jpg"></dt>
                        <dd class="name">2 PCs adicionales apoyados</dd>
                        <dd>Licencia de Advanced SystemCare Ultimate apoya 2 PCs adicionales así que puedes compartirla con tu familia y tus amigos.</dd>
                        <dd class="free"></dd>
                    </dl>
                    <dl class="end clearfix">
                    	<dt><img src="<?php echo $pResUrl; ?>img/boxshot_pf.jpg"></dt>
                        <dd class="name">Protected Folder </dd>
                        <dd>No te preocupes por robo de datos o fugas de privacidad!</dd>
                        <dd class="free"></dd>
                    </dl>
                </div>
            </div>
            <div class="cross clearfix">
            	<div class="left">
                    <dl class="discribe">
                      <dd>Activa Advanced SystemCare Ultimate hoy, consigue gratis 2 PCs adicionales seguros y Protected Folder</dd>
                      <dt>¡Activa ahora y AHORRA 75%!</dt>
                    </dl>
                </div>
                <dl class="link">
                	<dt><span><?php echo $buyNum; ?></span> personas activaron</dt>
					<dd><a id="buyUrl2" href="http://www.iobit.com/buy.php?product=es-ascupf-aff&ref=es_ascu7purchase&aff=<?php echo $_GET['aff']; ?>&refs=es_purchase_ascu_aff" onclick="ga('send', 'event', 'ascubuy', 'buy', '2014flashsale-es-aff');" title="Compra Advanced SystemCare Ultimate para conseguir Protected Folder GRATIS">ACTIVA AHORA</a></dd>
                </dl>
                <dl class="right">
                	<dt>Ahora  <span>22,95€</span></dt>
                    <dd>Valorados en <span>89,97€</span></dd>
                </dl>
            </div>
            <dl class="awards">
            	<dt>Premios de producto</dt>
                <dd><img src="<?php echo $pResUrl; ?>img/awards.jpg"></dd>
            </dl>
            <div class="usersaying" id="compare">
                <h2>Comentarios de clients</h2>
                <div class="boxa" style="margin-top:0;">
                    <h3>"Advanced System Care Ultimate is the new mother load. The big winner! "</h3>
                    <dl class="user">
                      <dt><img src="<?php echo $pResUrl; ?>img/rod_garnett.jpg" alt=""/></dt>
                      <dd>Rod Garnett</dd>
                      <dd>2012</dd>
                    </dl>
                    <dl class="quit">
                      <dt><img alt="quote" src="<?php echo $pResUrl; ?>img/quote.png"></dt>
                      <dd>I have had a past problem of always messing with my computer. Then I got my first copy of Advanced Systemcare. There is no need to mess around any longer. Now that I have antivirus, included in the product, my need for secondary software is none existent. Advanced System Care Ultimate is the new mother load. The big winner! My computer is always up to date and runs like deer. Unlike other products; there has not been a constant stream of conflicts."</dd>
                    </dl>
                  </div>
                  <div class="boxb" style="margin-top:0;">
                    <h3>"I recommend advanced systemcare ultimate as their antivirus/system optimizer."</h3>
                    <dl class="user">
                      <dt><img src="<?php echo $pResUrl; ?>img/dareen_lim.jpg" alt=""/></dt>
                      <dd>Dareen Lim</dd>
                      <dd>2013</dd>
                    </dl>
                    <dl class="quit">
                      <dt><img alt="quote" src="<?php echo $pResUrl; ?>img/quote.png"></dt>
                      <dd>On the past version of advanced systemcare ultimate, i had no problem on almost everything, system, malwares, etc. and now, it's updated, more features on it will make my laptop run 5x faster than before. i also like the new skin of it. so next time i fix other's computer, i recommend advanced systemcare ultimate as their antivirus/system optimizer."</dd>
                    </dl>
                </div>
                <div class="clear"></div>
            </div>
            <div class="comparison_table">
              <h4>¿Por qué elegir Advanced SystemCare Ultimate 7?</h4>
              <div id="hidetab">
                <dl class="comtable">
                  <dt><span>Mejor protección y no retraso de rendimiento</span>. Ver comparasión abajo</dt>
                  <dd><img src="<?php echo $pResUrl; ?>img/comparetable.jpg"  /></dd>
                </dl>
                <dl class="comlist">
                  <dt>Inigualable tasa de detección y protección máxima</dt>
                  <dd>Un clic para limpiar los virus ocultos y difíciles, troyanos, gusanos, spyware, adware y diversos malwares. Advanced SystemCare Ultimate 7 también proporciona una protección proactiva, siempre-online, automática y contra todo tipo de amenazas de seguridad de Internet, con actualización rápida de base de datos de virus.</dd>
                  <dt>Disfruta de seguridad confiada sin ralentización del sistema</dt>
                  <dd>Tu sistema funciona a su velocidad máxima y sin ningún retraso de rendimiento, gracias a nuestra tecnologíade líder industrial en seguridad de Internet.</dd>
                  <dt>Navegación segura, buscar, descargar y compartir con confianza</dt>
                  <dd>Comportamiento de procesos de monitores tecnológicos de control proactivo de virus en tiempo real, escanea los archivos compartidos con correo electrónico y bloquea las amenazas posibles. Tasa de detección sin precedentes asegura un entorno más seguro cuando usas tu PC.</dd>
                  <dt>Obtener un rendimiento optimizado altamente y disfrutar de la experiencia nueva de PC</dt>
                  <dd>Ya han probado la gran capacidad de optimización de PC suelta a la potencia de su PC. Con la optimización en tiempo real y característica de ActiveBoost, los recursos del sistema se gestionan de forma inteligente para asegurar tu PC superrápida.</dd>
                </dl>
              </div>
           </div>
           <div class="floatlayer" id="floatlayer">
				      <dl class="left">
              	<dt>¡Ahorra <span>75%</span>, disfruta de la protección y el rendimiento superior!</dt>
                <dd><span><?php echo $buyNum; ?></span> personas activaron</dd>
              </dl>
              <div class="price">22,95€</div>
              <dl class="right">
              	<dt><a href="http://www.iobit.com/buy.php?product=es-ascupf-aff&ref=es_ascu7purchase&aff=<?php echo $_GET['aff']; ?>&refs=es_purchase_ascu_aff" onclick="ga('send', 'event', 'ascubuy', 'buy', '2014flashsale-es-aff');" title="Compra Advanced SystemCare Ultimate para conseguir Protected Folder GRATIS">ACTIVA AHORA</a></dt>
                  <dd id="counttime1"><span>00</span>d: <span>00</span>h: <span>00</span>m: <span>00</span>s <em>000</em></dd>
              </dl>
           </div>
           <dl class="annotation">
              <dt>Nota:</dt>
              <dd>①.Estos programas promocionales están sujetos a cambios sin previo aviso, dependiendo de nuestra discreción exclusiva en cualquier momento.</dd>
            </dl>
        </div>
        <div class="copy">Copyright &copy; 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</div>
    </div>
    <script type="text/javascript">
    $(function () {
        $(window).on('scroll',function(){
        if ($(window).scrollTop() > 390) {
          $('#floatlayer').addClass('on');
        }else{
          $('#floatlayer').removeClass('on');
        }
      });  
    });
    </script>
    <script type="text/javascript">
		function cycleCountdown(){
			var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 17:17:00');
			var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
			d = MApp(2.2).packages.zeroize(datetime[0], 2);
			h = MApp(2.2).packages.zeroize(datetime[1], 2);
			i = MApp(2.2).packages.zeroize(datetime[2], 2);
			s = MApp(2.2).packages.zeroize(datetime[3], 2);
			mi = MApp(2.2).packages.zeroize(datetime[4], 3);
			document.getElementById('counttime').innerHTML = '<span>'+h+'</span><span>'+i+'</span><span>'+s+'</span><em>'+mi+'</em>';
			document.getElementById('counttime1').innerHTML = '<span>'+h+'</span>h: <span>'+i+'</span>m: <span>'+s+'</span>s <em>'+mi+'</em><sub>①</sub>';
			setTimeout('cycleCountdown()', 1);
		}
		cycleCountdown();
	</script>
<?php echo $gJavascript['foot']; ?>
</body>
</html>