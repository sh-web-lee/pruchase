<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
$refStr='';
if(in_array($_GET['to'],array('db_ac_iu','cr_a','cr_b'))){
  $refStr.='-'.$_GET['to'];
}
if(in_array($_GET['st'],array('ascu_aciu','asc_aciu'))){
  $refStr.='-'.$_GET['st'];
}
  include $pRootUrl.'include/common.inc.php';
?>
<!DOCTYPE html>
<html lang="dk">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>79% rabat -- Kun til IObits værdsatte kunder</title>
<meta name="Copyright" content="IObit">
<meta name="description" content="Eksklusivt tilbud kun til værdsatte IObit-brugere og inviterede medlemmer. Det bedste afinstalleringsprogram fjerner vedhæftede og uønskede programmer og plu-ins.">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Montserrat:500,800'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com/dk/index.php" target="_blank">
        <img src="<?php echo $pResUrl; ?>images/logo.png" alt="IObit">
      </a>
      <div class="title">
        <h1>IObit Uninstaller 11 PRO</h1>
        <p>Det bedste afinstalleringværktøj til at fjerne bundled og uønskede programmer med et klik.</p>
      </div>
      <div class="offer clearfix">
        <img class="fl" src="<?php echo getStaticUrl('images/boxshot.png')?>" alt="" />
        <div class="discount fl">
          <h2>79% rabat</h2>
          <p>Kun for værdsatte IObit-brugere!</p>
        </div>
      </div>
      <div class="pricebox">
        <dl class="price">
          <dt>KUN: <strong>kr.79 </strong><del>kr.379</del></dt>
          <dd>
            <a class="buybtn bigbtn"
               href="http://www.iobit.com/buy.php?product=dk-iu11-ac&ref=dk_iu-ac<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=dk_ac_iu"
               onclick="ga('send', 'event', 'iubuy', 'buy', 'iuacnew-dk');">
              <div class="inner">
                <i class="all-icons"></i>
                <span>Aktiver nu</span>
              </div>
            </a>
          </dd>
          <dd>1 år / 1 pc</dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- container start -->
  <!-- feature start -->
  <div class="feature wrapper">
    <h2>Hvad kan IObit Uninstaller PRO gøre for dig?</h2>
    <div class="clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_05.png')?>" alt="" /></dt>
        <dd>
          <h3>SLET STÆDIGE PROGRAMMER</h3>
          <p>Fjerner programmer helt med afinstallationsproblemer og rester med et enkelt klik.</p>
        </dd>
      </dl>
      <dl class="right one">
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_06.png')?>" alt="" /></dt>
        <dd>
          <h3>INSTALLATION MONITOR</h3>
          <p>Overvåg og dokumenter alle systemændringer forårsaget af programinstallationer og tilbagekald dem, når programmerne ikke længere er ønskede.</p>
        </dd>
      </dl>
    </div>
    <div class="clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_01.png')?>" alt="" /></dt>
        <dd>
          <h3>OPFANG OG AFINSTALLER BUNDLEWARE</h3>
          <p>Opdag adware, værktøjslinjer og uønskede tredjepartsprogrammer og freeware, som stjæler dine private data.</p>
        </dd>
      </dl>
      <dl class="right">
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_02.png')?>" alt="" /></dt>
        <dd>
          <h3>Hurtig og sikker browser</h3>
          <p>Identificer annoncebaseret og ondsindet plug-ins og bliv fri for browser notifikationer og få en sikker og problemfri browsing oplevelse</p>
        </dd>
      </dl>
    </div>
    <div class="clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_03.png')?>" alt="" /></dt>
        <dd>
          <h3>RYD RESTER AUTOMATISK</h3>
          <p>Fjern resterende filer fra afinstallerede programmer fuldstændigt.</p>
        </dd>
      </dl>
      <dl class="right">
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_04.png')?>" alt="" /></dt>
        <dd>
          <h3>SOFTWARE OPDATERINGER</h3>
          <p>1 Klik til at opgradere vigtigt software på din PC uden nogen brugeraktion.</p>
        </dd>
      </dl>
    </div>
  </div>
  <!-- feature end -->

  <!-- awards start -->
  <div class="awards">
    <div class="wrapper">
      <h2>Prisvinder på verdensplan</h2>
      <img src="<?php echo $pResUrl; ?>images/awards.png" alt="">
    </div>
  </div>
  <!-- awards end -->

  <!-- review start -->
  <div class="review wrapper">
    <div class="content">
      <dl>
        <dt>
        <h3>Brugeranmeldelser</h3></dt>
        <dd><h4></h4></dd>
        <dd>
          "Jeg har brugt IObits programmer i årevis med stor tilfredshed! Af denne grund holder jeg mig til IObits produkter. Jeg har tidligere repareret bærbare computere og mobiltelefoner (android) og efterlader dem altid med IObits produkter installeret og råder kunderne til regelmæssigt at ’’trykke på det store C’’ og siger til dem, at det automatisk vil rette og accelerere deres bærbar/computer/mobil!
          Jeg anbefaler varmt deres afinstallationsprogram Uninstaller (og den seneste beta) som er et sikkert og pålideligt program, som fjerner stædige programmer. Vigtigere er, at det også fjerner skjulte koder som programører efterlader for at bringe reklamer om at installere programmet igen!
          Alle IObits programmer er sikre og nemme at bruge og de passer på din PC."
        </dd>
      </dl>
      <dl>
        <dt>
        <h3>Brugeranmeldelser</h3></dt>
        <dd><h4></h4></dd>
        <dd>
          "Jeg synes at IObit Uninstaller er fantastisk og det har alt hvad du behøver og mere til. Jeg elsker det faktum, at det afinstallerer alle resterende fragmenter. Det har også en opdateringssoftware, som notificerer dig, når et af dine programmer har brug for at blive opdateret og det afinstallerer i bundter, hvilket virkelig gør det til en vinder. Faktisk er det alt hvad du behøver for at holde din computer i topform og klar til køre til hver en tid."
        </dd>
      </dl>
      <dl class="active">
        <dt>
        <h3>Medieanmeldelser</h3></dt>
        <dd>
          <h4></h4>
        </dd>
        <dd>
          "Hvis du har brug for et program, som lader dig afinstallere programmer fuldstændigt, skal du fyre op under IObit Uninstaller. Dette hjælpeprogram gør det til en leg at slette apps herunder de filer, der ofte er efterladt, når du bruger Windows til at slette programmer fra din harddisk. Kort sagt, hvis du bruger en Windows-pc, bør du downloade IObit Uninstaller til at afinstallere programmer."
        </dd>
      </dl>
      <dl>
        <dt>
        <h3>Medieanmeldelser</h3></dt>
        <dd>
          <h4></h4>
        </dd>
        <dd>
          "Dette nemme og informative afinstallationsværktøj renser, konfigurerer og optimerer din pc. Brugere kan downloade det på et øjeblik. Dette afinstallationsværktøj kan kategoriseres som den bedste uninstaller og det giver brugerne mulighed for at afinstallere flere progranner på en gang. Det tilbyder brugere at køre en "grundig scanning" for at gå dybere og finde efterladenskaber. Ydelsen alene gør det lille afinstalleringsværktøj værd at beholde."
        </dd>
      </dl>
      <dl>
        <dt>
        <h3>Brugeranmeldelser</h3></dt>
        <dd><h4></h4></dd>
        <dd>
          "IObit Uninstaller er det bedste program til at fjerne programmer på din computer, det er hurtigt og super effektivt. Den basale uninstaller på Windows kan slet ikke sammenlignes hermed, det renser grundigt alle rester af programmer, så der ikke forekommer nogen forsinkelser på computeren. Jeg har brugt det i et par måneder og kan slet ikke undvære det, jeg anbefaler det både til venner og familie.
          Tak, IObit Uninstaller er fantastisk."
        </dd>
      </dl>
    </div>
    <ul class="users clearfix">
      <li>
        <div class="pic"><img src="<?php echo $pResUrl; ?>images/jeff-a-watts.png" alt="Jeff A Watts">
        </div>
        <p>Jeff A Watts</p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo $pResUrl; ?>images/lynett-van-niekerk.png" alt="Lynette van Niekerk">
        </div>
        <p>Lynette van Niekerk</p>
      </li>
      <li class="active">
        <a href="https://www.pcmag.com/" target="_blank">
          <div class="pic"><img src="<?php echo $pResUrl; ?>images/pc-magazine.png" alt="PC Magazine"></div>
          <p>PC Magazine</p>
        </a>
      </li>
      <li>
        <a href="https://www.makeuseof.com/" target="_blank">
          <div class="pic"><img src="<?php echo $pResUrl; ?>images/makeuseof.png" alt="MakeUseOf"></div>
          <p>MakeUseOf</p>
        </a>
      </li>
      <li>
        <div class="pic"><img src="<?php echo $pResUrl; ?>images/paulo-martins.png" alt="Paulo Martins"></div>
        <p>Paulo Martins</p>
      </li>
    </ul>
  </div>
  <!-- review end -->

  <!-- footbuy start -->
  <div class="footbuy">
    <div class="wrapper">
      <h2>Garanterer en ren og let PC og sikker online Surfing</h2>
      <div class="pricebox">
        <dl class="price">
          <dt>KUN: <strong>kr.79 </strong><del>kr.379</del></dt>
          <dd>
            <a class="buybtn bigbtn"
               href="http://www.iobit.com/buy.php?product=dk-iu11-ac&ref=dk_iu-ac<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=dk_ac_iu"
               onclick="ga('send', 'event', 'iubuy', 'buy', 'iuacnew-dk');">
              <div class="inner">
                <i class="all-icons"></i>
                <span>Aktiver nu</span>
              </div>
            </a>
          </dd>
          <dd>1 år / 1 pc</dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- footbuy end -->
  <!-- container end -->

  <!-- footer start -->
  <div class="footer">© 2005 - <?php echo date('Y')?> IObit. Rettigheder forbeholdes</div>
  <!-- footer end -->

  <!-- floatlayer start -->
  <div class="floatlayer" id="floatlayer">
    <div class="wrapper clearfix">
      <div class="left">
        <h2>EKSKLUSIVT TILBUD</h2>
        <p>Få <strong>79% RABAT</strong> og fjern uønskede programmer og generende pop-op annoncer</p>
      </div>
      <div class="pricebox">
        <dl class="price fr">
          <dt><strong>kr.79 </strong><del>kr.379</del></dt>
          <dd>
            <a class="buybtn smallbtn"
               href="http://www.iobit.com/buy.php?product=dk-iu11-ac&ref=dk_iu-ac<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=dk_ac_iu"
               onclick="ga('send', 'event', 'iubuy', 'buy', 'iuacnew-dk');">
              <div class="inner">
                <i class="all-icons"></i>
                <span>Aktiver nu</span>
              </div>
            </a>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- floatlayer end -->

<script src="<?php echo $pResUrl; ?>script/script.js"></script>
</body>
</html>