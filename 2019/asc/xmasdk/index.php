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
    
    $buyNum = ceil(microtime_float()*1000/20000) - 69041325;
    $buyNum = number_format($buyNum);

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
  $name=explode(' ',trim(get_line('data/maysale.txt',rand(1,30))));
  $firstName=preg_replace("/(.*)(.{3})/",'${1}'.str_repeat('*',3),$name[0]);
  $lastName=preg_replace("/(.*)(.{3})/",'${1}'.str_repeat('*',3),$name[1]);
  $viewNum=rand(60,88);

  if ($_GET['action'] == 'getPacks') {
    $date = $_GET['d'];
    $time = time();
    $c_name = 'dkascxmax2019' . $date;
    if (!isset($_COOKIE[$c_name])) {
      setcookie($c_name, 254, $time + 3600 * 24 *2);
      $packsNum=254;
    } else {
      if($packsNum>=298){
        $packsNum=298;
      }else{
        $packsNum = $_COOKIE[$c_name] + 1;
      }
      setcookie($c_name, $packsNum, $time + 3600 * 24 * 2);
    }
    echo json_encode(array('packsNum'=>$packsNum,'firstName'=>$firstName,'lastName'=>$lastName,'saleType'=>$saleType,'viewNum'=>$viewNum));
    exit();
  }
  $refStr=empty($_GET['st'])?'':('-'.$_GET['st']);
  $refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
  $refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
  $refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);
if(in_array($_GET['pop'],array('x_asc','xi_asc','xb_asc'))){
  $refStr.='-'.$_GET['pop'];
}
if(in_array($_GET['pop'],array('x_asc','xr_sdpasc','xr_dbpasc'))){
  $refStr.='-'.$_GET['pop'];
}
if(in_array($_GET['type'],array('pro','giveawayexp'))){
  $refStr.='-'.$_GET['type'];
}
$refStr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-l'.$_GET['litype'].'-e'.$_GET['expd'];
?>
<!DOCTYPE html>
<html lang="dk">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Spar op til 86% på Advanced SystemCare PRO - IObit</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700,800&display=swap" rel="stylesheet">
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>

<!-- banner start -->
<div class="banner">
  <div class="wrapper clearfix">
    <a class="logo" href="https://www.iobit.com/dk/index.php" target="_blank">IObit</a>
    <h1>Det helt rigtige til 2021!</h1>
    <div class="banlist">
      <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="Advanced SystemCare PRO"/>
      <div class="price">
        <p><strong><big>199</big> kr.</strong> Normalpris <del> 449 kr.</del></p>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=dk-asc143pc199&&ref=dk_asc1433pc199sale202001<?php echo $refStr;?>&refs=dk_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc3pc199xmas1912-dk')">
          Køb nu
        </a>
      </div>
      <ul class="txtlist">
        <li><i class="all-icons"></i> Spar 250 kr.</li>
        <li><i class="all-icons"></i> Advanced SystemCare PRO <del>449 kr.</del></li>
      </ul>
      <div class="discount">
        <b>-56% rabat</b>
        <p>1 år</p>
      </div>
    </div>

    <div class="banlist big">
      <div class="gift"><i class="all-icons"></i> <b class="reduce"><span class="first"></span></b> allerede solgt</div>
      <img src="<?php echo getStaticUrl('images/asc-gift-box.png')?>" alt=""/>
      <div class="price">
        <p><strong><big>189</big> kr.</strong> Normalpris <del>1.606 kr.</del></p>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=dk-asc143pciusdpf189&ref=dk_asc143pfsdiu189sale202001<?php echo $refStr;?>&refs=dk_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascbun189xmas1912-dk')">
          Køb nu
        </a>
      </div>
      <ul class="txtlist">
        <li><i class="all-icons"></i>Spar 1.417 kr.</li>
        <li><i class="all-icons"></i> Advanced SystemCare PRO <del>449 kr.</del></li>
        <li><i class="all-icons red"></i> Smart Defrag PRO <del>379 kr.</del></li>
        <li><i class="all-icons red"></i> Protected Folder <del>399 kr.</del></li>
        <li><i class="all-icons red"></i> IObit Uninstaller 10 PRO <del>379 kr.</del></li>
      </ul>
      <div class="discount">
        <b>88% rabat</b>
        <p>1 år</p>
      </div>
    </div> 
  </div>
</div>
<!-- banner end -->

