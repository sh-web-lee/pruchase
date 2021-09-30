<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';

$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
if(in_array($_GET['pop'],array('x_imf','xi_imf','xb_imf'))){
  $refStr.='-'.$_GET['pop'];
}
$refStr.=empty($_GET['st'])?'':('-'.$_GET['st']);
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);
?>
<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Offerta Speciale, sconti fino all'80% su IObit Malware Fighter PRO – IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>
</head>
<body>
<!-- banner -->
<div class="banner">
  <div class="wrapper">
    <a class="logo" href="https://www.iobit.com/it/index.php" target="_blank">IObit</a>
    <h1>PROMOZIONE DELLA SETTIMANA</h1>
    <h2>Paghi solo 0,05€ al giorno e hai anche un regalo gratis!</h2>
    <div class="clearfix">
      <div class="offer small fl">
        <div class="imgbox">
          <img src="<?php echo getStaticUrl('images/imf-box.png')?>" alt=""/>
        </div>
        <b class="discount">-<big>50</big>%</b>
        <p class="name">1 anno / 1 PC</p>
        <div class="price">
          <p><strong><big>17</big>,99€</strong> <del>39,95€</del></p>
          <a class="buybtn gray" 
             href="http://www.iobit.com/buy.php?product=it-imf81pc1799&ref=it_imf81pc1799purchase2007<?php echo $refStr;?>&refs=it_purchase_imf"
             onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1PC2007-it');">
            Acquista ora   
            <i class="all-icons cart"></i>
          </a>
          <p>Licenza valida per versioni future</p>
        </div>
      </div>
      <div class="offer large fr">
        <div class="imgbox">
          <img src="<?php echo getStaticUrl('images/imf-box.png')?>" alt=""/>
          <img class="gift" src="<?php echo getStaticUrl('images/gift-box.png')?>" alt=""/>          
          <em class="img-price"></em><em class="gift-price"></em>
        </div>
        <b class="discount"><strong>-<big>80</big>%</strong> <span>Risparmia<br> 80€</span></b>
        <p class="name">1 anno / 3 PC + REGALO PRO</p>
        <div class="price">
          <span class="giorno">0,05€ al giorno</span>
          <p><strong><big>19</big>,99€</strong> <del>99,90€</del></p>
          <a class="buybtn" 
             href="http://www.iobit.com/buy.php?product=it-imf83pcpf1999&ref=it_imf83pcpf1999purchase2007<?php echo $refStr;?>&refs=it_purchase_imf"
             onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase3pc2007-it');">
            Acquista ora   
            <i class="all-icons cart"></i>
          </a>
          <p>Licenza valida per versioni future</p>
        </div>
        <p class="regalo"><b>REGALO:</b> Protezione completa per tutti i tuoi file importanti</p>
        <div class="countdown"><i class="all-icons"></i><span>OFFERTA LAMPO: </span> <b>00</b>M : <b>00</b>S :<b>00</b>MS*</div>
        <!-- <div class="mask"><span class="sold-word">SCADUTO</span></div> -->
      </div>
    </div>
    <img class="payments" src="<?php echo getStaticUrl('images/payments.png')?>" alt="">
    <div class="service clearfix">
      <dl>
        <dd>Pagamento sicuro</dd>
        <dt><img src="<?php echo getStaticUrl('images/godaddy.png')?>" alt=""></dt>
      </dl>
      <dl>
        <dd>Garanzia di rimborso</dd>
        <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dt>
      </dl>
      <dl>
        <dd>Servizio clienti 24/7</dd>
        <dt><img src="<?php echo getStaticUrl('images/service.png')?>" alt=""></dt>
      </dl>
    </div>
  </div>
</div>
<!-- end banner -->

