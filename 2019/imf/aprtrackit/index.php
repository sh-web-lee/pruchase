<?php
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './';
    $pRootUrl = '../../../';
  }
include $pRootUrl . 'include/common.inc.php';
$viewNum=rand(115,156);
if (!empty($_GET['action'])&&$_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name='itimftra'.$date;
  if (!isset($_COOKIE[$c_name])) {
    $packsNum = 97;
    setcookie($c_name, $packsNum, time() + 3600 * 24);
  } else {
    if ($_GET['t'] == 1) {
      $packsNum = $_COOKIE[$c_name];
    }
    else {
      if (intval($_COOKIE[$c_name]) <= 0) {
        setcookie($c_name, 0, time() + 3600 * 24);
        $packsNum = 0;
      } else {
        $packsNum = $_COOKIE[$c_name] - 1;
        setcookie($c_name, $packsNum, time() + 3600 * 24);
        if (rand(1, 100) % 2 == 0) {
          $packsNum++;
        }
      }
    }
  }
  echo $packsNum;
  exit;
}
$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
?>
<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="IE=Edge,chrome=1">
  <title>65% di sconto per ottenere IObit Malware Fighter PRO</title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href='https://fonts.googleapis.com/css?family=Montserrat:500,600,700' rel='stylesheet' type='text/css'>
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
  <!-- banner -->
  <div class="banner">
    <div class="wrapper">
      <a href="https://www.iobit.com/it/index.php" target="_blank" class="logo">IObit</a>
      <p class="fast <?php echo (intval($_GET['cookie'])>0)?'':'hide';?>">Ora <?php echo (intval($_GET['cookie'])>0)?intval($_GET['cookie']):'';?> <?php echo (intval($_GET['cookie'])==1)?'cookie è stato trovato':'cookie sono stati trovati';?></p>
      <h1>Elimina automaticamente i cookie maligni subito!</h1>
      <div class="box three-pcs">
        <div class="img-box"></div>
        <p>Ora: <strong>€19,99</strong> <del>€59,95</del></p>
        <a href="https://www.iobit.com/buy.php?product=it-imf83pc1999&ref=it_imf3pctracking1999<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=it_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1904track-it');" class="buybtn"><span>Attiva Ora</span></a>
        <div class="number">
          Afferettati, solo 
          <div class="countdown">
            <div class="scroll-tick" ><span>0</span></div>
            <div class="scroll-tick"><span>0</span></div>
          </div>
          pezzi restanti！ 
        </div>
      </div>
      <div class="box one-pc">
        <div class="img-box"></div>
        <p>Ora: <strong>€17,99</strong> <del>€39,95</del></p>
        <a href="https://www.iobit.com/buy.php?product=it-imf81pc1799&ref=it_imf1pctracking1799<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=it_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1904track1pc-it');" class="buybtn border"><span>Attiva Ora</span></a>
      </div>
    </div>
  </div>
  <!-- end banner -->
  <!-- feature -->
  <div class="feature feature01 wrapper clearfix">
    <h2>PERCHÉ È NECESSARIO CANCELLARE I COOKIE DAL BROWSER?</h2>
    <div class="img-box"><img src="<?php echo getStaticUrl('images/feature-box.jpg')?>"></div>
    <dl class="list01">
      <dt>GLI ANNUNCI TI SEGUONO OVUNQUE</dt>
      <dd>I siti Internet che hai visitato possono ricordare la tua identità e spiare le tue abitudini di navigazione,costringendoti così a vedere annunci ovunque.</dd>
    </dl>
    <dl class="list02">
      <dt>PERDITA DELLA PRIVACY ONLINE</dt>
      <dd>Gli hacker possono accedere alle tue informazioni personali come gli account non protetti da password.</dd>
    </dl>
  </div>
  <!-- feature -->
  <div class="feature feature02">
    <div class="wrapper">
      <h2>CON ANTI-TRACKING, PUOI CANCELLARE IMMEDIATAMENTE I COOKIE <br>MALIGNI E MANTENERE LE TUE INFORMAZIONI PERSONALI SICURE!</h2>
      <div class="img-box"></div>
      <dl class="list01">
        <dt><img src="<?php echo getStaticUrl('images/list01.png')?>"> PULIZIA AUTOMATICA DEI COOKIE</dt>
        <dd>Dopo aver attivato la funzionalita' di anti-tracciamento, i cookie sarano eliminati automaticamente.</dd>
      </dl>
      <dl class="list02">
        <dt><img src="<?php echo getStaticUrl('images/list02.png')?>"> Protezione dei Dati Sensibili <span>NUOVO</span></dt>
        <dd>Protegge le tue cartelle e multiplo tipi di file contro gli attacchi ransomware.</dd>
      </dl>
    </div>
  </div>
  <!-- benfits -->
  <div class="feature03">
    <h2>ULTERIORI BENEFICI <br>CHE PUOI OTTENERE DA IOBIT MALWARE FIGHTER 8 PRO</h2>
    <div class="message">
      <div class="wrapper">
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/list03.png')?>"></dt>
          <dd><strong>Ultimo motore di Bitdefender</strong></dd>
          <dd class="txt">Ti prottege da oltre <br>203.000.000  di minacce.</dd>
          <dd><span>Esclusiva per PRO</span></dd>
        </dl>
         <dl>
          <dt><img src="<?php echo getStaticUrl('images/list04.png')?>"></dt>
          <dd><strong>Blocca gli attacchi ransomware</strong></dd>
          <dd class="txt">Qualsiasi azione sospettosa che cerca di crittografare i tuoi file sarà bloccata.</dd>
          <dd><span>Esclusiva per PRO</span></dd>
        </dl>
         <dl>
          <dt><img src="<?php echo getStaticUrl('images/list05.png')?>"></dt>
          <dd><strong>Protegge i File con la Password</strong></dd>
          <dd class="txt">Gli hacker non possono ottenere l'accesso ai tuoi dati personali impostando una password.</dd>
          <dd><span>Esclusiva per PRO</span></dd>
        </dl>
         <dl class="last">
          <dt><img src="<?php echo getStaticUrl('images/list06.png')?>"></dt>
          <dd><strong>Nessuna infezione da Chiave USB</strong></dd>
          <dd class="txt">I virus nascosti sulle chiavi USB non possono essere trasmessi al tuo computer.</dd>
          <dd><span>Esclusiva per PRO</span></dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- end benfits -->

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

  <div class="bottom">
    <div class="service wrapper clearfix">
      <dl class="fl">
        <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dt>
        <dd>
          <h4>SENZA RISCHIO - Garanzia di rimborso di 60 giorni</h4>
          <p>
            Siamo fiduciosi che l’edizione PRO sarà in grado di offrire la migliore protezione per il tuo PC a un prezzo economico!
          </p>
        </dd>
      </dl>
      <dl class="fr">
        <dd>
          <h4>Accettiamo</h4>
        </dd>
        <dt><img src="<?php echo getStaticUrl('images/payments.png')?>" alt=""></dt>
      </dl>
    </div>
    <!-- service end -->
    <!-- annotation -->
    <dl class="annotation wrapper">
      <dt>Note:</dt>
      <dd> * Tali promozioni sono soggette alle modifiche senza preavviso, periodicamente a nostra esclusiva discrezione.</dd>
    </dl>

    <!-- footer -->
    <div class="footer">    
      <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit.  Tutti i diritti riservati</p>
    </div>
  </div>
  <!-- float -->
  <div class="float clearfix">
    <div class="wrapper">
      <div class="left-img"></div>
      <div class="message">
        <h2>Protezione omnicomprensiva per tutta la famiglia</h2>
        <div class="number">
          Afferettati, solo 
          <div class="countdown">
            <div class="scroll-tick" ><span>0</span></div>
            <div class="scroll-tick"><span>0</span></div>
          </div>
          pezzi restanti！
        </div>
      </div>
      <!-- buybtn -->
     <dl>
       <dt>Ora: <strong>€19,99</strong> <del>€59,95</del></dt>
       <dd><a href="https://www.iobit.com/buy.php?product=it-imf83pc1999&ref=it_imf3pctracking1999<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=it_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1904track-it');" class="buybtn"><span>Attiva Ora</span></a></dd>
     </dl>
    </div>
  </div>
  <script>refStr="<?php echo $refStr;?>";</script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>