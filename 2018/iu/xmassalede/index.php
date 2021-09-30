<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';

function microtime_float(){
  list($usec, $sec) = explode(' ', microtime());
  return ((float)$usec + (float)$sec);
}

$reduceNum=69041325;
$buyNum = number_format(ceil(microtime_float()*1000/20000) - $reduceNum);

if(!empty($_GET['action'])&&($_GET['action']=='getSales')){
  $date=$_GET['d'];
  $cName='deascxmax'.$date;
  $cookie=$_COOKIE[$cName];
  if($cookie){
    $packsNum=$_COOKIE[$cName];
    if($packsNum>3){
      $packsNum--;
      setcookie($cName,$packsNum);
    }else{
      $packsNum=3;
    }
  }else{
    $packsNum=58;
    setcookie($cName,$packsNum);
  }
  echo $packsNum;
  exit();
}

function get_line($file, $line)
{
  $fp = fopen($file, 'r');
  $i = 0;
  while (!feof($fp)) {
    $i++;
    $c = fgets($fp);
    if ($i == $line) {
      return $c;
      break;
    }
  }
}

$name=explode(' ',trim(get_line('data/de_name_xmas.txt',rand(1,21))));
$firstName=preg_replace("/(.*)(.{3})/",'${1}'.str_repeat('*',3),$name[0]);
$lastName=preg_replace("/(.*)(.{3})/",'${1}'.str_repeat('*',3),$name[1]);
//$saleType=(rand(1,6)%6==0)?1:3;
$saleType=3;
if($_GET['action']=='getUser'){
  echo json_encode(array('firstName'=>$firstName,'lastName'=>$lastName,'buyNum'=>$buyNum));
  exit();
}

$refStr='';
if(in_array($_GET['pop'],array('x_iu'))){
  $refStr.='-'.$_GET['pop'];
}
if(in_array($_GET['to'],array('softall','soft','iuself','bdplug','plug','uqprom','bdfail',
    'bdprog','iuasc'))){
  $refStr.='-'.$_GET['to'];
}
if(in_array($_GET['st'],array('iu_wr'))){
  $refStr.='-'.$_GET['st'];
}
?>
<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sparen Sie 83% auf IObit Uninstaller Pro und erhalten Sie zusätzlich 2 Geschenke kostenlos!</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>

<body>
<!-- banner start -->
<div class="banner">
  <div class="wrapper">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/de/index.php" target="_blank">
      <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
    </a>
    <!-- title -->
    <h1>Neujahr-Sale Exklusives Angebot</h1>
    <div class="clearfix">
      <div class="left reduce-box fl">
        <img src="<?php echo getStaticUrl('images/iu-gift-box.png')?>" alt=""/>
      </div>
      <div class="right fr">
        <h2>IObit Uninstaller 8 PRO <small>(1 Jahr, 3 PCs)</small></h2>
        <h3><b>+</b> kostenlose Geschenke</h3>
        <h4>
          <i class="all-icons"></i> Begrentzte Anzahl. Nur <b class="packbox"><span class="packsNum"><?php echo $packsNum ?></span></b> Plätze übrig.
        </h4>
        <div class="price">
          <p><del>109,89€</del> <strong>18<small>,99€</small></strong></p>
          <p class="discount">Sie sparen 90.9€</p>
          <a class="buybtn" href="https://www.iobit.com/buy.php?product=de-iu83pcpfsd1899&ref=de_iu8pfsd1903<?php echo $refStr;?>&aff=&refs=de_purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase201901-de')">
            <div class="inner">
              <i class="all-icons"></i>
              <span>JETZT KAUFEN</span>
            </div>
          </a>
          <p class="people"><i class="all-icons"></i> Schon <b>107,389</b> Deals verkauft</p>
        </div>
        <img class="moneyback" src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/>
      </div>
    </div>
  </div>  
</div>
<!-- banner end -->

