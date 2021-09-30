<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
if(!empty($_GET['action'])&&($_GET['action']=='getSales')){
  $date=$_GET['d'];
  $cName='itaugiu'.$date;
  $cookie=$_COOKIE[$cName];
  if($cookie){
    $packsNum=$_COOKIE[$cName];
    if($packsNum>19){
      $packsNum--;
      setcookie($cName,$packsNum);
      if(rand(1,100)%2==0){
        $packsNum++;
      }
    }else{
      $packsNum=19;
    }
  }else{
    $packsNum=137;
    setcookie($cName,$packsNum);
  }
  echo $packsNum;
  exit();
}
  include $pRootUrl.'include/common.inc.php';
  $reduceNum=94689561;
  $reTime=15;
  $buyNum = number_format(ceil(microtimeFloat()*1000/(1000*$reTime)) - $reduceNum);

$refStr='';
if(in_array($_GET['pop'],array('x_iu'))){
  $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Neujahrsangebot - 80% Rabatt auf IObit Uninstaller PRO - IObit</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Lato:400,700'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
  <script type="text/javascript">
    function getBuyNum(){
      $.ajax({
        type: "GET",
        url: "<?php echo $pRootUrl;?>callback.php",
        data: "action=getBuyNum&reduceNum=<?php echo $reduceNum;?>&reTime=<?php echo $reTime;?>&r="+Math.random(),
        success: function(packs){
          $('.buyNum').html(packs);
          setTimeout('getBuyNum()', 15000);
        }
      });
    }
    setTimeout('getBuyNum()', 15000);
  </script>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
  
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
        <a class="logo" href="http://www.iobit.com" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit" />
      </a>
      <h1> Neujahrsangebot</h1>
      <p>80% Rabatt mit exklusiven Geschenken zu Neujahr</p>
      <!-- time -->
      <ul id="countdown" class="countdown">
        <li class="first"> Restzeit  <strong>00</strong> Std: </li>
        <li><strong>00</strong> Min: </li>
        <li><strong>00</strong> Sek</li>
      </ul>
      <div class="panel clearfix">
        <div class="fl">
          <img class="iubox" src="<?php echo getStaticUrl('images/iubox.png')?>" alt="" />
          <div class="seven"></div>
        </div>
        <div class="offer fr">
          <h2>IObit Uninstaller 7 PRO</h2>
          <span class="name">1 Jahr, 3 PCs</span>
          <p class="gift"><i class="all-icons"></i>  Protected Folder + Smart Defrag Pro   <b>UVP: 64,94€</b></p>
          <strong>18,<small>99€</small></strong> <del>99,93€</del>
          <a class="buybtn" href="http://www.iobit.com/buy.php?product=de-iu7pfsd1899&ref=de_iu7pfsd1801<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=de_purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase201801-de')">
            <div class="solid-layer"></div>
            <div class="border-layer"></div>
            <div class="text-layer">JETZT KAUFEN</div>
          </a>
          <p class="people"><i class="all-icons"></i> <span class="buyNum"><?php echo $buyNum;?></span> Deals verkauft</p>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- patment start -->
  <div class="payment wrapper"><img src="<?php echo getStaticUrl('images/payments.png')?>" alt="" /></div>
  <!-- patment end -->

  <!-- intro start -->
  <div class="intro wrapper">
    <h2>Genießen Sie leistungsstarke Deinstallation für schnelles und sicheres Surfen.</h2>
    <p> 1 Jahresabonnement für 3 PCs</p>
    <div class="introimg">
      <div class="imglist">
        <ul>
          <li class="shot3"><img src="<?php echo getStaticUrl('images/screenshot02.png')?>" alt=""></li>
          <li class="shot2"><img src="<?php echo getStaticUrl('images/screenshot03.png')?>" alt=""></li>
          <li class="shot1"><img src="<?php echo getStaticUrl('images/screenshot01.png')?>" alt=""></li>
        </ul>
      </div>
      <a href="javascript:;" class="prev btn"><</a>
      <a href="javascript:;" class="next btn">></a>
    </div>
    <div class="feature clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature_01.png')?>" alt=""></dt>
        <dd>
          <h3><b>NEU! </b> Bundleware erkennen und deinstallieren</h3>
          <p>Erkennt und deinstalliert Bundleware wie Adware, Browser-Plug-ins und andere Software von Drittanbietern.</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature_02.png')?>" alt=""></dt>
        <dd>
          <h3><b>VERBESSERT! </b> Automatische Reinigung</h3>
          <p>Scannt und säubert die Restdateien für einen saubereren und schnelleren PC</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature_03.png')?>" alt=""></dt>
        <dd>
          <h3><b>VERBESSERT!</b> Sicheres und schnelles Surfen</h3>
          <p>Erkennt Plugins und Anzeigenerweiterungen automatisch </p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature_04.png')?>" alt=""></dt>
        <dd>
          <h3><b>NEU!</b> Software-Updater</h3>
          <p>Aktualisieren Sie wichtige Programme mit nur einem  Klick auf Ihrem Computer.</p>
        </dd>
      </dl>
    </div>
    <a href="javascript: void(0);" class="comparebtn">Erfahren Sie mehr über die Pro-Version >></a>
  </div>
  <!-- intro end -->

  <!-- donation start -->
  <div class="donation ">
    <h2>VIP-Geschenke nur für den User von IObit Uninstaller PRO!</h2>
    <div class="cont wrapper clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/gift-pf.png')?>" alt="" /></dt>
        <dd>
          <h3>Protected Folder <strong>0€ </strong> <del>39,95€</del></h3>
          <ul>
            <li><i class="all-icons"></i>Ihre wichtigen und persönlichen Dateien schützen</li>
            <li><i class="all-icons"></i>Keine Sorgen um Datendiebstahl</li>
          </ul>
        </dd>
      </dl>
      <dl class="sd">
        <dt><img src="<?php echo getStaticUrl('images/gift-sd.png')?>" alt="" /></dt>
        <dd>
          <h3>Smart Defrag PRO <strong>0€ </strong> <del>29,99€</del></h3>
          <ul>
            <li><i class="all-icons"></i>Defragmentiert Ihre Festplatten automatisch </li>
            <li><i class="all-icons"></i>200% schneller Zugriff auf Dateien</li>
          </ul>
        </dd>
      </dl>
    </div>
  </div>
  <!-- donation end -->

  <!-- awards start -->
  <div class="awards ">
    <h2>Von diesen Medien empfohlen und ausgezeichnet</h2>
    <img src="<?php echo getStaticUrl('images/awards.png')?>" alt="" />
  </div>
  <!-- awards end -->

  <!-- review start -->
  <div class="review wrapper">
    <div class="content">
      <dl>
        <dt>
        <h3>Kundenbewertung</h3></dt>
        <dd>
          <h4>„IObit Uninstaller ist wahrscheinlich eines der besten Programme, um unnötige Programme von deinem Computer zu entfernen.“</h4>
        </dd>
        <dd>„IObit Uninstaller ist wahrscheinlich eines der besten Programme, um unnötige Programme von deinem Computer zu entfernen. Im Gegensatz zur Windows Standarddeinstallation, entfernt dieses Programm jegliche Überbleibsel der Programme, die später deinen PC verlangsamen könnten. Ich nutze dieses Programm seit mehreren Jahren und es hilft mir zu jeder Zeit meinen Computer sauber und schnell zu halten. Ich habe dieses Programm an einige meiner Freunde in der Vergangenheit weiterempfohlen und würde heute auch wieder tun.“</dd>
      </dl>
      <dl class="active">
        <dt>
        <h3>Media Review</h3></dt>
        <dd>
          <h4>„In der Pro-Version arbeitet der "IObit Uninstaller" noch besser als in der Freeware - greifen Sie also schnell zu!“</h4>
        </dd>
        <dd>„Die Pro-Version beinhaltet alle Funktionen der Freeware und kommt mit einigen praktischen Zusatz-Features. So kann die Vollversion beispielsweise auch gebündelte Programme oder Plugins entfernen und alle Ihre wichtigen Programme mit nur einem Klick auf die neueste Version updaten.“-CHIP</dd>
      </dl>
      <dl>
        <dt>
        <h3>Kundenbewertung</h3></dt>
        <dd>
          <h4>„IObit Uninstaller ist eines der besten Programme mit seinem Nutzungsumfang.“</h4>
        </dd>
        <dd>„IObit Uninstaller ist eines der besten Programme mit seinem Nutzungsumfang. Einfach zu handhaben, schnelle und tiefe Reinigung. Die Version beinhaltet mehr andere Funktionalitäten, die nicht nur mit Windows 10 funktionieren. Die schnelle Reinigung durch die Plug-ins ist auch sehr komfortabel. Ebenso die Suche nach Duplikaten und nicht genutzten Programmen. Danke für die Bewirtung der Computer meiner Familie und mir.“</dd>
      </dl>
    </div>
    <ul class="users clearfix">
      <li>
        <div class="pic"><img src="<?php echo getStaticUrl('images/sergey-erlich.png')?>" alt="Sergey Erlich">
        </div>
        <p>Sergey Erlich</p>
      </li>
      <li class="active">
        <div class="pic"><img src="<?php echo getStaticUrl('images/chlp.png')?>" alt="CHIP"></div>
        <p>CHIP</p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo getStaticUrl('images/ada-gortler.png')?>" alt="Áda Görtler">
        </div>
        <p>Áda Görtler</p>
      </li>
    </ul>
  </div>
  <!-- review end -->

  <!-- comparison start -->
  <div class="comparison wrapper" id="compare">
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
      <thead>
        <tr>
          <th class="text" colspan="2">Welche Vorteile bietet Ihnen die PRO Edition?</th>
          <th class="itemb">IObit Uninstaller 7 FREE</th>
          <th class="itema">IObit Uninstaller 7 PRO</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_01.png')?>" alt="" /></td>
          <td class="virtue">Entfernt unerwünschte Programme gründlich und schnell <span>Verbessert</span></td>
          <td class="itemb"><i class="all-icons">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_02.png')?>" alt="" /></td>
          <td class="virtue">Enrfernt Plug-ins & Erweiterungen auf Edge, Chrome, IE, Firefox, usw.  <span class="nuo">Neu</span></td>
          <td class="itemb"><i class="all-icons">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_03.png')?>" alt="" /></td>
          <td class="virtue">Entfernt problematische Windows-Updates leicht<span>Verbessert</span></td>
          <td class="itemb"><i class="all-icons">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt="" /></td>
          <td class="virtue">Erkennt und entfernt gebündelte Software & Plug-ins</td>
          <td class="itemb"><i class="all-icons circle">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_05.png')?>" alt="" /></td>
          <td class="virtue">Mit einem Klick aktualisieren Sie alle wichtigen Software <span class="nuo">Neu</span></td>
          <td class="itemb"><i class="all-icons circle">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_06.png')?>" alt="" /></td>
          <td class="virtue">Deinstalliert bösartige Plug-Ins für sichereres Surfen <span class="nuo">Neu</span> </td>
          <td class="itemb"><i class="all-icons circle">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_07.png')?>" alt="" /></td>
          <td class="virtue">Sauberes und schnelles Surf-Erlebnis mit Anti-Adware <span class="nuo">Neu</span> </td>
          <td class="itemb"><i class="all-icons circle">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt="" /></td>
          <td class="virtue">Entfernt automatisch die Restdateien, die andere Uninstaller nicht entfernten  </td>
          <td class="itemb"><i class="all-icons circle">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_09.png')?>" alt="" /></td>
          <td class="virtue">Automatisches Update auf die neueste Version</td>
          <td class="itemb"><i class="all-icons circle">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_10.png')?>" alt="" /></td>
          <td class="virtue">Kostenloser 24/7 technischer Support</td>
          <td class="itemb"><i class="all-icons circle">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
      </tbody>
      <tfoot>
        <tr>
          <th colspan="2"></th>
          <th class="itemb">IObit Uninstaller 7 FREE<p>Ihre aktuelle Version </p></th>
          <th class="itema">
           IObit Uninstaller PRO
            <p><strong>18,99€ </strong> <del>99,93€</del></p>
            <a class="buybtn" href="http://www.iobit.com/buy.php?product=de-iu7pfsd1899&ref=de_iu7pfsd1801<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=de_purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase201801-de')">
              <div class="solid-layer"></div>
              <div class="border-layer"></div>
              <div class="text-layer">JETZT KAUFEN</div>
            </a>
          </th>
        </tr>
      </tfoot>
    </table>
  </div>
  <!-- comparison end -->

  <!-- service start -->
  <div class="service wrapper clearfix">
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt="" /></dt>
      <dd><h4>Geld-zurück-Garantie</h4></dd>
      <dd>Wir garantieren vollständige <br> Rückerstattung  innerhalb von <br> 60 Tagen ab Kaufdatum.</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/godaddy-secure.png')?>" alt="" /></dt>
      <dd><h4>100% sichere Zahlung</h4></dd>
      <dd>IObit akzeptiert sichere Zahlungsmethoden <br> für die Transaktion.</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/24hours.png')?>" alt="" /></dt>
      <dd><h4>Support-Service</h4></dd>
      <dd>Unser professioneller Support-Service <br> steht Ihnen die ganze Zeit zur Verfügung</dd>
    </dl>
  </div>
  <!-- service end -->

  <!-- annotation start -->
  <dl class="annotation wrapper">
    <dt>Notiz:</dt>
    <dd>*. Solche Promotionsprogramme können von IObit nach eigenem Ermessen zu jeder Zeit und ohne vorherige Ankündigung geändert werden.</dd>
    <dd>*. Daten können auf der Grundlage verschiedenes Systems oder Computers geändert werden.</dd>
  </dl>
  <!-- annotation end -->

  <!-- footer start -->
  <div class="footer">Copyright ©2005 - <?php echo date('Y')?> IObit. Alle Rechte vorbehalten</div>
  <!-- footer end -->

  <!-- floatlayer start -->
  <div class="floatlayer" id="floatlayer">
    <div class="wrapper clearfix">
      <div class="left fl">
        <h2>Zeitlich begrentztes Angebot! </h2>
        <h3>Zahlen Sie täglich nur  <b>0,02€ </b> & erhalten Sie Neujahrsgeschenke!</h3>
      </div>
      <div class="offer fr">
        <strong>18,<small>99€</small></strong> <del>99,93€</del>
        <a class="buybtn" href="http://www.iobit.com/buy.php?product=de-iu7pfsd1899&ref=de_iu7pfsd1801<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=de_purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase201801-de')">
          <div class="solid-layer"></div>
          <div class="border-layer"></div>
          <div class="text-layer">JETZT KAUFEN</div>
        </a>
      </div>
    </div>
    <div class="close"></div>
    <div class="snow"></div>
  </div>
  <!-- floatlayer end -->
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>