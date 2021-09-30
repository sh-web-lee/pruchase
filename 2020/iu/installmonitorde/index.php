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
  $cName='deiumon'.$date;
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
$refStr=empty($_GET['to'])?'':('-'.$_GET['to']);

function changeCont($to, $transData){
    switch ($to){
        case 'cleanuninstall':
            $fileSize=$transData->cleanuninstall->extra;
            $fileSizeShow=number_format($fileSize/(1024*1024),0);
            if(($fileSize/(1024*1024))>=10){
                $fileSizeStr=$fileSizeShow.' MB';
            }else{
                $fileSizeStr='';
            }
            $dataNum = $transData->cleanuninstall->reg
                +$transData->cleanuninstall->file
                +$transData->cleanuninstall->task
                +$transData->cleanuninstall->service
                +$transData->cleanuninstall->dll;
            return 'Alle '. $dataNum .' protokollierten Elemente bereinigen und '. $fileSizeStr .' mehr Speicherplatz schaffen';
            break;
        case 'prom_d':
            $dataNum = $transData->promote3->reg
                +$transData->promote3->file
                +$transData->promote3->task
                +$transData->promote3->service
                +$transData->promote3->dll;
            return $dataNum .' weitere Datenreste mit dem Sauber-Deinstallationsmodus bereinigen';
            break;
    }
}
$to = empty($_GET['to']) ? '' : $_GET['to'];
$data = empty($_GET['data']) ? '' : $_GET['data'];
$tData=json_decode(base64_decode($data));

