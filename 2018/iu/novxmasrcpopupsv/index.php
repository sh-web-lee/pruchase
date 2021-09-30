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
  $cName='frasc'.$date;
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
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Stort jul erbjudande, 85% RABATT på IObit Uninstaller PRO - IObit</title>
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
      <a class="logo" href="https://www.iobit.com/sv/index.php" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
      </a>
      <!-- title -->
      <h1>STORT Jul ERBJUDANDE</h1>
      <p class="best">Sista Chans att Spara Stor - En Gång Om Året!</p>
      <!-- palen -->
      <div class="palen clearfix">
        <div class="left fl">
          <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="IObit Uninstaller 8 PRO"/>
          <div class="hint">
            <dl class="pop-bg">
              <dt>Protected Folder <span><b> Gåvor</b></span></dt>
              <dd>
                1 lösenord för alla filer<br>
                Skydda dina filer från skadliga attacker
              </dd>
              <dt>AMC Security PRO <span><b> Gåvor</b></span></dt>
              <dd>Bästa allt-i-ett städaren och boostaren för <br> Android-enheter</dd>
            </dl>
          </div>
        </div>
        <div class="right fr">
          <h2>IObit Uninstaller 8 PRO</h2>
          <div class="price">
            <div class="count">
              <p class="watching">
                <span class="surplusGift viewNum"><?php echo $viewNum;?></span> tittar, <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> platser kvar nu!
              </p>
              <div class="progressbar">
                <span></span>
              </div>
              <p id="bandown" class="countdown">Skynda! <b>05</b>M: <b>00</b>S: <b class="last">000</b>Ms återstår</p>
            </div>
            <p><strong>219</strong> <span>kr <del> 1 457kr</del></span></p>
            <!-- buybtn -->
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=sv-iu83pcpfamc219&ref=sv_iu83pcpfamcpurchase1811xmasr<?php echo $refStr;?>&refs=sv_purchase_iu"
               onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase1811xmasr-sv')">
              Aktivera Nu
            </a>
            <p class="year">1 Års Prenumeration / 3 Datorer</p>
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
      <h2>Håll Envis Program och Skadliga Plugins Borta Från Din Dator</h2>
      <p class="over">
        IObit Uninstaller PRO, som är betrodd av 25 000 000+ användare över hela världen, håller din dator fri från störningar och <br>
        säkerställer säker surfning på nätet.
      </p>
      <img class="screen" src="<?php echo getStaticUrl('images/asc-screen.png')?>" alt="IObit Uninstaller 8 PRO"/>
      <div class="clearfix">
        <div class="fl">
          <!-- Rengöring av Bundleware -->
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/feature-01.png')?>" alt=""/></dt>
            <dd>
              <h3>Rengöring av Bundleware</h3>
              <p>
                Bli av med irriterande bundleware för att frigöra utrymme.
              </p>
              <p><b>*Bara PRO</b></p>
            </dd>
          </dl>
          <!-- Borttagning av Felaktiga Plugins  -->
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/feature-02.png')?>" alt=""/></dt>
            <dd>
              <h3>Borttagning av Felaktiga Plugins</h3>
              <p>
                Ta bort skadliga eller annonsbaserade plugins och håll<br>
                webbläsning säker.
              </p>
              <p><b>*Bara PRO</b></p>
            </dd>
          </dl>
        </div>
        <div class="fr">
          <!-- Inga Envisa Program -->
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/feature-03.png')?>" alt=""/></dt>
            <dd>
              <h3>Inga Envisa Program</h3>
              <p>
                Programmen som inte kan raderas av andra verktyg<br>
                staplar inte.
              </p>
              <p><b>*Bara PRO</b></p>
            </dd>
          </dl>
          <!-- Rengör Rester Automatiskt -->
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/feature-04.png')?>" alt=""/></dt>
            <dd>
              <h3>Rengör Rester Automatiskt</h3>
              <p>
                Identifiera och Rengör Automatiskt Rester av<br>
                Avinstallerade Program.
              </p>
              <p><b>*Bara PRO</b></p>
            </dd>
          </dl>
        </div>
      </div>
    </div>
  </div>
  <!-- feature end -->

  <!-- centbuy start -->
  <div class="centbuy">
    <h2>Hämta PRO Nu för Renare Dator och Säkrare Surfning</h2>
    <div class="wrapper clearfix">
      <div class="fl">
        <img src="<?php echo getStaticUrl('images/asc-small-box.png')?>" alt="IObit Uninstaller 8 PRO"/>
      </div>
      <div class="price fr">
        <div class="count">
          <p class="watching">
            <span class="surplusGift viewNum"><?php echo $viewNum;?></span> tittar, <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> platser kvar nu!
          </p>
        </div>
        <p><strong>219</strong> <span>kr <del>1 457kr</del></span></p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=sv-iu83pcpfamc219&ref=sv_iu83pcpfamcpurchase1811xmasr<?php echo $refStr;?>&refs=sv_purchase_iu"
           onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase1811xmasr-sv')">
          Aktivera Nu
        </a>
        <p class="year">1 Års Prenumeration / 3 Datorer</p>
      </div>
    </div>
  </div>
  <!-- centbuy end -->

  <!-- comparison start -->
  <div class="comparison" id="compare">
    <div class="wrapper">
      <h2>Se Klart Vad Du Kommer att Få från Pro, om Du Aktiverar Nu:</h2>
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
          <td class="itemb">Avinstallera Oönskade Program och Plugins</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Avinstallera Bundleware</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Ta Bort Envisa Program</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Ta Bort Skadliga/Annonsbaserade Plugins</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Rengör Rester</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Updatera Program i 1 klick</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Uppdatera Automatiskt</td>
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
      <h3>MISSA INTE!</h3>
      <h2>Få Exklusiv 85% Rabatt för att Göra Din Dator Renare, Säkrare och Snabbare</h2>
      <div class="price">
        <p><strong>219</strong> <span>kr <del>1 457kr</del></span></p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=sv-iu83pcpfamc219&ref=sv_iu83pcpfamcpurchase1811xmasr<?php echo $refStr;?>&refs=sv_purchase_iu"
           onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase1811xmasr-sv')">
          Aktivera Nu
        </a>
        <p id="footdown" class="countdown">Skynda! <b>05</b>M:<b>00</b>S:<b class="last">000</b>Ms återstår</p>
      </div>
    </div>
  </div>
  <!-- footbuy end -->

  <!-- review start -->
  <div class="review wrapper">
    <div id="dg-container" class="dg-container">
      <div class="nav">
        <span class="dg-prev"></span>
        <span class="dg-next"></span>
      </div>
      <div class="content dg-wrapper">
        <!-- 01 -->
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/makeuseof.png')?>" alt="MakeUseOf"></dt>
          <dd>
            <h2>I media</h2>
            <p>"IObit Uninstaller är ett litet program med användarvänligt gränssnitt. Användare kan ladda ner det på ett ögonblick. IObit Uninstaller tillåter användaren att avinstallera flera program samtidigt vilket gör den till ett unikt verktyg. Användare erbjuds även att genomföra en djup-skanning för att hitta rester. Denna avinstallerare håller vad den lovar: En grundlig avinstallation. Prestandan är såpass bra att det är värt att behålla verktyget enbart för den saken."</p>
            <cite>MakeUseOf</cite>
          </dd>
        </dl>
        <!-- 02 -->
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/Lovro-zuzic.png')?>" alt="Lovro Žužić"></dt>
          <dd>
            <h2>Användares omdömen</h2>
            <p>"IObit Uninstaller blir bättre med varje uppdatering. Jag har använt den i mer än 3 år nu. Det går snabbt att ladda ner och har enkel UI. Några av de många funktioner som jag använder regelbundet är Batch Uninstall, Powerful Scan, File Shredder och Recently Installed som ger mig snabb åtkomst till ett program som jag just installerat som jag inte gillar eller inte funkar. Det är också lätt att styra startobjekt så att din dator bootar snabbare."</p>
            <cite>Lovro Žužić</cite>
          </dd>
        </dl>
        <!-- 03 -->
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/Ada-Gortler.png')?>" alt="Áda Görtler"></dt>
          <dd>
            <h2>Användares omdömen</h2>
            <p>"IObit Uninstaller är ett av de bästa programmen. Lätt att arbeta med, mycket snabb rengöring och djuprengöring. Funktioner samarbetar bra med Windows 10. Den snabba rengöringen av plug-ins är också mycket bekväm. Stor sökning efter dubbletter som inte används mycket. Tack för er gästfrihet ni visat mig och min dator."</p>
            <cite>Áda Görtler</cite>
          </dd>
        </dl>
        <!-- 04 -->
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/Sergey-Erlich.png')?>" alt="Sergey Erlich"></dt>
          <dd>
            <h2>Användares omdömen</h2>
            <p>"IObit Uninstaller är förmodligen den bästa mjukvaran för att ta bort onödiga program från datorn. Till skillnad från den grundläggande Windows avinstalleraren tar detta program bort alla rester, som senare kan bromsa datorns prestanda. Jag har använt detta program under flera år och det har alltid hjälpt till att hålla min dator ren och snabb. Jag rekommenderade detta program till några av mina vänner i det förflutna och skulle rekommendera det igen i dag."</p>
            <cite>Sergey Erlich</cite>
          </dd>
        </dl>
        <!-- 05 -->
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/Joseph-Yu.png')?>" alt="Joseph Yu"></dt>
          <dd>
            <h2>Användares omdömen</h2>
            <p>"Uninstaller PRO är bara ett av fem av familjen IObits "underhållsprogram" jag har investerat i för min dator, ungefär som kockar investerar i sina knivar. Uninstaller är bra på att hitta rester av bit och byte som gömmer sig och tar upp diskutrymme och påverkar registret. Vid ett tidigare tillfälle gjorde jag en avinstallation av ett annat program med hjälp av den inbyggda avinstallationsfunktionen och det fungerade. Men Uninstaller PRO upptäckte att 35 filer hade lämnats kvar. Det enda jag behövde göra var att klicka på godkänn så var de borta. Jag rekommenderar starkt det här programmet och har köpt en licens för tre datorer. Supporten är artig och utmärkt."</p>
            <cite>Joseph Yu</cite>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- review end -->

  <!-- awards start -->
  <div class="awards wrapper">
    <h2>Världsomspännande Utmärkelser</h2>
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
            <h4>Prova det RISKFRITT - <span>med vår 60 dagars Pengar Tillbaka Garanti</span></h4>
            <p>Vi är självsäkra att du ska få en renare dator och säkrare webbläsning <br> till överkomligt pris om du aktiverar PRO utgåvan!</p>
          </dd>
        </dl>
        <dl class="fr clearfix">
          <dd class="fl">
            <h4>Accepterade Betalningssätt</h4>
            <img src="<?php echo getStaticUrl('images/payments.png')?>" alt=""/>
          </dd>
          <dd class="fr">
            <h4>Säker Betalning</h4>
            <img src="<?php echo getStaticUrl('images/godaddy.png')?>" alt=""/>
          </dd>
        </dl>
      </div>
      <!-- service end -->

      <!-- footer start -->
      <div class="footer">
        <dl>
          <dt>Notera:</dt>
          <dd>*.Uppgifter kan variera beroende på olika system eller datorer.</dd>
          <dd>*.Reklamkampanjer kan emellanåt ändras utan förvarning, efter vårt eget godtycke.</dd>
        </dl>
        <p>Copyright © 2005 - <?php echo date('Y')?> IObit. Alla Rättigheter Förbehållna</p>
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
  var imgSrc = "<?php echo getStaticUrl('images/asc-mask-box.png')?>";
  var _href = "https://www.iobit.com/buy.php?product=sv-imf63pcpfsd209&ref=sv_iu83pcpfamcpurchase1811xmasrpop<?php echo $refStr;?>&refs=sv_purchase_iu";
  var _ga = "ga('send', 'event', 'iubuy', 'buy', 'iupurchase1811xmasrpop-sv')";
  var viewNum = "<?php echo $viewNum;?>";
</script>

<script src="<?php echo getStaticUrl('script/modernizr.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/review-3d-carousel.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>

</body>
</html>