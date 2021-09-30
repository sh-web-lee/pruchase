<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';

}
include $pRootUrl.'include/common.inc.php';

if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'deascuxnov_p' . $date;
  $c_name_t='deascuxnov_t' . $date;
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
if(!empty($_GET['to'])){
  $refStr.='-'.$_GET['to'];
}
if(preg_match_all('/([0-9]*)\./',$_GET['ver'],$matches)){
  $ver=$matches[1][0].$matches[1][1];
  $refStr.='-'.$ver;
}
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['user'])?'':('-'.$_GET['user']);
$refStr.=empty($_GET['insday'])?'':('-'.$_GET['insday']);
$refStr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-t'.$_GET['type'].'-e'.$_GET['expd'];
?>
<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Heute sparen Sie bis zu 77% auf Advanced SystemCare Ultimate für mehr Produktivität!</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>

</head>
<body>
<!-- banner start -->
<div class="banner">
  <div class="wrapper">
    <a class="logo" href="https://www.iobit.com/de/index.php" target="_blank">IObit</a>
    <div class="title">
      <h1>Superrabatt  für mehr Produktivität</h1>
      <p>Bis zu <b>77%</b> reduziert - Begrenzte Anzahl von Geschenken</p>
    </div>
    <div class="clearfix">
      <div class="offer small">
        <div class="offer-img"><img src="<?php echo getStaticUrl('images/ascu-box.png')?>" alt=""/></div>
        <b class="discount">-50%</b>
        <div class="price">
          <p><strong><big>29</big>,99€</strong> UVP:<del>59,99€</del></p>
          <a class="buybtn gray"
             href="https://www.iobit.com/buy.php?product=de-ascu133pc2999&ref=de_au133pcsale2005<?php echo $refStr; ?>&refs=de_purchase_ascu"
             onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascusale2005-de');">
            <i class="all-icons"></i>
            <span>JETZT SPAREN</span>
          </a>
        </div>
      </div>
      <div class="offer big">
        <div class="offer-img">
          <img src="<?php echo getStaticUrl('images/ascu-box.png')?>" alt=""/>
          <img class="gift-img" src="<?php echo getStaticUrl('images/ascu-gift-box.png')?>" alt=""/>
        </div>
        <b class="discount">-77%</b>
        <div class="price">
          <p><strong><big>29</big>,99€</strong> UVP:<del>129,84€</del></p>
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=de-ascu133pcpfsd2999&ref=de_au133pcsdpfsale2005<?php echo $refStr; ?>&refs=de_purchase_ascu"
             onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascusale2005-de');">
            <i class="all-icons"></i>
            <span>JETZT SPAREN</span>
          </a>
          <p class="people">Geschenke machen den PC flott und sicher</p>
        </div>
        <div class="packsNum"><b>74</b> Geschenke übrig</div>
      </div>
    </div>
    <div class="four-number clearfix">
      <dl>
        <dt>15</dt>
        <dd>Jahre Erfahrung<br> im Bereich IT Sicherheit</dd>
      </dl>
      <dl>
        <dt>59.000.000</dt>
        <dd>Online-Bedrohungen<br> pro Tag blockiert</dd>
      </dl>
      <dl>
        <dt>250.000.000</dt>
        <dd>Benutzer in der<br> ganzen Welt</dd>
      </dl>
      <dl class="last">
        <dt>305</dt>
        <dd>Kooperationen mit<br> internationalen Unternehmen</dd>
      </dl>
    </div>
  </div>
</div>
<!-- banner end -->

<!-- feature start -->
<div class="feature">
  <div class="wrapper">
    <span class="arrow-up"></span>
    <ul>
      <li>
        Kürzlich arbeiten immer mehr Leute von zu Hause aus. In diesem Zusammenhang bieten wir unseren Benutzern einen Superrabatt von 77% auf Advanced SystemCare Ultimate.
      </li>
      <li class="two">
        Zusammen mit Bitdefender-Maschine hilft es dabei, Ihre privaten Dateien, Browser und E-Mails vor diversen Viren in Echtzeit zu schützen. Wenn die Homepage des Browsers geändert wird, kann es sofort erkannt werden.
      </li>
      <li class="three">
        Diese Anwendung kann die Geschwindigkeit Ihres Computers und Ihres Netzwerks beschleunigen. So bekommen Sie mehr Produktivität egal ob Sie im Büro oder zu Hause sind.  
      </li>
    </ul>
    <a class="more" href="javascript: void(0);">Mehr Vorteile von der Vollversion?</a>
  </div>
</div>
<!--  feature end -->

