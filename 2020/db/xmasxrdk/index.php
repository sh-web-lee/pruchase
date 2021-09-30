<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

function microtime_float()
{
  list($usec, $sec) = explode(' ', microtime());
  return ((float)$usec + (float)$sec);
}

$buyNum = ceil(microtime_float() * 1000 / 20000) - 69041325;
$buyNum = number_format($buyNum);
$viewNum = rand(60, 90);
if (!empty($_GET['action']) && ($_GET['action'] == 'getPacks')) {
  $date = $_GET['d'];
  $cName_t = 'xmasdkxr2020_t' . $date;
  $cName_p = 'xmasdkxr2020_p' . $date;
  $maxNum = rand(70, 90);
  $minNum = 3;
  $cookie = $_COOKIE[$cName_p];
  if ($cookie !== null) {
    $packsNum = $_COOKIE[$cName_p];
    if ($packsNum > $minNum) {
      $packsNum--;
      setcookie($cName_p, $packsNum);
    } else {
      $packsNum = $minNum;
    }
  } else {
    $packsNum = $maxNum;
    setcookie($cName_t, $packsNum);
    setcookie($cName_p, $packsNum);
  }
  echo json_encode(array('packsNum' => $packsNum));
  exit();
}
// $time = time();
// if(isset($_COOKIE['optimize'])&&$time-$_COOKIE['optimize']>86400){
//     header("Location:return.php");
//     exit;
// }else{
//   if(!isset($_COOKIE['optimize'])) setcookie('optimize',$time,$time+2592000);
// }
$refStr.=empty($_GET['st'])?'':('-'.$_GET['st']);
$refStr.=empty($_GET['pop'])?'':('-'.$_GET['pop']);
$refStr.=empty($_GET['r'])?'':('-'.$_GET['r']);
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['user'])?'':('-'.$_GET['user']);
$refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);
$refStr.=empty($_GET['insday'])?'':('-'.$_GET['insday']);
$refStr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-t'.$_GET['type'].'-e'.$_GET['expd'];

?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <title>Eksklusive 90% rabat på Driver Booster 8 Pro & og få en product gratis</title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css') ?>" rel="stylesheet">
  <?php echo $gJavascript['public']; ?>
  <?php echo $gJavascript['head']; ?>
</head>

