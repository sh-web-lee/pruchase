<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
  $pResUrl = './';
  $pRootUrl = '../../../../';
}
$ref1pc='itaff_asc13_2020buy1pc';
$ref3pc='itaff_asc13_2020buy3pc';
if(!empty($_GET['ref'])){
  $ref1pc=$ref3pc=$_GET['ref'];
}
include $pRootUrl.'include/common.inc.php';

$reduceNum=74041325;
$buyNum = number_format(ceil(microtimeFloat()*1000/20000) - $reduceNum);
if($_GET['action']=='maskCount'){
  $maskType=$_GET['maskType'];
  if(in_array($maskType,array(1,2))) {
    $buttonClick=$_GET['buttonClick'];
    $ip=empty($_GET['ip']) ? getIP() : $_GET['ip'];
    $time=time();
    try {
      $dsn="mysql:host=purchase-iobit-com-db.cylexcs6bned.us-east-1.rds.amazonaws.com;dbname=purchase";
      $pdo=new PDO($dsn,'purchase','PXdNZdCE68iz');
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $pdo->query("set names utf8");

      $sql = "insert into affascmaskcount2019 (ip,addTime,maskType,buttonClick) values(:ip,:addTime,:maskType,:buttonClick)";
      $pre = $pdo->prepare($sql);
      $pre->bindParam(':ip', $ip);
      $pre->bindParam(':addTime', $time);
      $pre->bindParam(':maskType', $maskType);
      $pre->bindParam(':buttonClick', $buttonClick);
      $pre->execute();
    } catch (PDOException $e) {
      var_dump($e->getMessage());
    }
  }
  exit();
}
?>
<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Attiva Advanced SystemCare PRO ora per far funzionare il tuo PC lento al massimodella capacità</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
  <script type="text/javascript">
    function getBuyNum(){
      $.ajax({
        type: "GET",
        url: "<?php echo $pRootUrl;?>callback.php",
        data: "action=getBuyNum&reduceNum=<?php echo $reduceNum;?>&reTime=&r="+Math.random(),
        success: function(packs){
          $('.buynum').html(packs);
          setTimeout('getBuyNum()', 20000);
        }
      });
    }
    setTimeout('getBuyNum()', 20000);
  </script>
</head>

<body>

<!-- banner start -->
<div class="banner">
  <div class="wrapper clearfix">
    <dl class="fl clearfix">
      <dt class="fl"><img src="<?php echo getStaticUrl('images/ascbox.png')?>" alt="" /></dt>
      <dd class="fl">
        <span>Stai attivando:</span>
        <h1>Advanced SystemCare 13 PRO</h1>
        <p>Acquista ora per ringiovanire il tuo PC lento e farlo funzionare all’apice <br> della capacità!</p>
      </dd>
    </dl>
    <div class="right fr">
      <p>"Advanced Systemcare mira a rimediare qualsiasi problema che affligge il tuocomputer"</p>
      <img src="<?php echo getStaticUrl('images/clnet.png')?>" alt="" />
    </div>
  </div>
</div>
<!-- banner end -->

<!-- container start -->
<div class="wrapper">
  <!-- title -->
  <h2 class="title"></h2>
  <!-- offer start -->
  <div class="offer clearfix">

    <!-- 1PC BOX -->
    <div class="box pc">
      <!-- computer -->
      <img src="<?php echo getStaticUrl('images/computer.png')?>" alt="" />
      <!-- title -->
      <h2>1 Anno / Licenza per 1 PC</h2>
      <!-- details -->
      <ul>
        <li><i></i>Pulizia definitiva del PC</li>
        <li><i></i>Regolazione del Sistema</li>
        <li><i></i>Protezione completa della privacy</li>
        <li><i></i>Pulizia automatica della RAM</li>
        <li><i></i>Aggiornamenti gratis</li>
      </ul>
      <div class="price">
        <!-- price -->
        <p><strong>14.99<small>€</small></strong> <del>29.99€</del></p>
        <!-- 1pc buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=itaff-asc131pc1499&ref=itaff_asc13_2020buy1pc&aff=<?php echo $_GET['aff']?>"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'itaffasc132020buy1pc')">
          Aggiungi al carrello
        </a>
      </div>
    </div>

    <!-- 3PC BOX -->
    <div class="box pcs">
      <!-- computer -->
      <img src="<?php echo getStaticUrl('images/computer-pcs.png')?>" alt="" />
      <!-- title -->
      <h2>1 Anno / Licenza per 3 PC</h2>
      <!-- detailes -->
      <ul>
        <li><i></i>Pulizia definitiva del PC</li>
        <li><i></i>Regolazione del Sistema</li>
        <li><i></i>Protezione completa della privacy</li>
        <li><i></i>Pulizia automatica della RAM</li>
        <li><i></i>Aggiornamenti gratis</li>
      </ul>
      <div class="price">
        <!-- price -->
        <p><strong>21.99<small>€</small></strong> <del>54.98€</del></p>
        <!-- 3pc buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=itaff-asc133pc2199&ref=itaff_asc13_2020buy3pc&aff=<?php echo $_GET['aff']?>"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'itaffasc132020buy3pc')">
          Aggiungi al carrello
        </a>
        <p class="people"><i></i> <b class="buynum"><?php echo $buyNum;?></b> personelohanno comprato</p>
      </div>
    </div>
  </div>
  <!-- offer end -->

  <!-- payment start -->
  <div class="payment">
    <span>Accettiamo</span>
    <img src="<?php echo getStaticUrl('images/payment.png')?>" alt="" />
  </div>
  <!-- payment end -->

  <!-- feature start -->
  <div class="feature clearfix">
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/feature-01.png')?>" alt="" /></dt>
      <dd>
        <h2>GARANZIA RIMBORSO ENTRO 60 GIORNI</h2>
        <p>
          Se non sei soddisfatto con Advanced SystemCare PRO, riceverai un rimborso completo del tuo acquisto entro 60 giorni.
        </p>
      </dd>
    </dl>
    <dl class="right">
      <dt><img src="<?php echo getStaticUrl('images/feature-02.png')?>" alt="" /></dt>
      <dd>
        <h2>PAGAMENTO SICURO</h2>
        <p>
          Ci impegniamo a proteggere le tue informazioni personali con crittografia avanzata e protezione anti-spam.
        </p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/feature-03.png')?>" alt="" /></dt>
      <dd>
        <h2>ASSISTENZA TECNICA GRATUITA 24/7</h2>
        <p>
          Il nostro gruppo di assistenza premium risponderà a qualsiasi domanda tu possaavere sui nostri prodotti entro 24 ore.
        </p>
      </dd>
    </dl>
    <dl class="right">
      <dt><img src="<?php echo getStaticUrl('images/feature-04.png')?>" alt="" /></dt>
      <dd>
        <h2>AGGIORNAMENTI GRATUITI</h2>
        <p>
          Riceverai gratuitamente tutti gli aggiornamenti software durante il periodo di abbonamento.
        </p>
      </dd>
    </dl>
  </div>
  <!-- feature end -->
