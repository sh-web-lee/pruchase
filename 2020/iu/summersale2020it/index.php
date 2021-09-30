 <?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}

$refStr='';
if(preg_match('/^([0-9]*)\.([0-9]*)\./',$_GET['ver'],$matches)){
  $ver=$matches[1].'-'.$matches[2];
  $refStr.='-'.$ver;
}
$refStr.=empty($_GET['st'])?'':('-'.$_GET['st']);
if(in_array($_GET['pop'],array('x_iu','xi_iu','xb_iu','xnc_iu'))){
  $refStr.='-'.$_GET['pop'];
}
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['user'])?'':('-'.$_GET['user']);
$refStr.=empty($_GET['insday'])?'':('-'.$_GET['insday']);
$refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);
include $pRootUrl.'include/common.inc.php';
?>
<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title> Saldi Estivi, sconti fino all’85% su IObit Uninstaller PRO – IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>
  <script>
  var queryStr =<?php echo empty($_SERVER['QUERY_STRING'])?'""':('"?'.$_SERVER['QUERY_STRING']).'"';?>;
  var paramTo = MApp(2.2).url.getParameters('to');
    if ((paramTo == 'enable') || (paramTo == 'installmonitor')) {
      window.location.href = "./installmonitor.php" + queryStr;
    }
  </script>
</head>
<body>
<!-- banner -->
<div class="banner">

  <div class="wrapper">
    <div class="title">
      <h1>TRIPLI SALDI ESTIVI</h1>
      <p>Questa estate tutti i prodotti per ottimizzare il tuo PC a soli</p>
    </div>

    <div class="box">
      <img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="">
      <span class="hanging">-50<sup>%</sup>  </span>
      <p class="pc"><span>1 anno / 1 PC</span></p>
      <p class="price">
        <strong>14</strong>
        <span>
          99 €
          <del>29,99€</del>
        </span>
      </p>
      <a href="http://www.iobit.com/buy.php?product=it-iu101pc1499&ref=it_iu101pc1499purchase2008<?php echo $refStr;?>&refs=it_purchase_iu" 
         onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase1PC2008-it')" class="buybtn small">ACQUISTA ORA</a>
      <p class="last">Licenza valida per versioni future</p>
    </div>
    <div class="box gift-box">
      <div class="date">
        OFFERTA LIMITATA: &nbsp;&nbsp;<strong><b>10</b> M </strong>
        <strong><b>10</b> S  </strong>
        <strong><b>10</b> MS </strong>
      </div>
      <img src="<?php echo getStaticUrl('images/iu-gift-box.png')?>" alt="">
      <span class="hanging">-85<sup>%</sup>  </span>
      <p class="pc"><span>1 anno / 3 PC</span> + 2 REGALI PRO</p>
      <p class="price">
        <strong>15</strong>
        <span>
          99 €
          <del>99,97€</del>
        </span>
      </p>
      <a href="http://www.iobit.com/buy.php?product=it-iu103pcisusd1599&ref=it_iu103pcisusd1599purchase2008<?php echo $refStr;?>&refs=it_purchase_iu" 
         onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase3pc2008-it')" class="buybtn">ACQUISTA ORA</a>
      <p class="last">Licenza valida per versioni future</p>
      <dl>
        <dt>REGALI PRO</dt>
        <dd>Pulizia completa per un PC più pulito <br> Ottimizzazione della tua esperienza di gioco</dd>
      </dl>
    </div>
    <div class="box three-box">
      <img src="<?php echo getStaticUrl('images/three-iu-box.png')?>" alt="">
      <span class="hanging">-77<sup>%</sup>  </span>
      <p class="pc"><span>1 anno / 3 PC</span> +1 REGALO PRO</p>
      <p class="price">
        <strong>15</strong>
        <span>
          99 €
          <del>69,98€</del>
        </span>
      </p>
      <a href="http://www.iobit.com/buy.php?product=it-iu103pcsd1599&ref=it_iu103pcsd1599purchase2008<?php echo $refStr;?>&refs=it_purchase_iu"
        onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase3pc2008-it')" class="buybtn small">ACQUISTA ORA</a>
      <p class="last">Licenza valida per versioni future</p>
    </div>
    <div class="payment">
      <img src="<?php echo getStaticUrl('images/payment.png')?>" alt="" class="img-box">
      <ul>
        <li>
          <p>Pagamento sicuro</p>
          <span><img src="<?php echo getStaticUrl('images/pagamento.png')?>" alt=""></span>
        </li>
        <li>
          <p>Garanzia di rimborso</p>
          <span><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></span>
        </li>
        <li>
          <p> Servizio clienti 24/7</p>
          <span><img src="<?php echo getStaticUrl('images/servizio.png')?>" alt=""></span>
        </li>
      </ul>
    </div>
  </div>