if ($to == 'cleanuninstall' || $to == 'prom_d') {
    $transData = changeCont($to, $tData);
}
?>
<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <title> Sparen Sie bis zu 58% auf IObit Uninstaller PRO und erhalten Sie noch kostenlose Geschenke dazu.</title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href='https://fonts.googleapis.com/css?family=Cabin:400,700' rel='stylesheet' type='text/css'>
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
  <!-- banner -->
  <div class="banner">
    <div class="wrapper">
      <a href="https://www.iobit.com/de/index.php" target="_blank" class="logo" target="_blank">IObit</a>
      <ul>
        <li class="first">
            <?php if ($to == 'cleanuninstall'): ?>
                SAUBER DEINSTALLIEREN
            <?php elseif ($to == 'prom_d'): ?>
                SAUBER DEINSTALLIEREN
            <?php else: ?>
                Installationsmonitor
            <?php endif; ?>
        </li>

          <li class="last">
              <?php if (!in_array($to, array('cleanuninstall', 'prom_d'))): ?>
                  Überwacht die Systemänderungen, die während der Installation vorgenommen wurden
              <?php else: echo $transData; endif; ?>
          </li>
      </ul>
      <div class="left-img"><img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="IObit Uninstalller PRO"></div>
      <div class="right-message">
        <h1>IObit Uninstaller 11 PRO</h1>
        <h2>Systemänderungen nach der Deinstallation von Programmen wiederhestellen</h2>
        <h2 class="uninstall _hide">Help to uninstall programs more thoroughly</h2>
        <p class="price"><strong><b>16</b>,99€</strong> <del>39,95€</del></p>
        <p class="pc"><span></span> 1 Jahresabo für 3 PCs</p>
        <div class="number-message">
          <div class="number">
            <div class="countdown">
              <div class="scroll-tick"><span>0</span></div>
              <div class="scroll-tick"><span>0</span></div>
              <div class="scroll-tick"><span>0</span></div>
              <div class="scroll-tick"><span>0</span></div>
            </div>
            <p>Nur noch <span class="gift">50</span> Stück zu diesem Preis!</p>
          </div>
          <div class="buy-content">
            <a href="https://www.iobit.com/buy.php?product=de-iu113pc1699&ref=iu11monitorsold1699<?php echo $refStr;?>" onclick="ga('send', 'event', 'iubuy', 'buy', 'iu-monitor1699-de')" class="buybtn"><i></i> <span>Jetzt aktivieren</span></a>
          </div>
        </div>
      </div>
    </div>
    
  </div>
  <!-- end banner -->

  <!-- problem -->
  <div class="problem">
    <div class="wrapper">
      <h2> Was kann der <span>Installationsmonitor</span>?</h2>
      <div class="message-box">
        <div class="list01">
          <h3>INSTALLATION ÜBERWACHEN</h3>
          <p>Es überwacht alle Aktionen, die Programme während der Installation auf Ihrem System ausgeführt haben.</p>
        </div>
        <div class="list02">
          <h3>Änderungen protokollieren</h3>
          <p>Es protokolliert die Datei- und Registrierungsänderungen, die von den Programmen vorgenommen wurden.</p>
        </div>
        <img class="screen" src="<?php echo getStaticUrl('images/screen-01.png')?>" alt=""/>
      </div>
    </div>
  </div>
  <!-- end problem -->
  <div class="feature">
    <div class="wrapper clearfix">
      <div class="left-message">
        <h2>Warum den <span>Installationsmonitor</span> aktivieren? </h2>
        <dl class="clearfix">
          <dt><img src="<?php echo getStaticUrl('images/list01.png')?>" alt=""></dt>
          <dd>
            <h3>SEHEN</h3>
            <p>
              Ermöglicht es Ihnen, die protokollierten Daten anzuzeigen, um genau zu sehen, was die überwachten Programme während der Installation getan haben.
            </p>
          </dd>
        </dl>
        <dl class="clearfix">
          <dt><img src="<?php echo getStaticUrl('images/list02.png')?>" alt=""></dt>
          <dd>
            <h3>DEINSTALLIEREN</h3>
            <p>Nach der Deinstallation von überwachten Programmen werden die Datei- und Registrierungsänderungen vollständig zurückgesetzt.</p>
          </dd>
        </dl>
      </div>
      <img class="img-box" src="<?php echo getStaticUrl('images/screen-02.png')?>" alt=""/>
    </div>
  </div>
  <!-- benfits -->
  <div class="benfits">
    <div class="wrapper">
      <h2>Welche weiteren Vorteile bietet <br>IObit Uninstaller PRO?</h2>
      <div class="box">
        <dl class="list01">
          <dt>Hartnäckige Programme löschen</dt>
          <dd>Löscht hartnäckige Programme vollständig, die mit herkömmlichen Mitteln nicht deinstalliert werden können.</dd>
          <dd><strong>* Nur in PRO</strong></dd>
        </dl>
        <dl class="list02 right">
          <dt>Komplett reinigen</dt>
          <dd>Bereinigt die verbleibenden Dateien von Programmen, die nicht von IObit Uninstaller deinstalliert wurden.</dd>
          <dd><strong>* Nur in PRO</strong></dd>
        </dl>
        <dl class="list03">
          <dt>Software Health</dt>
          <dd>Aktualisiert hunderte beliebter Softwares mit nur einem Klick, um Sicherheitsbedrohungen zu vermeiden.</dd>
          <dd><strong>* Nur in PRO</strong></dd>
        </dl>
        <dl class="list04 right">
          <dt>Schnelles & sicheres Surfen</dt>
          <dd>Erkennt werbebasierte/böswillige Plugins und entfernt Browser-Benachrichtigungen für ein sicheres und sauberes Surferlebnis</dd>
          <dd><strong>* Nur in PRO</strong></dd>
        </dl>
        <dl class="list05 right botright">
          <dt>Bundleware entfernen</dt>
          <dd>Entfernt unerwünschte Programme von Drittanbietern, die neben Freeware  installiert sind, um Ihre persönliche Daten zu schützen.</dd>
          <dd><strong>* Nur in PRO</strong></dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- end benfits -->


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
      <div class="left-img"><img src="<?php echo getStaticUrl('images/fl-iu-box.png')?>" alt=" IObit Uninstalller PRO"></div>
      <div class="number">
        <div class="countdown">
          <div class="scroll-tick"><span>0</span></div>
          <div class="scroll-tick"><span>0</span></div>
          <div class="scroll-tick"><span>0</span></div>
          <div class="scroll-tick"><span>0</span></div>
        </div>
        <p><span class="viewNum"><?php echo $viewNum;?></span> Besucher, <span class="gift">50</span> Stück übrig</p>
      </div>
      <p class="price"> <del> 39,95€ </del> <strong><b>16</b>,99€</strong></p>
      <a href="https://www.iobit.com/buy.php?product=de-iu113pc1699&ref=iu11monitorsold1699<?php echo $refStr;?>" onclick="ga('send', 'event', 'iubuy', 'buy', 'iu-monitor1699-de');" class="buybtn"><i></i> <span> Jetzt aktiveren</span></a>
    </div>
  </div>
  <div class="pop-over ">
    
    <h2>Gratisgeschenke für unsere glücklichen Benutzer</h2>
    <h3>ktivieren Sie jetzt IObit Uninstaller Pro, um ihre Gratisgeschenke (UVP: 69,94€) zu bekommen.</h3>
    <p>Limitiertes Angebot! Endet in <strong><span class="count-time">60</span>Sek.</strong></p>
    <img src="<?php echo getStaticUrl('images/pop-iu-box.png')?>" alt=" IObit Uninstalller PRO" class="imgbox">
    <a href="https://www.iobit.com/buy.php?product=de-iu113pc1699&ref=iu11monitorsold1699<?php echo $refStr;?>" onclick="ga('send', 'event', 'iubuy', 'buy', 'iu-monitorbundle-de'); " class="buybtn buybtn-pop">Meine Gratisgeschenke holen</a>
  </div>
  <div class="pop-bg "><span class="close">X</span></div>
  <script>refStr="<?php echo $refStr;?>";</script>
  <script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
  <script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>