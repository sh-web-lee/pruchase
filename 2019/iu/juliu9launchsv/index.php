<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';

function microtime_float(){
  list($usec, $sec) = explode(' ', microtime());
  return ((float)$usec + (float)$sec);
}

$reduceNum=69041325;
$buyNum = number_format(ceil(microtime_float()*1000/20000) - $reduceNum);

if(!empty($_GET['action'])&&($_GET['action']=='getSales')){
  $date=$_GET['d'];
  $cName='sviuoct'.$date;
  $cookie=$_COOKIE[$cName];
  if($cookie){
    $packsNum=$_COOKIE[$cName];
    if($packsNum>3){
      $packsNum--;
      setcookie($cName,$packsNum);
    }else{
      $packsNum=3;
    }
  }else{
    $packsNum=58;
    setcookie($cName,$packsNum);
  }
  echo $packsNum;
  exit();
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
  fclose($fp);
}

$name=explode(' ',trim(get_line('../iu/data/global_names.txt',rand(1,424))));
$firstName=preg_replace("/(.*)(.{3})/",'${1}'.str_repeat('*',3),$name[0]);
$lastName=preg_replace("/(.*)(.{3})/",'${1}'.str_repeat('*',3),$name[1]);
//$saleType=(rand(1,6)%6==0)?1:3;
$saleType=3;
if($_GET['action']=='getUser'){
  echo json_encode(array('firstName'=>$firstName,'lastName'=>$lastName,'buyNum'=>$buyNum));
  exit();
}

$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
if(!empty($_GET['to'])){
  $refStr.='-'.$_GET['to'];
}
$refStr.=empty($_GET['user'])?'':('-'.$_GET['user']);
$refStr.=empty($_GET['insday'])?'':('-'.$_GET['insday']);

$paramPct=$_GET['pct'];
$tagShow=true;
if(!empty($paramPct)){
  $refStr.='-'.$paramPct;
  if($paramPct==2){
    $tagShow=false;
  }
}
?>
<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Specialerbjudande för lojala användare - IObit Uninstaller PRO</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>

<body>
<!-- banner start -->
<div class="banner">
  <div class="wrapper clearfix">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/sv/index.php" target="_blank">IObit</a>
    <!-- title -->
    <div class="title"><h1>Specialerbjudande för lojala användare</h1></div>
    <!-- left-message -->
    <div class="left-message fl">
      <img class="banner-asc" src="<?php echo getStaticUrl('images/banner-iu.png')?>" alt=""/>
      <img class="banner-reduce" src="<?php echo getStaticUrl('images/banner-iu-reduce.png')?>" alt=""/>
    </div>
    <!-- right-message -->
    <div class="right-message fr">
      <!-- ASC12 -->
      <h3>
        IObit Uninstaller 10 PRO 
        <span>
          +<br>
          Gratis gåvor + extra 2 månader
        </span>
      </h3>
      <!-- notes -->
      <p class="notes"><i></i> Endast <b class="packsNum"><?php echo $packsNum ?></b> <span class="reduce">-1</span> paket kvar!</p>
      <!-- line -->
      <!-- price -->
      <p class="price">
        <del>1 157kr </del> <strong>239</strong><b>kr</b><br>
        Spara 918kr!
      </p>
      <!-- buybtn -->
      <a class="buybtn"
         href="https://www.iobit.com/buy.php?product=sv-iu103pc14msdamc239&ref=sv_iu103pcsdamcnewlaunch1907<?php echo $refStr;?>&aff=&refs=sv_purchase_iu"
         onclick="ga('send', 'event', 'iubuy', 'buy', ' iu3pcnewlaunch1907-sv');">
        <span>KÖP NU</span>
        <!-- ribbon -->
        <i class="ribbon ribbon2"></i>
      </a>
      <!-- moneyback -->
      <img class="moneyback" src="<?php echo $pResUrl;?>images/moneyback.png" alt="">
      <!-- attention -->
      <p class="attention"><i></i> Mer än <b class="buyNum"><?php echo $buyNum ?></b> personer har redan köpt den</p>
    </div>
  </div>
</div>
<!-- banner end -->

