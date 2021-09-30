<?php //    初始化
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
    $pResUrl = './';
    $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

function microtime_float()
{
    list($usec, $sec) = explode(' ', microtime());
    return ((float) $usec + (float) $sec);
}

$viewNum = rand(96, 125);
if (!empty($_GET['action']) && ($_GET['action'] == 'getPacks')) {
    $date = $_GET['d'];
    $cName = 'novmas2019sv' . $date;
    $cookie = $_COOKIE[$cName];
    if ($cookie) {
        $packsNum = $_COOKIE[$cName];
        if ($packsNum > 5) {
            $packsNum--;
            setcookie($cName, $packsNum);
            if (rand(0, 100) % 2 == 0) {
                $packsNum = $packsNum + 1;
            }
        } else {
            $packsNum = 5;
        }
    } else {
        $packsNum = 50;
        setcookie($cName, $packsNum);
    }
    echo json_encode(array('packsNum' => $packsNum, 'viewNum' => $viewNum));
    exit();
}

$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
if(in_array($_GET['pop'],array('x_imf','xi_imf','xb_imf'))){
  $refStr.='-'.$_GET['pop'];
}
$refStr.=empty($_GET['st'])?'':('-'.$_GET['st']);
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);
?>
<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" >
  <title>Spara 80% rabatt på IObit Malware Fighter PRO – IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css') ?>" rel="stylesheet">
    <?php echo $gJavascript['public']; ?>
    <?php echo $gJavascript['head']; ?>
</head>
<body>

<!-- banner start -->
<div class="banner">
  <!-- <span class="snow"></span> -->
  <div class="wrapper">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/sv/index.php" target="_blank">IObit</a>
    <!-- title -->
    <h1>Denna veckas specialerbjudande</h1>
    <div class="left-box">
      <!-- <span class="hand"></span>
      <span class="head"></span> -->
      <h2><strong>80%</strong> RABATT <span>EN GÅNG PER ÅR, MISSA INTE!</span></h2>
      <img src="<?php echo getStaticUrl('images/imf-box.png')?>" alt=""/>
      <img class="raduem-box" src="<?php echo getStaticUrl('images/raduem-box-2.png')?>" alt=""/>
    </div>
    <div class="right-box">
      <h3>Bara <strong class="raduem"></strong> <span class="surplus"><b class="one"><span>0</span></b><b class="two"><span>0</span></b></span>paket kvar</h3>
      <dl>
        <dt><strong>IObit Malware Fighter PRO 8 PRO</strong> <span>319kr</span> <del>699 kr</del></dt>
        <dd><strong>Protected Folder</strong> <span>0kr</span></dd>
        <dd><strong>Smart Defrag 6 PRO</strong> <span>0kr</span></dd>
        <dd class="last"><b>958kr</b> <span>värde</span></dd>
      </dl>
    </div>
    <dl class="price">
      <dt><del>1 657 kr</del> <strong>319kr</strong></dt>
      <dd>
        <a href="https://www.iobit.com/buy.php?product=sv-imf83pcpfsd319&ref=sv_imf83pcpfsd319purchase2005<?php echo $refStr;?>&refs=sv_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf3pcpurchase1911-sv')" class="buybtn">KÖP NU</a>
      </dd>
      <dd>Mer än <b id="bynum">998 612</b> personer har redan köpt den</dd>
    </dl>
    </div>
  </div>
</div>
<!-- banenr end -->

<!-- feature start -->
<div class="feature">
  <div class="wrapper clearfix">
    <h2>För mindre än <b>0.29 kr</b> per dag/PC kan du njuta av det bästa <br>dubbla skyddet för din PC!</h2>
    <img class="computer" src="<?php echo getStaticUrl('images/computer.png')?>" alt="">
    <div class="right-lists">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature-icon01.png')?>" alt=""/></dt>
        <dd>Med bitdefender motor kan du förhindra över 200 miljoner säkerhetshot från att infektera och skada din dator.</dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature-icon02.png')?>" alt=""/></dt>
        <dd>Lägger till ett extra lager skydd ovanpå <b>anti-ransomware</b> motor för att skydda flera filtyper och mappar från angripare.</dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature-icon03.png')?>" alt=""/></dt>
        <dd>SafeBox skyddar dina markerade mappar från icke auktoriserad tillgång & senaste hot.</dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature-icon04.png')?>" alt=""/></dt>
        <dd>Skydda din kamera mot obehörig åtkomst.</dd>
      </dl>
      <a class="more" href="javascript:void(0)">Läs mer om PRO-versionen>></a>
    </div>
  </div>
</div>
<!-- feature end -->

