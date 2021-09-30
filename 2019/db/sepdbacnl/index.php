<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
$refStrA = 'nl_db-ac-register';
$refStrB = 'db-ac-newb';
$refStrC = 'db-ac-newc';
if(in_array($_GET['st'],array('ascu_acdb','asc_acdb'))){
  $refStrA.='-'.$_GET['st'];
  $refStrB.='-'.$_GET['st'];
  $refStrC.='-'.$_GET['st'];
}
  include $pRootUrl.'include/common.inc.php';
?>
<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>85% Korting op Driver Booster PRO</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Montserrat:500,600,800'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com/nl/index" target="_blank">
        <img src="<?php echo $pResUrl; ?>images/logo.png" alt="IObit">
      </a>
      <div class="title">
        <h1>Driver Booster 8 PRO</h1>
        <p>De Beste Driver Updater om drivers eenvoudig, veilig en snel bij te werken</p>
      </div>
      <div class="offer clearfix">
        <img class="fl" src="<?php echo getStaticUrl('images/boxshot.png')?>" alt="Driver Booster 7 PRO">
        <div class="discount fl">
          <h2>85%<small>KORTING</small></h2>
          <p>Exclusief voor IObit klanten</p>
        </div>
      </div>
      <div class="pricebox">
        <dl class="price">
          <dt>SLECHTS: <strong>€9,99 </strong><del>€74,85</del></dt>
          <dd>
            <a class="buybtn bigbtn" href="https://www.iobit.com/buy.php?product=nl-db8-ac&ref=nl_db-ac-register&aff=<?php echo $_GET['aff']; ?>&refs=nl_ac_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbac-nl');">
              <div class="inner">
                <i class="all-icons"></i>
                <span>Nu Activeren</span>
              </div>
            </a>
          </dd>
          <dd>1 Jaar / 1 pc</dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- container start -->
  <!-- feature start -->
  <div class="feature wrapper">
    <h2>Wat kan Driver Booster PRO voor u betekenen?</h2>
    <div class="clearfix">
      <dl>
        <dt><img src="<?php echo $pResUrl; ?>images/feature_icons_01.png" alt=""></dt>
        <dd>
          <h3>GROTE DRIVER DATABASE</h3>
          <p>Detecteer en update meer dan 4.500.000 drivers in 1 klik, om de stabiliteit en prestaties van uw computer te verbeteren.</p>
        </dd>
      </dl>
      <dl class="right">
        <dt><img src="<?php echo $pResUrl; ?>images/feature_icons_02.png" alt=""></dt>
        <dd>
          <h3>DE BESTE GAME-ERVARING</h3>
          <p>Krijg de laatste Game Ready Drivers en de nodige gamecomponenten.</p>
        </dd>
      </dl>
    </div>
    <div class="clearfix">
      <dl>
        <dt><img src="<?php echo $pResUrl; ?>images/feature_icons_03.png" alt=""></dt>
        <dd>
          <h3>AUTOMATISCH DRIVERS UPDATEN</h3>
          <p>Update automatisch drivers als het systeem inactief is.</p>
        </dd>
      </dl>
      <dl class="right">
        <dt><img src="<?php echo $pResUrl; ?>images/feature_icons_04.png" alt=""></dt>
        <dd>
          <h3>VEILIG DRIVERS UPDATEN</h3>
          <p>Maakt automatisch back-ups en herstelpunten aan voor het updaten.</p>
        </dd>
      </dl>
    </div>
  </div>
  <!-- feature end -->

  <!-- awards start -->
  <div class="awards">
    <div class="wrapper">
      <h2>Wereldwijde Awards</h2>
      <img src="<?php echo $pResUrl; ?>images/awards.png" alt="">
    </div>
  </div>
  <!-- awards end -->

  <!-- review start -->
  <div class="review wrapper">
    <div class="content">
      <dl class="active">
        <dt>
        <h3>Media recensie</h3></dt>
        <dd>
          “IObit maakt allerlei programma’s en Driver Booster PRO is een van de beste. Driver Booster PRO werkt automatisch alle drivers bij en biedt meerdere functies en licentiecodes voor een goede prijs. De gebruikersinterface kan handmatig naar eigen smaak worden ingesteld wat dit programma erg overzichtelijk maakt. In het hoofdmenu kun je alle hardware gerelateerde informatie makkelijk terugvinden. Concurrenten als Ashampoo Driver Updater en Slimware Utilities DriverUpdate bieden soortgelijke functies maar Driver Booster blijft absoluut nummer één.”
        </dd>
      </dl>
      <dl>
        <dt>
        <h3>Klantbeoordeling</h3></dt>
        <dd>
          “Allereerst, moet ik zeggen dat het hele lichte en gemakkelijke software is. Driver Booster draait op de achtergrond en beperkt mijn CPU en RAM niet. Ik kon de nieuwste games spelen, zonder achtergrondprocessen te moeten sluiten. Normaal gesproken draai ik Windows updates elke dag voor de laatste drivers, maar Driver Booster doet dat nu voor mij en doet het beter en nauwkeuriger dan Windows update. Ik sta versteld van de prestaties en raad dit programma ten sterkste aan.”
        </dd>
      </dl>
      <dl>
        <dt>
        <h3>Klantbeoordeling</h3></dt>
        <dd>
          “Wat een fijne verrassing brengt Driver Booster. Na de installatie en scan, bleek ik van de helft van de drivers niet eens te weten dat ik ze had, laat staan dat ze een update nodig hadden. Toen de update voltooid was, leek mijn pc een complete makeover te hebben gehad. Sensationeel!”
        </dd>
      </dl>
      <dl>
        <dt>
        <h3>Klantbeoordeling</h3></dt>
        <dd>
          “Werkelijk de beste driver updater die beschikbaar is.  Het is gebruiksvriendelijk, heeft een simpele interface en doet zijn werk beter dan elk ander programma dat ik geprobeerd heb. Dit programma is een dikke 5 sterren waard. Aanradertje!”
        </dd>
      </dl>
      <dl>
        <dt>
        <h3>Klantbeoordeling</h3></dt>
        <dd>
          <h4></h4>
        </dd>
        <dd>
          “Dit programma heeft me geholpen om de traagheid van mijn gamelaptop op te lossen zonder het te laten crashen. Soms probeerde ik mijn drivers te updaten, maar crashte mijn computer en moest ik ‘m formatteren om ‘m weer te kunnen gebruiken, maar dat gebeurt niet met DB8. Met groot gebruiksgemak en snelle downloads is het duidelijk de beste driver tool die er is!”
        </dd>
      </dl>
    </div>
    <ul class="users clearfix">
      <li class="active">
        <div class="pic"><img src="<?php echo $pResUrl; ?>images/pc.png" alt="PC Magazine"></div>
        <p>PC Magazine</p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo $pResUrl; ?>images/dunston-diaz.png" alt="Dunston Diaz"></div>
        <p>Dunston Diaz</p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo $pResUrl; ?>images/harold-barr.png" alt="Harold Barr"></div>
        <p>Harold Barr</p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo $pResUrl; ?>images/hishaam-salasa.png" alt="Hishaam Salasa">
        </div>
        <p>Hishaam Salasa</p>
      </li>
      <li>
        <div class="pic">
          <img src="<?php echo $pResUrl; ?>images/carlos-alexandre.png" alt="Carlos Alexandre Veríssimo">
        </div>
        <p>Carlos Alexandre Veríssimo</p>
      </li>
    </ul>
  </div>
  <!-- review end -->

  <!-- footbuy start -->
  <div class="footbuy">
    <div class="wrapper">
      <h2>Gegarandeerd Betere PC-prestaties & Soepelere Game-ervaring</h2>
      <div class="pricebox">
        <dl class="price">
          <dt>SLECHTS: <strong>€9,99 </strong><del>€74,85</del></dt>
          <dd>
            <a class="buybtn bigbtn" href="https://www.iobit.com/buy.php?product=nl-db8-ac&ref=nl_db-ac-register&aff=<?php echo $_GET['aff']; ?>&refs=nl_ac_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbac-nl');">
              <div class="inner">
                <i class="all-icons"></i>
                <span>Nu Activeren</span>
              </div>
            </a>
          </dd>
          <dd>1 Jaar / 1 pc</dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- footbuy end -->
  <!-- container end -->

  <!-- footer start -->
  <div class="footer">© 2005 - <?php echo date('Y')?> IObit. Alle Rechten Voorbehouden</div>
  <!-- footer end -->

  <!-- floatlayer start -->
  <div class="floatlayer" id="floatlayer">
    <div class="wrapper clearfix">
      <div class="left">
        <h2>EXCLUSIEVE AANBIEDING</h2>
        <p><strong>85% Korting</strong> om Verlost te Worden van Crashes & Matige Game-Prestaties</p>
      </div>
      <div class="pricebox">
        <dl class="price fr">
          <dt><strong>€9,99 </strong><del>€74,85</del></dt>
          <dd>
            <a class="buybtn smallbtn" href="https://www.iobit.com/buy.php?product=nl-db8-ac&ref=nl_db-ac-register&aff=<?php echo $_GET['aff']; ?>&refs=nl_ac_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbac-nl');">
              <div class="inner">
                <i class="all-icons"></i>
                <span>Nu Activeren</span>
              </div>
            </a>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- floatlayer end -->

<script src="<?php echo $pResUrl; ?>script/script.js"></script>
</body>
</html>