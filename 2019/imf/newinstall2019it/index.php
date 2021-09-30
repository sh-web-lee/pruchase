<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';

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
  fclose($fp);
}
$name=explode(' ',trim(get_line('data/names_jan.txt',rand(1,50))));
$firstName=preg_replace("/(.*)(.{3})/",'${1}'.str_repeat('*',3),$name[0]);
$lastName=preg_replace("/(.*)(.{3})/",'${1}'.str_repeat('*',3),$name[1]);
if(!empty($_GET['action'])&&($_GET['action']=='getUser')){
  echo json_encode(array('firstName'=>$firstName,'lastName'=>$lastName));
  exit();
}
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['st'])?'':('-'.$_GET['st']);
?>

<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Offerta speciale - Sconti fino all’80% su IObit Malware Fighter PRO per rimuovere malware, ransomeware e virus</title>
  <meta name="Copyright" content="IObit">
  <meta name="Description" content="">
  <meta name="Keywords" content="">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>
</head>
<body>
<div class="container">

  <!-- banner start -->
  <div class="banner wrapper">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/it/" target="_blank">IObit</a>
    <!-- title -->
    <h1>
     <strong>offerta speciale esclusiva per i nuovi membri</strong>
      <span>Addio a malware e virus, PC più sicuro con la protezione in tempo reale!</span>
    </h1>
    <!-- content -->
    <div class="content clearfix">

      <!-- imf 1pc -->
      <div class="box smallbox fl">
        <!-- box -->
        <img src="<?php echo $pResUrl;?>images/imf-1pc.png" alt="IObit Malware Fighter PRO7">
        <!-- brand -->
        <p class="brand">1 Anno / 1 PC</p>
        <!-- price -->
        <p class="price"><del>€39.95</del> €18.99</p>
        <!-- 1pc buybtn -->
        <a class="buybtn small"
           href="http://www.iobit.com/buy.php?product=it-imf81pc1899&ref=it_imf81pc1899purchasenewinstall<?php echo $refStr;?>&refs=it_purchase_imf"
           onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1PCnewinstall-it')">
          ACQUISTA SUBITO
        </a>
      </div>

      <!-- imf 3pc + pf -->
      <div class="box largebox fl">
        <!-- countdown -->
        <p class="countdown">
          <i></i>
          <strong>00</strong> Min:
          <strong>00</strong> Sec:
          <strong class="last">000</strong> Ms
        </p>
        <!-- box -->
        <img src="<?php echo $pResUrl;?>images/imf-3pc-gifts.png" alt="IObit Malware Fighter PRO6">
        <!-- brand -->
        <p class="brand">1 Anno / 3 PC + <strong>Extra 2 mesi + PF</strong></p>
        <!-- number -->
        <p class="number"> <i class="all-icons"></i> Regalo Gratis per i nuovi membri</p>
        <!-- price -->
        <p class="price"><del>€99.99</del> €19.99</p>
        <!-- 3pc+pf buybtn -->
        <a class="buybtn"
           href="http://www.iobit.com/buy.php?product=it-imf83pc14mpf1999&ref=it_imf83pc14mpf1999purchasenewinstall<?php echo $refStr;?>&refs=it_purchase_imf"
           onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase3PC14mpfnewinstall-it')">
          <span>APPROFITTANE ORA</span>
        </a>
      </div>

      <!-- imf 3pc -->
      <div class="box smallbox fr">
        <!-- box -->
        <img src="<?php echo $pResUrl;?>images/imf-3pc.png" alt="IObit Malware Fighter PRO6">
        <!-- brand -->
        <p class="brand">1 Anno / 3 PC</p>
        <!-- number -->
        <p class="number">&nbsp;</p>
        <!-- price -->
        <p class="price shot"><del>€59.95</del> €19.99</p>
        <!-- 3pc buybtn -->
        <a class="buybtn small"
           href="http://www.iobit.com/buy.php?product=it-imf83pc1999&ref=it_imf83pc1999purchasenewinstall<?php echo $refStr;?>&refs=it_purchase_imf"
           onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase3PCnewinstall-it')">
          ACQUISTA SUBITO
        </a>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- payments start -->
  <div class="payments wrapper">
    <img src="<?php echo $pResUrl;?>images/payments.png" alt="">
  </div>
  <!-- payments end -->
 
</div>

