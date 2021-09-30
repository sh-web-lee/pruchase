<?php
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './';
    $pRootUrl = '../../../';
  }
include $pRootUrl . 'include/common.inc.php';
$viewNum=rand(115,156);
if (!empty($_GET['action'])&&$_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name='enimftra'.$date;
  if (!isset($_COOKIE[$c_name])) {
    $packsNum = 97;
    setcookie($c_name, $packsNum, time() + 3600 * 24);
  } else {
    if ($_GET['t'] == 1) {
      $packsNum = $_COOKIE[$c_name];
    }
    else {
      if (intval($_COOKIE[$c_name]) <= 0) {
        setcookie($c_name, 0, time() + 3600 * 24);
        $packsNum = 0;
      } else {
        $packsNum = $_COOKIE[$c_name] - 1;
        setcookie($c_name, $packsNum, time() + 3600 * 24);
        if (rand(1, 100) % 2 == 0) {
          $packsNum++;
        }
      }
    }
  }
  echo $packsNum;
  exit;
}

$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
?>
<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="IE=Edge,chrome=1">
  <title>Spara upp till 52% RABATT på IObit Malware Fighter PRO</title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href='https://fonts.googleapis.com/css?family=Montserrat:500,600' rel='stylesheet' type='text/css'>
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
  <!-- banner -->
  <div class="banner">
    <div class="wrapper">
      <!-- logo -->
      <a href="https://www.iobit.com/sv/index.php" target="_blank" class="logo">IObit</a>
      <!-- fast -->
      <p class="fast <?php echo (intval($_GET['cookie'])>0)?'':'hide';?>"><?php echo (intval($_GET['cookie'])>0)?intval($_GET['cookie']):'';?> kakor funna</p>
      <!-- title -->
      <h1>Få skadliga kakor borttagna automatiskt!</h1>
      <!-- box -->
      <div class="box three-pcs">
        <div class="img-box"></div>
        <!-- price -->
        <p><strong>329 kr</strong> <del>699 kr</del></p>
        <!-- 3pc buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=sv-imf83pc329&ref=sv_imf3pctracking2019<?php echo $refStr;?>&refs=sv_purchase_imf"
           onclick="ga('send', 'event', 'imftrackbuy', 'buy', 'imfpurchase1904track-sv');">
          <span>KÖP NU</span>
        </a>
        <!-- countdown -->
        <div class="number">
          Skynda, nu endast
          <div class="countdown">
            <div class="scroll-tick" ><span>0</span></div>
            <div class="scroll-tick"><span>0</span></div>
          </div>
          kvar!
        </div>
      </div>

      <div class="box one-pc">
        <div class="img-box"></div>
        <!-- price -->
        <p><strong>249 kr</strong> <del>499 kr</del></p>
        <a class="buybtn border"
           href="https://www.iobit.com/buy.php?product=sv-imf81pc249&ref=sv_imf1pctracking2019<?php echo $refStr;?>&refs=sv_purchase_imf"
           onclick="ga('send', 'event', 'imftrack1pcbuy', 'buy', 'imfpurchase1904track1pc-sv');">
          <span>KÖP NU</span>
        </a>
      </div>
    </div>
  </div>
  <!-- end banner -->

  <!-- feature -->
  <div class="feature feature01 wrapper clearfix">
    <h2><br>Varför ska du rensa kartläggningskakor lagrade i din webbläsare?</h2>
    <div class="img-box"><img src="<?php echo getStaticUrl('images/feature-box.jpg')?>" alt=""></div>
    <dl class="list01">
      <dt>Annonser följer dig överallt</dt>
      <dd>
        Annonsörer från webbplatser som du <br>
        har besökt kan spåra dig och visa <br>
        annonser på webbplatser du besöker
      </dd>
    </dl>
    <dl class="list02">
      <dt>Online integritetsläckor</dt>
      <dd>
        Hackare kan få tillgång till din personliga <br>
        information som konton utan lösenord <br>
        och använda dem.
      </dd>
    </dl>
  </div>
  <!-- end feature -->

  <!-- feature -->
  <div class="feature feature02 ">
    <div class="wrapper">
      <h2>
        Hur anti-spårning hjälper till att få tillbaka en ren webbläsare <br>
        och håller informationen privat?
      </h2>
      <div class="img-box"><img src="<?php echo getStaticUrl('images/feature-box02.jpg')?>" alt=""></div>
      <dl class="list01">
        <dt><img src="<?php echo getStaticUrl('images/list01.png')?>" alt=""> Rensa kakor automatiskt</dt>
        <dd>
          När du har aktiverat anti-spårning <br>
          tas kartläggningskakor bort <br>
          automatiskt.
        </dd>
      </dl>
      <dl class="list02">
        <dt><img src="<?php echo getStaticUrl('images/list02.png')?>" alt=""> Skydda din personliga data</dt>
        <dd>
          Annonsörer kan inte spåra dina <br>
          onlineaktiviteter och din personliga <br>
          information är säker.
        </dd>
      </dl>
    </div>
  </div>
  <!-- end feature -->

  <!-- benfits -->
  <div class="feature03">
    <h2><br>Flera fördelar som du kan få med IObit Malware Figther 8 PRO</h2>
    <div class="message">
      <div class="wrapper">
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/list03.png')?>" alt=""></dt>
          <dd><strong>Senaste Bitdefender motor</strong></dd>
          <dd>
            209 000 000+ säkerhetshot <br>
            kan snabbt upptäckas och <br>
            hållas borta.
          </dd>
          <dd><span>ENDAST PRO</span></dd>
        </dl>
         <dl>
          <dt><img src="<?php echo getStaticUrl('images/list04.png')?>" alt=""></dt>
          <dd><strong>Stoppa Ransomware-attacker </strong></dd>
          <dd>
            Misstänksamma aktiviteter <br>
            som försöker kryptera dina filer <br>
            stoppas.
          </dd>
          <dd><span>ENDAST PRO</span></dd>
        </dl>
         <dl>
          <dt><img src="<?php echo getStaticUrl('images/list05.png')?>" alt=""></dt>
          <dd><strong>Skydda dina filer med lösenord </strong></dd>
          <dd>
            Hackare kan inte komma åt <br>
            din personliga data med <br>
            lösenord.
          </dd>
          <dd><span>ENDAST PRO</span></dd>
        </dl>
         <dl class="last">
          <dt><img src="<?php echo getStaticUrl('images/list06.png')?>" alt=""></dt>
          <dd><strong>Inga infektioner via USB-enheter</strong></dd>
          <dd>
            Virus som gömmer sig i <br>
            USB-enheter kan inte spridas <br>
            till din dator.
          </dd>
          <dd><span>ENDAST PRO</span></dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- end benfits -->

  <!-- awards start -->
  <div class="awards wrapper">
    <h2>Rekommenderas och är belönade av dessa medier</h2>
    <img src="<?php echo getStaticUrl('images/awards.png')?>" alt="">
  </div>
  <!-- awards end -->

  <!-- review -->
  <div class="review">
    <div class="wrapper">
      <div class="media_rev">
        <h3>I media</h3>
        <dl>
          <dt><img src="<?php echo $pResUrl; ?>images/betanews.png" alt=""></dt>
          <dd><h4>"IObit Malware Fighter PRO är ett komplett säkerhetspaket."</h4></dd>
          <dd>"IObit Malware Fighter PRO är ett komplett säkerhetspaket. Det rensar bort spionprogram, trojaner och allehanda otrevligheter. Det finns också ett Uppstartsskydd som säkerställer att inga skadliga processer startas med Windows. Webbläsarskyddet garanterar att ingen programvara gör ändringar i din webbläsare och Filgranskaren garanterar att varje okänd fil du öppnar inte kan orsaka någon skada. Inkluderat är också vaktenheter för USB och processor med mera."<span>-Betanews.com</span></dd>
        </dl>
      </div>
      <div class="user_rev" id="user_rev">

        <div class="content">
          <h3>Användares omdömen</h3>
          <dl  class="active">
            <dd>
              <h4>"Vi har inte haft några problem sedan vi började använda era produkter."</h4>
            </dd>
            <dd>"Vi brukade använda upp till ett dussin olika program för att hålla våra maskiner i trim och hålla skurkarna borta. Det tog timmar varje vecka för att upprätthålla säkerhet och prestanda. Nu, med IObit Malware Fighter PRO och Advanced System Care PRO, är allt på ett ställe och det tar oss bara några minuter varje vecka för att göra samma jobb, men med mer förtroende. Vi har inte haft ett enda problem sedan vi började använda era produkter."</dd>
          </dl>
          <dl>
            <dd>
              <h4>"Jag har haft andra program för detta ändamål installerade men IMF finner alltid problemen först och blockerar dem."</h4>
            </dd>
            <dd>"För några år sedan drogs min uppmärksamhet till IObit Malware Fighter. Först var jag skeptisk. Men efter att ha installerat det blev det snabbt min favorit bland anti-malware program. Det är mycket lätt att använda. Genom åren har det upptäckt många hot och avlägsnat dem. I samarbete med andra program från IObit, som till exempel ASC, har jag nu ett ypperligt skydd för min dator. Jag rekommenderar alla dessa program till mina vänner och familj."</dd>
          </dl>

        </div>
        <ul class="users" id="users">
          <li class="current"><img src="<?php echo $pResUrl; ?>images/peter-stoffers.jpg" alt="">Peter Stoffers</li>
          <li><img src="<?php echo $pResUrl; ?>images/bob-bassett.jpg" alt="">Bob Bassett</li>
        </ul>
      </div>
    </div>
  </div>
  <!-- end review -->

  <div class="bottom">

    <!-- service start -->
    <div class="service wrapper clearfix">
      <dl class="payment">
        <dd>Godkända Betalningsalternativ</dd>
        <dt><img src="<?php echo getStaticUrl('images/payments.jpg')?>" alt=""/></dt>
      </dl>
      <dl class="moneyback">
        <dd>Pengarna Tillbaka Garanti</dd>
        <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
      </dl>
      <dl class="amgold">
        <dd>Support</dd>
        <dt>
          <p><img src="<?php echo getStaticUrl('images/email.jpg')?>" alt="">Teknisk support, 24/7 </p>
          <p><img src="<?php echo getStaticUrl('images/phone.jpg')?>" alt="">Live Chatttjänst</p>
        </dt>
      </dl>
    </div>
    <!-- service end -->

    <!-- annotation -->
    <dl class="annotation wrapper">
      <dt>Notera:</dt>
      <dd>*.Uppgifter kan variera beroende på olika system eller datorer.</dd>
      <dd>*.Reklamkampanjer kan emellanåt ändras utan förvarning, efter vårt eget godtycke.</dd>
    </dl>

    <!-- footer -->
    <div class="footer">
      <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Alla Rättigheter Förbehållna</p>
    </div>

  </div>

  <!-- float -->
  <div class="float clearfix">
    <div class="wrapper">
      <div class="left-img"></div>
      <div class="message">
        <h2>Mångsidigt skydd för hela familjen!</h2>
        <div class="number">
          Skynda, nu endast
          <div class="countdown">
            <div class="scroll-tick" ><span>0</span></div>
            <div class="scroll-tick"><span>0</span></div>
          </div>
          kvar!
        </div>
      </div>
      <!-- 3pc buybtn -->
     <dl>
       <dt>Nu: <strong>329 kr</strong> <del>699 kr</del></dt>
       <dd>
         <a class="buybtn"
            href="https://www.iobit.com/buy.php?product=sv-imf83pc329&ref=sv_imf3pctracking2019<?php echo $refStr;?>&refs=sv_purchase_imf"
            onclick="ga('send', 'event', 'imftrackbuy', 'buy', 'imfpurchase-201904track'); ">
           <span>KÖP NU </span>
         </a>
       </dd>
     </dl>
    </div>
  </div>
  <!-- end float -->

  <script>refStr="<?php echo $refStr;?>";</script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>