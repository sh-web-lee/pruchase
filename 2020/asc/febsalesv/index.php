<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';
$refStr=empty($_GET['st'])?'':('-'.$_GET['st']);
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);
$refStr.=empty($_GET['ver'])?'':('-'.$_GET['ver']);
if(in_array($_GET['pop'],array('x_asc','xi_asc','xb_asc'))){
  $refStr.='-'.$_GET['pop'];
}
if(in_array($_GET['type'],array('pro','giveawayexp'))){
  $refStr.='-'.$_GET['type'];
}
$refStr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-l'.$_GET['litype'].'-e'.$_GET['expd'];
?>

<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Spara upp till 75% rabatt på Advanced SystemCare PRO - IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Fira+Sans+Extra+Condensed:400,700|Montserrat:500,600,700&display=swap" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
<!-- banner -->
<div class="banner">
  <div class="wrapper">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/sv/index.php" target="_blank">IObit</a>
    <!-- title -->
    <h1>EXKLUSIV REA</h1>
    <h2>Spara upp till <b>75% rabatt</b> på Advanced SystemCare pro och få en gratis paket</h2>
    <!-- content -->
    <div class="content">

      <!-- 1pc -->
      <div class="panel left small">
        <!-- box+off -->
        <div class="box">
          <img src="<?php echo getStaticUrl('images/banner-asc.png')?>" alt="">
          <p class="off">
            SPARA
            <span><big>150</big> kr</span>
          </p>
        </div>
        <!-- type -->
        <p class="type">1 År / 1 PC</p>
        <!-- price -->
        <dl class="price">
          <dt><span><big>249</big></span> kr <i>-38%</i></dt>
          <dd>Ord. pris <del>399 kr</del></dd>
        </dl>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=sv-asc141pc249&ref=sv_asc141pcpurchase2002<?php echo $refStr;?>&refs=sv_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc1pcpurchase2002-sv')">
          <i class="all-icons"></i>
          KÖP PRO
        </a>
      </div>

      <!-- 3pc bundle -->
      <div class="panel middle large">
        <!-- top -->
        <p class="top"><i class="all-icons"></i> Daglig gräns! Endast <b class="pickNum">50</b> paket kvar</p>
        <!-- box+off -->
        <div class="box">
          <img src="<?php echo getStaticUrl('images/banner-bundle.png')?>" alt="">
          <p class="off large">
            SPARA
            <span><big>828</big> kr</span>
          </p>
        </div>
        <!-- type -->
        <p class="type">1 År / <b>3</b> PC + <i class="all-icons"></i> Gratis gåvor</p>
        <!-- price -->
        <dl class="price large">
          <dt><span><big>269</big></span> kr <i>-75%</i></dt>
          <dd>Ord. pris <del>1 097 kr</del></dd>
        </dl>
        <!-- buybtn -->
        <a class="buybtn large"
           href="https://www.iobit.com/buy.php?product=sv-asc143pcsdpf269&ref=sv_asc143pcsdpfpurchase2002<?php echo $refStr;?>&refs=sv_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc3pcpfsdpurchase2002-sv')">
          <i class="all-icons"></i>
          KÖP PRO
        </a>
      </div>

      <!-- 3pc -->
      <div class="panel right small">
        <!-- box+off -->
        <div class="box">
          <img src="<?php echo getStaticUrl('images/banner-asc.png')?>" alt="">
          <p class="off">
            SPARA
            <span><big>290</big> kr</span>
          </p>
        </div>
        <!-- type -->
        <p class="type">1 År / <b>3</b> PC</p>
        <!-- price -->
        <dl class="price">
          <dt><span><big>309</big></span> kr <i>-48%</i></dt>
          <dd>Ord. pris <del>599 kr</del></dd>
        </dl>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=sv-asc143pc309&ref=sv_asc143pcpurchase2002<?php echo $refStr;?>&refs=sv_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc3pcpurchase2002-sv')">
          <i class="all-icons"></i>
          KÖP PRO
        </a>
      </div>
    </div>
  </div>
</div>
<!-- end banner -->

