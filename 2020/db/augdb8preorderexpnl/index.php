<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'nldbexp_p' . $date;
  $c_name_t = 'nldbexp_t' . $date;
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

$refStr = empty($_GET['to']) ? '' : ('-' . $_GET['to']);
if(preg_match_all('/([0-9]*)\./',$_GET['ver'],$matches)){
    $ver=$matches[1][0].$matches[1][1];
    $refStr.='-'.$ver;
}
$refStr .= empty($_GET['ref']) ? '' : ('-'.$_GET['ref']);
$refStr .= empty($_GET['st']) ? '' : ('-'.$_GET['st']);
$refStr .= empty($_GET['more']) ? '' : ('-'.$_GET['more']);

$udate = empty($_GET['udata']) ? '' : $_GET['udata'];
$date_arr = json_decode(base64_decode(urldecode($udate)),true);
?>
<!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="UTF-8">
  <title>Exclusief in de voorverkoop: 70% Korting op Driver Booster 8 PRO - IObit </title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Play:wght@700&display=swap" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css') ?>" rel="stylesheet">
  <?php echo $gJavascript['public']; ?>
  <?php echo $gJavascript['head']; ?>
</head>

<body>
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <div class="header">
        <a class="logo" href="https://www.iobit.com/nl/index.php" target="_blank">
          IObit
        </a>
        <p><img src="<?php echo getStaticUrl('images/db-icon.png') ?>" /> Driver Booster 8 PRO</p>
      </div>
      <div class="offer clearfix">
        <div class="left fl">
          <img src="<?php echo getStaticUrl('images/db-box.png') ?>" alt="Driver Booster PRO" />
        </div>
        <div class="right">
          <p>Alleen in de Voorverkoop!</p>
          <h2>70% Korting op Driver Booster PRO 8</h2>
          <h4>Voor de soepelste PC en games</h4>
          <div class="price">

            <span><strong>€<b>19</b>,99</strong><del> €74,85</del></span>
            <a href="https://www.iobit.com/buy.php?product=nl-db8preorder1999&ref=nl_db8preorderexp1999<?php echo $refStr; ?>&aff=<?php echo $_GET['aff']; ?>&refs=nl_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'db8preorderexp-nl');" class="buybtn">Krijg PRO Terug</a>
          </div>
          <div class="numbox">
            <h3>
              Slechts
              <span id="topNum" class="giftNum">
                <b class="nwrap"><b class="numlist"></b></b>
                <b class="nwrap"><b class="numlist"></b></b>
              </span>
              Over
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
    <div class="message02 wrapper" data-name='animation'>
      <div class="title">
        <h2>Driver Booster PRO heeft voor u:</h2>
      </div>
      <div class="line"></div>
      <ul class="message-box">
        <li data-name='default'> <strong class="updated"><?php echo empty($date_arr['UpdDrv'])? '': $date_arr['UpdDrv']; ?></strong> Belangrijke drivers bijgewerkt</li>
        <li data-name='default'> <strong class="fixed"><?php echo empty($date_arr['FixedErr'])? '': $date_arr['FixedErr']; ?></strong> foutmeldingen verholpen </li>
        <li data-name='default'> <strong class="game"><?php $UpdSum = $date_arr['UpdCmp'] + $date_arr['UpdRdy'];echo empty($UpdSum)? '': $UpdSum; ?></strong> essentiële gamecomponenten & Game Ready Drivers bijgewerkt </li>
      </ul>
      <div class="img-box">
        <span class="computer two" data-name='default'></span>
        <img src="<?php echo getStaticUrl('images/feature-02-icon.png') ?>" alt="" class="icon three" data-name='default'>
        <img src="<?php echo getStaticUrl('images/feature-02-icon02.png') ?>" alt="" class="icon01 three" data-name='default'>
        <img src="<?php echo getStaticUrl('images/feature-02-icon03.png') ?>" alt="" class="icon02 three" data-name='default'>

      </div>
    </div>
    <div class="message01 wrapper">
      <div class="title">
        <h2>En het nieuwe Driver Booster 8 PRO</h2>
        <h4>kan nog veel meer voor u doen</h4>
      </div>
      <div class="line"></div>
      <ul class="img-box">
        <li class="one active">
          <img src="<?php echo getStaticUrl('images/feature-01-01.png') ?>" alt="" class="icon01">
          <img src="<?php echo getStaticUrl('images/feature-01-02.png') ?>" alt="" class="icon02">
        </li>
        <li class="two ">
          <img src="<?php echo getStaticUrl('images/feature-02-01.png') ?>" alt="" class="icon01">
          <img src="<?php echo getStaticUrl('images/feature-02-02.png') ?>" alt="" class="icon02">
        </li>
        <li class="three ">
          <img src="<?php echo getStaticUrl('images/feature-03-01.png') ?>" alt="" class="icon01">
          <img src="<?php echo getStaticUrl('images/feature-03-02.png') ?>" alt="" class="icon02">
        </li>
        <li class="four">
          <img src="<?php echo getStaticUrl('images/feature-04-01.png') ?>" alt="" class="icon01">
          <img src="<?php echo getStaticUrl('images/feature-04-02.png') ?>" alt="" class="icon02">
        </li>
      </ul>
      <div class="message-box">
        <dl class="active">
          <dt><i></i>Grotere Driver Database<span>50%↑</span></dt>
          <dd>
            Ondersteunt nu 4.500.000 drivers, waaronder meer zeldzame en nieuwe drivers, om uw pc soepel te laten draaien.*
              <?php if(!empty($_GET['more'])) :?>
                  <p> * <strong><?php echo $_GET['more']; ?></strong> updates die uw computer nu nodig heeft</p>
              <?php endif;?>
          </dd>
        </dl>
        <dl>
          <dt><i></i>Offline Driver Updater <span class="market">Nieuw</span></dt>
          <dd>Update netwerkdrivers zonder internetverbinding, bijvoorbeeld bij een opnieuw geïnstalleerd besturingssysteem.</dd>
        </dl>
        <dl>
          <dt><i></i>Stabielste Drivers vs. Nieuwste Drivers<span class="market_lr">alleen bij IObit</span></dt>
          <dd>Kies of drivers altijd naar de stabielste versie worden bijgewerkt, voor extra zekerheid, of naar de laatste versie, voor de nieuwste functionaliteit.</dd>
        </dl>
        <dl>
          <dt><i></i>Beter Drivers Back-uppen<span class="market">Verbeterd</span></dt>
          <dd>De geoptimaliseerde Driver Back-up garandeert een nog hoger succespercentage van back-ups en systeemherstel.</dd>
        </dl>
      </div>
    </div>

    <div class="feature-list" data-name='animation'>
      <div class="line"></div>
      <div class="both"></div>
      <div class="wrapper">
        <div class="title">
          <h2>Zonder Driver Booster PRO,</h2>
          <h4>Kunt u last krijgen van:</h4>
        </div>
        <dl class="one" data-name='default'>
          <dt><img src="<?php echo getStaticUrl('images/feature-icons01.png') ?>" alt=""></dt>
          <dd>
            <p>Geen toegang tot de juiste drivers door de kleinere database</p>
          </dd>
        </dl>
        <dl class="two" data-name='default'>
          <dt><img src="<?php echo getStaticUrl('images/feature-icons02.png') ?>" alt=""></dt>
          <dd>
            <p>Systeemcrashes door gebrek aan automatische back-ups en herstelpunten</p>
          </dd>
        </dl>
        <dl class="three" data-name='default'>
          <dt><img src="<?php echo getStaticUrl('images/feature-icons03.png') ?>" alt=""></dt>
          <dd>
            <p>Haperende games, doordat u niet de juiste gamecomponenten heeft</p>
          </dd>
        </dl>
        <dl class="four last" data-name='default'>
          <dt><img src="<?php echo getStaticUrl('images/feature-icons04.png') ?>" alt=""></dt>
          <dd>
            <p>Lange wachttijden door trager downloaden en updaten</p>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <div class="bottom-bg" data-name='animation'>
    <div class="review wrapper">
      <h2>De Betrouwbaarste Driver Updater Die Er Is</h2>
      <ul class="message">
        <li data-name='default'>
          <strong>40M+ </strong>
          Miljoen Downloads
        </li>
        <li class="center" data-name='default'>
          <strong>4.7+ </strong>
          Gebruikersoordeel
        </li>
        <li data-name='default'>
          <strong>1000+ </strong>
          Media-aanbevelingen
        </li>
      </ul>
      <div class="review-box">
        <span class="prev"></span>
        <span class="next"></span>
        <div class="light"></div>
        <div class="review-message">
          <div class="roll">
            <dl>
              <dt>Media recensie</dt>
              <dd>
                “IObit maakt allerlei programma’s en Driver Booster PRO is een van de beste. Driver Booster PRO werkt automatisch alle drivers bij en biedt meerdere functies en licentiecodes voor een goede prijs. De gebruikersinterface kan handmatig naar eigen smaak worden ingesteld wat dit programma erg overzichtelijk maakt. In het hoofdmenu kun je alle hardware gerelateerde informatie makkelijk terugvinden. Concurrenten als Ashampoo Driver Updater en Slimware Utilities DriverUpdate bieden soortgelijke functies maar Driver Booster blijft absoluut nummer één.”
              </dd>
            </dl>
            <dl>
              <dt>Klantbeoordeling</dt>
              <dd>
                “Allereerst, moet ik zeggen dat het hele lichte en gemakkelijke software is. Driver Booster draait op de achtergrond en beperkt mijn CPU en RAM niet. Ik kon de nieuwste games spelen, zonder achtergrondprocessen te moeten sluiten. Normaal gesproken draai ik Windows updates elke dag voor de laatste drivers, maar Driver Booster doet dat nu voor mij en doet het beter en nauwkeuriger dan Windows update. Ik sta versteld van de prestaties en raad dit programma ten sterkste aan.”
              </dd>
            </dl>
            <dl>
              <dt>Klantbeoordeling</dt>
              <dd>
                “Wat een fijne verrassing brengt Driver Booster. Na de installatie en scan, bleek ik van de helft van de drivers niet eens te weten dat ik ze had, laat staan dat ze een update nodig hadden. Toen de update voltooid was, leek mijn pc een complete makeover te hebben gehad. Sensationeel!”
              </dd>
            </dl>

            <dl>
              <dt>Klantbeoordeling</dt>
              <dd>
                “Werkelijk de beste driver updater die beschikbaar is. Het is gebruiksvriendelijk, heeft een simpele interface en doet zijn werk beter dan elk ander programma dat ik geprobeerd heb. Dit programma is een dikke 5 sterren waard. Aanradertje!”
              </dd>
            </dl>
            <dl>
              <dt>Klantbeoordeling</dt>
              <dd>
              “Dit programma heeft me geholpen om de traagheid van mijn gamelaptop op te lossen zonder het te laten crashen. Soms probeerde ik mijn drivers te updaten, maar crashte mijn computer en moest ik ‘m formatteren om ‘m weer te kunnen gebruiken, maar dat gebeurt niet met DB7. Met groot gebruiksgemak en snelle downloads is het duidelijk de beste driver tool die er is!”
            </dd>
            </dl>

          </div>
        </div>
        <ul>
          <li>
            <div><img src="<?php echo getStaticUrl('images/hishaam-salasa.png') ?>" alt="Hishaam Salasa"></div>
            <p>Hishaam Salasa</p>
          </li>
          <li>
            <div><img src="<?php echo getStaticUrl('images/carlos-alexandre.png') ?>" alt="Carlos Alexandre Veríssimo"></div>
            <p>Carlos Alexandre Veríssimo</p>
          </li>
          <li class="active">
            <div><img src="<?php echo getStaticUrl('images/pc.png') ?>" alt="PC Magazine"></div>
            <p>PC Magazine</p>
          </li>
          <li>
            <div><img src="<?php echo getStaticUrl('images/dunston-diaz.png') ?>" alt="Dunston Diaz"></div>
            <p>Dunston Diaz</p>
          </li>
          <li>
            <div><img src="<?php echo getStaticUrl('images/harold-barr.png') ?>" alt="Harold Barr"></div>
            <p>Harold Barr</p>
          </li>

        </ul>

      </div>
    </div>
    <!-- awards start -->
    <div class="awards wrapper">
      <h2>Internationale Awards</h2>
      <img src="<?php echo getStaticUrl('images/awards.png') ?>" alt="" />
    </div>
    <!-- awards end -->
  </div>

