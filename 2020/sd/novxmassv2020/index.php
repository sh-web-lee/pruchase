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
    $cName = 'noxmassd2019' . $date;
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
if(!empty($_GET['ver'])){
    $ver = explode('.',$_GET['ver']);
    $refStr .= '-'.$ver[3];
}
$refStr=empty($_GET['st'])?'':('-'.$_GET['st']);
$refStr=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['user'])?'':('-'.$_GET['user']);
$refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);
$refStr.=empty($_GET['insday'])?'':('-'.$_GET['insday']);
$refStr.=empty($_GET['pop'])?'':('-'.$_GET['pop']);
$refStr.=empty($_GET['r'])?'':('-'.$_GET['r']);
$refStr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-t'.$_GET['type'].'-e'.$_GET['expd'];
?>
<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" >
  <title>Spara 81% rabatt på Smart Defrag PRO -IObit</title>
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
    <h1>Nytt År Specialerbjudande</h1>
    <div class="left-box">
      <!-- <span class="hand"></span>
      <span class="head"></span> -->
      <h2><strong>81%</strong> RABATT <span>EN GÅNG PER ÅR</span></h2>
      <img src="<?php echo getStaticUrl('images/sd-box.png')?>" alt=""/>
      <img class="raduem-box" src="<?php echo getStaticUrl('images/raduem-box.png')?>" alt=""/>
    </div>
    <div class="right-box">
      <h3>Endast <strong class="raduem"></strong> <span class="surplus"><b class="one"><span>0</span></b><b class="two"><span>0</span></b></span> Platser Kvar</h3>
      <dl>
        <dt><strong>Smart Defrag 7 PRO <small>(1 Års Prenumation / 3 PC)</small></strong> <span>309 kr</span> <del>559 kr</del></dt>
        <dd class="first"><strong>IObit Software Updater</strong> <span>0 kr</span></dd>
        <dd class="first"><strong>Protected Folder</strong> <span>0 kr</span></dd>
        <dd class="last"><span>värderad till</span> <b>698 kr</b></dd>
      </dl>
    </div>
    <dl class="price">
      <dt><strong>239 kr</strong> <del>1257 kr</del> </dt>
      <dd>
        <a href="https://www.iobit.com/buy.php?product=sv-sd6pfisu239&ref=sv_sd7pfisu239purchase2106<?php echo $refStr;?>&refs=sv_purchase_sd" onclick="ga('send', 'event', 'sdbuy', 'buy', 'sd7pfisupurchase2106-sv')" class="buybtn">KÖP NU</a>
      </dd>
      <dd>Mer än <b id="bynum">3 397 429</b> personer har redan köpt den</dd>
    </dl>
    </div>
  </div>
</div>
<!-- banenr end -->

    <div class="wrapper sd-content clearfix">
      <h2>Maximera Hårddiskprestanda och Snabba Upp Din PC med SD 7 PRO</h2>
      <div class="sdbox">
     <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/icons001.png" alt=""></dt>
      <dd><strong>Ny Ultrasnabb Motor</strong> <span>Defragmentera filer mer effektivt och djupt på mindre tid</span></dd>
     </dl>
     <dl class="right">
      <dt><img src="<?php echo $pResUrl; ?>images/icons002.png" alt=""></dt>
      <dd><strong>Upp till 200% Snabbare *</strong> <span>Accelererar hastighet för filåtkomst och för uppstart av spel med stor fildefragmenterare</span></dd>
     </dl>
     <div class="clear"></div>
     <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/icons003.png" alt=""></dt>
      <dd><strong>Automatisk Smart Defragmentering</strong> <span>Intelligent och automatisk defragmentering av utvalda filer och diskar utan avbrott</span></dd>
     </dl>
     <dl class="right">
      <dt><img src="<?php echo $pResUrl; ?>images/icons004.png" alt=""></dt>
      <dd><strong>Snabbare Uppstart</strong> <span>Njut av en snabbare uppstart av din PC och snabbare systemdrift med Boot Time Defrag</span></dd>
     </dl>
     <div class="clear"></div>
     <img src="<?php echo getStaticUrl('images/sd-content.png')?>" alt="" class="img-sd-content">
     <p><a class="more" href="javascript:void(0);">Läs mer om PRO-versionen>></a></p>   
      </div>
    </div>