<!-- feature start -->
<div class="feature">
  <div class="wrapper clearfix">
    <!-- title -->
    <h2>
      Deinstallieren Sie Programme und Plugins schneller und gründlicher mit <br>IObit Uninstaller 8 PRO
    </h2>
    <!-- feature details -->
    <ul class="left-details fl">
      <!-- 01 -->
      <li class="padding-left50 top">
        <dl class="clearfix">
          <dt class="fl"><img src="<?php echo $pResUrl;?>images/feature-icon01.png" alt=""></dt>
          <dd class="fl">
            <h3>Leistungsstark</h3>
            <p>Ungewollte Programme, die sich nicht entfernen <br>lassen, können schnell deinstalliert werden.</p>
          </dd>
        </dl>
      </li>
      <!-- 02 -->
      <li class="middle">
        <dl class="clearfix">
          <dt class="fl"><img src="<?php echo $pResUrl;?>images/feature-icon02.png" alt=""></dt>
          <dd class="fl">
            <h3>Intelligent</h3>
            <p>Bündel-Software, Adware und Plug-Ins<br> werden erkannt und gelöscht.</p>
          </dd>
        </dl>
      </li>
      <!-- 03 -->
      <li class="padding-left50 bottom winrar">
        <dl class="clearfix">
          <dt class="fl"><img src="<?php echo getStaticUrl('images/feature-icon03.png')?>" alt=""></dt>
          <dd class="fl">
            <h3>Sicherheitsupdate <i>Vorsicht</i></h3>
            <p>
              Mit nur einem Klick können Sie wichtige <br>Software aktualisieren, 
              ohne dass ihre Arbeit beeinträchtigt <br>wird, z.B. <b>WinRAR* dessen 
              Sicherheitslücke ihren PC akut gefährdet.</b>
            </p>
            <span>*Sofort aktualisieren, sobald die neueste Version veröffentlicht wurde.</span>
          </dd>
        </dl>
      </li>
    </ul>
    <ul class="right-details fr">
      <!-- 04 -->
      <li class="padding-left165 top">
        <dl class="clearfix">
          <dt class="fl"><img src="<?php echo $pResUrl;?>images/feature-icon04.png" alt=""></dt>
          <dd class="fl">
            <h3>Automatisch</h3>
            <p>Dank des verbesserten Tiefenscans werden <br>alle Programmreste automatisch gefunden <br>und bereinigt.</p>
          </dd>
        </dl>
      </li>
      <!-- 05 -->
      <li class="padding-left180 middle">
        <dl class="clearfix">
          <dt class="fl"><img src="<?php echo $pResUrl;?>images/feature-icon05.png" alt=""></dt>
          <dd class="fl">
            <h3>Sauber</h3>
            <p>100% mehr Werbe-Plugins im Browser <br>werden gefunden und entfernt.</p>
          </dd>
        </dl>
      </li>
      <!-- 06 -->
      <li class="padding-left95 bottom schnell">
        <dl class="clearfix">
          <dt class="fl"><img src="<?php echo $pResUrl;?>images/feature-icon06.png" alt=""></dt>
          <dd class="fl">
            <h3>Schnell</h3>
            <p>Deinstalliert Software schnell über das Desktopsymbol, <br>geöffnete Fenster oder Taskleistensymbol.</p>
          </dd>
        </dl>
      </li>
    </ul>
    <!-- clear float -->
    <div class="clear"></div>
    <!-- a.intro -->
    <a class="intro" href="javascript:void (0);">Mehr über die PRO-Version erfahren>></a>
  </div>
</div>
<!-- feature end -->

