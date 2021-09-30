<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';

function microtime_float(){
  list($usec, $sec) = explode(' ', microtime());
  return ((float)$usec + (float)$sec);
}

$reduceNum=69041325;
$buyNum = number_format(ceil(microtime_float()*1000/20000) - $reduceNum);

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

$name=explode(' ',trim(get_line('../asc/data/it_name_natale.txt',rand(1,400))));
$firstName=preg_replace("/(.*)(.{3})/",'${1}'.str_repeat('*',3),$name[0]);
$lastName=preg_replace("/(.*)(.{3})/",'${1}'.str_repeat('*',3),$name[1]);
//$saleType=(rand(1,6)%6==0)?1:3;
$saleType=3;

if(!empty($_GET['action'])&&($_GET['action']=='getSales')){
  $date=$_GET['d'];
  $cName='itascuoct'.$date;
  $cookie=$_COOKIE[$cName];
  if($cookie){
    $packsNum=$_COOKIE[$cName];
    if($packsNum>3){
      $packsNum--;
      setcookie($cName,$packsNum);
    }else{
      $packsNum=3;
    }
  }else{
    $packsNum=58;
    setcookie($cName,$packsNum);
  }
  echo json_encode(array('firstName'=>$firstName,'lastName'=>$lastName,'buyNum'=>$buyNum,'packsNum'=>$packsNum));
  exit();
}

$refStr='';
if(in_array($_GET['st'],array('pm_t3','ob_2','pm_t4','pm_t5','pm_p1','pm_p2','pm_r1','pm_p3','pm_r2','reg','news',
    'pm_t1','ob_1','pm_t2','no_patch_db','patch_installed_db','no_patch_imf','patch_installed_imf','garegion'))){
  $refStr.='-'.$_GET['st'];
}
?>
<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Offerta speciale, sconto fino al 75% su Advanced SystemCare Ultimate – Offerta natale 2018 di IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>

<body>
<!-- banner start -->
<div class="banner">
  <div class="wrapper clearfix">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/it/index.php" target="_blank">IObit</a>
    <!-- title -->
    <div class="title">
      <h1>BUON NATALE!</h1>
      <h3>SOTTOCOSTO</h3>
    </div>
    <!-- gift-box -->
    <span class="gift-box"></span>
    <!-- left-message -->
    <div class="left-message fl">
      <img class="banner-asc" src="<?php echo getStaticUrl('images/banner-ascu.png')?>" alt=" Advanced SystemCare Ultimate"/>
      <img class="banner-reduce" src="<?php echo getStaticUrl('images/banner-ascu-reduce.png')?>" alt="">
    </div>
    <!-- right-message -->
    <div class="right-message fr">
      <!-- ASC12 -->
      <h3>
         Advanced SystemCare Ultimate 12
        <span>
          +<br>
          REGALI GRATIS solo per Natale
        </span>
      </h3>
      <!-- notes -->
      <p class="notes"><i></i> Pacchetti limitati, solo <b class="packsNum"><?php echo $packsNum ?></b> <span class="reduce">-1</span> restanti!</p>
      <!-- line -->
      <hr>
      <!-- price -->
      <p class="price">
        <del>€129,93</del> <strong>29</strong><b>,99</b><br>
        Risparmi €99,94!
      </p>
      <!-- buybtn -->
      <a class="buybtn"
         href="https://www.iobit.com/buy.php?product=it-au12sdpf2999&ref=it_au12sdpfpurchase1811<?php echo $refStr;?>&refs=it_purchase_ascu"
         onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascupurchase1811-it')">
        <span>APPROFITTANE ORA</span>
      </a>
      <!-- moneyback -->
      <img class="moneyback" src="<?php echo $pResUrl;?>images/moneyback.png" alt="">
      <!-- attention -->
      <p class="attention"><i></i> Più di <b class="buyNum"><?php echo $buyNum ?></b> acquistati</p>
    </div>
  </div>
  <div class="snow-box">
    <span class="snow list01"></span>
    <span class="snow snow-clarity  list02"></span>
    <span class="snow snow-smail list03"></span>
    <span class="round  list04"></span>
    <span class="round round-smail list05"></span>
    <span class="round round-clarity list06"></span>
    <span class="round round-large list07"></span>
    <span class="snow snow-clarity  list15"></span>
    <span class="snow snow-smail  list16"></span>
    <span class="snow snow-clarity  list17"></span>
    <span class="snow snow-smail  list18"></span>
    <span class="round round-clarity list23"></span>
    <span class="round round-clarity list24"></span>

    <span class="round round-clarity list08"></span>
    <span class="round round-smail list09"></span>
    <span class="round round-large  list10"></span>
    <span class="round list11"></span>
    <span class="snow snow-clarity list12"></span>
    <span class="snow snow-smail list13"></span>
    <span class="snow list14"></span>
    <span class="snow snow-clarity  list19"></span>
    <span class="snow snow-smail  list20"></span>
    <span class="snow snow-clarity  list21"></span>
    <span class="snow snow-smail  list22"></span>
    <span class="round round-clarity list25"></span>
    <span class="round round-clarity list26"></span>
  </div>
