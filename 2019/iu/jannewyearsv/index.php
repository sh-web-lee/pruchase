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

$refStr='';
if(preg_match('/^([0-9]*)\.([0-9]*)\./',$_GET['ver'],$matches)){
  $ver=$matches[1].'-'.$matches[2];
  $refStr.='-'.$ver;
}
if(!empty($_GET['ref'])){
  $refStr.='-'.$_GET['ref'];
  }
  $refStr.=empty($_GET['st'])?'':('-'.$_GET['st']);
if(in_array($_GET['pop'],array('x_iu','xi_iu','xb_iu','xnc_iu'))){
  $refStr.='-'.$_GET['pop'];
}
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['user'])?'':('-'.$_GET['user']);
$refStr.=empty($_GET['insday'])?'':('-'.$_GET['insday']);
?>
<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Exklusivt, 80% RABATT p?? IObit Uninstaller PRO - IObit</title>
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
    <div class="title"><h1>Denna veckas specialerbjudande</h1></div>
    <!-- left-message -->
    <div class="left-message fl">
      <img class="banner-asc" src="<?php echo getStaticUrl('images/banner-iu.png')?>" alt=""/>
      <img class="banner-reduce" src="<?php echo getStaticUrl('images/banner-iu-reduce.png')?>" alt=""/>
    </div>
    <!-- right-message -->
    <div class="right-message fr">
      <!-- ASC12 -->
      <h3>
        IObit Uninstaller 9 PRO 
        <span>
          +<br>
          Gratis g??vor
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
         href="https://www.iobit.com/buy.php?product=sv-iu93pcsdpf239test&ref=sv_iu93pcsdpfpurchase2001<?php echo $refStr;?>&refs=sv_purchase_iu"
         onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase1901-sv');">
        <span>K??P NU</span>
        <!-- ribbon -->
        <i class="ribbon ribbon2"></i>
      </a>
      <!-- moneyback -->
      <img class="moneyback" src="<?php echo $pResUrl;?>images/moneyback.png" alt="">
      <!-- attention -->
      <p class="attention"><i></i> Mer ??n <b class="buyNum"><?php echo $buyNum ?></b> personer har redan k??pt den</p>
    </div>
  </div>
</div>
<!-- banner end -->

<!-- feature start -->
<div class="feature">
  <div class="wrapper clearfix">
    <!-- title -->
    <h2>Avinstallera effektivt ytterligare program & till??gg f??r??<br>en renare dator och s??krare surfning</h2>
    <!-- feature details -->
      <dl class="list01">
        <dt class="fl"><img src="<?php echo $pResUrl;?>images/feature-icon01.png" alt=""></dt>
        <dd class="fl">
          <h3>Uppt??cka och ta bort Bundleware</h3>
          <p>
            Uppt??ck och avinstallera bundleware <br> som adware, webbl??sartill??gg och <br> andra program fr??n tredje part som <br> kan vara en del av <br> installationsprocessen.
          </p>
        </dd>
      </dl>
      <dl class="list02">
        <dt class="fl"><img src="<?php echo $pResUrl;?>images/feature-icon02.png" alt=""></dt>
        <dd class="fl">
          <h3>Autorensning</h3>
          <p>
           Automatisk identifiering och rensning <br> av rester fr??n avinstallerade program <br> inklusive de som tagits bort av andra <br> avinstallationsprogram.
          </p>
        </dd>
      </dl>
      <dl class="list03">
        <dt class="fl"><img src="<?php echo $pResUrl;?>images/feature-icon03.png" alt=""></dt>
        <dd class="fl">
          <h3>Annonsfri surfning</h3>
          <p>
           Kraftfull avinstallering av annonsbaserade <br> och skadliga till??gg f??r att garantera en <br> s??ker och ren webbupplevelse.
          </p>
        </dd>
      </dl>
      <dl class="list04 winrar">
        <dt class="fl"><img src="<?php echo $pResUrl;?>images/feature-icon04.png" alt=""></dt>
        <dd class="fl">
          <h3>S??ker Programvaruuppdatering <i>VIKTIGT</i></h3>
          <p>
           Med endast ett klick kan du uppdatera viktiga <br>programvaror utan n??gra anv??ndarinterventioner, <br>inklusive <b>WinRAR*, vars befintlig s??kerhetsfel <br>kan s??tta din dator i fara i flera ??r.</b>
          </p>
          <span>* Uppdatera omedelbart, n??r den nya officiella versionen ??r klar. </span>
        </dd>
      </dl>
    <!-- clear float -->
    <div class="clear"></div>
    <!-- a.intro -->
    <a class="intro" href="javascript:void (0);">L??s mer om PRO-versionen>></a>
  </div>
</div>
<!-- feature end -->