<!-- betweenbuy start -->
<div class="betweenbuy">
  <!-- title -->
  <p><span>83% Rabatt.</span> Ab sofort aktivieren Sie IObit Uninstaller 8 PRO.</p>
  <h3>Erhalten Sie jetzt ein exklusives Geschenkpaket <span>(im Wert von 63,85€)</span></h3>
  <div class="wrapper">
    <div class="clearfix">
      <!-- SD box -->
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/sd-box.png')?>" alt="Smart Defrag PRO"></dt>
        <dd>
          <h4>Smart Defrag PRO</h4>
          <b>0€</b> <del>23,90€</del>
          <p>Defragmentiert Ihre Festplatte intelligent <br>und automatisch</p>
        </dd>
      </dl>
      <!-- PF box -->
      <dl class="pf">
        <dt><img src="<?php echo getStaticUrl('images/pf-box.png')?>" alt="Protected Folder"></dt>
        <dd>
          <h4>Protected Folder</h4>
          <b>0€</b> <del>39,95€</del>
          <p>Schützt wichtige Dateien vor bösartigen <br>Angriffen</p>
        </dd>
      </dl>
    </div>
    <!-- price -->
    <p class="price"><del>109,89€</del> <strong>18<small>,99€</small></strong></p>
    <!-- buybtn -->
    <a class="buybtn"
       href="https://www.iobit.com/buy.php?product=de-iu83pcpfsd1899&ref=de_iu8pfsd1903<?php echo $refStr;?>&aff=&refs=de_purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase201901-de')">
      <span>Superrabatt und Gratisgeschenke bekommen</span>
    </a>
    <!-- notes -->
    <p class="notes">
      <i class="all-icons"></i> Begrentzte Anzahl. Nur <b class="packbox"><span class="packsNum"><?php echo $packsNum ?></span></b> Plätze übrig.
    </p>
  </div>
</div>
<!-- betweenbuy end -->

<!-- awards start -->
<div class="awards wrapper">
  <h2>Von diesen Medien empfohlen und ausgezeichnet</h2>
  <img src="<?php echo getStaticUrl('images/awards.png')?>" alt="" />
</div>
<!-- awards end -->

<!-- media start -->
<dl class="media wrapper clearfix">
  <dt><img src="<?php echo getStaticUrl('images/chip.png')?>" alt="CHIP"/></dt>
  <dd>
    <h2>Media Review</h2>
    <h3>„In der Pro-Version arbeitet der "IObit Uninstaller" noch besser als in der Freeware - greifen Sie also schnell zu!“</h3>
    <p>
      „Die Pro-Version beinhaltet alle Funktionen der Freeware und kommt mit einigen praktischen Zusatz-Features. So kann die Vollversion beispielsweise auch gebündelte Programme oder Plugins entfernen und alle Ihre wichtigen Programme mit nur einem Klick auf die neueste Version updaten.“
    </p>
  </dd>
</dl>
<!-- media end -->

