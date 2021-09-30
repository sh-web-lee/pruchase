<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';

$viewNum=rand(168,236);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}


$refStr.=empty($_GET['st'])?'':('-'.$_GET['st']);
if(in_array($_GET['pop'],array('x_db','xi_db','xb_db'))){
  $refStr.='-'.$_GET['pop'];
}
if(!empty($_GET['to'])){
  $refStr.='-'.$_GET['to'];
}
if(preg_match_all('/([0-9]*)\./',$_GET['ver'],$matches)){
  $ver=$matches[1][0].$matches[1][1];
  $refStr.='-'.$ver;
}
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['user'])?'':('-'.$_GET['user']);
$refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);
$refStr.=empty($_GET['insday'])?'':('-'.$_GET['insday']);
$refStr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-t'.$_GET['type'].'-e'.$_GET['expd'];
$refStr.=empty($_GET['flag'])?'':('-flag'.$_GET['flag']);
?>
<!DOCTYPE html>
<html lang="it">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Promozione Esclusiva - 82% di sconto su Driver Booster PRO – IObit</title>
<meta name="Copyright" content="IObit">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700&display=swap" rel="stylesheet">
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com/it/index.php" target="_blank">IObit</a>
      <!-- <h1 class="title">PROMOZIONE INVERNALE</h1>
      <h2>Più saldi che mai! Prendi 3 paghi 1 e risparmi 120€</h2> -->
      <h1 class="title">RISPARMIO ASSICURATO</h1>
      <h2>Prendi 3, paghi 1 e risparmi 120€</h2>
      <div class="clearfix">
        <div class="offer">
          <div class="imgbox">
            <img src="<?php echo getStaticUrl('images/db-box.png')?>" alt=""/>
            <!-- <b class="discount">-<big>55</big>%</b> -->
          </div>
          <div class="price">
            <p class="name">1 anno / 1 PC</p>
            <strong><big>24</big>,99€</strong>
            <p>
              <a class="buybtn gray"
                 href="https://www.iobit.com/buy.php?product=it-db81pc2499&ref=it_db81pc2499purchase2010<?php echo $refStr;?>&refs=it_purchase_db"
                 onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1pc2010-it');">
                Acquista ora   
              </a>
            </p>
            <p>Licenza valida per versioni future</p>
          </div>
        </div>
        <div class="offer big">
          <div class="imgbox">
            <img src="<?php echo getStaticUrl('images/db-box.png')?>" alt=""/>
            <span class="gift"></span>
            <span class="plus"></span>
            <b class="discount">-<big>82</big>%</b>
            <span class="db-price"></span>
          </div>
          <div class="price">
            <p class="name">1 anno / 3 PC + 2 REGALI PRO</p>
            <strong><big>25</big>,99€</strong> <del>144,79€</del>
            <p>
              <a class="buybtn"
                 href="https://www.iobit.com/buy.php?product=it-db83pciupf2599&ref=it_db83pciupf2599purchase2010<?php echo $refStr;?>&refs=it_purchase_db"
                 onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase3pc2010-it');">
                Acquista ora   
              </a>
            </p>
            <p>Licenza valida per versioni future</p>
          </div>
          <dl class="regali clearfix">
            <dt>REGALI PRO</dt>
            <dd>Pulizia completa per un PC più pulito<br> Protezione dei tuoi dati personali</dd>
          </dl> 
          <div class="countbox clearfix">
            <span class="offerta">AFFRETTATI: </span>
            <div id="countdown" class="countdown" data-time="2020-08-10 14:59:00">
              <strong class="circle3">
                <b class="number">00</b>M
                <em class="rotate left"><em class="countcirlce left"></em></em>
                <em class="rotate right"><em class="countcirlce right"></em></em>
              </strong>
              <strong class="circle4">
                <b class="number">00</b>S
                <em class="rotate left"><em class="countcirlce left"></em></em>
                <em class="rotate right"><em class="countcirlce right"></em></em>
              </strong>
              <strong class="last">
                <b class="number">00</b>MS*
                <em class="rotate left"><em class="countcirlce left"></em></em>
                <em class="rotate right"><em class="countcirlce right"></em></em>
              </strong>
            </div>
          </div>
        </div>
      </div>
      <div class="service clearfix">
        <div class="left fl">
          <img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/>
        </div>
        <div class="right fr">
          <dl>
            <dt>Pagamento sicuro</dt>
            <dd><img src="<?php echo getStaticUrl('images/godaddy.png')?>" alt=""/></dd>
          </dl>
          <dl>
            <dt>Garanzia di rimborso</dt>
            <dd><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dd>
          </dl>
          <dl>
            <dt>Servizio clienti 24/7</dt>
            <dd><img src="<?php echo getStaticUrl('images/service.png')?>" alt=""/></dd>
          </dl>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- feature start -->
  <div class="feature">
    <div class="wrapper">
      <h2>Perché scelgo PRO?</h2>
      <div class="feature-wrap">
        <div class="feature-tab fl">
          <dl class="one on">
            <dt>1. </dt>
            <dd>
              <h3>+4.500.000 Driver supportati</h3>
              <p>Rileva e aggiorna con un solo clic molti più driver rari e obsoleti </p>
            </dd>
          </dl>
          <dl class="two">
            <dt>2. </dt>
            <dd>
              <h3>Migliori prestazioni di gioco</h3>
              <p>Aggiorna i driver Game Ready e i componenti di gioco per una maggiore velocità, nuove funzionalità e un'esperienza di gioco più fluida</p>
            </dd>
          </dl>
          <dl class="three">
            <dt>3. </dt>
            <dd>
              <h3>Correzione errori dispositivi </h3>
              <p>Rileva e ripara la mancanza di suono e gli errori dei dispositivi periferici come USB, stampante e tastiera per una migliore esperienza informatica</p>
            </dd>
          </dl>
          <dl class="four">
            <dt>4. </dt>
            <dd>
              <h3>Download 100% più veloce</h3>
              <p>Velocità di download driver 100% più veloce rispetto alla versione gratuita </p>
            </dd>
          </dl>
          <span class="feature-tag"></span>
        </div>
        <div class="feature-screen fr">
          <div class="feature-list scan-animation">
            <div class="scan">
              <div class="circle-wrap">
                <div class="circle left">
                  <div class="circleprogress leftcircle"></div>
                </div>
                <div class="circle right">
                  <div class="circleprogress rightcircle"></div>
                </div>
              </div>
            </div>
            <span class="scan-complete"><em></em></span>
          </div>
          <div class="feature-list game">
            <div class="game-screen">
              <div class="game-circle-wrap">
                <div class="circle left">
                  <div class="circleprogress leftcircle"></div>
                  <em class="mask-left"></em>
                </div>
                <div class="circle right">
                  <div class="circleprogress rightcircle"></div>
                  <em class="mask-right"></em>
                </div>
              </div>
              <span class="pointer"></span>
            </div>
          </div>
          <div class="feature-list repair">
            <span class="warning one"></span>
            <span class="warning two"></span>
            <span class="warning three"></span>
            <span class="warning four"></span>
            <span class="repair-icon"><em></em></span>
            <span class="repair-green one"><em class="repair-fork"></em></span>
            <span class="repair-green two"><em class="repair-fork"></em></span>
            <span class="repair-green three"><em class="repair-fork"></em></span>
            <span class="repair-green four"><em class="repair-fork"></em></span>
          </div>
          <div class="feature-list down-animation">
            <div class="download-wrap">
              <span class="down-btn"></span>
              <span class="down-bar"><em></em></span>
              <strong class="percent"><em>0</em>%</strong>
            </div>
          </div>
          <span class="feature-prev">></span>
          <span class="feature-next"><</span>
        </div>
      </div>
    </div>
  </div>
  <!-- feature end -->

  <!-- intro start -->
  <div class="intro">
    <div class="arrow-down"></div>
    <h2>
      Non perdere l’occasione di avere in regalo anche due programmi IObit PRO<br> per un PC più pulito e per salvaguardare i tuoi file importanti
    </h2>
    <div class="wrapper">
      <div class="intro-wrap">
        <div class="clearfix">
          <div class="intro-list fl">
            <h3>Pulizia completa di tutti i programmi disinstallati </h3>
            <p>
              Con la versione PRO puoi pianificare aggiornamenti automatici e silenziosi che verranno eseguiti in background senza disturbarti mentre lavori.
            </p>
            <p>
              Rimuove completamente gli avanzi di programmi già<br> disinstallati da altre utilità migliorando le prestazioni del tuo software.
            </p>
          </div>
          <div class="intro-screen fr">
            <img class="top" src="<?php echo getStaticUrl('images/iu-screen02.png')?>" alt=""/>
            <img class="bottom" src="<?php echo getStaticUrl('images/iu-screen01.png')?>" alt=""/>
          </div>
        </div>
        <div class="clearfix">
          <div class="intro-screen two fl">
            <img class="top" src="<?php echo getStaticUrl('images/pf-screen01.png')?>" alt=""/>
            <img class="bottom" src="<?php echo getStaticUrl('images/pf-screen02.png')?>" alt=""/>
          </div>
          <div class="intro-list two fr">
            <h3>Massima protezione della tua privacy</h3>
            <p>
              Protegge i tuoi dati e le tue cartelle importanti in modo semplice ed efficace grazie all’uso di una password.
            </p>
            <p>
              Mette al riparo il tuo PC da attacchi virus, spyware, ransomware e fa sì che i tuoi file non vengano criptati.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- intro end -->

  <!-- gifts start -->
  <div class="gifts">
    <div class="gift-box">
      <img class="fl" src="<?php echo getStaticUrl('images/gift-mid-box.png')?>" alt=""/>
      <div class="gift-price fl">
        <h2>Un’offerta solo per te !</h2>
        <h4>Driver Booster PRO + 2 REGALI PRO</h4>
        <h3>A soli 25,99€</h3>
      </div>
      <a class="buybtn fr"
         href="https://www.iobit.com/buy.php?product=it-db83pciupf2599&ref=it_db83pciupf2599purchase2010<?php echo $refStr;?>&refs=it_purchase_db"
         onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase3pc2010-it');">
        APPROFITTANE SUBITO  
      </a>
    </div>
  </div>
  <!-- gifts end -->

  <!-- review start -->
  <div class="review wrapper">
    <h2>Driver Booster PRO ha già aggiornato i driver di 10 milioni di utenti</h2>
    <div class="reviewbox clearfix">
      <ul class="review-tab fl">
        <li class="one"><img src="<?php echo getStaticUrl('images/fabio-tursi.png')?>" alt="Fabio Tursi"></li>
        <li class="two"><img src="<?php echo getStaticUrl('images/adam-backlund.png')?>" alt="Adam Backlund"></li>
        <li class="three"><img src="<?php echo getStaticUrl('images/olorin89.png')?>" alt="Olorin 89"></li>
        <li class="four"><img src="<?php echo getStaticUrl('images/chip.png')?>" alt="Chip"></li>
      </ul>
      <div class="details fr">
        <div class="detail-list on">
          <h3>Cosa dicono di noi</h3>
          <p>
            "Driver Booster Pro è un'applicazione eccellente. Se avete molte applicazioni e dispositivi sul computer ma non avete tempo per aggiornarli manualmente come me, vi consiglio vivamente Driver Booster, vi aiuta ad aggiornare i driver in modo molto veloce e facile." – Tradotto da inglese
          </p>
          <h4>CHIP</h4>
        </div>
        <div class="detail-list">
          <h3>Cosa dicono di noi</h3>
          <p>
            “Finalmente, con IObit Driver Booster Pro ho trovato il programma perfetto per mantenere pulito e aggiornato il mio sistema.”
          </p>
          <h4>Fabio Tursi </h4>
        </div>
        <div class="detail-list">
          <h3>Cosa dicono di noi</h3>
          <p>
            "Driver Booster Pro è un'applicazione eccellente. Se avete molte applicazioni e dispositivi sul computer ma non avete tempo per aggiornarli manualmente come me, vi consiglio vivamente Driver Booster, vi aiuta ad aggiornare i driver in modo molto veloce e facile." – Tradotto da inglese
          </p>
          <h4>Adam Backlund</h4>
        </div>
        <div class="detail-list">
          <h3>Cosa dicono di noi</h3>
          <p>"Driver Booster è semplicemente il tool di aggiornamento driver che semplifica la vita a tutti."</p>
          <h4>Olorin 89</h4>
        </div>
      </div>
      <a class="next" href="javascript: nextFun();"></a>
      <a class="prev" href="javascript: prevFun();"></a>
    </div>
  </div>
  <!-- review end -->

  <!-- awards start -->
  <div class="awards">
    <div class="wrapper">
      <h2>Raccomandato anche da</h2>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
    </div>
  </div>
  <!-- awards end -->

  <!-- comparison start -->
  <div class="comparison">
    <div class="wrapper">
      <h2>Scopri i vantaggi unici di IObit Driver Booster PRO</h2>
      <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <thead>
          <th class="text" colspan="2">Funzionalità principali</th>
          <th class="space small"></th>
          <th class="pro"><h3>Driver Booster<br> PRO</h3></th>
          <th class="space"></th>
          <th class="free"><h3>Driver Booster<br> Free</h3></th>
        </thead>
        <tbody>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icons01.png')?>" alt=""/></td>
            <td class="text">Scarica e aggiorna i driver obsoleti con un solo clic</td>
            <td class="space small"></td>
            <td class="pro"><i class="all-icons"></i></td>
            <td class="space"></td>
            <td class="free"><i class="all-icons gray"></i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icons11.png')?>" alt=""/></td>
            <td class="text">
              <span>Scegli tra priorità per driver più stabili per una maggiore sicurezza o driver più recenti per una migliore esperienza di gioco</span> <em class="nuovo">Nuovo</em>
            </td>
            <td class="space small"></td>
            <td class="pro"><i class="all-icons" style="vertical-align: middle; margin-left: 80px;"></i><b>4.500.000+<br> driver</b></td>
            <td class="space"></td>
            <td class="free"><i class="all-icons gray" style="vertical-align: middle;margin-left: 80px;"></i><b>3.500.000+<br> driver</b></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt=""/></td>
            <td class="text">Sblocca la velocità massima di aggiornamento dei driver <em>Migliorato</em></td>
            <td class="space small"></td>
            <td class="pro"><i class="all-icons"></i></td>
            <td class="space"></td>
            <td class="free"><i class="all-icons line"></i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt=""/></td>
            <td class="text">
              <span>Database del 200% più grande per aggiornare molti più driver<br> rari e obsoleti</span>
              <em>Migliorato</em>
            </td>
            <td class="space small"></td>
            <td class="pro"><i class="all-icons"></i></td>
            <td class="space"></td>
            <td class="free"><i class="all-icons line"></i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icons04.png')?>" alt=""/></td>
            <td class="text">Riduce i blocchi del sistema, migliorandone le prestazioni</td>
            <td class="space small"></td>
            <td class="pro"><i class="all-icons"></i></td>
            <td class="space"></td>
            <td class="free"><i class="all-icons line"></i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icons05.png')?>" alt=""/></td>
            <td class="text">
              <span>Download, aggiornamento e installazione automatica dei driver durante i periodi di inattività del sistema</span>
              <!-- <em class="nuovo">Nuovo</em> -->
            </td>
            <td class="space small"></td>
            <td class="pro"><i class="all-icons"></i></td>
            <td class="space"></td>
            <td class="free"><i class="all-icons line"></i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icons06.png')?>" alt=""/></td>
            <td class="text">Backup automatico di tutti i driver per il ripristino sicuro <em>Migliorato</em></td>
            <td class="space small"></td>
            <td class="pro"><i class="all-icons"></i></td>
            <td class="space"></td>
            <td class="free"><i class="all-icons line"></i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icons07.png')?>" alt=""/></td>
            <td class="text">Aggiornamento prioritario delle periferiche per giocare <em>Migliorato</em></td>
            <td class="space small"></td>
            <td class="pro"><i class="all-icons"></i></td>
            <td class="space"></td>
            <td class="free"><i class="all-icons line"></i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icons08.png')?>" alt=""/></td>
            <td class="text">Rileva e ripara gli errori dei driver in modo efficace</td>
            <td class="space small"></td>
            <td class="pro"><i class="all-icons"></i></td>
            <td class="space"></td>
            <td class="free"><i class="all-icons line"></i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icons09.png')?>" alt=""/></td>
            <td class="text">Aggiornamento automatico alla versione più recente</td>
            <td class="space small"></td>
            <td class="pro"><i class="all-icons"></i></td>
            <td class="space"></td>
            <td class="free"><i class="all-icons line"></i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icons10.png')?>" alt=""/></td>
            <td class="text">Supporto tecnico 24/7 gratuito su richiesta</td>
            <td class="space small"></td>
            <td class="pro last"><i class="all-icons"></i></td>
            <td class="space"></td>
            <td class="free last"><i class="all-icons line"></i></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <!-- comparison end -->

  <!-- footbuy start -->
  <div class="footbuy">
    <div class="wrapper clearfix">
      <h2>Migliora la tua esperienza di gioco e la salute del tuo PC ! </h2>
      <div class="imglist fl">
        <img class="imgbox" src="<?php echo getStaticUrl('images/db-box.png')?>" alt="" />
        <img class="small on" src="<?php echo getStaticUrl('images/gift-bot-box.png')?>" alt="" />
        <span class="db-discount">-82%</span>
      </div>
      <ul class="changelist fl">
        <li class="one on" data-num="1"><i></i> <b>Driver Booster PRO + 2 REGALI PRO</b></li>
        <li class="two" data-num="0"><i></i> <b>Driver Booster PRO</b></li>
      </ul>
      <div class="price fr">
        <p><strong><big>25</big>,99€</strong> <del>144,79€</del></p>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=it-db83pciupf2599&ref=it_db83pciupf2599purchase2010<?php echo $refStr;?>&refs=it_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase3pc2010-it');">
          Acquista ora  
        </a>
      </div>
    </div>
  </div>
  <!-- footbuy end -->

  <!-- footer start -->
  <div class="footer">
    <dl class="wrapper">
      <dt>Note:</dt>
      <dd>* Tali promozioni sono soggette a modifiche senza preavviso, periodiche e a nostra esclusiva discrezione.</dd>
      <dd>
        * Se non sei soddisfatto, annulla entro 60 giorni senza alcun addebito, l’importo ti sarà rimborsato automaticamente sulla tua carta di credito o account PayPal.
      </dd>
      <dd>* I dati potrebbero variare in base al sistema o computer.</dd>
    </dl>
    <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Tutti i diritti riservati</p>
  </div>
  <!-- footer end -->

  <script>
    refStr = "<?php echo $refStr;?><?php echo $popStr;?>";
    _imgSrc = "<?php echo getStaticUrl('images/db-gray-box.png')?>";
    _imgSrcMid = "<?php echo getStaticUrl('images/gift-mid-gray-box.png')?>";
  </script>
  <script src="<?php echo getStaticUrl('script/jquery.min.js')?>"></script>
  <script src="<?php echo $pRootUrl;?>tpl/js/TweenMax.min.js"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/jquery.tzineClock.js')?>"></script>
  <script>
    $(function() {
        $('#countdown').tzineClock({
            _time: [getTime()],
        });
    });
  </script>
</body>
</html>