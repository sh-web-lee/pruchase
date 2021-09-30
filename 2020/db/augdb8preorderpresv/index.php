<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'sv_augdb8preorderpresv_p' . $date;
  $c_name_t = 'sv_augdb8preorderpresv_t' . $date;
  if ($_COOKIE[$c_name] === null) {
    $totalNum = $packsNum = rand(64, 98);
    setcookie($c_name, $packsNum, time() + 3600 * 24);
    setcookie($c_name_t, $totalNum, time() + 3600 * 24);
  } else {
    if (intval($_COOKIE[$c_name]) <= 0) {
      $packsNum = 0;
      setcookie($c_name, $packsNum, time() + 3600 * 24);
    } else {
      $packsNum = $_COOKIE[$c_name] - 1;
      setcookie($c_name, $packsNum, time() + 3600 * 24);
    }
  }
  echo json_encode(array('packsNum' => $packsNum));
  exit();
}

$viewNum = rand(99, 156);
if ($_GET['action'] == 'getViewNum') {
  echo $viewNum;
  exit();
}
include $pRootUrl . 'include/common.inc.php';

function paramDeal($num)
{
  return (intval($num) > 0) ? ('<span class="dataNum">' . number_format(intval($num)) . '</span>') : '';
}

$paramData = json_decode(base64_decode($_GET['udata']));

$refStr = empty($_GET['to']) ? '' : ('-' . $_GET['to']);
if (preg_match_all('/([0-9]*)\./', $_GET['ver'], $matches)) {
    $ver = $matches[1][0] . $matches[1][1];
    $refStr .= '-' . $ver;
}
$refStr .= empty($_GET['instd']) ? '' : ('-' . $_GET['instd']);
$refStr .= empty($_GET['finstd']) ? '' : ('-' . $_GET['finstd']);
$refStr .= empty($_GET['ref']) ? '' : ('-' . $_GET['ref']);
$refStr .= empty($_GET['st']) ? '' : ('-' . $_GET['st']);
?>
<!DOCTYPE html>
<html lang="sv">

<head>
  <meta charset="UTF-8">
  <title>Betala 0 kr för att få den senaste versionen av Driver Booster 8 PRO - IObit</title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css') ?>" rel="stylesheet">
  <?php echo $gJavascript['public']; ?>
  <?php echo $gJavascript['head']; ?>
</head>