<!-- benefit -->
<div class="benefit">
  <div class="wrapper">
    <h2>Aktivera Advanced SystemCare PRO för att få en snabbare,renare och säkrare dator!</h2>
    <div class="original clearfix">
      <div class="showcase">
        <div class="inner">
          <ul class="screenshot">
            <li>
              <img src="<?php echo getStaticUrl('images/screenshot-00.jpg'); ?>" alt="">
            </li>
            <li>
              <img src="<?php echo getStaticUrl('images/screenshot-04.jpg'); ?>" alt="">
            </li>
            <li>
              <img src="<?php echo getStaticUrl('images/screenshot-02.jpg'); ?>" alt="">
            </li>
            <li>
              <img src="<?php echo getStaticUrl('images/screenshot-03.jpg'); ?>" alt="">
            </li>
            <li>
              <img src="<?php echo getStaticUrl('images/screenshot-01.jpg'); ?>" alt="">
            </li>
          </ul>
        </div>
        <ul class="list-icon">
          <li class=""></li>
          <li class=""></li>
          <li class=""></li>
          <li class=""></li>
          <li class="active"></li>
        </ul>
      </div>
      <div class="detail-list">
        <dl class="">
          <dt><i class="benefit04"></i></dt>
          <dd>
            <h3>100% BESKYDD</h3>
            <p>Det skyddar dina personuppgifter och privatliv från hemliga intrång, stoppar alla försök från skadlig programvara samtidigt som din integritet förblir dubbelt * så säker som i gratisversionen</p>
          </dd>
        </dl>
        <dl class="">
          <dt><i class="benefit02"></i></dt>
          <dd>
            <h3>200% * SNABBARE</h3>
            <p>Rensar alla onödiga filer och optimerar CPU och RAM för att påskynda uppstarten, ökar systemets hastighet och gör en långsam dator upp till 200% snabbare</p>
          </dd>
        </dl>
        <dl class="three">
          <dt><i class="benefit03"></i></dt>
          <dd>
            <h3>300% * SNABBARE</h3>
            <p>Accelerera nedladdning, surfning, spelande och YouTube-visning med upp till 300%</p>
          </dd>
        </dl>
        <dl class="three active">
          <dt><i class="benefit01"></i></dt>
          <dd>
            <h3>Djupare rengöring på register med AI</h3>
            <p>Rengör dolda, värdelösa eller ogiltiga register djupt för att frigöra diskutrymme och förbättra dators prestanda helt med det nya AI modet.</p>
          </dd>
        </dl>
        <a href="Javascript:void(0);" class="textlink">Läs mer om PRO-versionen&gt;&gt;</a>
      </div>
    </div>
  </div>
</div>
<!-- end benefit -->

<!-- gifts -->
<div class="gifts">
  <div class="wrapper">
    <h2>75% Rabatt på Aktivera Advanced SystemCare PRO, Få 2 PC Optimeringsverktyg GRATIS!</h2>
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
          <h3>Protected Folder <del>499kr</del></h3>
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
    <a class="buybtn large larger"
       href="https://www.iobit.com/buy.php?product=sv-asc143pcsdpf269&ref=sv_asc143pcsdpfpurchase2002<?php echo $refStr;?>&refs=sv_purchase_asc"
       onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc3pcpfsdpurchase2002-sv')">
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
    <ul class="message clearfix">
      <li class="first">
        <strong>200+</strong>
        <p>Populär i mer än <b>200</b> länder <br> globalt</p>
      </li>
      <li class="two">
        <strong>1,000+</strong>
        <p>Mer än <b>1,000</b> medier har gillat <br> och kommenterat </p>
      </li>
      <li class="three">
        <strong>250,000,000+</strong>
        <p>Utvald och rekommenderad av över <br> <b>250</b> miljoner användare över hela <br> världen</p>
      </li>
      <li>
        <strong>80%+</strong>
        <p>Mer än <b>80%</b> av Advanced SystemCare <br> användare har aktiverat PRO-versionen</p>
      </li>
    </ul>
  </div>
</div>
<!-- probleme end -->

<!-- awards -->
<div class="awards wrapper">
  <img src="<?php echo getStaticUrl('images/awards.png')?>" alt="">
</div>
<!-- end awards -->

