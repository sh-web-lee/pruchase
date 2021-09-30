<?php
    error_reporting(0);
    define("IObit","IObit");
    if (@!$include){
      $pResUrl = './'; 
      $pRootUrl = '../../'; 
    }
    include $pRootUrl.'include/common.inc.php';
if(in_array($_GET['st'],array('ascu_acdb','asc_acdb'))){
    $refStr.='-'.$_GET['st'];
}else{
    $refStr='';
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="UTF-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Exclusive Offer for IObit Valued User and Invited Members Only. Update Outdated Drivers Safely and Rapidly!"/>
<title>85% korting op de Driver Booster</title>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<?php echo $gJavascript['public']; ?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
<div id="head">
	<div class="wrapper">
  	<a href="http://www.iobit.com" class="homelink">Iobit</a>
  	<dl>
    	<dt></dt>
      <dd>Driver Booster, from IObit, promises an easier solution to download and update driver with its most advanced technology. <br />-- MakeUseOf</dd>
    </dl>
  </div>
</div>
<div id="main">
	<div class="wrapper">
  	<div class="shadow"></div>
    <div class="intro">
    	<h1>Driver Booster 6 PRO </h1>
      <h2>—— Update verouderde drivers veilig en snel</h2>
      <div class="boxshot"><img src="<?php echo getStaticUrl('img/boxshot.png')?>" alt="" /></div>
      <div class="discount">
      	<h3><span>Exclusieve aanbieding</span><br />alleen voor gewaardeerde IObit leden!</h3>
          <div class="disprice">85%<span>korting</span></div>
          <div class="wprice">SLECHTS <em>€9,99</em> <del>€74,85</del><span>1-jarig abonnement / 1 PC</span></div>
          <div class="btnarea">
            <a href="https://www.iobit.com/buy.php?product=nl-db6-ac&ref=nl_db-ac-register<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=nl_ac_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbac-nl')" class="checkbtn">Koop nu >></a>
            <span>100% GELD TERUG GARANTIE</span>
          </div>
      </div>
    </div>
    <div class="promise">        	
      <div class="leftbox">
        <h2><span>Enkele hoogtepunten van de voordelen</span></h2> 
        <ul>
          <li class="icon01">Detecteer en update meer dan 3.000.000 drivers in 1 klik, om de stabiliteit en prestaties van uw computer te verbeteren.</li>
          <li class="icon02">Installeert verouderde, missende en defecte drivers</li>
          <li class="icon03">Boost prestaties met de laatste Game Ready Drivers en laat games soepel draaien met de nodige gamecomponenten.</li>
          <li class="icon04">Maakt automatisch een back-up & herstelpunt aan</li>
        </ul>
      </div>
      <div class="review"><span></span>Driver Booster, van IObit, belooft een makkelijkere oplossing voor het downloaden en updaten van drivers door middel van haar vooruitstrevende technologie en het optreden als een alles-in-één commandocentrum. Al uw drivers worden weergegeven in de apps’ interface, zodat het downloaden en updaten van drivers een super makkelijk proces is. Het downloaden en installeren van drivers met deze software is een makkie en duurt vaak slechts enkele minuten (of minder)."<br /><div class="awpic"><img src="img/makeuseof_icon.jpg" alt=""/></div></div>            
    </div>
    <div class="clear"></div>
    <div class="checkout">
    	<div class="moneyback">
        U bent volledig beschermd door ons 100% geld terug garantie programma, en u ZULT een aanzienkelijke verbetering in uw PC prestaties’s ervaren BINNEN 60 dagen. Zo niet, dan verzorgen wij een volledige terugbetaling, zonder vragen te stellen. <a href="https://www.iobit.com/buy.php?product=nl-db6-ac&ref=nl_db-ac-register<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=nl_ac_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbac-nl')">Koop nu</a>
      </div>
      <div class="btn">
      	<a href="https://www.iobit.com/buy.php?product=nl-db6-ac&ref=nl_db-ac-register<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=nl_ac_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbac-nl')" title="CHECKOUT" class="checkbtn">Koop nu >></a>
        <span>100% geld terug garantie</span>
      </div>
    </div>
    <div class="clear"></div>
    <div class="awards"></div>
  </div>
</div>
<div id="footer">
	<div class="wrapper">
    © 2005 - <?php echo date('Y')?> IObit. Alle rechten voorbehouden  
  </div>
</div>
<?php echo $gJavascript['foot']; ?>
</body>
</html>
