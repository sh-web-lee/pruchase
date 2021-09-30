<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
if(!empty($_GET['action'])&&($_GET['action']=='getSales')){
  $date=$_GET['d'];
  $cName='itaugiu'.$date;
  $cookie=$_COOKIE[$cName];
  if($cookie){
    $packsNum=$_COOKIE[$cName];
    if($packsNum>19){
      $packsNum--;
      setcookie($cName,$packsNum);
      if(rand(1,100)%2==0){
        $packsNum++;
      }
    }else{
      $packsNum=19;
    }
  }else{
    $packsNum=137;
    setcookie($cName,$packsNum);
  }
  echo $packsNum;
  exit();
}
  include $pRootUrl.'include/common.inc.php';
  $reduceNum=94689561;
  $reTime=15;
  $buyNum = number_format(ceil(microtimeFloat()*1000/(1000*$reTime)) - $reduceNum);

$refStr='';
if(in_array($_GET['pop'],array('x_iu'))){
  $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>82% korting tijdens de Final Sale op IObit Uninstaller 7 PRO！</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Lato:400,700'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
  <script type="text/javascript">
    function getBuyNum(){
      $.ajax({
        type: "GET",
        url: "<?php echo $pRootUrl;?>callback.php",
        data: "action=getBuyNum&reduceNum=<?php echo $reduceNum;?>&reTime=<?php echo $reTime;?>&r="+Math.random(),
        success: function(packs){
          $('.buyNum').html(packs);
          setTimeout('getBuyNum()', 15000);
        }
      });
    }
    setTimeout('getBuyNum()', 15000);
  </script>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
  
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="http://www.iobit.com" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit" />
      </a>
      <h1>EXCLUSIEF AANBOD</h1>
      <h2><b>-82%</b> korting tijdens de Final Sale op IObit Uninstaller 7</h2>
      <!-- time -->
      <ul id="countdown" class="countdown">
        <li class="first">tijdelijke aanbieding <strong>00</strong> uur:  </li>
        <li><strong>00</strong> min: </li>
        <li><strong>00</strong> sec</li>
      </ul>
      <div class="panel clearfix">
        <div class="fl left">
          <img class="iubox" src="<?php echo getStaticUrl('images/iubox.png')?>" alt="" />
          <div class="seven"></div>
        </div>
        <div class="offer fl">
          <h2>IObit Uninstaller 7 PRO</h2>
          <span class="name">1 Jaar / 3 PC’s</span>
          <p class="gift"><i class="all-icons"></i> Smart Defrag PRO + Protected folder  t.w.v  <b>€69,94</b></p>
          <strong>17<small>99</small></strong> <del>99,93</del>
          <a class="buybtn" 
             href="http://www.iobit.com/buy.php?product=nl-iu73pcsdpf1799&ref=nl_iu7pfsd1799purchase1801<?php echo $refStr;?>&aff=&refs=nl_purchase_iu"
             onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase1801-nl')">
            <div class="solid-layer"></div>
            <div class="border-layer"></div>
            <div class="text-layer">Nu Activeren</div>
          </a>
          <p class="people"><i class="all-icons"></i> Al door <span class="buyNum"><?php echo $buyNum;?></span> personen geactiveerd</p>
        </div>
      </div> 
    </div>
  </div>
  <!-- banner end -->

  <!-- patment start -->
  <div class="payment wrapper"><img src="<?php echo getStaticUrl('images/payments.png')?>" alt="" /></div>
  <!-- patment end -->

  <!-- intro start -->
  <div class="intro wrapper">
    <h2>Verwijdert hardnekkige resten van programma’s &amp; plug-ins!</h2>
    <p>1 jarig abonnement voor 3 PC's</p>
    <div class="introimg">
      <div class="imglist">
        <ul>
          <li class="shot3"><img src="<?php echo getStaticUrl('images/screenshot02.png')?>" alt=""></li>
          <li class="shot2"><img src="<?php echo getStaticUrl('images/screenshot03.png')?>" alt=""></li>
          <li class="shot1"><img src="<?php echo getStaticUrl('images/screenshot01.png')?>" alt=""></li>
        </ul>
      </div>
      <a href="javascript:;" class="prev btn"><</a>
      <a href="javascript:;" class="next btn">></a>
    </div>
    <div class="feature clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature_01.png')?>" alt=""></dt>
        <dd>
          <h3><b>NIEUW!</b> Detecteert &amp; verwijdert bundleware</h3>
          <p>Detecteert en verwijdert bundleware zoals adware, browser plug-ins en andere software</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature_02.png')?>" alt=""></dt>
        <dd>
          <h3><b>VERBETERD!</b> Automatisch reinigen</h3>
          <p>Automatisch scannen en verwijderen van achtergebleven bestanden voor een snelle en schone PC</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature_03.png')?>" alt=""></dt>
        <dd>
          <h3><b>NIEUW!</b> Veilige en snelle browsing</h3>
          <p>Detecteert kwaadaardige reclame plug-ins en extensies automatisch</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature_04.png')?>" alt=""></dt>
        <dd>
          <h3><b>NIEUW!</b> Software updater</h3>
          <p>Met deze nieuwe functie kunt u programma's updaten of verwijderen met maar 1-klik</p>
        </dd>
      </dl>
    </div>
    <a href="javascript: void(0);" class="comparebtn">Lees meer over de PRO versie>></a>
  </div>
  <!-- intro end -->

  <!-- donation start -->
  <div class="donation">
    <div class="wrapper">
      <h2>82% korting tijdens de Final Sale! </h2>
      <div class="cont clearfix">
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/gift-pf.png')?>" alt="" /></dt>
          <dd>
            <h3>Protected Folder <strong>€0 </strong> <del>€39,95</del></h3>
            <ul>
              <li><i class="all-icons"></i>Bescherm uw bestanden met 1 wachtwoord </li>
              <li><i class="all-icons"></i>Beveilig uw data en persoonsgegevens</li>
            </ul>
          </dd>
        </dl>
        <dl class="sd">
          <dt><img src="<?php echo getStaticUrl('images/gift-sd.png')?>" alt="" /></dt>
          <dd>
            <h3>Smart Defrag PRO <strong>€0 </strong> <del>€29,99</del></h3>
            <ul>
              <li><i class="all-icons"></i>Snellere opstarttijd van uw PC </li>
              <li><i class="all-icons"></i>Defragmenteer grotere bestanden met maar 1-klik</li>
            </ul>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- donation end -->

  <div class="wrapper">
    

    

    <div class="main">
      

      

      <!-- awards start -->
      <div class="awards">
        <h2>Vertrouwd en bekroond door de volgende media</h2>
        <img src="<?php echo getStaticUrl('images/awards.png')?>" alt="" />
      </div>
      <!-- awards end -->

      <!-- review start -->
      <div class="review">
        <div class="content">
          <dl>
            <dt>
            <h3>Klantbeoordeling</h3></dt>
            <dd>
              "IObit Uninstaller is een geweldig programma voor het deïnstalleren van programma's, toolbars en plugins. Deze software is makkelijk te gebruiken voor mensen die net als ik geen verstand van computers hebben. Met deze software kan ik gemakkelijk alle onnodige programma’s detecteren en verwijderen en het bijbehorende register opschonen. Ik raad dit programma aan iedereen aan.”
            </dd>
          </dl>
          <dl class="active">
            <dt>
            <h3>Media Review</h3></dt>
            <dd>
              "Dit gemakkelijk te gebruiken deïnstallatieprogramma, configureert en optimaliseert uw PC. Dit programma is makkelijk en gratis te downloaden. IObit Uninstaller kan worden beschouwt als het beste in zijn soort en maakt het ook mogelijk om meerdere programma’s tegelijk te verwijderen. Na de standaard verwijdering kunt u nog een krachtige scan uitvoeren om alle overgebleven resten op te sporen en te verwijderen."
            </dd>
          </dl>
          <dl>
            <dt>
            <h3>Klantbeoordeling</h3></dt>
            <dd>
              "IObit Uninstaller is een van de beste deïnstallatie programma’s op de markt. Het is makkelijk in de omgang, het verwijdert bestanden en programma’s enorm snel en grondig. Vanaf de 5 de versie van IObit Uninstaller kun je echt zien dat het programma volledig is afgestemd op Windows 10. Je kunt gemakkelijk en snel allerlei vervelende plug-ins en vooraf geïnstalleerde Windows apps verwijderen. Je kunt ook makkelijk dubbel geïnstalleerde of ongebruikte programma’s vinden en verwijderen. Bedankt dat jullie de computers van mijn hele familie altijd goed onderhouden!"
            </dd>
          </dl>
        </div>
        <ul class="users clearfix">
          <li>
            <div class="pic"><img src="<?php echo getStaticUrl('images/fernando.png')?>" alt="Fernando Lourenço Gomes">
            </div>
            <p>Fernando Lourenço Gomes</p>
          </li>
          <li class="active">
            <div class="pic"><img src="<?php echo getStaticUrl('images/makeuseof.png')?>" alt="MakeUseOf"></div>
            <p>MakeUseOf</p>
          </li>
          <li>
            <div class="pic"><img src="<?php echo getStaticUrl('images/ada-gortler.png')?>" alt="Roland LALIS">
            </div>
            <p>Áda Görtler</p>
          </li>
        </ul>
      </div>
      <!-- review end -->

      <!-- comparison start -->
      <div class="comparison" id="compare">
        <table border="0" cellspacing="0" cellpadding="0" width="100%">
          <thead>
            <tr>
              <th class="text" colspan="2">Welke voordelen biedt de PRO editie?</th>
              <th class="itemb">IObit Uninstaller 7 FREE</th>
              <th class="itema">IObit Uninstaller 7 PRO</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_01.png')?>" alt="" /></td>
              <td class="virtue">Snelle en grondige deïnstallatie van ongewenste programma’s <span>Verbeterd</span></td>
              <td class="itemb"><i class="all-icons">√</i></td>
              <td class="itema"><i class="all-icons red">√</i></td>
            </tr>
            <tr>
              <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_02.png')?>" alt="" /></td>
              <td class="virtue">Verwijdert Plug-ins &amp; extensies in Edge, Chrome, IE, Firefox, etc<span class="nuo">Nieuw</span></td>
              <td class="itemb"><i class="all-icons">√</i></td>
              <td class="itema"><i class="all-icons red">√</i></td>
            </tr>
            <tr>
              <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_03.png')?>" alt="" /></td>
              <td class="virtue">Gemakkelijk verwijderen van Windows Updates die problemen veroorzaken <span class="red">Verbeterd</span></td>
              <td class="itemb"><i class="all-icons">√</i></td>
              <td class="itema"><i class="all-icons red">√</i></td>
            </tr>
            <tr>
              <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt="" /></td>
              <td class="virtue">Detecteert en verwijdert bundleware &amp; gebundelde plug-ins</td>
              <td class="itemb"><i class="all-icons">√</i></td>
              <td class="itema"><i class="all-icons red">√</i></td>
            </tr>
            <tr>
              <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_05.png')?>" alt="" /></td>
              <td class="virtue">Werkt alle belangrijke software bij met maar 1-klik <span class="nuo">Nieuw</span></td>
              <td class="itemb"><i class="all-icons circle">√</i></td>
              <td class="itema"><i class="all-icons red">√</i></td>
            </tr>
            <tr>
              <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_06.png')?>" alt="" /></td>
              <td class="virtue">Verwijdert Kwaadaardige plug-ins voor een veilige browser <span class="nuo">Nieuw</span> </td>
              <td class="itemb"><i class="all-icons circle">√</i></td>
              <td class="itema"><i class="all-icons red">√</i></td>
            </tr>
            <tr>
              <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_07.png')?>" alt="" /></td>
              <td class="virtue">Schonere &amp; Snellere Online Ervaring door middel van het verwijderen van Adware<span class="nuo blue">Nieuw</span> </td>
              <td class="itemb"><i class="all-icons circle">√</i></td>
              <td class="itema"><i class="all-icons red">√</i></td>
            </tr>
            <tr>
              <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt="" /></td>
              <td class="virtue">Deïnstalleert automatisch restbestanden die andere uninstall programma’s niet verwijdert krijgen</td>
              <td class="itemb"><i class="all-icons circle">√</i></td>
              <td class="itema"><i class="all-icons red">√</i></td>
            </tr>
            <tr>
              <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_09.png')?>" alt="" /></td>
              <td class="virtue">Automatische updates voor de nieuwste versie</td>
              <td class="itemb"><i class="all-icons circle">√</i></td>
              <td class="itema"><i class="all-icons red">√</i></td>
            </tr>
            <tr>
              <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_10.png')?>" alt="" /></td>
              <td class="virtue">Gratis 24/7 technische ondersteuning</td>
              <td class="itemb"><i class="all-icons circle">√</i></td>
              <td class="itema"><i class="all-icons red">√</i></td>
            </tr>
          </tbody>
          <tfoot>
            <tr>
              <th colspan="2"></th>
              <th class="itemb">IObit Uninstaller 7 FREE<p>uw huidige editie </p></th>
              <th class="itema">
                IObit Uninstaller 7 PRO
                <p><strong>€17,99 </strong> <del>€99,93</del></p>
                <a class="buybtn" 
                   href="http://www.iobit.com/buy.php?product=nl-iu73pcsdpf1799&ref=nl_iu7pfsd1799purchase1801<?php echo $refStr;?>&aff=&refs=nl_purchase_iu"
                   onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase1801-nl')">
                  <div class="solid-layer"></div>
                  <div class="border-layer"></div>
                  <div class="text-layer">Nu Activeren</div>
                </a>
              </th>
            </tr>
          </tfoot>
        </table>
      </div>
      <!-- comparison end -->

      <!-- service start -->
      <div class="service clearfix">
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt="" /></dt>
          <dd><h4>Garantie</h4></dd>
          <dd>60 Dagen niet goed geld terug garantie</dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/godaddy-secure.png')?>" alt="" /></dt>
          <dd><h4>Website beveiliging</h4></dd>
          <dd>Alle websites van IObit zijn beveiligd</dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/24hours.png')?>" alt="" /></dt>
          <dd><h4>24/7 gratis klantenservice</h4></dd>
          <dd>IObit biedt gratis 24/7 <span>klantenservice voor PRO gebruikers</span></dd>
        </dl>
      </div>
      <!-- service end -->

      <!-- annotation start -->
      <dl class="annotation">
        <dt>Let op:</dt>
        <dd>*Promoties kunnen door IObit op elk moment en zonder voorafgaande kennisgeving veranderd worden naar eigen goeddunken</dd>
        <dd>* De gegevens kunnen variëren op basis van verschillende systemen en computers.</dd>
      </dl>
      <!-- annotation end -->

      <!-- footer start -->
      <div class="footer">Copyright © 2005 - <?php echo date('Y')?> IObit. Alle rechten voorbehouden</div>
      <!-- footer end -->
    </div>
  </div>

  <!-- floatlayer start -->
  <div class="floatlayer" id="floatlayer">
    <div class="wrapper clearfix">
      <div class="left fl">
        <h2>Beperkt aantal kerstpakketten beschikbaar! </h2>
        <h3>Betaal deze kerst slechts <b>€0,02</b> per dag voor het vernieuwde IObit Uninstaller 7!</h3>
      </div>
      <div class="offer fr">
        <strong>17<small>99</small></strong> <del>99,93</del>
        <a class="buybtn" 
           href="http://www.iobit.com/buy.php?product=nl-iu73pcsdpf1799&ref=nl_iu7pfsd1799purchase1801<?php echo $refStr;?>&aff=&refs=nl_purchase_iu"
           onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase1801-nl')">
          <div class="solid-layer"></div>
          <div class="border-layer"></div>
          <div class="text-layer">Nu Activeren</div>
        </a>
      </div>
    </div>
    <div class="close"></div>
    <div class="snow"></div>
  </div>
  <!-- floatlayer end -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>