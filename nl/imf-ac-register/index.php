<?php
  error_reporting(E_ERROR);
  define("IObit","IObit");
  $pRootUrl = '../../';
    if($_GET['to']=='db_ac_imf'){
        $refStr='-'.$_GET['to'];
    }else{
        $refStr='';
    }
if(in_array($_GET['st'],array('asc_acimf'))){
    $refStr.='-'.$_GET['st'];
}
  include $pRootUrl.'include/common.inc.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<meta name="description" content="Exclusive Offer for IObit Valued User and Invited Members Only. Enjoy Extra Protection for Your PC Security!"/>
<title>85% korting op de IObit Malware Fighter</title>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public']; ?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
<div id="head">
  <div class="wrapper">
    <a href="https://www.iobit.com" class="homelink">IObit</a>
    <dl>
      <dt></dt>
      <dd><img src="images/star.png" alt=""/></dd>
      <dd>IObit Malware Fighter offers a lot in addition to its scanning capabilities.</dd>
    </dl>
  </div>
</div>
<div id="main">
  <div class="wrapper">
    <div class="shadow"></div>
    <div class="intro">
      <h1>IObit Malware Fighter PRO</h1>
      <h2>—— Extra bescherming voor uw PC veiligheid!</h2>
      <div class="boxshot"><img src="<?php echo getStaticUrl('images/boxshot.png')?>" alt=""/></div>
      <div class="discount">
        <h3><span>Exclusieve aanbieding</span><br />alleen voor gewaardeerde IObit leden!</h3>
        <div class="disprice">85%<span>korting</span></div>
        <div class="wprice">SLECHTS <em>€5,99</em> <del>€39,95</del> <span>1-jarig abonnement / 1 PC</span></div>
        <div class="btnarea">
          <a href="https://www.iobit.com/buy.php?product=nl-imf8-ac&ref=nl_imf-ac-register<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=nl_ac_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfac-nl')" class="checkbtn">Koop nu >></a>
          <span>100% GELD TERUG GARANTIE</span>
        </div>
      </div>
    </div>
    <div class="promise">         
      <div class="leftbox">
        <h2><span>Enkele hoogtepunten van de voordelen</span></h2> 
        <ul>
          <li>
            <span><img src="images/icon-av-engine.png" alt="" /></span>
            Verwijder meer dan 209.000.000 bedreigingen met de Bitdefender Anti-virus engine & IObit Anti-malware engine.
          </li>
          <li>
            <span><img src="<?php echo getStaticUrl('images/icon-protect.png')?>" alt="" /></span>
            Krijg volledige veiligheid met de drie engines die elkaar perfect aanvullen en verscheidene beschermingstools.
          </li>
          <li>
            <span><img src="images/icon-browser-protect.png" alt="" /></span>
            Berg persoonlijke bestanden veilig op in de Kluis en bescherm ze met een wachtwoord.
          </li>
          <li>
            <span><img src="images/icon-file-money-protect.png" alt="" /></span>
            Blokkeer ransomware die uw computer probeert te vergrendelen en houd uw belangrijke bestanden veilig.
          </li>
          <li>
            <span><img src="<?php echo getStaticUrl('images/icon-videor.png')?>" alt="" /></span>
            Extra bescherming voor gevoelige gegevens, zoals documenten, foto’s en video’s.
          </li>
        </ul>
      </div>
      <div class="review"><span></span>U hoort al gebruik te maken van anti-virus protectie en dergelijke veiligheidscontroles, maar we bevelen sterk aan om uw PC regelmatig te scannen voor infecties met een anti-malware applicatie. Met automatische updates, een variatie aan veiligheidscontroles, en een Cloud Security optie, biedt IObit Malware Fighter heel veel als aanvulling op haar scan kwaliteiten."<br /><div class="awpic"><img src="images/download_com_logo.jpg" alt=""/><br />
- download.com</div></div>            
        </div>
        <div class="clear"></div>
        <div class="checkout">
          <div class="moneyback">
              U bent volledig beschermd door ons 100% geld terug garantie programma, en u ZULT een aanzienkelijke verbetering in uw PC prestaties’s ervaren BINNEN 60 dagen. Zo niet, dan verzorgen wij een volledige terugbetaling, zonder vragen te stellen. <a href="https://www.iobit.com/buy.php?product=nl-imf8-ac&ref=nl_imf-ac-register<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=nl_ac_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfac-nl')">Koop nu</a>
            </div>
            <div class="btn">
              <a href="https://www.iobit.com/buy.php?product=nl-imf8-ac&ref=nl_imf-ac-register<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=nl_ac_imf" title="CHECKOUT" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfac-nl')" class="checkbtn">Koop nu >></a>
                <span>100% GELD TERUG GARANTIE</span>
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