<!-- magazine start -->
<div class="magazine wrapper clearfix">
  <div class="book fl">
    <img src="<?php echo getStaticUrl('images/magazine.png')?>" alt="">
    <span class="glass"></span>
  </div>
  <div class="article fr">
    <h3>Advanced SystemCare Ultimate</h3>
    <p>
      Advanced SystemCare Ultimate ist ein umfangreicher Schutz für Ihren PC. Viren und Malware entfernen Sie mit dem Bitdefender-Modul von Ihrem PC. Das Programm blockiert Ransomware-Angriffe und verhindert den Zugriff von Außen auf Ihren Computer.
    </p>
    <span>-PCgo</span>
  </div>
</div>
<!-- magazine end -->

<!-- gifts start -->
<div class="gifts">
  <div class="wrapper">
    <h2>Mit unseren Gratisgeschenken sparen Sie mehr Zeit und Mühe</h2>
    <div class="gift-box clearfix">
      <dl class="one">
        <dt><img src="<?php echo getStaticUrl('images/sd-box.png')?>" alt=""/></dt>
        <dd>Defragmentiert ihre Festplatte automatisch und beschleunigt den Zugriff auf Dateien</dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/pf-box.png')?>" alt=""/></dt>
        <dd>Schützt Ihre persönlichen Dateien und hält sie von böswilligen Angriffen fern!</dd>
      </dl>
    </div>
  </div>
</div>
<!-- gifts end -->

<!-- review start -->
<div class="review wrapper">
  <h2>Redaktions-Tipp</h2>
  <p>Millionen von Nutzern weltweit haben ihre Erfahrungen geteilt</p>
  <div class=" clearfix">
    <img class="media-logo fl" src="<?php echo getStaticUrl('images/awrad.png')?>" alt=""/>
    <div class="review-content fr">
      <ul class="clearfix">
        <li class="on"><img src="<?php echo getStaticUrl('images/computer-bulid.png')?>" alt="ComputerBild"/></li>
        <li><img src="<?php echo getStaticUrl('images/rod-garnett.png')?>" alt="Rod Garnett"/></li>
        <li><img src="<?php echo getStaticUrl('images/dareen-lim.png')?>" alt="Dareen Lim"/></li>
        <li><img src="<?php echo getStaticUrl('images/russell-peck.png')?>" alt="Russell Peck"/></li>
      </ul>
      <span class="line">ComputerBild</span>
      <div class="review-message">
        <p class="on">
          Mit „Advanced SystemCare Ultimate“ schützen, analysieren, reparieren und optimieren Sie 
          Windows und Ihren PC. Die Tool-Sammlung sucht und beseitigt überflüssige Dateien, 
          fehlerhafte Registry-Einträge und Malware-Infektionen. Darüber hinaus ist eine komplette 
          Antivirensoftware enthalten. 
        </p>
        <p>
          „Advanced SystemCare Ultimate ist die neue Lösung. Der große Gewinner! Advanced SystemCare Ultimate ist die neue Lösung. Der große Gewinner! Mein Computer ist immer auf dem aktuellsten Stand und läuft superschnell. Wie oft mit anderen Produkten, habe ich hier absolut keine Probleme.“ 
        </p>
        <p>
          „Ich empfehle Advanced SystemCare Ultimate als ihre Antiviren- und Systemoptimierungssoftware. Mithilfe der letzten Version von Advanced SystemCare Ultimate hatte ich keine Probleme mit dem System, der Malware etc. Die neue Version bietet mehrere Features, um meinen Laptop 5x schneller zu machen, als zuvor. “
        </p>
        <p>
          „Eines der simpelsten und dennoch effektiven Programme, die ich zur Pflege aller meiner drei Computer benutze. Als ich die Inhalte von Advanced SystemCare Ultimate sah, wusste ich, dass ich es haben musste. Ich wurde nicht enttäuscht. Es ist eines der simpelsten und dennoch effektiven Programme, die ich zur Pflege aller meiner drei Computer benutze.“
        </p>
      </div>
    </div>
  </div>
</div>
<!-- end review -->

