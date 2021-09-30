<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'dkdb8preorder_p' . $date;
  $c_name_t = 'dkdb8preorder_t' . $date;
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
<html lang="dk">

<head>
  <meta charset="UTF-8">
  <title>Hent Driver Booster 8 PRO for 0 kr. </title>
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
          <p>Forsalget er startet</p>
          <h2>Opgrader til den seneste PRO-udgave</h2>
          <h4>Boost din PC og spilpræstation</h4>
          <div class="price">
            <span>Forsalg <br> Pris:</span>
            <strong>0 kr. <sup>*</sup></strong>
            <a class="buybtn" href="https://www.iobit.com/buy.php?product=dk-db8preorder&ref=dk_db8preorder<?php echo $refStr; ?>&aff=<?php echo $_GET['aff']; ?>&refs=dk_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'db8preorder-dk');">Opgrader nu</a>
          </div>
          <div class="numbox">
            <h3>
              <span id="topNum" class="giftNum">
                <b class="nwrap"><b class="numlist"></b></b>
                <b class="nwrap"><b class="numlist"></b></b>
              </span>
              58 stk. tilbage
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
        <h4>Driver Booster 8 PRO er</h4>
        <h2> nyere og bedre</h2>
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
              Større
            </em>
            drev-database
            <span class='soportes red_soportes'>50% <img src="<?php echo getStaticUrl('images/subir.png') ?>" alt=""></span></dt>
          <dd>Understøtter 4.500.000+ drev og viser præcist kompatible opdateringer for al forældet, ikke-kompatible eller manglende drev.</dd>
        </dl>
        <dl class='two'>
          <dt><i></i>
            <em>
              Smartere
            </em>
            opdateringstilstand
            <span class='soportes green_soportes'>Ny </span></dt>
          <dd>Giver mulighed for at opdatere til de mest stabile drev til dem, der prioriterer PC-stabilitet og til de nyeste drev til dem, der prioriterer nye funktioner.
            <br />
            <div class='market'>Unik på markedet</div>
          </dd>
        </dl>
        <dl class='three'>
          <dt><i></i>
            <em>
              Nemmere
            </em>
            offline opdaterin
            <span class='soportes green_soportes'>Ny </span></dt>
          <dd>Opdater og installer netværksdrev uden internetforbindelse ved geninstallering eller systemopgradering.</dd>
        </dl>
        <dl class='four'>
          <dt><i></i>
            <em>
              Sikrere
            </em>
            drev-backup
            <span class='soportes red_soportes'>Forbedre</span></dt>
          <dd>Optimeret sikkerhedskopiering af drev garanterer en højere succesrate af sikkerhedskopiering og gendannelse i Windows 10. </dd>
        </dl>

      </div>
    </div>
    <div class="feature-list" data-name='animation'>
      <div class="line"></div>
      <div class="both"></div>
      <div class="wrapper">
        <h2>Du kan få adgang til alle PRO-fordelene</h2>
        <div class='current_Version'>
        Din seneste version
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
            <span>Scan automatisk efter forældede og manglende drev</span>
            <div class='_booster'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
            <div class='_version'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
          </li>
          <li>
            <i class='_icon'></i>
            <span>Opdater forældede drev med ét klik</span>
            <div class='_booster'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
            <div class='_version'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">

            </div>
          </li>
          <li>
            <i class='_icon'></i>
            <span>Stor database med support til 4.500.000+ drev</span>
            <div class='_booster'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
            <div class='_version'>
              <img src="<?php echo getStaticUrl('images/false.png') ?>" alt="">

            </div>
          </li>
          <li>
            <i class='_icon'></i>
            <span>Opdater og installer netværksdrev offline</span>
            <div class='_booster'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
            <div class='_version'>
              <img src="<?php echo getStaticUrl('images/false.png') ?>" alt="">
            </div>
          </li>
          <li>
            <i class='_icon'></i>
            <span>Automatisk opdatering af drev, når systemet er inaktivt</span>
            <div class='_booster'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
            <div class='_version'>
              <img src="<?php echo getStaticUrl('images/false.png') ?>" alt="">

            </div>
          </li>
          <li>
            <i class='_icon'></i>
            <span>Maksimal download- og opdateringshastighed uden begrænsning</span>
            <div class='_booster'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
            <div class='_version'>
              <img src="<?php echo getStaticUrl('images/false.png') ?>" alt="">

            </div>
          </li>
          <li>
            <i class='_icon'></i>
            <span>Automatisk backup af drev og oprettelse af gendannelsespunkt</span>
            <div class='_booster'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
            <div class='_version'>
              <img src="<?php echo getStaticUrl('images/false.png') ?>" alt="">

            </div>
          </li>
          <li>
            <i class='_icon'></i>
            <span>Ret enhedsfejl nemt for en optimeret ydeevne</span>
            <div class='_booster'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
            <div class='_version'>
              <img src="<?php echo getStaticUrl('images/false.png') ?>" alt="">

            </div>
          </li>
          <li>
            <i class='_icon'></i>
            <span>Mulighed for at prioritere opdatering til stabile drev</span>
            <div class='_booster'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
            <div class='_version'>
              <img src="<?php echo getStaticUrl('images/false.png') ?>" alt="">

            </div>
          </li>
          <li>
            <i class='_icon'></i>
            <span>Nødvendige komponenter for mere gnidningsfrie spil</span>
            <div class='_booster'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
            <div class='_version'>
              <img src="<?php echo getStaticUrl('images/false.png') ?>" alt="">

            </div>
          </li>
          <li>
            <i class='_icon'></i>
            <span>Prioriteret opdatering af de seneste spilklare drev</span>
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
      <h2>Den bedste Driver Updater verden over</h2>
      <ul class="message">
        <li data-name='default'>
          <strong>40M+ </strong>
          Installationer
        </li>
        <li class="center" data-name='default'>
          <strong>4.7+ </strong>
          Brugervurdering
        </li>
        <li data-name='default'>
          <strong>1000+ </strong>
          Anbefalinger i <br />medierne
        </li>
      </ul>
      <div class="review-box">
        <span class="prev"></span>
        <span class="next"></span>
        <div class="light"></div>
        <div class="review-message">
          <div class="roll">
            <dl>
              <dt>Medieanmeldelser</dt>
              <dd>"Driver Booster PROs enkle kernefunktionalitet er blevet endnu mere attraktiv takket være inkluderingen af flere licenser til en virkelig økonomisk pris, samt en brugerdefineret grænseflade, der gør et godt stykke arbejde ved at vise specifikke informationer om din hardware. 
