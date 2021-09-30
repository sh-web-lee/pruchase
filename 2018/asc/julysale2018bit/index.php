<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
    $pResUrl = './';
    $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

$viewNum = rand(60, 88);
$reduceNum = 76654325;
$buyNum = number_format(ceil(microtimeFloat() * 1000 / 20000) - $reduceNum);
if (!empty($_GET['action']) && ($_GET['action'] == 'getSales')) {
    $date = $_GET['d'];
    $cName = 'itascjulpa' . $date;
    $cookie = $_COOKIE[$cName];
    if ($cookie != null) {
        $packsNum = $_COOKIE[$cName];
        if ($packsNum > 0) {
            $packsNum--;
            if($_GET['exp']==1){
                $packsNum=0;
            }
            setcookie($cName, $packsNum);
            if (rand(1, 100) % 2 == 0) {
                $packsNum++;
            }
        } else {
            $packsNum = 0;
        }
    } else {
        $packsNum = 48;
        setcookie($cName, $packsNum);
    }
    echo json_encode(array('packsNum' => $packsNum, 'viewNum' => $viewNum, 'buyNum' => $buyNum));
    exit();
}

if (in_array($_GET['st'], array('asc_c6', 'asc_c2', 'asc_c3',
        'asc_t2', 'asc_t3', 'asc_t4', 'asc_t5', 'asc_t6', 'asc_t7', 'asc_t8', 'asc_t9', 'asc_t10', 'asc_t11', 'asc_s1',
        'asc_s3', 'asc_s4', 'asc_s5', 'asc_s6', 'asc_s7', 'asc_s8', 'asc_ac2', 'asc_ac3', 'asc_report',
        'asc_promote', 'asc_autocare', 'asc_buypro', 'asc_pro1', 'asc_pro2', 'asc_pro3', 'asc_pro4', 'asc_pro5',
        'asc_pro6', 'asc_protip1', 'asc_protip2', 'asc_protip3', 'asc_protip4', 'asc_protip5', 'asc_protip6',
        'asc_c8','23','asc_s11','asc_qs3','asc_qs4','asc_qs5','asc_qs6','asc_qs7','asc_qs8',
        'asc_qs9','asc_qs10','asc_qs11','asc_pm1','asc_pm2','asc_pm3','asc_c9','asc_pro7','asc_pro8','asc_pro9','asc_pro10',
        'asc_gift','asc_pro11','asc_pro12','asc_s13','asc_s14','asc_s15','asc_p8','asc_p9','asc_p11','maxcode','garegion',
        'invalidcode','asc_install','asc_p6','asc_p7','ascofficialfree','ascofficialpro',
        'asc_c10','asc_c11','asc_su5','asc_su7','asc_su6','asc_promotea','asc_promoteb','asc_promotec','asc_promoted',
        'asc_ac4','asc_su8','asc_su9','asc_protip7','asc_protip8','asc_wr','crcur',
        'asc_promote3','asc_promote4','asc_promote5','asc_promote6','asc_promote7','asc_promote8',
        'asc_promote9','asc_promote10','asc_promote11','asc_promote12','asc_pm5','asc_pm6','asc_so1','asc_so3')
)) {
  $refStr = '-' . $_GET['st'];
} else {
  $refStr = '';
}
if(in_array($_GET['pop'],array('x_asc','xr_sdpasc','xr_dbpasc'))){
  $refStr.='-'.$_GET['pop'];
}
if(in_array($_GET['type'],array('pro','giveawayexp'))){
  $refStr.='-'.$_GET['type'];
}
if(in_array($_GET['to'],array('event1','ascrenew'))){
  $refStr.='-'.$_GET['to'];
}
if($_GET['ref']=='nc'){
  $refStr.='-'.$_GET['ref'];
}
$refStr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-l'.$_GET['litype'].'-e'.$_GET['expd'];
?>
<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="IE=Edge,chrome=1">
  <title>Grande saldi 2018, sconti fino all' 80% su Advanced SystemCare PRO – Offerte di IObit</title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
    <?php echo $gJavascript['public'];?>
  <!-- Google Analytics Content Experiment code -->
  <script>function utmx_section(){}function utmx(){}(function(){var
      k='17473586-689',d=document,l=d.location,c=d.cookie;
      if(l.search.indexOf('utm_expid='+k)>0)return;
      function f(n){if(c){var i=c.indexOf(n+'=');if(i>-1){var j=c.
      indexOf(';',i);return escape(c.substring(i+n.length+1,j<0?c.
        length:j))}}}var x=f('__utmx'),xx=f('__utmxx'),h=l.hash;d.write(
        '<sc'+'ript src="'+'http'+(l.protocol=='https:'?'s://ssl':
        '://www')+'.google-analytics.com/ga_exp.js?'+'utmxkey='+k+
        '&utmx='+(x?x:'')+'&utmxx='+(xx?xx:'')+'&utmxtime='+new Date().
        valueOf()+(h?'&utmxhash='+escape(h.substr(1)):'')+
        '" type="text/javascript" charset="utf-8"><\/sc'+'ript>')})();
  </script><script>utmx('url','A/B');</script>
  <!-- End of Google Analytics Content Experiment code -->


  <?php echo $gJavascript['head']; ?>
