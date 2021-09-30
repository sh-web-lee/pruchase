<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';
$refStr = 'dk_imf-ac-register';
if($_GET['to']=='db_ac_imf'){
    $refStr.='-'.$_GET['to'];
}
if(in_array($_GET['st'],array('asc_acimf'))){
    $refStr.='-'.$_GET['st'];
}

if (empty($_GET['ref'])) $_GET['ref'] = 'dkaff_imf7_2020acregister';
?>
<!DOCTYPE html>
<html lang="dk">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<meta name="description" content="Eksklusivt tilbud kun for værdsatte IObit-brugere og inviterede medlemmer. Nyd ekstra beskyttelse for din pc-sikkerhed!"/>
<title>73% rabat på IObit Malware Fighter PRO</title>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public']; ?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
<div id="head">
    <div class="wrapper">
        <a href="https://www.iobit.com/dk/index.php" class="homelink">IObit</a>
        <dl>
            <dt></dt>
            <dd><img src="<?php echo getStaticUrl('images/star.png')?>" alt="" /></dd>
            <dd>IObit Malware Fighter tilbyder en masse ekstra som supplement til scanningskapasiteten.  </dd>
        </dl>
    </div>
</div>
<div id="main">
    <div class="wrapper">
        <div class="shadow"></div>
        <div class="intro">
            <h1>IObit Malware Fighter PRO</h1>
            <h2>Ekstra beskyttelse for din pc-sikkerhed</h2>
            <div class="boxshot"><img src="<?php echo getStaticUrl('images/boxshot.png')?>" alt=""/></div>
            <div class="discount">
                <h3><span>Eksklusivt tilbud </span>Kun til værdsatte IObit-brugere!</h3>
                <div class="disprice">85% <small>RABAT</small></div>
                <div class="wprice">KUN<strong> kr. 139</strong>  <del>kr. 929</del><span>1 år, 1 pc</span></div>
                <div class="btnarea">
                    <a href="https://www.iobit.com/buy.php?product=dkaff-imf7-ac&ref=<?php echo $_GET['ref'];?>&aff=<?php echo $_GET['aff'];?>" onclick="ga('send', 'event', 'imfbuy', 'buy', 'dkaffimf72020acregister')" class="checkbtn">KØB NU >></a>
                    <span>100% tilbagebetalingsgaranti</span>
                </div>
            </div>
        </div>
        <div class="promise">
            
            <div class="leftbox">
              <h2><span>Højdepunkter</span></h2> 
              <ul>
                  <li>
                    <span><img src="<?php echo getStaticUrl('images/icon-av-engine.png')?>" alt="" /></span>
                    Fjerner malware grundigt med Bitdefenders anti-virusfunktion
                  </li>
                  <li>
                    <span><img src="<?php echo getStaticUrl('images/icon-threate-remove.png')?>" alt="" /></span>
                    Opdager og fjerner over 203,000,000 skjulte trusler
                  </li>
                  <li>
                    <span><img src="<?php echo getStaticUrl('images/icon-browser-protect.png')?>" alt="" /></span>
                    Fjerner automatisk dine spor på internettet med anti-browsersporing
                  </li>
                  <li>
                    <span><img src="<?php echo getStaticUrl('images/icon-file-money-protect.png')?>" alt="" /></span>
                    Blokerer Petya / GoldenEye og andet ransomware, før de bryder ind i din pc
                  </li>
                  <li>
                    <span><img src="<?php echo getStaticUrl('images/icon-camera-protect.png')?>" alt="" /></span>
                   Beskytter dit kamera mod uautoriseret adgang
                  </li>
              </ul>
             </div>
            <div class="review"><span></span>"Du har sikkert allerede antivirusbeskyttelse og lignende sikkerhedsforanstaltninger, men vi anbefaler kraftigt at scanne din pc regelmæssigt for infektioner med et antimalware-program. Med automatiske opdateringer, en række systemvagter og en cloud-sikkerhedsløsning, tilbyder IObit Malware Fighter meget ud over sine scanningsfunktioner."   - download.com</div></div>            
        <div class="clear"></div>
        <div class="checkout">
            <div class="moneyback">
                Du er fuldt beskyttet af vores 100% pengene-tilbage-garanti og du vil opleve en betydelig forbedring af din pc's ydeevne indenfor 60 dage, ellers får du alle pengene tilbage. Ingen yderligere spørgsmål.  <a href="https://www.iobit.com/buy.php?product=dkaff-imf7-ac&ref=<?php echo $_GET['ref'];?>&aff=<?php echo $_GET['aff'];?>" onclick="ga('send', 'event', 'imfbuy', 'buy', 'dkaffimf72020acregister')">Køb nu</a>
            </div>
            <div class="btn">
                <a href="https://www.iobit.com/buy.php?product=dkaff-imf7-ac&ref=<?php echo $_GET['ref'];?>&aff=<?php echo $_GET['aff'];?>" onclick="ga('send', 'event', 'imfbuy', 'buy', 'dkaffimf72020acregister')" class="checkbtn">KØB NU >></a>
                <span>100% tilbagebetalingsgaranti</span>
            </div>
        </div>
        <div class="clear"></div>
        <div class="awards"></div>
    </div>
</div>
<div id="footer">
    <div class="wrapper">
Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved
    </div>
</div>
<?php echo $gJavascript['foot']; ?>
</body>
</html>