<!-- review start -->
<div class="review wrapper">
  <div class="content">
    <dl class="active">
      <dt>
      <h3>Kundenbewertung</h3></dt>
      <dd>
        <h4>
          „Uninstaller ist genial darin die Bit- und Bytereste, die sich überall verstecken, zu finden, die ansonsten Festplattenspeicher verbrauchen und das Register beeinflussen.“
        </h4>
      </dd>
      <dd>
        „Uninstaller PRO ist nur eines von fünf der IObit Wartungsprogrammen, in die ich für meinen PC investiert habe, wie Chefköche in Ihre Messer. Uninstaller ist genial darin die Bit- und Bytereste, die sich überall verstecken, zu finden, die ansonsten Festplattenspeicher verbrauchen und das Register beeinflussen. Wenn ich die ‚deinstallieren‘ Funktion des zu deinstallierenden Programmes nutze, funktioniert dies ohne Probleme. Aber Uninstaller PRO ist im Nachhinein aufgetaucht und hat 35 weitere Dateien angezeigt, die noch entfernt werden mussten. Alles was ich tun musste, ist OK zu klicken. Sehr zu empfehlen und auch von mir gekauft ist die Lizenz für 3 PCs. Der Support ist höflich und hervorragend.“
      </dd>
    </dl>
    <dl>
      <dt>
      <h3>Kundenbewertung</h3></dt>
      <dd>
        <h4>
          „IObit Uninstaller ist wahrscheinlich eines der besten Programme, um unnötige Programme von deinem Computer zu entfernen.“
        </h4>
      </dd>
      <dd>
        „IObit Uninstaller ist wahrscheinlich eines der besten Programme, um unnötige Programme von deinem Computer zu entfernen. Im Gegensatz zur Windows Standarddeinstallation, entfernt dieses Programm jegliche Überbleibsel der Programme, die später deinen PC verlangsamen könnten. Ich nutze dieses Programm seit mehreren Jahren und es hilft mir zu jeder Zeit meinen Computer sauber und schnell zu halten. Ich habe dieses Programm an einige meiner Freunde in der Vergangenheit weiterempfohlen und würde heute auch wieder tun.“
      </dd>
    </dl>
    <dl>
      <dt>
      <h3>Kundenbewertung</h3></dt>
      <dd>
        <h4>„IObit Uninstaller ist eines der besten Programme mit seinem Nutzungsumfang.“</h4>
      </dd>
      <dd>
        „IObit Uninstaller ist eines der besten Programme mit seinem Nutzungsumfang. Einfach zu handhaben, schnelle und tiefe Reinigung. Die neue Version beinhaltet mehr andere Funktionalitäten, die nicht nur mit Windows 10 funktionieren. Die schnelle Reinigung durch die Plug-ins ist auch sehr komfortabel. Ebenso die Suche nach Duplikaten und nicht genutzten Programmen. Danke für die Bewirtung der Computer meiner Familie und mir.“
      </dd>
    </dl>
    <dl>
      <dt>
      <h3>Kundenbewertung</h3></dt>
      <dd>
        <h4>
          „Der IObit Uninstaller wird mit jedem Update besser. Ich nutze ihn nun schon seit mehr als 3 Jahren.“
        </h4>
      </dd>
      <dd>
        „Der IObit Uninstaller wird mit jedem Update besser. Ich nutze ihn nun schon seit mehr als 3 Jahren. Er lädt schnell und hat eine einfache Benutzeroberfläche. Einige der vielen Features, die ich regelmäßig nutze, sind Batch Uninstall, Tiefenscan, Dateischredder und kürzlich installierte Features, welches mir einen schnellen Zugriff auf kürzlich installierte Programme gibt, die ich nicht mag oder nicht angemessen funktionieren. Es wird außerdem einfacher, deine Startanwendungen zu kontrollieren, sodass dein PC schneller hochfährt.“
      </dd>
    </dl>
  </div>
  <ul class="users clearfix">
    <li class="active">
      <div class="pic"><img src="<?php echo getStaticUrl('images/joseph-yu.png')?>" alt="Joseph Yu">
      </div>
      <p>Joseph Yu <span>2016</span></p>
    </li>
    <li>
      <div class="pic"><img src="<?php echo getStaticUrl('images/sergey-erlich.png')?>" alt="Sergey Erlich"></div>
      <p>Sergey Erlich <span>2016</span></p>
    </li>
    <li>
      <div class="pic"><img src="<?php echo getStaticUrl('images/ada-gortler.png')?>" alt="Áda Görtler">
      </div>
      <p>Áda Görtler <span>2016</span></p>
    </li>
    <li>
      <div class="pic"><img src="<?php echo getStaticUrl('images/lovro-zuzic.png')?>" alt="Lovro Žužić">
      </div>
      <p>Lovro Žužić <span>2016</span></p>
    </li>
  </ul>
</div>
<!-- review end -->

