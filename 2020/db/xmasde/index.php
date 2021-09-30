<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

function microtime_float()
{
  list($usec, $sec) = explode(' ', microtime());
  return ((float)$usec + (float)$sec);
}

$buyNum = ceil(microtime_float() * 1000 / 20000) - 69041325;
$buyNum = number_format($buyNum);
$viewNum = rand(60, 90);
if (!empty($_GET['action']) && ($_GET['action'] == 'getPacks')) {
  $date = $_GET['d'];
  $cName_t = 'xmasde2020_t' . $date;
  $cName_p = 'xmasde2020_p' . $date;
  $maxNum = rand(70, 90);
  $minNum = 3;
  $cookie = $_COOKIE[$cName_p];
  if ($cookie !== null) {
    $packsNum = $_COOKIE[$cName_p];
    if ($packsNum > $minNum) {
      $packsNum--;
      setcookie($cName_p, $packsNum);
    } else {
      $packsNum = $minNum;
    }
  } else {
    $packsNum = $maxNum;
    setcookie($cName_t, $packsNum);
    setcookie($cName_p, $packsNum);
  }
  echo json_encode(array('packsNum' => $packsNum));
  exit();
}
// $time = time();
// if(isset($_COOKIE['optimize'])&&$time-$_COOKIE['optimize']>86400){
//     header("Location:return.php");
//     exit;
// }else{
//   if(!isset($_COOKIE['optimize'])) setcookie('optimize',$time,$time+2592000);
// }

if (preg_match_all('/([0-9]*)\./', $_GET['ver'], $matches)) {
  $ver = $matches[1][0] . $matches[1][1];
  $refStr .= '-' . $ver;
}
$refStr.=empty($_GET['st'])?'':('-'.$_GET['st']);
$refStr.=empty($_GET['pop'])?'':('-'.$_GET['pop']);
$refStr.=empty($_GET['r'])?'':('-'.$_GET['r']);
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['user'])?'':('-'.$_GET['user']);
$refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);
$refStr.=empty($_GET['insday'])?'':('-'.$_GET['insday']);
$refStr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-t'.$_GET['type'].'-e'.$_GET['expd'];
?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <title>Sparen Sie heute bis zu 86% auf Driver Booster PRO – IObit!</title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css') ?>" rel="stylesheet">
  <?php echo $gJavascript['public']; ?>
  <?php echo $gJavascript['head']; ?>
</head>

