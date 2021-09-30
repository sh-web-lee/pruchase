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

if(preg_match('/^([0-9]*)\.([0-9]*)\./',$_GET['ver'],$matches)){
    $ver=$matches[1].'-'.$matches[2];
    $refStr.='-'.$ver;
}
$refStr.=empty($_GET['st'])?'':('-'.$_GET['st']);
$refStr.=empty($_GET['pop'])?'':('-'.$_GET['pop']);
$refStr.=empty($_GET['r'])?'':('-'.$_GET['r']);
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['user'])?'':('-'.$_GET['user']);
$refStr.=empty($_GET['insday'])?'':('-'.$_GET['insday']);
$refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo $pResUrl; ?>static/css/Normalize.css" type="text/css">
  <link rel="stylesheet" href="<?php echo $pResUrl; ?>static/css/common.css" type="text/css">
  <!-- <link rel="stylesheet" href="<?= $pResUrl; ?>static/css/swiper.min.css"> -->
  <!-- <link rel="stylesheet" href="<?= $pResUrl; ?>static/css/animate.css"> -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <script src="https://cdn.bootcdn.net/ajax/libs/less.js/3.9.0/less.min.js"></script>
  <script src="https://cdn.bootcdn.net/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- <script src="https://cdn.bootcdn.net/ajax/libs/wow/1.1.2/wow.min.js"></script> -->
  <title>Promozione di Natale, sconti fino all'87% su IObit Uninstaller PRO – IObit</title>
  <?php echo $gJavascript['public']; ?>
  <?php echo $gJavascript['head'] ?>
</head>