</head>
<body>
<!-- banner start -->
<div class="banner">
  <div class="wrapper">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/" target="_blank">IObit</a>
    <!-- title -->
    <h1 class="title">Grande Saldi di IObit: SCONTISSIMI -- SCONTI FINO ALL’80%</h1>
    <!-- clear float -->
    <div class="clear"></div>
    <!-- content -->
    <div class="banner-content clearfix">
      <!-- content-box -->
      <div class="content-box fl clearfix">
        <!-- ASC Sconto 40% -->
        <div class="asc-sconto40 sconto fl" data-sconto="40">
          <!-- this is icon -->
          <i class="box-top"></i>
          <!--          <i class="box-cycle"></i>-->
          <!-- off number -->
          <h2>-40%</h2>
          <!-- banner-asc-sconto40 -->
          <img src="<?php echo $pResUrl;?>images/banner-asc-sconto40.png" alt="">
        </div>
        <!-- ASC Sconto 80% -->
        <div class="asc-sconto80 sconto fl active" data-sconto="80">
          <!-- this is icon -->
          <i class="box-top"></i>
          <!--          <i class="box-cycle"></i>-->
          <!-- title -->
          <p>Offerta Limitata</p>
          <!-- off number -->
          <h2>-80%</h2>
          <!-- banner-sac-sconto80 -->
          <img src="<?php echo $pResUrl;?>images/banner-asc-sconto80.png" alt="">
        </div>
        <!-- ASC Sconto 80% Esaurito -->
        <img class="esaurito" src="<?php echo $pResUrl;?>images/banner-esaurito.png" alt="">
      </div>
      <!-- content-off -->
      <div class="content-off fr">
        <!-- off-sconto80 -->
        <div class="off-sconto80 asc-off" id="asc-off80">
          <!-- title -->
          <h3>Advanced SystemCare 13 PRO</h3>
          <h4>3 PC / 1 Anno</h4>
          <h5> Inclusi 2 Regali Gratis </h5>
          <!-- countdown -->
          <p class="countdown" id="countdown">
            SCADE TRA:
            <strong>00</strong>m,
            <strong>00</strong>s,
            <strong class="smaller">000</strong>ms
          </p>
          <!-- progress-bar -->
          <div class="progress-bar">
            <div class="bar">
              <span></span>
            </div>
          </div>
          <!-- asc-number -->
          <p class="asc-number">
            <!-- how many people to see it -->
            <i class="eye"></i><span class="personsNum"> 11</span> utenti stanno guardando ora
            <!-- how many left -->
            <i class="gift"></i><span class="packsNum"><?php echo $packsNum ?></span> pacchetti rimasti oggi
          </p>
          <!-- price for sconto80 -->
          <p class="price">
            ORA <strong>21,99</strong> <del>119,93</del>
          </p>
          <!-- buybtn for sconto80 -->
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=it-asc13sdpf3pc2199&ref=it_asc133pcsdpf2199purchase1807<?php echo $refStr;?>&refs=it_purchase_asc"
             onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3PCsdpf1807ait')">
            <span class="tag">ATTIVA ORA</span>
          </a>
        </div>
        <!-- off-sconto40 -->
        <div class="off-sconto40 asc-off" id="asc-off40">
          <!-- title -->
          <h3>Advanced SystemCare 13 PRO</h3>
          <h4>1 PC / 1 Anno</h4>
          <!-- asc-sconto40-number -->
          <p class="asc-number">
            <i class="eye"></i><span class="personsNum"> 11</span> utenti stanno guardando ora<br>
            <i class="gift"></i><span class="buyNum"> <?php echo $buyNum;?></span> persone lo hanno gia' acquistato
          </p>
          <!-- price for sconto40 -->
          <p class="price">
            ORA <strong>17,99</strong> <del>29,99</del>
          </p>
          <!-- buybtn for sconto40 -->
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=it-asc131pc1799&ref=it_asc131pc1799purchase1807<?php echo $refStr;?>&refs=it_purchase_asc"
             onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1PC1807a-it');">
            <span class="tag">ATTIVA ORA</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- banner end -->

