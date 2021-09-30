<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';

$viewNum=rand(60,88);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}
$refStr=(empty($_GET['ref'])?'':('-'.$_GET['ref'])).(empty($_GET['st'])?'':('-'.$_GET['st']));
if(in_array($_GET['type'],array('pro','giveawayexp'))){
  $refStr.='-'.$_GET['type'];
}
if(in_array($_GET['to'],array('event1','ascrenew'))){
  $refStr.='-'.$_GET['to'];
}
?>
<!DOCTYPE html>
<html lang="sv">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Förbeställ nya Advanced SystemCare 12 PRO på 0kr</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Lato:400,700'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>

  <div class="main">
    <!-- banner start -->
    <div class="banner">
      <div class="wrapper">
        <a class="logo" href="https://www.iobit.com" target="_blank">
          <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
        </a>
        <h1>Den globala Förförsäljningen är live</h1>
        <h3>Rusa! 500 begränsade kvantiteter tillgängliga, <span class="soldNum">453</span> sålda nu</h3>
        <div class="palen clearfix">
          <div class="left fl"><img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt=""/></div>
          <div class="right fr">
            <h2>Advanced SystemCare 12 PRO</h2>
            <div class="price">
              <p>
                Nu: <del>599kr</del>
                <img src="<?php echo getStaticUrl('images/price.png')?>" alt=""/>
              </p>
              <ul>
                <li>
                  <span class="surplusGift viewNum"><?php echo $viewNum;?></span> titta, <b class="reduceGift"><span class="packsNum">**</span></b> platser kvar nu!
                </li>
                <li id="bandown" class="countdown">Sluta förhoppningsvis: <b>05</b>M: <b>00</b>S: <b>00</b>Ms</li>
              </ul>
              <div class="progressbar">
                <span></span>
              </div>
              <a class="buybtn" 
                 href="https://www.iobit.com/buy.php?product=sv-asc12preorder&ref=sv_asc12preorderofficial<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=sv_purchase_asc"
                 onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc12predorderofficialsv');"
                 data-text="Förbeställ Nu">
                <span>Förbeställ Nu</span>
              </a>
              <h5>1 års prenumeration / 3 datorer</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- banner end -->

    <!-- flow start -->
    <div class="flow wrapper clearfix">
      <p>Om nöjd, få 60% rabatt 30 dagar senare efter </p>
      <h2>0kr förbeställ idag</h2>
      <p>Om missnöjd, avbryt inom 30 dagar utan att betala en avgift</p>
    </div>
    <!-- flow end -->

    <!-- intro start -->
    <div class="intro wrapper">
      <h2>Varför Förbeställer Du Advanced SystemCare 12 PRO</h2>
      <div class="top clearfix">
        <div class="fl">
          <h3>Upplev nya funktioner tidigare än andra</h3>
          <img src="<?php echo getStaticUrl('images/computer_01.png')?>" alt="Advanced SystemCare 12 PRO"/>
        </div>
        <div class="fr">
          <dl>
            <dt><img src="<?php echo getStaticUrl('images/intro_01.png')?>" alt="Advanced SystemCare 12 PRO"/></dt>
            <dd>
              <h4>Sekretessskydd</h4>
              <h5>Blockera hemlig åtkomst till dina filer och foton</h5>
              <p>
                Skydda dina privata filer och foton mot hemlig eller obehöriga åtkomstar för att undvika sekretessläcka och risker från utpressningsprogram, 
              </p>
              <span>Exklusiv pro funktion</span>
            </dd>
          </dl>
          <dl>
            <dt><img src="<?php echo getStaticUrl('images/intro_02.png')?>" alt=""/></dt>
            <dd>
              <h4>Rengöring av Digitalt Fingeravtryck </h4>
              <h5>Ingen kan veta vad du gör på nätet</h5>
              <p>
                Det döljer ditt digitala fingeravtryck automatiskt. Förhindra spårningsföretag från snoopa efter vad du läser, visar och köper.
              </p>
              <span>Exklusiv pro funktion</span>
            </dd>
          </dl>
          <dl>
            <dt><img src="<?php echo getStaticUrl('images/intro_03.png')?>" alt=""/></dt>
            <dd>
              <h4>Förhindra Kryptovaluta-brytning</h4>
              <h5>Sluta plötsliga kraschar, överhettning och avstängning av datorn</h5>
              <p>Förhindra skadliga webbplatser du besöker från att använd din dator till Kryptovaluta-brytning som kan leda till att webbläsaren kraschar, datorn överhettar och systemet plötsligt stängs av. </p>
            </dd>
          </dl>
        </div>
      </div>
      <div class="bot clearfix">
        <div class="fl">
          <h3>Njut av dessa förbättringar så snart som möjligt</h3>
          <dl>
            <dt><img src="<?php echo getStaticUrl('images/intro_04.png')?>" alt=""/></dt>
            <dd>
              <h4>Rengöring och optimering</h4>
              <h5>Accelerera långsam dator upp till 200% snabbare</h5>
              <p>
                Rengör alla oanvändbara filer och optimera CPU och RAM för en 2 gånger snabbare start och systemkörning.
              </p>
              <span>Exklusiv pro funktion</span>
            </dd>
          </dl>
          <dl class="last">
            <dt><img src="<?php echo getStaticUrl('images/intro_05.png')?>" alt=""/></dt>
            <dd>
              <h4>Internet Booster</h4>
              <h5>Accelerera Internetuppkoppling upp till 300% snabbare</h5>
              <p>
                Optimera webbläsarinställningar för att göra nedladdning, webbsurfning, onlinespel och YouTube-visning 3 gånger snabbare.
              </p>
              <span>Exklusiv pro funktion</span>
            </dd>
          </dl>
        </div>
        <div class="fr">
          <img src="<?php echo getStaticUrl('images/computer_02.png')?>" alt=""/>
        </div>
      </div>
    </div>
    <!-- intro end -->



    <!-- comparison start -->
    <div class="comparison" id="compare">
      <div class="wrapper">
        <h2> Löser dina frustrerande Datorsproblem i 1-klick</h2>
        <table border="0" cellspacing="0" cellpadding="0" width="100%">
          <thead>
            <tr>
              <th class="itema"><span class="cry">Problem</span></th>
              <th class="itemb"></th>
              <th class="itemc"><span class="smile">Lösningar</span></th>
            </tr>
          </thead>
          <tbody>
            <tr class="first">
              <td class="itema">
                <p>Du har inte tillräckligt med diskutrymme</p>
              </td>
              <td class="itemb"><img src="<?php echo getStaticUrl('images/icons_01.png')?>" alt=""/></td>
              <td class="itemc">
                <p>Sök och ta bort skräpfiler automatiskt för att frigöra diskutrymme</p>
                <b><i class="all-icons">■</i> Exklusiv pro funktion</b>
              </td>
            </tr>
            <tr><td class="space"></td></tr>
            <tr>
              <td class="itema">
                <p>Systemet startar långsamt och går långsamt</p>
              </td>
              <td class="itemb"><img src="<?php echo getStaticUrl('images/icons_02.png')?>" alt=""/></td>
              <td class="itemc">
                <p>Auto Släpp minne för att påskynda datorn upp till 200% snabbare när datorn blir långsam</p>
                <b><i class="all-icons">■</i> Exklusiv pro funktion</b>
              </td>
            </tr>
            <tr><td class="space"></td></tr>
            <tr>
              <td class="itema">
                <p>Långsam nedladdning, webbsurfning, onlinespel och videovisning på YouTube</p>
              </td>
              <td class="itemb"><img src="<?php echo getStaticUrl('images/icons_03.png')?>" alt=""/></td>
              <td class="itemc">
                <p>Optimera webbläsaringställningar för att göra Internetuppkoppling 300% snabbare</p>
                <b><i class="all-icons">■</i> Exklusiv pro funktion</b>
              </td>
            </tr>
            <tr><td class="space"></td></tr>
            <tr>
              <td class="itema">
                <p>Systemet kraschar och fryser plötsligt när du surfar på Internet</p>
              </td>
              <td class="itemb"><img src="<?php echo getStaticUrl('images/icons_04.png')?>" alt=""/></td>
              <td class="itemc">
                <p>Rengör och reparera registren för att förbättra systemets stabilitet och säkerhet</p>
                <b><i class="all-icons">■</i> Exklusiv pro funktion</b>
              </td>
            </tr>
            <tr><td class="space"></td></tr>
            <tr>
              <td class="itema">
                <p>Annonser för saker du har tittat på på nätet följer dig runt</p>
              </td>
              <td class="itemb"><img src="<?php echo getStaticUrl('images/icons_05.png')?>" alt=""/></td>
              <td class="itemc">
                <p>Auto blockera annonser och sopa bort dina spår för att förhindra att du spåras av hackare</p>
                <b><i class="all-icons">■</i> Exklusiv pro funktion</b>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <!-- comparison end -->
    <!-- ad-points start -->
    <div class="ad-points wrapper">
      <h2>Vad Vi Gör För Våra Användare</h2>
      <ul class="clearfix">
        <li>
          <div class="imgbox"><img src="<?php echo getStaticUrl('images/ad_01.png')?>" alt=""/></div>
          <p class="light">Löser</p>
          <div class="imgbox num"><img src="<?php echo getStaticUrl('images/ad_num01.png')?>" alt=""/></div>
          <p>Datorsproblem per månad</p>
        </li>
        <li>
          <div class="imgbox"><img src="<?php echo getStaticUrl('images/ad_02.png')?>" alt=""/></div>
          <p class="light">Sparar</p>
          <div class="imgbox num"><img src="<?php echo getStaticUrl('images/ad_num02.png')?>" alt=""/></div>
          <p>timmar per månad</p>
        </li>
        <li class="last">
          <div class="imgbox"><img src="<?php echo getStaticUrl('images/ad_03.png')?>" alt=""/></div>
          <p class="light">Spara</p>
          <div class="imgbox num"><img src="<?php echo getStaticUrl('images/ad_num03.png')?>" alt=""/></div>
          <p>Miljarder per år</p>
        </li>
      </ul>
    </div>
    <!-- ad-points end -->

    <!-- centbuy start -->
    <div class="centbuy">
      <div class="wrapper">
        <h2>Förbeställ för 0kr Nu för att Göra Din Dator Snabbare, Renare och Säkrare</h2>
        <a class="buybtn" 
           href="https://www.iobit.com/buy.php?product=sv-asc12preorder&ref=sv_asc12preorderofficial<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=sv_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc12predorderofficialsv');"
           data-text="Förbeställ Nu">
          <span>Förbeställ Nu</span>
        </a>
        <ul class="price">
          <li><span class="surplusGift viewNum"><?php echo $viewNum;?></span> titta, <b class="reduceGift"><span class="packsNum">**</span></b> platser kvar nu!</li>
        </ul>
      </div>
    </div>
    <!-- centbuy end -->

    <!-- review start -->
    <div class="review wrapper">
      <div id="dg-container" class="dg-container">
        <div class="nav">
          <span class="dg-prev"></span>
          <span class="dg-next"></span>
        </div>
        <div class="content dg-wrapper">
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/cnet.png')?>" alt="Cnet"></dt>
            <dd>
              <h2>I media</h2>
              <p>
                "Det finns inget värre än en dator som kör fast så mycket att det hindrar din förmåga att arbeta eller spela spel. Advanced Systemcares syfte är att råda bot på allt som plågar din dator, inte bara städa upp skräpfiler, malware och ogiltiga registerposter utan också ge din dator ett rejält uppsving för en optimal datorupplevelse."
              </p>
              <cite>Cnet</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/bruce-ramsay.png')?>" alt="Bruce Ramsay"></dt>
            <dd>
              <h2>Användares omdömen</h2>
              <p>
                "Jag, precis som många andra, började använda gratisversionen och köpte så småningom den fullständiga versionen. Den har arbetat för att hålla datorn ren och buggfri i ett år och den har ännu inte svikit mig. Jag kontaktade Advanced SystemCare nyligen och de svarade inom en dag eller två med allt jag behövde veta. I mina ögon är support ett enormt beslut i att stanna med en produkt och ASC segrar i både produkt och support."
              </p>
              <cite>Bruce Ramsay</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/hank-ewert.png')?>" alt="Hank Ewert"></dt>
            <dd>
              <h2>Användares omdömen</h2>
              <p>
                "Som de flesta människor är jag ingen expert på datorer. Jag vet inte hur många program jag har testat genom åren. Alla påstår sig vara det bästa men inget kommer i närheten av skyddet jag har nu med Advanced Systemcare Pro. Sedan jag fick detta fantastiska program har jag inte behövt ringa för teknisk support en enda gång. Det har mer än överträffat mina förväntningar, är alltid uppdaterat, och grafiken är väldigt cool också! Stort tack till er alla för att ni gör mitt liv mycket lättare."
              </p>
              <cite>Hank Ewert</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/loretta-harnarine.png')?>" alt="Loretta Harnarine"></dt>
            <dd>
              <h2>Användares omdömen</h2>
              <p>
                "Detta program är det bästa som jag någonsin har provat. Min dator går så mycket bättre och snabbare nu när jag har hämtat ASC. Det har städat upp onödiga och dubbla filer, tomma mappar och jag har använt den för att rensa filer. Det har rengjort och defragmenterat registret och alla filer på datorn. Jag rekommenderar starkt att du köper det här programmet. Det är inte dyrt och vad den kommer att göra för din dator kommer att vara helt fantastiskt. Du kommer att älska det, jag lovar."
              </p>
              <cite>Loretta Harnarine</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/charles-r-widick.png')?>" alt="Charles R. Widick"></dt>
            <dd>
              <h2>Användares omdömen</h2>
              <p>
                "Som datorreperatör finner jag att genom att ladda ner och skanna med ASC Free kan man lösa de vanligaste problemen. När jag är klar med en reperation brukar jag råda mina kunder till att köpa PRO-paketet. Vem behöver en tekniker när du har kraften i Advanced SystemCare PRO-systemet som jobbar dygnet runt? Det här är den bästa produkten en hemanvändare kan köpa. Tack för att ni gör mitt jobb lättare."
              </p>
              <cite>Charles R. Widick</cite>
            </dd>
          </dl>
        </div>
      </div>
    </div>
    <!-- review end -->

    <!-- awards start -->
    <div class="awards">
      <div class="wrapper">
        <h2>Världsomspännande Utmärkelser</h2>
        <p>
          Med förtroende och pris från dessa världsledande medier de senaste fyra åren är det ett rätt val du har gjort.
        </p>
        <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
      </div>
    </div>
    <!-- awards end -->

    <div class="bottom">
      <div class="wrapper">
        <!-- service start -->
        <div class="service clearfix">
          <dl>
            <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
            <dd>
              <h4>Pengarna Tillbaka Garanti</h4>
              <p>Om du inte är nöjd under de första 60 dagarna, ger vi dig pengarna tillbaka.</p>
            </dd>
          </dl>
          <dl>
            <dt><img src="<?php echo getStaticUrl('images/godaddy.png')?>" alt=""/></dt>
            <dd>
              <h4>Säker Betalning</h4>
              <p>IObit stöder flera säkra betalningssätt.</p>
            </dd>
          </dl>
          <dl>
            <dt><img src="<?php echo getStaticUrl('images/car.png')?>" alt=""/></dt>
            <dd>
              <h4>Få Licens</h4>
              <p>Du kommer att få licensen inom några minuter efter köpet.</p>
            </dd>
          </dl>
        </div>
        <!-- service end -->

        <!-- footer start -->
        <div class="footer">
          <dl>
            <dd>
              * I slutet av den 30-dagars gratisperioden debiteras ditt kreditkort eller PayPal-konto automatiskt. Denna 50% rabatt från det ursprungliga priset på 599kr är bonus endast för förbeställningar!
            </dd>
          </dl>
          <p>Upphovsrätt © 2005 - <?php echo date('Y')?> IObit. Alla rättigheter förbehållna</p>
        </div>
        <!-- footer end -->
      </div>
    </div>

    <!-- floatlayer start -->
    <div id="floatlayer" class="floatlayer">
      <div class="wrapper clearfix">
        <img class="fl" src="<?php echo getStaticUrl('images/asc-small-box.png')?>" alt=""/>
        <div class="price fl">
          <ul>
            <li>
              <span class="surplusGift viewNum"><?php echo $viewNum;?></span> titta, <b class="reduceGift"><span class="packsNum">**</span></b> platser kvar nu!
            </li>
            <li id="floatdown" class="countdown"> Sluta förhoppningsvis: <b>05</b>M: <b>00</b>S: <b>00</b>Ms</li>
          </ul>
          <div class="progressbar">
            <span></span>
          </div>
        </div>
        <a class="buybtn fr" 
           href="https://www.iobit.com/buy.php?product=sv-asc12preorder&ref=sv_asc12preorderofficial<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=sv_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc12predorderofficialsv');"
           data-text="Förbeställ Nu">
          <span>Förbeställ Nu</span>
        </a>
      </div>
    </div>
    <!-- floatlayer end -->

  </div>

  <script src="<?php echo $pRootUrl;?>tpl/js/TweenMax.min.js"></script>
  <script src="<?php echo getStaticUrl('script/modernizr.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/review-3d-carousel.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
  <script>
    var imgUrl = "<?php echo getStaticUrl('images/asc-off-box.png')?>";
    var _ga = "ga('send', 'event', 'ascbuy', 'buy', 'asc12predorderofficialsv');";
    var _url = "https://www.iobit.com/buy.php?product=sv-asc12preorder199&ref=sv_asc12preorderofficial199<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=sv_purchase_asc";
  </script>
</body>
</html>