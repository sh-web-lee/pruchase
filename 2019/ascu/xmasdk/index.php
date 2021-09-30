<?php //    初始化
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
    $pResUrl = './';
    $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

function microtime_float()
{
    list($usec, $sec) = explode(' ', microtime());
    return ((float) $usec + (float) $sec);
}

$viewNum = rand(96, 125);
if (!empty($_GET['action']) && ($_GET['action'] == 'getPacks')) {
    $date = $_GET['d'];
    $cName = 'index' . $date;
    $cookie = $_COOKIE[$cName];
    if ($cookie) {
        $packsNum = $_COOKIE[$cName];
        if ($packsNum > 5) {
            $packsNum--;
            setcookie($cName, $packsNum);
            if (rand(0, 100) % 2 == 0) {
                $packsNum = $packsNum + 1;
            }
        } else {
            $packsNum = 5;
        }
    } else {
        $packsNum = 50;
        setcookie($cName, $packsNum);
    }
    echo json_encode(array('packsNum' => $packsNum, 'viewNum' => $viewNum));
    exit();
}
$refStr='';
//if(in_array($_GET['st'],array('pm_t3','ob_2','pm_t4','pm_t5','pm_p1','pm_p2','pm_r1','pm_p3','pm_r2','reg','news',
//    'pm_t1','ob_1','pm_t2','no_patch_db','patch_installed_db','no_patch_imf','patch_installed_imf'))){
//  $refStr.='-'.$_GET['st'];
//}
$refStr .= empty($_GET['st']) ? '' : '-'.$_GET['st'];
?>
<!DOCTYPE html>
<html lang="dk">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" >
  <title>Eksklusive 84% rabat på Advanced SystemCare Ultimate og få 2 ekstra gaver gratis!</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css') ?>" rel="stylesheet">
    <?php echo $gJavascript['public']; ?>
    <?php echo $gJavascript['head']; ?>
</head>
<body>

<!-- banner start -->
<div class="banner">
  <div class="wrapper">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/dk/index.php" target="_blank">IObit</a>
    <!-- title -->
    <h1>
    LYNTILBUD I 2021
    </h1>
    <div class="left-box">
      <span class="hand"></span>
      <span class="head"></span>
      <h2><strong>84%</strong> rabat <span>Tilbud kun i kort tid</span></h2>
      <img src="<?php echo $pResUrl; ?>images/ascu-box.png" alt="">
      <img src="<?php echo $pResUrl; ?>images/raduem-box.png" alt="" class="raduem-box">
    </div>
    <div class="right-box">
      <h3>Kun <strong class="raduem"></strong> <span class="surplus"><b class="one"><span>0</span></b><b class="two"><span>0</span></b></span>  tilbud tilbage!</h3>
      <dl>
        <dt><strong>ASC Ultimate </strong> <span>219 kr.</span> <del>599 kr.</del></dt>
        <dd><strong>Protected Folder</strong> <span>0 kr.  </span></dd>
        <dd><strong>Smart Defrag 6 PRO</strong> <span>0 kr.</span></dd>
        <dd class="last"><span>Normalpris</span> <b>778 kr.</b></dd>
      </dl>
    </div>
    <dl class="price">
      <dt> <del>1.377 kr.</del> <strong>219 kr.</strong></dt>
      <dd>
        <a href="https://www.iobit.com/buy.php?product=dk-ascu143pcsdpf219&ref=dk_au14sale202001<?php echo $refStr;?>&refs=dk_purchase_ascu" onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascu219xmas1912-dk')" class="buybtn">Køb nu</a>
      </dd>
      <dd>Flere end <b id="bynum">8,007,680</b>  stk. allerede solgt</dd>
    </dl>
    </div>
  </div>
</div>
<!-- banenr end -->

