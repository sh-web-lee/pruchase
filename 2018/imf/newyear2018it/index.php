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
    'ffaut','ffcgt','ffupt','atn','fixall','asf','auf','atf','ugf','mbr','trayusbguard','sgup','autip','newgift',
    'bdda','arda'))){
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
  <title>Promozione Limitata, sconti fino al 85% su IObit Malware Fighter PRO – Offerte di Capodanno 2018 di IObit</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css') ?>" rel="stylesheet">
  <?php echo $gJavascript['public']; ?>
  <!-- Google Analytics Content Experiment code -->
  <script>function utmx_section(){}function utmx(){}(function(){var
  k='17473586-668',d=document,l=d.location,c=d.cookie;
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
  <script type="text/javascript">
    refStr='<?php echo $refStr;?>';
  </script>
</head>
<body>
<div class="banner">
  <div class="wrapper clearfix">
    <a class="logo" href="https://www.iobit.com/" target="_blank">IObit</a>
    <h1>SUPER OFFERTE</h1>
    <h2>SCONTI FINO AL <span> 85%</span>. NON DARLI PER SCONTATO!</h2>
    <div class="box">
      <img src="<?php echo $pResUrl; ?>images/imf-box-one.png" alt="">
      <p>1 Anno/1 PC</p>
      <dl>
        <dt> <strong>€<span>17,99</span></strong> <del>€39,95</del></dt>
        <dd><a href="https://www.iobit.com/buy.php?product=it-imf61pc1799&ref=it_imf61pc1799purchase1711<?php echo $refStr;?>&refs=it_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1711-it')" class="buybtn smail">ACQUISTA ORA</a></dd>
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
        <dt> <strong><span>€</span>19,99</strong> <del>€159,88</del></dt>
        <dd><a href="https://www.iobit.com/buy.php?product=it-imf63pcsdiupf1999&ref=it_imf63pcsdiupf1999purchase1711<?php echo $refStr;?>&refs=it_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1711-it')" class="buybtn big">APPROFFITANE ORA</a></dd>
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
        <dt> <strong>€<span>19,99</span></strong> <del>€99,9 </del></dt>
        <dd><a href="https://www.iobit.com/buy.php?product=it-imf63pcpf1999&ref=it_imf63pcpf1999purchase1711<?php echo $refStr;?>&refs=it_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1711-it')" class="buybtn smail">ACQUISTA ORA</a></dd>
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
      <h5>Protezione delle Cartelle</h5>
      <p>Cassetta di Sicurezza protegge specifiche cartelle importanti dagli accessi non autorizzati e dalle minacce più recenti</p>
    </li>
    <li class="four" data-num="3">
      <h5>Protezione in tempo reale</h5>
      <p>Blocca e rimuove automaticamente oltre 200 milioni di minacce in tempo reale eliminando i dati di tracciamento dannosi</p>
    </li>
  </ul>
  <div class="img-change">
    <div class="continer">
      <img src="<?php echo $pResUrl; ?>images/img-list01.png">
      <img src="<?php echo $pResUrl; ?>images/img-list03.png" class="active">
      <img src="<?php echo $pResUrl; ?>images/img-list03.png">
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
       <h3>Smart Defrag 6 PRO</h3>
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
       <a href="https://www.iobit.com/buy.php?product=it-imf63pcsdiupf1999&ref=it_imf63pcsdiupf1999purchase1711<?php echo $refStr;?>&refs=it_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1711-it')" class="buybtn">OTTIENI I REGALI SUBITO</a>
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
        <h4>IObit Malware Fighter PRO scansiona il mio PC portatile senza influenzare le prestazioni. <br> Ho raccomandato questo ottimo prodotto ai miei amici.</h4>
      </dd>
      <dd>Sono molto soddisfatto con il vostro prodotto – IObit Malware Fighter. Prima di conoscerlo le interferenze maligne mi causavano moltissimi problemi, non potevo guardare un film per intero o godermi un concerto. Grazie al vostro programma ogni operazione è chiara, sicura e ben protetta. IObit Malware Fighter scansiona il mio PC portatile senza influenzare le prestazioni, per questo motivo l’ho consigliato a due dei miei amici. - Tradotto da inglese</dd>
    </dl>
    <dl class="active">
      <dd>
        <h4>IObit Malware Fighter PRO è in grado di rilevare vari tipi di spyware, <br> ransomware, adware, Trojan, worm, keylogger e bot.</h4>
      </dd>
      <dd>Il programma utilizza due motori AV - il proprio e BitDefender – ed è efficace contro i malware impossibili da rilevare con altri strumenti. Un altro vantaggio è che funziona contemporaneamente con il programma standard AV. IObit Malware Fighter PRO è in grado di rilevare vari tipi di spyware, ransomware, adware, Trojans, worms, keyloggers e bots. - Tradotto da inglese</dd>
    </dl>
    <dl>
      <dd>
        <h4>Molto semplice da usare e la scansione è più veloce!</h4>
      </dd>
      <dd>Voglio ringraziare tutto lo staff di IObit per il loro impegno nel rilasciare sempre i programmi migliori. Questo aggiornamento è eccellente per gli utenti. La scansione è molto più veloce ed è facilissimo da usare. Chi cerca un buon programma anti-virus e anti-malware con un buon rapporto qualità-prezzo non deve fare altro che scaricare IObit Malware Fighter. Non accontentatevi, provate il migliore, IObit Malware Fighter. - Tradotto da inglese</dd>
    </dl>
  </div>
  <ul class="users clearfix">
    <li>
      <img src="<?php echo $pResUrl; ?>images/gelu-batir.png" alt="Gelu Batir">
      <p>Gelu Batir</p>
    </li>
    <li class="active">
      <img src="<?php echo $pResUrl; ?>images/software.png" alt="Software.Informer">
      <p>Software.Informer</p>
    </li>
    <li>
      <img src="<?php echo $pResUrl; ?>images/david-cassidy.png" alt="David Cassidy">
      <p>David Cassidy</p>
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
      <td class="virtue">Nuovo motore Anti Ransomware blocca gli accessi non autorizzati per assicurare i file importanti <sup class="nuovo"> <img src="<?php echo $pResUrl; ?>images/nuovo.png" alt=""> Nuovo </sup></td>
      <td class="spac"></td>
      <td class="itemb"><span class="round"></span></td>
      <td class="spac"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_04.png"></td>
      <td class="virtue">Funzionamento completo di Anti-malware con il motore unico “Dual-Core” di IObit e Bitdefender <sup class="nuovo"> <img src="<?php echo $pResUrl; ?>images/nuovo.png" alt=""> Nuovo </sup></td>
      <td class="spac"></td>
      <td class="itemb"><span class="round"></span></td>
      <td class="spac"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_05.png"></td>
      <td class="virtue">Scansiona i file scaricati e rimuove gli annunci per rafforzare la protezione <sup><img src="<?php echo $pResUrl; ?>images/mig.png" alt=""> Migliorato </sup></td>
      <td class="spac"></td>
      <td class="itemb itembg"><img src="<?php echo $pResUrl; ?>images/free-star.png"></td>
      <td class="spac"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_06.png"></td>
      <td class="virtue">Funzionamento completo di Anti-malware con il motore unico “Dual-Core” di IObit e Bitdefender  <sup><img src="<?php echo $pResUrl; ?>images/mig.png" alt=""> Migliorato </sup></td>
      <td class="spac"></td>
      <td class="itemb"><span class="round"></span></td>
      <td class="spac"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_07.png"></td>
      <td class="virtue">Protezione avanzata contro le minacce con il motore Anti-Virus di Bitdefender    <sup><img src="<?php echo $pResUrl; ?>images/mig.png" alt=""> Migliorato </sup>
      </td>
      <td class="spac"></td>
      <td class="itemb"><span class="round"></span></td>
      <td class="spac"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_08.png"></td>
      <td class="virtue">Protezione del disco all'avvio contro gli attacchi dannosi con la Guardia MBR <sup><img src="<?php echo $pResUrl; ?>images/mig.png" alt=""> Migliorato </sup></td>
      <td class="spac"></td>
      <td class="itemb"><span class="round"></span></td>
      <td class="spac"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_09.png"></td>
      <td class="virtue">Protegge la fotocamera del PC contro gli accessi non autorizzati <sup class="nuovo"><img src="<?php echo $pResUrl; ?>images/nuovo.png" alt=""> Nuovo</sup></td>
      <td class="spac"></td>
      <td class="itemb"><span class="round"></span></td>
      <td class="spac"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_10.png"></td>
      <td class="virtue">Protezione completa in tempo reale per la massima sicurezza del PC  <sup><img src="<?php echo $pResUrl; ?>images/mig.png" alt=""> Migliorato </sup></td>
      <td class="spac"></td>
      <td class="itemb"><span class="round"></span></td>
      <td class="spac"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_11.png"></td>
      <td class="virtue">Prevenzione delle infezioni provocate dai virus trasmessi da chiavi USB  </td>
      <td class="spac"></td>
      <td class="itemb"><span class="round"></span></td>
      <td class="spac"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_12.png"></td>
      <td class="virtue">Rilevazione dei processi maligni in esecuzione nella RAM</td>
      <td class="spac"></td>
      <td class="itemb"><span class="round"></span></td>
      <td class="spac"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_13.png"></td>
      <td class="virtue">Pulizia automatica delle tracce di privacy online con Browser Anti-Traccia <sup class="nuovo"> <img src="<?php echo $pResUrl; ?>images/nuovo.png" alt=""> Nuovo </sup></td>
      <td class="spac"></td>
      <td class="itemb"><span class="round"></span></td>
      <td class="spac"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_14.png"></td>
      <td class="virtue">Funzionamento intelligente in Background senza nessuna interruzione</td>
      <td class="spac"></td>
      <td class="itemb"><span class="round"></span></td>
      <td class="spac"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_15.png"></td>
      <td class="virtue">Aggiornamento automatico all’ultima versione</td>
      <td class="spac"></td>
      <td class="itemb"><span class="round"></span></td>
      <td class="spac"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_16.png"></td>
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
      <dt><strong>€<span>19,99</span></strong> <del>€159,88</del></dt>
      <dd><a href="https://www.iobit.com/buy.php?product=it-imf63pcsdiupf1999&ref=it_imf63pcsdiupf1999purchase1711<?php echo $refStr;?>&refs=it_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1711-it')" class="buybtn big">APPROFFITANE ORA</a></dd>
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