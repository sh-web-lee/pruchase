<?php
ob_start();
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';
include $pRootUrl . 'callback.php';

function get_line($file, $line)
{
  $fp = fopen($file, 'r');
  $i = 0;
  while (!feof($fp)) {
    $i++;
    $c = fgets($fp);
    if ($i == $line) {
      return $c;
      break;
    }
  }
}
$name=explode(' ',trim(get_line('data/names_xms.txt',rand(1,40))));
$firstName=preg_replace("/(.*)(.{3})/",'${1}'.str_repeat('*',3),$name[0]);
$lastName=preg_replace("/(.*)(.{3})/",'${1}'.str_repeat('*',3),$name[1]);

if (!empty($_GET['action']) && $_GET['action'] == 'getPacks') {
  ob_get_clean();
  $date = $_GET['d'];
  $c_name = 'svascxasc' . $date;
  if (!isset($_COOKIE[$c_name])) {
    if($_GET['pageView']==1){
      $packsNum=29;
    }else {
      $packsNum = 50;
    }
    setcookie($c_name, $packsNum, time() + 3600 * 24);
  } else {
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
  echo json_encode(array('packsNum'=>$packsNum,'firstName'=>$firstName,'lastName'=>$lastName));
  exit;
}
$reduceNum=152813229;
$reTime=10;
//$buyNum = number_format(ceil(microtimeFloat()*1000/(1000*$reTime)) - $reduceNum);
$packsCount = 250;
$refStr='';
if(in_array($_GET['pop'],array('xr_asc'))){
  $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="sv">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Spara 88% rabatt rabatt på Advanced SystemCare PRO. Stor Julrea –IObit  </title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?> 
</head>

<body>
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper clearfix">
      <a class="logo" href="https://www.iobit.com/sv/index.php" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
      </a>
      <h1>
        EXKLUSIV JUL REA – bara <b>300</b> juopaket per dag
      </h1>
      <p>Spara 88% på ASC PRO och få en gratis Julpaket</p>

      <div class="offer left">
        <div class="discount small"><b>37% <small>rabatt</small></b></div>
        <img src="<?php echo getStaticUrl('images/db-three-box.png')?>" alt=""/>
        <div class="price">
          <p class="name">1 År / 1 PC</p>
          <p><strong>249 kr</strong> Ord. pris <del>399 kr</del></p>
          <a class="buybtn small"
             href="https://www.iobit.com/buy.php?product=sv-asc131pc249&ref=sv_asc131pcpurchasexmas1911xr<?php echo $refStr;?>&refs=sv_purchase_asc"
             onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc1pcpurchasexmas1911xr-sv')">
            <i class="all-icons"></i>
            <span>KÖP NU</span>
          </a>
        </div>
      </div>

      <div class="offer center">
        <div class="gift">
          <i class="all-icons"></i> Endast <b class="reduceNum giftnum"><span>58</span></b> Platser Kvar
        </div>
        <div class="discount">
          <strong>88% rabatt </strong>
          <b><small>Spara</small> 1 717 kr</b>
        </div>
        <img src="<?php echo getStaticUrl('images/db-gift-box.png')?>" alt=""/>
        <div class="price">
          <p class="name">1 År / 3 PC</p>
          <p><strong>239kr </strong> Ord. pris <del>1 956kr</del></p>
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=sv-asc133pciusdpf239&ref=sv_asc133pcbundlepurchase1911xr<?php echo $refStr;?>&refs=sv_purchase_asc"
             onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascbundlepurchasexmas1911xr-sv')">
            <i class="all-icons"></i>
            KÖP NU
          </a>
        </div>
        <p class="people"> <b class="packsCount"><?php echo $packsCount;?></b> personer har aktiverat</p>
      </div>

      <div class="offer right">
        <div class="discount small"><b>65% <small>rabatt</small></b></div>
        <img src="<?php echo getStaticUrl('images/db-five-box.png')?>" alt=""/>
        <div class="price">
          <p class="name">1 År / 5 PC</p>
          <p><strong>349 kr</strong> Ord. pris <del>999 kr</del></p>
          <a class="buybtn small"
             href="https://www.iobit.com/buy.php?product=sv-asc135pc349&ref=sv_asc135pcpurchasexmas1911xr<?php echo $refStr;?>&refs=sv_purchase_asc"
             onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc5pcpurchasexmas1911xr-sv')">
            <i class="all-icons"></i>
            <span>KÖP NU</span>
          </a>
        </div>
      </div>
      <div class="payment"><img src="<?php echo getStaticUrl('images/payments.png')?>" alt=""/></div>
    </div>
  </div>
  <!-- banner end -->

  <div class="main">
    <!-- benfits start -->
    <div class="benfits">
      <div class="wrapper">
        <h2>Aktivera Advanced SystemCare PRO för att få en snabbare,<br>
          renare och säkrare dator!</h2>
        <?php if($_GET['st']!='asc_wr'):?>
          <div class="original clearfix">
            <div class="showcase">
              <div class="inner">
                <ul class="screenshot">
                  <li>
                    <img src="<?php echo $pResUrl; ?>images/screenshot-00.jpg" alt="">
                  </li>
                  <li>
                    <img src="<?php echo $pResUrl; ?>images/screenshot-04.jpg" alt="">
                  </li>
                  <li>
                    <img src="<?php echo $pResUrl; ?>images/screenshot-02.jpg" alt="">
                  </li>
                  <li>
                    <img src="<?php echo $pResUrl; ?>images/screenshot-03.jpg" alt="">
                  </li>
                  <li>
                    <img src="<?php echo $pResUrl; ?>images/screenshot-01.jpg" alt="">
                  </li>
                </ul>
              </div>
              <ul class="zoom">
                <li></li>
                <li class="fun3">
                  <div class="container">
                    <img src="<?php echo $pResUrl; ?>images/screenshot-02-zoom.png" alt="">
                  </div>
                </li>
                <li class="fun2">
                  <div class="container">
                    <img src="<?php echo $pResUrl; ?>images/screenshot-03-zoom.png" alt="">
                  </div>
                </li>
                <li class="fun4">
                  <div class="container">
                    <img src="<?php echo $pResUrl; ?>images/screenshot-04-zoom.png" alt="">
                  </div>
                </li>
                <li class="fun5">
                  <div class="container">
                    <img src="<?php echo $pResUrl; ?>images/screenshot-05-zoom.png" alt="">
                  </div>
                </li>
              </ul>
              <ul class="list-icon">
                <li class="active"></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
              </ul>
            </div>
            <div class="detail-list">
              <dl>
                <dt><i class="benfits04"></i></dt>
                <dd>
                  <h3>100% BESKYDD</h3>
                  <p>Det skyddar dina personuppgifter och privatliv från hemliga intrång, stoppar alla försök från skadlig programvara samtidigt som din integritet förblir dubbelt * så säker som i gratisversionen</p>
                </dd>
              </dl>
              <dl>
                <dt><i class="benfits02"></i></dt>
                <dd>
                  <h3>200% * SNABBARE</h3>
                  <p>Rensar alla onödiga filer och optimerar CPU och RAM för att påskynda uppstarten, ökar systemets hastighet och gör en långsam dator upp till 200% snabbare</p>
                </dd>
              </dl>
              <dl class="three">
                <dt><i class="benfits03"></i></dt>
                <dd>
                  <h3>300% * SNABBARE</h3>
                  <p>Accelerera nedladdning, surfning, spelande och YouTube-visning med upp till 300%</p>
                </dd>
              </dl>
              <dl class="three">
                <dt><i class="benfits01"></i></dt>
                <dd>
                  <h3>STÖRRE LEDIGT UTRYMME</h3>
                  <p>Deep rensar bort skräpfiler, ogiltiga länkar, systemloggfiler samt ofullständiga nedladdningsfiler med avancerad optimering</p>
                </dd>
              </dl>
              <a href="Javascript:void(0);" class="textlink">Läs mer om PRO-versionen>></a>
            </div>
          </div>
        <?php else:?>
          <div class="winrar">
            <div class="showcase">
              <div class="inner">
                <ul class="screenshot">
                  <li>
                    <img src="<?php echo $pResUrl; ?>images/screenshot-00.jpg" alt="">
                  </li>
                  <li>
                    <img src="<?php echo $pResUrl; ?>images/screenshot-04.jpg" alt="">
                  </li>
                  <li>
                    <img src="<?php echo $pResUrl; ?>images/screenshot-02.jpg" alt="">
                  </li>
                  <li>
                    <img src="<?php echo $pResUrl; ?>images/screenshot-03.jpg" alt="">
                  </li>
                  <li>
                    <img src="<?php echo $pResUrl; ?>images/screenshot-01.jpg" alt="">
                  </li>
                </ul>
              </div>
              <ul class="zoom">
                <li></li>
                <li class="fun3">
                  <div class="container">
                    <img src="<?php echo $pResUrl; ?>images/screenshot-02-zoom.png" alt="">
                  </div>
                </li>
                <li class="fun2">
                  <div class="container">
                    <img src="<?php echo $pResUrl; ?>images/screenshot-03-zoom.png" alt="">
                  </div>
                </li>
                <li class="fun4">
                  <div class="container">
                    <img src="<?php echo $pResUrl; ?>images/screenshot-04-zoom.png" alt="">
                  </div>
                </li>
                <li class="fun5">
                  <div class="container">
                    <img src="<?php echo $pResUrl; ?>images/screenshot-05-zoom.png" alt="">
                  </div>
                </li>
              </ul>
              <ul class="list-icon">
                <li class="active"></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
              </ul>
            </div>
            <div class="detail-list">
              <dl>
                <dt><i class="benfits04"></i></dt>
                <dd>
                  <h3>100% BESKYDD</h3>
                  <p>Det skyddar dina personuppgifter och privatliv från hemliga intrång, stoppar alla försök från skadlig programvara samtidigt som din integritet förblir dubbelt * så säker som i gratisversionen</p>
                </dd>
              </dl>
              <dl>
                <dt><i class="benfits02"></i></dt>
                <dd>
                  <h3>200% * SNABBARE</h3>
                  <p>Rensar alla onödiga filer och optimerar CPU och RAM för att påskynda uppstarten, ökar systemets hastighet och gör en långsam dator upp till 200% snabbare</p>
                </dd>
              </dl>
              <dl class="three">
                <dt><i class="benfits03"></i></dt>
                <dd>
                  <h3>300% * SNABBARE</h3>
                  <p>Accelerera nedladdning, surfning, spelande och YouTube-visning med upp till 300%</p>
                </dd>
              </dl>
              <dl class="four">
                <dt><i class="benfits05"></i></dt>
                <dd>
                  <h3>Säker Programvaruuppdatering <i>VIKTIGT</i></h3>
                  <p>Med endast ett klick kan du uppdatera viktiga programvaror utan några användarinterventioner, inklusive <b>WinRAR*, vars befintlig säkerhetsfel kan sätta din dator i fara i flera år.</b> </p>
                  <span>* Uppdatera omedelbart, när den nya officiella versionen är klar.</span>
                </dd>
              </dl>
              <a href="Javascript:void(0);" class="textlink">Läs mer om PRO-versionen>></a>
            </div>
          </div>
        <?php endif;?>
      </div>
    </div>
    <!-- end benfits -->

    <!-- giftbox start -->
    <div class="giftbox">
      <div class="wrapper">
        <h2>Gratis gåvor är endast tillgängliga för en begränsad tid <small> (värderad till 1 357 kr) </small></h2>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/sd-box.png')?>" alt="Smart Defrag PRO"/></dt>
          <dd>
            <h5>Smart Defrag PRO </h5>
            <strong>0 kr </strong>
            <p>Defragmentera snabbt och grundligt för att optimera hårddiskens och datorns prestanda.</p>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/pf-box.png')?>" alt="Protected Folder"/></dt>
          <dd>
            <h5>Protected Folder</h5>
            <strong>0 kr </strong>
            <p>Effektivt filskyddsverktyg som garanterar säkerheten för dina viktiga mappar, data och din integritet.</p>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt=""/></dt>
          <dd>
            <h5>IObit Uninstaller PRO</h5>
            <strong>0 kr </strong>
            <p>Scrubba Bort Alla Spår av Oönskade Program, Windows Appar och Insticksprogram.</p>
          </dd>
        </dl>
        <div class="price">
          <h3>ASC PRO + ett bra presentpaket</h3>
          <p class="people">Mer än <span class="buynum"><?php echo $packsCount;?></span> personer har redan köpt den</p>
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=sv-asc133pciusdpf239&ref=sv_asc133pcbundlepurchase1911xr<?php echo $refStr;?>&refs=sv_purchase_asc"
             onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascbundlepurchasexmas1911xr-sv')">
            <i class="all-icons"></i>
            KÖP NU
          </a>
        </div>
      </div>
    </div>
    <!-- giftbox end -->

    <!-- probleme start -->
    <div class="probleme">
      <div class="wrapper clearfix">
        <h2>Internationella utmärkelser och recensioner</h2>
        <p>Gör våra kunder nöjda var de än befinner sig</p>
        <ul class="message clearfix">
          <li>
            <strong>200+</strong>
            <p>Populär i mer än <b>200</b> länder <br>globalt</p>
          </li>
          <li>
            <strong>1,000+</strong>
            <p>Mer än <b>1,000</b> medier har gillat <br>och kommenterat</p>
          </li>
          <li>
            <strong>250,000,000+</strong>
            <p>Utvald och rekommenderad av över <br><b>250</b> miljoner användare över hela <br>världen</p>
          </li>
          <li>
            <strong>80%+</strong>
            <p>Mer än <b>80%</b> av Advanced SystemCare <br>användare har aktiverat PRO-versionen</p>
          </li>
        </ul>
      </div>
    </div>
    <!-- probleme end -->

    <!-- review start -->
    <div class="review wrapper">
      <div class="review-list">
        <dl class="active">
          <dt><h2>I media</h2></dt>
          <dd>
            <p>
              "Det finns inget värre än en dator som kör fast så mycket att det hindrar din förmåga att arbeta eller spela spel. Advanced Systemcares syfte är att råda bot på allt som plågar din dator, inte bara städa upp skräpfiler, malware och ogiltiga registerposter utan också ge din dator ett rejält uppsving för en optimal datorupplevelse."
            </p>
          </dd>
        </dl>
        <dl>
          <dt><h2>Användares omdömen</h2></dt>
          <dd>
            <p>
              "Jag, precis som många andra, började använda gratisversionen och köpte så småningom den fullständiga versionen. Programmet har arbetat för att hålla min dator ren och buggfri i flera år och det har ännu inte svikit mig. Jag kontaktade Advanced SystemCare nyligen och de svarade inom en dag eller två med allt jag behövde veta. I mina ögon väger support mycket i beslutsbefattandet om jag ska fortsätta använda en produkt. ASC segrar i både produkt och support."
            </p>
          </dd>
        </dl>
        <dl>
          <dt><h2>Användares omdömen</h2></dt>
          <dd>
            <p>
              "Som de flesta människorna är jag ingen datorexpert. Jag vet inte hur många program jag har testat genom åren. Alla påstår sig vara bästa, men inget kommer i närheten av skyddet jag har nu med Advanced Systemcare Pro. Sedan jag fick detta fantastiska program har jag inte behövt ringa för teknisk support en enda gång. Det har mer än överträffat mina förväntningar, det är alltid uppdaterat och grafiken är väldigt cool också! Stort tack till er alla för att ni gör mitt liv mycket lättare."
            </p>
          </dd>
        </dl>
        <dl>
          <dt><h2>Användares omdömen</h2></dt>
          <dd>
            <p>
              "Som datorreparatör finner jag att vanligaste problemen kan lösas genom att ladda ner och skanna med ASC Free. När jag är klar med en reparation brukar jag råda mina kunder till att köpa PRO-paketet. Vem behöver en tekniker när du har kraften i Advanced SystemCare PRO som dygnet runt jobbar på ditt system? Det här är den bästa produkten en hemanvändare kan köpa. Tack för att ni gör mitt jobb lättare."
            </p>
          </dd>
        </dl>
        <dl>
          <dt><h2>Användares omdömen</h2></dt>
          <dd>
            <p>
              "Detta program är det bästa som jag någonsin har provat. Min dator går så mycket bättre och snabbare nu när jag har hämtat ASC. Det har städat upp onödiga och dubbla filer, tomma mappar och jag har använt det till att rensa filer. Det har städat och defragmenterat registret och alla filer på datorn. Jag rekommenderar starkt att köpa det här programmet. Det är inte dyrt och vad det kommer att göra för din dator kommer att vara helt fantastiskt. Du kommer att älska det, det jag lovar."
            </p>
          </dd>
        </dl>
      </div>
      <ul class="users clearfix">
        <li class="first current">
          <div class="imgbox">
            <img src="<?php echo getStaticUrl('images/cnet01.png')?>" alt=""/>
          </div>
          <p><span>Cnet</span></p>
        </li>
        <li>
          <div class="imgbox">
            <img src="<?php echo getStaticUrl('images/bruce-ramsay.png')?>" alt=""/>
          </div>
          <p><span>Bruce Ramsay</span></p>
        </li>
        <li>
          <div class="imgbox">
            <img src="<?php echo getStaticUrl('images/hank-ewert.png')?>" alt=""/>
          </div>
          <p><span>Hank Ewert</span></p>
        </li>
        <li>
          <div class="imgbox">
            <img src="<?php echo getStaticUrl('images/charles-r-widick.png')?>" alt=""/>
          </div>
          <p><span>Charles R. Widick</span></p>
        </li>
        <li>
          <div class="imgbox">
            <img src="<?php echo getStaticUrl('images/loretta-harnarine.png')?>" alt=""/>
          </div>
          <p><span>Loretta Harnarine</span></p>
        </li>
      </ul>
    </div>
    <!-- review end -->

    <!-- compare start -->
    <div class="compare wrapper" id="compare">
      <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <thead>
        <tr>
          <th class="text" colspan="2">Se vad PRO-utgåvan kan göra för dig:</th>
          <th class="itemb">
            <div class="box">
              Din version <br> NUVARANDE
              <span></span>
            </div>
          </th>
          <th class="space"></th>
          <th class="itema">
            <div class="box">
              PRO-version <br>UPPGRADERAD
              <span></span>
            </div>
          </th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td class="icon"><img src="<?php echo $pResUrl;?>images/icons-01.png" alt=""></td>
          <td class="virtue">System-rensning, -reparation och -optimering</td>
          <td class="itemb"><i class="all-icons">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icon"><img src="<?php echo $pResUrl;?>images/icons-12.png" alt=""></td>
          <td class="virtue">Upptäck skadliga länkar i din e-post</td>
          <td class="itemb"><i class="all-icons">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icon"><img src="<?php echo $pResUrl;?>images/icons-02.png" alt=""></td>
          <td class="virtue">Upp till 300%* internethastighet med Internet Booster</td>
          <td class="itemb"><i class="all-icons close">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icon"><img src="<?php echo $pResUrl;?>images/icons-03.png" alt=""></td>
          <td class="virtue">Upp till 200%* snabbare PC-uppstart med startoptimering</td>
          <td class="itemb"><i class="all-icons close">X</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icon"><img src="<?php echo $pResUrl;?>images/icons-04.png" alt=""></td>
          <td class="virtue">Djupgående registreringsrensning och defragmentering för att minimera krascher</td>
          <td class="itemb"><i class="all-icons close">X</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icon"><img src="<?php echo $pResUrl;?>images/icons-05.png" alt=""></td>
          <td class="virtue">Ny diskoptimeringsmotor för högre systemhastighet</td>
          <td class="itemb"><i class="all-icons close">X</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icon"><img src="<?php echo $pResUrl;?>images/icons-06.png" alt=""></td>
          <td class="virtue">Realtidsskydd mot säkerhetshot</td>
          <td class="itemb"><i class="all-icons close">X</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icon"><img src="<?php echo $pResUrl;?>images/icons-07.png" alt=""></td>
          <td class="virtue">Fullständig lokalisering och identifiering av de djupaste virusen</td>
          <td class="itemb"><i class="all-icons close">X</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icon"><img src="<?php echo $pResUrl;?>images/icons-08.png" alt=""></td>
          <td class="virtue">Automatisk blockering av reklam och spårning för säkrare surfning</td>
          <td class="itemb"><i class="all-icons close">X</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icon"><img src="<?php echo $pResUrl;?>images/icons-09.png" alt=""></td>
          <td class="virtue">Automatisk rensning av RAM-minne för smidigare systemkörning</td>
          <td class="itemb"><i class="all-icons close">X</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icon"><img src="<?php echo $pResUrl;?>images/icons-10.png" alt=""></td>
          <td class="virtue">Automatisk uppdatering till den senaste versionen</td>
          <td class="itemb"><i class="all-icons close">X</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icon"><img src="<?php echo $pResUrl;?>images/icons-11.png" alt=""></td>
          <td class="virtue">Gratis teknisk support 24/7 på begäran</td>
          <td class="itemb"><i class="all-icons close">X</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icon radius"></td>
          <td class="virtue radius"></td>
          <td class="itemb radius"></td>
          <td class="space radius"></td>
          <td class="itema radius"> <span class="shadow"></span></td>
        </tr>
        </tbody>
      </table>
    </div>
    <!-- compare end -->

    <!-- footbuy start -->
    <div class="footbuy">
      <div class="wrapper clearfix">
        <div class="imgbox fl">
          <div class="imglist three">
            <img src="<?php echo getStaticUrl('images/db-three-box.png')?>" alt=""/>
            <div class="discount small"><b>37% <small>rabatt</small></b></div>
          </div>
          <div class="imglist five">
            <img src="<?php echo getStaticUrl('images/db-five-box.png')?>" alt=""/>
            <div class="discount small"><b>65% <small>rabatt</small></b></div>
          </div>
          <div class="imglist gift on">
            <img src="<?php echo getStaticUrl('images/db-gift-box.png')?>" alt=""/>
            <div class="discount">
              <strong>88% rabatt</strong>
              <b><small>Spara</small> 1 717 kr</b>
            </div>
          </div>
        </div>
        <ul class="fl">
          <li class="three" data-num="0">
            <span>1 PC / 1 År </span>
            <strong>37% rabatt</strong>
          </li>
          <li class="five" data-num="2">
            <span>5 PC / 1 År </span>
            <strong>65% rabatt</strong>
          </li>
          <li class="gift on" data-num="1">
            <span>3 PC / 1 År </span>
            <strong>88% rabatt</strong>
          </li>
        </ul>
        <div class="price fr">
          <p><strong>239kr</strong> Ord. pris <del>1 956kr</del></p>
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=sv-asc133pciusdpf239&ref=sv_asc133pcbundlepurchase1911xr<?php echo $refStr;?>&refs=sv_purchase_asc"
             onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascbundlepurchasexmas1911xr-sv')">
            <i class="all-icons"></i>
            <span>KÖP NU</span>
          </a>
        </div>
      </div>
    </div> 
    <!-- footbuy end -->
  </div>

  <!-- notes start -->
  <dl class="notes wrapper">
    <dt>Notera:</dt>
    <dd>*.Uppgifter kan variera beroende på olika system eller datorer.</dd>
    <dd>*.Reklamkampanjer kan emellanåt ändras utan förvarning, efter vårt eget godtycke.</dd>
  </dl>
  <!-- notes end -->
  <p class="copyright wrapper">Copyright 2005 - <?php echo date('Y')?> IObit. Alla Rättigheter Förbehållna</p>

  <!-- floatlayer strat -->
  <div class="floatlayer" id="floatlayer">
    <img class="fl" src="<?php echo getStaticUrl('images/db-icon.png')?>" alt=""/>
    <div class="fl right">
      <h2><span id="first"><?php echo $firstName;?></span> <span id="last"><?php echo $lastName;?></span></h2>
      <p>har aktiverat ASC PRO</p>
    </div>
    <i class="all-icons close">×</i>
  </div>
  <!-- floatlayer end -->

  <!-- xmaxbox start -->
  <div class="xmaxbox">
    <span class="tree one"></span>
    <span class="tree two"></span>
    <span class="tree three"></span>
    <span class="tree four"></span>
    <span class="tree five"></span>
    <span class="tree six"></span>
    <span class="tree seven"></span>
    <span class="tree eight"></span>
    <span class="tree night"></span>
    <span class="tree ten"></span>
    <span class="tree eleven"></span>
  </div>
  <!-- xmaxbox end -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>