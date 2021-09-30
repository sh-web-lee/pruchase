<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';

  $viewNum=rand(98,165);
  if($_GET['action']=='getViewNum'){
    echo $viewNum;
    exit();
  }
  if ($_GET['action'] == 'getPacks') {
    $date = $_GET['d'];
    $c_name = 'svimf8exp_p' . $date;
    $c_name_t='svimf8exp_t' . $date;
    $isInit=$_GET['isInit'];
    if ($_COOKIE[$c_name]===null) {
      $totalNum=$packsNum=(intval($_GET['packsNum'])>0)?intval($_GET['packsNum']):49;
      setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
      setcookie($c_name_t,$totalNum, time() + 3600 * 24 *2);
    } else {
      if (intval($_COOKIE[$c_name]) <= 0) {
        $packsNum = 0;
        setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
      } else {
        if($isInit==1){
          $packsNum = intval($_COOKIE[$c_name]);
        }else {
          $packsNum = $_COOKIE[$c_name] - 1;
        }
        setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
      }
    }
    echo json_encode(array('packsNum'=>$packsNum));
    exit();
  }

  $refStr=empty($_GET['id'])?'':('-'.$_GET['id']);

  $isNewUser=false;
  $isNewUserV = false;
  $isNewRef = false;
  if(preg_match('/^7\./',$_GET['ver']) ||in_array($_GET['ref'],array('ascfree','ascpro','imffree',
        'imfpro','iufree','iupro','dbfree',
        'dbpro','isu'))){
    $isNewUser=true;
    if(in_array($_GET['ref'],array('ascfree','ascpro','imffree',
        'imfpro','iufree','iupro','dbfree',
        'dbpro','isu'))){
      $isNewRef = true;
    }
  }
  if(preg_match('/^5\./',$_GET['ver']) ||in_array($_GET['ref'],array('ascfree','ascpro','imffree',
        'imfpro','iufree','iupro','dbfree',
        'dbpro','isu'))){
    $isNewUserV = true;
    if(in_array($_GET['ref'],array('ascfree','ascpro','imffree',
        'imfpro','iufree','iupro','dbfree',
        'dbpro','isu'))){
      $isNewRef = true;
    }
  }

  $packsNum=49;
  $transData=json_decode(base64_decode($_GET['num']));
  if(!empty($transData)){
    if(@intval($transData->seats)){
      $packsNum=@intval($transData->seats);
    }
  }

  $popStr=empty($_GET['pop'])?'':('-'.$_GET['pop']);
  $refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);

  $isNewRef = false;
  if(in_array($_GET['ref'],array('ascfree','ascpro','imffree',
      'imfpro','iufree','iupro','dbfree',
      'dbpro','isu'))){
    $isNewRef = true;
  }