<!-- intro start -->
<div class="intro">
  <div class="wrapper">
    <h2>Den mest avancerede løsning til at optimere din PC til det maksimale!</h2>
    <div class="intro-box">
      <img src="<?php echo getStaticUrl('images/screen01.png')?>" alt=""/>
      <dl class="one">
        <dt><img src="<?php echo getStaticUrl('images/intro-01.png')?>" alt=""/></dt>
        <dd>
          <h3>100% beskyttelse</h3>
          <p>
            Det beskytter dine private data mod uvedkommende, forhindrer ethvert forsøg på ondsindede indtrængere. Det giver dobbelt så meget beskyttelse som den gratis version.
          </p>
        </dd>
      </dl>
      <dl class="two">
        <dt><img src="<?php echo getStaticUrl('images/intro-02.png')?>" alt=""/></dt>
        <dd>
          <h3>200%* hurtigere</h3>
          <p>
            Rydder for alle unødvendige filer og optimerer CPU’en og hukommelse, som forøger booting-hastigheden og dit system med op til 200%.
          </p>
        </dd>
      </dl>
      <dl class="three">
        <dt><img src="<?php echo getStaticUrl('images/intro-03.png')?>" alt=""/></dt>
        <dd>
          <h3>300%* hurtigere</h3>
          <p>
            Forøg hastigheden af downloads, spil, internet browsing og andre spilplatformer såsom YouTube med op til 300%.
          </p>
        </dd>
      </dl>
      <dl class="four">
        <dt><img src="<?php echo getStaticUrl('images/intro-04.png')?>" alt=""/></dt>
        <dd>
          <h3>Grundigere rengøring med AI</h3>
          <p>
          Fjerner grundigt ubrugelige eller ugyldige poster i databasen og frigør diskplads og forbedrer din PC’s ydeevne betydeligt med den nye AI-tilstand. 
          </p>
        </dd>
      </dl>
      <div class="scan"></div>
      <a class="more" href="javascript: void(0);">For mere information klik her></a>
    </div>
  </div>
</div>
<!-- intro end -->

<!-- giftbox start -->
<div class="giftbox">
  <div class="wrapper clearfix">
    <h2>Specialgaver kun til 2021</h2>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/gift-pf.png')?>" alt="Protected Folder"/></dt>
      <dd>
        <h3>Protected Folder</h3>
        <strong>0 kr.</strong> <del>399 kr.</del>
        <p>Filer og mapper i Windows beskyttes med et kodeord.</p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/gift-sd.png')?>" alt="Smart Defrag PRO"/></dt>
      <dd>
        <h3>Smart Defrag PRO</h3>
        <strong>0 kr.</strong> <del>379 kr.</del>
        <p>Defragmenterer harddiske og forbedrer din PC’s ydeevne. </p>
      </dd>
    </dl>
    <dl class="last">
      <dt><img src="<?php echo getStaticUrl('images/gift-amc.png')?>" alt="AMC Security PRO"/></dt>
      <dd>
        <h3>IObit Uninstaller 10 PRO </h3>
        <strong>0 kr.</strong> <del>379 kr.</del>
        <p>Slet uønskede Windows programmer, plugins og apps permanent med et blot klik!</p>
      </dd>
    </dl>
    <div class="price">
      <p><strong><big>189</big> kr.</strong> Normalpris <del>1.606 kr.</del></p>
      <a class="buybtn"
         href="https://www.iobit.com/buy.php?product=dk-asc143pciusdpf189&ref=dk_asc143pfsdiu189sale202001<?php echo $refStr;?>&refs=dk_purchase_asc"
         onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascbun189xmas1912-dk')">
        Køb nu
      </a>
    </div>
    <ul class="payment clearfix">
      <li class="first">
        <span>Risikofri prøveperiode - 60 dages tilfredshedsgaranti eller pengene retur</span>
        <img src="<?php echo getStaticUrl('images/moneyback-small.png')?>" alt=""/>
      </li>
      <li>
        <span>Vi tager imod:</span>
        <img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/>
      </li>
    </ul>
  </div>
</div>
<!-- giftbox end -->