<!-- feature -->
<div class="feature wrapper clearfix">
  <!-- title -->
  <h2>Perché scelgo IObit Malware Fighter PRO?</h2>
  <h3>Solo PRO difende in modo completo il tuo PC contro 209 milioni di minacce</h3>
  <!-- left-message -->
  <div class="left-message fl">
    <!-- screenshots -->
    <div class="screenshots">
      <!-- screen box -->
      <ul class="screens">
        <li class="active"><img src="<?php echo getStaticUrl('images/screenshots01.png')?>" alt=""></li>
        <li><img src="<?php echo getStaticUrl('images/screenshots02.png')?>" alt=""></li>
        <li><img src="<?php echo getStaticUrl('images/screenshots03.png')?>" alt=""></li>
        <li><img src="<?php echo getStaticUrl('images/screenshots04.png')?>" alt=""></li>
      </ul>
      <!-- zoom box -->
      <ul class="zooms">
        <li class="one active"><img src="<?php echo getStaticUrl('images/zoom01.png')?>" alt=""></li>
        <li class="two"><img src="<?php echo getStaticUrl('images/zoom02.png')?>" alt=""></li>
        <li class="three"><img src="<?php echo getStaticUrl('images/zoom03.png')?>" alt=""></li>
        <li class="four"><img src="<?php echo getStaticUrl('images/zoom04.png')?>" alt=""></li>
      </ul>
      <!-- next btn -->
      <a class="nextbtn" href="javascript:nextGo();"><img src="<?php echo getStaticUrl('images/arrow.png')?>" alt=""></a>
    </div>
  </div>
  <!-- right-message -->
  <div class="right-message fr">
    <dl class="active">
      <dt>Motore Bitdefender</dt>
      <dd>Impedisce a oltre 209 milioni di minacce di infettare e danneggiare il tuo computer.</dd>
    </dl>
    <dl>
      <dt>Protezione dati sensibili</dt>
      <dd>Usa password per proteggere i tuoi dati sensibili in modo che nessuno possa accedervi senza la tua autorizzazione.</dd>
    </dl>
    <dl>
      <dt>Motore Anti-Ransomware</dt>
      <dd>Blocca i ransomware che tentano di entrare nel tuo computer o crittografare i tuoi file importanti.</dd>
    </dl>
    <dl>
      <dt>Navigazione Internet più sicura</dt>
      <dd>Elimina automaticamente cookie e tracce pericolose quando chiudi il browser impedendo agli hacker di cercare ciò che leggi, visualizzi o acquisti online.</dd>
    </dl>
  </div>
</div>
<!-- end feature -->

<!-- gifts -->
<div class="gifts">
  <div class="wrapper wrapper">
    <!-- title -->
    <h2>Approfitta del pacchetto completo con un regalo <br> imperdibile per proteggere in tempo reale il tuo computer </h2>
    <!-- dl -->
    <dl class="clearfix fr">
      <!-- box -->
      <dt class="fl"><img src="<?php echo getStaticUrl('images/gifts-pf.png')?>" alt="Protected Folder"></dt>
      <dd class="fl">
        <ul>
          <li>Potrai proteggere più efficacemente i tuoi dati, cartelle e file importanti con l’uso di una password.</li>
          <li class="last">Non dovrai più preoccuparti di avere file intaccati da virus, spyware e ransomware.</li>
        </ul>
        <!-- buybtn -->
        <a class="buybtn between"
           href="http://www.iobit.com/buy.php?product=it-imf83pcpf1999&ref=it_imf83pcpf1999purchase2007<?php echo $refStr;?>&refs=it_purchase_imf"
           onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase3pc2007-it');">
          Approfittane subito
        </a>
      </dd>
    </dl>
  </div>
</div>
<!-- end gifts -->

