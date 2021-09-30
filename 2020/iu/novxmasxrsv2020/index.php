<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';
if(preg_match('/^([0-9]*)\.([0-9]*)\./',$_GET['ver'],$matches)){
    $ver=$matches[1].'-'.$matches[2];
    $refStr.='-'.$ver;
}
$refStr.=empty($_GET['st'])?'':('-'.$_GET['st']);
$refStr.=empty($_GET['pop'])?'':('-'.$_GET['pop']);
$refStr.=empty($_GET['r'])?'':('-'.$_GET['r']);
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['user'])?'':('-'.$_GET['user']);
$refStr.=empty($_GET['insday'])?'':('-'.$_GET['insday']);
$refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);

$pickNum = 49;
?>
<!DOCTYPE html>
<html lang="sv">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Spara upp till 81% rabatt på IObit Uninstaller PRO och få extra skydd på köpet - IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Fira+Sans+Extra+Condensed:400,700|Montserrat:500,600,700&display=swap" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css') ?>" rel="stylesheet">
  <?php echo $gJavascript['public']; ?>
  <?php echo $gJavascript['head']; ?>
</head>

<body>
  <!-- banner -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com/sv/index.php" target="_blank">IObit</a>
      <h1><img src="<?php echo getStaticUrl('images/wordbd.png') ?>" alt=""></h1>
      <h2>Spara upp till <b>81% rabatt</b> på IObit Uninstaller PRO och få en gratis paket</h2>
      <div class="content clearfix">
        <div class="panel left small">
          <div class="box">
            <img src="<?php echo getStaticUrl('images/iu-box.png') ?>" alt="">
            <p class="off">
              SPARA
              <span><big>200</big> kr</span>
            </p>
          </div>
          <p class="type">1 År / <b>1</b> PC</p>
          <dl class="price">
            <dt><span><big>199</big></span> kr <i>-50%</i></dt>
            <dd>Ord. pris <del>399 kr</del></dd>
          </dl>
          <a class="buybtn" href="https://www.iobit.com/buy.php?product=sv-iu101pc199&ref=sv_iu101pc199purchase2011xr<?= $refStr; ?>&refs=sv_purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iu1pcpurchase2011xr-sv')">
            <i class="all-icons"></i>
            KÖP PRO
          </a>
        </div>
        <div class="panel middle large">
          <p class="top"><i class="all-icons"></i> Daglig gräns! Endast <b class="pickNum"></b> paket kvar</p>
          <div class="box">
            <img src="<?php echo getStaticUrl('images/iu-gift-box.png') ?>" alt="">
            <p class="off large">
              SPARA
              <span><big>918</big> kr</span>
            </p>
          </div>
          <p class="type">1 År / <b>3</b> PC + <i class="all-icons"></i> Gratis gåvor</p>
          <dl class="price large">
            <dt><span><big>219</big></span> kr <i>-81%</i></dt>
            <dd>Ord. pris <del>1 157 kr</del></dd>
          </dl>
          <a class="buybtn large" href="https://www.iobit.com/buy.php?product=sv-iu103pcpfsd219&ref=sv_iu103pcpfsd219purchase2011xr<?= $refStr; ?>&refs=sv_purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iu3pcpfsdpurchase2011xr-sv')">
            <i class="all-icons"></i>
            KÖP PRO
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- end banner -->

  <!-- feature start -->
  <div class="feature">
    <div class="wrapper clearfix">
      <h2>Avinstallera effektivt ytterligare program & tillägg för <br>en renare dator och säkrare surfning</h2>
      <dl class="list01">
        <dt class="fl"><img src="<?php echo $pResUrl; ?>images/feature-icon01.png" alt=""></dt>
        <dd class="fl">
          <h3>Upptäcka och ta bort Bundleware</h3>
          <p>
            Upptäck och avinstallera bundleware <br> som adware, webbläsartillägg och <br> andra program från tredje part som <br> kan vara en del av <br> installationsprocessen.
          </p>
        </dd>
      </dl>
      <dl class="list02">
        <dt class="fl"><img src="<?php echo $pResUrl; ?>images/feature-icon02.png" alt=""></dt>
        <dd class="fl">
          <h3>Autorensning</h3>
          <p>
            Automatisk identifiering och rensning <br> av rester från avinstallerade program <br> inklusive de som tagits bort av andra <br> avinstallationsprogram.
          </p>
        </dd>
      </dl>
      <dl class="list03">
        <dt class="fl"><img src="<?php echo $pResUrl; ?>images/feature-icon03.png" alt=""></dt>
        <dd class="fl">
          <h3>Ta Bort Skadliga och Reklam<br> Insticksprogram</h3>
          <p>
            Avinstallera annonsbaserade och skadliga<br> Insticksprogram och bli av med<br> webbläsarmeddelanden för att säkerställa<br> säker och ren surfupplevelse
          </p>
        </dd>
      </dl>
      <dl class="list04 winrar">
        <dt class="fl"><img src="<?php echo $pResUrl; ?>images/feature-icon04.png" alt=""></dt>
        <dd class="fl">
          <h3>Säker Programvaruuppdatering <i>VIKTIGT</i></h3>
          <p>
            Med endast ett klick kan du uppdatera viktiga <br>programvaror utan några användarinterventioner, <br>inklusive <b>WinRAR*, vars befintlig säkerhetsfel <br>kan sätta din dator i fara i flera år.</b>
          </p>
          <span>* Uppdatera omedelbart, när den nya officiella versionen är klar. </span>
        </dd>
      </dl>
      <a class="intro" href="javascript:void (0);">Läs mer om PRO-versionen>></a>
    </div>
  </div>
  <!-- feature end -->

  <!-- gifts -->
  <div class="gifts">
    <div class="wrapper">
      <!-- <h2>81% Rabatt på Aktivera IObit Uninstaller PRO, Få 2 PC Optimeringsverktyg GRATIS!</h2> -->
      <div class="content clearfix">
        <dl class="sd clearfix">
          <dt><img src="<?php echo getStaticUrl('images/gifts-sd.png'); ?>" alt=""></dt>
          <dd>
            <h3>Smart Defrag 6 PRO <del>459kr</del></h3>
            <p>
              Defragmentera snabbt och grundligt för <br>
              att optimera hårddiskens och datorns <br>
              prestanda optimering.
            </p>
          </dd>
        </dl>
        <dl class="pf clearfix">
          <dt><img src="<?php echo getStaticUrl('images/gifts-pf.png'); ?>" alt=""></dt>
          <dd>
            <h3>Protected Folder <del>199kr</del></h3>
            <p>
              Effektivt filskyddsverktyg som garanterar <br>
              säkerheten för dina viktiga mappar, data <br>
              och din integritet.
            </p>
          </dd>
        </dl>
      </div>
      <h4>Gratis gåvor är endast tillgängliga för en begränsad tid</h4>
      <!-- buybtn -->
      <a class="buybtn large larger" href="https://www.iobit.com/buy.php?product=sv-iu103pcpfsd219&ref=sv_iu103pcpfsd219purchase2011xr<?= $refStr; ?>&refs=sv_purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iu3pcpfsdpurchase2011xr-sv')">
        <i class="all-icons"></i>
        Hämta mina gratis gåvor
      </a>
    </div>
  </div>
  <!-- end gifts -->

  <!-- probleme start -->
  <div class="probleme">
    <div class="wrapper clearfix">
      <h2>Internationella utmärkelser och recensioner</h2>
      <p>Gör våra kunder nöjda var de än befinner sig</p>
    </div>
  </div>
  <!-- probleme end -->

  <!-- awards -->
  <div class="awards wrapper">
    <img src="<?php echo getStaticUrl('images/awards.png') ?>" alt="">
  </div>
  <!-- end awards -->

  <!-- review start -->
  <div class="review wrapper">
    <div id="dg-container" class="dg-container">
      <div class="nav">
        <span class="dg-prev"></span>
        <span class="dg-next"></span>
      </div>
      <div class="content dg-wrapper">
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/makeuseof.png') ?>" alt="MakeUseOf"></dt>
          <dd>
            <h2>I media</h2>
            <p>
              "IObit Unistaller har ett användarvänligt gränssnitt och användare kan ladda ner det på ett ögonblick. Programmet kan kategoriseras till den bästa avinstalleraren och programmet tillåter användaren att avinstallera flera program samtidigt. Användare erbjuds även att genomföra en djup-skanning för att hitta rester. Prestandan är såpass bra att det är värt att behålla verktyget enbart för den saken."
            </p>
            <cite>MakeUseOf</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/Lovro-zuzic.png') ?>" alt="Lovro Žužić"></dt>
          <dd>
            <h2>Användaromdömen</h2>
            <p>"IObit Uninstaller blir bättre med varje uppdatering. Jag har använt den i mer än 3 år nu. Det går snabbt att ladda ner och har enkel UI. Några av de många funktioner som jag använder regelbundet är Batch Uninstall, Powerful Scan, File Shredder och Recently Installed som ger mig snabb åtkomst till ett program som jag just installerat som jag inte gillar eller inte funkar. Det är också lätt att styra startobjekt så att din dator bootar snabbare."</p>
            <cite>Lovro Žužić</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/ada-gortler.png') ?>" alt="Áda Görtler"></dt>
          <dd>
            <h2>Användaromdömen</h2>
            <p>
              "IObit Uninstaller är ett av de bästa programmen. Lätt att arbeta med, mycket snabb rengöring och djuprengöring. Den snabba rengöringen av plug-ins är också mycket bekväm. Stor sökning efter dubbletter som inte används mycket. Tack för er gästfrihet ni visat mig och min dator."
            </p>
            <cite>Áda Görtler</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/sergey-erlich.png') ?>" alt="Sergey Erlich"></dt>
          <dd>
            <h2>Användaromdömen</h2>
            <p>
              "IObit Uninstaller är förmodligen den bästa mjukvaran för att ta bort onödiga program från datorn. Till skillnad från den grundläggande Windows avinstalleraren tar detta program bort alla rester, som senare kan bromsa datorns prestanda. Jag har använt detta program under flera år och det har alltid hjälpt till att hålla min dator ren och snabb. Jag har rekommenderat detta program till några av mina vänner och skulle rekommendera det igen idag."
            </p>
            <cite>Sergey Erlich</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/joseph-yu.png') ?>" alt="Joseph Yu"></dt>
          <dd>
            <h2>Användaromdömen</h2>
            <p>"Uninstaller PRO är bara ett av fem av familjen IObits "underhållsprogram" jag har investerat i för min dator, ungefär som kockar investerar i sina knivar. Uninstaller är bra på att hitta rester av bit och byte som gömmer sig och tar upp diskutrymme och påverkar registret. Vid ett tidigare tillfälle gjorde jag en avinstallation av ett annat program med hjälp av den inbyggda avinstallationsfunktionen och det fungerade. Men Uninstaller PRO upptäckte att 35 filer hade lämnats kvar. Det enda jag behövde göra var att klicka på godkänn så var de borta. Jag rekommenderar starkt det här programmet och har köpt en licens för tre datorer. Supporten är artig och utmärkt."</p>
            <cite>Joseph Yu</cite>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- review end -->

  <!-- compare start -->
  <div class="compare wrapper" id="compare">
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
      <thead>
        <tr>
          <th class="text" colspan="2">Se vad PRO-utgåvan kan göra för dig:</th>
          <th class="itemb">
            <div class="box">
              IObit Uninstaller 10 <br> FREE
              <span></span>
            </div>
          </th>
          <th class="space"></th>
          <th class="itema">
            <div class="box">
              IObit Uninstaller 10 <br>PRO
              <span></span>
            </div>
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="icon"><img src="<?php echo $pResUrl; ?>images/icon_01.png" alt=""></td>
          <td class="virtue">Avinstallera oönskade program snabbt och enkelt</td>
          <td class="itemb"><i class="all-icons">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icon"><img src="<?php echo $pResUrl; ?>images/icon_10.png" alt=""></td>
          <td class="virtue"> Dators rester skannas automatically <sup>Ny</sup></td>
          <td class="itemb"><i class="all-icons">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icon"><img src="<?php echo $pResUrl; ?>images/icon_11.png" alt=""></td>
          <td class="virtue">
            <span>Återställ automatiskt systemändringar som ett program har gjort när det avinstalleras <sup>Ny</sup></span>
          </td>
          <td class="itemb"><i class="all-icons close">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icon"><img src="<?php echo $pResUrl; ?>images/icon_02.png" alt=""></td>
          <td class="virtue"> Radera medföljande (bundled) program och plug-ins när huvudprogram avinstalleras</td>
          <td class="itemb"><i class="all-icons close">X</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icon"><img src="<?php echo $pResUrl; ?>images/icon_03.png" alt=""></td>
          <td class="virtue">Stöd för att ta bort envisa program</td>
          <td class="itemb"><i class="all-icons close">X</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icon"><img src="<?php echo $pResUrl; ?>images/icon_04.png" alt=""></td>
          <td class="virtue">Stöd för borttagning av skadliga plug-ins</td>
          <td class="itemb"><i class="all-icons close">X</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icon"><img src="<?php echo $pResUrl; ?>images/icon_05.png" alt=""></td>
          <td class="virtue"> Stöd för att ta bort reklam plug-ins</td>
          <td class="itemb"><i class="all-icons close">X</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icon"><img src="<?php echo $pResUrl; ?>images/icon_06.png" alt=""></td>
          <td class="virtue"> Sök automatiskt efter och ta bort rester av avinstallerade program</td>
          <td class="itemb"><i class="all-icons close">X</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icon"><img src="<?php echo $pResUrl; ?>images/icon_07.png" alt=""></td>
          <td class="virtue">Uppdatera alla dina viktiga program med ett klick</td>
          <td class="itemb"><i class="all-icons close">X</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icon"><img src="<?php echo $pResUrl; ?>images/icon_08.png" alt=""></td>
          <td class="virtue">Uppdatera till den senaste versionen automatiskt</td>
          <td class="itemb"><i class="all-icons close">X</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icon"><img src="<?php echo $pResUrl; ?>images/icon_09.png" alt=""></td>
          <td class="virtue"> Gratis teknisk support, dygnet runt</td>
          <td class="itemb"><i class="all-icons close">X</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- compare end -->

  <!-- footbuy start -->
  <div class="footbuy">
    <div class="wrapper clearfix">
      <div class="imgbox fl">
        <div class="imglist gift on">
          <img src="<?php echo getStaticUrl('images/iu-gift-box.png') ?>" alt="" />
          <p class="off foot special">
            <span><big>81%</big></span>
            Rabatt
          </p>
        </div>
        <div class="imglist three">
          <img src="<?php echo getStaticUrl('images/iu-box.png') ?>" alt="" />
          <p class="off foot">
            <span><big>50%</big></span>
            Rabatt
          </p>
        </div>
      </div>
      <ul class="fl">
        <li class="gift on clearfix" data-num="1">
          <span>1 År / 3 PC + Gratis gåvor</span>
          <strong>SPARA 918 kr</strong>
        </li>
        <li class="three clearfix" data-num="0">
          <span>1 År / 1 PC</span>
          <strong>SPARA 200 kr</strong>
        </li>
      </ul>
      <div class="fr">
        <!-- price -->
        <dl class="price large">
          <dt><span><big>219</big></span> kr </dt>
          <dd>Ord. pris <del>1 157 kr</del></dd>
        </dl>
        <!-- buybtn -->
        <a class="buybtn large" href="https://www.iobit.com/buy.php?product=sv-iu103pcpfsd219&ref=sv_iu103pcpfsd219purchase2011xr<?= $refStr; ?>&refs=sv_purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iu3pcpfsdpurchase2011xr-sv')">
          <i class="all-icons"></i>
          KÖP PRO
        </a>
      </div>
    </div>
  </div>
  <!-- footbuy end -->

  <!-- service -->
  <div class="service wrapper clearfix">
    <dl class="one">
      <dt><img src="<?php echo getStaticUrl('images/payment.png') ?>" alt=""></dt>
      <dd>
        <h3>Betalningsmetoder</h3>
        <p>Vi accepterar <br> flera betalningsmetoder</p>
      </dd>
    </dl>
    <dl class="two">
      <dt><img src="<?php echo getStaticUrl('images/moneyback.png') ?>" alt=""></dt>
      <dd>
        <h3>Pengarna-tillbaka-garanti</h3>
        <p>Om du inte är nöjd med produkten <br> inom 60 dagar, ger vi dig pengarna tillbaka</p>
      </dd>
    </dl>
    <dl class="three">
      <dt><img src="<?php echo getStaticUrl('images/verified.png') ?>" alt=""></dt>
      <dd>
        <h3>Säker betalning</h3>
        <p>IObit stöder <br> flera säkra betalningsalternativ</p>
      </dd>
    </dl>
    <dl class="four">
      <dt><img src="<?php echo getStaticUrl('images/voice.png') ?>" alt=""></dt>
      <dd>
        <h3>Tillförlitliga Tjänster</h3>
        <p>Gratis 24/7 <br> Teknisk Support vid Behov</p>
      </dd>
    </dl>
  </div>
  <!-- end service -->

  <!-- footer -->
  <div class="footer">
    <div class="wrapper">
      <dl>
        <dt>Notera:</dt>
        <dd>*.Uppgifter kan variera beroende på olika system eller datorer.</dd>
        <dd>*.Reklamkampanjer kan emellanåt ändras utan förvarning, efter vårt eget godtycke.</dd>
      </dl>
      <p class="copyright">Copyright ©2005 - <?php echo date('Y') ?> IObit. Alla Rättigheter Förbehållna</p>
    </div>
  </div>
  <!-- end footer -->

  <script src="<?php echo $pRootUrl; ?>tpl/js/modernizr.min.js"></script>
  <script src="<?php echo $pRootUrl; ?>tpl/js/review-3d-carousel.min.js"></script>
  <script src="<?php echo getStaticUrl('script/script.js') ?>"></script>
</body>

</html>