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
    $c_name = 'itimf8xr_p' . $date;
    $c_name_t='itimf8xr_t' . $date;
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

  $refStr=empty($_GET['id'])?'':('-'.$_GET['id']);

  $isNewUser=false;
  $isNewUserV = false;
  $isNewRef = false;
  if(preg_match('/^7\./',$_GET['ver']) ||in_array($_GET['ref'],array('ascfree','ascpro','imffree',
        'imfpro','iufree','iupro','dbfree',
        'dbpro','isu'))){
    $isNewUser=true;
    if(in_array($_GET['ref'],array('ascfree','ascpro','imffree',
        'imfpro','iufree','iupro','dbfree',
        'dbpro','isu'))){
      $isNewRef = true;
    }
  }
  if(preg_match('/^5\./',$_GET['ver']) ||in_array($_GET['ref'],array('ascfree','ascpro','imffree',
        'imfpro','iufree','iupro','dbfree',
        'dbpro','isu'))){
    $isNewUserV = true;
    if(in_array($_GET['ref'],array('ascfree','ascpro','imffree',
        'imfpro','iufree','iupro','dbfree',
        'dbpro','isu'))){
      $isNewRef = true;
    }
  }

  $packsNum=49;
  $transData=json_decode(base64_decode($_GET['num']));
  if(!empty($transData)){
    if(@intval($transData->seats)){
      $packsNum=@intval($transData->seats);
    }
  }

  $popStr=empty($_GET['pop'])?'':('-'.$_GET['pop']);
  $refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);

  $isNewRef = false;
  if(in_array($_GET['ref'],array('ascfree','ascpro','imffree',
      'imfpro','iufree','iupro','dbfree',
      'dbpro','isu'))){
    $isNewRef = true;
  }
