<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = '2020xmasdk_p' . $date;
  $c_name_t = '2020xmasdk_t' . $date;
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
  <title>Op til 88% rabat på Advanced SystemCare PRO - IObit</title>
  <?php echo $gJavascript['public']; ?>
  <?php echo $gJavascript['head']; ?>
</head>

<body>
  <header>
    <a href="https://www.iobit.com/dk/index.php" style="position: absolute;left: 20%; top: 14%;" target="_blank">
      <img src="<?= $pResUrl; ?>images/logo.png" alt="">
    </a>
    <div style="text-align: center;">
      <img src="<?= $pResUrl; ?>images/title.png" alt="">
      <p style="margin-top: -30px;font-size: 20px; color: #442325;font-weight: 600;"> Op til <strong style="font-size: 24px;color:#E42D35;font-weight: 600;">88%</strong>
        rabat på Advanced SystemCare PRO</p>
    </div>
    <div class="box">
      <div class="box1">
        <div class="boximg"> <img src="<?= $pResUrl; ?>images/Abox.png" alt=""></div>
        <h1>55% rabat</h1>
        <h3>199 kr. <span>førpris:449 kr.</span></h3>
        <a href="https://www.iobit.com/buy.php?product=dk-asc143pc199&&ref=dk_asc1433pcsingle2020xmas<?php echo $refStr; ?>&refs=dk_purchase_asc">
          <button onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc3pcsinglesale2012-dk')">KØB NU</button></a>
      </div>
      <div class="box2">
        <div class="pobox "><img src="<?= $pResUrl; ?>images/click.png" alt=""></div>
        <div class="boxinser">
          <img src="<?= $pResUrl; ?>images/box.png" alt="" class="postimg" style="width: 374px;">
          <h1>88% rabat</h1>
          <h3>189 kr. <span>førpris:1.606 kr</span></h3>
          <a href="https://www.iobit.com/buy.php?product=dk-asc143pciusdpf189&ref=dk_asc143pcbundle2020xmas<?php echo $refStr; ?>&refs=dk_purchase_asc">
            <button onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc3pcbundle2012-dk')">KØB NU</button></a>
          <p>Kun <i id="viewNum" style="color: #E63233;">155</i> stk. ud af 3.000 tilbage </p>
        </div>
      </div>
    </div>
  </header>
  <div class="navtop">
    “Advanced SystemCare Pro" accelererer din PC og skaber mere plads på din harddisk.”
    <img src="<?= $pResUrl; ?>images/Chip_Logo.png" alt="">
  </div>
  <nav>
    <div>
      <img src="<?= $pResUrl; ?>images/tree.png" alt="">
      <span style="font-size: 42px; font-weight: 600; color: #233653;;margin-left: 22px;">
        Hvorfor Advanced SystemCare PRO</span>
    </div>
    <div style="margin-top: 14px;">
      <img src="<?= $pResUrl; ?>images/acceimg4.png" alt="" id="chaimg">
    </div>
    <ul class="topimg">
      <li>
        <div><img src="<?= $pResUrl; ?>images/clean.png" alt=""></div>
        <div style="margin-left: 11px;">
          <h5>Renere</h5>
          <p>Fjerner junk filer og giver mere lagringsplads Renser grundigt for poster i registreringsdatabasen</p>
        </div>
      </li>
      <li>
        <div><img src="<?= $pResUrl; ?>images/safety.png" alt=""></div>
        <div style="margin-left: 11px;">
          <h5>Hurtigere</h5>
          <p>
            Systemet starter op 200% hurtigere
            Internethastigheden forøges med 300%
          </p>
        </div>
      </li>
      <li class="top">
        <div><img src="<?= $pResUrl; ?>images/speed.png" alt=""></div>
        <div style="margin-left: 11px;">
          <h5>Sikrere</h5>
          <p>
            Fjerner svære infektioner fuldstændigt
            Beskytter Windows mod adware og spyware
            Reparerer sårbarheder i systemet
          </p>
        </div>
      </li>
      <li class="top">
        <div><img src="<?= $pResUrl; ?>images/AI.png" alt=""></div>
        <div style="margin-left: 11px;">
          <h5>Smartere</h5>
          <p>
            Optimerer din PC i AI-tilstand
            Automatisk vedligeholdelse
            Automatisk opdatering til nyeste version
          </p>
        </div>
      </li>
    </ul>
  </nav>
  <aside>
    <div>
      <img src="<?= $pResUrl; ?>images/peop.png" alt="" style="vertical-align: bottom;">
      <span style="font-size: 38px; font-weight: 600; color: #233653;;margin-left: 22px;">
        Hvad kan disse gratis gaver gøre for dig?</span>
    </div>
    <div class="asibox">
      <ul>
        <li>
          <div><img src="<?= $pResUrl; ?>images/IU.png" alt=""></div>
          <div style="margin-left: 9px;">
            <h1>Nu 0 kr.</h1>
            <h4>IObit Uninstaller PRO kan fjerne unødvendige programmer og plugins nemt og hurtig. Takket være dets grundige skanning og rensning, kan du rydde for alle rester fuldstændigt. Det overvåger og gendanner systemændringer automatisk under programinstallationer. På denne måde sikres en problemfri afinstallering.</h4>
          </div>
        </li>
        <li>
          <div><img src="<?= $pResUrl; ?>images/sd.png" alt=""></div>
          <div style="margin-left: 9px;">
            <h1>Nu 0 kr.</h1>
            <h4>Med "Smart Defrag PRO" kan du defragmentere din harddisk hurtigt og grundigt og få hurtigere adgang til data og en ubeklagelig harddisk præstation. Du kann starte spil hurtigere og få en bedre spiloplevelse.</h4>
          </div>
        </li>
        <li>
          <div><img src="<?= $pResUrl; ?>images/PF.png" alt=""></div>
          <div style="margin-left: 9px;">
            <h1>Nu 0 kr.</h1>
            <h4>Protected Folder beskytter dine vigtige filer og data mod at blive stjålet, tab, lækninger, spyware, ransomware samt andre virusser. Du behøver kun vælge et kodeord til at kryptere vigtige mapper og data.</h4>
          </div>
        </li>
      </ul>
    </div>
  </aside>
  <div class="asc">
    <h1>Advanced SystemCare 14 PRO kan <br> zelfs nog meer dan uw vorige ver</h1>
    <img src="<?= $pResUrl; ?>images/line.png" alt="">
    <div class="asc-box">
      <ul>
        <li>
          <div class="po"><img src="<?= $pResUrl; ?>images/icon 1.png" alt=""></div>
          <h2>Smartere</h2>
          <p>Den nye AI-tilstand kan optimere din PC ifølge dets behov</p>
        </li>
        <li>
          <div class="po"><img src="<?= $pResUrl; ?>images/icon 2.png" alt=""></div>
          <h2>Renere</h2>
          <p>Fjerner 50% flere junkfiler og giver dig et renset system</p>
        </li>
        <li>
          <div class="po"><img src="<?= $pResUrl; ?>images/icon 3.png" alt=""></div>
          <h2>Hurtigere</h2>
          <p>Gør din PC-opstart dobbelt så hurtig</p>
        </li>
        <li>
          <div class="po"><img src="<?= $pResUrl; ?>images/icon 4.png" alt=""></div>
          <h2>Up-to-date</h2>
          <p>Holder 33% mere vigtigt software up-to-date så hackere ikke kan udnyttesårbarheder</p>
        </li>
      </ul>
    </div>
    <h1 style="margin-bottom: 10px;">Editors’Choice</h1>
    <img src="<?= $pResUrl; ?>images/awards.png" alt="" style="margin-top: 30px;">
  </div>
  <article>
    <div style="margin-top: 90px;">
      <img src="<?= $pResUrl; ?>images/tree2.png" alt="">
      <span style="font-size: 32px; font-weight: 600; color: #233653;;margin:0 22px;"> Brugerbedømmelse: 4.8/5 - Enestående</span>
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
              Advanced system care 14 beta er det mest komplette all-in-one-system på markedet, som jeg har brugt i årevis, og hvert år bliver det bedre og bedre. Den nye interface og den grundige oprydning du får med programmet og den nemme et-kliks-løsning er som magi. Andre funktioner som kommer med systemet er fantastiske og den tomme mappe-finder, internet booster og game booster er blot nogle af dem. Jeg synes, det er et af de bedste rengøringssystemer derude i dag.
            </p>
          </div>
        </li>
        <li>
          <div class="special-div">
            <div style="margin-top: 64px;"><img src="<?= $pResUrl; ?>images/santiago.png" alt="">
              <span>Santiago Díaz de ……</span>
            </div>
            <p>
              "Advanced SystemCare er bestemt det bedste optimeringsværktøj til din PC. Efter installatering er min PC så hurtig som ny. Dette software er specielt anbefalelsesværdigt. Det laver et grundigt stykke arbejde med rengøring af database og fjerner ugyldigt junk. Det er nemt at bruge og selv den mest uerfarne person kan bruge det. Der er en gratis version, som du kan prøve, men du kommer helt sikkert til at købe PRO-versionen senere hen. Tvivl ikke længere. Det er rigtigt, at det gjorde min PC 300% hurtigere. At se er at tro!"
            </p>
          </div>
        </li>
        <li>
          <div class="special-div">
            <div style="margin-top: 64px;"><img src="<?= $pResUrl; ?>images/anthon.png" alt="">
              <span>Anthony Baker</span>
            </div>
            <p>
              "Funktionerne i Advanced SystemCare (ASC) 14 er fantastiske og det overordnede udseende er clean, friskt og moderne. Jeg har brugt andre alt-in-en vedligeholdelsesprogrammer, men ingen har været lige så effektive som ASC 14. Programmet er nemt at bruge men også meget intuitivt. De inkluderede funktioner er virkelig altinkluderende og efter at have kørt programmet, reagerer min computer hurtigere. Programmet reducerer og eliminerer brugen af ikke-essentielle resurser, så computeren kan operere i en mindre ophedet tilstand og mere effektivt."
            </p>
          </div>
        </li>
      </ul>
    </div>
  </article>
  <section>
    <div class="check">
      <h2>PRO-versionen sparer mere tid og energi</h2>
      <ul class="check-ul">
        <li>Grundlæggende oprydning og optimering</li>
        <li>Grundlæggende beskyttelse gennem fjerning af spyware </li>
        <li>Grundig oprydning af databasen</li>
        <li>Smart AI-tilstand som skanner intelligent</li>
        <li>Automatisk oprydning af RAM</li>
        <li>Skemalægger funktionen computer optimization</li>
        <li>Op til 200% hurtigere opstart af systemet</li>
        <li>Op til 300% hurtigere internethastighed</li>
        <li> Udslettelse af dybt forankrede computervirusser </li>
        <li>Automatisk registrering af sårbarheder i sikkerheden </li>
        <li>Automatisk opdatering til den nyeste version</li>
        <li>Gratis teknisk support 24/7</li>
      </ul>
      <div class="checkbox">
        <h3>Free version</h3>
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
          <li>-</li>
        </ul>
      </div>
      <div class="checkbox2">
        <h3>Pro version</h3>
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
          <li><img src="<?= $pResUrl; ?>images/rr.png" alt=""></li>
        </ul>
      </div>
    </div>
  </section>
  <footer>
    <ul>
      <li>
        <img src="<?= $pResUrl; ?>images/size72.png" alt="">
        <h3>Tilfredshedsgaranti</h3>
        <p>60 dages tilfredshedsgaranti <br> eller pengene tilbage</p>
      </li>
      <li>
        <img src="<?= $pResUrl; ?>images/secure.png" alt="">
        <h3>Sikker betaling</h3>
        <p>Din betaling er 100% sikker </p>
      </li>
      <li style="margin-top: 15px;">
        <img src="<?= $pResUrl; ?>images/buycut.png" alt="">
        <h3 style="margin-top: 42px;">Hurtig aktivering</h3>
        <p>Du modtager en akti-veringskode <br> kort efter køb.</p>
      </li>
      <li style="margin-top: 15px;">
        <img src="<?= $pResUrl; ?>images/erji.png" alt="">
        <h3 style="margin-top: 33px;">Kundeservice</h3>
        <p>Gratis teknisk <br>support </p>
      </li>
    </ul>
  </footer>
  <div class="laster">
    <h5>
      Note: <br>
      * Tilbud som dette kan fra tid til anden ændres uden varsel efter vores skøn. <br>
      * IObit Uninstaller PRO, Smart Defrag PRO og Protected Folder support 1 år/1 PC.
    </h5>
  </div>
  <div id="floatlayer" class="floatlayer">
    <div class="ayer">
      <div style="margin-top: -30px;"><img src="<?= $pResUrl; ?>images/box.png" alt="" style="width:300px"></div>
      <div style="  color: #FFF4C7;font-size: 21px;">
        Op til <i style="font-size: 21px;color: #FFFFFF;; "> 88% rabat </i> under Xmas-udsalg
      </div>
      <div class="text">
        <p style="margin-top: -14px;"><span>189 kr. <b>førpris:</b><i>1.606kr.</i></span> </p>
        <p>
          <a href="https://www.iobit.com/buy.php?product=dk-asc143pciusdpf189&ref=dk_asc143pcbundle2020xmas<?php echo $refStr; ?>&refs=dk_purchase_asc">
            <button onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc3pcbundle2012-dk')">
              KØB NU</button>
          </a>
        </p>
        <p style="height: 16px; font-size: 14px;font-weight: 500;color: #FFFBF0;margin-top: 5px;">Kun <i id="viewNum-2">155</i> stk. ud af 3.000 tilbage
        </p>
      </div>
    </div>
  </div>
  </div>
  <h6 id="last">Copyright 2005 - 2020 IObit.Alle rettigheder forbeholdes </h6>
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
      $('#floatlayer').slideDown(); //滑动隐藏
    } else {
      $('#floatlayer').slideUp(); //滑动出现
    }
  });
  $('.pobox').hover(function() {
    $('.pobox').addClass('hidd');

  }, function() {
    $('.pobox').removeClass('hidd');
  })

  function getSales() {
    var date = new Date();
    $.ajax({
      type: "GET",
      url: "index.php",
      data: "action=getPacks&d=" + date.getDate(),
      success: function(res) {
        var sales = JSON.parse(res);
        packs = sales.packsNum;
        $('#viewNum').html(packs);
        $('#viewNum-2').html(packs);
        if (packs > 3) {
          $(window).unload(function() {
            packs = cGet('2020xmas_p');
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