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

$refStr=empty($_GET['st'])?'':('-'.$_GET['st']);
if(in_array($_GET['pop'],array('x_asc','xi_asc','xb_asc'))){
$refStr.='-'.$_GET['pop'];
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
$refStr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-l'.$_GET['litype'].'-e'.$_GET['expd'];
?>
<!DOCTYPE html>
<html lang="da">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Eksklusive 88% rabat p?? Advanced SystemCare PRO og f?? 3 ekstra gaver gratis!</title>
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
      <h1> K??b 1 f?? 4</h1>
      <div class="panel">
        <div class="small">
          <h2>Flash-salg</h2>
          <p>Eksklusivt rabat p?? ASC PRO (1 ??r, 3 pc'er) plus 3 ekstra gaver helt gratis</p>
        </div>
        <div class="imgbox">
          <img src="<?php echo getStaticUrl('images/boxshot.png')?>" alt="" class="img" />
          <img class="off" src="<?php echo getStaticUrl('images/off.png')?>" alt="" />
        </div>
        <div class="price">
          <p><strong>kr. 189</strong> <del>kr. 1.606</del></p>
          <a class="buybtn" 
             href="https://www.iobit.com/buy.php?product=dk-asc133pciusdpf189&ref=dk_asc13iusdpfpurchase1812<?php echo $refStr;?>&refs=dk_purchase_asc"
             onclick="ga ('send', 'event', 'ascbuy', 'buy', 'ascpurchase1812-dk')">
            K??b nu
          </a>
          <p><i class="all-icons"></i><b class="buyNum">6.063.294</b> brugere har allerede aktiveret</p>
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
      <h2>Hvorfor v??lger over 250 millioner brugere Advanced SystemCare?</h2>
      <p>
        Fordi din pc k??rer op til 300% hurtigere end f??r, Advanced SystemCare overv??ger dine RAM, CPU og harddiske i realtid, <span>analyserer, reparerer og optimerer Windows og din pc. Det beskytter pc'en mod</span> ondsindede angreb og g??r systemet st??rkere.
      </p>
    </div>
  </div>
  <!-- cause end -->

  <!-- intro start -->
  <div class="intro ">
    <div class="wrapper">
      <h2>Nyttige funktioner, der nemt tilpasser sig dine behov</h2>
      <p>1-??rs abonnement for 3 PCer</p>
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
            <dd>Skanner og fjerner restfiler automatisk <span>for at g??re din pc hurtigere.</span></dd>
          </dl>
        </div>
        <div class="list three">
          <img src="<?php echo getStaticUrl('images/list03.png')?>" alt="" />
          <dl>
            <dt><h3>FaceID</h3><b class="ny">ny</b></dt>
            <dd>Tager billeder af ubudne g??ster, der <span>pr??ver at spionere p?? din pc.</span></dd>
          </dl>
        </div>
        <div class="list four">
          <img src="<?php echo getStaticUrl('images/list04.png')?>" alt="" />
          <dl>
            <dt><h3>Beskyttelse af personlige <br>oplysninger</h3><b>forbedret</b></dt>
            <dd>Hold dine f??lsomme data s??som kontakt, <br>e-mail data, Dropbox, OneDrive m.fl. <br>v??k fra ukendt adgang. </dd>
          </dl>
        </div>
        <div class="circle"><img src="<?php echo getStaticUrl('images/circle.png')?>" alt="" /></div>
        <div class="circle sec"><img src="<?php echo getStaticUrl('images/circle.png')?>" alt="" /></div>
        <div class="circle third"><img src="<?php echo getStaticUrl('images/circle.png')?>" alt="" /></div>
      </div>
    </div>
  </div>
  <!-- intro end -->

  <!-- donation start -->
  <div class="donation">
    <div class="wrapper">
      <h2>Eksklusive gaver til dig ??? kun i 2020</h2>
      <p>Lige nu f??r du gratis 3 nyttige v??rkt??jer!</p>
      <div class="clearfix">
        <div class="list">
          <img src="<?php echo getStaticUrl('images/gift_iu.png')?>" alt="IObit Uninstaller PRO" />
          <div class="text">
            <h3>IObit Uninstaller PRO</h3>
            <strong>kr. 0</strong> <del>kr. 379</del>
            <ul>
              <li><i class="all-icons"></i><span>Afinstallerer u??nskede plugins for en renere pc og browser</span></li>
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
              <li><i class="all-icons"></i><span>Ingen l??kage af vigtige filer for at sikre dit privatliv</span></li>
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
        <h2>K??b 1 f?? 4 SALE 2018</h2>
        <h3>F?? 88% rabat p?? ASC PRO og f?? en s??rlig gavepakke (samlet v??rdi ca. kr. 1.157,-) helt gratis!</h3>
      </div>
      <div class="price">
        <p><strong>kr. 189</strong> <del>kr. 1.606</del></p>
        <a class="buybtn" 
           href="https://www.iobit.com/buy.php?product=dk-asc133pciusdpf189&ref=dk_asc13iusdpfpurchase1812<?php echo $refStr;?>&refs=dk_purchase_asc"
           onclick="ga ('send', 'event', 'ascbuy', 'buy', ascpurchase1812-dk')">
          K??b nu
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
        <dl>
          <dt><h3>Brugeranmeldelser</h3></dt>
          <dd>Jeg har pr??vet diverse programmer over tiden som har lovet at holde min computer problemfri. Jeg vendte mig mod ASC for ??r tilbage ved at bruge den gratis udgave f??rst. Jeg fandt, at jeg ikke l??ngere oplevede sm??problemer og opgraderede derfor til den betalte version og har aldrig set mig tilbage igen. Advanced SystemCare Pro er det eneste v??rkt??j jeg vil anbefale baseret p?? mine oplevelser. Jeg bruger ogs?? IObit Uninstaller, Smart Defrag og Driver Booster g??r virkelig en forskel. </dd>
        </dl>
        <dl>
          <dt><h3>Brugeranmeldelser</h3></dt>
          <dd>Advanced SystemCare er et sk??nt program. Jeg har brugt dette i mange ??r og det virker helt uden problemer. De forbedrer altid deres produkter som bare bliver bedre med ??rene. Jeg bruger mange af deres produkter og alt virker som det skal.</dd>
        </dl>
        <dl>
          <dt><h3>Brugeranmeldelser</h3></dt>
          <dd>Jeg har aldrig fundet et bedre vedligeholdelsesprogram til computeren eller et bedre sikkerhedsprogram end Advanced SystemCare. Siden jeg har k??bt det, har jeg aldrig haft problemer med viruser, phishing, sorte sk??rme eller noget som helst andet man kan komme i tanke om, den bedste investering jeg har gjort mig, n??r det kommer til computere, tak ASC for at g??re min computeroplevelse s?? meget sk??nnere.</dd>
        </dl>
        <dl class="active">
          <dt><h3>Medieanmeldelser</h3></dt>
          <dd>
            "Der er ikke noget v??rre end en computer, der driller s?? meget, at det forhindrer dig i at arbejde eller i at spille. Avanceret SystemCare har til form??l at afhj??lpe hvad som helst, der m??tte v??re galt med din computer - ikke kun ved at rydde op, fjerne u??nskede filer, malware og ugyldige registreringsposter, men ogs?? ved at give din computer et l??ft for at optimere din pc-oplevelse."
          </dd>
        </dl>
        <dl>
          <dt><h3>Brugeranmeldelser</h3></dt>
          <dd>Jeg har brugt Advanced SystemCare Pro i lang tid og den seneste version 13 er endnu bedre end version 12. Det identificerer og retter problemer hurtigt og har s?? mange ekstra funktioner, som du kan bruge til at holde din computer stabil. Kan kun anbefales varmt. </dd>
        </dl>
        <dl>
          <dt><h3>Brugeranmeldelser</h3></dt>
          <dd>Den nye ASC 13 er et must-have for alle computer-brugere. Dets overskuelige og intuitive interface g??r det nemt at bruge for b??de nye og gamle brugere. Mange effektive v??rkt??jer holder din PC i topform. Godt g??et IObit for at have samlet s?? mange sk??nne v??rkt??jer p?? et sted. </dd>
        </dl>
        <dl>
          <dt><h3>Brugeranmeldelser</h3></dt>
          <dd>Jeg elsker at bruge Avanced SystemCare 13. Det er hurtigt, det rydder for private dataspor, junkfiler og registrerede fragmenter. jeg kan is??r godt lide pop-up vinduet som beder om adgang til f??lsomme data. Den f??rste gang en app fors??ger at f?? adgang til dine f??lsomme filer, ??bner et vindue med mulighed for enten at tillade eller forhindre adgang. N??r adgang er blevet givet til en app, ??bnes vinduet ikke igen for denne app. Jeg ved, at mine f??lsomme filer er opbevaret sikkert. </dd>
        </dl>
      </div>
      <ul class="users">
        <li>
          <img src="<?php echo getStaticUrl('images/richard-beavers.png')?>" alt="Richard Beavers">
          Richard Beavers
        </li>
        <li>
          <img src="<?php echo getStaticUrl('images/patsy-clark.png')?>" alt="Patsy Clark">
          Patsy Clark
        </li>
        <li>
          <img src="<?php echo getStaticUrl('images/danny-r-sheets.png')?>" alt="Danny R. Sheets">
          Danny R. Sheets
        </li>
        <li  class="active">
          <img src="<?php echo getStaticUrl('images/cnet.png')?>" alt="Cnet">
          Cnet
        </li>
        <li>
          <img src="<?php echo getStaticUrl('images/tony-fisher.png')?>" alt="Tony Fisher">
         Tony Fisher
        </li>
        <li>
          <img src="<?php echo getStaticUrl('images/daniel-sanders.png')?>" alt="Daniel Sanders">
          Daniel Sanders
        </li>
        <li>
          <img src="<?php echo getStaticUrl('images/richard-preston.png')?>" alt="Richard Preston">
          Richard Preston
        </li>
      </ul>
    </div>
    <!-- review end -->

    <!-- comparison start -->
    <div class="comparison" id="compare">
      <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <thead>
          <tr>
            <th class="text" colspan="2">Sammenligningen mellem gratisversionen og pro-versionen kan m??ske hj??lpe dig med at tr??ffe den rigtige beslutning</th>
            <th class="itemb">Advanced SystemCare <b>FREE</b></th>
            <th class="itema">Advanced SystemCare <b>PRO</b></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_01.png')?>" alt="" /></td>
            <td class="virtue">Basal PC rensning og optimering</td>
            <td class="itemb"><i class="all-icons">???</i></td>
            <td class="itema"><i class="all-icons red">???</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_15.png')?>" alt="" /></td>
            <td class="virtue">Opdag ondsindede links i email <sup class="ny">ny</sup> </td>
            <td class="itemb"><i class="all-icons">???</i></td>
            <td class="itema"><i class="all-icons red">???</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_02.png')?>" alt="" /></td>
            <td class="virtue">Overv??g systemets tilstand i realtid</td>
            <td class="itemb"><i class="all-icons">???</i></td>
            <td class="itema"><i class="all-icons red">???</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_13.png')?>" alt="" /></td>
            <td class="virtue">Hold dine personlige data fra up??lidelige programmer <sup class="ny">ny</sup></td>
            <td class="itemb"><i class="all-icons circle">???</i></td>
            <td class="itema"><i class="all-icons red">???</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_14.png')?>" alt="" /></td>
            <td class="virtue">Ingen kan stj??le dine digitale fingeraftryk for at spore din web browsing <sup class="ny">ny</sup></td>
            <td class="itemb"><i class="all-icons circle">???</i></td>
            <td class="itema"><i class="all-icons red">???</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_03.png')?>" alt="" /></td>
            <td class="virtue">Op til 300% hurtigere internet med Internet Booster <sup>forbedret</sup></td>
            <td class="itemb"><i class="all-icons circle">???</i></td>
            <td class="itema"><i class="all-icons red">???</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt="" /></td>
            <td class="virtue">Op til 200% hurtigere opstart af PC???en <sup>forbedret</sup></td>
            <td class="itemb"><i class="all-icons circle">???</i></td>
            <td class="itema"><i class="all-icons red">???</i></td>
          </tr>
          
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_05.png')?>" alt="" /></td>
            <td class="virtue">Dybdeg??ende rensning af registreringsdatabasen for at forhindre systemnedbrud<sup class="ny nyn">ny</sup></td>
            <td class="itemb"><i class="all-icons circle">???</i></td>
            <td class="itema"><i class="all-icons red">???</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_06.png')?>" alt="" /></td>
            <td class="virtue">Defragment??r data p?? harddisken for at forbedre PC???ens ydeevne <sup class="ny">ny</sup></td>
            <td class="itemb"><i class="all-icons circle">???</i></td>
            <td class="itema"><i class="all-icons red">???</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_07.png')?>" alt="" /></td>
            <td class="virtue">Proaktiv opdagelse og fjernelse af sikkerhedshuller i realtid <sup>forbedret</sup></td>
            <td class="itemb"><i class="all-icons circle">???</i></td>
            <td class="itema"><i class="all-icons red">???</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt="" /></td>
            <td class="virtue">Fuld PC beskyttelse for opdagelse og fjernelse af de dybeste infektioner</td>
            <td class="itemb"><i class="all-icons circle">???</i></td>
            <td class="itema"><i class="all-icons red">???</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_09.png')?>" alt="" /></td>
            <td class="virtue">Rens automatisk RAM for at stoppe ubrugte programmer og processoer <sup>forbedret</sup></td>
            <td class="itemb"><i class="all-icons circle">???</i></td>
            <td class="itema"><i class="all-icons red">???</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_10.png')?>" alt="" /></td>
            <td class="virtue">Fang sutomatiskt uvedkommende med FaceID </td>
            <td class="itemb"><i class="all-icons circle">???</i></td>
            <td class="itema"><i class="all-icons red">???</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_11.png')?>" alt="" /></td>
            <td class="virtue">Opdat??r automatiskt til den seneste version</td>
            <td class="itemb"><i class="all-icons circle">???</i></td>
            <td class="itema"><i class="all-icons red">???</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_12.png')?>" alt="" /></td>
            <td class="virtue">Gratis 24/7 teknisk support efter behov</td>
            <td class="itemb"><i class="all-icons circle">???</i></td>
            <td class="itema"><i class="all-icons red">???</i></td>
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
        <img src="<?php echo getStaticUrl('images/boxshot.png')?>" alt="" />
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
        <h2>begr??nset tilbud</h2>
        <div class="price">
          <p><strong>kr. 189</strong> <del>kr. 1.606</del></p>
          <a class="buybtn" 
             href="https://www.iobit.com/buy.php?product=dk-asc133pciusdpf189&ref=dk_asc13iusdpfpurchase1812<?php echo $refStr;?>&refs=dk_purchase_asc"
             onclick="ga ('send', 'event', 'ascbuy', 'buy', ascpurchase1812-dk')">
            K??b nu
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
      <dt>Bem??rk:</dt>
      <dd>* .Data kan variere baseret p?? forskellige systemer eller computere.</dd>
      <dd>*. Tilbud som dette kan fra tid til anden ??ndres uden varsel efter vores sk??n.</dd>
      <dd>*. Smart Defrag PRO / IObit Uninstaller PRO / Protected Folder support 1 ??rs abonnement / 1 pc.</dd>
    </dl>
    <!-- annotation end -->

    <!-- footer start -->
    <div class="footer">Copyright ?? 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</div>
    <!-- footer end -->
  </div>
  <!-- container end -->

  <div class="pop-bg"></div>
  <div class="pop">
     <h4><a class="smaller" href="javascript: void(0);">- minimer</a> <a class="close" href="javascript: void(0);">x luk</a></h4>
      <!-- title -->
      <h3>Tillykke!</h3>
      <p>Kun 20 heldige brugere har chancen for at f?? dette tilbud</p>
      <!-- buybtn -->
      <a class="buybtn" href="https://www.iobit.com/buy.php?product=dk-asc133pciusdpf179&ref=dk_asc13iusdpfpurchase1812popupb<?php echo $refStr;?>&refs=dk_purchase_asc" onclick="ga ('send', 'event', 'ascbuy', 'buy', ascpurchase1901popupb-dk')">
        <i></i> Benyt tilbuddet nu
      </a>

  </div>
  <div class="pop-small">
    <!-- the button for larger -->
    <a class="larger" href="javascript: void(0);">+ maximere</a>
    <!-- countdown -->
    <p class="countdown" id="countdown3">
     Udl??ber om:
      <strong>00</strong>m,
      <strong>00</strong>s,
      <strong class="smaller">000</strong>ms
    </p>
    <!-- price -->
    <p class="price">Ekstra rabat <strong>??? kr. 10</strong></p>
    <!-- buybtn -->
    <a class="buybtn redbtn" href="https://www.iobit.com/buy.php?product=dk-asc133pciusdpf179&ref=dk_asc13iusdpfpurchase1812popupb<?php echo $refStr;?>&refs=dk_purchase_asc" onclick="ga ('send', 'event', 'ascbuy', 'buy', ascpurchase1901popupb-dk')">
      <i></i> Benyt tilbuddet nu
    </a>
  </div>

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>