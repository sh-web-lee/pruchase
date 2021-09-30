<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';
  $reduceNum=101406561;
  $reTime=15;
  $buyNum = number_format(ceil(microtimeFloat()*1000/(1000*$reTime)) - $reduceNum);

$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
if(!empty($_GET['to'])){
  $refStr.='-'.$_GET['to'];
}
$refStr.=empty($_GET['user'])?'':('-'.$_GET['user']);
$refStr.=empty($_GET['insday'])?'':('-'.$_GET['insday']);
?>
<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Welkom! Exclusief voor nieuwe gebruikers: 2 maanden gratis IObit Uninstaller PRO</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Cabin:400,700" rel="stylesheet">
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
  <script type="text/javascript">
    function strFormat(str){
      return str.replace(/,/g, '.');
    }
    function getBuyNum(){
      $.ajax({
        type: "GET",
        url: "<?php echo $pRootUrl;?>callback.php",
        data: "action=getBuyNum&reduceNum=<?php echo $reduceNum;?>&reTime=<?php echo $reTime;?>&r="+Math.random(),
        success: function(packs){
          $('.buyNum').html(packs);
          $('.buyNum').html(strFormat(packs));
          setTimeout('getBuyNum()', 20000);
        }
      });
    }
    setTimeout('getBuyNum()', 20000);
  </script>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
  
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com" target="_blank">IObit</a>
      <h1>Welkomstcadeau voor nieuwe gebruikers: 2 maanden gratis!</h1>
      <p class="pro">IObit Uninstaller PRO verwijdert overbodige software zonder sporen achter te laten en werkt automatisch software op <br> uw computer bij naar de laatste versie. </p>
      <div class="box">
        <h3>Tijdelijke voordeelbundel!</h3>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/iu-gift-box.png')?>" alt="" /></dt>
          <dd>
            <strong>€<b>25</b></strong>
            <del>€89,93</del>
          </dd>
        </dl>
        <p class="tag">1-jarig abonnement</p>
        <a href="https://www.iobit.com/buy.php?product=nl-iu111y3pcpfsd2500&ref=nl_iu111y3pcpfsd2500purchase1908<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=nl_purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase1908-nl')" class="buybtn"><i></i><span>BESTEL NU</span></a>
      </div>
      <div class="box three-pc">
        <h3>Met Exclusief Welkomstcadeau!</h3>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="" /></dt>
          <dd>
            <strong>€<b>18</b>,99</strong>
            <del>€29,99</del>
          </dd>
        </dl>
        <p class="tag">1 Jaar + 2 Maanden Gratis</p>
        <a href="https://www.iobit.com/buy.php?product=nl-iu1114m3pc1899&ref=nl_iu1114m3pc1899purchase1908<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=nl_purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase1908-nl')" class="buybtn"><i></i><span>BESTEL NU</span></a>
      </div>
      <div class="payment">
        <img src="<?php echo getStaticUrl('images/payment.png')?>" alt="" />
      </div>
    </div>
  </div>
  <!-- banner end -->
  <!-- intro start -->
  <div class="intro">
    <div class="wrapper">
      <h2>IObit Uninstaller PRO verwijdert elke software grondig!</h2>
      <h4>Verwijder programma’s zelfs als ze niet in Windows of met andere software te verwijderen zijn en laat geen enkel restant achter, <br> zodat uw computer schoon en snel blijft.</h4>
      <dl class="list01 ">
        <dd>
          <strong>Verwijder hardnekkige, <br> gebundelde en Windows Apps</strong>
          <p>Verwijder alle programma’s grondig, zelfs als ze niet op <br> reguliere wijze te verwijderen zijn, zoals hardnekkige <br> software, bundleware en Windows Apps.</p>
        </dd>
        <dt><img src="<?php echo getStaticUrl('images/list02.png')?>" alt=""></dt>
      </dl>
      <dl class="list02 ">
        
        <dd>
          <strong>Detecteer Systeemwijzigingen </strong>
          <p>Houd alle systeemwijzigingen bij die programma’s <br> aanbrengen tijdens de installatie, zodat bij deïnstallatie <br> het systeem netjes naar de oorspronkelijk staat kan <br> worden hersteld.</p>
        </dd>
        <dt><img src="<?php echo getStaticUrl('images/list04.png')?>" alt=""></dt>
      </dl>
       <dl class="list03">
        <dt><img src="<?php echo getStaticUrl('images/list03.png')?>" alt=""></dt>
        <dd>
          <strong>Houd restanten weg en software up-to-date </strong>
          <p>Met Software Health zorgt u in één klik dat alle <br> software in goede conditie is. Verouderde software <br> wordt bijgewerkt en software restanten en schadelijk <br> plug-ins worden verwijderd.</p>
        </dd>
      </dl>
      <dl class="list04">
        <dt><img src="<?php echo getStaticUrl('images/list01.png')?>" alt=""></dt>
        <dd>
          <strong>De Beste Surfervaring <sup>NIEUW</sup></strong>
          <p>Blokkeer storende browsermeldingen en verwijder<br> alle overbodige browserplug-ins in één klik.<br> Nu ook voor Windows Apps!</p>
        </dd>
        
      </dl>
    </div>
  </div>
  <!-- intro end -->

  <!-- review start -->
  <div class="review">
    <div class="wrapper">
      <h2>Wat Andere Gebruikers en Media Vinden</h2>
      <dl class="makeuseof">
        <dt><img src="<?php echo getStaticUrl('images/makeuseof.png')?>" alt=""></dt>
        <dd>
          "Dit gemakkelijk te gebruiken deïnstallatieprogramma, configureert en optimaliseert uw PC. Dit programma is makkelijk en gratis te downloaden. IObit Uninstaller kan worden beschouwd als het beste in zijn soort en maakt het ook mogelijk om meerdere programma’s tegelijk te verwijderen. Na de standaard verwijdering kunt u nog een krachtige scan uitvoeren om alle overgebleven resten op te sporen en te verwijderen." - MakeUseOf
        </dd>
      </dl>
      <div class="usreview">
        <a href="javascript:void(0);" class="dg-prev"></a>
        <a href="javascript:void(0);" class="dg-next"></a>
        <div class="continer">
          <div class="roll">
            <dl>
              <dd>"IObit Uninstaller wordt beter met elke update. Ik gebruik het programma al meer dan 3 jaar. Het programma laadt snel en is simpel in het gebruik. De functies die ik het meeste gebruik zijn Gezamenlijk Verwijderen, Krachtige Scan, Bestand Versnipperaar en laatst geïnstalleerde programma’s zodat ik snel kan zien welke van die programma’s ik prettig vind en welke niet. Je kunt ook gemakkelijk de opstartprogramma’s beheren waardoor de pc sneller opstart." - Lovro Žužić</dd>
              <dt><img src="<?php echo getStaticUrl('images/lovro-zuzic.png')?>" alt=""></dt>
            </dl>
            <dl>
              <dd>"Uninstaller PRO is een van de producten van de productlijn van IObit waarmee ik investeer in mijn PC zoals een kok investeert in zijn messen. Uninstaller is een geweldig programma om resten van verwijderde programma’s op te sporen en te verwijderen. Je merkt direct dat er meer vrije ruimte is op de computer. De standaard Windows Uninstaller werkt wel, maar verwijdert niet alle resten. IObit Unistaller PRO heeft 35 bestanden grondig van mijn PC verwijderd waardoor er direct meer ruimte vrijkwam op mijn harde schijf. Ik heb de licentie aangeschaft voor 3 PC’s zodat ik dit programma bij mijn hele familie kan installeren. Iedereen is erg te spreken over dit programma!" - Joseph Yu</dd>
              <dt><img src="<?php echo getStaticUrl('images/joseph-yu.png')?>" alt=""></dt>
            </dl>
            <dl>
              <dd>"In tegenstelling tot de basis uninstaller van Windows, verwijdert IObit Uninstaller ook resten van programma’s die uw PC vertragen. Ik gebruik dit programma al meerdere jaren en ik blijf dit programma aan iedereen aanbevelen!" - Sergey Erlich</dd>
              <dt><img src="<?php echo getStaticUrl('images/sergey-erlich.png')?>" alt=""></dt>
            </dl>
            <dl>
              <dd>"IObit Uninstaller is een van de beste deïnstallatie programma’s op de markt. Het is makkelijk in de omgang, het verwijdert bestanden en programma’s enorm snel en grondig. Vanaf de 5 de versie van IObit Uninstaller kun je echt zien dat het programma volledig is afgestemd op Windows 10. Je kunt gemakkelijk en snel allerlei vervelende plug-ins en vooraf geïnstalleerde Windows apps verwijderen. Je kunt ook makkelijk dubbel geïnstalleerde of ongebruikte programma’s vinden en verwijderen. Bedankt dat jullie de computers van mijn hele familie altijd goed onderhouden!" - Áda Görtler</dd>
              <dt><img src="<?php echo getStaticUrl('images/ada-gortler.png')?>" alt=""></dt>
            </dl>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- review end -->



  <!-- comparison start -->
  <div class="comparison wrapper" id="compare">
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
      <thead>
        <tr>
          <th class="text" colspan="2">Waarom IObit Uninstaller PRO?</th>
          <th class="space"></th>
          <th class="itemb"><span>IObit Uninstaller <b>FREE</b></span></th>
          <th class="space"></th>
          <th class="itema">
            <span>IObit Uninstaller <b>PRO</b></span>
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_01.png')?>" alt="" /></td>
          <td class="virtue">Deïnstalleer programma's via een snelkoppeling, openstaand venster of systeemvakicoon</td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_02.png')?>" alt="" /></td>
          <td class="virtue">Verwijdert Plug-ins & extensies in Edge, Chrome, IE, Firefox, etc </td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_03.png')?>" alt="" /></td>
          <td class="virtue">Kan hardnekkige programma's verwijderen <span>Verbeterd</span></td>
          <td class="space"></td>
          <td class="itemb">-</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt="" /></td>
          <td class="virtue">Detecteert en verwijdert programma's die meekomen met freeware <!-- <span>Verbeterd</span> --></td>
          <td class="space"></td>
          <td class="itemb">-</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_12.png')?>" alt="" /></td>
          <td class="virtue">Detecteert en herstelt systeemwijzigingen die programma’s aanbrengen <!-- <span class="nuo">Nieuw</span> --></td>
          <td class="space"></td>
          <td class="itemb">-</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt="" /></td>
          <td class="virtue">Verwijdert automatisch restbestanden die andere uninstall programma’s niet verwijderd krijgen <span>Verbeterd</span></td>
          <td class="space"></td>
          <td class="itemb">-</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_06.png')?>" alt="" /></td>
          <td class="virtue">Houdt alle software op uw pc in goede conditie <span class="nuo">Nieuw</span></td>
          <td class="space"></td>
          <td class="itemb">-</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_07.png')?>" alt="" /></td>
          <td class="virtue">Indentificeert en verwijdert adverterende plug-ins <span>Verbeterd</span></td>
          <td class="space"></td>
          <td class="itemb">-</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_05.png')?>" alt="" /></td>
          <td class="virtue">Update automatisch alle belangrijke software in 1 klik<span>Verbeterd</span></td>
          <td class="space"></td>
          <td class="itemb">-</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_09.png')?>" alt="" /></td>
          <td class="virtue">Automatische update naar de nieuwste versie</td>
          <td class="space"></td>
          <td class="itemb">-</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_10.png')?>" alt="" /></td>
          <td class="virtue">Gratis 24/7 technische ondersteuning</td>
          <td class="space"></td>
          <td class="itemb">-</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
      </tbody>
      <tbody class="change hide">
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_01.png')?>" alt="" /></td>
          <td class="virtue">Deïnstalleer programma's via een snelkoppeling, openstaand venster of systeemvakicoon</td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_02.png')?>" alt="" /></td>
          <td class="virtue">Verwijdert Plug-ins & extensies in Edge, Chrome, IE, Firefox, etc </td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_11.png')?>" alt="" /></td>
          <td class="virtue">Update software automatisch zonder websites te bezoeken <span>Verbeterd</span></td>
          <td class="space"></td>
          <td class="itemb">-</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
         <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_05.png')?>" alt="" /></td>
          <td class="virtue">Update alle belangrijke software in 1 klik</td>
          <td class="space"></td>
          <td class="itemb">-</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_03.png')?>" alt="" /></td>
          <td class="virtue">Kan hardnekkige programma's verwijderen <span class="three">Verbeterd</span></td>
          <td class="space"></td>
          <td class="itemb">-</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt="" /></td>
          <td class="virtue">Detecteert en verwijdert programma's die meekomen met freeware</td>
          <td class="space"></td>
          <td class="itemb">-</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt="" /></td>
          <td class="virtue">Verwijdert automatisch restbestanden die andere uninstall programma’s niet verwijderd krijgen <span>Verbeterd</span></td>
          <td class="space"></td>
          <td class="itemb">-</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_06.png')?>" alt="" /></td>
          <td class="virtue">Verwijdert Kwaadaardige plug-ins voor een veilige browser <span>Verbeterd</span></td>
          <td class="space"></td>
          <td class="itemb">-</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_07.png')?>" alt="" /></td>
          <td class="virtue">Indentificeert en verwijdert adverterende plug-ins <span>Verbeterd</span></td>
          <td class="space"></td>
          <td class="itemb">-</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
       
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_09.png')?>" alt="" /></td>
          <td class="virtue">Automatische update naar de nieuwste versie</td>
          <td class="space"></td>
          <td class="itemb">-</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_10.png')?>" alt="" /></td>
          <td class="virtue">Gratis 24/7 technische ondersteuning</td>
          <td class="space"></td>
          <td class="itemb">-</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
      </tbody>
    </table>
  </div>

  <!-- comparison end -->
  <div class="banner bottom-banner">
    <div class="wrapper">
      <div class="box">
        <h3>Tijdelijke voordeelbundel!</h3>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/iu-gift-box.png')?>" alt="" width="199" /></dt>
          <dd>
            <strong>€<b>25</b></strong>
            <del>€89,93</del>
          </dd>
        </dl>
        <p class="tag">1-jarig abonnement</p>
        <a href="https://www.iobit.com/buy.php?product=nl-iu111y3pcpfsd2500&ref=nl_iu111y3pcpfsd2500purchase1908<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=nl_purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase1908-nl')" class="buybtn"><i></i><span>BESTEL NU</span></a>
      </div>
      <div class="box three-pc">
        <h3>Met Exclusief Welkomstcadeau!</h3>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="" width="168" /></dt>
          <dd>
            <strong>€<b>18</b>,99</strong>
            <del>€29,99</del>
          </dd>
        </dl>
        <p class="tag">1 Jaar + 2 Maanden Gratis</p>
        <a href="https://www.iobit.com/buy.php?product=nl-iu1114m3pc1899&ref=nl_iu1114m3pc1899purchase1908<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=nl_purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase1908-nl')" class="buybtn"><i></i><span>BESTEL NU</span></a>
      </div>
    </div>
  </div>
  <!-- footer start -->
  <div class="footer">
    <div class="wrapper">
      <!-- service start -->
      <div class="service clearfix">
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt="" /></dt>
          <dd><h4>Garantie</h4></dd>
          <dd>60 Dagen niet-goed-geld-teruggarantie</dd>
        </dl>
        <dl class="center">
          <dt><img src="<?php echo getStaticUrl('images/godaddy-secure.png')?>" alt="" /></dt>
          <dd><h4>Website beveiliging</h4></dd>
          <dd>Alle websites van IObit zijn beveiligd</dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/24hours.png')?>" alt="" /></dt>
          <dd><h4>24/7 gratis klantenservice</h4></dd>
          <dd>IObit biedt gratis 24/7 <span>klantenservice voor PRO gebruikers</span></dd>
        </dl>
      </div>
      <!-- service end -->

      <!-- annotation start -->
      <dl class="annotation">
        <dt>Let op:</dt>
        <dd>*Promoties kunnen door IObit op elk moment en zonder voorafgaande kennisgeving veranderd worden naar eigen goeddunken</dd>
        <dd>* De gegevens kunnen variëren op basis van verschillende systemen en computers.</dd>
      </dl>
      <!-- annotation end -->

      <div class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Alle rechten voorbehouden</div>
    </div>
  </div>
  <!-- footer end -->
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>