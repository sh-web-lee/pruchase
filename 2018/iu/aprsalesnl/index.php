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
<html lang="nl">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>75% Korting op IObit Uninstaller 8 PRO, ontvangt u nu Protected Folder gratis!</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Lato:400,700,700i'>
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
      <div class="title clearfix">
        <a class="logo fl" href="https://www.iobit.com" target="_blank">
          <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit" />
        </a>
        <h1 class="fr">LAST-MINUTE AANBIEDING</h1>
      </div>
      <p><b>75%</b> exclusieve korting op IObit Uninstaller PRO en ontvang Protected Folder <b>GRATIS</b></p>
      <div class="offer clearfix">
        <div class="left fl">
          <img src="<?php echo getStaticUrl('images/iupfbox-big.png')?>" alt="" />
          <h3>“Bent u opzoek naar een programma dat alle ongewilde applicaties verwijdert? Ga dan voor IObit Uninstaller.”</h3>
          <p>
            Dit programma maakt het een koud kunstje om ongewenste apps, programma’s, plug-ins of restbestanden te verwijderen. &nbsp;&nbsp;&nbsp;&nbsp;---PC.MAGAZINE
          </p>
        </div>
        <div class="right fr">
          <h2>Meer functies voor minder geld!</h2>
          <h3 class="pc">1-jarig abonnement voor 3 computers</h3>
          <div class="price">
            <h4>slechts <strong>17<small>99</small></strong></h4>
            <p>van <del>69,94</del></p>
            <a class="buybtn" 
               href="https://www.iobit.com/buy.php?product=nl-iu81y3pcpf1799&ref=nl_iu83pcpfpurchase1804<?php echo $refStr;?>&aff=&refs=nl_purchase_iu"
               onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase1804-nl')">
              Koop Nu – 75% Korting
            </a>
            <p class="number">Al door <span class="buyNum"><?php echo $buyNum;?></span> keer gekocht</p>
          </div>
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
    <div class="feature clearfix">
      <img class="fl" src="<?php echo getStaticUrl('images/screen.png')?>" alt="" />
      <ul class="fl">
        <li>Ongewenste programma’s en Windows Apps kunnen gemakkelijk en snel verwijdert worden.</li>
        <li class="two blue">
          Met slechts één klik belangrijke software updaten, inclusief <b>WinRAR*, dat een beveiligingsbug bevat die uw computer langdurig in gevaar kan brengen.</b>
          <p>*Direct updaten zodra de nieuwe officiële versie beschikbaar is.</p>
        </li>
        <li class="three">Met de verbeterde scantechnologie worden restbestanden automatisch opgespoort en verwijdert.</li>
        <li class="four blue">U krijgt automatisch een melding wanneer gebundelde software, adware of plug-ins geïnstalleerd worden.</li>
      </ul>
    </div>
    <div class="gift clearfix">
      <img class="fl" src="<?php echo getStaticUrl('images/pfbox.png')?>" alt="" />
      <div class="right fl">
        <h2>ONTVANG DE PROTECTED FOLDER PRO VERSIE <b>GRATIS</b></h2>
        <ul>
          <li><i class="all-icons">√</i> Beveiligt belangrijke mappen en bestanden tegen diefstal.</li>
          <li><i class="all-icons">√</i> Scherm uw persoongegevens af met een wachtwoord.</li>
        </ul>
      </div>
    </div>
  </div>
  <!-- intro end -->

  <!-- donation start -->
  <div class="donation " id="test">
    <div class="wrapper clearfix">
      <img class="iupfbox fl" src="<?php echo getStaticUrl('images/iupfbox.png')?>" alt="" />
      <div class="price fr">
        <p><strong>17<small>99</small></strong> &nbsp;&nbsp;van <del>69,94</del></p>
        <a class="buybtn" 
           href="https://www.iobit.com/buy.php?product=nl-iu81y3pcpf1799&ref=nl_iu83pcpfpurchase1804<?php echo $refStr;?>&aff=&refs=nl_purchase_iu"
           onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase1804-nl')">
          Koop Nu
        </a>
      </div>
    </div>
  </div>
  <!-- donation end -->

  <!-- awards start -->
  <div class="awards">
    <div class="wrapper">
      <h2>Bekroond en vertrouwd door de volgende media</h2>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt="" />
    </div>
  </div>
  <!-- awards end -->

  <!-- review start -->
  <div class="review wrapper">
    <div class="content">
      <dl class="active">
        <dt>
        <h3>Klantbeoordeling</h3></dt>
        <dd>
          <h4>
            "Uninstaller is een geweldig programma dat alle resten die zich in het systeem nestelen, gemakkelijk verwijdert van de harde schijf en ruimte in het register vrijmaakt."
          </h4>
        </dd>
        <dd>
          " Uninstaller is een geweldig programma om resten van verwijderde programma’s op te sporen en te verwijderen. De standaard Windows Uninstaller werkt wel, maar reinigt niet alle restbestanden. IObit Uninstaller heeft 35 bestanden grondig van mijn PC verwijderd. Ik heb de licentie voor 3 PC’s aangeschaft, zodat ik dit programma bij mijn hele familie op de computer kan installeren.” 
        </dd>
      </dl>
      <dl>
        <dt>
        <h3>Klantbeoordeling</h3></dt>
        <dd>
          <h4>
            "IObit Uninstaller is waarschijnlijk de beste software om onnodige en ongebruikte programma’s te verwijderen.” 
          </h4>
        </dd>
        <dd>
          "In tegenstelling tot de basis uninstaller van Windows, verwijdert IObit Uninstaller ook resten van programma’s die uw PC vertragen. Ik gebruik dit programma al meerdere jaren en ik blijf het iedereen aanraden voor een snelle en schone PC."
        </dd>
      </dl>
      <dl>
        <dt>
        <h3>Klantbeoordeling</h3></dt>
        <dd>
          <h4>"IObit Uninstaller is een van de beste deïnstallatie programma’s."</h4>
        </dd>
        <dd>
          " IObit Uninstaller verwijdert bestanden en programma’s enorm snel en grondig. Dit programma is volledig afgestemd op Windows 10. Je kunt gemakkelijk allerlei vervelende plug-ins en vooraf geïnstalleerde Windows apps verwijderen. U krijgt ook een melding wanneer dubbel geïnstalleerde of ongebruikte programma’s worden gevonden. Bedankt voor deze geweldige software!”
        </dd>
      </dl>
      <dl>
        <dt>
        <h3>Klantbeoordeling</h3></dt>
        <dd>
          <h4>
            "Ik gebruik IObit Uninstaller al meer dan 3 jaar. Dit programma blijft zich verbeteren!”
          </h4>
        </dd>
        <dd>
          "IObit Uninstaller wordt elke update verbeterd. Het programma laadt snel en voor iedereen toegankelijk. Ik gebruik deze software voor het verwijderen van bundleware, krachtig scannen op restbestanden, bestanden te versnipperen en om software bij te werken. Met de start-up manager, kun je de opstartsnelheid maximaal versnellen.”
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
  <div class="comparison wrapper" id="compare">
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
      <thead>
        <tr>
          <th class="text" colspan="2">Welke voordelen biedt de PRO editie?</th>
          <th class="itemb">IObit Uninstaller 8 <b>FREE</b></th>
          <th class="itema">
            IObit Uninstaller 8 <b>PRO</b>
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_01.png')?>" alt="" /></td>
          <td class="virtue">Deïnstalleer programma's via een snelkoppeling, openstaand venster of systeemvakicoon <span class="nuo">Nieuw</span></td>
          <td class="itemb"><i class="all-icons">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_02.png')?>" alt="" /></td>
          <td class="virtue">Verwijdert Plug-ins & extensies in Edge, Chrome, IE, Firefox, etc </td>
          <td class="itemb"><i class="all-icons">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_03.png')?>" alt="" /></td>
          <td class="virtue">Kan hardnekkige programma's verwijderen <span class="three">Verbeterd</span></td>
          <td class="itemb"><i class="all-icons circle">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt="" /></td>
          <td class="virtue">Detecteert en verwijdert programma's die meekomen met freeware <span class="nuo">Nieuw</span></td>
          <td class="itemb"><i class="all-icons circle">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt="" /></td>
          <td class="virtue">Verwijdert automatisch restbestanden die andere uninstall programma’s niet verwijderd krijgen <span>Verbeterd</span></td>
          <td class="itemb"><i class="all-icons circle">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_06.png')?>" alt="" /></td>
          <td class="virtue">Verwijdert Kwaadaardige plug-ins voor een veilige browser <span class="three two">Verbeterd</span></td>
          <td class="itemb"><i class="all-icons circle">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_07.png')?>" alt="" /></td>
          <td class="virtue">Indentificeert en verwijdert adverterende plug-ins <span class="three two">Verbeterd</span></td>
          <td class="itemb"><i class="all-icons circle">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_05.png')?>" alt="" /></td>
          <td class="virtue">Update alle belangrijke software in 1 klik <span class="three five">Verbeterd</span></td>
          <td class="itemb"><i class="all-icons circle">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_09.png')?>" alt="" /></td>
          <td class="virtue">Automatische update naar de nieuwste versie</td>
          <td class="itemb"><i class="all-icons circle">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_10.png')?>" alt="" /></td>
          <td class="virtue">Gratis 24/7 technische ondersteuning</td>
          <td class="itemb"><i class="all-icons circle">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
      </tbody>
      <tfoot>
        <tr>
          <th colspan="2"></th>
          <th class="itemb"></th>
          <th class="itema">
            <a class="buybtn" 
               href="https://www.iobit.com/buy.php?product=nl-iu81y3pcpf1799&ref=nl_iu83pcpfpurchase1804<?php echo $refStr;?>&aff=&refs=nl_purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase1804-nl')">
              Koop Nu
            </a>
          </th>
        </tr>
      </tfoot>
    </table>
  </div>
  <!-- comparison end -->

  <!-- footer start -->
  <div class="footer">
    <div class="wrapper">
      <!-- service start -->
      <div class="service clearfix">
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt="" /></dt>
          <dd><h4>Garantie</h4></dd>
          <dd>60 Dagen niet goed geld terug garantie</dd>
        </dl>
        <dl>
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