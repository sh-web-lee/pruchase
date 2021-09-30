<?php
  error_reporting(E_ERROR);
  define("IObit","IObit");
  $pRootUrl = '../../../../';
  include $pRootUrl.'include/common.inc.php';

  if (empty($_GET['ref'])) $_GET['ref'] = 'esaff_sd6_2020acregister';

if($_GET['to']=='db_ac_sd'){
    $refStr.='-'.$_GET['to'];
}
if(in_array($_GET['st'],array('ascu_acsd','asc_acsd'))){
    $refStr.='-'.$_GET['st'];
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<meta name="description" content="Exclusive Offer for IObit Valued User and Invited Members Only. Enjoy Ultimate Performance for Your Hard Drive!"/>
<title>85% de descuento en Smart Defrag PRO</title>
<link type="text/css" rel="stylesheet" href="./style/style.css" />
<?php echo $gJavascript['public']; ?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
<div id="head">
	<div class="wrapper">
    	<a href="https://www.iobit.com" class="homelink">Iobit</a>
    	<dl>
        	<dt></dt>
            <dd><img src="img/star.png" alt=""/></dd>
        </dl>
    </div>
</div>
<div id="main">
	<div class="wrapper">
    	<div class="shadow"></div>
        <div class="intro">
        	<h1>Smart Defrag PRO</h1>
            <h2>——¡Máximo rendimiento de disco duro para mayor velocidad de acceso a datos!</h2>
            <div class="boxshot"></div>
            <div class="discount">
            	<h3><span>Oferta exclusiva</span><br />¡SÓLO para usuario honorable de IObit!</h3>
                <div class="disprice">-85%</div>
                <div class="wprice">Sólo <em>8,99€</em> <del>59,93€</del><span>  un año de suscripción / 1 PC</span></div>
                <div class="btnarea">
                    <a href="https://www.iobit.com/buy.php?product=esaff-sd6-acak&ref=<?php echo $_GET['ref']; ?><?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>" onclick="ga('send', 'event', 'sdbuy', 'buy', 'esaffsd62020acregister');" class="checkbtn">Comprar ahora >></a>
                    <span>100% GARANTÍA DE REEMBOLSO</span>
                </div>
            </div>
        </div>
        <div class="promise">
        	
            <div class="leftbox">
              <h2><span>Las funciones destacadas</span></h2> 
              <ul>
                  <li class="icon01">Nuevo motor de desfragmentación asegura la desfragmentación segura de disco</li>
                  <li class="icon02">Soporte completo de desfragmentación en aplicaciones de Windows10/ 8 / 8.1 Metro</li>
                  <li class="icon03">Máximo rendimiento de disco duro y velocidad más alta de acceso a datos</li>
                  <li class="icon04">Garantiza la seguridad de datos y la estabilidad de disco</li>
              </ul>
             </div>
            <div class="review"><span></span>One of the simplest ways to make sure your PC runs as efficiently as possible is to defragment your hard disk. <br />With several level of defragmentation, simple-to-use scheduler and extra offers, Smart Defrag is a great way to do it."<br /><div class="awpic"><img src="img/pcworld_logo.jpg" alt=""/><br />
- PCWORLD.com</div></div>            
        </div>
        <div class="clear"></div>
        <div class="checkout">
        	<div class="moneyback">
            	Usted está totalmente protegido por nuestra 100% garantía de reembolso y verá una mejora significativa en el rendimiento de su PC DENTRO DE 60 DÍAS, o le enviaremos un reembolso completo. Sin preguntas hechas. <a href="https://www.iobit.com/buy.php?product=esaff-sd6-acak&ref=<?php echo $_GET['ref']; ?><?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>" onclick="ga('send', 'event', 'sdbuy', 'buy', 'esaffsd62020acregister');">Comprar ahora</a>
            </div>
            <div class="btn">
            	<a href="https://www.iobit.com/buy.php?product=esaff-sd6-acak&ref=<?php echo $_GET['ref']; ?><?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>" onclick="ga('send', 'event', 'sdbuy', 'buy', 'esaffsd62020acregister');" class="checkbtn">Comprar ahora >></a>
                <span>100% garantía de reembolso</span>
            </div>
        </div>
        <div class="clear"></div>
        <div class="awards"></div>
    </div>
</div>
<div id="footer">
	<div class="wrapper">
© 2005 - <?php echo date('Y')?> IObit. Todos los derechos reservados  

    </div>
</div>
<?php echo $gJavascript['foot']; ?>
</body>
</html>