<!-- service start-->
<div class="service wrapper clearfix">
  <dl class="fl garanzia">
    <dt>
      <img src="<?php echo $pResUrl;?>images/garanzia-di-soddisfazione.png" alt="Garanzia di Soddisfazione">
    </dt>
    <dd>
      Garanzia di Soddisfazione
    </dd>
  </dl>
  <dl class="fl pagamento">
    <dt>
      <img src="<?php echo $pResUrl;?>images/pagamento-assicurato.png" alt="Pagamento Assicurato">
    </dt>
    <dd>
      Pagamento Assicurato
    </dd>
  </dl>
  <dl class="fl attivazione">
    <dt>
      <img src="<?php echo $pResUrl;?>images/attivazione-veloce.png" alt="Attivazione Veloce">
    </dt>
    <dd>
      Attivazione Veloce
    </dd>
  </dl>
  <dl class="fr servizio">
    <dt>
      <img src="<?php echo $pResUrl;?>images/servizio-cliente.png" alt="Servizio Cliente">
    </dt>
    <dd>
      Servizio Cliente
    </dd>
  </dl>
</div>
<!-- service end -->

<?php if($_GET['st']!='asc_wr'):?>
<!-- benfits -->
<div class="benfits">
  <div class="wrapper">
    <!-- title -->
    <h2>Attiva le funzionalità super potenti</h2>
    <p class="subtitle">Cogli l’attimo e fai tornare il PC come nuovo!</p>
    <!-- content -->
    <div class="content clearfix">
      <!-- left lists -->
      <ul class="left-lists fl">
        <li>
          <dl class="clearfix">
            <dt class="fl"><img src="<?php echo $pResUrl;?>images/benfits-icon01.png" alt=""></dt>
            <dd class="fl">
              <h3>200%*</h3>
              <p>
                Riduce gli inceppamenti e i ritardi del<br>
                sistema incrementando la sua<br>
                velocità fino al 200% in più.
              </p>
            </dd>
          </dl>
        </li>
        <li>
          <dl class="clearfix">
            <dt class="fl"><img src="<?php echo $pResUrl;?>images/benfits-icon02.png" alt=""></dt>
            <dd class="fl">
              <h3>Più Approfondito</h3>
              <p>
                Ripara i problemi di registro per<br>
                ridurre i blocchi di Windows e i<br>
                messaggi di errore.
              </p>
            </dd>
          </dl>
        </li>
        <li>
          <dl class="clearfix">
            <dt class="fl"><img src="<?php echo $pResUrl;?>images/benfits-icon03.png" alt=""></dt>
            <dd class="fl">
              <h3>Sicurezza della Privacy</h3>
              <p>
                Protegge da accessi segreti i tuoi dati<br>
                sensibili come contatti, posta<br>
                elettronica, Dropbox, OneDrive ecc.
              </p>
            </dd>
          </dl>
        </li>
      </ul>
      <!-- right lists -->
      <ul class="right-lists fr">
        <li>
          <dl class="clearfix">
            <dt class="fr"><img src="<?php echo $pResUrl;?>images/benfits-icon04.png" alt=""></dt>
            <dd class="fr">
              <h3>300%*</h3>
              <p>
                Accelera download, gioco, navigazione<br>
                su Internet e su piattaforme video<br>
                come YouTube fino al 300% in più.
              </p>
            </dd>
          </dl>
        </li>
        <li>
          <dl class="clearfix">
            <dt class="fr"><img src="<?php echo $pResUrl;?>images/benfits-icon05.png" alt=""></dt>
            <dd class="fr">
              <h3>Automatico</h3>
              <p>
                Blocca automaticamente i<br>
                programmi inutilizzati per liberare<br>
                più RAM del PC.
              </p>
            </dd>
          </dl>
        </li>
        <li>
          <dl class="clearfix">
            <dt class="fr"><img src="<?php echo $pResUrl;?>images/benfits-icon06.png" alt=""></dt>
            <dd class="fr">
              <h3>Più Sicuro</h3>
              <p>
                Cancella le tracce di Privacy<br>
                impedendone i tracciamenti maligni.
              </p>
            </dd>
          </dl>
        </li>
      </ul>
      <div class="clear"></div>
      <!-- the anchor to compare -->
      <a class="textlink" href="Javascript:void(0);">Per maggiori informazioni clicca qui ></a>
    </div>
  </div>
