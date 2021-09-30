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
if(in_array($_GET['st'],array('iu_wr'))){
  $refStr.='-'.$_GET['st'];
}
if($_GET['pop']=='x_iu'){
  $refStr.='-'.$_GET['pop'];
}
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['user'])?'':('-'.$_GET['user']);
$refStr.=empty($_GET['insday'])?'':('-'.$_GET['insday']);
include $pRootUrl.'include/common.inc.php';
?>

<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Offerta speciale - Sconti fino all’83% su IObit Uninstaller PRO</title>
  <meta name="Copyright" content="IObit">
  <meta name="Description" content="">
  <meta name="Keywords" content="">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,700,700i">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>
</head>
<body>
<!-- banner start -->
<div class="banner">
  <div class="wrapper">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/it/index.php" target="_blank">IObit</a>
    <!-- title -->
    <h1>
      OFFERTE LAMPO DEL GIORNO
      <span> Tempo limitato, non perderti l’ultimo minuto!</span>
    </h1>
    <!-- product-message -->
    <ul class="message">
      <!-- 3pc -->
      <li class="prev">
        <!-- countdown -->
        <p class="countdown countdown2 prev hide">
          <span>Scade tra</span>
          <strong>00</strong> Ore
          <strong>00</strong> Min
          <strong>00</strong> Sec
          <strong>00</strong> Ms*
        </p>
        <!-- box -->
        <div class="box">IObit Uninstaller PRO 8</div>
        <!-- price -->
        <p class="price"><strong>15</strong> <sup>99€</sup> <del>29,99€</del></p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=it-iu93pc1599&ref=it_iu93pcpurchase1904<?php echo $refStr;?>&refs=it_purchase_iu"
           onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase3PC1904-it')">
          ACQUISTA ORA
        </a>
      </li>
      <!-- 3pc+gifts -->
      <li class="last">
        <!-- countdown -->
        <p class="countdown countdown1">
          <span>Scade tra</span>
          <strong>00</strong> Min
          <strong>00</strong> Sec
          <strong>00</strong> Ms*
        </p>
        <!-- box -->
        <div class="box">IObit Uninstaller PRO 8 + Smart Defrag PRO 6 + Protected Folder</div>
        <!-- price -->
        <p class="price small"><strong>15</strong> <sup>99€</sup> <del>99,93€</del></p>
        <!-- buybtn -->
        <a class="buybtn yellow"
           href="https://www.iobit.com/buy.php?product=it-iu93pcsdpf1599&ref=it_iu93pcsdpfpurchase1904<?php echo $refStr;?>&refs=it_purchase_iu"
           onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase3PCsdpf1904-it')">
          APPROFITTANE ORA
        </a>
      </li>
    </ul>
  </div>
</div>
<!-- banner end -->

<!-- payment start -->
<div class="payment">
  <img src="<?php echo $pResUrl; ?>images/payment.png" alt="">
</div>
<!-- payment end -->

<!-- intro start -->
<div class="intro wrapper">
  <h2>Goditi la disinstallazione potente per la navigazione più sicura e veloce!</h2>
  <div class="showcase">
    <div class="imglist">
      <ul>
        <li class="shot3"><img src="<?php echo $pResUrl;?>images/screenshot03.png" alt=""></li>
        <li class="shot2"><img src="<?php echo $pResUrl;?>images/screenshot02.png" alt=""></li>
        <li class="shot1"><img src="<?php echo $pResUrl;?>images/screenshot01.png" alt=""></li>
      </ul>
    </div>
    <a href="javascript:void(0);" class="prev control"><</a>
    <a href="javascript:void(0);" class="next control">></a>
  </div>
  <div class="features clearfix">
    <dl>
      <dt><img src="<?php echo $pResUrl;?>images/feature_01.png" alt=""></dt>
      <dd>
        <h3><span>NUOVO!</span> Ripristina Automaticamente</h3>
        <p>
          Rileva le modifiche del sistema da un programma e <br>
          le ripristina dopo aver disinstallato il programma.
        </p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl;?>images/feature_02.png" alt=""></dt>
      <dd>
        <h3><span class="green">MIGLIORATO!</span> Disinstalla i Plugin Maligni</h3>
        <p>
          Rileva e disinstalla i plugin pubblicitari maligni che <br>
          iniettano annunci o link dannosi nelle pagine visualizzate.
        </p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl;?>images/feature_03.png" alt=""></dt>
      <dd>
        <h3><span>NUOVO!</span> Pulisce i dati inutili</h3>
        <p>
          Pulisce automaticamente i dati inutili dei programmi <br>
          disinstallati per un PC più pulito e veloce.
        </p>
      </dd>
    </dl>
    <dl class="udp">
      <dt><img src="<?php echo $pResUrl;?>images/feature_04.png" alt=""></dt>
      <dd>
        <h3><span class="green">MIGLIORATO!</span> Aggiornamento di Software Sicuro <img src="<?php echo $pResUrl;?>images/attention.png" alt="ATTENTION"> </h3>
        <p>
          Con un solo clic, puoi aggiornare tutti i software importanti con <br>
          un solo clic, incluso <b>WinRAR *, la cui falla di sicurezza potrebbe <br>
            mettere il tuo PC a rischio.</b> <br>
          <em>*Aggiorna immediatamente, una volta che la nuova versione ufficiale è pronta.</em>
        </p>
      </dd>
    </dl>
  </div>
  <a href="javascript: void(0);" class="comparebtn">Per maggiori informazioni clicca qui>></a>
