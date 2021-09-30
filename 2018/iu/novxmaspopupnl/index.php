<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';

if(!empty($_GET['action'])&&($_GET['action']=='getSales')){
  $date=$_GET['d'];
  $cName='nliu'.$date;
  $cookie=$_COOKIE[$cName];
  if($cookie!==null){
    $packsNum=$_COOKIE[$cName];
    if($packsNum>=0){
      $packsNum--;
      setcookie($cName,$packsNum);
    }else{
      $packsNum=0;
    }
  }else{
    $packsNum=50;
    setcookie($cName,$packsNum);
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

$viewNum=rand(60,88);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}

$refStr='';
if(in_array($_GET['pop'],array('xr_iu'))){
  $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>85% Kerstkorting op IObit Uninstaller PRO</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700'>
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
<div class="main">

  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <!-- logo -->
      <a class="logo" href="https://www.iobit.com/nl/index.php" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
      </a>
      <!-- title -->
      <h1>Speciale Kerstaanbieding!</h1>
      <p class="best">Uw Laatste Kans op een Grote Besparing – Slechts 1 keer per jaar!</p>
      <!-- palen -->
      <div class="palen clearfix">
        <div class="left fl">
          <img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="IObit Uninstaller 8 PRO"/>
          <div class="hint">
            <dl class="pop-bg">
              <dt>Protected Folder <span><b> €0</b> <del>€39,95</del></span></dt>
              <dd> 
                Bescherm uw belangrijke mappen en bestanden met een wachtwoord zodat hackers en gebruikers van uw pc er niet bij kunnen.
              </dd>
              <dt>Smart Defrag 6 PRO <span><b>€0</b> <del> €29,99</del></span></dt>
              <dd>Snelle en grondige defragmentatie voor een gezonde harde schijf en optimale pc-prestaties.</dd>
            </dl>
          </div>
        </div>
        <div class="right fr">
          <h2>IObit Uninstaller 8 PRO</h2>
          <div class="price">
            <div class="count">
              <p class="watching">
                <span class="surplusGift viewNum"><?php echo $viewNum;?></span>  mensen kijken, slechts  <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em>  over!
              </p>
              <div class="progressbar">
                <span></span>
              </div>
              <p id="bandown" class="countdown">Wees er snel bij! <b>05</b>M: <b>00</b>S: <b class="last">000</b>Ms over</p>
            </div>
            <p><strong><big>€</big>14<big>,99</big></strong> <del> €99,93</del></p>
            <!-- buybtn -->
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=nl-iu81y3pcpfsd1499&ref=nl_iu8rightcorner1499purchase1811a<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=nl_purchase_iu"
               onclick="ga('send', 'event', 'iubuy', 'buy', 'iuxrpurchase1811a-nl')">
              Activeer Nu
            </a>
            <p class="year">1-jarig abonnement / 3 PC’s</p>
          </div>
        </div>
      </div>
    </div>

    <!-- snow -->
    <span class="snow list01"></span>
    <span class="snow snow-clarity  list02"></span>
    <span class="snow snow-smail list03"></span>
    <span class="round  list04"></span>
    <span class="round round-smail list05"></span>
    <span class="round round-clarity list06"></span>
    <span class="round round-large list07"></span>
    <span class="snow snow-clarity  list15"></span>
    <span class="snow snow-smail  list16"></span>
    <span class="snow snow-clarity  list17"></span>
    <span class="snow snow-smail  list18"></span>
    <span class="round round-clarity list23"></span>
    <span class="round round-clarity list24"></span>

    <span class="round round-clarity list08"></span>
    <span class="round round-smail list09"></span>
    <span class="round round-large  list10"></span>
    <span class="round list11"></span>
    <span class="snow snow-clarity list12"></span>
    <span class="snow snow-smail list13"></span>
    <span class="snow list14"></span>
    <span class="snow snow-clarity  list19"></span>
    <span class="snow snow-smail  list20"></span>
    <span class="snow snow-clarity  list21"></span>
    <span class="snow snow-smail  list22"></span>
    <span class="round round-clarity list25"></span>
    <span class="round round-clarity list26"></span>
  </div>
  <!-- banner end -->

  <!-- feature start -->
  <div class="feature">
    <div class="wrapper">
      <h2>Verwijder Hardnekkige Programma’s en Schadelijke Plug-ins</h2>
      <p class="over">
        IObit Uninstaller PRO, vertrouwd door 25.000.000+ gebruikers wereldwijd, voorkomt ophoping van overbodige bestanden en helpt u veiliger te surfen. 
      </p>
      <img class="screen" src="<?php echo getStaticUrl('images/asc-screen.png')?>" alt="IObit Uninstaller 8 PRO"/>
      <div class="clearfix">
        <div class="fl">
          <!-- Rengöring av Bundleware -->
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/feature-01.png')?>" alt=""/></dt>
            <dd>
              <h3>Bundleware Deïnstalleren</h3>
              <p>
                Verwijder vervelende bundleware, die ongemerkt geïnstalleerd is, om ruimte vrij te maken.
              </p>
              <p><b>*Alleen PRO</b></p>
            </dd>
          </dl>
          <!-- Borttagning av Felaktiga Plugins  -->
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/feature-02.png')?>" alt=""/></dt>
            <dd>
              <h3>Schadelijke Plug-ins Verwijderen</h3>
              <p>
                Verwijder schadelijke en reclamemakende plug-ins om veilig te kunnen browsen.
              </p>
              <p><b>* Alleen PRO</b></p>
            </dd>
          </dl>
        </div>
        <div class="fr">
          <!-- Inga Envisa Program -->
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/feature-03.png')?>" alt=""/></dt>
            <dd>
              <h3>Geen Hardnekkige Programma’s</h3>
              <p>
               Verwijdert elk programma, ook als andere software dat niet kan.
              </p>
              <p><b>* Alleen PRO </b></p>
            </dd>
          </dl>
          <!-- Rengör Rester Automatiskt -->
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/feature-04.png')?>" alt=""/></dt>
            <dd>
              <h3>Automatisch Resten Opschonen</h3>
              <p>
                Detecteer en verwijder automatisch restanten van verwijderde programma’s 
              </p>
              <p><b>* Alleen PRO</b></p>
            </dd>
          </dl>
        </div>
      </div>
    </div>
  </div>
  <!-- feature end -->

  <!-- centbuy start -->
  <div class="centbuy">
    <h2> Kies Nu PRO voor een Schonere PC & Veiligere Browse </h2>
    <div class="wrapper clearfix">
      <div class="fl">
        <img src="<?php echo getStaticUrl('images/iu-small-box.png')?>" alt="IObit Uninstaller 8 PRO"/>
      </div>
      <div class="price fr">
        <div class="count">
          <p class="watching">
            <span class="surplusGift viewNum"><?php echo $viewNum;?></span>  mensen kijken, slechts <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em>  over!
          </p>
        </div>
        <p><strong><big>€</big>14<big>,99</big></strong> <del>€99,93 </del></p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=nl-iu81y3pcpfsd1499&ref=nl_iu8rightcorner1499purchase1811b<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=nl_purchase_iu"
           onclick="ga('send', 'event', 'iubuy', 'buy', 'iuxrpurchase1811b-nl')">
           Activeer Nu
        </a>
        <p class="year">1-jarig abonnement / 3 PC’s</p>
      </div>
    </div>
  </div>
  <!-- centbuy end -->

  <!-- comparison start -->
  <div class="comparison" id="compare">
    <div class="wrapper">
      <h2>Wat u precies krijgt als u nu activeert:</h2>
      <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <thead>
        <tr>
          <th class="itema">IObit Uninstaller <br> Free</th>
          <th class="itemb"><img src="<?php echo getStaticUrl('images/vs.png')?>"></th>
          <th class="itemc"><span>IObit Uninstaller <br> <b>Pro</b></span></th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td class="itema"><i class="all-icons free">√</i></td>
          <td class="itemb">Deïnstalleer Ongewenste Programma’s & Plug-ins</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Deïnstalleer Bundleware  </td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Verwijder Hardnekkige Programma’s</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Verwijder Schadelijke/Reclamemakende Plug-ins</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Verwijder Restanten</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Update Programma’s in 1 klik</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Automatisch Updaten</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema last"></td>
          <td class="itemb"></td>
          <td class="itemc last"></td>
        </tr>
        </tbody>
      </table>
    </div>
  </div>
  <!-- comparison end -->

  <!-- footbuy start -->
  <div class="footbuy">
    <div class="wrapper">
      <h3>MIS HET NIET!</h3>
      <h2>Krijg Alleen Nu 85% KORTING op een Schonere, Snellere en Veiligere PC</h2>
      <div class="price">
        <p><strong><big>€</big>14<big>,99</big></strong> <del>€99,93 </del></p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=nl-iu81y3pcpfsd1499&ref=nl_iu8rightcorner1499purchase1811c<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=nl_purchase_iu"
           onclick="ga('send', 'event', 'iubuy', 'buy', 'iuxrpurchase1811c-nl')">
          Activeer Nu
        </a>
        <p id="footdown" class="countdown">Wees er snel bij! <b>05</b>M:<b>00</b>S:<b class="last">000</b>Ms over</p>
      </div>
    </div>
  </div>
  <!-- footbuy end -->

  <!-- review start -->
  <div class="review wrapper">
    <div class="content">
      <dl class="active">
        <dt>
        <h3>Klantbeoordeling</h3></dt>
        <dd>
          <h4>
            "Uninstaller is een geweldig programma dat alle resten die zich in het systeem nestelen, gemakkelijk verwijdert van de harde schijf en ruimte in het register vrijmaakt."
          </h4>
        </dd>
        <dd>
          " Uninstaller is een geweldig programma om resten van verwijderde programma’s op te sporen en te verwijderen. De standaard Windows Uninstaller werkt wel, maar reinigt niet alle restbestanden. IObit Uninstaller heeft 35 bestanden grondig van mijn PC verwijderd. Ik heb de licentie voor 3 PC’s aangeschaft, zodat ik dit programma bij mijn hele familie op de computer kan installeren.” 
        </dd>
      </dl>
      <dl>
        <dt>
        <h3>Klantbeoordeling</h3></dt>
        <dd>
          <h4>
            "IObit Uninstaller is waarschijnlijk de beste software om onnodige en ongebruikte programma’s te verwijderen.” 
          </h4>
        </dd>
        <dd>
          "In tegenstelling tot de basis uninstaller van Windows, verwijdert IObit Uninstaller ook resten van programma’s die uw PC vertragen. Ik gebruik dit programma al meerdere jaren en ik blijf het iedereen aanraden voor een snelle en schone PC."
        </dd>
      </dl>
      <dl>
        <dt>
        <h3>Klantbeoordeling</h3></dt>
        <dd>
          <h4>"IObit Uninstaller is een van de beste deïnstallatie programma’s."</h4>
        </dd>
        <dd>
          " IObit Uninstaller verwijdert bestanden en programma’s enorm snel en grondig. Dit programma is volledig afgestemd op Windows 10. Je kunt gemakkelijk allerlei vervelende plug-ins en vooraf geïnstalleerde Windows apps verwijderen. U krijgt ook een melding wanneer dubbel geïnstalleerde of ongebruikte programma’s worden gevonden. Bedankt voor deze geweldige software!”
        </dd>
      </dl>
      <dl>
        <dt>
        <h3>Klantbeoordeling</h3></dt>
        <dd>
          <h4>
            "Ik gebruik IObit Uninstaller al meer dan 3 jaar. Dit programma blijft zich verbeteren!”
          </h4>
        </dd>
        <dd>
          "IObit Uninstaller wordt elke update verbeterd. Het programma laadt snel en voor iedereen toegankelijk. Ik gebruik deze software voor het verwijderen van bundleware, krachtig scannen op restbestanden, bestanden te versnipperen en om software bij te werken. Met de start-up manager, kun je de opstartsnelheid maximaal versnellen.”
        </dd>
      </dl>
    </div>
    <ul class="users clearfix">
      <li class="active">
        <div class="pic"><img src="<?php echo getStaticUrl('images/joseph-yu.png')?>" alt="Joseph Yu">
        </div>
        <p>Joseph Yu</p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo getStaticUrl('images/sergey-erlich.png')?>" alt="Sergey Erlich"></div>
        <p>Sergey Erlich</p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo getStaticUrl('images/ada-gortler.png')?>" alt="Áda Görtler">
        </div>
        <p>Áda Görtler</p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo getStaticUrl('images/lovro-zuzic.png')?>" alt="Lovro Žužić">
        </div>
        <p>Lovro Žužić</p>
      </li>
    </ul>
  </div>
  <!-- review end -->

  <!-- awards start -->
  <div class="awards wrapper">
    <h2>Vertrouwd en bekroond door de volgende media</h2>
    <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
  </div>
  <!-- awards end -->

  <div class="bottom">
    <div class="wrapper">
      <!-- service start -->
      <div class="service clearfix">
        <dl class="fl">
          <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
          <dd>
            <h4>Probeer ZONDER RISICO – met onze 60 dagen niet-goed-geld-terug garantie</h4>
            <p>Door PRO te activeren krijgt u een schonere pc en kunt u veiliger browsen voor een schappelijke prijs.</p>
          </dd>
        </dl>
        <dl class="fr clearfix">
        
          <dd>
            <h4>Wij accepteren:</h4>
          </dd>
          <dt><img src="<?php echo getStaticUrl('images/payments.png')?>" alt=""/></dt>
        </dl>
      </div>
      <!-- service end -->

      <!-- footer start -->
      <div class="footer">
        <dl>
          <dt>*Opmerkingen:</dt>
          <dd>- IObit behoudt zich het recht voor dergelijke promoties te allen tijde naar eigen goeddunken te wijzigen zonder dit van tevoren aan te kondigen.</dd>
          <dd>- Resultaten met betrekking tot verbeteringen in prestaties kunnen afwijken afhankelijk van het systeem.</dd>
        </dl>
        <p>Copyright © 2005 - <?php echo date('Y')?> IObit. Alle Rechten Voorbehouden</p>
      </div>
      <!-- footer end -->
    </div>
  </div>

  <!-- backtotop start -->
  <div id="backtotop" class="backtotop">top</div>
  <!-- backtotop end -->

</div>

<script>
  var refStr = '<?php echo $refStr;?>';
  var imgSrc = "<?php echo getStaticUrl('images/iu-mask-box.png')?>";
  var _href = "https://www.iobit.com/buy.php?product=nl-iu81y3pcpfsd1399&ref=nl_iu8rightcornerpopuppurchase1811<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=nl_purchase_iu&tw=-8";
  var _ga = "ga('send', 'event', 'iubuy', 'buy', 'iuxrpurchase1811-nl')";
  var viewNum = "<?php echo $viewNum;?>";
</script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>

</body>
</html>