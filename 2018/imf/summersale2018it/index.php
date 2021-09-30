<?php
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

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

$reTime=20;
$reduceNum=70960984;
$buyNum = ceil(microtimeFloat()*1000/(1000*$reTime))-$reduceNum;
$buyNum = number_format($buyNum);

$name=explode(' ',trim(get_line('data/it_name_mar.txt',rand(1,921))));
$firstName=preg_replace("/(.*)(.{3})/",'${1}'.str_repeat('*',3),$name[0]);
$lastName=preg_replace("/(.*)(.{3})/",'${1}'.str_repeat('*',3),$name[1]);
$saleType=(rand(1,6)%6==0)?1:3;

if (!empty($_GET['action']) && $_GET['action'] == 'getSales') {
  $date = $_GET['d'];
  $c_name = 'itimfsummer_p' . $date;
  if (!isset($_COOKIE[$c_name])) {
    $packsNum = 97;
    setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
  } else {
    if (intval($_COOKIE[$c_name]) <= 15) {
      setcookie($c_name, 15, time() + 3600 * 24 * 2);
      $packsNum = 15;
    } else {
      $packsNum = $_COOKIE[$c_name] - 1;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    }
  }
  echo json_encode(array('firstName'=>$firstName,'lastName'=>$lastName,'saleType'=>$saleType,'packsNum'=>$packsNum,'buyNum'=>$buyNum));
  exit;
}

