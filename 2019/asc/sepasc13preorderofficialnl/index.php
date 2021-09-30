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
  $c_name = 'nlascpre_p' . $date;
  $c_name_t='nlascpre_t' . $date;
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
?>
<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>70% Korting op het Nieuwe Advanced SystemCare 13 PRO - IObit</title>
<meta name="Copyright" content="IObit">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
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
          <strong>€<b>14</b>,99</strong> <a href="https://www.iobit.com/buy.php?product=nl-asc13preorder1499&ref=nl_asc13preorderofficial1499<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=nl_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc13predorderofficial-nl');" class="buybtn"><span>Bestel Nu</span></a>
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
    <h2> Waarom Advanced SystemCare 13 PRO?</h2>
    <div class="title">
      <span class="arrow"></span>
      <h2> Waarom Advanced SystemCare 13 PRO?</h2>
    </div>
  <div class="left-message">
    <div class="message">
      
      <div class="list">
        <h3>Snellere Computer</h3>
        <dl>
          <dt>200%* Snellere PC</dt>
          <dd>Verschoon en optimaliseer uw systeem om sneller op te <br> starten en uw computer tot 200% sneller te maken.</dd>
        </dl>
        <dl>
          <dt>300%* Sneller Internet</dt>
          <dd>Optimaliseer browserinstellingen om tot 300% sneller <br> te downloaden, surfen, gamen, en Youtube video’s te kijken.</dd>
        </dl>
      </div>
    </div>
    <div class="message">
      <div class="list">
        <h3>Veiliger Surfen</h3>
        <dl>
          <dt>Privacy Schild  </dt>
          <dd>Blokkeer ongewenste toegang tot gevoelige gegevens zoals <br> contacten, e-mails, Dropbox, OneDrive.  </dd>
        </dl>
        <dl>
          <dt>Veilig Browsen</dt>
          <dd>Wis automatisch browsegegevens en verberg uw sporen <br> zodat niemand meekijkt naar wat u leest, bekijkt en koopt.</dd>
        </dl>
      </div>
    </div>
    <div class="message last">
      <div class="list">
        <h3>Andere Functies</h3>
        <ul class="active">
          <li>Automatisch overbodige bestanden opschonen op een gepland moment.</li>
          <li>Schoon het register grondig op om crashes en systeemfouten te voorkomen.</li>
          <li>Bescherm automatisch en in real time tegen malware-infecties.</li>
          <li>Stop automatisch overbodige services om RAM vrij te maken.</li>
          <li>Leg indringers automatisch vast met FaceID.</li>
          <li class="on">Detecteer alle kwetsbaarheden die uw systeem in gevaar brengen.</li>
          <li>Detecteer schadelijke links in uw web-based e-mails. </li>
          <li>Verwijder automatisch storende advertenties van webpagina’s.</li>
          <li>Update verouderde software in één klik.</li>
          <li>Update automatisch naar de laatste versie.</li>
          <li>Gratis 24/7 technische ondersteuning.</li>
        </ul>
      </div>
    </div>
  </div>
  <div class="change-img">
    <div class="list-img list01 show">
      <img src="<?php echo getStaticUrl('images/intro1.png')?>" alt="" class="nomal">
      <div class="scan">
        <div class="circleprogress-content">
          <div class="circle right">
              <div class="circleprogress rightcircle"></div>
          </div>
          <div class="circle left">
              <div class="circleprogress leftcircle"></div>
          </div>
       </div>
      </div>
      <div class="img-before">
        <span class="change-num">50</span>
        <span class="completed"></span>
        <div class="circle">
          <div class="top-circle"></div>
          <div class="bottom-circle"></div>
        </div>
      </div>

    </div>
    <div class="list-img list02">
      <img src="<?php echo getStaticUrl('images/intro2.png')?>" alt="" class="nomal2">
      <div class="privacy">
        <span class="icon"></span>
        <div class="check"></div>
        <span class="text">1 verborgen toegang</span>
      </div>
      <div class="privacy-right"></div>
    </div>
    <div class="list-img list03">
      <img src="<?php echo getStaticUrl('images/intro3.png')?>" alt="" class="nomal3">
      <div class="icon-list">
        <span class="icons01"><i></i></span>
        <span class="icons02"><i></i></span>
        <span class="icons03"><i></i></span>
        <span class="icons04"><i></i></span>
        <span class="icons05"><i></i></span>
        <span class="icons06 active"><i></i></span>
      </div>
    </div>
  </div>
</div>

<div class="review-content">
  <div class="wrapper">
    <span class="arrow"></span>
    <h2>Meer over Advanced SystemCare 13 PRO.</h2>
    <h3>Wat Wij Doen Voor Onze Gebruikers</h3>
    <div class="present">
      <dl class="first">
        <dt><img src="<?php echo getStaticUrl('images/icons01.png')?>" alt=""></dt>
        <dd>
          Problemen oplossen voor  <strong>30.000.000</strong> gebruikers
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt=""></dt>
        <dd>
          <strong>2.666.667 </strong> uur per maand besparen
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt=""></dt>
        <dd>
         <strong>$1,18 miljard </strong> per jaar besparen
        </dd>
      </dl>
    </div>
    <!-- review start -->
    <div class="review">
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
          <dl class="reviews">
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
  </div>
</div>
<div class="bottom">
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
      <strong>€<b>14</b>,99</strong> <a href="https://www.iobit.com/buy.php?product=nl-asc13preorder1499&ref=nl_asc13preorderofficial1499<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=nl_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc13predorderofficial-nl');" class="buybtn"><span>Bestel Nu</span></a>
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