<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';
  if(!empty($_GET['AFF'])) $_GET['aff']=$_GET['AFF'];
if (empty($_GET['ref'])) {
  $refStr = 'itaff_asc14_2017general';
  $refDownloadStr='itasc12g';
}else{
  $refStr=$refDownloadStr=$_GET['ref'];
}
$affStr=empty($_GET['AFF'])?$_GET['aff']:$_GET['AFF'];
if($_GET['ref']=='cb1712en'){
  $buyHref="https://www.cleverbridge.com/289/?scope=checkout&cart=184422&pricerule=enaff2999&coupon=CB50OFF&ref=".$refStr."&AFFILIATE=".$affStr;
}elseif($_GET['ref']=='fs1702en'){
  $buyHref="https://www.macboost.net/xhtml/iobit.html?product=advanced-systemcare-10-pro-1-year-subscription-3-pcs&coupon=ASC50OFF";
}elseif($_GET['ref']=='rw1702en'){
  $buyHref="https://safecart.com/iobit/ascpro/1year3pcs?coupon_code=66PQ";
}elseif($_GET['ref']=='fs269814'){
  $buyHref="https://macbooster.7eer.net/c/269814/378283/4385";
}elseif($_GET['ref']=='fs391813'){
  $buyHref="https://macbooster.7eer.net/c/391813/378283/4385";
}else{
  $buyHref="https://www.iobit.com/buy.php?product=itaff-asc133pc1649&ref=".$refStr."&aff=".$affStr;
}

if(preg_match('/fspi([0-9]*)/',$_GET['ref'],$matches)){
  $buyHref='https://iobit.onfastspring.com/advanced-systemcare-pro-1-year-subscription-3-pcs-1499';
  $pregNum=$matches[1];
  if(!empty($pregNum)){
    $buyHref='https://macbooster.7eer.net/c/'.$pregNum.'/556566/4385';
  }
}