<!-- feature start -->
<div class="feature wrapper clearfix">
  <h2>Verdensomspændende media-priser og kundeanmeldelelser</h2>
  <p>Vi bestræber os på at tilfredsstille alle kunder, hvorend du befinder dig.</p>
  <dl>
    <dt><img src="<?php echo getStaticUrl('images/feature-01.png')?>" alt=""/></dt>
    <dd>
      <h3>200+</h3>
      <p>Populær i flere end 200 landområder i verdenen</p>
    </dd>
  </dl>
  <dl class="two">
    <dt><img src="<?php echo getStaticUrl('images/feature-02.png')?>" alt=""/></dt>
    <dd>
      <h3>1.000 +</h3>
      <p>Anmeldt og anbefalet af flere end 1000 medier</p>
    </dd>
  </dl>
  <dl class="three">
    <dt><img src="<?php echo getStaticUrl('images/feature-03.png')?>" alt=""/></dt>
    <dd>
      <h3>250.000.000+ </h3>
      <p>Over 250 millioner brugere verdenen over</p>
    </dd>
  </dl>
  <dl class="four">
    <dt><img src="<?php echo getStaticUrl('images/feature-04.png')?>" alt=""/></dt>
    <dd>
      <h3>1.18 billion</h3>
      <p>Vores brugere sparer 1,18 mia. euro hvert år</p>
    </dd>
  </dl>
</div>
<!-- feature end -->

<!-- review start -->
<div class="review">
  <div id="dg-container" class="dg-container wrapper">
    <div class="nav">
      <span class="dg-prev"></span>
      <span class="dg-next"></span>
    </div>
    <div class="content dg-wrapper">
      <dl class="reviews active">
        <dt><h2><span>Medieanmeldelser</span></h2></dt>
        <dd>
          <p>"Der er ikke noget værre end en computer, der driller så meget, at det forhindrer dig i at arbejde eller i at spille. Avanceret SystemCare har til formål at afhjælpe hvad som helst, der måtte være galt med din computer - ikke kun ved at rydde op, fjerne uønskede filer, malware og ugyldige registreringsposter, men også ved at give din computer et løft for at optimere din pc-oplevelse."</p>
          <cite>Cnet</cite>
        </dd>
      </dl>
      <dl class="reviews">
        <dt><h2><span>Brugeranmeldelser</span></h2></dt>
        <dd>
          <p>Jeg har prøvet diverse programmer over tiden som har lovet at holde min computer problemfri. Jeg vendte mig mod ASC for år tilbage ved at bruge den gratis udgave først. Jeg fandt, at jeg ikke længere oplevede småproblemer og opgraderede derfor til den betalte version og har aldrig set mig tilbage igen. Advanced SystemCare Pro er det eneste værktøj jeg vil anbefale baseret på mine oplevelser. Jeg bruger også IObit Uninstaller, Smart Defrag og Driver Booster gør virkelig en forskel.</p>
          <cite>Richard Beavers</cite>
        </dd>
      </dl>
      <dl class="reviews">
        <dt><h2><span>Brugeranmeldelser</span></h2></dt>
        <dd>
          <p>Advanced SystemCare er et skønt program. Jeg har brugt dette i mange år og det virker helt uden problemer. De forbedrer altid deres produkter som bare bliver bedre med årene. Jeg bruger mange af deres produkter og alt virker som det skal.</p>
          <cite>Patsy Clark</cite>
        </dd>
      </dl>
      <dl class="reviews">
        <dt><h2><span>Brugeranmeldelser</span></h2></dt>
        <dd>
          <p>Jeg har aldrig fundet et bedre vedligeholdelsesprogram til computeren eller et bedre sikkerhedsprogram end Advanced SystemCare. Siden jeg har købt det, har jeg aldrig haft problemer med viruser, phishing, sorte skærme eller noget som helst andet man kan komme i tanke om, den bedste investering jeg har gjort mig, når det kommer til computere, tak ASC for at gøre min computeroplevelse så meget skønnere.</p>
          <cite>Danny R. Sheets</cite>
        </dd>
      </dl>
      <dl class="reviews">
        <dt><h2><span>Brugeranmeldelser</span></h2></dt>
        <dd>
          <p>Jeg har brugt Advanced SystemCare Pro i lang tid og den seneste version 14 er endnu bedre end version 13. Det identificerer og retter problemer hurtigt og har så mange ekstra funktioner, som du kan bruge til at holde din computer stabil. Kan kun anbefales varmt.</p>
          <cite>Tony Fisher</cite>
        </dd>
      </dl>
      <dl class="reviews">
        <dt><h2><span>Brugeranmeldelser</span></h2></dt>
        <dd>
          <p>Den nye ASC 14 er et must-have for alle computer-brugere. Dets overskuelige og intuitive interface gør det nemt at bruge for både nye og gamle brugere. Mange effektive værktøjer holder din PC i topform. Godt gået IObit for at have samlet så mange skønne værktøjer på et sted.</p>
          <cite>Daniel Sanders</cite>
        </dd>
      </dl>
      <dl class="reviews">
        <dt><h2><span>Brugeranmeldelser</span></h2></dt>
        <dd>
          <p>Jeg elsker at bruge Avanced SystemCare 14. Det er hurtigt, det rydder for private dataspor, junkfiler og registrerede fragmenter. jeg kan især godt lide pop-up vinduet som beder om adgang til følsomme data. Den første gang en app forsøger at få adgang til dine følsomme filer, åbner et vindue med mulighed for enten at tillade eller forhindre adgang. Når adgang er blevet givet til en app, åbnes vinduet ikke igen for denne app. Jeg ved, at mine følsomme filer er opbevaret sikkert.</p>
          <cite>Richard Preston</cite>
        </dd>
      </dl>
    </div>
    <ul>
      <li class="first" data-num="4">
        <img src="<?php echo getStaticUrl('images/tony-fisher.png')?>" alt="Tony Fisher">
      </li>
      <li class="two" data-num="5">
        <img src="<?php echo getStaticUrl('images/daniel-sanders.png')?>" alt="Daniel Sanders">
      </li>
      <li class="three" data-num="6">
        <img src="<?php echo getStaticUrl('images/richard-preston.png')?>" alt="Richard Preston">
      </li>
      <li class="active" data-num="0">
        <img src="<?php echo getStaticUrl('images/cnet.png')?>" alt="Cnet">
      </li>
      <li class="four" data-num="1">
        <img src="<?php echo getStaticUrl('images/richard-beavers.png')?>" alt="Richard Beavers">
      </li>
      <li class="five" data-num="2">
        <img src="<?php echo getStaticUrl('images/patsy-clark.png')?>" alt="Patsy Clark">
      </li>
      <li class="six" data-num="3">
        <img src="<?php echo getStaticUrl('images/danny-r-sheets.png')?>" alt="Danny R. Sheets">
      </li>
    </ul>
  </div>