<!-- gift-box start -->
    <div class="between-buy">
      <div class="wrapper clearfix">
        <div class="left">
          <dl class="sd">
            <dt><img src="<?php echo getStaticUrl('images/big-sd.png')?>" alt=""></dt>
            <dd><strong>239 kr </strong> <del>1257kr</del></dd>
          </dl>
          <dl class="free">
            <dt><img src="<?php echo getStaticUrl('images/isu-box.png')?>" alt=""></dt>
            <dd>IObit Software Updater</dd>
            <dd><span class="see-more">Läs Mer</span></dd>
          </dl>
          <dl class="free amc">
            <dt><img src="<?php echo $pResUrl; ?>images/pf-box.png" alt=""></dt>
            <dd>Protected Folder</dd>
            <dd><span class="see-more">Läs Mer</span></dd>
          </dl>
        </div>
        <div class="pop-content hidden">
          <span class="close"></span>
          <dl>
            <dt>IObit Software Updater</dt>
            <dd class="check">Tillgång till Hundratals Programuppdateringar</dd>
            <dd class="check">Utrusta PC med Fler Användbara Programvara</dd>
            <dd class="check">Aktuell Uppdatering Push och Säkrare Installation</dd>
            <dt>Protected Folder</dt>
            <dd class="check">Kraftfullare filskyddsverktyg</dd>
            <dd class="check">Förbättrat integritetsskydd</dd>
            <dd class="check">Säkrare filer och datalås</dd>
          </dl>
        </div>
        <dl class="right buy">
          <dt><strong>239 kr</strong> <del>1257kr</del></dt>
          <dd>
            <a href="https://www.iobit.com/buy.php?product=sv-sd6pfisu239&ref=sv_sd7pfisu239purchase2106<?php echo $refStr;?>&refs=sv_purchase_sd" onclick="ga('send', 'event', 'sdbuy', 'buy', 'sd7pfisupurchase2106-sv')" class="buybtn">KÖP NU</a>
          </dd>
          <dd><img src="<?php echo $pResUrl; ?>images/count.png" alt=""> Endast <strong class="packs"><?php echo $packsNum; ?></strong> paket kvar idag!</dd>
        </dl>
      </div>
    </div>
