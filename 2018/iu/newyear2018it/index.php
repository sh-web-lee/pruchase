<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
if(!empty($_GET['action'])&&($_GET['action']=='getSales')){
  $date=$_GET['d'];
  $cName='itaugiu'.$date;
  $cookie=$_COOKIE[$cName];
  if($cookie){
    $packsNum=$_COOKIE[$cName];
    if($packsNum>19){
      $packsNum--;
      setcookie($cName,$packsNum);
      if(rand(1,100)%2==0){
        $packsNum++;
      }
    }else{
      $packsNum=19;
    }
  }else{
    $packsNum=137;
    setcookie($cName,$packsNum);
  }
  echo $packsNum;
  exit();
}
  include $pRootUrl.'include/common.inc.php';
  $reduceNum=94689561;
  $reTime=15;
  $buyNum = number_format(ceil(microtimeFloat()*1000/(1000*$reTime)) - $reduceNum);
$refStr='';
if(in_array($_GET['pop'],array('x_iu'))){
  $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="it">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Promozione Limitata, sconti fino al 80% su IObit Uninstaller PRO – Offerte Speciale di IObit 2018</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Lato:400,700'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<!-- Google Analytics Content Experiment code -->
<script>function utmx_section(){}function utmx(){}(function(){var
k='114018648-663',d=document,l=d.location,c=d.cookie;
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
      <h1>Offerta Limitata</h1>
      <h3>Sconti fino all’80% con i regali esclusivi</h3>
      <!-- time -->
      <ul id="countdown" class="countdown">
        <li class="first">Mancano <strong>00</strong> ore: </li>
        <li><strong>00</strong> min: </li>
        <li><strong>00</strong> sec</li>
      </ul>
      <div class="panel clearfix">
        <div class="fl left">
          <img class="iubox" src="<?php echo getStaticUrl('images/iubox.png')?>" alt="" />
          <div class="seven"></div>
        </div>
        <div class="offer fl">
          <h2>IObit Uninstaller 7 PRO</h2>
          <span class="name">1 Anno / 3 PC</span>
          <p class="gift"><i class="all-icons"></i> Protected Folder+Smart Defrag PRO a soli <b>€64,94</b></p>
          <strong>15,<small>99€</small></strong> <del>99,93€</del>
          <a class="buybtn" 
             href="https://www.iobit.com/buy.php?product=it-iu73pcsdpf1599&ref=it_iu73pcsdpfpurchase1711<?php echo $refStr;?>&refs=it_purchase_iu"
             onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase3PCsdpf1711-it')">
            <div class="solid-layer"></div>
            <div class="border-layer"></div>
            <div class="text-layer">ACQUISTA ORA</div>
          </a>
          <p class="people"><i class="all-icons"></i> Più di <span class="buyNum"><?php echo $buyNum;?></span> acquistati</p>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- patment start -->
  <div class="payment wrapper"><img src="<?php echo getStaticUrl('images/payments.png')?>" alt="" /></div>
  <!-- patment end -->

  <!-- intro start -->
  <div class="intro wrapper">
    <h2>Goditi la disinstallazione potente per una navigazione più sicura e veloce!</h2>
    <p>Abbonamento di 1 Anno per 3 PC</p>
    <div class="introimg">
      <div class="imglist">
        <ul>
          <li class="shot3"><img src="<?php echo getStaticUrl('images/screenshot02.png')?>" alt=""></li>
          <li class="shot2"><img src="<?php echo getStaticUrl('images/screenshot03.png')?>" alt=""></li>
          <li class="shot1"><img src="<?php echo getStaticUrl('images/screenshot01.png')?>" alt=""></li>
        </ul>
      </div>
      <a href="javascript:;" class="prev btn"><</a>
      <a href="javascript:;" class="next btn">></a>
    </div>
    <div class="feature clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature_01.png')?>" alt=""></dt>
        <dd>
          <h3><b>NUOVO!</b> Rileva e Disinstalla Bundleware</h3>
          <p>Rileva e disinstalla bundleware come adware, plugin di browser e altri software di terzi parti</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature_02.png')?>" alt=""></dt>
        <dd>
          <h3><b>MIGLIORATO!</b> Pulizia Automatica</h3>
          <p>Scansiona e pulisce i file residui per un PC più pulito e veloce</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature_03.png')?>" alt=""></dt>
        <dd>
          <h3><b>MIGLIORATO!</b> Navigazione più Sicura e Veloce</h3>
          <p>Rileva automaticamente plugin ed estensioni pubblicitarie dannose</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature_04.png')?>" alt=""></dt>
        <dd>
          <h3><b>NUOVO!</b> Software Updater</h3>
          <p>Aggiorna i programmi sul tuo computer con un solo clic</p>
        </dd>
      </dl>
    </div>
    <a href="javascript: void(0);" class="comparebtn">Scopri di più sulla versione PRO>></a>
  </div>
  <!-- intro end -->

  <!-- donation start -->
  <div class="donation">
    <div class="wrapper">
      <h2>Solo per gli utenti VIP di IObit Uninstaller PRO</h2>
      <div class="cont clearfix">
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/gift-pf.png')?>" alt="" /></dt>
          <dd>
            <h3>Protected Folder <strong>€0 </strong> <del>€39,95</del></h3>
            <ul>
              <li><i class="all-icons"></i>Nessuna preoccupazione per la perdita della privacy</li>
              <li><i class="all-icons"></i>Protezione perfetta per i tuoi file personali importanti</li>
            </ul>
          </dd>
        </dl>
        <dl class="sd">
          <dt><img src="<?php echo getStaticUrl('images/gift-sd.png')?>" alt="" /></dt>
          <dd>
            <h3>Smart Defrag PRO <strong>€0 </strong> <del>€29,99</del></h3>
            <ul>
              <li><i class="all-icons"></i>Deframmentazione automatica programmata</li>
              <li><i class="all-icons"></i>Accesso ai file e ai dispositivi del 200% più rapido</li>
            </ul>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- donation end -->

  <div class="wrapper">
    <!-- awards start -->
    <div class="awards">
      <h2>Riconoscimenti</h2>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt="" />
    </div>
    <!-- awards end -->

    <!-- review start -->
    <div class="review">
      <div class="content">
        <dl>
          <dt>
          <h3>Recensioni degli utenti</h3></dt>
          <dd>
            <h4>IObit Uninstaller PRO è un ottimo strumento per disinstallare i programmi, le barre degli strumenti ed i plugin.</h4>
          </dd>
          <dd>
            “Questo programma è molto utile grazie all’opzione per la disinstallazione dei programmi, delle applicazioni e alla pulizia dei registri associati; lo consiglio vivamente a tutti!”
          </dd>
        </dl>
        <dl class="active">
          <dt>
          <h3>Recensioni dei media</h3></dt>
          <dd>
            <h4>Se ti serve un programma che disinstalli le applicazioni in modo completo senza lasciare tracce, prova IObit Uninstaller.</h4>
          </dd>
          <dd>
            Questa utilità, compatibile anche con Windows 10, disinstalla velocemente i programmi come i file di supporto residui al termine di una disinstallazione. Anche le fastidiose barre degli strumenti del browser e i plug-in vengono eliminati facilmente. In breve, se si utilizza un PC Windows, è necessario scaricare IObit Uninstaller.
          </dd>
        </dl>
        <dl>
          <dt>
          <h3>Recensioni degli utenti</h3></dt>
          <dd>
            <h4>IObit Uninstaller PRO è esattamente lo strumento di cui avevo bisogno per mantenere il mio computer pulito ed efficiente. </h4>
          </dd>
          <dd>
            Grazie all’integrazione totale con lo strumento di rimozione di Win10, lo uso ogni volta che voglio disinstallare un programma. IObit Uninstaller PRO rimuove ogni rimasuglio di file e chiave di registro, senza apportare modifiche che potrebbero danneggiare il sistema. Raccomando sinceramente questo programma a tutti!
          </dd>
        </dl>
      </div>
      <ul class="users clearfix">
        <li>
          <div class="pic"><img src="<?php echo getStaticUrl('images/fernando.png')?>" alt="Fernando Lourenço Gomes">
          </div>
          <p>Fernando Lourenço Gomes</p>
        </li>
        <li class="active">
          <div class="pic"><img src="<?php echo getStaticUrl('images/pc-magazine.png')?>" alt="PC.MAGAZINE"></div>
          <p>PC.MAGAZINE</p>
        </li>
        <li>
          <div class="pic"><img src="<?php echo getStaticUrl('images/fabio-tursi.png')?>" alt="Fabio Tursi">
          </div>
          <p>Fabio Tursi</p>
        </li>
      </ul>
    </div>
    <!-- review end -->

    <!-- comparison start -->
    <div class="comparison" id="compare">
      <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <thead>
          <tr>
            <th class="text" colspan="2">Quali sono i vantaggi della versione PRO?</th>
            <th class="itemb">IObit Uninstaller 7 FREE</th>
            <th class="itema">IObit Uninstaller 7 PRO</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_01.png')?>" alt="" /></td>
            <td class="virtue">Disinstalla programmi indesiderati in modo veloce e completo<span>Migliorato</span></td>
            <td class="itemb"><i class="all-icons">√</i></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_02.png')?>" alt="" /></td>
            <td class="virtue">Rimuove plugin ed estensioni in Edge, Chrome, IE, Firefox, ecc. <span class="nuo">Nuovo</span></td>
            <td class="itemb"><i class="all-icons">√</i></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_03.png')?>" alt="" /></td>
            <td class="virtue">Rimuove facilmente gli aggiornamenti problematici di Windows<span>Migliorato</span></td>
            <td class="itemb"><i class="all-icons">√</i></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt="" /></td>
            <td class="virtue">Disinstalla le app da Win 10 e Win 8 in modo completo</td>
            <td class="itemb"><i class="all-icons">√</i></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_05.png')?>" alt="" /></td>
            <td class="virtue">Database più ampio per disinstallare in tempo reale molti più programmi ostinati<span class="nuo">Nuovo</span></td>
            <td class="itemb"><i class="all-icons circle">√</i></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_06.png')?>" alt="" /></td>
            <td class="virtue">Disinstalla plugin maligni per un browser sicuro<span class="nuo">Nuovo</span> </td>
            <td class="itemb"><i class="all-icons circle">√</i></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_07.png')?>" alt="" /></td>
            <td class="virtue">Esperienza di navigazione online più pulita e veloce con Adware Removal<span class="nuo">Nuovo</span> </td>
            <td class="itemb"><i class="all-icons circle">√</i></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt="" /></td>
            <td class="virtue">Pulisce automaticamente i residui dei programmi disinstallati da terzi </td>
            <td class="itemb"><i class="all-icons circle">√</i></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_09.png')?>" alt="" /></td>
            <td class="virtue">Aggiornamento automatico alla versione più recente</td>
            <td class="itemb"><i class="all-icons circle">√</i></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_10.png')?>" alt="" /></td>
            <td class="virtue">Supporto tecnico gratuito 24/7</td>
            <td class="itemb"><i class="all-icons circle">√</i></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <th colspan="2"></th>
            <th class="itemb">IObit Uninstaller 7 FREE<p>La tua edizione attuale </p></th>
            <th class="itema">
              IObit Uninstaller 7 PRO
              <p><strong>15,99€ </strong> <del>99,93€</del></p>
              <a class="buybtn" 
                 href="https://www.iobit.com/buy.php?product=it-iu73pcsdpf1599&ref=it_iu73pcsdpfpurchase1711<?php echo $refStr;?>&refs=it_purchase_iu"
                 onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase3PCsdpf1711-it')">
                <div class="solid-layer"></div>
                <div class="border-layer"></div>
                <div class="text-layer">ACQUISTA ORA</div>
              </a>
            </th>
          </tr>
        </tfoot>
      </table>
    </div>
    <!-- comparison end -->

    <!-- service start -->
    <div class="service clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt="" /></dt>
        <dd><h4>Garanzia di Rimborso</h4></dd>
        <dd>Garantiamo il rimborso entro <span>60 giorni dalla data</span> d’acquisto.</dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/godaddy-secure.png')?>" alt="" /></dt>
        <dd><h4>Pagamento 100% Sicuro</h4></dd>
        <dd>IObit offre i metodi di pagamento <span>sicuri per la transazione.</span></dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/24hours.png')?>" alt="" /></dt>
        <dd><h4>Servizio di Supporto</h4></dd>
        <dd>Il nostro supporto tecnico gratuito <span>è disponibile tutto il giorno,</span> 24 ore su 24.</dd>
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

  <!-- floatlayer start -->
  <div class="floatlayer" id="floatlayer">
    <div class="wrapper clearfix">
      <div class="left fl">
        <h2>SOTTOCOSTO, SOLO ORA!</h2>
        <h3>Solo <b>€0,02</b> al giorno, goditi un PC più pulito e più sicuro!</h3>
      </div>
      <div class="offer fr">
        <strong>15,<small>99€</small></strong> <del>99,93€</del>
        <a class="buybtn" 
           href="https://www.iobit.com/buy.php?product=it-iu73pcsdpf1599&ref=it_iu73pcsdpfpurchase1711<?php echo $refStr;?>&refs=it_purchase_iu"
           onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase3PCsdpf1711-it')">
          <div class="solid-layer"></div>
          <div class="border-layer"></div>
          <div class="text-layer">ACQUISTA ORA</div>
        </a>
      </div>
    </div>
    <div class="close"></div>
  </div>
  <!-- floatlayer end -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>