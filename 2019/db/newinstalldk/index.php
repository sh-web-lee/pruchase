<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';

function microtime_float(){
  list($usec, $sec) = explode(' ', microtime());
  return ((float)$usec + (float)$sec);
}

$reduceNum=310931325;
$buyNum = ceil(microtime_float()*1000/5000) - $reduceNum;
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
$name=explode(' ',trim(get_line('data/apr-names.txt',rand(1,30))));
$firstName=preg_replace("/(.*)(.{3})/",'${1}'.str_repeat('*',3),$name[0]);
$lastName=preg_replace("/(.*)(.{3})/",'${1}'.str_repeat('*',3),$name[1]);
if (!empty($_GET['action']) && $_GET['action'] == 'getSales') {
  echo json_encode(array('firstName'=>$firstName,'lastName'=>$lastName,'buyNum'=>$buyNum));
  exit;
}

if(in_array($_GET['st'],array('dbxmasr'))){
  $refStr='-'.$_GET['st'];
}else{
  $refStr='';
}
if(!empty($_GET['to'])){
  $refStr.='-'.$_GET['to'];
}
if(preg_match_all('/([0-9]*)\./',$_GET['ver'],$matches)){
  $ver=$matches[1][0].$matches[1][1];
  $refStr.='-'.$ver;
}
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['user'])?'':('-'.$_GET['user']);
$refStr.=empty($_GET['insday'])?'':('-'.$_GET['insday']);
$refStr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-t'.$_GET['type'].'-e'.$_GET['expd'];
?>

<!DOCTYPE html>
<html lang="dk">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Eksklusive 85% rabat på Driver Booster 8 Pro & og få en product gratis</title>
  <meta name="Copyright" content="IObit">
  <meta name="Description" content="">
  <meta name="Keywords" content="">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700,800" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>
</head>
<body>
<!-- banner -->
<div class="banner">
  <div class="wrapper">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/dk/index.php" target="_blank">IObit</a>
    <!-- title -->
    <h1>FANTASTIK UDSALG</h1>
    <!-- content -->
    <div class="content clearfix">

      <!-- 1pc -->
      <dl class="fl">
        <dt>
          <img src="<?php echo getStaticUrl('images/db-1pc.png')?>" alt="Driver Booster PRO 6">
          <p>1 år, 1 pc</p>
        </dt>
        <dd>
          <p class="price"><strong>189,-</strong> Før: (<del>399,-</del>)</p>
          <!-- 1pc buybtn -->
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=dk-db81pc189&ref=dk_db1pcpurchase1910newinstall<?php echo $refStr;?>&refs=dk_purchase_db"
             onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1pc1910newinstall-dk');">
            Køb nu
          </a>
        </dd>
      </dl>

      <!-- 3pc bundle -->
      <dl class="fl large">
        <dt>
          <!-- countdown -->
          <p class="countdown" id="countdown">
            <i class="all-icons"></i>
            Udløber om:
            <strong>00</strong>m,
            <strong>00</strong>s,
            <strong class="last">000</strong>ms
          </p>
          <img src="<?php echo getStaticUrl('images/db-3pcbundle.png')?>" alt="Driver Booster PRO 6 + Smart Defrag PRO 6">
          <p>1 år, 3 pc`er</p>
        </dt>
        <dd>
          <p class="price"><strong>199,-</strong> Før: (<del>1.178,-</del>)</p>
          <!-- 3pc bundle buybtn -->
          <a class="buybtn black"
             href="https://www.iobit.com/buy.php?product=dk-db814msd&ref=dk_db3pc14mbundle1910newinstall<?php echo $refStr;?>&refs=dk_purchase_db"
             onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase3pc14m1910newinstall-dk');">
            Køb nu
          </a>
          <!-- person -->
          <p class="person"><i class="all-icons"></i>&nbsp;&nbsp;&nbsp;<strong class="buyNum"><?php echo $buyNum ?></strong> personer har allerede købt</p>
        </dd>
      </dl>

      <!-- 3pc -->
      <dl class="fr">
        <dt>
          <img src="<?php echo getStaticUrl('images/db-3pc.png')?>" alt="Driver Booster PRO 6">
          <p>1 år, 3 pc`er</p>
        </dt>
        <dd>
          <p class="price"><strong>199,-</strong> Før: (<del>679,-</del>)</p>
          <!-- 3pc buybtn -->
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=dk-db83pc199&ref=dk_db3pcpurchase1910newinstall<?php echo $refStr;?>&refs=dk_purchase_db"
             onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase3pc1910newinstall-dk');">
            Køb nu
          </a>
        </dd>
      </dl>
    </div>
  </div>