<body>
  <!-- banner start -->
  <div class="banner">
    <div class="top-img" id="light-ctrl">
      <div class="light-0 on"></div>
      <div class="light-1"></div>
      <div class="snow"></div>
    </div>

    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com/de/index.php" target="_blank">IObit</a>
      <h1>ОГРАНИЧЕННОЕ ПРЕДЛОЖЕНИЕ</h1>
      <h2>Treiber und Spielkomponenten immer auf dem neuesten Stand!</h2>

      <div class="clearfix">
        <div class="banlist big">
          <div class="gift">
            <i></i>Es sind nur <b>12</b> Stück übrig.
          </div>
          <img src="<?php echo getStaticUrl('images/db-gift-box.png') ?>" alt="" />
          <div class="price">
            <p><strong>26,99€</strong> <del>187,92 €</del></p>
            <a class="buybtn" href="https://www.iobit.com/buy.php?product=de-db83pcsdpfisu2699&ref=de_db83pcsdpfisusale2012-i-u-t-e<?php echo $refStr; ?>&refs=de_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'db3pcbundlepurchase2012-de')">
              Jetzt kaufen
            </a>
          </div>
          <ul class="txtlist">
            <li><i class="all-icons"></i> Spart 160,93€</li>
            <li><i class="all-icons"></i> Driver Booster PRO <del>89,99€</del></li>
            <li><i class="all-icons red"></i> IObit Software Updater PRO <del>27,99€</del></li>
            <li><i class="all-icons red"></i> Protected Folder <del>39,95€</del></li>
            <li><i class="all-icons red"></i> Smart Defrag PRO <del>29,99€</del></li>
          </ul>
          <div class="discount"><b>-86%</b></div>
        </div>
        <div class="banlist">
          <img src="<?php echo getStaticUrl('images/db-box.png') ?>" alt="" />
          <div class="price">
            <p><strong>24,99€</strong> <del>69,99 €</del></p>
            <a class="buybtn" href="https://www.iobit.com/buy.php?product=de-db81pc2499&ref=de_db81pcsale2012-i-u-t-e<?php echo $refStr; ?>&refs=de_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'db1pcsinglepurchase2012-de')">
              Jetzt kaufen
            </a>
          </div>
          <ul class="txtlist">
            <li><i class="all-icons"></i> Spart 45€</li>
            <li><i class="all-icons"></i>Driver Booster PRO <del>69,99€</del></li>
          </ul>
          <div class="discount"><b>-64%</b></div>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->


  <div class="payment">
    <img src="<?php echo getStaticUrl('images/payment.png') ?>" alt="" />
    <p>
      <img src="<?php echo getStaticUrl('images/moneyback.png') ?>" alt="" />
      <span>
        60-Tage-Geld-zurück-Garantie - wir garantieren, dass die PRO-Version bei der Lösung von Treiberproblemen auf Ihrem PC hilft, andernfalls erstatten wir Ihnen Ihr Geld zurück!
      </span>
    </p>
  </div>

  <!-- feature start -->
  <div class="feature">
    <div class="triangle"></div>
    <h2 class="tree">Driver Booster macht Ihre Treiber-Updates einfacher und sicherer</h2>
    <div class="wrapper">
      <div class="clearfix">
        <div class="feature-img fl"><img src="<?php echo getStaticUrl('images/screen.png') ?>" alt="" /></div>
        <div class="feature-txt fr">
          <dl>
            <dt>
              <h3>Größere Datenbank </h3>
            </dt>
            <dd>Unterstützt mehr als 4.500.000 Treiber, die von<br> Microsoft zertifiziert sind.
            </dd>
          </dl>
          <dl class="two">
            <dt>
              <h3>Automatische Aktualisierung</h3>
            </dt>
            <dd>Aktualisiert Treiber automatisch auf die stabilsten<br> Versionen nach dem Zeitplan.
            </dd>
          </dl>
          <dl class="three">
            <dt>
              <h3>Maximale Spieleleistung </h3>
            </dt>
            <dd>Verbessert die Spielerlebnis mit aktuellen Game <br> Ready-Treibern und Komponenten.
            </dd>
          </dl>
          <dl class="four">
            <dt>
              <h3>Offline Driver Updater</h3>
            <dd>Aktualisiert Treiber ohne Internetverbindung, um
              <br> Netzwerkprobleme zu beheben oder ein neu
              <br> installiertes System einzurichten
            </dd>
            </dt>
          </dl>
          <span class="feature-icon one"></span>
          <span class="feature-icon two"></span>
          <span class="feature-icon three"></span>
          <span class="feature-icon four"></span>
        </div>
      </div>
    </div>
  </div>
  <!-- feature end -->

  <div class="line"></div>

  <!-- pro-comparison start -->
  <div class="pro-comparison">
    <div class="wrapper">
      <h2>
        <span class="tree">Warum sollten Sie Driver </span>
        <br>
        Booster gegenüber anderen Treiber-Update-Programmen wählen?
      </h2>
      <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <thead>
          <tr>
            <th class="itema"><i class="all-icons tabicon"></i> Driver Booster</th>
            <th class="itemb"><img src="<?php echo getStaticUrl('images/vs.png') ?>" alt="" /></th>
            <th class="itemc">Andere Produkte</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="itema">
              <p>Über
                <span>
                  4.500.000
                </span>
                Treiber von 5.000 Geräteherstellern in der Datenbank.
              </p>
            </td>
            <td class="itemb">
              <img src="<?php echo getStaticUrl('images/icon-01.png') ?>" alt="" />
              <h6>Größere Treiber-Datenbank</h6>
            </td>
            <td class="itemc">
              <p>
                Unterstützt nur
                <span>
                  500.000 - 3.000.000
                </span>
                Treiber
              </p>
            </td>
          </tr>
          <tr>
            <td class="itema">
              <p>
                <span>
                  Nur verifizierte und stabile Treiber
                </span>
                die den Windows WHQL-Test und IObit Review Test bestanden haben werden angeboten.
              </p>
            </td>
            <td class="itemb">
              <img src="<?php echo getStaticUrl('images/icon-02.png') ?>" alt="" />
              <h6>Sichere Aktualisierung </h6>
            </td>
            <td class="itemc">
              <p>
                <b>
                  Bietet Treiber
                </b>
                <span>
                  NICHT immer verifiziert
                </span>
                (manchmal werden sogar Beta-Versionen angeboten).
              </p>
            </td>
          </tr>
          <tr>
            <td class="itema">
              <p>
                Verschiedene
                <span>
                  nützliche Tools
                </span>
                zur Fehlerbehebung bei Netzwerk-, Ton-, Geräte- und anderen Problemen.
              </p>
            </td>
            <td class="itemb">
              <img src="<?php echo getStaticUrl('images/icon-03.png') ?>" alt="" />
              <h6>Fehlerbehebung</h6>
            </td>
            <td class="itemc">
              <p>
                <span> KEINE Tools</span>
                zur Behebung von Geräteproblemen.
              </p>
            </td>
          </tr>
          <!-- <tr>
            <td class="itema">
              <p>В наличии <span>несколько полезных инструментов</span> для устранения проблем с сетью, звуком, разрешениям экрана и другими.</p>
            </td>
            <td class="itemb">
              <img src="<?php echo getStaticUrl('images/icon-04.png') ?>" alt="" />
              <h6>Устранение проблем</h6>
            </td>
            <td class="itemc">
              <p>
                <b>
                  НЕ
                </b>
                предоставляют аналогичные инструменты для устранения проблем с устройством.
              </p>
            </td>
          </tr>
          <tr>
            <td class="itema">
              <p>
                Функция
                <b>
                  Ускорение Игр
                </b>
                оптимизирует системные ресурсы для повышения производительности ПК в играх..
              </p>
            </td>
            <td class="itemb">
              <img src="<?php echo getStaticUrl('images/icon-05.png') ?>" alt="" />
              <h6>Ускорение в играх</h6>
            </td>
            <td class="itemc">
              <p>
                <b>
                  НЕ
                </b>
                имеют аналогичной функции.
              </p>
            </td>
          </tr>
          <tr class="last">
            <td class="itema">
              <p><span>Дешевле</span> - 690 рублей, чтобы получить более мощный инструмент обновления драйверов.</p>
            </td>
            <td class="itemb">
              <img src="<?php echo getStaticUrl('images/icon-06.png') ?>" alt="" />
              <h6>Доступный</h6>
            </td>
            <td class="itemc">
              <p>Стоимость других программ для обновления драйверов обычно составляет от 1000 до 2000 рублей.</p>
            </td>
          </tr> -->
        </tbody>
      </table>
    </div>
    <a class="db-more" href="#tab2" onclick="return false;">Erfahren Sie mehr über Drvier Booster ></a>

  </div>
  <!-- pro-comparison end -->




  <div class="feature-tile">
    <h2>
      <span class="tree">Das Weihnachtsangebot sorgt für eine </span>
      <br>
      optimale Leistung Ihres Computers
    </h2>
    <div class="feature-tile__main">
      <div class="unit" id="tab2">
        <img src="<?php echo getStaticUrl('images/feature-tile-img-0.png') ?>" alt="">
        <div class="blank"></div>
        <div class="text">
          <h3>Automatische Software Updates</h3>
          <p>Aktualisiert die Software auf Ihrem Computer einfach auf die neueste Version, ohne einen Webbrowser zu öffnen.</p>
          <p>Automatische Updates können geplant werden und verfügbare Updates können so - ohne zu stören - gedownloaded und installiert werden</p>
        </div>
      </div>
      <div class="unit">
        <div class="text">
          <h3>Beste Lösung zur Defragmentierung Ihrer Festplatten</h3>
          <p>Defragmentiert Ihre Festplatten und Dateien automatisch und intelligent auf Ihrem PC zu jeder Zeit mit maximaler Leistung.</p>
          <p>Regelmäßige geplante Defragmentierung erhöht effektiv den Computerstart und verbessert die Leistung Ihres alten Computers.</p>
        </div>
        <div class="blank"></div>
        <img src="<?php echo getStaticUrl('images/feature-tile-img-1.png') ?>" alt="">
      </div>
      <div class="unit">
        <img src="<?php echo getStaticUrl('images/feature-tile-img-2.png') ?>" alt="">
        <div class="blank"></div>
        <div class="text">
          <h3>Ideales Tool für Ihre Privatsphäre und Daten</h3>
          <p>Schützt Ihre wichtigen Dateien und Daten vor Diebstahl, Verlust, Lecks, Spyware, Ransomware und anderen Viren.</p>
          <p>Sie müssen nur ein Kennwort festlegen, um wichtige Ordner und Daten zu verschlüsseln.</p>
        </div>
      </div>
    </div>
  </div>


  <!-- review -->
  <div class="review">
    <h2>
      <em class="tree">Der beste Treiber-Updater </em>
      <br>
      Von Experten und Benutzern geliebt und täglich benutzt

    </h2>

    <div class="wrapper">
      <div id="dg-container" class="dg-container">
        <div class="nav">
          <span class="dg-prev"></span>
          <span class="dg-next"></span>
        </div>
        <div class="content dg-wrapper">
          <dl class="reviews">
            <dt>
              <div class="img-container">
                <img src="<?php echo getStaticUrl('images/pc.png') ?>" alt="">
                <!-- <p style="text-align: center;   margin-top: 5px;  font-size: 16px;    font-weight: bold;">Media Review</p> -->
              </div>
            </dt>
            <dd>
              <p>"IObit produziert viele Optimierungsprogramme, z.B. Driver Booster PRO, der Ihre Treiber automatisch aktualisiert, ist ja eine der besten. Driver Booster PRO bietet mehrere Funktionenen und Lizenz-Schlüssel zu einem guten Preis sowie eine anpassbare Benutzeroberfläche, die beim Anzeigen spezifischer Hardware-Informationen gut macht. Seine Wettbewerber wie Ashampoo Driver Updater und SlimWare Utilities DriverUpdate bieten überzeugende Funktionen an, aber IObit Driver Booster PRO tut krass besser."</p>
              <cite>PC Magazine</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt>
              <div class="img-container"><img src="<?php echo getStaticUrl('images/harold-barr.png') ?>" alt=""></div>
            </dt>
            <dd>
              <p>"Was für eine Überraschung, den neuen Driver Booster von IObit zu erhalten. Sobald die Installation fertig ist, startet sein Update sofort. Nachdem das Upgrade abgeschlossen war, sah es so aus, als ob mein PC komplett überarbeitet worden wäre. Wirklich super!"</p>
              <cite>Harold Barr</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt>
              <div class="img-container"><img src="<?php echo getStaticUrl('images/anekcen.png') ?>" alt=""></div>
            </dt>
            <dd>
              <p>"Auf die heutige Zeit bezogen, ist es sehr schwierig, immer mit den Treibern auf dem neuesten Stand zu sein. Da ich mit meinem PC viel experementiere und immer wieder was neues ausprobiere, bin ich eben auf den Driver Booster gekommen, weil Ihr immer fast genau, aktuell seid. Ich bin ein Hobby Mensch in Sachen PC`s und freu mich immer über neue Errungenschaften. Macht weiter so und wir werden im Geschäft bleiben. "</p>
              <cite>Peter Bomers</cite>
            </dd>
          </dl>
        </div>
      </div>
      <div class="title-0"></div>
      <div class="title-1"></div>
    </div>
  </div>
  <!-- end review -->



  <!-- comparison start -->
  <div class="comparison">
    <h2 class="tree">Welche Vorteile bietet Ihnen die PRO Version?</h2>
    <div class="wrapper">
      <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <thead>
          <tr>
            <th class="itema">
              <div class="name">Ihre aktuelle Version</div>
            </th>
            <th class="itemb"></th>
            <th class="itemc">
              <div class="name">Driver Booster PRO</div>
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="itema">350 Millionen</td>
            <td class="itemb">
              Größere DatenBank, um mehr veraltete & seltene Treiber zu aktualisieren
            </td>
            <td class="itemc">
              450 Millionen
            </td>
          </tr>
          <tr>
            <td class="itema"><i class="all-icons tabicon"></i></td>
            <td class="itemb">
              Scan-Priorität zwischen den stabilsten oder den neuesten Treiber <span style="color: #00b050;">Neu</span>
            </td>
            <td class="itemc">
              <i class="smile"></i>
            </td>
          </tr>
          <tr>
            <td class="itema"><i class="all-icons tabicon"></i></td>
            <td class="itemb">

              100% * Schnellere Downloadgeschwindigkeit

            </td>
            <td class="itemc">
              <i class="smile"></i>
            </td>
          </tr>
          <tr>
            <td class="itema"><i class="all-icons tabicon"></i></td>
            <td class="itemb">
              Einfache Behebung von Gerätefehlern 
            </td>
            <td class="itemc">
              <i class="smile"></i>
            </td>
          </tr>
          <tr>
            <td class="itema"><i class="all-icons tabicon"></i></td>
            <td class="itemb">

              Aktualisiert Treiber ohne Internetverbindung <span style="color: #00b050;">Neu</span>

            </td>
            <td class="itemc">
              <i class="smile"></i>
            </td>
          </tr>
          <tr>
            <td class="itema"><i class="all-icons tabicon"></i></td>
            <td class="itemb">

              Automatische Sicherung aller Treiber 

            </td>
            <td class="itemc">
              <i class="smile"></i>
            </td>
          </tr>
          <tr>
            <td class="itema"><i class="all-icons tabicon"></i></td>
            <td class="itemb">

              Automatisches Herunterladen, Installieren und Aktualisieren der Treiber während dem Systemleerlauf

            </td>
            <td class="itemc">
              <i class="smile"></i>
            </td>
          </tr>
          <tr>
            <td class="itema"><i class="all-icons tabicon"></i></td>
            <td class="itemb">

              Flüssigere und bessere Spielperformance durch das Updaten von Game-Ready-Treibern

            </td>
            <td class="itemc">
              <i class="smile"></i>
            </td>
          </tr>
          <tr>
            <td class="itema"><i class="all-icons tabicon"></i></td>
            <td class="itemb">
              Bietet Spielkomponenten für ein besseres Spielerlebnis
            </td>
            <td class="itemc">
              <i class="smile"></i>
            </td>
          </tr>
          <tr>
            <td class="itema"><i class="all-icons tabicon"></i></td>
            <td class="itemb">
              Automatische Updates auf die neuste Version

            </td>
            <td class="itemc">
              <i class="smile"></i>
            </td>
          </tr>
          <tr class="last">
            <td class="itema"><i class="all-icons tabicon"></i></td>
            <td class="itemb">
              Kostenloser technischer Support 24/7
            </td>
            <td class="itemc">
              <i class="smile"></i>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <!-- comparison end -->

  <!-- service start -->
  <div class="service wrapper clearfix">
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/moneyback-big.png') ?>" alt="" /></dt>
      <dd>
        <h3>Zufriedenheitsgarantie</h3>
        <p>60-Tage-Geld-zurück-Garantie<br></p>
      </dd>
    </dl>
    <dl class="two">
      <dt><img src="<?php echo getStaticUrl('images/verified.png') ?>" alt="" /></dt>
      <dd>
        <h3>Zahlungssicherheit</h3>
        <p> Ihre Zahlung ist 100% sicher</p>
      </dd>
    </dl>
    <dl class="three">
      <dt><img src="<?php echo getStaticUrl('images/veloce.png') ?>" alt="" /></dt>
      <dd>
        <h3>Schnelle Aktivierung </h3>
        <p>
          Kurz nach dem Kauf erhalten Sie<br>einen Aktivierungscode. <br>
        </p>
      </dd>
    </dl>
    <dl class="four">
      <dt><img src="<?php echo getStaticUrl('images/servizio.png') ?>" alt="" /></dt>
      <dd>
        <h3>Kundendienst</h3>
        <p>Kostenloser technischer<br> Support 24/7</p>
      </dd>
    </dl>
  </div>
  <!-- service end -->

  <!-- footer start -->
  <div class="footer">
    <div class="wrapper">
      <dl>
        <dt>Hinweis:</dt>
        <dd>
          *. Solche Promotionsprogramme können von IObit nach eigenem Ermessen zu jeder Zeit und ohne vorherige Ankündigung geändert werden.
        </dd>
        <dd>
          *. Daten können sich system- oder computerabhängig ändern.
        </dd>
      </dl>
      <p class="copyright"> Copyright © 2005 - <?php echo date('Y') ?> IObit. Alle Rechte vorbehalten.</p>
    </div>
  </div>
  <!-- footer end -->

  <!-- floatlayer start -->
  <div id="floatlayer" class="floatlayer">
    <div class="wrapper clearfix">
      <div class="left fl">
        <img src="<?php echo getStaticUrl('images/db-gift-box.png') ?>" alt="" />
      </div>
      <div class="text fl">
        <h3>Es sind nur <b>12</b> stück übrig</h3>
        <h2>Lösen Sie alle Treiberprobleme einfach!</h2>
      </div>
      <div class="price fr">
        <p><strong>26,99€</strong> <del>187,92 €</del></p>
        <a class="buybtn" href="https://www.iobit.com/buy.php?product=de-db83pcsdpfisu2699&ref=de_db83pcsdpfisusale2012-i-u-t-e<?php echo $refStr; ?>&refs=de_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'db3pcbundlepurchase2012-de')">Jetzt kaufen</a>
      </div>
    </div>
  </div>
  <!-- floatlayer end -->

  <!-- 
  <div class="popup" id="popup">
    <div class="mask"></div>
    <div class="container">
      <div class="close"></div>
      <h2>Вы получили дополнительную скидку <b>-50 руб.</b>!</h2>
      <h3>Предложение закончится через <b>2</b><b>5</b> секунт</h3>
      <div class="content cf">
        <div class="img fl"></div>
        <div class="text fl">
          <p class="line-0">690 руб.</p>
          <p class="line-1">Только <b>640</b>руб.</p>
          <a class="buybtn" href="https://www.iobit.com/buy.php?product=ru-db83pcsdisu690&ref=ru_db83pcsdisu690purchasexmas<?php echo $refStr; ?>&aff=<?php echo $_GET['aff'] ?><?php echo $refStr; ?>&refs=ru_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase3pcsdisu2011-ru');">Получить сейчас</a>
        </div>
      </div>
    </div>
  </div> -->


  <script src="<?php echo $pRootUrl; ?>tpl/js/modernizr.min.js"></script>
  <script src="<?php echo $pRootUrl; ?>/tpl/js/review-3d-carousel.min.js"></script>
  <script src="<?php echo getStaticUrl('script/script.js') ?>"></script>
</body>

</html>