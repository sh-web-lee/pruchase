<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}

if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = '2020xmasxre_p' . $date;
  $c_name_t = '2020xmasxre_t' . $date;
  if ($_COOKIE[$c_name] === null) {
    $totalNum = $packsNum = rand(155, 165);
    setcookie($c_name, $packsNum, time() + 3600 * 24);
    setcookie($c_name_t, $totalNum, time() + 3600 * 24);
  } else {
    if (intval($_COOKIE[$c_name]) <= 3) {
      $packsNum = 3;
      setcookie($c_name, $packsNum, time() + 3600 * 24);
    } else {
      $packsNum = $_COOKIE[$c_name] - 1;
      setcookie($c_name, $packsNum, time() + 3600 * 24);
    }
  }
  echo json_encode(array('packsNum' => $packsNum));
  exit();
}
include $pRootUrl . 'include/common.inc.php';
$refStr = empty($_GET['st']) ? '' : ('-' . $_GET['st']);
$refStr .= empty($_GET['ref']) ? '' : ('-' . $_GET['ref']);
$refStr .= empty($_GET['to']) ? '' : ('-' . $_GET['to']);
$refStr .= empty($_GET['insur']) ? '' : ('-' . $_GET['insur']);
$refStr .= empty($_GET['ver']) ? '' : ('-' . $_GET['ver']);
$refStr .= empty($_GET['pop']) ? '' : ('-' . $_GET['pop']);
$refStr .= empty($_GET['r']) ? '' : ('-' . $_GET['r']);
if (in_array($_GET['type'], array('pro', 'giveawayexp'))) {
    $refStr .= '-' . $_GET['type'];
}
$refStr .= '-i' . $_GET['instd'] . '-u' . $_GET['usr'] . '-l' . $_GET['litype'] . '-e' . $_GET['expd'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= $pResUrl; ?>style/Normalize.css" type="text/css">
  <link rel="stylesheet" href="<?= $pResUrl; ?>style/common.css" type="text/css">
  <link rel="icon" href="https://codes.iobit.com/iobit/images/favicon.ico" mce_href="https://codes.iobit.com/iobit/images/favicon.ico" type="image/x-icon">
  <!-- <link rel="stylesheet" href="./static/css/swiper.min.css"> -->
  <!-- <link rel="stylesheet" href="./static/css/animate.css"> -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800;900&display=swap" rel="stylesheet">
  <script src="https://cdn.bootcdn.net/ajax/libs/less.js/3.9.0/less.min.js"></script>
  <script src="https://cdn.bootcdn.net/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- <script src="https://cdn.bootcdn.net/ajax/libs/wow/1.1.2/wow.min.js"></script> -->
  <title>Bis zu 86% Rabatt auf Advanced SystemCare PRO - IObit</title>
  <?php echo $gJavascript['public']; ?>
  <?php echo $gJavascript['head']; ?>
</head>

<body>
  <header>
    <a href="https://www.iobit.com/de/index.php" style="position: absolute;left: 20%; top: 14%;" target="_blank">
      <img src="<?= $pResUrl; ?>images/logo.png" alt="">
    </a>
    <div style="text-align: center;">
      <img src="<?= $pResUrl; ?>images/title.png" alt="">
      <p style="margin-top: -41px;font-size: 20px; color: #442325;font-weight: 600;">Bis zu <strong style="font-size: 24px;color:#E42D35;font-weight: 600;">86%</strong>
        reduziert auf Advanced
        SystemCare PRO</p>
    </div>
    <div class="box">
      <div class="box1">
        <div class="boximg"> <img src="<?= $pResUrl; ?>images/Abox.png" alt=""></div>
        <h1>58% Rabatt</h1>
        <h3>24<i>,99???</i> <span>59,99???</span></h3>
        <a href="https://www.iobit.com/buy.php?product=de-asc143pc2499&ref=de_asc143pcsingle2020xmasxr<?= $refStr; ?>&refs=de_purchase_asc">
          <button onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc3pcsinglesalexr2012-de')">JETZT SPAREN</button></a>
      </div>
      <div class="box2">
        <div class="pobox "><img src="<?= $pResUrl; ?>images/click.png" alt=""></div>
        <div class="boxinser">
          <img src="<?= $pResUrl; ?>images/ASCbox.png" alt="" class="postimg">
          <h1>86% Rabatt</h1>
          <h3>21<i>,99???</i> <span>157,34 ???</span></h3>
          <a href="https://www.iobit.com/buy.php?product=de-asc143pciusdpf2199&ref=de_asc143pciusdpf2020xmasxr<?= $refStr; ?>&refs=de_purchase_asc">
            <button onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc3pcbundlexr2012-de')">JETZT SPAREN</button></a>
          <p>Nur <i id="viewNum" style="color: #E63233;">155</i> von 3.000 Paketen ??brig </p>
        </div>
      </div>
    </div>
  </header>
  <div class="navtop">
    Advanced SystemCare Pro" beschleunigt Ihren PC und schafft neuen Speicherplatz auf der Festplatte.???
    <img src="<?= $pResUrl; ?>images/Chip_Logo.png" alt="">
  </div>
  <nav>
    <div>
      <img src="<?= $pResUrl; ?>images/tree.png" alt="">
      <span style="font-size: 42px; font-weight: 600; color: #233653;;margin-left: 22px;">
        Warum Advanced SystemCare Pro?</span>
    </div>
    <div style="margin-top: 14px;">
      <img src="<?= $pResUrl; ?>images/acceimg4.png" alt="" id="chaimg">
    </div>
    <ul class="topimg">
      <li>
        <div><img src="<?= $pResUrl; ?>images/clean.png" alt=""></div>
        <div style="margin-left: 11px;margin-top: 8px;">
          <h5>Sauberer</h5>
          <p>Beseitigt M??ll-Dateien f??r mehr Speicherplatz S??ubert tiefliegende Registries gr??ndlich</p>
        </div>
      </li>
      <li>
        <div><img src="<?= $pResUrl; ?>images/safety.png" alt=""></div>
        <div style="margin-left: 11px;">
          <h5>Sicherer</h5>
          <p>
            Entfernt tiefstsitzende Infektionen vollst??ndig
            Sch??tzt Windows vor Adware und Spyware
            Repariert Systemschwachstellen
          </p>
        </div>
      </li>
      <li class="top">
        <div><img src="<?= $pResUrl; ?>images/speed.png" alt=""></div>
        <div style="margin-left: 11px;margin-top: 8px;">
          <h5>Schneller</h5>
          <p>
            Macht den Systemstart bis zu 200% schnellerer
            Macht das Internetis zu 300% schnellerer
          </p>
        </div>
      </li>
      <li class="top">
        <div><img src="<?= $pResUrl; ?>images/AI.png" alt=""></div>
        <div style="margin-left: 11px;">
          <h5>Intelligenter</h5>
          <p>
            Optimiert Ihren PC im AI-Modus
            Automatische Pflege bei Systemleerlauf
            Automatische Versionsaktualisierung
          </p>
        </div>
      </li>
    </ul>
  </nav>
  <aside>
    <div>
      <img src="<?= $pResUrl; ?>images/peop.png" alt="" style="vertical-align: bottom;">
      <span style="font-size: 38px; font-weight: 600; color: #233653;;margin-left: 22px;">
        Was k??nnen die Gratisgeschenke?</span>
    </div>
    <div class="asibox">
      <ul>
        <li>
          <div><img src="<?= $pResUrl; ?>images/IU.png" alt=""></div>
          <div style="margin-left: 9px;">
            <h1>Jetzt 0???</h1>
            <h4>IObit Uninstaller PRO kann unn??tige Programme und Plugins schnell entfernen. Seine Tiefenscan und
              ???reinigung sorgt f??r eine gr??ndlichere Restreinigung. Es ??berwacht und entfernt die System??nderungen
              automatisch w??hrend der Programminstallation. So wird eine saubere Deinstallation durchgef??hrt.</h4>
          </div>
        </li>
        <li>
          <div><img src="<?= $pResUrl; ?>images/sd.png" alt=""></div>
          <div style="margin-left: 9px;">
            <h1>Jetzt 0???</h1>
            <h4>Mit ???Smart Defrag PRO??? k??nnen Sie Ihre Festplatte schnell und gr??ndlich defragmentieren, um einen
              schnelleren Datenzugriff und eine ausgezeichnete Festplatten-Performance zu bekommen. Damit kann man noch
              die Spiele schneller starten und ein besseres Spielerlebnis haben.</h4>
          </div>
        </li>
        <li>
          <div><img src="<?= $pResUrl; ?>images/PF.png" alt=""></div>
          <div style="margin-left: 9px;">
            <h1>Jetzt 0???</h1>
            <h4>Protected Folder sch??tzt Ihre wichtigen Dateien und Daten vor Diebstahl, Verlust, Lecks, Spyware,
              Ransomware und anderen Viren. Sie brauchen nur ein Passwort festzulegen, um wichtige Ordner und Daten zu
              verschl??sseln.</h4>
          </div>
        </li>
      </ul>
    </div>
  </aside>
  <article>
    <div>
      <!-- <img src="<?= $pResUrl; ?>images/media.png" alt=""> -->
      <img src="<?= $pResUrl; ?>images/tree2.png" alt="">
      <span style="font-size: 32px; font-weight: 600; color: #233653;;margin:0 22px;">
        Redaktions-Tipp</span>
      <img src="<?= $pResUrl; ?>images/tree1.png" alt="">
    </div>
    <div style="margin-top: 29px;"><img src="<?= $pResUrl; ?>images/circle.png" alt=""></div>
    <div style="margin-top: 90px;">
      <img src="<?= $pResUrl; ?>images/tree2.png" alt="">
      <span style="font-size: 32px; font-weight: 600; color: #233653;;margin:0 22px;"> Kundenbewertung: 4.8/5 -
        Hervorragend</span>
      <img src="<?= $pResUrl; ?>images/tree1.png" alt="">
    </div>

    <div class="adva">
      <div class="pole"><img src="<?= $pResUrl; ?>images/arrl.png" alt=""></div>
      <div class="pori"><img src="<?= $pResUrl; ?>images/arrowr.png" alt=""></div>
      <ul class="con">
        <li class="special">
          <div class="special-div">
            <div style="margin-top: 64px;"><img src="<?= $pResUrl; ?>images/ryan_hill.png" alt="">
              <span>Ryan Hill</span>
            </div>
            <p>
              Advanced SystemCare 14 ist das komplet-teste All-in-One-Programm auf dem Markt. Ich verwende dieses
              Produkt
              seit Jahren und jedes Jahr wird es verbessert: Die neue Be-nutzeroberfl??che, die Tiefenreinigung in der
              Software, die Sie mit nur einem Klick durch-f??hren k??nnen, die anderen Tools drin wie Leere-Ordner-Sucher,
              Internet-Booster und Turbo-Boost sind auch super! Ich denke, es ist eines der besten Reinigungsprogramme
              heutzutage.
            </p>
          </div>
        </li>
        <li>
          <div class="special-div">
            <div style="margin-top: 64px;"><img src="<?= $pResUrl; ?>images/santiago.png" alt="">
              <span>Santiago D??az de ??????</span>
            </div>
            <p>
              Advanced SystemCare ist auf jeden Fall das beste PC-Tuning-Tool. Nach der Installation arbeitet mein PC
              wieder schnell wie neu. Diese Software ist besonders empfehlenswert. Es f??hrt eine gr??ndliche Bereinigung
              der Registrierung durch und entfernt ung??ltige Programmreste. Es ist sehr einfach zu bedienen, selbst die
              unerfahrenste Person k??nnte es auch nutzen.
            </p>
          </div>
        </li>
        <li>
          <div class="special-div">
            <div style="margin-top: 64px;"><img src="<?= $pResUrl; ?>images/anthon.png" alt="">
              <span>Anthony Baker</span>
            </div>
            <p>
              Die enthaltenen Tools in Advanced SystemCare 14 sind
              wirklich allumfassend und nach dem Ausf??hren des Programms reagiert mein Computer schneller. Das Programm
              reduziert und eliminiert die Verwendung nicht notwendiger Ressourcen, was den Computer stabiler und
              effizienter arbeiten l??sst. Dieses Produkt ist das Beste in seiner Klasse. Wenn du deinen
              Laptop oder PC warten m??chtest, w??rde ich Advanced SystemCare 14 empfehlen!???
            </p>
          </div>
        </li>
      </ul>
    </div>

  </article>
  <div class="asc">
    <h1>Advanced SystemCare 14 PRO kann <br> noch mehr als Ihre vorherige Version tun!</h1>
    <img src="<?= $pResUrl; ?>images/line.png" alt="">
    <div class="asc-box">
      <ul>
        <li>
          <div class="po"><img src="<?= $pResUrl; ?>images/icon 1.png" alt=""></div>
          <h2>Intelligenter</h2>
          <p>Der neue AI-Modus kann Ihren PC vollst??ndig nach Bedarf optimieren</p>
        </li>
        <li>
          <div class="po"><img src="<?= $pResUrl; ?>images/icon 2.png" alt=""></div>
          <h2>Sauberer</h2>
          <p>Entfernt 50% mehr Junk-Dateien f??r ein sauber System</p>
        </li>
        <li>
          <div class="po"><img src="<?= $pResUrl; ?>images/icon 3.png" alt=""></div>
          <h2>Schneller</h2>
          <p>Verdoppelt die Startgeschwindigkeit Ihres PCs </p>
        </li>
        <li>
          <div class="po"><img src="<?= $pResUrl; ?>images/icon 4.png" alt=""></div>
          <h2>Up-to-date</h2>
          <p>H??lt 33% mehr wichtige Software auf dem neuesten Stand, damit Hacker Schwachstellen nicht missbrauchen k??nnen.</p>
        </li>
      </ul>
    </div>
  </div>
  <div class="sect">
    <h1 style="margin-bottom: 10px;">Bekommen Sie alle PRO-Funktionen zum Beheben Ihrer PC-Probleme</h1>
    <div style="text-align:center;margin:50px 0">
      <img src="<?= $pResUrl; ?>images/line.png" alt="">
    </div>
    <div class="contains">
      <table>
        <thead>
          <tr>
            <th>Ohne Pro kann das passieren!</th>
            <th>Mit Pro k??nnen Sie Folgendes genie??en!</th>
          </tr>
        </thead>
        <tr>
          <td>Ihr PC <b>reagiert langsam</b> und l??sst Sie warten</td>
          <td>Komplette Systemreinigung f??r einen <b>schnelleren PC</b></td>
        </tr>
        <tr>
          <td>Instabile Internetverbindung und <b>lange Ladezeit von Seiten</b> </td>
          <td>Browseroptimierung f??r eine bis zu <b>300% schnellere Internetverbindung</b></td>
        </tr>
        <tr>
          <td>Instabiles System <b> f??llt aus oder einfriert </b> ab und zu</td>
          <td>Gr??ndliche Register-Reinigung f??r ein stabiles <b>System</b></td>
        </tr>

        <tr>
          <td><b>Warten</b> Sie auf den Start Ihres PCs</td>
          <td>Maximale Startbeschleunigung, um <b>nicht mehr</b> zu <b>warten</b></td>
        </tr>
        <tr>
          <td>Programme k??nnen auf <b>Ihre pers??nlichen Daten</b> zugreifen</td>
          <td><b>Voller Schutz der Privatsph??re,</b> um nicht vertrauensw??rdige Programme zu blockieren</td>
        </tr>
        <tr>
          <td>Ihr PC kann <b>gro??e Software ausf??hren</b></td>
          <td>Durch automatische RAM-Bereinigung <b> l??uft</b> Ihr PC <b>reibungslos</b></td>
        </tr>
        <tr>
          <td>Spyware kann in Ihren PC eindringen und <b>Ihre Daten stehlen</b></td>
          <td><b>Echtzeitschutz,</b> der Spyware und andere Malware von Ihrem PC fernh??lt</td>
        </tr>
      </table>
    </div>

  </div>
  <!-- <section>
    <div class="check">
      <h2>Mit der PRO-Version sparen Sie mehr Zeit und M??he</h2>
      <ul class="check-ul">
        <li>Grundreinigung und -optimierung</li>
        <li>Grundschutz durch Spywarebeseitigung </li>
        <li>Gr??ndliche Registrierungsbereinigung </li>
        <li> Intelligenter KI-Modus f??r intelligentes Scannen</li>
        <li>Automatische RAM-Bereinigung</li>
        <li>Zeitplanfunktion f??r Computeroptimierung</li>
        <li>Bis zu 200% schnellerer Systemstart </li>
        <li>Bis zu 300% h??here Internetgeschwindigkeit</li>
        <li> Automatische Erkennung von Sicherheitsl??cken in Echtzeit </li>
        <li>Automatische Versionsaktualisierung </li>
        <li>Kostenloser technischer Support 24/7</li>
      </ul>
      <div class="checkbox">
        <h3>Free-Version</h3>
        <ul>
          <li><img src="<?= $pResUrl; ?>images/ri.png" alt=""></li>
          <li><img src="<?= $pResUrl; ?>images/ri.png" alt=""></li>
          <li>-</li>
          <li>-</li>
          <li>-</li>
          <li>-</li>
          <li>-</li>
          <li>-</li>
          <li>-</li>
          <li>-</li>
          <li>-</li>
        </ul>
      </div>
      <div class="checkbox2">
        <h3>Pro-Version</h3>
        <ul>
          <li><img src="<?= $pResUrl; ?>images/rr.png" alt=""></li>
          <li><img src="<?= $pResUrl; ?>images/rr.png" alt=""></li>
          <li><img src="<?= $pResUrl; ?>images/rr.png" alt=""></li>
          <li><img src="<?= $pResUrl; ?>images/rr.png" alt=""></li>
          <li><img src="<?= $pResUrl; ?>images/rr.png" alt=""></li>
          <li><img src="<?= $pResUrl; ?>images/rr.png" alt=""></li>
          <li><img src="<?= $pResUrl; ?>images/rr.png" alt=""></li>
          <li><img src="<?= $pResUrl; ?>images/rr.png" alt=""></li>
          <li><img src="<?= $pResUrl; ?>images/rr.png" alt=""></li>
          <li><img src="<?= $pResUrl; ?>images/rr.png" alt=""></li>
          <li><img src="<?= $pResUrl; ?>images/rr.png" alt=""></li>
        </ul>
      </div>
    </div>
  </section> -->
  <footer>
    <ul>
      <li>
        <img src="<?= $pResUrl; ?>images/size72.png" alt="">
        <h3>Zufriedenheitsgarantie</h3>
        <p>60-Tage-Geld-zur??ck-Garantie</p>
      </li>
      <li>
        <img src="<?= $pResUrl; ?>images/secure.png" alt="">
        <h3>Zahlungssicherheit</h3>
        <p>Ihre Zahlung ist 100% sicher </p>
      </li>
      <li style="margin-top: 15px;">
        <img src="<?= $pResUrl; ?>images/buycut.png" alt="">
        <h3 style="margin-top: 42px;">Schnelle Aktivierung</h3>
        <p>Kurz nach dem Kauf erhalten Sie einen Aktivierungscode.</p>
      </li>
      <li style="margin-top: 15px;">
        <img src="<?= $pResUrl; ?>images/erji.png" alt="">
        <h3 style="margin-top: 33px;">Kundendienst</h3>
        <p>Kostenloser technischer <br> Support 24/7</p>
      </li>
    </ul>
  </footer>
  <div class="laster">
    <h5>
      Notiz: <br>
      *. Solche Promotionsprogramme k??nnen von IObit nach eigenem Ermessen zu jeder Zeit und ohne vorherige Ank??ndigung
      ge??ndert werden. <br>
      *. Daten k??nnen auf der Grundlage verschiedenes Systems oder Computers ge??ndert werden. <br>
      *.IObit Uninstaller PRO, Smart Defrag PRO und Protected Folder unterst??tzen 1 Jahr / 1 PC:
    </h5>
  </div>
  <div id="floatlayer" class="floatlayer">
    <div class="ayer">
      <div style="margin-top: -30px;"><img src="<?= $pResUrl; ?>images/box.png" alt=""></div>
      <div style="  color: #FFF4C7;font-size: 21px;">
        Bis zu <i style="font-size: 21px;color: #FFFFFF;; ">86%</i> reduziert auf Advanced SystemCare PRO
      </div>
      <div class="text">
        <p style="margin-top: -35px;"><span>21<strong>,99???</strong> <b>UVP:</b><i>157,34???</i></span> </p>
        <p>
          <a href="https://www.iobit.com/buy.php?product=de-asc143pciusdpf2199&ref=de_asc143pciusdpf2020xmasxr<?= $refStr; ?>&refs=de_purchase_asc">
            <button onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc3pcbundlexr2012-de')">
              JETZT SPAREN</button>
          </a>
        </p>
        <p style="height: 16px; font-size: 14px;font-weight: 500;color: #FFFBF0;margin-top: 5px;">Nur <i id="viewNum-2">155</i> von 3.000
          Paketen ??brig
        </p>
      </div>
    </div>
  </div>
  </div>
  <h6 id="last">Copyright ?? 2005 - 2020 IObit. Alle Rechte vorbehalten</h6>
</body>
<script>
  var num = 0
  $('.pole').on('click', function() {
    num--
    $(".con li").removeClass('special')
    $(".con li").eq(num).addClass('special')
    if (num == -1) {
      num = 2
    }
  })
  $('.pori').on('click', function() {
    num++
    $(".con li").removeClass('special')
    $(".con li").eq(num).addClass('special')
    if (num == 2) {
      num = -1
    }
  })
  $('.topimg li').hover(function() {
    // alert('11')
    var index = $(this).index()
    switch (index) {
      case 0:
        $('#chaimg').attr('src', '<?= $pResUrl; ?>images/acceimg2.png')
        break;
      case 1:
        $('#chaimg').attr('src', '<?= $pResUrl; ?>images/acceimg3.png')
        break;
      case 2:
        $('#chaimg').attr('src', '<?= $pResUrl; ?>images/acceimg1.png')
        break;
      case 3:
        $('#chaimg').attr('src', '<?= $pResUrl; ?>images/acceimg4.png')
        break;
    }
  });
  // $('#floatlayer').slideDown()
  $(window).on('scroll', function() {
    if ($(window).scrollTop() > $(".navtop").offset().top) {
      $('#floatlayer').slideDown(); //????????????
    } else {
      $('#floatlayer').slideUp(); //????????????
    }
  });
  $('.pobox').hover(function() {
    $('.pobox').addClass('hidd');

  }, function() {
    $('.pobox').removeClass('hidd');
  })

  function getView() {
    $.ajax({
      type: 'GET',
      url: '2020xmas.php',
      data: 'action=getView',
      success: function(res) {
        $("#viewNum").html(res);
        setTimeout("getView()", )
      }
    });
  }

  function getSales() {
    var date = new Date();
    $.ajax({
      type: "GET",
      url: "xrasce.php",
      data: "action=getPacks&d=" + date.getDate(),
      success: function(res) {
        var sales = JSON.parse(res);
        packs = sales.packsNum;
        $('#viewNum').html(packs);
        $('#viewNum-2').html(packs);
        if (packs > 3) {
          $(window).unload(function() {
            packs = cGet('2020xmasxre_p');
          });
          setTimeout('getSales()', getReTime());
        }
      }
    });
  }

  function getReTime() {
    retime = (Math.random() > 0.5) ? 2 : 4;
    return retime * 1000;
  }
  getSales();
</script>

</html>