?>
<!DOCTYPE html>
<html lang="it">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Paga 0€ per ottenere il nuovo IObit Malware Fighter PRO</title>
<meta name="Copyright" content="IObit">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600&display=swap" rel="stylesheet">
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com/it/index.php" target="_blank">IObit</a>
      <h1 class="title">INIZIA LA PREVENDITA</h1>
      <div class="clearfix">
        <div class="imgbox fl">
          <img src="<?php echo getStaticUrl('images/imf-box.png')?>" alt="IObit Malware Fighter PRO"/>
        </div>
        <div class="msgbox fl">
          <h2>Preordina a 0€, per i primi 500 <br> clienti ogni giorno</h2>
          <div class="barbox clearfix">
            <div class="progressbar fl">
              <span class="reducebar">Primi 500 clienti</span>
              <div class="numbox">
                <span class="totalNum">498</span>  già preordinati, <b class="reduceNum"><em>2</em></b> pezzi rimasti
              </div>
            </div>
            <div class="changebar fl"><span>I prossimi 500+ clienti</span></div>
          </div>
          <ul class="barprice">
            <li>0€*</li>
            <li class="last">19,99€</li>
          </ul>
          <ul class="price">
            <li class="first">
              <p><strong>0€</strong><sup>*</sup></p>
            </li>
            <li>
              <a class="buybtn"
                 href="https://www.iobit.com/buy.php?product=it-imf8preorder&ref=it_imf8preorder<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=it_purchase_imf"
                 onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf8preorder-it');">
                Preordina Ora
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- feature start -->
  <div class="feature ftop">
    <div class="wrapper">
      <h2>Mantiene il PC e la tua privacy sicuri con IObit Malware Fighter 8 PRO</h2>
      <div class="arrow-down"></div>
      <h3 class="hfirst">Proteggiti dagli attacchi di malware</h3>
      <div class="feature-step clearfix">
        <div class="imgbox fl">
          <span class="browser"></span>
          <span class="files file-left"></span>
          <span class="files file-right"></span>
          <span class="worm">
            <em class="worm-legs-left01 on"></em>
            <em class="worm-legs-left02 on"></em>
            <em class="worm-legs-left03 on"></em>
            <em class="worm-legs-right01 on"></em>
            <em class="worm-legs-right02 on"></em>
            <em class="worm-legs-right03 on"></em>
          </span>
          <span class="worm-small worm-small-left"></span>
          <span class="worm-small worm-small-right"></span>
          <span class="worm-mask"></span>
          <span class="lock close"></span>
          <!-- <span class="lock open"></span> -->
          <span class="chain left"></span>
          <span class="chain right"></span>
          <span class="shield"><em class="star"></em></span>
        </div>
        <div class="message fr">
          <dl>
            <dt><h4>Ti protegge dagli attacchi malware</h4></dt>
            <dd>Rileva ed elimina oltre 200 milioni di malware in tempo reale con funzionalità di rilevamento professionale.</dd>
          </dl>
          <dl>
            <dt><h4>Protezione da ransomware</h4></dt>
            <dd>Protegge il tuo PC dal ransomware che crittografa i tuoi file e richiede un riscatto per la decrittazione.</dd>
          </dl>
          <dl>
            <dt><h4>Chiavette USB protette</h4></dt>
            <dd>Protegge il tuo PC da virus e malware nascosti nelle chiavette USB che possono infettare il tuo PC tramite USB.</dd>
          </dl>
        </div>
      </div>
    </div>
  </div>
  <div class="feature fbottom">
    <div class="wrapper">
      <h3 class="hlast">La protezione multistrato è pronta per te</h3>
      <div class="feature-step clearfix">
        <div class="message fl">
          <dl>
            <dt><h4>Cassetta di sicurezza</h4></dt>
            <dd>Protegge le tue informazioni più sensibili con una password complessa e impedisce agli accessi non autorizzati.</dd>
          </dl>
          <dl>
            <dt><h4>Guardia della webcam</h4></dt>
            <dd>Rileva e blocca gli hacker utilizzando la tua webcam per spiarti.</dd>
          </dl>
          <dl>
            <dt><h4>Anti-tracciamento</h4></dt>
            <dd>Cancella automaticamente le tue tracce per nascondere le tue attività online quando chiudi il browser.</dd>
          </dl>
        </div>
        <div class="imgbox fr">
          <span class="inner"></span>
          <span class="webpage"></span>
          <span class="red-circle"></span>
          <span class="codebox"></span>
          <span class="thief"></span>
          <span class="thief-hook"></span>
          <span class="password"></span>
          <span class="wordbox left"></span>
          <span class="safebox"><em class="safe-handle"></em></span>
          <span class="shieldtwo"><em class="fork"></em></span>
        </div>
      </div>
      <h3>Fornisce una protezione completa in tempo reale</h3>
      <div class="realtime">
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/feature01.png')?>" alt=""/></dt>
          <dd><h4>Protezione E-mail <span><em>NUOVO</em></span></h4></dd>
          <dd>Rileva i collegamenti <br> dannosi nelle e-mail.</dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/feature02.png')?>" alt=""/></dt>
          <dd><h4>Rilevamento dei siti Web dannosi</h4></dd>
          <dd>Protegge la tua navigazione dagli attacchi di <br> phishing e fastidiosi annunci pubblicitari.</dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/feature03.png')?>" alt=""/></dt>
          <dd><h4>Protezione Download</h4></dd>
          <dd>Mantiene il tuo PC lontano <br> dai file dannosi.</dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- feature end -->

  <!-- review start -->
  <div class="review">
    <div class="wrapper">
      <h2>Cosa dicono gli altri</h2>
      <div class="review-box">
        <div class="reviews">
          <div class="inner">
            <dl>
              <dt>Filipe</dt>
              <dd>
                "IObit Malware Fighter è il migliore programma per rimuovere i malware. Sono un tecnico e lavoro in Centro di Supporto, IMF è lo strumento ottimale per combattere contro malware, tutti i Malware saranno terminati. IMF è un software intuitivo con funzionalità avanzate e un'interfaccia grafica molto bella. Uno strumento moderno e vale usare tutti i giorni."
              </dd>
            </dl>
            <dl>
              <dt>Software.Informer</dt>
              <dd>
                "IObit Malware Fighter PRO è in grado di rilevare vari tipi di spyware, ransomware, adware, Trojan, worm, keylogger e bot. Il programma utilizza due motori AV - il proprio e BitDefender – ed è efficace contro i malware impossibili da rilevare con altri strumenti. Un altro vantaggio è che funziona contemporaneamente con il programma standard AV. IObit Malware Fighter PRO è in grado di rilevare vari tipi di spyware, ransomware, adware, Trojans, worms, keyloggers e bots."
              </dd>
            </dl>
            <dl>
              <dt>Adam Cullen</dt>
              <dd>
                "IObit Malware Fighter è uno strumento grande, è in grado non solo di scansionare i file e le chiavette USB, proteggerti anche contro le minacce online e offline. Con i prodotti di IObit, ho ricevuto i grandi risultati e mi hanno aiutato tanto per proteggere il mio computer. Raccomando IObit e tutti i suoi prodotti a ciascuno che stia cercando una protezione e ottimizzazione del computer per rendere la tua vita più facile e semplice."
              </dd>
            </dl>
          </div>
        </div>
        <div class="handle">          
          <span class="one"><img src="<?php echo getStaticUrl('images/filipe.png')?>" alt="Filipe"/></span>
          <span class="two on"><img src="<?php echo getStaticUrl('images/software.informer.png')?>" alt=""/></span>
          <span class="three"><img src="<?php echo getStaticUrl('images/adam-cullen.png')?>" alt="Adam Cullen"></span>
        </div>
      </div>
    </div>
  </div>
  <!-- review end -->

  <!-- awards start -->
  <div class="awards">
    <div class="wrapper">
      <h2>Premi Mondiali</h2>
      <div class="imgbox"><img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/></div>
    </div>
  </div>
  <!-- awards end -->

  <!-- footer start -->
  <div class="footer">
    <dl class="wrapper">
      <dt>Note:</dt>
      <dd>
        *. Alla fine del periodo di prova gratuito di 30 giorni, ti saranno addebitati automaticamente €19,99 sulla tua carta di credito o account PayPal. Lo sconto del 65% sul prezzo originale di €59,95 è un <br> &nbsp;&nbsp; bonus solo per i preordini!
      </dd>
      <dd>
        *. Se non sei soddisfatto, puoi annullare l'ordine che hai effettuato entro 30 giorni senza alcun addebito.
      </dd>
    </dl>
    <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Tutti i diritti riservati</p>
  </div>
  <!-- footer end -->

  <!-- floatlayer start -->
  <div id="floatlayer" class="floatlayer">
    <div class="wrapper clearfix">
      <div class="imgbox fl">
        <img src="<?php echo getStaticUrl('images/imf-box.png')?>" alt=""/>
      </div>
      <div class="barbox fl">
        <h2>Preordina l’edizione PRO a € 0 ora</h2>
        <div class="numbox">
          Solo per i primi 500 clienti, <b class="reduceNum"><em>2</em><em class="packsNum">2</em></b> pezzi rimasti
        </div>
      </div>
      <ul class="price fl">
        <li class="first">
          <p><strong>0€</strong><sup>*</sup></p>
        </li>
        <li>
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=it-imf8preorder&ref=it_imf8preorder<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=it_purchase_imf"
             onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf8preorder-it');">
            Preordina Ora
          </a>
        </li>
      </ul>
    </div>
  </div>
  <!-- floatlayer end -->

  <script>
    packsNum=<?php echo $packsNum;?>;
    refStr="<?php echo $refStr;?><?php echo $popStr;?>";
  </script>
  <script src="<?php echo $pRootUrl;?>tpl/js/TweenMax.min.js"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>