</div>
<!-- banner end -->

<!-- feature start -->
<div class="feature">
  <div class="wrapper clearfix">
    <!-- title -->
    <h2>
     La massima protezione del tuo PC e le migliori prestazioni con <br>Advanced SystemCare Ultimate 12
    </h2>
    <div class="hightbox clearfix">
      <img class="fl" src="<?php echo getStaticUrl('images/hightlight.png')?>" alt="" />
      <div class="describe fl">
        <ul>
          <li><i class="all-icons">√</i> Protegge il PC contro virus, spyware, ransomware, hacker, e tanti altri.</li>
          <li><i class="all-icons">√</i> Protegge il PC in modo proattivo dagli attacchi ransomware come WannaCry.</li>
          <li><i class="all-icons">√</i> Protegge la tua privacy online in tempo reale.</li>
          <li><i class="all-icons">√</i> Accelera, pulisce e ripara i vari problemi del PC in un solo clic.</li>
          <li><i class="all-icons">√</i> Leggero, veloce e compatibile con altri prodotti di sicurezza.</li>
        </ul>
        <img class="service" src="<?php echo getStaticUrl('images/prize-icon.png')?>" alt="" />
      </div>
    </div>
  </div>
</div>
<!-- feature end -->

<!-- betweenbuy start -->
<div class="betweenbuy">
  <!-- title -->
  <p><span>75% DI SCONTO</span> per attivare Advanced SystemCare Ultimate oggi,</p>
  <h3><i></i>Ottieni un pacchetto regalo <span>(Valore di € 69,94)</span> solo per l'esclusiva offerta natalizia</h3>
  <div class="wrapper">
    <div class="clearfix">
      <!-- SD box -->
      <dl class="sd clearfix">
        <dt><img src="<?php echo getStaticUrl('images/sd-box.png')?>" alt="Smart Defrag 6 PRO"/></dt>
        <dd>
          <h4>Smart Defrag 6 PRO</h4>
          <strong>€0</strong> <del>€29,99</del>
          <p>Offre la migliore deframmentazione del disco e accelera al massimo l'hard driver!</p>
        </dd>
      </dl>
      <!-- PF box -->
      <dl class="pf clearfix">
        <dt><img src="<?php echo getStaticUrl('images/pf-box.png')?>" alt="Protected Folder PRO"/></dt>
        <dd>
          <h4>Protected Folder PRO</h4>
          <strong>€0</strong> <del>€39,95</del>
          <p>Mantiene i tuoi file e dati lontani dagli accessi non autorizzati e dagli attacchi dannosi.</p>
        </dd>
      </dl>
    </div>
    
    <!-- price -->
    <p class="price">
      <del>€129,93</del> <strong>29</strong><b>,99</b><br>
    </p>
    <!-- buybtn -->
    <a class="buybtn"
       href="https://www.iobit.com/buy.php?product=it-au12sdpf2999&ref=it_au12sdpfpurchase1811<?php echo $refStr;?>&refs=it_purchase_ascu"
       onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascupurchase1811-it')">
        OTTIENI SUBITO I REGALI
    </a>
    <!-- notes -->
    <p class="notes"><i></i> Quantità limitate, solo <b class="packsNum"><?php echo $packsNum ?></b> pacchetti restanti</p>
  </div>
