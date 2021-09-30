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
  $c_name = 'ascdbxmasit_p' . $date;
  $c_name_t='ascdbxmasit_t' . $date;
  $isInit=$_GET['isInit'];
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=(intval($_GET['packsNum'])>0)?intval($_GET['packsNum']):49;
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

$refStr=empty($_GET['st'])?'':('-'.$_GET['st']);
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);
$refStr.=empty($_GET['ver'])?'':('-'.$_GET['ver']);
$refStr.=empty($_GET['pop'])?'':('-'.$_GET['pop']);
$refStr.=empty($_GET['r'])?'':('-'.$_GET['r']);
if(in_array($_GET['type'],array('pro','giveawayexp'))){
    $refStr.='-'.$_GET['type'];
}
$refStr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-l'.$_GET['litype'].'-e'.$_GET['expd'];
$isNewUser=false;
if(preg_match('/^13\./',$_GET['ver'])){
  $isNewUser=true;
}

$packsNum=49;
$transData=json_decode(base64_decode($_GET['num']));
if(!empty($transData)){
  if(@intval($transData->seats)){
    $packsNum=@intval($transData->seats);
  }
}
?>
<!DOCTYPE html>
<html lang="it">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Sconti di Natale fino al 75% su Advanced SystemCare e Driver Booster – IObit  </title>
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
  <!-- bann er start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com/it/index.php" target="_blank">IObit</a>
      <h1 class="title">Natal SUPER OFFERTA Mini prezzi, maxi risparmio!</h1>
      <div class="clearfix">
        <div class="imgbox fl ribbon">
          <img src="<?php echo getStaticUrl('images/asc-db-box.png')?>" alt=""/>
          <div class="discount">75% di SCONTO</div>
        </div>
        <div class="msgbox fl">
          <div class="change-title"><h2>75% di sconto solo per i PRIMI 1.000 acquisti</h2></div>
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
            <span> pezzi rimasti ora</span>
          </div>
          <ul class="price">
            <li class="first">
              <p><strong class="change-price"><big>29,99</big>€</strong> <del>124,84€</del></p>
              <p>1 anno / 3 PC</p>
            </li>
            <li>
              <a class="buybtn exbtn"
                 href="https://www.iobit.com/buy.php?product=it-asc143pcdb3pc2999&ref=it_asc143pcdb3pc2999purchasexmas2020<?php echo $refStr?>&refs=it_purchase_asc" 
                 onclick="ga('send', 'event', 'ascdbbuy', 'buy', 'ascpurchase3pcxmasascdb2020-it')">
                 Attiva ora
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="try">
    Provalo SENZA RISCHI – Attiva ora per mantenere il tuo PC con le massime prestazioni e ottenere la nostra garanzia di rimborso di 60 giorni
    </div>
  </div>
  <!-- banner end -->

  <!-- intro start -->
  <div class="intro">
    <div class="wrapper">
      <h2>Cosa include questa offerta speciale?</h2>
      <div class="computer">
        <img class="screen asc" src="<?php echo getStaticUrl('images/asc-screen.png')?>" alt=""/>
        <img class="screen db" src="<?php echo getStaticUrl('images/db-screen.png')?>" alt=""/>
        <dl class="asc">
          <dt>
            <h3>
              <span>Advanced SystemCare 14 PRO</span>
              <img src="<?php echo getStaticUrl('images/asc-icon.png')?>" alt=""/>
            </h3>
          </dt>
          <dd>Programma onnicomprensivo di ottimizzazione del sistema per pulire in modo automatico il tuo PC e renderlo più veloce del 200%.</dd>
        </dl>
        <dl class="db">
          <dt>
            <h3>
              <img src="<?php echo getStaticUrl('images/db-icon.png')?>" alt=""/>
              <span>Driver Booster 8 PRO</span>
            </h3>
          </dt>
          <dd>Programma di aggiornamento driver facile da usare per scaricare driver alla massima velocità e installarli automaticamente. </dd>
        </dl>
        <span class="line line03"></span>
      </div>
    </div>
  </div>
  <!-- intro end -->

  <!-- feature start -->
  <div class="feature">
    <h2>Perché PRO vale la pena?</h2>
    <div class="asc wrapper clearfix">
      <div class="imgbox fl">
        <img src="<?php echo getStaticUrl('images/asc-big-screen.png')?>" alt=""/>
        <img class="besom" src="<?php echo getStaticUrl('images/besom.png')?>" alt=""/>
      </div>
      <div class="msgbox fr">
      <dl>
          <dt><b>Più intelligente</b> <span>esclusivo PRO</span></dt>
          <dd>
          Riduce completamente gli arresti anomali di Windows e i messaggi di errore con la nuova modalità AI
          </dd>
        </dl>
        <dl>
          <dt><b>200%* PC più veloce</b> <span>esclusivo PRO</span></dt>
          <dd>
          Pulisce e ottimizza il tuo sistema in modo automatico per rendere il tuo PC ancora più veloce
          </dd>
        </dl>
        <dl>
          <dt><b>300%* Internet più rapido</b> <span>esclusivo PRO</span></dt>
          <dd>
          Download Internet, navigazione, giochi e visualizzazione di YouTube più  veloci
          </dd>
        </dl>
        <dl>
          <dt><b>Protezione avanzata della privacy</b> <span>esclusivo PRO</span></dt>
          <dd>
          Blocca gli accessi non autorizzati ai tuoi contatti, email e altri dati sensibili
          </dd>
        </dl>
        <dl>
          <dt><b>Navigazione online più sicura</b> <span>esclusivo PRO</span></dt>
          <dd>
          Impedisce ai tracker di curiosare ciò che hai letto, visualizzato o acquistato
          </dd>
        </dl>
        
      </div>
    </div>
    <div class="line-center">

    </div>
    <div class="db wrapper clearfix">
      <div class="msgbox fl">
        <dl>
          <dt><b> 4.500.000+ driver supportati</b> <span>esclusivo PRO</span></dt>
          <dd>Scansiona e aggiorna oltre 4.500.000 driver</dd>
        </dl>
        <dl>
          <dt><b>Massima velocità </b> <span>esclusivo PRO</span></dt>
          <dd>Sblocca la limitazione di velocità per un download più veloce del 100%</dd>
        </dl>
        <dl>
          <dt><b>Esperienza di gioco migliore</b> <span>esclusivo PRO</span></dt>
          <dd>Componenti di gioco raccomandati per velocizzare il gioco </dd>
        </dl>
        <dl>
          <dt><b>Download e aggiornamento driver più sicuro</b> <span>esclusivo PRO</span></dt>
          <dd>Esegue il backup e crea un punto di ripristino del sistema in modo automatico prima di aggiornare i driver</dd>
        </dl>
        <dl>
          <dt><b>Aggiornamento driver offline</b> <span>esclusivo PRO</span></dt>
          <dd>Aggiorna e installa i driver di rete anche senza una connessione Internet </dd>
        </dl>
      </div>
      <div class="imgbox fr">
        <img src="<?php echo getStaticUrl('images/db-big-screen.png')?>" alt=""/>
        <img class="forbid" src="<?php echo getStaticUrl('images/forbid.png')?>" alt=""/>
      </div>
    </div>
  </div>
  <!-- feature end -->

  <!-- centbuy start -->
  <div class="centbuy">
    <div class="wrapper">
      <h2>Il prezzo più basso di sempre!</h2>
      <div class="clearfix">
        <div class="imgbox fl">
          <img src="<?php echo getStaticUrl('images/center-box.png')?>" alt=""/>
          <!-- <span class="original"><em>€49,99</em></span>
          <span class="original last"><em>€74,85</em></span> -->
        </div>
        <div class="chart fl">
          <div class="clist one">
            <h3 class="cost"><span>50%</span>  di SCONTO</h3>
            <span class="month">Black Friday</span>
          </div>
          <div class="clist two">
            <h3 class="cost"><span>75%</span>  di SCONTO</h3>
            <span class="month">Oggi</span>
          </div>
          <div class="clist three">
            <h3 class="cost"><span>60%</span>  di SCONTO</h3>
            <span class="month">Capodanno</span>
          </div>
        </div>
      </div>
      <div class="price">
        <p><strong class="change-price">  <big>29,99</big>€</strong> <del>124,84€</del></p>
        <a class="buybtn exbtn"
            href="https://www.iobit.com/buy.php?product=it-asc143pcdb3pc2999&ref=it_asc143pcdb3pc2999purchasexmas2020<?php echo $refStr?>&refs=it_purchase_asc" 
             onclick="ga('send', 'event', 'ascdbbuy', 'buy', 'ascpurchase3pcxmasascdb2020-it')">
           Attiva ora
        </a>
        <p>  1 anno / 3 PC</p>
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
              "Advanced SystemCare Pro si installa con semplicità. Advanced SystemCare Pro strizza l’occhio anche alla sicurezza ed è possibile scaricare come plugin aggiuntivo IObit Malware Fighter con cui proteggere il computer dai malware. Nella Modalità Semplificata sarà il programma a gestire in automatico quasi tutte le funzioni, mentre nella Modalità Esperto avremo la possibilità di configurare molte delle opzioni disponibili."
              </p>
              <cite>HTML</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h3><span>Recensioni degli utenti</span></h3></dt>
            <dd>
              <p>
              "Uso ASC ormai da anni. Di recente ho testato l'ultima versione V14 ed è di gran lunga la versione più completa fino ad oggi. IObit continua a migliorare i propri prodotti e tecnologie con più opzioni e una navigazione più semplice che aiuta a risolvere molti problemi. Non ho bisogno di comprare altrove, i prodotti IObit sono sicuramente i migliori."
              </p>
              <cite>Brendon O Rourke</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h3><span>Recensioni degli utenti</span></h3></dt>
            <dd>
              <p>
              "Ho acquistato molti programmi diversi per velocizzare e risolvere i problemi con il mio PC. Sfortunatamente, la maggior parte non mi ha per niente aiutato o fatto la differenza finché non ho provato Advanced System Care 14. Mi piace il fatto che ci siano così tante opzioni e soluzioni per risolvere qualsiasi problema. È incredibile quanto sia più veloce il mio PC ora dopo la prima scansione e riparazione. Sicuramente il miglior prodotto che abbia mai provato."
              </p>
              <cite>Lyle Stelmaschuk</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h3><span>Recensioni degli utenti</span></h3></dt>
            <dd>
              <p>
              "Advanced System Care 14 è il sistema onnicomprensivo più completo sul mercato. Uso i prodotti IObit ormai da anni e anno dopo anno la nuova interfaccia è diventata sempre più semplice da usare, la pulizia profonda sempre più semplice da ottenere, si può infatti pulire in profondità con un solo clic il PC, e anche tutti gli altri strumenti presenti nel programma, come Analisi Cartelle Vuote, Turbo Boost e Distruttore File sono fantastici. Penso che ad oggi sia uno dei migliori sistemi di pulizia disponibili!"
              </p>
              <cite>Ryan Hill</cite>
            </dd>
          </dl>

          <dl class="reviews">
            <dt><h3><span>Recensioni degli utenti</span></h3></dt>
            <dd> 
              <p>
              "Finalmente, con IObit Driver Booster Pro ho trovato il programma perfetto per mantenere pulito e aggiornato il mio sistema. Grazie alla potenza del suo motore, e all’enorme database, è un’applicazione che non dovrebbe mancare in nessun computer."
              </p>
              <cite>Fabio Tursi</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h3><span>Recensioni degli utenti</span></h3></dt>
            <dd>
              <p>
              "È un software perfetto per rilevare driver obsoleti ed aggiornarli senza problemi di funzionalità e tutti WHQL e quindi mantenere il PC sempre col massimo delle potenzialità. Inoltre in caso di problema (mai successo) c’è la possibilità attraverso il backup di ripristinare il Driver precedente."
              </p>
              <cite>Gianfranco Marinelli</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h3><span>Recensioni degli utenti</span></h3></dt>
            <dd>
              <p>
              "Che sorpresa utilizzare il nuovo Driver Booster di IObit. Prima che si installasse e iniziasse l’aggiornamento, non sapevo dove fosse la metà dei miei programmi sul mio PC e non se ne parlava proprio di aggionarli. Una volta completato l’aggiornamento, mi è sembrato che il mio PC fosse stato completamente ristrutturato. Sensazionale!"
              </p>
              <cite>Harold Barr</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h3><span>Recensioni dei media</span></h3></dt>
            <dd>
              <p>
              "IObit fornisce varie utilità, tra cui Driver Booster PRO, il quale ti aiuta ad aggiornare i driver in automatico, è il migliore! La funzionalità semplice di base di Driver Booster PRO è diventata ancora più attraente, grazie all’inserimento di più licenze ad un prezzo molto più economico e a un’interfaccia personalizzabile che fa un buon lavoro di visualizzazione di informazioni specifiche realtive agli hardware. I concorrenti come Ashampoo Driver Updater e Slimware Utilities DriverUpdate offrono caratteristiche interessanti, ma IObit Driver Booster PRO è il leader in questo campo."
              </p>
              <cite>PC Magazine</cite>
            </dd>
          </dl>
        </div>
        <ul>
          <li class="first" data-num="4"><img src="<?php echo getStaticUrl('images/profilo_637.png')?>" alt="Fabio Tursi"></li>
          <li class="two" data-num="5"><img src="<?php echo getStaticUrl('images/gianfranco_marinelli_272.png')?>" alt="Gianfranco Marinelli"></li>
          <li class="three" data-num="6"><img src="<?php echo getStaticUrl('images/harold_barr_476.png')?>" alt="Harold Barr"></li>

          <li class="active" data-num="0"><img src="<?php echo getStaticUrl('images/HTML.it.png')?>" alt="CHIP"></li>

          <li class="four" data-num="1"><img src="<?php echo getStaticUrl('images/brendon_o_rourke.png')?>" alt="Brendon O Rourke"></li>
          <li class="five" data-num="2"><img src="<?php echo getStaticUrl('images/lyle_stelmaschuk.png')?>" alt="Lyle Stelmaschuk"></li>
          <li class="six" data-num="3"><img src="<?php echo getStaticUrl('images/ryan_hill.png')?>" alt="Ryan Hill"></li>
          <li class="seven last" data-num="7"><img src="<?php echo getStaticUrl('images/pcmag-editchoice.png')?>" alt="Charles R. Widick"></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- review end -->

  <!-- awards start -->
  <div class="awards">
    <div class="wrapper">
      <h2>Premi a livello mondiale</h2>
      <p>Raccomandato e premiato dai media a livello mondiale, hai scelto il programma giusto per ottimizzare il PC e aggiornare i driver!</p>
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
            <h3>SENZA RISCHIO – Garanzia di rimborso di 60 giorni</h3>
            <p>
            Siamo fiduciosi che la versione PRO ti offrirà la migliore protezione per il tuo PC a un prezzo economico.
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
        <dd>*. I dati potrebbero variare in base al sistema o computer.</dd>
        <dd>*. Tali promozioni sono soggette a modifiche senza preavviso, periodiche e a nostra esclusiva discrezione.</dd>
      </dl>
      <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Tutti i diritti riservati</p>
    </div>
  </div>
  <!-- footer end -->

  <!-- floatlayer start -->
  <div id="floatlayer" class="floatlayer">
    <div class="wrapper clearfix">
      <div class="imgbox ribbon fl">
        <img src="<?php echo getStaticUrl('images/asc-db-box.png')?>" alt=""/>
        <div class="discount">80% Rabatt</div>
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
        <p class="change"><b class="viewNum"><?php echo $viewNum;?></b> stanno visualizzando, <b class="packsNum">50</b> pezzi rimasti</p>
      </div>
      <ul class="price fl">
        <li class="first">
          <p><strong class="change-price"><big>29,99</big>€</strong> <del>124,84€</del></p>
          <p>1 anno / 3 PC</p>
        </li>
        <li>
          <a class="buybtn exbtn"
             href="https://www.iobit.com/buy.php?product=it-asc143pcdb3pc2999&ref=it_asc143pcdb3pc2999purchasexmas2020<?php echo $refStr?>&refs=it_purchase_asc" 
             onclick="ga('send', 'event', 'ascdbbuy', 'buy', 'ascpurchase3pcxmasascdb2020-it')">
             Attiva ora
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