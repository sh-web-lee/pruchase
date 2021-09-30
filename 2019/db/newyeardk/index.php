<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';
  include $pRootUrl.'callback.php';

if(in_array($_GET['to'],array('purchase-3','purchase-4','purchase-6',
    'purchase-10','purchase-14','purchase-15','purchase-16',
    'purchase-21','purchase-22','gaexpired','multipcexpired','bannerbuy',
    'feature','activateweb','activateweb-5','db_freetip','expired','purchase-23',
    'purchase-28','purchase-29','purchase-30','purchase-31','purchase-32','purchase-33','bigbuy','bigbuynew','purchase-34',
    'garegion','dbofficialfree','dbofficialpro','purchase-35','purchase-36','crpro_1','crpro_2','reggaexpired','regovermax'))){
  $refStr='-'.$_GET['to'];
}else{
  $refStr='';
}
if($_GET['to']=='purchase-6'){
  if(preg_match_all('/([0-9]*)\./',$_GET['ver'],$matches)){
    if(count($matches[1])>=2){
      $refStr.='-'.$matches[1][0].$matches[1][1];
    }
  }
}
if(in_array($_GET['pop'],array('x_db'))){
  $refStr.='-'.$_GET['pop'];
}
if(in_array($_GET['ref'],array('de_ncdb6'))){
  $refStr.='-'.$_GET['ref'];
}
?>
<!DOCTYPE html>
<html lang="dk">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Eksklusive 80% rabat på Driver Booster 6 Pro & og få en product gratis</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Lato:400,700,700i,900'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
  <script type="text/javascript">
    function getBuyNum(){
      $.ajax({
        type: "GET",
        url: "<?php echo $pRootUrl;?>callback.php",
        data: "action=getBuyNum&reduceNum=<?php echo $reduceNum;?>&reTime=&r="+Math.random(),
        success: function(packs){
          $('.buy-num').html(strFormat(packs));
          setTimeout('getBuyNum()', 20000);
        }
      });
    }
    setTimeout('getBuyNum()', 20000);
  </script>
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
        <div class="fr">
          <span>Sikker hjemmeside</span>
          <img src="<?php echo getStaticUrl('images/godaddy.png')?>" alt="" />
        </div>
      </div>
      <div class="clearfix">
        <div class="left fl">
          <h2>Mere end <b class="off">kr. 879</b>,<span><strong class="percent">80%</strong> i rabat!</span></h2>
          <div class="boxpc">
            <img class="pcs active" src="<?php echo getStaticUrl('images/box3pc.png')?>" alt="" />
            <img class="pc" src="<?php echo getStaticUrl('images/box1pc.png')?>" alt="" />
          </div>
          <!-- time -->
          <ul class="countdown countdown3pc on">
            <li><strong>00</strong></li>
            <li><strong>00</strong></li>
            <li><strong>00</strong></li>
            <li><strong>000</strong></li>
          </ul>
          <ul id="countdown" class="countdown countdown1pc">
            <li><strong>00</strong></li>
            <li><strong>00</strong></li>
            <li><strong>00</strong></li>
            <li><strong>000</strong></li>
          </ul>
        </div>
        <div class="right fr">
          <h1> godt nytår! </h1>
          <h4>Spar op til kr. 879 på Driver Booster 6 Pro & få et produkt gratis!</h4>
          <div class="choice">
            <div class="list pcs active" data-url="https://www.iobit.com/buy.php?product=dk-db63pcpf199&ref=dk_db3pcpfpurchase1901<?php echo $refStr;?>&refs=dk_purchase_db" data-off=" kr. 879" data-percent="80%">
              <div class="fl">
                <h3>Driver Booster PRO</h3>
                <b>3 pc'er, 1 år</b>
                <p><i class="all-icons"></i>Protected Folder  <b>Gratis</b></p>
              </div>
              <div class="fr"><strong class="original">kr. 199  </strong> <del class="discount">kr. 1.078</del></div>
            </div>
            <div class="list pc" data-url="https://www.iobit.com/buy.php?product=dk-db61pc189&ref=dk_db1pcpurchase1901<?php echo $refStr;?>&refs=dk_purchase_db " data-off="kr. 210" data-percent="52%">
              <div class="fl">
                <h3>Driver Booster PRO</h3>
                <b>1 pc, 1 år </b>
              </div>
              <div class="fr"><strong class="original">kr. 189 </strong> <del class="discount">kr. 399</del></div>
            </div>
          </div>
          <a class="buybtn" 
             href="https://www.iobit.com/buy.php?product=dk-db63pcpf199&ref=dk_db3pcpfpurchase1901<?php echo $refStr;?>&refs=dk_purchase_db"
             onclick="ga ('send', 'event', 'dbbuy', 'buy', dbpurchase1901popup-dk')">
            Køb nu
          </a>
          <p>
            <i class="all-icons"></i>
            Allerede   <strong class="buyNum buy-num"><?php echo $buyNum ?></strong> tilbud solgt 
          </p>
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
      <h2>Hvorfor vælger over 150 millioner brugere Driver Booster?</h2>
      <p>Fordi din pc vil køre op til 200% hurtigere end før. Driver Booster holder enhedens drivere opdaterede og forbedrer pc'ens stabilitet med kontrollerede drivere og sikkerhedsteknologi.</p>
      <div class="circle c1"></div>
      <div class="circle c2"></div>
      <div class="circle c3"></div>
    </div>
  </div>
  <!-- cause end -->

  <!-- intro start -->
  <div class="intro wrapper">
    <h2>Optimerer din pc-ydelse med de nyeste drivere!</h2>
    <p><img src="<?php echo getStaticUrl('images/win10.png')?>" alt="" /> <span>Kompatibel med Windows 10</span></p>
    <div class="clearfix panel">
      <div class="fl">
        <div class="list one">
          <img src="<?php echo getStaticUrl('images/list01.png')?>" alt="" />
          <dl>
            <dt><h3>Spilkomponentdatabase</h3></dt>
            <dd>Boost ydeevnen med den nye Game Ready Driver og spil problemfrit med de nødvendige komponenter.</dd>
          </dl>
        </div>
        <div class="list">
          <img src="<?php echo getStaticUrl('images/list02.png')?>" alt="" />
          <dl>
            <dt><h3>100% sikker</h3></dt>
            <dd>Alle drivere fra Driver Booster 6 har bestået WHQL-testene</dd>
          </dl>
        </div>
      </div>
      <div class="fr">
        <div class="list one">
          <img src="<?php echo getStaticUrl('images/list03.png')?>" alt="" />
          <dl>
            <dt><h3>Større database</h3></dt>
            <dd>Understøtter mere end 3.000.000 drivere, registrerer også manglende og defekte drivere</dd>
          </dl>
        </div>
        <div class="list">
          <img src="<?php echo getStaticUrl('images/list04.png')?>" alt="" />
          <dl>
            <dt><h3>Automatisk backup-funktion</h3></dt>
            <dd>Kan til enhver tid gendanne de gamle drivere efter evt. uønskede driveropdateringer!</dd>
          </dl>
        </div>
      </div>
    </div>
  </div>
  <!-- intro end -->

  <!-- donation start -->
  <div class="donation wrapper">
    <h2>Eksklusiv gave til dig i 2019</h2>
    <p>Nu får du et privatlivsbeskyttelsesværktøj gratis!</p>
    <div class="clearfix">
      <img class="fl" src="<?php echo getStaticUrl('images/giftbox.png')?>" alt="" />
      <div class="fl">
        <h3>Protected Folder  <b>gratis</b></h3>
        <ul>
          <li><i class="all-icons"></i>Ingen bekymringer for datatyveri</li>
          <li><i class="all-icons"></i>Beskyt dine vigtige og personlige filer</li>
        </ul>
      </div>
    </div>
  </div>
  <!-- donation end -->

  <!-- centbuy start -->
  <div class="centbuy">
    <div class="wrapper">
      <h2>Spar op til 80% på Driver Booster 6 Pro i dag ogfåenspeciel gave gratis!</h2>
      <p>og få en speciel gave <b>GRATIS!</b></p>
      <div class="clearfix">
        <div class="boxpc fl">
          <img class="pcs active" src="<?php echo getStaticUrl('images/box3pc.png')?>" alt="" />
          <img class="pc" src="<?php echo getStaticUrl('images/box1pc.png')?>" alt="" />
        </div>
        <div class="smchoice fl">
          <div class="list pcs active">
            <h3>3 pc'er + Protected Folder</h3>
            <b>Spar kr. 879</b>
          </div>
          <div class="list pc">
            <h3>1 pc <b>Spar kr. 210</b></h3>
          </div>
        </div>
        <div class="price fr">
          <strong class="original">kr. 199 </strong> <del class="discount">kr. 1.078</del>
          <a class="buybtn" 
             href="https://www.iobit.com/buy.php?product=dk-db63pcpf199&ref=dk_db3pcpfpurchase1901<?php echo $refStr;?>&refs=dk_purchase_db"
             onclick="ga ('send', 'event', 'dbbuy', 'buy', dbpurchase1901popup-dk')">
           Køb nu
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- centbuy end -->

  <!-- describe start -->
  <div class="describe">
    <div class="wrapper">
      <h2>Driver Booster stræber efter at løse dine problemer</h2>
      <ul>
        <li><i class="all-icons"></i>Finder og opdaterer alle forældede og sjældne drivere </li>
        <li><i class="all-icons"></i>Løser enhedsproblemer og får din pc til at køre mere gnidningsløst </li>
        <li><i class="all-icons"></i>Får dine spil til at køre uden at hakke</li>
        <li>
          <i class="all-icons"></i>
          Løser problemet, hvis din pc er langsom eller tit går helt i stå
        </li>
        <li><i class="all-icons"></i>Er du frustreret over at spilde tid p.g.a. langsom opdateringshastighed?</li>
        <li><i class="all-icons"></i>Hold alle drivere opdaterede og din pc på det højeste niveau af ydeevne</li>
      </ul>
    </div>
  </div>
  <!-- describe end -->
  <div class="wrapper">
    <!-- awards start -->
    <div class="awards">
      <h2>Anbefalet og belønnet af disse medier</h2>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt="" />
    </div>
    <!-- awards end -->

    <!-- review start -->
    <div class="review">
      <div class="content">
        <dl class="active">
          <dt>
          <h3>Anmeldelser fra medier</h3></dt>
          <dd>"IObit har flere programmer bl.a. Driver Booster PRO, som automatisk opdaterer dine drivere, er et af de bedste. Driver Booster PROs enkle kernefunktionalitet er gjort endnu mere attraktiv takket være inkluderingen af flere licenser til en virkelig økonomisk pris, samt en brugerdefineret grænseflade, der gør et godt stykke arbejde ved at vise specifikke informationer om din hardware. Konkurrenterne Ashampoo Driver Updater og SlimWare Utilities DriverUpdate har tilsvarende funktioner, men IObit Driver Booster PRO fører klart i kategorien."</dd>
        </dl>
        <dl>
          <dt><h3>Anmeldelser fra medier</h3></dt>
          <dd>"Med Driver Booster kan jeg nemt se, hvilke enhedsdrivere, der er forældede og kan nemt opdatere dem. Desuden hjælper programmet mig med at rette lydfejl, netværksfejl, enhedsfejl osv. ... Jeg troede ikke på det før, men efter at have brugt programmet elsker jeg det ... min pc er bare hurtigere, sikrere og virker nyere end for 8 måneder siden ... så tak til IObit."  </dd>
        </dl>
        <dl>
          <dt><h3>Anmeldelser fra medier</h3></dt>
          <dd>"Driver Booster er en fantastisk applikation. Som for nogen, der har mange applikationer og drev og som ikke har tid til manuelt at opdatere dem, kan jeg varmt anbefale Driver Booster, det hjælper med at opdatere drivere hurtigt og nemt." </dd>
        </dl>
        <dl>
          <dt><h3>Anmeldelser fra medier</h3></dt>
          <dd>"Dette er et af de bedste driveropdateringsprogrammer over hovedet. Microsoft har endda vildledt mig ved at foreslå opdateringer, der ikke ville fungere sammen med min maskine. Dette program vidste hvilke opdateringer jeg havde brug for uden konflikter. Det fungerede perfekt. Nemt at bruge, informativt og intuitivt. Det vil blive i min værktøjskasse for evigt ... Fantastisk job! " </dd>
        </dl>
      </div>
      <ul class="users clearfix">
        <li class="active">
          <div class="pic"><img src="<?php echo $pResUrl; ?>images/pcmag.png" alt="PC Magazine">
          </div>
          <p>PC Magazine</p>
        </li>
        <li>
          <div class="pic"><img src="<?php echo $pResUrl; ?>images/myo-thuya.png" alt="Myo Thuya"></div>
          <p>Myo Thuya</p>
        </li>
        <li>
          <div class="pic"><img src="<?php echo $pResUrl; ?>images/adam-backlund.png" alt="Adam Backlund">
          </div>
          <p>Adam Backlund</p>
        </li>
        <li>
          <div class="pic"><img src="<?php echo $pResUrl; ?>images/wayne-bowler.png" alt="Wayne Bowler">
          </div>
          <p>Wayne Bowler</p>
        </li>
      </ul>
    </div>
    <!-- review end -->

    <!-- comparison start -->
    <div class="comparison" id="compare">
      <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <thead>
          <tr>
            <th class="text" colspan="2">Hvilke fordele kan PRO-versionen give dig? </th>
            <td class="space"></td>
            <th class="itemb">Driver Booster <b>FREE</b></th>
            <td class="space"></td>
            <th class="itema">Driver Booster <b>PRO</b></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_01.png')?>" alt="" /></td>
            <td class="virtue">Skanner automatisk og registrerer forældede, manglende og fejlbehæftede drivere</td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons">√</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_02.png')?>" alt="" /></td>
            <td class="virtue">Downloader og opdaterer forældede drivere med et enkelt klik</td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons">√</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_03.png')?>" alt="" /></td>
            <td class="virtue">Låser Windows hastighedsbegrænsning op forhurtigere driveropdateringer <img src="<?php echo getStaticUrl('images/forbedret.png')?>" alt=""></td>
            <td class="space"></td>
            <td class="itemb"></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt="" /></td>
            <td class="virtue">Større database for atopdatere flere forældede og sjældne drivere <img src="<?php echo getStaticUrl('images/forbedret.png')?>" alt=""></td>
            <td class="space"></td>
            <td class="itemb"></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_05.png')?>" alt="" /></td>
            <td class="virtue">Reducerer systemstopog nedbrud for bedre ydeevne</td>
            <td class="space"></td>
            <td class="itemb"></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_06.png')?>" alt="" /></td>
            <td class="virtue">Automatisk download oginstallation når du ikke bruger pc'en <img src="<?php echo getStaticUrl('images/forbedret.png')?>" alt=""></td>
            <td class="space"></td>
            <td class="itemb"></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_07.png')?>" alt="" /></td>
            <td class="virtue">Automatisk backup afalle drivere til sikkerhedsgendannelse</td>
            <td class="space"></td>
            <td class="itemb"></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_11.png')?>" alt="" /></td>
            <td class="virtue">Sikker opdatering KUNmed certificerede WHQL-drivere <img src="<?php echo getStaticUrl('images/forbedret.png')?>" alt=""></td>
            <td class="space"></td>
            <td class="itemb"></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt="" /></td>
            <td class="virtue"> Prioritet for at få den nyeste Game Ready Driver <img src="<?php echo getStaticUrl('images/ny.png')?>" alt=""></td>
            <td class="space"></td>
            <td class="itemb"></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_12.png')?>" alt="" /></td>
            <td class="virtue"> Nødvendige komponenter til gnidningsløse spil <img src="<?php echo getStaticUrl('images/forbedret.png')?>" alt=""></td>
            <td class="space"></td>
            <td class="itemb"></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_09.png')?>" alt="" /></td>
            <td class="virtue">Automatiske opdateringer til den nyeste version</td>
            <td class="space"></td>
            <td class="itemb"></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_10.png')?>" alt="" /></td>
            <td class="virtue"> Gratis teknisk support 24/7</td>
            <td class="space"></td>
            <td class="itemb"></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
        </tbody>
      </table>
    </div>
    <!-- comparison end -->

    <!-- annotation start -->
    <dl class="annotation">
      <dt>Bemærk:</dt>
      <dd>
        * Tilbud som dette kan til enhver tid ændres af IObit uden forudgående varsel.
      </dd>
    </dl>
    <!-- annotation end -->

    <!-- footer start -->
    <div class="footer">Copyright © 2005 - <?php echo date('Y')?> IObit. Alle rettigheder forbeholdes </div>
    <!-- footer end -->

  </div>
  <!-- container end -->