<body>
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <div class="header">
        <a class="logo" href="https://www.iobit.com/de/index.php" target="_blank">
          IObit
        </a>
        <p><img src="<?php echo getStaticUrl('images/db-icon.png') ?>" /> Driver Booster 8 PRO</p>
      </div>
      <div class="offer clearfix">
        <div class="left fl">
          <img src="<?php echo getStaticUrl('images/db-box.png') ?>" alt="Driver Booster PRO" />
        </div>
        <div class="right">
          <p>Förköp Börjar</p>
          <h2>Uppgradera till Den Senaste PRO Utgåvan</h2>
          <h4>för Högsta Prestanda för Dator och Spel</h4>
          <div class="price">
            <span>Förköp <br> Pris:</span>
            <strong>0kr <sup>*</sup></strong>
            <a class="buybtn" href="https://www.iobit.com/buy.php?product=sv-db8preorder&ref=sv_db8preorder<?php echo $refStr; ?>&aff=<?php echo $_GET['aff']; ?>&refs=sv_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'db8preorderpre-sv');">Förbeställ Nu</a>
          </div>
          <div class="numbox">
            <h3>
              <span id="topNum" class="giftNum">
                <b class="nwrap"><b class="numlist"></b></b>
                <b class="nwrap"><b class="numlist"></b></b>
              </span>
              50 Kvar Nu
            </h3>
            <div class="bar">
              <div class="barbox"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->
  <div class="feature">
    <div class="message01 wrapper">
      <div class="title">
        <h4>Driver Booster 8 PRO är </h4>
        <h2>Nyare och Bättre</h2>
      </div>
      <div class="line"></div>
      <div class="message-box">
        <ul class="img-box">
          <li class="icon01">
            <img src="<?php echo getStaticUrl('images/feature-04-01.png') ?>" alt="">
          </li>
          <li class="icon02">
            <img src="<?php echo getStaticUrl('images/feature-03-01.png') ?>" alt="">
          </li>
        </ul>
        <dl class='one'>
          <dt><i></i>
            <em>
              Större
            </em>
            Drivrutinsdatabas
            <span class='soportes red_soportes'>50% <img src="<?php echo getStaticUrl('images/subir.png') ?>" alt=""></span></dt>
          <dd>Stöder 4500 000+ drivrutiner nu och ger exakt matchade uppdateringar för alla föråldrade, felaktiga eller saknade drivrutiner.</dd>
        </dl>
        <dl class='two'>
          <dt><i></i>
            <em>
              Smartare
            </em>
            Uppdateringsläge
            <span class='soportes green_soportes'>Ny </span></dt>
          <dd>Ge uppdateringen till dem mest stabila drivrutiner som är skräddarsydda för vem som prioriterar dators stabilitet eller dem senaste drivrutinerna som är skräddarsydda för vem som prioriterar nya funktioner.
            <br />
            <div class='market'>unik på marknad</div>
          </dd>
        </dl>
        <dl class='three'>
          <dt><i></i>
            <em>
              Enklare
            </em>
            Offlineuppdatering
            <span class='soportes green_soportes'>Ny</span></dt>
          <dd>Uppdatera och installera nätverksdrivrutiner utan internetuppkoppling, särskilt för det ominstallerade eller uppgraderade systemet.</dd>
        </dl>
        <dl class='four'>
          <dt><i></i>
            <em>
              Säkrare
            </em>
            Säkerhetskopiering av drivrutiner
            <span class='soportes red_soportes'>Förbättrad</span></dt>
          <dd>Den fullt optimerade Driver Backup garanterar en högre framgångsgrad för drivrutinsbackup och återställning i Windows 10. </dd>
        </dl>

      </div>
    </div>
    <div class="feature-list" data-name='animation'>
      <div class="line"></div>
      <div class="both"></div>
      <div class="wrapper">
        <h2>Du Kommer att Njuta av ALLA Fördelar av PRO</h2>
        <div class='current_Version'>
        Driver Booster 8 FREE
        </div>
        <div class='driver_Booster'>
          <p>
            Driver Booster 8<br /> PRO<br />
            <span class='soportes green_soportes'>Ny </span>
          </p>
        </div>
        <ul class='benefits-ul'>
          <li>
            <i class='_icon'></i>
            <span>Sök föråldrade & saknade drivrutiner automatiskt</span>
            <div class='_booster'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
            <div class='_version'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
          </li>
          <li>
            <i class='_icon'></i>
            <span>Uppdatera föråldrade drivrutin med 1 klick</span>
            <div class='_booster'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
            <div class='_version'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">

            </div>
          </li>
          <li>
            <i class='_icon'></i>
            <span>Enorm databas med 4500 000+ drivrutiner</span>
            <div class='_booster'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
            <div class='_version'>
              <img src="<?php echo getStaticUrl('images/false.png') ?>" alt="">

            </div>
          </li>
          <li>
            <i class='_icon'></i>
            <span>Uppdatera och installera nätverksdrivrutiner offline</span>
            <div class='_booster'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
            <div class='_version'>
              <img src="<?php echo getStaticUrl('images/false.png') ?>" alt="">
            </div>
          </li>
          <li>
            <i class='_icon'></i>
            <span>Uppdatera drivrutiner Automatiskt när systemet är inaktivt</span>
            <div class='_booster'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
            <div class='_version'>
              <img src="<?php echo getStaticUrl('images/false.png') ?>" alt="">

            </div>
          </li>
          <li>
            <i class='_icon'></i>
            <span>Full hastighet för nedladdning och uppdatering utan begränsning</span>
            <div class='_booster'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
            <div class='_version'>
              <img src="<?php echo getStaticUrl('images/false.png') ?>" alt="">

            </div>
          </li>
          <li>
            <i class='_icon'></i>
            <span>Säkerhetskopiera drivrutiner och skapa återställningspunkt automatiskt</span>
            <div class='_booster'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
            <div class='_version'>
              <img src="<?php echo getStaticUrl('images/false.png') ?>" alt="">

            </div>
          </li>
          <li>
            <i class='_icon'></i>
            <span>Fixa enkelt enhetsfel för bättre prestanda</span>
            <div class='_booster'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
            <div class='_version'>
              <img src="<?php echo getStaticUrl('images/false.png') ?>" alt="">

            </div>
          </li>
          <li>
            <i class='_icon'></i>
            <span>Prioritet att uppdatera drivrutiner som ger förtur åt stabilitet</span>
            <div class='_booster'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
            <div class='_version'>
              <img src="<?php echo getStaticUrl('images/false.png') ?>" alt="">

            </div>
          </li>
          <li>
            <i class='_icon'></i>
            <span>Nödvändiga komponenter för smidigare spel</span>
            <div class='_booster'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
            <div class='_version'>
              <img src="<?php echo getStaticUrl('images/false.png') ?>" alt="">

            </div>
          </li>
          <li>
            <i class='_icon'></i>
            <span>Prioritet att uppdatera dem senaste spelklara drivrutinerna</span>
            <div class='_booster'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
            <div class='_version'>
              <img src="<?php echo getStaticUrl('images/false.png') ?>" alt="">

            </div>
          </li>
        </ul>

      </div>
    </div>
  </div>
  <div class="bottom-bg" data-name='animation'>
    <div class="review wrapper">
      <h2>Det är den Bästa Drivrutinuppdateraren Över Hela Världen</h2>
      <ul class="message">
        <li data-name='default'>
          <strong>40M+ </strong>
          Nedladdningar
        </li>
        <li class="center" data-name='default'>
          <strong>4.7+ </strong>
          Användares Betyg
        </li>
        <li data-name='default'>
          <strong>1000+ </strong>
          Medierrekommendationer
        </li>
      </ul>
      <div class="review-box">
        <span class="prev"></span>
        <span class="next"></span>
        <div class="light"></div>
        <div class="review-message">
          <div class="roll">
            <dl>
              <dt>Användares omdömen</dt>
              <dd>IObit tillverkar många olika verktyg, och Driver Booster PRO, som automatiskt uppdaterar dina drivrutiner är ett av dem bästa.</dd>
            </dl>
            <dl>
              <dt>Användares omdömen</dt>
              <dd>Med Driver Booster, kan jag lätt veta vilka drivrutiner som är inaktuella och kan enkelt uppdatera dem. Dessutom hjälper det mig att fixa ljudfel, nätverksfel, enhetsfel osv.</dd>
            </dl>
            <dl>
              <dt>Användares omdömen</dt>
              <dd>Detta är ett av de bästa uppdateringsprogrammen. Microsoft har till och med vilselett mig genom att föreslå uppdateringar som inte skulle fungera med min maskin. Detta program visste vilka uppdateringar jag behövde utan några konflikter.</dd>
            </dl>
            <dl>
              <dt>Användares omdömen</dt>
              <dd>Driver booster är en fantastisk applikation. För alla som har en hel del applikationer och enheter, och som inte har tid att manuellt uppdatera dem, rekommenderar jag starkt Driver Booster, det hjälper mig att uppdatera drivrutiner snabbt och enkelt.</dd>
            </dl>

          </div>
        </div>
        <ul>
          <li>
            <div><img src="<?php echo getStaticUrl('images/dunston-diaz.png') ?>" alt="Adam Backlund"></div>
            <p>Adam Backlund</p>
          </li>
          <li class="active">
            <div><img src="<?php echo getStaticUrl('images/pc.png') ?>" alt="PC Magazine"></div>
            <p>PC Magazine</p>
          </li>
          <li>
            <div><img src="<?php echo getStaticUrl('images/myo-thuya.png') ?>" alt="Myo Thuya"></div>
            <p>Myo Thuya</p>
          </li>
          <li>
            <div><img src="<?php echo getStaticUrl('images/wayne-bowler.png') ?>" alt="Wayne Bowler"></div>
            <p>Wayne Bowler</p>
          </li>

        </ul>

      </div>
    </div>
    <!-- awards start -->
    <div class="awards wrapper">
      <h2>Världsomspännande utmärkelser</h2>
      <img src="<?php echo getStaticUrl('images/awards.png') ?>" alt="" />
    </div>
    <!-- awards end -->
  </div>

  <!-- footer start -->
  <div class="footer">
    <div class="wrapper">
      <dl>
        <dt>Anmärkning:</dt>
        <dd>
          *. I slutet av 30 dagars gratis provperiod debiteras ditt kreditkort eller PayPalkonto automatiskt 299Kr. Denna 66% rabatt från det ursprungliga priset på 899kr är bonus endast för förbeställningar!
        </dd>
        <dd>*.Om du inte är nöjd kan du avbryta beställningen inom 30 dagar utan att betala en avgift.</dd>
      </dl>
      <p>Copyright © 2005 - <?php echo date('Y') ?> IObit. Alla rättigheter förbehållna</p>
    </div>
  </div>
  <!-- footer end -->

  <!-- float start -->
  <div class="floatlayer clearfix">
    <div class="wrapper clearfix">
      <div class="left fl">
        <img src="<?php echo getStaticUrl('images/fl-db-box.png') ?>" alt="Driver Booster PRO" />
      </div>
      <div class="numbox fl">
        <h3>
          <span id="botNum" class="giftNum">
            <b class="nwrap"><b class="numlist"></b></b>
            <b class="nwrap"><b class="numlist"></b></b>
          </span>
          av 1000 platser kvar nu 
        </h3>
      </div>
      <div class="price fr">
        <strong>0kr <sup>*</sup></strong>
        <span></span>
        <a class="buybtn" href="https://www.iobit.com/buy.php?product=sv-db8preorder&ref=sv_db8preorder<?php echo $refStr; ?>&aff=<?php echo $_GET['aff']; ?>&refs=sv_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'db8preorderpre-sv');">
          Förbeställ Nu
        </a>
      </div>
    </div>
  </div>
  <!-- float end -->

  <script>
    refStr = '<?php echo $refStr; ?>';
  </script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js') ?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js') ?>"></script>
</body>

</html>