<!-- review -->
<div class="review wrapper">
  <!-- title -->
  <h2>Migliaia di utenti in tutto il mondo hanno scelto <span> IObit Malware Fighter PRO</span></h2>
  <!-- content -->
  <div class="content">
    <!-- ul -->
    <ul>
      <li class="one"><img src="<?php echo getStaticUrl('images/navigaweb.png')?>" alt="Navigaweb"></li>
      <li class="two"><img src="<?php echo getStaticUrl('images/software-informer.png')?>" alt="Software Informer"></li>
      <li class="three"><img src="<?php echo getStaticUrl('images/adam-cullen.png')?>" alt="Adam Cullen"></li>
      <li class="four"><img src="<?php echo getStaticUrl('images/filipe.png')?>" alt="Filipe"></li>
    </ul>
    <!-- details -->
    <div class="details">
      <div>
        <h4>Navigaweb</h4>
        <p>"Se desideriamo una protezione completa del nostro computer, possiamo acquistare la versione PRO di IObit Malware Fighter, in grado di sbloccare il motore di scansione in tempo reale di Bitdefender (in grado di rimpiazzare quindi l'antivirus utilizzato finora sul PC), il modulo anti-ransomware e le altre impostazioni di sicurezza viste nella guida."</p>
      </div>
      <div class="active">
        <h4>Software.Informer</h4>
        <p>
          "IObit Malware Fighter PRO è in grado di rilevare vari tipi di spyware, ransomware, adware, Trojan, worm, keylogger e bot. Il programma utilizza due motori AV - il proprio e BitDefender – ed è efficace contro i malware impossibili da rilevare con altri strumenti. Un altro vantaggio è che funziona contemporaneamente con il programma standard AV. IObit Malware Fighter PRO è in grado di rilevare vari tipi di spyware, ransomware, adware, Trojans, worms, keyloggers e bots."
        </p>
      </div>
      <div>
        <h4>Adam Cullen</h4>
        <p>
          "IObit Malware Fighter è uno strumento grande, è in grado non solo di scansionare i file e le chiavette USB, proteggerti anche contro le minacce online e offline. Con i prodotti di IObit, ho ricevuto i grandi risultati e mi hanno aiutato tanto per proteggere il mio computer. Raccomando IObit e tutti i suoi prodotti a ciascuno che stia cercando una protezione e ottimizzazione del computer per rendere la tua vita più facile e semplice."
        </p>
      </div>
      <div>
        <h4>Filipe</h4>
        <p>
          "IObit Malware Fighter è il migliore programma per rimuovere i malware. Sono un tecnico e lavoro in Centro di Supporto, IMF è lo strumento ottimale per combattere contro malware, tutti i Malware saranno terminati. IMF è un software intuitivo con funzionalità avanzate e un'interfaccia grafica molto bella. Uno strumento moderno e vale usare tutti i giorni."
        </p>
      </div>
    </div>
    <!-- btn -->
    <a class="next" href="javascript: nextFun();"></a>
    <a class="prev" href="javascript: prevFun();"></a>
  </div>
</div>
<!-- end review -->

<!-- awards -->
<div class="awards wrapper">
  <!-- title -->
  <h2>Raccomandato anche da</h2>
  <!-- img -->
  <img src="<?php echo getStaticUrl('images/awards.png')?>" alt="">
</div>
<!-- end awards -->

