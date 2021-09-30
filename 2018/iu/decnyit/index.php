<?php //	初始化
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

$name=explode(' ',trim(get_line('../db/data/db_data.txt',rand(1,500))));
$firstName=preg_replace("/(.*)(.{3})/",'${1}'.str_repeat('*',3),$name[0]);
$lastName=preg_replace("/(.*)(.{3})/",'${1}'.str_repeat('*',3),$name[1]);
$saleType=(rand(1,4)%4==0)?1:3;
$viewNum=rand(60,88);
if(!empty($_GET['action'])&&($_GET['action']=='getSales')){
  $date=$_GET['d'];
  $cName='itiuna'.$date;
  $cookie=$_COOKIE[$cName];
  if($cookie){
    $packsNum=$_COOKIE[$cName];
    if($packsNum>5){
      $packsNum--;
      setcookie($cName,$packsNum);
    }else{
      $packsNum=5;
    }
  }else{
    $packsNum=78;
    setcookie($cName,$packsNum);
  }
  echo json_encode(array('firstName'=>$firstName,'lastName'=>$lastName,'saleType'=>$saleType,'packsNum'=>$packsNum,'viewNum'=>$viewNum));
  exit();
}

$refStr='';
if(in_array($_GET['pop'],array('x_iu'))){
  $refStr.='-'.$_GET['pop'];
}
if(in_array($_GET['to'],array('softall','soft','iuself','bdplug','plug','uqprom','bdfail',
    'bdprog','iuasc'))){
  $refStr.='-'.$_GET['to'];
}
if(in_array($_GET['st'],array('iu_wr'))){
  $refStr.='-'.$_GET['st'];
}
?>
<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <title>Offerta speciale, sconto fino al 80% su IObit Uninstaller PRO – Offerta natale 2018 di IObit</title>
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
    <a class="logo" href="https://www.iobit.com/it/index.php" target="_blank">IObit</a>
    <h1>OFFERTA CAPODANNO PC PIU' PULITO CON GLI SCONTI FINO ALL'80%</h1>
    <div class="panel clearfix">
      <div class="box small">
        <img src="<?php echo $pResUrl; ?>images/imf-box.png" alt="">
        <p><strong>19</strong>,99</p>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=it-iu81pc1999&ref=it_iu81pcpurchase1812<?php echo $refStr;?>&refs=it_purchase_iu"
           onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase1812-it')">
          <i></i> <span>ACQUISTA ORA</span>
        </a>
      </div>
      <div class="box">
        <!-- countdown -->
        <ul>
          <li><strong>11</strong> ORE :</li>
          <li><strong>43</strong> MIN :</li>
          <li><strong>44</strong> SEC :</li>
          <li><strong>644</strong> MS*</li>
        </ul>
        <!-- progress-bar -->
        <div class="progress-bar">
          <div class="bar">
            <span></span>
          </div>
          <p class="packs">Soli <span class="packsNum">**</span> pezzi restanti!</p>
        </div>
        <!-- box -->
        <div class="imf-box">
          <img src="<?php echo $pResUrl; ?>images/imf-three-box.png" alt="">
          <img class="box-reduce" src="<?php echo $pResUrl; ?>images/imf-three-box-reduce.png" alt="">
        </div>
        <p><strong>15</strong><span><b>99</b> <del class="original">€99,93</del></span></p>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=it-iu83pcsdpf1599&ref=it_iu83pcsdpfpurchase1812<?php echo $refStr;?>&refs=it_purchase_iu"
           onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase1812-it')">
          <i></i> <span>APPROFITTANE ORA</span>
        </a>
        <p class="bought">
          <img src="<?php echo $pResUrl; ?>images/people.png" alt=""> Più di <span class="buyNum">**</span> acquistati
        </p>
      </div>
    </div>
  </div>
</div>
<!-- banner end -->

<!-- awards start -->
<div class="awards wrapper">
  <h2>Raccomandato e premiato dai media mondiali</h2>
  <img src="<?php echo $pResUrl; ?>images/awards.png" alt="">
