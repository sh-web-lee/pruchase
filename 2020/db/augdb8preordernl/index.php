<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
    $pResUrl = './';
    $pRootUrl = '../../../';
}
if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'nldbpre_p' . $date;
  $c_name_t='nldbpre_t' . $date;
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=rand(78,98);
    setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
    setcookie($c_name_t,$totalNum, time() + 3600 * 24 *2);
  } else {
    if (intval($_COOKIE[$c_name]) <= 0) {
      $packsNum = 0;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    } else {
      $packsNum = $_COOKIE[$c_name] - 1;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    }
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

$viewNum=rand(99,156);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}
include $pRootUrl.'include/common.inc.php';

function paramDeal($num){
  return (intval($num)>0)?('<span class="dataNum">'.number_format(intval($num)).'</span>'):'';
}

$paramData=json_decode(base64_decode($_GET['udata']));

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
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <title>Exclusief in de voorverkoop: 70% Korting op Driver Booster 8 PRO - IObit</title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Play:wght@700&display=swap" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
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
        <p><img src="<?php echo getStaticUrl('images/db-icon.png')?>"/> Driver Booster 8 PRO</p>
      </div>
      <div class="offer clearfix">
        <div class="left fl">
          <img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="Driver Booster PRO"/>
        </div>
        <div class="right">
          <p>Alleen in de Voorverkoop!</p>
          <h2>70% Korting op Driver Booster PRO 8</h2>
          <h4>Voor de soepelste PC en games</h4>
          <div class="price">
           
           <span><strong>€<b>19</b>,99</strong><del> €74,85</del></span>
            <a href="https://www.iobit.com/buy.php?product=nl-db8preorder1999&ref=nl_db8preorder1999<?php echo $refStr; ?>&aff=<?php echo $_GET['aff'];?>&refs=nl_purchase_db"
               onclick="ga('send', 'event', 'dbbuy', 'buy', 'db8preorder-nl');" class="buybtn">Bestel Nu</a>
          </div>
          <div class="numbox">
            <h3>
              Slechts
              <span id="topNum" class="giftNum">
                <b class="nwrap"><b class="numlist"></b></b>
                <b class="nwrap"><b class="numlist"></b></b>
              </span>
              over
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
        <h4>Driver Booster 8 PRO is</h4>
        <h2> Vernieuwd en Verbeterd</h2>
      </div>
      <div class="line"></div>
      <div class="message-box">
        <ul class="img-box">
          <li class="icon01">
            <img src="<?php echo getStaticUrl('images/feature-04-01.png') ?>" alt="" >
          </li>
          <li class="icon02">
            <img src="<?php echo getStaticUrl('images/feature-03-01.png') ?>" alt="">
          </li>
        </ul>
        <dl class='one'>
          <dt><i></i>
            <em>
              Grotere
            </em>
            Driver Database
            <span class='soportes red_soportes'>50% <img src="<?php echo getStaticUrl('images/subir.png') ?>" alt=""></span></dt>
          <dd>Ondersteunt nu 4.500.000+ drivers, en selecteert de meest geschikte updates voor alle verouderde, niet-werkende en missende drivers.</dd>
        </dl>
        <dl class='two'>
          <dt><i></i>
            <em>
              Slimmere
            </em>
            Update Modus 
            <span class='soportes green_soportes'>Nieuw </span></dt>
          <dd>Kies of Driver Booster PRO u altijd de stabielste drivers geeft voor extra zekerheid, of de nieuwste voor de allernieuwste functionaliteit. 
            <br/>
            <div class='market'>alleen bij IObit</div>
          </dd>
        </dl>
        <dl class='three'>
          <dt><i></i>
            <em>
              Eenvoudig
            </em>
            Offline Updaten
            <span class='soportes green_soportes'>Nieuw </span></dt>
          <dd>Update en installeer netwerkdrivers zonder internetverbinding, bijvoorbeeld bij een opnieuw geïnstalleerd besturingssysteem.</dd>
        </dl>
        <dl class='four'>
          <dt><i></i>
            <em>
              Betere
            </em>
            Driver Back-up
            <span class='soportes red_soportes'>Verbeterd</span></dt>
          <dd>De geoptimaliseerde Driver Back-up garandeert een nog hoger succespercentage van back-ups en systeemherstel. </dd>
        </dl>

      </div>
    </div>
    <div class="feature-list" data-name='animation'>
      <div class="line"></div>
      <div class="both"></div>
      <div class="wrapper">
        <h2>Profiteer van alle PRO-functies</h2>
        <div class='current_Version'>
          Uw Huidige Versie
        </div>
        <div class='driver_Booster'>

          <p>
            Driver Booster 8<br /> PRO<br />
            <span class='soportes green_soportes'>Nieuw </span>
          </p>
        </div>
        <ul class='benefits-ul'>
          <li>
            <i class='_icon'></i>
            <span>Scan automatisch verouderde & missende drivers</span>
            <div class='_booster'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
            <div class='_version'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
          </li>
          <li>
            <i class='_icon'></i>
            <span>In 1 klik verouderde drivers bijwerken</span>
            <div class='_booster'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
            <div class='_version'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">

            </div>
          </li>
          <li>
            <i class='_icon'></i>
            <span>Gigantische database met 4.500.000+ drivers</span>
            <div class='_booster'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
            <div class='_version'>
              <img src="<?php echo getStaticUrl('images/false.png') ?>" alt="">

            </div>
          </li>
          <li>
            <i class='_icon'></i>
            <span>Offline netwerkdrivers installeren en updaten</span>
            <div class='_booster'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
            <div class='_version'>
              <img src="<?php echo getStaticUrl('images/false.png') ?>" alt="">
            </div>
          </li>
          <li>
            <i class='_icon'></i>
            <span>Automatisch drivers updaten als het systeem inactief is</span>
            <div class='_booster'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
            <div class='_version'>
              <img src="<?php echo getStaticUrl('images/false.png') ?>" alt="">

            </div>
          </li>
          <li>
            <i class='_icon'></i>
            <span>Maximale download- & updatesnelheid</span>
            <div class='_booster'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
            <div class='_version'>
              <img src="<?php echo getStaticUrl('images/false.png') ?>" alt="">

            </div>
          </li>
          <li>
            <i class='_icon'></i>
            <span>Automatisch drivers back-uppen & herstelpunten aanmaken</span>
            <div class='_booster'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
            <div class='_version'>
              <img src="<?php echo getStaticUrl('images/false.png') ?>" alt="">

            </div>
          </li>
          <li>
            <i class='_icon'></i>
            <span>Verhelp eenvoudig apparaatfouten</span>
            <div class='_booster'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
            <div class='_version'>
              <img src="<?php echo getStaticUrl('images/false.png') ?>" alt="">

            </div>
          </li>
          <li>
            <i class='_icon'></i>
            <span>Optie om alleen de stabielste versies te krijgen</span>
            <div class='_booster'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
            <div class='_version'>
              <img src="<?php echo getStaticUrl('images/false.png') ?>" alt="">

            </div>
          </li>
          <li>
            <i class='_icon'></i>
            <span>Essentiële componenten om soepel te gamen</span>
            <div class='_booster'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
            <div class='_version'>
              <img src="<?php echo getStaticUrl('images/false.png') ?>" alt="">

            </div>
          </li>
          <li>
            <i class='_icon'></i>
            <span>Voorrang op de nieuwste Game Ready Drivers</span>
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
      <h2>De Betrouwbaarste Driver Updater Die Er Is</h2>
      <ul class="message">
        <li data-name='default'>
          <strong>40 </strong>
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
              <dd>IObit maakt allerlei programma’s en Driver Booster PRO is een van de beste. Driver Booster PRO werkt automatisch alle drivers bij en biedt meerdere functies en licentiecodes voor een goede prijs. De gebruikersinterface kan handmatig naar eigen smaak worden ingesteld wat dit programma erg overzichtelijk maakt. In het hoofdmenu kun je alle hardware gerelateerde informatie makkelijk terugvinden. Concurrenten als Ashampoo Driver Updater en Slimware Utilities DriverUpdate bieden soortgelijke functies maar Driver Booster blijft absoluut nummer één.”</dd>
            </dl>
            <dl>
              <dt>Klantbeoordeling</dt>
              <dd>Dit programma heeft me geholpen om de traagheid van mijn gamelaptop op te lossen zonder het te laten crashen. Soms probeerde ik mijn drivers te updaten, maar crashte mijn computer en moest ik ‘m formatteren om ‘m weer te kunnen gebruiken, maar dat gebeurt niet met DB7. Met groot gebruiksgemak en snelle downloads is het duidelijk de beste driver tool die er is!”</dd>
            </dl>
            <dl>
              <dt>Klantbeoordeling</dt>
              <dd>Wat een fijne verrassing brengt Driver Booster. Na de installatie en scan, bleek ik van de helft van de drivers niet eens te weten dat ik ze had, laat staan dat ze een update nodig hadden. Toen de update voltooid was, leek mijn pc een complete makeover te hebben gehad. Sensationeel!”</dd>
            </dl>

            <dl>
              <dt>Klantbeoordeling</dt>
              <dd>Werkelijk de beste driver updater die beschikbaar is.  Het is gebruiksvriendelijk, heeft een simpele interface en doet zijn werk beter dan elk ander programma dat ik geprobeerd heb. Dit programma is een dikke 5 sterren waard. Aanradertje!”</dd>
            </dl>
            <dl>
              <dt>Klantbeoordeling</dt>
              <dd>Allereerst, moet ik zeggen dat het hele lichte en gemakkelijke software is. Driver Booster draait op de achtergrond en beperkt mijn CPU en RAM niet. Ik kon de nieuwste games spelen, zonder achtergrondprocessen te moeten sluiten. Normaal gesproken draai ik Windows updates elke dag voor de laatste drivers, maar Driver Booster doet dat nu voor mij en doet het beter en nauwkeuriger dan Windows update. Ik sta versteld van de prestaties en raad dit programma ten sterkste aan.”</dd>
            </dl>

          </div>
        </div>
        <ul>
          <li>
            <div><img src="<?php echo getStaticUrl('images/hishaam-salasa.png')?>" alt="Hishaam Salasa"></div>
            <p>Hishaam Salasa</p>
          </li>
           <li>
            <div><img src="<?php echo getStaticUrl('images/dunston-diaz.png')?>" alt="Dunston Diaz"></div>
            <p>Dunston Diaz</p>
          </li>
          <li class="active">
            <div><img src="<?php echo getStaticUrl('images/pc.png')?>" alt="PC Magazine"></div>
            <p>PC Magazine</p>
          </li>
           <li>
            <div><img src="<?php echo getStaticUrl('images/carlos-alexandre.png')?>" alt="Carlos Alexandre Veríssimo"></div>
            <p>Carlos Alexandre Veríssimo</p>
          </li>
           <li>
            <div><img src="<?php echo getStaticUrl('images/harold-barr.png')?>" alt="Harold Barr"></div>
            <p>Harold Barr</p>
          </li>
           
        </ul>

      </div>
    </div>
    <!-- awards start -->
    <div class="awards wrapper">
      <h2>Internationale Awards</h2>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
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
       href="https://www.iobit.com/buy.php?product=nl-db8preorder1999&ref=nl_db8preorder1999<?php echo $refStr; ?>&aff=<?php echo $_GET['aff'];?>&refs=nl_purchase_db"
       onclick="ga('send', 'event', 'dbbuy', 'buy', 'db8preorder-nl');">
      Bestel Nu
    </a>
    </div>
  </div>
</div>
<!-- float end -->

  <script>refStr='<?php echo $refStr;?>';</script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>