</div>
<!-- betweenbuy end -->

<!-- awards start -->
<div class="awards wrapper">
  <h2>PREMIATO E CONSIGLIATO DAI MEDIA PROFESSIONALI A LIVELLO MONDIALE</h2>
  <img src="<?php echo getStaticUrl('images/awards.png')?>" alt="" />
</div>
<!-- awards end -->

<!-- review start -->
<div class="review wrapper">
  <div class="content clearfix">
    <div class="reviews active">
      <h2>Recensioni degli Utenti</h2>
      <h3>"Advanced SystemCare Ultimate è Grandioso!"</h3>
      <p>"Ho avuto un problema che metteva sempre nei guai il mio computer. Dopo avere installato Advanced SystemCare Ultimate, non c’è più il problema dei guai. Antivirus è già incluso nel prodotto, non ho bisogno di installarne un altro. È il vincitore! Il mio computer è sempre aggiornato e funziona velocemente. È il programma più eccellente tra gli altri e senza nussun flusso costante di conflitti."</p>
    </div>
    <div class="reviews">
      <h2>Recensione dei Media</h2>
      <h3>"In conclusione Advanced SystemCare Ultimate è un ottimo prodotto."</h3>
      <p>"In conclusione Advanced SystemCare Ultimate è un ottimo prodotto che unisce le caratteristiche della versione precedente, insieme a quelle di Advanced SystemCare con Antivirus dando vita ad un prodotto nuovo, robusto e dalle eccellenti funzionalità. L’interfaccia grafica di Advanced SystemCare era già accattivante e ben organizzata."</p>
    </div>
    <div class="reviews">
      <h2>Recensioni degli Utenti</h2>
      <h3>"Vi raccomando Advanced SystemCare Ultimate come programma antivirus, è perfetto!"</h3>
      <p>"Con la versione precedente di Advanced SystemCare Ultimate non ho mai avuto problemi di nessun tipo, né per il sistema né per i malware. Dopo aver aggiornato all’ultima versione, le funzionalità aggiuntive hanno reso il mio PC cinque volte più veloce di prima. Mi piace anche la nuova interfaccia. Vi consiglio caldamente di installare Advanced SystemCare Ultimate come programma antivirus, è eccezionale."</p>
    </div>
  </div>
  <ul class="handle clearfix">
    <li>
      <img src="<?php echo getStaticUrl('images/rod-garnett.png')?>" alt="" />
      <p>Rod Garnett</p>
    </li>
    <li class="active">
      <img src="<?php echo getStaticUrl('images/htmlit.png')?>" alt="" />
      <p>HTML.it</p>
    </li>
    <li>
      <img src="<?php echo getStaticUrl('images/dareen-lim.png')?>" alt="" />
      <p>Dareen Lim</p>
    </li>
  </ul>
</div>
<!-- review end -->