<!-- feature start -->
<div class="feature">
  <div class="wrapper clearfix">
    <!-- title -->
    <h2>Avinstallera effektivt ytterligare program & tillägg för <br>en renare dator och säkrare surfning</h2>
    <!-- feature details -->
      <dl class="list01">
        <dt class="fl"><img src="<?php echo $pResUrl;?>images/feature-icon01.png" alt=""></dt>
        <dd class="fl">
          <h3>Upptäcka och ta bort Bundleware</h3>
          <p>
            Upptäck och avinstallera bundleware <br> som adware, webbläsartillägg och <br> andra program från tredje part som <br> kan vara en del av <br> installationsprocessen.
          </p>
        </dd>
      </dl>
      <dl class="list02">
        <dt class="fl"><img src="<?php echo $pResUrl;?>images/feature-icon02.png" alt=""></dt>
        <dd class="fl">
          <h3>Autorensning</h3>
          <p>
           Automatisk identifiering och rensning <br> av rester från avinstallerade program <br> inklusive de som tagits bort av andra <br> avinstallationsprogram.
          </p>
        </dd>
      </dl>
      <dl class="list03">
        <dt class="fl"><img src="<?php echo $pResUrl;?>images/feature-icon03.png" alt=""></dt>
        <dd class="fl">
          <h3>Annonsfri surfning</h3>
          <p>
           Kraftfull avinstallering av annonsbaserade <br> och skadliga tillägg för att garantera en <br> säker och ren webbupplevelse.
          </p>
        </dd>
      </dl>
      <dl class="list04 winrar">
        <dt class="fl"><img src="<?php echo $pResUrl;?>images/feature-icon04.png" alt=""></dt>
        <dd class="fl">
          <h3>Säker Programvaruuppdatering <i>VIKTIGT</i></h3>
          <p>
           Med endast ett klick kan du uppdatera viktiga <br>programvaror utan några användarinterventioner, <br>inklusive <b>WinRAR*, vars befintlig säkerhetsfel <br>kan sätta din dator i fara i flera år.</b>
          </p>
          <span>* Uppdatera omedelbart, när den nya officiella versionen är klar. </span>
        </dd>
      </dl>
    <!-- clear float -->
    <div class="clear"></div>
    <!-- a.intro -->
    <a class="intro" href="javascript:void (0);">Läs mer om PRO-versionen>></a>
  </div>
</div>
<!-- feature end -->

<!-- betweenbuy start -->
<div class="betweenbuy clearfix">
  <!-- title -->
  <p><span>VIP GÅVA.</span> endast för användare av IObit Uninstaller PRO</p>
  <div class="wrapper clearfix">
    <!-- SD box -->
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/sd-box.png')?>" alt=""></dt>
      <dd>
        <h3>Smart Defrag 6 PRO</h3>
        <p class="rate"> <b> 0kr</b><del>459kr</del></p>
        <p class="des">
          Högre defragmenteringshastighet. <br>Auto-defragmentera valda filer. <br>Snabbare uppstart av datorn.
        </p>
      </dd>
    </dl>
    <!-- PF box -->
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/amc-box.png')?>" alt=""></dt>
      <dd>
        <h3>AMC Security PRO</h3>
        <p class="rate"> <b> 0kr</b><del>199kr</del></p>
        <p class="des">Bästa allt-i-ett städaren och boostaren <br> för Android-enheterl </p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/iu-gift-box.png')?>" alt=""></dt>
      <dd>
        <h3>IObit Uninstaller 10 <span>(extra 2 månader)</span></h3>
        <p class="rate"><b> 0kr</b></p>
        <p class="des">Detta är en välkomstgåva som är exklusiv<br> för våra nya medlemmar!</p>
      </dd>
    </dl>
    <!-- clear float  -->
    <div class="clear"></div>
    <!-- price -->
    <p class="price">
      <del>1 157kr</del> <strong>239</strong><b>kr</b><br>
    </p>
    <!-- buybtn -->
    <a class="buybtn"
       href="https://www.iobit.com/buy.php?product=sv-iu103pc14msdamc239&ref=sv_iu103pcsdamcnewlaunch1907<?php echo $refStr;?>&aff=&refs=sv_purchase_iu"
       onclick="ga('send', 'event', 'iubuy', 'buy', ' iu3pcnewlaunch1907-sv');">
      Hämta rabatten + gratis gåvor
      <!-- ribbon -->
      <i class="ribbon ribbon2"></i>
    </a>
    <!-- notes -->
    <p class="notes"><i></i> BARA <b class="packsNum"><?php echo $packsNum ?></b><span class="reduce">-1</span> paket kvar, skynda dig!</p>
  </div>
</div>
<!-- betweenbuy end -->


