<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
  if(!empty($_GET['action'])&&($_GET['action']=='getPacks')){
    $date = $_GET['d'];
    $c_name = 'deascaug' . $date;
    if (!isset($_COOKIE[$c_name])) {
      $packsNum = 163;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    } else {
      if ($_GET['t'] == 1) {
        $packsNum = $_COOKIE[$c_name];
      } else {
        if (intval($_COOKIE[$c_name]) <= 3) {
          setcookie($c_name, 3, time() + 3600 * 24 * 2);
          $packsNum = 3;
        } else {
          $packsNum = $_COOKIE[$c_name] - 1;
          setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
          if (rand(1, 100) % 2 == 0) {
            $packsNum++;
          }
        }
      }
    }
    echo $packsNum;
    exit;
  }
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
$name=explode(' ',trim(get_line('data/iu_aug_name.txt',rand(1,40))));
$firstName=preg_replace("/(.*)(.{3})/",'${1}'.str_repeat('*',3),$name[0]);
$lastName=preg_replace("/(.*)(.{3})/",'${1}'.str_repeat('*',3),$name[1]);
//$saleType=(rand(1,6)%6==0)?1:3;
$saleType=3;
if($_GET['action']=='getSales'){
  echo json_encode(array('firstName'=>$firstName,'lastName'=>$lastName,'saleType'=>$saleType));
  exit();
}
  include $pRootUrl.'include/common.inc.php';
  include $pRootUrl.'callback.php';