<!-- gift-box end -->

    <div class="review">
      <div class="wrapper">
        <div class="media_rev">
          <h3>I media</h3>
          <dl>
            <dt><img src="<?php echo $pResUrl; ?>images/cnet.jpg" alt=""></dt>
            <dd><strong>"IObit Smart Defrag är den bästa defragmenteraren vi testat hittills."</strong></dd>
            <dd>"IObit Smart Defrag optimerar din pc för att dra full nytta av SSD-minnets prestanda medan den defragmenterar dina hårddiskar. SSD-trimmarverktyget justerar automatiskt systemet på ett sätt som normalt kräver erfarenhet för en användare att kunna tillämpa. Uppdateringarna i Smart Defrag inkluderar en ny defragmenteringsmotor, specialiserad Speldefragmentering och många fler språkval."<span>- Cnet</span></dd>
          </dl>
        </div>
        <div class="user_rev" id="user_rev">
          <div class="content">
            <h3>Användares omdömen</h3>
            <dl class="active">
              <dd><h4>"Smart Defrag är en stor tillgång till mitt system, det gör allt jag behöver och vill att det ska göra."</h4></dd>
              <dd>"Jag kan inte vara mer nöjd med Smart Defrag. Det fungerar klockrent varenda gång. Allt jag behöver göra är att köra programmet och allt är rent. Jag är 100% nöjd, inte bara med programmet, men även med det snabba svar jag fick när jag behövde råd om hur man ska hantera de problem som jag har haft. Det uppskattar jag väldigt mycket."</dd>
            </dl>
            <dl>
              <dd><h4>"Med Smart Defrag får man en mer robust och korrekt diagnos än med Windows 10 Optimering."</h4></dd>
              <dd>"Jag använder Smart Defrag på flera datorer och från början med medlemmarna i min datorklubb kunde vi se de ständiga förbättringarna. Det var perfekt för dem, förutom det engelska språket. Så jag investerade i den franska översättningen. Från och med nu rekommenderar franska IT-tidningar Smart Defrag, bland annat med Windows 10 Optimiser. För en mer robust och korrekt diagnos med alternativ för att påskynda systemstart."</dd>
            </dl>
            <dl>
              <dd><h4>"Det är lätt att använda, ett måste-ha-verktyg för din hårddisk eller SSD."</h4></dd>
              <dd>"Jag kör en kombination av RAID 0 SSD och RAID 0-hårddiskar och använder Smart Defrag Pro för att analysera, defragmentera och hålla mina enheter i topptrim. Som med alla IObits programvaror är det lätt att installera, använda och mycket pålitligt. Bara installera och glöm bort det. Smart Defrag drar väldigt lite minne så det kommer inte att sakta ner ditt system. Rekommenderas definitivit!"</dd>
            </dl>
            <dl>
              <dd><h4>"Med min "Smart Defrag Pro" inställd på auto defrag och kör en "defragmentera och optimera" en gång i veckan, får den mitt system att flyta jämnt och bra."</h4></dd>
              <dd>"Jag har använt produkter från IObit en bra många år nu. Eftersom jag kör en äldre maskin med 6 enheter, inklusive två externa, tycker jag att IObits "Smart Defrag Pro" har tjänat mig mycket väl. Med en äldre maskin,, tenderar mitt datorsystem att bli splittrat helt enkelt. Med min "Smart Defrag Pro" inställd på auto defrag och kör en "defragmentera och optimera" en gång i veckan, får den mitt system att flyta jämnt och bra. IObit uppgraderar ständigt och strävar efter att göra produkten ännu bättre med tiden. Jag är mycket nöjd med denna produkt."</dd>
            </dl>
          </div>
          <ul class="users">
            <li class="active"><img src="<?php echo $pResUrl; ?>images/jim-parten.jpg" alt="">Jim Parten</li>
            <li class=""><img src="<?php echo $pResUrl; ?>images/roland-LALIS.jpg" alt="">Roland LALIS</li>
            <li class=""><img src="<?php echo $pResUrl; ?>images/edward-lee-ah-yen.jpg" alt="">Edward Lee Ah </li>
            <li class=""><img src="<?php echo $pResUrl; ?>images/william-howes.jpg" alt="">William Howes</li>
          </ul>
        </div>
      </div>
    </div>

<!-- comparison-table start -->
    <div class="comparison_table wrapper" id="compare">
      <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <thead>
        <tr>
          <th class="text" colspan="2">Se vad PRO edition kan göra för dig:</th>
          <th class="spec"></th>
          <th class="itemb">Smart Defrag <span>FREE</span></th>
          <th class="spec"></th>
          <th class="itema">Smart Defrag <span>PRO</span></th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop-icon-01.png"></td>
          <td class="virtue">Grundläggande Defragmentering och Optimering av Hårddisken</td>
          <td class="spec"></td>
          <td class="itemb"><img src="<?php echo $pResUrl; ?>images/bluemark.png"></td>
          <td class="spec"></td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop-icon-02.png"></td>
          <td class="virtue">Upp till 200% Snabbare Filåtkomst</td>
          <td class="spec"></td>
          <td class="itemb"></td>
          <td class="spec"></td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop-icon-03.png"></td>
          <td class="virtue">Boot Time Defragmentering för Snabbare Uppstart</td>
          <td class="spec"></td>
          <td class="itemb"></td>
          <td class="spec"></td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop-icon-04.png"></td>
          <td class="virtue">Defragmenterar Fragmenterade Filer Automatiskt och Intelligent</td>
          <td class="spec"></td>
          <td class="itemb"></td>
          <td class="spec"></td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop-icon-05.png"></td>
          <td class="virtue">Anpassar Defragmenteringsläge och Diskar/Filer för Defragmentering</td>
          <td class="spec"></td>
          <td class="itemb"></td>
          <td class="spec"></td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop-icon-06.png"></td>
          <td class="virtue">DMA är Tillämpad för Bättre, Snabbare och Mer Stabil Dataöverföring</td>
          <td class="spec"></td>
          <td class="itemb"></td>
          <td class="spec"></td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop-icon-07.png"></td>
          <td class="virtue">Inga Avbrott under Arbete eller Spelande med Tyst Läge</td>
          <td class="spec"></td>
          <td class="itemb"><img src="<?php echo $pResUrl; ?>images/bluemark.png"></td>
          <td class="spec"></td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop-icon-08.png"></td>
          <td class="virtue">Utmärkt Spelupplevelse med Speloptimering</td>
          <td class="spec"></td>
          <td class="itemb"><img src="<?php echo $pResUrl; ?>images/bluemark.png"></td>
          <td class="spec"></td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop-icon-09.png"></td>
          <td class="virtue">Schemalagt Stöd för Defragmentering under Inaktivitet</td>
          <td class="spec"></td>
          <td class="itemb"><img src="<?php echo $pResUrl; ?>images/bluemark.png"></td>
          <td class="spec"></td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop-icon-10.png"></td>
          <td class="virtue">Uppdaterar Automatiskt till den Senaste Versionen</td>
          <td class="spec"></td>
          <td class="itemb"></td>
          <td class="spec"></td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop-icon-11.png"></td>
          <td class="virtue">Gratis Teknisk Support, Dygnet Runt!</td>
          <td class="spec"></td>
          <td class="itemb"></td>
          <td class="spec"></td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
        </tr>
        </tbody>
      </table>
    </div>
