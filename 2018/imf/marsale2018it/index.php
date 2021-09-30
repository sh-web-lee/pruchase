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

$name=explode(' ',trim(get_line('data/it_name_mar.txt',rand(1,921))));
$firstName=preg_replace("/(.*)(.{3})/",'${1}'.str_repeat('*',3),$name[0]);
$lastName=preg_replace("/(.*)(.{3})/",'${1}'.str_repeat('*',3),$name[1]);
$saleType=(rand(1,6)%6==0)?1:3;

if (!empty($_GET['action']) && $_GET['action'] == 'getSales') {
  $date = $_GET['d'];
  $c_name = 'itimfmarp' . $date;
  $type = $_GET['type'];
  $cCheck=empty($_GET['cCheck'])?false:true;
  $cTime=3600*24*2;
  $returnPacks=0;
  if (empty($_COOKIE[$c_name])) {
    $returnPacks=57;
    $packsNum = "57*89*98";
    setcookie($c_name, $packsNum, time() + $cTime);
  } else {
    $packs=$_COOKIE[$c_name];
    $packsArr=explode('*',$packs);
    $packs1=$packsArr[0];
    $packs2=$packsArr[1];
    $packs3=$packsArr[2];
    if($type==1){
      $packs1=($packs1>=2)?($packs1-1):1;
      $returnPacks=$packs1;
    }elseif($type==2){
      $packs2=($packs2>=16)?($packs2-1):15;
      $returnPacks=$packs2;
    }elseif($type==3){
      $packs3=($packs3>=16)?($packs3-1):15;
      $returnPacks=$packs3;
    }
    setcookie($c_name, $packs1 . '*' . $packs2 . '*' . $packs3, time() + $cTime);
  }
  echo json_encode(array('firstName'=>$firstName,'lastName'=>$lastName,'saleType'=>$saleType,'packsNum'=>$returnPacks));
  exit;
}
?>
<!DOCTYPE html>
<html lang="it">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Offerta della settimana, sconti fino al 75% su IObit Malware Fighter PRO – Offerte speciale 2018 di IObit</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet">
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
      <div class="top clearfix">
        <a class="logo fl" href="http://www.iobit.com" target="_blank">
          <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
        </a>
        <div class="title fl">
          <h1>OFFERTA DELLA SETTIMANA!</h1>
          <h2>Sconti fino al 75%, Affrettati.</h2>
        </div>
      </div>
      <div class="panel clearfix">
        <div class="box left">
          <img src="<?php echo getStaticUrl('images/imf-left.png')?>" alt="" />
          <div class="price">
            <strong><small>€</small><span class="discount">17</span><small>,99</small></strong> <b><del class="original">€29,99</del></b>
            <p>Risparmi <span class="tags">€12,00</span></p>
          </div>
          <a class="buybtn" 
             href="http://www.iobit.com/buy.php?product=it-imf51pc6m1799&ref=it_imf51pc6m1799purchase1803&refs=it_purchase_imf" 
             onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1803-it');">
            <i class="all-icons"></i>
            ACQUISTA ORA 
          </a>
        </div>
        <div class="box center active">
          <div class="inner">
            <img src="<?php echo getStaticUrl('images/imf-center.png')?>" alt="" />
            <div class="price">
              <strong><small>€</small><span class="discount">19</span><small>,99</small></strong> <b><del class="original">€99,90</del></b>
              <p>Risparmi <span class="tags">€79,91</span></p>
            </div>
            <a class="buybtn red" 
               href="http://www.iobit.com/buy.php?product=it-imf53pcpf1999&ref=it_imf53pcpf1999purchase1803&refs=it_purchase_imf" 
               onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1803-it');">
              <i class="all-icons"></i>
              ACQUISTA ORA 
            </a>
            <ul id="countdown1" class="countdown">
              <li><strong>09 </strong> min : </li>
              <li><strong>56 </strong> sec : </li>
              <li class="last"><strong>456</strong> ms</li>
            </ul>
          </div>
        </div>
        <div class="box right">
          <div class="inner">
            <img src="<?php echo getStaticUrl('images/imf-right.png')?>" alt="" />
            <div class="price">
              <strong><small>€</small><span class="discount">19</span><small>,99</small></strong> <b><del class="original">€59,95</del></b>
              <p>Risparmi <span class="tags">€39,96</span></p>
            </div>
            <a class="buybtn" 
               href="http://www.iobit.com/buy.php?product=it-imf53pc1999&ref=it_imf53pc1999purchase1803&refs=it_purchase_imf" 
               onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1803-it');">
              <i class="all-icons"></i>
              ACQUISTA ORA 
            </a>
            <ul id="countdown2" class="countdown">
              <li><strong>09 </strong> Ore : </li>
              <li><strong>09 </strong> min : </li>
              <li class="last"><strong>56 </strong> sec : </li>
              <li class="last"><strong>456 </strong> ms</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <div class="wrapper">
    <!-- payment start -->
    <div class="payment"><img src="<?php echo getStaticUrl('images/payment.png')?>" alt="" /></div>
    <!-- payment end -->

    <!-- intro start -->
    <div class="intro">
      <h2>Dite NO a Ransomware!</h2>
      <h3>Massimizza l'efficienza e la sicurezza contro Virus, Malware, Ransomware in tempo reale</h3>
      <div class="feature imf-message">
        <ul class="message">
          <li class="one" data-num="0">
            <h5>Doppia Protezione</h5>
            <p>
              Raddoppia la protezione con il motore antivirus Advanced Bitdefender e il motore IObit Anti-malware.
            </p>
          </li>
          <li class="two active" data-num="1">
            <h5>Protezione da Ransomware</h5>
            <p>
              Analizza qualsiasi azione sospetta per prevenire ogni tipo di attacco ransomware, inclusi WannaCry, Petya/GoldenEye, ecc. proteggendo i<br> tuoi dati personali.
            </p>
          </li>
          <li class="three" data-num="2">
            <h5>Protezione più Profonda</h5>
            <p>
              Protezione integrata del PC in tempo reale che include la pulizia delle chiavi USB e la sorveglianza della webcam, il Monitoraggio delle azioni dannose ecc.
            </p>
          </li>
          <li class="four" data-num="3">
            <h5>Impedisce il Tracciamento dei Dati</h5>
            <p>
              Pulisce automaticamente le tracce private non appena chiuso il browser, al fine di evitare il tracciamento pericoloso da parte di intrusi.
            </p>
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
    </div>
    <!-- intro end -->
  </div>
  
  <!-- giveway start -->
  <div class="giveway">
    <div class="wrapper">
      <h2>Regalo Gratis, Offerta Limitata. Affrettati!</h2>
      <div class="box clearfix">
        <div class="pf-box fl"></div>
        <div class="right fl">
          <h3>Protected Folder</h3>
          <strong><small>€</small>0</strong> <del>€39,95</del>
          <ul>
            <li>· Protegge i dati personali importanti dal furto! </li>
            <li>· Salvaguardia i file in modo semplice e sicuro!</li>
          </ul>
        </div>
      </div>
      <a class="buybtn red" href="http://www.iobit.com/buy.php?product=it-imf53pcpf1999&ref=it_imf53pcpf1999purchase1803&refs=it_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1803-it');">
        <i class="all-icons"></i>
        Ottienilo Ora
      </a>
    </div>
  </div>
  <!-- giveway end -->

  <div class="wrapper">
    <!-- awards start -->
    <div class="awards">
      <h2>Riconosciuto e Premiato dai seguenti media</h2>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt="" />
    </div>
    <!-- awards end -->

    <!-- review start -->
    <div class="review">
      <h2>Riconoscimenti e Recensioni in tutto il mondo</h2>
      <h3>Scelto dagli Utenti di Tutto il Mondo!</h3>
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
          <dt><img src="<?php echo getStaticUrl('images/chip.png')?>"></dt>
          <dd>
            “La versione Pro a pagamento ti fornirà una protezione antimalware avanzata e <span>aggiornamenti automatici. Un'altra funzione che otterrai con l'aggiornamento alla</span> versione Pro è la protezione contro il ransomware." - Chip.de 
          </dd>
        </dl>
        <dl class="html-it">
          <dt><img src="<?php echo getStaticUrl('images/html-it.png')?>"></dt>
          <dd>
            “IObit Malware Fighter Pro è uno strumento avanzato per la protezione <span>del sistema contro processi spyware ed altri malware durante la</span> connessione ad Internet.” - HTML.it
          </dd>
        </dl>
        <dl class="br">
          <dt><img src="<?php echo getStaticUrl('images/br.png')?>"></dt>
          <dd>
            "IObit Malware Fighter è un eccellente strumento di protezione, dotato di funzioni molto utili, <span>garantisce prestazioni eccellenti ed è dotato di un'interfaccia semplice e chiara." - uptodown</span>
          </dd>
        </dl>
        <dl class="bob-bassett">
          <dd>
            “Il computer non ha più nessun problema dopo <span>aver installato i prodotti di IObit.”</span>
          </dd>
          <dt><img src="<?php echo getStaticUrl('images/bob-bassett.png')?>"></dt>
        </dl>
        <dl class="peter-stoffers">
          <dd>
            “E' molto intuitivo e facile da usare. Ha già <span>rilevato e rimosso diverse minacce negli anni.”</span>
          </dd>
          <dt><img src="<?php echo getStaticUrl('images/peter-stoffers.png')?>"></dt>
        </dl>
      </div>
    </div>
    <!-- review end -->

    <!-- comparison start -->
    <div class="comparison">
      <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <thead>
          <tr>
            <th class="title" colspan="2">Scopri ulteriori benefici di IObit Malware Fighter PRO</th>
            <th class="itemfree">
              La tua versione 
              <span>ATTUALE</span>
            </th>
            <th class="itempro">
              La versione PRO 
              <span>AGGIORNATO</span>
            </th>                        
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="mid-title" colspan="4">Sicurezza del PC </td>
          </tr>
          <tr>
            <td class="icon">
              <img src="<?php echo getStaticUrl('images/pr_b_mal.png')?>" alt="" />
            </td>
            <td class="describe">Funzione anti-malware di base </td>
            <td class="itemfree"><i class="all-icons">√</i></td>
            <td class="itempro"><i class="all-icons orange">√</i></td>          
          </tr>
          <tr>
            <td class="icon">
              <img src="<?php echo getStaticUrl('images/pr_virus.png')?>" alt="" />
            </td>
            <td class="describe">
              Protezione avanzata dalle minacce con il motore anti-virus Bitdefender
              <span class="tags">MIGLIORATO</span>
            </td>
            <td class="itemfree"><i class="all-icons circle">√</i></td>
            <td class="itempro"><i class="all-icons orange">√</i></td>          
          </tr>
          <tr>
            <td class="icon">
              <img src="<?php echo getStaticUrl('images/pr_ransom.png')?>" alt="" />
            </td>
            <td class="describe">
              Rileva e previene gli attacchi dei ransomware, come Petya/GoldenEye, WannaCry
              <span class="tags">MIGLIORATO</span>
            </td>
            <td class="itemfree"><i class="all-icons circle">√</i></td>
            <td class="itempro"><i class="all-icons orange">√</i></td>          
          </tr>
          <tr>
            <td class="icon">
              <img src="<?php echo getStaticUrl('images/pr_b_realtime.png')?>" alt="" />
            </td>
            <td class="describe">Protezione di base in tempo reale contro attività dannose</td>
            <td class="itemfree"><i class="all-icons">√</i></td>
            <td class="itempro"><i class="all-icons orange">√</i></td>          
          </tr>
          <tr>
            <td class="icon">
              <img src="<?php echo getStaticUrl('images/pr_realtime.png')?>" alt="" />
            </td>
            <td class="describe">
              Protezione completa in tempo reale per la massima sicurezza del PC
              <span class="tags">MIGLIORATO</span>
            </td>
            <td class="itemfree"><i class="all-icons circle">√</i></td>
            <td class="itempro"><i class="all-icons orange">√</i></td>          
          </tr>
          <tr>
            <td class="icon">
              <img src="<?php echo getStaticUrl('images/pr_camera.png')?>" alt="" />
            </td>
            <td class="describe">
              Protegge la tua webcam dagli accessi non autorizzati
              <span class="tags nuvov">NUVOV</span>
            </td>
            <td class="itemfree"><i class="all-icons circle">√</i></td>
            <td class="itempro"><i class="all-icons orange">√</i></td>          
          </tr>
          <tr>
            <td class="icon">
              <img src="<?php echo getStaticUrl('images/pr_usb.png')?>" alt="" />
            </td>
            <td class="describe">Previene le infezioni da virus tramite unità USB</td>
            <td class="itemfree"><i class="all-icons circle">√</i></td>
            <td class="itempro"><i class="all-icons orange">√</i></td>          
          </tr>
          <tr>
            <td class="icon">
              <img src="<?php echo getStaticUrl('images/pr_ram.png')?>" alt="" />
            </td>
            <td class="describe">Rileva i processi dannosi in esecuzione nella RAM</td>
            <td class="itemfree"><i class="all-icons circle">√</i></td>
            <td class="itempro"><i class="all-icons orange">√</i></td>          
          </tr>
          <tr>
            <td class="icon">
              <img src="<?php echo getStaticUrl('images/pr_action.png')?>" alt="" />
            </td>
            <td class="describe">Rileva le minacce analizzando le azioni dannose</td>
            <td class="itemfree"><i class="all-icons circle">√</i></td>
            <td class="itempro"><i class="all-icons orange">√</i></td>          
          </tr>
          <tr>
            <td class="icon">
              <img src="<?php echo getStaticUrl('images/sp_scan.png')?>" alt="" />
            </td>
            <td class="describe">Scansione fino al 130% più veloce per rilevare rapidamente le minacce attive</td>
            <td class="itemfree"><i class="all-icons">√</i></td>
            <td class="itempro"><i class="all-icons orange">√</i></td>          
          </tr>
          <tr>
            <td class="mid-title" colspan="4">Sicurezza Online </td>
          </tr>
          <tr>
            <td class="icon">
              <img src="<?php echo getStaticUrl('images/pr_track.png')?>" alt="" />
            </td>
            <td class="describe">Protezione automatica della privacy online con anti monitoraggio per il browser</td>
            <td class="itemfree"><i class="all-icons circle">√</i></td>
            <td class="itempro"><i class="all-icons orange">√</i></td>          
          </tr>
          <tr>
            <td class="icon">
              <img src="<?php echo getStaticUrl('images/pr_browser.png')?>" alt="" />
            </td>
            <td class="describe">Analizza i file scaricati ed elimina le pubblicità per migliorare la protezione</td>
            <td class="itemfree"><i class="all-icons">√</i></td>
            <td class="itempro"><i class="all-icons orange">√</i></td>          
          </tr>
          <tr>
            <td class="icon">
              <img src="<?php echo getStaticUrl('images/pr_home.png')?>" alt="" />
            </td>
            <td class="describe">Protezione di homepage e DNS migliorata</td>
            <td class="itemfree"><i class="all-icons">√</i></td>
            <td class="itempro"><i class="all-icons orange">√</i></td>          
          </tr>
          <tr>
            <td class="mid-title" colspan="4">Servizio Premium di IObit </td>
          </tr>
          <tr>
            <td class="icon">
              <img src="<?php echo getStaticUrl('images/serv_update.png')?>" alt="" />
            </td>
            <td class="describe">Aggiornamento automatico alla versione più recente</td>
            <td class="itemfree"><i class="all-icons circle">√</i></td>
            <td class="itempro"><i class="all-icons orange">√</i></td>          
          </tr>
          <tr>
            <td class="icon">
              <img src="<?php echo getStaticUrl('images/serv_support.png')?>" alt="" />
            </td>
            <td class="describe">Supporto tecnico 24/7 gratuito su richiesta</td>
            <td class="itemfree"><i class="all-icons circle">√</i></td>
            <td class="itempro"><i class="all-icons orange">√</i></td>          
          </tr>
          <tr>
            <td class="icon">
              <img src="<?php echo getStaticUrl('images/pr_b_3pc.png')?>" alt="" />
            </td>
            <td class="describe">Supporta 3 PC</td>
            <td class="itemfree"><i class="all-icons circle">√</i></td>
            <td class="itempro"><i class="all-icons orange">√</i></td>          
          </tr>
        </tbody>
      </table>
    </div>
    <!-- comparison end -->
  </div>

  <!-- footbuy start -->
  <div class="footbuy">
    <div class="wrapper clearfix">
      <div class="imfbox fl">
        <img class="left" src="<?php echo getStaticUrl('images/imf-left.png')?>" alt="" />
        <img class="center active" src="<?php echo getStaticUrl('images/imf-center.png')?>" alt="" />
        <img class="right" src="<?php echo getStaticUrl('images/imf-right.png')?>" alt="" />
      </div>
      <ul class="fl">
        <li>
          <i class="all-icons">○</i>
          <strong>6 Mesi / 1 PC </strong>
          <b>-40%</b>
        </li>
        <li class="active">
          <i class="all-icons">√</i>
          <strong>1 Anno / 3 PC + Regalo Gratis </strong>
          <b>-75%</b>
        </li>
        <li>
          <i class="all-icons">○</i>
          <strong>1 Anno / 3 PC </strong>
          <b>-65%</b>
        </li>
      </ul>
      <div class="price-box fr">
        <div class="price">
          <strong><small>€</small><span class="discount">19</span><small>,99</small></strong> <b><del class="original">€99,90</del></b>
          <p>Risparmi <span class="tags">€79,91</span></p>
        </div>
        <a class="buybtn red" 
           href="http://www.iobit.com/buy.php?product=it-imf53pcpf1999&ref=it_imf53pcpf1999purchase1803&refs=it_purchase_imf" 
           onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1803-it');">
          <i class="all-icons"></i>
          ACQUISTA ORA 
        </a>
      </div>
    </div>
  </div>
  <!-- footbuy end -->

  <!-- footer start -->
  <div class="footer wrapper">
    <!-- service start -->
    <div class="service clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt="" /></dt>
        <dd>
          <h3>Garanzia di Soddisfazione</h3>
          <p>Rimborso entro 60 giorni</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/godaddy-secure.png')?>" alt="" /></dt>
        <dd>
          <h3>Pagamento Assicurato</h3>
          <p>Tutti i metodi di pagamento sono 100% verificati e sicuri</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/car.png')?>" alt="" /></dt>
        <dd>
          <h3>Attivazione Veloce</h3>
          <p>Dopo avere completato il tuo acquisto, <span>riceverai il codice di licenza in pochi minuti</span> tramite la mail</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/24hours.png')?>" alt="" /></dt>
        <dd>
          <h3>Servizio Cliente</h3>
          <p>24/7 Supporto tecnico gratuito</p>
        </dd>
      </dl>
    </div>
    <!-- service end -->

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
    <p class="one"><span><span id="first"><?php echo $firstName;?></span> <span id="last"><?php echo $lastName;?></span></span> ne ha appena acquistato</p>
    <p><span class="packsNum">***</span> <span class="salesDes">pezzi restanti, affrettati!</span></p>
    <i class="close all-icons">×</i>
    <div class="title">
      <ul id="countdown3" class="countdown">
        <li><strong>09 </strong> min : </li>
        <li><strong>09 </strong> sec : </li>
        <li class="last"><strong>456 </strong> ms</li>
      </ul>
    </div>
  </div>
  <!-- floatlayer end -->

  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>