<!-- comparison start -->
<div class="comparison">
  <div class="wrapper clearfix">
    <div class="comparison">
      <h4>Perché scegliere Advanced SystemCare Ultimate 12?</h4>
      <h5>Una migliore protezione e nessun rallentamento delle prestazioni. Guarda la seguente tabella comparativa</h5>
      <div class="ctable">
        <table border="0" cellspacing="0" cellpadding="0" width="100%">
          <thead>
          <tr>
            <th class="text"></th>
            <th class="blue">
              <p><span>Advanced SystemCare</span> Ultimate</p>
            </th>
            <th>AVG<span>Anti-virus</span></th>
            <th>Norton Security<span>Deluxe</span></th>
            <th>Avast! Pro<span>Antivirus</span></th>
            <th>Microsoft<span>Security Essentials</span></th>
            <th>McAfee® AntiVirus</th>
          </tr>
          </thead>
          <tbody>
          <tr>
            <td class="title first">Percentuale rilevamenti</td>
            <td class="gray">Molto alta</td>
            <td>Normale</td>
            <td>Alta</td>
            <td>Normale</td>
            <td>Alta</td>
            <td>Alta</td>
          </tr>
          <tr>
            <td class="title">Rallentamenti di sistema</td>
            <td class="gray">No</td>
            <td>Sì</td>
            <td>Sì</td>
            <td>Sì</td>
            <td>Sì</td>
            <td>Sì</td>
          </tr>
          <tr>
            <td class="title">Ottimizzazione e pulizia <br /> complete del PC</td>
            <td class="gray"><i class="tb-icons red">√</i></td>
            <td><i class="tb-icons">×</i></td>
            <td><i class="tb-icons">×</i></td>
            <td><i class="tb-icons">×</i></td>
            <td><i class="tb-icons">×</i></td>
            <td><i class="tb-icons">×</i></td>
          </tr>
          <tr>
            <td class="title">Oltre 20 strumenti aggiuntivi per migliorare le prestazioni del PC</td>
            <td class="gray"><i class="tb-icons red">√</i></td>
            <td><i class="tb-icons">×</i></td>
            <td><i class="tb-icons">×</i></td>
            <td><i class="tb-icons">×</i></td>
            <td><i class="tb-icons">×</i></td>
            <td><i class="tb-icons">×</i></td>
          </tr>
          </tbody>
        </table>
      </div>
      <dl class="comlist">
        <dt>
          <i class="all-icons">√</i>
          Percentuale di rilevazioni e protezione massima senza rivali
        </dt>
        <dd>
          Basta un clic per spazzare via virus, trojan, worm, spyware, adware e malware più ostinati e nascosti. Advanced SystemCare Ultimate garantisce anche una protezione proattiva, 
          automatizzata ed efficace contro ogni tipo di minaccia alla sicurezza proveniente da Internet, aggiornando rapidamente il suo database di virus. 
        </dd>
      </dl>
      <dl class="comlist">
        <dt>
          <i class="all-icons">√</i>
          Scopri la sicurezza senza rallentamenti
        </dt>
        <dd>
          Grazie alla nostra tecnologia di sicurezza all’avanguardia, il tuo sistema lavorerà alla massima velocità, senza alcun rallentamento.
        </dd>
      </dl>
      <dl class="comlist">
        <dt>
          <i class="all-icons">√</i>
          Naviga in sicurezza: cerca, scarica e condividi senza timori.
        </dt>
        <dd>
          La tecnologia antivirus proattiva tiene sotto controllo i processi in tempo reale, analizza i file condivisi via email e blocca le potenziali minacce. Grazie al nostro database impareggiabile 
          di rilevazioni, potrai usare il tuo PC in totale sicurezza.
        </dd>
      </dl>
      <dl class="comlist">
        <dt>
          <i class="all-icons">√</i>
          Ottimizza le prestazioni e scopri un nuovo modo di usare il PC
        </dt>
        <dd>
          Il nostro efficace strumento di messa a punto ti permette di usufruire di tutto il potenziale del tuo computer. Grazie all'ottimizzazione in tempo reale e alla funzione ActiveBoost,
          le risorse di sistema vengono gestite in maniera intelligente per garantirti un PC velocissimo.
        </dd>
      </dl>
    </div>
  </div>
</div>
<!-- comparison end -->