</div>
<!-- end banner -->

<!-- feature -->
<div class="feature wrapper">
  <!-- title -->
  <h2>Hvorfor vælge Driver Booster PRO?</h2>
  <!-- intro -->
  <ul class="intro">
    <li><img src="<?php echo $pResUrl;?>images/intro-01.png" alt=""></li>
    <li><img src="<?php echo $pResUrl;?>images/intro-02.png" alt=""></li>
    <li><img src="<?php echo $pResUrl;?>images/intro-03.png" alt=""></li>
    <li><img src="<?php echo $pResUrl;?>images/intro-04.png" alt=""></li>
  </ul>
  <!-- list -->
  <ul class="list">
    <!-- one -->
    <li class="one active">
      <dl class="clearfix">
        <dt><img src="<?php echo $pResUrl;?>images/feature-icon01.png" alt=""></dt>
        <dd>
          <h3>Opdater mere end 4.500.000 drivers <span>forbedre</span></h3>
          <p>
            Genkender og opdaterer 4.500.000 defekte, manglende <br>
            eller sjældne drivers for alle hardware-enheder.
          </p>
        </dd>
      </dl>
    </li>
    <!-- two -->
    <li class="two">
      <dl class="clearfix">
        <dt><img src="<?php echo $pResUrl;?>images/feature-icon02.png" alt=""></dt>
        <dd>
          <h3>Forbedrer Gaming ydeevne <span class="green">ny</span></h3>
          <p>
            Stopper alle unødvendige processer med 1 klik og frigør <br>
            RAM og forbedrer gaming ydeevnen betydeligt.
          </p>
        </dd>
      </dl>
    </li>
    <!-- three -->
    <li class="three">
      <dl class="clearfix">
        <dt><img src="<?php echo $pResUrl;?>images/feature-icon03.png" alt=""></dt>
        <dd>
          <h3>Game-klar driver <span class="green">ny</span></h3>
          <p>
            Spilklar driver er øjeblikkelig efter udgivelse <br>
            tilgængelig til at forbedre ydeevnen, fjerne bugs <br>
            og forbedre spilleoplevelsen.
          </p>
        </dd>
      </dl>
    </li>
    <!-- four -->
    <li class="four">
      <dl class="clearfix">
        <dt><img src="<?php echo $pResUrl;?>images/feature-icon04.png" alt=""></dt>
        <dd>
          <h3>Løs enhedsfejl hurtigt <span>forbedre</span></h3>
          <p>
            Korrigerer enhedsfejl hurtigt med blot et klik og <br>
            undgår at påvirke computerens ydeevne.
          </p>
        </dd>
      </dl>
    </li>
  </ul>
</div>
<!-- end feature -->

<!-- gifts -->
<div class="gifts">
  <div class="wrapper">
    <!-- title -->
    <h2>Gave medfølger aktuelle tilbud</h2>
    <!-- message -->
    <dl class="clearfix">
      <dt class="fl"><img src="<?php echo $pResUrl;?>images/gifts-sd.png" alt="Smart Defrag PRO 6"></dt>
      <dd class="fl">
        <p class="price"><strong>0.- kr</strong>&nbsp;&nbsp; Før: (<del>379,-</del>)</p>
        <ul>
          <li>Intelligent defragmentering for over 5 millioner pro-brugere</li>
          <li>Sikker og automatisk defragmentering af harddisken</li>
          <li>Højere disk-ydelse og hurtigere adgang til filer</li>
          <li>Op til 100% hurtigere systemstart og hurtigere pc-spil</li>
        </ul>
      </dd>
    </dl>
  </div>
</div>
<!-- end gifts -->