<!-- comparison start -->
<div class="comparison" id="compare">
  <div class="wrapper">
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
      <thead>
        <tr>
          <th class="text" colspan="2">Welche Vorteile bietet Ihnen die PRO Edition?</th>
          <th class="itemb">IObit Uninstaller 8 <b>FREE</b></th>
          <th class="itema">
            IObit Uninstaller 8 <b>PRO</b>
            <a class="buybtn" 
               href="https://www.iobit.com/buy.php?product=de-iu83pcpfsd1899&ref=de_iu8pfsd1903<?php echo $refStr;?>&aff=&refs=de_purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase201901-de')">
              JETZT SPAREN
            </a>
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_01.png')?>" alt="" /></td>
          <td class="virtue">Deinstalliert Programme über das Desktopsymbol, das Fenster oder die Taskleiste <span class="nuo">Neu</span></td>
          <td class="itemb"><i class="all-icons">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_02.png')?>" alt="" /></td>
          <td class="virtue">Entfernt Erweiterungen von Edge, Chrome, IE, Firefox, etc.</td>
          <td class="itemb"><i class="all-icons">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_03.png')?>" alt="" /></td>
          <td class="virtue">Erweiterte Datenbasis zur Entfernung hartnäckigster Programme <span class="sign two">Verbessert</span></td>
          <td class="itemb"><i class="all-icons circle">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt="" /></td>
          <td class="virtue">Erkennt und deinstalliert Fremd- und Freeware <span class="nuo">Neu</span></td>
          <td class="itemb"><i class="all-icons circle">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_05.png')?>" alt="" /></td>
          <td class="virtue">Entfernt automatisch Datenreste, die andere Anwendungen nicht löschen können <span>Verbessert</span></td>
          <td class="itemb"><i class="all-icons circle">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_06.png')?>" alt="" /></td>
          <td class="virtue">Erweiterte Datenbasis für die Findung und Entfernung bösartiger Plug-Ins <span class="sign two">Verbessert</span></td>
          <td class="itemb"><i class="all-icons circle">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_07.png')?>" alt="" /></td>
          <td class="virtue">Erweiterte Datenbasis für die Findung und Entfernung von Werbe-Plug-Ins <span class="sign two">Verbessert</span></td>
          <td class="itemb"><i class="all-icons circle">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt="" /></td>
          <td class="virtue">Updatet noch mehr essenzielle Software mit einem Klick <span class="sign five">Verbessert</span></td>
          <td class="itemb"><i class="all-icons circle">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_09.png')?>" alt="" /></td>
          <td class="virtue">Automatische Updates auf die neuste Version </td>
          <td class="itemb"><i class="all-icons circle">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_10.png')?>" alt="" /></td>
          <td class="virtue">Kostenloser technischer Support 24/7</td>
          <td class="itemb"><i class="all-icons circle">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
<!-- comparison end -->

<!-- bottombuy start -->
<div class="bottombuy">
  <div class="wrapper clearfix">
    <!-- left-message -->
    <div class="left reduce-box fl">
      <img src="<?php echo getStaticUrl('images/iu-gift-box.png')?>" alt=""/>
    </div>
    <!-- right-message -->
    <div class="right fr">
      <!-- ASC12 -->
      <h2>Sonderangebot 2019</h2>
      <h3><b>+</b> kostenlose Geschenke</h3>
      <h4>
        <i class="all-icons"></i> Begrentzte Anzahl. Nur <b class="packbox"><span class="packsNum"><?php echo $packsNum ?></span></b> Plätze übrig.
      </h4>
      <div class="price">
        <p><del>109,89€</del> <strong>18<small>,99€</small></strong></p>
        <a class="buybtn" href="https://www.iobit.com/buy.php?product=de-iu83pcpfsd1899&ref=de_iu8pfsd1903<?php echo $refStr;?>&aff=&refs=de_purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase201901-de')">
          <div class="inner">
            <i class="all-icons"></i>
            <span>JETZT KAUFEN</span>
          </div>
        </a>
        <p class="people"><i class="all-icons"></i> Schon <b>107,389</b> Deals verkauft</p>
      </div>      
    </div>
  </div>
</div>
<!-- bottombuy end -->

<!-- footer start -->
<div class="footer">
  <div class="container">
  <dl class="annotation wrapper">
    <dt>Hinweis:</dt>
    <dd>*. Solche Promotionsprogramme können von IObit nach eigenem Ermessen zu jeder Zeit und ohne vorherige Ankündigung geändert werden.</dd>
    <dd>*Daten können sich system- oder computerabhängig ändern.</dd>
  </dl>
  <p class="copyright">Copyright 2005 - <?php echo date('Y')?> IObit. Alle Rechte vorbehalten</p>
  </div>
</div>
<!-- footer end -->

<!-- float start -->
<div class="float">
  <!-- close -->
  <a class="close all-icons" href="javascript: void(0);">-</a>
  <p>
    <span id="firstName"><?php echo $firstName;?></span> <span id="lastName"><?php echo $lastName;?></span> hat es gekauft.<br>
    Achtung, nur noch <b class="packsNum"><?php echo $packsNum ?></b> Plätze übrig
  </p>

</div>
<!-- float end -->

<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>