</div>
<!-- end banner -->

<div class="feature">
   <h2>IObit Uninstaller PRO rimuove anche le tracce dei programmi più difficili da rimuovere</h2>
   <div class="wrapper">
     <div class="img-box">
       <img src="<?php echo getStaticUrl('images/list01.png')?>" alt="" class="active">
       <img src="<?php echo getStaticUrl('images/list02.png')?>" alt="">
       <img src="<?php echo getStaticUrl('images/list03.png')?>" alt="">
       <img src="<?php echo getStaticUrl('images/list04.png')?>" alt="">
     </div>
     <div class="feature-icon"></div>
     <dl class="active" data-num="0">
       <dt>Disinstallazione automatica</dt>
       <dd>Esegue automaticamente una <br> pulizia approfondita per rimuovere <br> automaticamente gli avanzi dei <br> programmi disinstallati</dd>
     </dl>
     
     <dl class="right" data-num="1">
       <dt>Disinstallazione completa</dt>
       <dd>Disinstalla completamente tutti i <br> programmi e le modifiche  <br> apportate al sistema durante la  <br> loro installazione</dd>
     </dl>
     <dl data-num="2">
       <dt>Navigazione sicura e pulita</dt>
       <dd>Rileva e rimuove i plugin dannosi e <br>pubblicitari per un'esperienza di <br>  navigazione migliore</dd>
     </dl>
     <dl class="right" data-num="3">
       <dt>Aggiornamento software</dt>
       <dd>Aggiorna con un solo clic tutti i  <br> software e i programmi importanti  <br> presenti nel PC</dd>
     </dl>
   </div>
</div>
<!-- comparison -->
<div class="comparison">
  <h2>La versione PRO è veramente migliore della versione FREE? Scoprilo ora!</h2>
  <div class="wrapper">
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
      <thead>
      <tr>
        <th class="text" colspan="2"></th>
        <td class="space"></td>
        <th class="itema"><span>Versione Free</span></th>
        <td class="space"></td>
        <th class="itemb"><span>Versione PRO</span></th>
      </tr>
      </thead>
      <tbody>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_01.png')?>" alt="" /></td>
        <td class="virtue">Disinstalla i programmi indesiderati in modo facile e veloce</td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons">√</i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_02.png')?>" alt="" /></td>
        <td class="virtue">Elimina i programmi in bundle e plugin durante l'installazione del programma principale <i></i></td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons gray">√</i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_03.png')?>" alt="" /></td>
        <td class="virtue">Database più grande per rimuovere molti più programmi ostinati <i></i> </td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons gray">√</i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt="" /></td>
        <td class="virtue">Rileva e rimuove i plugin nocivi per una navigazione più sicura  <i></i></td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons gray">√</i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_05.png')?>" alt="" /></td>
        <td class="virtue">Disinstalla i plugin pubblicitari per una navigazione più pulita <i></i></td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons gray">√</i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_06.png')?>" alt="" /></td>
        <td class="virtue">Rimuove automaticamente le modifiche apportate al sistema da un programma non desiderato durante il processo di disinstallazione  <i class="nuo"></i></td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons gray">√</i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_07.png')?>" alt="" /></td>
        <td class="virtue">Pulizia automatica degli avanzi che non possono essere cancellati da 