<!-- feature start -->
<div class="feature wrapper clearfix">
  <!-- title -->
  <h2>Il tuo PC ha bisogno della protezione omnicomplesiva di IObit Malware Fighter 8 PRO</h2>
  <!-- list -->
  <ul>
    <!-- 01 -->
    <li>
      <dl class="clearfix">
        <dt><img src="<?php echo $pResUrl;?>images/feature-icon01.png" alt=""></dt>
        <dd>
          <h3>Motore Bitdefender</h3>
          <p>
            Impedisce a oltre 200 milioni di minacce alla sicurezza di <br>
            infettare e danneggiare il tuo computer.
          </p>
        </dd>
      </dl>
    </li>
    <!-- 02 -->
    <li>
      <dl class="clearfix">
        <dt><img src="<?php echo $pResUrl;?>images/feature-icon02.png" alt=""></dt>
        <dd>
          <h3>Protezione dei Dati Sensibili <sup>Nuovo</sup></h3>
          <p>
            Protezione multistrato garantisce la maggiore sicurezza dei <br> tuoi dati sensibili dagli accessi non autorizzati o ad alto rischio.
          </p>
        </dd>
      </dl>
    </li>
    <!-- 03 -->
    <li>
      <dl class="clearfix">
        <dt><img src="<?php echo $pResUrl;?>images/feature-icon03.png" alt=""></dt>
        <dd>
          <h3>Navigazione più sicura su Internet</h3>
          <p>
            Elimina automaticamente i cookie e le tracce pericolose <br> quando chiudi il browser web e impedisce agli hacker online.
          </p>
        </dd>
      </dl>
    </li>
    <!-- 04 -->
    <li>
      <dl class="clearfix">
        <dt><img src="<?php echo $pResUrl;?>images/feature-icon04.png" alt=""></dt>
        <dd>
          <h3>Blocca i Ransomware</h3>
          <p>
            Previene gli attacchi ransomware come WannaCry, NotPetya durante il <br>
            processo di avvio.
          </p>
        </dd>
      </dl>
    </li>
  </ul>
</div>
<!-- feature end -->

<!-- gift start -->
<div class="gift wrapper clearfix">
  <!-- title -->
  <h2>Ottieni i tuoi regali exclusivi GTATIS!</h2>
  <h3>Doppia protezione e doppia sicurezza.</h3>
  <!--  -->
  <dl class="imf clearfix">
    <dt><img src="<?php echo $pResUrl;?>images/gift-imf.png" alt="IObit Malware Fighter PRO6"></dt>
    <dd>
      <h3>2 Mesi / 3 PC <span>€0</span> <del>€9.99</del></h3>
      <p>
        Protezione in tempo reale potenziata <br>
        per rilevamento e rimozione più <br>
        efficienti delle minacce.
      </p>
    </dd>
  </dl>
  <!--  -->
  <dl class="pf clearfix">
    <dt><img src="<?php echo $pResUrl;?>images/gift-pf.png" alt="Protected Folder"></dt>
    <dd>
      <h3>1 ANNO / 1 PC <span>€0</span> <del>€39.95</del></h3>
      <p>
        Strumento potenziato per proteggere i <br>
        dati e i file, non dovrai più preoccuparti <br>
        per la perdita della privacy!
      </p>
    </dd>
  </dl>

  <div class="gift-bottom">
    <!-- price -->
    <p class="price"><del>€49.94</del> €0</p>
    <!-- 3pc+pf buybtn -->
    <a class="buybtn"
       href="http://www.iobit.com/buy.php?product=it-imf83pc14mpf1999&ref=it_imf83pc14mpf1999purchasenewinstall<?php echo $refStr;?>&refs=it_purchase_imf"
       onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase3PC14mpfnewinstall-it')">
      OTTIENI ORA E RISPARMI 80%
    </a>
  </div>
</div>
<!-- gift end -->

<!-- award start -->
<div class="award wrapper">
  <!-- title -->
  <h2>Raccomandato e premiato dai media mondiali</h2>
  <!-- icons -->
  <img src="<?php echo $pResUrl;?>images/award.png" alt="">
</div>
<!-- award end -->

<!-- review start -->
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
        IObit Malware Fighter scansiona il mio PC portatile senza <br>
        influenzare le prestazioni, per questo motivo l’ho consigliato a <br>
        due dei miei amici.
      </dd>
    </dl>

    <dl class="br">
      <dt><img src="<?php echo getStaticUrl('images/david-cassidy.png')?>"></dt>
      <dd>
        Chi cerca un buon programma anti-virus e anti-malware con un buon rapporto qualità-prezzo <br>
        non deve fare altro che scaricare IObit Malware Fighter. Non accontentatevi, provate il migliore, <br>
        IObit Malware Fighter.
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
        IObit Malware Fighter PRO è in grado di <br>
        rilevare vari tipi di spyware, ransomware, <br>
        adware, Trojan, worm, keylogger e bot.
      </dd>
      <dt><img src="<?php echo getStaticUrl('images/soft.png')?>"></dt>
    </dl>

    <dl class="peter-stoffers">
      <dd>
        IObit Malware Fighter offre molto oltre alle <br>
        sue capacità di scansione.
      </dd>
      <dt><img src="<?php echo getStaticUrl('images/cnet.png')?>"></dt>
    </dl>
  </div>