<!-- footer start -->
<div class="footer">
  <div class="wrapper">
    <dl>
      <dt>Opmerking:</dt>
      <dd>
         U kunt direct na de bestelling aan de slag met de RC versie van Driver Booster 8 PRO. Deze versie bevat vrijwel alle functies van de definitieve versie. Bij de officiële lancering van Driver Booster 8 PRO, laten we u weten dat u kunt updaten naar de definitieve versie.</dd>
    </dl>
    <p>Copyright © 2005 - <?php echo date('Y')?> IObit. Alle Rechten Voorbehouden</p>
  </div>
</div>
<!-- footer end -->

<!-- float start -->
<div class="floatlayer clearfix">
  <div class="wrapper clearfix">
    <div class="left fl">
      <img src="<?php echo getStaticUrl('images/fl-db-box.png')?>" alt="Driver Booster PRO"/>
    </div>
    <div class="numbox fl">
      <h3>
        <span id="botNum" class="giftNum">
          <b class="nwrap"><b class="numlist"></b></b>
          <b class="nwrap"><b class="numlist"></b></b>
        </span>
       van de 1000 over
      </h3>
    </div>
    <div class="price fr">

    <span><strong>€<b>19</b>,99</strong><del> €74,85</del></span>
    <a class="buybtn"
       href="https://www.iobit.com/buy.php?product=nl-db8preorder1999&ref=nl_db8preorderexp1999<?php echo $refStr; ?>&aff=<?php echo $_GET['aff'];?>&refs=nl_purchase_db"
       onclick="ga('send', 'event', 'dbbuy', 'buy', 'db8preorderexp-nl');">
      Bestel Nu
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