Konkurrenterne Ashampoo Driver Updater og SlimWare Utilities DriverUpdate har tilsvarende funktioner, men IObit Driver Booster PRO fører klart i kategorien."</dd>
            </dl>
            <dl>
              <dt>Brugeranmeldelser</dt>
              <dd>Det hjalp med at løse hastighedsproblemer på min gamer laptop uden at nedbryde det. Nogle gange, når jeg har forsøgt at opdatere mine drev, er computeren brudt sammen og jeg var nødt til at formatere min computer for at gendanne funktioner, men dette skete ikke med DB7. Det er nemt at bruge og downloader hurtigt, det er det bedste værktøj på markedet hidtil! </dd>
            </dl>
            <dl>
              <dt>Brugeranmeldelser</dt>
              <dd>Virkelig den bedste driver updater der er på markedet. Det er brugervenligt, har en simpel brugerflade der er nem at bruge og det klarer arbejdet bedre end nogen applikation, jeg tidligere har brugt. Dette program er fem stjerner værd. Varmt anbefalet. </dd>
            </dl>
            <dl>
              <dt>Brugeranmeldelser</dt>
              <dd>Sikke en overraskelse at modtage Driver Booster fra IObit. Så snart det var installeret begyndte opdateringerne. Jeg anede ikke jeg havde så mange programmer på computeren og slet ikke at de behøvede opgraderinger. Da opdateringerne afsluttede, var det som om, min PC havde fået en komplet makeover. Fantastisk!</dd>
            </dl>
            <dl>
              <dt>Brugeranmeldelser</dt>
              <dd>For det første må jeg sige, at det er et meget let og nyttigt software, der er nemt at bruge. Driver booster kører i baggrunden og belaster ikke CPU eller RAM, det var i stand til at indlæse nye spil uden at lukke ned for baggrundsprocesser. Jeg plejer at køre windows-opdateringer dagligt for at få de seneste drev, driver booster opdaterede og rettede mine PC-drev ekstremt præcist endda bedre end Windows update. Jeg er virkelig imponeret over softwaren og anbefaler det varmt som et produkt.</dd>
            </dl>


          </div>
        </div>
        <ul>
          <li>
            <div><img src="<?php echo getStaticUrl('images/harold-barr.png') ?>" alt="Harold Barr"></div>
            <p>Harold Barr</p>
          </li>
          <li>
            <div><img src="<?php echo getStaticUrl('images/dunston-diaz.png') ?>" alt="Dunston Diaz"></div>
            <p>Dunston Diaz</p>
          </li>
          <li class="active">
            <div><img src="<?php echo getStaticUrl('images/pc.png') ?>" alt="PC Magazine"></div>
            <p>PC Magazine</p>
          </li>
          <li>
            <div><img src="<?php echo getStaticUrl('images/carlos-alexandre.png') ?>" alt="Carlos Alexandre Verissimo"></div>
            <p>Carlos Alexandre Verissimo</p>
          </li>
          <li>
            <div><img src="<?php echo getStaticUrl('images/hishaam-salasa.png') ?>" alt="Hishaam Salasa"></div>
            <p>Hishaam Salasa</p>
          </li>

        </ul>

      </div>
    </div>
    <!-- awards start -->
    <div class="awards wrapper">
      <h2>Priser fra hele verden</h2>
      <img src="<?php echo getStaticUrl('images/awards.png') ?>" alt="" />
    </div>
    <!-- awards end -->
  </div>

  <!-- footer start -->
  <div class="footer">
  <div class="wrapper">
    <dl>
      <dt>Bemærk:</dt>
      <dd>
        *.Ved slutningen af din 30 dages gratis prøveperiode, vil dit kort eller Paypal-konto blive debiteret 199 kr. automatisk. 70% fra originalprisen på 679 kr. gælder kun forudbestillinger!
      </dd>
      <dd>*.Er du utilfreds, kan du annullere din ordre inden for 30 dage uden at betale gebyr.</dd>
    </dl>
    <p>Copyright © 2005 - <?php echo date('Y')?> IObit. Rettigheder forbeholdes</p>
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
          ud af 1000 stk. tilbage
        </h3>
      </div>
      <div class="price fr">
        <strong>0 kr. <sup>*</sup></strong>
        <span></span>
        <a class="buybtn" href="https://www.iobit.com/buy.php?product=dk-db8preorder&ref=dk_db8preorder<?php echo $refStr; ?>&aff=<?php echo $_GET['aff']; ?>&refs=dk_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'db8preorder-dk');">
          Opgradér nu
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