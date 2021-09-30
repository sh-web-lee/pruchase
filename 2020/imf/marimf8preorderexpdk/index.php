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
    $c_name = 'dkimf8exp_p' . $date;
    $c_name_t='dkimf8exp_t' . $date;
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
<html lang="dk">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Betal 0 kr. for IObit Malware Fighter 8 PRO - IObit</title>
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
      <a class="logo" href="https://www.iobit.com/dk/index.php" target="_blank">IObit</a>
      <h1 class="title">FORUDBESTIL NU</h1>
      <div class="clearfix">
        <div class="imgbox fl">
          <img src="<?php echo getStaticUrl('images/imf-box.png')?>" alt="IObit Malware Fighter PRO"/>
        </div>
        <div class="msgbox fl">
          <h2>Tilbage til PRO-versionen til 0 kr.</h2>
          <div class="barbox clearfix">
            <div class="progressbar fl">
              <span class="reducebar">Til de første 500 kunder</span>
              <div class="numbox">
                <span class="totalNum">498</span> forudbestilte, <b class="reduceNum"><em>2</em></b> stk. tilbage
              </div>
            </div>
            <div class="changebar fl"><span>For de næste 500+ kunder</span></div>
          </div>
          <ul class="barprice">
            <li>0 kr.*</li>
            <li class="last">199 kr.</li>
          </ul>
          <ul class="price">
            <li class="first">
              <p><strong>0 kr.</strong><sup>*</sup></p>
            </li>
            <li>
              <a class="buybtn"
                 href="https://www.iobit.com/buy.php?product=dk-imf8preorder&ref=dk_imf8preorder<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=dk_purchase_imf"
                 onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf8predorderexp-dk');">
                Forudbestil nu
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
      <h2>What kan IObit Malware Fighter PRO gøre for dig?</h2>
      <div class="clearfix">
        <div class="imgbox fl">
          <img src="<?php echo getStaticUrl('images/screen01.png')?>" alt=""/>
          <span class="line-left line"></span>
        </div>
        <div class="message fr">
          <h3>Beskytte din PC</h3>
          <ul>
            <li>
              Fjerne <?php if(!empty($_GET['fileto'])):?><b class="remove"><?php echo number_format($_GET['fileto'])?></b><?php endif;?>  sikkerhedstrusler for en mere sikker PC
            </li>
            <li>
              Stopper <?php if(!empty($_GET['rsto'])):?><b class="stop"><?php echo number_format($_GET['rsto'])?></b><?php endif;?>  ransomware i at hijack dinPC
            </li>
            <li>Stopper trusler fra USB-nøgler i at inficere din PC </li>
            <li>Giver mulighed for <b>fuld</b> beskyttelse i realtid</li>
          </ul>
        </div>
      </div>
      <div class="clearfix">
        <div class="message message2 fl">
          <h3>Beskytter dit privatliv</h3>
          <ul>
            <li>
              Opdager <?php if(!empty($_GET['camto'])):?><b class="detect"><?php echo number_format($_GET['camto'])?></b><?php endif;?> uautoriseret adgang til dit webcam
            </li>
            <li>
              Sletter <?php if(!empty($_GET['traceto'])):?><b class="online"><?php echo number_format($_GET['traceto'])?></b><?php endif;?>  onlinespor og undgår luskebukse
            </li>
            <li>Beskytter dine personlige filer <b>med koder</b> </li>
          </ul>
        </div>
        <div class="imgbox imgbox2 fr">
          <img src="<?php echo getStaticUrl('images/screen02.png')?>" alt=""/>
          <span class="line-right line"></span>
          <span class="shield-box"><em class="shield"></em><em class="shield-shadow"></em></span>
        </div>
      </div>
      <div class="fbottom">
        <h2>Uden PRO-versionen må <b>du være foruden:</b></h2>
        <div class="clearfix">
          <div class="imgbox fl">
            <img src="<?php echo getStaticUrl('images/screen03.png')?>" alt=""/>
            <span class="warning"></span>
          </div>
          <div class="message fr">
            <ul>
              <li>Bitdefender Engine’s beskyttelse mod malware og virusser;</li>
              <li>IObit Anti-ransomware Engine’s beskyttelse mod ransomware;</li>
              <li>Beskyttelse mod uautoriseret adgang til dit kamera;</li>
              <li>Beskyttelse mod sikkerhedstrusler fra USB-nøgler;</li>
              <li>Beskyttelse af dit privatliv med automatisk rydning af online spor;</li>
              <li>Automatisk opdatering af databasen for malware;</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- feature end -->

  <!-- moregives start -->
  <div class="moregives">
    <h2>Vend tilbage til pro-versionen, den nye version giver dig mere:</h2>
    <div class="wrapper">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature01.png')?>" alt=""/></dt>
        <dd>
          <big>100% større</big>
          <p>Malware-database</p>
        </dd>
      </dl>
      <dl class="center">
        <dt><img src="<?php echo getStaticUrl('images/feature02.png')?>" alt=""/></dt>
        <dd>
          <big>50%* hurtigere</big>
          <p>Skanningshastighed</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature03.png')?>" alt=""/></dt>
        <dd>
          <big>Beskyttelse af E-mail</big>
          <p>Identificerer ondsindede links</p>
        </dd>
      </dl>
    </div>
  </div>
  <!-- moregives end -->

  <!-- review start -->
  <div class="review">
    <div class="wrapper">
      <h2>Hvad andre siger</h2>
      <div class="review-box">
        <div class="reviews">
          <div class="inner">
            <dl>
              <dt>Filipe</dt>
              <dd>
                "IObit Malware Fighter er det bedste værktøj til at fjerne malware og jeg bruger det på mit arbejde. Je ger IT-uddannet og arbejder i Support og IMF er det bedste værktøj til at bekæmpe malware. Vær forsigtig hvis du har malware, kan du blive inficeret. IMF er et intuitivt software med avancerede funktioner og en meget god GUI. Et moderne værktøj til hverdagen."
              </dd>
            </dl>
            <dl>
              <dt>Software Informer</dt>
              <dd>
                "Programmet bruger to antivirus-motorer, dets egne og BitDefenders, og de ser ud til at være effektive mod malware, der ikke kan opdages af andre tilsvarende programmer, så det er godt, at det kan køre sammen med dit standard-antivirusprogram. Det kan registrere et bredt udvalg af spyware, ransomware, adware, trojanere, orme, keyloggers og bots. "
              </dd>
            </dl>
            <dl>
              <dt>Adam Cullen</dt>
              <dd>
                "IObit Malware fighter er super. Det skanner dine filer, usb-stik og beskytter mod online og offline trusler. Generelt har jeg haft gode erfaringer med IObit produkter selv med de gratis udgaver. Jeg vil anbefale iobit og alle deres programmer til enhver som vil have beskyttelse, en hurtigere PC. Iobit gør hverdagen lidt nemmere."
              </dd>
            </dl>
          </div>
        </div>
        <div class="handle">          
          <span class="one"><img src="<?php echo getStaticUrl('images/filipe.png')?>" alt="Filipe"/></span>
          <span class="two on"><img src="<?php echo getStaticUrl('images/software.informer.png')?>" alt=""/></span>
          <span class="three"><img src="<?php echo getStaticUrl('images/adam-cullen.png')?>" alt="Adam Cullen"></span>
        </div>
      </div>
    </div>
  </div>
  <!-- review end -->

  <!-- awards start -->
  <div class="awards">
    <div class="wrapper">
      <h2>Verdensomspændende priser</h2>
      <div class="imgbox"><img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/></div>
    </div>
  </div>
  <!-- awards end -->

  <!-- footer start -->
  <div class="footer">
    <dl class="wrapper">
      <dt>Bemærk:</dt>
      <dd>
        *.Ved slutningen af din gratis 30-dages prøveperiode faktureres dit kort eller PayPal automatisk med 199 kr. 66% rabat fra originalprisen på 599 kr. gælder kun for forudbestillinger!
      </dd>
      <dd>
        *.Er du ikke tilfreds, kan du afbestille din ordre gratis inden for 30 dage fra købsdato.
      </dd>
    </dl>
    <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p>
  </div>
  <!-- footer end -->

  <!-- floatlayer start -->
  <div id="floatlayer" class="floatlayer">
    <div class="wrapper clearfix">
      <div class="imgbox fl">
        <img src="<?php echo getStaticUrl('images/imf-box.png')?>" alt=""/>
      </div>
      <div class="barbox fl">
        <h2>Betal 0 kr. og forudbestil nu</h2>
        <div class="numbox">
          Gælder kun for de første 500 kunder, <b class="reduceNum"><em>2</em><em class="packsNum">2</em></b> stk. tilbage
        </div>
      </div>
      <ul class="price fl">
        <li class="first">
          <p><strong>0 kr.</strong><sup>*</sup></p>
        </li>
        <li>
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=dk-imf8preorder&ref=dk_imf8preorder<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=dk_purchase_imf"
             onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf8predorderexp-dk');">
            Forudbestil nu
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