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
          <strong>€<b>14</b>,99</strong> <a href="https://www.iobit.com/buy.php?product=nl-asc13preorder1499&ref=nl_asc13preorderrc1499<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=nl_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc13predorderrc-nl');  " class="buybtn"><span>Bestel Nu</span></a>
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

<!-- intro -->
<div class="intro wrapper clearfix">
  <span class="arrow"></span>
  <h2> Waarom upgraden naar Advanced SystemCare 13 PRO?</h2>
  <div class="title">
    <span class="arrow"></span>
    <h2> Waarom upgraden naar Advanced SystemCare 13 PRO?</h2>
  </div>
  <div class="left-message">
    <div class="message">

      <div class="list">
        <h3>Snellere Computer</h3>
        <dl>
          <dt>200%* Snellere PC</dt>
          <dd>Verschoon en optimaliseer uw systeem om sneller op te <br> starten en uw computer tot 200% sneller te maken.</dd>
          <dd><em>ALLEEN PRO</em></dd>
        </dl>
        <dl>
          <dt>300%* Sneller Internet</dt>
          <dd>Optimaliseer browserinstellingen om tot 300% sneller <br> te downloaden, surfen, gamen, en Youtube video’s te kijken.</dd>
          <dd><em>ALLEEN PRO</em></dd>
        </dl>
      </div>
    </div>

    <div class="message">
      <div class="list">
        <h3>Veiliger Surfen</h3>
        <dl>
          <dt>Privacy Schild  </dt>
          <dd>Blokkeer ongewenste toegang tot gevoelige gegevens zoals <br> contacten, e-mails, Dropbox, OneDrive. </dd>
          <dd><em>ALLEEN PRO</em></dd>
        </dl>
        <dl>
          <dt>Veilig Browsen</dt>
          <dd>Wis automatisch browsegegevens en verberg uw sporen <br> zodat niemand meekijkt naar wat u leest, bekijkt en koopt.</dd>
          <dd><em>ALLEEN PRO</em></dd>
        </dl>
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
  </div>
</div>
<!-- end intro -->

<!-- comparison -->
<div class="comparison wrapper">
  <span class="arrow"></span>
  <h2>Meer over Advanced SystemCare 13 PRO</h2>
  <table>
    <thead>
    <tr>
      <th colspan="2"></th>
      <th class="item">
        <div>Uw Huidige Versie</div>
      </th>
      <th class="item-up">
        <div>Advanced SystemCare <br> 13 PRO</div>
      </th>
    </tr>
    </thead>
    <tbody>
    <!-- 01 -->
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl;?>images/icon01.png" alt=""></td>
      <td class="text">Basis pc-opschoning en optimalisering.  </td>
      <td class="item"><span class="all-icons">√</span></td>
      <td class="item-up"><span class="all-icons">√</span></td>
    </tr>
    <!-- 02 -->
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl;?>images/icon02.png" alt=""></td>
      <td class="text"> Basis pc-bescherming met spyware verwijdering.</td>
      <td class="item"><span class="all-icons">√</span></td>
      <td class="item-up"><span class="all-icons">√</span></td>
    </tr>
    <!-- 03 -->
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl;?>images/icon03.png" alt=""></td>
      <td class="text">Leg indringers automatisch vast met FaceID.   </td>
      <td class="item"><span class="all-icons">√</span></td>
      <td class="item-up"><span class="all-icons">√</span></td>
    </tr>
    <!-- 04 -->
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl;?>images/icon04.png" alt=""></td>
      <td class="text">Detecteer schadelijke links in uw web-based e-mails.  </td>
      <td class="item"><span class="all-icons">√</span></td>
      <td class="item-up"><span class="all-icons">√</span></td>
    </tr>
    <!-- 05 -->
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl;?>images/icon05.png" alt=""></td>
      <td class="text">Automatisch opschonen en optimaliseren op een gepland moment. </td>
      <td class="item"><span class="all-icons nope">-</span></td>
      <td class="item-up"><span class="all-icons">√</span></td>
    </tr>
    <!-- 06 -->
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl;?>images/icon06.png" alt=""></td>
      <td class="text">Schoon het register grondig op om crashes en systeemfouten te voorkomen. </td>
      <td class="item"><span class="all-icons nope">-</span></td>
      <td class="item-up"><span class="all-icons">√</span></td>
    </tr>
    <!-- 07 -->
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl;?>images/icon07.png" alt=""></td>
      <td class="text">Bescherm automatisch en in real time tegen malware-infecties. </td>
      <td class="item"><span class="all-icons nope">-</span></td>
      <td class="item-up"><span class="all-icons">√</span></td>
    </tr>
    <!-- 08 -->
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl;?>images/icon08.png" alt=""></td>
      <td class="text">Stop automatisch overbodige services om RAM vrij te maken. </td>
      <td class="item"><span class="all-icons nope">-</span></td>
      <td class="item-up"><span class="all-icons">√</span></td>
    </tr>
    <!-- 09 -->
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl;?>images/icon09.png" alt=""></td>
      <td class="text">Detecteer alle kwetsbaarheden die uw systeem in gevaar brengen.</td>
      <td class="item"><span class="all-icons nope">-</span></td>
      <td class="item-up"><span class="all-icons">√</span></td>
    </tr>
    <!-- 10 -->
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl;?>images/icon10.png" alt=""></td>
      <td class="text">Verwijder automatisch storende advertenties van webpagina’s. </td>
      <td class="item"><span class="all-icons nope">-</span></td>
      <td class="item-up"><span class="all-icons">√</span></td>
    </tr>
    <!-- 11 -->
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl;?>images/icon11.png" alt=""></td>
      <td class="text">Update verouderde software in één klik. </td>
      <td class="item"><span class="all-icons nope">-</span></td>
      <td class="item-up"><span class="all-icons">√</span></td>
    </tr>
    <!-- 12 -->
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl;?>images/icon12.png" alt=""></td>
      <td class="text">Update automatisch naar de laatste versie. </td>
      <td class="item"><span class="all-icons nope">-</span></td>
      <td class="item-up"><span class="all-icons">√</span></td>
    </tr>
    <!-- 13 -->
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl;?>images/icon13.png" alt=""></td>
      <td class="text">Gratis 24/7 technische ondersteuning.    </td>
      <td class="item"><span class="all-icons nope">-</span></td>
      <td class="item-up last"><span class="all-icons">√</span></td>
    </tr>
    </tbody>
  </table>
  <span class="border"></span>
