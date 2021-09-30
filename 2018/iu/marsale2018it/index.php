<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';

$reduceNum=95689561;
$reTime=15;
$buyNum = number_format(ceil(microtimeFloat()*1000/(1000*$reTime)) - $reduceNum);
$refStr='';

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

$name=explode(' ',trim(get_line('data/names_mar.txt',rand(1,421))));
$firstName=preg_replace("/(.*)(.{3})/",'${1}'.str_repeat('*',3),$name[0]);
$lastName=preg_replace("/(.*)(.{3})/",'${1}'.str_repeat('*',3),$name[1]);
$saleType=(rand(1,6)%6==0)?1:3;

if ($_GET['action'] == 'getSales') {
  $date = $_GET['d'];
  $c_name = 'itiumarp' . $date;
  if (!isset($_COOKIE[$c_name])) {
    $packsNum = 114;
  } else {
    if (intval($_COOKIE[$c_name]) <= 15) {
      $packsNum = 15;
    } else {
      $packsNum = $_COOKIE[$c_name] - 1;
    }
  }
  setcookie($c_name, $packsNum, time() + 3600 * 24 *30);
  echo json_encode(array('packsNum'=>$packsNum,'firstName'=>$firstName,'lastName'=>$lastName,'saleType'=>3,'buyNum'=>$buyNum));
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
?>
<!DOCTYPE html>
<html lang="it">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Offerta esclusiva, sconti fino al 70% su IObit Uninstaller PRO – Offerte speciale 2018 di IObit</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Lato:400,700'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
  <script type="text/javascript">
    function getBuyNum(){
      $.ajax({
        type: "GET",
        url: "<?php echo $pRootUrl;?>callback.php",
        data: "action=getBuyNum&reduceNum=<?php echo $reduceNum;?>&reTime=<?php echo $reTime;?>&r="+Math.random(),
        success: function(packs){
          $('.buyNum').html(packs);
          setTimeout('getBuyNum()', 15000);
        }
      });
    }
    setTimeout('getBuyNum()', 15000);
  </script>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
  
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com/it/index.php" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit" />
      </a>
      <h1>OFFERTA ESCLUSIVA PER TE!</h1>
      <p class="subhead"><b>9</b><sup>°</sup>anniversario di IObit, festeggia con noi il SOTTOCOSTO!</p>
      <div class="offer clearfix">
        <div class="list left">
          <img src="<?php echo getStaticUrl('images/iubox.png')?>" alt=""/>
          <div class="price">
            <p><strong class="sale">19</strong><small>,99</small></p>
            <a class="buybtn small"
               href="https://www.iobit.com/buy.php?product=it-iu81pc1999&ref=it_iu81pcpurchase1803b<?php echo $refStr;?>&refs=it_purchase_iu"
               onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase1803-it')">
              <i class="all-icons"></i>
              <big>ACQUISTA ORA</big>  
            </a>
          </div>
        </div>
        <div class="list right">
          <div class="timebox">
            <ul id="countdown1" class="countdown">
              <li><strong>05</strong> ore </li>
              <li><strong>25</strong> min </li>
              <li><strong>47</strong> sec</li>
              <li class="last"><strong>241</strong> ms*</li>
            </ul>
          </div>
          <div class="imgbox">
            <img src="<?php echo getStaticUrl('images/iubox-sale.png')?>" alt=""/>
          </div>
          <div class="price">
            <p>
              <strong class="sale">15</strong>
              <b>
                <span>Risparmi <font class="discount">43,99</font></span>
                <small>,99 <del class="original">59,98</del></small>
              </b>
            </p>
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=it-iu83pcsd1599&ref=it_iu83pcsdpurchase1803b<?php echo $refStr;?>&refs=it_purchase_iu"
               onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase1803-it')">
              <i class="all-icons"></i>
              <big>ACQUISTA ORA</big>   
            </a>
          </div>
          <p class="people"><i class="all-icons"></i>  Più di <span class="buyNum"><?php echo $buyNum;?></span> acquistati</p>
          <div class="sign"></div>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- patment start -->
  <div class="payment">
    <div class="wrapper"><img src="<?php echo getStaticUrl('images/payments.png')?>" alt="" /></div>
  </div>
  <!-- patment end -->

  <div class="wrapper">
    <!-- benfits start -->
    <div class="benfits wrapper clearfix">
      <h2>Goditi la disinstallazione potente per la navigazione più assicurata e veloce!</h2>
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
            <h3><b class="nuovo">NUOVO!</b> Rileva e Disinstalla Bundleware</h3>
            <p>Rileva e disinstalla bundleware come adware, plugin di browser e altri software di terzi parti</p>
          </dd>
        </dl>
        <dl>
          <dt><i class="benfits02"></i></dt>
          <dd>
            <h3><b>MIGLIORATO!</b> Pulizia Automatica</h3>
            <p>Scansiona e pulisce i file residui per un PC più pulito e veloce</p>
          </dd>
        </dl>
        <dl>
          <dt><i class="benfits03"></i></dt>
          <dd>
            <h3><b>MIGLIORATO!</b> Navigazione più Sicura e Veloce</h3>
            <p>Rileva automaticamente plugin ed estensioni pubblicitarie dannose</p>
          </dd>
        </dl>
        <dl class="last">
          <dt><i class="benfits04"></i></dt>
          <dd>
            <h3><b class="nuovo">NUOVO!</b> Software Updater </h3>
            <p>Aggiorna i programmi sul tuo computer con un solo clic</p>
          </dd>
        </dl>
      </div>
    </div>
    <!-- benfits end -->

    <!-- donation start -->
    <div class="donation">
      <h2>Solo per gli VIP utenti di 3 PC! </h2>
      <dl class="clearfix">
        <dt><img src="<?php echo getStaticUrl('images/sd.png')?>" alt=""/></dt>
        <dd>
          <h3>Smart Defrag PRO <strong>€0</strong> <del>€29,99</del></h3>
          <ul>
            <li>
              <i class="all-icons"></i>
              <span>Deframmentazione automatica programmata.</span>
            </li>
            <li>
              <i class="all-icons"></i>
              <span>Accesso 200% più rapido ai file e ai dispositivi.</span>
            </li>
          </ul>
        </dd>
      </dl>
    </div>
    <!-- donation end -->
  </div>

  <!-- review start -->
  <div class="review">
    <div class="wrapper">
      <!-- awards start -->
      <div class="awards">
        <h2>Riconoscimenti</h2>
        <img src="<?php echo getStaticUrl('images/awards.png')?>" alt="" />
      </div>
      <!-- awards end -->
      <h2>Dicono di noi</h2>
      <dl class="media clearfix">
        <dt class="fl"><img src="<?php echo getStaticUrl('images/pc-magazine.png')?>" alt="PC.MAGAZINE" /></dt>
        <dd class="fl">
          <h3>PC.MAGAZINE</h3>
          <i class="all-icons">★★★★★</i>
          <p>
            "Questa utilità, ora compatibile anche con Windows 10, disinstalla in modo veloce i programmi, come i file di supporto randagi che sono spesso lasciati quando un programma viene rimosso dal PC, anche le fastidiose barre degli strumenti del browser e i plug in." 
          </p>
        </dd>
      </dl>
      <div class="list clearfix">
        <dl class="fl">
          <dt class="fl"><img src="<?php echo getStaticUrl('images/fabio-tursi.png')?>" alt="Fabio Tursi" /></dt>
          <dd class="fl">
            <h3>Fabio Tursi</h3>
            <i class="all-icons">★★★★★</i>
            <p>
              "IObit Uninstaller PRO è esattamente lo strumento di cui avevo bisogno per mantenere il mio computer pulito ed efficiente. "
            </p>
          </dd>
        </dl>
        <dl class="fr">
          <dt class="fr"><img src="<?php echo getStaticUrl('images/sergey-erlich.png')?>" alt="Sergey Erlich" /></dt>
          <dd class="fr">
            <h3>Sergey Erlich</h3>
            <i class="all-icons">★★★★★</i>
            <p>
              "IObit Uninstaller è probabilmente la migliore applicazione per rimuovere i programmi non necessari dal computer."
            </p>
          </dd>
        </dl>
      </div>
      <div class="list clearfix">
        <dl class="fl">
          <dt class="fl"><img src="<?php echo getStaticUrl('images/joseph-yu.png')?>" alt="Joseph Yu" /></dt>
          <dd class="fl">
            <h3>Joseph Yu</h3>
            <i class="all-icons">★★★★★</i>
            <p class="joseph">
              "IObit Uninstaller è ottimo per trovare i residui di bit e byte nas-costi nel PC che occupano lo spazio dei dischi e colpiscono i registri." 
            </p>
          </dd>
        </dl>
        <dl class="fr last">
          <dt class="fr"><img src="<?php echo getStaticUrl('images/fernando.png')?>" alt="Fernando Lourenço Gomes" /></dt>
          <dd class="fr">
            <h3>Fernando Lourenço Gomes</h3>
            <i class="all-icons">★★★★★</i>
            <p>
              “IObit Uninstaller PRO è uno strumento ottimo per disinstallare i programmi, le barre di strumenti e i plugin. "
            </p>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- review end -->

  <!-- comparison start -->
  <div class="comparison wrapper" id="compare">
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
      <thead>
        <tr>
          <th class="text" colspan="2">Quali sono i vantaggi della versione PRO?</th>
          <th class="itemb">IObit Uninstaller 8 <p>FREE</p></th>
          <th class="itema">IObit Uninstaller 8 <p>PRO</p></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_01.png')?>" alt="" /></td>
          <td class="virtue">
            <b>Disinstalla i programmi dall'icona sul desktop, dalla finestra aperta o dall'icona della barra delle applicazioni</b>
            <span class="nuo">Nuovo</span>
          </td>
          <td class="itemb"><i class="all-icons">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_02.png')?>" alt="" /></td>
          <td class="virtue">Rimuove plugin e estensioni nel Edge, Chrome, IE, Firefox, ecc.</td>
          <td class="itemb"><i class="all-icons">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_03.png')?>" alt="" /></td>
          <td class="virtue">Supporta la rimozione dei programmi ostinati <span class="two">Migliorato</span></td>
          <td class="itemb"><i class="all-icons circle">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt="" /></td>
          <td class="virtue">Rileva e disinstalla i programmi di terze parti insieme al freeware <span class="nuo">Nuovo</span></td>
          <td class="itemb"><i class="all-icons circle">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_05.png')?>" alt="" /></td>
          <td class="virtue">
            <b>Elimina automaticamente gli avanzi di file che le altre utilità non sono riuscite a rimuovere </b><span>Migliorato</span>
          </td>
          <td class="itemb"><i class="all-icons circle">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_06.png')?>" alt="" /></td>
          <td class="virtue">Identifica e rimuove i plugin maligni <span class="two">Migliorato</span></td>
          <td class="itemb"><i class="all-icons circle">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_07.png')?>" alt="" /></td>
          <td class="virtue">Identifica e rimuove i plugin pubblicitari <span class="two">Migliorato</span></td>
          <td class="itemb"><i class="all-icons circle">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt="" /></td>
          <td class="virtue">Aggiorna tutti i software importanti con un solo clic <span class="two five">Migliorato</span></td>
          <td class="itemb"><i class="all-icons circle">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_09.png')?>" alt="" /></td>
          <td class="virtue">Aggiorna in automatico alla versione più recente</td>
          <td class="itemb"><i class="all-icons circle">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_10.png')?>" alt="" /></td>
          <td class="virtue">24/7 Supporto tecnico in gratuito</td>
          <td class="itemb"><i class="all-icons circle">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- comparison end -->

  <!-- footbuy start -->
  <div class="footbuy">
    <div class="wrapper">
      <h2>SCONTI fino al 70%, NON Fartela Scappare! </h2>
      <div class="panel clearfix">
        <div class="imgbox fl">
          <img class="sale active" src="<?php echo getStaticUrl('images/iubox-sale.png')?>" alt="" />
          <img class="iu" src="<?php echo getStaticUrl('images/iubox.png')?>" alt="" />
        </div>
        <ul class="fl">
          <li class="active anno" data-num="1">
            <h3>1 Anno/ 3 PC+ SD</h3>
          </li>
          <li data-num="0"><h3>1 Anno/ 1 PC</h3></li>
        </ul>
        <div class="price fr">
          <p>
            <strong class="sale">15</strong>
            <b>
              <span>Risparmi <font class="discount">43,99</font></span>
              <small>,99 <del class="original">59,98</del></small>
            </b>
          </p>
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=it-iu83pcsd1599&ref=it_iu83pcsdpurchase1803b<?php echo $refStr;?>&refs=it_purchase_iu"
             onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase1803-it')">
            <i class="all-icons"></i>
            <big>ACQUISTA ORA</big>  
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- footbuy end -->

  <!-- bottom start -->
  <div class="bottom">
    <div class="wrapper">
      <!-- service start -->
      <div class="service clearfix">
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt="" /></dt>
          <dd><h4>Garanzia di Rimborso</h4></dd>
          <dd>Garantiamo il rimborso entro <span>60 giorni.</span></dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/godaddy-secure.png')?>" alt="" /></dt>
          <dd><h4>Pagamento 100% Sicuro</h4></dd>
          <dd>IObit offre i metodi di pagamento <span>sicuri per la transazione.</span></dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/cart.png')?>" alt="" /></dt>
          <dd><h4>Attivazione Veloce</h4></dd>
          <dd>Riceverai il codice di <span>licenza in pochi minuti tramite la mail.</span></dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/24hours.png')?>" alt="" /></dt>
          <dd><h4>Servizio di Supporto</h4></dd>
          <dd>Il nostro supporto tecnico gratuito <span>è disponibile 24 ore su 24.</span></dd>
        </dl>
      </div>
      <!-- service end -->

      <!-- annotation start -->
      <dl class="annotation">
        <dt>Note:</dt>
        <dd>Tali promozioni sono soggette periodicamente a modifiche senza preavviso, a nostra esclusiva discrezione.</dd>
        <dd>I dati potrebbero variare in base al sistema o computer.</dd>
      </dl>
      <!-- annotation end -->

      <!-- footer start -->
      <div class="footer">Copyright ©2005 - <?php echo date('Y')?> IObit. Tutti i diritti riservati</div>
      <!-- footer end -->
    </div>
  </div>
  <!-- bottom end -->

  <!-- floatlayer start -->
  <div id="floatlayer" class="floatlayer">
    <p class="one"><span id="first"><?php echo $firstName;?></span> <span id="last"><?php echo $lastName;?></span> <span class="salesType">ha appena acquistato</span></p>
    <p><span class="packsNum">***</span> <span class="salesDes">pezzi restanti, attiva ora</span></p>
    <i class="close">×</i>
    <div class="title">
      <h4>Offerta Disponibile <br>per</h4>
      <ul id="countdown2" class="countdown">
        <li><strong>09 </strong> min </li>
        <li><strong>09 </strong> sec </li>
        <li class="last"><strong>456 </strong> ms *</li>
      </ul>
    </div>
  </div>
  <!-- floatlayer end -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>