</div>
<!-- review end -->

<!-- comparison start -->
<div class="comparison" id="compare">
  <div class="wrapper">
    <table>
      <thead>
      <tr>
        <th class="text">
          Sammenligningen mellem gratisversionen og pro-versionen kan måske hjælpe dig med at træffe den rigtige beslutning</th>
        <th class="space"></th>
        <th class="itema">
          <div class="free">Advanced SystemCare <br> FREE</div>
        </th>
        <th class="space two"></th>
        <th class="itemb">
          <div class="pro">Advanced SystemCare <br> PRO</div>
        </th>
      </tr>
      </thead>
      <tbody>
        <tr>
          <td class="virtue">	Basal PC rensning og optimering</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons gray">√</i></td>
          <td class="space two"></td>
          <td class="itemb"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="virtue">	Overvåg systemets tilstand i realtid</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons gray">√</i></td>
          <td class="space two"></td>
          <td class="itemb"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="virtue">	Hold dine personlige data fra upålidelige programmer</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons">√</i></td>
          <td class="space two"></td>
          <td class="itemb"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="virtue">	Ingen kan stjæle dine digitale fingeraftryk for at spore din web browsing </td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons">√</i></td>
          <td class="space two"></td>
          <td class="itemb"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="virtue">	Op til 300% hurtigere internet med Internet Booster</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons">√</i></td>
          <td class="space two"></td>
          <td class="itemb"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="virtue">Op til 200% hurtigere opstart af PC’en</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons">√</i></td>
          <td class="space two"></td>
          <td class="itemb"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="virtue">	Dybdegående rensning af registreringsdatabasen for at forhindre systemnedbrud</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons">√</i></td>
          <td class="space two"></td>
          <td class="itemb"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="virtue">Defragmentér data på harddisken for at forbedre PC’ens ydeevne</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons">√</i></td>
          <td class="space two"></td>
          <td class="itemb"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="virtue">	Proaktiv opdagelse og fjernelse af sikkerhedshuller i realtid</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons">√</i></td>
          <td class="space two"></td>
          <td class="itemb"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="virtue">Fuld PC beskyttelse for opdagelse og fjernelse af de dybeste infektioner</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons">√</i></td>
          <td class="space two"></td>
          <td class="itemb"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="virtue">Rens automatisk RAM for at stoppe ubrugte programmer og processoer</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons">√</i></td>
          <td class="space two"></td>
          <td class="itemb"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="virtue">	Smartere AI-tilstand som skanner intelligent og premium PC-rengøring og optimering</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons">√</i></td>
          <td class="space two"></td>
          <td class="itemb"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="virtue">	Opdatér automatiskt til den seneste version</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons">√</i></td>
          <td class="space two"></td>
          <td class="itemb"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="virtue">	Gratis 24/7 teknisk support efter behov</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons">√</i></td>
          <td class="space two"></td>
          <td class="itemb"><i class="all-icons red">√</i></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
