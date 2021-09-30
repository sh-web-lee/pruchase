<?php
  error_reporting(E_ERROR);
  define("IObit","IObit");
  $pRootUrl = '../../../../';
if($_GET['to']=='db_ac_sd'){
    $refStr='-'.$_GET['to'];
}else{
    $refStr='';
}
if(in_array($_GET['st'],array('asc_acsd','ascu_acsd'))){
    $refStr.='-'.$_GET['st'];
}
  include $pRootUrl.'/include/common.inc.php';

  if (empty($_GET['ref'])) $_GET['ref'] = 'nlaff_sd6_2020acregister';
?>
<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<meta name="description" content="Exclusive Offer for IObit Valued User and Invited Members Only. Enjoy Ultimate Performance for Your Hard Drive!"/>
<title>85% korting op de Smart Defrag 6 PRO</title>
<link type="text/css" rel="stylesheet" href="./style/style.css" />
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
            <dd><img src="img/star.png" alt=""/></dd>
        </dl>
    </div>
</div>
<div id="main">
	<div class="wrapper">
  	<div class="shadow"></div>
    <div class="intro">
    	<h1>Smart Defrag 6 PRO</h1>
      <h2>—— Ultieme harde schijf prestaties!</h2>
      <div class="boxshot"></div>
      <div class="discount">
      	<h3><span>Exclusieve aanbieding</span><br />alleen voor gewaardeerde IObit gebruikers!</h3>
          <div class="disprice">85%<span>korting</span></div>
          <div class="wprice">SLECHTS <em>€9,99</em> <del>€66,60</del><span>1-jarig abonnement / 1 PC</span></div>
          <div class="btnarea">
            <a href="https://www.iobit.com/buy.php?product=nlaff-sd6-acak&ref=<?php echo $_GET['ref']; ?><?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>" onclick="ga('send', 'event', 'sdbuy', 'buy', 'nlaffsd62020acregister')" class="checkbtn">Koop nu >></a>
            <span>100% GELD TERUG GARANTIE</span>
          </div>
      </div>
    </div>
    <div class="promise">        	
      <div class="leftbox">
        <h2><span>Enkele Hoogtepunten</span></h2> 
        <ul>
          <li class="icon01">Nieuwe engine voor Schijfdefragmentatie voor 100% veilige harde schijf defragmentatie</li>
          <li class="icon02">Volledige ondersteuning voor defragmentatie van Windows 10/ 8/ 8.1 Metro-apps</li>
          <li class="icon03">Maximale harde schijf prestaties en hoge data toegangssnelheid</li>
          <li class="icon04">Gegarandeerde beveiliging van gegevens en de harde schijf stabiliteit</li>
        </ul>
      </div>
      <div class="review">
        <span></span>Een van de makkelijkste manieren om er zeker van te zijn dat uw PC zo efficiënt mogelijk werkt is door uw harde schijf te defragmenteren. <br />Smart Defrag is een geweldige manier om dit te doen, door haar verschillende levels van defragmentatie, makkelijk-te-gebruiken taakplanner en extra aanbiedingen."<br />
        <div class="awpic"><img src="img/pcworld_logo.jpg" alt=""/><br />- PCWORLD.com</div>
      </div>            
    </div>
    <div class="clear"></div>
    <div class="checkout">
    	<div class="moneyback">
      	U bent volledig beschermd door ons 100% geld terug garantie programma, en u ZULT een aanzienkelijke verbetering in uw PC prestaties’s ervaren BINNEN 60 dagen. Zo niet, dan verzorgen wij een volledige terugbetaling, zonder vragen te stellen. <a href="https://www.iobit.com/buy.php?product=nlaff-sd6-acak&ref=<?php echo $_GET['ref']; ?><?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>" onclick="ga('send', 'event', 'sdbuy', 'buy', 'nlaffsd62020acregister')">Koop nu</a>
      </div>
      <div class="btn">
      	<a href="https://www.iobit.com/buy.php?product=nlaff-sd6-acak&ref=<?php echo $_GET['ref']; ?><?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>" onclick="ga('send', 'event', 'sdbuy', 'buy', 'nlaffsd62020acregister')" class="checkbtn">Koop nu >></a>
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