parte di altre utilità <i></i></td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons gray">√</i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt="" /></td>
        <td class="virtue">Aggiorna con un solo clic tutti i programmi importanti  <i></i></td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons gray">√</i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
       <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_09.png')?>" alt="" /></td>
        <td class="virtue">Aggiornamento automatico alla versione più recente </td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons gray">√</i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
       <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_10.png')?>" alt="" /></td>
        <td class="virtue">Supporto tecnico 24/7 gratuito su richiesta </td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons gray">√</i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      </tbody>
    </table>
  </div>
</div>
<!-- end comparison -->
<div class="gift-content">
  <div class="wrapper ">
    
  
    <h2>Un pacchetto completo GRATIS per un’ottimizzazione completa del</h2>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/isu-gift.png')?>" alt="IObit Software Updater PRO"></dt>
      <dd>
        <h3>IObit Software Updater PRO</h3>
        <p>Aggiornamento software in tempo reale</p>
        <p>Aggiornamento e installazione sicuri</p>
        <p>Ottimizzazione delle prestazioni del PC</p>
        <p>Strumenti di telelavoro per lavorare da casa</p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/sd-gift.png')?>" alt="Smart Defrag PRO"></dt>
      <dd>
        <h3>IObit Smart Defrag PRO</h3>
        <p>Migliore esperienza di gioco</p>
        <p>Accesso ai file più veloce</p>
        <p> Monitoraggio delle prestazioni del disco rigido</p>
        <p> Deframmentazione file di grandi dimensioni</p>
      </dd>
    </dl>
    <h4>IObit Uninstaller PRO + 2 REGALI PRO</h4>
    <div class="price">
      <p><strong>A soli 15</strong> <sup>99 €</sup></p>
      <a href="http://www.iobit.com/buy.php?product=it-iu103pcisusd1599&ref=it_iu103pcisusd1599purchase2008<?php echo $refStr;?>&refs=it_purchase_iu" 
         onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase3pc2008-it')"class="buybtn">ACQUISTA SUBITO</a>
      <span class="dis">Risparmia 84€</span>
    </div>
  </div>
