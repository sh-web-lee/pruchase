<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';
  $reduceNum=300041325;
  $reTime=5;
  $buyNum = number_format(ceil(microtimeFloat()*1000/(1000*$reTime)) - $reduceNum);

$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
if(!empty($_GET['to'])){
  $refStr.='-'.$_GET['to'];
}
$refStr.=empty($_GET['user'])?'':('-'.$_GET['user']);
$refStr.=empty($_GET['insday'])?'':('-'.$_GET['insday']);
?>
<!DOCTYPE html>
<html lang="dk">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Eksklusive 80% rabat på IObit Uninstaller 11 PRO & og få en product gratis</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Montserrat:400,500,600'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com/dk/index.php" target="_blank">IObit</a>
      <h1>En velkomstgave til dig</h1>
      <h2>Dette er en eksklusiv velkomstgave（værdi kr. 469） til vores nye medlemmer!</h2>
      <div class="left-img">
        <img src="<?php echo getStaticUrl('images/pf-box.png')?>" alt="" class="pfbox">
        <img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="" class="iubox">
      </div>
      <div class="right-message">
        <div class="box active gifts count-time" data-num="pc0" data-index="0">
          <h3><i class="all-icons"></i> Udløber om: <span>08</span>m, <span>50</span>s, <span class="time-mi">690</span>ms</h3>
          <p class="left-message">
            <strong>IObit Uninstaller PRO</strong> (1 år, 3 pc'er)
            <span><i class="all-icons"></i> IObit Uninstaller PRO <b>(ekstra 2 måneder)</b></span>
            <span><i class="all-icons"></i>  Protected Folder<b>gave</b></span>
          </p>
          <strong class="price">Du sparer <b>kr. 639 </b></strong>
        </div>
        <div class="box" data-num="pc1" data-index="1">
          <p class="left-message">
            <strong>IObit Uninstaller PRO</strong> (1 år, 3 pc'er)
          </p>
          <strong class="price">Du sparer <b>kr. 220 </b></strong>
        </div>
        <dl class="price">
          <dt><strong>kr. <b>159</b></strong> <del>kr. 798</del></dt>
          <dd><a href="http://www.iobit.com/buy.php?product=dk-iu113pcpf159&ref=dk_iu113pcpf1906newinstall<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=dk_purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase3pc1907newinstall-dk')" class="buybtn"><i class="all-icons"></i> <span>Køb nu</span></a></dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- container start -->
  <!-- payments start -->
  <div class="payments"><img src="<?php echo getStaticUrl('images/payments.png')?>" alt="" /></div>
  <!-- payments end -->

  <!-- intro start -->
  <div class="intro wrapper">
    <h2>Afinstaller kraftigt flere programmer og plug-ins for en <br> sikrere pc og sikrere online-browsing </h2>
    <img src="<?php echo getStaticUrl('images/screen.png')?>" alt="" />
    <div class="list list01">
      <img src="<?php echo getStaticUrl('images/feature_01.png')?>" alt="" />
      <dl>
        <dt><b>Effektivitet</b><span>forbedret</span></dt>
        <dd>Fjern stædige og bundlede programmer for <br> at frigøre diskplads og bliv fri for ondsindede og reklarmerende <br> plug-ins og brows internettet mere sikkert.</dd>
      </dl>
    </div>
    <div class="list list02">
      <img src="<?php echo getStaticUrl('images/feature_02.png')?>" alt="" />
      <dl>
        <dt><b>Simpelt </b><span class="neu">ny</span></dt>
        <dd>Med ét klik kan du opdatere vigtigt software på din PC uden <br> brugerindgriben.</dd>
      </dl>
    </div>
    <div class="list list03">
      <img src="<?php echo getStaticUrl('images/feature_03.png')?>" alt="" />
      <dl>
        <dt><b>Automatik  </b><span>forbedret</span></dt>
        <dd>Tilbagekalder ændringer automatisk ved <br> afinstallering af programmet, som har <br> foretaget ændringerne.</dd>
      </dl>
    </div>
    <div class="list list04">
      <img src="<?php echo getStaticUrl('images/feature_04.png')?>" alt="" />
      <dl>
        <dt><b>Intelligent </b><span class="neu">ny</span></dt>
        <dd>Fjern rester fra afinstallerede programmer,  der er blevet <br> fjernet ved brug af andre  værktøj end IObit Uninstaller.  </dd>
      </dl>
    </div>
    <a class="compareBtn" href="javascript: void(0);">Se mere om pro-versionen >></a>
  </div>
  <!-- intro end -->
  <div class="gift-message">
    <div class="wrapper">
      <h2>Eksklusive gaver til dig – kun i 2019</h2>
      <h3>Nu får du et privatlivsbeskyttelsesværktøj gratis!</h3>
      <dl class="box">
        <dt><img src="<?php echo getStaticUrl('images/pf-box.png')?>" alt="" width="178"></dt>
        <dd>
          <h4>Protected Folder <span>gratis</span></h4>
          <p>Ingen bekymringer for datatyveri <br> Beskyt dine vigtige og personlige filer</p>
        </dd>
      </dl>
      <dl class="price">
        <dt><strong>kr. <b>159</b></strong> <del>kr. 798</del></dt>
        <dd><a href="http://www.iobit.com/buy.php?product=dk-iu113pcpf159&ref=dk_iu113pcpf1906newinstall<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=dk_purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase3pc1907newinstall-dk')" class="buybtn"><i class="all-icons"></i> <span>Køb nu</span></a></dd>
      </dl>
    </div>
  </div>
  <!-- awards start -->
  <div class="awards wrapper">
    <h2>Priser fra hele verden </h2>
    <img src="<?php echo getStaticUrl('images/awards.png')?>" alt="" />
  </div>
  <!-- awards end -->
  <div class="review">
    <div class="wrapper">
      <div class="box">
        <h2>Medieanmeldelser</h2>
        <div class="message">
          <img src="<?php echo getStaticUrl('images/pcmag-editchoice.png')?>" alt="">
          <h3>PC Magazine</h3>
          <p class="line">"Hvis du har brug for et program, der lader dig afinstallere programmer fuldstændigt, grundigt og nemt, skal du starte IObit Uninstaller. Dette værktøj, der nu er kompatibelt med Windows 10, gør det til en leg at fjerne apps, inklusiv de filer, der ofte efterlades, når et program fjernes fra en pc, også de irriterende webbrowser-værktøjslinjer og plug-ins. Kort sagt, hvis du bruger en Windows-pc, skal du downloade IObit Uninstaller."</p>
          <img src="<?php echo getStaticUrl('images/makeuseof.png')?>" alt="">
          <h3>MakeUseOf</h3>
          <p>"Dette nemme og informative afinstallationsværktøj renser, konfigurerer og optimerer din pc.Brugere kan downloade det på et øjeblik. Dette afinstallationsværktøj kan kategoriseres som den bedste uninstaller og det giver brugerne mulighed for at afinstallere flere progranner på en gang. Det tilbyder brugere at køre en "grundig scanning" for at gå dybere og finde efterladenskaber. Ydelsen alene gør det lille afinstalleringsværktøj værd at beholde."</p>
        </div>
      </div>
      <div class="box">
        <h2>Brugeranmeldelser</h2>
        <div class="message">
          <img src="<?php echo getStaticUrl('images/lynett-van-niekerk.png')?>" alt="">
          <h3>Lynette van Niekerk</h3>
          <p class="line jos">"Jeg synes at IObit Uninstaller er fantastisk og det har alt hvad du behøver og mere til. Jeg elsker det faktum, at det afinstallerer alle resterende fragmenter. Det har også en opdateringssoftware, som notificerer dig, når et af dine programmer har brug for at blive opdateret og det afinstallerer i bundter, hvilket virkelig gør det til en vinder. Faktisk er det alt hvad du behøver for at holde din computer i topform og klar til køre til hver en tid."</p>
          <img src="<?php echo getStaticUrl('images/paulo-martins.png')?>" alt="">
          <h3>Paulo Martins</h3>
          <p>"IObit Uninstaller er det bedste program til at fjerne programmer på din computer, det er hurtigt og super effektivt. Den basale uninstaller på Windows kan slet ikke sammenlignes hermed, det renser grundigt alle rester af programmer, så der ikke forekommer nogen forsinkelser på computeren. Jeg har brugt det i et par måneder og kan slet ikke undvære det, jeg anbefaler det både til venner og familie. Tak, IObit Uninstaller er fantastisk."</p>
        </div>
      </div>
    </div>
  </div>
  <!-- comparison start -->
  <div id="compare" class="comparison wrapper">
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
      <thead>
        <tr>
          <th class="text" colspan="2">Se hvad pro-udgave kan gøre for dig:</th>
          <th class="itemb"><span>IObit Uninstaller 11 <b>FREE</b></span></th>
          <th class="space"></th>
          <th class="itema">
            IObit Uninstaller 11 <br> PRO
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_01.png')?>" alt="" /></td>
          <td class="virtue">Afinstallere programmer nemt og hurtigt</td>
          <td class="itemb"><i class="all-icons">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_02.png')?>" alt="" /></td>
          <td class="virtue">Fjern problematiske Windows opdateringer</td>
          <td class="itemb"><i class="all-icons">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_03.png')?>" alt="" /></td>
          <td class="virtue">Hurtig skanning & sletter leftovers automatisk efter standard afinstallering <span>forbedret</span></td>
          <td class="itemb"><i class="all-icons circle">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt="" /></td>
          <td class="virtue">Slet kombinerede programmer og plug-ins  <span class="neu">ny</span></td>
          <td class="itemb"><i class="all-icons circle">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_05.png')?>" alt="" /></td>
          <td class="virtue">Opdag og slet ondsindet plug-ins for en mere sikker browsing <span>forbedret</span></td>
          <td class="itemb"><i class="all-icons circle">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_06.png')?>" alt="" /></td>
          <td class="virtue">Større database til fjernelse af flere uønskede programmer <span>forbedret</span></td>
          <td class="itemb"><i class="all-icons circle">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_07.png')?>" alt="" /></td>
          <td class="virtue">Genkalder automatisk systemændringer under afinstallering.   <span>forbedret</span></td>
          <td class="itemb"><i class="all-icons circle">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt="" /></td>
          <td class="virtue">1-klik for at opdatere alt vigtig software <span class="neu">ny</span></td>
          <td class="itemb"><i class="all-icons circle">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_09.png')?>" alt="" /></td>
          <td class="virtue"> Auto opdater til den seneste Version</td>
          <td class="itemb"><i class="all-icons circle">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_10.png')?>" alt="" /></td>
          <td class="virtue">Gratis 24/7 Teknisk Support on Demand</td>
          <td class="itemb"><i class="all-icons circle">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- comparison end -->
  <div class="bottom-buy">
    <div class="wrapper">
       <div class="left-img">
        <img src="<?php echo getStaticUrl('images/pf-box.png')?>" alt="" class="pfbox" width="165">
        <img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="" class="iubox" width="226">
      </div>
      <ul class="right-message">
        <li class="box active gifts" data-num="pc0" data-index="0"> <span>IObit Uninstaller PRO + <i class="all-icons"></i> <b>Protected Folder </b>    </span> <strong>-80%</strong></li>
        <li class="box" data-num="pc1" data-index="1"><span>IObit Uninstaller PRO     </span> <strong>-55%</strong></li>
      </ul>
      <dl class="price">
        <dt><strong>kr. <b>159</b></strong>  <del>kr. 798</del></dt>
        <dd><a href="http://www.iobit.com/buy.php?product=dk-iu113pcpf159&ref=dk_iu113pcpf1906newinstall<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=dk_purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase3pc1907newinstall-dk')" class="buybtn"><i class="all-icons"></i> <span>Køb nu</span></a></dd>
      </dl>
    </div>
  </div>
  <div class="bottom">
    <div class="servies wrapper clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dt>
        <dd><strong>Tilfredshedsgaranti</strong></dd>
        <dd>60-dages pengene-tilbage-garanti</dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/godaddy.png')?>" alt=""></dt>
        <dd><strong>Betalingssikkerhed</strong></dd>
        <dd>Din betaling er 100% sikker</dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/shop.png')?>" alt=""></dt>
        <dd><strong>Hurtig aktivering</strong></dd>
        <dd>Du vil modtage en aktiveringskode <br> hurtigt efter betalingen</dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/servies.png')?>" alt=""></dt>
        <dd><strong>Kundeservice</strong></dd>
        <dd>Gratis 24/7 teknisk support ved behov</dd>
      </dl>
    </div>
    <!-- annotation start -->
    <dl class="annotation wrapper">
      <dt>Bemærk:</dt>
      <dd>*. Tilbud som dette kan fra tid til anden ændres uden varsel ændres efter vores skøn.</dd>
      <dd>*. Data kan ændres baseret på forskellige systemer eller computere.</dd>
    </dl>
    <!-- annotation end -->

    <!-- footer start -->
    <div class="footer">Copyright   2005 - <?php echo date('Y')?> IObit.  All Rights Reserved</div>
    <!-- footer end -->
  </div>
<script>refStr="<?php echo $refStr;?>";</script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>