</div>
<!-- container end -->

<!-- review start -->
<div class="container bordertop clearfix">
  <div class="review wrapper">
    <div class="review-box">
      <!-- 01 -->
      <div class="reviews clearfix">
        <h2>Recensione dell’Utente</h2>
        <h3>"Pulisce spyware e malware che il mio antivirus lascia passare"</h3>
        <p>"Abbiamo usato fino a una dozzina di programmi diversi far funzionare in modo fluido i nostri computer e tenere alla larga gli elementi maligni. Ci sono volute ore ogni settimana per mantenere sicurezza e prestazioni. Ora, con Advanced System Care Pro, troviamo tutto in un unico programmae ci voglionosolo pochi minuti ogni paio di giorni per fare gli stessi lavori con molta piùscioltezza"</p>
      </div>
      <!-- 02 -->
      <div class="reviews clearfix active">
        <h2>Recensione del Media</h2>
        <h3>"Advanced Systemcare risolvequalsiasi problema del computer."</h3>
        <p>"Non c'è niente di peggio di un computer che è impantanato così tanto da compromettere la tua capacità di lavorare o giocare. Advanced Systemcare mira a rimediare qualsiasi problema del computer,non solo pulendo file spazzatura, malware e voci di registro invalide, ma dando al tuo computer una spintain piùper ottimizzare l'esperienza sultuo PC."</p>
      </div>
      <!-- 03 -->
      <div class="reviews clearfix">
        <h2>Recensione dell’Utente</h2>
        <h3>"La mia scelta è ancora una volta l’inimitabileAdvanced SystemCare Pro"</h3>
        <p>"Essendouna tecnologia di riparazione del computer, trovo che ASC riesca a risolvere i problemi più comuni di download e scansione. Di solito suggerisco al cliente di acquistare il pacchetto Pro dopo una riparazione. A cosa serveuna tecnologiaspecificaquando hai ilpotente Advanced SystemCareche si occupa deltuo sistema24/7? Questo è il miglior prodotto che l’utente domestico può acquistare. Grazie per facilitare il mio lavoro."</p>
      </div>
    </div>

    <ul class="handle clearfix">
      <li>
        <div class="badge"><img src="<?php echo $pResUrl; ?>images/bob-bassett.png" alt="Bob Bassett"><span></span></div>
        <strong>Bob Bassett</strong>
      </li>
      <li class="active">
        <div class="badge"><img src="<?php echo $pResUrl; ?>images/cnet.png" alt="Cnet"><span></span></div>
        <strong>Cnet</strong>
      </li>
      <li>
        <div class="badge"><img src="<?php echo $pResUrl; ?>images/charles-r-widick.png" alt="Charles R. Widick"><span></span></div>
        <strong>Charles R. Widick</strong>
      </li>
    </ul>
  </div>
</div>
<!-- review end -->

<!-- footer start -->
<div class="footer">Copyright © 2005 - <?php echo date('Y')?> IObit.Tutti i diritti riservati</div>
<!-- footer end -->

<!-- mask start -->
<div class="mask">
  <div class="mask-box">
    <div class="close" onclick="maskClose()">x</div>
  </div>
</div>
<!-- mask end -->

<script>var imgSrc = "<?php echo getStaticUrl('images/off.png')?>";</script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>