<?php
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './';
    $pRootUrl = '../../../';
  }
  include $pRootUrl.'include/common.inc.php';

$viewNum=rand(126,158);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}
if(!empty($_GET['action'])&&($_GET['action']=='getSales')){
  $date=$_GET['d'];
  $cName='deiumon_b'.$date;
  $cookie=$_COOKIE[$cName];
  if($cookie!==null){
    $packsNum=$_COOKIE[$cName];
    if($packsNum>0){
      $packsNum--;
      setcookie($cName,$packsNum);
    }else{
      $packsNum=0;
      setcookie($cName,$packsNum);
    }
  }else{
    $packsNum=rand(78,98);
    setcookie($cName,$packsNum);
  }
  echo $packsNum;
  exit();
}

$refStr='';
if(in_array($_GET['st'],array('iu_xmas','iuxmasr','iu_ascxmas','iu_dbxmas','iu_imfxmas'))){
  $refStr.='-'.$_GET['st'];
}
if(!empty($_GET['to'])){
  $refStr.='-'.$_GET['to'];
}
if($_GET['pop']=='x_iu'){
  $refStr.='-'.$_GET['pop'];
}
if(preg_match('/^([0-9]*)\.([0-9]*)\./',$_GET['ver'],$matches)){
  $ver=$matches[1].'-'.$matches[2];
  $refStr.='-'.$ver;
}
if(in_array($_GET['st'],array('iu_wr'))){
  $refStr.='-'.$_GET['st'];
}
if(!empty($_GET['user'])){
  $refStr.='-'.$_GET['user'];
}
if(!empty($_GET['insday'])){
  $refStr.='-'.$_GET['insday'];
}
?>
<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <title>Sparen Sie bis zu 58% auf IObit Uninstaller PRO und erhalten Sie noch kostenlose Geschenke dazu - IObit</title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href='https://fonts.googleapis.com/css?family=Cabin:400,500,700' rel='stylesheet' type='text/css'>
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>

