<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';

if(!empty($_GET['action'])&&($_GET['action']=='getSales')){
  $date=$_GET['d'];
  $cName='svdb'.$date;
  $cookie=$_COOKIE[$cName];
  if($cookie!==null){
    $packsNum=$_COOKIE[$cName];
    if($packsNum>=0){
      $packsNum--;
      setcookie($cName,$packsNum);
    }else{
      $packsNum=0;
    }
  }else{
    $packsNum=50;
    setcookie($cName,$packsNum);
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

$viewNum=rand(46,88);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}

$refStr='';
if(in_array($_GET['pop'],array('x_db','xr_db'))){
  $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Spara upp till 85% på Driver Booster PRO och du får extra skydd helt gratis </title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700'>
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
<div class="main">

  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <!-- logo -->
      <a class="logo" href="https://www.iobit.com/sv/index.php" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
      </a>
      <!-- title -->
      <h1>STORT JUL ERBJUDANDE</h1>
      <p class="best">Bästa chansen att spara stort – bara en gång per år!</p>
      <!-- palen -->
      <div class="palen clearfix">
        <div class="left fl">
          <img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="Driver Booster 6 PRO"/>
          <a class="hint" id="hint" href="javascript: void(0)" target="_blank"></a>
        </div>
        <div class="right fr">
          <h2>Driver Booster 6 PRO</h2>
          <div class="price">
            <div class="count">
              <p class="watching">
                <span class="surplusGift viewNum"><?php echo $viewNum;?></span> tittar, <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> platser kvar nu!
              </p>
              <div class="progressbar">
                <span></span>
              </div>
              <p id="bandown" class="countdown">Skynda! <b>05</b>Min: <b>00</b>Sec: <b class="last">000</b>MS återstår</p>
            </div>
            <p><strong>279<small>kr</small></strong> <span><del>2 056kr</del></span></p>
            <!-- buybtn -->
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=sv-db6pfsdamc279&ref=sv_db63pcpfsdamc279purchase1811r<?php echo $refStr;?>&refs=sv_purchase_db"
               onclick="ga('send', 'event', 'dbbuy', 'buy', 'db6purchase1811r-sv')">
              Aktivera Nu
            </a>
            <p class="year">Registrering av 3 PC / 1 år</p>
            <!-- money-back -->
            <img class="moneyback" src="<?php echo $pResUrl;?>images/moneyback.png" alt="">
          </div>
        </div>
      </div>
    </div>

    <!-- snow -->
    <span class="snow list01"></span>
    <span class="snow snow-clarity  list02"></span>
    <span class="snow snow-smail list03"></span>
    <span class="round  list04"></span>
    <span class="round round-smail list05"></span>
    <span class="round round-clarity list06"></span>
    <span class="round round-large list07"></span>
    <span class="snow snow-clarity  list15"></span>
    <span class="snow snow-smail  list16"></span>
    <span class="snow snow-clarity  list17"></span>
    <span class="snow snow-smail  list18"></span>
    <span class="round round-clarity list23"></span>
    <span class="round round-clarity list24"></span>

    <span class="round round-clarity list08"></span>
    <span class="round round-smail list09"></span>
    <span class="round round-large  list10"></span>
    <span class="round list11"></span>
    <span class="snow snow-clarity list12"></span>
    <span class="snow snow-smail list13"></span>
    <span class="snow list14"></span>
    <span class="snow snow-clarity  list19"></span>
    <span class="snow snow-smail  list20"></span>
    <span class="snow snow-clarity  list21"></span>
    <span class="snow snow-smail  list22"></span>
    <span class="round round-clarity list25"></span>
    <span class="round round-clarity list26"></span>
  </div>
  <!-- banner end -->

  <!-- feature start -->
  <div class="feature">
    <div class="wrapper">
      <h2>Ett klick för att uppdatera saknade, föråldrade och felaktiga drivrutiner!</h2>
      <p class="over">
        Över 150.000.000 användare runtom i världen väljer Driver Booster Pro som drivrutinsuppdatering för att göra drivrutinsuppdateringen enklare och spelprestandan snabbare.
      </p>
      <img class="screen" src="<?php echo getStaticUrl('images/db-screen.png')?>" alt="Driver Booster 6 PRO"/>
      <div class="clearfix">
        <div class="fl">
          <!-- Aggiorna oltre 3,000,000 di driver -->
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/feature-01.png')?>" alt=""/></dt>
            <dd>
              <h3>Uppdatera 3 000 000 + Enhetsdrivrutiner</h3>
              <p>
                Kontrollera automatiskt 3.000.000+ drivrutiner och rekommendera de riktiga för att minska datorkrascher och förbättra systemstabiliteten.
              </p>
              <p><b>20% mer jämfört med gratis versionen.</b></p>
            </dd>
          </dl>
          <!-- Migliore prestazione di gioco  -->
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/feature-02.png')?>" alt=""/></dt>
            <dd>
              <h3>Snabbare och bättre spelprestanda</h3>
              <p>
                Kontrollera automatiskt spelrelaterade drivrutiner och spelkomponenter för att göra dina spel snabbare. Vissa spels hastighet ökar med upp till 39%.
              </p>
              <p><b>*Bara PRO</b></p>
            </dd>
          </dl>
        </div>
        <div class="fr">
          <!-- Download di driver più veloce -->
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/feature-03.png')?>" alt=""/></dt>
            <dd>
              <h3>Snabbare uppdatering av drivrutiner</h3>
              <p>
                För-hämtning av drivrutiner för att spara uppdateringstid och minska system lagg/fördröjning under uppdatering.
              </p>
              <p><b>*Bara PRO</b></p>
            </dd>
          </dl>
          <!--
            Nessuna scomparsa del suono e nessun
            problema di connessione a Internet
          -->
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/feature-04.png')?>" alt=""/></dt>
            <dd>
              <h3>Lös problem med ljud och internet</h3>
              <p>
                Reparera enhetsfel för att minska problem och konflikter med din skrivare, skärm, internet, mus och externa enheter.
              </p>
              <p><b>*Bara PRO</b></p>
            </dd>
          </dl>
        </div>
      </div>
    </div>
  </div>
  <!-- feature end -->

  <!-- gifts -->
  <div class="gifts wrapper" id="gifts">
      <h2>Hämta Pro för enklare drivrutinsuppdatering och snabbare spelprestanda</h2>
      <div class="gift-list clearfix">
        <!-- sd -->
        <dl class="sd">
          <dt>
            <span><img src="<?php echo getStaticUrl('images/sd-box.png')?>" alt="Smart Defrag 6 PRO"/></span>
            <strong>Smart Defrag 6 PRO</strong>
          </dt>
          <dd><del>459kr</del>  <b><span>0</span>kr</b></dd>
          <dd><p>Högre defragmenteringshastighet <br>Auto-defragmentera valda filer</p></dd>
        </dl>
        <!-- pf -->
        <dl class="pf">
          <dt>
            <span><img src="<?php echo getStaticUrl('images/pf-box.png')?>" alt="Protected Folder"/></span>
            <strong>Protected Folder</strong>
          </dt>
          <dd><del>499kr</del>  <b><span>0</span>kr</b></dd>
          <dd><p>Skydda dina filer från skadliga attacker <br>Skydda ditt privatliv från intrång</p></dd>
        </dl>
        <dl class="amc">
          <dt>
            <span><img src="<?php echo getStaticUrl('images/amc-box.png')?>" alt="Advanced MobileCare PRO"/></span>
            <strong>Advanced MobileCare PRO</strong>
          </dt>
          <dd><del>199kr</del>  <b><span>0</span>kr</b></dd>
          <dd><p>Bästa allt-i-ett städaren och <br>boostaren för Android-enheter</p></dd>
        </dl>
      </div>
  </div>
  <!-- end gifts -->

  <!-- centbuy start -->
  <div class="centbuy">
    <h2>Con soli €0,02 al giorno ottieni un PC più stabile e un'esperienza di gioco più fluida!</h2>
    <div class="wrapper clearfix">
      <div class="fl">
        <img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="Driver Booster 6 PRO"/>
      </div>
      <div class="price fr">
        <div class="count">
          <p class="watching">
            <span class="surplusGift viewNum"><?php echo $viewNum;?></span> tittar, <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> platser kvar nu!
          </p>
        </div>
        <p><strong>279<small>kr</small></strong> <span><del>2 056kr</del></span></p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=sv-db6pfsdamc279&ref=sv_db63pcpfsdamc279purchase1811r<?php echo $refStr;?>&refs=sv_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'db6purchase1811r-sv')">
          Aktivera Nu
        </a>
        <p class="year">Registrering av 3 PC / 1 år</p>
        <!-- money-back -->
        <img class="moneyback" src="<?php echo $pResUrl;?>images/moneyback.png" alt="">
      </div>
    </div>
  </div>
  <!-- centbuy end -->

  <!-- comparison start -->
  <div class="comparison" id="compare">
    <div class="wrapper">
      <h2>Se Klart Vad Du Kommer att Få från Pro, om Du Aktiverar Nu:</h2>
      <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <thead>
        <tr>
          <th class="itema">Driver Booster <br> Free</th>
          <th class="itemb"><img src="<?php echo getStaticUrl('images/vs.png')?>"></th>
          <th class="itemc"><span>Driver Booster <br> <b>Pro</b></span></th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td class="itema">2 500 000+</td>
          <td class="itemb">Drivrutin databas</td>
          <td class="itemc">3 000 000+</td>
        </tr>
        <tr>
          <td class="itema">Begränsad</td>
          <td class="itemb">Drivrutin nedladdningshastighet</td>
          <td class="itemc">Obegränsad</td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Auto uppdatera föråldrade drivrutiner</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Automatisk säkerhetskopiering av drivrutiner mot krascher</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Reparera fel på enheter</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Kontrollera spelkomponenter</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Prioritet för att kontrollera spel drivrutiner</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Auto uppdatra till den senaste versionen</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema last"></td>
          <td class="itemb"></td>
          <td class="itemc last"></td>
        </tr>
        </tbody>
      </table>
    </div>
  </div>
  <!-- comparison end -->

  <!-- footbuy start -->
  <div class="footbuy">
    <div class="wrapper">
      <h3>MISSA INTE!</h3>
      <h2>Få exklusiv 85% RABATT när du skyddar dig och din dator i ett helt år.</h2>
      <div class="price">
        <p><strong>279<small>kr</small></strong> <span><del>2 056kr</del></span></p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=sv-db6pfsdamc279&ref=sv_db63pcpfsdamc279purchase1811r<?php echo $refStr;?>&refs=sv_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'db6purchase1811r-sv')">
          Aktivera Nu
        </a>
        <p id="footdown" class="countdown">Skynda! <b>05</b>Min: <b>00</b>Sec: <b class="last">000</b>MS återstår</p>
      </div>
    </div>
  </div>
  <!-- footbuy end -->

  <!-- review start -->
  <div class="review wrapper">
    <div id="dg-container" class="dg-container">
      <div class="nav">
        <span class="dg-prev"></span>
        <span class="dg-next"></span>
      </div>
      <div class="content dg-wrapper">
        <!-- 01 -->
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/PCMAG-editchoice.png')?>" alt="PC Magazine"></dt>
          <dd>
            <h2>I media</h2>
            <p>“IObit tillverkar många olika verktyg, och Driver Booster PRO, som automatiskt uppdaterar dina drivrutiner är ett av dem bästa. Driver Booster PRO är enkelt och funktionellt. Programmet blir ännu mer attraktivt tack vare att det innehåller flertalet licenser till väldigt budgetvänliga priser och tack vare att användargränssnittet både går att anpassa och ger en bra överblick över information om hårdvaror. Konkurrerande Ashampoo Driver Updater och SlimWare Utilities DriverUpdate erbjuder också intressanta funktioner, men det är IObit Driver Booster PRO som tar täten.”</p>
            <cite>PC Magazine</cite>
          </dd>
        </dl>
        <!-- 03 -->
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/Wayne-Bowler.png')?>" alt="Wayne Bowler"></dt>
          <dd>
            <h2>Användares omdömen</h2>
            <p>"Detta är ett av de bästa uppdateringsprogrammen. Microsoft har till och med vilselett mig genom att föreslå uppdateringar som inte skulle fungera med min maskin. Detta program visste vilka uppdateringar jag behövde utan några konflikter. Det fungerade perfekt. Lätt att använda, informativt och intuitivt. Det här kommer att stanna i min verktygslåda för alltid... Bra jobbat!"</p>
            <cite>Wayne Bowler</cite>
          </dd>
        </dl>
        <!-- 04 -->
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/Adam-Backlund.png')?>" alt="Adam Backlund"></dt>
          <dd>
            <h2>Användares omdömen</h2>
            <p>„Driver Booster ist eine großartige Anwendung. Für jemanden, der viele Anwendungen und Treiber besitzt, aber nicht die Zeit dafür hat diese manuell zu aktualisieren, kann Driver Booster nur dringendst empfehlen, er wird Euch dabei helfen, Updates und Treiber schnell und einfach zu updaten.“</p>
            <cite>Adam Backlund</cite>
          </dd>
        </dl>
        <!-- 05 -->
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/Myo-Thuya.png')?>" alt="Myo Thuya"></dt>
          <dd>
            <h2>Användares omdömen</h2>
            <p>"Med Driver Booster, kan jag lätt veta vilka drivrutiner som är inaktuella och kan enkelt uppdatera dem. Dessutom hjälper det mig att fixa ljudfel, nätverksfel, enhetsfel osv... Jag trodde inte det innan jag använde programmet, men efter att ha testat älskar jag verkligen det.. Min dator är snabbare, säkrare och känns nyare nu än under de senaste 8 månaderna... Så tack IObit."</p>
            <cite>Myo Thuya</cite>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- review end -->

  <!-- awards start -->
  <div class="awards wrapper">
    <h2>Världsomspännande Utmärkelser</h2>
    <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
  </div>
  <!-- awards end -->

  <div class="bottom">
    <div class="wrapper">
      <!-- service start -->
      <div class="service clearfix">
        <dl class="fl">
          <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
          <dd>
            <h4>Prova det RISKFRITT - med vår 60-dagars Pengarna Tillbaka Garanti</h4>
            <p>Vi är säker på att alla dina problem på drivrutin ska lösas med hjälp av den activerade PRO editionen med ett överkomligt pris.</p>
          </dd>
        </dl>
        <dl class="fr">
          <dt>
            <span>Accepterade Betalningssätt</span>
            <span class="last">Säker Betalning</span>
          </dt>
          <dd>
            <span><img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/></span>
            <span class="last"><img src="<?php echo getStaticUrl('images/godaddy.png')?>" alt=""/></span>
          </dd>
        </dl>
      </div>
      <!-- service end -->

      <!-- footer start -->
      <div class="footer">
        <dl>
          <dt>Notera:</dt>
          <dd>*.Uppgifter kan variera beroende på olika system eller datorer.</dd>
          <dd>*.Reklamkampanjer kan emellanåt ändras utan förvarning, efter vårt eget godtycke.</dd>
        </dl>
        <p>Copyright © 2005 - <?php echo date('Y')?> IObit. Alla Rättigheter Förbehållna</p>
      </div>
      <!-- footer end -->
    </div>
  </div>

  <!-- backtotop start -->
  <div id="backtotop" class="backtotop">top</div>
  <!-- backtotop end -->

</div>

<script>
  var refStr = '<?php echo $refStr;?>';
  var imgSrc = "<?php echo getStaticUrl('images/db-mask-box.png')?>";
  var _href = "https://www.iobit.com/buy.php?product=sv-db6pfsdamc269&ref=sv_db63pcpfsdamc269purchase1811rpop<?php echo $refStr;?>&refs=sv_purchase_db&tw=-8";
  var _ga = "ga('send', 'event', 'dbbuy', 'buy', 'db6purchase1811rpop-sv')";
  var viewNum = "<?php echo $viewNum;?>";
</script>

<script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
<script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>

</body>
</html>