</div>
<!-- awards end -->
<div class="bg">
  <!-- benfits start -->
  <div class="benfits">
    <div class="wrapper clearfix">
      <h2>Goditi la disinstallazione potente per la navigazione più sicura e veloce!</h2>
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
            <h3>Rileva e Disinstalla Bundleware</h3>
            <p>Rileva e disinstalla bundleware come adware, plugin di browser e altri software di terzi parti</p>
          </dd>
        </dl>
        <dl>
          <dt><i class="benfits02"></i></dt>
          <dd>
            <h3> Pulizia Automatica</h3>
            <p>Scansiona e pulisce i file residui per un PC più pulito e veloce</p>
          </dd>
        </dl>
        <dl>
          <dt><i class="benfits03"></i></dt>
          <dd>
            <h3> Navigazione più Sicura e Veloce</h3>
            <p>Rileva automaticamente plugin ed estensioni pubblicitarie dannose</p>
          </dd>
        </dl>
        <dl class="last">
          <dt><i class="benfits04"></i></dt>
          <dd>
            <h3>Aggiornamento di Software Sicuro <img src="<?php echo $pResUrl; ?>images/atten.png" alt="" width="100"></h3>
            <p>Con un solo clic, puoi aggiornare tutti i software importanti con un solo clic, incluso <strong>WinRAR *, la cui falla di sicurezza potrebbe mettere il tuo PC a rischio</strong></p>
            <p class="last">*Aggiorna immediatamente, una volta che la nuova versione ufficiale è pronta.</p>
          </dd>
        </dl>
      </div>
      <div class="clear"></div>
      <a class="intro" href="javascript:void(0)">Per maggiori informazioni clicca qui >></a>
    </div>
  </div>
  <!-- benfits end -->

  <!-- gift message start -->
  <div class="gift-message">
    <div class="wrapper">
      <h2>Regali Gratis Esclusivi per gli utenti di 3 PC</h2>
      <img src="<?php echo $pResUrl; ?>images/imf-center-box.png" alt="" class="img-box">
      <div class="right-message">
        <div class="box">
          <h3>Smart Defrag 6 PRO <b>€<strong>0</strong></b> <del>€29,99</del></h3>
          <p>Offre la migliore deframmentazione del disco e accelera al massimo l'hard driver!</p>
          <h3>Protected Folder <b>€<strong>0</strong></b> <del>€39,95</del></h3>
          <p>Protegge i tuoi file dagli attacchi maligni e assicura la tua privacy al 100%!</p>
        </div>
      </div>
    </div>
  </div>
  <!-- gift message end -->
</div>
<!-- between-buy start -->
<div class="between-buy">
  <div class="wrapper">
    <p class="price"><strong>€15,99</strong> Anziché <del>€99,93</del></p>
    <a href="https://www.iobit.com/buy.php?product=it-iu83pcsdpf1599&ref=it_iu83pcsdpfpurchase1812<?php echo $refStr;?>&refs=it_purchase_iu"
       onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase1812-it')"
       class="buybtn">
      <i></i> <span>OTTIENI SUBITO I REGALI</span>
    </a>
    <p class="last"> <i></i> Più di <span class="buyNum">**</span> acquistati</p>
  </div>
</div>
<!-- between-buy end -->

<!-- review -->
<div class="reviews ">
  <div class="wrapper">
    <h2>Riconoscimenti e Recensioni in tutto il mondo</h2>
    <p>Soddisfare i nostri clienti ovunque essi siano</p>
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
      <span class="recover recover22 smail"></span>
      <span class="recover recover23 smail"></span>
      <span class="recover recover24 smail"></span>
      <span class="recover recover25 smail"></span>
      <span class="recover recover26 smail"></span>
      <span class="recover recover27 smail"></span>
      <span class="recover recover28 smail"></span>
      <span class="recover recover29 smail"></span>

      <!-- Sergey Erlich  -->
      <dl class="tradotto-da-tedesco">
        <dt><img src="<?php echo $pResUrl; ?>images/sergey-erlich.png"></dt>
        <dd>
          <strong>Sergey Erlich</strong>
          <p>
            "IObit Uninstaller è probabilmente la migliore applicazione per <br>
            rimuovere i programmi non necessari dal computer."
          </p>
          <span></span>
        </dd>
      </dl>
      <!-- Fabio Tursi -->
      <dl class="html-it">
        <dt><img src="<?php echo $pResUrl; ?>images/fabio-tursi.png"></dt>
        <dd>
          <strong>Fabio Tursi</strong>
          <p>"IObit Uninstaller PRO è esattamente lo strumento di cui avevo bisogno per mantenere il mio computer pulito ed efficiente. "</p>
          <span></span>
        </dd>
      </dl>
      <!-- Fernando Lourenço Gomes -->
      <dl class="baixaki">
        <dt><img src="<?php echo $pResUrl; ?>images/fernando-lourenco-gomes.png"></dt>
        <dd>
          <strong>Fernando Lourenço Gomes</strong>
          <p>
            “IObit Uninstaller PRO è uno strumento ottimo <br>
            per disinstallare i programmi, le barre degli <br>
            strumenti e i plugin. "
          </p>
          <span></span>
        </dd>
      </dl>
      <!-- Joseph Yu -->
      <dl class="charles-r-widick">

        <dd>
          <strong>Joseph Yu</strong>
          <p>
            "IObit Uninstaller è ottimo per trovare i residui di bit e byte <br>
            nascosti nel PC che occupano lo spazio dei dischi e colpiscono <br>
            i registri."
          </p>
          <span></span>
        </dd>

        <dt><img src="<?php echo $pResUrl; ?>images/joseph-yu.png"></dt>
      </dl>
      <!-- PC.MAGAZINE -->
      <dl class="cnet">
        <dt><img src="<?php echo $pResUrl; ?>images/pc.png"></dt>
        <dd>
          <strong>PC.MAGAZINE</strong>
          <p>
            "Questa utilità, ora compatibile anche con Windows <br>
            10, disinstalla in modo veloce i programmi, come i file <br>
            di supporto randagi che sono spesso lasciati quando <br>
            un programma viene rimosso dal PC, anche le <br>
            fastidiose barre degli strumenti del browser e i plug in."
          </p>
          <span></span>
        </dd>
      </dl>
    </div>
  </div>
