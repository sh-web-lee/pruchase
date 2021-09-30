<?php
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../../';
}
include $pRootUrl . 'include/common.inc.php';

$refStr = empty($_GET['ref']) ? '' : '-'.$_GET['ref'];
$refStr .= empty($_GET['st']) ? '' : '-'.$_GET['st'];
$refStr .= empty($_GET['to']) ? '' : '-'.$_GET['to'];

?>
<!DOCTYPE html>
<html lang="sv">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>52% RABATT på iFun Screen Recorder PRO - IObit</title>
<meta name="Copyright" content="IObit">
<meta name="description" content="Anpassa och skapa videor av hög kvalitet utan begränsning!">
<meta property="og:url" content="https://purchase.iobit.com/asc-ac-register/index.php">
<meta property="og:type" content="website">
<meta property="og:title" content="52% RABATT på iFun Screen Recorder PRO - IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Montserrat:400,500,700'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://recorder.iobit.com/sv/" target="_blank">
        <img src="<?php echo $pResUrl; ?>images/logo.png" alt="IObit">
      </a>
      <div class="title">
        <h1>iFun Screen Recorder PRO</h1>
        <p>Spela in allt på skärm utan vattenstämpel eller begränsningar</p>
      </div>
      <div class="offer clearfix">
        <img class="fl" src="<?php echo getStaticUrl('images/boxshot-asc.png')?>" alt="" />
        <div class="discount fl">
          <h2><b>52%</b> <span>Rabatt</span></h2>
          <p>Exklusivt för kunder av IObit</p>
        </div>
      </div>
      <div class="price">
        <p>Endast: <strong>kr239 </strong><del>kr499</del></p>
        <a class="buybtn bigbtn"
           href="https://www.iobit.com/buy.php?product=sv-isr11pc239&ref=sv_isr-ac239<?= $refStr; ?>&aff=&refs=sv_ac_isr"
           onclick="ga('send', 'event', 'isrbuy', 'buy', 'israc239-sv')">
              <div class="inner">
                <i class="all-icons"></i>
                <span>Aktivera Nu</span>
              </div>
        </a>
        <span>1 År / 1 Dator</span>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- container start -->
  <!-- feature start -->
  <h2 class="feature-h2">Varför behöver du iFun Screen Recorder PRO?</h2>
  <div class="feature wrapper">
    <div class="clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_01.png')?>" alt=""></dt>
        <dd>
          <h3>SPELA IN VALFRI DEL AV DIN SKÄRM</h3>
          <p>Välj valfritt fönster eller anpassat område på skärmen och spela in det precis som du vill.</p>
        </dd>
      </dl>
      <dl class="right">
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_02.png')?>" alt=""></dt>
        <dd>
          <h3>FÅNG DIN WEBCAM OCH MIKROFON</h3>
          <p>Spela in skärmen, webbkameran och mikrofonen samtidigt för att berätta om vad dina tittare ser. Perfekt för handledning, spelvideor och onlinekurser.</p>
        </dd>
      </dl>
    </div>
    <div class="clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_03.png')?>" alt=""></dt>
        <dd>
          <h3>TA BORT VATTENMÄRKE</h3>
          <p>Med iFun Screen Recorder PRO finns det ingen obligatorisk vattenstämpel på din video.<strong style="color: #b80000; font-weight: 500;"> Ännu bättre kan du lägga till din egen vattenstämpel om du vill!</strong></p>
        </dd>
      </dl>
      <dl class="right">
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_04.png')?>" alt=""></dt>
        <dd>
          <h3>SPELA IN SÅ LÄNGT SOM DU VILL</h3>
          <p>Med gratis skärminspelare spelar du vanligtvis bara in några minuter, men med iFun Screen Recorder PRO spelar du in så länge som du vill. Spela in hela filmer, föreläsningar och timmar av spel.</p>
        </dd>
      </dl>
    </div>
    <div class="clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_05.png')?>" alt=""></dt>
        <dd>
          <h3>GÖR VIDEOER MED BÄSTA KVALITET</h3>
          <p>Med vår GPU-acceleration garanteras högsta kvalitet. Upp till 4K-upplösning och 60 FPS för fantastiska videor utan eftersläpning.</p>
        </dd>
      </dl>
      <dl class="right">
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_06.png')?>" alt=""></dt>
        <dd>
          <h3>REDIGERA DIN VIDEO</h3>
          <p>Efter inspelning, redigera omedelbart din video utan att behöva någon annan programvara. Skapa din perfekta video direkt!</p>
        </dd>
      </dl>
    </div>
  </div>
  <!-- feature end -->

  <!-- awards start -->
  <div class="awards">
    <div class="wrapper">
      <h2>Utmärkelser</h2>
      <img src="<?php echo $pResUrl; ?>images/awards.png" alt="">
    </div>
  </div>
  <!-- awards end -->

  <!-- review -->
  <div class="review wrapper">
    <div id="dg-container" class="dg-container">
      <div class="nav">
        <span class="dg-prev"></span>
        <span class="dg-next"></span>
      </div>
      <div class="content dg-wrapper">
        <dl class="reviews active">
          <dt><h2><span>Vi lyssnar alltid på våra användare</span></h2></dt>
          <dd>
            <p>
              "Hittills så bra. IObit skärminspelare är verkligen ett komplett verktyg som är lätt att använda. Jag visste inte hur man spelar in skärm på Windows, men med denna programvara är det enkelt. Med ISR kan jag ta skärmdumpar medan jag spelar in skärm. Sedan laddar jag upp den till min Instagram och fångar massiv uppmärksamhet. Denna kraftfulla skärminspelare har hjälpt till att driva mitt företag framåt."
            </p>
           <cite>Elsie Weston</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><h2><span>Vi lyssnar alltid på våra användare</span></h2></dt>
          <dd> 
            <p>
              "Jag stötte på den här fria skärminspelaren och blev ett fan av den för sina enkla redigeringsfunktioner. Eftersom jag gillar att spela in driftsprocessen för att hjälpa människor att lösa datorproblem, och denna inspelningsprogramvara gör att jag kan spela in med ljud så att jag kan ladda upp direkt den redigerade videon till YouTube efter inspelningen. Den kombinerar inspelning och redigering, vilket är väldigt bekvämt för yutuber som jag som vill dela handledning videor!"
            </p>
            <cite>Enrico Valencia</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><h2><span>Vi lyssnar alltid på våra användare</span></h2></dt>
          <dd>
            <p>
              "Som sekreterare måste jag ofta använda skärminspelningsprogramvara. Det var svårt att hitta en idealisk gratis skärminspelare för mig, men Iobit kärminspelare råkar vara ett så perfekt verktyg för video-telekonferensinspelning och hjälper mig mycket! Jag kan spela in HD skärm med den och konvertera video till olika format. Jag rekommenderar ISR starkt!"
            </p>
            <cite>Marielle Irvine</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><h2><span>Vi lyssnar alltid på våra användare</span></h2></dt>
          <dd>
            <p>
              "Hej! Din fantastiska gratis skärminspelare överraskar mig. Jag kan spela in alla dessa värdefulla och underbara stunder med IObit Inspelare, särskilt för livevideor. De videorna som jag spelar in med ISR är extremt högkvalitativa. Jag kan spara och dela dem med mina vänner. Först var jag inte säker på den programvaran, men resultaten är fantastiska. Det är lysande!"
            </p>
            <cite>Robbins Hilton</cite>
          </dd>
        </dl>
      </div>
      <ul class="switchHead">
		<li class="active" ><img src="<?php echo getStaticUrl('images/user1.png')?>"></li>
        <li class="" ><img src="<?php echo getStaticUrl('images/user2.png')?>"></li>
        <li class="" ><img src="<?php echo getStaticUrl('images/user3.png')?>"></li>
        <li class="" ><img src="<?php echo getStaticUrl('images/user4.png')?>"></li>
      </ul>
    </div>
  </div>

  <!-- footbuy start -->
  <div class="footbuy">
    <div class="wrapper">
      <h2>Skapa videor med högsta kvalitet utan vattenstämpel eller begränsningar</h2>
      <div class="price">
        <p>Endast: <strong>kr239 </strong><del>kr499</del></p>
        <a class="buybtn bigbtn"
           href="https://www.iobit.com/buy.php?product=sv-isr11pc239&ref=sv_isr-ac239<?= $refStr; ?>&aff=&refs=sv_ac_isr"
           onclick="ga('send', 'event', 'isrbuy', 'buy', 'israc239-sv')">
              <div class="inner">
                <i class="all-icons"></i>
                <span>Aktivera Nu</span>
              </div>
        </a>
        <span>1 År / 1 Dator</span>
      </div>
    </div>
  </div>
  <!-- footbuy end -->
  
  <!-- container end -->

  <!-- bottom start -->
  <div class="bottom">
    <div class="wrapper">
      <!-- annotation start -->
      <!-- <p class="annotation" >*Opmerking:.Data kan variëren afhankelijk van verschillende computer systemen.</p> -->
      <!-- annotation end -->
      
      <!-- footer start -->
      <div class="footer" style="margin-top: 0;">©2005 - <?php echo date('Y')?> IObit. Alla Rättigheter Förbehållna</div>
      <!-- footer end -->
    </div>
  </div>
  <!-- bottom end -->

  <!-- floatlayer start -->
  <div class="floatlayer" id="floatlayer">
    <div class="wrapper clearfix">
      <div class="left">
        <h2>EXKLUSIVT ERBJUDANDE</h2>
        <p><strong>52% Rabatt</strong> för att spela in din skärm utan begränsningar</p>
      </div>
      <div class="pricebox">
        <dl class="price fr">
          <dt>Endast: <strong>kr239 </strong><del>kr499</del></dt>
          <dd>
            <a class="buybtn smallbtn"
               href="https://www.iobit.com/buy.php?product=sv-isr11pc239&ref=sv_isr-ac239<?= $refStr; ?>&aff=&refs=sv_ac_isr"
               onclick="ga('send', 'event', 'isrbuy', 'buy', 'israc239-sv')">
              <div class="inner">
                <i class="all-icons"></i>
                <span>Aktivera Nu</span>
              </div>
            </a>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- floatlayer end -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>