</div>
<!-- intro end -->

<!-- complimentary start -->
<div class="complimentary">
  <div class="wrapper">
    <h2>Goditi il pacchetto regalo a tempo limitato, affrettati!</h2>
    <div class="gift-list clearfix">
      <!-- sd -->
      <dl>
        <dt><img src="<?php echo $pResUrl;?>images/gift-sd.png" alt="Smart Defrag 6 PRO"></dt>
        <dd>
          <h3>Smart Defrag 6 PRO <strong>0€ </strong> <del>29,99€</del></h3>
          <ul>
            <li>Offre la migliore deframmentazione del</li>
            <li>disco e accelera al massimo l'hard driver!</li>
          </ul>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl;?>images/gift-pf.png" alt="Protected Folder"></dt>
        <dd>
          <h3>Protected Folder <strong>0€ </strong> <del>39,95€</del></h3>
          <ul>
            <li>Protegge i tuoi file dagli attacchi maligni e</li>
            <li>assicura la tua privacy al 100%!</li>
          </ul>
        </dd>
      </dl>
    </div>
    <!-- 3pc+gifts buybtn -->
    <a class="buybtn yellow"
       href="https://www.iobit.com/buy.php?product=it-iu93pcsdpf1599&ref=it_iu93pcsdpfpurchase1904<?php echo $refStr;?>&refs=it_purchase_iu"
       onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase3PCsdpf1904-it')">
      APPROFITTANE ORA
    </a>
    <!-- countdown -->
    <p class="countdown countdown1 bottom">
      <strong>00</strong> Min :
      <strong>00</strong> Sec :
      <strong>00</strong> Ms*
    </p>
  </div>
</div>
<!-- complimentary end -->

<!-- awards start -->
<div class="awards wrapper">
  <h2>Raccomandato e premiato dai media mondiali</h2>
  <img src="<?php echo $pResUrl;?>images/awards.png" alt="" />
</div>
<!-- awards end -->