<!-- cutbuy -->
<div class="cutbuy">
  <div class="wrapper clearfix">
    <!-- title -->
    <h2>Spar op til kr. 859 på Driver Booster 8 Pro & få et produkt gratis!</h2>
    <!-- db-box -->
    <div class="box fl"><img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="Driver Booster PRO 6"></div>
    <!-- selector -->
    <ul class="selector fl">

      <!-- 3pc bundle -->
      <li class="first active clearfix"
          data-url="https://www.iobit.com/buy.php?product=dk-db814msd&ref=dk_db3pc14mbundle1910newinstall<?php echo $refStr;?>&refs=dk_purchase_db" 
          data-ga="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase3pc14m1910newinstall-dk');"
          data-price="199,-"
          data-del="1.178,-">
        3 pc`er <span>(ekstra 2 måneder)</span> + Smart Defrag
        <strong>-85%</strong>
      </li>

      <!-- 3pc -->
      <li class="clearfix"
          data-url="https://www.iobit.com/buy.php?product=dk-db83pc199&ref=dk_db3pcpurchase1910newinstall<?php echo $refStr;?>&refs=dk_purchase_db"
          data-ga="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase3pc1910newinstall-dk');"
          data-price="199,-"
          data-del="679,-">
        3 pc`er
        <strong>-70%</strong>
      </li>

      <!-- 1pc -->
      <li class="clearfix"
          data-url="https://www.iobit.com/buy.php?product=dk-db81pc189&ref=dk_db1pcpurchase1910newinstall<?php echo $refStr;?>&refs=dk_purchase_db"
          data-ga="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1pc1910newinstall-dk');"
          data-price="189,-"
          data-del="399,-">
        1 pc
        <strong>-52%</strong>
      </li>
    </ul>
    <!-- message -->
    <dl class="fr">
      <dt>
        <p class="price"><strong>199,-</strong> Før: (<del>1.178,-</del>)</p>
      </dt>
      <dd>
        <!-- 3pc bundle buybtn -->
        <a class="buybtn black"
           href="https://www.iobit.com/buy.php?product=dk-db814msd&ref=dk_db3pc14mbundle1910newinstall<?php echo $refStr;?>&refs=dk_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase3pc14m1910newinstall-dk');">
          Spar nu
        </a>

      </dd>
    </dl>
  </div>
</div>
<!-- end cutbuy -->

<!-- awards -->
<div class="awards wrapper">
  <h2>Anbefalet og belønnet af disse medier</h2>
  <img src="<?php echo $pResUrl;?>images/awards.png" alt="">
</div>
<!-- end awards -->

<!-- reviews -->
<div class="review wrapper">
  <div class="container">
    <div id="dg-container" class="dg-container">
      <div class="nav">
        <span class="dg-prev"></span>
        <span class="dg-next"></span>
      </div>
      <div class="content dg-wrapper">
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/pcmag-editchoice.png')?>" alt="PCMG"></dt>
          <dd>
            <h2>Medieanmeldelser</h2>
            <p>Driver Booster PROs enkle kernefunktionalitet er blevet endnu mere attraktiv takket være inkluderingen af flere licenser til en virkelig økonomisk pris, samt en brugerdefineret grænseflade, der gør et godt stykke arbejde ved at vise specifikke informationer om din hardware. Konkurrenterne Ashampoo Driver Updater og SlimWare Utilities DriverUpdate har tilsvarende funktioner, men IObit Driver Booster PRO fører klart i kategorien."</p>
            <cite>PC Magazine</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/harold-barr.png') ?>" alt="Harold Barr"></dt>
          <dd>
            <h2>Brugeranmeldelelse</h2>
            <p>
              Sikke en overraskelse at modtage Driver Booster fra IObit. Så snart det var installeret begyndte
              opdateringerne. Jeg anede ikke jeg havde så mange programmer på computeren og slet ikke at de
              behøvede opgraderinger. Da opdateringerne afsluttede, var det som om, min PC havde fået en
              komplet makeover. Fantastisk!
            </p>
            <cite>Harold Barr</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/hishaam-salasa.png') ?>" alt="Hishaam Salasa"></dt>
          <dd>
            <h2>Brugeranmeldelelse</h2>
            <p>
              Virkelig den bedste driver updater der er på markedet. Det er brugervenligt, har en simpel
              brugerflade der er nem at bruge og det klarer arbejdet bedre end nogen applikation, jeg tidligere
              har brugt. Dette program er fem stjerner værd. Varmt anbefalet.
            </p>
            <cite>Hishaam Salasa</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/carlos-alexandre.png') ?>" alt="Carlos Alexandre Veríssimo"></dt>
          <dd>
            <h2>Brugeranmeldelelse</h2>
            <p>
              Det hjalp med at løse hastighedsproblemer på min gamer laptop uden at nedbryde det. Nogle
              gange, når jeg har forsøgt at opdatere mine drev, er computeren brudt sammen og jeg var nødt til
              at formatere min computer for at gendanne funktioner, men dette skete ikke med DB7. Det er nemt
              at bruge og downloader hurtigt, det er det bedste værktøj på markedet hidtil!
            </p>
            <cite>Carlos Alexandre Veríssimo</cite>
          </dd>
        </dl>
      </div>
    </div>
  </div>
