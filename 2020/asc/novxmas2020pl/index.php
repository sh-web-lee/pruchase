<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}

if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = '2020xmas_p' . $date;
  $c_name_t = '2020xmas_t' . $date;
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
$refStr .= empty($_GET['pop']) ? '' : ('-' . $_GET['pop']);
$refStr .= empty($_GET['r']) ? '' : ('-' . $_GET['r']);
if (in_array($_GET['type'], array('pro', 'giveawayexp'))) {
    $refStr .= '-' . $_GET['type'];
}
$refStr .= '-i' . $_GET['instd'] . '-u' . $_GET['usr'] . '-l' . $_GET['litype'] . '-e' . $_GET['expd'];
if(preg_match_all('/([0-9]*)\./',$_GET['ver'],$matches)){
    $ver=$matches[1][0].$matches[1][1];
    $refStr.='-'.$ver;
}
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
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800;900&display=swap" rel="stylesheet">???
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <script src="https://cdn.bootcdn.net/ajax/libs/less.js/3.9.0/less.min.js"></script>
  <script src="https://cdn.bootcdn.net/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- <script src="https://cdn.bootcdn.net/ajax/libs/wow/1.1.2/wow.min.js"></script> -->
  <title>Zaoszcz??d?? do 85% na Advanced SystemCare PRO z okazji Bo??ego Narodzenia - IObit!</title>
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
      <p style="margin-top: -21px;font-size: 20px; color: #442325;font-weight: 600;">Do <strong style="font-size: 24px;color:#E42D35;font-weight: 600;">85%</strong>
        zni??ki na Advanced SystemCare PRO</p>
    </div>
    <div class="box">
      <div class="box1">
        <div class="boximg"> <img src="<?= $pResUrl; ?>images/Abox.png" alt=""></div>
        <h1>60% zni??ki</h1>
        <h3>74<i>,90 z??</i> <span>199,90 z??</span></h3>
        <a href="http://www.iobit.com/buy.php?product=pl-asc143pc74&ref=pl_asc133pc74purchase2011<?= $refStr; ?>&refs=pl_purchase_asc">
          <button onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascxmas2011-pl')">KUP TERAZ</button></a>
      </div>
      <div class="box2">
        <div class="pobox "><img src="<?= $pResUrl; ?>images/click.png" alt=""></div>
        <div class="boxinser">
          <img src="<?= $pResUrl; ?>images/ASCbox.png" alt="" class="postimg">
          <h1>85% zni??ki</h1>
          <h3>74<i>,90 z??</i> <span>599,60 z??</span></h3>
          <a href="http://www.iobit.com/buy.php?product=pl-asc143pcsdpfiu74&ref=pl_asc143pcsdpfiu74purchase2011<?= $refStr; ?>&refs=pl_purchase_asc">
            <button onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascxmas2011-pl')">KUP TERAZ</button></a>
          <p>Zosta??o tylko <i id="viewNum" style="color: #E63233;">155</i> z 3000 pakiet??w </p>
        </div>
      </div>
    </div>
  </header>
  <div class="navtop">
    ???Advanced SystemCare Pro??? przyspiesza dzia??anie komputera i tworzy nowe miejsce na dysku twardym. ???
    <img src="<?= $pResUrl; ?>images/Chip_Logo.png" alt="">
  </div>
  <nav>
    <div>
      <img src="<?= $pResUrl; ?>images/tree.png" alt="">
      <span style="font-size: 42px; font-weight: 600; color: #233653;;margin-left: 22px;">
        Dlaczego Advanced SystemCare PRO</span>
    </div>
    <div style="margin-top: 14px;">
      <img style="width:631px;" src="<?= $pResUrl; ?>images/acceimg4.png" alt="" id="chaimg">
    </div>
    <ul class="topimg">
      <li>
        <div><img src="<?= $pResUrl; ?>images/clean.png" alt=""></div>
        <div style="margin-left: 11px;margin-top: 8px;">
          <h5>Czystszy</h5>
          <p>Usuwa niepotrzebne pliki, aby uzyska?? wi??cej miejsca</p>
        </div>
      </li>
      <li>
        <div><img src="<?= $pResUrl; ?>images/safety.png" alt=""></div>
        <div style="margin-left: 11px;">
          <h5>Bezpieczniejszy</h5>
          <p>
          Ca??kowicie usuwa g????boko zakorzenione infekcje<br/>
