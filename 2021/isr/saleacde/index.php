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
<html lang="de">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>68% Rabatt auf iFun Screen Recorder PRO - IObit</title>
<meta name="Copyright" content="IObit">
<meta name="description" content="Sonderangebot nur für IObit-User. Sie können den PC-Bildschirm in HD aufnehmen, kein Wasserzeichen, kein Zeitlimit.">
<meta property="og:url" content="https://purchase.iobit.com/asc-ac-register/index.php">
<meta property="og:type" content="website">
<meta property="og:title" content="68% Rabatt auf iFun Screen Recorder PRO - IObit">
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
      <a class="logo" href="https://recorder.iobit.com/de/" target="_blank">
        <img src="<?php echo $pResUrl; ?>images/logo.png" alt="IObit">
      </a>
      <div class="title">
        <h1>iFun Screen Recorder PRO</h1>
        <p>HD-Bildschirmaufnahme. Kein Wasserzeichen, kein Limit</p>
      </div>
      <div class="offer clearfix">
        <img class="fl" src="<?php echo getStaticUrl('images/boxshot-asc.png')?>" alt="" />
        <div class="discount fl">
          <h2><b>68%</b> <span>Rabatt</span></h2>
          <p>Exclusivangebot für IObit-User</p>
        </div>
      </div>
      <div class="price">
        <p>Nur: <strong>15,99€ </strong><del>49,99€</del></p>
        <a class="buybtn bigbtn"
           href="https://www.iobit.com/buy.php?product=de-isr1-ac&ref=de_isr-ac-register<?= $refStr; ?>&aff=&refs=de_ac_isr"
           onclick="ga('send', 'event', 'isrbuy', 'buy', 'israc-de')">
              <div class="inner">
                <i class="all-icons"></i>
                <span>Jetzt upgraden</span>
              </div>
        </a>
        <span>1 Jahr / 1 PC</span>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- container start -->
  <!-- feature start -->
  <h2 class="feature-h2">Warum iFun Screen Recorder PRO?</h2>
  <div class="feature wrapper">
    <div class="clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_01.png')?>" alt=""></dt>
        <dd>
          <h3>Irgendeinen Teil Ihres Bildschirms aufnehmen</h3>
          <p>Wählen Sie ein Fenster oder einen bestimmten Bereich auf Ihrem Bildschirm aus und zeichnen Sie es genau so auf, wie Sie es möchten.</p>
        </dd>
      </dl>
      <dl class="right">
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_02.png')?>" alt=""></dt>
        <dd>
          <h3>Webcam und Mikrofon aufnehmen</h3>
          <p>Nehmen Sie gleichzeitig Ihren Bildschirm, Ihre Webcam und Ihr Mikrofon auf, um den Zuschauern die Inhalten besser zu erklären. Ideal für Tutorials, Gameplay-Videos und Online-Kurse.</p>
        </dd>
      </dl>
    </div>
    <div class="clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_03.png')?>" alt=""></dt>
        <dd>
          <h3>Wasserzeichen entfernen</h3>
          <p>Mit iFun Screen Recorder PRO gibt's kein obligatorisches Wasserzeichen im Video. Sie können <strong style="color: #b80000; font-weight: 500;"> Ihr eigenes Wasserzeichen hinzufügen, </strong> wenn Sie möchten!</p>
        </dd>
      </dl>
      <dl class="right">
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_04.png')?>" alt=""></dt>
        <dd>
          <h3>Aufnahmen ohne Zeitlimit machen</h3>
          <p>Normalerweise nehmen kostenlose Screenrecorder nur wenige Minuten auf, aber mit iFun Screen Recorder PRO nehmen Sie so lange auf, wie Sie möchten. Nehmen Sie ganze Filme, Vorträge und stundenlanges Gameplay auf.</p>
        </dd>
      </dl>
    </div>
    <div class="clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_05.png')?>" alt=""></dt>
        <dd>
          <h3>Hochqualitative Videos erstellen</h3>
          <p>Mit unserer GPU-Beschleunigung ist die beste Qualität garantiert. Bis zu 4K Auflösung und 60 FPS für tolle Videos ohne Verzögerung.</p>
        </dd>
      </dl>
      <dl class="right">
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_06.png')?>" alt=""></dt>
        <dd>
          <h3>Videos bearbeiten</h3>
          <p>Bearbeiten Sie Ihr Video nach der Aufnahme sofort und keine andere Software muss installiert werden. Erstellen Sie direkt ein perfektes Video!</p>
        </dd>
      </dl>
    </div>
  </div>
  <!-- feature end -->

  <!-- awards start -->
  <div class="awards">
    <div class="wrapper">
      <h2>Weltweite Auszeichnungen</h2>
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
          <dt><h2><span>Kundenbewertungen</span></h2></dt>
          <dd>
            <p>
              "So weit, so gut. iFun Screen Recorder ist wirklich ein praktisches Tool, das einfach nutzbar ist. Ich wusste nicht, wie man einen Bildschirm unter Windows aufzeichnet, aber mit dieser Software ist es ganz einfach. Damit kann ich während der HD-Aufnahme Screenshots machen und nach der Aufnahme Untertitel für das Video hinzufügen. Dann lade ich es auf mein Instagram hoch und erhalte massive Aufmerksamkeit. Dieses leistungsstarke Bildschirm-Aufzeichnungstool hat mir geholfen, mein Geschäft voranzutreiben. Übrigens ist es völlig kostenlos."
            </p>
           <cite>Elsie Weston</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><h2><span>Kundenbewertungen</span></h2></dt>
          <dd> 
            <p>
              "Ich bin auf diese kostenlose Bildschirmaufzeichnungssoftware gestoßen und bin jetzt ein Fan davon wegen seiner einfachen Bearbeitungsfunktionen. Ich zeichne den Betriebsprozess gerne auf, um Computerprobleme zu lösen. Diese Aufnahmesoftware ermöglicht es mir , mit Audio aufzunehmen, damit ich das bearbeitete Video nach der Aufnahme direkt auf YouTube hochladen kann. Es kombiniert Aufnahme und Bearbeitung, was sehr praktisch für Youtuber wie mich ist, die Tutorial-Videos teilen möchten!"
            </p>
            <cite>Enrico Valencia</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><h2><span>Kundenbewertungen</span></h2></dt>
          <dd>
            <p>
              "Als Sekretärin muss ich viele Bildschirmaufzeichnungssoftwares verwenden. Es war schwer, einen idealen kostenlosen Bildschirm-Recorder zu finden, aber iFun Screen Recorder ist ein perfektes Werkzeug für die Aufzeichnung von Videokonferenzen und hilft mir sehr! Ich könnte den HD-Bildschirm damit aufnehmen und das Video in verschiedene Formate konvertieren. Besonders empfehlenswert!"
            </p>
            <cite>Marielle Irvine</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><h2><span>Kundenbewertungen</span></h2></dt>
          <dd>
            <p>
              "Hallo! Ihr fantastischer kostenloser Bildschirm-Recorder überrascht mich. Ich kann all diese kostbaren und wunderbaren Momente mit dem iFun Screen Recorder aufnehmen, insbesondere für Live-Videos. Die Videos, die ich damit aufgenohmen habe, sind von extrem hoher Qualität. Ich kann sie speichern und mit meinen Freunden teilen. Anfangs war ich mir bei der Software nicht so sicher, aber die Ergebnisse sind erstaunlich. Das ist klasse!"
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
      <h2>Erstellen Sie HD-Videos ohne Wasserzeichen oder Einschränkungen</h2>
      <div class="price">
        <p>Nur: <strong>15,99€ </strong><del>49,99€</del></p>
        <a class="buybtn bigbtn"
           href="https://www.iobit.com/buy.php?product=de-isr1-ac&ref=de_isr-ac-register<?= $refStr; ?>&aff=&refs=de_ac_isr"
           onclick="ga('send', 'event', 'isrbuy', 'buy', 'israc-de')">
              <div class="inner">
                <i class="all-icons"></i>
                <span>Jetzt upgraden</span>
              </div>
        </a>
        <span>1 Jahr / 1 PC</span>
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
      <div class="footer" style="margin-top: 0;">©2005 - <?php echo date('Y')?> IObit. Alle Rechte vorbehalten</div>
      <!-- footer end -->
    </div>
  </div>
  <!-- bottom end -->

  <!-- floatlayer start -->
  <div class="floatlayer" id="floatlayer">
    <div class="wrapper clearfix">
      <div class="left">
        <h2>Exklusives Angebot</h2>
        <p><strong>68% Rabatt</strong> um den Bildschirm ohne Einschränkungen aufzunehmen</p>
      </div>
      <div class="pricebox">
        <dl class="price fr">
          <dt>Nur: <strong>15,99€ </strong><del>49,99€</del></dt>
          <dd>
            <a class="buybtn smallbtn"
               href="https://www.iobit.com/buy.php?product=de-isr1-ac&ref=de_isr-ac-register<?= $refStr; ?>&aff=&refs=de_ac_isr"
               onclick="ga('send', 'event', 'isrbuy', 'buy', 'israc-de')">
              <div class="inner">
                <i class="all-icons"></i>
                <span>Jetzt upgraden</span>
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