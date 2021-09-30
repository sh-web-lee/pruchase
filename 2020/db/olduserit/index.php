<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
    $pResUrl = './';
    $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';
$viewNum=rand(154,196);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}
if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'olduserit2020_p' . $date;
  $c_name_t='olduserit2020_t' . $date;
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=rand(78,98);
    setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
    setcookie($c_name_t,$totalNum, time() + 3600 * 24 *2);
  } else {
    if (intval($_COOKIE[$c_name]) <= 3) {
      $packsNum = 3;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    } else {
      $packsNum = $_COOKIE[$c_name] - 1;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    }
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

$refStr=empty($_GET['to'])?'':('-').$_GET['to'];
?>
<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <title>85% di sconto su Driver Booster PRO – Iobit</title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Prompt:400,600" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>

  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com/en/index.php" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
      </a>
      <div class="title">
        <h1>SALDI</h1>
        <p>Offerta esclusiva solo per gli utenti stimati</p>
      </div>
      <div class="clearfix">
        <div class="offer left">
          <div class="top">
            <h2>OFFERTA</h2>
            <p><strong>€<big>2,16</big>/Mese</strong></p>
            <p><span class="sign">NO SCONTO</span></p>
            <a class="buybtn small"
               href="https://www.iobit.com/buy.php?product=it-db83pc2599&ref=it_db83pcoldspecial<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=it_purchase_db"
               onclick="ga('send', 'event', 'dbbuy', 'buy', 'db3pc2599oldspecial-it');">
              <em><i class="all-icons"></i><i class="all-icons icon-cart"></i></em>
              <span>Acquista Ora</span>     
            </a>
          </div>
          <div class="price">
            <h3>Dettagli dei prezzi</h3>
            <ul>
              <li><span>Prezzo originale</span> <span class="right"><del>€74,85</del></span></li>
              <li><span><b>Prezzo scontato per tutti</b></span> <span class="right"><b>€25,99</b></span></li>
              <li class="last"><b class="red">(Risparmi €48,86)</b></li>
            </ul>
          </div>
        </div>
        <div class="offer right">
          <div class="top">
            <h2>OFFERTA ESCLUSIVA</h2>
            <p><strong>€<big>1,66</big>/Mese</strong></p>
            <p><span class="sign">SUPER SCONTO DELL’85% CON REGALI</span></p>
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=it-db814m3pcsdpf1999&ref=it_db814m1999oldspecial<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=it_purchase_db"
               onclick="ga('send', 'event', 'db14mbuy', 'buy', 'db3pc14msdpf2399oldspecial-it');">
              <em><i class="all-icons"></i><i class="all-icons icon-cart"></i></em>
              <span>Approfittane Ora</span>  
            </a>
          </div>
          <div class="price">
            <h3>Prezzo imbattibile</h3>
            <ul>
              <li><span>12 Mesi</span><span class="right"><del>€74,85</del></span></li>
              <li><span>2 mesi extra</span><span class="right"><del>€12,48</del></span></li>
              <li><span>Regali Gratis</span><span class="right"><del>€69,94</del></span></li>
              <li><span><b>Totale</b></span><span class="right"><b>€19,99</b></span></li>
              <li class="last"><b class="red">(Risparmi €137,28)</b></li>
            </ul>
          </div>
          <div class="numbox">
            <h3>
              Affrettati, solo
              <span id="topNum" class="giftNum">
                <b class="nwrap"><b class="numlist">0</b></b>
                <b class="nwrap"><b class="numlist">0</b></b>
                <b class="nwrap"><b class="numlist">5</b></b>
                <b class="nwrap"><b class="numlist">5</b></b>
              </span>
              pezzi rimasti
            </h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- feature start -->
  <div class="feature first">
    <h2 class="wrapper">Potenzia notevolmente il tuo PC con<br> funzioni avanzate</h2>
    <div class="wrapper clearfix">
      <div class="imgbox fl"><img src="<?php echo getStaticUrl('images/device.png')?>" alt=""/></div>
      <div class="content fr">
        <h3>Mantieni tutti i driver aggiornati con <span>database più grande</span></h3>
        <ul>
          <li>
            <i>●</i>
            <span>Suporta aggiornamento di oltre <b>4.500.000</b> driver.</span>
          </li>
          <li class="twice">
            <i>●</i>
            <span><b>2 volte più veloce</b> la scansione di driver obsoleti con il nuovo motore di scansione.</span>
          </li>
          <li class="twice">
            <i>●</i>
            <span>Ripara più problemi di audio e di connessione Internet con strumenti potenti.</span>
          </li>
        </ul>
        <div class="clearfix">
          <dl>
            <dt><img src="<?php echo getStaticUrl('images/arrow-icon01.png')?>" alt=""/></dt>
            <dd>
              <strong>1 MILIONE</strong>
              <p>di driver extra</p>
            </dd>
          </dl>
          <dl>
            <dt><img src="<?php echo getStaticUrl('images/arrow-icon02.png')?>" alt=""/></dt>
            <dd>
              <strong>100%</strong>
              <p>più veloce la scansione</p>
            </dd>
          </dl>
        </div>
      </div>
    </div>
  </div>
  <div class="feature second">
    <div class="wrapper clearfix">
      <div class="content fl">
        <h3><span>Aggiorna tutti i driver</span> in modo<br> ancora più semplice e sicuro</h3>
        <ul>
          <li class="three">
            <i>●</i>
            <span>
              Effettua automaticamente il backup e crea un punto di ripristino del sistema prima dell'aggiornamento, nel caso qualcosa vada storto.
            </span>
          </li>
          <li class="twice">
            <i>●</i>
            <span>Installa e aggiorna i driver in modo automatico durante il tempo di inattività del tuo PC.</span>
          </li>
          <li class="twice">
            <i>●</i>
            <span>100% più veloce la velocità di download di driver rispetto alla versione Free.</span>
          </li>
        </ul>
      </div>
      <div class="imgbox fr">
        <img src="<?php echo getStaticUrl('images/screen03.png')?>" alt=""/>
        <span class="curve pink"><b>2.4MB/s<sup>*</sup></b></span>
        <span class="curve purple"><b>103KB/s<sup>*</sup></b></span>
        <span class="rocket"></span>
      </div>
    </div>
  </div>
  <div class="feature third">
    <div class="wrapper clearfix">
      <div class="imgbox fl">
        <img src="<?php echo getStaticUrl('images/screen01.png')?>" alt=""/>
        <img class="scan01" src="<?php echo getStaticUrl('images/scan-01.png')?>" alt=""/>
        <img class="scan02" src="<?php echo getStaticUrl('images/scan-02.png')?>" alt=""/>
        <span class="scan03">
          <img src="<?php echo getStaticUrl('images/scan-03.png')?>" alt=""/>
        </span>
      </div>
      <div class="content fr">
        <h3>Migliora l’esperienza di gioco</h3>
        <ul>
          <li class="twice">
            <i>●</i>
            <span>Accelera ulteriormente la velocità di gioco con Game Boost potenziato.</span>
          </li>
          <li class="three">
            <i>●</i>
            <span>Disattiva automaticamente tutte le notifiche di Driver Booster per interrompere il disturbo con Modalità Silenziosa.</span>
          </li>
          <li class="twice">
            <i>●</i>
            <span>Mantiene sempre aggiornati i componenti di gioco per migliorare l’esperienza di gioco e  supportare nuove perifiche.</span>
          </li>
        </ul>
        <div class="progressbar">
          <span><em></em><em class="red"></em></span><b>Prestazioni migliori del 23%*</b>
        </div>
      </div>
    </div>
  </div>
  <div class="feature fourth wrapper">
    <p>
      <span><i></i> <b>Driver Booster Free</b></span> <span class="red"><i></i> <b>Driver Booster PRO</b></span>
    </p>
    <p class="gray">*. Abbiamo testato il driver booster 8 PRO nel nostro laboratorio di test interno. I risultati possono variare.</p>
  </div>
  <!-- feature end -->

  <!-- comparison start -->
  <div class="comparison">
    <div class="wrapper">
      <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <thead>
          <tr>
            <th class="itema">
              <h3>La tua versione<br> <b>ATTUALE</b></h3>
              <span class="all-icons tabicon"></span>
            </th>
            <th class="itemb"><img src="<?php echo getStaticUrl('images/vs.png')?>" alt=""/></th>
            <th class="itemc">
              <div class="name">
                <h3>La versione PRO<br> <b>AGGIORNATA</b></h3>
                <span class="all-icons tabicon"></span>
              </div>
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="itema"><i class="all-icons tabicon"></i></td>
            <td class="itemb">Scarica e aggiorna i driver obsoleti con un solo clic</td>
            <td class="itemc"><i class="all-icons tabicon red"></i></td>
          </tr>
          <tr>
            <td class="itema"><i class="all-icons tabicon error"></i></td>
            <td class="itemb">Database più grande per aggiornare molti più driver rari e obsoleti</td>
            <td class="itemc">4.5 milioni</td>
          </tr>
          <tr>
            <td class="itema"><i class="all-icons tabicon error"></i></td>
            <td class="itemb">Velocità di download del driver illimitata</td>
            <td class="itemc"><i class="all-icons tabicon red"></i></td>
          </tr>
          <tr>
            <td class="itema"><i class="all-icons tabicon error"></i></td>
            <td class="itemb">Priorità per ottenere gli ultimi driver Game Ready</td>
            <td class="itemc"><i class="all-icons tabicon red"></i></td>
          </tr>
          <tr>
            <td class="itema"><i class="all-icons tabicon error"></i></td>
            <td class="itemb">Download, aggiornamento e installazione automatica dei driver durante i periodi di inattività del sistema</td>
            <td class="itemc"><i class="all-icons tabicon red"></i></td>
          </tr>
          <tr>
            <td class="itema"><i class="all-icons tabicon error"></i></td>
            <td class="itemb">Backup automatico di tutti i driver per il ripristino sicuro</td>
            <td class="itemc"><i class="all-icons tabicon red"></i></td>
          </tr>
          <tr class="last">
            <td class="itema"><i class="all-icons tabicon error"></i></td>
            <td class="itemb">Aggiornamento automatico all’ultima versione</td>
            <td class="itemc"><i class="all-icons tabicon red"></i></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <!-- comparison end -->

  <!-- gifts start -->
  <div class="gifts">
    <div class="wrapper">
      <h2>Paghi uno a prezzo scontato e ottieni QUATTRO!*</h2>
      <h3>Tutto quello che vuoi per il tuo PC è qui, a portata di clic!</h3>
      <div class="clearfix">
        <dl class="iu">
          <dt>
            <span class="ribbon"></span>
            <img src="<?php echo getStaticUrl('images/gifts-db.png')?>" alt="Driver Booster PRO"/>
          </dt>
          <dd>
            <h4>Driver Booster PRO</h4>
            <strong>€0 </strong> <del>€12,48</del>
            <p>2 mesi extra per mantenere sempre aggiornati i tuoi driver e componenti di gioco!</p>
          </dd>
        </dl>
        <dl class="sd">
          <dt>
            <span class="ribbon"></span>
            <img src="<?php echo getStaticUrl('images/gifts-sd.png')?>" alt="Smart Defrag PRO"/>
          </dt>
          <dd>
            <h4>Smart Defrag PRO</h4>
            <strong>€0 </strong> <del>€29,99</del>
            <p>Offre la migliore deframmentazione del disco e  accelera al massimo l'hard driver!</p>
          </dd>
        </dl>
        <dl class="pf">
          <dt>
            <span class="ribbon"></span>
            <img src="<?php echo getStaticUrl('images/gifts-pf.png')?>" alt="Protected Folder"/>
          </dt>
          <dd>
            <h4>Protected Folder</h4>
            <strong>€0 </strong> <del>€39,95</del>
            <p>Protegge i tuoi file personali e li mantiene lontani dagli attacchi dannosi!</p>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- gifts end -->

  <!-- centbuy start -->
  <div class="centbuy wrapper">
    <p><strong>€19,99</strong> <del>€157,27</del></p>
    <a class="buybtn green"
       href="https://www.iobit.com/buy.php?product=it-db814m3pcsdpf1999&ref=it_db814m1999oldspecial<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=it_purchase_db"
       onclick="ga('send', 'event', 'db14mbuy', 'buy', 'db3pc14msdpf2399oldspecial-it');">  
      <em><i class="all-icons"></i><i class="all-icons icon-cart"></i></em>   
      <span>Approfittane Ora</span>  
    </a>
    <div class="numbox">
      <h3>
        Affrettati, 
        <span id="centNum" class="giftNum">
          <b class="nwrap"><b class="numlist">0</b></b>
          <b class="nwrap"><b class="numlist">0</b></b>
          <b class="nwrap"><b class="numlist">5</b></b>
          <b class="nwrap"><b class="numlist">5</b></b>
        </span>
        pezzi rimasti
      </h3>
    </div>
  </div>
  <!-- centbuy end -->

  <!-- review start -->
  <div class="review wrapper">
    <h2>Facciamo tutto il possibile per soddisfare i nostri<br> clienti ovunque essi siano!</h2>
    <div class="reviewbox">
      <h3>Cosa dicono di noi</h3>
      <ul>
        <li class="one"><img src="<?php echo getStaticUrl('images/chip.png')?>" alt="Chip"></li>
        <li class="two">
          <img src="<?php echo getStaticUrl('images/adam-backlund.png')?>" alt="Adam Backlund">
        </li>
        <li class="three">
          <img src="<?php echo getStaticUrl('images/fabio-tursi.png')?>" alt="Fabio Tursi">
        </li>
        <li class="four"><img src="<?php echo getStaticUrl('images/olorin89.png')?>" alt="Olorin 89"></li>
      </ul>
      <div class="details">
        <div>
          <h4>CHIP <span class="flag de"></span></h4>
          <p>
            "Driver Booster Pro: La funzionalità di download automatico di driver è disponibile solo nella versione Pro." – Tradotto da Tedesco
          </p>
        </div>
        <div class="active">
          <h4>Adam Backlund <span class="flag us"></span></h4>
          <p>
            "Driver Booster Pro è un'applicazione eccellente. Se avete molte applicazioni e dispositivi sul computer ma non avete tempo per aggiornarli manualmente come me, vi consiglio vivamente Driver Booster, vi aiuta ad aggiornare i driver in modo molto veloce e facile." – Tradotto da inglese
          </p>
        </div>
        <div>
          <h4>Fabio Tursi <span class="flag it"></span></h4>
          <p>
            “Finalmente, con IObit Driver Booster Pro ho trovato il programma perfetto per mantenere pulito e aggiornato il mio sistema.”
          </p>
        </div>
        <div>
          <h4>Olorin 89 <span class="flag it"></span></h4>
          <p>
            "Driver Booster è semplicemente il tool di aggiornamento driver che semplifica la vita a tutti."
          </p>
        </div>
      </div>
      <a class="next" href="javascript: nextFun();"></a>
      <a class="prev" href="javascript: prevFun();"></a>
    </div>
  </div>
  <!-- review end -->

<!-- bottom start -->
<div class="bottom">
  <div class="wrapper">
    <!-- service start -->
    <div class="service clearfix">
      <dl class="fl">
        <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dt>
        <dd>
          <h4>SENZA RISCHIO – Garanzia di rimborso di 60 giorni</h4>
          <p>
            Siamo fiduciosi che l’edizione PRO sarà in grado di risolvere tutti i problemi del driver per il tuo PC a un prezzo economico!
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

    <!-- footer start -->
    <div class="footer">
      <dl>
        <dt>Nota: </dt>
        <dd>*. Tali promozioni sono soggette alle modifiche senza preavviso, periodicamente a nostra esclusiva discrezione.</dd>
        <dd>* I dati sono testati dal nostro laboratorio interno, potrebbero variare in base al sistema o computer.</dd>
      </dl>
      <p>Copyright © 2005 - <?php echo date('Y')?> IObit. Tutti I diritti riservati</p>
    </div>
    <!-- footer end -->
  </div>
</div>
<!-- bottom end -->

<!-- float start -->
<div class="floatlayer clearfix">
  <div class="wrapper clearfix">
    <div class="left fl">
      <img src="<?php echo getStaticUrl('images/float-gift-box.png')?>" alt="Driver Booster PRO"/>
    </div>
    <div class="numbox fl">
      <h3>
        Affrettati, solo 
        <span id="botNum" class="giftNum">
          <b class="nwrap"><b class="numlist">0</b></b>
          <b class="nwrap"><b class="numlist">0</b></b>
          <b class="nwrap"><b class="numlist">5</b></b>
          <b class="nwrap"><b class="numlist">5</b></b>
        </span>
        pezzi rimasti
      </h3>
      <p><span class="buyNum"><?php echo $viewNum; ?></span> visitatori in questa pagina ora</p>
    </div>
    <a class="buybtn fr"
       href="https://www.iobit.com/buy.php?product=it-db814m3pcsdpf1999&ref=it_db814m1999oldspecial<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=it_purchase_db"
       onclick="ga('send', 'event', 'db14mbuy', 'buy', 'db3pc14msdpf2399oldspecial-it');">
      <em><i class="all-icons"></i><i class="all-icons icon-cart"></i></em>
      <span>Ottienilo Ora</span>     
    </a>
  </div>
</div>
<!-- float end -->

  <script>refStr='<?php echo $refStr;?>';</script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>