<!-- comparison start -->
<div class="comparison wrapper">
  <h2>Sehen Sie warum Sie die Vollversion aktivieren sollten</h2>
  <div class="tablebox">
    <table>
      <thead>
        <tr>
          <th colspan="2"></th>
          <th class="space7"></th>
          <th class="itema">Aktuelle Version</th>
          <th class="space3"></th>
          <th class="itemb">Vollversion</th>
        </tr>
      </thead> 
      <tbody>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon_01.png')?>" alt=""/></td>
          <td class="text">Bietet Bitdefender-Maschine</td>
          <td class="space7"></td>
          <td class="itema">30 Tage</td>
          <td class="space3"></td>
          <td class="itemb">1 Jahr</td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon_02.png')?>" alt=""/></td>
          <td class="text">Bietet Anti-Ransomware-Maschine</td>
          <td class="space7"></td>
          <td class="itema">30 Tage</td>
          <td class="space3"></td>
          <td class="itemb">1 Jahr</td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon_03.png')?>" alt=""/></td>
          <td class="text">Blockiert diverse Viren in Echtzeit</td>
          <td class="space7"></td>
          <td class="itema">30 Tage</td>
          <td class="space3"></td>
          <td class="itemb">1 Jahr</td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt=""/></td>
          <td class="text">Schützt Ihre wichtigen Dateien</td>
          <td class="space7"></td>
          <td class="itema">30 Tage</td>
          <td class="space3"></td>
          <td class="itemb">1 Jahr</td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon_05.png')?>" alt=""/></td>
          <td class="text">Verhindert unsichere Websites und Links</td>
          <td class="space7"></td>
          <td class="itema">30 Tage</td>
          <td class="space3"></td>
          <td class="itemb">1 Jahr</td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon_06.png')?>" alt=""/></td>
          <td class="text">Bereinigt Junk-Dateien und unnötige Registries</td>
          <td class="space7"></td>
          <td class="itema">30 Tage</td>
          <td class="space3"></td>
          <td class="itemb">1 Jahr</td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon_07.png')?>" alt=""/></td>
          <td class="text">Beschleunigt Ihren Computer um bis zu 200%</td>
          <td class="space7"></td>
          <td class="itema">30 Tage</td>
          <td class="space3"></td>
          <td class="itemb">1 Jahr</td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt=""/></td>
          <td class="text">Erhöht die Internet-Geschwindigkeit um bis zu 300%</td>
          <td class="space7"></td>
          <td class="itema">30 Tage</td>
          <td class="space3"></td>
          <td class="itemb">1 Jahr</td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon_09.png')?>" alt=""/></td>
          <td class="text">Sucht und behebt Systemschwachstellen gründlich</td>
          <td class="space7"></td>
          <td class="itema">30 Tage</td>
          <td class="space3"></td>
          <td class="itemb">1 Jahr</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
<!-- comparison end -->

<!-- service start -->
<div class="service wrapper clearfix">
  <dl>
    <dt><img src="<?php echo $pResUrl;?>images/moneyback.png" alt=""></dt>
    <dd>
      <h4>Zufriedenheitsgarantie</h4>
      <p>60-Tage-Geld-zurück-Garantie</p>
    </dd>
  </dl>
  <dl>
    <dt><img src="<?php echo $pResUrl;?>images/verified.png" alt=""></dt>
    <dd>
      <h4>Zahlungssicherheit</h4>
      <p>Ihre Zahlung ist 100% sicher</p>
    </dd>
  </dl>
  <dl>
    <dt><img src="<?php echo $pResUrl;?>images/veloce.png" alt=""></dt>
    <dd>
      <h4>Schnelle Aktivierung</h4>
      <p>Kurz nach dem Kauf erhalten Sie <br> einen Aktivierungscode.</p>
    </dd>
  </dl>
  <dl>
    <dt><img src="<?php echo $pResUrl;?>images/servizio.png" alt=""></dt>
    <dd>
      <h4>Kundendienst</h4>
      <p>Kostenloser technischer Support 24/7</p>
    </dd>
  </dl>
</div>
<!-- service end -->

<!-- footer start -->
<div class="footer">
  <div class="wrapper">
    <dl>
      <dd>Notiz:</dd>
      <dd>*. Solche Promotionsprogramme können von IObit nach eigenem Ermessen zu jeder Zeit und ohne vorherige Ankündigung geändert werden.</dd>
      <dd>*. Daten können sich system- oder computerabhängig ändern.</dd>
    </dl>
    <p class="copyright">Copyright 2005 - <?php echo date('Y')?> IObit. Alle Rechte vorbehalten</p>
  </div>
</div>
<!-- footer end -->

<!-- floatlayer start -->
<div id="floatlayer" class="floatlayer">
  <div class="wrapper clearfix">
    <div class="imgbox fl">
      <img src="<?php echo getStaticUrl('images/ascu-box.png')?>" alt=""/>
      <img class="gift-img" src="<?php echo getStaticUrl('images/ascu-gift-box.png')?>" alt=""/>
    </div>
    <div class="packsbox fl">
      <h2>PC schützen und beschleunigen? Los geht's</h2>
      <p class="packsNum">Nur noch <b>74<em class="reduce">74</em></b> Geschenke übrig</p>
    </div>
    <div class="price fr">
      <p><strong><big>29</big>,99€</strong> UVP: <del>129,84€</del></p>
      <a class="buybtn"
         href="https://www.iobit.com/buy.php?product=de-ascu133pcpfsd2999&ref=de_au133pcsdpfsale2005<?php echo $refStr; ?>&refs=de_purchase_ascu"
         onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascusale2005-de');">
        <i class="all-icons"></i>
        <span>77% sparen</span>
      </a>
    </div>
  </div>
</div>
<!-- floatlayer end -->

<!-- backtotop start -->
<a class="backtotop" href="javascript: void(0)">Top</a>
<!-- backtotop end -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>