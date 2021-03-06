<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';

$viewNum=rand(98,165);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}
if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'novxasciu2019it_p' . $date;
  $c_name_t='novxasciu2019it_t' . $date;
  $isInit=$_GET['isInit'];
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=(intval($_GET['packsNum'])>0)?intval($_GET['packsNum']):50;
    setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
    setcookie($c_name_t,$totalNum, time() + 3600 * 24 *2);
  } else {
    if (intval($_COOKIE[$c_name]) <= 0) {
      $packsNum = 0;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    } else {
      if($isInit==1){
        $packsNum = intval($_COOKIE[$c_name]);
      }else {
        $packsNum = $_COOKIE[$c_name] - 1;
      }
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    }
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

$refStr=empty($_GET['id'])?'':('-'.$_GET['id']);

$isNewUser=false;
if(preg_match('/^13\./',$_GET['ver'])){
  $isNewUser=true;
}

$packsNum=50;
$transData=json_decode(base64_decode($_GET['num']));
if(!empty($transData)){
  if(@intval($transData->seats)){
    $packsNum=@intval($transData->seats);
  }
}

$refStr='';
if(in_array($_GET['pop'],array('x_iuasc','xr_iuasc','x_iu'))){
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
<title>Offerta di Natale - Sconto fino all'80% su Advanced Systemcare PRO e IObit Uninstaller PRO</title>
<meta name="Copyright" content="IObit">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700,900i&display=swap" rel="stylesheet">
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com/it/index.php" target="_blank">IObit</a>
      <h1 class="title">Offerta di Natale Mini prezzi, maxi risparmio!</h1>
      <div class="clearfix">
        <div class="imgbox fl ribbon">
          <img src="<?php echo getStaticUrl('images/asc-db-box.png')?>" alt=""/>
          <div class="discount">75% OFF</div>
        </div>
        <div class="msgbox fl">
          <div class="change-title"><h2>80% di sconto solo per i primi 1.000 acquisti </h2></div>
          <div class="numbox">
            <div id="flip" class="flipNum">
              <div class="numwrap">
                <div class="listbox">
                  <span class="list">
                    <b>0</b><b>1</b><b>2</b><b>3</b><b>4</b><b>5</b><b>6</b><b>7</b><b>8</b><b>9</b>
                  </span>
                </div>
              </div>
              <div class="numwrap">
                <div class="listbox">
                  <span class="list">
                    <b>0</b><b>1</b><b>2</b><b>3</b><b>4</b><b>5</b><b>6</b><b>7</b><b>8</b><b>9</b>
                  </span>
                </div>          
              </div>
              <div class="numwrap last">
                <div class="listbox">
                  <span class="list">
                    <b>0</b><b>1</b><b>2</b><b>3</b><b>4</b><b>5</b><b>6</b><b>7</b><b>8</b><b>9</b>
                  </span>
                </div> 
              </div>
            </div>
            <span>pezzi rimasti</span>
          </div>
          <ul class="price">
            <li class="first">
              <p><strong class="change-price">???<big>15,99</big></strong> <del>???89,98</del></p>
              <p>1 Anno / 3 PC</p>
            </li>
            <li>
              <a class="buybtn exbtn"
                 href="https://www.iobit.com/buy.php?product=it-iu9asc133pc1599&ref=it_iu9asc133pcpurchasexiuasc1911<?php echo $refStr;?>&refs=it_purchase_iu "
                 onclick="ga( 'send', 'event', 'iubuy', 'buy', 'iuascpurchasex1911-it')">
                Acquista Ora
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="try">
      Non sei soddisfatto del tuo acquisto?  Non ti preoccupare, ti rimborsiamo tutto entro 60 giorni!
    </div>
  </div>
  <!-- banner end -->

  <!-- intro start -->
  <div class="intro">
    <div class="wrapper">
      <h2>Tutto quello che vuoi per il tuo PC ?? qui!</h2>
      <div class="computer">
        <img class="screen asc" src="<?php echo getStaticUrl('images/asc-screen.png')?>" alt=""/>
        <img class="screen db" src="<?php echo getStaticUrl('images/iu-screen.png')?>" alt=""/>
        <dl class="asc">
          <dt>
            <h3>
              <span>Advanced SystemCare 13 PRO</span>
              <img src="<?php echo getStaticUrl('images/asc-icon.png')?>" alt=""/>
            </h3>
          </dt>
          <dd>Ottimizzazione professionale del PC. Velocizza il tuo PC e protegge ancora di pi?? la tua privacy.</dd>
        </dl>
        <dl class="db">
          <dt>
            <h3>
              <img src="<?php echo getStaticUrl('images/iu-icon.png')?>" alt=""/>
              <span>IObit Uninstaller 9 PRO</span>
            </h3>
          </dt>
          <dd>Disinstallatore professionale per eliminare completamente i programmi indesiderati e i plugin.</dd>
        </dl>
        <span class="line line03"></span>
      </div>
    </div>
  </div>
  <!-- intro end -->

  <!-- feature start -->
  <div class="feature">
    <h2>La migliore soluzione per il tuo PC</h2>
    <div class="asc wrapper clearfix">
      <div class="imgbox fl">
        <img src="<?php echo getStaticUrl('images/asc-big-screen.png')?>" alt=""/>
        <img class="besom" src="<?php echo getStaticUrl('images/besom.png')?>" alt=""/>
      </div>
      <div class="msgbox fr">
        <dl>
          <dt><b>200%* PC pi?? veloce</b></dt>
          <dd>
            Pulisce e ottimizza il tuo sistema in modo automatico per rendere il tuo PC ancora pi?? veloce.   <span>PRO Esclusivo</span>
          </dd>
        </dl>
        <dl>
          <dt><b>300%* Internet pi?? rapido</b></dt>
          <dd>
            Aumenta notevolmente la velocit?? di download, di gioco, di navigazione su Internet e su piattaforme video come YouTube.   <span>PRO Esclusivo</span>
          </dd>
        </dl>
        <dl>
          <dt><b>Protezione avanzata della privacy</b> </dt>
          <dd>Blocca gli accessi non autorizzati ai tuoi contatti, email e altri dati sensibili. <span>PRO Esclusivo</span></dd>
        </dl>
        <dl>
          <dt><b>Navigazione online pi?? sicura</b> </dt>
          <dd>Impedisce ai tracker di curiosare cosa hai letto, visualizzato e acquistato. <span>PRO Esclusivo</span></dd>
        </dl>
        <dl>
          <dt><b>Aggiornatore di software</b> </dt>
          <dd>Mantiene tutti i software aggiornati. <span>PRO Esclusivo</span></dd>
        </dl>
      </div>
    </div>
    <div class="db wrapper clearfix">
      <div class="msgbox fl">
        <dl>
          <dt><b>Rimuove i programmi in bundle e i software ostinati</b> </dt>
          <dd>che non possono essere facilmente rimossi tramite i metodi convenzionali di scansione automatica degli avanzi. <span>PRO Esclusivo</span></dd>
        </dl>
        <dl>
          <dt><b>Scansiona automaticamente gli avanzi</b> </dt>
          <dd>dopo ogni disinstallazione per un PC pi?? pulito e veloce. <span>PRO Esclusivo</span></dd>
        </dl>
        <dl>
          <dt><b>Identifica i plugin maligni o pubblicitari</b> </dt>
          <dd>che inseriscono link o annunci maligni nelle pagine web. Monitoraggio in tempo reale delle modifiche dei file. <span>PRO Esclusivo</span></dd>
        </dl>
        <dl>
          <dt><b>Controlla in tempo reale </b> </dt>
          <dd>le modifiche sistematiche apportate dall???installazione dei programmi. <span>PRO Esclusivo</span></dd>
        </dl>
      </div>
      <div class="imgbox fr">
        <img src="<?php echo getStaticUrl('images/iu-big-screen.png')?>" alt=""/>
        <img class="forbid" src="<?php echo getStaticUrl('images/forbid.png')?>" alt=""/>
      </div>
    </div>
  </div>
  <!-- feature end -->

  <!-- centbuy start -->
  <div class="centbuy">
    <div class="wrapper">
      <h2>?? il prezzo pi?? basso mai visto!</h2>
      <div class="clearfix">
        <div class="imgbox fl">
          <img src="<?php echo getStaticUrl('images/asc-db-box.png')?>" alt=""/>
          <span class="original"><em>???49,99</em></span>
          <span class="original last"><em>???39,99</em></span>
        </div>
        <div class="chart fl">
          <div class="clist one">
            <h3 class="cost"><span>50%</span> di sconto</h3>
            <span class="month">Black Friday</span>
          </div>
          <div class="clist two">
            <h3 class="cost"><span>80%</span> di sconto</h3>
            <span class="month">Oggi</span>
          </div>
          <div class="clist three">
            <h3 class="cost"><span>60%</span> di sconto</h3>
            <span class="month">Capodanno</span>
          </div>
        </div>
      </div>
      <div class="price">
        <p><strong class="change-price">???<big>15,99</big></strong> <del>???89,98</del></p>
        <a class="buybtn exbtn"
           href="https://www.iobit.com/buy.php?product=it-iu9asc133pc1599&ref=it_iu9asc133pcpurchasexiuasc1911<?php echo $refStr;?>&refs=it_purchase_iu "
           onclick="ga( 'send', 'event', 'iubuy', 'buy', 'iuascpurchasex1911-it')">
          Acquista Ora
        </a>
        <p>1 Anno / 3 PC</p>
      </div>
    </div>
  </div>
  <!-- centbuy end -->

  <!-- review start -->
  <div class="review">
    <div class="wrapper">
      <h2>Cosa dicono di noi</h2>
      <div id="dg-container" class="dg-container">
        <div class="nav">
          <span class="dg-prev"></span>
          <span class="dg-next"></span>
        </div>
        <div class="content dg-wrapper">
          <dl class="reviews active">
            <dt><h3><span>Recensioni dei media</span></h3></dt>
            <dd>
              <p class="on">
                Advanced SystemCare Pro si installa con semplicit??. Advanced SystemCare Pro strizza l???occhio anche alla sicurezza ed ?? possibile scaricare come plugin aggiuntivo IObit Malware Fighter con cui proteggere il computer dai malware. Nella Modalit?? Semplificata sar?? il programma a gestire in automatico quasi tutte le funzioni, mentre nella Modalit?? Esperto avremo la possibilit?? di configurare molte delle opzioni disponibili.
              </p>
             <cite>HTML.it</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h3><span>Recensioni degli utenti</span></h3></dt>
            <dd> 
              <p>
                Ho cominciato a usare la versione gratuita e infine ho acquistato la versione completa. Ha funzionato bene per tanti anni mantenendo il mio computer pulito e senza nessun ???problema??? e finora non mi ha mai deluso. Di recente, ho contattato il team di supporto di Advanced SystemCare e mi hanno risposto entro un giorno o due con tutto quello che dovevo sapere. A mio parere ?? importante il supporto per mantenere e far rimanere i clienti, ASC ha vinto sia in termini di prodotti che in termini di supporto.
              </p>
              <cite>Bruce Ramsay</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h3><span>Recensioni degli utenti</span></h3></dt>
            <dd>
              <p>
                In quanto tecnico per la riparazione di computer, ho trovato che la maggior parte dei problemi possono essere risolti con la scansione e riparazione di Advanced SystemCare Free. Di solito, dopo aver finito una riparazione, consiglio al cliente di acquistare la versione Pro di questo prodotto. Chi ha pi?? bisogno di un tecnico, avendo il potente Advanced SystemCare che cura il tuo sistema 24-7? Questo ?? il miglior prodotto che ogni utente privato dovrebbe comprare e provare. Grazie per aver reso il mio lavoro pi?? facile.
              </p>
              <cite>Charles R. Widick</cite>
            </dd>
          </dl>

          <dl class="reviews">
            <dt><h3><span>Recensioni degli utenti</span></h3></dt>
            <dd>
              <p>
                IObit Uninstaller ?? il miglior software per rimuovere programmi sul computer, ?? veloce e molto efficace, niente a che vedere con il programma di disinstallazione di base di Windows, infatti pulisce a fondo tutti i residui del programma, evitando i rallentamenti nel computer. Lo uso da alcuni mesi e non so come farei senza, lo consiglio ai miei amici e alla mia famiglia. Grazie a IObit Uninstaller, ?? fantastico!
              </p>
              <cite>Paulo Martins</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h3><span>Recensioni degli utenti</span></h3></dt>
            <dd>
              <p>
                IObit Unisntaller migliora se stesso con ogni aggiornamento, l???ho gi?? usato per 3 anni. Funziona molto veloce e ha un???interfaccia semplice. Alcune funzioni che uso regolarmente sono Batch Uninstaller, Scansione Approfondita, Distruggi File e Installati di Recente, il quale offre un???accesso veloce ai programmi installati di recente che non mi piacciono o non funzionano correttamente. ?? anche facile da controllare i tuoi elementi d???avvio per rendere pi?? veloce l???avvio del tuo PC.
              </p>
              <cite>Lovro ??u??i??</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h3><span>Recensioni dei media</span></h3></dt>
            <dd>
              <p>
                Questo strumento di disinstallazione facile da usare e informativo pulisce, configura, e ottimizza il tuo PC. Gli utenti possono scaricarlo in pochissimi minuti. Questo strumento di disinstallazione pu?? essere classificato come il miglior programma di disinstallazione e permette agli utenti di disinstallare all'ingrosso. Esso offre agli utenti di fare una "Scansione Approfondita" per andare pi?? a fondo e trovare gli avanzi. La prestazione la stessa rende questo piccolo strumento vale la pena tenere.
              </p>
              <cite>MakeUseOf</cite>
            </dd>
          </dl>
        </div>
        <ul>
          <li class="two" data-num="3"><img src="<?php echo getStaticUrl('images/paulo-martins.png')?>" alt="Paulo Martins"></li>
          <li class="three" data-num="4"><img src="<?php echo getStaticUrl('images/lovro-zuzic.png')?>" alt="Lovro ??u??i??"></li>
          <li class="active" data-num="0"><img src="<?php echo getStaticUrl('images/html-it.png')?>" alt="HTML"></li>
          <li class="four" data-num="1"><img src="<?php echo getStaticUrl('images/bruce-ramsay.png')?>" alt="Bruce Ramsay"></li>
          <li class="five" data-num="2"><img src="<?php echo getStaticUrl('images/charles-r-widick.png')?>" alt="Charles R. Widick"></li>
          <li class=" last" data-num="5"><img src="<?php echo getStaticUrl('images/makeuseof.png')?>" alt="MakeUseOf"></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- review end -->

  <!-- awards start -->
  <div class="awards">
    <div class="wrapper">
      <h2>Premi a livello mondiale</h2>
      <p>
        Raccomandato e premiato dai media a livello mondiale, hai scelto il programma giusto per aggiornare i driver!
      </p>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
    </div>
  </div>
  <!-- awards end -->

  <!-- footer start -->
  <div class="footer">
    <div class="wrapper">
      <div class="service">
        <dl class="left fl">
          <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
          <dd>
            <h3>SENZA RISCHIO - Garanzia di rimborso di 60 giorni</h3>
            <p>
              Siamo fiduciosi che l???edizione PRO sar?? in grado di offrire la migliore protezione per il tuo PC a un prezzo economico!
            </p>
          </dd>
        </dl>
        <dl class="right fr">
          <dt><h3>Accettiamo</h3></dt>
          <dd>
            <img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/>
          </dd>
        </dl>
      </div>
      <dl>
        <dt>Note:</dt>
        <dd>* I dati potrebbero variare in base al sistema o computer.</dd>
        <dd>
          * Tali promozioni sono soggette a modifiche senza preavviso, periodiche e a nostra esclusiva discrezione.
        </dd>
      </dl>
      <p class="copyright">Copyright ?? 2005 - <?php echo date('Y')?> IObit. Tutti i diritti riservati</p>
    </div>
  </div>
  <!-- footer end -->

  <!-- floatlayer start -->
  <div id="floatlayer" class="floatlayer">
    <div class="wrapper clearfix">
      <div class="imgbox ribbon fl">
        <img src="<?php echo getStaticUrl('images/asc-db-box.png')?>" alt=""/>
        <div class="discount">80% OFF</div>
      </div>
      <div class="numbox fl">
        <div id="fliptwo" class="flipNum">
          <div class="numwrap">
            <div class="listbox">
              <span class="list">
                <b>0</b><b>1</b><b>2</b><b>3</b><b>4</b><b>5</b><b>6</b><b>7</b><b>8</b><b>9</b>
              </span>
            </div>
          </div>
          <div class="numwrap">
            <div class="listbox">
              <span class="list">
                <b>0</b><b>1</b><b>2</b><b>3</b><b>4</b><b>5</b><b>6</b><b>7</b><b>8</b><b>9</b>
              </span>
            </div>          
          </div>
          <div class="numwrap last">
            <div class="listbox">
              <span class="list">
                <b>0</b><b>1</b><b>2</b><b>3</b><b>4</b><b>5</b><b>6</b><b>7</b><b>8</b><b>9</b>
              </span>
            </div> 
          </div>
        </div>
        <p class="change"><b class="viewNum"><?php echo $viewNum;?></b> stanno guardando,<b class="packsNum">50</b>pezzi rimasti</p>
      </div>
      <ul class="price fl">
        <li class="first">
          <p><strong class="change-price">???<big>15,99</big></strong> <del>???89,98</del></p>
          <p>1 Anno / 3 PC</p>
        </li>
        <li>
          <a class="buybtn exbtn"
             href="https://www.iobit.com/buy.php?product=it-iu9asc133pc1599&ref=it_iu9asc133pcpurchasexiuasc1911<?php echo $refStr;?>&refs=it_purchase_iu "
             onclick="ga( 'send', 'event', 'iubuy', 'buy', 'iuascpurchasex1911-it')">
            Acquista Ora
          </a>
        </li>
      </ul>
    </div>
  </div>
  <!-- floatlayer end -->

  <script>
    packsNum=<?php echo $packsNum;?>;
    refStr="<?php echo $refStr;?>";
  </script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>