<!-- review start -->
<div class="review wrapper">
  <div class="review-list">
    <dl class="active">
      <dd>
        <p>
          "Det finns inget värre än en dator som kör fast så mycket att det hindrar din förmåga att arbeta eller spela spel. Advanced Systemcares syfte är att råda bot på allt som plågar din dator, inte bara städa upp skräpfiler, malware och ogiltiga registerposter utan också ge din dator ett rejält uppsving för en optimal datorupplevelse."
        </p>
      </dd>
    </dl>
    <dl>
      <dd>
        <p>
          "Jag, precis som många andra, började använda gratisversionen och köpte så småningom den fullständiga versionen. Programmet har arbetat för att hålla min dator ren och buggfri i flera år och det har ännu inte svikit mig. Jag kontaktade Advanced SystemCare nyligen och de svarade inom en dag eller två med allt jag behövde veta. I mina ögon väger support mycket i beslutsbefattandet om jag ska fortsätta använda en produkt. ASC segrar i både produkt och support."
        </p>
      </dd>
    </dl>
    <dl>
      <dd>
        <p>
          "Som de flesta människorna är jag ingen datorexpert. Jag vet inte hur många program jag har testat genom åren. Alla påstår sig vara bästa, men inget kommer i närheten av skyddet jag har nu med Advanced Systemcare Pro. Sedan jag fick detta fantastiska program har jag inte behövt ringa för teknisk support en enda gång. Det har mer än överträffat mina förväntningar, det är alltid uppdaterat och grafiken är väldigt cool också! Stort tack till er alla för att ni gör mitt liv mycket lättare."
        </p>
      </dd>
    </dl>
    <dl>
      <dd>
        <p>
          "Som datorreparatör finner jag att vanligaste problemen kan lösas genom att ladda ner och skanna med ASC Free. När jag är klar med en reparation brukar jag råda mina kunder till att köpa PRO-paketet. Vem behöver en tekniker när du har kraften i Advanced SystemCare PRO som dygnet runt jobbar på ditt system? Det här är den bästa produkten en hemanvändare kan köpa. Tack för att ni gör mitt jobb lättare."
        </p>
      </dd>
    </dl>
    <dl>
      <dd>
        <p>
          "Detta program är det bästa som jag någonsin har provat. Min dator går så mycket bättre och snabbare nu när jag har hämtat ASC. Det har städat upp onödiga och dubbla filer, tomma mappar och jag har använt det till att rensa filer. Det har städat och defragmenterat registret och alla filer på datorn. Jag rekommenderar starkt att köpa det här programmet. Det är inte dyrt och vad det kommer att göra för din dator kommer att vara helt fantastiskt. Du kommer att älska det, det jag lovar."
        </p>
      </dd>
    </dl>
  </div>
  <ul class="users clearfix">
    <li class="first current">
      <div class="imgbox">
        <img src="<?php echo getStaticUrl('images/cnet01.png')?>" alt=""/>
      </div>
      <p><span>Cnet</span></p>
    </li>
    <li>
      <div class="imgbox">
        <img src="<?php echo getStaticUrl('images/bruce-ramsay.png')?>" alt=""/>
      </div>
      <p><span>Bruce Ramsay</span></p>
    </li>
    <li>
      <div class="imgbox">
        <img src="<?php echo getStaticUrl('images/hank-ewert.png')?>" alt=""/>
      </div>
      <p><span>Hank Ewert</span></p>
    </li>
    <li>
      <div class="imgbox">
        <img src="<?php echo getStaticUrl('images/charles-r-widick.png')?>" alt=""/>
      </div>
      <p><span>Charles R. Widick</span></p>
    </li>
    <li>
      <div class="imgbox">
        <img src="<?php echo getStaticUrl('images/loretta-harnarine.png')?>" alt=""/>
      </div>
      <p><span>Loretta Harnarine</span></p>
    </li>
  </ul>
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
          Din version <br> NUVARANDE
          <span></span>
        </div>
      </th>
      <th class="space"></th>
      <th class="itema">
        <div class="box">
          PRO-version <br>UPPGRADERAD
          <span></span>
        </div>
      </th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl;?>images/icons-01.png" alt=""></td>
      <td class="virtue">System-rensning, -reparation och -optimering</td>
      <td class="itemb"><i class="all-icons">√</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl;?>images/icons-12.png" alt=""></td>
      <td class="virtue">Upptäck skadliga länkar i din e-post</td>
      <td class="itemb"><i class="all-icons">√</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl;?>images/icons-13.png" alt=""></td>
      <td class="virtue">Smartare AI mode för intelligent skanning och förstklassig rengöring <br> &nbsp;&nbsp;&nbsp;och optimering för dator </td>
      <td class="itemb"><i class="all-icons close">√</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl;?>images/icons-02.png" alt=""></td>
      <td class="virtue">Upp till 300%* internethastighet med Internet Booster</td>
      <td class="itemb"><i class="all-icons close">√</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl;?>images/icons-03.png" alt=""></td>
      <td class="virtue">Upp till 200%* snabbare PC-uppstart med startoptimering</td>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl;?>images/icons-04.png" alt=""></td>
      <td class="virtue">Djupgående registreringsrensning och defragmentering för att minimera krascher</td>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl;?>images/icons-05.png" alt=""></td>
      <td class="virtue">Ny diskoptimeringsmotor för högre systemhastighet</td>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl;?>images/icons-06.png" alt=""></td>
      <td class="virtue">Realtidsskydd mot säkerhetshot</td>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl;?>images/icons-07.png" alt=""></td>
      <td class="virtue">Fullständig lokalisering och identifiering av de djupaste virusen</td>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl;?>images/icons-08.png" alt=""></td>
      <td class="virtue">Automatisk blockering av reklam och spårning för säkrare surfning</td>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl;?>images/icons-09.png" alt=""></td>
      <td class="virtue">Automatisk rensning av RAM-minne för smidigare systemkörning</td>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl;?>images/icons-10.png" alt=""></td>
      <td class="virtue">Automatisk uppdatering till den senaste versionen</td>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl;?>images/icons-11.png" alt=""></td>
      <td class="virtue">Gratis teknisk support 24/7 på begäran</td>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icon radius"></td>
      <td class="virtue radius"></td>
      <td class="itemb radius"></td>
      <td class="space radius"></td>
      <td class="itema radius"> <span class="shadow"></span></td>
    </tr>
    </tbody>
  </table>
