<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';
$refStr='';
if(in_array($_GET['pop'],array('x_iu'))){
  $refStr.='-'.$_GET['pop'];
}
if(in_array($_GET['to'],array('softall','soft','iuself','bdplug','plug','uqprom','bdfail',
    'bdprog','iuasc'))){
  $refStr.='-'.$_GET['to'];
}
?>
<!DOCTYPE html>
<html lang="sv">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Exklusivt, 52% RABATT på IObit Uninstaller PRO - IObit</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Lato:400,700'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

  <div class="main">
    <div class="header">
      <div class="wrapper clearfix">
        <a class="logo fl" href="https://www.iobit.com" target="_blank">
          <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit" />
        </a>
        <div class="makeuseof fr">
          <span>
            Detta lättanvända och informativa verktyg avinstallerar, rengör, konfiguerar och optimerar din dator.
          </span>
          <img src="<?php echo getStaticUrl('images/makeuseof.png')?>" alt="" />
        </div>
      </div>
    </div>
    <div class="container">
      <div class="wrapper">
        <h1>IObit Uninstaller 8 PRO</h1>
        <h3 class="subtitle">——Kraftfull för att Ta Bort Envisa Program och Plug-ins</h3>
        <div class="offer clearfix">
          <img class="fl" src="<?php echo getStaticUrl('images/iubox.png')?>" alt="" />
          <div class="price fr">
            <h2>Exklusivt Erbjudande</h2>
            <h4>Endast för Värderade IObit-användare!</h4>
            <img src="<?php echo getStaticUrl('images/discount.png')?>" alt="" />
            <p class="red">Endast <strong>239 kr</strong> <del>499 kr</del></p>
            <p><em>1 Års Prenumation / 3 PC</em></p>
            <a class="buybtn" href="https://www.iobit.com/buy.php?product=sv-iu83pc239&ref=sv_iu83pcpurchase1803<?php echo $refStr;?>&aff=&refs=sv_purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase1803-sv')">
              <img src="<?php echo getStaticUrl('images/car.png')?>" alt="" />
              <span>Köp Nu  >></span>
            </a>
            <p>100% PENGARNA TILLBAKA GARANTI</p>
          </div>
        </div>
        <div class="intro clearfix">
          <div class="left fl">
            <h2>Några Höjdpunkter och Fördelar</h2>
            <ul>
              <li>
                <img src="<?php echo getStaticUrl('images/icons01.png')?>" alt="" />
                <span>Mer Kraftfull för att Ta Bort Oönskade Program</span>
              </li>
              <li>
                <img src="<?php echo getStaticUrl('images/icons02.png')?>" alt="" />
                <span>Snabbare Webbsurf genom att Avlägsna Onödiga Plug-ins</span>
              </li>
              <li>
                <img src="<?php echo getStaticUrl('images/icons03.png')?>" alt="" />
                <span>Snabbare och Säkrare Avinstallation</span>
              </li>
            </ul>
          </div>
          <div class="right fr">
            <p>
              IObit Uninstaller är ett litet program med användarvänligt gränssnitt. Användare kan ladda ner det på ett ögonblick. IObit Uninstaller tillåter användaren att avinstallera i bulk vilket gör den till ett unikt verktyg. Användare erbjuds även att genomföra en djupskanning för att hitta rester. Denna avinstallerare håller vad den lovar: En grundlig avinstallation. Enbart prestandan gör detta verktyg värt att behålla.
            </p>
            <img src="<?php echo getStaticUrl('images/makeuseof-intro.png')?>" alt="" />
          </div>
        </div>
        <div class="intro-bottom clearfix">
          <div class="text fl">
            Du skyddas helt av vår 100% pengarna tillbaka garanti och du KOMMER att se en betydande förbättring av datorns prestanda INOM 60 DAGAR, eller så gör vi en full återbetalning. Inga frågor <a href="https://www.iobit.com/buy.php?product=sv-iu83pc239&ref=sv_iu83pcpurchase1803<?php echo $refStr;?>&aff=&refs=sv_purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase1803-sv')">Köp Nu</a>
          </div>
          <div class="price fr">
            <a class="buybtn" href="https://www.iobit.com/buy.php?product=sv-iu83pc239&ref=sv_iu83pcpurchase1803<?php echo $refStr;?>&aff=&refs=sv_purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase1803-sv')">
              <img src="<?php echo getStaticUrl('images/car.png')?>" alt="" />
              <span>Köp Nu  >></span>
            </a>
            <p>100% PENGARNA TILLBAKA GARANTI</p>
          </div>
        </div>
      </div>
      <div class="footbg">
        <img class="awards" src="<?php echo getStaticUrl('images/awards.png')?>" alt="" />
        <div class="footer">
          <a href="https://www.iobit.com" target="_blank">
            <img src="<?php echo getStaticUrl('images/bottom-logo.png')?>" alt="IObit" />
          </a>
          <span>© 2005 - <?php echo date('Y')?> IObit. Alla Rättigheter Förbehålls</span>
        </div>
      </div>
    </div>
    <div class="bg bg01"></div>
    <div class="bg bg02"></div>
  </div>

</body>
</html>