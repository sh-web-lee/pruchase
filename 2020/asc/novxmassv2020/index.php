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
  <title>Spara upp till 87% p?? Advanced SystemCare PRO och f?? ett g??vopaket ??? IObit</title>
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
      <p style="margin-top: -24px;font-size: 20px; color: #442325;font-weight: 600;">B??sta chansen att spara stort ??? bara en g??ng per ??r!</p>
    </div>
    <div class="box">
      <div class="box1">
        <div class="boximg"> <img src="<?php echo getStaticUrl('images/Abox.png')?>" alt=""></div>
        <h1>-38%</h1>
        <h3>249<i>kr</i> <span>399kr</span></h3>
        <a href="https://www.iobit.com/buy.php?product=sv-asc141pc249&ref=sv_asc141pc249purchase2011<?= $refStr; ?>&refs=sv_purchase_asc">
          <button onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc1pcpurchase2011-sv')">K??P PRO</button></a>
      </div>
      <div class="box2">
        <div class="boxinser">
          <img src="<?php echo getStaticUrl('images/ASCbox.png')?>" alt="" class="postimg">
          <h1>-87%</h1>
          <h3>269<i>kr</i> <span>2 096kr</span></h3>
          <a href="https://www.iobit.com/buy.php?product=sv-asc143pcsdpfisu269&ref=sv_asc143pcsdpfisu269purchase2011<?= $refStr; ?>&refs=sv_purchase_asc">
            <button onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc3pcsdpfisupurchase2011-sv')">K??P PRO</button></a>
          <p><i id="viewNum" style="color: #E63233;">30</i> platser kvar nu!</p>
        </div>
      </div>
    </div>
  </header>
  <div class="navtop">
    ??ven om den fria versionen har en mer ??n acceptabel kvalitet, ??r den verkliga stj??rnan Advanced SystemCare Pro
    <img src="<?= $pResUrl; ?>images/Chip_Logo.png" alt="">
  </div>

  <nav>
    <div>
      <span style="font-size: 42px; font-weight: 600; color: #233653;;margin-left: 22px;">
        Aktivera Advanced SystemCare PRO f??r att f?? en snabbare,renare och s??krare dator!</span>
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
              <p>Det skyddar dina personuppgifter och privatliv fr??n hemliga intr??ng, stoppar alla f??rs??k fr??n skadlig programvara samtidigt som din integritet f??rblir dubbelt * s?? s??ker som i gratisversionen</p>
            </dd>
          </dl>
          <dl class="">
            <dt><i class="benefit02"></i></dt>
            <dd>
              <h3>200% * SNABBARE</h3>
              <p>Rensar alla on??diga filer och optimerar CPU och RAM f??r att p??skynda uppstarten, ??kar systemets hastighet och g??r en l??ngsam dator upp till 200% snabbare</p>
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
              <h3>Djupare reng??ring p?? register med AI</h3>
              <p>Reng??r dolda, v??rdel??sa eller ogiltiga register djupt f??r att frig??ra diskutrymme och f??rb??ttra dators prestanda helt med det nya AI modet.</p>
            </dd>
          </dl>
          <a href="Javascript:void(0);" class="textlink">L??s mer om PRO-versionen&gt;&gt;</a>
        </div>
      </div>
    </div>
  </div>
  <!-- end benefit -->


  <aside>
    <div>
      <span style="font-size: 38px; font-weight: 600; color: #233653;;margin-left: 22px;">
        Spara upp till 87% rabatt p?? Advanced SystemCare pro och f?? en gratis paket</span>
    </div>
    <div class="asibox">
      <ul>
        <li>
          <div><img src="<?php echo getStaticUrl('images/isu.png')?>" alt=""></div>
          <div style="margin-left: 9px;">
            <h1>Nu 0 kr</h1>
            <h4>IObit Software Updater ger dig det enklaste s??ttet att uppdatera din programvara och installera de grundl??ggande programmen. Den ser till att du njuter av alla nya funktioner och skyddas fr??n o??verkomliga s??rbarheter ocks??.</h4>
          </div>
        </li>
        <li>
          <div><img src="<?php echo getStaticUrl('images/sd.png')?>" alt=""></div>
          <div style="margin-left: 9px;">
            <h1>Nu 0 kr</h1>
            <h4>Defragmentera snabbt och grundligt f??r att optimera h??rddiskens och datorns prestanda optimering.</h4>
          </div>
        </li>
        <li>
          <div><img src="<?php echo getStaticUrl('images/PF.png')?>" alt=""></div>
          <div style="margin-left: 9px;">
            <h1>Nu 0 kr</h1>
            <h4>Effektivt filskyddsverktyg som garanterar s??kerheten f??r dina viktiga mappar, data och din integritet.</h4>
          </div>
        </li>
      </ul>
    </div>
  </aside>

  <div style="width: 1200px; margin: 40px auto 0px; text-align: center;">
    <img src="<?= $pResUrl; ?>images/tree2.png" alt="">
    <span style="font-size: 32px; font-weight: 600; text-align: center; color: #233653;;margin:0 22px;">
      Internationella utm??rkelser och recensioner</span>
    <img src="<?= $pResUrl; ?>images/tree1.png" alt="">
  </div>


  <div class="probleme">
    <ul class="message clearfix">
      <li class="first">
        <strong>200+</strong>
        <p>Popul??r i mer ??n <b>200</b> l??nder <br> globalt</p>
      </li>
      <li class="two">
        <strong>1,000+</strong>
        <p>Mer ??n <b>1,000</b> medier har gillat <br> och kommenterat </p>
      </li>
      <li class="three">
        <strong>250,000,000+</strong>
        <p>Utvald och rekommenderad av ??ver <br> <b>250</b> miljoner anv??ndare ??ver hela <br> v??rlden</p>
      </li>
      <li>
        <strong>80%+</strong>
        <p>Mer ??n <b>80%</b> av Advanced SystemCare <br> anv??ndare har aktiverat PRO-versionen</p>
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
            "Det finns inget v??rre ??n en dator som k??r fast s?? mycket att det hindrar din f??rm??ga att arbeta eller spela spel. Advanced Systemcares syfte ??r att r??da bot p?? allt som pl??gar din dator, inte bara st??da upp skr??pfiler, malware och ogiltiga registerposter utan ocks?? ge din dator ett rej??lt uppsving f??r en optimal datorupplevelse."
          </p>
        </dd>
      </dl>
      <dl>
        <dd>
          <p>
            "Jag, precis som m??nga andra, b??rjade anv??nda gratisversionen och k??pte s?? sm??ningom den fullst??ndiga versionen. Programmet har arbetat f??r att h??lla min dator ren och buggfri i flera ??r och det har ??nnu inte svikit mig. Jag kontaktade Advanced SystemCare nyligen och de svarade inom en dag eller tv?? med allt jag beh??vde veta. I mina ??gon v??ger support mycket i beslutsbefattandet om jag ska forts??tta anv??nda en produkt. ASC segrar i b??de produkt och support."
          </p>
        </dd>
      </dl>
      <dl>
        <dd>
          <p>
            "Som de flesta m??nniskorna ??r jag ingen datorexpert. Jag vet inte hur m??nga program jag har testat genom ??ren. Alla p??st??r sig vara b??sta, men inget kommer i n??rheten av skyddet jag har nu med Advanced Systemcare Pro. Sedan jag fick detta fantastiska program har jag inte beh??vt ringa f??r teknisk support en enda g??ng. Det har mer ??n ??vertr??ffat mina f??rv??ntningar, det ??r alltid uppdaterat och grafiken ??r v??ldigt cool ocks??! Stort tack till er alla f??r att ni g??r mitt liv mycket l??ttare."
          </p>
        </dd>
      </dl>
      <dl>
        <dd>
          <p>
            "Som datorreparat??r finner jag att vanligaste problemen kan l??sas genom att ladda ner och skanna med ASC Free. N??r jag ??r klar med en reparation brukar jag r??da mina kunder till att k??pa PRO-paketet. Vem beh??ver en tekniker n??r du har kraften i Advanced SystemCare PRO som dygnet runt jobbar p?? ditt system? Det h??r ??r den b??sta produkten en hemanv??ndare kan k??pa. Tack f??r att ni g??r mitt jobb l??ttare."
          </p>
        </dd>
      </dl>
      <dl>
        <dd>
          <p>
            "Detta program ??r det b??sta som jag n??gonsin har provat. Min dator g??r s?? mycket b??ttre och snabbare nu n??r jag har h??mtat ASC. Det har st??dat upp on??diga och dubbla filer, tomma mappar och jag har anv??nt det till att rensa filer. Det har st??dat och defragmenterat registret och alla filer p?? datorn. Jag rekommenderar starkt att k??pa det h??r programmet. Det ??r inte dyrt och vad det kommer att g??ra f??r din dator kommer att vara helt fantastiskt. Du kommer att ??lska det, det jag lovar."
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
          <th class="text" colspan="2">Se vad PRO-utg??van kan g??ra f??r dig:</th>
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
          <td class="itemb"><i class="all-icons">???</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">???</i></td>
        </tr>
        <tr>
          <td class="icon"><img src="<?php echo $pResUrl;?>images/icons-12.png" alt=""></td>
          <td class="virtue">Uppt??ck skadliga l??nkar i din e-post</td>
          <td class="itemb"><i class="all-icons">???</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">???</i></td>
        </tr>
        <tr>
          <td class="icon"><img src="<?php echo $pResUrl;?>images/icons-13.png" alt=""></td>
          <td class="virtue">Smartare AI mode f??r intelligent skanning och f??rstklassig reng??ring <br> &nbsp;&nbsp;&nbsp;och optimering f??r dator </td>
          <td class="itemb"><i class="all-icons close">???</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">???</i></td>
        </tr>
        <tr>
          <td class="icon"><img src="<?php echo $pResUrl;?>images/icons-02.png" alt=""></td>
          <td class="virtue">Upp till 300%* internethastighet med Internet Booster</td>
          <td class="itemb"><i class="all-icons close">???</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">???</i></td>
        </tr>
        <tr>
          <td class="icon"><img src="<?php echo $pResUrl;?>images/icons-03.png" alt=""></td>
          <td class="virtue">Upp till 200%* snabbare PC-uppstart med startoptimering</td>
          <td class="itemb"><i class="all-icons close">X</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">???</i></td>
        </tr>
        <tr>
          <td class="icon"><img src="<?php echo $pResUrl;?>images/icons-04.png" alt=""></td>
          <td class="virtue">Djupg??ende registreringsrensning och defragmentering f??r att minimera krascher</td>
          <td class="itemb"><i class="all-icons close">X</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">???</i></td>
        </tr>
        <tr>
          <td class="icon"><img src="<?php echo $pResUrl;?>images/icons-05.png" alt=""></td>
          <td class="virtue">Ny diskoptimeringsmotor f??r h??gre systemhastighet</td>
          <td class="itemb"><i class="all-icons close">X</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">???</i></td>
        </tr>
        <tr>
          <td class="icon"><img src="<?php echo $pResUrl;?>images/icons-06.png" alt=""></td>
          <td class="virtue">Realtidsskydd mot s??kerhetshot</td>
          <td class="itemb"><i class="all-icons close">X</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">???</i></td>
        </tr>
        <tr>
          <td class="icon"><img src="<?php echo $pResUrl;?>images/icons-07.png" alt=""></td>
          <td class="virtue">Fullst??ndig lokalisering och identifiering av de djupaste virusen</td>
          <td class="itemb"><i class="all-icons close">X</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">???</i></td>
        </tr>
        <tr>
          <td class="icon"><img src="<?php echo $pResUrl;?>images/icons-08.png" alt=""></td>
          <td class="virtue">Automatisk blockering av reklam och sp??rning f??r s??krare surfning</td>
          <td class="itemb"><i class="all-icons close">X</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">???</i></td>
        </tr>
        <tr>
          <td class="icon"><img src="<?php echo $pResUrl;?>images/icons-09.png" alt=""></td>
          <td class="virtue">Automatisk rensning av RAM-minne f??r smidigare systemk??rning</td>
          <td class="itemb"><i class="all-icons close">X</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">???</i></td>
        </tr>
        <tr>
          <td class="icon"><img src="<?php echo $pResUrl;?>images/icons-10.png" alt=""></td>
          <td class="virtue">Automatisk uppdatering till den senaste versionen</td>
          <td class="itemb"><i class="all-icons close">X</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">???</i></td>
        </tr>
        <tr>
          <td class="icon"><img src="<?php echo $pResUrl;?>images/icons-11.png" alt=""></td>
          <td class="virtue">Gratis teknisk support 24/7 p?? beg??ran</td>
          <td class="itemb"><i class="all-icons close">X</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">???</i></td>
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
        <p>Om du inte ??r n??jd med produkten <br> inom 60 dagar, ger vi dig pengarna tillbaka</p>
      </dd>
    </dl>
    <dl class="three">
      <dt><img src="<?php echo getStaticUrl('images/verified.png')?>" alt=""></dt>
      <dd>
        <h3>S??ker betalning</h3>
        <p>IObit st??der <br> flera s??kra betalningsalternativ</p>
      </dd>
    </dl>
    <dl class="four">
      <dt><img src="<?php echo getStaticUrl('images/voice.png')?>" alt=""></dt>
      <dd>
        <h3>Tillf??rlitliga Tj??nster</h3>
        <p>Gratis 24/7 <br> Teknisk Support vid Behov</p>
      </dd>
    </dl>
  </div>
  <!-- end service -->


  <div class="laster">
    <h5>
      Notera: <br>
      *.Uppgifter kan variera beroende p?? olika system eller datorer.<br>
      *.Reklamkampanjer kan emellan??t ??ndras utan f??rvarning, efter v??rt eget godtycke.
    </h5>
  </div>
  <div id="floatlayer" class="floatlayer">
    <div class="ayer">
      <div style="margin-top: -30px;"><img src="<?php echo getStaticUrl('images/box.png')?>" alt=""></div>
      <div style="  color: #FFF4C7;font-size: 21px;">
        Spara upp till <i style="font-size: 21px;color: #FFFFFF;; ">87%</i> rabatt p?? Advanced SystemCare pro och f?? en gratis paket
      </div>
      <div class="text">
        <p style="margin-top: -35px;"><span>269<strong>kr</strong> <i>2 096kr</i></span> </p>
        <p>
          <a href="https://www.iobit.com/buy.php?product=sv-asc143pcsdpfisu269&ref=sv_asc143pcsdpfisu269purchase2011<?= $refStr; ?>&refs=sv_purchase_asc">
            <button onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc3pcsdpfisupurchase2011-sv')">
              K??P PRO</button>
          </a>
        </p>
        <p style="height: 16px; font-size: 14px;font-weight: 500;color: #FFFBF0;margin-top: 5px;"><i id="viewNum-2">30</i> platser kvar nu!
        </p>
      </div>
    </div>
  </div>
  </div>
  <h6 id="last">Copyright ??2005 - <?php echo date('Y')?> IObit. Alla R??ttigheter F??rbeh??llna</h6>
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
      $('#floatlayer').slideDown(); //????????????
    } else {
      $('#floatlayer').slideUp(); //????????????
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