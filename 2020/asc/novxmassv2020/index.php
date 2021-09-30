<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}

if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'novxmassv2020_p' . $date;
  $c_name_t = 'novxmassv2020_t' . $date;
  if ($_COOKIE[$c_name] === null) {
    $totalNum = $packsNum = rand(155, 165);
    setcookie($c_name, $packsNum, time() + 3600 * 24);
    setcookie($c_name_t, $totalNum, time() + 3600 * 24);
  } else {
    if (intval($_COOKIE[$c_name]) <= 3) {
      $packsNum = 3;
      setcookie($c_name, $packsNum, time() + 3600 * 24);
    } else {
      $packsNum = $_COOKIE[$c_name] - 1;
      setcookie($c_name, $packsNum, time() + 3600 * 24);
    }
  }
  echo json_encode(array('packsNum' => $packsNum));
  exit();
}
include $pRootUrl . 'include/common.inc.php';
$refStr = empty($_GET['st']) ? '' : ('-' . $_GET['st']);
$refStr .= empty($_GET['ref']) ? '' : ('-' . $_GET['ref']);
$refStr .= empty($_GET['to']) ? '' : ('-' . $_GET['to']);
$refStr .= empty($_GET['insur']) ? '' : ('-' . $_GET['insur']);
$refStr .= empty($_GET['pop']) ? '' : ('-' . $_GET['pop']);
$refStr .= empty($_GET['r']) ? '' : ('-' . $_GET['r']);
if (in_array($_GET['type'], array('pro', 'giveawayexp'))) {
    $refStr .= '-' . $_GET['type'];
}
$refStr .= '-i' . $_GET['instd'] . '-u' . $_GET['usr'] . '-l' . $_GET['litype'] . '-e' . $_GET['expd'];
if(preg_match_all('/([0-9]*)\./',$_GET['ver'],$matches)){
    $ver=$matches[1][0].$matches[1][1];
    $refStr.='-'.$ver;
}
?>
<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= $pResUrl; ?>style/Normalize.css" type="text/css">
  <link href="<?php echo getStaticUrl('style/common.css')?>" rel="stylesheet">
  <link rel="icon" href="https://codes.iobit.com/iobit/images/favicon.ico" mce_href="https://codes.iobit.com/iobit/images/favicon.ico" type="image/x-icon">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800;900&display=swap" rel="stylesheet">
  <script src="https://cdn.bootcdn.net/ajax/libs/less.js/3.9.0/less.min.js"></script>
  <script src="https://cdn.bootcdn.net/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <title>Spara upp till 87% på Advanced SystemCare PRO och få ett gåvopaket – IObit</title>
  <?php echo $gJavascript['public']; ?>
  <?php echo $gJavascript['head']; ?>
</head>