<!-- review -->
<div class="reviews ">
  <div class="wrapper">
    <h2>Riconoscimenti e Recensioni in tutto il mondo</h2>
    <p>Soddisfare i nostri clienti ovunque essi siano</p>
    <div class="map">
      <span class="recover recover01 big"></span>
      <span class="recover recover02 middle"></span>
      <span class="recover recover03 smail"></span>
      <span class="recover recover04 big"></span>
      <span class="recover recover05 middle"></span>
      <span class="recover recover06 smail"></span>
      <span class="recover recover07 big"></span>
      <span class="recover recover08 middle"></span>
      <span class="recover recover09 smail"></span>
      <span class="recover recover10 smail"></span>
      <span class="recover recover11 smail"></span>
      <span class="recover recover12 smail"></span>
      <span class="recover recover13 middle"></span>
      <span class="recover recover14 middle"></span>
      <span class="recover recover15 smail"></span>
      <span class="recover recover16 smail"></span>
      <span class="recover recover17 big"></span>
      <span class="recover recover18 smail"></span>
      <span class="recover recover19 smail"></span>
      <span class="recover recover20 big"></span>
      <span class="recover recover22 smail"></span>
      <span class="recover recover23 smail"></span>
      <span class="recover recover24 smail"></span>
      <span class="recover recover25 smail"></span>
      <span class="recover recover26 smail"></span>
      <span class="recover recover27 smail"></span>
      <span class="recover recover28 smail"></span>
      <span class="recover recover29 smail"></span>

      <!-- Sergey Erlich  -->
      <dl class="tradotto-da-tedesco">
        <dt><img src="<?php echo $pResUrl; ?>images/sergey-erlich.png"></dt>
        <dd>
          <strong>Sergey Erlich</strong>
          <p>
            "IObit Uninstaller è probabilmente la migliore applicazione per <br>
            rimuovere i programmi non necessari dal computer."
          </p>
          <span></span>
        </dd>
      </dl>
      <!-- Fabio Tursi -->
      <dl class="html-it">
        <dt><img src="<?php echo $pResUrl; ?>images/fabio-tursi.png"></dt>
        <dd>
          <strong>Fabio Tursi</strong>
          <p>"IObit Uninstaller PRO è esattamente lo strumento di cui avevo bisogno per mantenere il mio computer pulito ed efficiente. "</p>
          <span></span>
        </dd>
      </dl>
      <!-- Fernando Lourenço Gomes -->
      <dl class="baixaki">
        <dt><img src="<?php echo $pResUrl; ?>images/fernando-lourenco-gomes.png"></dt>
        <dd>
          <strong>Fernando Lourenço Gomes</strong>
          <p>
            “IObit Uninstaller PRO è uno strumento ottimo <br>
            per disinstallare i programmi, le barre degli <br>
            strumenti e i plugin. "
          </p>
          <span></span>
        </dd>
      </dl>
      <!-- Joseph Yu -->
      <dl class="charles-r-widick">

        <dd>
          <strong>Joseph Yu</strong>
          <p>
            "IObit Uninstaller è ottimo per trovare i residui di bit e byte <br>
            nascosti nel PC che occupano lo spazio dei dischi e colpiscono <br>
            i registri."
          </p>
          <span></span>
        </dd>

        <dt><img src="<?php echo $pResUrl; ?>images/joseph-yu.png"></dt>
      </dl>
      <!-- PC.MAGAZINE -->
      <dl class="cnet">
        <dt><img src="<?php echo $pResUrl; ?>images/pc.png"></dt>
        <dd>
          <strong>PC.MAGAZINE</strong>
          <p>
            "Questa utilità, ora compatibile anche con Windows <br>
            10, disinstalla in modo veloce i programmi, come i file <br>
            di supporto randagi che sono spesso lasciati quando <br>
            un programma viene rimosso dal PC, anche le <br>
            fastidiose barre degli strumenti del browser e i plug in."
          </p>
          <span></span>
        </dd>
      </dl>
    </div>
  </div>
</div>
<!-- end review -->

<!-- compare -->
<div class="compare wrapper" id="compare">
  <table border="0" cellspacing="0" cellpadding="0" width="100%">
    <thead>
    <tr>
      <th class="itemb">
        <div class="box">
          IObit Uninstaller 8<br>
          FREE
          <span></span>
        </div>
      </th>
      <th class="text">Quali sono i vantaggi della versione PRO?</th>

      <th class="itema">
        <div class="box">
          IObit Uninstaller 8<br>
          PRO
          <span></span>
        </div>
      </th>
    </tr>
    </thead>
    <tbody>
    <!-- 01 -->
    <tr>
      <td class="itemb"><i class="all-icons">√</i></td>
      <td class="virtue">
        <img class="sup" src="<?php echo $pResUrl;?>images/icons-01.png" alt="">
        <p>Disinstalla i programmi dall'icona sul desktop, dalla finestra aperta o dall'icona della<br>
          barra delle applicazioni<span class="all-icons">Migliorato</span></p>
      </td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <!-- 02 -->
    <tr>
      <td class="itemb"><i class="all-icons">√</i></td>
      <td class="virtue">
        <img src="<?php echo $pResUrl;?>images/icons-02.png" alt="">
        <p>Rimuove plugin e estensioni in Edge, Chrome, IE, Firefox, ecc.</p>
      </td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <!-- 04 -->
    <tr>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="virtue">
        <img src="<?php echo $pResUrl;?>images/icons-04.png" alt="">
        <p>Rileva e disinstalla i programmi di terze parti insieme al freeware
          <span class="all-icons">Migliorato</span></p>
      </td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <!-- 03 -->
    <tr>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="virtue">
        <img class="sup" src="<?php echo $pResUrl;?>images/icons-12.png" alt="">
        <p>Ripristina automaticamente le modifiche che un programma ha apportato <br> al sistema dopo averlo disinstallato
          <span class="all-icons nuo">Nuovo</span></p>
      </td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>

    <!-- 05 -->
    <tr>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="virtue">
        <img src="<?php echo $pResUrl;?>images/icons-05.png" alt="">
        <p>Elimina automaticamente gli avanzi di file che le altre utilità non sono riuscite a rimuovere
          <span class="all-icons">Migliorato</span></p>
      </td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <!-- 06 -->
    <tr>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="virtue">
        <img src="<?php echo $pResUrl;?>images/icons-06.png" alt="">
        <p>Identifica e rimuove i plugin maligni
          <span class="all-icons ra">Migliorato 2volte</span></p>
      </td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <!-- 07 -->
    <tr>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="virtue">
        <img src="<?php echo $pResUrl;?>images/icons-07.png" alt="">
        <p>Identifica e rimuove i plugin pubblicitari
          <span class="all-icons ra">Migliorato 2volte</span></p>
      </td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <!-- 08 -->
    <tr>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="virtue">
        <img src="<?php echo $pResUrl;?>images/icons-08.png" alt="">
        <p>Aggiorna tutti i software importanti con un solo clic
          <span class="all-icons ra">Migliorato 2volte</span></p>
      </td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <!-- 09 -->
    <tr>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="virtue">
        <img src="<?php echo $pResUrl;?>images/icons-09.png" alt="">
        <p>Aggiornamento automatico alla versione più recente</p>
      </td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <!-- 10 -->
    <tr>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="virtue">
        <img src="<?php echo $pResUrl;?>images/icons-10.png" alt="">
        <p>24/7 Supporto tecnico gratuito</p>
      </td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="itemb radius"></td>
      <td class="virtue radius"></td>
      <td class="itema radius"> <span class="shadow"></span></td>
    </tr>
    </tbody>
  </table>
