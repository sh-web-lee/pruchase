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
if (in_array($_GET['st'], array('asc_c6', 'asc_c2', 'asc_c3',
        'asc_t2', 'asc_t3', 'asc_t4', 'asc_t5', 'asc_t6', 'asc_t7', 'asc_t8', 'asc_t9', 'asc_t10', 'asc_t11', 'asc_s1',
        'asc_s3', 'asc_s4', 'asc_s5', 'asc_s6', 'asc_s7', 'asc_s8', 'asc_ac2', 'asc_ac3', 'asc_report',
        'asc_promote', 'asc_autocare', 'asc_buypro', 'asc_pro1', 'asc_pro2', 'asc_pro3', 'asc_pro4', 'asc_pro5',
        'asc_pro6', 'asc_protip1', 'asc_protip2', 'asc_protip3', 'asc_protip4', 'asc_protip5', 'asc_protip6',
        'asc_c8','23','asc_s11','asc_qs3','asc_qs4','asc_qs5','asc_qs6','asc_qs7','asc_qs8',
        'asc_qs9','asc_qs10','asc_qs11','asc_pm1','asc_pm2','asc_pm3','asc_c9','asc_pro7','asc_pro8','asc_pro9','asc_pro10',
        'asc_gift','asc_pro11','asc_pro12','asc_s13','asc_s14','asc_s15','asc_p8','asc_p9','asc_p11','maxcode','garegion',
        'invalidcode','asc_install','asc_p6','asc_p7')
)) {
  $refStr = '-' . $_GET['st'];
} else {
  $refStr = '';
}
if(in_array($_GET['pop'],array('x_asc','xr_sdpasc','xr_dbpasc'))){
  $refStr.='-'.$_GET['pop'];
}
if(in_array($_GET['type'],array('pro','giveawayexp'))){
  $refStr.='-'.$_GET['type'];
}
if(in_array($_GET['to'],array('event1','ascrenew'))){
  $refStr.='-'.$_GET['to'];
}
?>
<!DOCTYPE html>
<html lang="sv">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Spara upp till 77% på Advanced SystemCare och du får extra skydd helt - IObit  </title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500" rel="stylesheet">
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
<script>
  function getPacksNum(){
    $.ajax({
      type: "GET",
      url: "<?php echo $pRootUrl;?>callback.php",
      data: "action=getPacksNum&packsCount=<?php echo $packsCount;?>&r="+Math.random(),
      success: function(packs){
        $('.packsNum').html(packs);
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
    <div class="wrapper">
      <a href="https://www.iobit.com" target="_blank" class="logo">IObit</a>
      <h1>Tidsbegränsat erbjudande</h1>
      <h2>Köp nu och du kan dra nytta av <strong>77%</strong> rabatt och gratis gåvor på ASC PRO!</h2>
      <div class="box one-box">
        <img src="<?php echo getStaticUrl('images/50-sold.png')?>" alt="" class="sold">
        <img src="<?php echo getStaticUrl('images/asc-one-pc.png')?>" alt="">
        <dl>
          <dt><strong><b>199</b> kr</strong> <del>399 kr</del> </dt>
          <dd>
            <a href="https://www.iobit.com/buy.php?product=sv-asc121pc199&ref=sv_asc121pcpurchase1805<?php echo $refStr;?>&refs=sv_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1pc1805-sv')" class="buybtn"><i></i> KÖP NU</a>
          </dd>
        </dl>
      </div>
      <div class="box three-gift">
        <img src="<?php echo getStaticUrl('images/73-sold.png')?>" alt="" class="sold">
        <ul>
          <li><strong>01</strong>Timmar : </li>
          <li><strong>01</strong>Min : </li>
          <li><strong>01</strong>Sek : </li>
          <li><strong>01</strong>Ms</li>
        </ul>
        <img src="<?php echo getStaticUrl('images/asc-three-gift.png')?>" alt="">
        
        <dl>
          <dt><strong><b>249</b> kr</strong> <del>1 097 kr</del> </dt>
          <dd>
            <a href="https://www.iobit.com/buy.php?product=sv-asc123pcsdpf249&ref=sv_asc123pcsdpfpurchase1805g249<?php echo $refStr;?>&refs=sv_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3pc1805-sv')" class="buybtn"><i></i> KÖP NU</a>
          </dd>
          <dd class="last"><i class="all-icons"></i> <strong>3,149,917</strong> människor har aktiverat</dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- container start -->
  <!-- intro start -->
  <div class="intro wrapper clearfix">
    <h2>Optimera din dators prestanda med nya ASC 12!</h2>
    <img class="screen" src="<?php echo getStaticUrl('images/screen.png')?>" alt="" />
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/intro-icons01.png')?>" alt="" /></dt>
      <dd>Fördubblar datorns <br> hastighet!*</dd>
    </dl>
    <dl class="right">
      <dt><img src="<?php echo getStaticUrl('images/intro-icons02.png')?>" alt="" /></dt>
      <dd>Skannar och fixar olika <br> datorproblem!</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/intro-icons03.png')?>" alt="" /></dt>
      <dd>Ökar din Internethastighet <br> upp till 300%!*</dd>
    </dl>
    <dl class="right">
      <dt><img src="<?php echo getStaticUrl('images/intro-icons04.png')?>" alt="" /></dt>
      <dd>Ger en säkrare <br> upplevelse på nätet!</dd>
    </dl>
  </div>
  <!-- intro end -->

  <!-- donation start -->
  <div class="donation">
    <div class="wrapper clearfix">
      <h2>Gratis presentpaket är endast för Tidsbegränsat Erbjudande</h2>
      <h3>Endast <strong class="packsNum"><?php echo $packsNum ?></strong> paket tillgängliga!</h3>
      <div class="gift">
        <img src="<?php echo getStaticUrl('images/sd-gift.png')?>" alt=""> 
        <h4>Smart Defrag 6 PRO <del>249 kr</del> <strong>0</strong> kr</h4>
        <p>Pålitlig och intelligent defragmenterare <br> med över 7,000,000 användare</p>
      </div>
      <div class="gift right">
        <img src="<?php echo getStaticUrl('images/pf-gift.png')?>" alt=""> 
        <h4>Protected Folder <del>249 kr</del> <strong>0</strong> kr</h4>
        <p>Lättanvänt verktyg som skapar <br> lösenordsskyddade mappar</p>
      </div>
      <h4>Advanced SystermCare PRO +2 gåvor</h4>
      <ul>
        <li><strong>01</strong>Timmar : </li>
        <li><strong>01</strong>Min : </li>
        <li><strong>01</strong>Sek : </li>
        <li><strong>01</strong>Ms <sup>*</sup></li>
      </ul>
      <a href="https://www.iobit.com/buy.php?product=sv-asc123pcsdpf249&ref=sv_asc123pcsdpfpurchase1805g249<?php echo $refStr;?>&refs=sv_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3pc1805-sv')" class="buybtn"><i></i> KÖP NU</a>
    </div>
  </div>
  <!-- donation end -->


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
            <b>-Cnet</b>
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
  <!-- comparison start -->
  <div class="comparison wrapper" id="compare">
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
      <thead>
        <tr>
          <th class="text" colspan="2">Vilka fördelar har du som PRO användare?</th>
          <th class="space"></th>
          <th class="itemb"><span>Advanced SystemCare FREE</span></th>
          <th class="space"></th>
          <th class="itema">
            Advanced SystemCare PRO
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
          <td class="itemb"><i class="all-icons close">●</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_06.png')?>" alt="" /></td>
          <td class="virtue">Upp till 200% Snabbare PC-Uppstart med <span>Startoptimering</span></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons close">●</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_07.png')?>" alt="" /></td>
          <td class="virtue">Djup Registerrengöring och Defragmentering för Färre <span>Krascher</span></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons close">●</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt="" /></td>
          <td class="virtue">Diskoptimering för Snabbare Åtkomst till Hårddisk</td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons close">●</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_09.png')?>" alt="" /></td>
          <td class="virtue">Realtidsskydd mot Säkerhetshot</td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons close">●</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_10.png')?>" alt="" /></td>
          <td class="virtue">Fullständig Identifiering mot Djupa Infektioner</td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons close">●</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_11.png')?>" alt="" /></td>
          <td class="virtue">Automatisk Borttagning av Annonser och Spår för Säker <span>Surfing</span></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons close">●</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_12.png')?>" alt="" /></td>
          <td class="virtue">Automatisk RAM-Rengöring för Smidigare Systemdrift</td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons close">●</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_13.png')?>" alt="" /></td>
          <td class="virtue">Automatisk Uppdatering till Senaste Versionen</td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons close">●</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_14.png')?>" alt="" /></td>
          <td class="virtue">Gratis Teknisk Support vid Behov, Dygnet Runt</td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons close">●</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- comparison end -->
  <div class="bottom-buy">
    <div class="wrapper">
      <span class="img-box"></span>
      <ul>
        <li data-url="https://www.iobit.com/buy.php?product=sv-asc121pc199&ref=sv_asc121pcpurchase1805<?php echo $refStr;?>&refs=sv_purchase_asc" data-ga="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1pc1805-sv')" data-price="199" data-original="399 kr"><strong>-50%</strong> <span>1 PC / 1 År </span></li>
        <li class="three-box active" data-url="https://www.iobit.com/buy.php?product=sv-asc123pcsdpf249&ref=sv_asc123pcsdpfpurchase1805g249<?php echo $refStr;?>&refs=sv_purchase_asc" data-ga="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3pc1805-sv')" data-price="249" data-original="1 097 kr"><strong>-77%</strong> <span>3 PC / 1 År + gratis gåvor (SD&PF)  </span></li>
      </ul>
      <dl>
        <dt><del class="original">1 097 kr</del> <strong class="price">249</strong> kr</dt>
        <dd>
          <a href="https://www.iobit.com/buy.php?product=sv-asc123pcsdpf249&ref=sv_asc123pcsdpfpurchase1805g249<?php echo $refStr;?>&refs=sv_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3pc1805-sv')" class="buybtn"><i></i> KÖP NU</a>
        </dd>
      </dl>
    </div>
  </div>
  <!-- server start -->
  <div class="service wrapper clearfix">
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
  <dl class="annotation wrapper">
    <dt>Notera:</dt>
    <dd>*.Uppgifter kan variera beroende på olika system eller datorer.</dd>
    <dd>*.Reklamkampanjer kan emellanåt ändras utan förvarning, efter vårt eget godtycke.</dd>
  </dl>
  <!-- annotation end -->

  <!-- footer start -->
  <div class="footer">Copyright © 2005 - <?php echo date('Y')?> IObit. Alla Rättigheter Förbehållna</div>
  <!-- footer end -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>