<!-- benfits start -->
<div class="benfits">
  <div class="wrapper clearfix">
    <h2>Dette alt-i-et-værktøj beskytter og <br> accelererer din computer i realtid!</h2>
    <div class="showcase">
      <img src="<?php echo getStaticUrl('images/showcase.png') ?>" alt=""/>
    </div>
    <div class="detail-list">
      <dl class="active first">
        <dt><i class="benfits01"></i></dt>
        <dd>
          <h3>Bitdefender motor  </h3>
          <p>
           Fjerner vira & malware hurtigt ved hjælp af Bitdefender motor,.
          </p>
        </dd>
      </dl>
      <dl>
        <dt><i class="benfits02"></i></dt>
        <dd>
          <h3>Problemfri og hurtigere </h3>
          <p>
            Rydder junkfiler og accelerer opstart af din PC og af internet.
          </p>
        </dd>
      </dl>
      <dl>
        <dt><i class="benfits03"></i></dt>
        <dd>
          <h3>Beskyttelse af personlige data </h3>
          <p>
            Beskytter dine følsomme data ved at skjule dine digitale fingeraftryk og fjernelse af online spor.
          </p>
        </dd>
      </dl>
      <dl>
        <dt><i class="benfits04"></i></dt>
        <dd>
          <h3>Anti-ransomware </h3>
          <p>
            Stop ransomware i at inficere din computer eller i at enkryptere dine vigtige filer.
          </p>
        </dd>
      </dl>
    </div>
    <div class="clear"></div>
    <a class="intro fr" href="javascript: void(0)"> Sammenlign ASCU med andre programmer</a>
  </div>
</div>
<!-- benfits end -->

<!-- gift-box start -->
<div class="gift-box">
  <div class="wrapper clearfix">
    <!-- gift-box title -->
    <h2>Følgende gaver medfølger kun til Juleudsalget!</h2>
    <!-- SD -->
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/sd-box.png" alt=""></dt>
      <dd>
        <p>
         Defragmenter dine hard-drev og <br> forbedr ydeevnen af din PC.
        </p>
        <p><b>0 kr.</b> <del> 379 kr.</del></p>
      </dd>
    </dl>
    <!-- PF -->
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/pf-box.png" alt=""></dt>
      <dd>
        <p>
          Beskyt dine private data <br> og filer med et kodeord.
        </p>
        <p><b>0 kr.</b> <del> 399 kr.</del></p>
      </dd>
    </dl>
    <div class="message">
      <div class="left-message">
        <img src="<?php echo $pResUrl; ?>images/gift-ascu-box.png" alt="" class="img-box">
        <div class="title">
          <h3>ASC Ultimate</h3>
          <p>1 år, 3 PC’er <strong>219 kr.</strong> <del>599 kr.</del></p>
        </div>
        <ul>
          <li><i></i> <span>Smart Defrag 6 PRO </span> <b>0 kr.</b> <del>379 kr.</del></li>
          <li><i></i> <span>Protected Folder </span> <b>0 kr.</b> <del>399 kr.</del></li>
        </ul>
      </div>
      <dl class="price">
        <dt> <del>1.377 kr.</del> <strong>219 kr.</strong></dt>
        <dd>
          <a href="https://www.iobit.com/buy.php?product=dk-ascu143pcsdpf219&ref=dk_au14sale202001<?php echo $refStr;?>&refs=dk_purchase_ascu" onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascu219xmas1912-dk')" class="buybtn">Køb nu</a>
        </dd>
        <dd>Skynd dig, kun <strong class="raduem"></strong> <b class="packsNum">50</b> stk. tilbage! </dd>
      </dl>
    </div>


  </div>
</div>

