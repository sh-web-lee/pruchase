<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';

}
include $pRootUrl.'include/common.inc.php';

if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'itiuxnovexp_p' . $date;
  $c_name_t='itiuxnovexp_t' . $date;
  if ($_COOKIE[$c_name]===null) {
    // $totalNum=$packsNum=rand(37,50);
    $totalNum=$packsNum=26;
    setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
    setcookie($c_name_t,$totalNum, time() + 3600 * 24 *2);
  } else {
    if (intval($_COOKIE[$c_name]) <= 5) {
      $packsNum = 5;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    } else {
      if((rand(1,100)%2)==0){
          $packsNum=$_COOKIE[$c_name];
      }else {
        $packsNum = $_COOKIE[$c_name] - 1;
        setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
      }
    }
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

if(in_array($_GET['st'],array('dbxmasr'))){
  $refStr='-'.$_GET['st'];
}else{
  $refStr='';
}
if(in_array($_GET['pop'],array('xr_iue'))){
  $refStr.='-'.$_GET['pop'];
}
if(!empty($_GET['to'])){
  $refStr.='-'.$_GET['to'];
}
if(preg_match_all('/([0-9]*)\./',$_GET['ver'],$matches)){
  $ver=$matches[1][0].$matches[1][1];
  $refStr.='-'.$ver;
}
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['user'])?'':('-'.$_GET['user']);
$refStr.=empty($_GET['insday'])?'':('-'.$_GET['insday']);
$refStr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-t'.$_GET['type'].'-e'.$_GET['expd'];
?>

<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Grande Offerta! Sconto fino a 85% su IObit Uninstaller PRO – Offerta di natale 2019 di IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700,800&display=swap" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>
</head>