<!-- review start -->
<div class="review wrapper">
  <div id="dg-container" class="dg-container">
    <div class="nav">
      <span class="dg-prev"></span>
      <span class="dg-next"></span>
    </div>
    <div class="content dg-wrapper">
      <dl class="reviews">
        <dt><img src="<?php echo getStaticUrl('images/makeuseof.png')?>" alt="MakeUseOf"></dt>
        <dd>
          <h2>I media</h2>
          <p>
            "IObit Unistaller har ett användarvänligt gränssnitt och användare kan ladda ner det på ett ögonblick. Programmet kan kategoriseras till den bästa avinstalleraren och programmet tillåter användaren att avinstallera flera program samtidigt. Användare erbjuds även att genomföra en djup-skanning för att hitta rester. Prestandan är såpass bra att det är värt att behålla verktyget enbart för den saken." 
          </p>
          <cite>MakeUseOf</cite>
        </dd>
      </dl>
      <dl class="reviews">
        <dt><img src="<?php echo getStaticUrl('images/Lovro-zuzic.png')?>" alt="Lovro Žužić"></dt>
        <dd>
          <h2>Användaromdömen</h2>
          <p>"IObit Uninstaller blir bättre med varje uppdatering. Jag har använt den i mer än 3 år nu. Det går snabbt att ladda ner och har enkel UI. Några av de många funktioner som jag använder regelbundet är Batch Uninstall, Powerful Scan, File Shredder och Recently Installed som ger mig snabb åtkomst till ett program som jag just installerat som jag inte gillar eller inte funkar. Det är också lätt att styra startobjekt så att din dator bootar snabbare."</p>
          <cite>Lovro Žužić</cite>
        </dd>
      </dl>
      <dl class="reviews">
        <dt><img src="<?php echo getStaticUrl('images/ada-gortler.png')?>" alt="Áda Görtler"></dt>
        <dd>
          <h2>Användaromdömen</h2>
          <p>
            "IObit Uninstaller är ett av de bästa programmen. Lätt att arbeta med, mycket snabb rengöring och djuprengöring. Den snabba rengöringen av plug-ins är också mycket bekväm. Stor sökning efter dubbletter som inte används mycket. Tack för er gästfrihet ni visat mig och min dator."
          </p>
          <cite>Áda Görtler</cite>
        </dd>
      </dl>
      <dl class="reviews">
        <dt><img src="<?php echo getStaticUrl('images/sergey-erlich.png')?>" alt="Sergey Erlich"></dt>
        <dd>
          <h2>Användaromdömen</h2>
          <p>
            "IObit Uninstaller är förmodligen den bästa mjukvaran för att ta bort onödiga program från datorn. Till skillnad från den grundläggande Windows avinstalleraren tar detta program bort alla rester, som senare kan bromsa datorns prestanda. Jag har använt detta program under flera år och det har alltid hjälpt till att hålla min dator ren och snabb. Jag har rekommenderat detta program till några av mina vänner och skulle rekommendera det igen idag."
          </p>
          <cite>Sergey Erlich</cite>
        </dd>
      </dl>
      <dl class="reviews">
        <dt><img src="<?php echo getStaticUrl('images/joseph-yu.png')?>" alt="Joseph Yu"></dt>
        <dd>
          <h2>Användaromdömen</h2>
          <p>"Uninstaller PRO är bara ett av fem av familjen IObits "underhållsprogram" jag har investerat i för min dator, ungefär som kockar investerar i sina knivar. Uninstaller är bra på att hitta rester av bit och byte som gömmer sig och tar upp diskutrymme och påverkar registret. Vid ett tidigare tillfälle gjorde jag en avinstallation av ett annat program med hjälp av den inbyggda avinstallationsfunktionen och det fungerade. Men Uninstaller PRO upptäckte att 35 filer hade lämnats kvar. Det enda jag behövde göra var att klicka på godkänn så var de borta. Jag rekommenderar starkt det här programmet och har köpt en licens för tre datorer. Supporten är artig och utmärkt."</p>
          <cite>Joseph Yu</cite>
        </dd>
      </dl>
    </div>
  </div>
</div>
<!-- review end -->

<!-- awards start -->
<div class="awards wrapper">
  <h2>Priser och utmärkelser över hela världen</h2>
  <img src="<?php echo $pResUrl;?>images/awards-icon.png" alt="">