<!-- bottombuy start -->
<div class="bottombuy">
  <div class="wrapper clearfix">
    <!-- left-message -->
    <div class="left-message fl">
      <img class="banner-asc" src="<?php echo getStaticUrl('images/banner-ascu.png')?>" alt=" Advanced SystemCare Ultimate"/>
      <img class="banner-reduce" src="<?php echo getStaticUrl('images/banner-ascu-reduce.png')?>" alt=" Advanced SystemCare Ultimate"/>
    </div>
    <!-- right-message -->
    <div class="right-message fr">
      <!-- ASC12 -->
      <h3>
        <b>OFFERTA ESCLUSIVA DI NATALE</b>
        <span>REGALI GRATIS solo per Natale</span>
      </h3>
      <!-- notes -->
      <p class="notes"><i></i> Pacchetti limitati, solo <b class="packsNum"><?php echo $packsNum ?></b> <span class="reduce">-1</span> pezzi restanti!</p>
      <!-- line -->
      <hr>
      <!-- price -->
      <p class="price">
        <del>€129,93</del> <strong>29</strong><b>,99</b>
      </p>
      <!-- buybtn -->
      <a class="buybtn"
         href="https://www.iobit.com/buy.php?product=it-au12sdpf2999&ref=it_au12sdpfpurchase1811<?php echo $refStr;?>&refs=it_purchase_ascu"
         onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascupurchase1811-it')">
        <span>APPROFITTANE ORA</span>
      </a>     
      <!-- attention -->
      <p class="attention"><i></i> Più di <b class="buyNum"><?php echo $buyNum ?></b> acquistati</p>
    </div>
  </div>
</div>
<!-- bottombuy end -->

<!-- footer start -->
<div class="footer">
  <!-- payment -->
  <div class="payment wrapper clearfix">
    <!-- visa -->
    <dl class="visa">
      <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
      <dd><strong>Garanzia di Rimborso</strong></dd>
      <dd>Garantiamo il rimborso entro <br>60 giorni.</dd>
    </dl>
    <!-- moneyback -->
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/godaddy.png')?>" alt=""/></dt>
      <dd><strong>Pagamento 100% Sicuro</strong></dd>
      <dd>IObit offre i metodi di pagamento <br>sicuri per la transazione.</dd>
    </dl>
    <!-- godaddy -->
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/cart.png')?>" alt=""/></dt>
      <dd><strong>Attivazione Veloce</strong></dd>
      <dd>Riceverai il codice di <br>licenza in pochi minuti tramite la mail.</dd>
    </dl>
    <!-- servicion -->
    <dl class="servicion">
      <dt><img src="<?php echo getStaticUrl('images/service.png')?>" alt=""/></dt>
      <dd><strong>Servizio di Supporto</strong></dd>
      <dd>Il nostro supporto tecnico gratuito <br>è disponibile 24 ore su 24.</dd>
    </dl>
  </div>
  <div class="container">
  <dl class="annotation wrapper">
    <dt>Note:</dt>
    <dd>1*.Tali promozioni sono soggette alle modifiche senza preavviso, periodicamente alla nostra esclusiva discrezione.</dd>
    <dd>2*.I dati potrebbero variare in base al sistema o computer.</dd>
  </dl>
  <p class="copyright">Copyright ©2005 - <?php echo date('Y')?> IObit. Tutti i diritti riservati</p>
  </div>
</div>
<!-- footer end -->

<!-- float start -->
<div class="float">
  <!-- close -->
  <a class="close fr" href="javascript: closeFloat();">-</a>
  <div class="clear"></div>
  <p>
    <span id="firstName"><?php echo $firstName;?></span> <span id="lastName"><?php echo $lastName;?></span> ha già acquistato<br>
    Solo <b class="packsNum"><?php echo $packsNum ?></b> pezzi restanti, affrettati!
  </p>

</div>
<!-- float end -->

<div class='popout'><p>La licenza di ASCU v11 è anche <strong>valida su ASCU v12.</strong></p></div>

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>

</body>
</html>