</div>
<!-- end comparison -->

<!-- review -->
<div class="review">
  <div class="wrapper">
    <span class="arrow"></span>
    <h2>Wat Wij Doen Voor Onze Gebruikers</h2>
    <div class="review-content clearfix">
      <div class="review-icons fl">
        <dl class="clearfix">
          <dt class="fl"><img src="<?php echo $pResUrl;?>images/review-icon01.png" alt=""></dt>
          <dd class="fl">
            Problemen <br>
            oplossen voor <br>
            <b>30.000.000</b> gebruikers
          </dd>
        </dl>
        <dl class="clearfix">
          <dt class="fl"><img src="<?php echo $pResUrl;?>images/review-icon02.png" alt=""></dt>
          <dd class="fl">
            <b>2.666.667</b> <br>
            uur per maand <br>
            besparen
          </dd>
        </dl>
        <dl class="clearfix">
          <dt class="fl"><img src="<?php echo $pResUrl;?>images/review-icon03.png" alt=""></dt>
          <dd class="fl">
            <b>$1,18 miljard </b> <br>
            per jaar<br>
            besparen
          </dd>
        </dl>
      </div>
      <div class="review-users fr">
        <div class="review-details">
          <div>
            <h3>Media recensie</h3>
            <p>"Er is niets vervelender dan een computer die zo vaak vastloopt dat het uw werk of online gamen belemmert. Advanced SystemCare heeft als doel om uw computer nieuw leven in te blazen. Niet alleen door het opruimen en verwijderen van ongewenste bestanden, malware, en ongeldige registerbestanden, maar ook door uw computer een boost te geven en de pc-prestaties te verbeteren."</p>
            <cite>Cnet</cite>
          </div>
          <div>
            <h3>Klantbeoordeling</h3>
            <p>“Ik heb over de jaren verschillende programma’s geprobeerd die computers probleemloos zouden doen werken. Een paar jaar geleden ben ik bij ASC uitgekomen, in eerste instantie de gratis versie. Toen ik merkte dat ik eindelijk van alle computerproblemen en ergernissen af was, ben ik naar de betaalde versie overgestapt en hoef ik er niet meer naar om te kijken. Advanced SystemCare Pro is de enige die ik anderen zou aanbevelen, gebaseerd op mijn ervaring. Ik gebruik ook IObit Uninstaller, Smart Defrag en Driver Booster, dat maakt het nog gemakkelijker.”</p>
            <cite>Richard Beavers</cite>
          </div>
           <div>
            <h3>Klantbeoordeling</h3>
            <p>“Advanced System Care is een geweldig programma. Ik gebruik het al jaren en het werkt fantastisch. Ze verbeteren hun producten continu en het wordt alleen maar beter over de jaren. Ik gebruik meerdere IObit producten en ze werken allemaal volledig naar behoren.”</p>
            <cite>Patsy Clark</cite>
          </div>
          <div>
            <h3>Klantbeoordeling</h3>
            <p>“Ik heb Advanced SystemCare 12 en de 13 beta, gedownload en uitgebreid getest (win 7). De uitstraling is mooi en overzichtelijk. De nieuwe functies zijn super.”</p>
            <cite>R.E.J Visschers-Bernabela</cite>
          </div>
          <div class="five">
            <h3>Klantbeoordeling</h3>
            <p>“Nr. 13 is mijn geluksgetal! Met Systemcare brengt Iobit niet slechts een vage update van versie12 uit, die net klaar is voor SSD. De architecture van SSD schijven gaf ruimte voor een nieuwe benadering in onderhoud en beveiliging met minder benodigde prestatietijd, terwijl ook HDD nog steeds aan zijn trekken komt. Natuurlijk kost het zoeken naar bestandsrestanten relatief meer tijd in vergelijk tot andere taken, want de fysieke C: schijf moet geheel uitgelezen worden, maar dan toch... En mijn favoriete tool aller-tijden de Ontbrekende Updates en Systeem Zwakheden Zoek-tool was echt heel alert, alleen daarom al adviseer ik alle vrienden die ik help altijd Iobit Sytemcare. Met versie 13 was het alsof ik een oude vriend terug ontmoette met een enthousisme net als toen ik ooit begon met Iobit Systemcare nr. 5. Welkom Iobit Sytemcare 13!”</p>
            <cite>Siegfried van Hoek</cite>
          </div>
        </div>
        <div class="review-photos clearfix">
          <ul class="fr">
            <li class="one" data-num="0" data-fixed="0"><img src="<?php echo $pResUrl;?>images/cnet.png" alt="Cnet"></li>
            <li class="two" data-num="4" data-fixed="4"><img src="<?php echo $pResUrl;?>images/siegfried-van-hoek.png" alt="Siegfried van Hoek "></li>
            <li class="three" data-num="3" data-fixed="3"><img src="<?php echo $pResUrl;?>images/rej-visschers-bernabela.png" alt="R.E.J Visschers-Bernabela"></li>
            <li class="four" data-num="2" data-fixed="2"><img src="<?php echo $pResUrl;?>images/patsy-clark.png" alt="Patsy Clark"></li>
            <li class="five" data-num="1" data-fixed="1"><img src="<?php echo $pResUrl;?>images/richard-beavers.png" alt="Richard Beavers"></li>
          </ul>
        </div>
        <a class="next" href="javascript: userNext();"></a>
      </div>
    </div>
  </div>
</div>
<!-- end review -->

<!-- bottom -->
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
  <div class="footer">
    <div class="wrapper">
      <dl>
        <dd>
          Opmerking:
        </dd>
        <dd>* Advanced SystemCare 13 PRO is getest in ons interne test lab. Resultaten kunnen afwijken.</dd>
        <dd>* U kunt direct na de bestelling aan de slag met de RC versie van Advanced SystemCare 13 PRO. Bij de officiële lancering van Advanced SystemCare 13, laten we u weten dat u kunt updaten naar de definitieve versie.</dd>
      </dl>
      <p>Copyright © 2005 - <?php echo date('Y')?> IObit. Alle Rechten Voorbehouden</p>
    </div>
  </div>
  <!-- footer end -->

</div>
<!-- end bottom -->

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
      OVER. <span><span class="viewNum"><?php echo $viewNum;?></span> KIJKEN NU. </span>
    </div>
    <div class="price">
      <strong>€<b>14</b>,99</strong>
      <a href="https://www.iobit.com/buy.php?product=nl-asc13preorder1499&ref=nl_asc13preorderrc1499<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=nl_purchase_asc"
         onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc13predorderrc-nl');  "
         class="buybtn">
        <span>Bestel Nu</span>
      </a>
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