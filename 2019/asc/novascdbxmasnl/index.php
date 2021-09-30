<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';
  $viewNum=rand(98,165);
  if($_GET['action']=='getViewNum'){
    echo $viewNum;
    exit();
  }
if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'nlxascdb_p' . $date;
  $c_name_t='nlxascdb_t' . $date;
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=rand(37,50);
    setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
    setcookie($c_name_t,$totalNum, time() + 3600 * 24 *2);
  } else {
    if (intval($_COOKIE[$c_name]) <= 5) {
      $packsNum = 5;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    } else {
      if((rand(1,100)%2)==0){
          $packsNum=$_COOKIE[$c_name];
      }else {
        $packsNum = $_COOKIE[$c_name] - 1;
        setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
      }
    }
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}
$refStr='';
if(in_array($_GET['pop'],array('x_ascdb','xr_ascdb','xr_dbasc','x_dbasc'))){
  $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title> Kerstmis Bundel met Advanced SystemCare PRO en Driver Booster PRO - IObit</title>
<meta name="Copyright" content="IObit">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700,900i&display=swap" rel="stylesheet">
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com/nl/index.php" target="_blank">IObit</a>
      <h1 class="title">Kerstmis Bundel  </h1>
      <div class="clearfix">
        <div class="imgbox fl ribbon">
          <img src="<?php echo getStaticUrl('images/asc-db-box.png')?>" alt=""/>
          <div class="discount">75% OFF</div>
        </div>
        <div class="msgbox fl">
          <div class="change-title"><h2>75% Korting voor de EERSTE 999 Kopers</h2></div>
          <div class="numbox">
            <span>Nog maar</span>
            <div id="flip" class="flipNum">
              <div class="numwrap">
                <div class="listbox">
                  <span class="list">
                    <b>0</b><b>1</b><b>2</b><b>3</b><b>4</b><b>5</b><b>6</b><b>7</b><b>8</b><b>9</b>
                  </span>
                </div>
              </div>
              <div class="numwrap">
                <div class="listbox">
                  <span class="list">
                    <b>0</b><b>1</b><b>2</b><b>3</b><b>4</b><b>5</b><b>6</b><b>7</b><b>8</b><b>9</b>
                  </span>
                </div>          
              </div>
              <div class="numwrap last">
                <div class="listbox">
                  <span class="list">
                    <b>0</b><b>1</b><b>2</b><b>3</b><b>4</b><b>5</b><b>6</b><b>7</b><b>8</b><b>9</b>
                  </span>
                </div> 
              </div>
            </div>
            <span>beschikbaar</span>
            <!-- <p class="change">Hurry, only <b class="packsNum">50</b> Left at this price!</p> -->
          </div>
          <ul class="price">
            <li class="first">
              <p><strong class="change-price">€<big>29,99</big></strong> <del>€124,84</del></p>
              <p>1-jarig abonnement / 3 pc’s</p>
            </li>
            <li>
              <a class="buybtn exbtn"
                 href="https://www.iobit.com/buy.php?product=nl-asc13db73pc2999&ref=nl_asc13db73pc2999purchase1911<?php echo $refStr;?>&refs=nl_purchase_asc"
                 onclick="ga('send', 'event', 'ascdbbuy', 'buy', 'ascdbpurchase1911-nl')">
                Activeer Nu
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="try">
      Probeer ZONDER RISICO – Activeer nu voor een perfect werkende pc, en krijg anders binnen 60 dagen uw geld terug
    </div>
  </div>
  <!-- banner end -->

  <!-- intro start -->
  <div class="intro">
    <div class="wrapper">
      <h2>Wat zit er in de Kerstmis Bundel?</h2>
      <div class="computer">
        <img class="screen asc" src="<?php echo getStaticUrl('images/asc-screen.png')?>" alt=""/>
        <img class="screen db" src="<?php echo getStaticUrl('images/db-screen.png')?>" alt=""/>
        <dl class="asc">
          <dt>
            <h3>
              <span>Advanced SystemCare 13 PRO</span>
              <img src="<?php echo getStaticUrl('images/asc-icon.png')?>" alt=""/>
            </h3>
          </dt>
          <dd>Alles-in-één optimaliseerprogramma dat uw pc versnelt en uw privacy beschermt.</dd>
        </dl>
        <dl class="db">
          <dt>
            <h3>
              <img src="<?php echo getStaticUrl('images/db-icon.png')?>" alt=""/>
              <span>Driver Booster 7 PRO</span>
            </h3>
          </dt>
          <dd>Gebruiksvriendelijke driver updater die verouderde drivers en gamecomponenten bijwerkt.</dd>
        </dl>
        <span class="line line03"></span>
      </div>
    </div>
  </div>
  <!-- intro end -->

  <!-- feature start -->
  <div class="feature">
    <h2>Waarom kiest u de Kerstmis Bundel?</h2>
    <div class="asc wrapper clearfix">
      <div class="imgbox fl">
        <img src="<?php echo getStaticUrl('images/asc-big-screen.png')?>" alt=""/>
        <img class="besom" src="<?php echo getStaticUrl('images/besom.png')?>" alt=""/>
      </div>
      <div class="msgbox fr">
        <dl>
          <dt><b>200%* Snellere PC</b><span>alleen PRO</span></dt>
          <dd>Verschoon en optimaliseer uw systeem automatisch voor een snellere pc.  </dd>
        </dl>
        <dl>
          <dt><b>300%* Sneller Internet </b><span>alleen PRO</span></dt>
          <dd>Sneller downloaden, surfen, gamen, YouTube video’s laden.</dd>
        </dl>
        <dl>
          <dt><b>Privacy Bescherming</b><span>alleen PRO</span></dt>
          <dd>Blokkeer ongewenste toegang tot uw contacten, emails en andere gevoelige gegevens.</dd>
        </dl>
        <dl>
          <dt><b>Veilig Browsen</b><span>alleen PRO</span></dt>
          <dd>Voorkom dat meegekeken wordt naar wat u online bekijkt, leest en koopt.</dd>
        </dl>
        <dl>
          <dt><b>Software Updater </b><span>alleen PRO</span></dt>
          <dd>Houd belangrijke programma’s up-to-date in één klik. </dd>
        </dl>
      </div>
    </div>
    <div class="db wrapper clearfix">
      <div class="msgbox fl">
        <dl>
          <dt><b>20% grotere database</b> <span>alleen PRO</span></dt>
          <dd>Automatisch 3.500.000+ drivers scannen en updaten.</dd>
        </dl>
        <dl>
          <dt><b>Ongelimiteerde snelheden</b> <span>alleen PRO</span></dt>
          <dd>Download uw drivers tot 100% sneller.</dd>
        </dl>
        <dl>
          <dt><b>Betere Game-ervaring</b> <span>alleen PRO</span></dt>
          <dd>Biedt de juiste gamecomponenten aan voor soepeler draaiende games.</dd>
        </dl>
        <dl>
          <dt><b>Apparaatproblemen Verhelpen </b> <span>alleen PRO</span></dt>
          <dd>Voorkom en verhelp geluids-, internet- en andere hardwareproblemen. </dd>
        </dl>
      </div>
      <div class="imgbox fr">
        <img src="<?php echo getStaticUrl('images/db-big-screen.png')?>" alt=""/>
        <img class="forbid" src="<?php echo getStaticUrl('images/forbid.png')?>" alt=""/>
      </div>
    </div>
  </div>
  <!-- feature end -->

  <!-- centbuy start -->
  <div class="centbuy">
    <div class="wrapper">
      <h2>Wat is het Beste Moment om te Kopen?</h2>
      <div class="clearfix">
        <div class="imgbox fl">
          <img src="<?php echo getStaticUrl('images/asc-db-box.png')?>" alt=""/>
          <span class="original"><em>€49,99</em></span>
          <span class="original last"><em>€74,85</em></span>
        </div>
        <div class="chart fl">
          <div class="clist one">
            <h3 class="cost">50% KORTING</h3>
            <span class="month">Black Friday</span>
          </div>
          <div class="clist two">
            <h3 class="cost"><span>75%</span> KORTING</h3>
            <span class="month">Vandaag</span>
          </div>
          <div class="clist three">
            <h3 class="cost">60% KORTING</h3>
            <span class="month">Oud en Nieuw</span>
          </div>
        </div>
      </div>
      <div class="price">
        <p><strong class="change-price">€<big>29,99</big></strong> <del>€124,84</del></p>
        <a class="buybtn exbtn"
           href="https://www.iobit.com/buy.php?product=nl-asc13db73pc2999&ref=nl_asc13db73pc2999purchase1911<?php echo $refStr;?>&refs=nl_purchase_asc"
           onclick="ga('send', 'event', 'ascdbbuy', 'buy', 'ascdbpurchase1911-nl')">
         Activeer Nu
        </a>
        <p>1-jarig abonnement / 3 pc’s</p>
      </div>
    </div>
  </div>
  <!-- centbuy end -->

  <!-- review start -->
  <div class="review">
    <div class="wrapper">
      <h2>Wat vinden anderen?</h2>
      <div id="dg-container" class="dg-container">
        <div class="nav">
          <span class="dg-prev"></span>
          <span class="dg-next"></span>
        </div>
        <div class="content dg-wrapper">
          <dl class="reviews active">
            <dt><h2><span>Media recensie</span></h2></dt>
            <dd>
              <p class="on">"Er is niets vervelender dan een computer die zo vaak vastloopt dat het uw werk of online gamen belemmert. Advanced SystemCare heeft als doel om uw computer nieuw leven in te blazen. Niet alleen door het opruimen en verwijderen van ongewenste bestanden, malware, en ongeldige registerbestanden, maar ook door uw computer een boost te geven en de pc-prestaties te verbeteren."</p>
              <cite>Cnet</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h2><span>Klantbeoordeling</span></h2></dt>
            <dd>
              <p>“Ik heb over de jaren verschillende programma’s geprobeerd die computers probleemloos zouden doen werken. Een paar jaar geleden ben ik bij ASC uitgekomen, in eerste instantie de gratis versie. Toen ik merkte dat ik eindelijk van alle computerproblemen en ergernissen af was, ben ik naar de betaalde versie overgestapt en hoef ik er niet meer naar om te kijken. Advanced SystemCare Pro is de enige die ik anderen zou aanbevelen, gebaseerd op mijn ervaring. Ik gebruik ook IObit Uninstaller, Smart Defrag en Driver Booster, dat maakt het nog gemakkelijker.”</p>
              <cite>Richard Beavers</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h2><span>Klantbeoordeling</span></h2></dt>
            <dd>
              <p>“Advanced System Care is een geweldig programma.  Ik gebruik het al jaren en het werkt fantastisch. Ze verbeteren hun producten continu en het wordt alleen maar beter over de jaren. Ik gebruik meerdere IObit producten en ze werken allemaal volledig naar behoren.”</p>
              <cite>Patsy Clark</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h2><span>Klantbeoordeling</span></h2></dt>
            <dd>
              <p>“Ik heb Advanced SystemCare 12 en de 13 beta, gedownload en uitgebreid getest (win 7). De uitstraling is mooi en overzichtelijk. De nieuwe functies zijn super.”</p>
              <cite>R.E.J Visschers-Bernabela </cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h2><span>Klantbeoordeling</span></h2></dt>
            <dd>
              <p>"Met Driver Booster werk ik alle drivers gemakkelijk bij. Daarnaast lost dit programma allerlei foutmeldingen op zoals geen geluid, netwerkfouten, apparaat fouten enz. Voordat ik dit programma downloadde, geloofde ik niet dat dit programma mijn computer nog kon redden, maar nu ben ik helemaal overtuigd en loopt mijn PC weer als nieuw."</p>
              <cite>Myo Thuya </cite>
            </dd>
          </dl>
           <dl class="reviews">
            <dt><h2><span>Klantbeoordeling</span></h2></dt>
            <dd>
              <p>"Driver Booster is een geweldige applicatie. Voor iemand die veel applicaties en drivers op de computer heeft staan maar geen tijd heeft om deze bij te werken, raad ik Driver Booster aan iedereen die gemakkelijk en snel zijn drivers wil bijwerken direct aan."</p>
              <cite>Adam Backlund </cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h2><span>Klantbeoordeling</span></h2></dt>
            <dd>
              <p>"Dit is een van de beste driver update software op de markt. Microsoft heeft zelfs gesuggereerd dat updates voor mijn drivers niet zouden werken met mijn systeem. Maar dit programma vind alle updates die ik nodig heb. Het werkte perfect. Eenvoudig te gebruiken, informatief en intuïtief. Deze software zal altijd in mijn toolbox blijven... Goed gedaan!"</p>
              <cite>Wayne Bowler </cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h2><span>Media recensie</span></h2></dt>
            <dd>
              <p>“IObit maakt allerlei programma’s en Driver Booster PRO is een van de beste. Driver Booster PRO werkt automatisch alle drivers bij en biedt meerdere functies en licentiecodes voor een goede prijs. De gebruikersinterface kan handmatig naar eigen smaak worden ingesteld wat dit programma erg overzichtelijk maakt. In het hoofdmenu kun je alle hardware gerelateerde informatie makkelijk terugvinden. Concurrenten als Ashampoo Driver Updater en Slimware Utilities DriverUpdate bieden soortgelijke functies maar Driver Booster blijft absoluut nummer één.”</p>
              <cite>PC Magazine </cite>
            </dd>
          </dl>
        </div>
        <ul>
          <li class="first" data-num="4"><img src="<?php echo getStaticUrl('images/myo-thuya.png')?>" alt="Myo Thuya"></li>
          <li class="two" data-num="5"><img src="<?php echo getStaticUrl('images/adam-backlund.png')?>" alt="Adam Backlund"></li>
          <li class="three" data-num="6"><img src="<?php echo getStaticUrl('images/wayne-bowler.png')?>" alt="Wayne Bowler"></li>
          <li class="active" data-num="0"><img src="<?php echo getStaticUrl('images/cnet.png')?>" alt="Cnet"></li>
          <li class="four" data-num="1"><img src="<?php echo getStaticUrl('images/richard-beavers.png')?>" alt="Richard Beavers"></li>
          <li class="five" data-num="2"><img src="<?php echo getStaticUrl('images/patsy-clark.png')?>" alt="Patsy Clark"></li>
          <li class="six" data-num="3"><img src="<?php echo getStaticUrl('images/rej-visschers-bernabela.png')?>" alt="R.E.J Visschers-Bernabela"></li>
          <li class="seven last" data-num="7"><img src="<?php echo getStaticUrl('images/pc-magazine.png')?>" alt="PC Magazine"></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- review end -->

  <!-- awards start -->
  <div class="awards">
    <div class="wrapper">
      <h2>Wereldwijde Awards</h2>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
    </div>
  </div>
  <!-- awards end -->

  <!-- footer start -->
  <div class="footer">
    <div class="wrapper">
      <div class="service">
        <dl class="left fl">
          <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
          <dd>
            <h3>Probeer ZONDER RISICO – met onze 60 dagen niet-goed-geld-teruggarantie</h3>
            <p>
              Door PRO te activeren krijgt u een schonere, snellere en veiligere pc, voor een schappelijke prijs.
            </p>
          </dd>
        </dl>
        <dl class="right fr">
          <dt><h3>Wij accepteren</h3></dt>
          <dd>
            <img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/>
          </dd>
        </dl>
      </div>
      <dl>
        <dt>*Opmerkingen:</dt>
        <dd>Resultaten met betrekking tot verbeteringen in prestaties kunnen afwijken afhankelijk van het systeem.</dd>
        <dd>
          IObit behoudt zich het recht voor dergelijke promoties te allen tijde naar eigen goeddunken te wijzigen zonder dit van tevoren aan te kondigen.
        </dd>
      </dl>
      <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Alle Rechten Voorbehouden</p>
    </div>
  </div>
  <!-- footer end -->

  <!-- floatlayer start -->
  <div id="floatlayer" class="floatlayer">
    <div class="wrapper clearfix">
      <div class="imgbox ribbon fl">
        <img src="<?php echo getStaticUrl('images/asc-db-box.png')?>" alt=""/>
        <div class="discount">70% OFF</div>
      </div>
      <div class="numbox fl">
        <div id="fliptwo" class="flipNum">
          <div class="numwrap">
            <div class="listbox">
              <span class="list">
                <b>0</b><b>1</b><b>2</b><b>3</b><b>4</b><b>5</b><b>6</b><b>7</b><b>8</b><b>9</b>
              </span>
            </div>
          </div>
          <div class="numwrap">
            <div class="listbox">
              <span class="list">
                <b>0</b><b>1</b><b>2</b><b>3</b><b>4</b><b>5</b><b>6</b><b>7</b><b>8</b><b>9</b>
              </span>
            </div>          
          </div>
          <div class="numwrap last">
            <div class="listbox">
              <span class="list">
                <b>0</b><b>1</b><b>2</b><b>3</b><b>4</b><b>5</b><b>6</b><b>7</b><b>8</b><b>9</b>
              </span>
            </div> 
          </div>
        </div>
        <p class="change"><b class="viewNum"><?php echo $viewNum;?></b> mensen kijken, slechts <b class="packsNum">50</b>over.</p>
      </div>
      <ul class="price fl">
        <li class="first">
          <p><strong class="change-price">€<big>29,99</big></strong> <del>€124,84</del></p>
          <p>1-jarig abonnement / 3 pc’s</p>
        </li>
        <li>
          <a class="buybtn exbtn"
             href="https://www.iobit.com/buy.php?product=nl-asc13db73pc2999&ref=nl_asc13db73pc2999purchase1911<?php echo $refStr;?>s&refs=nl_purchase_asc"
             onclick="ga('send', 'event', 'ascdbbuy', 'buy', 'ascdbpurchase1911-nl')">
            Activate Now
          </a>
        </li>
      </ul>
    </div>
  </div>
  <!-- floatlayer end -->

  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>