<!-- betweenbuy start -->
<div class="betweenbuy clearfix">
  <!-- title -->
  <p><span>VIP G??VA.</span> endast f??r anv??ndare av IObit Uninstaller PRO</p>
  <div class="wrapper clearfix">
    <!-- SD box -->
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/sd-box.png')?>" alt=""></dt>
      <dd>
        <h3>Smart Defrag 6 PRO</h3>
        <p class="rate"> <b> 0kr</b><del>459kr</del></p>
        <p class="des">
          H??gre defragmenteringshastighet. <br>Auto-defragmentera valda filer. <br>Snabbare uppstart av datorn.
        </p>
      </dd>
    </dl>
    <!-- PF box -->
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/amc-box.png')?>" alt=""></dt>
      <dd>
        <h3>Protected Folder</h3>
        <p class="rate"> <b> 0kr</b><del>199kr</del></p>
        <p class="des">
          Skydda dina filer fr??n skadliga attacker 1 l??senord f??r alla filer Skydda ditt privatliv fr??n intr??ng.
        </p>
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
       href="https://www.iobit.com/buy.php?product=sv-iu93pcsdpf239test&ref=sv_iu93pcsdpfpurchase2001<?php echo $refStr;?>&refs=sv_purchase_iu"
         onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase1901-sv');">
      H??mta rabatten + g??vorna
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
            "IObit Unistaller har ett anv??ndarv??nligt gr??nssnitt och anv??ndare kan ladda ner det p?? ett ??gonblick. Programmet kan kategoriseras till den b??sta avinstalleraren och programmet till??ter anv??ndaren att avinstallera flera program samtidigt. Anv??ndare erbjuds ??ven att genomf??ra en djup-skanning f??r att hitta rester. Prestandan ??r s??pass bra att det ??r v??rt att beh??lla verktyget enbart f??r den saken." 
          </p>
          <cite>MakeUseOf</cite>
        </dd>
      </dl>
      <dl class="reviews">
        <dt><img src="<?php echo getStaticUrl('images/Lovro-zuzic.png')?>" alt="Lovro ??u??i??"></dt>
        <dd>
          <h2>Anv??ndaromd??men</h2>
          <p>"IObit Uninstaller blir b??ttre med varje uppdatering. Jag har anv??nt den i mer ??n 3 ??r nu. Det g??r snabbt att ladda ner och har enkel UI. N??gra av de m??nga funktioner som jag anv??nder regelbundet ??r Batch Uninstall, Powerful Scan, File Shredder och Recently Installed som ger mig snabb ??tkomst till ett program som jag just installerat som jag inte gillar eller inte funkar. Det ??r ocks?? l??tt att styra startobjekt s?? att din dator bootar snabbare."</p>
          <cite>Lovro ??u??i??</cite>
        </dd>
      </dl>
      <dl class="reviews">
        <dt><img src="<?php echo getStaticUrl('images/ada-gortler.png')?>" alt="??da G??rtler"></dt>
        <dd>
          <h2>Anv??ndaromd??men</h2>
          <p>
            "IObit Uninstaller ??r ett av de b??sta programmen. L??tt att arbeta med, mycket snabb reng??ring och djupreng??ring. Den snabba reng??ringen av plug-ins ??r ocks?? mycket bekv??m. Stor s??kning efter dubbletter som inte anv??nds mycket. Tack f??r er g??stfrihet ni visat mig och min dator."
          </p>
          <cite>??da G??rtler</cite>
        </dd>
      </dl>
      <dl class="reviews">
        <dt><img src="<?php echo getStaticUrl('images/sergey-erlich.png')?>" alt="Sergey Erlich"></dt>
        <dd>
          <h2>Anv??ndaromd??men</h2>
          <p>
            "IObit Uninstaller ??r f??rmodligen den b??sta mjukvaran f??r att ta bort on??diga program fr??n datorn. Till skillnad fr??n den grundl??ggande Windows avinstalleraren tar detta program bort alla rester, som senare kan bromsa datorns prestanda. Jag har anv??nt detta program under flera ??r och det har alltid hj??lpt till att h??lla min dator ren och snabb. Jag har rekommenderat detta program till n??gra av mina v??nner och skulle rekommendera det igen idag."
          </p>
          <cite>Sergey Erlich</cite>
        </dd>
      </dl>
      <dl class="reviews">
        <dt><img src="<?php echo getStaticUrl('images/joseph-yu.png')?>" alt="Joseph Yu"></dt>
        <dd>
          <h2>Anv??ndaromd??men</h2>
          <p>"Uninstaller PRO ??r bara ett av fem av familjen IObits "underh??llsprogram" jag har investerat i f??r min dator, ungef??r som kockar investerar i sina knivar. Uninstaller ??r bra p?? att hitta rester av bit och byte som g??mmer sig och tar upp diskutrymme och p??verkar registret. Vid ett tidigare tillf??lle gjorde jag en avinstallation av ett annat program med hj??lp av den inbyggda avinstallationsfunktionen och det fungerade. Men Uninstaller PRO uppt??ckte att 35 filer hade l??mnats kvar. Det enda jag beh??vde g??ra var att klicka p?? godk??nn s?? var de borta. Jag rekommenderar starkt det h??r programmet och har k??pt en licens f??r tre datorer. Supporten ??r artig och utm??rkt."</p>
          <cite>Joseph Yu</cite>
        </dd>
      </dl>
    </div>
  </div>
