<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}

$viewNum=rand(235,458);

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
include $pRootUrl.'include/common.inc.php';
?>
<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Offerta Speciale - Sconti fino all’85% su IObit Uninstaller PRO</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700" rel="stylesheet">
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
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com/it/index.php" target="_blank">IObit</a>
      <div class="title">
        <h1>OFFERTA LAMPO</h1>
        <p>Tutti programmi inutili, spazzati via con un solo clic!</p>
      </div>
      <div class="clearfix">
        <div class="offer">
          <img src="<?php echo getStaticUrl('images/iu-three-box.png')?>" alt="IObit Uninstaller PRO"/>
          <b class="off six">-60%</b>
          <div class="price">
            <p class="name">1 Anno / <b>3</b> PC</p>
            <p><strong>15,99€</strong> <del>39,99€</del></p>
            <a class="buybtn hollow"
               href="https://www.iobit.com/buy.php?product=it-iu93pc1599&ref=it_iu93pc1599purchase2003<?php echo $refStr;?>&refs=it_purchase_iu"
               onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase3pc2003-it');"
               >
              ACQUISTA ORA  
            </a>
          </div>
        </div>
        <div class="offer bigbox">
          <img src="<?php echo getStaticUrl('images/iu-gift-box.png')?>" alt="IObit Uninstaller PRO"/>
          <b class="off">-85%</b>
          <div id="topcount" class="countdown"><span>Scade tra:</span> <b>14</b> Min: <b>00</b> Sec: <b>00</b> Ms</div>
          <div class="price">
            <p class="name">1 Anno / <b>3</b> PC + REGALI GRATIS</p>
            <p><strong>15,99€</strong> <del>109,93€</del></p>
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=it-iu93pcsdpf1599&ref=it_iu93pcsdpf1599purchase2003<?php echo $refStr;?>&refs=it_purchase_iu"
               onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase3pcsdpf2003-it');">
              APPROFITTANE ORA
            </a>
          </div>
          <p class="gift"><i class="all-icons"></i> <b class="viewNum"><?php echo $viewNum; ?></b> utenti stanno visualizzando</p>
          <!-- <span class="soldwords">ESAURITO</span> -->
        </div>
      </div>
      <img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/>
    </div>
  </div>
  <!-- banner end -->

  <!-- benfits start -->
  <div class="benfits">
    <div class="wrapper">
      <h2>Può fare molto di più che rimuovere<br> semplicemente i programmi</h2>
      <div class="clearfix">
        <div class="showcase fl">
          <div class="inner">
            <ul class="screenshot">
              <li>
                <img src="<?php echo getStaticUrl('images/screenshot-00.png')?>" alt="">
              </li>
              <li>
                <img src="<?php echo getStaticUrl('images/screenshot-01.png')?>" alt="">
              </li>
              <li>
                <img src="<?php echo getStaticUrl('images/screenshot-02.png')?>" alt="">
              </li>
              <li>
                <img src="<?php echo getStaticUrl('images/screenshot-03.png')?>" alt="">
              </li>
              <li>
                <img src="<?php echo getStaticUrl('images/screenshot-04.png')?>" alt="">
              </li>
            </ul>
          </div>
          <ul class="list-icon">
            <li class="active"></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
          </ul>
        </div>
        <div class="detail-list fr">
          <dl>
            <dt><i class="benfits01"></i></dt>
            <dd>
              <h3>Ripristina Automaticamente</h3>
              <p>
                Crea un punto di ripristino, quando rileva le modifiche del sistema da un programma, le ripristina automaticamente dopo aver disinstallato il programma.
              </p>
            </dd>
          </dl>
          <dl>
            <dt><i class="benfits02"></i></dt>
            <dd>
              <h3>Navigazione Veloce e Sicura</h3>
              <p>
                Rileva automaticamente plug-in maligni o annunci pubblicitari per garantire una navigazione più sicura e senza interruzioni.
              </p>
            </dd>
          </dl>
          <dl>
            <dt><i class="benfits03"></i></dt>
            <dd>
              <h3>Disinstalla i Plugin Maligni</h3>
              <p>
                Rileva e disinstalla i plugin pubblicitari maligni che iniettano annunci o link dannosi nelle pagine visualizzate.
              </p>
            </dd>
          </dl>
          <dl class="last">
            <dt><i class="benfits04"></i></dt>
            <dd>
              <h3>Aggiornamento di Software</h3>
              <p>Aggiorna tutti i software importanti con un solo clic.</p>
            </dd>
          </dl>
          <a class="textlink" href="Javascript:void(0);">Differenze tra la versione FREE e PRO >></a>
        </div>
      </div>
    </div>
  </div>
  <!-- benfits end -->

  <!-- giftbox start -->
  <div class="giftbox wrapper">
    <div class="gift-title">
      <h2>PAGHI UNO A PREZZO SCONTATO E OTTIENI TRE</h2>
      <p>Goditi il pacchetto regalo a tempo limitato, affrettati!</p>
    </div>
    <div class="clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/sd-box.png')?>" alt="Smart Defrag 6 PRO" /></dt>
        <dd>
          <h3>Smart Defrag 6 PRO</h3>
          <b>0€</b> <del>29,99€</del>
          <p>Offre la migliore deframmentazione deldisco e accelera al massimo l'hard driver!</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/pf-box.png')?>" alt="Protected Folder" /></dt>
        <dd>
          <h3>Protected Folder</h3>
          <b>0€</b> <del>39,95€</del>
          <p>Protegge i tuoi file dagli attacchi maligni assicura la tua privacy al 100%!</p>
        </dd>
      </dl>
    </div>
    <a class="buybtn"
       href="https://www.iobit.com/buy.php?product=it-iu93pcsdpf1599&ref=it_iu93pcsdpf1599purchase2003<?php echo $refStr;?>&refs=it_purchase_iu"
       onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase3pcsdpf2003-it');">
      APPROFITTANE ORA
    </a>
    <div id="giftcount" class="countdown"><b>14</b> Min: <b>00</b> Sec: <b>00</b> Ms</div>
  </div>
  <!-- giftbox end -->

  <!-- awards -->
  <div class="awards wrapper">
    <div class="wrapper">
      <h2>Raccomandato e premiato dai media mondiali</h2>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt="">
    </div>
  </div>
  <!-- end awards -->

  <!-- reviews start -->
  <div class="review wrapper">
    <div class="content">
      <dl class="active">
        <dt><h3>Recensione dei Media</h3></dt>
        <dd>
          Questo strumento di disinstallazione facile da usare e informativo pulisce, configura, e ottimizza il tuo PC. Gli utenti possono scaricarlo in pochissimi minuti. Questo strumento di disinstallazione può essere classificato come il miglior programma di disinstallazione e permette agli utenti di disinstallare all'ingrosso. Esso offre agli utenti di fare una "Scansione Approfondita" per andare più a fondo e trovare gli avanzi. La prestazione la stessa rende questo piccolo strumento vale la pena tenere.
        </dd>
      </dl>
      <dl>
        <dt><h3>Recensioni degli Utenti</h3></dt>
        <dd>
          Ho usato i programmi IObit per anni con grandi risultati! Ed è per questo che resto con i prodotti IObit. In passato, ho riparato e aggiustato laptop e cellulari (Android) a parenti ed amici, lascio sempre i prodotti IObit installati e dico loro di lasciar fare tutto ai programmi che sistemeranno e velocizzeranno automaticamente il loro laptop / computer / cellulare ! :) Consiglio vivamente Iobit Uninstaller (e l'ultima versione beta) in quanto è un programma affidabile e sicuro che disinstalla i programmi testardi! La cosa più importante è rimuovere il codice "nascosto" che il programmatore voleva lasciare, perché è quello che consente la re-installazione degli annunci! TUTTI i prodotti IObit sono sicuri e facili da usare e la maggior parte si prende davvero cura del tuo PC.
        </dd>
      </dl>
      <dl>
        <dt><h3>Recensioni degli Utenti</h3></dt>
        <dd>
          Trovo che il programma di disinstallazione IObit sia eccellente da usare in quanto ha tutto ciò che si possa desiderare. Mi piace il fatto che disinstalla tutti i frammenti residui. Ha anche un programma di aggiornamento che ti ricorda quando è necessario aggiornare i programmi e il fatto che disinstalla i programmi batch lo rende davvero il numero uno sul mercato. È un software fondamentale per mantenere il computer a posto.
        </dd>
      </dl>
      <dl>
        <dt><h3>Recensioni degli Utenti</h3></dt>
        <dd>
          IObit Uninstaller è il miglior software per rimuovere programmi sul computer, è veloce e molto efficace, niente a che vedere con il programma di disinstallazione di base di Windows, infatti pulisce a fondo tutti i residui del programma, evitando i rallentamenti nel computer. Lo uso da alcuni mesi e non so come farei senza, lo consiglio ai miei amici e alla mia famiglia. Grazie a IObit Uninstaller, è fantastico!
        </dd>
      </dl>
      <dl>
        <dt><h3>Recensioni degli Utenti</h3></dt>
        <dd>
          IObit Unisntaller migliora se stesso con ogni aggiornamento, l’ho già usato per 3 anni. Funziona molto veloce e ha un’interfaccia semplice. Alcune funzioni che uso regolarmente sono Batch Uninstaller, Scansione Approfondita, Distruggi File e Installati di Recente, il quale offre un’accesso veloce ai programmi installati di recente che non mi piacciono o non funzionano correttamente. È anche facile da controllare i tuoi elementi d’avvio per rendere più veloce l’avvio del tuo PC.
        </dd>
      </dl>
    </div>
    <ul class="users clearfix">
      <li class="current">
        <div class="pic"><img src="<?php echo getStaticUrl('images/makeuseof.png')?>" alt="MakeUseOf">
        </div>
        <p>MakeUseOf</p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo getStaticUrl('images/jeff-a-watts.png')?>" alt="Jeff A Watts"></div>
        <p>Jeff A Watts</p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo getStaticUrl('images/lynett-van-niekerk.png')?>" alt="Lynette van Niekerk"></div>
        <p>Lynette van Niekerk</p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo getStaticUrl('images/paulo-martins.png')?>" alt="Paulo Martins"></div>
        <p>Paulo Martins</p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo getStaticUrl('images/lovro-zuzic.png')?>" alt="Lovro Žužić"></div>
        <p>Lovro Žužić</p>
      </li>
    </ul>
  </div>
  <!-- reviews end -->

  <!-- compare start -->
  <div class="compare wrapper" id="compare">
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
      <thead>
        <tr>
          <th class="text">Quali sono i vantaggi della versione PRO?</th>
          <th class="itemb">
            <div class="box">
              IObit Uninstaller 9<br> FREE
              <span></span>
            </div>
          </th>
          <th class="space"></th>
          <th class="itema">
            <div class="box">
              IObit Uninstaller 9<br> PRO
              <span></span>
            </div>
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="virtue">
            <img class="sup" src="<?php echo getStaticUrl('images/icons-01.png')?>" alt="">
            <p>
              Disinstalla i programmi dall'icona sul desktop, dalla finestra aperta o dall'icona della<br> barra delle applicazioni <span class="all-icons">Migliorato</span>
            </p>
          </td>
          <td class="itemb"><i class="all-icons">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="virtue">
            <img src="<?php echo getStaticUrl('images/icons-02.png')?>" alt="">
            <p>Rimuove plugin e estensioni in Edge, Chrome, IE, Firefox, ecc.</p>
          </td>
          <td class="itemb"><i class="all-icons">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="virtue">
            <img src="<?php echo getStaticUrl('images/icons-04.png')?>" alt="">
            <p>
              Rileva e disinstalla i programmi di terze parti insieme al freeware <span class="all-icons">Migliorato</span>
            </p>
          </td>
          <td class="itemb"><i class="all-icons close">X</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="virtue">
            <img class="sup" src="<?php echo getStaticUrl('images/icons-12.png')?>" alt="">
            <p>
              Ripristina automaticamente le modifiche che un programma ha apportato <br> al sistema dopo averlo disinstallato <span class="all-icons nuo">Nuovo</span>
            </p>
          </td>
          <td class="itemb"><i class="all-icons close">X</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="virtue five">
            <img src="<?php echo getStaticUrl('images/icons-05.png')?>" alt="">
            <p>
              Elimina automaticamente gli avanzi di file che le altre utilità non sono riuscite<br> a rimuovere <span class="all-icons">Migliorato</span>
            </p>
          </td>
          <td class="itemb"><i class="all-icons close">X</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="virtue">
            <img src="<?php echo getStaticUrl('images/icons-06.png')?>" alt="">
            <p>
              Identifica e rimuove i plugin maligni <span class="all-icons ra">Migliorato 2volte</span>
            </p>
          </td>
          <td class="itemb"><i class="all-icons close">X</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="virtue">
            <img src="<?php echo getStaticUrl('images/icons-07.png')?>" alt="">
            <p>
              Identifica e rimuove i plugin pubblicitari <span class="all-icons ra">Migliorato 2volte</span>
            </p>
          </td>
          <td class="itemb"><i class="all-icons close">X</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="virtue">
            <img src="<?php echo getStaticUrl('images/icons-08.png')?>" alt="">
            <p>
              Aggiorna tutti i software importanti con un solo clic <span class="all-icons ra">Migliorato 2volte</span>
            </p>
          </td>
          <td class="itemb"><i class="all-icons close">X</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="virtue">
            <img src="<?php echo getStaticUrl('images/icons-09.png')?>" alt="">
            <p>Aggiornamento automatico alla versione più recente</p>
          </td>
          <td class="itemb"><i class="all-icons close">X</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="virtue">
            <img src="<?php echo getStaticUrl('images/icons-10.png')?>" alt="">
            <p>24/7 Supporto tecnico gratuito</p>
          </td>
          <td class="itemb"><i class="all-icons close">X</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="virtue radius"></td>
          <td class="itemb radius"></td>
          <td class="space"></td>
          <td class="itema radius"> <span class="shadow"></span></td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- compare end -->

  <!-- bottombuy start -->
  <div class="bottombuy">
    <div class="wrapper clearfix">
      <div class="imgbox fl">
        <img class="gift on" src="<?php echo getStaticUrl('images/iu-gift-box.png')?>" alt="" />
        <img class="three" src="<?php echo getStaticUrl('images/iu-three-box.png')?>" alt="" />
      </div>
      <ul class="changelist fl">
        <li class="gift on" data-num="1">
          <em class="all-icons"></em>
          <b>1 ANNO / 3 PC + <span><i class="all-icons"></i> REGALI  GRATIS</span></b>
          <strong>-85%</strong>
          <!-- <span class="soldwords">ESAURITO</span> -->
        </li>
        <li class="three" data-num="0">
          <em class="all-icons"></em>
          <b>1 ANNO / 3 PC</b>
          <strong>-60%</strong>
        </li>
      </ul>
      <div class="price fr">
        <p><strong>15,99€</strong> <del>103,93€</del></p>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=it-iu93pcsdpf1599&ref=it_iu93pcsdpf1599purchase2003<?php echo $refStr;?>&refs=it_purchase_iu"
           onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase3pcsdpf2003-it');">
          ACQUISTA ORA
        </a>
      </div>
    </div>
  </div>
  <!-- bottombuy end -->

  <!-- service start -->
  <div class="service wrapper clearfix">
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
      <dd><h4>Garanzia di Soddisfazione</h4></dd>
      <dd>Garanzia di Soddisfazione</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/godaddy-secure.png')?>" alt=""/></dt>
      <dd><h4>Pagamento Assicurato</h4></dd>
      <dd>Tutti i metodi di pagamento<br> sono 100% verificati e sicuri
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/cart.png')?>" alt="" /></dt>
      <dd><h4>Attivazione Veloce</h4></dd>
      <dd>Dopo il tuo acquisto, riceverai il codice licenza in pochi minuti tramite la mail</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/24hours.png')?>" alt="" /></dt>
      <dd><h4>Servizio Clienti</h4></dd>
      <dd>24/7 Supporto tecnico gratuito</dd>
    </dl>
  </div>
  <!-- service end -->

  <!-- annotation start -->
  <dl class="annotation wrapper">
    <dt>Note:</dt>
    <dd>1*.Tali promozioni sono soggette alle modifiche senza preavviso, periodicamente alla nostra esclusiva discrezione.</dd>
    <dd>2*.I dati potrebbero variare in base al sistema o computer.</dd>
  </dl>
  <!-- annotation end -->

  <!-- footer start -->
  <div class="footer">Copyright © 2005 - <?php echo date('Y')?> IObit. Tutti i diritti riservati</div>
  <!-- footer end -->

<script>var _imgsrc = "<?php echo getStaticUrl('images/iu-sold-box.png')?>";</script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>