</div>
<!-- benfits end -->
<?php else:?>
<!-- benfits -->
<div class="benfits upd">
  <div class="wrapper">
    <!-- title -->
    <h2>Attiva le funzionalità super potenti</h2>
    <p class="subtitle">Cogli l’attimo e fai tornare il PC come nuovo!</p>
    <!-- content -->
    <div class="content clearfix">
      <!-- right lists -->
      <ul class="left-lists fr">
        <li>
          <dl class="clearfix">
            <dt class="fl"><img src="<?php echo $pResUrl;?>images/benfits-icon08.png" alt=""></dt>
            <dd class="fl">
              <h3>Più Veloce</h3>
              <p>
                Riduce i blocchi del sistema per rendere l’avvio più veloce fino al 200%* <br>
                e accelera la connessione a Internet per una navigazione più veloce <br>
                del 300%*.
              </p>
            </dd>
          </dl>
        </li>
        <li>
          <dl class="clearfix">
            <dt class="fl"><img src="<?php echo $pResUrl;?>images/benfits-icon09.png" alt=""></dt>
            <dd class="fl">
              <h3>Più Approfondito</h3>
              <p>
                Ripara i problemi di registro per ridurre i blocchi di Windows e i <br>
                messaggi di errore.
              </p>
            </dd>
          </dl>
        </li>
        <li>
          <dl class="clearfix">
            <dt class="fl"><img src="<?php echo $pResUrl;?>images/benfits-icon10.png" alt=""></dt>
            <dd class="fl">
              <h3>Sicurezza della Privacy</h3>
              <p>
                Protegge da accessi segreti i tuoi dati sensibili come contatti, posta<br>
                elettronica, Dropbox, OneDrive ecc.
              </p>
            </dd>
          </dl>
        </li>
        <li>
          <dl class="clearfix">
            <dt class="fl"><img src="<?php echo $pResUrl;?>images/benfits-icon07.png" alt=""></dt>
            <dd class="fl">
              <h3>Aggiornamento di Software Sicuro <img src="<?php echo $pResUrl;?>images/attention.png" alt="ATTENZIONE"></h3>
              <p>
                Con un solo clic, puoi aggiornare tutti i software importanti con un solo <br>
                clic, incluso <b>WinRAR*, la cui falla di sicurezza potrebbe mettere il tuo PC
                  <br>a rischio.</b> <br>
                <em>*Aggiorna immediatamente, una volta che la nuova versione ufficiale è pronta.</em>
              </p>
            </dd>
          </dl>
        </li>
      </ul>
      <div class="clear"></div>
      <!-- the anchor to compare -->
      <a class="textlink" href="Javascript:void(0);">Per maggiori informazioni clicca qui ></a>
    </div>
  </div>
