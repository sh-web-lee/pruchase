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
  $cName='itimf'.$date;
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
if(in_array($_GET['pop'],array('xr_imf'))){
  $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Grande Offerta! sconti fino al 85% su IObit Malware Fighter PRO – Offerta natale 2018 di IObit</title>
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
      <p class="best">Sconto più basso in assoluto – offerta unica e irripetibile!</p>
      <!-- palen -->
      <div class="palen clearfix">
        <div class="left fl">
          <img src="<?php echo getStaticUrl('images/imf-box.png')?>" alt="  IObit Malware Fighter 6 PRO"/>
          <div class="hint"></div>
        </div>
        <div class="right fr">
          <h2> IObit Malware Fighter 6 PRO</h2>
          <h3>Sicurezza informatica completa per te e i tuoi. </h3>
          <div class="price">
            <div class="count">
              <p class="watching">
                <span class="surplusGift viewNum"><?php echo $viewNum;?></span> stanno guardando, <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> pezzi rimasti ora! Affrettati!
              </p>
              <div class="progressbar">
                <span></span>
              </div>
              <p id="bandown" class="countdown">Scade tra <b>05</b>Min: <b>00</b>Sec: <b class="last">000</b>Ms</p>
            </div>
            <p><strong>19<big>,</big></strong> <span>99 <del> €149,78</del></span></p>
            <!-- buybtn -->
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=it-imf63pcpfsd1999&ref=it_imf63pcsdpf1999purchase1811xr<?php echo $refStr;?>&refs=it_purchase_imf"
               onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1811xr-it')">
              APPROFITTANE ORA
            </a>
            <p class="year">Un abbonamento annuale per 3 PC</p>
            <!-- money-back -->
            <img class="moneyback" src="<?php echo $pResUrl;?>images/moneyback.png" alt="">
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
      <h2>Ottieni la massima sicurezza informatica per evitare l'hacking dannoso  </h2>
      <p class="over">
        Oltre 5,500,000 utenti mondiali hanno scelto IObit Malware Fighter Pro come la guardia online per proteggere il PC contro virus, ransomware, spyware, Trojans, adware, fishing e altri malware frustranti. 
      </p>
      <img class="screen" src="<?php echo getStaticUrl('images/imf-screen.png')?>" alt="IObit Malware Fighter PRO"/>
      <div class="clearfix">
        <div class="fl">
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/feature-01.png')?>" alt=""/></dt>
            <dd>
              <h3>Protezione in tempo reale completa <b class="sign">Rafforzato </b></h3>
              <p>
               Protezione raddoppiata offerta dal motore antivirus Advanced Bitdefender e dal motore IObit Anti-malware con il database ampliato.
              </p>
            </dd>
          </dl>
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/feature-03.png')?>" alt=""/></dt>
            <dd>
              <h3>Guardia del Disco di Avvio<b>Nuovo </b></h3>
              <p>Protegge il PC da attacchi dannosi, specialmente dai ransomware che tendono ad attaccare durante il processo di avvio.</p>
            </dd>
          </dl>
        </div>
        <div class="fr">
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/feature-02.png')?>" alt=""/></dt>
            <dd>
              <h3>Nessun Attacco di Ransomware <b class="sign">Rafforzato</b></h3>
              <p>Il Motore Anti-ransomware analizza e blocca proattivamente ogni tipo di attacco ransomware che tende a irrompere nel tuo PC, come WannaCry, Petya/GoldenEye, ecc..</p>
            </dd>
          </dl>
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/feature-04.png')?>" alt=""/></dt>
            <dd>
              <h3>Protezione in Tempo Reale <b class="sign">Rafforzato</b></h3>
              <p>Blocca e rimuove automaticamente oltre 200 milioni di minacce in tempo reale eliminando i dati di tracciamento dannosi.</p>
            </dd>
          </dl>
        </div>
      </div>
    </div>
  </div>
  <!-- feature end -->

  <!-- gifts -->
  <div class="gifts wrapper" id="gifts">
      <h2>Regali Gratis Esclusivi per il Natale 2018!</h2>
      <div class="gift-list clearfix">
        <!-- sd -->
        <dl>
          <dt>
            <img src="<?php echo getStaticUrl('images/sd-box.png')?>" alt="">
            <strong>Smart Defrag 6 PRO</strong>
          </dt>
          <dd><del>€29,99</del>  <b>€<span>0</span></b></dd>
          <dd><p>Offre la migliore deframmentazione del <br> disco e accelera al massimo l'hard driver!</p></dd>
        </dl>
        <!-- pf -->
        <dl>
          <dt>
            <img src="<?php echo getStaticUrl('images/pf-box.png')?>" alt="">
            <strong>Protected Folder </strong>
          </dt>
          <dd><del>€39,95</del>  <b>€<span>0</span></b></dd>
          <dd><p>Il programma più affidabile per proteggere <br> i tuoi file dagli attacchi maligni e assicurare <br> la tua privacy al massimo!</p></dd>
        </dl>
      </div>
  </div>
  <!-- end gifts -->

  <!-- centbuy start -->
  <div class="centbuy">
    <h2>Scopri di più per avere la massima, più intelligente e più veloce protezione online.</h2>
    <div class="wrapper clearfix">
      <div class="fl">
        <img src="<?php echo getStaticUrl('images/imf-small-box.png')?>" alt="IObit Malware Fighter 6 PRO"/>
      </div>
      <div class="price fr">
        <div class="count">
          <p class="watching">
            <span class="surplusGift viewNum"><?php echo $viewNum;?></span> stanno guardando, <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> pezzi rimasti ora! Affrettati!
          </p>
        </div>
        <p class="padding-left108"><strong>19<big>,</big></strong> <span>99 <del>€149,78</del></span></p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=it-imf63pcpfsd1999&ref=it_imf63pcsdpf1999purchase1811xr<?php echo $refStr;?>&refs=it_purchase_imf"
           onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1811xr-it')">
          APPROFITTANE ORA
        </a>
        <p class="year">Un abbonamento annuale per 3 PC</p>
        <!-- money-back -->
        <img class="moneyback" src="<?php echo $pResUrl;?>images/moneyback.png" alt="">
      </div>
    </div>
  </div>
  <!-- centbuy end -->

  <!-- comparison start -->
  <div class="comparison" id="compare">
    <div class="wrapper">
      <h2>Cosa ricevi immediatamente dopo avere attivato la versione PRO:</h2>
      <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <thead>
        <tr>
          <th class="itema">IObit Malware Fighter  <br> Free</th>
          <th class="itemb"><img src="<?php echo getStaticUrl('images/vs.png')?>"></th>
          <th class="itemc"><span>IObit Malware Fighter  <br> <b>PRO</b></span></th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td class="itema">Basilare</td>
          <td class="itemb">Protezione contro malware & virus </td>
          <td class="itemc">Motore Anti-virus Bitdefender</td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Protezione anti-ransomware </td>
          <td class="itemc">Motore Anti-ransomware </td>
        </tr>
        <tr>
          <td class="itema">Basilare</td>
          <td class="itemb">Protezione in tempo reale </td>
          <td class="itemc">Completa</td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Protezione del disco di avvio</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Salvaguardia della tua webcam</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Protezione dei file importanti </td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Pulizia automatica delle tracce durante la navigazione online </td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Guardia del disco USB </td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Guardia della RAM  </td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
         <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Aggiornamento automatico  </td>
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
      <h3>COGLI L’ATTIMO!</h3>
      <h2>Ottieni lo sconto esclusivo dell’85% e la protezione completa per te e i tuoi.</h2>
      <div class="price">
        <p><strong>19<big>,</big></strong> <span>99 <del> €149,78</del></span></p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=it-imf63pcpfsd1999&ref=it_imf63pcsdpf1999purchase1811xr<?php echo $refStr;?>&refs=it_purchase_imf"
           onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1811xr-it')">
          APPROFITTANE ORA
        </a>
        <p id="footdown" class="countdown">Affrettati! Scade tra  <b>05</b>Min: <b>00</b>Sec: <b class="last">000</b>Ms</p>
      </div>
    </div>
  </div>
  <!-- footbuy end -->

    <!-- awards start -->
    <div class="awards wrapper">
      <h2>Riconoscimenti e Recensioni</h2>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt="" />
    </div>
    <!-- awards end -->

    <!-- review start -->
    <div class="review wrapper">
      <div class="content">
        <dl>
          <dt><h3>Molto semplice da usare e la scansione è più veloce!</h3></dt>
          <dd>
            Voglio ringraziare tutto lo staff di IObit per il loro impegno nel rilasciare sempre i programmi migliori. Questo aggiornamento è eccellente per gli utenti. La scansione è molto più veloce ed è facilissimo da usare. Chi cerca un buon programma anti-virus e anti-malware con un buon rapporto qualità-prezzo non deve fare altro che scaricare IObit Malware Fighter. Non accontentatevi, provate il migliore, IObit Malware Fighter. - Tradotto da inglese
          </dd>
        </dl>
        <dl class="active">
          <dt>
          <h3>IObit Malware Fighter PRO è in grado di rilevare vari tipi di spyware, ransomware, adware, Trojan, worm, keylogger e bot.</h3></dt>
          <dd>
            Il programma utilizza due motori AV - il proprio e BitDefender – ed è efficace contro i malware impossibili da rilevare con altri strumenti. Un altro vantaggio è che funziona contemporaneamente con il programma standard AV. IObit Malware Fighter PRO è in grado di rilevare vari tipi di spyware, ransomware, adware, Trojans, worms, keyloggers e bots. - Tradotto da inglese
          </dd>
        </dl>
        <dl>
          <dt>
          <h3>IObit Malware Fighter è decisamente il miglior sistema per proteggere un PC in mano ad un utente inesperto dall'attacco dei ransomware, così da evitare anche la perdita dei file.</h3></dt>
          <dd>Questo programma vanta un efficace sistema anti-ransomware che impedisce la criptazione dei file e il blocco delle attività del PC, così da rendere completamente innocui qualsiasi tipo di ransomware e in generale qualsiasi tipo di malware.
          </dd>
        </dl>
        <dl>
          <dt>
            <h3>IObit Malware Fighter PRO scansiona il mio PC portatile senza influenzare le prestazioni. Ho raccomandato questo ottimo prodotto ai miei amici.</h3>
          </dt>
          <dd>
            Sono molto soddisfatto con il vostro prodotto – IObit Malware Fighter. Prima di conoscerlo le interferenze maligne mi causavano moltissimi problemi, non potevo guardare un film per intero o godermi un concerto. Grazie al vostro programma ogni operazione è chiara, sicura e ben protetta. IObit Malware Fighter scansiona il mio PC portatile senza influenzare le prestazioni, per questo motivo l’ho consigliato a due dei miei amici. - Tradotto da inglese
          </dd>
        </dl>
      </div>
      <ul class="users clearfix">
        <li>
          <div class="pic"><img src="<?php echo $pResUrl; ?>images/david-cassidy.png" alt="David Cassidy">
          </div>
          <p>David Cassidy</p>
        </li>
        <li class="active">
          <div class="pic"><img src="<?php echo $pResUrl; ?>images/software-informer.png" alt="Software.Informer"></div>
          <p>Software.Informer</p>
        </li>
        <li>
          <div class="pic"><img src="<?php echo $pResUrl; ?>images/giardiniblog-com.png" alt="giardiniblog.com">
          </div>
          <p>giardiniblog.com</p>
        </li>
        <li>
          <div class="pic"><img src="<?php echo $pResUrl; ?>images/gelubatir.png" alt="GeluBatir">
          </div>
          <p>GeluBatir</p>
        </li>
      </ul>
    </div>
    <!-- review end -->
  <div class="bottom">
    <div class="wrapper">
      <!-- service start -->
      <div class="service clearfix">
        <dl class="fl">
          <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
          <dd>
            <h4>Provalo senza nessun rischio con la nostra garanzia di<br>
              rimborso di 60 giorni</h4>
            <p>Garantiamo la tua soddisfazione entro 60 giorni dopo aver<br>
              attivato la versione PRO.</p>
          </dd>
        </dl>
        <dl class="fr">
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
        <p>Copyright © 2005 - <?php echo date('Y')?> IObit.Tutti i diritti riservati</p>
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
  var imgSrc = "<?php echo getStaticUrl('images/imf-mask-box.png')?>";
  var _href = "https://www.iobit.com/buy.php?product=it-imf63pcpfsd1899&ref=it_imf63pcsdpf1899purchase1811xr<?php echo $refStr;?>&refs=it_purchase_imf&tw=-8";
  var _ga = "ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1811xr-1-it')";
  var viewNum = "<?php echo $viewNum;?>";
</script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>

</body>
</html>