</div>
<!-- end reviews -->

<!-- comparison -->
<div class="comparison">
  <div class="wrapper">
    <table>
      <thead>
      <tr>
        <th colspan="2">
          <div class="text">Hvilke fordele kan PRO-versionen give dig?</div>
        </th>
        <th class="itema">
          <div class="free">Driver Booster FREE</div>
        </th>
        <th class="itemb">
          <div class="pro">Driver Booster PRO</div>
        </th>
      </tr>
      </thead>
      <tbody>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/com-icon01.png" alt=""></td>
        <td class="virtue">Skanner automatisk og registrerer forældede, manglende og fejlbehæftede drivere</td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/black-cancel.png" alt=""></td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/red-cancel.png" alt=""></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/com-icon02.png" alt=""></td>
        <td class="virtue">Låser Windows hastighedsbegrænsning op forhurtigere driveropdateringer <img src="<?php echo $pResUrl; ?>images/forbedret.png" alt=""></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/black-cancel.png" alt=""></td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/red-cancel.png" alt=""></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/com-icon03.png" alt=""></td>
        <td class="virtue">Større database for atopdatere flere forældede og sjældne drivere <img src="<?php echo $pResUrl; ?>images/forbedret.png" alt=""></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/black-bad.png" alt=""></td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/red-cancel.png" alt=""></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/com-icon04.png" alt=""></td>
        <td class="virtue">Automatisk download oginstallation når du ikke bruger pc'en <img src="<?php echo $pResUrl; ?>images/forbedret.png" alt=""></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/black-bad.png" alt=""></td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/red-cancel.png" alt=""></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/com-icon05.png" alt=""></td>
        <td class="virtue">Automatisk backup afalle drivere til sikkerhedsgendannelse <img src="<?php echo $pResUrl; ?>images/forbedret.png" alt=""></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/black-bad.png" alt=""></td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/red-cancel.png" alt=""></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/com-icon06.png" alt=""></td>
        <td class="virtue">Sikker opdatering KUNmed certificerede WHQL-drivere  <img src="<?php echo $pResUrl; ?>images/forbedret.png" alt=""></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/black-bad.png" alt=""></td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/red-cancel.png" alt=""></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/com-icon07.png" alt=""></td>
        <td class="virtue">Prioritet for at få den nyeste Game Ready Driver <img src="<?php echo $pResUrl; ?>images/forbedret.png" alt=""></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/black-bad.png" alt=""></td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/red-cancel.png" alt=""></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/com-icon08.png" alt=""></td>
        <td class="virtue">Nødvendige komponenter til gnidningsløse spil <img src="<?php echo $pResUrl; ?>images/forbedret.png" alt=""></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/black-bad.png" alt=""></td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/red-cancel.png" alt=""></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/com-icon09.png" alt=""></td>
        <td class="virtue">Automatiske opdateringer til den nyeste version </td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/black-bad.png" alt=""></td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/red-cancel.png" alt=""></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/com-icon10.png" alt=""></td>
        <td class="virtue">Gratis teknisk support 24/7 </td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/black-bad.png" alt=""></td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/red-cancel.png" alt=""></td>
      </tr>
      </tbody>
    </table>
  </div>
</div>
<!-- end comparison -->