?>
<!DOCTYPE html>
<html lang="sv">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Betala 0 kr för att få den IObit Malware Fighter PRO - IObit </title>
<meta name="Copyright" content="IObit">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600&display=swap" rel="stylesheet">
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com/sv/index.php" target="_blank">IObit</a>
      <h1 class="title">FÖRBESTÄLLNING BÖRJAR</h1>
      <div class="clearfix">
        <div class="imgbox fl">
          <img src="<?php echo getStaticUrl('images/imf-box.png')?>" alt="IObit Malware Fighter PRO"/>
        </div>
        <div class="msgbox fl">
          <h2>Gå Tillbaka till PRO version för 0kr</h2>
          <div class="barbox clearfix">
            <div class="progressbar fl">
              <span class="reducebar">Första 500 Kunder</span>
              <div class="numbox">
                <span class="totalNum">498</span> förbeställd, <b class="reduceNum"><em>2</em></b> platser kvar
              </div>
            </div>
            <div class="changebar fl"><span>Nästa 500+ Kunder</span></div>
          </div>
          <ul class="barprice">
            <li>0 kr*</li>
            <li class="last">319 kr</li>
          </ul>
          <ul class="price">
            <li class="first">
              <p><strong>0kr</strong><sup>*</sup></p>
            </li>
            <li>
              <a class="buybtn"
                 href="https://www.iobit.com/buy.php?product=sv-imf8preorder&ref=sv_imf8preorder<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=sv_purchase_imf"
                 onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf8predorderexp-sv'); ">
                Förbeställ Nu 
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- feature start -->
  <div class="feature">
    <div class="wrapper">
      <div class="arrow-down"></div>
      <h2>Vad Gjorde IObit Malware Fighter PRO för Dig?</h2>
      <div class="clearfix">
        <div class="imgbox fl">
          <img src="<?php echo getStaticUrl('images/screen01.png')?>" alt=""/>
          <span class="line-left line"></span>
        </div>
        <div class="message fr">
          <h3>Skyddade Din Dator</h3>
          <ul>
            <li>
              Borttagnade <?php if(!empty($_GET['fileto'])):?><b class="remove"><?php echo number_format($_GET['fileto'])?></b><?php endif;?> säkerhetshot för en säkrare dator
            </li>
            <li>
              Förhindrade <?php if(!empty($_GET['rsto'])):?><b class="stop"><?php echo number_format($_GET['rsto'])?></b><?php endif;?> ransomware att kapa din dator
            </li>
            <li>Tog bort hot från USB enhet som kan infektera din dator</li>
            <li>Aktiverade <b>omfattande</b> skydd i realtid</li>
          </ul>
        </div>
      </div>
      <div class="clearfix">
        <div class="message message2 fl">
          <h3>Skyddade Din Integritet</h3>
          <ul>
            <li>
              Detekterade <?php if(!empty($_GET['camto'])):?><b class="detect"><?php echo number_format($_GET['camto'])?></b><?php endif;?> otillförlitliga åtkomst till din webbkamera
            </li>
            <li>
              Raderade <?php if(!empty($_GET['traceto'])):?><b class="online"><?php echo number_format($_GET['traceto'])?></b><?php endif;?> spår online för att undvika snoopers
            </li>
            <li><b>Lösenordsskyddad</b> dina personliga filer</li>
          </ul>
        </div>
        <div class="imgbox imgbox2 fr">
          <img src="<?php echo getStaticUrl('images/screen02.png')?>" alt=""/>
          <span class="line-right line"></span>
          <span class="shield-box"><em class="shield"></em><em class="shield-shadow"></em></span>
        </div>
      </div>
      <div class="fbottom">
        <h2>Utan PRO nu måste du <b>säga adjö till:</b></h2>
        <div class="clearfix">
          <div class="imgbox fl">
            <img src="<?php echo getStaticUrl('images/screen03.png')?>" alt=""/>
            <span class="warning"></span>
          </div>
          <div class="message fr">
            <ul>
              <li>Skydd mot malware och virus med Bitdefender Engine;</li>
              <li>Skydd mot ransomware med Obit Anti-ransomware Engine;</li>
              <li>Kameraskydd mot obehörig åtkomst;</li>
              <li>Skydd mot säkerhetshot från USB enhet;</li>
              <li>Integritetsskydd med automatisk radering av spårning på nätet;</li>
              <li>Automatisk uppdatering av databas med malware;</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- feature end -->

  <!-- moregives start -->
  <div class="moregives">
    <h2>Kom Tillbaka Nu, den Nya Versionen Ger Dig Mer:</h2>
    <div class="wrapper">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature01.png')?>" alt=""/></dt>
        <dd>
          <big>100% större</big>
          <p>Malware Databas</p>
        </dd>
      </dl>
      <dl class="center">
        <dt><img src="<?php echo getStaticUrl('images/feature02.png')?>" alt=""/></dt>
        <dd>
          <big>50% * Snabbare</big>
          <p>Skanningshastighet</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature03.png')?>" alt=""/></dt>
        <dd>
          <big>E-postskydd</big>
          <p>för att identifiera skadliga länkar</p>
        </dd>
      </dl>
    </div>
  </div>
  <!-- moregives end -->

  <!-- review start -->
  <div class="review">
    <div class="wrapper">
      <h2>Vad Andra Säger</h2>
      <div class="review-box">
        <div class="reviews">
          <div class="inner">
            <dl>
              <dt>betanews</dt>
              <dd>
                "IObit Malware Fighter PRO är ett komplett säkerhetspaket. Det rensar bort spionprogram, trojaner och allehanda otrevligheter. Det finns också ett Uppstartsskydd som säkerställer att inga skadliga processer startas med Windows. Webbläsarskyddet garanterar att ingen programvara gör ändringar i din webbläsare och Filgranskaren garanterar att varje okänd fil du öppnar inte kan orsaka någon skada. Inkluderat är också vaktenheter för USB och processor med mera."
              </dd>
            </dl>
            <dl>
              <dt>Filipe</dt>
              <dd>
                IObit Malware Fighter är det bästa vertyget som jag använder i mitt arbete för att ta bort skadlig programvara. Jag är en IT-kille som arbetar inom Support och IMF är mitt bästa kämpeverktyg. Var försiktig om du är skadlig programvara, du kommer att avslutas. IMF är en intituktiv mjukvara med avancerade funktioner och ett mycket trevligt GUI. IMF är ett modernt vardagsverktyg.
              </dd>
            </dl>
            <dl>
              <dt>Adam Cullen</dt>
              <dd>
                IObit Malware fighter är bra eftersom den kan skanna filer och usb och skydda mot hot online och offline. Sammantaget med IObit produkter har jag fått fantastiska resultat även med gratisversionerna eftersom de har hjälpt mig och min dator. Jag skulle rekommendera Iobit och alla deras program till alla som letar efter skydd och snabbhet på sin dator och gör livet lättare.
              </dd>
            </dl>
          </div>
        </div>
        <div class="handle">          
          <span class="one"><img src="<?php echo getStaticUrl('images/betanews.png')?>" alt="betanews"/></span>
          <span class="two on"><img src="<?php echo getStaticUrl('images/filipe.png')?>" alt="Filipe"/></span>
          <span class="three"><img src="<?php echo getStaticUrl('images/adam-cullen.png')?>" alt="Adam Cullen"></span>
        </div>
      </div>
    </div>
  </div>
  <!-- review end -->

  <!-- awards start -->
  <div class="awards">
    <div class="wrapper">
      <h2>Världsomspännande Utmärkelser</h2>
      <div class="imgbox"><img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/></div>
    </div>
  </div>
  <!-- awards end -->

  <!-- footer start -->
  <div class="footer">
    <dl class="wrapper">
      <dt>Anmärkning:</dt>
      <dd>
        *. I slutet av 30 dagars gratis provperiod debiteras ditt kreditkort eller PayPal konto automatiskt 319kr. Denna 54% rabatt från det ursprungliga priset på 699kr är bonus endast för förbeställningar!
      </dd>
      <dd>*. Om du inte är nöjd kan du avbryta beställningen inom 30 dagar utan att betala en avgift.</dd>
    </dl>
    <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Alla Rättigheter Förbehållna</p>
  </div>
  <!-- footer end -->

  <!-- floatlayer start -->
  <div id="floatlayer" class="floatlayer">
    <div class="wrapper clearfix">
      <div class="imgbox fl">
        <img src="<?php echo getStaticUrl('images/imf-box.png')?>" alt=""/>
      </div>
      <div class="barbox fl">
        <h2>Betala 0kr för förbeställning nu</h2>
        <div class="numbox">
          Endast för dem första 500 kunderna, <b class="reduceNum"><em>2</em><em class="packsNum">2</em></b> platser kvar
        </div>
      </div>
      <ul class="price fl">
        <li class="first">
          <p><strong>0kr</strong><sup>*</sup></p>
        </li>
        <li>
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=sv-imf8preorder&ref=sv_imf8preorder<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=sv_purchase_imf"
             onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf8predorderexp-sv'); ">
            Förbeställ Nu
          </a>
        </li>
      </ul>
    </div>
  </div>
  <!-- floatlayer end -->

  <script>
    packsNum=<?php echo $packsNum;?>;
    refStr="<?php echo $refStr;?><?php echo $popStr;?>";
  </script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>