<!-- gift-box start -->
<div class="gift-box">
  <div class="wrapper clearfix">
    <!-- gift-box title -->
    <h2>Exklusiva paquete de regalo exclusivo sólo para la navidad, no te lo p</h2>
    <!-- SD -->
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/sd-box.png')?>" alt=""/></dt>
      <dd>
        <p>
         Högre defragmenteringshastighet Auto-defragmentera valda filer Snabbare uppstart av datorn 
        </p>
        <p><b>0kr</b> <del> 459kr</del></p>
      </dd>
    </dl>
    <!-- PF -->
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/pf-box.png')?>" alt=""/></dt>
      <dd>
        <p>
          Scrubba Bort Alla Spår av Oönskade Program, Windows Appar och Insticksprogram.
        </p>
        <p><b>0kr</b> <del> 499kr</del></p>
      </dd>
    </dl>
    <div class="message">
      <div class="left-message">
        <img class="img-box" src="<?php echo getStaticUrl('images/gift-imf-box.png')?>" alt=""/>
        <div class="title">
          <h3>IObit Malware Fighter 8 PRO</h3>
          <p>3 PCs / 1 År <strong> 319kr</strong> <del>699kr</del></p>
        </div>
        <ul>
          <li><i></i> <span>Smart Defrag 6 PRO </span> <b>0kr</b> <del>459kr</del></li>
          <li><i></i> <span>Protected Folder </span> <b>0kr</b> <del>499kr</del></li>
        </ul>
      </div>
      <dl class="price">
        <dt><del>1 657 kr</del> <strong>319kr</strong></dt>
        <dd>
          <a href="https://www.iobit.com/buy.php?product=sv-imf83pcpfsd319&ref=sv_imf83pcpfsd319purchase2005<?php echo $refStr;?>&refs=sv_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf3pcpurchase1911-sv')" class="buybtn">KÖP NU</a>
        </dd>
        <dd>Skynda, <strong class="raduem"></strong> <b class="packsNum">50</b> paket kvar!</dd>
      </dl>
    </div>


  </div>
</div>

<!-- gift-box end -->
<div class="reviews wrapper clearfix">
  <h2>Internationella utmärkelser och recensioner</h2>
  <p>Gör våra kunder nöjda var de än befinner sig</p>
  <div class="content">
    <div class="media">
      <img src="<?php echo $pResUrl; ?>images/media.png" alt="">
    </div>
    <div class="reviews-box">
      <ul class="message">
        <li>
          "För några år sedan drogs min uppmärksamhet till IObit Malware Fighter. Först var jag skeptisk. Men efter att ha installerat det blev det snabbt min favorit bland anti-malware program. Det är mycket lätt att använda. Genom åren har det upptäckt många hot och avlägsnat dem. I samarbete med andra program från IObit, som till exempel ASC, har jag nu ett ypperligt skydd för min dator. Jag rekommenderar alla dessa program till mina vänner och familj."
        </li>
        <li class="active">
          "IObit Malware Fighter PRO är ett komplett säkerhetspaket. Det rensar bort spionprogram, trojaner och allehanda otrevligheter. Det finns också ett Uppstartsskydd som säkerställer att inga skadliga processer startas med Windows. Webbläsarskyddet garanterar att ingen programvara gör ändringar i din webbläsare och Filgranskaren garanterar att varje okänd fil du öppnar inte kan orsaka någon skada. Inkluderat är också vaktenheter för USB och processor med mera."
        </li>
        <li>
          "Vi brukade använda upp till ett dussin olika program för att hålla våra maskiner i trim och hålla skurkarna borta. Det tog timmar varje vecka för att upprätthålla säkerhet och prestanda. Nu, med IObit Malware Fighter PRO och Advanced System Care PRO, är allt på ett ställe och det tar oss bara några minuter varje vecka för att göra samma jobb, men med mer förtroende. Vi har inte haft ett enda problem sedan vi började använda era produkter."
        </li>
      </ul>
      <ul class="img-box">
        <li class="first">
          <div><img src="<?php echo $pResUrl; ?>images/peter-stoffers.png" alt="Peter Stoffers"></div>
          <p>Peter Stoffers</p>
        </li>
        <li class="active">
          <div><img src="<?php echo $pResUrl; ?>images/betanews.png" alt="betanews"></div>
          <p>betanews</p>
        </li>
        <li>
          <div><img src="<?php echo $pResUrl; ?>images/bob-bassett.png" alt="Bob Bassett"></div>
          <p>Bob Bassett</p>
        </li>
      </ul>
    </div>
  </div>
</div>