<!-- cutbuy -->
<div class="cutbuy cutbuy2">
  <div class="wrapper clearfix">
    <!-- title -->
    <h2>Spar op til kr. 859 på Driver Booster 8 Pro & få et produkt gratis!</h2>
    <!-- db-box -->
    <div class="box fl"><img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="Driver Booster PRO 6"></div>
    <!-- selector -->
    <ul class="selector fl">

      <!-- 3pc bundle -->
      <li class="first active clearfix"
          data-url="https://www.iobit.com/buy.php?product=dk-db814msd&ref=dk_db3pc14mbundle1910newinstall<?php echo $refStr;?>&refs=dk_purchase_db" 
          data-ga="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase3pc14m1910newinstall-dk');"
          data-price="199,-"
          data-del="1.058,-">
        3 pc`er <span>(ekstra 2 måneder)</span> + Smart Defrag
        <strong>-85%</strong>
      </li>

      <!-- 3pc -->
      <li class="clearfix"
          data-url="https://www.iobit.com/buy.php?product=dk-db83pc199&ref=dk_db3pcpurchase1910newinstall<?php echo $refStr;?>&refs=dk_purchase_db"
          data-ga="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase3pc1910newinstall-dk');"
          data-price="199,-"
          data-del="679,-">
        3 pc`er
        <strong>-70%</strong>
      </li>

      <!-- 1pc -->
      <li class="clearfix"
          data-url="https://www.iobit.com/buy.php?product=dk-db81pc189&ref=dk_db1pcpurchase1910newinstall<?php echo $refStr;?>&refs=dk_purchase_db"
          data-ga="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1pc1910newinstall-dk');"
          data-price="189,-"
          data-del="399,-">
        1 pc
        <strong>-52%</strong>
      </li>
    </ul>
    <!-- message -->
    <dl class="fr">
      <dt>
        <p class="price"><strong>199,-</strong> Før: (<del>1.178,-</del>)</p>
      </dt>
      <dd>
        <!-- 3pc bundle buybtn -->
        <a class="buybtn black"
           href="https://www.iobit.com/buy.php?product=dk-db814msd&ref=dk_db3pc14mbundle1910newinstall<?php echo $refStr;?>&refs=dk_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase3pc14m1910newinstall-dk');">
          Spar nu
        </a>
      </dd>
    </dl>
  </div>
</div>
<!-- end cutbuy -->

<!-- service -->
<div class="service wrapper clearfix">
  <dl>
    <dt><img src="<?php echo $pResUrl;?>images/moneyback.png" alt=""></dt>
    <dd>
      <h3>Tilfredshedsgaranti</h3>
      <p>60-dages pengene-tilbage-garanti</p>
    </dd>
  </dl>
  <dl>
    <dt><img src="<?php echo $pResUrl;?>images/godaddy.png" alt=""></dt>
    <dd>
      <h3>Betalingssikkerhed</h3>
      <p>Din betaling er 100% sikker</p>
    </dd>
  </dl>
  <dl>
    <dt><img src="<?php echo $pResUrl;?>images/buycut.png" alt=""></dt>
    <dd>
      <h3>Hurtig aktivering</h3>
      <p>
        Du vil modtage en aktiveringskode <br>
        hurtigt efter betalingen
      </p>
    </dd>
  </dl>
  <dl>
    <dt><img src="<?php echo $pResUrl;?>images/service.png" alt=""></dt>
    <dd>
      <h3>Kundeservice</h3>
      <p>Gratis 24/7 teknisk support ved behov</p>
    </dd>
  </dl>
</div>
<!-- end service -->

<!-- footer -->
<div class="footer wrapper">
  <dl>
    <dt>Note:</dt>
    <dd>* Tilbud som dette kan fra tid til anden ændres uden varsel efter vores skøn.</dd>
  </dl>
  <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit.Alle rettigheder forbeholdes</p>
</div>
<!-- end footer -->

<!-- float -->
<div class="float">
  <a href="javascript:void(0);" onclick="hideFloat();" class="close">X</a>
  <dl>
    <dt><span id="first"><?php echo $firstName;?></span> <span id="last"><?php echo $lastName;?></span></dt>
    <dd>har allerede aktiveret </dd>
  </dl>
</div>
<!-- end float -->
<script src="<?php echo getStaticUrl('script/modernizr.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/review-3d-carousel.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>