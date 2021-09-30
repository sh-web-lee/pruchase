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
  $cName='nliuoct'.$date;
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

$refStr='';
if(in_array($_GET['pop'],array('x_iu'))){
  $refStr.='-'.$_GET['pop'];
}
if(in_array($_GET['to'],array('softall','soft','iuself','bdplug','plug','uqprom','bdfail',
    'bdprog','iuasc'))){
  $refStr.='-'.$_GET['to'];
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>80% Kerstkorting op IObit Uninstaller PRO</title>
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
    <a class="logo" href="https://www.iobit.com/nl/index.php" target="_blank">IObit</a>
    <!-- title -->
    <h1>¡Feliz Navidad! BEPERKT BESCHIKBAAR</h1>
    <!-- gift-box -->
    <span class="gift-box"></span>
    <!-- left-message -->
    <div class="left-message fl">
      <img class="banner-asc" src="<?php echo $pResUrl;?>images/banner-iu.png" alt="">
      <img class="banner-reduce" src="<?php echo $pResUrl;?>images/banner-iu-reduce.png" alt="">
      <p class="notes">TWEE GRATIS CADEAUS VOOR DE EERSTE 100 KOPERS <br> <i></i> Beperkt beschikbaar! Slechts  <b class="packsNum"><?php echo $packsNum ?></b> over <span class="reduce">-1</span></p>
      <!-- line -->
    </div>
    <!-- right-message -->
    <div class="right-message fr">
      <!-- ASC12 -->
      <h3>
        IObit Uninstaller 8 PRO 
        <span>
          1 jaar / 3 pc’s
        </span>
      </h3>
      <!-- notes -->
      <p class="notes">+ Twee Kerstcadeaus</p>
      <!-- line -->
      <hr>
      <!-- price -->
      <p class="price">
        <del>€99,93 </del> <b>€</b><strong>17</strong><b>,99</b>
      </p>
      <!-- buybtn -->
      <a class="buybtn"
         href="https://www.iobit.com/buy.php?product=nl-iu81y3pcpfsd1799&ref=nl_iu83pcpfsdpurchase1811<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=nl_purchase_iu"
         onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase1811-nl')">
        <span>Profiteer Nu</span>
        <!-- ribbon -->
        <i class="ribbon ribbon2"></i>
      </a>
      <!-- attention -->
      <p class="attention"><i></i> Al meer dan  <b class="buyNum"><?php echo $buyNum ?></b> keer gekocht</p>
    </div>
  </div>
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
<div class="payments wrapper">
  <img src="<?php echo $pResUrl;?>images/payments.png" alt="">
</div>
<!-- intro start -->
<div class="intro wrapper">
  <div class="feature clearfix">
    <img class="fl" src="<?php echo getStaticUrl('images/screen.png')?>" alt="" />
    <ul class="fl">
      <li>Ongewenste programma’s en Windows Apps kunnen gemakkelijk en snel verwijdert worden.</li>
      <li class="blue">U werkt gemakkelijk alle software bij met slechts één muisklik.</li>
      <li class="three">Met de verbeterde scantechnologie worden restbestanden automatisch opgespoort en verwijdert.</li>
      <li class="four blue">U krijgt automatisch een melding wanneer gebundelde software, adware of plug-ins geïnstalleerd worden.</li>
    </ul>
  </div>
</div>
<!-- intro end -->

<!-- betweenbuy start -->
<div class="betweenbuy wrapper clearfix">
  <!-- title -->
  <p><span>80% KORTING </span> op IObit Uninstaller PRO en krijg</p>
  <h2><img src="<?php echo $pResUrl;?>images/smail-gift.png" alt=""> Gratis cadeaupakket <span>(T.W.V. €69,94) </span> met twee exclusieve kerstcadeaus!</h2>
  <!-- SD box -->
  <dl>
    <dt><img src="<?php echo $pResUrl;?>images/sd-box.png" alt=""></dt>
    <dd>
      <p class="rate">  <del>€29,99</del> <strong>€<b>0</b></strong></p>
      <p class="des">
       Veilige en automatische schijfdefragmentatie
      </p>
      <p class="des">Maximale schijfprestaties en snellere toegang  tot uw bestanden</p>
    </dd>
  </dl>
  <!-- PF box -->
  <dl>
    <dt><img src="<?php echo $pResUrl;?>images/pf-box.png" alt=""></dt>
    <dd>
      <p class="rate">  <del>€39,95</del> <strong>€<b>0</b></strong></p>
      <p class="des">
       Vergrendel uw belangrijke mappen met  een wachtwoord!
      </p>
      <p class="des">Voorkom dat uw gegevens gestolen of bekeken worden!</p>
    </dd>
  </dl>
  <!-- clear float  -->
  <div class="clear"></div>
  <!-- price -->
  <p class="price">
    <del>€99,93 </del> <b>€</b><strong>17</strong><b>,99</b><br>
  </p>
  <!-- buybtn -->
  <a class="buybtn"
     href="https://www.iobit.com/buy.php?product=nl-iu81y3pcpfsd1799&ref=nl_iu83pcpfsdpurchase1811<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=nl_purchase_iu"
     onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase1811-nl')">
     Claim Nu Uw Gratis Cadeaus
    <!-- ribbon -->
    <i class="ribbon ribbon2"></i>
  </a>
  <!-- notes -->
  <p class="notes"><i></i> Beperkt beschikbaar! Slechts <b class="packsNum"><?php echo $packsNum ?></b> over</p>

</div>
<!-- betweenbuy end -->

<!-- awards start -->
<div class="awards ">
  <h2>Bekroond en vertrouwd door de volgende media</h2>
  <img src="<?php echo $pResUrl;?>images/awards-icon.png" alt="">
</div>
<!-- awards end -->

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
      <p>Joseph Yu <span>2016</span></p>
    </li>
    <li>
      <div class="pic"><img src="<?php echo getStaticUrl('images/sergey-erlich.png')?>" alt="Sergey Erlich"></div>
      <p>Sergey Erlich <span>2016</span></p>
    </li>
    <li>
      <div class="pic"><img src="<?php echo getStaticUrl('images/ada-gortler.png')?>" alt="Áda Görtler">
      </div>
      <p>Áda Görtler <span>2016</span></p>
    </li>
    <li>
      <div class="pic"><img src="<?php echo getStaticUrl('images/lovro-zuzic.png')?>" alt="Lovro Žužić">
      </div>
      <p>Lovro Žužić <span>2016</span></p>
    </li>
  </ul>
</div>
<!-- review end -->


<!-- comparison start -->
<div class="comparison wrapper" id="compare">
  <table border="0" cellspacing="0" cellpadding="0" width="100%">
    <thead>
      <tr>
        <th class="text" colspan="2">Welke voordelen biedt de PRO editie?</th>
        <th class="itemb">IObit Uninstaller 8 <b>FREE</b></th>
        <th class="itema">
          IObit Uninstaller 8 <b>PRO</b>
        </th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_01.png')?>" alt="" /></td>
        <td class="virtue">Deïnstalleer programma's via een snelkoppeling, openstaand venster of systeemvakicoon <span class="nuo">Nieuw</span></td>
        <td class="itemb"><i>√</i></td>
        <td class="itema"><i class="red">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_02.png')?>" alt="" /></td>
        <td class="virtue">Verwijdert Plug-ins & extensies in Edge, Chrome, IE, Firefox, etc </td>
        <td class="itemb"><i>√</i></td>
        <td class="itema"><i class="red">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_03.png')?>" alt="" /></td>
        <td class="virtue">Kan hardnekkige programma's verwijderen <span class="three">Verbeterd</span></td>
        <td class="itemb"><i class="circle">√</i></td>
        <td class="itema"><i class="red">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt="" /></td>
        <td class="virtue">Detecteert en verwijdert programma's die meekomen met freeware <span class="nuo">Nieuw</span></td>
        <td class="itemb"><i class="circle">√</i></td>
        <td class="itema"><i class="red">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt="" /></td>
        <td class="virtue">Verwijdert automatisch restbestanden die andere uninstall programma’s niet verwijderd krijgen <span>Verbeterd</span></td>
        <td class="itemb"><i class="circle">√</i></td>
        <td class="itema"><i class="red">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_06.png')?>" alt="" /></td>
        <td class="virtue">Verwijdert Kwaadaardige plug-ins voor een veilige browser <span class="three two">Verbeterd</span></td>
        <td class="itemb"><i class="circle">√</i></td>
        <td class="itema"><i class="red">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_07.png')?>" alt="" /></td>
        <td class="virtue">Indentificeert en verwijdert adverterende plug-ins <span class="three two">Verbeterd</span></td>
        <td class="itemb"><i class="circle">√</i></td>
        <td class="itema"><i class="red">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_05.png')?>" alt="" /></td>
        <td class="virtue">Update alle belangrijke software in 1 klik <span class="three five">Verbeterd</span></td>
        <td class="itemb"><i class="circle">√</i></td>
        <td class="itema"><i class="red">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_09.png')?>" alt="" /></td>
        <td class="virtue">Automatische update naar de nieuwste versie</td>
        <td class="itemb"><i class="circle">√</i></td>
        <td class="itema"><i class="red">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_10.png')?>" alt="" /></td>
        <td class="virtue">Gratis 24/7 technische ondersteuning</td>
        <td class="itemb"><i class="circle">√</i></td>
        <td class="itema"><i class="red">√</i></td>
      </tr>
    </tbody>
    <tfoot>
      <tr>
        <th colspan="2"></th>
        <th class="itemb"></th>
        <th class="itema">
          <a class="buybtn" 
             href="https://www.iobit.com/buy.php?product=nl-iu81y3pcpfsd1799&ref=nl_iu83pcpfsdpurchase1811<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=nl_purchase_iu"
             onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase1811-nl')">
            Koop Nu
          </a>
        </th>
      </tr>
    </tfoot>
  </table>
</div>
<!-- comparison end -->
<!-- service start -->
<div class="service clearfix">
  <div class="wrapper">
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
</div>
<!-- service end -->
<!-- footer start -->
<div class="footer">
  <dl class="annotation wrapper">
    <dt>Let op:</dt>
    <dd>*Promoties kunnen door IObit op elk moment en zonder voorafgaande kennisgeving veranderd worden naar eigen goeddunken</dd>
    <dd>* De gegevens kunnen variëren op basis van verschillende systemen en computers.</dd>
  </dl>
  <p class="copyright">Copyright  2005 - <?php echo date('Y')?> IObit. Alle rechten voorbehouden</p>
</div>
<!-- footer end -->
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>