</div>
<!-- awards end -->
  <!-- comparison start -->
  <div class="comparison wrapper" id="compare">
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
      <thead>
        <tr>
          <th class="text" colspan="2">Se vad PRO-utgåvan kan göra för dig:</th>
          <th class="space"></th>
          <th class="itemb"><div class="free">IObit Uninstaller 10 FREE</div></th>
          <th class="space"></th>
          <th class="itema"><div class="pro">IObit Uninstaller 10 PRO</div></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_01.png')?>" alt="" /></td>
          <td class="virtue">Avinstallera oönskade program snabbt och enkelt</td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_10.png')?>" alt="" /></td>
          <td class="virtue">Dators rester skannas automatically <sup>Ny</sup></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_11.png')?>" alt="" /></td>
          <td class="virtue">Återställ automatiskt systemändringar som ett program har gjort när det avinstalleras <sup>Ny</sup></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons circle">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_02.png')?>" alt="" /></td>
          <td class="virtue">Radera medföljande (bundled) program och plug-ins när huvudprogram avinstalleras</td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons circle">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_03.png')?>" alt="" /></td>
          <td class="virtue">Stöd för att ta bort envisa program</td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons circle">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt="" /></td>
          <td class="virtue">Stöd för borttagning av skadliga plug-ins</td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons circle">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_05.png')?>" alt="" /></td>
          <td class="virtue">Stöd för att ta bort reklam plug-ins</td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons circle">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_06.png')?>" alt="" /></td>
          <td class="virtue">Sök automatiskt efter och ta bort rester av avinstallerade program</td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons circle">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_07.png')?>" alt="" /></td>
          <td class="virtue">Uppdatera alla dina viktiga program med ett klick</td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons circle">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt="" /></td>
          <td class="virtue">Uppdatera till den senaste versionen automatiskt</td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons circle">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_09.png')?>" alt="" /></td>
          <td class="virtue">Gratis teknisk support, dygnet runt</td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons circle">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
      </tbody>
      <tfoot>
        <tr>
          <th colspan="2"></th>
          <td class="space"></td>
          <th class="itemb">FREE Version</th>
          <td class="space"></td>
          <th class="itema">
            <del>1 157kr</del> <strong>239 <b>kr</b></strong>
            <a href="https://www.iobit.com/buy.php?product=sv-iu103pc14msdamc239&ref=sv_iu103pcsdamcnewlaunch1907<?php echo $refStr;?>&aff=&refs=sv_purchase_iu"
         onclick="ga('send', 'event', 'iubuy', 'buy', ' iu3pcnewlaunch1907-sv');" class="buybtn">KÖP NU</a>
            <p><b>80% </b>Rabatt +Gåvor</p>
          </th>
        </tr>
      </tfoot>
    </table>
  </div>
  <!-- comparison end -->

<!-- footer start -->
<div class="footer">
  <!-- payment -->
  <div class="payment wrapper clearfix">
    <!-- visa -->
    <dl class="visa">
      <dt><img src="<?php echo $pResUrl; ?>images/payment.png" alt=""></dt>
      <dd><strong>Betalningsmetoder</strong></dd>
      <dd>Vi accepterar flera <br> betalningsmetoder</dd>
    </dl>
    <!-- moneyback -->
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/moneyback.png" alt=""></dt>
      <dd><strong>Pengarna-tillbaka-garanti</strong></dd>
      <dd>Om du inte är nöjd med produkten inom <br>60 dagar, ger vi dig pengarna tillbaka.</dd>
    </dl>
    <!-- godaddy -->
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/godaddy.png" alt=""></dt>
      <dd><strong>Säker betalning</strong></dd>
      <dd>IObit stöder flera säkra <br> betalningsalternativ.</dd>
    </dl>
    <!-- servicion -->
    <dl class="servicion">
      <dt><img src="<?php echo getStaticUrl('images/servicio.png')?>" alt=""></dt>
      <dd><strong>Tillförlitliga Tjänster</strong></dd>
      <dd>Gratis 24/7 Teknisk <br> Support vid Behov</dd>
    </dl>
  </div>
  <dl class="annotation wrapper">
    <dt>Notera:</dt>
    <dd>*.Uppgifter kan variera beroende på olika system eller datorer.</dd>
    <dd>*.Reklamkampanjer kan emellanåt ändras utan förvarning, efter vårt eget godtycke.</dd>
  </dl>
  <p class="copyright">Copyright  2005 - <?php echo date('Y')?> IObit. Alla Rättigheter Förbehållna</p>
</div>
<!-- footer end -->

<!-- float start -->
<div class="float">
  <!-- close -->
  <a class="close fr" href="javascript: closeFloat();">-</a>
  <div class="clear"></div>
  <p>
    <span id="firstName"><?php echo $firstName;?></span> <span id="lastName"><?php echo $lastName;?></span>  har köpt<br>
    Skynda, <b class="packsNum"><?php echo $packsNum ?></b> platser kvar nu!
  </p>

</div>
<!-- float end -->
<script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
<script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>