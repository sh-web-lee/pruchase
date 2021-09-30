<?php
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
	$pResUrl = './';
	$pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

if(!empty($_GET['action'])&&($_GET['action']=='getSales')){
  $date=$_GET['d'];
  $cName='itdbseppa'.$date;
  $cookie=$_COOKIE[$cName];
  if($cookie){
    $packsNum=$_COOKIE[$cName];
    if($packsNum>5){
      $packsNum--;
      setcookie($cName,$packsNum);
      if(rand(1,100)%2==0){
        $packsNum++;
      }
    }else{
      $packsNum=5;
    }
  }else{
    $packsNum=84;
    setcookie($cName,$packsNum);
  }
  echo $packsNum;
  exit();
}

function microtime_float()
{
  list($usec, $sec) = explode(' ', microtime());
  return ((float)$usec + (float)$sec);
}
$buyNum = ceil(microtime_float() * 1000 / 20000) -70807174;
$buyNum = number_format($buyNum);

// 剩余礼品数
$packsNum = ceil(microtime_float()*2000/20000);
//礼品数最大值
$packsCount=360;
$packsNum = 360-($packsNum%360);
if ($_GET['action'] == 'getPacks'){
    echo $packsNum;
exit;
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
$name=explode(' ',trim(get_line('data/septsale.txt',rand(1,450))));
$firstName=preg_replace("/(.*)(.{3})/",'${1}'.str_repeat('*',3),$name[0]);
$lastName=preg_replace("/(.*)(.{3})/",'${1}'.str_repeat('*',3),$name[1]);
$saleType=(rand(1,6)%6==0)?1:3;
if($_GET['type']==2){
  $saleType=1;
}
if($_GET['action']=='getPack'){
  echo json_encode(array('firstName'=>$firstName,'lastName'=>$lastName,'saleType'=>$saleType,'buyNum'=>$buyNum));
  exit();
}

if(in_array($_GET['to'],array('purchase-3','purchase-4','purchase-6',
    'purchase-10','purchase-14','purchase-15','purchase-16',
    'purchase-21','purchase-22','gaexpired','multipcexpired','bannerbuy',
    'feature','activateweb','activateweb-5','db_freetip','expired','purchase-23',
    'purchase-28','purchase-29','purchase-30','purchase-31','purchase-32','purchase-33','bigbuy','bigbuynew'))){
  $refStr='-'.$_GET['to'];
}else{
  $refStr='';
}
if(in_array($_GET['pop'],array('x_db'))){
  $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <title>Promozione Limitata, sconti fino all’ 85% su Driver Booster PRO – Offerta Esclusiva 2018 di IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>"/>
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
  <script type="text/javascript">
    refStr='<?php echo $refStr;?>';
    function getSales(){
      var type=((typeof(packs)=='undefined')?1:2);
      $.ajax({
        type: "GET",
        url: "newyear2018.php",
        data:"action=getPack&type="+type,
        success: function(res){
          var sales=JSON.parse(res);
          var scrollHeight = $(".header .buybtn:last").offset().top;
          if ($(window).scrollTop() > scrollHeight) {
            $("#floatlayer").removeClass('on');
            setTimeout("$('#floatlayer').addClass('on');", 800);
          }
          $("#first").html(sales.firstName);
          $("#last").html(sales.lastName);
          $("#saleType").html(sales.saleType);
          $(".buyNum").html(sales.buyNum);
          setTimeout('getSales()',20000);
        }
      })
    }
    setTimeout('getSales()',20000);
  </script>
</head>
<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
<div class="header">
  <div class="wrapper">
    <a href="http://www.iobit.com" class="logo" target="_blank">IObit</a>
    <h1>FELICE ANNO NUOVO!</h1>
    <h2> SCONTISSIMI <strong>FINO AL -85%</strong> <span>Solo <b>2€</b> al mese</span></h2>
    <div class="box one-pc ">
      <p> <span class="packsNum"><?php echo $packsNum; ?></span> Pezzi Rimasti Oggi</p>
      <div class="message">
        <div class="img-box">
          <span> <b>di sconto </b> 1 PC / 1 Anno</span>
        </div>
        <dl>
          <dt>
            <del>€59,85</del>
            <strong>€21,99</strong>
          </dt>
          <dd>Risparmi €37,86</dd>
          <dd><a href="http://www.iobit.com/buy.php?product=it-db51pc2199&ref=it_db51pc2199purchase1711<?php echo $refStr;?>&refs=it_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1PC1711-it')" class="buybtn"><i></i> <span>Approfittane Ora!</span></a></dd>
        </dl>
      </div>
    </div>
    <div class="box gift-box active">
      <p> <i></i> Mancano: <strong>XX</strong> ore <strong>XX</strong> min <strong>XX</strong> sec <strong>XX</strong> ms*</p>
      <div class="message">
        <div class="img-box">
          <span> <b>di sconto </b> 3 PC / 1 Anno</span>
        </div>
        <dl>
          <dt>
            <del>€174,78</del> 
            <strong>€24,99</strong>
          </dt>
          <dd>Risparmi €149,79</dd>
          <dd><a href="http://www.iobit.com/buy.php?product=it-db5iusdpf3pc2499&ref=it_db53pciusdpf2499purchase1711<?php echo $refStr;?>&refs=it_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase3PCiusdpf1711-it')" class="buybtn"><i></i> <span>Approfittane Ora!</span></a></dd>
          <dd class="people"> <img src="<?php echo $pResUrl; ?>images/people.png" alt=""> Più di <strong class="buyNum"><?php echo $buyNum?></strong> acquistati </dd>
        </dl>

      </div>
    </div>
    <div class="box three-box">
      <p> <i></i> Mancano: <strong>XX</strong> ore <strong>XX</strong> min <strong>XX</strong> sec <strong>XX</strong> ms*</p>
      <div class="message">
        <div class="img-box">
          <span> <b>di sconto </b> 3 PC / 1 Anno</span>
        </div>
        <dl>
          <dt>
            <del>€104,84</del>  
            <strong>€24,99</strong>
          </dt>
          <dd>Risparmi €79,85</dd>
          <dd><a href="http://www.iobit.com/buy.php?product=it-db5sd3pc2499&ref=it_db53pcsd2499purchase1711<?php echo $refStr;?>&refs=it_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase3PCsd1711-it')" class="buybtn"><i></i> <span>Approfittane Ora!</span></a></dd>
        </dl>

      </div>
    </div>
  </div>
</div>
<div class="visa">
  <div class="wrapper">
    <img src="<?php echo $pResUrl; ?>images/payment.png" alt=""> 
  </div>
</div>
<div class="db-message">
  <div class="wrapper">
    <h2>Goditi più funzionalità e la migliore esperienza di gioco con Driver Booster 5 PRO! </h2>
    <img src="<?php echo $pResUrl; ?>images/db-message.png" alt="" class="box">
    <dl class="database">
      <dt>Database del 200%* più grande</dt>
      <dd>
        Un database due volte più ampio per aggiornare ancora più driver rari <br> e obsoleti
      </dd>
    </dl>
    <dl class="driver">
      <dt>Nessun Crash Imprevisto del Sistema </dt>
      <dd>Mantiene sempre aggiornati tutti i driver per assicurarti un PC stabile.</dd>
    </dl>
    <dl class="veloce">
      <dt>Download più rapidi del 200%</dt>
      <dd>Download dei driver fino al 200% più veloce, anche durante la fase di inattività del sistema</dd>
    </dl>
    <dl class="backup">
      <dt>Download e Aggiornamento più Sicuri</dt>
      <dd>Effettua automaticamente il backup e crea un punto di ripristino del sistema prima dell'aggiornamento, nel caso qualcosa vada storto.</dd>
    </dl>
  </div>
</div>
<div class="gift-message ">
  <div class="wrapper"> 
    <h2>Regali Limitati Solo per il Natale!  AFFRETTATI!</h2>
    <dl class="sd">
      <dt><span></span></dt>
      <dd>Offre la migliore </dd>
      <dd>deframmentazione del disco e accelera al massimo l'hard driver!</dd>
    </dl>
    <dl class="iu">
      <dt><span></span></dt>
      <dd><h3>regalo limitato</h3> </dd>
      <dd>La migliore scelta per disinstallare in modo potente i programmi e plug-in ostinati!</dd>
    </dl>
    <dl class="pf">
      <dt><span></span></dt>
      <dd><h3>regalo limitato</h3> </dd>
      <dd>Lo strumento più affidabile e più facile da usare per proteggere le cartelle!</dd>
    </dl>
  </div>
</div>
<div class="review">
  <div class="wrapper ">
    <h2>Riconoscimenti e Recensioni in tutto il mondo</h2>
    <h3>Scelto da oltre <strong> 200 milioni</strong> di utenti mondiali</h3>
    <div class="review-message">
      <dl class="wayne">
        <dt>
          <div class="img-box">
            <h4>Wayne Bowler</h4>
            <img src="<?php echo $pResUrl; ?>images/wayne-bowler.png" alt="">
          </div>
          <div class="line"></div>
        </dt>
        <dd>"Driver Booster PRO ha funzionato perfettamente. Facile da usare, intuitivo e informativo. Ora che l'ho scoperto, non lo mollo più... Ottimo lavoro!" – <em>Tradotto da Inglese</em></dd>
      </dl>
      <dl class="myo ">
        <dt>
          <div class="img-box">
            <h4>Myo Thuya</h4>
            <img src="<?php echo $pResUrl; ?>images/myo-thuya.png" alt="">
          </div>
          <div class="line"></div>
        </dt>
        <dd>“Il mio computer è più veloce e sicuro che negli ultimi 8 mesi con Driver Booster PRO." – <em> Tradotto da Inglese</em></dd>
      </dl>
      <dl class="pcmag ">
        <dt>
          <div class="img-box">
            <h4>PC-MAG</h4>
            <img src="<?php echo $pResUrl; ?>images/pc-mag.png" alt="">
          </div>
          <div class="line"></div>
        </dt>
        <dd>"IObit fornisce vari software di windows, e Driver Booster PRO, il quale aggiorna automaticamente i driver, è uno dei migliori." – <em>Tradotto da Inglese</em></dd>
      </dl>
      <dl class="chip ">
        <dt>
          <div class="img-box">
            <h4>chip</h4>
            <img src="<?php echo $pResUrl; ?>images/chip.png" alt="">
          </div>
          <div class="line"></div>
        </dt>
        <dd>"Driver Booster Pro: La funzionalità di download automatico di driver è disponibile solo nella versione Pro." – <em>Tradotto da Tedesco</em></dd>
      </dl>
      <dl class="fabio red-round active">
        <dt>
          <div class="img-box">
            <h4>Fabio Tursi</h4>
            <img src="<?php echo $pResUrl; ?>images/fabio-tursi.png" alt="">
          </div>
          <div class="line"></div>
        </dt>
        <dd>”Finalmente, con IObit Driver Booster Pro ho trovato il programma perfetto per mantenere pulito e aggiornato il mio sistema.”</dd>
      </dl>
      <dl class="vector ">
        <dt>
          <div class="img-box">
            <h4>Vector</h4>
            <img src="<?php echo $pResUrl; ?>images/vector.png" alt="">
          <div>
          <div class="line"></div>
        </dt>
        <dd>"Finalmente ho trovato Driver Booster Pro, il programma perfetto per mantenere sempre pulito e aggiornato il mio sistema in modo super semplice." - <em>Tradotto da Giapponese</em></dd>
      </dl>
      <dl class="adam ">
        <dt>
          <div class="img-box">
            <img src="<?php echo $pResUrl; ?>images/adam-backlund.png" alt="">
             <h4>Adam Backlund</h4>
           </div>
          <div class="line"></div>
        </dt>
        <dd>"Consiglio vivamente Driver Booster PRO: mantiene aggiornati i driver rapidamente e facilmente." – <em>Tradotto da Inglese</em></dd>
      </dl>
      <dl class="olnet ">
        <dt>
          <div class="img-box">
            <img src="<?php echo $pResUrl; ?>images/olnet.png" alt="">
             <h4>01net</h4>
           <div>
          <div class="line"></div>
        </dt>
        <dd>"Tutte le operazioni possono essere finalizzate con un solo clic, Driver Booster ti aiuta a risparmiare il tuo tempo rendendo il PC più stabile." – <em>Tradotto da Francese</em></dd>
      </dl>
      <dl class="olorin ">
        <dt>
          <div class="img-box">
            <img src="<?php echo $pResUrl; ?>images/olorin.png" alt="">
             <h4>Olorin 89</h4>
           </div>
          <div class="line"></div>
        </dt>
        <dd>"Driver Booster è lo strumento di aggiornamento driver che semplifica la vita a tutti."</dd>
      </dl>
      <dl class="html ">
        <dt>
          <div class="img-box">
            <img src="<?php echo $pResUrl; ?>images/html-it.png" alt="">
             <h4>HTML-it</h4>
          </div>
          <div class="line"></div>
        </dt>
        <dd>"Driver Booster di IObit, ti offre una soluzione dell'aggiornamento dei driver più semplice con la sua più avanzata tecnologia."</dd>
      </dl>

    </div>
  </div>
</div>
<div class="comparison_table wrapper" id="compare">
  <table border="0" cellspacing="0" cellpadding="0" width="100%">
    <thead>
      <tr>
        <th colspan="2" class="text">Il confronto tra i prodotti:</th>
        <th class="space"></th>
        <th class="itemb">
          Driver Booster <br> FREE
        </th>
        <th class="space"></th>
        <th class="itema">
          Driver Booster  <br> PRO<span>1 PC / 1 Anno</span>
        </th>
        <th class="space"></th>
        <th class="itemc">
          Driver Booster <br> PRO <span>3 PC / 1 Anno</span>
        </th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_01.png"></td>
        <td class="virtue">Analizza e identifica automaticamente i driver obsoleti, mancanti o errati</td>
        <td class="space"></td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-mark.png"></td>
        <td class="space"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/black-mark.png"></td>
        <td class="space"></td>
        <td class="itemc"><img src="<?php echo $pResUrl; ?>images/red-mark.png"></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_02.png"></td>
        <td class="virtue">Scarica e aggiorna i driver obsoleti con un solo clic</td>
        <td class="space"></td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-mark.png"></td>
        <td class="space"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/black-mark.png"></td>
        <td class="space"></td>
        <td class="itemc"><img src="<?php echo $pResUrl; ?>images/red-mark.png"></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_03.png"></td>
        <td class="virtue">Sblocca la velocità massima di aggiornamento <sup>MIGLIORATO</sup> <br> dei driver </td>
        <td class="space"></td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/normal-mark.png"></td>
        <td class="space"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/black-mark.png"></td>
        <td class="space"></td>
        <td class="itemc"><img src="<?php echo $pResUrl; ?>images/red-mark.png"></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_04.png"></td>
        <td class="virtue">
         Database del 200% più grande per aggiornare più <sup>MIGLIORATO</sup> <br> driver rari e obsoleti 
        </td>
        <td class="space"></td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/normal-mark.png"></td>
        <td class="space"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/black-mark.png"></td>
        <td class="space"></td>
        <td class="itemc"><img src="<?php echo $pResUrl; ?>images/red-mark.png"></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_05.png"></td>
        <td class="virtue">
          Riduce i blocchi del sistema, migliorandone le prestazioni
        </td>
        <td class="space"></td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/normal-mark.png"></td>
        <td class="space"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/black-mark.png"></td>
        <td class="space"></td>
        <td class="itemc"><img src="<?php echo $pResUrl; ?>images/red-mark.png"></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_06.png"></td>
        <td class="virtue two">
          Scaricamento, aggiornamento e installazione automatica <sup class="red">NUOVO</sup> <br> dei driver durante i periodi di inattività del sistema 
        </td>
        <td class="space"></td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/normal-mark.png"></td>
        <td class="space"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/black-mark.png"></td>
        <td class="space"></td>
        <td class="itemc"><img src="<?php echo $pResUrl; ?>images/red-mark.png"></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_07.png"></td>
        <td class="virtue">Backup automatico di tutti i driver per il ripristino sicuro</td>
        <td class="space"></td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/normal-mark.png"></td>
        <td class="space"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/black-mark.png"></td>
        <td class="space"></td>
        <td class="itemc"><img src="<?php echo $pResUrl; ?>images/red-mark.png"></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_08.png"></td>
        <td class="virtue">
          Aggiornamento prioritario delle periferiche<sup>MIGLIORATO</sup> <br> per giocare 
        </td>
        <td class="space"></td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/normal-mark.png"></td>
        <td class="space"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/black-mark.png"></td>
        <td class="space"></td>
        <td class="itemc"><img src="<?php echo $pResUrl; ?>images/red-mark.png"></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/cop-icon-09.png"></td>
        <td class="virtue">
          Rileva e ripara gli errori di driver in modo efficace
        </td>
        <td class="space"></td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/normal-mark.png"></td>
        <td class="space"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/black-mark.png"></td>
        <td class="space"></td>
        <td class="itemc"><img src="<?php echo $pResUrl; ?>images/red-mark.png"></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_09.png"></td>
        <td class="virtue">Aggiornamento automatico alla versione più recente</td>
        <td class="space"></td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/normal-mark.png"></td>
        <td class="space"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/black-mark.png"></td>
        <td class="space"></td>
        <td class="itemc"><img src="<?php echo $pResUrl; ?>images/red-mark.png"></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_10.png"></td>
        <td class="virtue">Supporto tecnico 24/7 gratuito su richiesta</td>
        <td class="space"></td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/normal-mark.png"></td>
        <td class="space"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/black-mark.png"></td>
        <td class="space"></td>
        <td class="itemc"><img src="<?php echo $pResUrl; ?>images/red-mark.png"></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_11.png"></td>
        <td class="virtue">Supporta 3 PC</td>
        <td class="space"></td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/normal-mark.png"></td>
        <td class="space"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/normal-mark.png"></td>
        <td class="space"></td>
        <td class="itemc"><img src="<?php echo $pResUrl; ?>images/red-mark.png"></td>
      </tr>
    </tbody>
  </table>
</div>
<div class="bottom-buy">
  <div class="wrapper">
    <h2>Con solo <strong>€2</strong> al mese, potresti far funzionare il tuo PC super veloce come un NUOVO!</h2>
    <div class="img-box three-gift">
      <span class="db-box"></span>
      <img src="<?php echo $pResUrl; ?>images/sd-box-bottom.png" alt="" class="one-gift">
      <img src="<?php echo $pResUrl; ?>images/three-gift.png" alt="" class="three-box">
    </div>
    <ul>
      <li> <span>1 PC / 1 Anno</span> <strong>-60%</strong></li>
      <li class="active"> <span>3 PC / 1 Anno + 3 Regali Gratis </span> <strong>-85%</strong></li>
      <li> <span>3 PC / 1 Anno + 1 Regalo Gratis</span> <strong>-75%</strong></li>
    </ul>
    <dl>
      <dt><del>€144,97 </del> <strong>€24,99</strong></dt>
      <dd>Risparmi €149,79</dd>
      <dd><a href="http://www.iobit.com/buy.php?product=it-db5iusdpf3pc2499&ref=it_db53pciusdpf2499purchase1711<?php echo $refStr;?>&refs=it_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase3PCiusdpf1711-it')" class="buybtn"><i></i> <span>Approfittane Ora!</span></a></dd>
    </dl>
  </div>
</div>
<div class="payment wrapper clearfix">
  <dl>
    <dt><img src="<?php echo $pResUrl; ?>images/moeny-back.png" alt=""></dt>
    <dd><strong>Garanzia di Soddisfazione</strong> Garantiamo il rimborso entro <br> 60 giorni dalla data <br> d’acquisto.</dd>
  </dl>
  <dl>
    <dt><img src="<?php echo $pResUrl; ?>images/bottom-verified.png" alt=""></dt>
    <dd><strong>Pagamento Assicurato</strong> IObit offre i metodi di pagamento <br> sicuri per la transazione.</dd>
  </dl>
  <dl>
    <dt><img src="<?php echo $pResUrl; ?>images/opswat.png" alt=""></dt>
    <dd><strong>Certificazione d’Esperto</strong>Testato e certificato dagli <br> esperti professionali di OPSWAT.</dd>
  </dl>
  <dl>
    <dt><img src="<?php echo $pResUrl; ?>images/servizio.png" alt=""></dt>
    <dd><strong>Servizio di Supporto</strong> Il nostro supporto tecnico gratuito <br> è disponibile tutto il giorno, <br> 24 ore su 24.</dd>
  </dl>
</div>
<dl class="annotation wrapper">
  <dt>Note:</dt>
  <dd>* Data potrebbe variare in base al sistema o computer.</dd>
  <dd>* Tali promozioni sono soggette alle modifiche senza preavviso, periodicamente alla nostra esclusiva discrezione.</dd>
</dl>
<p class="copyright">Copyright ©2005 - <?php echo date('Y')?> IObit. Tutti i diritti riservati</p>
<div class="floatlayer" id="floatlayer">
  <h4><span id="first"><?php echo $firstName;?></span> <span id="last"><?php echo $lastName;?></span>
  </h4>
  <p>ha appena attivato <span id="saleType"> <?php echo $saleType;?></span> PC / 1 Anno</p>
  <i class="close">×</i>
</div>

</body>
<script type="text/javascript" src="<?php echo $pResUrl; ?>js/script.js"></script>
</html>