</div>
<!-- review -->
<div class="review wrapper">
  <h2>Milioni di commenti di chi sta già usando IObit Uninstaller PRO</h2>
  <div id="dg-container" class="dg-container">
    <div class="nav"> 
      <span class="dg-prev"></span>
      <span class="dg-next"></span>
    </div>
      <div class="content dg-wrapper">  
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/pcmag.png')?>" alt="PC Magazine"></dt>
          <dd>
            <h2>Recensioni dei media</h2>
            <p>"Se hai bisogno di un programma che ti consenta di disinstallare le applicazioni in modo pulito e definitivo, prova IObit Uninstaller! Questo programma gratuito ti offre un modo molto facile per eliminare le app, inclusi i file randagi che rimangono quando si utilizza Windows per eliminare il software dal disco rigido o SSD. Può essere paragonato ad altri strumenti gratuiti, come Comodo Programs Manager e Revo Uninstaller, che hanno funzioni simili, tuttavia IObit Uninstaller con i suoi suggerimenti basati sulla comunità e la potente capacità di rimuovere le barre degli strumenti del browser Web e i plug-in ha massimizzato la sua competitività. In breve, se utilizzi un PC Windows, dovresti scaricare IObit Uninstaller per disinstallare le applicazioni."</p>
            <cite>PC Magazine</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/jeff-a-watts.png')?>" alt="Jeff A Watts"></dt>
          <dd>
            <h2>Recensioni degli utenti</h2>
            <p>"Ho usato i programmi IObit per anni con grandi risultati! Ed è per questo che resto con i prodotti IObit. In passato, ho riparato e aggiustato laptop e cellulari (Android) a parenti ed amici, lascio sempre i prodotti IObit installati e dico loro di lasciar fare tutto ai programmi che sistemeranno e velocizzeranno automaticamente il loro laptop / computer / cellulare! :) Consiglio vivamente Iobit Uninstaller (e l'ultima versione beta) in quanto è un programma affidabile e sicuro che disinstalla i programmi testardi! La cosa più importante è rimuovere il codice  "nascosto" che il programmatore voleva lasciare, perché è quello che consente la re-installazione degli annunci!"</p>
            <cite>Jeff A Watts</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/lynett-van-niekerk.png')?>" alt="Lynette van Niekerk"></dt>
          <dd>
            <h2>Recensioni degli utenti</h2>
            <p>"Trovo che il programma di disinstallazione IObit sia eccellente da usare in quanto ha tutto ciò che si possa desiderare. Mi piace il fatto che disinstalla tutti i frammenti residui. Ha anche un programma di aggiornamento che ti ricorda quando è necessario aggiornare i programmi e il fatto che disinstalla i programmi batch lo rende davvero il numero uno sul mercato. È un software fondamentale per mantenere il computer a posto."</p>
            <cite>Lynette van Niekerk</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/paulo-martins.png')?>" alt="Gelu Batir"></dt>
          <dd>
            <h2>Recensioni degli utenti</h2>
            <p>"IObit Uninstaller è il miglior software per rimuovere programmi sul computer, è veloce e molto efficace, niente a che vedere con il programma di disinstallazione di base di Windows, infatti pulisce a fondo tutti i residui del programma, evitando i rallentamenti nel computer. Lo uso da alcuni mesi e non so come farei senza, lo consiglio ai miei amici e alla mia famiglia. Grazie a IObit Uninstaller, è fantastico!"</p>
            <cite>Paulo Martins</cite>
          </dd>
        </dl>                           
      </div>               
  </div>
</div>
<!-- end review -->
<div class="award wrapper">
  <h2>Raccomandato anche da</h2>
  <img src="<?php echo $pResUrl;?>images/awards.png" alt="" />
</div>

<!--bottom-->

  <div class="bottom-content clearfix">
    <h2>TRIPLI SALDI ESTIVI</h2>
    <div class="wrapper">
      <div class="img-box"></div>
      <div class="discount">-85<sup>%</sup></div>
      <ul>
        <li class="active"  data-num="1">1 anno / 3 PC+ 2 REGALI PRO</li>
        <li  data-num="2">1 anno / 3 PC+ 1 REGALO PRO</li>
        <li  data-num="0">1 anno / 1 PC</li>
      </ul>
      <dl>
         <dt class="price">
          <strong>15</strong>
          <span>
            99 €
            <b>0,04€ al giorno</b>
          </span>
        </dt>
        <dd>
          <!-- 3pc buybtn -->
          <a href="http://www.iobit.com/buy.php?product=it-iu103pcisusd1599&ref=it_iu103pcisusd1599purchase2008<?php echo $refStr;?>&refs=it_purchase_iu" 
             onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase3pc2008-it')"
             class="buybtn">
            ACQUISTA ORA
          </a>
        </dd>
      </dl>
    </div>
  </div>
  <!-- footer -->
  <div class="footer wrapper">
    <dl class="annotation">
      <dt>Note:</dt>
      <dd>1*.Tali promozioni sono soggette alle modifiche senza preavviso, periodicamente alla nostra esclusiva discrezione.</dd>
      <dd>2*.I dati potrebbero variare in base al sistema o computer.</dd>
    </dl>
    <div class="copyright">Copyright 2005 - <?php echo date('Y')?> IObit. Tutti i diritti riservati</div>
  </div>
  <!-- end footer -->


<!--bottom-->

<script>refStr="<?php echo $refStr;?>";</script>
<script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
<script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script></body>
</html>