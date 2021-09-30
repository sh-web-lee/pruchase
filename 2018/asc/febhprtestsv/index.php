<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';
  include $pRootUrl.'callback.php';
  $packsNum = ceil(microtime_float()*2000/20000);
  $packsCount=98;
  $packsNum = $packsCount-($packsNum%$packsCount);
  if ($_GET['action'] == 'getPacks'){
      echo $packsNum;
      exit;
  }
if (in_array($_GET['st'], array('asc_c1new', 'asc_c1new1', 'asc_c6', 'asc_c2', 'asc_c3', 'asc_feature', 'asc_c7', 'asc_t2', 'asc_t3',
    'asc_t4', 'asc_t5', 'asc_t6', 'asc_t7', 'asc_t8', 'asc_t9', 'asc_t10', 'asc_t11', 'asc_s1', 'asc_s2', 'asc_s3', 'asc_s4',
    'asc_s5', 'asc_s6', 'asc_s7', 'asc_s8', 'asc_ac2', 'asc_ac3', 'asc_report', 'asc_promote', 'asc_autocare', 'asc_buypro',
    'asc_pro1', 'asc_pro2', 'asc_pro3', 'asc_pro4', 'asc_pro5', 'asc_pro6','asc_freetip','asc_protip1','asc_protip2','asc_protip3','asc_protip4','asc_protip5','asc_protip6',
    'asc_c8','23','asc_s11','asc_s12','asc_qs3','asc_qs4','asc_qs5','asc_qs6','asc_qs7','asc_qs8',
    'asc_qs9','asc_qs10','asc_qs11','asc_pm1','asc_pm2','asc_pm3','asc_c9','asc_pro7','asc_pro8','asc_pro9','asc_pro10'))) {
  $refStr = '-' . $_GET['st'];
} else {
  $refStr = '';
}
if(in_array($_GET['pop'],array('x_asc','xr_sdpasc','xr_dbpasc'))){
  $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="sv">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Spara upp till 84% på Advanced SystemCare och du får extra skydd helt - IObit</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Lato:400,700'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
<script>
  function PrefixInteger(num, length) {
   return (Array(length).join('0') + num).slice(-length);
  }
  function getPacksNum(){
    $.ajax({
      type: "GET",
      url: "<?php echo $pRootUrl;?>callback.php",
      data: "action=getPacksNum&packsCount=<?php echo $packsCount;?>&r="+Math.random(),
      success: function(packs){
        packs=parseInt(packs);
        if (packs < 10) {
          $('.packsNum').html(PrefixInteger(packs, 2));
        } else {
          $('.packsNum').html(packs);
        }
        setTimeout('getPacksNum()', 10000);
      }
    });
  }
  setTimeout('getPacksNum()', 10000);
</script>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

  <!-- banner start -->
  <div class="banner">
    <div class="top">
      <div class="wrapper">
        <a class="logo" href="http://www.iobit.com" target="_blank">
          <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit" />
        </a>
        <!-- time -->
        <ul id="countdown" class="countdown">
          <li>00</li>
          <li>00</li>
          <li>00</li>
          <li class="last">000</li>
        </ul>
      </div>
    </div>
    <div class="panel wrapper">
      <h1>Tidsbegränsat Erbjudande</h1>
      <p>Köp nu och du kan dra nytta av <b>84%</b> rabatt på ASC PRO ( 3 PC, 1 År) och gåvor paket!</p>
      <img src="<?php echo getStaticUrl('images/shotbox.png')?>" alt="" />
      <div class="price">
        <p><img src="<?php echo getStaticUrl('images/price.png')?>" alt="" /> <del>1,956.00 SEK</del></p>
        <a class="buybtn" href="http://www.iobit.com/buy.php?product=sv-asc113pciusdpf319&ref=sv_asc113pciusdpfpurchase1802h<?php echo $refStr;?>&refs=sv_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1802h-sv')">
          KÖP NU
        </a>
        <p><i class="all-icons"></i> <b>3,146,917</b> människor har aktiverat</p>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- container start -->
  <!-- intro start -->
  <div class="intro wrapper">
    <h2>Optimera din dators prestanda med nya ASC 11!</h2>
    <div class="clearfix">
      <img class="screen fl" src="<?php echo getStaticUrl('images/screen.png')?>" alt="" />
      <div class="right fl">
        <h3>Varför välja Advanced SystemCare 11?</h3>
        <ul>
          <li>
            <img src="<?php echo getStaticUrl('images/intro-icons01.png')?>" alt="" /> Fördubblar datorns hastighet!*
          </li>
          <li>
            <img src="<?php echo getStaticUrl('images/intro-icons02.png')?>" alt="" /> Skannar och fixar olika datorproblem!
          </li>
          <li>
            <img src="<?php echo getStaticUrl('images/intro-icons03.png')?>" alt="" /> Ökar din Internethastighet upp till 300%!*
          </li>
          <li>
            <img src="<?php echo getStaticUrl('images/intro-icons04.png')?>" alt="" /> Ger en säkrare upplevelse på nätet!
          </li>
          <li><a class="versionBtn" href="javascript: void(0)">Läs mer om PRO-versionen>></a></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- intro end -->

  <!-- donation start -->
  <div class="donation">
    <div class="wrapper">
      <div class="gift-title">
        <h2>Gratis presentpaket är endast för Tidsbegränsat Erbjudande - Endast 293 paket tillgängliga!</h2>
        <strong class="packsNum">98</strong>
      </div>
      <div class="clearfix">
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/gift-sd.png')?>" alt="" /></dt>
          <dd>
            <h3>Smart Defrag 5 PRO</h3>
            <strong>0 SEK </strong> <del>399 SEK</del>
            <p>Pålitlig och intelligent defragmenterare <span>med över 7,000,000 användare</span></p>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/gift-iu.png')?>" alt="" /></dt>
          <dd>
            <h3>IObit Uninstaller PRO</h3>
            <strong>0 SEK </strong> <del>399 SEK</del>
            <p>Fullständig borttagning av envisa program <span>och bundleware utan rester</span></p>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/gift-pf.png')?>" alt="" /></dt>
          <dd>
            <h3>Protected Folder</h3>
            <strong>0 SEK </strong> <del>399 SEK</del>
            <p>Lättanvänt verktyg som skapar <span>lösenordsskyddade mappar</span></p>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- donation end -->

  <!-- centbuy start -->
  <div class="centbuy">
    <div class="wrapper">
      <h2>Tidsbegränsat Erbjudande</h2>
      <p>Köp nu och du kan dra nytta av <b>84%</b> rabatt på ASC PRO ( 3 PC, 1 År) och gåvor paket!</p>
      <div class="price">
        <p><img src="<?php echo getStaticUrl('images/price.png')?>" alt="" /> <del>1,956.00 SEK</del></p>
        <a class="buybtn" href="http://www.iobit.com/buy.php?product=sv-asc113pciusdpf319&ref=sv_asc113pciusdpfpurchase1802h<?php echo $refStr;?>&refs=sv_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1802h-sv')">
          KÖP NU
        </a>
        <p><i class="all-icons"></i> <b>3,146,917</b> människor har aktiverat</p>
      </div>
    </div>
  </div>
  <!-- centbuy end -->

  <!-- awards start -->
  <div class="awards wrapper">
    <h2>Rekommenderas och är belönade av dessa medier</h2>
    <img src="<?php echo getStaticUrl('images/awards.png')?>" alt="" />
  </div>
  <!-- awards end -->

  <!-- review start -->
  <div class="review">
    <div class="wrapper">
      <dl class="user clearfix">
        <dt><img src="<?php echo getStaticUrl('images/cnet.png')?>" alt="" /></dt>
        <dd>
          <span>I media</span>
          <h2>"Advanced Systemcare syftar till att råda bot på allt som plågar din dator."</h2>
          <p>
            "Det finns inget värre än en dator som kör fast så mycket att det hindrar din förmåga att arbeta eller spela spel. Advanced Systemcare syftar till att råda bot på allt som plågar din dator, inte bara städa upp skräpfiler, malware och ogiltiga registerposter utan också ge din dator ett rejält uppsving för en optimal datorupplevelse."
            <b class="fr">-Cnet</b>
          </p>
        </dd>
      </dl>
      <div class="usereview" id="user">
        <div class="content">
          <h2>Användares omdömen</h2>
          <dl>
            <dt><h4>"Advanced SystemCare Pro är det bästa program jag någonsin testat under åren."</h4></dt>
            <dd>
              "Som de flesta människor är jag ingen expert på datorer. Jag vet inte hur många program jag har testat genom åren. Alla påstår sig vara det bästa men inget kommer i närheten av skyddet jag har nu med Advanced Systemcare Pro. Sedan jag fick detta fantastiska program har jag inte behövt ringa för teknisk support en enda gång. Det har mer än överträffat mina förväntningar, är alltid uppdaterat, och grafiken är väldigt cool också! Stort tack till er alla för att ni gör mitt liv mycket lättare."
            </dd>
          </dl>
          <dl class="active">
            <dt>
              <h4>"Jag rekommenderar starkt att du köper det här programmet. Det är inte dyrt och vad det kommer att göra för din dator kommer att vara helt fantastiskt."</h4>
            </dt>
            <dd>
              "Detta program är det bästa som jag någonsin har provat. Min dator går så mycket bättre och snabbare nu när jag har hämtat ASC. Det har städat upp onödiga och dubbla filer, tomma mappar och jag har använt den för att rensa filer. Det har rengjort och defragmenterat registret och alla filer på datorn. Jag rekommenderar starkt att du köper det här programmet. Det är inte dyrt och vad den kommer att göra för din dator kommer att vara helt fantastiskt. Du kommer att älska det, jag lovar."
            </dd>
          </dl>
          <dl>
            <dt><h4>"Mitt val är alltjämt överväldigande Advanced SystemCare Pro."</h4></dt>
            <dd>
              "Som datorreperatör finner jag att genom att ladda ner och skanna med ASC Free kan man lösa de vanligaste problemen. När jag är klar med en reperation brukar jag råda mina kunder till att köpa PRO-paketet. Vem behöver en tekniker när du har kraften i Advanced SystemCare PRO-systemet som jobbar dygnet runt? Det här är den bästa produkten en hemanvändare kan köpa. Tack för att ni gör mitt jobb lättare."
            </dd>
          </dl>
          <dl>
            <dt><h4>"Det är inte bara produkten som är fantastisk, supporten är minst lika bra"</h4></dt>
            <dd>
              "Jag, precis som många andra, började använda gratisversionen och köpte så småningom den fullständiga versionen. Den har arbetat för att hålla datorn ren och buggfri i ett år och den har ännu inte svikit mig. Jag kontaktade Advanced SystemCare nyligen och de svarade inom en dag eller två med allt jag behövde veta. I mina ögon är support ett enormt beslut i att stanna med en produkt och ASC segrar i både produkt och support."
            </dd>
          </dl>
        </div>
        <ul class="users clearfix">
          <li>
            <img src="<?php echo getStaticUrl('images/hank-ewert.jpg')?>" alt="" />
            <p>Hank Ewert</p>
          </li>
          <li  class="active">
            <img src="<?php echo getStaticUrl('images/loretta-harnarine.jpg')?>" alt="" />
            <p>Loretta <span>Harnarine</span></p>
          </li>
          <li>
            <img src="<?php echo getStaticUrl('images/charles-r-widick.jpg')?>" alt="" />
            <p>Charles R. Widick</p>
          </li>
          <li>
            <img src="<?php echo getStaticUrl('images/bruce-ramsay.jpg')?>" alt="" />
            <p>Bruce Ramsay</p>
          </li>
        </ul>  
      </div>
    </div>
  </div>
  
  <!-- review end -->

  <div class="wrapper">
    <!-- comparison start -->
    <div class="comparison" id="compare">
      <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <thead>
          <tr>
            <th class="text" colspan="2">Vilka fördelar har du som PRO användare?</th>
            <th class="space"></th>
            <th class="itemb">Advanced SystemCare <b>FREE</b></th>
            <th class="space"></th>
            <th class="itema">
              Advanced SystemCare PRO
              <p>3 PC, 1 År</p>
              <p><strong>319.00 SEK</strong> <del>1,956.00 SEK</del></p>
              <a class="buybtn" href="http://www.iobit.com/buy.php?product=sv-asc113pciusdpf319&ref=sv_asc113pciusdpfpurchase1802h<?php echo $refStr;?>&refs=sv_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1802h-sv')">
                KÖP NU
              </a>
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_01.png')?>" alt="" /></td>
            <td class="virtue">Grundläggande Systemrengöring, Korrigering och <span>Optimering</span></td>
            <td class="space"></td>
            <td class="itemb gray"><i class="all-icons">√</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_02.png')?>" alt="" /></td>
            <td class="virtue">Ett Klick för att Hantera Systemresurser för <span>Topprestanda</span></td>
            <td class="space"></td>
            <td class="itemb gray"><i class="all-icons">√</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_03.png')?>" alt="" /></td>
            <td class="virtue">Avlägsnar Kapare från Chrome/Firefox/IE/Edge</td>
            <td class="space"></td>
            <td class="itemb gray"><i class="all-icons">√</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt="" /></td>
            <td class="virtue">Förhindrar Obehörig Åtkomst med FaceID</td>
            <td class="space"></td>
            <td class="itemb gray"><i class="all-icons">√</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_05.png')?>" alt="" /></td>
            <td class="virtue">Upp till 300% Internethastighet med Internet Booster</td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons circle">●</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_06.png')?>" alt="" /></td>
            <td class="virtue">Upp till 200% Snabbare PC-Uppstart med <span>Startoptimering</span></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons circle">●</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_07.png')?>" alt="" /></td>
            <td class="virtue">Djup Registerrengöring och Defragmentering för Färre <span>Krascher</span></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons circle">●</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt="" /></td>
            <td class="virtue">Diskoptimering för Snabbare Åtkomst till Hårddisk</td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons circle">●</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_09.png')?>" alt="" /></td>
            <td class="virtue">Realtidsskydd mot Säkerhetshot</td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons circle">●</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_10.png')?>" alt="" /></td>
            <td class="virtue">Fullständig Identifiering mot Djupa Infektioner</td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons circle">●</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_11.png')?>" alt="" /></td>
            <td class="virtue">Automatisk Borttagning av Annonser och Spår för Säker <span>Surfing</span></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons circle">●</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_12.png')?>" alt="" /></td>
            <td class="virtue">Automatisk RAM-Rengöring för Smidigare Systemdrift</td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons circle">●</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_13.png')?>" alt="" /></td>
            <td class="virtue">Automatisk Uppdatering till Senaste Versionen</td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons circle">●</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_14.png')?>" alt="" /></td>
            <td class="virtue">Gratis Teknisk Support vid Behov, Dygnet Runt</td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons circle">●</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <th class="text" colspan="2"></th>
            <th class="space"></th>
            <th class="itemb">Advanced SystemCare <b>FREE</b></th>
            <th class="space"></th>
            <th class="itema">
              Advanced SystemCare PRO
              <p>3 PC, 1 År</p>
              <p><strong>319.00 SEK</strong> <del>1,956.00 SEK</del></p>
              <a class="buybtn" href="http://www.iobit.com/buy.php?product=sv-asc113pciusdpf319&ref=sv_asc113pciusdpfpurchase1802h<?php echo $refStr;?>&refs=sv_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1802h-sv')">
                KÖP NU
              </a>
            </th>
          </tr>
        </tfoot>
      </table>
    </div>
    <!-- comparison end -->

    <!-- server start -->
    <div class="service clearfix">
      <dl>
        <dt>Godkända Betalningsformer </dt>
        <dd><img src="<?php echo getStaticUrl('images/payments.png')?>" alt="" /></dd>
      </dl>
      <dl>
        <dt>Pengarna Tillbaka Garanti</dt>
        <dd><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt="" /></dd>
      </dl>
      <dl class="service">
        <dt>Tillförlitliga Tjänster</dt>
        <dd>
          <p>Gratis 24/7 Teknisk Support vid Behov</p>
          <p>Live Chattjänst</p>
        </dd>
      </dl>
    </div>
    <!-- server end -->

    <!-- annotation start -->
    <dl class="annotation">
      <dt>Notera:</dt>
      <dd>*.Uppgifter kan variera beroende på olika system eller datorer.</dd>
      <dd>*.Reklamkampanjer kan emellanåt ändras utan förvarning, efter vårt eget godtycke.</dd>
    </dl>
    <!-- annotation end -->

    <!-- footer start -->
    <div class="footer">Copyright © 2005 - <?php echo date('Y')?> IObit. Alla Rättigheter Förbehållna</div>
    <!-- footer end -->
  </div>
  <!-- container end -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>