if (in_array($_GET['st'], array('asc_c6', 'asc_c2', 'asc_c3',
        'asc_t2', 'asc_t3', 'asc_t4', 'asc_t5', 'asc_t6', 'asc_t7', 'asc_t8', 'asc_t9', 'asc_t10', 'asc_t11', 'asc_s1',
        'asc_s3', 'asc_s4', 'asc_s5', 'asc_s6', 'asc_s7', 'asc_s8', 'asc_ac2', 'asc_ac3', 'asc_report',
        'asc_promote', 'asc_autocare', 'asc_buypro', 'asc_pro1', 'asc_pro2', 'asc_pro3', 'asc_pro4', 'asc_pro5',
        'asc_pro6', 'asc_protip1', 'asc_protip2', 'asc_protip3', 'asc_protip4', 'asc_protip5', 'asc_protip6',
        'asc_c8','23','asc_s11','asc_qs3','asc_qs4','asc_qs5','asc_qs6','asc_qs7','asc_qs8',
        'asc_qs9','asc_qs10','asc_qs11','asc_pm1','asc_pm2','asc_pm3','asc_c9','asc_pro7','asc_pro8','asc_pro9','asc_pro10',
        'asc_gift','asc_pro11','asc_pro12','asc_s13','asc_s14','asc_s15','asc_p8','asc_p9','asc_p11','maxcode','garegion',
        'invalidcode','asc_install','asc_p6','asc_p7')
)) {
  $refStr = '-' . $_GET['st'];
} else {
  $refStr = '';
}
if(in_array($_GET['pop'],array('x_asc','xr_sdpasc','xr_dbpasc'))){
  $refStr.='-'.$_GET['pop'];
}
if(in_array($_GET['type'],array('pro','giveawayexp'))){
  $refStr.='-'.$_GET['type'];
}
if(in_array($_GET['to'],array('event1','ascrenew'))){
  $refStr.='-'.$_GET['to'];
}
?>
<!DOCTYPE html>
<html lang="da">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Eksklusive 88% rabat på Advanced SystemCare PRO og få 3 ekstra gaver gratis!</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Lato:400,700,900'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
<!--  start -->
<!--  end -->
  <!-- banner start -->
  <div class="banner">
    <div class="wrapbox">
      <div class="wrapper">
        <div class="top clearfix">
          <a class="logo fl" href="https://www.iobit.com/dk/index.php" target="_blank">
            <img src="<?php echo $pResUrl; ?>images/logo.png" alt="IObit" />
          </a>
          <!-- time -->
          <ul id="countdown" class="countdown fl">
            <li><strong>00</strong>Dage </li>
            <li><strong>08</strong>T : </li>
            <li><strong>41</strong>M : </li>
            <li><strong>09</strong>S : </li>
            <li class="last"><strong>123</strong>Ms</li>
          </ul>
          <img class="fr" src="<?php echo $pResUrl; ?>images/sichere_website.png" alt="" />
        </div>
        <h1>Køb 1 få 4K</h1>
        <div class="panel">
          <div class="small">
            <h2>God Jul!</h2>
            <p>Eksklusivt rabat på ASC PRO (1 år, 3 pc'er) plus 3 ekstra gaver helt gratis</p>
          </div>
          <div class="imgbox">
            <img src="<?php echo getStaticUrl('images/boxshot.png')?>" alt="" />
            <img class="off" src="<?php echo getStaticUrl('images/off.png')?>" alt="" />
          </div>
          <div class="price">
            <p><strong>kr. 189</strong> <del>kr. 1.606</del></p>
            <a class="buybtn" 
               href="https://www.iobit.com/buy.php?product=dk-asc123pciusdpf189&ref=dk_asc12iusdpfpurchase1810<?php echo $refStr;?>&refs=dk_purchase_asc"
               onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1810-dk">
              Køb nu
            </a>
            <p><i class="all-icons"></i><b class="buyNum">6.063.294</b> brugere har allerede aktiveret</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- container start -->
  <!-- payments start -->
  <div class="payments">
    <div class="wrapper"><img src="<?php echo getStaticUrl('images/payments.png')?>" alt="" /></div>
  </div>
  <!-- payments end -->

  <!-- cause start -->
  <div class="cause">
    <div class="wrapper">
      <h2>Hvorfor vælger over 250 millioner brugere Advanced SystemCare?</h2>
      <p>
        Fordi din pc kører op til 300% hurtigere end før, Advanced SystemCare overvåger dine RAM, CPU og harddiske i realtid, <span>analyserer, reparerer og optimerer Windows og din pc. Det beskytter pc'en mod</span> ondsindede angreb og gør systemet stærkere.
      </p>
    </div>
  </div>
  <!-- cause end -->

  <!-- intro start -->
  <div class="intro wrapper">
    <h2>Nyttige funktioner, der nemt tilpasser sig dine behov</h2>
    <p>1-Års abonnement for 3 PCer</p>
    <div class="clearfix panel">
      <div class="list one">
        <img class="fl" src="<?php echo getStaticUrl('images/list01.png')?>" alt="" />
        <dl class="fl">
          <dt><h3>Sikrere browsing </h3><b>forbedret</b></dt>
          <dd>Automatisk rensning af browser data, skjuler <br>digitale fingeraftryk og stopper ondsindet sporing</dd>
        </dl>
      </div>
      <div class="list two">
        <img class="fl" src="<?php echo getStaticUrl('images/list02.png')?>" alt="" />
        <dl class="fl">
          <dt><h3>Automatisk rensning </h3><b>forbedret</b></dt>
          <dd>Skanner og fjerner restfiler automatisk <span>for at gøre din pc hurtigere.</span></dd>
        </dl>
      </div>
      <div class="list three">
        <img src="<?php echo getStaticUrl('images/list03.png')?>" alt="" />
        <dl>
          <dt><h3>FaceID</h3><b class="ny">ny</b></dt>
          <dd>Tager billeder af ubudne gæster, der <span>prøver at spionere på din pc.</span></dd>
        </dl>
      </div>
      <div class="list four">
        <img src="<?php echo getStaticUrl('images/list04.png')?>" alt="" />
        <dl>
          <dt><h3>Beskyttelse af personlige <br>oplysninger</h3><b>forbedret</b></dt>
          <dd>Hold dine følsomme data såsom kontakt, <br>e-mail data, Dropbox, OneDrive m.fl. <br>væk fra ukendt adgang. </dd>
        </dl>
      </div>
      <div class="circle"><img src="<?php echo getStaticUrl('images/circle.png')?>" alt="" /></div>
      <div class="circle sec"><img src="<?php echo getStaticUrl('images/circle.png')?>" alt="" /></div>
      <div class="circle third"><img src="<?php echo getStaticUrl('images/circle.png')?>" alt="" /></div>
    </div>
  </div>
  <!-- intro end -->

  <!-- donation start -->
  <div class="donation">
    <div class="wrapper">
      <h2>Eksklusive gaver til dig – kun i 2018</h2>
      <p>Lige nu får du gratis 3 nyttige værktøjer!</p>
      <div class="clearfix">
        <div class="list">
          <img src="<?php echo getStaticUrl('images/gift_iu.png')?>" alt="IObit Uninstaller PRO" />
          <div class="text">
            <h3>IObit Uninstaller PRO</h3>
            <strong>kr. 0</strong> <del>kr. 379</del>
            <ul>
              <li><i class="all-icons"></i><span>Afinstallerer uønskede plugins for en renere pc og browser</span></li>
            </ul>
          </div>
        </div>
        <div class="list">
          <img src="<?php echo getStaticUrl('images/gift_sd.png')?>" alt="Smart Defrag 6 PRO" />
          <div class="text">
            <h3>Smart Defrag 6 PRO</h3>
            <strong>kr. 0</strong> <del>kr. 379</del>
            <ul>
              <li><i class="all-icons"></i><span>Den bedste harddisk-optimering gi'r dig en hurtigere pc</span></li>
            </ul>
          </div>
        </div>
        <div class="list">
          <img src="<?php echo getStaticUrl('images/gift_pf.png')?>" alt="Protected Folder" />
          <div class="text">
            <h3>Protected Folder</h3>
            <strong>kr. 0</strong> <del>kr. 399</del>
            <ul>
              <li><i class="all-icons"></i><span>Ingen lækage af vigtige filer for at sikre dit privatliv</span></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- donation end -->

  <!-- centbuy start -->
  <div class="centbuy">
    <div class="wrapper">
      <div class="title">
        <h2>Køb 1 få 4 SALE 2018</h2>
        <h3>Få 88% rabat på ASC PRO og få en særlig gavepakke (samlet værdi ca. kr. 1.157,-) helt gratis!</h3>
      </div>
      <div class="price">
        <p><strong>kr. 189</strong> <del>kr. 1.606</del></p>
        <a class="buybtn" 
           href="https://www.iobit.com/buy.php?product=dk-asc123pciusdpf189&ref=dk_asc12iusdpfpurchase1810<?php echo $refStr;?>&refs=dk_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1810-dk">
          Køb nu
        </a>
        <p><i class="all-icons"></i><b class="buyNum">6.063.294</b> brugere har allerede aktiveret</p>
      </div>
    </div>
  </div>
  <!-- centbuy end -->

  <!-- awards start -->
  <div class="awards">
    <div class="wrapper">
      <h2>Priser fra hele verden</h2>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt="" />
    </div>
  </div>
  <!-- awards end -->
  <div class="wrapper">
    <!-- review start -->
    <div class="review">
      <div class="content">
        <dl class="active">
          <dt><h3>Brugeranmeldelser</h3></dt>
          <dd>
            "Jeg startede, som så mange andre, med den gratis version og endte med at købte den fulde version. Programmet har arbejdet med at holde computeren ren og fejlfri i årevis, og det har ikke ladet mig i stikken endnu. Jeg har for nylig kontaktet Advanced System Care og de svarede indenfor en dag eller to med alt, hvad jeg behøvede at vide. Efter min mening er god support meget vigtig, når man beslutter om man vil beholde et produkt, og ASC vinder med både produkt og support."
          </dd>
        </dl>
        <dl>
          <dt><h3>Brugeranmeldelser</h3></dt>
          <dd>
            "Som de fleste er jeg ikke computerekspert. Jeg ved ikke, hvor mange programmer jeg har prøvet i årenes løb, de påstår allesammen at være det bedste, men de kan ikke måle sig med den Advanced SystemCare Pro beskyttelse, jeg har nu. Siden jeg fik dette fantastiske program, har jeg ikke behøvet at tilkalde en tekniker en eneste gang. Det har mere end overgået mine forventninger, altid opdateret, og grafikken er også meget cool! Mange tak til jer alle for at gøre mit liv meget lettere."
          </dd>
        </dl>
        <dl>
          <dt><h3>Medieanmeldelser</h3></dt>
          <dd>
            "Der er ikke noget værre end en computer, der driller så meget, at det forhindrer dig i at arbejde eller i at spille. Avanceret SystemCare har til formål at afhjælpe hvad som helst, der måtte være galt med din computer - ikke kun ved at rydde op, fjerne uønskede filer, malware og ugyldige registreringsposter, men også ved at give din computer et løft for at optimere din pc-oplevelse."
          </dd>
        </dl>
        <dl>
          <dt><h3>Brugeranmeldelser</h3></dt>
          <dd>
            "Som computertekniker oplever jeg, at de mest almindelige problemer bliver løst ved at downloade og scanne med ASC-fri. Når jeg er færdig med en reparation, foreslår jeg normalt, at kunden køber pro-pakken. Hvem har brug for en tekniker, når du har styrken i Advanced SystemCare Pro, som arbejder for dit system 24-7? Dette er det bedste produkt, som en hjemmebruger kan købe. Tak for at gøre mit job lettere." 
          </dd>
        </dl>
        <dl>
          <dt><h3>Brugeranmeldelser</h3></dt>
          <dd>
            "Det her program er det allerbedste, jeg nogensinde har prøvet. Min computer kører så meget bedre og hurtigere nu, hvor jeg har downloadet ASC. Programmet har fjernet unødvendige og duplikerede filer samt tomme mapper, og jeg har brugt det til at makulere filer. Det rensede og defragmenterede registreringsdatabasen og alle filerne på min pc. Jeg anbefaler på det varmeste, at du køber programmet. Det er ikke dyrt, og det det vil gøre for din computer, vil være helt fantastisk. Jeg garanterer, at du vil elske det." 
          </dd>
        </dl>
      </div>
      <ul class="users">
        <li class="active">
          <img src="<?php echo getStaticUrl('images/bruce-ramsay.jpg')?>" alt="">
          Bruce Ramsay
        </li>
        <li>
          <img src="<?php echo getStaticUrl('images/hank-ewert.jpg')?>" alt="">
          Hank Ewert
        </li>
        <li>
          <img src="<?php echo getStaticUrl('images/cnet.png')?>" alt="Cnet">
          Cnet
        </li>
        <li>
          <img src="<?php echo getStaticUrl('images/loretta-harnarine.jpg')?>" alt="">
          Loretta Harnarine
        </li>
        <li>
          <img src="<?php echo getStaticUrl('images/markus-thomas-geldermann.jpg')?>" alt="">
          Markus Thomas Geldermann
        </li>
      </ul>
    </div>
    <!-- review end -->

    <!-- comparison start -->
    <div class="comparison" id="compare">
      <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <thead>
          <tr>
            <th class="text" colspan="2">Sammenligningen mellem gratisversionen og pro-versionen kan måske hjælpe dig med at træffe den rigtige beslutning</th>
            <th class="itemb">Advanced SystemCare <b>FREE</b></th>
            <th class="itema">Advanced SystemCare <b>PRO</b></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_01.png')?>" alt="" /></td>
            <td class="virtue">Basal PC rensning og optimering</td>
            <td class="itemb"><i class="all-icons">√</i></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_02.png')?>" alt="" /></td>
            <td class="virtue">Overvåg systemets tilstand i realtid</td>
            <td class="itemb"><i class="all-icons">√</i></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_13.png')?>" alt="" /></td>
            <td class="virtue">Hold dine personlige data fra upålidelige programmer <sup class="ny">ny</sup></td>
            <td class="itemb"><i class="all-icons circle">√</i></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_14.png')?>" alt="" /></td>
            <td class="virtue">Ingen kan stjæle dine digitale fingeraftryk for at spore din web browsing <sup class="ny">ny</sup></td>
            <td class="itemb"><i class="all-icons circle">√</i></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_03.png')?>" alt="" /></td>
            <td class="virtue">Op til 300% hurtigere internet med Internet Booster <sup>forbedret</sup></td>
            <td class="itemb"><i class="all-icons circle">√</i></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt="" /></td>
            <td class="virtue">Op til 200% hurtigere opstart af PC’en <sup>forbedret</sup></td>
            <td class="itemb"><i class="all-icons circle">√</i></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_05.png')?>" alt="" /></td>
            <td class="virtue">Dybdegående rensning af registreringsdatabasen for at forhindre systemnedbrud<sup class="ny nyn">ny</sup></td>
            <td class="itemb"><i class="all-icons circle">√</i></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_06.png')?>" alt="" /></td>
            <td class="virtue">Defragmentér data på harddisken for at forbedre PC’ens ydeevne <sup class="ny">ny</sup></td>
            <td class="itemb"><i class="all-icons circle">√</i></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_07.png')?>" alt="" /></td>
            <td class="virtue">Proaktiv opdagelse og fjernelse af sikkerhedshuller i realtid <sup>forbedret</sup></td>
            <td class="itemb"><i class="all-icons circle">√</i></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt="" /></td>
            <td class="virtue">Fuld PC beskyttelse for opdagelse og fjernelse af de dybeste infektioner</td>
            <td class="itemb"><i class="all-icons circle">√</i></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_09.png')?>" alt="" /></td>
            <td class="virtue">Rens automatisk RAM for at stoppe ubrugte programmer og processoer <sup>forbedret</sup></td>
            <td class="itemb"><i class="all-icons circle">√</i></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_10.png')?>" alt="" /></td>
            <td class="virtue">Fang sutomatiskt uvedkommende med FaceID </td>
            <td class="itemb"><i class="all-icons circle">√</i></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_11.png')?>" alt="" /></td>
            <td class="virtue">Opdatér automatiskt til den seneste version</td>
            <td class="itemb"><i class="all-icons circle">√</i></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_12.png')?>" alt="" /></td>
            <td class="virtue">Gratis 24/7 teknisk support efter behov</td>
            <td class="itemb"><i class="all-icons circle">√</i></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
        </tbody>
      </table>
    </div>
    <!-- comparison end -->
  </div>
  <!-- footbuy start -->
  <div class="footbuy">
    <div class="wrapper clearfix">
      <div class="imgbox fl">
        <img src="<?php echo getStaticUrl('images/boxshot_bot.png')?>" alt="" />
        <img class="off" src="<?php echo getStaticUrl('images/off.png')?>" alt="" />
      </div>
      <div class="fr">
        <!-- time -->
        <ul id="countdown2" class="countdown">
          <li><strong>00</strong>Dage </li>
          <li><strong>08</strong>T : </li>
          <li><strong>41</strong>M : </li>
          <li><strong>09</strong>S : </li>
          <li class="last"><strong>123</strong>Ms</li>
        </ul>
        <h2>begrænset tilbud</h2>
        <div class="price">
          <p><strong>kr. 189</strong> <del>kr. 1.606</del></p>
          <a class="buybtn" 
             href="https://www.iobit.com/buy.php?product=dk-asc123pciusdpf189&ref=dk_asc12iusdpfpurchase1810<?php echo $refStr;?>&refs=dk_purchase_asc"
             onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1810-dk">
            Køb nu
          </a>
          <p><i class="all-icons"></i>Kun <b class="packsNum">164</b> Gavepakker Tilbage</p>
        </div>
      </div>
    </div>
  </div>
  <!-- footbuy start -->

  <div class="wrapper">
    <!-- annotation start -->
    <dl class="annotation">
      <dt>Bemærk:</dt>
      <dd>* .Data kan variere baseret på forskellige systemer eller computere.</dd>
      <dd>*. Tilbud som dette kan fra tid til anden ændres uden varsel efter vores skøn.</dd>
      <dd>*. Smart Defrag PRO / IObit Uninstaller PRO / Protected Folder support 1 års abonnement / 1 pc.</dd>
    </dl>
    <!-- annotation end -->

    <!-- footer start -->
    <div class="footer">Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</div>
    <!-- footer end -->
  </div>
  <!-- container end -->

  <div class="pop-bg"></div>
  <div class="pop">
     <h4><a class="smaller" href="javascript: void(0);">- minimer</a> <a class="close" href="javascript: void(0);">x luk</a></h4>
      <!-- title -->
      <h3>Tillykke!</h3>
      <p>Solo 20 utenti avranno la fortuna di vincere questo coupon!</p>
      <!-- buybtn -->
      <a class="buybtn redbtn" href="https://www.iobit.com/buy.php?product=dk-asc123pciusdpf179&ref=dk_asc12iusdpfpurchase1811popup&refs=dk_purchase_asc" onclick="ga ('send', 'event', 'ascbuy', 'buy', 'ascpurchase1811popup-dk')">
        <i></i> Benyt tilbuddet nu
      </a>

  </div>
  <div class="pop-small">
    <!-- the button for larger -->
    <a class="larger" href="javascript: void(0);">+ maximere</a>
    <!-- countdown -->
    <p class="countdown" id="countdown3">
     Udløber om:
      <strong>00</strong>m,
      <strong>00</strong>s,
      <strong class="smaller">000</strong>ms
    </p>
    <!-- price -->
    <p class="price">Ekstra rabat <strong>– kr. 10</strong></p>
    <!-- buybtn -->
    <a class="buybtn redbtn" href="https://www.iobit.com/buy.php?product=dk-asc123pciusdpf179&ref=dk_asc12iusdpfpurchase1811popup&refs=dk_purchase_asc" onclick="ga ('send', 'event', 'ascbuy', 'buy', 'ascpurchase1811popup-dk')">
      <i></i> Benyt tilbuddet nu
    </a>
  </div>

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>