</div>
<!-- review end -->

<!-- comparison start -->
<div class="comparison wrapper">
  <table border="0" cellspacing="0" cellpadding="0" width="100%">
    <thead>
    <tr>
      <th class="title" colspan="2">Il PC è sempre sicuro con IObit Malware Fighter PRO!</th>
      <th class="space"></th>
      <th class="itemfree">IObit Malware Fighter <br>FREE <span><img src="<?php echo getStaticUrl('images/cry.png')?>" alt=""/></span></th>
      <th class="space"></th>
      <th class="itempro"><p></p>IObit Malware Fighter <br>PRO <span><img src="<?php echo getStaticUrl('images/smile.png')?>" alt=""/></span></th>
    </tr>
    </thead>
    <tbody>
    <!-- 01 -->
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/icon_01.png')?>" alt=""/></td>
      <td class="text">Anti-malware con ultimo database di malware Iobit </td>
      <td class="space"></td>
      <td class="itemfree gray"><i class="all-icons">√</i></td>
      <td class="space"></td>
      <td class="itempro"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/icon_email.png')?>" alt=""/></td>
      <td class="text">
        <span>Protegge le tue cartelle e multiplo tipi di file contro Ransomware <em class="tab-icons nuovo">Nuovo</em></span>
      </td>
      <td class="space"></td>
      <td class="itemfree"><i class="all-icons circle">●</i></td>
      <td class="space"></td>
      <td class="itempro"><i class="all-icons red">√</i></td>
    </tr>
    <!-- 02 -->
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/icon_03.png')?>" alt=""/></td>
      <td class="text"><span>Arresta il ransomware tentando di crittografare i tuoi file importanti <em class="tab-icons nuovo">Nuovo</em></span></td>
      <td class="space"></td>
      <td class="itemfree"><i class="all-icons circle">●</i></td>
      <td class="space"></td>
      <td class="itempro"><i class="all-icons red">√</i></td>
    </tr>
    <!-- 03 -->
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt=""/></td>
      <td class="text"><span>Nessuno può accedere ai tuoi dati personali senza password <em class="tab-icons nuovo">Nuovo</em></span></td>
      <td class="space"></td>
      <td class="itemfree"><i class="all-icons circle">●</i></td>
      <td class="space"></td>
      <td class="itempro"><i class="all-icons red">√</i></td>
    </tr>
    <!-- 04 -->
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/icon_06.png')?>" alt=""/></td>
      <td class="text"><span>Funzionamento completo di Anti-malware con il motore unico “Dual-Core” di IObit e Bitdefender <em class="tab-icons">Migliorato</em></span></td>
      <td class="space"></td>
      <td class="itemfree"><i class="all-icons circle">●</i></td>
      <td class="space"></td>
      <td class="itempro"><i class="all-icons red">√</i></td>
    </tr>
    <!-- 05 -->
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/icon_07.png')?>" alt=""/></td>
      <td class="text">Rileva oltre 209.000.000 di minacce con motori Bitdefender e di Iobit <em class="tab-icons right">Migliorato</em></td>
      <td class="space"></td>
      <td class="itemfree"><i class="all-icons circle">●</i></td>
      <td class="space"></td>
      <td class="itempro"><i class="all-icons red">√</i></td>
    </tr>
    <!-- 06 -->
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt=""/></td>
      <td class="text">Protezione del disco all'avvio contro gli attacchi dannosi con la Guardia MBR <em class="tab-icons nuovo right">Nuovo</em></td>
      <td class="space"></td>
      <td class="itemfree"><i class="all-icons circle">●</i></td>
      <td class="space"></td>
      <td class="itempro"><i class="all-icons red">√</i></td>
    </tr>
    <!-- 07 -->
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/icon_09.png')?>" alt=""/></td>
      <td class="text">Protegge la fotocamera del PC contro gli accessi non autorizzati <em class="tab-icons">Migliorato</em></td>
      <td class="space"></td>
      <td class="itemfree"><i class="all-icons circle">●</i></td>
      <td class="space"></td>
      <td class="itempro"><i class="all-icons red">√</i></td>
    </tr>
    <!-- 08 -->
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/icon_11.png')?>" alt=""/></td>
      <td class="text">Prevenzione delle infezioni provocate dai virus trasmessi da chiavi USB</td>
      <td class="space"></td>
      <td class="itemfree"><i class="all-icons circle">●</i></td>
      <td class="space"></td>
      <td class="itempro"><i class="all-icons red">√</i></td>
    </tr>
    <!-- 09 -->
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/icon_13.png')?>" alt=""/></td>
      <td class="text">Pulizia automatica delle tracce di privacy online con Browser Anti-Traccia  <em class="tab-icons right">Migliorato</em></td>
      <td class="space"></td>
      <td class="itemfree"><i class="all-icons circle">●</i></td>
      <td class="space"></td>
      <td class="itempro"><i class="all-icons red">√</i></td>
    </tr>
    <!-- 10 -->
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

