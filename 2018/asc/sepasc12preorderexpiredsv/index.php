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

$params=json_decode(base64_decode($_GET['data']));
$reg=empty($params->reg)?1113:$params->reg;
$junk=round((empty($params->junk)?9762:(($params->junk)/1024)),2);
$startUp=empty($params->startup)?19:$params->startup;
$internet=empty($params->internet)?21:$params->internet;
$privacy=empty($params->privacy)?2014:$params->privacy;
$ad=empty($params->ad)?0:$params->ad;

$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
?>
<!DOCTYPE html>
<html lang="sv">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>0kr till tillbaka till senaste Advanced SystemCare 12 PRO</title>
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
        <h1>Välkommen Tillbaka och Gå Med i 0kr Globalt Förköp</h1>
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
                 href="https://www.iobit.com/buy.php?product=sv-asc12preorder&ref=sv_asc12preorderexpired<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=sv_purchase_asc"
                 onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc12predorderexpired-sv');"
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

    <!-- intro-part01 start -->
    <div class="intro intro-part01">
      <div class="wrapper">
        <h3>Låt oss ge en tillbakablick!:</h3>
        <h2>How’s Your Computer with Advanced SystemCare 11 PRO?</h2>
        <div class="event">
          <!-- bight -->
          <div class="bight"></div>
          <!-- optimized for faster PC -->
          <dl class="optimized clearfix">
            <dd class="fr">
              <p>
                <strong class="startupNum"><?php echo $startUp;?></strong> start artiklar och <br>
                <strong class="browserNum"><?php echo $internet;?></strong>  webbläsarinställningar  har <br> optimerats för snabbare dator.
              </P>
              <span></span>
            </dd>
            <dt class="fr"><img src="<?php echo $pResUrl;?>images/intro-icon01.png" alt=""></dt>
          </dl>
          <!-- during online surfing  -->
          <dl class="online clearfix">
            <dd>
              <p>
                <strong class="personalNum"><?php echo $privacy;?></strong>  personliga spår och  <br>
                <strong class="popupNum"><?php echo $ad;?></strong> extra fönster har avlägsnats <br> under surfning på nätet
              </P>
              <span></span>
            </dd>
            <dt class="fr"><img src="<?php echo $pResUrl;?>images/intro-icon02.png" alt=""></dt>
          </dl>
          <!-- to free up disk  -->
          <dl class="disk">
            <dd>
              <p>
                <strong class="bytesNum"><?php echo $junk;?></strong>MB Skräpfiler och    <br>
                <strong class="regNum"><?php echo $reg;?></strong> register har raderats för att <br> frigöra disk.
              </P>
              <span></span>
            </dd>
            <dt><img src="<?php echo $pResUrl;?>images/intro-icon03.png" alt=""></dt>
          </dl>
          <!-- Better PC Performance -->
          <p class="better">Bättre Dators Prestanda</p>
        </div>
      </div>
    </div>
    <!-- intro-part01 end -->
    <!-- intro-part02 start -->
    <div class="intro intro-part02">
      <div class="wrapper clearfix">
        <h3>Från och med nu:</h3>
        <h2>Utforska Funktioner Bara Tillgängliga på Nytt Advanced SystemCare 12 </h2>
        <img class="intro-pc fl" src="<?php echo $pResUrl;?>images/intro-pc.jpg" alt="">
        <div class="right-message fr">
          <!-- Privacy Shield -->
          <dl>
            <dt><img src="<?php echo $pResUrl;?>images/intro-icon04.png" alt=""></dt>
            <dd>
              <h4>Sekretesskydd <span>exklusivt</span></h4>
              <p>Känsliga data förblir obesvarade för otillförlitliga program. </p>
            </dd>
          </dl>
          <!-- Digital Fingerprint Protection -->
          <dl>
            <dt><img src="<?php echo $pResUrl;?>images/intro-icon05.png" alt=""></dt>
            <dd>
              <h4>Digitalt fingeravtrycks skydd <span>exklusivt</span></h4>
              <p>Hackare kan inte spåra och invadera din personliga information.</p>
            </dd>
          </dl>
          <!-- Unfinished Downloads File Cleaning -->
          <dl>
            <dt><img src="<?php echo $pResUrl;?>images/intro-icon06.png" alt=""></dt>
            <dd>
              <h4>Oavslutade Nedladdningar Filrengöring <br> inachevés<span>exklusivt</span></h4>
              <p>Bli snabbt av med oavslutade nedladdade filer för att frigöra <br> diskutrymme.</p>
            </dd>
          </dl>
        </div>
      </div>
    </div>
    <!-- intro-part02 end -->

    <!-- intro-part03 start -->
    <div class="intro intro-part03">
      <div class="wrapper clearfix">
        <h2>Njut av viktiga förbättringar jämfört med Advanced SystemCare 11 PRO</h2>
        <!-- Cleaner -->
        <dl class="cleaner fl">
          <dt>
            <h4>Renare </h4>
            <img src="<?php echo $pResUrl;?>images/intro-cleaner.png" alt="">
          </dt>
          <dd>
            <img src="<?php echo $pResUrl;?>images/intro-more30.png" alt="">
            <p> Reservdiskutrymme</p>
          </dd>
        </dl>
        <!-- Faster -->
        <dl class="faster fl">
          <dt>
            <h4>Snabbare</h4>
            <img src="<?php echo $pResUrl;?>images/intro-faster.png" alt="">
          </dt>
          <dd>
            <img src="<?php echo $pResUrl;?>images/intro-faster20.png" alt="">
            <p>Datorstart</p>
          </dd>
        </dl>
        <!-- Safer -->
        <dl class="safer fl">
          <dt>
            <h4>Säkrare</h4>
            <img src="<?php echo $pResUrl;?>images/intro-safer.png" alt="">
          </dt>
          <dd>
            <img src="<?php echo $pResUrl;?>images/intro-more40.png" alt="">
            <p> Borttagningar av Annonser</p>
          </dd>
        </dl>
      </div>
    </div>
    <!-- intro-part03 end -->

    <!-- centbuy start -->
    <div class="centbuy">
      <div class="wrapper">
        <h2>Bara <b>0kr</b> för att Njuta av Alla Dessa Spännande Funktioner!</h2>
        <a class="buybtn" 
           href="https://www.iobit.com/buy.php?product=sv-asc12preorder&ref=sv_asc12preorderexpired<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=sv_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc12predorderexpired-sv');"
           data-text="Förbeställ Nu">
          <span>Förbeställ Nu</span>
        </a>
        <ul class="price">
          <li>1 Års Prenumeration / 3 Datorer</li>
        </ul>
      </div>
    </div>
    <!-- centbuy end -->
    <!-- intro-part04 start -->
    <div class="intro-part04">
      <div class="wrapper">
        <h3>
          Utan PRO version nu, <br>  lider du av följande problem?
        </h3>
        <div class="intro-top clearfix">
          <!-- slow computer -->
          <dl class="fl clearfix">
            <dd class="fl">
              <strong>Långsam Dator </strong>tar för lång tid <br> att svara och ladda webbsidor.
            </dd>
            <dt class="fr"><img src="<?php echo $pResUrl;?>images/intro-icon08.png" alt=""></dt>
          </dl>
          <!-- system freezes or crashes -->
          <dl class="list02 fr clearfix">
            <dt class="fl"><img src="<?php echo $pResUrl;?>images/intro-icon09.png" alt=""></dt>
            <dd class="fr">
              Oanvända och obetydliga filer <br>  <strong>klotter upp  </strong> hårddisken.
            </dd>
          </dl>
        </div>
        <div class="intro-bottom clearfix">
          <!-- cluttering up -->
          <dl class="fl clearfix">
            <dd class="fl">
             Ibland  <strong>fryser eller kraschar <br> system</strong> plötsligt.
            </dd>
            <dt class="fr"><img src="<?php echo $pResUrl;?>images/intro-icon10.png" alt=""></dt>
          </dl>
          <!-- annoying ads -->
          <dl class="fr list04 clearfix">
            <dt class="fl"><img src="<?php echo $pResUrl;?>images/intro-icon11.png" alt=""></dt>
            <dd class="fr">
              <strong>Irriterande annonser</strong> dyker upp <br> varje gång du surfar på nätet
            </dd>
          </dl>
        </div>
        <h2>Det är dags att vända sig till Advanced SystemCare 12 PRO med <b></b></h2>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=sv-asc12preorder&ref=sv_asc12preorderexpired<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=sv_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc12predorderexpired-sv');"
           data-text="Förbeställ Nu">
          <span>Förbeställ Nu</span>
        </a>
        <p class="price">1 Års Prenumeration / 3 Datorer</p>
      </div>
    </div>
    <!-- intro-part04 end -->

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
           href="https://www.iobit.com/buy.php?product=sv-asc12preorder&ref=sv_asc12preorderexpired<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=sv_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc12predorderexpired-sv');"
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
    var _ga = "ga('send', 'event', 'ascbuy', 'buy', 'asc12predorderexpired-sv');";
    var _url = "https://www.iobit.com/buy.php?product=sv-asc12preorder199&ref=sv_asc12preorderexpired199<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=sv_purchase_asc";


  </script>
</body>
</html>