<!-- gift-box end -->
<div class="reviews wrapper clearfix">
  <h2>Verdensomspændende priser</h2>
  <p>Brugere fra hele verden deler deres oplevelse.</p>
  <div class="content">
    <div class="media">
      <img src="<?php echo $pResUrl; ?>images/media.png" alt="">
    </div>
    <div class="reviews-box">
      <ul class="message">
        <li>"Jeg har førhen haft problemer og har altid bøvlet med min computer. Så jeg fik min første kopi af Advanced SystemCare. Nu er det ikke længere nødvendigt at bruge tid på bøvl. Nu hvor jeg har antivirus, der er inkluderet i produktet, har jeg ikke længere brug for andre programmer. Avanceret System Care Ultimate er den nye guldmine. Den store vinder! Min computer er nu altid opdateret og kører som er drøm. I modsætning til andre produkter har der ikke været en konstant bunke konflikter."</li>
        <li  class="active">"Advanced SystemCare Ultimate er et kraftfuldt anti-virus- og systemoptimeringsværktøj. Udover at beskytte din pc mod malware, virus og lignende trusler, kan det også øge din pc's ydeevne ved at anvende forskellige registreringsdatabase- og genvejsreparationer, fjerne skrammelfiler, skanne lokale diske for systemsårbarheder m.v."</li>
        <li>"Med den tidligere version af advanced systemcare ultimativ havde jeg næsten ingen problemer overhovedet, system, malware osv. Og nu da det er opdateret, vil flere af de funktioner som er med, få min laptop til at køre 5x hurtigere end før. Jeg kan også godt lide det nye udseende. Så næste gang jeg reparerer andres computer, vil jeg anbefale advanced systemcare ultimativ som deres antivirus/system-optimeringsprogram."</li>
        <li>"Jeg har brugt forskellige versioner af Advanced SystemCare i flere år. Da jeg kiggede på funktionerne i Advanced SystemCare Ultimate, vidste jeg, at jeg skulle have det. Det har ikke skuffet mig. Et af de enkleste, men alligevel effektive programmer, jeg har fundet til at holde mine tre computere sunde."</li>
      </ul>
      <ul class="img-box">
        <li class="first">
          <div><img src="<?php echo $pResUrl; ?>images/rod-garnett.png" alt="Rod Garnett"></div>
          <p>Rod Garnett</p>
        </li>
        <li class="active">
          <div><img src="<?php echo $pResUrl; ?>images/addictivetips.png" alt="Addictivetips"></div>
          <p>Addictivetips </p>
        </li>
        <li>
          <div><img src="<?php echo $pResUrl; ?>images/dareen-lim.png" alt="Dareen Lim"></div>
          <p>Dareen Lim </p>
        </li>
        <li>
          <div><img src="<?php echo $pResUrl; ?>images/russell-peck.png" alt="Russell Peck"></div>
          <p>Russell Peck</p>
        </li>
      </ul>
    </div>
  </div>
</div>

