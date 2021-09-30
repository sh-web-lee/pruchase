<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

$viewNum=rand(116,198);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}

if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'itiujunerc_p' . $date;
  $c_name_t='itiujunerc_t' . $date;
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=rand(49,58);
    setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
    setcookie($c_name_t,$totalNum, time() + 3600 * 24 *2);
  } else {
    if (intval($_COOKIE[$c_name]) <= 0) {
      $packsNum = 0;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    } else {
      $packsNum = $_COOKIE[$c_name] - 1;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    }
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
if(!empty($_GET['ver'])){
    $ver = explode('.', $_GET['ver']);
    $refStr .= ('-' . $ver[0] . $ver[1]);
}
$refStr.=empty($_GET['user'])?'':('-u'.$_GET['user']);
$refStr.=empty($_GET['st'])?'':('-'.$_GET['st']);
?>
<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ottieni l'ultimo IObit Uninstalller PRO a €0</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca&display=swap" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public']; ?>
  <?php echo $gJavascript['head']; ?>
</head>

<body>
<!-- container start -->
<div class="container">
  <!-- banner start -->
  <div class="banner" data-name="animation">
    <div class="wrapper">
      <!-- top -->
      <div class="top clearfix">
        <!-- logo -->
        <a class="logo" href="https://www.iobit.com/it/index.php" target="_blank">IObit</a>
        <div class="record-box">
          <i></i>
          Registreremo automaticamente le modifiche apportate al sistema da ogni installazione
        </div>
        <!-- icon -->
        <div class="icon"><img src="<?php echo getStaticUrl('images/iu-icon.png')?>" alt=""> IObit Uninstaller 10</div>
      </div>
      <!-- content -->
      <div class=" content clearfix">
        <!-- left-img -->
        <div class="left-img">
          <img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="" class="iu-box" data-name="default">
          <img src="<?php echo getStaticUrl('images/banner-icon01.png')?>" alt="" class="iu-icon01" data-name="default">
          <img src="<?php echo getStaticUrl('images/banner-icon02.png')?>" alt="" class="iu-icon02" data-name="default">
        </div>
        <!-- right -->
        <div class="right fr">
          <h1 data-name="default">Benvenuto alla nostra prevendita</h1>
          <h2 data-name="default">Ottieni la versione PRO per €0</h2>
          <h3 data-name="default"> Limitato per i primi 500 utenti al giorno prima del 25 agosto</h3>
          <!-- number -->
          <div class="number" data-name="default">
            <div id="reduce" class="reduceNum">
              <div class="listbox"><span class="list"><b>0</b></span></div>
              <div class="listbox"><span class="list"><b>5</b></span></div>
              <div class="listbox"><span class="list"><b>0</b></span></div>
            </div>
            dei 500 rimasti
            <div class="bar">
              <span></span>
            </div>
          </div>
          <!-- message -->
          <div class="price" data-name="default">
            <!-- price -->
            <strong>€0 <sup>*</sup></strong>
            <!-- buybtn -->
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=it-iu10preorder&ref=it_iu10preorderrc<?php echo $refStr; ?>&aff=<?php echo $_GET['aff']?>&refs=it_purchase_iu"
               onclick="ga('send', 'event', 'iubuy', 'buy', 'iu10predorderrc-it');">
              OTTIENILO ORA
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- feature start -->
  <div class="feature">
    <div class="wrapper">
      <!-- title -->
      <h2>Rimuove i programmi indesiderati e le tracce in modo facile e veloce</h2>
      <h3>IObit Uninstaller 10 PRO rende la disinstallazione più facile, pulita e veloce.</h3>
      <!-- content -->
      <div class="content">
        <!-- feature-nav -->
        <ul class="feature-nav" id="barUl">
          <li class="active one">Più facile</li>
          <li class="two">Più pulito</li>
          <li class="three">Più sicuro</li>
        </ul>
        <!-- feature-container -->
        <div class="feature-container clearfix">
          <!-- interface -->
          <div class="interface-list fl">
            <!-- Easier -->
            <div class="interface easier">
              <span>Disinstalla</span>
              <ul>
                <li class="act05"><img src="<?php echo getStaticUrl('images/feature-easier-icon05.png')?>" alt=""></li>
                <li class="act04"><img src="<?php echo getStaticUrl('images/feature-easier-icon04.png')?>" alt=""></li>
                <li class="act03"><img src="<?php echo getStaticUrl('images/feature-easier-icon03.png')?>" alt=""></li>
                <li class="act02"><img src="<?php echo getStaticUrl('images/feature-easier-icon02.png')?>" alt=""></li>
                <li class="act01"><img src="<?php echo getStaticUrl('images/feature-easier-icon01.png')?>" alt=""></li>
              </ul>
            </div>

            <!-- Cleaner -->
            <div class="interface cleaner">
              <span></span>
              <div class="picture"><span></span></div>
              <div class="xprogress"><span></span></div>
            </div>

            <!-- Safer -->
            <div class="interface safer">
              <ul>
                <li class="act one">
                  Barre degli strumenti e plugin dannosi
                </li>
                <li class="act two">
                  Barre degli strumenti e plugin pubblicitari
                </li>
                <li class="three">
                  Barre degli strumenti e plugin affidabili
                </li>
              </ul>
            </div>
          </div>

          <!-- details -->
          <div class="detail-list fr" id="wheelUl">
            <!-- one -->
            <div class="detail">
              <h3>Disinstalla qualsiasi programmi, plugin e app di Windows</h3>
              <ul>
                <li class="one">Programmi che non possono essere disinstallati dai metodi convenzionali.</li>
                <li class="two">Software in bundle installati insieme a programmi di terze parti.</li>
                <li class="three">Estensioni del browser installate senza la tua autorizzazione.</li>
                <li class="four">App di Windows preinstallate che non desideri.</li>
              </ul>
            </div>

            <!-- two -->
            <div class="detail">
              <h3>Pulisce le tracce dei programmi disinstallati</h3>
              <ul>
                <li class="one">Residui delle disinstallazioni standard.</li>
                <li class="two">Avanzi dei programmi già disinstallati.</li>
                <li class="three">File e registri che non possono essere rimossi dalle disinstallazioni standard.</li>
              </ul>
            </div>

            <!-- three -->
            <div class="detail">
              <h3><br>Riduce il rischio per la sicurezza</h3>
              <ul>
                <li class="one">Identifica i plugin e valuta quali siano quelli sicuri da <br> lasciare sul tuo PC.</li>
                <li class="two">Aggiorna i programmi obsoleti per evitare falle di <br> sicurezza nel tuo PC.</li>
              </ul>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- feature end -->

  <!-- comparison start -->
  <div class="comparison">
    <div class="wrapper">
      <h2>Comparazione tra le due versioni</h2>
      <!-- table -->
      <table>
        <thead>
          <tr>
            <th colspan="2"></th>
            <th class="free" valign="bottom"><div>La tua versione attuale </div></th>
            <th class="pro"><div>Versione PRO</div></th>
          </tr>
        </thead>
        <tbody>
          <!-- 01 -->
          <tr>
            <td class="icon"><img src="<?php echo getStaticUrl('images/icons01.png')?>" alt=""></td>
            <td class="text">Disinstalla i programmi, plugin e app con 1 solo clic</td>
            <td class="free"><i class="all-icons yes">√</i></td>
            <td class="pro"><i class="all-icons">√</i></td>
          </tr>
          <!-- 02 -->
          <tr>
            <td class="icon"><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt=""></td>
            <td class="text">Scansiona i residui per la disinstallazione standard</td>
            <td class="free"><i class="all-icons yes">√</i></td>
            <td class="pro"><i class="all-icons">√</i></td>
          </tr>
          <!-- 03 -->
          <tr>
            <td class="icon"><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt=""></td>
            <td class="text">Pulizia approfondita dei file che non possono essere rimossi dalla disinstallazione standard</td>
            <td class="free"><i class="all-icons">×</i></td>
            <td class="pro"><i class="all-icons">√</i></td>
          </tr>
          <!-- 04 -->
          <tr>
            <td class="icon"><img src="<?php echo getStaticUrl('images/icons04.png')?>" alt=""></td>
            <td class="text">Rimuove i programmi che non possono essere disinstallati dai metodi convenzionali</td>
            <td class="free"><i class="all-icons">×</i></td>
            <td class="pro"><i class="all-icons">√</i></td>
          </tr>
          <!-- 05 -->
          <tr>
            <td class="icon"><img src="<?php echo getStaticUrl('images/icons05.png')?>" alt=""></td>
            <td class="text">Disinstalla i software in bundle installati insieme a programmi di terze parti</td>
            <td class="free"><i class="all-icons">×</i></td>
            <td class="pro"><i class="all-icons">√</i></td>
          </tr>
          <!-- 07 -->
          <tr>
            <td class="icon"><img src="<?php echo getStaticUrl('images/icons07.png')?>" alt=""></td>
            <td class="text">Pulisce in automatico i residui dei programmi già disinstallati</td>
            <td class="free"><i class="all-icons">×</i></td>
            <td class="pro"><i class="all-icons">√</i></td>
          </tr>
          <!-- 08 -->
          <tr>
            <td class="icon"><img src="<?php echo getStaticUrl('images/icons08.png')?>" alt=""></td>
            <td class="text">Identifica e rimuove i plugin maligni e pubblicitari</td>
            <td class="free"><i class="all-icons">×</i></td>
            <td class="pro"><i class="all-icons">√</i></td>
          </tr>
          <!-- 09 -->
          <tr>
            <td class="icon"><img src="<?php echo getStaticUrl('images/icons09.png')?>" alt=""></td>
            <td class="text">Aggiorna tutti i programmi importanti con 1 solo clic</td>
            <td class="free"><i class="all-icons">×</i></td>
            <td class="pro"><i class="all-icons">√</i></td>
          </tr>
          <!-- 10 -->
          <tr>
            <td class="icon"><img src="<?php echo getStaticUrl('images/icons10.png')?>" alt=""></td>
            <td class="text">Aggiorna automaticamente alla versione più recente</td>
            <td class="free"><i class="all-icons">×</i></td>
            <td class="pro"><i class="all-icons">√</i></td>
          </tr>
          <!-- 11 -->
          <tr>
            <td class="icon"><img src="<?php echo getStaticUrl('images/icons11.png')?>" alt=""></td>
            <td class="text">Supporto tecnico 24/7 gratuito su richiesta</td>
            <td class="free"><i class="all-icons">×</i></td>
            <td class="pro"><i class="all-icons">√</i></td>
          </tr>
        </tbody>
      </table>
      <!-- buybtn -->
      <div>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=it-iu10preorder&ref=it_iu10preorderrc<?php echo $refStr; ?>&aff=<?php echo $_GET['aff']?>&refs=it_purchase_iu"
           onclick="ga('send', 'event', 'iubuy', 'buy', 'iu10predorderrc-it');">
          <span>OTTIENI PRO PER €0</span>
        </a>
      </div>
    </div>
  </div>
  <!-- comparison end -->

  <!-- review start -->
  <div class="review">
    <div class="wrapper">
      <h2>È un programma di disinstallazione<br> di cui ti puoi fidare</h2>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/review-icon01.png')?>" alt=""></dt>
        <dd>
          <h3>50M+</h3>
          <p>Download</p>
        </dd>
      </dl>
      <dl class="center">
        <dt><img src="<?php echo getStaticUrl('images/review-icon02.png')?>" alt=""></dt>
        <dd>
          <h3>4.5+</h3>
          <p>Valutazione degli utenti</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/review-icon03.png')?>" alt=""></dt>
        <dd>
          <h3>1000+</h3>
          <p>Raccomandazioni dei media</p>
        </dd>
      </dl>
      <div class="review-box">
        <div class="box jeff">
          <h3>Recensioni degli Utenti</h3>
          <p>
            IObit Uninstaller ha fatto molta strada, l'ho usato per molto tempo, mi piace moltissimo, è molto accurato e migliora giorno dopo giorno. Sono molto soddisfatto, senza di lui non lo sarei. Se ancora non lo stai usando potresti provarlo, è 100 volte migliore rispetto a un anno fa. Pulisce tutta la spazzatura indesiderata del registro e lo fa anche molto bene.
          </p>
        </div>
        <div class="box">
          <h3>Recensioni degli Utenti</h3>
          <p>
            Questo programma mi ha permesso di risparmiare denaro. Prima di utilizzarlo, il mio computer era molto lento, non potevo usarlo per fare niente. Ora il mio computer è veramente pulito e grazie a questo programma è diventato molto più veloce. Sono riuscito a salvare il mio computer grazie a IObit Uninstaller. Grazie mille IObit, ti amo.
          </p>
        </div>
        <div class="box active">
          <h3>Recensioni dei Media</h3>
          <p>
            Se hai bisogno di un programma che ti consenta di disinstallare in modo pulito e completo i programmi e le applicazioni, avvia IObit Uninstaller. Questa utilità gratuita rende molto facile la rimozione delle app, inclusi file sparsi che spesso non vengono rimossi quando si utilizza Windows per eliminare i software dal disco rigido o dalla SSD.
          </p>
        </div>
        <div class="box">
          <h3>Recensioni degli Utenti</h3>
          <p>
            In passato ho usato diversi programmi di disinstallazione, tuttavia, una volta che ho iniziato a utilizzare IOBit Uninstaller dalla versione 7.0, non ho più utilizzato nessun'altra applicazione. Ha un'interfaccia facile da usare e fa il lavoro per cui è pensato alla massima perfezione. Ti aiuta a ripulire automaticamente il registro che altrimenti rimarrebbe stracolmo di avanzi e preserva così la salute del PC. La capacità di identificare Bundleware e rimuoverli è una grande funzionalità presente in IOBit Unistaller che non ha eguali.
          </p>
        </div>
        <div class="box">
          <h3>Recensioni degli Utenti</h3>
          <p>
            IObit Uninstaller trova nei miei browser dei plugin che non sapevo nemmeno esistessero. La pulizia dei file residui è ottima, non lascia alcun dato inutile del software disinstallato. Mi ricorda gli aggiornamenti disponibili per tutti i miei programmi. Complessivamente, le prestazioni del mio computer sono migliorate grazie a questo programma. È molto conveniente e facilmente gestibile, l’ho persino consigliato ai miei amici.
          </p>
        </div>
      </div>
      <ul>
        <li>
          <span><img src="<?php echo getStaticUrl('images/ivan.png')?>" alt="Ivan White"></span>
          <p>Ivan White</p>
        </li>
        <li>
          <span><img src="<?php echo getStaticUrl('images/ali.png')?>" alt=" Ali Tekin"></span>
          <p> Ali Tekin</p>
        </li>
        <li class="active">
          <span><img src="<?php echo getStaticUrl('images/pcgm.png')?>" alt="PC Magazine"></span>
          <p>PC Magazine</p>
        </li>
        <li>
          <span><img src="<?php echo getStaticUrl('images/samrat.png')?>" alt="Samrat Kumar Chakrabortty"></span>
          <p>Samrat Kumar Chakrabortty</p>
        </li>
        <li>
          <span><img src="<?php echo getStaticUrl('images/john.png')?>" alt="John Glenn Perong"></span>
          <p>John Glenn Perong</p>
        </li>
      </ul>
    </div>
  </div>
  <!-- review end -->

  <!-- service start -->
  <div class="service">
    <div class="wrapper">
      <h2>Premi Mondiali</h2>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
    </div>
  </div>
  <!-- service end -->

  <!-- bottom start -->
  <div class="bottom">
    <div class="wrapper">
      <dl class="annotation">
        <dt>Note:</dt>
        <dd>
          *. Alla fine del periodo di prova gratuito di 30 giorni, ti saranno addebitati automaticamente €15,99 sulla tua carta di credito o account PayPal. Lo sconto del 60% sul prezzo originale di €39,99 è un bonus valido solo per i preordini!
        </dd>
        <dd>*. Se non sei soddisfatto, puoi annullare l'ordine che hai effettuato entro 30 giorni senza alcun addebito.</dd>
      </dl>
      <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Tutti i diritti riservati</p>
    </div>
  </div>
  <!-- bottom end -->
</div>
<!-- container end -->


<!-- floatlayer start -->
<div id="floatlayer" class="floatlayer">
  <div class="wrapper clearfix">
    <div class="imgbox fl">
      <img src="<?php echo getStaticUrl('images/iu-icon.png')?>" alt=""/>
      IObit Uninstaller 10
    </div>
    <div class="number fl">
      <div id="fReduce" class="reduceNum">
        <div class="listbox"><span class="list"><b>0</b></span></div>
        <div class="listbox"><span class="list"><b>5</b></span></div>
        <div class="listbox"><span class="list"><b>0</b></span></div>
      </div>
      Rimasti Ora
    </div>
  </div>
</div>
<!-- floatlayer end -->

<script>refStr="<?php echo $refStr;?>";</script>
<script src="<?php echo $pRootUrl;?>tpl/js/jquery-1.7.1.min.js"></script>
<script src="<?php echo $pRootUrl;?>tpl/js/TweenMax.min.js"></script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>

</body>
</html>