<body>
  <!-- banner -->
  <div class="banner">
    <div class="lamp">
      <div class="light hide"></div>
      <div class="light01 hide"></div>
      <div class="light02 hide"></div>
    </div>
    <div class="snow"></div>

    <div class="wrapper">
      <div class="star"></div>
      <!-- logo -->
      <a class="logo" href="https://www.iobit.com/it/index.php" target="_blank">IObit</a>
      <!-- title -->
      <h1>NATALE – Natale FINO AL -80%</h1>
      <div class="box">
        <dl>
          <dt>Vale <del>29,99€</del></dt>
          <dd>
            <strong>12,99€</strong>
            <span>1 PC, 1 Anno</span>
          </dd>
        </dl>
        <img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="IObit Uninstaller PRO" class="img-box">
        <!-- 1pc buybtn -->
        <a href="https://www.iobit.com/buy.php?product=it-iu91pc1299&ref=it_iu91pc1299xmasexp1911<?php echo $refStr;?>&refs=it_purchase_iu  "
           onclick="ga('send', 'event', 'iubuy', 'buy', 'iu91pc1299xmasexp1911-it')"
           class="buybtn small">
          ACQUISTA ORA
        </a>
      </div>
      <div class="box gift-box">
        <dl>
          <dt>Vale <del>99,97€</del></dt>
          <dd>
            <strong>12,99€</strong>
            <span><b>3 PC</b>, 1 Anno</span>
          </dd>
        </dl>
        <img src="<?php echo getStaticUrl('images/iu-gift-box.png')?>" alt="" class="img-box">
        <!-- 3pc buybtn -->
        <a href="https://www.iobit.com/buy.php?product=it-iu93pcsdisu1299&ref=it_iu93pcsdisu1299xmasexp1911<?php echo $refStr;?>&refs=it_purchase_iu"
           onclick="ga('send', 'event', 'iubuy', 'buy', 'iu93pcsdisu1299xmasexp1911-it');"
           class="buybtn">
          ACQUISTA ORA
        </a>
        <p>Pochi pezzi disponibili, affrettati!</p>
      </div>
      <p class="last">Se non sei soddisfatto, verrai rimborsato entro i primi 60 giorni.</p>
    </div>
  </div>
  <!-- end banner -->

  <!-- feature -->
  <div class="feature">
    <div class="wrapper clearfix">
      <h2>Goditi una disinstallazione potente <br> per una navigazione più sicura e veloce!</h2>
      <img src="<?php echo getStaticUrl('images/boxshot.png')?>" alt="" class="img-box">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature-01.png')?>" alt=""></dt>
        <dd>
          <strong>Potente</strong>
          <p>Disinstalla facilmente i programmi indesiderati che non possono essere rimossi.</p>
        </dd>
      </dl>
      <dl class="right">
        <dt><img src="<?php echo getStaticUrl('images/feature-02.png')?>" alt=""></dt>
        <dd>
          <strong>Pulito</strong>
          <p>Pulisce automaticamente i dati inutili dei programmi disinstallati per un PC più pulito e veloce.</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature-03.png')?>" alt=""></dt>
        <dd>
          <strong>Intelligente</strong>
          <p>Rileva e disinstalla i plugin pubblicitari maligni.</p>
        </dd>
      </dl>
      <dl class="right">
        <dt><img src="<?php echo getStaticUrl('images/feature-04.png')?>" alt=""></dt>
        <dd>
          <strong>Veloce</strong>
          <p>Aggiorna tutti i software importanti con un solo clic.</p>
        </dd>
      </dl>
      <p class="learn-more">Differenze tra la versione FREE e PRO >></p>
    </div>
  </div>
  <!-- end intro -->

  <!-- comparison start -->
  <div class="comparison wrapper">
    <h2>Differenze tra la tua edizione corrente e<br> IObit Uninstaller 9 PRO</h2>
    <table>
      <thead>
        <tr>
          <th class="text" colspan="2"></th>
          <th class="itema">
            <div class="free">La tua edizione corrente</div>
          </th>
          <th class="space"></th>
          <th class="itemb">
            <div class="pro">IObit Uninstaller 9 PRO</div>
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icons01.png')?>" alt=""/></td>
          <td class="virture">Rimuove programmi, estensioni e applicazioni Windows in batch</td>
          <td class="itema"><i class="all-icons orange"></i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons orange"></i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt=""/></td>
          <td class="virture">Identifica e rimuove programmi ostinati e bundleware</td>
          <td class="itema"><i class="all-icons"></i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons orange"></i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt=""/></td>
          <td class="virture">Rileva e ripristina le modifiche di sistema effettuate durante l'installazione</td>
          <td class="itema"><i class="all-icons"></i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons orange"></i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icons04.png')?>" alt=""/></td>
          <td class="virture">Identifica le estensioni dannose e pubblicitarie </td>
          <td class="itema"><i class="all-icons"></i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons orange"></i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icons05.png')?>" alt=""/></td>
          <td class="virture">Elimina automaticamente gli avanzi dopo la disinstallazione standard</td>
          <td class="itema"><i class="all-icons"></i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons orange"></i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icons06.png')?>" alt=""/></td>
          <td class="virture">Scansiona gli avanzi dei programmi già disinstallati</td>
          <td class="itema"><i class="all-icons"></i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons orange"></i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icons07.png')?>" alt=""/></td>
          <td class="virture">Esegue automaticamente un punto di ripristino prima di disinstallare</td>
          <td class="itema"><i class="all-icons"></i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons orange"></i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icons08.png')?>" alt=""/></td>
          <td class="virture">Aggiorna con un solo clic tutti i programmi obsoleti</td>
          <td class="itema"><i class="all-icons"></i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons orange"></i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icons09.png')?>" alt=""/></td>
          <td class="virture">Aggiornamento automatico quando è disponibile una nuova versione </td>
          <td class="itema"><i class="all-icons"></i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons orange"></i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icons10.png')?>" alt=""/></td>
          <td class="virture">Assistenza tecnica 24 ore su 24 su richiesta</td>
          <td class="itema"><i class="all-icons"></i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons orange"></i></td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- comparison end -->

  <!-- intro start -->
  <div class="intro">
    <div class="wrapper clearfix">
      <h2>L’ultimo IObit IObit Uninstaller 9 ti offre<br> molto più di quanto pensi! </h2>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/intro-icons01.png')?>" alt=""/></dt>
        <dd>
          <h3>Più Pulito</h3>
          <p>
            Rimozione forzata e completa del 150%* in più di programmi che non possono essere disinstallati con mezzi convenzionali
          </p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/intro-icons02.png')?>" alt=""/></dt>
        <dd>
          <h3>Più Profondo</h3>
          <p>
            15%* in più di file e registri rimanenti che possono essere rilevati e rimossi completamente dopo la disinstallazione
          </p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/intro-icons03.png')?>" alt=""/></dt>
        <dd>
          <h3>Più Veloce</h3>
          <p>Processo di disinstallazione più veloce del 10%*</p>
        </dd>
      </dl>
      <dl class="last">
        <dt><img src="<?php echo getStaticUrl('images/intro-icons04.png')?>" alt=""/></dt>
        <dd>
          <h3>Più Sicuro</h3>
          <p>50%* in più di plugin dannosi che possono essere rilevati e rimossi</p>
        </dd>
      </dl>
    </div>
  </div>
  <!-- intro end -->

  <!-- review start -->
  <div class="review wrapper">
    <h2>Facciamo tutto il possibile per soddisfare i nostri<br> clienti ovunque essi siano!</h2>
    <div class="reviewbox">
      <ul>
        <li class="one"><img src="<?php echo getStaticUrl('images/makeuseof.png')?>" alt="MakeUseOf"></li>
        <li class="two">
          <img src="<?php echo getStaticUrl('images/paulo-martins.png')?>" alt="Paulo Martins">
        </li>
        <li class="three">
          <img src="<?php echo getStaticUrl('images/lynett-van-niekerk.png')?>" alt="Lynette van Niekerk">
        </li>
        <li class="four"><img src="<?php echo getStaticUrl('images/lovro-zuzic.png')?>" alt="Lovro Žužić"></li>
      </ul>
      <div class="details">
        <div>
          <h4>MakeUseOf</h4>
          <p>
            Questo strumento di disinstallazione facile da usare e informativo pulisce, configura, e ottimizza il tuo PC. Gli utenti possono scaricarlo in pochissimi minuti. Questo strumento di disinstallazione può essere classificato come il miglior programma di disinstallazione e permette agli utenti di disinstallare all'ingrosso. Esso offre agli utenti di fare una "Scansione Approfondita" per andare più a fondo e trovare gli avanzi. La prestazione la stessa rende questo piccolo strumento vale la pena tenere.
          </p>
        </div>
        <div class="active">
          <h4>Paulo Martins</h4>
          <p>
            IObit Uninstaller è il miglior software per rimuovere programmi sul computer, è veloce e molto efficace, niente a che vedere con il programma di disinstallazione di base di Windows, infatti pulisce a fondo tutti i residui del programma, evitando i rallentamenti nel computer. Lo uso da alcuni mesi e non so come farei senza, lo consiglio ai miei amici e alla mia famiglia. Grazie a IObit Uninstaller, è fantastico!
          </p>
        </div>
        <div>
          <h4>Lynette van Niekerk</h4>
          <p>
            Trovo che il programma di disinstallazione IObit sia eccellente da usare in quanto ha tutto ciò che si possa desiderare. Mi piace il fatto che disinstalla tutti i frammenti residui. Ha anche un programma di aggiornamento che ti ricorda quando è necessario aggiornare i programmi e il fatto che disinstalla i programmi batch lo rende davvero il numero uno sul mercato. È un software fondamentale per mantenere il computer a posto.
          </p>
        </div>
        <div>
          <h4>Lovro Žužić</h4>
          <p>
            IObit Unisntaller migliora se stesso con ogni aggiornamento, l’ho già usato per 3 anni. Funziona molto veloce e ha un’interfaccia semplice. Alcune funzioni che uso regolarmente sono Batch Uninstaller, Scansione Approfondita, Distruggi File e Installati di Recente, il quale offre un’accesso veloce ai programmi installati di recente che non mi piacciono o non funzionano correttamente. È anche facile da controllare i tuoi elementi d’avvio per rendere più veloce l’avvio del tuo PC.
          </p>
        </div>
      </div>
      <a class="next" href="javascript: nextFun();"></a>
      <a class="prev" href="javascript: prevFun();"></a>
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
      <img src="<?php echo getStaticUrl('images/award.png')?>" alt=""/>
    </div>
  </div>
  <!-- awards end -->

  <!-- footer start -->
  <div class="footer">
    <div class="wrapper">
      <div class="service clearfix">
        <dl class="fl one">
          <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dt>
          <dd>
            <h3>SENZA RISCHIO - Garanzia di rimborso di 60 giorni</h3>
            <p>
              Siamo fiduciosi che l’edizione PRO sarà in grado di offrire la migliore protezione per il tuo PC a un prezzo economico!
            </p>
          </dd>
        </dl>
        <dl class="fr two">
          <dt><h3>Accettiamo</h3></dt>
          <dd><img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/></dd>
        </dl>
      </div>
      <dl class="note">
        <dt>Note:</dt>
        <dd>* I dati potrebbero variare in base al sistema o computer.</dd>
        <dd>* Tali promozioni sono soggette a modifiche senza preavviso, periodiche e a nostra esclusiva discrezione.</dd>
      </dl>
      <p class="copyright">Copyright 2005 - <?php echo date('Y')?> IObit. Tutti i diritti riservati</p>
    </div>
  </div>
  <!-- footer end -->

  <!-- floatlayer start -->
  <div id="floatlayer" class="floatlayer">
    <div class="wrapper clearfix">
      <div class="left fl"><img src="<?php echo getStaticUrl('images/iu-float-box.png')?>" alt=""/></div>
      <div class="center fl">
        <h2>Offerta esclusiva per il Natale 2019!</h2>
        <div class="numbox">
          <p>Affrettati, ne restano solo </p>
          <div id="flip" class="flipNum">
            <div class="listbox"><span class="list"><b>2</b></span></div>
            <div class="listbox"><span class="list"><b>1</b></span></div>
          </div>                      
        </div>
      </div>
      <div class="price fr">
        <p><strong>12,99€</strong> <del>99,97€</del></p>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=it-iu93pcsdisu1299&ref=it_iu93pcsdisu1299xmasexp1911<?php echo $refStr;?>&refs=it_purchase_iu"
           onclick="ga('send', 'event', 'iubuy', 'buy', 'iu93pcsdisu1299xmasexp1911-it');">
          Rinnova e risparmia ora!
        </a>
      </div>
    </div>
  </div>
  <!-- floatlayer end -->

  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>