</div>
<!-- compare end -->

<!-- footbuy start -->
<div class="footbuy">
  <div class="wrapper clearfix">
    <div class="imgbox fl">
      <div class="imglist one">
        <img src="<?php echo getStaticUrl('images/db-three-box.png')?>" alt=""/>
        <p class="off foot">
          <span><big>38%</big></span>
          Rabatt
        </p>
      </div>
      <div class="imglist gift on">
        <img src="<?php echo getStaticUrl('images/db-gift-box.png')?>" alt=""/>
        <p class="off foot special">
          <span><big>75%</big></span>
          Rabatt
        </p>
      </div>
      <div class="imglist three">
        <img src="<?php echo getStaticUrl('images/db-three-box.png')?>" alt=""/>
        <p class="off foot">
          <span><big>48%</big></span>
          Rabatt
        </p>
      </div>
    </div>
    <ul class="fl">
      <li class="one clearfix" data-num="0">
        <span>1 År / 1 PC</span>
        <strong>SPARA 150 kr</strong>
      </li>
      <li class="gift on clearfix" data-num="1">
        <span>1 År / 3 PC + Gratis gåvor</span>
        <strong>SPARA 828 kr</strong>
      </li>
      <li class="three clearfix" data-num="2">
        <span>1 År / 3PC</span>
        <strong>SPARA 290 kr</strong>
      </li>
    </ul>
    <div class="fr">
      <!-- price -->
      <dl class="price large">
        <dt><span><big>269</big></span> kr </dt>
        <dd>Ord. pris <del>1 097 kr</del></dd>
      </dl>
      <!-- buybtn -->
      <a class="buybtn large"
         href="https://www.iobit.com/buy.php?product=sv-asc143pcsdpf269&ref=sv_asc143pcsdpfpurchase2002<?php echo $refStr;?>&refs=sv_purchase_asc"
         onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc3pcpfsdpurchase2002-sv')">
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
    <dt><img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""></dt>
    <dd>
      <h3>Betalningsmetoder</h3>
      <p>Vi accepterar <br> flera betalningsmetoder</p>
    </dd>
  </dl>
  <dl class="two">
    <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dt>
    <dd>
      <h3>Pengarna-tillbaka-garanti</h3>
      <p>Om du inte är nöjd med produkten <br> inom 60 dagar, ger vi dig pengarna tillbaka</p>
    </dd>
  </dl>
  <dl class="three">
    <dt><img src="<?php echo getStaticUrl('images/verified.png')?>" alt=""></dt>
    <dd>
      <h3>Säker betalning</h3>
      <p>IObit stöder <br> flera säkra betalningsalternativ</p>
    </dd>
  </dl>
  <dl class="four">
    <dt><img src="<?php echo getStaticUrl('images/voice.png')?>" alt=""></dt>
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
    <p class="copyright">Copyright ©2005 - <?php echo date('Y')?> IObit. Alla Rättigheter Förbehållna</p>
  </div>
</div>
<!-- end footer -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>