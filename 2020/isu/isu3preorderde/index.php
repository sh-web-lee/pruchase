<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'isuofficialde_p' . $date;
  $c_name_t='isuofficialde_t' . $date;
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=rand(68,78);
    setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
    setcookie($c_name_t,$totalNum, time() + 3600 * 24 *2);
  } else {
    if (intval($_COOKIE[$c_name]) <= 0) {
      $packsNum = 0;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    } else {
      $packsNum = $_COOKIE[$c_name] - 1;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    }
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

$viewNum=rand(115,125);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}

$refStr=empty($_GET['to'])?'':('-'.$_GET['to']);
?>
<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Für 0€ erwerben Sie IObit Software Updater 3 PRO</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:600,700,800&display=swap" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public']; ?>
  <?php echo $gJavascript['head']; ?>
</head>

<body>
<!-- banner start -->
<div class="banner">
  <div class="wrapper">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/de/index.php" target="_blank"></a>
    <!-- right-message -->
    <div class="right-message">
      <!-- title -->
      <h1>Willkommen zu unserem <strong>Vorverkauf </strong></h1>
      <!-- number -->
      <div class="number">
        Nur
        <div id="topNum" class="giftNum">
          <span class="nwrap">
            <strong>
              <b>1</b>
            </strong>
          </span>
          <span class="nwrap">
            <strong>
              <b>1</b>
            </strong>
          </span>
        </div>
        Deals übrig, <strong class="viewNum"><?php echo $viewNum;?></strong>  Leute sind online
      </div>
      <p class="price">
        <span> <strong>0€</strong><sup>*</sup></span>
        <!-- buybtn -->
        <a href="https://www.iobit.com/buy.php?product=de-isu3preorder&ref=de_isu3preorder<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=de_purchase_isu"
           onclick="ga('send', 'event', 'isubuy', 'buy', 'isu3preorder-de');"
           class="buybtn">
          Jetzt vorbestellen
        </a>
      </p>
    </div>
  </div>
</div>
<!-- banner end -->

<!-- intro start -->
<div class="intro">
  <div class="wrapper clearfix">
    <h2>Es ist richtig der Software-Updater, den Sie wirklich benötigen</h2>
    <!-- one -->
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/list01.png')?>" alt=""></dt>
      <dd>
        <strong>Große Software-Datenbank</strong>
        <p>Aktualisiert Hunderte von Programme, einschließlich <br> der häufig verwendeten.</p>
      </dd>
    </dl>
    <!-- two -->
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/list02.png')?>" alt=""></dt>
      <dd>
        <strong>Programminterne Aktualisierung</strong>
        <p>Aktualisiert veraltete Programme direkt im IObit <br> Software Updater.</p>
      </dd>
    </dl>
    <!-- three -->
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/list03.png')?>" alt=""></dt>
      <dd>
        <strong>Automatische Aktualisierung</strong>
        <p>Lädt Updates für Programme herunter und installiert <br> sie automatisch zum geplanten Zeitpunkt.</p>
      </dd>
    </dl>
    <!-- four -->
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/list04.png')?>" alt=""></dt>
      <dd>
        <strong>Mehr Sicherheit</strong>
        <p>Aktualisiert Programme, um Sicherheitslücken zu <br> reparieren, die von Hackern verwendet werden <br> können.</p>
      </dd>
    </dl>
    <!-- five -->
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/list05.png')?>" alt=""></dt>
      <dd>
        <strong>Saubere Updates</strong>
        <p>Keine Bundleware, Symbolleisten oder Installalierer werden mitinstalliert.</p>
      </dd>
    </dl>
    <!-- six -->
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/list06.png')?>" alt=""></dt>
      <dd>
        <strong>Empfohlene Software</strong>
        <p>Die meisten gängigen Programme können schnell <br> heruntergeladen werden, ohne auf die Webseite <br> zu gehen.</p>
      </dd>
    </dl>
  </div>
</div>
<!-- intro end -->

<!-- feature start -->
<div class="feature">
  <div class="wrapper">
    <h2>Es gibt Ihnen perfekte Benutzererfahrung</h2>
    <ul class="message-list">
      <li class="list01 active"><i></i> Installierer automatisch löschen</li>
      <li class="list02"><i></i> Systemwiederherstellungspunkt automatisch erstellen</li>
      <li class="list03"><i></i> Ausgewählte Updates ignorieren</li>
      <li class="list04"><i></i> Liste der autom.-Aktualisierungen anpassen</li>
      <li class="list05"><i></i> Keine gesponserten Anzeigen</li>
    </ul>
    <div class="img-list">
      <div class="img-box">
        <ul class="box">
          <li data-num="0"><img src="<?php echo getStaticUrl('images/feature-list01.png')?>" alt=""/></li>
          <li data-num="1"><img src="<?php echo getStaticUrl('images/feature-list02.png')?>" alt=""/></li>
          <li data-num="2"><img src="<?php echo getStaticUrl('images/feature-list03.png')?>" alt=""/></li>
          <li data-num="3"><img src="<?php echo getStaticUrl('images/feature-list04.png')?>" alt=""/></li>
          <li data-num="4"><img src="<?php echo getStaticUrl('images/feature-list05.png')?>" alt=""/></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- feature end -->

