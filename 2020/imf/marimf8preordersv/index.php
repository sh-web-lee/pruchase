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
    $c_name = 'svimf8xr_p' . $date;
    $c_name_t='svimf8xr_t' . $date;
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
<title>Betala 0 kr f??r att f?? den IObit Malware Fighter PRO - IObit </title>
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
      <h1 class="title">F??RBEST??LLNING B??RJAR</h1>
      <div class="clearfix">
        <div class="imgbox fl">
          <img src="<?php echo getStaticUrl('images/imf-box.png')?>" alt="IObit Malware Fighter PRO"/>
        </div>
        <div class="msgbox fl">
          <h2>0kr F??rbest??ll, F??rsta 500 Kunder Per Dag</h2>
          <div class="barbox clearfix">
            <div class="progressbar fl">
              <span class="reducebar">F??rsta 500 Kunder</span>
              <div class="numbox">
                <span class="totalNum">498</span> f??rbest??lld, <b class="reduceNum"><em>2</em></b> platser kvar
              </div>
            </div>
            <div class="changebar fl"><span>N??sta 500+ Kunder</span></div>
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
                 onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf8predorder-sv');">
                F??rbest??ll Nu 
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- feature start -->
  <div class="feature ftop">
    <div class="wrapper">
      <h2>H??ll Dig S??ker Online med IObit Malware Fighter 8 PRO</h2>
      <div class="arrow-down"></div>
      <h3 class="hfirst">F??rhindra skadlig kod fr??n att infektera din dator</h3>
      <div class="feature-step clearfix">
        <div class="imgbox fl">
          <span class="browser"></span>
          <span class="files file-left"></span>
          <span class="files file-right"></span>
          <span class="worm">
            <em class="worm-legs-left01 on"></em>
            <em class="worm-legs-left02 on"></em>
            <em class="worm-legs-left03 on"></em>
            <em class="worm-legs-right01 on"></em>
            <em class="worm-legs-right02 on"></em>
            <em class="worm-legs-right03 on"></em>
          </span>
          <span class="worm-small worm-small-left"></span>
          <span class="worm-small worm-small-right"></span>
          <span class="worm-mask"></span>
          <span class="lock close"></span>
          <!-- <span class="lock open"></span> -->
          <span class="chain left"></span>
          <span class="chain right"></span>
          <span class="shield"><em class="star"></em></span>
        </div>
        <div class="message fr">
          <dl>
            <dt><h4>Bitdefender Motor</h4></dt>
            <dd>Uppt??ck ??ver 200 miljoner skadliga program med h??g noggrannhet i realtid.</dd>
          </dl>
          <dl>
            <dt><h4>Skydd mot Ransomware</h4></dt>
            <dd>Skydda din dator mot ransomware som krypterar dina filer och kr??ver l??sen f??r att dekryptera dem.</dd>
          </dl>
          <dl>
            <dt><h4>USB Skydd</h4></dt>
            <dd>Skydda din dator mot virus och skadlig programvara som kan komma in via anslutna USB enheter.</dd>
          </dl>
        </div>
      </div>
    </div>
  </div>
  <div class="feature fbottom">
    <div class="wrapper">
      <h3 class="hlast">Sluta hackare som spionerar eller efterf??ljer dig</h3>
      <div class="feature-step clearfix">
        <div class="message fl">
          <dl>
            <dt><h4>Kassask??p</h4></dt>
            <dd>Skydda din integritet och k??nsliga data fr??n obeh??rig ??tkomst.</dd>
          </dl>
          <dl>
            <dt><h4>Kameravakt</h4></dt>
            <dd>Uppt??ck och stoppa inkr??ktare fr??n att spionera webbkamera<br> p?? dig.</dd>
          </dl>
          <dl>
            <dt><h4>Anti-tracking</h4></dt>
            <dd>Radera dina sp??r automatiskt f??r att d??lja dina aktiviteter p?? n??tet n??r du st??nger din webbl??sare. </dd>
          </dl>
        </div>
        <div class="imgbox fr">
          <span class="inner"></span>
          <span class="webpage"></span>
          <span class="red-circle"></span>
          <span class="codebox"></span>
          <span class="thief"></span>
          <span class="thief-hook"></span>
          <span class="password"></span>
          <span class="wordbox left"></span>
          <span class="safebox"><em class="safe-handle"></em></span>
          <span class="shieldtwo"><em class="fork"></em></span>
        </div>
      </div>
      <h3>Ge allsidigt skydd i realtid</h3>
      <div class="realtime">
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/feature01.png')?>" alt=""/></dt>
          <dd><h4>E-postskydd <span><em>Nytt</em></span></h4></dd>
          <dd>Uppt??ck skadliga<br> l??nkar i e-postmeddelanden.</dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/feature02.png')?>" alt=""/></dt>
          <dd><h4>Skadlig Webbplatsuppt??ckt</h4></dd>
          <dd>Skydda din surfning fr??n n??tfiske<br> och irriterande annonser. </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/feature03.png')?>" alt=""/></dt>
          <dd><h4>Nedladdningsskydd</h4></dd>
          <dd>H??ll din dator borta<br> fr??n skadliga filer.</dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- feature end -->

  <!-- review start -->
  <div class="review">
    <div class="wrapper">
      <h2>Vad Andra S??ger</h2>
      <div class="review-box">
        <div class="reviews">
          <div class="inner">
            <dl>
              <dt>betanews</dt>
              <dd>
                "IObit Malware Fighter PRO ??r ett komplett s??kerhetspaket. Det rensar bort spionprogram, trojaner och allehanda otrevligheter. Det finns ocks?? ett Uppstartsskydd som s??kerst??ller att inga skadliga processer startas med Windows. Webbl??sarskyddet garanterar att ingen programvara g??r ??ndringar i din webbl??sare och Filgranskaren garanterar att varje ok??nd fil du ??ppnar inte kan orsaka n??gon skada. Inkluderat ??r ocks?? vaktenheter f??r USB och processor med mera."
              </dd>
            </dl>
            <dl>
              <dt>Filipe</dt>
              <dd>
                IObit Malware Fighter ??r det b??sta vertyget som jag anv??nder i mitt arbete f??r att ta bort skadlig programvara. Jag ??r en IT-kille som arbetar inom Support och IMF ??r mitt b??sta k??mpeverktyg. Var f??rsiktig om du ??r skadlig programvara, du kommer att avslutas. IMF ??r en intituktiv mjukvara med avancerade funktioner och ett mycket trevligt GUI. IMF ??r ett modernt vardagsverktyg.
              </dd>
            </dl>
            <dl>
              <dt>Adam Cullen</dt>
              <dd>
                IObit Malware fighter ??r bra eftersom den kan skanna filer och usb och skydda mot hot online och offline. Sammantaget med IObit produkter har jag f??tt fantastiska resultat ??ven med gratisversionerna eftersom de har hj??lpt mig och min dator. Jag skulle rekommendera Iobit och alla deras program till alla som letar efter skydd och snabbhet p?? sin dator och g??r livet l??ttare.
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
      <h2>V??rldsomsp??nnande Utm??rkelser</h2>
      <div class="imgbox"><img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/></div>
    </div>
  </div>
  <!-- awards end -->

  <!-- footer start -->
  <div class="footer">
    <dl class="wrapper">
      <dt>Anm??rkning:</dt>
      <dd>
        *. I slutet av 30 dagars gratis provperiod debiteras ditt kreditkort eller PayPal konto automatiskt 319kr. Denna 54% rabatt fr??n det ursprungliga priset p?? 699kr ??r bonus endast f??r f??rbest??llningar!
      </dd>
      <dd>*. Om du inte ??r n??jd kan du avbryta best??llningen inom 30 dagar utan att betala en avgift.</dd>
    </dl>
    <p class="copyright">Copyright ?? 2005 - <?php echo date('Y')?> IObit. Alla R??ttigheter F??rbeh??llna</p>
  </div>
  <!-- footer end -->

  <!-- floatlayer start -->
  <div id="floatlayer" class="floatlayer">
    <div class="wrapper clearfix">
      <div class="imgbox fl">
        <img src="<?php echo getStaticUrl('images/imf-box.png')?>" alt=""/>
      </div>
      <div class="barbox fl">
        <h2>Betala 0kr f??r f??rbest??llning nu</h2>
        <div class="numbox">
          Endast f??r dem f??rsta 500 kunderna, <b class="reduceNum"><em>2</em><em class="packsNum">2</em></b> platser kvar
        </div>
      </div>
      <ul class="price fl">
        <li class="first">
          <p><strong>0kr</strong><sup>*</sup></p>
        </li>
        <li>
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=sv-imf8preorder&ref=sv_imf8preorder<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=sv_purchase_imf"
             onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf8predorder-sv');">
            F??rbest??ll Nu
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
  <script src="<?php echo $pRootUrl;?>tpl/js/TweenMax.min.js"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>