<!-- comparison-table start -->
<div class="comparison-table" id="compare">
  <table border="0" cellspacing="0" cellpadding="0" width="100%">
    <thead>
      <tr>
        <th colspan="2">Se vad PRO-versionen kan göra för dig:</th>
        <th class="itemb"><div>IObit Malware Fighter 8<br> FREE</div></th>
        <th class="space"></th>
        <th class="itema"><div>IObit Malware Fighter 8 PRO <span>(1 År / 3 PC )+Gåva</span></div></th>
      </tr>    
    </thead>
    <tbody>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icon_01.png')?>" alt=""/></td>
        <td class="virtue">Grundläggande skydd mot sabotageprogram <sup>Förbättrad</sup></td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-star.png"></td>
        <td class="space"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt=""/></td>
        <td class="virtue">Fullständigt skydd mot sabotageprogram med IObits Anti-malwaremotor <sup>Förbättrad</sup></td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
        <td class="space"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icon_05.png')?>" alt=""/></td>
        <td class="virtue">Avancerat skydd mot hot med Bitdefender Anti-virusmotor <sup>Förbättrad</sup></td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
        <td class="space"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icon_06.png')?>" alt=""/></td>
        <td class="virtue">Skydda din PC och dina pengar från utpressningsprogram <sup class="green">Ny</sup></td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
        <td class="space"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icon_07.png')?>" alt=""/></td>
        <td class="virtue"> Skydda din kamera från obehörig åtkomst <sup class="green">Ny</sup></td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
        <td class="space"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt=""/></td>
        <td class="virtue">Komplett skydd i realtid för ultimat säkerhet <sup>Förbättrad</sup></td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
        <td class="space"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icon_09.png')?>" alt=""/></td>
        <td class="virtue">Hindra virus som sprids genom USB-minnen</td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
        <td class="space"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icon_10.png')?>" alt=""/></td>
        <td class="virtue">Hitta skadliga processer i RAM-minnet</td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
        <td class="space"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icon_11.png')?>" alt=""/></td>
        <td class="virtue">Rensa automatiskt bort surfspår med Anti-spårning för webbläsare  <sup>Förbättrad</sup></td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
        <td class="space"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icon_12.png')?>" alt=""/></td>
        <td class="virtue">Hitta hot genom att analysera skadlig aktivitet</td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
        <td class="space"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icon_13.png')?>" alt=""/></td>
        <td class="virtue">Jobbar smart i bakgrunden utan att störa</td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
        <td class="space"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icon_14.png')?>" alt=""/></td>
        <td class="virtue">Uppdaterar automatiskt till den senaste versionen</td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
        <td class="space"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icon_15.png')?>" alt=""/></td>
        <td class="virtue">Gratis teknisk support dygnet runt</td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
        <td class="space"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
      </tr>
    </tbody>
    <tfoot>
      <tr>
        <th colspan="4"></th>
        <th class="itema">
          <del>1 657 kr </del> <strong>319kr</strong>
          <a href="https://www.iobit.com/buy.php?product=sv-imf83pcpfsd319&ref=sv_imf83pcpfsd319purchase2005<?php echo $refStr;?>&refs=sv_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf3pcpurchase1911-sv')" class="buybtn">KÖP NU</a>
          <p>Skynda, <strong class="raduem"></strong> <b class="packsNum">50</b> paket kvar!</p>
        </th>
      </tr>
    </tfoot>
  </table>
</div>
<!-- comparison-table end -->


<!--  footer start-->
<div class="footer">
  <!-- service -->
  <div class="service wrapper clearfix">
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/servizio.png')?>" alt=""/></dt>
      <dd><h3>Accepterade Betalningssätt</h3></dd>
      <dd class="small">Gratis 24/7 Teknisk Support vid<br> Behov Live Chattjänst</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/money-back.png')?>" alt=""/></dt>
      <dd><h3>Pengarna- tillbaka-garanti</h3></dd>
      <dd class="small">Om du inte är nöjd med produkten inom<br> 60 dagar,ger vi dig pengarna tillbaka.</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/verified.png')?>" alt=""/></dt>
      <dd><h3>Säker betalning</h3></dd>
      <dd class="small">IObit stöder flera säkra betalningsal-<br>ternativ.</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/veloce.png')?>" alt=""/></dt>
      <dd><h3>Få Licens</h3></dd>
      <dd class="small">Du kommer få licensen inom några<br> minuter efter betalning..</dd>
    </dl>
  </div>
  <!-- annotation -->
  <dl class="annotation wrapper">
    <dt>Notera:</dt>
    <dd>*.Uppgifter kan variera beroende på olika system eller datorer.</dd>
    <dd>*.Reklamkampanjer kan emellanåt ändras utan förvarning, efter vårt eget godtycke.</dd>
  </dl>
  <!-- copyright -->
  <p class="copyright">Copyright © 2005 - <?php echo date('Y') ?> IObit. Alla Rättigheter Förbehållna</p>
</div>
<!-- footer end -->
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js') ?>"></script>
<script src="<?php echo getStaticUrl('script/script.js') ?>"></script>
</body>
</html>