<!-- comparison-table start -->
<div class="comparison wrapper">
  <h2>Hvorfor vælge Advanced SystemCare Ultimate 14?</h2>
  <h3><span>Bedre beskyttelse</span> og <span>ingen nedsat pc-ydelse</span>. Se sammenligningerne nedenunder</h3>
  <table border="0" cellspacing="0" cellpadding="0" width="100%">
    <thead>
      <tr>
        <th class="text"></th>
        <th class="ascu"><div>Advanced SystemCare <br> Ultimate</div></th>
        <th class="avc"><div>AVG <br> Anti-virus</div></th>
        <th class="nor"><div>Norton Security <br> Deluxe</div></th>
        <th class="ava"><div>Avast! Pro <br> Antivirus</div></th>
        <th class="mic"><div>Microsoft <br> Security Essentials</div></th>
        <th class="mic mca"><div>McAfee® AntiVirus</div></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="text">Opdagelsesrate</td>
        <td class="ascu">Meget høj </td>
        <td class="avc">Normal</td>
        <td class="nor">Høj </td>
        <td class="ava">Normal </td>
        <td class="mic">Høj</td>
        <td class="mic">Høj</td>
      </tr>
      <tr>
        <td class="text">Forsinker pc'en</td>
        <td class="ascu">Nej  </td>
        <td class="avc">Ja</td>
        <td class="nor">Ja </td>
        <td class="ava">Ja </td>
        <td class="mic">Ja</td>
        <td class="mic">Ja</td>
      </tr>
      <tr>
        <td class="text">Top pc-rensning og optimering</td>
        <td class="ascu"><img src="<?php echo $pResUrl; ?>images/green.png" alt="">  </td>
        <td class="avc"> <img src="<?php echo $pResUrl; ?>images/red.png" alt=""></td>
        <td class="nor"> <img src="<?php echo $pResUrl; ?>images/red.png" alt=""></td>
        <td class="ava"> <img src="<?php echo $pResUrl; ?>images/red.png" alt=""> </td>
        <td class="mic"> <img src="<?php echo $pResUrl; ?>images/red.png" alt=""></td>
        <td class="mic"> <img src="<?php echo $pResUrl; ?>images/red.png" alt=""></td>
      </tr>
      <tr>
        <td class="text">Over 20 ekstraværktøjer for bedre pc-ydelse</td>
        <td class="ascu"> <img src="<?php echo $pResUrl; ?>images/green.png" alt=""> </td>
        <td class="avc"> <img src="<?php echo $pResUrl; ?>images/red.png" alt=""></td>
        <td class="nor"> <img src="<?php echo $pResUrl; ?>images/red.png" alt=""> </td>
        <td class="ava"> <img src="<?php echo $pResUrl; ?>images/red.png" alt=""> </td>
        <td class="mic"> <img src="<?php echo $pResUrl; ?>images/red.png" alt=""></td>
        <td class="mic"> <img src="<?php echo $pResUrl; ?>images/red.png" alt=""></td>
      </tr>
    </tbody>
  </table>
  <dl>
    <dt>Uovertruffen registreringshastighed og maksimal beskyttelse</dt>
    <dd>
      Et enkelt klik for at rydde skjulte og stædige vira, trojans, orme, spyware, adware og forskelligt malware. Advanced SystemCare Ultimate giver også en permanent, automatisk og proaktiv beskyttelse mod alle former for internet-sikkerhedstrusler med hurtige opdateringer af virusdatabasen.  
    </dd>
  </dl>
  <dl>
    <dt>Nyd bedre sikkerhed uden systembelastning</dt>
    <dd>Dit system kører med højeste hastighed uden at det går ud over ydeevnen, på grund af vores førende internet-sikkerhedsteknologi.</dd>
  </dl>
  <dl>
    <dt>Surf sikkert, søg, download og del med tillid</dt>
    <dd>Proaktiv viruskontrolteknologi overvåger processorens handlinger i realtid, scanner filer, der deles via e-mail og blokerer for mulige trusler. Den uovertrufne registreringshastighed garanterer dig et sikkert miljø, mens du bruger din pc.</dd>
  </dl>
  <dl>
    <dt>Få højindstillet ydeevne og nyd den nye pc-følelse</dt>
    <dd>Den allerede dokumenterede kraftfulde pc-tune-up-kapacitet frigør den fulde effekt af din pc. Med realtidsoptimering og ActiveBoost-funktionen formår systemressourcerne intelligent at sikre, at du har en superhurtig pc.</dd>
  </dl>
</div>
<!-- comparison-table end -->


<!--  footer start-->
<div class="footer">
  <!-- service -->
  <div class="service wrapper clearfix">
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/moneyback.png" alt=""></dt>
      <dd><h3>Tilfredshedsgaranti</h3></dd>
      <dd class="small">60-dages pengene-tilbage-garanti</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/godaddy-secure.png" alt=""></dt>
      <dd><h3>Betalingssikkerhed</h3></dd>
      <dd class="small">Din betaling er 100% sikker</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/service.png" alt=""></dt>
      <dd><h3>Hurtig aktivering</h3></dd>
      <dd class="small">Du vil modtage en aktiveringskode hurtigt efter betalingen</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/godaddy.png" alt=""></dt>
      <dd><h3>Kundeservice</h3></dd>
      <dd class="small">Gratis 24/7 teknisk support ved behov</dd>
    </dl>
  </div>
  <!-- annotation -->
  <dl class="annotation wrapper">
    <dt>Note:</dt>
    <dd>* Tilbud som dette kan fra tid til anden ændres uden varsel efter vores skøn.</dd>
  </dl>
  <!-- copyright -->
  <p class="copyright">Copyright © 2005 - <?php echo date('Y') ?> IObit. All Rights Reserved</p>
</div>
<!-- footer end -->
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js') ?>"></script>
<script src="<?php echo getStaticUrl('script/script.js') ?>"></script>
</body>
</html>