</div>
<!-- benfits end -->
<?php endif;?>

<!-- gifts -->
<div class="gifts">
  <!-- title -->
  <h2>Regali Gratis solo per abbonamento di 3 PC / 1 Anno</h2>
  <div class="wrapper">
    <!-- gift-list -->
    <div class="gift-list clearfix">
      <!-- IU -->
      <div class="lists">
        <img src="<?php echo $pResUrl; ?>images/iu-gift.png" alt="">
        <dl>
          <dt>
            <h3>Protected Folder</h3>
            <del>€39,95</del> <strong>€<b>0</b></strong>
          </dt>
          <dd>
            Protegge i tuoi file dagli attacchi maligni e<br>
            assicura la tua privacy al 100%!
          </dd>
        </dl>
      </div>
      <!-- SD -->
      <div class="lists last">
        <img src="<?php echo $pResUrl; ?>images/sd-gift.png" alt="">
        <dl>
          <dt>
            <h3>Smart Defrag 6</h3>
            <del>€29,99</del> <strong>€<b>0</b></strong>
          </dt>
          <dd>
            Offre la migliore deframmentazione del disco<br>
            e accelera al massimo l'hard driver!
          </dd>
        </dl>
      </div>
    </div>
    <!-- buybtn -->
    <a class="buybtn"
       href="javascript:void(0)"
       onclick="">
      <span>OTTIENI I REGALI SUBITO!</span>
    </a>

  </div>
</div>
<!-- gifts end -->

<!-- review start -->
<div class="reviews wrapper">
  <!-- title -->
  <h2>Riconoscimenti e Recensioni in tutto il mondo</h2>
  <p>Scelto da oltre <span>250 milioni</span> di utenti mondiali</p>
  <!-- map and points -->
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
    <span class="recover recover21 middle"></span>
    <!-- tradotto-da-tedesco -->
    <dl class="tradotto-da-tedesco">
      <dt><img src="<?php echo $pResUrl; ?>images/tradotto-da-tedesco.png"></dt>
      <dd>È il migliore programma che pulisce e accelera il mio PC in modo <br> corretto e sicuro. Rende i computer di vecchia generazione più <br> veloci e potenti! – Tradotto da Tedesco</dd>
    </dl>
    <!-- html-it -->
    <dl class="html-it">
      <dt><img src="<?php echo $pResUrl; ?>images/html-it.png"></dt>
      <dd>Advanced SystemCare Pro è un potente programma con cui potremo <br> ottimizzare al massimo le prestazioni del nostro sistema operativo. <br> Gestisce in automatico quasi tutte le funzioni, molto semplice da usare!</dd>
    </dl>
    <!-- baixaki -->
    <dl class="baixaki">
      <dt><img src="<?php echo $pResUrl; ?>images/baixaki.png"></dt>
      <dd>Advanced SystemCare ha un rendimento eccezionale, è in grado di rilevare e risolvere <br> problemi davvero complessi, difficili persino da immaginare. – Tradotto da Portoghese </dd>
    </dl>
    <!-- charles-r-widick -->
    <dl class="charles-r-widick">
      <dd>La mia scelta è ancora Advanced <br> SystemCare Pro! </dd>
      <dt><img src="<?php echo $pResUrl; ?>images/charles-r-widick.png"></dt>
    </dl>
    <!-- cnet -->
    <dl class="cnet">
      <dd>Advanced SystemCare punta a rimediare <br> qualsiasi problema affligga il tuo computer!</dd>
      <dt><img src="<?php echo $pResUrl; ?>images/cnet.png"></dt>
    </dl>
  </div>
</div>
<!-- review end -->