<!-- bottombuy start -->
<div class="bottombuy">
  <div class="wrapper">
    <!-- title -->
    <h2>Sconti fino all’ 80%, non perderti questa occasione!</h2>
    <!-- contdown -->
    <p class="countdown">
      <i></i>
      Offerta scade tra
      <strong>00</strong> Min
      <strong>00</strong> Sec
      <strong class="last">000</strong> Ms
    </p>
    <!-- content -->
    <div class="content clearfix">
      <!-- box -->
      <div class="bottom-box fl">
        <img src="<?php echo $pResUrl;?>images/bottombuy-box.png" alt="">
      </div>
      <!-- choice list -->
      <ul class="fl clearfix">
        <!-- 3pc+pf  -->
        <li class="imf3pcpf active"
            data-url="http://www.iobit.com/buy.php?product=it-imf83pc14mpf1999&ref=it_imf83pc14mpf1999purchasenewinstall<?php echo $refStr;?>&refs=it_purchase_imf"
            data-ga="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase3PC14mpfnewinstall-it')"
            data-price="19"
            data-del="€99.99"
            data-off="€80">
          14 Mesi / 3 PC+PF
          <i></i>
        </li>
        <!-- 3pc -->
        <li class="imf3pc"
            data-url="http://www.iobit.com/buy.php?product=it-imf83pc1999&ref=it_imf83pc1999purchasenewinstall<?php echo $refStr;?>&refs=it_purchase_imf"
            data-ga="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase3PCnewinstall-it')"
            data-price="19"
            data-del="€59.95"
            data-off="€39.96">
          12 Mesi / 3 PC
          <i></i>
        </li>
        <!-- 1pc -->
        <li class="imf1pc"
            data-url="http://www.iobit.com/buy.php?product=it-imf81pc1899&ref=it_imf81pc1899purchasenewinstall<?php echo $refStr;?>&refs=it_purchase_imf"
            data-ga="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1PCnewinstall-it')"
            data-price="18"
            data-del="€39.95"
            data-off="€20.96">
          12 Mesi / 1 PC
          <i></i>
        </li>
      </ul>
      <!-- 3pc + pf over -->
      <div class="imf3pcpfover"></div>
      <!-- else -->
      <div class="else fr">
        <!-- price -->
        <p class="price"> <strong>19</strong>.99 <i>Risparmi €80</i> <del>€99.99</del></p>
        <!-- 3pc+pf buybtn -->
        <a class="buybtn"
           href="http://www.iobit.com/buy.php?product=it-imf83pc14mpf1999&ref=it_imf83pc14mpf1999purchasenewinstall<?php echo $refStr;?>&refs=it_purchase_imf"
           onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase3PC14mpfnewinstall-it')">
          <span>APPROFITTANE ORA</span>
        </a>
      </div>
    </div>
  </div>

</div>
<!-- bottombuy end -->

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
    <dd>* Tali promozioni sono soggette alle modifiche senza preavviso, periodicamente a nostra esclusiva discrezione.</dd>
  </dl>
  <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit.  Tutti i diritti riservati</p>
</div>
<!-- footer end -->

<!-- float start -->
<div class="float">
  <!-- close -->
  <a class="close fr" href="javascript: closeFloat();">-</a>
  <div class="clear"></div>
  <nobr>
    <p>
    <span id="firstName"><?php echo $firstName;?></span> <span id="lastName"><?php echo $lastName;?></span> ha già acquistato.<br>
    Solo <b class="packsNum-gift">XX</b> pezzi restanti, affrettati!
    </p>
  </nobr>
</div>
<!-- float end -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>

</body>
</html>