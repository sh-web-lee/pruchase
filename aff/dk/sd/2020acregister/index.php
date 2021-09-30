<?php
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../../';
}
include $pRootUrl . 'include/common.inc.php';

if (empty($_GET['ref'])) $_GET['ref'] = 'dkaff_sd6_2020acregister';

if($_GET['to']=='dk_sd-ac'){
    $refStr.='-'.$_GET['to'];
}
if(in_array($_GET['st'],array('asc_acsd','ascu_acsd'))){
    $refStr.='-'.$_GET['st'];
}

?>
<!DOCTYPE html>
<html lang="da">
<head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <meta name="description" content="Eksklusivt tilbud til værdsatte IObit-brugere og inviterede medlemmer. Nyd at få den bedst mulige harddiskydelse."/>
  <title>80% RABAT på Smart Defrag PRO – Iobit</title>
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public']; ?>
  <?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

<div id="head">
  <div class="wrapper">
    <a href="https://www.iobit.com" class="homelink" target="_blank">Iobit</a>
    <dl>
      <dt></dt>
      <dd><img src="<?php echo getStaticUrl('images/star.png')?>" alt="" /></dd>
    </dl>
  </div>
</div>

<div id="main">
	<div class="wrapper">
    <div class="shadow"></div>
    <div class="intro">
      <h1>Smart Defrag 6 PRO</h1>
      <h2>Ultimativ ydeevne til din harddisk!</h2>
      <div class="boxshot"></div>
      <div class="discount">
        <h3><span>Eksklusivt tilbud</span><br /> Kun for værdsatte IObit-brugere!</h3>
        <div class="disprice">85%<span> rabat</span></div>
        <div class="wprice">Kun <em>kr. 89</em> <del>kr. 593</del> <span>1 år, 1 pc</span></div>
        <div class="btnarea">
          <a class="checkbtn"
             href="https://www.iobit.com/buy.php?product=dkaff-sd6-acak&ref=<?php echo $_GET['ref']; ?><?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>"
             onclick="ga('send', 'event', 'sdbuy', 'buy', 'dkaffsd62020acregister');">
            KØB NU
          </a>
          <span>100% tilbagebetalingsgaranti</span>
        </div>
      </div>
    </div>

    <div class="promise">
      <div class="leftbox">
        <h2><span>Højdepunkter</span></h2> 
        <ul>
          <li class="icon01">Ny defragmenteringsfunktion til 100% sikker defragmentering af din harddisk</li>
          <li class="icon02">Fuld støtte til defragmentering på Windows 10/8/8.1 Metro Apps</li>
          <li class="icon03">Bedste harddiskydelse og hurtigere adgang til data</li>
          <li class="icon04">Garanteret datasikkerhed og diskstabilitet</li>
        </ul>
      </div>
      <div class="review">
        <span></span>"En af de enkleste måder at sikre, at din pc kører så effektivt som muligt, er at defragmentere harddisken. Med flere niveauer af defragmentering, brugervenligt tidsskema og ekstra muligheder, er Smart Defrag en fantastisk måde at gøre det på.
        <div class="awpic">
          <img src="<?php echo getStaticUrl('images/pcworld_logo.jpg')?>" alt="" /><br />- PCWORLD.com
        </div>
      </div>            
    </div>

    <div class="clear"></div>

    <div class="checkout">
      <div class="moneyback">
        Du er fuldt beskyttet af vores 100% pengene-tilbage-garanti og vil opleve en betydelig forbedring af din pc's ydeevne indenfor 60 dage, ellers får du alle pengene tilbage. Ingen yderligere spørgsmål. <a href="https://www.iobit.com/buy.php?product=dkaff-sd6-acak&ref=<?php echo $_GET['ref']; ?><?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>"
             onclick="ga('send', 'event', 'sdbuy', 'buy', 'dkaffsd62020acregister');">
          Køb nu
        </a>
      </div>
      <div class="btn">
        <a title="CHECKOUT" 
           class="checkbtn" 
           href="https://www.iobit.com/buy.php?product=dkaff-sd6-acak&ref=<?php echo $_GET['ref']; ?><?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>"
           onclick="ga('send', 'event', 'sdbuy', 'buy', 'dkaffsd62020acregister');">
          Køb nu
        </a>
        <span>100% tilbagebetalingsgaranti</span>
      </div>
    </div>
    <div class="clear"></div>
    <div class="awards"></div>
  </div>
</div>

<div id="footer">
	<div class="wrapper">Copyright 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</div>
</div>
<?php echo $gJavascript['foot']; ?>
</body>
</html>
