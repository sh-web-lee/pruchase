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
<html lang="dk">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Op til 70% rabat på iFun Screen Recorder PRO – IObit</title>
<meta name="Copyright" content="IObit">
<meta name="description" content="Særtilbud kun for IObit-brugere. Du kan optage pc-skærm i HD, intet vandmærke, ingen tidsbegrænsning.">
<meta property="og:url" content="https://purchase.iobit.com/asc-ac-register/index.php">
<meta property="og:type" content="website">
<meta property="og:title" content="Op til 70% rabat på iFun Screen Recorder PRO – IObit">
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
      <a class="logo" href="https://recorder.iobit.com/dk/" target="_blank">
        <img src="<?php echo $pResUrl; ?>images/logo.png" alt="IObit">
      </a>
      <div class="title">
        <h1>iFun Screen Recorder PRO</h1>
        <p>Optag alt på din skærm uden vandmærker eller begrænsninger</p>
      </div>
      <div class="offer clearfix">
        <img class="fl" src="<?php echo getStaticUrl('images/boxshot-asc.png')?>" alt="" />
        <div class="discount fl">
          <h2><b>70%</b> <span>Rabat</span></h2>
          <p>Kun gældende for IObit-kunder</p>
        </div>
      </div>
      <div class="price">
        <p>Kun: <strong>119 kr. </strong><del>399 kr.</del></p>
        <a class="buybtn bigbtn"
           href="https://www.iobit.com/buy.php?product=dk-isr1-ac&ref=dk_isr-ac-register<?= $refStr; ?>&aff=&refs=dk_ac_isr"
           onclick="ga('send', 'event', 'isrbuy', 'buy', 'israc-dk')">
              <div class="inner">
                <i class="all-icons"></i>
                <span>Aktiver nu</span>
              </div>
        </a>
        <span>1 år / 1 PC</span>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- container start -->
  <!-- feature start -->
  <h2 class="feature-h2">Hvorfor har du brug for iFun Screen Recorder PRO?</h2>
  <div class="feature wrapper">
    <div class="clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_01.png')?>" alt=""></dt>
        <dd>
          <h3>OPTAG ENHVER DEL AF DIN SKÆRM</h3>
          <p>Vælg et hvilket som helst vindue eller tilpas din skærm og optag præcis den del, du ønsker.</p>
        </dd>
      </dl>
      <dl class="right">
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_02.png')?>" alt=""></dt>
        <dd>
          <h3>OPTAG DIT WEBCAM SAMT MIKROFON</h3>
          <p>Optag din skærm, webcam og mikrofon samtidigt, så du kan fortælle dine seere, hvad de ser. Ideel til tutorials, spilvideoer og online undervisning.</p>
        </dd>
      </dl>
    </div>
    <div class="clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_03.png')?>" alt=""></dt>
        <dd>
          <h3>FJERN VANDMÆRKER</h3>
          <p>Med iFun Screen Recorder PRO er der ingen vandmærker på din video. <strong style="color: #b80000; font-weight: 500;"> Du kan endda selv tilføje dit eget vandmærke, hvis du ønsker!</strong></p>
        </dd>
      </dl>
      <dl class="right">
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_04.png')?>" alt=""></dt>
        <dd>
          <h3>OPTAG SÅ LÆNGE DU ØNSKER</h3>
          <p>Gratis skærmoptagere kan som regel kun optage videoer af få minutter, men med iFun Screen Recorder PRO kan lave så lange videoer, du vil. Optag hele film, forelæsninger og timevis af videospil.</p>
        </dd>
      </dl>
    </div>
    <div class="clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_05.png')?>" alt=""></dt>
        <dd>
          <h3>LAV VIDEOER I TOPKVALITET</h3>
          <p>Med vores GPU-acceleration, sikres topkvalitet. Op til 4K billedopløsning og 60 FPS, så du får fantastiske videoer uden lagging.</p>
        </dd>
      </dl>
      <dl class="right">
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_06.png')?>" alt=""></dt>
        <dd>
          <h3>REDIGER DIN VIDEO</h3>
          <p>Rediger din video med det samme efter endt optagelse uden eksternt software. Færdiggør din perfekte video direkte i programmet!</p>
        </dd>
      </dl>
    </div>
  </div>
  <!-- feature end -->

  <!-- awards start -->
  <div class="awards">
    <div class="wrapper">
      <h2>Vi er stolte af at I har tillid til os</h2>
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
          <dt><h2><span>Vi lytter altid til vores kunder og brugere</span></h2></dt>
          <dd>
            <p>
              "Så langt så godt. iFun Screen Recorder PRO er virkelig et komplet værktøj, som er nemt at bruge. Jeg vidste ikke, hvordan man optog sin skærm på Windows, men med dette program er det super nemt. Jeg kan tage skærmbilleder under HD optagelse og tilføje underskrifter efter optagelserne. Efterfølgende kan jeg uploade til Instagram. Jeg bruger programmet til at promovere min virksomhed, og programmet er ganske gratis."
            </p>
           <cite>Elsie Weston</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><h2><span>Vi lytter altid til vores kunder og brugere</span></h2></dt>
          <dd> 
            <p>
              "Jeg stødte på den gratis skærmoptager og var med det samme glad for programmet og dets enkle redigeringsfunktioner. Jeg filmer løsninger til folk, der har problemer med deres computere, og dette program optager både lyd og billeder, som kan uploades til YouTube med det samme. Det kombinerer optagelse og redigering, hvilket er super praktisk for youtubere som mig selv, som laver tutorials!"
            </p>
            <cite>Enrico Valencia</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><h2><span>Vi lytter altid til vores kunder og brugere</span></h2></dt>
          <dd>
            <p>
              "Som sekretær har jeg tit brug for en skærmoptager. Det har været svært at finde et ideelt program, som var gratis, men iFun Screen Recorder PRO er helt perfekt til at optage videokonferencer og er i stand til at filme i HD, og videoen kan gemmes i mange formater. Anbefales varmt."
            </p>
            <cite>Marielle Irvine</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><h2><span>Vi lytter altid til vores kunder og brugere</span></h2></dt>
          <dd>
            <p>
              "Hej! Jeres fantastiske skærmoptager har overrasket mig. Jeg kan optage alle de skønneste øjeblikke med iFun Screen Recorder PRO, især livevideoer. Videoerne optages i ekstremt høj kvalitet, og jeg kan gemme og dele dem med venner. I begyndelsen var jeg lidt usikker på programmet, men resultaterne er vildt gode. Genialt!"
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
      <h2>Lav videoer i topkvalitet uden vandmærker eller begrænsninger</h2>
      <div class="price">
        <p>Kun: <strong>119 kr. </strong><del>399 kr.</del></p>
        <a class="buybtn bigbtn"
           href="https://www.iobit.com/buy.php?product=dk-isr1-ac&ref=dk_isr-ac-register<?= $refStr; ?>&aff=&refs=dk_ac_isr"
           onclick="ga('send', 'event', 'isrbuy', 'buy', 'israc-dk')">
              <div class="inner">
                <i class="all-icons"></i>
                <span>Aktiver nu</span>
              </div>
        </a>
        <span>1 År / 1 PC</span>
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
      <div class="footer" style="margin-top: 0;">©2005 - <?php echo date('Y')?> IObit. Alle rettigheder forbeholdes</div>
      <!-- footer end -->
    </div>
  </div>
  <!-- bottom end -->

  <!-- floatlayer start -->
  <div class="floatlayer" id="floatlayer">
    <div class="wrapper clearfix">
      <div class="left">
        <h2>EKSKLUSIVT TILBUD</h2>
        <p>Optag din skærm uden begrænsninger med<strong> 70% Rabat</strong></p>
      </div>
      <div class="pricebox">
        <dl class="price fr">
          <dt>Kun: <strong>119 kr. </strong><del>399 kr.</del></dt>
          <dd>
            <a class="buybtn smallbtn"
               href="https://www.iobit.com/buy.php?product=dk-isr1-ac&ref=dk_isr-ac-register<?= $refStr; ?>&aff=&refs=dk_ac_isr"
               onclick="ga('send', 'event', 'isrbuy', 'buy', 'israc-dk')">
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

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>