<body>
  <nav>
    <div class="logo"><a href="https://www.iobit.com/it/index.php" target="_blank" onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase2011-nl')"><img src="<?= $pResUrl; ?>static/img/LOGO.png" alt=""></a>
    </div>
    <img src="<?= $pResUrl; ?>static/img/wordbd.png" alt="">
    <div class="book clearfix">
      <div class="one left ">
        <h3>Pacchetto standard</h3>
        <p style="text-align: right;">
          €15<span style="font-size: 18px;">,99</span> <i style="font-size: 18px; color: #838395;text-decoration: line-through;">€39,99</i>
        </p>
        <div style="text-align: left;">
          <img src="<?= $pResUrl; ?>static/img/ISU.png" alt="">
        </div>
        <a href="http://www.iobit.com/buy.php?product=it-iu103pc1599&ref=it_iu103pc1599purchasexmas2020<?= $refStr; ?>&refs=it_purchase_iu" target="_blank">
          <button onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase3pcxmas2020-it')">ACQUISTA ORA</button>
        </a>
      </div>
      <div class="two left">
        <div class="two-up">
          <h3 style="font-size: 20px;">Pacchetto natalizio temporaneo!</h3>
          <p style=" padding-left: 27%;text-align: left;">
            <img src="<?= $pResUrl; ?>static/img/time.png" alt="">
            Rimangono
            <i id="timeout">00:11:24:326</i>
          </p>
        </div>
        <p style="text-align: right;font-size: 60px; font-weight: 600;margin-right: 20px;">
          €15<span style="font-size: 22px;">,99</span> <i style="font-size: 22px; color: #838395;text-decoration: line-through;">€139,92</i>
        </p>
        <div style="text-align: left;margin-left: 25px;margin-top: -19px;">
          <img src="<?= $pResUrl; ?>static/img/box.png" alt="">
        </div>
        <a href="http://www.iobit.com/buy.php?product=it-iu103pcsdisupf1599&ref=it_iu103pcsdisupf1599purchasexmas2020<?= $refStr; ?>&refs=it_purchase_iu" target="_blank">
          <button onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase3pcsdisupfxmas2020-it')">
            ACQUISTA ORA
          </button>
        </a>
        <img src="<?= $pResUrl; ?>static/img/UITVERKOCHT.png" alt="" style="display: none;" id="post">
      </div>
      <img src="<?= $pResUrl; ?>static/img/pplay.png" alt="" style=" bottom: -125px;
      position: absolute;
      z-index: 999;
      left: -64px;">
    </div>
  </nav>
  <aside>
    <h2 style="text-align: center;"><img src="<?= $pResUrl; ?>static/img/word.png" alt=""></h2>
    <div class="feature wrapper clearfix">
      <!-- computer -->
      <div class="computer">
        <div class="screen">
          <div class="list clearfix">
            <!-- <img src="<?= $pResUrl; ?>static/img/num1.png" alt=""> -->
            <img src="<?= $pResUrl; ?>static/img/num2.png" alt="">
            <img src="<?= $pResUrl; ?>static/img/num3.png" alt="">
            <img src="<?= $pResUrl; ?>static/img/num4.png" alt="">
            <img src="<?= $pResUrl; ?>static/img/num5.png" alt="">
          </div>
        </div>
      </div>
      <!-- ul -->
      <div class="message">
        <ul>
          <li>
            <b>Potente</b> rimozione di tutti i software indesiderati e ostinati.
          </li>
          <li>
            <b>Intelligente</b> rilevamento e rimozione dei plugin dannosi e pubblicitari.
          </li>
          <li>
            <b>Facile</b> aggiornamento di tutti i software importanti all'ultima versione con un clic.
          </li>
          <li class="last">
            <b>Automatica</b> rimozione degli avanzi e aggiornamento di IObit Uninstaller.
          </li>
        </ul>
        <!-- active -->
        <span></span>
      </div>
    </div>
  </aside>
  <article id="arti">
    <div class="art">
      <div class="num1">
        <img src="<?= $pResUrl; ?>static/img/twobox.png" alt="" style="width: 300px;">
      </div>
      <div class="num2">
        <p>
          <img src="<?= $pResUrl; ?>static/img/right.png" alt="">
          Smart Defrag PRO
        </p>
        <i>mantiene il tuo disco e SSD in perfette condizioni!</i>
        <p> <img src="<?= $pResUrl; ?>static/img/right.png" alt="">
          IObit Software Updater PRO </p>
        <i>mantiene aggiornati automaticamente i software del tuo PC!</i>
        <p> <img src="<?= $pResUrl; ?>static/img/right.png" alt="">
          Protected Folder </p>
        <i>protegge i tuoi dati, cartelle e file importanti con l’uso di una </i>
        <i style="line-height: 1.15;margin-left:24px"> password!</i>
      </div>
      <div class="num3">
        <a href="http://www.iobit.com/buy.php?product=it-iu103pcsdisupf1599&ref=it_iu103pcsdisupf1599purchasexmas2020<?= $refStr; ?>&refs=it_purchase_iu" target="_blank">
          <button onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase3pcsdisupfxmas2020-it')">APRI I REGALI</button>
          <p>
        </a>
        <img src="<?= $pResUrl; ?>static/img/time.png" alt="" style="margin-right: 7px;">
        Rimangono
        <i id="timeout" style="font-size: 14px;color: #EA2D2D;font-weight: bold;">00:11:24:326</i>
        </p>
      </div>
    </div>
    <div class="nothing">
      <h2 style=" text-align: center;font-size: 26px;  color: #292b2f;margin-top: 23px;">Ottieni ancora uno sconto del 60% !
      </h2>
      <div class="arttwo">
        <div class="num1">
          <img src="<?= $pResUrl; ?>static/img/ubox.png" alt="">
        </div>
        <div class="num2">
          <img src="<?= $pResUrl; ?>static/img/ISU.png" alt="">
        </div>
        <div class="num3">
          <p style="text-align: center;font-size: 48px; font-weight: 600;margin-right: 20px;">
            €15<span style="font-size: 18px;">,99</span> <i style="font-size: 18px; color: #838395;text-decoration: line-through;">€39,99</i>
          </p>
          <a href="http://www.iobit.com/buy.php?product=it-iu103pc1599&ref=it_iu103pc1599purchasexmas2020<?= $refStr; ?>&refs=it_purchase_iu" target="_blank">
            <button onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase3pcsdisupfxmas2020-it')">ACQUISTA ORA</button>
          </a>
        </div>
      </div>
    </div>
  </article>
  <div class="mainbox clearfix">
    <div class="tab">
      <div class="context">
        <div class="con">
          <h5>Recensioni degli Utenti</h5>
          <h6>IObit Uninstaller ha fatto molta strada, l'ho usato per molto tempo, mi piace moltissimo, è molto accurato e migliora giorno dopo giorno. Sono molto soddisfatto, senza di lui non lo sarei. Se ancora non lo stai usando potresti provarlo, è 100 volte migliore rispetto a un anno fa. Pulisce tutta la spazzatura indesiderata del registro e lo fa anche molto bene.</h6>
        </div>
        <div class="con">
          <h5>Recensioni degli Utenti</h5>
          <h6>Questo programma mi ha permesso di risparmiare denaro. Prima di utilizzarlo, il mio computer era molto lento, non potevo usarlo per fare niente. Ora il mio computer è veramente pulito e grazie a questo programma è diventato molto più veloce. Sono riuscito a salvare il mio computer grazie a IObit Uninstaller. Grazie mille IObit, ti amo.</h6>
        </div>
        <div class="con">
          <h5>Recensioni dei Media</h5>
          <h6>Questo strumento di disinstallazione facile da usare e informativo pulisce, configura, e ottimizza il tuo PC. Gli utenti possono scaricarlo in pochissimi minuti. Questo strumento di disinstallazione può essere classificato come il miglior programma di disinstallazione e permette agli utenti di disinstallare all'ingrosso. Esso offre agli utenti di fare una "Scansione Approfondita" per andare più a fondo e trovare gli avanzi. La prestazione la stessa rende questo piccolo strumento vale la pena tenere.</h6>
        </div>
        <div class="con">
          <h5>Recensioni degli Utenti</h5>
          <h6>In passato ho usato diversi programmi di disinstallazione, tuttavia, una volta che ho iniziato a utilizzare IOBit Uninstaller dalla versione 7.0, non ho più utilizzato nessun'altra applicazione. Ha un'interfaccia facile da usare e fa il lavoro per cui è pensato alla massima perfezione. Ti aiuta a ripulire automaticamente il registro che altrimenti rimarrebbe stracolmo di avanzi e preserva così la salute del PC. La capacità di identificare Bundleware e rimuoverli è una grande funzionalità presente in IOBit Unistaller che non ha eguali.</h6>
        </div>
        <div class="con">
          <h5>Recensioni degli Utenti</h5>
          <h6>IObit Uninstaller trova nei miei browser dei plugin che non sapevo nemmeno esistessero. La pulizia dei file residui è ottima, non lascia alcun dato inutile del software disinstallato. Mi ricorda gli aggiornamenti disponibili per tutti i miei programmi. Complessivamente, le prestazioni del mio computer sono migliorate grazie a questo programma. È molto conveniente e facilmente gestibile, l’ho persino consigliato ai miei amici.</h6>
        </div>
      </div>
      <ul class="btn">
        <li class="active">
          <img src="<?= $pResUrl; ?>static/img/ivan.png" alt="" class="imgon">
          <h3>Ivan White</h3>
        </li>
        <li>
          <img src="<?= $pResUrl; ?>static/img/ali.png" alt="" class="imgon">
          <h3>Ali Tekin</h3>
        </li>
        <li>
          <img src="<?= $pResUrl; ?>static/img/MakeUseOf.png" alt="" class="imgon">
          <h3>MakeUseOf</h3>
        </li>
        <li>
          <img src="<?= $pResUrl; ?>static/img/samrat.png" alt="" class="imgon">
          <h3>Samrat Kumar Chakrabortty</h3>
        </li>
        <li class="active">
          <img src="<?= $pResUrl; ?>static/img/john.png" alt="" class="imgon">
          <h3>John Glenn Perong</h3>
        </li>
      </ul>
    </div>
    <div class="tablebox">
      <div class="title">
        <h3>IObit Uninstaller Free </h3>
        <div>
          <img src="<?= $pResUrl; ?>static/img/title.png" alt="">
        </div>
        <h1> IObit Uninstaller PRO</h1>
      </div>
      <table cellpadding="0" cellspacing="0" border="0">
        <tr>
          <td><img src="<?= $pResUrl; ?>static/img/rightg.png" alt=""></td>
          <td>Disinstalla i programmi da un collegamento, una finestra aperta o un'icona nella barra delle applicazioni</td>
          <td><img src="<?= $pResUrl; ?>static/img/cright.png" alt=""></td>
        </tr>
        <tr>
          <td><img src="<?= $pResUrl; ?>static/img/rightg.png" alt=""></td>
          <td>Rimuove plugin ed estensioni in Edge, Chrome, IE, Firefox, ecc.</td>
          <td><img src="<?= $pResUrl; ?>static/img/cright.png" alt=""></td>
        </tr>
        <tr>
          <td><img src="<?= $pResUrl; ?>static/img/error.png" alt=""></td>
          <td>Rimuove i programmi più ostinati  </td>
          <td><img src="<?= $pResUrl; ?>static/img/cright.png" alt=""></td>
        </tr>
        <tr>
          <td><img src="<?= $pResUrl; ?>static/img/error.png" alt=""></td>
          <td>Rileva e rimuove i programmi installati con freeware  </td>
          <td><img src="<?= $pResUrl; ?>static/img/cright.png" alt=""></td>
        </tr>
        <tr>
          <td><img src="<?= $pResUrl; ?>static/img/error.png" alt=""></td>
          <td>
            Rimuove automaticamente gli avanzi che altri programmi di disinstallazione non possono rimuovere
          </td>
          <td><img src="<?= $pResUrl; ?>static/img/cright.png" alt=""></td>
        </tr>
        <tr>
          <td><img src="<?= $pResUrl; ?>static/img/error.png" alt=""></td>
          <td>Mantiene in buone condizioni tutti i software del PC</td>
          <td><img src="<?= $pResUrl; ?>static/img/cright.png" alt=""></td>
        </tr>
        <tr>
          <td><img src="<?= $pResUrl; ?>static/img/error.png" alt=""></td>
          <td>Identifica e rimuove i plugin pubblicitari</td>
          <td><img src="<?= $pResUrl; ?>static/img/cright.png" alt=""></td>
        </tr>
        <tr>
          <td><img src="<?= $pResUrl; ?>static/img/error.png" alt=""></td>
          <td>Aggiorna automaticamente tutti i software importanti con 1 clic </td>
          <td><img src="<?= $pResUrl; ?>static/img/cright.png" alt=""></td>
        </tr>
        <tr>
          <td><img src="<?= $pResUrl; ?>static/img/error.png" alt=""></td>
          <td>Aggiornamento automatico all'ultima versione</td>
          <td><img src="<?= $pResUrl; ?>static/img/cright.png" alt=""></td>
        </tr>
        <tr>
          <td style="border-bottom: 0;"><img src="<?= $pResUrl; ?>static/img/error.png" alt=""></td>
          <td style="border-bottom: 0;">Supporto tecnico gratuito 24/7</td>
          <td style="border-bottom: 0;"><img src="<?= $pResUrl; ?>static/img/cright.png" alt=""></td>
        </tr>
      </table>
    </div>
  </div>
  <section class="clearfix" id="sect">
    <div class="sec">
      <div class="sec-sale">
        <img src="<?= $pResUrl; ?>static/img/75.png" alt="" id="sale"> </div>
      <div class="sec-buy">
        <p>€15<span>,99</span> <i>€139,92</i></p>
        <a href="http://www.iobit.com/buy.php?product=it-iu103pcsdisupf1599&ref=it_iu103pcsdisupf1599purchasexmas2020<?= $refStr; ?>&refs=it_purchase_iu" target="_blank" id="hrf">
          <button onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase3pcsdisupfxmas2020-it')" id="btnidex">ACQUISTA ORA</button>
        </a>
        <h2 id="hidn" style="text-align: left; padding-left: 17%;">
          <img src="<?= $pResUrl; ?>static/img/time.png" alt="" style="margin-right: 7px;">
          Rimangono
          <i id="timeout" style="font-size: 14px;color:#292B2F;font-weight: bold;">00:11:24:326</i>
        </h2>
      </div>
    </div>
  </section>
  <footer>
    <ul>
      <li>
        <img src="<?= $pResUrl; ?>static/img/size72.png" alt="">
        <h3>Garanzia di rimborso</h3>
        <p>Non sei soddisfatto? Garanzia di rimborso <br>
          entro 60 giorni assicurata.</p>
      </li>
      <li style="margin-top: 20px;">
        <img src="<?= $pResUrl; ?>static/img/secure.png" alt="">
        <h3 style="margin-top: 45px;">Pagamento Assicurato</h3>
        <p>Tutti i metodi di pagamento sono verificati <br>
          e sicuri al 100% </p>
      </li>
      <li style="margin-top: 20px;">
        <img src="<?= $pResUrl; ?>static/img/carcut.png" alt="">
        <h3 style="margin-top: 40px;">Attivazione Veloce</h3>
        <p>Dopo il tuo acquisto, riceverai il codice di <br>
          licenza in pochi minuti tramite e-mail </p>
      </li>
      <li style="margin-top: 15px;">
        <img src="<?= $pResUrl; ?>static/img/erji.png" alt="">
        <h3 style="margin-top: 33px;">Servizio Clienti</h3>
        <p>24/7 Supporto tecnico gratuito </p>
      </li>
    </ul>
  </footer>
  <div class="laster">
    <h5>
      Note: <br>
      * I dati potrebbero variare in base al sistema o computer.<br>
      * Tali promozioni sono soggette a modifiche senza preavviso, periodiche e a nostra esclusiva discrezione.
    </h5>
    <h6>Copyright ©2005 - 2020 IObit. Tutti i diritti riservati</h6>
  </div>