$refStr='';
if(in_array($_GET['ref'],array('aractivatemain','aractivatesg','aractivatenow','aractivatesee','bdprotectnow',
    'bdactivatemain','bdactivatescan','bdactivatesg','trayscanbd','rootkitdb','traybd','cameraguard','trayanti-tracking',
    'trayusbguard','traycameraguard','traytrial','imf2arguardc','purchasear','purchasebd','imf2arguardc','ffbdt','ffart',
    'ffaut','ffcgt','ffupt','atn','fixall','asf','auf','atf','ugf','mbr','trayusbguard','sgup','autip','newgift',
    'bdda','arda','box','notibc','box13thbc'))){
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
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Offerta estate, sconti fino al 80% su IObit Malware Fighter PRO – Offerte speciale 2018 di IObit</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700" rel="stylesheet">
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>
<!-- service start -->
<!-- service end -->

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
      </a>
      <div class="title">
        <h1>SUPER OFFERTA ESTATE!</h1>
        <p>Rinfresca la tua estate con il PC sicuro e libero dalle minacce.</p>
      </div>
      <div class="panel clearfix">
        <div class="box">
          <div class="imgbox">
            <img src="<?php echo getStaticUrl('images/imf-box.png')?>" alt=""/>
            <div class="infor">
              <p>3 PC / 1 Anno</p>
              <p class="sign">Risparmi 39,96</p>
            </div>
          </div>
          <div class="price">
            <p><strong>19</strong> <span><b>€99</b> <del>59,95€</del></span></p>
            <a class="buybtn" href="https://www.iobit.com/buy.php?product=it-imf63pc1999&ref=it_imf63pc1999purchase1806<?php echo $refStr;?>&refs=it_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1806-it')">
              <i class="all-icons"></i>
              ACQUISTA ORA
            </a>
          </div>
        </div>
        <div class="box right">
          <div class="imgbox">
            <img src="<?php echo getStaticUrl('images/imfpf-box.png')?>" alt=""/>
            <div class="infor">
              <p>3 PC / 1 Anno</p>
              <p class="sign">Risparmi <b class="change">77,91</b></p>
            </div>
          </div>
          <div class="price">
            <p><strong class="current">21</strong> <span><b>€99</b> <del class="original">99,99€</del></span></p>
            <a class="buybtn" href="https://www.iobit.com/buy.php?product=it-imf63pcpf2199&ref=it_imf63pcpf2199purchase1806<?php echo $refStr;?>&refs=it_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1806-it')">
              <i class="all-icons"></i>
              ACQUISTA ORA
            </a>
            <p class="people"><i class="all-icons"></i> Più di <b class="buyNum"><?php echo $buyNum;?></b> acquistati</p>
          </div>
        </div>
      </div>
      <div class="payment"><img src="<?php echo getStaticUrl('images/payment.png')?>" alt="" /></div>
    </div>
  </div>
  <!-- banner end -->

  <!-- benfits start -->
  <div class="benfits wrapper clearfix">
    <h2>Dì addio al Ransomware e alle minacce dannose!</h2>
    <p>Ottieni la massima protezione del PC e nessuna preoccupazione delle ricatto online.</p>
    <div class="showcase">
      <div class="inner">
        <ul class="screenshot">
          <li>
            <img src="<?php echo getStaticUrl('images/screenshot-01.jpg')?>" alt=""/>
          </li>
          <li>              
            <img src="<?php echo getStaticUrl('images/screenshot-02.jpg')?>" alt=""/>
          </li>
          <li>              
            <img src="<?php echo getStaticUrl('images/screenshot-03.jpg')?>" alt=""/>
          </li>
          <li>              
            <img src="<?php echo getStaticUrl('images/screenshot-04.jpg')?>" alt=""/>
          </li>
        </ul>         
      </div>  
      <ul class="zoom">
        <li class="fun1 active">
          <div class="container">
            <img src="<?php echo getStaticUrl('images/screenshot-01-zoom.png')?>" alt=""/>
          </div>
        </li>
        <li class="fun2">
          <div class="container">
            <img src="<?php echo getStaticUrl('images/screenshot-02-zoom.png')?>" alt=""/>
          </div>
        </li>
        <li class="fun3">
          <div class="container">
            <img src="<?php echo getStaticUrl('images/screenshot-03-zoom.png')?>" alt=""/>
          </div>
        </li>
        <li class="fun4">
          <div class="container">
            <img src="<?php echo getStaticUrl('images/screenshot-04-zoom.png')?>" alt=""/>
          </div>
        </li>
      </ul>     
    </div>
    <div class="detail-list">
      <dl class="active first">
        <dt><i class="benfits01"></i></dt>
        <dd>
          <h3>Antivirus e Antimalware</h3>
          <p>Raddoppiata protezione offerta dal motore antivirus Advanced Bitdefender e dal motore IObit Anti-malware</p>
        </dd>
      </dl>
      <dl>
        <dt><i class="benfits02"></i></dt>
        <dd>
          <h3>Protezione delle Cartelle</h3>
          <p>Cassetta di Sicurezza protegge specifiche cartelle importanti dagli accessi non autorizzati e dalle minacce più recenti</p>
        </dd>
      </dl>
      <dl>
        <dt><i class="benfits03"></i></dt>
        <dd>
          <h3>Protezione da Ransomware</h3>
          <p>Analizza qualsiasi azione sospetta per prevenire ogni tipo di attacco ransomware, inclusi WannaCry, Petya/GoldenEye, ecc. proteggendo i tuoi dati personali</p>
        </dd>
      </dl>
      <dl>
        <dt><i class="benfits04"></i></dt>
        <dd>
          <h3>Protezione in tempo reale</h3>
          <p>Blocca e rimuove automaticamente oltre 200 milioni di minacce in tempo reale eliminando i dati di tracciamento dannosi</p>
        </dd>
      </dl>
    </div>
  </div>
  <!-- benfits end -->
  
  <!-- giveway start -->
  <div class="giveway">
    <div class="wrapper">
      <h2>Regalo Gratis offre la protezione approfondita Doppia protezione rende il tuo PC molto più sicuro.</h2>
      <div class="box clearfix">
        <div class="pf-box fl"><img src="<?php echo getStaticUrl('images/pf-box.png')?>" alt=""/></div>
        <div class="right fl">
          <h4>Protected Folder <strong>0€</strong> <del>39,95€</del></h4>
          <ul>
            <li><i class="all-icons">·</i> Protegge i tuoi file dagli altri che usano il tuo computer;</li>
            <li><i class="all-icons">·</i> Mantiene i tuoi dati lontano dagli attacchi dannosi; </li>
            <li><i class="all-icons">·</i> Una password singola per tutti i tuoi file.</li>
          </ul>
        </div>
      </div>
      <div class="price">
        <h3>IObit Malware Fighter PRO + Protected Folder PRO</h3>
        <a class="buybtn activebtn" href="https://www.iobit.com/buy.php?product=it-imf63pcpf2199&ref=it_imf63pcpf2199purchase1806<?php echo $refStr;?>&refs=it_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1806-it');">
          <i class="all-icons"></i>
          <span>APPROFITTANE SUBITO</span>
        </a>
        <p class="people"><i class="all-icons"></i> Più di <b class="buyNum"><?php echo $buyNum;?></b> acquistati</p>
      </div>
    </div>
  </div>
  <!-- giveway end -->

  <div class="wrapper">
    <!-- awards start -->
    <div class="awards">
      <h2>Riconoscimenti e Recensioni</h2>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt="" />
    </div>
    <!-- awards end -->

    <!-- review start -->
    <div class="review">
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

    <!-- comparison start -->
    <div class="comparison">
      <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <thead>
          <tr>
            <th class="title" colspan="2">Confronto tra FREE e PRO</th>
            <th class="space"></th>
            <th class="itemfree">IObit Malware Fighter <span>ATTUALE</span></th>
            <th class="space"></th>
            <th class="itempro">IObit Malware Fighter <span>PRO</span></th>                       
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_01.png')?>" alt=""/></td>
            <td class="text">Funzionamento base di Anti-Malware <em class="tab-icons">Migliorato</em></td>
            <td class="space"></td>
            <td class="itemfree gray"><i class="all-icons">√</i></td>
            <td class="space"></td>
            <td class="itempro"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_02.png')?>" alt=""/></td>
            <td class="text">Scansione del 130% più veloce per affrontare rapidamente le minacce attive <em class="tab-icons right">Migliorato</em></td>
            <td class="space"></td>
            <td class="itemfree gray"><i class="all-icons">√</i></td>
            <td class="space"></td>
            <td class="itempro"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_03.png')?>" alt=""/></td>
            <td class="text"><span>Nuovo motore Anti Ransomware blocca gli accessi non autorizzati per assicurare i file importanti <em class="tab-icons nuovo">Nuovo</em></span></td>
            <td class="space"></td>
            <td class="itemfree"><i class="all-icons circle">●</i></td>
            <td class="space"></td>
            <td class="itempro"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt=""/></td>
            <td class="text"><span>Protegge cartelle specifiche dagli accessi non autorizzati con la Cassetta di Sicurezza <em class="tab-icons nuovo">Nuovo</em></span></td>
            <td class="space"></td>
            <td class="itemfree"><i class="all-icons circle">●</i></td>
            <td class="space"></td>
            <td class="itempro"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_06.png')?>" alt=""/></td>
            <td class="text"><span>Funzionamento completo di Anti-malware con il motore unico “Dual-Core” di IObit e Bitdefender  <em class="tab-icons">Migliorato</em></span></td>
            <td class="space"></td>
            <td class="itemfree"><i class="all-icons circle">●</i></td>
            <td class="space"></td>
            <td class="itempro"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_07.png')?>" alt=""/></td>
            <td class="text">Protezione avanzata contro le minacce con il motore Anti-Virus di Bitdefender <em class="tab-icons right">Migliorato</em></td>
            <td class="space"></td>
            <td class="itemfree"><i class="all-icons circle">●</i></td>
            <td class="space"></td>
            <td class="itempro"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt=""/></td>
            <td class="text">Protezione del disco all'avvio contro gli attacchi dannosi con la Guardia MBR<em class="tab-icons nuovo">Nuovo</em></td>
            <td class="space"></td>
            <td class="itemfree"><i class="all-icons circle">●</i></td>
            <td class="space"></td>
            <td class="itempro"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_09.png')?>" alt=""/></td>
            <td class="text">Protegge la fotocamera del PC contro gli accessi non autorizzati <em class="tab-icons">Migliorato</em></td>
            <td class="space"></td>
            <td class="itemfree"><i class="all-icons circle">●</i></td>
            <td class="space"></td>
            <td class="itempro"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_10.png')?>" alt=""/></td>
            <td class="text">Protezione completa in tempo reale per la massima sicurezza del PC <em class="tab-icons">Migliorato</em></td>
            <td class="space"></td>
            <td class="itemfree"><i class="all-icons circle">●</i></td>
            <td class="space"></td>
            <td class="itempro"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_11.png')?>" alt=""/></td>
            <td class="text">Prevenzione delle infezioni provocate dai virus trasmessi da chiavi USB</td>
            <td class="space"></td>
            <td class="itemfree"><i class="all-icons circle">●</i></td>
            <td class="space"></td>
            <td class="itempro"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_12.png')?>" alt=""/></td>
            <td class="text">Rilevazione dei processi maligni in esecuzione nella RAM</td>
            <td class="space"></td>
            <td class="itemfree"><i class="all-icons circle">●</i></td>
            <td class="space"></td>
            <td class="itempro"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_13.png')?>" alt=""/></td>
            <td class="text">Pulizia automatica delle tracce di privacy online con Browser Anti-Traccia  <em class="tab-icons right">Migliorato</em></td>
            <td class="space"></td>
            <td class="itemfree"><i class="all-icons circle">●</i></td>
            <td class="space"></td>
            <td class="itempro"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_14.png')?>" alt=""/></td>
            <td class="text">Funzionamento intelligente in Background senza nessuna interruzione</td>
            <td class="space"></td>
            <td class="itemfree"><i class="all-icons circle">●</i></td>
            <td class="space"></td>
            <td class="itempro"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_15.png')?>" alt=""/></td>
            <td class="text">Aggiornamento automatico all’ultima versione</td>
            <td class="space"></td>
            <td class="itemfree"><i class="all-icons circle">●</i></td>
            <td class="space"></td>
            <td class="itempro"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_16.png')?>" alt=""/></td>
            <td class="text">24 ore di supporto tecnico per tutto l’anno</td>
            <td class="space"></td>
            <td class="itemfree"><i class="all-icons circle">●</i></td>
            <td class="space"></td>
            <td class="itempro"><i class="all-icons red">√</i></td>
          </tr>
        </tbody>
      </table>
    </div>
    <!-- comparison end -->
  </div>

  <!-- footbuy start -->
  <div class="footbuy">
    <div class="wrapper clearfix">
      <h2>OFFERTA IMBATTIBILE, non fartela scappare!</h2>
      <div id="footCountdown" class="countdown">
        <i class="all-icons"></i>
        Offerta scade tra <strong>12</strong> Min <strong>52</strong> Sec <strong>05</strong> Ms
      </div>
      <div class="imfbox fl">
        <img class="one" src="<?php echo getStaticUrl('images/foot-imf.png')?>" alt="" />
        <img class="three active" src="<?php echo getStaticUrl('images/foot-imf-pf.png')?>" alt="" />
      </div>
      <ul class="fl">
        <li>
          <i class="all-icons">√</i>
          <strong>1 Anno / 3 PC</strong>
          <b class="all-icons">-50%</b>
        </li>
        <li class="active three">
          <i class="all-icons">√</i>
          <strong>1 Anno / 3 PC + <b>Regalo Gratis</b></strong>
          <b class="all-icons">-80%</b>
        </li>
      </ul>
      <div class="price fr">
        <p><strong><b class="current">21</b>,99€</strong> <span><em>Risparmi <b class="discount">77,91</b></em><del class="original">99,99€</del></span></p>
        <a class="buybtn" href="https://www.iobit.com/buy.php?product=it-imf63pcpf2199&ref=it_imf63pcpf2199purchase1806<?php echo $refStr;?>&refs=it_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1806-it')">
          <i class="all-icons"></i>
          ACQUISTA ORA
        </a>
      </div>
    </div>
  </div>
  <!-- footbuy end -->

  <!-- footer start -->
  <div class="footer wrapper">
    <!-- annotation start -->
    <dl class="annotation">
      <dt>Note:</dt>
      <dd>* I dati potrebbero variare in base al sistema o computer.</dd>
      <dd>* Tali promozioni sono soggette alle modifiche senza preavviso, periodicamente alla nostra esclusiva discrezione.</dd>
    </dl>
    <!-- annotation end -->

    <div class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Tutti i diritti riservati</div>
  </div>
  <!-- footer end -->

  <!-- floatlayer start -->
  <div id="floatlayer" class="floatlayer">
    <h2>Offerta</h2>
    <div class="text">
      <p class="one">
        <span><span id="first"><?php echo $firstName;?></span> 
        <span id="last"><?php echo $lastName;?></span></span> ha appena acquistato.
      </p>
      <p>Solo <b class="packsNum">**</b> pezzi rimasti.</p>
    </div>
    <i class="close">×</i>
  </div>
  <!-- floatlayer end -->

  <div class="maskbox">
    <h3>Hai vinto extra sconto speciale.  </h3>
    <h2><b>-2€</b> subito sulla Super Offerta! </h2>
    <p>Solo 20 utenti l’hanno vinto.</p>
    <a class="buybtn activebtn" href="https://www.iobit.com/buy.php?product=it-imf63pcpf1999&ref=it_imf63pcpf1999purchase1806<?php echo $refStr;?>&refs=it_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1806-it')">
      <i class="all-icons"></i>
      <span>APPROFITTANE SUBITO</span>
    </a>
    <div id="maskCountdown" class="countdown">
      Scade tra <strong>12</strong> Min <strong>52</strong> sec <strong>05</strong> ms, affrettati!
    </div>
    <i class="close">×</i>
  </div>

  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>