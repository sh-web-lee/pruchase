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
  $c_name = 'svascxmas' . $date;
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

if (in_array($_GET['st'], array('asc_c6', 'asc_c2', 'asc_c3',
    'asc_t2', 'asc_t3', 'asc_t4', 'asc_t5', 'asc_t6', 'asc_t7', 'asc_t8', 'asc_t9', 'asc_t10', 'asc_t11', 'asc_s1',
    'asc_s3', 'asc_s4', 'asc_s5', 'asc_s6', 'asc_s7', 'asc_s8', 'asc_ac2', 'asc_ac3', 'asc_report',
    'asc_promote', 'asc_autocare', 'asc_buypro', 'asc_pro1', 'asc_pro2', 'asc_pro3', 'asc_pro4', 'asc_pro5',
    'asc_pro6', 'asc_protip1', 'asc_protip2', 'asc_protip3', 'asc_protip4', 'asc_protip5', 'asc_protip6',
    'asc_c8','23','asc_s11','asc_qs3','asc_qs4','asc_qs5','asc_qs6','asc_qs7','asc_qs8',
    'asc_qs9','asc_qs10','asc_qs11','asc_pm1','asc_pm2','asc_pm3','asc_c9','asc_pro7','asc_pro8','asc_pro9','asc_pro10',
    'asc_gift','asc_pro11','asc_pro12','asc_s13','asc_s14','asc_s15','asc_p8','asc_p9','asc_p11','maxcode','garegion',
    'invalidcode','asc_install','asc_p6','asc_p7','officialfree','officialpro',
    'asc_c10','asc_c11','asc_su5','asc_su7','asc_su6','asc_promotea','asc_promoteb','asc_promotec','asc_promoted',
    'asc_ac4','asc_su8','asc_su9','asc_protip7','asc_protip8','asc_wr','crcur',
    'asc_promote3','asc_promote4','asc_promote5','asc_promote6','asc_promote7','asc_promote8',
    'asc_promote9','asc_promote10','asc_promote11','asc_promote12','asc_pm5','asc_pm6','asc_so1','asc_so3',
    'asc_promote13','asc_promote14','asc_promote15','asc_promote16','asc_promote17','asc_promote18')
)) {
  $refStr = '-' . $_GET['st'];
} else {
  $refStr = '';
}
if(in_array($_GET['pop'],array('xr_sdpasc','xr_dbpasc'))){
  $refStr.='-'.$_GET['pop'];
}
if(in_array($_GET['type'],array('pro','giveawayexp'))){
  $refStr.='-'.$_GET['type'];
}
if(in_array($_GET['to'],array('event1','ascrenew'))){
  $refStr.='-'.$_GET['to'];
}
if(in_array($_GET['pop'],array('x_asc','xi_asc','xb_asc'))){
  $refStr.='-'.$_GET['pop'];
}
$refStr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-l'.$_GET['litype'].'-e'.$_GET['expd'];
$reduceNum=152813229;
$reTime=10;
//$buyNum = number_format(ceil(microtimeFloat()*1000/(1000*$reTime)) - $reduceNum);
$packsCount = 212;
?>
<!DOCTYPE html>
<html lang="sv">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Spara 86% rabatt p?? Advanced SystemCare PRO. - IObit</title>
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
        EXKLUSIV REA ??? bara <b>300</b> juopaket per dag
      </h1>
      <p>Spara 86% p?? ASC PRO och f?? en gratis paket</p>

      <div class="offer left">
        <div class="discount small"><b>37% <small>rabatt</small></b></div>
        <img src="<?php echo getStaticUrl('images/db-three-box.png')?>" alt=""/>
        <div class="price">
          <p class="name">1 ??r / 1 PC</p>
          <p><strong>249 kr</strong> Ord. pris <del>399 kr</del></p>
          <a class="buybtn small"
             href="https://www.iobit.com/buy.php?product=sv-asc131pc249test&ref=sv_asc131pcpurchase1912<?php echo $refStr;?>&refs=sv_purchase_asc"
             onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc1pcpurchasexmas1912-sv')">
            <i class="all-icons"></i>
            <span>K??P NU</span>
          </a>
        </div>
      </div>

      <div class="offer center">
        <div class="gift">
          <i class="all-icons"></i> Endast <b class="reduceNum giftnum"><span>58</span></b> Platser Kvar
        </div>
        <div class="discount">
          <strong>86% rabatt </strong>
          <b><small>Spara</small> 1 687 kr</b>
        </div>
        <img src="<?php echo getStaticUrl('images/db-gift-box.png')?>" alt=""/>
        <div class="price">
          <p class="name">1 ??r / 3 PC</p>
          <p><strong>269kr </strong> Ord. pris <del>1 956kr</del></p>
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=sv-asc133pciusdpf269test&ref=sv_asc133pcbundlepurchase1912<?php echo $refStr;?>&refs=sv_purchase_asc"
             onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascbundlepurchasexmas1912-sv')">
            <i class="all-icons"></i>
            K??P NU
          </a>
        </div>
        <p class="people"> <b class="packsCount"><?php echo $packsCount;?></b> personer har aktiverat</p>
      </div>

      <div class="offer right">
        <div class="discount small"><b>65% <small>rabatt</small></b></div>
        <img src="<?php echo getStaticUrl('images/db-five-box.png')?>" alt=""/>
        <div class="price">
          <p class="name">1 ??r / 5 PC</p>
          <p><strong>349 kr</strong> Ord. pris <del>999 kr</del></p>
          <a class="buybtn small"
             href="https://www.iobit.com/buy.php?product=sv-asc135pc349test&ref=sv_asc135pcpurchase1912<?php echo $refStr;?>&refs=sv_purchase_asc"
             onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc5pcpurchasexmas1912-sv')">
            <i class="all-icons"></i>
            <span>K??P NU</span>
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
        <h2>Aktivera Advanced SystemCare PRO f??r att f?? en snabbare,<br>
          renare och s??krare dator!</h2>
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
                  <p>Det skyddar dina personuppgifter och privatliv fr??n hemliga intr??ng, stoppar alla f??rs??k fr??n skadlig programvara samtidigt som din integritet f??rblir dubbelt * s?? s??ker som i gratisversionen</p>
                </dd>
              </dl>
              <dl>
                <dt><i class="benfits02"></i></dt>
                <dd>
                  <h3>200% * SNABBARE</h3>
                  <p>Rensar alla on??diga filer och optimerar CPU och RAM f??r att p??skynda uppstarten, ??kar systemets hastighet och g??r en l??ngsam dator upp till 200% snabbare</p>
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
                  <h3>ST??RRE LEDIGT UTRYMME</h3>
                  <p>Deep rensar bort skr??pfiler, ogiltiga l??nkar, systemloggfiler samt ofullst??ndiga nedladdningsfiler med avancerad optimering</p>
                </dd>
              </dl>
              <a href="Javascript:void(0);" class="textlink">L??s mer om PRO-versionen>></a>
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
                  <p>Det skyddar dina personuppgifter och privatliv fr??n hemliga intr??ng, stoppar alla f??rs??k fr??n skadlig programvara samtidigt som din integritet f??rblir dubbelt * s?? s??ker som i gratisversionen</p>
                </dd>
              </dl>
              <dl>
                <dt><i class="benfits02"></i></dt>
                <dd>
                  <h3>200% * SNABBARE</h3>
                  <p>Rensar alla on??diga filer och optimerar CPU och RAM f??r att p??skynda uppstarten, ??kar systemets hastighet och g??r en l??ngsam dator upp till 200% snabbare</p>
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
                  <h3>S??ker Programvaruuppdatering <i>VIKTIGT</i></h3>
                  <p>Med endast ett klick kan du uppdatera viktiga programvaror utan n??gra anv??ndarinterventioner, inklusive <b>WinRAR*, vars befintlig s??kerhetsfel kan s??tta din dator i fara i flera ??r.</b> </p>
                  <span>* Uppdatera omedelbart, n??r den nya officiella versionen ??r klar.</span>
                </dd>
              </dl>
              <a href="Javascript:void(0);" class="textlink">L??s mer om PRO-versionen>></a>
            </div>
          </div>
        <?php endif;?>
      </div>
    </div>
    <!-- end benfits -->

    <!-- giftbox start -->
    <div class="giftbox">
      <div class="wrapper">
        <h2>Gratis g??vor ??r endast tillg??ngliga f??r en begr??nsad tid <small> (v??rderad till 1 357 kr) </small></h2>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/sd-box.png')?>" alt="Smart Defrag PRO"/></dt>
          <dd>
            <h5>Smart Defrag PRO </h5>
            <strong>0 kr </strong>
            <p>Defragmentera snabbt och grundligt f??r att optimera h??rddiskens och datorns prestanda.</p>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/pf-box.png')?>" alt="Protected Folder"/></dt>
          <dd>
            <h5>Protected Folder</h5>
            <strong>0 kr </strong>
            <p>Effektivt filskyddsverktyg som garanterar s??kerheten f??r dina viktiga mappar, data och din integritet.</p>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt=""/></dt>
          <dd>
            <h5>IObit Uninstaller PRO</h5>
            <strong>0 kr </strong>
            <p>Scrubba Bort Alla Sp??r av O??nskade Program, Windows Appar och Insticksprogram.</p>
          </dd>
        </dl>
        <div class="price">
          <h3>ASC PRO + ett bra presentpaket</h3>
          <p class="people">Mer ??n <span class="buynum"><?php echo $packsCount;?></span> personer har redan k??pt den</p>
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=sv-asc133pciusdpf269test&ref=sv_asc133pcbundlepurchase1912<?php echo $refStr;?>&refs=sv_purchase_asc"
             onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascbundlepurchasexmas1912-sv')">
            <i class="all-icons"></i>
            K??P NU
          </a>
        </div>
      </div>
    </div>
    <!-- giftbox end -->

    <!-- probleme start -->
    <div class="probleme">
      <div class="wrapper clearfix">
        <h2>Internationella utm??rkelser och recensioner</h2>
        <p>G??r v??ra kunder n??jda var de ??n befinner sig</p>
        <ul class="message clearfix">
          <li>
            <strong>200+</strong>
            <p>Popul??r i mer ??n <b>200</b> l??nder <br>globalt</p>
          </li>
          <li>
            <strong>1,000+</strong>
            <p>Mer ??n <b>1,000</b> medier har gillat <br>och kommenterat</p>
          </li>
          <li>
            <strong>250,000,000+</strong>
            <p>Utvald och rekommenderad av ??ver <br><b>250</b> miljoner anv??ndare ??ver hela <br>v??rlden</p>
          </li>
          <li>
            <strong>80%+</strong>
            <p>Mer ??n <b>80%</b> av Advanced SystemCare <br>anv??ndare har aktiverat PRO-versionen</p>
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
              "Det finns inget v??rre ??n en dator som k??r fast s?? mycket att det hindrar din f??rm??ga att arbeta eller spela spel. Advanced Systemcares syfte ??r att r??da bot p?? allt som pl??gar din dator, inte bara st??da upp skr??pfiler, malware och ogiltiga registerposter utan ocks?? ge din dator ett rej??lt uppsving f??r en optimal datorupplevelse."
            </p>
          </dd>
        </dl>
        <dl>
          <dt><h2>Anv??ndares omd??men</h2></dt>
          <dd>
            <p>
              "Jag, precis som m??nga andra, b??rjade anv??nda gratisversionen och k??pte s?? sm??ningom den fullst??ndiga versionen. Programmet har arbetat f??r att h??lla min dator ren och buggfri i flera ??r och det har ??nnu inte svikit mig. Jag kontaktade Advanced SystemCare nyligen och de svarade inom en dag eller tv?? med allt jag beh??vde veta. I mina ??gon v??ger support mycket i beslutsbefattandet om jag ska forts??tta anv??nda en produkt. ASC segrar i b??de produkt och support."
            </p>
          </dd>
        </dl>
        <dl>
          <dt><h2>Anv??ndares omd??men</h2></dt>
          <dd>
            <p>
              "Som de flesta m??nniskorna ??r jag ingen datorexpert. Jag vet inte hur m??nga program jag har testat genom ??ren. Alla p??st??r sig vara b??sta, men inget kommer i n??rheten av skyddet jag har nu med Advanced Systemcare Pro. Sedan jag fick detta fantastiska program har jag inte beh??vt ringa f??r teknisk support en enda g??ng. Det har mer ??n ??vertr??ffat mina f??rv??ntningar, det ??r alltid uppdaterat och grafiken ??r v??ldigt cool ocks??! Stort tack till er alla f??r att ni g??r mitt liv mycket l??ttare."
            </p>
          </dd>
        </dl>
        <dl>
          <dt><h2>Anv??ndares omd??men</h2></dt>
          <dd>
            <p>
              "Som datorreparat??r finner jag att vanligaste problemen kan l??sas genom att ladda ner och skanna med ASC Free. N??r jag ??r klar med en reparation brukar jag r??da mina kunder till att k??pa PRO-paketet. Vem beh??ver en tekniker n??r du har kraften i Advanced SystemCare PRO som dygnet runt jobbar p?? ditt system? Det h??r ??r den b??sta produkten en hemanv??ndare kan k??pa. Tack f??r att ni g??r mitt jobb l??ttare."
            </p>
          </dd>
        </dl>
        <dl>
          <dt><h2>Anv??ndares omd??men</h2></dt>
          <dd>
            <p>
              "Detta program ??r det b??sta som jag n??gonsin har provat. Min dator g??r s?? mycket b??ttre och snabbare nu n??r jag har h??mtat ASC. Det har st??dat upp on??diga och dubbla filer, tomma mappar och jag har anv??nt det till att rensa filer. Det har st??dat och defragmenterat registret och alla filer p?? datorn. Jag rekommenderar starkt att k??pa det h??r programmet. Det ??r inte dyrt och vad det kommer att g??ra f??r din dator kommer att vara helt fantastiskt. Du kommer att ??lska det, det jag lovar."
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
          <th class="text" colspan="2">Se vad PRO-utg??van kan g??ra f??r dig:</th>
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
          <td class="itemb"><i class="all-icons">???</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">???</i></td>
        </tr>
        <tr>
          <td class="icon"><img src="<?php echo $pResUrl;?>images/icons-12.png" alt=""></td>
          <td class="virtue">Uppt??ck skadliga l??nkar i din e-post</td>
          <td class="itemb"><i class="all-icons">???</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">???</i></td>
        </tr>
        <tr>
          <td class="icon"><img src="<?php echo $pResUrl;?>images/icons-02.png" alt=""></td>
          <td class="virtue">Upp till 300%* internethastighet med Internet Booster</td>
          <td class="itemb"><i class="all-icons close">???</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">???</i></td>
        </tr>
        <tr>
          <td class="icon"><img src="<?php echo $pResUrl;?>images/icons-03.png" alt=""></td>
          <td class="virtue">Upp till 200%* snabbare PC-uppstart med startoptimering</td>
          <td class="itemb"><i class="all-icons close">X</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">???</i></td>
        </tr>
        <tr>
          <td class="icon"><img src="<?php echo $pResUrl;?>images/icons-04.png" alt=""></td>
          <td class="virtue">Djupg??ende registreringsrensning och defragmentering f??r att minimera krascher</td>
          <td class="itemb"><i class="all-icons close">X</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">???</i></td>
        </tr>
        <tr>
          <td class="icon"><img src="<?php echo $pResUrl;?>images/icons-05.png" alt=""></td>
          <td class="virtue">Ny diskoptimeringsmotor f??r h??gre systemhastighet</td>
          <td class="itemb"><i class="all-icons close">X</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">???</i></td>
        </tr>
        <tr>
          <td class="icon"><img src="<?php echo $pResUrl;?>images/icons-06.png" alt=""></td>
          <td class="virtue">Realtidsskydd mot s??kerhetshot</td>
          <td class="itemb"><i class="all-icons close">X</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">???</i></td>
        </tr>
        <tr>
          <td class="icon"><img src="<?php echo $pResUrl;?>images/icons-07.png" alt=""></td>
          <td class="virtue">Fullst??ndig lokalisering och identifiering av de djupaste virusen</td>
          <td class="itemb"><i class="all-icons close">X</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">???</i></td>
        </tr>
        <tr>
          <td class="icon"><img src="<?php echo $pResUrl;?>images/icons-08.png" alt=""></td>
          <td class="virtue">Automatisk blockering av reklam och sp??rning f??r s??krare surfning</td>
          <td class="itemb"><i class="all-icons close">X</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">???</i></td>
        </tr>
        <tr>
          <td class="icon"><img src="<?php echo $pResUrl;?>images/icons-09.png" alt=""></td>
          <td class="virtue">Automatisk rensning av RAM-minne f??r smidigare systemk??rning</td>
          <td class="itemb"><i class="all-icons close">X</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">???</i></td>
        </tr>
        <tr>
          <td class="icon"><img src="<?php echo $pResUrl;?>images/icons-10.png" alt=""></td>
          <td class="virtue">Automatisk uppdatering till den senaste versionen</td>
          <td class="itemb"><i class="all-icons close">X</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">???</i></td>
        </tr>
        <tr>
          <td class="icon"><img src="<?php echo $pResUrl;?>images/icons-11.png" alt=""></td>
          <td class="virtue">Gratis teknisk support 24/7 p?? beg??ran</td>
          <td class="itemb"><i class="all-icons close">X</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">???</i></td>
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
              <strong>86% rabatt</strong>
              <b><small>Spara</small> 1 687 kr</b>
            </div>
          </div>
        </div>
        <ul class="fl">
          <li class="three" data-num="0">
            <span>1 PC / 1 ??r </span>
            <strong>37% rabatt</strong>
          </li>
          <li class="five" data-num="2">
            <span>5 PC / 1 ??r </span>
            <strong>65% rabatt</strong>
          </li>
          <li class="gift on" data-num="1">
            <span>3 PC / 1 ??r </span>
            <strong>86% rabatt</strong>
          </li>
        </ul>
        <div class="price fr">
          <p><strong>269kr</strong> Ord. pris <del>1 956kr</del></p>
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=sv-asc133pciusdpf269test&ref=sv_asc133pcbundlepurchase1912<?php echo $refStr;?>&refs=sv_purchase_asc"
             onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascbundlepurchasexmas1912-sv')">
            <i class="all-icons"></i>
            <span>K??P NU</span>
          </a>
        </div>
      </div>
    </div> 
    <!-- footbuy end -->
  </div>

  <!-- notes start -->
  <dl class="notes wrapper">
    <dt>Notera:</dt>
    <dd>*.Uppgifter kan variera beroende p?? olika system eller datorer.</dd>
    <dd>*.Reklamkampanjer kan emellan??t ??ndras utan f??rvarning, efter v??rt eget godtycke.</dd>
  </dl>
  <!-- notes end -->
  <p class="copyright wrapper">Copyright 2005 - <?php echo date('Y')?> IObit. Alla R??ttigheter F??rbeh??llna</p>

  <!-- floatlayer strat -->
  <div class="floatlayer" id="floatlayer">
    <img class="fl" src="<?php echo getStaticUrl('images/db-icon.png')?>" alt=""/>
    <div class="fl right">
      <h2><span id="first"><?php echo $firstName;?></span> <span id="last"><?php echo $lastName;?></span></h2>
      <p>har aktiverat ASC PRO</p>
    </div>
    <i class="all-icons close">??</i>
  </div>
  <!-- floatlayer end -->

  <!-- xmaxbox start
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
   xmaxbox end -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>