<!-- compare  start -->
<div class="compare wrapper">
  <table border="0" cellspacing="0" cellpadding="0" width="100%">
    <thead>
    <tr>
      <th class="text" colspan="2">Confronto delle funzionalità:</th>
      <th class="spac"></th>
      <th class="itemb">
        <div class="box">
          La tua versione <br> ATTUALE
          <span></span>
        </div>
      </th>
      <th class="spac"></th>
      <th class="itema">
        <div class="box">
          La versione PRO<br> AGGIORNATA
          <span></span>
        </div>
      </th>
    </tr>
    </thead>
    <tbody>
    <!-- 01 -->
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_01.png"></td>
      <td class="virtue">Pulizia, riparazione ed ottimizzazione di base del sistema</td>
      <td class="spac"></td>
      <td class="itemb"><i class="all-icons">√</i></td>
      <td class="spac"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <!-- 15 -->
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_15.png"></td>
      <td class="virtue">
        Mantieni i tuoi dati personali lontani dai programmi inaffidabili
        <span class="all-icons nuo">Nuovo</span>
      </td>
      <td class="spac"></td>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="spac"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <!-- 16 -->
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_16.png"></td>
      <td class="virtue">
        <em>Nessuno può rubare la tua impronta digitale per tracciare la tua navigazione sul web</em>
        <span class="all-icons nuo last">Nuovo</span>
      </td>
      <td class="spac"></td>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="spac"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <!-- 02 -->
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_05.png"></td>
      <td class="virtue">
        300% maggiore rapidità di Internet con Internet Booster
        <span class="all-icons">Migliorato</span>
      </td>
      <td class="spac"></td>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="spac"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <!-- 03 -->
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_06.png"></td>
      <td class="virtue">
        200% avvio più veloce con Ottimizzazione all’Avvio
        <span class="all-icons">Migliorato</span>
      </td>
      <td class="spac"></td>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="spac"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <!-- 04 -->
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_07.png"></td>
      <td class="virtue">
        Pulizia profonda del registro di Windows per un sistema più stabile
        <span class="all-icons">Migliorato</span>
      </td>
      <td class="spac"></td>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="spac"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <!-- 05 -->
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_08.png"></td>
      <td class="virtue">
        <em>Nuovo motore di ottimizzazione del disco rigido per l'accesso più rapido all’Hard Driver</em>
        <span class="all-icons nuo last">Nuovo</span>
      </td>
      <td class="spac"></td>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="spac"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <!-- 06 -->
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_09.png"></td>
      <td class="virtue">Protezione in tempo reale contro le minacce alla sicurezza</td>
      <td class="spac"></td>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="spac"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <!-- 07 -->
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_10.png"></td>
      <td class="virtue">Rilevazione completa contro le infezioni più profonde</td>
      <td class="spac"></td>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="spac"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <!-- 08 -->
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_11.png"></td>
      <td class="virtue">
        Rimuove in automatico gli annunci e le tracce di privacy per una navigazione più sicura
      </td>
      <td class="spac"></td>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="spac"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <!-- 09 -->
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_12.png"></td>
      <td class="virtue">Pulizia automatica della RAM per far funzionare il PC più scorrevolmente <span class="all-icons ">Migliorato</span></td>
      <td class="spac"></td>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="spac"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <!-- 10 -->
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_13.png"></td>
      <td class="virtue">Aggiornamento automatico alla versione più recente</td>
      <td class="spac"></td>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="spac"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <!-- 11 -->
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_14.png"></td>
      <td class="virtue">24/7 Supporto tecnico gratuito</td>
      <td class="spac"></td>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="spac"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    </tbody>
  </table>
</div>
<!-- compare end -->