<!-- footbuy start -->
<div class="footbuy">
  <div class="wrapper clearfix">
    <div class="fl">
      <h2>Optimerer din pc-ydelse med de nyeste drivere!</h2>
      <ul class="fchoice">
        <li class="list pcs active"><b> 3 pc'er, 1 år </b><span><strong>kr. 199  </strong> <del> kr. 1.078</del></span></li>
        <li class="list"><b>1 pc, 1 år   </b> <span><strong>kr. 189 </strong> <del> kr. 399</del></span></li>
      </ul>
    </div>
    <div class="fr">
      <p>Mere end <b class="off">kr. 879</b> , <b class="percent">80%</b> i rabat</p>
      <a class="buybtn" 
         href="https://www.iobit.com/buy.php?product=dk-db63pcpf199&ref=dk_db3pcpfpurchase1901<?php echo $refStr;?>&refs=dk_purchase_db"
         onclick="ga ('send', 'event', 'dbbuy', 'buy', dbpurchase1901popup-dk')">
        Køb nu
      </a>
    </div>
  </div>
</div>
<!-- footbuy end -->
<div class="pop-bg"></div>
<div class="pop">
   <h4><a class="smaller" href="javascript::">- minimer</a> <a class="close" href="javascript::">x luk</a></h4>
    <!-- title -->
    <h3>Tillykke!</h3>
    <p>Kun 20 heldige brugere har chancen for at få dette tilbud</p>
    <img src="<?php echo getStaticUrl('images/pop-box.png')?>" alt="">
    <!-- buybtn -->
    <a class="buybtn" href="https://www.iobit.com/buy.php?product=dk-db63pcpf189&ref=dk_dbpfpurchase1901popup<?php echo $refStr;?>&refs=dk_purchase_db" onclick="ga ('send', 'event', 'dbbuy', 'buy', dbpurchase1901popupb-dk')">
      <i></i> Benyt tilbuddet nu
    </a>

</div>
<div class="pop-small">
  <!-- the button for larger -->
  <a class="larger" href="javascript::">+ maximere</a>
  <!-- countdown -->
  <p class="countdown countdown3pc">
   Udløber om:
    <strong>00</strong>m,
    <strong>00</strong>s,
    <strong class="smaller">000</strong>ms
  </p>
  <!-- price -->
  <p class="price">Ekstra rabat <strong>– kr. 10</strong></p>
  <!-- buybtn -->
  <a class="buybtn" href="https://www.iobit.com/buy.php?product=dk-db63pcpf189&ref=dk_dbpfpurchase1901popup<?php echo $refStr;?>&refs=dk_purchase_db" onclick="ga ('send', 'event', 'dbbuy', 'buy', dbpurchase1901popupb-dk')">
    <i></i> Benyt tilbuddet nu
  </a>
</div>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>