<body>
  <!-- banner start -->
  <div class="banner">
    <div class="top-img" id="light-ctrl">
      <div class="light-0 on"></div>
      <div class="light-1"></div>
      <div class="snow"></div>
    </div>

    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com/dk/index.php" target="_blank">IObit</a>
      <h1>ОГРАНИЧЕННОЕ ПРЕДЛОЖЕНИЕ</h1>
      <h2>Drev og spilkomponenter er altid opdaterede!</h2>

      <div class="clearfix">
        <div class="banlist big">
          <div class="gift">
            <i></i>Der er kun <b>12</b> stk. tilbage.
          </div>
          <img src="<?php echo getStaticUrl('images/db-gift-box.png') ?>" alt="" />
          <div class="price">
            <p><strong>169 kr.</strong> <del>1.646 kr.</del></p>
            <a class="buybtn" href="https://www.iobit.com/buy.php?product=dk-db83pcisusdpf169&ref=dk_db3pcbundlexmasxr202012-i-u-t-e<?= $refStr; ?>&refs=dk_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'db3pcbundlepurchasexr2012-dk')">
              Køb nu
            </a>
          </div>
          <ul class="txtlist">
            <li><i class="all-icons"></i> Spar 1447 kr.</li>
            <li><i class="all-icons"></i> Driver Booster PRO <del>679 kr.</del></li>
            <li><i class="all-icons red"></i> IObit Software Updater PRO <del>189 kr.</del></li>
            <li><i class="all-icons red"></i> Protected Folder <del>399 kr.</del></li>
            <li><i class="all-icons red"></i> Smart Defrag PRO <del>379 kr.</del></li>
          </ul>
          <div class="discount"><b>-90%</b></div>
        </div>
        <div class="banlist">
          <img src="<?php echo getStaticUrl('images/db-box.png') ?>" alt="" />
          <div class="price">
            <p><strong>189 kr.</strong> <del> 399 kr.</del></p>
            <a class="buybtn" href="https://www.iobit.com/buy.php?product=dk-db81pc189&ref=dk_db1pcsinglexmasxr202012-i-u-t-e<?= $refStr; ?>&refs=dk_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'db1pcsinglepurchasexr2012-dk')">
              Køb nu
            </a>
          </div>
          <ul class="txtlist">
            <li><i class="all-icons"></i> Spar 210 kr.</li>
            <li><i class="all-icons"></i>Driver Booster PRO <del>399 kr.</del></li>
          </ul>
          <div class="discount"><b>-53%</b></div>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->


  <div class="payment">
    <img src="<?php echo getStaticUrl('images/payment.png') ?>" alt="" />
    <p>
      <img src="<?php echo getStaticUrl('images/moneyback.png') ?>" alt="" />
      <span>
        60 dages tilfredshedsgaranti eller pengene retur – vi garantere at PRO-versionen vil hjælpe dig med at løse dine PC-problemer, ellers refunderer vi pengene!
      </span>
    </p>
  </div>

  <!-- feature start -->
  <div class="feature">
    <div class="triangle"></div>
    <h2 class="tree">Driver Booster gør dine drevopdateringer lettere og sikrere</h2>
    <div class="wrapper">
      <div class="clearfix">
        <div class="feature-img fl"><img src="<?php echo getStaticUrl('images/screen.png') ?>" alt="" /></div>
        <div class="feature-txt fr">
          <dl>
            <dt>
              <h3>Automisk opdatering </h3>
            </dt>
            <dd>Tjekker automatisk for opdateringer efter skema uden behov for brugeraktion.
            </dd>
          </dl>
          <dl class="two">
            <dt>
              <h3>Download automatisk</h3>
            </dt>
            <dd>Udvælger og downloader automatisk de mest kompatible drev.
            </dd>
          </dl>
          <dl class="three">
            <dt>
              <h3>Lydløs Installation</h3>
            </dt>
            <dd>Når først drev er udvalgte og downloaded, installeres de automatisk, når systemet er ledigt.
            </dd>
          </dl>
          <dl class="four">
            <dt>
              <h3>Offline opdatering</h3>
            <dd>Installerer og opdaterer netværksdrev uden
              <br> internetforbindelse, især forgeninstallering
              <br> af system.
            </dd>
            </dt>
          </dl>
          <span class="feature-icon one"></span>
          <span class="feature-icon two"></span>
          <span class="feature-icon three"></span>
          <span class="feature-icon four"></span>
        </div>
      </div>
    </div>
  </div>
  <!-- feature end -->
  <div class="feature-tile">
    <h2>
      <span class="tree">Juletilbuddet sikrer en optimal præstation af din computer </span>
    </h2>
    <div class="feature-tile__main">
      <div class="unit" id="tab2">
        <img src="<?php echo getStaticUrl('images/feature-tile-img-0.png') ?>" alt="">
        <div class="blank"></div>
        <div class="text">
          <h3>Automatisk softwareopdatering på din PC</h3>
          <p>Opdater nemt dit computersoftware til den nyeste version, så du kan få glæde af programmets nye og forbedrede funktioner i tide og dæk sårbarhederne i den gamle version.</p>
          <p>Download og installer de officielle programversioner der er essentialle samt populære programmer ved brug af IObit Software Updater uden behov for at åbne en browser.</p>
        </div>
      </div>
      <div class="unit">
        <div class="text">
          <h3>Bedste løsning til harddisk defragmentering</h3>
          <p>Hurtig og smart harddisk defragmentering som giver hurtigere adgang til data og accelererer disken.</p>
          <p>Regelmæssig defragmentering efter skema som effektivt opstartshastigheden af din PC og forbedrer præstationen af din gamle computer.</p>
        </div>
        <div class="blank"></div>
        <img src="<?php echo getStaticUrl('images/feature-tile-img-1.png') ?>" alt="">
      </div>
      <div class="unit">
        <img src="<?php echo getStaticUrl('images/feature-tile-img-2.png') ?>" alt="">
        <div class="blank"></div>
        <div class="text">
          <h3>Ideelt værktøj til dit privatliv og data</h3>
          <p>Beskytter dine vigtige filer og data mod bestjælning, tab, lækning, spyware, ransomware og andre virusser. </p>
          <p>Du behøver kun indstille et kodeord for at kryptere vigtige mapper og data.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="line"></div>

  <!-- pro-comparison start -->
  <div class="pro-comparison">
    <div class="asc">
      <h1>Driver Booster 8 PRO kan gøre endnu mere end <br> den tidligere version!</h1>
      <div class="asc-box">
        <ul>
          <li>
            <div class="po"><img src="<?php echo getStaticUrl('images/icon 1.png') ?>" alt="" /></div>
            <h2>Offline Driver Updater</h2>
            <p>Opdater dine netværksdrev selv uden internetforbindelse. </p>
          </li>
          <li>
            <div class="po"><img src="<?php echo getStaticUrl('images/icon 2.png') ?>" alt="" /></div>
            <h2>Vælg hvad du vil prioritere at opdatere</h2>
            <p>Vælg om Driver Booster skal prioritere de nyeste eller de mest stabile drev.</p>
          </li>
          <li>
            <div class="po"><img src="<?php echo getStaticUrl('images/icon 3.png') ?>" alt="" /></div>
            <h2>Hurtigere</h2>
            <p>Med 30% hurtigere opdateringer end den tidligere version sparer du endnu mere tid.</p>
          </li>
          <li>
            <div class="po"><img src="<?php echo getStaticUrl('images/icon 4.png') ?>" alt="" /></div>
            <h2>Sikrere</h2>
            <p>Med en opgraderet sikkerhedskopiering af drev, behøver du ikke bekymre dig under opdateringer.</p>
          </li>
        </ul>
      </div>
      <!-- <img src="<?= $pResUrl; ?>images/awards.png" alt="" style="margin-top: 30px;"> -->
    </div>
    <!-- <div class="wrapper">
      <h2>
        <span class="tree">Warum sollten Sie Driver </span>
        <br>
        Booster gegenüber anderen Treiber-Update-Programmen wählen?
      </h2>
      <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <thead>
          <tr>
            <th class="itema"><i class="all-icons tabicon"></i> Driver Booster</th>
            <th class="itemb"><img src="<?php echo getStaticUrl('images/vs.png') ?>" alt="" /></th>
            <th class="itemc">Andere Produkte</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="itema">
              <p>Über
                <span>
                  4.500.000
                </span>
                Treiber von 5.000 Geräteherstellern in der Datenbank.
              </p>
            </td>
            <td class="itemb">
              <img src="<?php echo getStaticUrl('images/icon-01.png') ?>" alt="" />
              <h6>Größere Treiber-Datenbank</h6>
            </td>
            <td class="itemc">
              <p>
                Unterstützt nur
                <span>
                  500.000 - 3.000.000
                </span>
                Treiber
              </p>
            </td>
          </tr>
          <tr>
            <td class="itema">
              <p>
                <span>
                  Nur verifizierte und stabile Treiber
                </span>
                die den Windows WHQL-Test und IObit Review Test bestanden haben werden angeboten.
              </p>
            </td>
            <td class="itemb">
              <img src="<?php echo getStaticUrl('images/icon-02.png') ?>" alt="" />
              <h6>Sichere Aktualisierung </h6>
            </td>
            <td class="itemc">
              <p>
                <b>
                  Bietet Treiber
                </b>
                <span>
                  NICHT immer verifiziert
                </span>
                (manchmal werden sogar Beta-Versionen angeboten).
              </p>
            </td>
          </tr>
          <tr>
            <td class="itema">
              <p>
                Verschiedene
                <span>
                  nützliche Tools
                </span>
                zur Fehlerbehebung bei Netzwerk-, Ton-, Geräte- und anderen Problemen.
              </p>
            </td>
            <td class="itemb">
              <img src="<?php echo getStaticUrl('images/icon-03.png') ?>" alt="" />
              <h6>Fehlerbehebung</h6>
            </td>
            <td class="itemc">
              <p>
                <span> KEINE Tools</span>
                zur Behebung von Geräteproblemen.
              </p>
            </td>
          </tr>
        </tbody>
      </table>
    </div> -->


  </div>
  <!-- pro-comparison end -->

  <!-- review -->
  <div class="review">
    <h2>
      <em class="tree">Det bedste drevopdateringsværktøj </em>
      <br>
      Højt anbefalet af industriens exporter og brugere

    </h2>

    <div class="wrapper">
      <div id="dg-container" class="dg-container">
        <div class="nav">
          <span class="dg-prev"></span>
          <span class="dg-next"></span>
        </div>
        <div class="content dg-wrapper">
          <dl class="reviews">
            <dt>
              <div class="img-container">
                <img src="<?php echo getStaticUrl('images/pc.png') ?>" alt="">
                <!-- <p style="text-align: center;   margin-top: 5px;  font-size: 16px;    font-weight: bold;">Media Review</p> -->
              </div>
            </dt>
            <dd>
              <p>"Driver Booster PROs enkle kernefunktionalitet er blevet endnu mere attraktiv takket være inkluderingen af flere licenser til en virkelig økonomisk pris, samt en brugerdefineret grænseflade, der gør et godt stykke arbejde ved at vise specifikke informationer om din hardware.
                Konkurrenterne Ashampoo Driver Updater og SlimWare Utilities DriverUpdate har tilsvarende funktioner, men IObit Driver Booster PRO fører klart i kategorien.""</p>
              <cite>PC Magazine</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt>
              <div class="img-container"><img src="<?php echo getStaticUrl('images/harold-barr.png') ?>" alt=""></div>
            </dt>
            <dd>
              <p>"For det første må jeg sige, at det er et meget let og nyttigt software, der er nemt at bruge. Driver booster kører i baggrunden og belaster ikke CPU eller RAM, det var i stand til at indlæse nye spil uden at lukke ned for baggrundsprocesser. Jeg plejer at køre windows-opdateringer dagligt for at få de seneste drev, driver booster opdaterede og rettede mine PC-drev ekstremt præcist endda bedre end Windows update. Jeg er virkelig imponeret over softwaren og anbefaler det varmt som et produkt. "</p>
              <cite>Dunston Diaz</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt>
              <div class="img-container"><img src="<?php echo getStaticUrl('images/anekcen.png') ?>" alt=""></div>
            </dt>
            <dd>
              <p>"Det hjalp med at løse hastighedsproblemer på min gamer laptop uden at nedbryde det. Nogle gange, når jeg har forsøgt at opdatere mine drev, er computeren brudt sammen og jeg var nødt til at formatere min computer for at gendanne funktioner, men dette skete ikke med DB8. Det er nemt at bruge og downloader hurtigt, det er det bedste værktøj på markedet hidtil! "</p>
              <cite>Carlos Alexandre Verissimo</cite>
            </dd>
          </dl>
        </div>
      </div>
      <h2 style="text-align:center;  font-size: 30px;font-weight: 700;margin:60px 0;">Anbefalet og belønnet af disse medier </h2>
      <div class="title-1"></div>
    </div>
  </div>
  <!-- end review -->



  <!-- comparison start -->
  <div class="comparison">
    <h2 class="tree">Driver Booster PRO kan gøre mere for dig</h2>
    <div class="wrapper">
      <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <thead>
          <tr>
            <th class="itema">
              <div class="name">Din nuværende version</div>
            </th>
            <th class="itemb"></th>
            <th class="itemc">
              <div class="name">Driver Booster PRO</div>
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="itema">350 millioner</td>
            <td class="itemb">
              Omfattende database som opdaterer al forældet og mindre kendte drev fra 5000+ producenter.
            </td>
            <td class="itemc">
              450 millioner
            </td>
          </tr>
          <tr>
            <td class="itema"><i class="all-icons tabicon"></i></td>
            <td class="itemb">
              Prioriter at opdatere de nyeste eller de mest stabile drev. <span style="color: #00b050;">Ny</span>
            </td>
            <td class="itemc">
              <i class="smile"></i>
            </td>
          </tr>
          <tr>
            <td class="itema"><i class="all-icons tabicon"></i></td>
            <td class="itemb">

              Hurtigere drevopdateringsproces som sparer tid.

            </td>
            <td class="itemc">
              <i class="smile"></i>
            </td>
          </tr>
          <tr>
            <td class="itema"><i class="all-icons tabicon"></i></td>
            <td class="itemb">
              Nyttige værktøjer til fejlfinding af problemer med PC-enheder.
            </td>
            <td class="itemc">
              <i class="smile"></i>
            </td>
          </tr>
          <tr>
            <td class="itema"><i class="all-icons tabicon"></i></td>
            <td class="itemb">

              Opdater drev uden internetforbindelse, især geninstallering af system. <span style="color: #00b050;">Ny</span>

            </td>
            <td class="itemc">
              <i class="smile"></i>
            </td>
          </tr>
          <tr>
            <td class="itema"><i class="all-icons tabicon"></i></td>
            <td class="itemb">

              Sikkerhedskopierer drev inden opdatering og imødekommer uventede hændelser.

            </td>
            <td class="itemc">
              <i class="smile"></i>
            </td>
          </tr>
          <tr>
            <td class="itema"><i class="all-icons tabicon"></i></td>
            <td class="itemb">

              Downloader / installerer / opdaterer drev automatisk når systemet er ledigt.

            </td>
            <td class="itemc">
              <i class="smile"></i>
            </td>
          </tr>
          <tr>
            <td class="itema"><i class="all-icons tabicon"></i></td>
            <td class="itemb">

              Prioriterer opdateringer til spilklare drev som giver den hurtigste og mest gnidningsløs spiloplevelse muligt.

            </td>
            <td class="itemc">
              <i class="smile"></i>
            </td>
          </tr>
          <tr>
            <td class="itema"><i class="all-icons tabicon"></i></td>
            <td class="itemb">
              Installerer de nødvendige spilkomponenter og forbedrer spiloplelvelsen.
            </td>
            <td class="itemc">
              <i class="smile"></i>
            </td>
          </tr>
          <tr>
            <td class="itema"><i class="all-icons tabicon"></i></td>
            <td class="itemb">
              Automatisk opdatering til nyeste version

            </td>
            <td class="itemc">
              <i class="smile"></i>
            </td>
          </tr>
          <tr class="last">
            <td class="itema"><i class="all-icons tabicon"></i></td>
            <td class="itemb">
              Gratis teknisk support 24/7
            </td>
            <td class="itemc">
              <i class="smile"></i>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <!-- comparison end -->

  <!-- service start -->
  <div class="service wrapper clearfix">
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/moneyback-big.png') ?>" alt="" /></dt>
      <dd>
        <h3>Tilfredshedsgaranti</h3>
        <p>60 dages tilfredshedsgaranti
          <br>eller pengene tilbage</p>
      </dd>
    </dl>
    <dl class="two">
      <dt><img src="<?php echo getStaticUrl('images/verified.png') ?>" alt="" /></dt>
      <dd>
        <h3>Sikker betaling</h3>
        <p> Din betaling er 100% sikker</p>
      </dd>
    </dl>
    <dl class="three">
      <dt><img src="<?php echo getStaticUrl('images/veloce.png') ?>" alt="" /></dt>
      <dd>
        <h3>Hurtig aktivering </h3>
        <p>
          Du modtager en akti-veringskode
          <br>kort efter køb.
        </p>
      </dd>
    </dl>
    <dl class="four">
      <dt><img src="<?php echo getStaticUrl('images/servizio.png') ?>" alt="" /></dt>
      <dd>
        <h3>Kundeservice</h3>
        <p>Gratis teknisk
          <br> support</p>
      </dd>
    </dl>
  </div>
  <!-- service end -->

  <!-- footer start -->
  <div class="footer">
    <div class="wrapper">
      <dl>
        <dt> Note:</dt>
        <dd>
          * Tilbud som dette kan fra tid til anden ændres uden varsel efter vores skøn.
        </dd>
        <dd>
          * IObit Software Updater PRO, Smart Defrag PRO og Protected Folder support 1 år/1 PC.
        </dd>
      </dl>
      <p class="copyright"> Copyright 2005 - 2020 IObit.Alle rettigheder forbeholdes</p>
    </div>
  </div>
  <!-- footer end -->

  <!-- floatlayer start -->
  <div id="floatlayer" class="floatlayer">
    <div class="wrapper clearfix">
      <div class="left fl">
        <img src="<?php echo getStaticUrl('images/db-gift-box.png') ?>" alt="" />
      </div>
      <div class="text fl">
        <h3>Der er kun<b>12</b> stk. tilbage</h3>
        <h2>Løs alle drevrelaterede problemer nemt!</h2>
      </div>
      <div class="price fr">
        <p><strong>169 kr.</strong> <del>1646 kr.</del></p>
        <a class="buybtn" href="https://www.iobit.com/buy.php?product=dk-db83pcisusdpf169&ref=dk_db3pcbundlexmasxr202012-i-u-t-e<?= $refStr; ?>&refs=dk_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'db3pcbundlepurchasexr2012-dk')">Køb nu</a>
      </div>
    </div>
  </div>
  <!-- floatlayer end -->

  <!-- 
  <div class="popup" id="popup">
    <div class="mask"></div>
    <div class="container">
      <div class="close"></div>
      <h2>Вы получили дополнительную скидку <b>-50 руб.</b>!</h2>
      <h3>Предложение закончится через <b>2</b><b>5</b> секунт</h3>
      <div class="content cf">
        <div class="img fl"></div>
        <div class="text fl">
          <p class="line-0">690 руб.</p>
          <p class="line-1">Только <b>640</b>руб.</p>
          <a class="buybtn" href="https://www.iobit.com/buy.php?product=ru-db83pcsdisu690&ref=ru_db83pcsdisu690purchasexmas<?php echo $refStr; ?>&aff=<?php echo $_GET['aff'] ?><?= $refStr; ?>&refs=ru_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase3pcsdisu2011-ru');">Получить сейчас</a>
        </div>
      </div>
    </div>
  </div> -->


  <script src="<?php echo $pRootUrl; ?>tpl/js/modernizr.min.js"></script>
  <script src="<?php echo $pRootUrl; ?>/tpl/js/review-3d-carousel.min.js"></script>
  <script src="<?php echo getStaticUrl('script/script.js') ?>"></script>
</body>

</html>