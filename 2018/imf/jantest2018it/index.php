<?php //  初始化
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';
//if (empty($_GET['ref'])) $_GET['ref'] = '';

function microtime_float()
{
  list($usec, $sec) = explode(' ', microtime());
  return ((float)$usec + (float)$sec);
}

function get_line($file, $line)
{
  $fp = fopen($file, 'r');
  $i = 0;
  while (!feof($fp)) {
    $i++;
    $c = fgets($fp);
    if ($i == $line) {
      return $c;
      break;
    }
  }
}
$buyNum = ceil(microtimeFloat() * 1000 / 20000) -70867174;
$buyNum = number_format($buyNum);

$name=explode(' ',trim(get_line('data/it_name_natale2017.txt',rand(1,921))));
$firstName=preg_replace("/(.*)(.{3})/",'${1}'.str_repeat('*',3),$name[0]);
$lastName=preg_replace("/(.*)(.{3})/",'${1}'.str_repeat('*',3),$name[1]);

if (!empty($_GET['action']) && $_GET['action'] == 'getPack') {
  $date = $_GET['d'];
  $c_name = 'itimfnatapa' . $date;
  $type = $_GET['type'];
  $cCheck=empty($_GET['cCheck'])?false:true;
  $cTime=3600*24*2;
  $packNum=5;
  if (empty($_COOKIE[$c_name])) {
    $packs1=39;
    $packs2=170;
  } else {
    $packs=$_COOKIE[$c_name];
    $packsArr=explode('*',$packs);
    $packs1=$packsArr[0];
    $packs2=$packsArr[1];
  }
  if($type==1){
    $packs1=($packs1<=5)?5:(--$packs1);
    $packNum=$packs1;
  }else{
    $packs2=($packs2<=5)?5:(--$packs2);
    $packNum=$packs2;
  }
  $packsNum = $packs1."*".$packs2;
  setcookie($c_name, $packsNum, time() + $cTime);
  echo json_encode(array('firstName'=>$firstName,'lastName'=>$lastName,'packsNum'=>$packNum));
  exit;
}
$refStr='';
if(in_array($_GET['ref'],array('aractivatemain','aractivatesg','aractivatenow','aractivatesee','bdprotectnow',
    'bdactivatemain','bdactivatescan','bdactivatesg','trayscanbd','rootkitdb','traybd','cameraguard','trayanti-tracking',
    'trayusbguard','traycameraguard','traytrial','imf2arguardc','purchasear','purchasebd','imf2arguardc','ffbdt','ffart',
    'ffaut','ffcgt','ffupt'))){
  $refStr.='-'.$_GET['ref'];
}
if(in_array($_GET['pop'],array('x_imf'))){
  $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <title>Offerta Speciale, sconti fino al 85% su IObit Malware Fighter PRO – Offerte Esclusiva di IObit</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css') ?>" rel="stylesheet">
  <?php echo $gJavascript['public']; ?>
  <?php echo $gJavascript['head']; ?>
  <script type="text/javascript">
    refStr='<?php echo $refStr;?>';
  </script>
</head>
<body>
<div class="banner">
  <div class="wrapper clearfix">
    <a class="logo" href="http://www.iobit.com/" target="_blank">IObit</a>
    <h1>SUPER OFFERTE</h1>
    <h2>SCONTI FINO AL <span> 85%</span>. NON DARLI PER SCONTATO!</h2>
    <div class="box">
      <img src="<?php echo $pResUrl; ?>images/imf-box-one.png" alt="">
      <p>1 Anno/1 PC</p>
      <dl>
        <dt> <strong>€<span>19,99</span></strong> <del>€39,95</del></dt>
        <dd><a href="http://www.iobit.com/buy.php?product=it-imf51pc1999&ref=it_imf51pc1999purchase1801b<?php echo $refStr;?>&refs=it_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1711-it')" class="buybtn smail">ACQUISTA ORA</a></dd>
      </dl>
    </div>
    <div class="box three-gift">
      <ul class="date">
        <li> <span>05</span>ore </li>
        <li><span>05</span>min</li>
        <li><span>05</span> sec</li>
        <li><span>05</span>ms <sup>*</sup></li>
      </ul>
      <span class="img-box"></span>
      <p>1 Anno/3 PC</p>
      <dl>
        <dt> <strong><span>€</span>21,99</strong> <del>€159,88</del></dt>
        <dd><a href="http://www.iobit.com/buy.php?product=it-imf53pcsdiupf2199&ref=it_imf53pcsdiupf2199purchase1801b<?php echo $refStr;?>&refs=it_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchaseb1801-it')" class="buybtn big">APPROFFITANE ORA</a></dd>
      </dl>
    </div>
    <div class="box three-box ">
      <ul class="date">
        <li> <span>05</span>ore </li>
        <li><span>05</span>min</li>
        <li><span>05</span> sec</li>
        <li><span>05</span>ms <sup>*</sup></li>
      </ul>
      <img src="<?php echo $pResUrl; ?>images/imf-three-pf.png" alt="">
      <p>1 Anno/3 PC</p>
      <dl>
        <dt> <strong>€<span>21,99</span></strong> <del>€99,9 </del></dt>
        <dd><a href="http://www.iobit.com/buy.php?product=it-imf53pcpf2199&ref=it_imf53pcpf2199purchase1801b<?php echo $refStr;?>&refs=it_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchaseb1801-it')" class="buybtn smail">ACQUISTA ORA</a></dd>
      </dl>
    </div>
   </div>
  </div>
</div>

<div class="visa wrapper">
  <img src="<?php echo $pResUrl; ?>images/payment.png" alt="">
</div>

<div class="title wrapper">
  <h2>Dite NO a Ransomware!</h2>
  <h3>Massima efficienza e protezione contro i Ransomware e Malware</h3>
</div>

<div class="imf-message wrapper">
  <ul class="message">
    <li class="one" data-num="0">
      <h5>Antivirus e Antimalware</h5>
      <p>Raddoppia la protezione offerta dal motore antivirus Advanced Bitdefender e dal motore IObit Anti-malware</p>
    </li>
    <li class="two active" data-num="1">
      <h5>Protezione da Ransomware</h5>
      <p>Analizza qualsiasi azione sospetta per prevenire ogni tipo di attacco ransomware, inclusi WannaCry, Petya/GoldenEye, ecc. proteggendo i tuoi dati personali</p>
    </li>
    <li class="three" data-num="2">
      <h5>Protezione webcam</h5>
      <p>Ti informa immediatamente se un programma tenta di usare segretamente la webcam per violare la tua privacy</p>
    </li>
    <li class="four" data-num="3">
      <h5>Protezione in tempo reale</h5>
      <p>Blocca e rimuove automaticamente oltre 200 milioni di minacce in tempo reale eliminando i dati di tracciamento dannosi</p>
    </li>
  </ul>
  <div class="img-change">
    <div class="continer">
      <img src="<?php echo $pResUrl; ?>images/img-list01.png">
      <img src="<?php echo $pResUrl; ?>images/img-list02.png" class="active">
      <img src="<?php echo $pResUrl; ?>images/img-list02.png">
      <img src="<?php echo $pResUrl; ?>images/img-list04.png">
    </div>
  </div>
  <ul class="list-content">
    <li class="list01 ">
      <span class="icons"></span>
      <span class="line"></span>
    </li>
    <li class="list02 noaml">
      <span class="icons"></span>
      <span class="line"></span>
    </li>
    <li class="list03">
      <span class="icons"></span>
      <span class="line"></span>
    </li>
    <li class="list04">
      <span class="icons"></span>
      <span class="line"></span>
    </li>
  </ul>
</div>

<div class="gift-message ">
  <div class="wrapper">
    <h2>Regali Gratis Esclusivi per Super Offerta!</h2>
     <div class="box sd">
       <span></span>
       <h3>Smart Defrag 5 PRO</h3>
       <strong>€0</strong> <del>€29,99</del>
       <p>Offre la migliore deframmentazione del <br> disco accelerando l’hard driver al massimo!</p>
     </div>
     <div class="box iu">
       <span></span>
       <h3>IObit Uninstaller PRO</h3>
       <strong>€0</strong> <del>€29,99</del>
       <p>Rimuove in modo potente i <br> programmi e plug-in ostinati!</p>
     </div>
     <div class="box">
       <img src="<?php echo $pResUrl; ?>images/pf-box.png">
       <h3>Protected Folder</h3>
       <strong>€0</strong> <del>€39,95</del>
       <p>Protegge i dati importanti dal <br> furto in modo semplice e sicuro!</p>
     </div>
     <div class="buy-btn">
       <a href="http://www.iobit.com/buy.php?product=it-imf53pcsdiupf2199&ref=it_imf53pcsdiupf2199purchase1801b<?php echo $refStr;?>&refs=it_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchaseb1801-it')" class="buybtn">OTTIENI I REGALI SUBITO</a>
     </div>
  </div>
</div>

<div class="awards wrapper">
  <h2>Riconoscimenti e Recensioni</h2>
  <img src="<?php echo $pResUrl; ?>images/awards.jpg" alt="">
</div>
<div class="review wrapper">
  <div class="content">
    <dl>
      <dd>
        <h4>"Non abbiamo nessun problema del computer dopo aver installato i prodotti di IObit."</h4>
      </dd>
      <dd>"Abbiamo utilizzato tanti programmi diversi per mantenere i nostri PC puliti e senza nessun intoppo. Ogni settimana, ci sono volute ore per questo processo. Ora, con IObit Malware Fighter Pro e Advanced System Care Pro, tutto è in un posto e ci vogliono solo pochi minuti ogni due giorni a fare lo stesso lavoro con molta più fiducia. Non abbiamo nessun problema del computer dopo aver installato i prodotti di IObit."</dd>
    </dl>
    <dl class="active">
      <dd>
        <h4>IObit Malware Fighter Pro è uno strumento avanzato per la protezione del sistema contro processi spyware ed altri malware durante la connessione ad Internet.</h4>
      </dd>
      <dd>"Grazie a questo software è possibile rilevare ed eliminare spyware, adware, trojan, keylogger, bot, worm e hijacker. È semplice da utilizzare e si presenta con un’interfaccia utente estremamente intuitiva. L’applicazione fornisce una prote-zione in tempo reale grazie al quale è possibile navigare le pagine web e scaricare file in tutta sicurezza."</dd>
    </dl>
    <dl>
      <dd>
        <h4>"Ho installato anche altri programmi di anti-virus, ma IMF è sempre il primo a scoprire i problemi e li blocca in pochissimo tempo."</h4>
      </dd>
      <dd>"Qualcuno mi ha consigliato il Malware Fighter di IObit alcuni anni fa. All'inizio, ero scettico. Ma dopo averlo installato, è diventato il programma d’anti-malware più preferito per me. È molto facile da usare. Dopo anni d’uso, ha già rilevato e rimosso diverse minacce. Con la collaborazione dei altri programmi di IObit, ASC per esempio, Il mio computer è ben protetto. Allora, consiglio questo programmo a tutta la mia famiglia e tutti i miei amici."</dd>
    </dl>
  </div>
  <ul class="users clearfix">
    <li>
      <img src="<?php echo $pResUrl; ?>images/bob-bassett.png" alt="Bob Bassett">
      <p>Bob Bassett</p>
    </li>
    <li class="active">
      <img src="<?php echo $pResUrl; ?>images/html-it.png" alt="HTML.it">
      <p>HTML.it</p>
    </li>
    <li>
      <img src="<?php echo $pResUrl; ?>images/peter-stoffers.png" alt="Peter Stoffers">
      <p>Peter Stoffers</p>
    </li>
  </ul>
</div>

<div class="comparison wrapper">
  <table border="0" cellspacing="0" cellpadding="0" width="100%">
    <thead>
    <tr>
      <th class="text" colspan="2">Confronto tra FREE e PRO</th>
      <th class="spac"></th>
      <th class="itemb"><strong>IObit Malware Fighter</strong>Free</th>
      <th class="spac"></th>
      <th class="itema"><strong>IObit Malware Fighter</strong>PRO</th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_01.png"></td>
      <td class="virtue">Funzionamento base di Anti-Malware  <sup> <img src="<?php echo $pResUrl; ?>images/mig.png" alt=""> Migliorato</sup></td>
      <td class="spac"></td>
      <td class="itemb itembg"><img src="<?php echo $pResUrl; ?>images/free-star.png"></td>
      <td class="spac"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_02.png"></td>
      <td class="virtue">Scansione del 130% più veloce per affrontare rapidamente le minacce attive <sup> <img src="<?php echo $pResUrl; ?>images/mig.png" alt=""> Migliorato</sup></td>
      <td class="spac"></td>
      <td class="itemb itembg"><img src="<?php echo $pResUrl; ?>images/free-star.png"></td>
      <td class="spac"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_03.png"></td>
      <td class="virtue">Scansiona i file scaricati e rimuove gli annunci per rafforzare la protezione <sup class="nuovo"> <img src="<?php echo $pResUrl; ?>images/nuovo.png" alt=""> Nuovo </sup></td>
      <td class="spac"></td>
      <td class="itemb itembg"><img src="<?php echo $pResUrl; ?>images/free-star.png"></td>
      <td class="spac"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_04.png"></td>
      <td class="virtue">Funzionamento completo di Anti-malware con il motore unico “Dual-Core” di IObit e Bitdefender <sup> <img src="<?php echo $pResUrl; ?>images/mig.png" alt=""> Migliorato</sup></td>
      <td class="spac"></td>
      <td class="itemb"><span class="round"></span></td>
      <td class="spac"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_05.png"></td>
      <td class="virtue">Protezione avanzata contro le minacce con il motore Anti-Virus di Bitdefender    <sup><img src="<?php echo $pResUrl; ?>images/mig.png" alt=""> Migliorato </sup>
      </td>
      <td class="spac"></td>
      <td class="itemb"><span class="round"></span></td>
      <td class="spac"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_06.png"></td>
      <td class="virtue">Protegge il tuo PC e il tuo denaro dagli attacchi ransomware <sup class="nuovo"> <img src="<?php echo $pResUrl; ?>images/nuovo.png" alt=""> Nuovo </sup></td>
      <td class="spac"></td>
      <td class="itemb"><span class="round"></span></td>
      <td class="spac"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_07.png"></td>
      <td class="virtue">Protegge la fotocamera del PC contro gli accessi non autorizzati <sup class="nuovo"><img src="<?php echo $pResUrl; ?>images/nuovo.png" alt=""> Nuovo</sup></td>
      <td class="spac"></td>
      <td class="itemb"><span class="round"></span></td>
      <td class="spac"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_08.png"></td>
      <td class="virtue">Protezione completa in tempo reale per la massima sicurezza del PC  <sup><img src="<?php echo $pResUrl; ?>images/mig.png" alt=""> Migliorato </sup></td>
      <td class="spac"></td>
      <td class="itemb"><span class="round"></span></td>
      <td class="spac"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_09.png"></td>
      <td class="virtue">Prevenzione delle infezioni provocate dai virus trasmessi da chiavi USB  </td>
      <td class="spac"></td>
      <td class="itemb"><span class="round"></span></td>
      <td class="spac"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_10.png"></td>
      <td class="virtue">Rilevazione dei processi maligni in esecuzione nella RAM</td>
      <td class="spac"></td>
      <td class="itemb"><span class="round"></span></td>
      <td class="spac"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_11.png"></td>
      <td class="virtue">Pulizia automatica delle tracce di privacy online con Browser Anti-Traccia  <sup><img src="<?php echo $pResUrl; ?>images/mig.png" alt=""> Migliorato </sup></td>
      <td class="spac"></td>
      <td class="itemb"><span class="round"></span></td>
      <td class="spac"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_12.png"></td>
      <td class="virtue">Rilevazione delle minacce con l’analisi delle attività maligne</td>
      <td class="spac"></td>
      <td class="itemb"><span class="round"></span></td>
      <td class="spac"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_13.png"></td>
      <td class="virtue">Funzionamento intelligente in Background senza nessuna interruzione</td>
      <td class="spac"></td>
      <td class="itemb"><span class="round"></span></td>
      <td class="spac"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_14.png"></td>
      <td class="virtue">Aggiornamento automatico all’ultima versione</td>
      <td class="spac"></td>
      <td class="itemb"><span class="round"></span></td>
      <td class="spac"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_15.png"></td>
      <td class="virtue">24 ore di supporto tecnico per tutto l’anno </td>
      <td class="spac"></td>
      <td class="itemb"><span class="round"></span></td>
      <td class="spac"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    </tbody>
  </table>
</div>

<div class="bottom-buy">
  <div class="wrapper clearfix">
    <h2>OFFERTA IMBATTIBILE, non fartela scappare!</h2>
    <div class="img-box"></div>
    <ul>
      <li>1 Anno/1 PC</li>
      <li class="active">1 Anno/3 PC + <span>Super Regali</span></li>
      <li>1 Anno/3 PC + Regalo</li>
    </ul>
    <dl>
      <dt><strong>€<span>21,99</span></strong> <del>€159,88</del></dt>
      <dd><a href="http://www.iobit.com/buy.php?product=it-imf53pcsdiupf2199&ref=it_imf53pcsdiupf2199purchase1801b<?php echo $refStr;?>&refs=it_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchaseb1801-it')" class="buybtn big">APPROFFITANE ORA</a></dd>
    </dl>
  </div>
</div>

<div class="payment clearfix">
  <div class="wrapper">
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/moeny-back.png" alt=""></dt>
      <dd><strong>Garanzia di Rimborso</strong> Garantiamo il rimborso entro <br> 60 giorni .</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/verified.png" alt=""></dt>
      <dd><strong>Pagamento 100% Sicuro</strong> IObit offre i metodi di pagamento <br> sicuri per la transazione.</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/opswat.png" alt=""></dt>
      <dd><strong>Certificazione d’Esperto</strong>Testato e certificato dagli <br> esperti di OPSWAT .</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/servizio.png" alt=""></dt>
      <dd><strong>Servizio di Supporto</strong> Il nostro supporto tecnico gratuito <br> è disponibile 24 ore su 24. </dd>
    </dl>
  </div>
</div>
<dl class="wrapper notes">
  <dt>Note: </dt>
  <dd>1*. Tali promozioni sono soggette periodicamente a modifiche senza preavviso, a nostra esclusiva discrezione.</dd>
  <dd>2*. I dati potrebbero variare in base al sistema o computer.</dd>
</dl>

<div class="footer">
  <p>Copyright ©2005 - <?php echo date(Y)?> IObit. Tutti i diritti riservati</p>
</div>

<div class="float-window">
  <h2>Super Offerta</h2>
  <h3> disponibile per <span > <strong>9</strong> min</span> <span><strong>90</strong> sec</span> <span class="last"><strong>241</strong> ms *</span></h3>
  <p><span id="first"><?php echo $firstName;?></span> <span id="last"><?php echo $lastName;?></span> ha appena acquistato.</p>
  <p><span class="packsNum red">5</span> pezzi restanti, affrettati!</p>
  <i class="close"></i>
</div>
<div class="float-top">Torna Su</div>
<script src="<?php echo getStaticUrl('js/script.js') ?>"></script>
</body>
</html>