<!-- comparison end -->

<!-- service start -->
<div class="service wrapper clearfix">
  <dl>
    <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
    <dd>
      <h3>Tilfredshedsgaranti</h3>
      <p>60-dages pengene-tilbage-garanti</p>
    </dd>
  </dl>
  <dl class="two">
    <dt><img src="<?php echo getStaticUrl('images/verified.png')?>" alt=""/></dt>
    <dd>
      <h3>Betalingssikkerhed</h3>
      <p>Din betaling er 100% sikker</p>
    </dd>
  </dl>
  <dl class="three">
    <dt><img src="<?php echo getStaticUrl('images/cart.png')?>" alt=""/></dt>
    <dd>
      <h3>Hurtig aktivering</h3>
      <p>Du vil modtage en aktiveringskode hurtigt efter betalingen</p>
    </dd>
  </dl>
  <dl class="four">
    <dt><img src="<?php echo getStaticUrl('images/servizio.png')?>" alt=""/></dt>
    <dd>
      <h3>Kundeservice</h3>
      <p>Gratis 24/7 teknisk support ved behov</p>
    </dd>
  </dl>
</div>
<!-- service end -->

<!-- footer start -->
<div class="footer">
  <div class="wrapper">
    <dl>
      <dt>Bemærk:</dt>
      <dd>
        * .Data kan variere baseret på forskellige systemer eller computere.
      </dd>
      <dd>
        *. Tilbud som dette kan fra tid til anden ændres uden varsel efter vores skøn.
      </dd>
      <dd>
        *. Smart Defrag PRO , IObit Uninstaller PRO og Protected Folder til 1 år / 1 PC.
      </dd>
    </dl>
    <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p>
  </div>
</div>
<!-- footer end -->

<!-- floatlayer start -->
<div id="floatlayer" class="floatlayer">
  <div class="wrapper clearfix">
    <div class="left fl">
      <img src="<?php echo getStaticUrl('images/asc-gift-box.png')?>" alt="Advanced SystemCare 12 PRO"/>
<!--      <span class="cap"></span>-->
    </div>
    <h2 class="fl">Giv din gamle PC den perfekte gave!</h2>
    <div class="price fr">
      <p><strong><big>189</big> kr.</strong> Normalt: <del>1.606 kr.</del></p>
      <a class="buybtn"
         href="https://www.iobit.com/buy.php?product=dk-asc143pciusdpf189&ref=dk_asc143pfsdiu189sale202001<?php echo $refStr;?>&refs=dk_purchase_asc"
         onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascbun189xmas1912-dk')">
        Køb nu – spar 86%
      </a>
    </div>
  </div>
</div>
<!-- floatlayer end -->

<!-- popbox strat -->
<div class="popbox" id="popbox">
  <div class="clearfix">
    <img class="fl" src="<?php echo getStaticUrl('images/pop-user.png')?>" alt=""/>
    <div class="fl right">
       <h2><span id="first"><?php echo $firstName;?></span> <span id="last"><?php echo $lastName;?></span></h2>
      <p>Har købt til 3 PC’er/ 1 år</p>
    </div>
  </div>
  <p class="view"><span class="viewNum"><?php echo $viewNum;?></span> besøgende på denne side</p>
  <i class="all-icons close">×</i>
</div>
<!-- popbox end -->
  <script>refStr="<?php echo $refStr;?>";</script>
  <script src="<?php echo $pRootUrl;?>tpl/js/TweenMax.min.js"></script>
  <script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>