<!-- review start -->
<div class="review ">
  <div class="wrapper">
    <h2>Was sagen andere dazu:</h2>
    <!-- review box -->
    <div class="review-box">
      <a href="javascript: void(0)" class="prev"></a>
      <!-- content -->
      <div class="content">
        <div class="roll">
          <div class="message">
            <dl>
              <dt><img src="<?php echo getStaticUrl('images/softpedia.png')?>" alt=""/></dt>
              <dd>
                Media review
                <strong>softpedia</strong>
              </dd>
            </dl>
            <p>IObit Software Updater wurde entwickelt, um all ihre Anwendungen auf dem PC aktuell zu halten. Es kann nach neuen Versionen suchen und diese automatisch installieren. Außerdem hilft es ihnen dabei, beliebte Software für verschiedene Zwecke herunterzuladen und zu installieren.</p>
          </div>
          <div class="message">
            <dl>
              <dt><img src="<?php echo getStaticUrl('images/user.png')?>" alt=""/></dt>
              <dd>
                User Review
                <strong>Nicolae Mocioc</strong>
              </dd>
            </dl>
            <p>Ich habe eine kostenlose Version von IObit von einem Freund bekommen und ich bin von der Geschwindigkeit und der einfachen Handhabung der Software beeindruckt. Es ist genau das Richtige für Anfänger, die ihren PC pflegen wollen. Vielen Dank dafür! Ich plane eine IObit Lizenz zu erwerben, einfach um das Unternehmen dabei zu unterstützen, weiter zu machen.Dankeschön!</p>
          </div>
          <div class="message">
            <dl>
              <dt><img src="<?php echo getStaticUrl('images/user.png')?>" alt=""/></dt>
              <dd>
                User Review
                <strong>Joshua Irving</strong>
              </dd>
            </dl>
            <p>Ich liebe es, dass die Updates automatisch vorgenommen werden. Das Programm ist schnell und effizient. Zudem wird ein Wiederherstellungspunkt erstellt, falls bei der Installation irgendwas schief geht. Es ist außerdem super, dass das Programm die Updates direkt von den passenden Seiten herunterlädt. So muss ich nicht mehr auf jede einzelne Seite gehen, um die Updates zu downloaden. Meiner Meinung nach ist das eine von euren besten Ideen gewesen!</p>
          </div>
          <div class="message">
            <dl>
              <dt><img src="<?php echo getStaticUrl('images/user.png')?>" alt=""/></dt>
              <dd>
                User Review
                <strong>Nico Bremmer</strong>
              </dd>
            </dl>
            <p>Das ist ein toller Software Updater. Es ist einfach gestaltet und leicht zu bedienen. Das Programm läuft ohne Probleme und sehr schnell. Auch das Design ist super und modern und es ist praktisch, dass sowohl die alte als auch die neue Version des Programms zu sehen ist, das man updaten will. Es ist auch ganz praktisch, dass das Programm einem Empfehlungen für neue Programm anzeigt.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- review end -->

<!-- awards start -->
<div class="awards">
  <h2>Redaktions-Tipp</h2>
  <p>IObit Software Updater wurden von Branchenexperten besonders empfohlen.</p>
  <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
</div>
<!-- awards end -->

<!-- bottom start -->
<div class="bottom">
  <div class="wrapper">
    <p class="annotation">
      Hinweis:
      <br>
      *.Nach Ablauf der 30-tägigen Testphase wird Ihr Kreditkarten- oder PayPal-Konto automatisch mit 14,99€ belastet. Der Rabatt i.H.v. 50% auf den ursprünglichen Preis von 29,99 € gilt nur für Vorbestellungen!
    </p>
    <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit.  Alle Rechte vorbehalten</p>
  </div>
</div>
<!-- bottom end -->

<!-- floatlayer start -->
<div id="floatlayer" class="floatlayer nomal">
  <div class="wrapper clearfix">
    <img src="<?php echo getStaticUrl('images/fl-isu-box.png')?>" class="img-box" alt=""/>
    <div class="number">
      Nur
      <div class="giftNum">
        <span class="nwrap">
          <strong>
            <b>1</b>
          </strong>
        </span>
        <span class="nwrap">
          <strong>
            <b>1</b>
          </strong>
        </span>
      </div>
      Deals übrig, <strong class="viewNum"><?php echo $viewNum;?></strong>  Leute sind online
    </div>
    <p class="price">
      <span> <strong>0€</strong><sup>*</sup></span>
      <!-- buybtn -->
      <a href="https://www.iobit.com/buy.php?product=de-isu3preorder&ref=de_isu3preorder<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=de_purchase_isu"
         onclick="ga('send', 'event', 'isubuy', 'buy', 'isu3preorder-de');"
         class="buybtn">
        Jetzt vorbestellen
      </a>
    </p>
  </div>
</div>
<!-- floatlayer end -->
<script>refStr="<?php echo $refStr;?>";</script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>