</div>
<!-- end review -->

<!-- compare -->
<div class="compare wrapper" id="compare">
  <table border="0" cellspacing="0" cellpadding="0" width="100%">
    <thead>
    <tr>
      <th class="itemb">
        <div class="box">
          IObit Uninstaller 8<br>
          FREE
          <span></span>
        </div>
      </th>
      <th class="text">Quali sono i vantaggi della versione PRO?</th>

      <th class="itema">
        <div class="box">
          IObit Uninstaller 8<br>
          PRO
          <span></span>
        </div>
      </th>
    </tr>
    </thead>
    <tbody>
    <!-- 01 -->
    <tr>
      <td class="itemb"><i class="all-icons">√</i></td>
      <td class="virtue">
        <img class="sup" src="<?php echo $pResUrl;?>images/icons-01.png" alt="">
        <p>Disinstalla i programmi dall'icona sul desktop, dalla finestra aperta o dall'icona della<br>
          barra delle applicazioni<span class="all-icons nuo">Nuovo</span></p>
      </td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <!-- 02 -->
    <tr>
      <td class="itemb"><i class="all-icons">√</i></td>
      <td class="virtue">
        <img src="<?php echo $pResUrl;?>images/icons-02.png" alt="">
        <p>Rimuove plugin e estensioni in Edge, Chrome, IE, Firefox, ecc.</p>
      </td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <!-- 03 -->
    <tr>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="virtue">
        <img src="<?php echo $pResUrl;?>images/icons-03.png" alt="">
        <p>Supporta la rimozione dei programmi ostinati
          <span class="all-icons ra">Migliorato 2volte</span></p>
      </td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <!-- 04 -->
    <tr>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="virtue">
        <img src="<?php echo $pResUrl;?>images/icons-04.png" alt="">
        <p>Rileva e disinstalla i programmi di terze parti insieme al freeware
        <span class="all-icons nuo">Nuovo</span></p>
      </td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <!-- 05 -->
    <tr>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="virtue">
        <img src="<?php echo $pResUrl;?>images/icons-05.png" alt="">
        <p>Elimina automaticamente gli avanzi di file che le altre utilità non sono riuscite a rimuovere
          <span class="all-icons">Migliorato</span></p>
      </td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <!-- 06 -->
    <tr>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="virtue">
        <img src="<?php echo $pResUrl;?>images/icons-06.png" alt="">
        <p>Identifica e rimuove i plugin maligni
          <span class="all-icons ra">Migliorato 2volte</span></p>
      </td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <!-- 07 -->
    <tr>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="virtue">
        <img src="<?php echo $pResUrl;?>images/icons-07.png" alt="">
        <p>Identifica e rimuove i plugin pubblicitari
          <span class="all-icons ra">Migliorato 2volte</span></p>
      </td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <!-- 08 -->
    <tr>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="virtue">
        <img src="<?php echo $pResUrl;?>images/icons-08.png" alt="">
        <p>Aggiorna tutti i software importanti con un solo clic
          <span class="all-icons ra">Migliorato 2volte</span></p>
      </td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <!-- 09 -->
    <tr>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="virtue">
        <img src="<?php echo $pResUrl;?>images/icons-09.png" alt="">
        <p>Aggiornamento automatico alla versione più recente</p>
      </td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <!-- 10 -->
    <tr>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="virtue">
        <img src="<?php echo $pResUrl;?>images/icons-10.png" alt="">
        <p>24/7 Supporto tecnico gratuito</p>
      </td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="itemb radius"></td>
      <td class="virtue radius"></td>
      <td class="itema radius"> <span class="shadow"></span></td>
    </tr>
    </tbody>
  </table>