if(!empty($_GET['ref'])){

    if(preg_match_all('/ir([0-9]*)/', $_GET['ref'], $arr)) {

        $buyHref = "https://iobit.onfastspring.com/advanced-systemcare-pro-1-year-subscription-3-pcs-1499";

        if ($arr[1][0] != null) {

            $buyHref = "http://macbooster.7eer.net/c/" . $arr[1][0] . "/556566/4385";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Goditi un PC veloce e senza problemi con ASC PRO</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

  <!-- banner start -->
  <div class="header">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit">
      </a>
      <p>La migliore utilità al mondo per l’ottimizzazione del PC</p>
      <h1>Advanced SystemCare PRO</h1>
      <h4>Rendi il tuo PC più pulito, più veloce e più stabile con un solo 1 clic</h4>
      <div class="btnbox">
        <a class="btn down" href="https://ld.iobit.com/freedownload/affascfreedownload/download.php?product=asc&ref=<?php echo $refDownloadStr;?>&aff=<?php echo $affStr;?>" onclick="ga('send', 'event', 'ascdl', 'download', 'itasc12g')">
          <p>Scarica per una scansione gratuita</p>
          Per Win10/8/7/Vista/XP
        </a>
        <a class="btn buy" href="<?php echo $buyHref;?>" onclick="ga('send', 'event', 'ascbuy', 'buy', 'itaffasc142017general')">
         Acquista ora e risparmia il <strong>50%</strong> 
        </a>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- container start -->
  <div class="container">

    <!-- mediareview start -->
    <dl class="mediareview wrapper clearfix">
      <dt>
        <img src="<?php echo $pResUrl; ?>images/media_icon.png" alt="">
        <p>È la scelta di oltre 250 milioni di utenti</p>
      </dt>
      <dd>
        <h3>Advanced Systemcare risolve  qualsiasi problema del tuo computer.</h3>
        <p>
          “Non c'è niente di peggio di un computer così lento da impedirti di lavorare o giocare. Advanced Systemcare risolve tutti problemi che affliggono il tuo computer, non solo ripulendo file spazzatura, malware e voci di registro non valide, ma dando al tuo computer una spinta in più per ottimizzare la tua esperienza informatica.”- Cnet
        </p>
      </dd>
    </dl>
    <!-- mediareview end -->

    <!-- intro start -->
    <div class="intro">
      <div class="wrapper clearfix">
        <h2>L’utilità di ottimizzazione indispensabile per ogni utente informatico</h2>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/intro1.png')?>" alt=""></dt>
          <dd><h3>PC più veloce</h3></dd>
          <dd>Identifica e rimuove i problemi di prestazione che causano il rallentamento del PC</dd>
        </dl>
        <dl class="more">
          <dt><img src="<?php echo getStaticUrl('images/intro2.png')?>" alt=""></dt>
          <dd><h3>Sistema più stabile</h3></dd>
          <dd>Corregge gli errori di Windows per ripristinare la stabilità del sistema e ridurre gli arresti anomali del PC</dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/intro3.png')?>" alt=""></dt>
          <dd><h3>Navigazione più sicura</h3></dd>
          <dd>Cancella automaticamente i dati di navigazione e nasconde l'impronta digitale per impedire i tracciamenti dannosi</dd>
        </dl>
      </div>
    </div>
    <!-- intro end -->

    <!-- centbuy start -->
    <div class="centbuy">
      <div class="wrapper">
        <h2>Un PC pulito, veloce e stabile è a solo un clic di distanza</h2>
        <div class="btnbox">
          <a class="btn buy" href="<?php echo $buyHref;?>" onclick="ga('send', 'event', 'ascbuy', 'buy', 'itaffasc142017general')">
            Acquista ora e risparmia il <strong>50%</strong> 
          </a>
        </div>
      </div>
    </div>
    <!-- centbuy end -->

    <!-- describe start -->
    <div class="wrapper">
      <div class="describe clearfix">
        <div class="imgbox fr"><img src="<?php echo getStaticUrl('images/describe1.png')?>" alt=""></div>
        <div class="fl txtbox">
          <h2>Pulizia approfondita & ottimizzazione del tuo PC</h2>
          <p>
            Advanced SystemCare PRO pulisce a fondo i file spazzatura, le voci di registro non valide, i programmi indesiderati e ostinati, le barre degli strumenti e i plugin pubblicitari, e ottimizza l’avvio, la RAM, Internet, il sistema e i dischi per riavere un PC pulito e veloce.
          </p>
        </div>
      </div>
      <div class="describe clearfix">
        <div class="imgbox fl"><img src="<?php echo getStaticUrl('images/describe2.png')?>" alt=""></div>
        <div class="txtbox fr">
          <h2>Risolve tutti i tipi di problemi del PC</h2>
          <p>
            Advanced SystemCare PRO identifica e risolve tutti i tipi di problemi di Windows, inclusi errori di registro, errori del disco, problemi di sicurezza di Windows, driver obsoleti, problemi di sistema, ecc. per ripristinare la stabilità del sistema e prevenire arresti anomali del PC.
          </p>
        </div>
      </div>
      <div class="describe clearfix">
        <div class="imgbox fr"><img src="<?php echo getStaticUrl('images/describe3.png')?>" alt=""></div>
        <div class="txtbox fl">
          <h2>Monitora in tempo reale le risorse del sistema</h2>
          <p>
            Advanced SystemCare PRO ti aiuta a gestire l'utilizzo di RAM, CPU e disco con 1 clic, rileva e disattiva automaticamente i processi e i programmi inattivi per liberare memoria e migliorare le prestazioni del PC.
          </p>
        </div>
      </div>
      <div class="describe clearfix">
        <div class="imgbox fl"><img src="<?php echo getStaticUrl('images/describe4.png')?>" alt=""></div>
        <div class="txtbox fr">
          <h2>Proteggi la tua privacy online in modo proattivo</h2>
          <p>
            Integrato con il nuovissimo Scudo della Privacy e Protezione digitale delle impronte digitali, Advanced System Care PRO è in grado di rilevare e bloccare l'accesso segreto ai tuoi dati personali e mascherare l'impronta digitale per cancellare le tracce online, proteggere meglio il tuo PC e la tua privacy online. Allo stesso tempo, impedisce modifiche dannose alla tua home page, al motore di ricerca e alle impostazioni DNS e rimuove le minacce online in tempo reale.
          </p>
        </div>
      </div>
      <div class="describe clearfix">
        <div class="imgbox fr"><img src="<?php echo getStaticUrl('images/describe5.png')?>" alt=""></div>
        <div class="txtbox fl">
          <h2>Rimuove annunci e blocca siti web dannosi</h2>
          <p>
            Advanced SystemCare PRO rimuove fastidiose pubblicità in Internet Explorer, Chrome e Firefox e blocca siti web dannosi e non sicuri durante la navigazione per garantire una migliore esperienza di navigazione
          </p>
        </div>
      </div>
      <div class="describe last clearfix">
        <div class="imgbox fl"><img src="<?php echo getStaticUrl('images/describe6.png')?>" alt=""></div>
        <div class="txtbox fr">
          <h2> Cattura automaticamente gli intrusi  <span>(fotocamera richiesta)</span></h2>
          <p>
            Advanced SystemCare PRO ti aiuta a catturare gli intrusi che accedono al tuo PC senza autorizzazione o cercano di rubare le tue informazioni personali e file importanti. Dopo aver registrato il tuo viso, catturerà in background automaticamente e senza disturbarti l'immagine degli intrusi.
          </p>
        </div>
      </div>
    </div>
    <!-- describe end -->

    <!-- tool start -->
    <div class="tool">
      <div class="wrapper clearfix">
        <h2>Ancora più strumenti sorprendenti</h2>
        <dl>
          <dt><img src="<?php echo $pResUrl; ?>images/tool_icon1.png" alt=""></dt>
          <dd><h4>Gestione di Avvio</h4></dd>
          <dd>Gestisce gli elementi di avvio per accelerare l'avvio del PC.</dd>
        </dl>
        <dl class="right">
          <dt><img src="<?php echo $pResUrl; ?>images/tool_icon2.png" alt=""></dt>
          <dd><h4>Smart RAM</h4></dd>
          <dd>Libera memoria per migliorare le prestazioni del PC.</dd>
        </dl>
        <dl>
          <dt><img src="<?php echo $pResUrl; ?>images/tool_icon3.png" alt=""></dt>
          <dd><h4>Ottimizzazione di Internet</h4></dd>
          <dd>Ottimizza i browser per velocizzare la connessione Internet.</dd>
        </dl>
        <dl class="right">
          <dt><img src="<?php echo $pResUrl; ?>images/tool_icon4.png" alt=""></dt>
          <dd><h4>Riparazione di Windows</h4></dd>
          <dd>Identifica e risolve i problemi di Windows.</dd>
        </dl>
        <dl>
          <dt><img src="<?php echo $pResUrl; ?>images/tool_icon5.png" alt=""></dt>
          <dd><h4>Ricerca di file di grandi dimensioni</h4></dd>
          <dd>Trova e rimuove file di grandi dimensioni per creare più spazio.</dd>
        </dl>
        <dl class="right">
          <dt><img src="<?php echo $pResUrl; ?>images/tool_icon6.png" alt=""></dt>
          <dd><h4>Distruttore File</h4></dd>
          <dd>Rimuovere definitivamente i file indesiderati anche dopo il recupero.</dd>
        </dl>
        <dl>
          <dt><img src="<?php echo $pResUrl; ?>images/tool_icon7.png" alt=""></dt>
          <dd><h4>Pulizia del Registro</h4></dd>
          <dd>Pulizia sicura e riparazione dei problemi di registro.</dd>
        </dl>
        <dl class="right">
          <dt><img src="<?php echo $pResUrl; ?>images/tool_icon8.png" alt=""></dt>
          <dd><h4>Pulizia del Disco</h4></dd>
          <dd>Pulisce tutti i tipi di file spazzatura per liberare spazio sul disco.</dd>
        </dl>
      </div>
    </div>
    <!-- tool end -->
  
    <!-- usereview start -->
    <div id="user" class="usereview wrapper clearfix" style="width: 1010px;">
      <h2>Recensioni degli utenti</h2>
      <dl class="active">
        <dt><h4>"Non solo è un ottimo prodotto, anche il supporto è altrettanto eccezionale"</h4></dt>
        <dd>
          "Advanced SystemCare lavora da anni per mantenere il mio computer pulito e senza alcun tipo di problema e finora non mi ha mai deluso. Ho contattato di recente il supporto di Advanced SystemCare e mi hanno risposto entro un giorno o due con tutto quello che dovevo sapere. Per me la qualità del supporto costituisce una parte importante nella decisione di continuare a usare un prodotto e ASC vince sia nel prodotto che nel supporto. "
        </dd>
      </dl>
      <dl>
        <dt><h4>"Pulizia approfondita di spyware e malware che il mio antivirus ignorava"</h4></dt>
        <dd>
         "Usavamo fino a una dozzina di programmi differenti per mantenere i nostri computer funzionanti e per tenere alla larga “i cattivi”. Ci volevano ore ogni settimana per mantenere la sicurezza e le prestazioni del PC. Ora, con Advanced SystemCare Pro, tutto è in un unico posto e ci vogliono solo pochi minuti ogni due-tre giorni per fare gli stessi lavori con molta più sicurezza."
        </dd>
      </dl>
      <dl>
        <dt><h4>"La mia scelta è ancora incredibilmente Advanced SystemCare Pro"</h4></dt>
        <dd>
          "In quanto tecnico per la riparazione di computer, scaricando ASC PRO e usandolo per scansionare, riesco a risolvere la maggior parte dei problemi del PC. Al termine di una scansione, di solito suggerisco al cliente di acquistare il pacchetto Pro. Chi ha bisogno di un tecnico quando si ha la potenza di Advanced SystemCare Pro che fa funzionare il tuo sistema 24-7? Questo è il miglior prodotto che un utente che usa il computer a casa può acquistare. Grazie per aver semp"
        </dd>
      </dl>
      <dl>
        <dt><h4>"Il mio sistema non ha mai funzionato meglio."</h4></dt>
        <dd>
          "Secondo me, ASC Pro di IObit è la migliore applicazione di manutenzione disponibile per gli utenti Windows che offre valore e funzioni eccellenti. Allo stesso tempo, IObit fornisce un supporto tecnico esperto che è competente, informato e reattivo, aggiungendo un valore significativo ai prodotti e servizi per i loro i clienti."
        </dd>
      </dl>
      <ul class="username">
        <li class="current">
          <img src="<?php echo $pResUrl; ?>images/bruce-ramsay.png" alt="Bruce Ramsay">
          <p>Bruce Ramsay</p>
        </li>
        <li>
          <img src="<?php echo $pResUrl; ?>images/bob-bassett.png" alt="Bob Bassett">
          <p>Bob Bassett</p>
        </li>
        <li>
          <img src="<?php echo $pResUrl; ?>images/charles-r-widick.png" alt="Charles R. Widick">
          <p>Charles R. Widick</p>
        </li>
        <li>
          <img src="<?php echo $pResUrl; ?>images/gordon-griswold.png" alt="Gordon Griswold">
          <p>Gordon Griswold</p>
        </li>
      </ul>
    </div>
    <!-- usereview end -->

    <!-- footbuy start -->
    <div class="footbuy">
      <div class="wrapper clearfix">
        <h2>Advanced SystemCare PRO</h2>
        <p>Scelto da oltre 250 milioni di utenti in tutto il mondo</p>
        <div class="btnbox">
          <a class="btn down" href="https://ld.iobit.com/freedownload/affascfreedownload/download.php?product=asc&ref=<?php echo $refDownloadStr;?>&aff=<?php echo $affStr;?>" onclick="ga('send', 'event', 'ascdl', 'download', 'itasc12g')">
            <p>Scarica per una scansione gratuita</p>
            Per Win10/8/7/Vista/XP
          </a>
          <a class="btn buy" href="<?php echo $buyHref;?>" onclick="ga('send', 'event', 'ascbuy', 'buy', 'itaffasc142017general')">
            Acquista ora e risparmia il <strong>50%</strong> 
          </a>
        </div>
      </div>
    </div>
    <!-- footbuy end -->

    <!-- service start -->
    <div class="service">
      <div class="wrapper clearfix">
        <dl>
          <dt>100% Pulito</dt>
          <dd><img src="<?php echo $pResUrl; ?>images/godaddy.png" alt=""></dd>
        </dl>
        <dl class="back">
          <dt>Rimborso di 60 giorni</dt>
          <dd><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dd>
        </dl>
        <dl class="last">
          <dt>Supporto 24/7</dt>
          <dd>
            <img src="<?php echo $pResUrl; ?>images/call.png" alt="">
            <span>Supporto tecnico gratuito su richiesta 24/7</span>
          </dd>
        </dl>
      </div>
    </div>
    <!-- service end -->

  </div>
  <!-- container end -->

  <!-- footer start -->
  <div class="footer">Copyright © 2005 - <?php echo date('Y')?> IObit. Tutti i diritti riservati</div>
  <!-- footer end -->

  <!-- backtop start -->
  <div id="backtop" class="backtop" onclick="goTarget($('.header'))"></div>
  <!-- backtop end -->

<script>    
  //userreview 
  $(".username li").mouseover(function(event) {
    var num = $(this).index();
    $(".username li").eq(num).addClass('current').siblings().removeClass('current');
    $("#user dl").eq(num).addClass('active').siblings().removeClass('active');
  });

  //floatlayer
  $(window).on('scroll', function () {
    var scrollHeight = $(".header:last").offset().top;
    if ($(window).scrollTop() > scrollHeight) {
      $('#backtop').addClass('on');
    }else {
      $('#backtop').removeClass('on');
    }
  });

  function goTarget(target,yoffset) {
    if(!yoffset) yoffset = 0;
    var Theigth = target.offset().top - yoffset;
    $("html, body").animate({scrollTop: Theigth}, 'slow');
  }
</script>
</body>
</html>