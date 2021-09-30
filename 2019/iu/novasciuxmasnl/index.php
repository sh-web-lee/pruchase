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
  $c_name = 'nlxasciu_p' . $date;
  $c_name_t='nlxasciu_t' . $date;
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
$refStr=empty($_GET['st'])?'':('-'.$_GET['st']);
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);
$refStr.=empty($_GET['ver'])?'':('-'.$_GET['ver']);
$refStr.=empty($_GET['pop'])?'':('-'.$_GET['pop']);
$refStr.=empty($_GET['r'])?'':('-'.$_GET['r']);
if(in_array($_GET['type'],array('pro','giveawayexp'))){
    $refStr.='-'.$_GET['type'];
}
$refStr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-l'.$_GET['litype'].'-e'.$_GET['expd'];
?>
<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title> Kerstmis Bundel met Advanced SystemCare PRO en IObit Uninstaller PRO</title>
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
              <p><strong class="change-price">€<big>19,99</big></strong> <del> €79,98</del></p>
              <p>1-jarig abonnement / 3 pc’s</p>
            </li>
            <li>
              <a class="buybtn exbtn"
                 href="https://www.iobit.com/buy.php?product=nl-asc14iu103pc1999&ref=nl_asc14iu103pc1999purchase2011<?php echo $refStr;?>&refs=nl_purchase_iu"
                 onclick="ga('send', 'event', 'asciubuy', 'buy', 'asciupurchase2011-nl')">
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
        <img class="screen db" src="<?php echo getStaticUrl('images/iu-screen.png')?>" alt=""/>
        <dl class="asc">
          <dt>
            <h3>
              <span>Advanced SystemCare 14 PRO</span>
              <img src="<?php echo getStaticUrl('images/asc-icon.png')?>" alt=""/>
            </h3>
          </dt>
          <dd>Alles-in-één optimaliseerprogramma dat uw pc versnelt en uw privacy beschermt.</dd>
        </dl>
        <dl class="db">
          <dt>
            <h3>
              <img src="<?php echo getStaticUrl('images/iu-icon.png')?>" alt=""/>
              <span>IObit Uninstaller 10 PRO</span>
            </h3>
          </dt>
          <dd>Gebruiksvriendelijke software uninstaller die ongewenste programma’s en plug-ins volledig verwijderd.</dd>
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
          <dt><b>200%* Snellere PC</b></dt>
          <dd>Verschoon en optimaliseer uw systeem automatisch voor een snellere pc.  <span>alleen PRO</span> </dd>
        </dl>
        <dl>
          <dt><b>300%* Sneller Internet </b></dt>
          <dd>Sneller downloaden, surfen, gamen, YouTube video’s laden. <span>alleen PRO</span></dd>
        </dl>
        <dl>
          <dt><b>Privacy Bescherming</b></dt>
          <dd>Blokkeer ongewenste toegang tot uw contacten, emails en andere gevoelige gegevens. <span>alleen PRO</span></dd>
        </dl>
        <dl>
          <dt><b>Veilig Browsen</b></dt>
          <dd>Voorkom dat meegekeken wordt naar wat u online bekijkt, leest en koopt. <span>alleen PRO</span></dd>
        </dl>
      </div>
    </div>
    <div class="db wrapper clearfix">
      <div class="msgbox fl">
        <dl>
          <dt><b>Verwijder hardnekkige & gebundelde programma’s </b></dt>
          <dd>die niet op reguliere wijze gedeïnstalleerd kunnen worden. <span>alleen PRO</span></dd>
        </dl>
        <dl>
          <dt><b>Scan automatisch op restanten</b> </dt>
          <dd>die achtergelaten worden bij deïnstallatie of niet door andere uninstallers zijn verwijderd. <span>alleen PRO</span></dd>
        </dl>
        <dl>
          <dt><b>Herken schadelijke of adverterende plug-ins </b> </dt>
          <dd>die advertenties of schadelijke links in webpagina’s toevoegen. <span>alleen PRO</span></dd>
        </dl>
        <dl>
          <dt><b>Realtime controle op systeemwijzigingen</b> </dt>
          <dd>die programma’s tijdens de installatie aanbrengen. <span>alleen PRO</span></dd>
        </dl>
        <dl>
          <dt><b>Software Updater</b> </dt>
          <dd>Houd belangrijke programma's up-to-date in één klik. <span>alleen PRO</span></dd>
        </dl>
      </div>
      <div class="imgbox fr">
        <img src="<?php echo getStaticUrl('images/iu-big-screen.png')?>" alt=""/>
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
          <span class="original last"><em>€29,99</em></span>
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
        <p><strong class="change-price">€<big>19,99</big></strong> <del>€79,98</del></p>
        <a class="buybtn exbtn"
           href="https://www.iobit.com/buy.php?product=nl-asc14iu103pc1999&ref=nl_asc14iu103pc1999purchase2011<?php echo $refStr;?>&refs=nl_purchase_iu"
           onclick="ga('send', 'event', 'asciubuy', 'buy', 'asciupurchase2011-nl')">
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
              <p>“ Ik gebruik ASC al jaren. Recent heb ik de laatste V14 Beta versie geprobeerd. En het is met afstand de volledigste en beste versie die er is. IObit blijft hun producten en technologie constant verbeteren. Met meer opties en gemakkelijkere navigatie vind je snel de juiste oplossing. Ik hoef geen andere software meer te overwegen.”</p>
              <cite>Brendon O'Rourke</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h2><span>Klantbeoordeling</span></h2></dt>
            <dd>
              <p>“Advanced system care 14 beta is het compleetste alles-in-één systeem dat er is. Ik gebruik het programma al jaren en elk jaar wordt het beter en is de interface nog gemakkelijker. Grondig opschonen is heel makkelijk, in één klik doet het programma alles voor je. Ook alle andere opties zijn super fijn! Zoals de lege mappen vinder, de internet booster en zelfs de gamebooster is top!! Volgens mij is dit de beste opschoonsoftware die er is.”</p>
              <cite>Ryan Hill</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h2><span>Klantbeoordeling</span></h2></dt>
            <dd>
              <p>“ Ik heb veel verschillende software aangeschaft om mijn pc sneller te maken en computerproblemen op te lossen. Helaas heeft geen één mijn echt kunnen helpen, totdat ik Advanced System Care 14 probeerde. Ik vind het geweldig dat er zo veel opties zijn en dat het oplossingen voor al mijn problemen biedt. Het is ongelooflijk hoe veel sneller mijn pc is na de eerste keer scannen en repareren. Bij uitstek het beste product dat ik heb kunnen vinden.”</p>
              <cite>Lyle Stelmaschuk </cite>
            </dd>
          </dl>

          <dl class="reviews">
            <dt><h2><span>Klantbeoordeling</span></h2></dt>
            <dd>
              <p>"Ik gebruik IObit Uninstaller al heel lang, en ik hou ervan. Het is heel grondig en nu zelfs nog beter. Ik ben heel tevreden en kan niet meer zonder. Als je het nog niet gebruikt, moet je het zeker proberen. Het is nu 100% beter dan een jaar geleden. Het ruimt alle rotzooi uit het register op en dat doet het geweldig."</p>
              <cite>Ivan White</cite>
            </dd>
          </dl>
           <dl class="reviews">
            <dt><h2><span>Klantbeoordeling</span></h2></dt>
            <dd>
              <p>"Dit programma bespaart me een hoop geld. Voordat ik het gebruikte was mijn computer heel traag. Ik kon er niets meer mee. Dankzij dit programma, is mijn computer weer hartstikke snel. Dankzij dit programma hoef ik geen nieuwe computer te kopen. Heel erg bedankt, IObit! I love you."</p>
              <cite>Ali Tekin</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h2><span>Klantbeoordeling</span></h2></dt>
            <dd>
              <p>"IObit Uninstaller detecteert plug-ins in my browsers waarvan ik niet eens wist dat ze bestonden. Het opschonen van restbestanden is heel goed; er blijven geen nutteloze gegevens achter. Mijn hele computer werkt daardoor beter. Het is een handig en gebruiksvriendelijk programma; ik beveel het al mijn vrienden aan."</p>
              <cite>John Glenn Perong</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h2><span>Media recensie</span></h2></dt>
            <dd>
              <p>"Dit gemakkelijk te gebruiken deïnstallatieprogramma, configureert en optimaliseert uw PC. Dit programma is makkelijk en gratis te downloaden. IObit Uninstaller kan worden beschouwd als het beste in zijn soort en maakt het ook mogelijk om meerdere programma’s tegelijk te verwijderen. Na de standaard verwijdering kunt u nog een krachtige scan uitvoeren om alle overgebleven resten op te sporen en te verwijderen."</p>
              <cite>MakeUseOf </cite>
            </dd>
          </dl>
        </div>
        <ul>
          <li class="first" data-num="4"><img src="<?php echo getStaticUrl('images/ivan.png')?>" alt="Ivan White"></li>
          <li class="two" data-num="5"><img src="<?php echo getStaticUrl('images/ali.png')?>" alt="Ali Tekin"></li>
          <li class="three" data-num="6"><img src="<?php echo getStaticUrl('images/john.png')?>" alt="John Glenn Perong"></li>
          <li class="active" data-num="0"><img src="<?php echo getStaticUrl('images/cnet.png')?>" alt="Cnet"></li>
          <li class="four" data-num="1"><img src="<?php echo getStaticUrl('images/brendon_o_rourke.png')?>" alt="Brendon O'Rourke"></li>
          <li class="five" data-num="2"><img src="<?php echo getStaticUrl('images/ryan_hill.png')?>" alt="Ryan Hill"></li>
          <li class="six" data-num="3"><img src="<?php echo getStaticUrl('images/lyle_stelmaschuk.png')?>" alt="Lyle Stelmaschuk"></li>
          <li class="seven last" data-num="7"><img src="<?php echo getStaticUrl('images/makeuseof.png')?>" alt="MakeUseOf"></li>
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
          <p><strong class="change-price">€<big>19,99</big></strong> <del>€79,98</del></p>
          <p>1-jarig abonnement / 3 pc’s</p>
        </li>
        <li>
          <a class="buybtn exbtn"
             href="https://www.iobit.com/buy.php?product=nl-asc14iu103pc1999&ref=nl_asc14iu103pc1999purchase2011<?php echo $refStr;?>&refs=nl_purchase_iu"
             onclick="ga('send', 'event', 'asciubuy', 'buy', 'asciupurchase2011-nl')">
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