<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
  $packsCount=299;
$refStr='';
if(in_array($_GET['ref'],array('sdfeatures_luckshow','sdddact_luckshow','sdfeatures_luckhide','sdddact_luckhide',
    'sdddact','sdgoact','sdbtdact','sdacact','sdadact','sddrfact','sddcfact','sdaad','sdaadsd',
    'sdfeatures_noaction','sdddact_noaction','actreport'))){
  $refStr.='-'.$_GET['ref'];
}
  include $pRootUrl.'include/common.inc.php';
  include $pRootUrl.'callback.php';
?>
<!DOCTYPE html>
<html lang="da">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Spar 80% på Smart Defrag PRO.</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Montserrat:400,600'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
  <script>
    function getPacksNum(){
      $.ajax({
        type: "GET",
        url: "<?php echo $pRootUrl;?>callback.php",
        data: "action=getPacksNum&packsCount=<?php echo $packsCount;?>r="+Math.random(),
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
      <a class="logo" href="https://www.iobit.com" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit" />
      </a>
      <div class="title">
        <h1>80% reduceret</h1>
        <h2>Betal for 1 og få 2 SPECIAL TILBUD</h2>
      </div>
      <div class="offer clearfix">
        <dl class="first">
          <dt><img src="<?php echo getStaticUrl('images/sdbox.png')?>" alt="" /></dt>
          <dd><strong>kr. 149 </strong> <del>kr. 399</del></dd>
          <dd class="name"><i class="all-icons"></i>1 år, 3 pc'er</dd>
          <dd class="last">Bedre harddisk-ydeevne og hurtigere pc</dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/pfbox.png')?>" alt="" /></dt>
          <dd><strong>kr. 0 </strong> <del>kr. 399</del></dd>
          <dd class="name"><i class="all-icons"></i>1 år, 1 pc (gratis)</dd>
          <dd class="last">Bedre beskyttelse af dine data</dd>
        </dl>
        <div class="fr informa">
          <img src="<?php echo getStaticUrl('images/sdpfbox.png')?>" alt="" />
          <div class="price">
            <p><strong><small>kr.</small> 149 </strong> <span><del>kr. 798</del> <b>kr. 649 sparet</b></span></p>
            <a class="buybtn" 
               href="https://www.iobit.com/buy.php?product=dk-sd63pcpf149&ref=dk_sd6pfpurchase1903<?php echo $refStr;?>&refs=dk_purchase_sd" onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdpurchase201804-dk')">
              Køb nu
            </a>
            <p>Kun <span class="packsNum"><?php echo $packsNum;?></span> tilbud tilbage!</p>
          </div>
        </div>
      </div>
      <div class="fly"></div>
    </div>
  </div>
  
  <!-- banner end -->

  <!-- container start -->
  <!-- payments start -->
  <div class="payments">
    <div class="wrapper"><img src="<?php echo getStaticUrl('images/payments.png')?>" alt="" /></div>
  </div>
  <!-- payments end -->

  <!-- intro start -->
  <div class="intro wrapper">
    <h2>Ultimativ harddisk-ydelse - Smart Defrag Pro!</h2>
    <div class="cont clearfix">
      <img class="fl" src="<?php echo getStaticUrl('images/computer.png')?>" alt="" />
      <div class="fl">
        <h3>Gode grunde til at købe Pro-versionen:</h3>
        <ul>
          <li><i class="all-icons"></i>Intelligent defragmentering for over 5 millioner pro-brugere</li>
          <li><i class="all-icons"></i>Sikker og automatisk defragmentering af harddisken</li>
          <li><i class="all-icons"></i>Højere disk-ydelse og hurtigere adgang til filer</li>
          <li><i class="all-icons"></i>Op til 100% hurtigere systemstart og hurtigere pc-spil</li>
        </ul>
        <a class="compareBtn" href="javascript: void(0);">Forskellen mellem gratis- og pro-versionen</a>
      </div>
    </div>
  </div>
  <!-- intro end -->

  <!-- awards start -->
  <div class="awards">
    <div class="wrapper">
      <h2>Verdensomspændende priser</h2>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt="" />
    </div>
  </div>
  <!-- awards end -->

  <div class="wrapper">
    <!-- review start -->
    <div class="review">
      <div class="content">
        <dl>
          <dt><h3>Anmeldelser fra brugere</h3></dt>
          <dd>
            <h4>"At have min "Smart Defrag 5 Pro" indstillet til automatisk defragmentering og til at køre "Defragmnter og optimer" en gang om ugen holder det mit system kørende gnidningsløst og godt."</h4>
            <p>"Jeg har brugt Iobit-produkter i mange år nu. Fordi jeg bruger en ældre maskine med 6 drev, herunder 2 eksterne, finder jeg, at Iobits "Smart Defrag Pro" har hjulpet mig rigtig godt. Mit ældre computersystem er tilbøjeligt til hurtigt at blive fragmenteret. Når jeg har "Smart Defrag Pro", der er indstillet til automatisk defragmentering og til at køre "Defragmnter og optimer" en gang om ugen, holder det mit system kørende gnidningsløst og godt. Iobit opdaterer løbende og stræber hele tiden efter at lave produkter, der bliver bedre og bedre. Jeg er rigtig godt tilfreds med dette produkt." </p>
          </dd>
        </dl>
        <dl>
          <dt>
          <h3>Anmeldelser fra brugere</h3></dt>
          <dd>
            <h4>"Det er nemt at bruge, et "must have", til din harddisk eller SSD."</h4>
            <p>"Jeg kører en kombination af RAID 0 SSD'er og RAID 0 HDD'er og bruger Smart Defrag Pro til at analysere, defragmentere og holde mine drev kørende med høj ydeevne. Som med alle IObit-programmer er det nemt at installere og bruge, og det er meget pålideligt. Når det er indstillet, behøver du ikke tænke mere på det. Smart Defrag har et meget lille hukommelsesforbrug, så det vil ikke sløve dit system. Det anbefales helt bestemt!"</p>
          </dd>
        </dl>
        <dl class="active">
          <dt><h3>Anmeldelser fra medier</h3></dt>
          <dd>
            <h4>"IObit Smart Defrag er det bedste defragmenteringsprogram, vi har prøvet til dato."</h4>
            <p>"IObit Smart Defrag optimerer din pc for fuldt ud at udnytte SSD-ydeevnen, ved at defragmenterer dine harddiske. Dens SSD-trim-værktøj gør det muligt automatisk at tilpasse system-tweaks, der ellers ville kræve eksperterfaring. Smart Defrags opdateringer indeholder en ny defragmenteringsmotor, specialiseret spildefragmentering, et flot nyt udseende og mange flere sprogindstillinger (flere end 35)."</p>
          </dd>
        </dl>
        <dl>
          <dt>
          <h3>Anmeldelser fra brugere</h3></dt>
          <dd>
            <h4>"Med Smart Defrag får man en mere robust og præcis diagnose end med Windows 10 Optimizer"</h4>
            <p>"Jeg har brugt Smart Defrag, siden det kom frem, på flere pc'er og helt fra starten, sammen med medlemmerne af min computerklub kunne vi se de løbende forbedringer. Det var perfekt til dem, lige bortset fra det engelske sprog. Så jeg investerede i den franske oversættelse for IObit. Fra nu af anbefaler de franske IT-blade varmt Smart Defrag, sammenlignet med Windows 10 Optimiser, for at give en mere robust og præcis diagnose med mulighed for også at fremskynde systemets opstart."  </p>
          </dd>
        </dl>
        <dl>
          <dt>
          <h3>Anmeldelser fra brugere</h3></dt>
          <dd>
            <h4>"Smart Defrag er et stort aktiv for mit system, og det gør alt, hvad jeg har brug for og vil have det til at gøre."</h4>
            <p>"Jeg ved ikke, hvordan jeg kunne være mere tilfreds med Smart Defrag. Det virker som en drøm hver gang, og alt jeg skal gøre er at køre programmet og alt er rent og jeg er absolut 100% tilfreds, ikke kun med programmet, men også med det hurtige svar, da jeg havde brug for råd om, hvordan man kunne håndtere de problemer, jeg havde. Det sætter jeg meget stor pris på."</p>
          </dd>
        </dl>
      </div>
      <ul class="users clearfix">
        <li>
          <div class="pic"><img src="<?php echo getStaticUrl('images/william-howes.png')?>" alt="William Howes">
          </div>
          <p>William Howes</p>
        </li>
        <li>
          <div class="pic"><img src="<?php echo getStaticUrl('images/edward-lee-ah-yen.png')?>" alt="Edward Lee Ah Yen"></div>
          <p>Edward Lee Ah Yen</p>
        </li>
        <li class="active">
          <div class="pic"><img src="<?php echo getStaticUrl('images/cnet.png')?>" alt="Cnet">
          </div>
          <p>Cnet</p>
        </li>
        <li>
          <div class="pic"><img src="<?php echo getStaticUrl('images/roland-lalis.png')?>" alt="Roland LALIS">
          </div>
          <p>Roland LALIS</p>
        </li>
        <li>
          <div class="pic"><img src="<?php echo getStaticUrl('images/jim-parten.png')?>" alt="Jim Parten">
          </div>
          <p>Jim Parten</p>
        </li>
      </ul>
    </div>
    <!-- review end -->

    <!-- comparison start -->
    <div class="comparison" id="compare">
      <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <thead>
          <tr>
            <th class="text" colspan="2">Se, hvad PRO-udgave kan gøre for dig:</th>
            <td class="space"></td>
            <th class="itemb">Smart Defrag <b>FREE</b></th>
            <td class="space"></td>
            <th class="itema">
              Smart Defrag PRO
              <p>1 år, 3 pc'er + gave</p>
              <a class="buybtn" 
                 href="https://www.iobit.com/buy.php?product=dk-sd63pcpf149&ref=dk_sd6pfpurchase1903<?php echo $refStr;?>&refs=dk_purchase_sd" onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdpurchase201804-dk')">
                Køb nu
              </a>
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_01.png')?>" alt="" /></td>
            <td class="virtue">Grundlæggende defragmentering og optimering af din harddisk</td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons">√</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_02.png')?>" alt="" /></td>
            <td class="virtue">Op til 200% hurtigere adgang til filer</td>
            <td class="space"></td>
            <td class="itemb"></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_03.png')?>" alt="" /></td>
            <td class="virtue">Start-defragmentering for en hurtigere systemstart</td>
            <td class="space"></td>
            <td class="itemb"></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt="" /></td>
            <td class="virtue">Automatisk og intelligent defragmentering af fragmenterede filer</td>
            <td class="space"></td>
            <td class="itemb"></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_05.png')?>" alt="" /></td>
            <td class="virtue">Tilpasning af defragmenteringsmetode og valg af hvilke diske eller filer, der skal defragmenteres</td>
            <td class="space"></td>
            <td class="itemb"></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_06.png')?>" alt="" /></td>
            <td class="virtue">DMA anvendt til bedre, hurtigere og mere stabil dataoverførsel</td>
            <td class="space"></td>
            <td class="itemb"></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_07.png')?>" alt="" /></td>
            <td class="virtue">Ingen afbrydelse mens du arbejder eller spiller, når du bruger 'lydløs' tilstand</td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons">√</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt="" /></td>
            <td class="virtue">Toptunet spiloplevelse med spiloptimering</td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons">√</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_09.png')?>" alt="" /></td>
            <td class="virtue">Planlagt opgave-understøttelse for inaktiv defragmentering</td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons">√</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_10.png')?>" alt="" /></td>
            <td class="virtue">Automatisk opdatering til den nyeste version</td>
            <td class="space"></td>
            <td class="itemb"></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_11.png')?>" alt="" /></td>
            <td class="virtue">Gratis 24/7 teknisk support ved behov</td>
            <td class="space"></td>
            <td class="itemb"></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <th class="text" colspan="2"></th>
            <td class="space"></td>
            <th class="itemb">Smart Defrag <b>FREE</b></th>
            <td class="space"></td>
            <th class="itema">
              <p>1 år, 3 pc'er + gave</p>
              <p><strong>kr. 149 </strong> <del>kr. 798</del></p>
              <a class="buybtn" 
                 href="https://www.iobit.com/buy.php?product=dk-sd63pcpf149&ref=dk_sd6pfpurchase1903<?php echo $refStr;?>&refs=dk_purchase_sd" onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdpurchase201804-dk')">
                Køb nu
              </a>
            </th>
          </tr>
        </tfoot>
      </table>
    </div>
    
    <!-- comparison end -->

    <!-- annotation start -->
    <dl class="annotation">
      <dt>Bemærk:</dt>
      <dd>*. Tilbud som dette kan fra tid til anden ændres uden varsel efter vores skøn.</dd>
      <dd>* .Data kan variere baseret på forskellige systemer eller computere.</dd>
    </dl>
    <!-- annotation end -->

    <!-- footer start -->
    <div class="footer"> Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</div>
    <!-- footer end -->
  </div>
  <!-- container end -->

  <!-- backtotop start -->
  <div class="backtotop">
    <a href="javascript: void(0);"><img src="<?php echo getStaticUrl('images/backtotop.png')?>" alt="" /></a>
    <p>Tilbage til toppen</p>
  </div>
  <!-- backtotop end -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>