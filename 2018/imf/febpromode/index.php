<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
include $pRootUrl.'include/common.inc.php';
$reduceNum=151551325;
$reduceTime=10;
$buyNum = number_format(ceil(microtimeFloat()*1000/(1000*$reduceTime)) - $reduceNum);

if (!empty($_GET['action']) && $_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'deimfma_p' . $date;
  if (!isset($_COOKIE[$c_name])) {
    $packsNum = 108;
    setcookie($c_name, $packsNum, time() + 3600 * 24);
  } else {
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
  echo $packsNum;
  exit;
}
?>
<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Sparen Sie bis zu 63% auf IObit Malware Fighter Pro.</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Lato:400,700'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
<script type="text/javascript">
  function getBuyNum(){
    $.ajax({
      type: "GET",
      url: "<?php echo $pRootUrl;?>callback.php",
      data: "action=getBuyNum&reduceNum=<?php echo $reduceNum;?>&reTime=<?php echo $reduceTime?>&r="+Math.random(),
      success: function(packs){
        $('.buyNum').html(packs);
        setTimeout('getBuyNum()', 10000);
      }
    });
  }
  setTimeout('getBuyNum()', 10000);
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
      <h1>UNSCHLAGBARES  ANGEBOT SALE</h1>
      <div class="imgbox">
        <img src="<?php echo getStaticUrl('images/imfbox.png')?>" alt="IObit Malware Fighter PRO" />
      </div>
      <div class="price">
        <p>
          <strong>21<small>,99€</small></strong>
          <i>/</i>
          <span>
            <b><font>38€</font> sparen</b>
            <em>UVP: 59,95 € </em>
          </span>
        </p>
        <a class="buybtn" 
           href="http://www.iobit.com/buy.php?product=de-imf53pc2199&ref=de_imf53pcpurchase1802&refs=de_purchase_imf"
           onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase201802-de')">
          JETZT KAUFEN 
        </a>
        <p class="people"><i class="all-icons"></i>Bereits <b class="buyNum"><?php echo $buyNum;?></b> Deals verkauft</p>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- point start -->
  <div class="point">
    <div class="wrapper clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/icons01.png')?>" alt="" /></dt>
        <dd>
          <h3>Dreifachschutz</h3>
          <p>Anti-Ransomware-Maschine, <span>IObit-Anti-Malware-Maschine und</span> Bitdefender-Maschine</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt="" /></dt>
        <dd>
          <h3>Echtzeitschutz</h3>
          <p>Besser Echtzeitschutz mit <span>Kamera-Wächter, USB-Speicher-</span>Wächter &amp; Datei-Wächter</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt="" /></dt>
        <dd>
          <h3>Anti-Browser-Verfolgung</h3>
          <p>Automatische Reinigung der <span>schädlichen Datenspuren beim</span> Beenden Ihres Browsers</p>
        </dd>
      </dl>
      <dl class="last">
        <dt><img src="<?php echo getStaticUrl('images/icons04.png')?>" alt="" /></dt>
        <dd>
          <h3>Service</h3>
          <p>Kostenloser professioneller <span>Support &amp; automatische Updates auf</span> die neueste Version</p>
        </dd>
      </dl>
    </div>
  </div>
  <!-- point end -->

  <!-- intro start -->
  <div class="intro">
    <div class="wrapper">
      <div class="introimg">
        <div class="imglist">
          <ul>
            <li class="shot3"><img src="<?php echo getStaticUrl('images/screenshot03.png')?>" alt=""></li>
            <li class="shot2"><img src="<?php echo getStaticUrl('images/screenshot02.png')?>" alt=""></li>
            <li class="shot1"><img src="<?php echo getStaticUrl('images/screenshot01.png')?>" alt=""></li>
          </ul>
        </div>
        <div class="mask left-mask"></div>
        <div class="mask right-mask"></div>
        <a href="javascript:;" class="prev btn"><</a>
        <a href="javascript:;" class="next btn">></a>
      </div>
    </div>
  </div>
  <!-- intro end -->

  <!-- awards start -->
  <div class="awards">
    <div class="wrapper">
      <h2>Von diesen Medien empfohlen und ausgezeichnet</h2>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt="" />
    </div>
  </div>
  <!-- awards end -->

  <!-- review start -->
  <div class="review wrapper">
    <h2>Bewertungen</h2>
    <div class="clearfix">
      <dl class="bob">
        <dt><img src="<?php echo getStaticUrl('images/bob-bassett.png')?>" alt="Bob Bassett" /></dt>
        <dd>
          <h3>„Seitdem wir ihre Produkte nutzen, haben wir keine Probleme mehr. “</h3>
          <h3>-Bob Bassett</h3>
        </dd>
      </dl>
      <dl class="chip">
        <dt><img src="<?php echo getStaticUrl('images/chip.png')?>" alt="" /></dt>
        <dd>
          <h3>„Der IObit Malware Fighter tritt den Kampf gegen gefährliche Malware für Sie an.“</h3>
          <p>„Der IObit Malware Fighter ist ein erweitertes Dienstprogramm zur Entfernung sowie zum Schutz vor gefährlicher Malware und Spyware.Auch Adware, Trojaner Keylogger, Bots, Würmer und es mit der Software schwerer haben, Ihren Computer anzugreifen.“</p>
          <h3>-Chip.de</h3>
        </dd>
      </dl>
      <dl class="peter">
        <dt><img src="<?php echo getStaticUrl('images/peter-stoffers.png')?>" alt="Peter Stoffers" /></dt>
        <dd>
          <h3>„Der IMF findet alle Probleme als Erster und blockiert diese.“</h3>
          <h3>-Peter Stoffers</h3>
        </dd>
      </dl>
    </div>
  </div>
  <!-- review end -->

  <!-- comparison start -->
  <div class="comparison" id="compare">
    <div class="wrapper">
      <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <thead>
          <tr>
            <th class="text" colspan="2">Mehr Vorteile von IObit Malware Fighter PRO auf einen Blick</th>
            <th class="itemb"><span>IObit Malware Fighter</span>FREE</th>
            <th class="itema">
              <span>IObit Malware Fighter</span>PRO
              <p><strong>21<small>,99€</small></strong> UVP: 59,95 €  </p>
              <a class="buybtn" 
                 href="http://www.iobit.com/buy.php?product=de-imf53pc2199&ref=de_imf53pcpurchase1802&refs=de_purchase_imf" 
                 onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase201802-de')">
                JETZT KAUFEN
              </a>
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="title" colspan="4">Guarantirt einen sichereren PC</td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_01.png"></td>
            <td class="virtue">Grundlegende Anti-Malware Funktion</td>
            <td class="itemb"><i class="all-icons">√</i></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_02.png')?>" alt="" /></td>
            <td class="virtue">
              Erweiterter Bedrohungsschutz mit Bitdefender Anti-Viren-Engine 
              <sup>VERBESSERT</sup>
            </td>
            <td class="itemb"><i class="all-icons circle">√</i></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_03.png')?>" alt="" /></td>
            <td class="virtue">
              Erkennt und verhindert Ransomware wie Petya/GoldenEye, Wannacry
              <sup>VERBESSERT</sup>
            </td>
            <td class="itemb"><i class="all-icons circle">√</i></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt="" /></td>
            <td class="virtue">Grundlegender Echtzeitschutz gegen bösartiges Verhalten</td>
            <td class="itemb"><i class="all-icons"></i></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_05.png')?>" alt="" /></td>
            <td class="virtue">
              Umfassender Echtzeitschutz für erstklassige PC Sicherheit
              <sup>VERBESSERT</sup>
            </td>
            <td class="itemb"><i class="all-icons circle"></i></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_06.png')?>" alt="" /></td>
            <td class="virtue">Schützt Ihre Kamera vor unbefugtem Zugriff <sup class="neu">NEU</sup></td>
            <td class="itemb"><i class="all-icons circle"></i></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_07.png')?>" alt="" /></td>
            <td class="virtue">Verhindert Vireninfektion durch USB-Datenträger</td>
            <td class="itemb"><i class="all-icons circle"></i></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt="" /></td>
            <td class="virtue">Erkennt bösartige Prozesse, die im RAM laufen</td>
            <td class="itemb"><i class="all-icons circle"></i></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_09.png')?>" alt="" /></td>
            <td class="virtue">Scannt bis zu 130% schneller um aktive Bedrohungen rasch zu finden</td>
            <td class="itemb"><i class="all-icons circle"></i></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_10.png')?>" alt="" /></td>
            <td class="virtue">Erkennt Gefährdungen durch die Analyse böswilliger Aktionen</td>
            <td class="itemb"><i class="all-icons"></i></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="title" colspan="4">Sichert Ihre Online-Sicherheit</td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_11.png')?>" alt="" /></td>
            <td class="virtue">Löscht Ihre Surfspuren automatisch um böswillige Verfolgung zu blockieren</td>
            <td class="itemb"><i class="all-icons circle"></i></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_12.png')?>" alt="" /></td>
            <td class="virtue">Scannt die herunterdeladenen Dateien und entfernt die Anzeigen für höhere Sicherheit</td>
            <td class="itemb"><i class="all-icons"></i></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_13.png')?>" alt="" /></td>
            <td class="virtue">Verbesserter Shutz für Startseiten &amp; DNS</td>
            <td class="itemb"><i class="all-icons"></i></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="title" colspan="4">Optimaler Service von IObit</td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_14.png')?>" alt="" /></td>
            <td class="virtue">Automatische Updates auf die neuste Version</td>
            <td class="itemb"><i class="all-icons circle"></i></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_15.png')?>" alt="" /></td>
            <td class="virtue">Kostenloser technischer Support 24/7</td>
            <td class="itemb"><i class="all-icons circle"></i></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <th class="text" colspan="2"></th>
            <th class="itemb"><span>IObit Malware Fighter</span>FREE</th>
            <th class="itema">
              <p><strong>21<small>,99€</small></strong> UVP: 59,95 €  </p>
              <a class="buybtn" 
                 href="http://www.iobit.com/buy.php?product=de-imf53pc2199&ref=de_imf53pcpurchase1802&refs=de_purchase_imf" 
                 onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase201802-de')">
                JETZT KAUFEN 
              </a>
            </th>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
  <!-- comparison end -->

  <!-- bottom start -->
  <div class="bottom">
    <div class="wrapper">
      <!-- payment start -->
      <div class="payment clearfix">
        <dl>
          <dt><h4>Akzeptierte Zahlungsmethoden</h4></dt>
          <dd><img src="<?php echo getStaticUrl('images/visa.png')?>" alt="" /></dd>
        </dl>
        <dl>
          <dt><h4>Geld-zurück-Garantie</h4></dt>
          <dd><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt="" /></dd>
        </dl>
        <dl>
          <dt><h4>Zertifizierung</h4></dt>
          <dd><img src="<?php echo getStaticUrl('images/amgold.png')?>" alt="" /></dd>
        </dl>
      </div>
      <!-- payment end -->

      <!-- annotation start -->
      <dl class="annotation">
        <dt>Notiz:</dt>
        <dd>*. Solche Promotionsprogramme können von IObit nach eigenem Ermessen zu jeder Zeit und ohne vorherige Ankündigung geändert werden.</dd>
        <dd>*. Daten können auf der Grundlage verschiedenes Systems oder Computers geändert werden.</dd>
        <dd>*. UVP - Unverbindliche Preisempfehlung des Herstellers.</dd>
      </dl>
      <!-- annotation end -->

      <!-- footer start -->
      <div class="footer">Copyright   2005 - <?php echo date('Y')?> IObit. Alle Rechte vorbehalten</div>
      <!-- footer end -->
    </div>
  </div>
  <!-- bottom end -->

  <!-- floatlayout start -->
  <div class="floatlayer">
    <div class="popbox">
      <h3>Herzlichen Glückwunsch! Sie wurden als unser VIP-User ausgewählt!    </h3>
      <h2>63% Rabatt auf IMF PRO + kostenloses Geschenk</h2>
      <div class="text">
        <img src="<?php echo getStaticUrl('images/pfbox.png')?>" alt="Protected Folder" />
        <div class="right">
          <h4>1 Jahresabo    <b>0€</b>  (UVP:39,95€)</h4>
          <ul>
            <li><i class="all-icons">√</i> Bietet Passwortschutz für Ordner und Dateien unter Windows.</li>
            <li><i class="all-icons">√</i> Schützt Daten vor Datenverlust, Viren, Adware und Spyware.</li>
          </ul>
        </div>
      </div>
      <div class="price">
        <p><img src="<?php echo getStaticUrl('images/price.png')?>" alt="" /> <del>99,90€</del></p>
        <a class="buybtn" 
           href="http://www.iobit.com/buy.php?product=de-imf53pcpf2199&ref=de_imf53pcpfpurchase1802&refs=de_purchase_imf"
           onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase201802-de')">
          SOFORT KAUFEN
        </a>
        <p class="gift"><i class="all-icons"></i> Nur noch <b class="packsNum">109</b> Geschenke übrig</p>
      </div>
      <div class="close">×</div>
    </div>
  </div>
  <!-- floatlayout end -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>