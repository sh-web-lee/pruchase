<?php //	初始化
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

function microtime_float() {
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

$reTime=20;
$reduceNum=70960984;
$buyNum = ceil(microtimeFloat()*1000/(1000*$reTime))-$reduceNum;
$buyNum = number_format($buyNum);

$name=explode(' ',trim(get_line('data/it_name_mar.txt',rand(1,921))));
$firstName=preg_replace("/(.*)(.{3})/",'${1}'.str_repeat('*',3),$name[0]);
$lastName=preg_replace("/(.*)(.{3})/",'${1}'.str_repeat('*',3),$name[1]);
$saleType=(rand(1,6)%6==0)?1:3;
$viewNum=rand(600,800);
if (!empty($_GET['action']) && $_GET['action'] == 'getSales') {
  echo json_encode(array('firstName'=>$firstName,'lastName'=>$lastName,'saleType'=>$saleType,'buyNum'=>$buyNum,'viewNum'=>$viewNum));
  exit;
}

$refStr='';
if(in_array($_GET['ref'],array('aractivatemain','aractivatesg','aractivatenow','aractivatesee','bdprotectnow',
  'bdactivatemain','bdactivatescan','bdactivatesg','trayscanbd','rootkitdb','traybd','cameraguard','trayanti-tracking',
  'trayusbguard','traycameraguard','traytrial','purchasear','purchasebd','imf2arguardc','ffbdt','ffart',
  'ffaut','ffcgt','ffupt','atn','fixall','asf','auf','atf','ugf','mbr','trayusbguard','sgup','autip','newgift',
  'box','notibc','box13thbc','xgiftbox','xactivate'))){
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
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <title>Grande Offerta! sconti fino al 80% su IObit Malware Fighter PRO – Offerta capodanno 2019 di IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public']; ?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
<!-- banner -->
<div class="banner">
  <div class="wrapper">
    <a class="logo" href="https://www.iobit.com/it/index.php" target="_blank">
      <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/> 
    </a>
    <div class="title">
      <h1>OFFERTA SPECIALE</h1>
      <h3>PROTEZIONE RADDOPPIATA CON GLI SCONTI FINO ALL'80%!</h3>
    </div>
    <div class="panel clearfix">
      <div class="box small">
        <img src="<?php echo getStaticUrl('images/imf-box.png')?>" alt="">
        <p class="pc">1 Anno / 1 PC</p>
        <p><strong class="current">18</strong><span><del class="original">€39,95</del><b>,99</b></span></p>
        <a class="buybtn" href="https://www.iobit.com/buy.php?product=it-imf61pc1899&ref=it_imf61pc1899purchase1812<?php echo $refStr;?>&refs=it_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1812-it')">
          <i></i> <span>ACQUISTA ORA</span>
        </a>
      </div>
      <div class="box" id="topCountdown">
        <ul>
          <li><strong>11</strong> ORE : </li>
          <li><strong>43</strong> MIN :</li>
          <li><strong>44</strong> SEC :</li>
          <li><strong>644</strong> MS*</li>
        </ul>
        <img src="<?php echo getStaticUrl('images/imf-three-box.png')?>" alt="">
        <p class="pc">1 Anno / 3 PC</p>
        <p><strong class="current">19</strong><span><del class="original">€119,79</del> <b>,99</b></span></p>
        <a class="buybtn" href="https://www.iobit.com/buy.php?product=it-imf63pcpfamc1999&ref=it_imf63pcpfamc1999purchase1812<?php echo $refStr;?>&refs=it_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1812-it')">
          <i></i> <span>ACQUISTA ORA</span>
        </a>
        <p class="bought">
          <img src="<?php echo $pResUrl; ?>images/people.png" alt=""> Più di <span class="buyNum"><?php echo $buyNum;?></span> acquistati
        </p>
      </div>
    </div>
  </div>
</div>
<!-- banner end -->
<!-- awards start -->
<div class="awards wrapper">
  <h2>Raccomandato e premiato dai media mondiali</h2>
  <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
</div>
<!-- awards end -->

<div class="gray-bg">
  <div class="wrapper"> 
    <!-- benfits start -->
    <div class="benfits clearfix">
      <h2>Dì addio ai ransomware e alle minacce dannose!</h2>
      <p>Regala al tuo PC la massima protezione e smetti di preoccuparti dei ricatti online</p>
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

    <!-- gift message start -->
    <div class="gift-message">
      <h2>Regali Gratis  Esclusivi per gli utenti di 3 PC!</h2>
      <div class="clearfix">
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/pf-box.png')?>" alt="Protected Folder PRO"/></dt>
          <dd> 
            <h3>Protected Folder PRO</h3>
            <strong><small>€</small>0</strong> <del>€39,95</del>
            <p>Protegge i tuoi file e dati dagli accessi non autorizzati e dagli attacchi dannosi. </p>
          </dd>
        </dl> 
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/amc-box.png')?>" alt="Advanced MobileCare PRO"/></dt>
          <dd> 
            <h3>Advanced MobileCare PRO</h3>
            <strong><small>€</small>0</strong> <del>€19,99</del>
            <p>Offre la migliore deframmentazione del disco e accelera al massimo l'hard driver! </p>
          </dd>
        </dl> 
      </div>
    </div>
    <!-- gift message end -->
  </div>
</div>

<!-- between-buy start -->
<div class="between-buy">
  <div class="wrapper">
    <p><strong>19</strong><span><b>,99</b> Anziché <del class="original">€119,79</del></span></p>
    <a class="buybtn" href="https://www.iobit.com/buy.php?product=it-imf63pcpfamc1999&ref=it_imf63pcpfamc1999purchase1812<?php echo $refStr;?>&refs=it_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1812-it')">
      <i></i> <span>OTTIENI SUBITO I REGALI</span>
    </a>
    <p class="last"> <i></i> Più di <span class="buyNum"><?php echo $buyNum;?></span> acquistati</p>
  </div>
</div>
<!-- between-buy end -->

<!-- review start -->
<div class="wrapper"> 
  <div class="review">
    <h2>Recensioni in tutto il mondo</h2>
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
      <span class="recover recover22 smail"></span>
      <dl class="chip">
        <dt><img src="<?php echo getStaticUrl('images/gelu-batir.png')?>"></dt>
        <dd>
          IObit Malware Fighter scansiona il mio PC portatile senza influenzare le <br>prestazioni, per questo motivo l’ho consigliato a due dei miei amici.
        </dd>
      </dl>
      <dl class="br">
        <dt><img src="<?php echo getStaticUrl('images/david-cassidy.png')?>"></dt>
        <dd>
          Chi cerca un buon programma anti-virus e anti-malware con un buon rapporto qualità-prezzo non <br>deve fare altro che scaricare IObit Malware Fighter. Non accontentatevi, provate <br>il migliore, IObit Malware Fighter.
        </dd>
      </dl>
      <dl class="html-it">
        <dt><img src="<?php echo getStaticUrl('images/br.png')?>"></dt>
        <dd>
          IObit Malware Fighter è decisamente il miglior sistema per <br>proteggere un PC in mano ad un utente inesperto dall'attacco dei <br>ransomware, così da evitare anche la perdita dei file.
        </dd>
      </dl>
      <dl class="bob-bassett">
        <dd>
          IObit Malware Fighter PRO è in grado di rilevare <br>vari tipi di spyware, ransomware, adware, Trojan, <br>worm, keylogger e bot.
        </dd>
        <dt><img src="<?php echo getStaticUrl('images/soft.png')?>"></dt>
      </dl>
      <dl class="peter-stoffers">
        <dd>
          IObit Malware Fighter offre molto oltre alle sue <br>capacità di scansione.
        </dd>
        <dt><img src="<?php echo getStaticUrl('images/cnet.png')?>"></dt>
      </dl>
    </div>
  </div>
</div>
<!-- review end -->
<!-- comparison start -->
<div class="comparison wrapper">
  <table border="0" cellspacing="0" cellpadding="0" width="100%">
    <thead>
      <tr>
        <th class="title" colspan="2">Confronto delle funzionalità:</th>
        <th class="space"></th>
        <th class="itemfree">IObit Malware Fighter <br>FREE <span><img src="<?php echo getStaticUrl('images/cry.png')?>" alt=""/></span></th>
        <th class="space"></th>
        <th class="itempro"><p></p>IObit Malware Fighter <br>PRO <span><img src="<?php echo getStaticUrl('images/smile.png')?>" alt=""/></span></th>                       
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icon_01.png')?>" alt=""/></td>
        <td class="text">Pulizia, riparazione ed ottimizzazione di base del sistema <em class="tab-icons">Migliorato</em></td>
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
        <td class="text"><span>Funzionamento completo di Anti-malware con il motore unico “Dual-Core” di IObit e Bitdefender <em class="tab-icons">Migliorato</em></span></td>
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
        <td class="text">Protezione del disco all'avvio contro gli attacchi dannosi con la Guardia MBR <em class="tab-icons nuovo">Nuovo</em></td>
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
        <td class="icons"><img src="<?php echo getStaticUrl('images/icon_11.png')?>" alt=""/></td>
        <td class="text">Prevenzione delle infezioni provocate dai virus trasmessi da chiavi USB</td>
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
        <td class="icons"><img src="<?php echo getStaticUrl('images/icon_16.png')?>" alt=""/></td>
        <td class="text">Privilegi di servizio 24/7 Supporto Tecnico Gratuito</td>
        <td class="space"></td>
        <td class="itemfree"><i class="all-icons circle">●</i></td>
        <td class="space"></td>
        <td class="itempro"><i class="all-icons red">√</i></td>
      </tr>
    </tbody>
  </table>
</div>
<!-- comparison end -->

<!-- footbuy start -->
<div class="footbuy">
  <div class="wrapper clearfix">
    <h2>OFFERTA IMBATTIBILE, non fartela scappare!</h2>
    <div id="footCountdown" class="countdown">
      Offerta scade tra <strong>12</strong> Min <strong>52</strong> Sec <strong>05</strong> Ms
    </div>
    <div class="imfbox fl">
      <img class="one" src="<?php echo getStaticUrl('images/imf-box.png')?>" alt="" />
      <img class="three active" src="<?php echo getStaticUrl('images/foot-three-box.png')?>" alt="" />
    </div>
    <ul class="fl">
      <li>
        <i class="all-icons">√</i>
        <strong>1 Anno/1 PC</strong>
        <b class="all-icons">-70%</b>
      </li>
      <li class="active three">
        <i class="all-icons">√</i>
        <strong>1 Anno/3 PC +PF+AMC</strong>
        <b class="all-icons">-80%</b>
      </li>
    </ul>
    <div class="price fr">
      <p><strong class="current">19</strong><span><em class="sign">Risparmi <em class="discount">99,8</em></em><b>,99</b> <del class="original">119,79€</del></span></p>
      <a class="buybtn" href="https://www.iobit.com/buy.php?product=it-imf63pcpfamc1999&ref=it_imf63pcpfamc1999purchase1812<?php echo $refStr;?>&refs=it_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1812-it')">
        <i></i> <span>ACQUISTA ORA</span>
      </a>
    </div>
  </div>
</div>
<!-- footbuy end -->

<!-- service start -->
<div class="service wrapper clearfix">
  <dl>
    <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
    <dd> 
      <h3>Garanzia di Soddisfazione</h3> 
      <p>Garanzia di Soddisfazione</p>
    </dd>
  </dl>
  <dl>
    <dt><img src="<?php echo getStaticUrl('images/godaddy-secure.png')?>" alt=""/></dt>
    <dd> 
      <h3>Pagamento Assicurato</h3> 
      <p>Tutti i metodi di pagamento sono 100% verificati e sicuri</p>
    </dd>
  </dl>
  <dl>
    <dt><img src="<?php echo getStaticUrl('images/cart.png')?>" alt=""/></dt>
    <dd> 
      <h3>Attivazione Veloce</h3> 
      <p>Dopo il tuo acquisto, riceverai il codice di licenza in pochi muniti tramite la mail </p>
    </dd>
  </dl>
  <dl>
    <dt><img src="<?php echo getStaticUrl('images/service.png')?>" alt=""/></dt>
    <dd> 
      <h3>Servizio Clienti</h3> 
      <p>24/7 Supporto tecnico gratuito</p>
    </dd>
  </dl>
</div>
<!-- service end -->

<!-- footer start -->
<div class="footer wrapper">
  <dl class="annotation">
    <dt>Note:</dt>
    <dd>* I dati potrebbero variare in base al sistema o computer.</dd>
    <dd>* Tali promozioni sono soggette alle modifiche senza preavviso, periodicamente alla nostra esclusiva discrezione.</dd>
  </dl>
  <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit.  Tutti i diritti riservati</p>
</div>
<!-- footer end -->
<!-- float -->
<div class="float" id="floatlayer">
  <a href="javascript:void(0);" class="close">X</a>
  <dl>
    <dt><span id="first"><?php echo $firstName;?></span> <span id="last"><?php echo $lastName;?></span></dt>
    <dd>ha già attivato <span id="saleType"><?php echo $saleType;?></span> PC / 1 Anno</dd>
    <dd class="last"><span class="viewNum packsNum"><?php echo $viewNum;?></span> utenti stanno guardando</dd>
  </dl>
</div>

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>