</div>
<!-- end compare -->

<!-- bottomcart -->
<div class="bottomcart">
  <div class="wrapper clearfix">
    <h2>OFFERTA SPECIALE DI NATALE, NON FARTELA SCAPPARE!</h2>

    <div class="showcase">
      <span class="img"></span>
    </div>
    <div class="selection">
      <ul>
        <li class="three-pc active" ><span> 1 Anno/ 3 PC+SD+PF</span> <strong>-75%</strong></li>
        <li class="one-pc"><span> 1 Anno/ 1 PC</span> <strong>-50%</strong></li>
      </ul>
    </div>

    <dl class="btnarea">
      <dt> <strong><b>15</b> ,99</strong> <del>99,93<i></i></del> <sup>Risparmi 83,94</sup></dt>
      <dd>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=it-iu83pcsdpf1599&ref=it_iu83pcsdpfpurchase1812<?php echo $refStr;?>&refs=it_purchase_iu"
           onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase1812-it')">
          APPROFFITANE ORA
        </a>
      </dd>
    </dl>
  </div>
</div>
<!-- end bottomcart -->

<!-- payments  -->
<div class="service  clearfix">
  <div class="wrapper">
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/money-back.png" alt=""></dt>
      <dd>
        <strong>Garanzia di Rimborso</strong>
        Garantiamo il rimborso entro<br>
        60 giorni.
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/godaddy.png" alt=""></dt>
      <dd>
        <strong>Pagamento 100% Sicuro</strong>
        IObit offre i metodi di pagamento<br>
        sicuri per la transazione.
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/veloce.png" alt=""></dt>
      <dd>
        <strong>Attivazione Veloce</strong>
        Riceverai il codice di<br>
        licenza in pochi minuti tramite la mail.
      </dd>
    </dl>
    <dl class="last">
      <dt><img src="<?php echo $pResUrl; ?>images/servizio.png" alt=""></dt>
      <dd>
        <strong>Servizio di Supporto</strong>
        Il nostro supporto tecnico gratuito<br>
        è disponibile 24 ore su 24.
      </dd>
    </dl>
  </div>
</div>
<!-- end payments -->
<!-- footer -->
<div class="footer">
  <dl class="annotation wrapper">
    <dt>Note:</dt>
    <dd>
      1*.Tali promozioni sono soggette alle modifiche senza preavviso, periodicamente alla nostra esclusiva discrezione.
    </dd>
    <dd>
      2*.I dati potrebbero variare in base al sistema o computer.
    </dd>
  </dl>
  <div class="copyright">Copyright ©2005 - <?php echo date('Y')?> IObit. Tutti i diritti riservati</div>
</div>
<!-- end footer -->
<!-- float -->
<div class="float">
  <a href="javascript:void(0);" onclick="hideFloat();" class="close">X</a>
  <dl>
    <dt><span id="first"><?php echo $firstName;?></span> <span id="last"><?php echo $lastName;?></span> ha già attivato   <br>  <span id="saleType"><?php echo $saleType;?></span> PC / 1 Anno</dt>
    <dd class="last"><span class="viewNum"><?php echo $viewNum;?></span> utenti stanno guardando</dd>
  </dl>
</div>
<!-- end float -->
<!-- sides bg start -->
<div class="container clearfix">
  <img class="fl" src="<?php echo $pResUrl;?>images/left-bg.jpg" alt="">
  <img class="fr" src="<?php echo $pResUrl;?>images/right-bg.jpg" alt="">
</div>
<!-- sides bg end -->
<script type="text/javascript">
  refStr="<?php echo $refStr;?>";
</script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
<script src="<?php echo $pRootUrl;?>tpl/js/TweenMax.min.js"></script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script>
  var $rel = "<?php echo $refStr;?>";
</script>
</body>
</html>