</div>
<!-- review end -->

<!-- awards start -->
<div class="awards wrapper">
  <h2>Priser och utm??rkelser ??ver hela v??rlden</h2>
  <img src="<?php echo $pResUrl;?>images/awards-icon.png" alt="">
</div>
<!-- awards end -->
  <!-- comparison start -->
  <div class="comparison wrapper" id="compare">
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
      <thead>
        <tr>
          <th class="text" colspan="2">Se vad PRO-utg??van kan g??ra f??r dig:</th>
          <th class="space"></th>
          <th class="itemb"><div class="free">IObit Uninstaller 9 FREE</div></th>
          <th class="space"></th>
          <th class="itema"><div class="pro">IObit Uninstaller 9 PRO</div></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_01.png')?>" alt="" /></td>
          <td class="virtue">Avinstallera o??nskade program snabbt och enkelt</td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons">???</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">???</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_10.png')?>" alt="" /></td>
          <td class="virtue">Dators rester skannas automatically <sup>Ny</sup></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons">???</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">???</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_11.png')?>" alt="" /></td>
          <td class="virtue">??terst??ll automatiskt system??ndringar som ett program har gjort n??r det avinstalleras <sup>Ny</sup></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons circle">???</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">???</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_02.png')?>" alt="" /></td>
          <td class="virtue">Radera medf??ljande (bundled) program och plug-ins n??r huvudprogram avinstalleras</td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons circle">???</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">???</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_03.png')?>" alt="" /></td>
          <td class="virtue">St??d f??r att ta bort envisa program</td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons circle">???</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">???</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt="" /></td>
          <td class="virtue">St??d f??r borttagning av skadliga plug-ins</td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons circle">???</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">???</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_05.png')?>" alt="" /></td>
          <td class="virtue">St??d f??r att ta bort reklam plug-ins</td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons circle">???</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">???</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_06.png')?>" alt="" /></td>
          <td class="virtue">S??k automatiskt efter och ta bort rester av avinstallerade program</td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons circle">???</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">???</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_07.png')?>" alt="" /></td>
          <td class="virtue">Uppdatera alla dina viktiga program med ett klick</td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons circle">???</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">???</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt="" /></td>
          <td class="virtue">Uppdatera till den senaste versionen automatiskt</td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons circle">???</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">???</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_09.png')?>" alt="" /></td>
          <td class="virtue">Gratis teknisk support, dygnet runt</td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons circle">???</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">???</i></td>
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
            <a href="https://www.iobit.com/buy.php?product=sv-iu93pcsdpf239test&ref=sv_iu93pcsdpfpurchase2001<?php echo $refStr;?>&refs=sv_purchase_iu"
         onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase1901-sv');" class="buybtn">K??P NU</a>
            <p><b>80% </b>Rabatt +G??vor</p>
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
      <dd>Om du inte ??r n??jd med produkten inom <br>60 dagar, ger vi dig pengarna tillbaka.</dd>
    </dl>
    <!-- godaddy -->
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/godaddy.png" alt=""></dt>
      <dd><strong>S??ker betalning</strong></dd>
      <dd>IObit st??der flera s??kra <br> betalningsalternativ.</dd>
    </dl>
    <!-- servicion -->
    <dl class="servicion">
      <dt><img src="<?php echo getStaticUrl('images/servicio.png')?>" alt=""></dt>
      <dd><strong>Tillf??rlitliga Tj??nster</strong></dd>
      <dd>Gratis 24/7 Teknisk <br> Support vid Behov</dd>
    </dl>
  </div>
  <dl class="annotation wrapper">
    <dt>Notera:</dt>
    <dd>*.Uppgifter kan variera beroende p?? olika system eller datorer.</dd>
    <dd>*.Reklamkampanjer kan emellan??t ??ndras utan f??rvarning, efter v??rt eget godtycke.</dd>
  </dl>
  <p class="copyright">Copyright  2005 - <?php echo date('Y')?> IObit. Alla R??ttigheter F??rbeh??llna</p>
</div>
<!-- footer end -->

<!-- float start -->
<div class="float">
  <!-- close -->
  <a class="close fr" href="javascript: closeFloat();">-</a>
  <div class="clear"></div>
  <p>
    <span id="firstName"><?php echo $firstName;?></span> <span id="lastName"><?php echo $lastName;?></span>  har k??pt<br>
    Skynda, <b class="packsNum"><?php echo $packsNum ?></b> platser kvar nu!
  </p>

</div>
<!-- float end -->
<script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
<script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>