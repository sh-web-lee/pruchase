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
    $c_name = 'enimf8xr_p' . $date;
    $c_name_t='enimf8xr_t' . $date;
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

  $refStr.=empty($_GET['pop'])?'':('-'.$_GET['pop']);
  $refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);

  $isNewRef = false;
  if(in_array($_GET['ref'],array('ascfree','ascpro','imffree',
      'imfpro','iufree','iupro','dbfree',
      'dbpro','isu'))){
    $isNewRef = true;
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Pay $0 to get the new IObit Malware Fighter PRO</title>
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
      <a class="logo" href="https://www.iobit.com" target="_blank">IObit</a>
      <h1 class="title">PRE-ORDER NOW</h1>
      <div class="clearfix">
        <div class="imgbox fl">
          <img src="<?php echo getStaticUrl('images/imf-box.png')?>" alt="IObit Malware Fighter PRO"/>
        </div>
        <div class="msgbox fl">
          <h2>$0 Preorder, First 500 Customers Per Day</h2>
          <div class="barbox clearfix">
            <div class="progressbar fl">
              <span class="reducebar">First 500 Customers</span>
              <div class="numbox">
                <span class="totalNum">0</span> preordered, <b class="reduceNum"><em>0</em></b> places left
              </div>
            </div>
            <div class="changebar fl"><span>Next 500+ Customers</span></div>
          </div>
          <ul class="barprice">
            <li>$0</li>
            <li class="last">$24.95</li>
          </ul>
          <ul class="price">
            <li class="first">
              <p><strong>$0</strong><sup>*</sup></p>
            </li>
            <li>
              <a class="buybtn"
                 href="https://www.iobit.com/buy.php?product=imf8preorder&ref=en-imf8preorderofficial<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_imf"
                 onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf8predorderofficial');">
                Pre-order Now
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
      <h2>Stay Safe Online with IObit Malware Fighter 8 PRO</h2>
      <div class="arrow-down"></div>
      <h3 class="hfirst">Prevent malware from infecting your computer</h3>
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
            <dt><h4>Bitdefender Engine</h4></dt>
            <dd>Detect over 200 million malware with high accuracy in real time.</dd>
          </dl>
          <dl>
            <dt><h4>Ransomware Protection</h4></dt>
            <dd>Protect your PC against ransomware which encrypts your files and demands ransom for decrypting them.</dd>
          </dl>
          <dl>
            <dt><h4>USB Guard</h4></dt>
            <dd>Protect your PC from viruses and malware that may enter through connected USB devices.</dd>
          </dl>
        </div>
      </div>
    </div>
  </div>
  <div class="feature fbottom">
    <div class="wrapper">
      <h3 class="hlast">Stop hackers spying or stalking on you</h3>
      <div class="feature-step clearfix">
        <div class="message fl">
          <dl>
            <dt><h4>Safe Box</h4></dt>
            <dd>Protect your privacy and sensitive data from<br> unauthorized accesses.</dd>
          </dl>
          <dl>
            <dt><h4>Camera Guard</h4></dt>
            <dd>Detect and stop intruders from webcam spying on you.</dd>
          </dl>
          <dl>
            <dt><h4>Anti-tracking</h4></dt>
            <dd>Automatically erase your traces to hide your online<br> activities when you close your browser.</dd>
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
      <h3>Provide all-round protection in real time</h3>
      <div class="realtime">
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/feature01.png')?>" alt=""/></dt>
          <dd><h4>Email Protection <span><em>NEW</em></span></h4></dd>
          <dd>Detect malicious links<br> in emails.</dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/feature02.png')?>" alt=""/></dt>
          <dd><h4>Malicious Websites Detection</h4></dd>
          <dd>Protect your browsing from phishing<br> attacks and annoying ads.</dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/feature03.png')?>" alt=""/></dt>
          <dd><h4>Download Protection</h4></dd>
          <dd>Keep your PC away from<br> malicious files.</dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- feature end -->

  <!-- review start -->
  <div class="review">
    <div class="wrapper">
      <h2>What Others Say</h2>
      <div class="review-box">
        <div class="reviews">
          <div class="inner">
            <dl>
              <dt>software.informer</dt>
              <dd>
                The program uses two AV engines, its own and BitDefender, and seems to be effective against malware that cannot be detected by other similartools so it is good that it can run together with your standard AV software. It can detect a wide array of spyware, ransomware, adware, Trojans, worms, keyloggers and bots.
              </dd>
            </dl>
            <dl>
              <dt>Filipe</dt>
              <dd>
                IObit Malware Fighter the best malware removal that I use in my work. I´m a IT guy who work in Support and IMF is my best fighter tool. Be careful if you are a malware, you will be terminated. IMF is intituive software with advanced features and a very nice GUI. A modern everyday tool.
              </dd>
            </dl>
            <dl>
              <dt>Adam Cullen</dt>
              <dd>
                IObit Malware fighter is great as it can scan files and usbs and protect against online and offline threats. Overall with IObit products I have gotten great results even with the free versions as they have helped me and my computer. I would recommend IObit and all of their programs to anyone looking for protection and speediness of their computer and making life just that bit easier.
              </dd>
            </dl>
          </div>
        </div>
        <div class="handle">          
          <span class="one"><img src="<?php echo getStaticUrl('images/software.informer.png')?>" alt=""/></span>
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
      <h2>World-wide Awards</h2>
      <div class="imgbox"><img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/></div>
    </div>
  </div>
  <!-- awards end -->

  <!-- footer start -->
  <div class="footer">
    <dl class="wrapper">
      <dt>Note:</dt>
      <dd>
        *.At the end of the 30-day free trial period, your credit card or PayPal account will be charged $24.95 automatically. This 55% discount from the original price of $54.95 is bonus only for preorders!
      </dd>
      <dd>
        *.If you're unsatisfied, you can cancel the order you placed within 30 days without paying a fee.
      </dd>
    </dl>
    <!-- <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p> -->
  </div>
  <!-- footer end -->

  <!-- floatlayer start -->
  <div id="floatlayer" class="floatlayer">
    <div class="wrapper clearfix">
      <div class="imgbox fl">
        <img src="<?php echo getStaticUrl('images/imf-box.png')?>" alt=""/>
      </div>
      <div class="barbox fl">
        <h2>Pay $0 to Preorder Now</h2>
        <div class="numbox">
          Only for first 500 customers, <b class="reduceNum"><em>2</em><em class="packsNum">2</em></b> places left
        </div>
      </div>
      <ul class="price fl">
        <li class="first">
          <p><strong>$0</strong><sup>*</sup></p>
        </li>
        <li>
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=imf8preorder&ref=en-imf8preorderofficial<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_imf"
             onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf8predorderofficial');">
            Pre-order Now
          </a>
        </li>
      </ul>
    </div>
  </div>
  <!-- floatlayer end -->

  <script>
    packsNum=<?php echo $packsNum;?>;
    refStr="<?php echo $refStr;?>";
  </script>
  <script src="<?php echo $pRootUrl;?>tpl/js/TweenMax.min.js"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>