<!-- comparison-table end -->

<!-- gift-box start -->
<div class="gift-box">
  <div class="wrapper clearfix">
    <h2>Ge din gamla dator den BÄSTA GÅVAN!</h2>
    <div class="message">
      <div class="left-message">
        <img src="<?php echo getStaticUrl('images/gift-db-box.png')?>" alt="" class="img-box">
        <div class="title">
          <h3>Smart Defrag 7 PRO </h3>
          <p>1 Års / 3 PC <strong>309 kr</strong> <del>559 kr</del></p>
        </div>
        <ul>
          <li><i></i> <span>IObit Software Updater</span> <b>0 kr</b></li>
          <li><i></i> <span>Protected Folder</span> <b>0 kr</b></li>
        </ul>
      </div>
      <dl class="price">
        <dt><strong>239 kr</strong> <del>1257kr</del></dt>
        <dd>
          <a href="https://www.iobit.com/buy.php?product=sv-sd6pfisu239&ref=sv_sd7pfisu239purchase2106<?php echo $refStr;?>&refs=sv_purchase_sd" onclick="ga('send', 'event', 'sdbuy', 'buy', 'sd7pfisupurchase2106-sv')" class="buybtn">KÖP NU</a>
        </dd>
        <dd>Endast <strong class="raduem"></strong> <b class="packsNum">50</b> Platser Kvar</dd>
      </dl>
    </div>


  </div>
</div>


<!--  footer start-->
<div class="footer">
  <!-- service -->
  <div class="service wrapper clearfix">
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/servizio.png" alt=""></dt>
      <dd><h3>Accepterade Betalningssätt</h3></dd>
      <dd class="small">Gratis 24/7 Teknisk Support vid<br> Behov Live Chattjänst</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/money-back.png" alt=""></dt>
      <dd><h3>Pengarna- tillbaka-garanti</h3></dd>
      <dd class="small">Om du inte är nöjd med produkten inom<br> 60 dagar,ger vi dig pengarna tillbaka.</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/verified.png" alt=""></dt>
      <dd><h3>Säker betalning</h3></dd>
      <dd class="small">IObit stöder flera säkra betalningsal-<br>ternativ.</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/veloce.png" alt=""></dt>
      <dd><h3>Få Licens</h3></dd>
      <dd class="small">Du kommer få licensen inom några<br> minuter efter betalning..</dd>
    </dl>
  </div>
  <!-- annotation -->
  <dl class="annotation wrapper">
    <dt>Notera:</dt>
    <dd>*. Uppgifter kan variera beroende på olika system eller datorer.</dd>
    <dd>*. Reklamkampanjer kan emellanåt ändras utan förvarning, efter vårt eget godtycke.</dd>
  </dl>
  <!-- copyright -->
  <p class="copyright">Copyright © 2005 - <?php echo date('Y') ?> IObit. Alla Rättigheter Förbehålls</p>
</div>
<!-- footer end -->
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js') ?>"></script>
<script src="<?php echo getStaticUrl('script/script.js') ?>"></script>
</body>
</html>