<body>
  <header>
    <a href="https://www.iobit.com/sv/index.php" style="position: absolute;left: 20%; top: 14%;" target="_blank">
      <img src="<?= $pResUrl; ?>images/logo.png" alt="">
    </a>
    <div style="text-align: center; margin-top: -10px;">
      <img src="<?php echo getStaticUrl('images/title-2021.png')?>" alt="">
      <p style="margin-top: -24px;font-size: 20px; color: #442325;font-weight: 600;">Bästa chansen att spara stort – bara en gång per år!</p>
    </div>
    <div class="box">
      <div class="box1">
        <div class="boximg"> <img src="<?php echo getStaticUrl('images/Abox.png')?>" alt=""></div>
        <h1>-38%</h1>
        <h3>249<i>kr</i> <span>399kr</span></h3>
        <a href="https://www.iobit.com/buy.php?product=sv-asc141pc249&ref=sv_asc141pc249purchase2011<?= $refStr; ?>&refs=sv_purchase_asc">
          <button onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc1pcpurchase2011-sv')">KÖP PRO</button></a>
      </div>
      <div class="box2">
        <div class="boxinser">
          <img src="<?php echo getStaticUrl('images/ASCbox.png')?>" alt="" class="postimg">
          <h1>-87%</h1>
          <h3>269<i>kr</i> <span>2 096kr</span></h3>
          <a href="https://www.iobit.com/buy.php?product=sv-asc143pcsdpfisu269&ref=sv_asc143pcsdpfisu269purchase2011<?= $refStr; ?>&refs=sv_purchase_asc">
            <button onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc3pcsdpfisupurchase2011-sv')">KÖP PRO</button></a>
          <p><i id="viewNum" style="color: #E63233;">30</i> platser kvar nu!</p>
        </div>
      </div>
    </div>
  </header>
  <div class="navtop">
    Även om den fria versionen har en mer än acceptabel kvalitet, är den verkliga stjärnan Advanced SystemCare Pro
    <img src="<?= $pResUrl; ?>images/Chip_Logo.png" alt="">
  </div>

  <nav>
    <div>
      <span style="font-size: 42px; font-weight: 600; color: #233653;;margin-left: 22px;">
        Aktivera Advanced SystemCare PRO för att få en snabbare,renare och säkrare dator!</span>
    </div>
  </nav>

  <!-- benefit -->
  <div class="benefit">
    <div class="wrapper">
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


  <aside>
    <div>
      <span style="font-size: 38px; font-weight: 600; color: #233653;;margin-left: 22px;">
        Spara upp till 87% rabatt på Advanced SystemCare pro och få en gratis paket</span>
    </div>
    <div class="asibox">
      <ul>
        <li>
          <div><img src="<?php echo getStaticUrl('images/isu.png')?>" alt=""></div>
          <div style="margin-left: 9px;">
            <h1>Nu 0 kr</h1>
            <h4>IObit Software Updater ger dig det enklaste sättet att uppdatera din programvara och installera de grundläggande programmen. Den ser till att du njuter av alla nya funktioner och skyddas från oöverkomliga sårbarheter också.</h4>
          </div>
        </li>
        <li>
          <div><img src="<?php echo getStaticUrl('images/sd.png')?>" alt=""></div>
          <div style="margin-left: 9px;">
            <h1>Nu 0 kr</h1>
            <h4>Defragmentera snabbt och grundligt för att optimera hårddiskens och datorns prestanda optimering.</h4>
          </div>
        </li>
        <li>
          <div><img src="<?php echo getStaticUrl('images/PF.png')?>" alt=""></div>
          <div style="margin-left: 9px;">
            <h1>Nu 0 kr</h1>
            <h4>Effektivt filskyddsverktyg som garanterar säkerheten för dina viktiga mappar, data och din integritet.</h4>
          </div>
        </li>
      </ul>
    </div>
  </aside>

  <div style="width: 1200px; margin: 40px auto 0px; text-align: center;">
    <img src="<?= $pResUrl; ?>images/tree2.png" alt="">
    <span style="font-size: 32px; font-weight: 600; text-align: center; color: #233653;;margin:0 22px;">
      Internationella utmärkelser och recensioner</span>
    <img src="<?= $pResUrl; ?>images/tree1.png" alt="">
  </div>


  <div class="probleme">
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
  <div class="compare" id="compare">
    <div class="wrapper">
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
  </div>
  <!-- compare end -->

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


  <div class="laster">
    <h5>
      Notera: <br>
      *.Uppgifter kan variera beroende på olika system eller datorer.<br>
      *.Reklamkampanjer kan emellanåt ändras utan förvarning, efter vårt eget godtycke.
    </h5>
  </div>
  <div id="floatlayer" class="floatlayer">
    <div class="ayer">
      <div style="margin-top: -30px;"><img src="<?php echo getStaticUrl('images/box.png')?>" alt=""></div>
      <div style="  color: #FFF4C7;font-size: 21px;">
        Spara upp till <i style="font-size: 21px;color: #FFFFFF;; ">87%</i> rabatt på Advanced SystemCare pro och få en gratis paket
      </div>
      <div class="text">
        <p style="margin-top: -35px;"><span>269<strong>kr</strong> <i>2 096kr</i></span> </p>
        <p>
          <a href="https://www.iobit.com/buy.php?product=sv-asc143pcsdpfisu269&ref=sv_asc143pcsdpfisu269purchase2011<?= $refStr; ?>&refs=sv_purchase_asc">
            <button onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc3pcsdpfisupurchase2011-sv')">
              KÖP PRO</button>
          </a>
        </p>
        <p style="height: 16px; font-size: 14px;font-weight: 500;color: #FFFBF0;margin-top: 5px;"><i id="viewNum-2">30</i> platser kvar nu!
        </p>
      </div>
    </div>
  </div>
  </div>
  <h6 id="last">Copyright ©2005 - <?php echo date('Y')?> IObit. Alla Rättigheter Förbehållna</h6>
  <div style="padding-bottom: 200px;"></div>
</body>
<script>
  var num = 0
  //users
  $(".users li").mouseover(function(event) {
    var num = $(this).index();
    $(".users li").eq(num).addClass('current').siblings().removeClass('current');
    $(".review-list >dl").eq(num).addClass('active').siblings().removeClass('active');
  });
  //benefit
  $(".benefit .detail-list dl").hover(function() {
    $(".benefit .showcase .screenshot").css('marginLeft', -555 * ($(this).index() + 1));
    $(".benefit .zoom li").removeClass('active').eq($(this).index() + 1).addClass('active');
    $(this).addClass("active").siblings().removeClass("active");
    $(".benefit .list-icon li").removeClass('active').eq($(this).index() + 1).addClass('active');
  });
  $(".benefit .list-icon li").hover(function() {
    $(".benefit .showcase .screenshot").css('marginLeft', -555 * ($(this).index()));
    $(".benefit .zoom li").removeClass('active').eq($(this).index()).addClass('active');
    var num = $(this).index();
    if (num === 0) {
      $(".benefit .detail-list dl").removeClass("active");
    } else {
      $(".benefit .detail-list dl").eq($(this).index() - 1).addClass("active").siblings().removeClass("active");
    }
    $(".benefit .list-icon li").removeClass('active');
    $(this).addClass('active');
  });
  // $('#floatlayer').slideDown()
  $(window).on('scroll', function() {
    if ($(window).scrollTop() > $(".navtop").offset().top) {
      $('#floatlayer').slideDown(); //滑动隐藏
    } else {
      $('#floatlayer').slideUp(); //滑动出现
    }
  });

  function getView() {
    $.ajax({
      type: 'GET',
      url: 'index.php',
      data: 'action=getView',
      success: function(res) {
        $("#viewNum").html(res);
        setTimeout("getView()", 0);
      }
    });
  }

  function getSales() {
    var date = new Date();
    $.ajax({
      type: "GET",
      url: "index.php",
      data: "action=getPacks&d=" + date.getDate(),
      success: function(res) {
        var sales = JSON.parse(res);
        packs = sales.packsNum;
        $('#viewNum').html(packs);
        $('#viewNum-2').html(packs);
        if (packs > 3) {
          $(window).unload(function() {
            packs = cGet('novxmassv2020_p');
          });
          setTimeout('getSales(0)', getReTime());
        }
      }
    });
  }

  function getReTime() {
    retime = (Math.random() > 0.5) ? 2 : 4;
    return retime * 1000;
  }
  getSales();
</script>

</html>