<!-- bottomcart start -->
<div class="bottomcart">
  <div class="wrapper clearfix">
    <!-- bottomcart-box -->
    <div class="bottomcart-box fl">
      <img src="<?php echo $pResUrl;?>images/bottomcart-asc-box.png" alt="">
    </div>
    <!-- bottomcart-off -->
    <div class="bottomcart-off fl">
      <!-- esaurito -->
      <img class="bottomcart-esaurito" src="<?php echo $pResUrl;?>images/bottomcart-esaurito.png" alt="">
      <!-- sconto80 -->
      <div class="sconto80 sconto box active" data-sconto="80">
        <!-- icon -->
        <i class="box-top"></i>
        <!--        <i class="box-cycle"></i>-->
        <p class="fl">3 PC / 1 Anno+PF+SD</p>
        <h3 class="fl">-80%</h3>
        <div class="clear"></div>
      </div>
      <!-- sconto40 -->
      <div class="sconto40 sconto box" data-sconto="40">
        <!-- icon -->
        <i class="box-top"></i>
        <!--        <i class="box-cycle"></i>-->
        <p class="fl">1 PC / 1 Anno</p>
        <h3 class="fl">-40%</h3>
        <div class="clear"></div>
      </div>
    </div>
    <!-- bottomcart-buy -->
    <div class="bottomcart-buy fr">
      <div class="sconto80-buy">
        <!-- price for sconto80 -->
        <p class="price">
          ORA <strong>21,99</strong> <del>119,93</del><br>
          <span>Risparmi 97,94</span>
        </p>
        <!-- buybtn for sconto80 -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=it-asc13sdpf3pc2199&ref=it_asc133pcsdpf2199purchase1807<?php echo $refStr;?>&refs=it_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3PCsdpf1807ait')">
          <span>ATTIVA ORA</span>
        </a>
      </div>
      <div class="sconto40-buy">
        <!-- price for sconto40-->
        <p class="price">
          ORA <strong>17,99</strong> <del>29,99</del><br>
          <span>Risparmi 12</span>
        </p>
        <!-- buybtn for sconto40 -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=it-asc131pc1799&ref=it_asc131pc1799purchase1807<?php echo $refStr;?>&refs=it_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1PC1807a-it');">
          <span>ATTIVA ORA</span>
        </a>
      </div>
    </div>
  </div>
</div>
<!-- bottomcart end -->

<!-- footer start -->
<div class="footer">
  <dl class="annotation wrapper">
    <dt>Note:</dt>
    <dd>
      * I dati potrebbero variare in base al sistema o computer.
    </dd>
    <dd>
      * Tali promozioni sono soggette a modifiche senza preavviso, periodicamente e a nostra esclusiva discrezione.
    </dd>
  </dl>
  <div class="copyright">Copyright ©2005 - <?php echo date('Y')?> IObit. Tutti i diritti riservati</div>
</div>
<!-- footer end -->

<!-- pop-backdrop start -->
<div class="pop-backdrop"></div>
<!-- pop-backdrop end -->

<!-- pop start -->
<!-- this is the first pop -->
<div class="pop pop-01">
  <div class="content">
    <div class="container">
      <!-- button for smaller -->
      <a class="button smaller fl" href="javascript: minimizza();">- Minimizza</a>
      <!-- button for going to the second pop -->
      <a class="button close fr" href="javascript: refuse();">x Rinuncio</a>
      <!-- clear float -->
      <div class="clear"></div>
      <!-- title -->
      <h3>COMPLIMENTI!</h3>
      <p>Solo 20 utenti avranno la fortuna di vincere questo coupon!</p>
      <img src="<?php echo $pResUrl;?>images/pop-off-5.png" alt="">
      <!-- buybtn -->
      <a class="buybtn"
         href="https://www.iobit.com/buy.php?product=it-asc13sdpf3pc1699&ref=it_asc133pcsdpf1699purchase1807a<?php echo $refStr;?>&refs=it_purchase_asc"
         onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3PCsdpf1807ait')">
        <span>Approfittane Ora</span>
      </a>
    </div>
  </div>
</div>

