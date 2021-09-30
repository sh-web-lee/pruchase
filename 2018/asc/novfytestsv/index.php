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
?>
<!DOCTYPE html>
<html lang="sv">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Spara upp till 77% på Advanced SystemCare och du får extra skydd helt - IObit </title>
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
      <h2>Aktivera ASC PRO nu för att njuta av <strong>77%</strong> rabatt och gratis presentpaket</h2>
      <div class="box one-box">
        <img src="<?php echo getStaticUrl('images/50-sold.png')?>" alt="" class="sold">
        <img src="<?php echo getStaticUrl('images/asc-one-pc.png')?>" alt="">
        <dl>
          <dt><strong><b>219</b> kr</strong> <del>399 kr</del> </dt>
          <dd>
            <a href="https://www.iobit.com/buy.php?product=sv-asc121pc219&ref=sv_asc121pcpurchase1811fy2&refs=sv_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1pc1811fy2-sv')" class="buybtn"><i></i> KÖP NU</a>
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
            <a href="https://www.iobit.com/buy.php?product=sv-asc123pcsdpf249&ref=sv_asc123pcsdpfpurchase1811fy2&refs=sv_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3pc1811fy2-sv')" class="buybtn"><i></i> KÖP NU</a>
          </dd>
          <dd class="last"><i class="all-icons"></i> <strong>3 149 917</strong> användare har aktiverat</dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- container start -->
  <!-- intro start -->
  <div class="intro wrapper clearfix">
    <h2>Aktivera Advanced SystemCare PRO för att få en snabbare, renare och säkrare dator!</h2>
    <img class="screen" src="<?php echo getStaticUrl('images/screen.png')?>" alt="" />
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/intro-icons01.png')?>" alt="" /></dt>
      <dd>
        <strong>200% *</strong>
        <p>Minska systems lagg och snabba upp PC upp till 200% snabbare!</p>
      </dd>
    </dl>
    <dl class="right">
      <dt><img src="<?php echo getStaticUrl('images/intro-icons02.png')?>" alt="" /></dt>
      <dd>
        <strong>300% *</strong>
        <p>Accelerera nedladdning, surfning, spel och YouTube till 300% snabbare!</p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/intro-icons03.png')?>" alt="" /></dt>
      <dd>
        <strong>Djupare</strong>
        <p>Lös registers problem för att minska Windows kraschar och felmeddelande</p>
      </dd>
    </dl>
    <dl class="right">
      <dt><img src="<?php echo getStaticUrl('images/intro-icons04.png')?>" alt="" /></dt>
      <dd>
        <strong>Auto</strong>
        <p>Stoppa automatiskt oanvända processer för att släppa RAM och förbättra dators prestanda</p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/intro-icons05.png')?>" alt="" /></dt>
      <dd>
        <strong>Realtid</strong>
        <p>Skydda mot spionprogram och skadlig kod i realtid</p>
      </dd>
    </dl>
    <dl class="right">
      <dt><img src="<?php echo getStaticUrl('images/intro-icons06.png')?>" alt="" /></dt>
      <dd>
        <strong>Säkrare </strong>
        <p>Radera sekretesspår för att förhindra spårning</p>
      </dd>
    </dl>
  </div>
  <!-- intro end -->

  <!-- donation start -->
  <div class="donation">
    <div class="wrapper clearfix">
      <h2>Gratis Presentpaket är begränsat och erbjuds endast för 3 datorer </h2>
      <h3>Bara  <strong class="packsNum"><?php echo $packsNum ?></strong> Paket Är Tillgängliga!</h3>
      <div class="gift">
        <img src="<?php echo getStaticUrl('images/sd-gift.png')?>" alt=""> 
        <h4>Smart Defrag 6 PRO <del>249 kr</del> <strong>0</strong> kr</h4>
        <p>Snabbare defrag hastighet <br> Automatiskt defrag valda filer <br> Snabbare Dators Uppstart</p>
      </div>
      <div class="gift right">
        <img src="<?php echo getStaticUrl('images/pf-gift.png')?>" alt=""> 
        <h4>Protected Folder <del>249 kr</del> <strong>0</strong> kr</h4>
        <p>Skydda dina filer mot skadliga attacker <br> 1 lösenord för alla filer <br> Skydda privatlivet från andra</p>
      </div>
      <h4>Advanced SystermCare PRO +2 gåvor</h4>
      <ul>
        <li><strong>01</strong>Timmar : </li>
        <li><strong>01</strong>Min : </li>
        <li><strong>01</strong>Sek : </li>
        <li><strong>01</strong>Ms <sup>*</sup></li>
      </ul>
      <a href="https://www.iobit.com/buy.php?product=sv-asc123pcsdpf249&ref=sv_asc123pcsdpfpurchase1811fy2&refs=sv_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3pc1811fy2-sv')" class="buybtn"><i></i> KÖP NU</a>
    </div>
  </div>
  <!-- donation end -->


  <!-- awards start -->
  <div class="awards wrapper">
    <h2>Världsomspännande Utmärkelser</h2>
    <p>Med förtroende och pris från dessa världsledande medier de senaste fyra åren är det ett rätt val du har gjort</p>
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
          <th class="text" colspan="2">Se vad PRO utgåvan kan göra för dig:</th>
          <th class="space"></th>
          <th class="itemb"><span>Advanced SystemCare FREE</span></th>
          <th class="space"></th>
          <th class="itema">
            Advanced SystemCare <br> PRO
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_01.png')?>" alt="" /></td>
          <td class="virtue">Grundläggande rengöring, fixning och optimering på system</td>
          <td class="space"></td>
          <td class="itemb gray"><i class="all-icons">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_02.png')?>" alt="" /></td>
          <td class="virtue">Upp till 300%* Internethastighet med Internet Booster</td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons close">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_03.png')?>" alt="" /></td>
          <td class="virtue">Upp till 200%* Snabbare Dators Uppstart med Startoptimering</td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons close">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt="" /></td>
          <td class="virtue">Djupare Registerrengörare och Defrag för Färre Kraschar</td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons close">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_05.png')?>" alt="" /></td>
          <td class="virtue">Ny Diskoptimerings Motor för Snabbare Systemhastighet</td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons close">●</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_06.png')?>" alt="" /></td>
          <td class="virtue">Realtidsskydd mot Säkerhetshot</td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons close">●</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_07.png')?>" alt="" /></td>
          <td class="virtue">Hela upptäckten mot de djupaste infektionerna</td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons close">●</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt="" /></td>
          <td class="virtue">Auto Ta Bort Annonser och Sekretessspår för Säkrare Surfning</td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons close">●</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_09.png')?>" alt="" /></td>
          <td class="virtue">Auto Rengöring på RAM för Smidigare Systemkörning</td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons close">●</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_10.png')?>" alt="" /></td>
          <td class="virtue">Automatisk uppdatering till den senaste versionen</td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons close">●</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_11.png')?>" alt="" /></td>
          <td class="virtue">Gratis Teknisk Support, Dygnet Runt</td>
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
        <li data-url="https://www.iobit.com/buy.php?product=sv-asc121pc219&ref=sv_asc121pcpurchase1811fy2&refs=sv_purchase_asc" data-ga="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1pc1811fy2-sv')" data-price="219" data-original="399 kr"><strong>-45%</strong> <span>Prenumeration på 1 dator / 1 år</span></li>
        <li class="three-box active" data-url="https://www.iobit.com/buy.php?product=sv-asc123pcsdpf249&ref=sv_asc123pcsdpfpurchase1811fy2&refs=sv_purchase_asc" data-ga="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3pc1811fy2-sv')" data-price="249" data-original="1 097 kr"><strong>-77%</strong> <span>3 datorer / 1 år + gratis gåvor (SD & PF)  </span></li>
      </ul>
      <dl>
        <dt><del class="original">1 097 kr</del> <strong class="price">249</strong> kr</dt>
        <dd>
          <a href="https://www.iobit.com/buy.php?product=sv-asc123pcsdpf249&ref=sv_asc123pcsdpfpurchase1811fy2&refs=sv_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3pc1811fy2-sv')" class="buybtn"><i></i> KÖP NU</a>
        </dd>
      </dl>
    </div>
  </div>
  <!-- server start -->
  <div class="service wrapper clearfix">
    <dl>
      <dd><img src="<?php echo getStaticUrl('images/payments.png')?>" alt="" /></dd>
      <dt>
        <strong>Betalningsalternativ</strong>
        <p>Vi accepterar flera <br> betalningsmetoder</p>
      </dt>
    </dl>
    <dl>
      <dd><img src="<?php echo getStaticUrl('images/verified.png')?>" alt="" /></dd>
      <dt>
        <strong>Säker Betalning</strong>
        <p>IObit stöder flera säkra <br> betalningssätt</p>
      </dt>
    </dl> 
    <dl>
      <dd><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt="" /></dd>
      <dt>
        <strong>Pengar Tillbaka Garanti</strong>
        <p>Om du inte är nöjd under de första <br> 60 dagarna, Vi ger dig pengarna tillbaka.</p>
      </dt>
    </dl>
    <dl>
      <dd><img src="<?php echo getStaticUrl('images/cat.png')?>" alt="" /></dd>
      <dt>
        <strong>Få Licens</strong>
        <p>Du kommer att få licensen inom <br> några minuter efter köpet.</p>
      </dt>
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