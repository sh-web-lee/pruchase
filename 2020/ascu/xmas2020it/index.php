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
$refStr .= empty($_GET['st']) ? '' : '-'.$_GET['st'];
if($_GET['ref']=='nc'){
    $refStr.='-'.$_GET['ref'];
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
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800;900&display=swap" rel="stylesheet">
  <script src="https://cdn.bootcdn.net/ajax/libs/less.js/3.9.0/less.min.js"></script>
  <script src="https://cdn.bootcdn.net/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- <script src="https://cdn.bootcdn.net/ajax/libs/wow/1.1.2/wow.min.js"></script> -->
  <title>Sconti di Natale fino all'80% su Advanced SystemCare Ultimate – IObit</title>
  <?php echo $gJavascript['public']; ?>
  <?php echo $gJavascript['head']; ?>
</head>

<body>
  <header>
    <div style="text-align: center;" class="tio">
      <a href="https://www.iobit.com/it/index.php">
        <img src="<?= $pResUrl; ?>images/logo.png" alt="">
      </a>
      <img src="<?= $pResUrl; ?>images/title.png" alt="" class="route">
      <p style="margin-top: -31px;font-size: 20px; color: #442325;font-weight: 600;">Fino a <strong style="font-size: 24px;color:#E42D35;font-weight: 600;">80%</strong>
        di sconto! Antivirus intelligente e protezione totale per il tuo PC</p>
    </div>
    <div class="box">
      <div class="box1">
        <div class="boximg"> <img src="<?= $pResUrl; ?>images/Abox.png" alt=""></div>
        <h1>50% di sconto</h1>
        <h3>29<i>,99€</i> <span>59,99€</span></h3>
        <a href="http://www.iobit.com/buy.php?product=it-au133pc2999&ref=it_au133pc2999purchasexmas2020<?= $refStr; ?>&refs=it_purchase_au" target="_blank">
          <button onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascupurchase3pcxmas2020-it')"> Acquista ora</button></a>
      </div>
      <div class="box2">
        <img src="<?= $pResUrl; ?>images/UITVERKOCHT.png" alt="" id="fixe">
        <div class="pobox "><img src="<?= $pResUrl; ?>images/click.png" alt=""></div>
        <div class="boxinser">
          <img src="<?= $pResUrl; ?>images/ASCbox.png" alt="" class="postimg">
          <h1>80% di sconto</h1>
          <h3>29<i>,99€</i> <span>159,92€</span></h3>
          <a href="http://www.iobit.com/buy.php?product=it-au133pciusdpf2999&ref=it_au133pciusdpf2999purchasexmas2020<?= $refStr; ?>&refs=it_purchase_au" target="_blank">
            <button onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascupurchase3pciusdpfxmas2020-it')">Approfittane ora</button></a>
          <p>Rimangono solo <i id="viewNum" style="color: #E63233;">1H 0M 0S 00MS</i></p>
        </div>
      </div>
    </div>
  </header>
  <div class="navtop">
    <img src="<?= $pResUrl; ?>images/Chip_Logo.png" alt="">
  </div>
  <nav>
    <div>
      <img src="<?= $pResUrl; ?>images/tree.png" alt="">
      <span style="font-size: 42px; font-weight: 600; color: #233653;;margin-left: 22px;">
        Il tuo PC ha bisogno di Advanced SystemCare Ultimate </span>
    </div>
    <div style="margin-top: 14px;">
      <img src="<?= $pResUrl; ?>images/acceimg4.png" alt="" id="chaimg">
    </div>
    <ul class="topimg">
      <li>
        <div><img src="<?= $pResUrl; ?>images/clean.png" alt=""></div>
        <div style="margin-left: 11px;margin-top: 8px;">
          <h5>PC più pulito</h5>
          <p>Pulisce e rimuove tutti i tipi di file spazzatura come file temporanei, cache in Dropbox e Chrome</p>
        </div>
      </li>
      <li>
        <div><img src="<?= $pResUrl; ?>images/safety.png" alt=""></div>
        <div style="margin-left: 11px;">
          <h5>PC più protetto</h5>
          <p>
            Protegge il tuo PC contro virus, spyware e attacchi ransomware come WannaCry
          </p>
        </div>
      </li>
      <li class="top">
        <div><img src="<?= $pResUrl; ?>images/speed.png" alt=""></div>
        <div style="margin-left: 11px;margin-top: 8px;">
          <h5>PC più sicuro</h5>
          <p>
            Protegge in modo completo i tuoi dati personali e la tua privacy online in tempo reale
          </p>
        </div>
      </li>
      <li class="top">
        <div><img src="<?= $pResUrl; ?>images/AI.png" alt=""></div>
        <div style="margin-left: 11px;">
          <h5>PC più veloce</h5>
          <p>
            Accelera il tuo PC con un solo clic. Leggero, veloce e compatibile con altri prodotti di sicurezza
          </p>
        </div>
      </li>
    </ul>
  </nav>
  <aside>
    <div>
      <img src="<?= $pResUrl; ?>images/peop.png" alt="" style="vertical-align: bottom;">
      <span style="font-size: 38px; font-weight: 600; color: #233653;;margin-left: 22px;">
        Approfitta di questi regali esclusivi solo per te! </span>
    </div>
    <div class="asibox">
      <ul>
        <li>
          <div><img src="<?= $pResUrl; ?>images/IU.png" alt=""></div>
          <div style="margin-left: 9px;">
            <h1>0€ <del>29,99€</del></h1>
            <h4>IObit Uninstaller PRO elimina definitivamente dal tuo PC programmi difficili da rimuovere, plugin e app di Windows indesiderate con un solo clic!</h4>
          </div>
        </li>
        <li>
          <div><img src="<?= $pResUrl; ?>images/sd.png" alt=""></div>
          <div style="margin-left: 9px;">
            <h1>0€ <del>29,99€</del></h1>
            <h4>Smart Defrag PRO ti offre la migliore deframmentazione e monitoraggio del disco, una migliore esperienza di gioco e un accesso ai file più veloce!</h4>
          </div>
        </li>
        <li>
          <div><img src="<?= $pResUrl; ?>images/PF.png" alt=""></div>
          <div style="margin-left: 9px;">
            <h1>0€ <del>39,95€</del></h1>
            <h4>Protected Folder protegge efficacemente i tuoi dati, cartelle e file importanti con l’uso di una password. Non dovrai più preoccuparti di avere file intaccati da virus, spyware e ransomware! </h4>
          </div>
        </li>
      </ul>
    </div>
  </aside>
  <div class="map wrapper">
    <h2>Riconoscimenti e recensioni in tutto il mondo</h2>
    <div class="mapbox clearfix">
      <dl>
        <dt><b>200+</b></dt>
        <dd>Popolare in più di <b>200</b> paesi in tutto il mondo</dd>
      </dl>
      <dl class="two">
        <dt><b>500+</b></dt>
        <dd>Più di <b>500</b> media hanno apprezzato Advanced SystemCare Ultimate </dd>
      </dl>
      <dl>
        <dt><b>150,000+</b></dt>
        <dd>Scelto e consigliato da oltre <br> <b>150</b> mila utenti mondiali</dd>
      </dl>
      <dl class="four">
        <dt><b>80%+</b></dt>
        <dd>Più dell’<b>80%</b> di utenti ha attivato Advanced SystemCare Ultimate</dd>
      </dl>
    </div>
  </div>
  <article>
    <!-- <div>
      <img src="<?= $pResUrl; ?>images/tree2.png" alt="">
      <span style="font-size: 32px; font-weight: 600; color: #233653;;margin:0 22px;">
        Redaktions-Tipp</span>
      <img src="<?= $pResUrl; ?>images/tree1.png" alt="">
    </div>
    <div style="margin-top: 29px;"><img src="<?= $pResUrl; ?>images/circle.png" alt="">
    </div> -->
    <div style="margin-top: 90px;">
      <img src="<?= $pResUrl; ?>images/tree2.png" alt="">
      <span style="font-size: 32px; font-weight: 600; color: #233653;;margin:0 22px;"> Recensioni utenti</span>
      <img src="<?= $pResUrl; ?>images/tree1.png" alt="">
    </div>

    <div class="adva">
      <div class="pole"><img src="<?= $pResUrl; ?>images/arrl.png" alt=""></div>
      <div class="pori"><img src="<?= $pResUrl; ?>images/arrowr.png" alt=""></div>
      <ul class="con">
        <li class="special">
          <div class="special-div">
            <div style="margin-top: 64px;"><img src="<?= $pResUrl; ?>images/anthon.png" alt="">
              <span>HTML</span>
            </div>
            <p>
              "In conclusione Advanced SystemCare Ultimate è un ottimo prodotto che unisce le caratteristiche della versione precedente, insieme a quelle di Advanced SystemCare con Antivirus dando vita ad un prodotto nuovo, robusto e dalle eccellenti funzionalità. L’interfaccia grafica di Advanced SystemCare era già accattivante e ben organizzata."
            </p>
          </div>
        </li>
        <li>
          <div class="special-div">
            <div style="margin-top: 64px;"><img src="<?= $pResUrl; ?>images/santiago.png" alt="">
              <span> Russell Peck</span>
            </div>
            <p>
              "Ho usato varie versioni di Advanced SystemCare per tanti anni. Quando ho visto le caratteristiche di Advanced SystemCare Ultimate, ho subito capito che ne avrei avuto bisogno. Non mi ha mai deluso. Uno dei programmi più semplici, ma più efficaci che ho trovato per mantenere tutti i miei 3 PC sicuri e sani."
            </p>
          </div>
        </li>
        <li>
          <div class="special-div">
            <div style="margin-top: 64px;"><img src="<?= $pResUrl; ?>images/ryan_hill.png" alt="">
              <span> Rod Garnett</span>
            </div>
            <p>
              "Ho avuto un problema che metteva sempre nei guai il mio computer. Dopo avere installato Advanced SystemCare Ultimate, non ho avuto più problemi. L'antivirus è già incluso nel prodotto, non ho bisogno di installarne un altro. Il mio computer è sempre aggiornato e funziona velocemente. È il programma più eccellente di tutti!"
            </p>
          </div>
        </li>
      </ul>
    </div>

  </article>
  <section>
    <div class="comparison">
      <div class="wrapper clearfix">
        <div class="comparison">
          <h4>Perché scegliere Advanced SystemCare Ultimate 13?</h4>
          <h5>Una migliore protezione e nessun rallentamento delle prestazioni. Guarda la seguente tabella comparativa</h5>
          <div class="ctable">
            <table border="0" cellspacing="0" cellpadding="0" width="100%">
              <thead>
                <tr>
                  <th class="text"></th>
                  <th class="blue">
                    <p><span>Advanced SystemCare</span> Ultimate</p>
                  </th>
                  <th>AVG<span>Anti-virus</span></th>
                  <th>Norton Security<span>Deluxe</span></th>
                  <th>Avast! Pro<span>Antivirus</span></th>
                  <th>Microsoft<span>Security Essentials</span></th>
                  <th>McAfee® AntiVirus</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="title first">Percentuale rilevamenti</td>
                  <td class="gray">Molto alta</td>
                  <td>Normale</td>
                  <td>Alta</td>
                  <td>Normale</td>
                  <td>Alta</td>
                  <td>Alta</td>
                </tr>
                <tr>
                  <td class="title">Rallentamenti di sistema</td>
                  <td class="gray">No</td>
                  <td>Sì</td>
                  <td>Sì</td>
                  <td>Sì</td>
                  <td>Sì</td>
                  <td>Sì</td>
                </tr>
                <tr>
                  <td class="title">Ottimizzazione e pulizia <br> complete del PC</td>
                  <td class="gray"><i class="tb-icons red">√</i></td>
                  <td><i class="tb-icons">×</i></td>
                  <td><i class="tb-icons">×</i></td>
                  <td><i class="tb-icons">×</i></td>
                  <td><i class="tb-icons">×</i></td>
                  <td><i class="tb-icons">×</i></td>
                </tr>
                <tr>
                  <td class="title">Oltre 20 strumenti aggiuntivi per migliorare le prestazioni del PC</td>
                  <td class="gray"><i class="tb-icons red">√</i></td>
                  <td><i class="tb-icons">×</i></td>
                  <td><i class="tb-icons">×</i></td>
                  <td><i class="tb-icons">×</i></td>
                  <td><i class="tb-icons">×</i></td>
                  <td><i class="tb-icons">×</i></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer>
    <ul>
      <li>
        <img src="<?= $pResUrl; ?>images/size72.png" alt="">
        <h3>Garanzia di Rimborso</h3>
        <p>Garantiamo il rimborso entro <br>
          60 giorni.</p>
      </li>
      <li>
        <img src="<?= $pResUrl; ?>images/secure.png" alt="" style="margin: 20px 0;">
        <h3>Pagamento 100% Sicuro</h3>
        <p>IObit offre i metodi di pagamento <br>
          sicuri per la transazione. </p>
      </li>
      <li style="margin-top: 15px;">
        <img src="<?= $pResUrl; ?>images/buycut.png" alt="">
        <h3 style="margin-top: 42px;">Attivazione Veloce</h3>
        <p>Riceverai il codice di <br>
          licenza in pochi minuti tramite la mail.</p>
      </li>
      <li style="margin-top: 15px;">
        <img src="<?= $pResUrl; ?>images/erji.png" alt="">
        <h3 style="margin-top: 33px;">Servizio di Supporto</h3>
        <p>Il nostro supporto tecnico gratuito <br>
          è disponibile 24 ore su 24.</p>
      </li>
    </ul>
  </footer>
  <div class="laster">
    <h5>
      Note: <br>
      *. I dati potrebbero variare in base al sistema o computer. <br>
      *. Tali promozioni sono soggette a modifiche senza preavviso, periodiche e a nostra esclusiva discrezione.<br>
    </h5>
    <h6 id="last">Copyright 2005 - 2020 IObit. Tutti i diritti riservati</h6>
  </div>
  <div id="floatlayer" class="floatlayer">
    <div class="ayer">
      <div style="margin-top: -30px;"><img src="<?= $pResUrl; ?>images/box.png" alt="" id="fiximg"></div>
      <div class="guide">
        <h1 style=" color: #FFF4C7;font-size: 21px;"> Offerta di Natale! 80% di sconto </h1>
        <p style=" color: #FFF4C7;font-size: 21px;margin-top:20px;">Rimangono solo <i id="viewNum-2">1H 0M 0S 00MS</i></p>
      </div>
      <div class="text" id="numtext">
        <p style="margin-top: -35px;"><span>29</span><strong>,99€</strong> <b></b><i>159,92€</i> </p>
        <p>
          <a href="http://www.iobit.com/buy.php?product=it-au133pciusdpf2999&ref=it_au133pciusdpf2999purchasexmas2020<?= $refStr; ?>&refs=it_purchase_au" target="_blank">
            <button onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascupurchase3pciusdpfxmas2020-it')">
              Approfittane ora</button>
          </a>
        </p>
      </div>
    </div>
  </div>
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
      $('#floatlayer').addClass('on'); //滑动隐藏
    } else {
      $('#floatlayer').removeClass('on'); //滑动出现
    }
  });
  $('.pobox').hover(function() {
    $('.pobox').addClass('hidd');

  }, function() {
    $('.pobox').removeClass('hidd');
  })
  // timeout use

  var countdown = function(countdown) {
    getCycleCountdown();
    $(countdown).html(h + 'H ' + i + 'M ' + s + 'S ' + mi + 'MS');
    if (d != 0 || h != 0 || i != 0 || s != 0 || mi != 0) setTimeout("countdown('" + countdown + "')", 100);
    else setimeout();
  };

  function getCycleCountdown() {
    var date = new Date();
    if (MApp(2.2).cookie.get('xmasascuit2020')) {
      dt = MApp(2.2).cookie.get('xmasascuit2020');

    } else {
      dt = date.setMinutes(date.getMinutes() + 60);
      MApp(2.2).cookie.set('xmasascuit2020', dt);
    }

    var datetime = getCountdown(dt);
    if (datetime == 0) {
      d = h = i = s = mi = "00";
      soldOut();
    } else {
      d = MApp(2.2).packages.zeroize(datetime[0], 2);
      h = MApp(2.2).packages.zeroize(datetime[1], 2);
      i = MApp(2.2).packages.zeroize(datetime[2], 2);
      s = MApp(2.2).packages.zeroize(datetime[3], 2);
      mi = MApp(2.2).packages.zeroize(datetime[4], 3).substr(0, 2);
    }
  }

  function getCountdown(t) {
    var e = new Date,
      i = Math.floor(e.getTime() / 1000),
      r = t / 1000,
      n = r - i;
    if (n > 0) {
      var s = Math.floor(n / 86400),
        a = Math.floor(n / 3600 % 24),
        o = Math.floor(n / 60 % 60),
        u = Math.floor(n % 60),
        h = 999 - e.getMilliseconds();
      return 10 > h ? h = "00" + h : 100 > h && (h = "0" + h),
        Array(s, a, o, u, h)
    }
    return 0
  }

  function setimeout() {
    $('#fixe').show()
    $('aside .asibox ul ').hide()
    $('aside .asibox').css('background-image', 'url(<?= $pResUrl; ?>images/gift-soldout-bg.png)')
    $('#fiximg').attr('src', '<?= $pResUrl; ?>images/Abox1.png')
    $('#numtext span').text('29')
    $('#numtext i').text('59,99€')
    $('.guide h1').text('Offerta di Natale! Hai ancora il 50% di sconto')
    $('.guide p').hide()
    $('#numtext a').attr('href', 'http://www.iobit.com/buy.php?product=it-au133pc2999&ref=it_au133pc2999purchasexmas2020<?= $refStr; ?>&refs=it_purchase_au')
    $('#numtext button').text('Acquista ora')
    $('#numtext button').on('click', function() {
      ga('send', 'event', 'ascubuy', 'buy', 'ascupurchase3pcxmas2020-it')
    })
  }

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
        $('#viewNum-2').html(packs);
        if (packs > 3) {
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
  countdown('#viewNum');
  countdown('#viewNum-2');
</script>

</html>