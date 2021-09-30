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
  $c_name = 'nlascpup_p' . $date;
  $c_name_t='nlascpup_t' . $date;
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=rand(49,55);
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

$refStr=empty($_GET['st'])?'':('-'.$_GET['st']);
if(preg_match_all('/([0-9]*)\./',$_GET['ver'],$matches)){
  $ver=$matches[1][0].$matches[1][1];
  $refStr.='-'.$ver;
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>70% Korting op het Nieuwe Advanced SystemCare 13 PRO - IObit  </title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Montserrat:500,600&display=swap" rel="stylesheet">
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>

<!-- banner start -->
<div class="banner">
  <div class="wrapper">
    <a class="logo" href="https://www.iobit.com/nl/index.php" target="_blank">IObit</a>
    <span class="delta delta01"></span>
    <span class="delta delta02"></span>
    <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="Advanced SystemCare 13 PRO" class="asc-box"/>
    <img src="<?php echo getStaticUrl('images/sold.png')?>" alt="" class="sold">
    <div class="right-message">
      <h2><span>Advanced SystemCare 13 PRO</span> <i></i></h2>
      <h3>Maak uw trage pc tot 200%* sneller</h3>
      <dl>
        <dt class="price">
          <strong>€<b>14</b>,99</strong> <a href="https://www.iobit.com/buy.php?product=nl-asc13preorder1499&ref=nl_asc13preorderpopup1499<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=nl_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc13predorderpopup-nl');" class="buybtn"><span>Bestel Nu</span></a>
        </dt>
        <dd class="number">
         SLECHTS
          <div class="countdown">
            <div class="scroll-tick"><span>0</span></div>
            <div class="scroll-tick"><span>0</span></div>
            <div class="scroll-tick"><span>0</span></div>
            <div class="scroll-tick last"><span>0</span></div>
          </div>
          OVER. <span><span class="viewNum"><?php echo $viewNum;?></span> KIJKEN NU. </span>
        </dd>
      </dl>
    </div>
  </div>
</div>
<!-- banner end -->
<div class="intro wrapper clearfix">
  <span class="arrow"></span>
  <h2> Waarom upgraden naar Advanced SystemCare 13 PRO?</h2>
  <h3><strong>Om het <span>Maximale</span> Uit Uw Computer te Halen</strong></h3>
  <div class="message01">
    <img src="<?php echo getStaticUrl('images/list01.png')?>" alt="" class="img-box ">
    <img src="<?php echo getStaticUrl('images/guide.png')?>" alt="" class="guide">
    <img src="<?php echo getStaticUrl('images/good.png')?>" alt="" class="good">
    <img src="<?php echo getStaticUrl('images/intro-list01.png')?>" alt="" class="icons01">
    <img src="<?php echo getStaticUrl('images/intro-list02.png')?>" alt="" class="icons02">
    <div class="round">
      <div class="top-round"></div>
      <div class="circle right">
        <div class="circleprogress rightcircle"></div>
      </div>
    </div>
    <div class="left-round"></div>
    <dl class="list01">
      <dt>Meer Schijfruimte <span><em>alleen PRO</em></span></dt>
      <dd>Grondige registeropschoning en volledige <br> schijfdefragmentatie maakt meer ruimte vrij <br> voor de beste pc-prestaties.</dd>
    </dl>
    <dl class="list02">
      <dt>200%* Snellere PC <span><em>alleen PRO</em></span></dt>
      <dd>Verschoon en optimaliseer het systeem om uw <br> computer tot 200% sneller op te starten en te <br> laten draaien.</dd>
    </dl>
    <dl class="list03">
      <dt>Geen Overbodige Processen <span><em>alleen PRO</em></span></dt>
      <dd>Stop automatisch overbodige <br> achtergrondprocessen om te voorkomen dat <br> uw pc traag wordt.</dd>
    </dl>
    <dl class="list04">
      <dt>300%* Sneller Internet <span><em>alleen PRO</em></span></dt>
      <dd>Optimaliseer browserinstellingen om tot 300% <br> sneller te downloaden, surfen, gamen, en Youtube <br> video’s te kijken.</dd>
    </dl>
  </div>

  <h3 class="title2"><strong>Om Uw Computer en Privacy <span>Veilig</span> te Houden</strong></h3>
  <div class="message02">
    <div class="img-box">
      <img src="<?php echo getStaticUrl('images/computer.png')?>" alt="">
      <img src="<?php echo getStaticUrl('images/lock.png')?>" alt="" class="lock">
    </div>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/icons01.png')?>" alt=""></dt>
      <dd>
        <strong>Geen Ongewenste Toegang <span><em>alleen PRO</em></span></strong>
        Programma’s die stiekem toegang proberen te krijgen tot uw persoonlijke gegevens worden direct gedetecteerd. </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt=""></dt>
      <dd>
        <strong>Voorkom Malware-Infecties <span><em>alleen PRO</em></span></strong>
        Malware and spyware kunnen niet langer in uw computer inbreken dankzij realtime bescherming.</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt=""></dt>
      <dd>
        <strong>Wis Online Sporen <span><em>alleen PRO</em></span></strong>
        Uw persoonlijke online sporen worden automatisch gewist zodat u niet gevolgd wordt. </dd>
    </dl>
  </div>

  <h3 class="title3"><strong>Advanced SystemCare 13 PRO Kan <span>Veel Meer</span>  Dan Uw Huidige Versie</strong></h3>
  <div class="message03">
    <div class="box clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/icons04.png')?>" alt=""></dt>
        <dd>
          Verwijdert tot <strong>4GB Meer</strong> overbodige bestanden
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/icons05.png')?>" alt=""></dt>
        <dd>
          Wist Sporen van<strong>200+ Programma’s</strong> van alle gebruikersaccounts
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/icons06.png')?>" alt=""></dt>
        <dd>
          Optimaliseert  <strong>30% Meer</strong> opstart items voor een snelle pc
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/icons07.png')?>" alt=""></dt>
        <dd>
          Kan ten minste <strong>60% Meer</strong> software updaten voor de beste resultaten
        </dd>
      </dl>

    </div>
  </div>
</div>




<div class="bottom">
  <!-- review start -->
  <div class="review wrapper">
    <div id="dg-container" class="dg-container">
      <div class="nav">
        <span class="dg-prev"></span>
        <span class="dg-next"></span>
      </div>
       <div class="content dg-wrapper">
          <dl class="reviews active">
            <dt><h2><span>Media recensie</span></h2></dt>
            <dd>
              <p>"Er is niets vervelender dan een computer die zo vaak vastloopt dat het uw werk of online gamen belemmert. Advanced SystemCare heeft als doel om uw computer nieuw leven in te blazen. Niet alleen door het opruimen en verwijderen van ongewenste bestanden, malware, en ongeldige registerbestanden, maar ook door uw computer een boost te geven en de pc-prestaties te verbeteren."</p>
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
          <dl class="reviews last">
            <dt><h2><span>Klantbeoordeling</span></h2></dt>
            <dd> 
              <p>“Nr. 13 is mijn geluksgetal! Met Systemcare brengt Iobit niet slechts een vage update van versie12 uit, die net klaar is voor SSD. De architecture van SSD schijven gaf ruimte voor een nieuwe benadering in onderhoud en beveiliging met minder benodigde prestatietijd, terwijl ook HDD nog steeds aan zijn trekken komt. Natuurlijk kost het zoeken naar bestandsrestanten relatief meer tijd in vergelijk tot andere taken, want de fysieke C: schijf moet geheel uitgelezen worden, maar dan toch... En mijn favoriete tool aller-tijden de Ontbrekende Updates en Systeem Zwakheden Zoek-tool was echt heel alert, alleen daarom al adviseer ik alle vrienden die ik help altijd Iobit Sytemcare. Met versie 13 was het alsof ik een oude vriend terug ontmoette met een enthousisme net als toen ik ooit begon met Iobit Systemcare nr. 5. Welkom Iobit Sytemcare 13!”</p>
              <cite>Siegfried van Hoek </cite>
            </dd>
          </dl>
        </div>
        <ul>
          <li class="two" data-num="3"><img src="<?php echo getStaticUrl('images/rej-visschers-bernabela.png')?>" alt="R.E.J Visschers-Bernabela "></li>
          <li class="three" data-num="4"><img src="<?php echo getStaticUrl('images/siegfried-van-hoek.png')?>" alt="Siegfried van Hoek "></li>
          <li class="active" data-num="0"><img src="<?php echo getStaticUrl('images/cnet.png')?>" alt="Cnet"></li>
          <li class="four" data-num="1"><img src="<?php echo getStaticUrl('images/richard-beavers.png')?>" alt="Richard Beavers"></li>
          <li class="five" data-num="2"><img src="<?php echo getStaticUrl('images/patsy-clark.png')?>" alt="Patsy Clark"></li>
        </ul>
    </div>
  </div>
  <!-- review end -->
  <!-- awards start -->
  <div class="awards wrapper">
    <h2>Wereldwijde Awards</h2>
    <p>
      Dankzij het vertrouwen en de prijzen die wij de afgelopen 12 jaar hebben ontvangen van deze vooraanstaande media, weet u dat u de juiste optimaliseersoftware heeft.
    </p>
    <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
  </div>
  <!-- awards end -->
  <!-- footer start -->
  <div class="footer wrapper">
    <dl>
      <dd>
       Opmerking:
      </dd>
      <dd>* Advanced SystemCare 13 PRO is getest in ons interne test lab. Resultaten kunnen afwijken.</dd>
      <dd>* U kunt direct na de bestelling aan de slag met de RC versie van Advanced SystemCare 13 PRO. Bij de officiële lancering van Advanced SystemCare 13, laten we u weten dat u kunt updaten naar de definitieve versie.</dd>
    </dl>
    <p>Copyright © 2005 - <?php echo date('Y')?> IObit. Alle Rechten Voorbehouden</p>
  </div>
  <!-- footer end -->

</div>

<!-- floatlayer start -->
<div id="floatlayer" class="floatlayer">
  <div class="wrapper clearfix">
    <img class="fl" src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="Advanced SystemCare 12 PRO" width="121"/>
    <div class="number">
     SLECHTS
      <div class="countdown">
        <div class="scroll-tick"><span>0</span></div>
        <div class="scroll-tick"><span>0</span></div>
        <div class="scroll-tick"><span>0</span></div>
        <div class="scroll-tick last"><span>0</span></div>
      </div>
      OVER. <span><span class="viewNum"><?php echo $viewNum;?></span>  KIJKEN. </span>
    </div>
    <div class="price">
      <strong>€<b>14</b>,99</strong> <a href="https://www.iobit.com/buy.php?product=nl-asc13preorder1499&ref=nl_asc13preorderpopup1499<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=nl_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc13predorderpopup-nl');" class="buybtn"><span>Bestel Nu</span></a>
    </div>
  </div>
</div>
<!-- floatlayer end -->
  <script>refStr="<?php echo $refStr;?>";</script>
  <script src="<?php echo $pRootUrl;?>tpl/js/TweenMax.min.js"></script>
  <script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>