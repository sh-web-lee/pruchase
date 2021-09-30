<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';

}
include $pRootUrl.'include/common.inc.php';

if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'dkdbxmasrcdk_p' . $date;
  $c_name_t='dkdbxmasrcdk_t' . $date;
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=rand(37,50);
    setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
    setcookie($c_name_t,$totalNum, time() + 3600 * 24 *2);
  } else {
    if (intval($_COOKIE[$c_name]) <= 5) {
      $packsNum = 5;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    } else {
      if((rand(1,100)%2)==0){
          $packsNum=$_COOKIE[$c_name];
      }else {
        $packsNum = $_COOKIE[$c_name] - 1;
        setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
      }
    }
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}


if(in_array($_GET['st'],array('dbxmasr'))){
  $refStr='-'.$_GET['st'];
}else{
  $refStr='';
}
if(in_array($_GET['pop'],array('xr_db'))){
	$refStr.='-'.$_GET['pop'];
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
  <title>Begrænset tilbud, spar op til 91% på Driver Booster PRO - IObit 2019</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700&display=swap" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>
</head>

<body>
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper clearfix">
      <a class="logo" href="https://www.iobit.com/dk/index.php" target="_blank">IObit</a>
      <div class="title">
        <h1>RET OG OPDATER ALLE DREV NU!</h1>
        <p>Flere eksklusive drev, sikrere opdateringer, din PC vil køre hurtigere og mere effektivt</p>
      </div>
      <div class="left fl">
        <h4>Juletilbud</h4>
        <h2>UDSALG SPAR <big>91%</big></h2>
        <img src="<?php echo getStaticUrl('images/db-box.png')?>" alt=""/>
      </div>
      <div class="right fr">
        <div class="chart">
          <div class="clist one">
            <span class="cost"><strong>249kr.</strong></span>
            <span class="line"></span>
            <span class="point"></span>
            <span class="month">12. November</span>
          </div>
          <div class="clist two">
            <span class="cost"><strong><big>169</big>kr.</strong></span>
            <span class="line"></span>
            <span class="point"></span>
            <span class="text">Kun <b>39</b> enheder tilbage, skyn dig!</span>
          </div>
          <div class="clist three">
            <span class="cost"><strong>259 kr.</strong></span>
            <span class="line"></span>
            <span class="point"></span>
            <span class="month">16. November</span>
          </div>
        </div>
        <div class="price">
          <p><strong><big>169</big> kr.</strong> <del>1836 kr.</del></p>
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=dk-db73pcsdpf169&ref=dk_db7bundle169xmasrc1912<?php echo $refStr;?>&refs=dk_purchase_db"
             onclick="ga('send', 'event', 'dbbuy', 'buy', 'db169xmasrc1912-dk');">
            Køb nu
          </a>
        </div>
      </div>
    </div>
    <span class="snow snow01"></span>
    <span class="snow snow02"></span>
    <span class="snow snow03"></span>
  </div>
  <!-- banner end -->

  <!-- payment start -->
  <div class="payment wrapper"><img src="<?php echo getStaticUrl('images/payments.png')?>" alt=""/></div>
  <!-- payment end -->

  <!-- map start -->
  <div class="map">
    <div class="wrapper">
      <h2>
        Unik drev-database og avanceret opdateringsteknologi, som vil accelererer din computer til dets maksimale ydeevne
      </h2>
      <p>Over 10 millioner brugere har aktiveret Driver Booster PRO</p>
    </div>
  </div>
  <!-- map end -->

  <!-- feature start -->
  <div class="feature wrapper">
    <img class="feature-db" src="<?php echo getStaticUrl('images/feature-db.png')?>" alt=""/>
    <dl class="one clearfix">
      <dt><img src="<?php echo $pResUrl;?>images/feature-icon01.png" alt=""></dt>
      <dd>
        <h3>AUTOMATISK <strong>DREVOPDATERINGER</strong></h3>
        <p>
          Giver dig den automatiske opdateringsløsning, som installerer<br> og opdaterer drev automatisk, når din PC er ledig.
        </p>
      </dd>
    </dl>
    <dl class="two clearfix">
      <dt><img src="<?php echo $pResUrl;?>images/feature-icon02.png" alt=""></dt>
      <dd>
        <h3>SIKRERE <strong>DREVOPDATERINGER</strong></h3>
        <p>
          Sikkerhedskopierer automatisk og opretter et<br> gendannelsespunkt inden opdateringen i tilfælde<br> af, at noget skulle gå galt.
        </p>
      </dd>
    </dl>
    <dl class="three clearfix">
      <dt><img src="<?php echo $pResUrl;?>images/feature-icon03.png" alt=""></dt>
      <dd>
        <h3>MERE <strong>STABILT SYSTEM</strong></h3>
        <p>Holder alle dine drev opdaterede<br> så dit system kan køre mere stabilt.</p>
      </dd>
    </dl>
    <dl class="four clearfix">
      <dt><img src="<?php echo $pResUrl;?>images/feature-icon04.png" alt=""></dt>
      <dd>
        <h3><strong>100% * HURTIGERE</strong> DOWNLOAD</h3>
        <p>Downloadhastigheden for drev er 100% hurtigere<br> end i den gratis version</p>
      </dd>
    </dl>
    <dl class="five clearfix">
      <dt><img src="<?php echo $pResUrl;?>images/feature-icon05.png" alt=""></dt>
      <dd>
        <h3><strong>GLIMRENDE</strong> SPILOPLEVELSE</h3>
        <p>
          Holder dine grafikdrev samt Game Ready drev opdaterede,<br> optimerer hardware-ydeevnen og maksimerer spiloplevelsen.
        </p>
      </dd>
    </dl>
  </div>
  <!-- feature end -->

  <!-- gifts start -->
  <div class="gifts">
    <div class="wrapper clearfix">
      <h2>Få rabat & 3 gratis pakker!</h2>
      <h3>ALT HVAD DU KUNNE TÆNKE DIG TIL DIN PC ER HER</h3>
      <dl class="iu">
        <dt>
          <span class="ribbon"></span>
          <img src="<?php echo getStaticUrl('images/gifts-iu.png')?>" alt="IObit Uninstaller PRO"/>
        </dt>
        <dd>
          <h4>IObit Uninstaller PRO</h4>
          <strong>0 kr.</strong> <del>379 kr.</del>
          <p>Slet uønskede Windows programmer, plugins og apps permanent med et blot klik!</p>
        </dd>
      </dl>
      <dl class="sd">
        <dt>
          <span class="ribbon"></span>
          <img src="<?php echo getStaticUrl('images/gifts-sd.png')?>" alt="Smart Defrag PRO"/>
        </dt>
        <dd>
          <h4>Smart Defrag PRO</h4>
          <strong>0 kr.</strong> <del>379 kr.</del>
          <p>Den bedste diskdefragmentering som accelererer harddisken til dets maksimale ydeevne!</p>
        </dd>
      </dl>
      <dl class="pf">
        <dt>
          <span class="ribbon"></span>
          <img src="<?php echo getStaticUrl('images/gifts-pf.png')?>" alt="Protected Folder"/>
        </dt>
        <dd>
          <h4>Protected Folder</h4>
          <strong>0 kr.</strong> <del>399 kr.</del>
          <p>Beskyt dine personlige filer fra ondsindede angreb!</p>
        </dd>
      </dl>
    </div>
  </div>
  <!-- gifts end -->

  <!-- centbuy start -->
  <div class="centbuy price wrapper">
    <p><strong>169 kr.</strong> <del>1836 kr.</del></p>
    <p>JULEPRIS</p>
    <a class="buybtn"
       href="https://www.iobit.com/buy.php?product=dk-db73pcsdpf169&ref=dk_db7bundle169xmasrc1912<?php echo $refStr;?>&refs=dk_purchase_db"
       onclick="ga('send', 'event', 'dbbuy', 'buy', 'db169xmasrc1912-dk');">
      Køb nu
    </a>
    <p class="pick">Kun <b class="pickNum">5</b> enheder tilbage, skynd dig!</p>
  </div>
  <!-- centbuy end -->

  <!-- review start -->
  <div class="review wrapper">
    <h2>Vi gør vores bedste for at opfylde dine<br> behov, hvorend du befinder dig</h2>
    <div class="reviewbox">
      <h3>Hvad andre siger</h3>
      <ul>
        <li class="one"><img src="<?php echo getStaticUrl('images/pc-magazine.png')?>" alt="PC Magazine"></li>
        <li class="two">
          <img src="<?php echo getStaticUrl('images/harold-barr.png')?>" alt="Harold Barr">
        </li>
        <li class="three">
          <img src="<?php echo getStaticUrl('images/hishaam-salasa.png')?>" alt="Hishaam Salasa">
        </li>
        <li class="four"><img src="<?php echo getStaticUrl('images/carlos.png')?>" alt="Carlos Alexandre Veríssimo"></li>
      </ul>
      <div class="details">
        <div>
          <h4>PC Magazine</h4>
          <p>
            Driver Booster PROs enkle kernefunktionalitet er blevet endnu mere attraktiv takket være inkluderingen af flere licenser til en virkelig økonomisk pris, samt en brugerdefineret grænseflade, der gør et godt stykke arbejde ved at vise specifikke informationer om din hardware. Konkurrenterne Ashampoo Driver Updater og SlimWare Utilities DriverUpdate har tilsvarende funktioner, men IObit Driver Booster PRO fører klart i kategorien."
          </p>
        </div>
        <div class="active">
          <h4>Harold Barr</h4>
          <p>
            Sikke en overraskelse at modtage Driver Booster fra IObit. Så snart det var installeret begyndte
            opdateringerne. Jeg anede ikke jeg havde så mange programmer på computeren og slet ikke at de
            behøvede opgraderinger. Da opdateringerne afsluttede, var det som om, min PC havde fået en
            komplet makeover. Fantastisk!
          </p>
        </div>
        <div>
          <h4>Hishaam Salasa</h4>
          <p>
            Virkelig den bedste driver updater der er på markedet. Det er brugervenligt, har en simpel
            brugerflade der er nem at bruge og det klarer arbejdet bedre end nogen applikation, jeg tidligere
            har brugt. Dette program er fem stjerner værd. Varmt anbefalet.
          </p>
        </div>
        <div>
          <h4>Carlos Alexandre Veríssimo</h4>
          <p>
            Det hjalp med at løse hastighedsproblemer på min gamer laptop uden at nedbryde det. Nogle gange, når jeg har forsøgt at opdatere mine drev, er computeren brudt sammen og jeg var nødt til at formatere min computer for at gendanne funktioner, men dette skete ikke med DB7. Det er nemt at bruge og downloader hurtigt, det er det bedste værktøj på markedet hidtil!
          </p>
        </div>
      </div>
      <a class="next" href="javascript: nextFun();"></a>
      <a class="prev" href="javascript: prevFun();"></a>
    </div>
  </div>
  <!-- review end -->

  <!-- awards start -->
  <div class="awards">
    <div class="wrapper">
      <h2>Editor’s valg</h2>
      <img src="<?php echo getStaticUrl('images/award.png')?>" alt=""/>
    </div>
  </div>
  <!-- awards end -->

  <!-- comparison start -->
  <div class="comparison wrapper">
    <table>
      <thead>
        <tr>
          <th class="text" colspan="2">Hvilke fordele kan PRO-versionen give dig?</th>
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
          <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon01.png')?>" alt=""></td>
          <td class="virtue">Skanner automatisk og registrerer forældede, manglende og fejlbehæftede drivere</td>
          <td class="itema"><i class="all-icons gray">√</i></td>
          <td class="itemb"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon02.png')?>" alt=""></td>
          <td class="virtue">
            Låser Windows hastighedsbegrænsning op forhurtigere driveropdateringer <sup><em>FORBEDRET</em></sup>
          </td>
          <td class="itema"><i class="all-icons gray">√</i></td>
          <td class="itemb"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon03.png')?>" alt=""></td>
          <td class="virtue">
            Større database for atopdatere flere forældede og sjældne drivere <sup><em>FORBEDRET</em></sup>
          </td>
          <td class="itema"><i class="all-icons">√</i></td>
          <td class="itemb"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon04.png')?>" alt=""></td>
          <td class="virtue">
            Automatisk download oginstallation når du ikke bruger pc'en <sup><em>FORBEDRET</em></sup>
          </td>
          <td class="itema"><i class="all-icons">√</i></td>
          <td class="itemb"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon05.png')?>" alt=""></td>
          <td class="virtue">
            Automatisk backup afalle drivere til sikkerhedsgendannelse <sup><em>FORBEDRET</em></sup>
          </td>
          <td class="itema"><i class="all-icons">√</i></td>
          <td class="itemb"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon06.png')?>" alt=""></td>
          <td class="virtue">
            Sikker opdatering KUNmed certificerede WHQL-drivere <sup><em>FORBEDRET</em></sup>
          </td>
          <td class="itema"><i class="all-icons">√</i></td>
          <td class="itemb"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon07.png')?>" alt=""></td>
          <td class="virtue">
            Prioritet for at få den nyeste Game Ready Driver <sup><em>FORBEDRET</em></sup>
          </td>
          <td class="itema"><i class="all-icons">√</i></td>
          <td class="itemb"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon08.png')?>" alt=""></td>
          <td class="virtue">
            Nødvendige komponenter til gnidningsløse spil <sup><em>FORBEDRET</em></sup>
          </td>
          <td class="itema"><i class="all-icons">√</i></td>
          <td class="itemb"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon09.png')?>" alt=""></td>
          <td class="virtue">Automatiske opdateringer til den nyeste version</td>
          <td class="itema"><i class="all-icons">√</i></td>
          <td class="itemb"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon10.png')?>" alt=""></td>
          <td class="virtue">Gratis teknisk support 24/7</td>
          <td class="itema"><i class="all-icons">√</i></td>
          <td class="itemb"><i class="all-icons red">√</i></td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- comparison end -->

  <!-- bottombuy start -->
  <div class="bottombuy wrapper clearfix">
    <h2>Du behøver ikke længere spilde tiden på at løse PC-problemer!</h2>
    <div class="left fl"><img src="<?php echo getStaticUrl('images/bottombuy-db.png')?>" alt=""/></div>
    <div class="right price fr">
      <p><strong>169 kr.</strong> <del>1836 kr.</del></p>
      <a class="buybtn"
         href="https://www.iobit.com/buy.php?product=dk-db73pcsdpf169&ref=dk_db7bundle169xmasrc1912<?php echo $refStr;?>&refs=dk_purchase_db"
         onclick="ga('send', 'event', 'dbbuy', 'buy', 'db169xmasrc1912-dk');">
        Køb nu
      </a>
      <p>Gælder kun i dag, skynd dig!</p>
    </div>
  </div>
  <!-- bottombuy end -->

  <!-- footer start -->
  <div class="footer">
    <div class="wrapper">
      <div class="service clearfix">
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dt>
          <dd>
            <h3>Tilfredshedsgaranti</h3>
            <p>60-dages pengene-tilbage-garanti</p>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/godaddy.png')?>" alt=""></dt>
          <dd>
            <h3>Betalingssikkerhed</h3>
            <p>Din betaling er 100% sikker</p>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/cart.png')?>" alt=""></dt>
          <dd>
            <h3>Hurtig aktivering</h3>
            <p>Du vil modtage en aktiveringskode<br> hurtigt efter betalingen</p>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/service.png')?>" alt=""></dt>
          <dd>
            <h3>Kundeservice</h3>
            <p>Gratis 24/7 teknisk support ved behov</p>
          </dd>
        </dl>
      </div>
      <dl class="note">
        <dt>Note:</dt>
        <dd>* Tilbud som dette kan fra tid til anden ændres uden varsel efter vores skøn.</dd>
        <dd>* Understøt IObit Uninstaller PRO, Smart Defrag PRO og Protected Folder i 1 år, 1 PC</dd>
      </dl>
      <p class="copyright">Copyright 2005 - <?php echo date('Y')?> IObit.Alle rettigheder forbeholdes</p>
    </div>
  </div>
  <!-- footer end -->

  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>