Chroni Windows przed adware i spyware<br/>
Naprawia luki w systemie
          </p>
        </div>
      </li>
      <li class="top">
        <div><img src="<?= $pResUrl; ?>images/speed.png" alt=""></div>
        <div style="margin-left: 11px;margin-top: 8px;">
          <h5>Szybszy</h5>
          <p>
            Sprawia, ??e system uruchamia si?? do 200% szybciej<br>
            Sprawia, ??e internet jest 300% szybszy
          </p>
        </div>
      </li>
      <li class="top">
        <div><img src="<?= $pResUrl; ?>images/AI.png" alt=""></div>
        <div style="margin-left: 11px;">
          <h5>Inteligentniejszy</h5>
          <p>
            Optymalizuje komputer w trybie AI
            Automatyczna konserwacja
          </p>
        </div>
      </li>
    </ul>
  </nav>
  <aside>
    <div>
      <img src="<?= $pResUrl; ?>images/peop.png" alt="" style="vertical-align: bottom;">
      <span style="font-size: 38px; font-weight: 600; color: #233653;;margin-left: 22px;">
        Co te darmowe prezenty mog?? dla Ciebie zrobi???</span>
    </div>
    <div class="asibox">
      <ul>
        <li>
          <div><img src="<?= $pResUrl; ?>images/IU.png" alt=""></div>
          <div style="margin-left: 9px;">
            <h1>Teraz 0 z??</h1>
            <h4>IObit Uninstaller PRO mo??e szybko usun???? niepotrzebne programy i wtyczki. Dzi??ki g????bokiemu skanowaniu i czyszczeniu mo??esz ca??kowicie wyczy??ci?? wszystkie pozosta??o??ci. Monitoruje i przywraca zmiany systemowe automatycznie podczas instalacji programu. W ten spos??b odbywa si?? czysta dezinstalacja.</h4>
          </div>
        </li>
        <li>
          <div><img src="<?= $pResUrl; ?>images/sd.png" alt=""></div>
          <div style="margin-left: 9px;">
            <h1>Teraz 0 z??</h1>
            <h4>Dzi??ki ???Smart Defrag PRO??? mo??esz szybko i dok??adnie zdefragmentowa?? dysk twardy, aby uzyska?? szybszy dost??p do danych i doskona???? wydajno???? dysku twardego. Mo??esz wi??c szybciej uruchamia?? gry i mie?? lepsze wra??enia z nich.</h4>
          </div>
        </li>
        <li>
          <div><img src="<?= $pResUrl; ?>images/PF.png" alt=""></div>
          <div style="margin-left: 9px;">
            <h1>Teraz 0 z??</h1>
            <h4>Folder chroniony chroni wa??ne pliki i dane przed kradzie????, utrat??, wyciekami, oprogramowaniem szpieguj??cym, oprogramowaniem ransomware i innymi wirusami. Wystarczy ustawi?? has??o, aby zaszyfrowa?? wa??ne foldery i dane.</h4>
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
        Wyb??r redakcji</span>
      <img src="<?= $pResUrl; ?>images/tree1.png" alt="">
    </div>
    <div style="margin-top: 29px;"><img src="<?= $pResUrl; ?>images/circle.png" alt=""></div>
    <div style="margin-top: 90px;">
      <img src="<?= $pResUrl; ?>images/tree2.png" alt="">
      <span style="font-size: 32px; font-weight: 600; color: #233653;;margin:0 22px;"> Ocena u??ytkownik??w: 4.8/5 - doskona??y</span>
      <img src="<?= $pResUrl; ?>images/tree1.png" alt="">
    </div>

    <div class="adva">
      <div class="pole"><img src="<?= $pResUrl; ?>images/arrl.png" alt=""></div>
      <div class="pori"><img src="<?= $pResUrl; ?>images/arrowr.png" alt=""></div>
      <ul class="con">
        <li class="special">
          <div class="special-div">
            <div style="margin-top: 64px;    text-align: left;"><img src="<?= $pResUrl; ?>images/cnet.png" alt="">
              <span>Cnet</span>
            </div>
            <p>
              ???Nie ma nic gorszego ni?? komputer, kt??ry jest tak zapchany, ??e jego u??ytkowanie oraz granie staj?? si?? niemo??liwe. Advanced Systemcare radzi sobie z wszystkimi problemami komputera, nie tylko poprzez sprz??tanie niepotrzebnych plik??w, z??o??liwego oprogramowania i nieprawid??owych wpis??w w rejestrze, ale r??wnie?? daj??c Twojemu komputerowi impuls do zoptymalizowania jego dzia??ania???.
            </p>
          </div>
        </li>
        <li>
          <div class="special-div">
            <div style="margin-top: 64px;    text-align: left;"><img src="<?= $pResUrl; ?>images/danny-r-sheets.png" alt="">
              <span>Danny R. Sheets</span>
            </div>
            <p>
              ???Nigdy nie znalaz??em lepszego programu do konserwacji i bezpiecze??stwa komputera ni?? Advanced SystemCare. Odk??d kupi??em ASC, nigdy nie mia??em problem??w z wirusami, phishingiem, czarnymi ekranami lub innymi rodzajami b????d??w. To by??y najlepiej zainwestowane pieni??dze, jakie kiedykolwiek wyda??em na komputer. Dzi??kuj?? ASC za to, ??e korzystanie z komputera jest du??o przyjemniejsze???.
            </p>
          </div>
        </li>
        <li>
          <div class="special-div">
            <div style="margin-top: 64px;    text-align: left;"><img src="<?= $pResUrl; ?>images/daniel-sanders.png" alt="">
              <span>Daniel Sanders</span>
            </div>
            <p>
              ???Nowy ASC 13 to obowi??zkowa pozycja dla wszystkich u??ytkownik??w komputer??w. Czysty i intuicyjny interfejs jest ??atwy w obs??udze zar??wno dla pocz??tkuj??cego, jak i zaawansowanego u??ytkownika. Wiele pot????nych narz??dzi w zestawie, aby utrzyma?? najwy??sz?? wydajno???? komputera. Wyrazy uznania dla IObit za tak wspania??y zestaw narz??dzi w jednym miejscu???.
            </p>
          </div>
        </li>
      </ul>
    </div>

  </article>
  <section>
    <div class="check">
      <h2>Wersja PRO oszcz??dza wi??cej czasu i energii</h2>
      <ul class="check-ul">
        <li>Podstawowe czyszczenie i optymalizacja</li>
        <li>Podstawowa ochrona poprzez usuwanie oprogramowania szpieguj??cego</li>
        <li>Dok??adne czyszczenie rejestru </li>
        <li>Tryb Smart AI do inteligentnego skanowania</li>
        <li>Automatyczne czyszczenie pami??ci RAM</li>
        <li>Funkcja harmonogramu do optymalizacji komputera</li>
        <li>Do 200% szybsze uruchamianie systemu</li>
        <li>Do 300% szybsza pr??dko???? internetu</li>
        <li>Eliminacja g????boko zakorzenionych wirus??w komputerowych</li>
        <li>Automatyczna aktualizacja wersji</li>
        <li>Bezp??atna pomoc techniczna 24/7</li>
      </ul>
      <div class="checkbox">
        <h3>Wersja darmowa</h3>
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
        <h3>Wersja Pro</h3>
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
  </section>

  <div class="h-list">
    <div class="title">
      <h2>Advanced SystemCare 14 PRO potrafi jeszcze wi??cej ni?? Twoja poprzednia wersja!</h2>
      <img src="<?php echo getStaticUrl('images/b-border.png') ?>" alt="">
    </div>
    <div class="sw">
      <img class='bg' src="<?php echo getStaticUrl('images/list-bg.png') ?>" alt="">
      <div class="cont">
        <ul>
          <li>
            <img src="<?php echo getStaticUrl('images/icon1.png') ?>" alt="">
            <h4>Inteligentniejszy</h4>
            <p>Nowy tryb AI mo??e w pe??ni zoptymalizowa?? Tw??j komputer zgodnie z jego potrzebami.</p>
          </li>
          <li>
            <img src="<?php echo getStaticUrl('images/icon2.png') ?>" alt="">
            <h4>Czystszy</h4>
            <p>Usuwa o 50% wi??cej niepotrzebnych plik??w w celu zapewnienia najczystszego systemu.</p>
          </li>
          <li>
            <img src="<?php echo getStaticUrl('images/icon3.png') ?>" alt="">
            <h4>Szybszy</h4>
            <p>Sprawia, ??e uruchamianie komputera jest dwukrotnie szybsze ni?? wcze??niej.</p>
          </li>
          <li>
            <img src="<?php echo getStaticUrl('images/icon4.png') ?>" alt="">
            <h4>Aktualniejszy</h4>
            <p>Zapewnia aktualno???? wa??niejszego oprogramowania o 33%, dzi??ki czemu hakerzy nie mog?? wykorzystywa?? luk w zabezpieczeniach.</p>
          </li>

        </ul>
      </div>
    </div>
  </div>

  <footer>
    <ul>
      <li>
        <img src="<?= $pResUrl; ?>images/size72.png" alt="">
        <h3>Satysfakcja gwarantowana</h3>
        <p>60-dniowa gwarancja zwrotu pieni??dzy</p>
      </li>
      <li>
        <img src="<?= $pResUrl; ?>images/secure.png" alt="">
        <h3>Bezpieczna p??atno????</h3>
        <p>Twoja p??atno???? jest w 100% bezpieczna</p>
      </li>
      <li style="margin-top: 15px;">
        <img src="<?= $pResUrl; ?>images/buycut.png" alt="">
        <h3 style="margin-top: 42px;">Szybka aktywacja</h3>
        <p>Kod aktywacyjny otrzymasz wkr??tce po zakupie.</p>
      </li>
      <li style="margin-top: 15px;">
        <img src="<?= $pResUrl; ?>images/erji.png" alt="">
        <h3 style="margin-top: 33px;">Obs??uga klienta</h3>
        <p>Bezp??atna pomoc<br> techniczna 24/7</p>
      </li>
    </ul>
  </footer>
  <div class="laster">
    <h5>
      Uwaga: <br>
      * Programy promocyjne mog?? ulec zmianie bez powiadomienia, w dowolnym momencie i wed??ug w??asnego uznania IObit. <br>
      * Dane mog?? si?? r????ni?? w zale??no??ci od r????nych system??w lub komputer??w.<br>
      * Je??li b??dziesz niezadowolony, to mo??esz anulowa?? zakup w ci??gu 60 dni bez ??adnych op??at. Pieni??dze zostan?? automatycznie zwr??cone na Twoje konto.
    </h5>
  </div>
  <div id="floatlayer" class="floatlayer">
    <div class="ayer">
      <div style="margin-top: -30px;"><img src="<?= $pResUrl; ?>images/box.png" alt=""></div>
      <div style="  color: #FFF4C7;font-size: 21px;">
        Do <i style="font-size: 21px;color: #FFFFFF;; ">85%</i> zni??ki na wyprzeda?? ??wi??teczn??
      </div>
      <div class="text">
        <p style="margin-top: -35px;"><span>74<strong>,90 z??</strong> <b>wcze??niej: </b><i>599,60 z??</i></span> </p>
        <p>

          <a href="http://www.iobit.com/buy.php?product=pl-asc143pcsdpfiu74&ref=pl_asc143pcsdpfiu74purchase2011<?= $refStr; ?>&refs=pl_purchase_asc">
            <button onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascxmas2011-pl')">
              KUP TERAZ</button>
          </a>
        </p>
        <p style="height: 16px; font-size: 14px;font-weight: 500;color: #FFFBF0;margin-top: 5px;">Zosta??o tylko 155 z 3.000
          pakiet??w
        </p>
      </div>
    </div>
  </div>
  </div>
  <h6 id="last">Copyright ??2005 - 2020 IObit. Wszelkie prawa zastrze??one</h6>
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
      url: "2020xmas.php",
      data: "action=getPacks&d=" + date.getDate(),
      success: function(res) {
        var sales = JSON.parse(res);
        packs = sales.packsNum;
        $('#viewNum').html(packs);
        if (packs > 0) {
          $(window).unload(function() {
            packs = cGet('2020xmas_p');
          });
          setTimeout('getSales(0)', getReTime());
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