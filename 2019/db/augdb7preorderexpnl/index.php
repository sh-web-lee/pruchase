<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
    $pResUrl = './';
    $pRootUrl = '../../../';
}
if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'nldbexp_p' . $date;
  $c_name_t='nldbexp_t' . $date;
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

$refStr=empty($_GET['to'])?'':('-'.$_GET['to']);
if(preg_match_all('/([0-9]*)\./',$_GET['ver'],$matches)){
  $ver=$matches[1][0].$matches[1][1];
  $refStr.='-'.$ver;
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <title>73% Voorverkoopkorting op Driver Booster 7 PRO</title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com/nl/index.php" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
      </a>
      <p class="name">Driver Booster 7 PRO</p>
      <h1>Voorverkoop Is Begonnen!</h1>
      <div class="offer clearfix">
        <div class="left fl">
          <img class="db-box" src="<?php echo getStaticUrl('images/db-box.png')?>" alt="Driver Booster PRO"/>
        </div>
        <div class="right fl">
          <h2>ALLEEN VOOR DE EERSTE <big>1000</big> KOPERS</h2>
          <div class="numbox">
            <h3>
              Slechts
              <span id="topNum" class="giftNum">
                <b class="nwrap"><b class="numlist"></b></b>
                <b class="nwrap"><b class="numlist"></b></b>
                <b class="nwrap"><b class="numlist"></b></b>
                <b class="nwrap"><b class="numlist"></b></b>
              </span>
              over
            </h3>
            <p><span class="buyNum"><?php echo $viewNum; ?></span> mensen bekijken deze deal</p>
          </div>
          <ul class="price clearfix">
            <li class="first"><strong> <small>???</small>19<small>,99</small></strong> <del>???74,85</del></li>
            <li class="last">
              <a class="buybtn big"
                 href="https://www.iobit.com/buy.php?product=nl-db7preorder1999&ref=nl_db7preorderexp<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=nl_purchase_db"
                 onclick="ga('send', 'event', 'dbbuy', 'buy', 'db7preorderexp-nl');">
                Bestel Nu
              </a>
            </li>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- foryou start -->
  <div class="foryou">
    <div class="wrapper">
      <h2>Wat Heeft Driver Booster 6 PRO Voor U Gedaan?</h2>
      <div class="screen">
        <img src="<?php echo getStaticUrl('images/screen01.png')?>" alt=""/>
        <span class="rocket"></span>
        <div class="forlist left">
          <h3>Verbeterde PC-Prestaties</h3>
          <p><i class="circle">.</i> <b>x</b> drivers ge??pdatet om systeemfouten te voorkomen;</p>
          <p><i class="circle">.</i> <b>x</b> apparaatfouten opgelost om hardwareproblemen te voorkomen;</p>
        </div>
        <div class="forlist right">
          <h3>Verbeterde Gameprestaties</h3>
          <p><i class="circle">.</i> <b>x</b> gamecomponenten ge??pdatet om succesvol starten van games te garanderen;</p>
          <p><i class="circle">.</i> <b>x</b> Game Ready Drivers met voorrang ge??pdatet om van de nieuwste functies te <br> genieten en bugs te verhelpen;</p>
        </div>
      </div>
      <span class="arrow-wrap"><i class="top"></i><i class="bot"></i>
    </div>
  </div>
  <!-- foryou end -->

  <!-- hashow start -->
  <div class="hashow">
    <div class="wrapper">
      <h2>Uw Driver Booster PRO Is Verlopen</h2>
      <div class="screen clearfix">
        <div class="left fl">
          <img src="<?php echo getStaticUrl('images/screen02.png')?>" alt=""/>
          <span class="point">!</span>
        </div>
        <ul class="right fr">
          <li><i class="all-icons arrow"></i> <span><b>1.000.000</b> minder drivers in de database</span></li>
          <li><i class="all-icons"></i> <span><b>Geen</b> extra snelle downloads</span></li>
          <li><i class="all-icons"></i> <span><b>Geen</b> automatische driver update</span></li>
          <li><i class="all-icons"></i> <span><b>Geen</b> back-ups van vorige drivers</span></li>
          <li><i class="all-icons"></i> <span><b>Geen</b> herstel van apparaatfouten</span></li>
          <li><i class="all-icons"></i> <span><b>Geen</b> spelcomponent updates</span></li>
          <li><i class="all-icons"></i> <span><b>Geen</b> voorrang op Game Ready Driver updates</span></li>
        </ul>
      </div>
      <span class="arrow-wrap"><i class="top"></i><i class="bot"></i>
    </div>
  </div>
  <!-- hashow end -->

  <!-- db-feature start -->
  <div class="db-feature">
    <div class="wrapper">
      <h2>Driver Booster 7 PRO Doet Meer Voor U</h2>
      <div class="clearfix">
        <div class="featlist one">
          <img src="<?php echo getStaticUrl('images/feature-icons01.png')?>" alt=""/>
          <h3>3.500.000+</h3>
          <p>drivers beschikbaar</p>
        </div>
        <div class="featlist two">
          <img src="<?php echo getStaticUrl('images/feature-icons02.png')?>" alt=""/>
          <h3>20% meer</h3>
          <p>componenten beschikbaar</p>
        </div>
        <div class="featlist three">
          <img src="<?php echo getStaticUrl('images/feature-icons03.png')?>" alt=""/>
          <h3>20% sneller</h3>
          <p>drivers scannen</p>
        </div>
        <div class="featlist four">
          <img src="<?php echo getStaticUrl('images/feature-icons04.png')?>" alt=""/>
          <h3>Geen Notificaties</h3>
          <p>als u een programma in volledig scherm gebruikt</p>
        </div>
      </div>
      <h3 class="subtitle">Keer Nu Terug naar PRO om van Alle PRO Functies te Profiteren</h3>
      <ul class="price">
        <li class="last">
          <a class="buybtn big small-font"
             href="https://www.iobit.com/buy.php?product=nl-db7preorder1999&ref=nl_db7preorderexp<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=nl_purchase_db"
             onclick="ga('send', 'event', 'dbbuy', 'buy', 'db7preorderexp-nl');">
            Bestel Nu met Hoge Korting
          </a>
        </li>
      </ul>
      <span class="arrow-wrap"><i class="top"></i><i class="bot"></i></span>
    </div>
  </div>
  <!-- db-feature end -->

  <!-- review start -->
  <div class="review wrapper">
    <h2>Wat Vinden Anderen: </h2>
    <div id="dg-container" class="dg-container">
      <div class="nav">
        <span class="dg-prev"></span>
        <span class="dg-next"></span>
      </div>
      <div class="content dg-wrapper">
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/pc.png')?>" alt=""></dt>
          <dd>
            <h2>Media recensie</h2>
            <h4></h4>
            <p>
              ???IObit maakt allerlei programma???s en Driver Booster PRO is een van de beste. Driver Booster PRO werkt automatisch alle drivers bij en biedt meerdere functies en licentiecodes voor een goede prijs. De gebruikersinterface kan handmatig naar eigen smaak worden ingesteld wat dit programma erg overzichtelijk maakt. In het hoofdmenu kun je alle hardware gerelateerde informatie makkelijk terugvinden. Concurrenten als Ashampoo Driver Updater en Slimware Utilities DriverUpdate bieden soortgelijke functies maar Driver Booster blijft absoluut nummer ????n.???
            </p>
            <cite>PC Magazine</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/dunston-diaz.png')?>" alt="Dunston Diaz"></dt>
          <dd>
            <h2>Klantbeoordeling</h2>
            <h4></h4>
            <p>
              ???Allereerst, moet ik zeggen dat het hele lichte en gemakkelijke software is. Driver Booster draait op de achtergrond en beperkt mijn CPU en RAM niet. Ik kon de nieuwste games spelen, zonder achtergrondprocessen te moeten sluiten. Normaal gesproken draai ik Windows updates elke dag voor de laatste drivers, maar Driver Booster doet dat nu voor mij en doet het beter en nauwkeuriger dan Windows update. Ik sta versteld van de prestaties en raad dit programma ten sterkste aan.???
            </p>
            <cite>Dunston Diaz</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/harold-barr.png')?>" alt="Harold Barr"></dt>
          <dd>
            <h2>Klantbeoordeling</h2>
            <h4></h4>
            <p>
              ???Wat een fijne verrassing brengt Driver Booster. Na de installatie en scan, bleek ik van de helft van de drivers niet eens te weten dat ik ze had, laat staan dat ze een update nodig hadden. Toen de update voltooid was, leek mijn pc een complete makeover te hebben gehad. Sensationeel!???
            </p>
            <cite>Harold Barr</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/hishaam-salasa.png')?>" alt="Hishaam Salasa"></dt>
          <dd>
            <h2>Klantbeoordeling</h2>
            <h4></h4>
            <p>
              ???Werkelijk de beste driver updater die beschikbaar is.  Het is gebruiksvriendelijk, heeft een simpele interface en doet zijn werk beter dan elk ander programma dat ik geprobeerd heb. Dit programma is een dikke 5 sterren waard. Aanradertje!???
            </p>
            <cite>Hishaam Salasa</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/carlos-alexandre.png')?>" alt="Carlos Alexandre Ver??ssimo"></dt>
          <dd>
            <h2>Klantbeoordeling</h2>
            <h4></h4>
            <p>
              ???Dit programma heeft me geholpen om de traagheid van mijn gamelaptop op te lossen zonder het te laten crashen. Soms probeerde ik mijn drivers te updaten, maar crashte mijn computer en moest ik ???m formatteren om ???m weer te kunnen gebruiken, maar dat gebeurt niet met DB7. Met groot gebruiksgemak en snelle downloads is het duidelijk de beste driver tool die er is!???
            </p>
            <cite>Carlos Alexandre Ver??ssimo</cite>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- review end -->

  <!-- awards start -->
  <div class="awards">
    <div class="wrapper">
      <h2>Vertrouwd en bekroond door de volgende media</h2>
      <p>
        Dankzij het vertrouwen en de prijzen die we in de afgelopen zes jaar hebben gekregen van deze media, weet u dat u de juiste driver updater heeft.
      </p>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
    </div>
  </div>
  <!-- awards end -->

  <!-- bottom start -->
  <div class="bottom">
    <div class="wrapper">
      <!-- service start -->
      <div class="service clearfix">
        <dl class="fl">
          <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dt>
          <dd>
            <h4>
              Probeer ZONDER RISICO ??? met onze 60 dagen niet-goed-geld-terug garantie</h4>
            <p>
              Door PRO te activeren zullen uw drivergerelateerde problemen verdwijnen voor een schappelijke prijs.
            </p>
          </dd>
        </dl>
        <dl class="fr">
          <dd>
            <h4>Wij accepteren:</h4>
          </dd>
          <dt><img src="<?php echo getStaticUrl('images/payments.png')?>" alt=""></dt>
        </dl>
      </div>
      <!-- service end -->

      <!-- footer start -->
      <div class="footer">
        <dl>
          <dt>Opmerking:</dt>
          <dd>
            U kunt direct na de bestelling aan de slag met de RC versie van Driver Booster 7. Deze versie bevat vrijwel alle functies van het nieuwe Driver Booster 7. Bij de offici??le lancering van Driver Booster 7, laten we u weten dat u kunt updaten naar de definitieve versie.
          </dd>
        </dl>
        <p>Copyright ?? 2005 - <?php echo date('Y')?> IObit. Alle Rechten Voorbehouden</p>
      </div>
      <!-- footer end -->
    </div>
  </div>
  <!-- bottom end -->

<!-- float start -->
<div class="floatlayer clearfix">
  <div class="wrapper clearfix">
    <div class="left fl">
      <img class="db-box" src="<?php echo getStaticUrl('images/db-small-box.png')?>" alt="Driver Booster PRO"/>
    </div>
    <div class="numbox fl">
      <h3>
        Slechts
        <span id="botNum" class="giftNum">
          <b class="nwrap"><b class="numlist"></b></b>
          <b class="nwrap"><b class="numlist"></b></b>
          <b class="nwrap"><b class="numlist"></b></b>
          <b class="nwrap"><b class="numlist"></b></b>
        </span>
        over
      </h3>
      <p><span class="buyNum"><?php echo $viewNum; ?></span> mensen bekijken deze deal</p>
    </div>
    <ul class="price fr">
      <li class="first"><strong><small>???</small>19<small>,99</small></strong></li>
      <li class="last">
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=nl-db7preorder1999&ref=nl_db7preorderexp<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=nl_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'db7preorderexp-nl');">
          Bestel Nu
        </a>
      </li>
    </ul>
  </div>
</div>
<!-- float end -->

  <script>
    $('.foryou .screen p b').eq(0).html('<?php echo paramDeal($paramData->UpdDrv);?>').end()
        .eq(1).html('<?php echo paramDeal($paramData->FixedErr);?>').end()
        .eq(2).html('<?php echo paramDeal($paramData->UpdCmp);?>').end()
        .eq(3).html('<?php echo paramDeal($paramData->UpdRdy);?>');
    refStr='<?php echo $refStr;?>';
    var dbImg = ["<?php echo getStaticUrl('images/db-box-66.png')?>", "<?php echo getStaticUrl('images/db-small-box-66.png')?>"];
  </script>
  <script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
  <script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>