</div>
<!-- end compare -->

<!-- bottombuy start -->
<div class="bottombuy">
  <div class="wrapper clearfix">
    <div class="box fl">
      <ul class="clearfix fl">
        <li class="active"></li>
        <li class="second"></li>
      </ul>
    </div>
    <div class="middle fl">
      <ul class="select">
        <li class="active"
            data-url="https://www.iobit.com/buy.php?product=it-iu93pcsdpf1599&ref=it_iu93pcsdpfpurchase1904<?php echo $refStr;?>&refs=it_purchase_iu"
            data-ga="ga('send', 'event', 'iubuy', 'buy', 'iupurchase3PCsdpf1904-it')"
            data-del="99,93€">
          <i></i>
          1 Anno / 3 PC + pacchetto regalo
          <span>-83%</span>
        </li>
        <li class="second"
            data-url="https://www.iobit.com/buy.php?product=it-iu93pc1599&ref=it_iu93pcpurchase1904<?php echo $refStr;?>&refs=it_purchase_iu"
            data-ga="ga('send', 'event', 'iubuy', 'buy', 'iupurchase3PC1904-it')"
            data-del="29,99€">
          <i></i>
          1 Anno / 3 PC
          <span>-47%</span>
        </li>
      </ul>
    </div>
    <div class="fr another">
      <p class="price"><strong>15</strong> <sup>99€</sup> <del>99,93€</del></p>
      <a class="buybtn yellow"
         href="https://www.iobit.com/buy.php?product=it-iu93pcsdpf1599&ref=it_iu93pcsdpfpurchase1904<?php echo $refStr;?>&refs=it_purchase_iu"
         onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase3PCsdpf1904-it')">
        APPROFITTANE ORA
      </a>
    </div>
  </div>
</div>
<!-- boittombuy enb -->

<!-- bottom start -->
<div class="bottom">
  <div class="wrapper">
    <!-- service start -->
    <div class="service clearfix">
      <dl>
        <dt><img src="<?php echo $pResUrl;?>images/moneyback.png" alt="" /></dt>
        <dd><h4>Garanzia di Rimborso</h4></dd>
        <dd>
          Garantiamo il rimborso entro <br>
          60 giorni.
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl;?>images/godaddy-secure.png" alt="" /></dt>
        <dd><h4>Pagamento 100% Sicuro</h4></dd>
        <dd>
          IObit offre i metodi di pagamento <br>
          sicuri per la transazione.
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl;?>images/cart.png" alt="" /></dt>
        <dd><h4>Attivazione Veloce</h4></dd>
        <dd>
          Riceverai il codice di <br>
          licenza in pochi minuti tramite la mail.
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl;?>images/24hours.png" alt="" /></dt>
        <dd><h4>Servizio di Supporto</h4></dd>
        <dd>
          Il nostro supporto tecnico gratuito <br>
          è disponibile 24 ore su 24.
        </dd>
      </dl>
    </div>
    <!-- service end -->

    <!-- annotation start -->
    <dl class="annotation">
      <dt>Note:</dt>
      <dd>1*.Tali promozioni sono soggette alle modifiche senza preavviso, periodicamente alla nostra esclusiva discrezione.</dd>
      <dd>2*.I dati potrebbero variare in base al sistema o computer.</dd>
    </dl>
    <!-- annotation end -->

    <!-- footer start -->
    <div class="footer">Copyright © 2005 - <?php echo date('Y')?> IObit. Tutti i diritti riservati</div>
    <!-- footer end -->
  </div>
</div>
<!-- bottom end -->


<script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
<script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>