</head>
<body>
  <!-- banner -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com/de/index.php" target="_blank">IObit</a>
      <p class="choice">Zeichnet automatisch alle Systemänderungen auf, die während der Programminstallation<br> vorgenommen wurden</p>
      <div class="clearfix">
        <div class="left-img">
          <img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="IObit Uninstalller PRO">
        </div>
        <div class="right-message">
          <h2>Auf IObit Uninstaller 11 PRO upgraden</h2>
          <h3>Entfernen Sie unerwünschte Software spurlos</h3>
          <p class="price"><strong><b>16</b>,99€</strong> <del>39,95€</del></p>
          <p class="pc">1 Jahresabo für 3 PCs</p>
          <ul class="btnbox">
            <li class="first">
              <div class="numberbox">
                <span class="scroll"><em>0</em></span>
                <span class="scroll"><em>0</em></span>
                <span class="scroll"><em>5</em></span>
                <span class="scroll last"><em>0</em></span>
              </div>
              <p class="hurry">Nur noch <span class="gift">50</span> Stück zu diesem Preis!</p>
            </li>
            <li>
              <a class="buybtn"
                 href="https://www.iobit.com/buy.php?product=de-iu113pc1699&ref=iu11monitorsold1699b<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=de_purchase_iu"
                 onclick="ga('send', 'event', 'iubuy', 'buy', 'iu-monitor1699b-de');">
                Jetzt aktivieren
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end-->

  <!-- feature -->
  <div class="feature">
    <div class="wrapper">
      <div class="title-small">
        <h2>Warum auf IObit Uninstaller 11 PRO upgraden?</h2>
        <span>Bereinigung</span>
      </div>
      <div class="feature-box clearfix">
        <div class="feature-list left fl">
          <h3>Einfacher</h3>
          <p>
            Entfernt Programme mit einem Klick, die mit herkömmlichen Mitteln nicht deinstalliert werden können.
          </p>
          <img src="<?php echo getStaticUrl('images/feature01.png')?>" alt=""/>
        </div>
        <div class="feature-list right fr">
          <h3>Sauberer</h3>
          <p>
            Löscht automatisch alle Dateien und Registrierungen nicht mehr benötigter Software. 
          </p>
          <img src="<?php echo getStaticUrl('images/feature02.png')?>" alt=""/>
        </div>
        <img class="screen" src="<?php echo getStaticUrl('images/screen01.png')?>" alt=""/>
        <b class="uninstall">deinstallieren</b>
      </div>
      <span class="arrow-down"></span>
    </div>
  </div>
  <!-- feature end -->

  <!-- benfits -->
  <div class="benfits">
    <div class="wrapper">
      <h2>Andere Vorteile von IObit Uninstaller 11 PRO?</h2>
      <div class="benfits-box">
        <img class="screen" src="<?php echo getStaticUrl('images/screen02.png')?>" alt=""/>
        <dl class="list01">
          <dt>Bundleware entfernen</dt>
          <dd>
            Deinstalliert unerwünschte Programme von Drittanbietern, die neben Freeware installiert sind, um Werbung zu blockieren und persönliche Daten zu schützen.
          </dd>
          <dd><strong>* NUR IN PRO</strong></dd>
        </dl>
        <dl class="list02">
          <dt>Schnelles & sicheres Surfen</dt>
          <dd>Erkennt werbebasierte/böswillige Plugins und entfernt Browser-Benachrichtigungen für ein sicheres und sauberes Surferlebnis</dd>
          <dd><strong>* NUR IN PRO</strong></dd>
        </dl>
        <dl class="list03 green">
          <dt>Hartnäckige Programme löschen</dt>
          <dd>Löscht hartnäckige Programme vollständig, die mit herkömmlichen Mitteln nicht deinstalliert werden können.</dd>
          <dd><strong>* NUR IN PRO</strong></dd>
        </dl>
        <dl class="list04 green">
          <dt>Software Health</dt>
          <dd>Aktualisiert hunderte beliebte Softwares mit nur einem Klick, um Sicherheitsbedrohungen zu vermeiden.</dd>
          <dd><strong>* NUR IN PRO</strong></dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- benfits end -->

  <!-- review -->
  <div class="review wrapper">
    <h2>Von Benutzern und Branchenexperten empfohlen</h2>
    <div id="dg-container" class="dg-container">
      <div class="nav"> 
        <span class="dg-prev"></span>
        <span class="dg-next"></span>
      </div>
        <div class="content dg-wrapper">  
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/chip.png')?>" alt="Chip"></dt>
            <dd>
              <h2>Media Review </h2>
              <p>Die Pro-Version beinhaltet alle Funktionen der Freeware und kommt mit einigen praktischen Zusatz-Features. So kann die Vollversion beispielsweise auch gebündelte Programme oder Plugins entfernen und alle Ihre wichtigen Programme mit nur einem Klick auf die neueste Version updaten."</p>
              <cite>Chip.de</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/jeff-a-watts.png')?>" alt="Jeff A Watts"></dt>
            <dd>
              <h2>User Review</h2>
              <p>Ich benutze IObit-Programme seit Jahren mit großer Wirkung! Aus diesem Grund bleibe ich bei IObit-Produkten. Ich habe in der Vergangenheit Laptops und Handys (Android) mit diesen gewartet und repariert und belasse sie immer mit installierten IObit-Produkten. Ich fordere sie regelmäßig zum Scannen auf, und sie teilen mir mit, wann der Laptop/ Computer / das Handy automatisch repariert und beschleunigt werden. :) Ich empfehle das Deinstallationsprogramm .</p>
              <cite>Jeff A Watts</cite>
            </dd>
          </dl>             
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/lynett-van-niekerk.png')?>" alt="Lynette van Niekerk"></dt>
            <dd>
              <h2>User Review</h2>
              <p>Ich finde IObit Uninstaller ist hervorragend zu bedienen, da es alles hat, was Sie sich wünschen können. Ich liebe die Tatsache, dass es alle übrig gebliebenen Fragmente deinstalliert. Zusätzlich hat er einen Software-Updater, der Sie daran erinnert, wenn eines der Programme aktualisiert werden muss. Die Tatsache, dass es Batch-Programme deinstalliert, macht es wirklich zu einem Gewinner. Eigentlich ist es genau das, was man braucht, um den Computer gut am Laufen zu halten.</p>
              <cite>Lynette van Niekerk</cite>
            </dd>
          </dl>                 
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/paulo-martins.png')?>" alt="Paulo Martins"></dt>
            <dd>
              <h2>User Review</h2>
              <p>IObit Uninstaller ist die beste Software zum Entfernen von Programmen auf dem Computer, sehr schnell und effektiv. Es funktioniert besser als das grundlegende Deinstallationsprogramm von Windows. Es bereinigt gründlich Datenreste des Programms und es gibt keine Verzögerungen auf dem Computer. Ich benutze es seit ein paar Monaten und weiß nicht, wie ich ohne es leben soll. Ich empfehle es meinen Freunden und meiner Familie. Danke! IObit Uninstaller ist fantastisch.</p>
              <cite>Paulo Martins</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/lovro-zuzic.png')?>" alt="Lovro Žužić"></dt>
            <dd>
              <h2>User Review</h2>
              <p>Ich nutze IObit Uninstaller nun schon seit mehr als 3 Jahren. Einige der vielen Features, die ich regelmäßig nutze, sind Batch Uninstall, Tiefenscan, Dateischredder und kürzlich installierte Features. Somit habe ich einen schnellen Zugriff auf kürzlich installierte Programme, die ich nicht mag oder die nicht angemessen funktionieren.</p>
              <cite>Lovro Žužić</cite>
            </dd>
          </dl>
        </div>               
    </div>
  </div>
  <!-- review end -->
  
  <div class="bottom">
    <div class="award wrapper ">
      <h2>Redaktions-Tipp</h2>
      <p>Dieses Deinstallationsprogramm wurde seit Jahren von mehreren Fachmedien empfohlen</p>
      <img src="<?php echo getStaticUrl('images/award.png')?>" alt="">
    </div>
    <!-- service start -->
    <div class="service wrapper clearfix">
      <dl class="fl">
        <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dt>
        <dd>
          <h4>RISIKOFREI testen - 60 Tage Geld-zurück-Garantie</h4>
          <p>
           Durch die Aktivierung der PRO Edition werden unerwünschte Programme schnell deinstalliert!
          </p>
        </dd>
      </dl>
      <dl class="fr">
        <dd>
          <h4>Wir akzeptieren</h4>
        </dd>
        <dt><img src="<?php echo getStaticUrl('images/payments.png')?>" alt=""></dt>
      </dl>
    </div>
    <!-- service end -->

    <!-- annotation -->
    <dl class="annotation wrapper">
      <dt>Hinweis: </dt>
      <dd>*. Solche Promotionsprogramme können von IObit nach eigenem Ermessen zu jeder Zeit und ohne vorherige Ankündigung geändert werden.</dd>
      <dd>*. Daten können auf der Grundlage verschiedenes Systems oder Computers geändert werden.</dd>
    </dl>

    <!-- footer -->
    <div class="footer">    
      <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Alle Rechte vorbehalten</p>
    </div>
  </div>


  <!-- float -->
  <div class="float clearfix">
    <div class="wrapper">
      <div class="left-img">
        <img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt=" IObit Uninstalller PRO">
      </div>
      <ul class="btnbox fr">
        <li>
          <div class="numberbox">
            <span class="scroll"><em>0</em></span>
            <span class="scroll"><em>0</em></span>
            <span class="scroll"><em>5</em></span>
            <span class="scroll last"><em>0</em></span>
          </div>
          <p class="hurry">
            <span class="viewNum"><?php echo $viewNum;?></span> Besucher, <span class="gift">50</span> Stück übrig
          </p>
        </li>
        <li class="clearfix">
          <div class="price fl"><del>39,95€</del> <strong><b>16</b>,99€</strong></div>
          <a class="buybtn fr"
             href="https://www.iobit.com/buy.php?product=de-iu113pc1699&ref=iu11monitorsold1699b<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=de_purchase_iu"
             onclick="ga('send', 'event', 'iubuy', 'buy', 'iu-monitor1699b-de');">
            Jetzt aktivieren
          </a>
        </li>
      </ul>
    </div>
  </div>


  <div class="pop-over ">
    <h2>Gratisgeschenke für unsere glücklichen Benutzer</h2>
    <h3>ktivieren Sie jetzt IObit Uninstaller Pro, um ihre Gratisgeschenke (UVP: 69,94€) zu bekommen.</h3>
    <p>Limitiertes Angebot! Endet in <strong><span class="count-time">60</span>Sek.</strong></p>
    <img src="<?php echo getStaticUrl('images/pop-iu-box.png')?>" alt=" IObit Uninstalller PRO" class="imgbox">
    <a class="buybtn buybtn-pop" 
       href="https://www.iobit.com/buy.php?product=de-iu103pcpfsd1699&ref=de_iu10monitorbun1699b<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=de_purchase_iu" 
       onclick="ga('send', 'event', 'iubuy', 'buy', 'iu-monitorbundleb-de');">
      Meine Gratisgeschenke holen
    </a>
  </div>
  <div class="pop-bg "><span class="close">X</span></div>

  <script>refStr="<?php echo $refStr;?>";</script>
  <script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
  <script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>