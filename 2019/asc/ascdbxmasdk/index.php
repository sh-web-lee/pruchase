<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';

$viewNum=rand(98,165);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}
if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'ascdbxmasdk_p' . $date;
  $c_name_t='ascdbxmasdk_t' . $date;
  $isInit=$_GET['isInit'];
    if ($_COOKIE[$c_name]===null) {
        $totalNum = $packsNum=rand(88,99);
        setcookie($c_name, $packsNum, time() + 3600 * 24);
        setcookie($c_name_t,$totalNum, time() + 3600 * 24);
    } else {
        if (intval($_COOKIE[$c_name]) <= 3) {
            $packsNum = 3;
            setcookie($c_name, $packsNum, time() + 3600 * 24);
        } else {
            $packsNum = $_COOKIE[$c_name] - 1;
            setcookie($c_name, $packsNum, time() + 3600 * 24);
        }
    }
    echo json_encode(array('packsNum'=>$packsNum));
    exit();
}

$refStr=empty($_GET['st'])?'':('-'.$_GET['st']);
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);
$refStr.=empty($_GET['ver'])?'':('-'.$_GET['ver']);
$refStr.=empty($_GET['pop'])?'':('-'.$_GET['pop']);
$refStr.=empty($_GET['r'])?'':('-'.$_GET['r']);
if(in_array($_GET['type'],array('pro','giveawayexp'))){
    $refStr.='-'.$_GET['type'];
}
$refStr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-l'.$_GET['litype'].'-e'.$_GET['expd'];
$isNewUser=false;
if(preg_match('/^13\./',$_GET['ver'])){
  $isNewUser=true;
}

