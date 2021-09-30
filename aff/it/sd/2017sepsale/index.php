<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../../'; 
  }
  $packsCount=299;
  include $pRootUrl.'include/common.inc.php';
  include $pRootUrl.'callback.php';
  if (empty($_GET['ref'])) $_GET['ref'] = 'itaff_sd5_2017sepsale';
?>
<!DOCTYPE html>
<html lang="it">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Offerta Esclusiva, Sconti fino al 70% su Smart Defrag PRO – Offerta Speciale di IObit. Deframmentazione del disco intelligente e sicura.</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Montserrat:400,600'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
  <script>
    function getPacksNum(){
      $.ajax({
        type: "GET",
        url: "<?php echo $pRootUrl;?>callback.php",
        data: "action=getPacksNum&packsCount=<?php echo $packsCount;?>r="+Math.random(),
        success: function(packs){
          $('.packsNum').html(packs);
          setTimeout('getPacksNum()', 10000);
        }
      });
    }
    setTimeout('getPacksNum()', 10000);
  </script>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="http://www.iobit.com" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit" />
      </a>
      <div class="title">
        <h1>SOTTOCOSTO 70% IN MENO </h1>
        <h2>Super Offerta Compra 2, paghi 1 Offerta DI FINE SERIE</h2>
      </div>
      <div class="offer clearfix">
        <dl class="first">
          <dt><img src="<?php echo getStaticUrl('images/sdbox.png')?>" alt="" /></dt>
          <dd><strong>€17,99 </strong> <del>€29,99</del></dd>
          <dd class="name"><i class="all-icons"></i>1 Anno / 3 PC</dd>
          <dd class="last">Massima prestazione del disco rigido e velocità del PC</dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/pfbox.png')?>" alt="" /></dt>
          <dd><strong>€0 </strong> <del>€39,95</del></dd>
          <dd class="name"><i class="all-icons"></i>1 Anno / 1 PC</dd>
          <dd class="last">Migliore protezione dei dati personali</dd>
        </dl>
        <div class="fr informa">
          <img src="<?php echo getStaticUrl('images/sdpfbox.png')?>" alt="" />
          <div class="price">
            <p><strong>€17,99</strong> <span><del>€69,94</del> <b>Risparmi €51,95</b></span></p>
            <a class="buybtn" 
               href="http://www.iobit.com/buy.php?product=it-sd53pcpf1799_aff&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff'] ?>&refs=it_purchase_sd&tw=-8" onclick="ga('send', 'event', 'sdbuy', 'buy', 'itaffsd52017sepsale')">
              ACQUISTA ORA
            </a>
            <p>Solo <span class="packsNum"><?php echo $packsNum;?></span> pezzi disponibili!</p>
          </div>
        </div>
      </div>
      <div class="fly"></div>
    </div>
  </div>
  <!-- banner end -->

  <!-- container start -->
  <!-- payments start -->
  <div class="payments">
    <div class="wrapper"><img src="<?php echo getStaticUrl('images/payments.png')?>" alt="" /></div>
  </div>
  <!-- payments end -->

  <!-- intro start -->
  <div class="intro wrapper">
    <h2>Massimizza la prestazione del tuo disco rigido e velocizza il tuo PC - <span>Smart Defrag PRO!</span></h2>
    <div class="cont clearfix">
      <img class="fl" src="<?php echo getStaticUrl('images/computer.png')?>" alt="" />
      <div class="fl">
        <h3>Perché Smart Defrag PRO?</h3>
        <ul>
          <li><i class="all-icons"></i>Strumento di deframmentazione con oltre 5.000.000 di utenti in tutto il mondo.</li>
          <li><i class="all-icons"></i>Deframmentazione del disco sicura e automatica.</li>
          <li><i class="all-icons"></i>Massima prestazione del disco rigido e l’accesso più rapido ai dati.</li>
          <li><i class="all-icons"></i>Avvio del sistema e giochi fino al 100% più veloce.</li>
        </ul>
      </div>
    </div>
  </div>
  <!-- intro end -->

  <!-- awards start -->
  <div class="awards">
    <div class="wrapper">
      <h2>Riconosciuto e Premiato dai media seguenti</h2>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt="" />
    </div>
  </div>
  <!-- awards end -->

  <div class="wrapper">
    <!-- review start -->
    <div class="review">
      <div class="content">
        <dl class="active">
          <dt>
          <h3>Recensioni dei Media</h3></dt>
          <dd>
            <h4>
              "Il nuovo Smart Defrag si mette in luce per una migliorata efficienza complessiva rispetto al suo predecessore."
            </h4>
          </dd>
          <dd>
            "Smart Defrag è stato migliorato per consumare meno risorse del sistema in cui viene installato. In questo modo potrà svolgere tutte le operazioni senza andare a rallentare le normali attività del computer. Smart Defrag non può certo mancare nella collezioni di software presenti sul proprio computer. Testato a fondo su di un computer Windows 8.1, ha dato ottima prova di se offrendo grande velocità ed efficacia."
          </dd>
        </dl>
        <dl>
          <dt>
          <h3>Recensioni degli Utenti</h3></dt>
          <dd>
            <h4>"Dopo aver usato questo software fantastico, il mio desktop e il mio computer portatile rimangono sempre veloci con tanti spazi liberi."</h4>
          </dd>
          <dd>
            "Sono un utente di Smart Defrag per tanti anni. Dopo aver usato questo software fantastico, il mio desktop e il mio computer portatile rimangono sempre veloci con tanti spazi liberi. Insieme con il Advanced SystemCare Ultimate, potresti ottenere una protezione completa che mantiene il sistema sempre aggiornato, veloce e sicuro. Potresti utilizzarlo tutti i giorni senza nessun bisogno di aspettare (PC si chiude in automatico) a mantenere il sistema all'ottima condizione, anche se non tu sia un esperto tecnico!"
          </dd>
        </dl>
        <dl>
          <dt>
          <h3>Recensioni degli Utenti</h3></dt>
          <dd>
            <h4>
              "È facile da usare, un'utilità che si deve avere per il disco rigido o SSD."
            </h4>
          </dd>
          <dd>
            "Ho eseguito una combinazione di RAID 0 SSD e RAID 0 HDD e utilizzo il Smart Defrag Pro per analizzare, deframmentare e mantenere i miei dischi in esecuzione alla massima prestazione. Come tutti i software di IObit, Smart Defrag è molto facile da installare, usare e molto affidabile. Basta impostarlo e lasciarlo. Smart Defrag ha una piccola foot print memoria in modo da non rallentare il sistema. Decisamente consigliato!"
          </dd>
        </dl>
        <dl>
          <dt>
          <h3>Recensioni degli Utenti</h3></dt>
          <dd>
            <h4>
              "Smart Defrag è uno strumento di deframmentazione molto efficiente."
            </h4>
          </dd>
          <dd>
            "Smart Defrag è uno strumento di deframmentazione molto efficiente, funziona silenziosamente in background quando il computer è inattivo e non ti disturba mai. I dischi sono sempre stati deframmentati e così permette l’accesso rapido ai file e riduce i logori dei dischi. Smart Defrag è il migliore deframmentatore che ho usato, senza dubbio, raccomanderò alla mia famiglia e gli miei amici."
          </dd>
        </dl>
      </div>
      <ul class="users clearfix">
        <li>
          <div class="pic"><img src="<?php echo getStaticUrl('images/html-it.png')?>" alt="HTML.it">
          </div>
          <p>HTML.it</p>
        </li>
        <li>
          <div class="pic"><img src="<?php echo getStaticUrl('images/amnon.png')?>" alt="Amnon"></div>
          <p>Amnon</p>
        </li>
        <li class="active">
          <div class="pic"><img src="<?php echo getStaticUrl('images/hans.png')?>" alt="Hans">
          </div>
          <p>Hans</p>
        </li>
        <li>
          <div class="pic"><img src="<?php echo getStaticUrl('images/edward-lLee-ah-yen.png')?>" alt="Edward Lee Ah Yen">
          </div>
          <p>Edward Lee Ah Yen</p>
        </li>
      </ul>
    </div>
    <!-- review end -->

    <!-- comparison start -->
    <div class="comparison" id="compare">
      <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <thead>
          <tr>
            <th class="text" colspan="2">La comparazione dei prodotti:</th>
            <td class="space"></td>
            <th class="itema">
              Smart Defrag PRO
              <p>1 Anno, 3 PC + Regalo</p>
              <a class="buybtn" 
                 href="http://www.iobit.com/buy.php?product=it-sd53pcpf1799_aff&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff'] ?>&refs=it_purchase_sd&tw=-8" onclick="ga('send', 'event', 'sdbuy', 'buy', 'itaffsd52017sepsale')">
                ACQUISTA ORA
              </a>
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_01.png')?>" alt="" /></td>
            <td class="virtue">Deframmentazione ed ottimizzazione di base del disco rigido</td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_02.png')?>" alt="" /></td>
            <td class="virtue">Fino al 200% più rapida la velocità dell'accesso dei file</td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_03.png')?>" alt="" /></td>
            <td class="virtue">Boot Time Deframmentazione per l’avvio di PC più veloce</td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt="" /></td>
            <td class="virtue">Deframmenta i file frammentati in modo automatico e intelligente</td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_05.png')?>" alt="" /></td>
            <td class="virtue">Personalizza il mode di deframmentazione e i dischi o file da deframmentare  </td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_06.png')?>" alt="" /></td>
            <td class="virtue">DMA applicata per un trasferimento dei dati più rapido e più stabile</td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_07.png')?>" alt="" /></td>
            <td class="virtue">Nessuna interruzione durante lavoro o gioco con Mode Silenzioso</td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt="" /></td>
            <td class="virtue">Ottima esperienza di gioco con Ottimizzazione di Gioco</td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_11.png')?>" alt="" /></td>
            <td class="virtue">Operazione pianificata è stata supportata per la deframmentazione in tempo libero  </td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_09.png')?>" alt="" /></td>
            <td class="virtue">Aggiornamento automatico alla versione più recente</td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_10.png')?>" alt="" /></td>
            <td class="virtue">Supporto tecnico in linea entro 24 ore</td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <th class="text" colspan="2"></th>
            <td class="space"></td>
            <th class="itema">
              <p>1 Anno, 3 PC + Regalo</p>
              <p><strong>€17,99 </strong> <del>€69,94</del></p>
              <a class="buybtn" 
                 href="http://www.iobit.com/buy.php?product=it-sd53pcpf1799_aff&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff'] ?>&refs=it_purchase_sd&tw=-8" onclick="ga('send', 'event', 'sdbuy', 'buy', 'itaffsd52017sepsale')">
                ACQUISTA ORA
              </a>
            </th>
          </tr>
        </tfoot>
      </table>
    </div>
    <!-- comparison end -->

    <!-- annotation start -->
    <dl class="annotation">
      <dt>Note:</dt>
      <dd>
        1*.Tali promozioni sono soggette alle modifiche senza preavviso, periodicamente alla nostra esclusiva discrezione.
      </dd>
      <dd>2*.Data potrebbe variare in base al sistema o computer.</dd>
    </dl>
    <!-- annotation end -->

    <!-- footer start -->
    <div class="footer">Copyright ©2005 - <?php echo date('Y')?> IObit. Tutti i diritti riservati</div>
    <!-- footer end -->
  </div>
  <!-- container end -->

  <!-- backtotop start -->
  <div class="backtotop">
    <a href="javascript: void(0);"><img src="<?php echo getStaticUrl('images/backtotop.png')?>" alt="" /></a>
    <p>Torna Su</p>
  </div>
  <!-- backtotop end -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>