<!-- comparison -->
<div class="comparison">
  <div class="wrapper">
    <!-- title -->
    <h2>Scopri cosa può fare IObit Malware Figher PRO per te</h2>
    <!-- table -->
    <div class="table clearfix">
      <!-- text -->
      <ul class="text">
        <li class="head">Funzioni principali</li>
        <li>
          <span><img src="<?php echo getStaticUrl('images/icons01.png')?>" alt=""></span>
          Anti-malware con ultimo database malware di IObit
          <i class="all-icons">MIGLIORATO</i>
        </li>
        <li>
          <span><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt=""></span>
          Rileva oltre 209.000.000 minacce con motori Bitdefender e IObit
          <i class="all-icons">MIGLIORATO</i>
        </li>
        <li>
          <span><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt=""></span>
          Protezione completa in tempo reale per la massima sicurezza del PC
          <i class="all-icons">MIGLIORATO</i>
        </li>
        <li>
          <span><img src="<?php echo getStaticUrl('images/icons04.png')?>" alt=""></span>
          Previene gli attacchi ransomware come WannaCry, NotPetya durante il processo di avvio
        </li>
        <li>
          <span><img src="<?php echo getStaticUrl('images/icons05.png')?>" alt=""></span>
          Protegge la tua webcam dagli accessi non autorizzati
        </li>
        <li>
          <span><img src="<?php echo getStaticUrl('images/icons06.png')?>" alt=""></span>
          Previene le infezioni da virus tramite unità USB
        </li>
        <li>
          <span><img src="<?php echo getStaticUrl('images/icons07.png')?>" alt=""></span>
          Rileva i processi dannosi in esecuzione nella RAM
        </li>
        <li>
          <span><img src="<?php echo getStaticUrl('images/icons08.png')?>" alt=""></span>
          Arresta i ransomware che tentano di crittografare i tuoi file importanti
        </li>
        <li>
          <span><img src="<?php echo getStaticUrl('images/icons09.png')?>" alt=""></span>
          Protezione automatica della privacy online con anti monitoraggio per il browser
        </li>
        <li>
          <span><img src="<?php echo getStaticUrl('images/icons10.png')?>" alt=""></span>
          Aggiornamento automatico alla versione più recente
        </li>
        <li>
          <span><img src="<?php echo getStaticUrl('images/icons11.png')?>" alt=""></span>
          Supporto tecnico 24/7 gratuito su richiesta
        </li>
      </ul>
      <!-- free -->
      <ul class="free">
        <li class="head">IObit Malware Fighter <br> <b>gratuito</b></li>
        <li><i class="all-icons">√</i></li>
        <li><i class="all-icons red">×</i></li>
        <li><i class="all-icons red">×</i></li>
        <li><i class="all-icons red">×</i></li>
        <li><i class="all-icons red">×</i></li>
        <li><i class="all-icons red">×</i></li>
        <li><i class="all-icons red">×</i></li>
        <li><i class="all-icons red">×</i></li>
        <li><i class="all-icons red">×</i></li>
        <li><i class="all-icons red">×</i></li>
        <li><i class="all-icons red">×</i></li>
      </ul>
      <!-- pro -->
      <ul class="pro">
        <li class="head">IObit Malware Fighter <br> <b>PRO</b></li>
        <li><i class="all-icons">√</i></li>
        <li><i class="all-icons">√</i></li>
        <li><i class="all-icons">√</i></li>
        <li><i class="all-icons">√</i></li>
        <li><i class="all-icons">√</i></li>
        <li><i class="all-icons">√</i></li>
        <li><i class="all-icons">√</i></li>
        <li><i class="all-icons">√</i></li>
        <li><i class="all-icons">√</i></li>
        <li><i class="all-icons">√</i></li>
        <li class="last"><i class="all-icons">√</i></li>
      </ul>
    </div>
  </div>
</div>
<!-- end comparison -->

<!-- bottom-buy -->
<div class="bottom-buy">
  <div class="wrapper">
    <h2>Blocca ancora più minacce online e mantieni al sicuro i tuoi dati !</h2>
    <div class="clearfix">
      <div class="imgbox fl">
        <img class="imf" src="<?php echo getStaticUrl('images/imf-box.png')?>" alt="IObit Malware Fighter PRO">
        <img class="gift" src="<?php echo getStaticUrl('images/gift-box.png')?>" alt="Protected Folder">
        <span class="off pf active">-80%</span>
      </div>
      <ul class="fl">
        <li class="active pc3" data-num="1"><i class="all-icons">√</i> 1 anno / 3 PC + REGALO PRO</li>
        <li class="pc1" data-num="0"><i class="all-icons">√</i> 1 Anno / 1 PC </li>
      </ul>
      <div class="price fr">
        <span class="giorno">0,05€ al giorno</span>
        <p><strong><big>19</big>,99€</strong> <del>99,90€</del></p>
        <a class="buybtn" 
           href="http://www.iobit.com/buy.php?product=it-imf83pcpf1999&ref=it_imf83pcpf1999purchase2007<?php echo $refStr;?>&refs=it_purchase_imf"
           onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase3pc2007-it');">
          Acquista ora   
          <i class="all-icons cart"></i>
        </a>
      </div>
    </div>
  </div>
</div>
<!-- end bottom-buy -->

<!-- footer -->
<div class="footer">
  <div class="wrapper">
    <dl>
      <dt>Note:</dt>
      <dd>*Tali promozioni sono soggette a modifiche senza preavviso, periodiche e a nostra esclusiva discrezione.</dd>
    </dl>
    <p class="copyright">© 2005 - <?php echo date(Y)?> IObit. Tutti i diritti riservati </p>
  </div>
</div>
<!-- end footer -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>