<!-- this is the second pop -->
<div class="pop pop-02 hide">
  <div class="content">
    <div class="container">
      <!-- the button for smaller -->
      <a class="button smaller fl" href="javascript: minimizza();">- Minimizza</a>
      <!-- clear float -->
      <div class="clear"></div>
      <!-- title -->
      <h3>Prendere o lasciare!</h3>
      <p>Se clicchi qui, non potrai più godere di questa offerta.</p>
      <!-- originale -->
      <dl class="originale fl">
        <dt>Prezzo Originale</dt>
        <dd><del>€119,93</del></dd>
      </dl>
      <!-- scontato -->
      <dl class="scontato fl">
        <dt>Prezzo Scontato</dt>
        <dd><del>€21,99</del></dd>
      </dl>
      <!-- ulteriore -->
      <dl class="ulteriore fl">
        <dt>Ulteriore sconto <span>5</span> euro</dt>
        <dd>€<strong>16,99</strong></dd>
      </dl>
      <!-- clear float -->
      <div class="clear"></div>
      <!-- confermo di rinunciare -->
      <a class="refuse fl" href="javascript: refuse();">Confermo di rinunciare</a>
      <!-- goto buy -->
      <a class="buybtn fr"
         href="https://www.iobit.com/buy.php?product=it-asc13sdpf3pc1699&ref=it_asc133pcsdpf1699purchase1807b<?php echo $refStr;?>&refs=it_purchase_asc"
         onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3PCsdpf1807bit')">
        <span>Voglio lo sconto!</span>
      </a>
    </div>
  </div>
</div>
<!-- pop end -->

<!-- pop-small start -->
<div class="pop-small">
  <!-- the button for larger -->
  <a class="larger fr" href="javascript: massimizza();">+ Massimizza</a>
  <!-- clear float -->
  <div class="clear"></div>
  <!-- countdown -->
  <p class="countdown">
    SCADE TRA:
    <strong>00</strong>m,
    <strong>00</strong>s,
    <strong class="smaller">000</strong>ms
  </p>
  <!-- price -->
  <p class="price">Extra Sconto <strong>-5€</strong></p>
  <!-- buybtn -->
  <a class="buybtn"
     href="https://www.iobit.com/buy.php?product=it-asc13sdpf3pc1699&ref=it_asc133pcsdpf1699purchase1807c<?php echo $refStr;?>&refs=it_purchase_asc"
     onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3PCsdpf1807cit')">
    <span>Approfittane Ora</span>
  </a>
  <!-- pop-small Esaurito -->
  <img class="esaurito" src="<?php echo $pResUrl;?>images/pop-small-esaurito.png" alt="">
</div>
<!-- pop-small end -->

<!-- add javascript -->
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
<script src="<?php echo getStaticUrl('script/TweenMax.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script>
  //pop content
  var sconto_30 = {
    imgUrl: "<?php echo getStaticUrl('images/pop-off-3.png')?>",
    _href: "https://www.iobit.com/buy.php?product=it-asc131pc1799&ref=it_asc131pc1799purchase1807<?php echo $refStr;?>&refs=it_purchase_asc&tw=-8",
    _ga: "ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1PC1807a-it')",
    price1: "€29,99",
    price2: "€17,99",
  };
  var sconto_50 = {
    imgUrl: "<?php echo getStaticUrl('images/pop-off-5.png')?>",
    _href: "https://www.iobit.com/buy.php?product=it-asc13sdpf3pc2199&ref=it_asc133pcsdpf2199purchase1807<?php echo $refStr;?>&refs=it_purchase_asc&tw=-8",
    _href1: "https://www.iobit.com/buy.php?product=it-asc13sdpf3pc1699&ref=it_asc133pcsdpf1699purchase1807a<?php echo $refStr;?>&refs=it_purchase_asc&tw=-8",
    _href2: "https://www.iobit.com/buy.php?product=it-asc13sdpf3pc1699&ref=it_asc133pcsdpf1699purchase1807b<?php echo $refStr;?>&refs=it_purchase_asc&tw=-8",
    _href3: "https://www.iobit.com/buy.php?product=it-asc13sdpf3pc1699&ref=it_asc133pcsdpf1699purchase1807c<?php echo $refStr;?>&refs=it_purchase_asc&tw=-8",
    _ga: "ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3PCsdpf1807ait')",
    _ga1: "ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3PCsdpf1807ait')",
    _ga2: "ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3PCsdpf1807bit')",
    _ga3: "ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3PCsdpf1807cit') ",
    off: "5",
    price1: "€119,93",
    price2: "€21,99",
    price3: "16,99"
  };
</script>
</body>
</html>