</body>
<script>
  var numidex = 1
  $(".feature .message ul li").hover(function() {
    var index = $(this).index();
    $(".feature .message>span").stop().animate({
      "marginTop": index * 104
    }, 300);
    $(".feature .list ").stop().animate({
      // "marginLeft": -(index+1) * 560
      "marginLeft": -(index) * 560
    }, 300);
  });
  //tab栏的切换显示与隐藏
  $(".con").eq(0).show();
  $('.btn li .hidn').eq(0).show()

  $(".btn li ").hover(function() {
    var num = $(".btn li ").index(this);
    $('.btn li').removeClass('active')
    $('.btn li').eq(num).addClass('active')
    $(".con").hide().animate({
      opacity: '0'
    }, 100);
    $(".con").eq(num).show().animate({
      opacity: '1'
    }, 100);
  })

  var countdown = function(countdown) {
    getCycleCountdown();
    $(countdown).html(h + ':' + i + ':' + s + ':' + mi);
    if (d != 0 || h != 0 || i != 0 || s != 0 || mi != 0) setTimeout("countdown('" + countdown + "')", 100);
    else soldOut();
  };

  function getCycleCountdown() {
    var date = new Date();
    if (MApp(2.2).cookie.get('xmasiuit2020')) {
      dt = MApp(2.2).cookie.get('xmasiuit2020');

    } else {
      dt = date.setMinutes(date.getMinutes() + 15);
      MApp(2.2).cookie.set('xmasiuit2020', dt);
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

  function soldOut() {
    numidex = 2
    $('#hidn').hide()
    $('#post').addClass('post')
    $('.one').addClass('topleft')
    $('.art').css('display', 'none')
    $('.nothing').css('display', 'block')
    $('#arti').css({
      "background-image": "url('<?= $pResUrl; ?>static/img/ker.png')"
    })
    $('.sec-buy i').text('€39,99')
    $('#sect').css({
      "background-image": "url('<?= $pResUrl; ?>static/img/overbanner.png')"
    })
    $('#sale').attr('src', '<?= $pResUrl; ?>static/img/IU.png')
    $('#hrf').attr('href', 'http://www.iobit.com/buy.php?product=it-iu103pc1599&ref=it_iu103pc1599purchasexmas2020<?= $refStr; ?>&refs=it_purchase_iu')
  }
  $('#btnidex').on('click', function() {
      if (numidex == 1) {
        ga('send', 'event', 'iubuy', 'buy', 'iupurchase3pcsdisupfxmas2020-it')
      } else {
        ga('send', 'event', 'iubuy', 'buy', 'iupurchase3pcxmas2020-it')
      }
    })
    (function() {
      countdown(("#timeout"));
      countdown(("#hidn i"));
      countdown((".art .num3 i"));

    }());
</script>

</html>