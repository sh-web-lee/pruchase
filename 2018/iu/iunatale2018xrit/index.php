<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';

if(!empty($_GET['action'])&&($_GET['action']=='getSales')){
  $date=$_GET['d'];
  $cName='itiu'.$date;
  $cookie=$_COOKIE[$cName];
  if($cookie!==null){
    $packsNum=$_COOKIE[$cName];
    if($packsNum>=0){
      $packsNum--;
      setcookie($cName,$packsNum);
    }else{
      $packsNum=0;
    }
  }else{
    $packsNum=50;
    setcookie($cName,$packsNum);
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

$viewNum=rand(60,88);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}

$refStr='';
if(in_array($_GET['pop'],array('xr_iu'))){
  $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Grande Offerta! Sconti fino al 85% su IObit Uninstaller PRO – Offerta natale 2018 di IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700'>
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
<div class="main">

  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <!-- logo -->
      <a class="logo" href="https://www.iobit.com/it/index.php" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
      </a>
      <!-- title -->
      <h1>GRANDE OFFERTA DI NATALE!</h1>
      <p class="best"> Sconto più basso in assoluto – SOLO una volta all’anno!</p>
      <!-- palen -->
      <div class="palen clearfix">
        <div class="left fl">
          <img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="IObit Uninstaller 8 PRO"/>
          <div class="hint"></div>
        </div>
        <div class="right fr">
          <h2>IObit Uninstaller 8 PRO</h2>
          <div class="price">
            <div class="count">
              <p class="watching">
                <span class="surplusGift viewNum"><?php echo $viewNum;?></span>  stanno guardando, <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> pezzi rimasti ora!
              </p>
              <div class="progressbar">
                <span></span>
              </div>
              <p id="bandown" class="countdown">Affrettati! Scade tra  <b>05</b>M: <b>00</b>S: <b class="last">000</b>Ms</p>
            </div>
            <p><strong>14<small>,</small></strong> <span>99 <del> €99,93</del></span></p>
            <!-- buybtn -->
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=it-iu83pcamcpf1499&ref=it_iu83pcpfamc1499purchase1811xr<?php echo $refStr;?>&refs=it_purchase_iu"
               onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase1811xr-it')">
               Approfittane Ora
            </a>
            <p class="year">Abbonamento 1 Anno / 3 PC</p>
          </div>
        </div>
      </div>
    </div>

    <!-- snow -->
    <span class="snow list01"></span>
    <span class="snow snow-clarity  list02"></span>
    <span class="snow snow-smail list03"></span>
    <span class="round  list04"></span>
    <span class="round round-smail list05"></span>
    <span class="round round-clarity list06"></span>
    <span class="round round-large list07"></span>
    <span class="snow snow-clarity  list15"></span>
    <span class="snow snow-smail  list16"></span>
    <span class="snow snow-clarity  list17"></span>
    <span class="snow snow-smail  list18"></span>
    <span class="round round-clarity list23"></span>
    <span class="round round-clarity list24"></span>

    <span class="round round-clarity list08"></span>
    <span class="round round-smail list09"></span>
    <span class="round round-large  list10"></span>
    <span class="round list11"></span>
    <span class="snow snow-clarity list12"></span>
    <span class="snow snow-smail list13"></span>
    <span class="snow list14"></span>
    <span class="snow snow-clarity  list19"></span>
    <span class="snow snow-smail  list20"></span>
    <span class="snow snow-clarity  list21"></span>
    <span class="snow snow-smail  list22"></span>
    <span class="round round-clarity list25"></span>
    <span class="round round-clarity list26"></span>
  </div>
  <!-- banner end -->

  <!-- feature start -->
  <div class="feature">
    <div class="wrapper">
      <h2>Mantieni Programmi Ostinati & Plug-in Maligni Lontani dal tuo PC</h2>
      <p class="over">
        Scelto da oltre 250,000,000+ utenti mondiali, IObit Uninstaller PRO libera il tuo computer da elementi inutili ed assicura una navigazione online protetta
      </p>
      <img class="screen" src="<?php echo getStaticUrl('images/asc-screen.png')?>" alt="IObit Uninstaller 8 PRO"/>
      <div class="clearfix">
        <div class="fl">
          <!-- Rengöring av Bundleware -->
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/feature-01.png')?>" alt=""/></dt>
            <dd>
              <h3>Pulizia Bundleware</h3>
              <p>
                Sbarazzati dei bundleware fastidiosi installati senza preavviso per liberare spazio. 
              </p>
              <p><b>*PRO Esclusivo </b></p>
            </dd>
          </dl>
          <!-- Borttagning av Felaktiga Plugins  -->
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/feature-02.png')?>" alt=""/></dt>
            <dd>
              <h3>Rimozione dei Plug-in Maligni</h3>
              <p>
                Rimuove i plug-in maligni o pubblicitari per garantire una navigazione online sicura.
              </p>
              <p><b>*PRO Esclusivo</b></p>
            </dd>
          </dl>
        </div>
        <div class="fr">
          <!-- Inga Envisa Program -->
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/feature-03.png')?>" alt=""/></dt>
            <dd>
              <h3>Addio Programmi Ostinati</h3>
              <p>
                I programmi che non possono essere rimossi da altre utilità non potranno essere accatastati. 
              </p>
              <p><b>*PRO Esclusivo </b></p>
            </dd>
          </dl>
          <!-- Rengör Rester Automatiskt -->
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/feature-04.png')?>" alt=""/></dt>
            <dd>
              <h3>Pulizia Automatica dei Residui </h3>
              <p>
                Rileva automaticamente & rimuove i residui dei programmi disinstallati. 
              </p>
              <p><b>*PRO Esclusivo</b></p>
            </dd>
          </dl>
        </div>
      </div>
    </div>
  </div>
  <!-- feature end -->
  <!-- gifts -->
  <div class="gifts wrapper">
      <h2>Regali Gratis Esclusivi per il Natale 2018!</h2>
      <div class="gift-list clearfix">
        <!-- pf -->
        <dl class="pf">
          <dt>
            <span><img src="<?php echo getStaticUrl('images/pf-box.png')?>" alt=""/></span>
            <strong>Protected Folder </strong>
          </dt>
          <dd><del>€39,95</del>  <b>€<span>0</span></b></dd>
          <dd><p>Il programma più affidabile per proteggere <br> i tuoi file dagli attacchi maligni e assicurare <br> la tua privacy al massimo!</p></dd>
        </dl>
        <!-- amc -->
        <dl class="amc">
          <dt>
            <span><img src="<?php echo getStaticUrl('images/amc-box.png')?>" alt=""/></span>
            <strong>Advanced MobileCare PRO</strong>
          </dt>
          <dd><del>€19,99</del>  <b>€<span>0</span></b></dd>
          <dd><p>Accelera e protegge il tuo dispositivo <br> mobile in tempo reale e non dovrai più <br> preoccuparti delle frodi.
            </p></dd>
        </dl>
      </div>
  </div>
  <!-- end gifts -->
  <!-- centbuy start -->
  <div class="centbuy">
    <h2>Ottieni Subito la Versione PRO per un PC più Pulito & Una Navigazione più Sicura </h2>
    <div class="wrapper clearfix">
      <div class="fl">
        <img src="<?php echo getStaticUrl('images/iu-small-box.png')?>" alt="IObit Uninstaller 8 PRO"/>
      </div>
      <div class="price fr">
        <div class="count">
          <p class="watching">
            <span class="surplusGift viewNum"><?php echo $viewNum;?></span>  stanno guardando, <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em>  posti rimasti ora!
          </p>
        </div>
        <p><strong>14<small>,</small></strong> <span>99 <del> €99,93</del></span></p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=it-iu83pcamcpf1499&ref=it_iu83pcpfamc1499purchase1811xr<?php echo $refStr;?>&refs=it_purchase_iu"
           onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase1811xr-it')">
           Approfittane Ora!
        </a>
        <p class="year">Abbonamento 1 Anno / 3 PC </p>
      </div>
    </div>
  </div>
  <!-- centbuy end -->

  <!-- comparison start -->
  <div class="comparison" id="compare">
    <div class="wrapper">
      <h2>Cosa Otterrai se Attivi Subito PRO:</h2>
      <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <thead>
        <tr>
          <th class="itema">IObit Uninstaller <br> Free</th>
          <th class="itemb"><img src="<?php echo getStaticUrl('images/vs.png')?>"></th>
          <th class="itemc"><span>IObit Uninstaller <br> <b>PRO</b></span></th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td class="itema"><i class="all-icons free">√</i></td>
          <td class="itemb">Disinstalla Programmi  & Plug-in Indesiderati</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Disinstalla Bundleware  </td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Rimuove Programmi Ostinati</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Rimuove Plug-in Maligni/Pubblicitari</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Pulisce i Residui</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Aggiorna i Programmi con un Clic</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Aggiorna Automaticamente </td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema last"></td>
          <td class="itemb"></td>
          <td class="itemc last"></td>
        </tr>
        </tbody>
      </table>
    </div>
  </div>
  <!-- comparison end -->

  <!-- footbuy start -->
  <div class="footbuy">
    <div class="wrapper">
      <h3>NON FARTELA SCAPPARE!</h3>
      <h2>Ottieni uno Sconto Esclusivo dell’85% per rendere il tuo PC più Pulito, più Veloce & più Sicuro</h2>
      <div class="price">
        <p><strong>14<small>,</small></strong> <span>99 <del> €99,93</del></span></p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=it-iu83pcamcpf1499&ref=it_iu83pcpfamc1499purchase1811xr<?php echo $refStr;?>&refs=it_purchase_iu"
           onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase1811xr-it')">
           Approfittane Ora!
        </a>
        <p id="footdown" class="countdown">Affrettati! Scade tra <b>05</b>M:<b>00</b>S:<b class="last">000</b>Ms</p>
      </div>
    </div>
  </div>
  <!-- footbuy end -->

  <!-- review start -->
  <div class="review wrapper">
    <div id="dg-container" class="dg-container">
      <div class="nav">
        <span class="dg-prev"></span>
        <span class="dg-next"></span>
      </div>
      <div class="content dg-wrapper">
        <!-- 01 -->
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/makeuseof.png')?>" alt="MakeUseOf"></dt>
          <dd>
            <h2>Recensioni dei media</h2>
            <p>"Questo strumento di disinstallazione facile da usare e informativo pulisce, configura, e ottimizza il tuo PC. Gli utenti possono scaricarlo in pochissimi minuti. Questo strumento di disinstallazione può essere classificato come il miglior programma di disinstallazione e permette agli utenti di disinstallare all'ingrosso. Esso offre agli utenti di fare una "Scansione Approfondita" per andare più a fondo e trovare gli avanzi. La prestazione la stessa rende questo piccolo strumento vale la pena tenere."</p>
            <cite>MakeUseOf</cite>
          </dd>
        </dl>
        <!-- 02 -->
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/lovro-zuzic.png')?>" alt="Lovro Žužić"></dt>
          <dd>
            <h2>Recensioni degli utenti</h2>
            <p>"IObit Unisntaller migliora se stesso con ogni aggiornamento, l’ho già usato per 3 anni. Funziona molto veloce e ha un’interfaccia semplice. Alcune funzioni che uso regolarmente sono Batch Uninstaller, Scansione Approfondita, Distruggi File e Installati di Recente, il quale offre un’accesso veloce ai programmi installati di recente che non mi piacciono o non funzionano correttamente. È anche facile da controllare i tuoi elementi d’avvio per rendere più veloce l’avvio del tuo PC."</p>
            <cite>Lovro Žužić</cite>
          </dd>
        </dl>
        <!-- 03 -->
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/ada-gortler.png')?>" alt="Áda Görtler"></dt>
          <dd>
            <h2>Recensioni degli utenti</h2>
            <p>"IObit Uninstaller è uno dei migliori programmi con la sua ottima prestazione. È molto facile da usare e pulisce in modo rapido. Dalla versione 5, con più funzionalità, è compatibile non solo con Windows 10. Pulizia Veloce dei plug-in è estremamente utile, la ricerca dei file duplicate e dei programmi che non sono stati uasati è molto potente. Grazie per prendersi cura di mio computer e quelli della mia famiglia."</p>
            <cite>Áda Görtler</cite>
          </dd>
        </dl>
        <!-- 04 -->
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/sergey-erlich.png')?>" alt="Sergey Erlich"></dt>
          <dd>
            <h2>Recensioni degli utenti</h2>
            <p>"IObit Uninstaller è probabilmente la migliore applicazione per rimuovere i programmi non necessari dal computer. A differenza del programma di disinstallazione standard di Windows che rimuove tutti i residui del programma ma rallenta la prestazione del tuo PC. Ho usato Iobit Uninstaller per alcuni anni e mi aiuta sempre a mantenere il mio computer pulito e veloce. L’ho racconmandato anche ad alcuni degli miei amici e vorrei raccomandato a tutti voi! "</p>
            <cite>Sergey Erlich</cite>
          </dd>
        </dl>
        <!-- 05 -->
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/joseph-yu.png')?>" alt="Joseph Yu"></dt>
          <dd>
            <h2>Recensioni degli utenti</h2>
            <p>"IObit Uninstaller PRO è uno dei cinque prodotti di manutenzione di IObit che ho investito nel mio PC, come Chef investono in loro coltelli. Uninstaller è ottimo per trovare i residui di bit e byte nascosti nel PC che occupano lo spazio dei dischi e colpisce i registri. Se uso la versione free, si funziona. Ma la versione PRO ha rilevato altri 35 file da pulire dopo la disinstallazione normale. Tutto quello che devo fare è cliccare OK. Consiglio vivamente e ho acquistato il codice di licenza per 3 PC. Il servizio cliente è anche attento ed efficace."</p>
            <cite>Joseph Yu</cite>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- review end -->

  <!-- awards start -->
  <div class="awards wrapper">
    <h2>Riconoscimenti</h2>
    <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
  </div>
  <!-- awards end -->

  <div class="bottom">
    <div class="wrapper">
      <!-- service start -->
      <div class="service clearfix">
        <dl class="fl">
          <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
          <dd>
            <h4>Provalo senza nessun rischio con la nostra garanzia di rimborso di 60 giorni</h4>
            <p>Garantiamo la tua soddisfazione entro 60 giorni dopo aver attivato la versione PRO.</p>
          </dd>
        </dl>
        <dl class="fr clearfix">
        
          <dd>
            <h4>Accettiamo</h4>
          </dd>
          <dt><img src="<?php echo getStaticUrl('images/payments.png')?>" alt=""/></dt>
        </dl>
      </div>
      <!-- service end -->

      <!-- footer start -->
      <div class="footer">
        <dl>
          <dt>Note:</dt>
          <dd>* I dati potrebbero variare in base al sistema o computer.</dd>
          <dd>* Tali promozioni sono soggette alle modifiche senza preavviso, periodicamente alla nostra esclusiva discrezione.</dd>
        </dl>
        <p>Copyright © 2005 - <?php echo date('Y')?> IObit. Tutti i diritti riservati</p>
      </div>
      <!-- footer end -->
    </div>
  </div>

  <!-- backtotop start -->
  <div id="backtotop" class="backtotop">top</div>
  <!-- backtotop end -->

</div>

<script>
  var refStr = '<?php echo $refStr;?>';
  var imgSrc = "<?php echo getStaticUrl('images/iu-mask-box.png')?>";
  var _href = "https://www.iobit.com/buy.php?product=it-iu83pcamcpf1399&ref=it_iu83pcpfamc1399purchase1811xr<?php echo $refStr;?>&refs=it_purchase_iu&tw=-8";
  var _ga = "ga('send', 'event', 'iubuy', 'buy', 'iupurchase1811xr-1-it') ";
  var viewNum = "<?php echo $viewNum;?>";
</script>
<script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
<script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>

</body>
</html>