$packsNum=49;
$transData=json_decode(base64_decode($_GET['num']));
if(!empty($transData)){
  if(@intval($transData->seats)){
    $packsNum=@intval($transData->seats);
  }
}
?>
<!DOCTYPE html>
<html lang="dk">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Eksklusive 80% rabat på Advanced SystemCare 14 PRO & Driver Booster 8 PRO </title>
<meta name="Copyright" content="IObit">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700,900i&display=swap" rel="stylesheet">
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
  <!-- bann er start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com/dk/index.php" target="_blank">IObit</a>
      <h1 class="title">Natal SUPER OFFERTA Mini prezzi, maxi risparmio!</h1>
      <div class="clearfix">
        <div class="imgbox fl ribbon">
          <img src="<?php echo getStaticUrl('images/asc-db-box.png')?>" alt=""/>
          <div class="discount">75% di SCONTO</div>
        </div>
        <div class="msgbox fl">
          <div class="change-title"><h2>80% Rabat til de Første 999 kunder</h2></div>
          <div class="numbox">
            <div id="flip" class="flipNum">
            
              <div class="numwrap">
                <div class="listbox">
                  <span class="list">
                    <b>0</b><b>1</b><b>2</b><b>3</b><b>4</b><b>5</b><b>6</b><b>7</b><b>8</b><b>9</b>
                  </span>
                </div>
              </div>
              <div class="numwrap">
                <div class="listbox">
                  <span class="list">
                    <b>0</b><b>1</b><b>2</b><b>3</b><b>4</b><b>5</b><b>6</b><b>7</b><b>8</b><b>9</b>
                  </span>
                </div>          
              </div>
              <div class="numwrap last">
                <div class="listbox">
                  <span class="list">
                    <b>0</b><b>1</b><b>2</b><b>3</b><b>4</b><b>5</b><b>6</b><b>7</b><b>8</b><b>9</b>
                  </span>
                </div> 
              </div>
            </div>
            <span> Stk. tilbage nu</span>
          </div>
          <ul class="price">
            <li class="first">
              <p><strong class="change-price"><big>229</big>kr.</strong> <del>1.128 kr.</del></p>
              <p>1 anno / 3 PC</p>
            </li>
            <li>
              <a class="buybtn exbtn"
                 href="https://www.iobit.com/buy.php?product=dk-ascdb3pc229&ref=dk_ascdbxmas2012<?php echo $refStr?>&refs=dk_purchase_asc" 
                 onclick="ga('send', 'event', 'ascdbbuy', 'buy', 'ascdbxmas2012-dk')">
                 Aktiver nu
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="try">
    Prøv det RISIKOFRIT – aktiver nu og hold din PC i form, 60 dages tilfredshedsgaranti eller pengene retur
    </div>
  </div>
  <!-- banner end -->

  <!-- intro start -->
  <div class="intro">
    <div class="wrapper">
      <h2>Super bundle - Que obtiendrez-vous ?</h2>
      <div class="computer">
        <img class="screen asc" src="<?php echo getStaticUrl('images/asc-screen.png')?>" alt=""/>
        <img class="screen db" src="<?php echo getStaticUrl('images/db-screen.png')?>" alt=""/>
        <dl class="asc">
          <dt>
            <h3>
              <span>Advanced SystemCare 14 PRO</span>
              <img src="<?php echo getStaticUrl('images/asc-icon.png')?>" alt=""/>
            </h3>
          </dt>
          <dd>Alt-i-et systemoptimering til automatisk at rense din pc og op til 200% hurtigere.</dd>
        </dl>
        <dl class="db">
          <dt>
            <h3>
              <img src="<?php echo getStaticUrl('images/db-icon.png')?>" alt=""/>
              <span>Driver Booster 8 PRO</span>
            </h3>
          </dt>
          <dd>Brugervenlig driveropdatering til at downloade drivere med en maksimal hastighed og installere dem automatisk </dd>
        </dl>
        <span class="line line03"></span>
      </div>
    </div>
  </div>
  <!-- intro end -->

  <!-- feature start -->
  <div class="feature">
    <h2>Perché PRO vale la pena?</h2>
    <div class="asc wrapper clearfix">
      <div class="imgbox fl">
        <img src="<?php echo getStaticUrl('images/asc-big-screen.png')?>" alt=""/>
        <img class="besom" src="<?php echo getStaticUrl('images/besom.png')?>" alt=""/>
      </div>
      <div class="msgbox fr">
      <dl>
          <dt><b>Smartere</b> <span>kun i PRO</span></dt>
          <dd>
          Reducer Windows nedbrud og fejlmeddelelser fuldstændigt med ny AI-tilstand
          </dd>
        </dl>
      <dl>
          <dt><b>200%* Hurtigere PC</b> <span>kun i PRO</span></dt>
          <dd>
          Ryd filer og optimer systemet automatisk, så din PC opererer hurtigere.
          </dd>
        </dl>
        <dl>
          <dt><b>300%* Hurtigere Internet</b> <span>kun i PRO</span></dt>
          <dd>
          Hurtigere Internet-download, surfing, spil, YouTube-streaming.
          </dd>
        </dl>
        <dl>
          <dt><b>Beskyttelse af private data</b> <span>kun i PRO</span></dt>
          <dd>
          Bloker uautoriseret adgang til dine kontakter, email og andre følsomme data.
          </dd>
        </dl>
        <dl>
          <dt><b>Sikker Browsing</b> <span>kun i PRO</span></dt>
          <dd>
          Forhindr uvedkommende i at se hvad du læser, streamer og køber.
          </dd>
        </dl>
        
        
      </div>
    </div>
    <div class="line-center">

    </div>
    <div class="db wrapper clearfix">
      <div class="msgbox fl">
        <dl>
          <dt><b> 30% større database</b> <span>kun i PRO</span></dt>
          <dd>Skanner og opdaterer 4,500,000+ drev automatisk.</dd>
        </dl>
        <dl>
          <dt><b>Ubegrænset hastighed  </b> <span>kun i PRO</span></dt>
          <dd>Bryd hastighedsgrænsen og download drev 100%* hurtigere.</dd>
        </dl>
        <dl>
          <dt><b>Bedre Gaming</b> <span>kun i PRO</span></dt>
          <dd>Anbefal spilkomponenter som accelerer spilhastigheden. </dd>
        </dl>
        <dl>
          <dt><b>Ret enhedsfejl  </b> <span>kun i PRO</span></dt>
          <dd>Reducer lyd-, internet- og andre hardware-problemer.</dd>
        </dl>
        <dl>
          <dt><b>Offline Driver Update  </b> <span>kun i PRO</span></dt>
          <dd>Opdater drev uden internetforbindelse</dd>
        </dl>
      </div>
      <div class="imgbox fr">
        <img src="<?php echo getStaticUrl('images/db-big-screen.png')?>" alt=""/>
        <img class="forbid" src="<?php echo getStaticUrl('images/forbid.png')?>" alt=""/>
      </div>
    </div>
  </div>
  <!-- feature end -->

  <!-- centbuy start -->
  <div class="centbuy">
    <div class="wrapper">
      <h2>Il prezzo più basso di sempre!</h2>
      <div class="clearfix">
        <div class="imgbox fl">
          <img src="<?php echo getStaticUrl('images/center-box.png')?>" alt=""/>
          <span class="original"><em>449 kr.</em></span>
          <span class="original last"><em>679 kr.</em></span>
        </div>
        <div class="chart fl">
          <div class="clist one">
            <h3 class="cost"><span>50%</span> RABAT</h3>
            <span class="month">Thanksgiving</span>
          </div>
          <div class="clist two">
            <h3 class="cost"><span>80%</span> RABAT</h3>
            <span class="month">I dag</span>
          </div>
          <div class="clist three">
            <h3 class="cost"><span>60%</span> RABAT</h3>
            <span class="month">Nytårsaften</span>
          </div>
        </div>
      </div>
      <div class="price">
        <p><strong class="change-price">  <big>229</big> kr.</strong> <del>1.128 kr.</del></p>
        <a class="buybtn exbtn"
           href="https://www.iobit.com/buy.php?product=dk-ascdb3pc229&ref=dk_ascdbxmas2012<?php echo $refStr?>&refs=dk_purchase_asc" 
            onclick="ga('send', 'event', 'ascdbbuy', 'buy', 'ascdbxmas2012-dk')">
             Aktiver nu
        </a>
        <p>  1 års abonnemnet / 3 PC’er</p>
      </div>
    </div>
  </div>
  <!-- centbuy end -->

  <!-- review start -->
  <div class="review">
    <div class="wrapper">
      <h2>Hvad andre siger</h2>
      <div id="dg-container" class="dg-container">
        <div class="nav">
          <span class="dg-prev"></span>
          <span class="dg-next"></span>
        </div>
        <div class="content dg-wrapper">
          <dl class="reviews active">
            <dt><h3><span>Medieanmeldelser</span></h3></dt>
            <dd>
              <p class="on">
              "Der er ikke noget værre end en computer, der driller så meget, at det forhindrer dig i at arbejde  eller spille. Avanceret SystemCare har til formål at afhjælpe hvad som helst, der måtte være galt med din computer ikke kun ved at rydde op, fjerne uønskede filer, malware og ugyldige registreringsposter, men også ved at give din computer et løft for at optimere din pc-oplevelse."
              </p>
              <cite>Cnet</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h3><span>Brugeranmeldelser</span></h3></dt>
            <dd>
              <p>
              "Jeg har brugt ASC i årevis nu. Jeg har for nyligt testet den seneste version V14. Og det er uden sammenligning den mest omfattende version til dato. IObit fortsætter med at forbedre deres produkter og teknologi. Med flere funktioner og nemmere navigation, som løser dine problemer, har jeg ikke brug for at se mig om efter andre programmer."
              </p>
              <cite>Brendon O\'Rourke</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h3><span>Brugeranmeldelser</span></h3></dt>
            <dd>
              <p>
              "Jeg har købt mange softwareprogrammer som accelererer og retter problemer på din PC. Men desværre har de fleste af dem ikke hjulpet spor eller gjort nogen synlig forskel indtil jeg forsøgte mig med Advanced System Care 14. Jeg er helt vild med de mange funktioner, som løser ethvert problem. Det er utroligt, hvor meget hurtigere min PC er nu efter den første skanning og korrektioner. Helt klart det bedste produkt jeg er stødt på. "
              </p>
              <cite>Lyle Stelmaschuk</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h3><span>Brugeranmeldelser</span></h3></dt>
            <dd>
              <p>
              Advanced system care 14 er det mest komplette all-in-one-system på markedet, som jeg har brugt i årevis, og hvert år bliver det bedre og bedre. Den nye interface og den grundige oprydning du får med programmet og den nemme et-kliks-løsning er som magi. Andre funktioner som kommer med systemet er fantastiske og den tomme mappe-finder, internet booster og game booster er blot nogle af dem. Jeg synes, det er et af de bedste rengøringssystemer derude i dag. "
              </p>
              <cite>Ryan Hill</cite>
            </dd>
          </dl>


          <dl class="reviews">
            <dt><h3><span>Recensioni degli utenti</span></h3></dt>
            <dd> 
              <p>
              For det første må jeg sige, at det er et meget let og nyttigt software, der er nemt at bruge. Driver booster kører i baggrunden og belaster ikke CPU eller RAM, det var i stand til at indlæse nye spil uden at lukke ned for baggrundsprocesser. Jeg plejer at køre windows-opdateringer dagligt for at få de seneste drev, driver booster opdaterede og rettede mine PC-drev ekstremt præcist endda bedre end Windows update. Jeg er virkelig imponeret over softwaren og anbefaler det varmt som et produkt. 
              </p>
              <cite>Dunston Diaz</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h3><span>Recensioni degli utenti</span></h3></dt>
            <dd>
              <p>
              "Virkelig den bedste driver updater der er på markedet. Det er brugervenligt, har en simpel brugerflade der er nem at bruge og det klarer arbejdet bedre end nogen applikation, jeg tidligere har brugt. Dette program er fem stjerner værd. Varmt anbefalet. "
              </p>
              <cite>Hishaam Salasa</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h3><span>Recensioni degli utenti</span></h3></dt>
            <dd>
              <p>
              "Sikke en overraskelse at modtage Driver Booster fra IObit. Så snart det var installeret begyndte opdateringerne. Jeg anede ikke jeg havde så mange programmer på computeren og slet ikke at de behøvede opgraderinger. Da opdateringerne afsluttede, var det som om, min PC havde fået en komplet makeover. Fantastisk!"
              </p>
              <cite>Harold Barr</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h3><span>Recensioni dei media</span></h3></dt>
            <dd>
              <p>
              "Driver Booster PROs enkle kernefunktionalitet er blevet endnu mere attraktiv takket være inkluderingen af flere licenser til en virkelig økonomisk pris, samt en brugerdefineret grænseflade, der gør et godt stykke arbejde ved at vise specifikke informationer om din hardware.  Konkurrenterne Ashampoo Driver Updater og SlimWare Utilities DriverUpdate har tilsvarende funktioner, men IObit Driver Booster PRO fører klart i kategorien.""
              </p>
              <cite>PC Magazine</cite>
            </dd>
          </dl>
        </div>
        <ul>
          <li class="first" data-num="4"><img src="<?php echo getStaticUrl('images/dunston_diaz.png')?>" alt="Dunston Diaz"></li>
          <li class="two" data-num="5"><img src="<?php echo getStaticUrl('images/hishaam-salasa.png')?>" alt="Hishaam Salasa"></li>
          <li class="three" data-num="6"><img src="<?php echo getStaticUrl('images/harold_barr_476.png')?>" alt="Harold Barr"></li>

          <li class="active" data-num="0"><img src="<?php echo getStaticUrl('images/cnet.png')?>" alt="Cnet"></li>

          <li class="four" data-num="1"><img src="<?php echo getStaticUrl('images/brendon_o_rourke.png')?>" alt="Brendon O Rourke"></li>
          <li class="five" data-num="2"><img src="<?php echo getStaticUrl('images/lyle_stelmaschuk.png')?>" alt="Lyle Stelmaschuk"></li>
          <li class="six" data-num="3"><img src="<?php echo getStaticUrl('images/ryan_hill.png')?>" alt="Ryan Hill"></li>

          <li class="seven last" data-num="7"><img src="<?php echo getStaticUrl('images/pc.png')?>" alt="PC Magazine"></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- review end -->

  <!-- awards start -->
  <div class="awards">
    <div class="wrapper">
      <h2>Verdensomspændende Priser</h2>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
    </div>
  </div>
  <!-- awards end -->

  <!-- footer start -->
  <div class="footer">
    <div class="wrapper">
      <div class="service">
        <dl class="left fl">
          <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
          <dd>
            <h3>60-dages pengene-tilbage-garanti</h3>
            <p>
            Den mest avancerede løsning til at optimere din PC til det maksimale!
            </p>
          </dd>
        </dl>
        <dl class="right fr">
          <dt><h3>Vi accepterer</h3></dt>
          <dd>
            <img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/>
          </dd>
        </dl>
      </div>
      <dl>
        <dt>Bemærk:</dt>
        <dd>*. Tilbud som dette kan fra tid til anden ændres uden varsel ændres efter vores skøn.</dd>
        <dd>*. Data kan ændres baseret på forskellige systemer eller computere.</dd>
      </dl>
      <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Rettigheder forbeholdes</p>
    </div>
  </div>
  <!-- footer end -->

  <!-- floatlayer start -->
  <div id="floatlayer" class="floatlayer">
    <div class="wrapper clearfix">
      <div class="imgbox ribbon fl">
        <img src="<?php echo getStaticUrl('images/asc-db-box.png')?>" alt=""/>
        <div class="discount">80% Rabatt</div>
      </div>
      <div class="numbox fl">
        <div id="fliptwo" class="flipNum">
          <div class="numwrap">
            <div class="listbox">
              <span class="list">
                <b>0</b><b>1</b><b>2</b><b>3</b><b>4</b><b>5</b><b>6</b><b>7</b><b>8</b><b>9</b>
              </span>
            </div>
          </div>
          <div class="numwrap">
            <div class="listbox">
              <span class="list">
                <b>0</b><b>1</b><b>2</b><b>3</b><b>4</b><b>5</b><b>6</b><b>7</b><b>8</b><b>9</b>
              </span>
            </div>          
          </div>
          <div class="numwrap last">
            <div class="listbox">
              <span class="list">
                <b>0</b><b>1</b><b>2</b><b>3</b><b>4</b><b>5</b><b>6</b><b>7</b><b>8</b><b>9</b>
              </span>
            </div> 
          </div>
        </div>
        <p class="change"><b class="viewNum"><?php echo $viewNum;?></b> besøgende lige nu,  <b class="packsNum">50</b> stk. tilbage.</p>
      </div>
      <ul class="price fl">
        <li class="first">
          <p><strong class="change-price"><big>229</big> kr. </strong> <del>1.128 kr.</del></p>
          <p>1 års abonnement / 3 PC’er</p>
        </li>
        <li>
          <a class="buybtn exbtn"
             href="https://www.iobit.com/buy.php?product=dk-ascdb3pc229&ref=dk_ascdbxmas2012<?php echo $refStr?>&refs=dk_purchase_asc" 
             onclick="ga('send', 'event', 'ascdbbuy', 'buy', 'ascdbxmas2012-dk')">
            Aktiver nu
          </a>
        </li>
      </ul>
    </div>
  </div>
  <!-- floatlayer end -->

  <script>
    packsNum=<?php echo $packsNum;?>;
    refStr="<?php echo $refStr;?>";
  </script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>