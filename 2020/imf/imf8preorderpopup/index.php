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
    $c_name = 'enimf8pop_p' . $date;
    $c_name_t='enimf8pop_t' . $date;
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

  if(preg_match_all('/([0-9]*)\./',$_GET['ver'],$matches)){
    $ver=$matches[1][0].$matches[1][1];
    $refStr.='-'.$ver;
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
      <h1 class="title">PRE ORDERS NOW START</h1>
      <div class="clearfix">
        <div class="imgbox fl">
          <img src="<?php echo getStaticUrl('images/imf-box.png')?>" alt="IObit Malware Fighter PRO"/>
        </div>
        <div class="msgbox fl">
          <h2>Pay $0 to get a new PRO version</h2>
          <h3>Limited to first 500 orders</h3>
          <div class="numbox">
            <span class="one">Only</span>
            <div id="topnum" class="reduceNum">
              <div class="reduce-box"><div class="reduce-list">0</div></div>
              <div class="reduce-box"><div class="reduce-list">0</div></div>
              <div class="reduce-box"><div class="reduce-list">0</div></div>
            </div>
            <span class="two">left now</span>
          </div>
          <ul class="price">
            <li class="first">
              <p><strong>$0</strong><sup>*</sup></p>
            </li>
            <li>
              <a class="buybtn"
                 href="https://www.iobit.com/buy.php?product=imf8preorder&ref=en-imf8preorderpopup<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_imf"
                 onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf8preorderpopup');">
                Pre-order Now
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- brand start -->
  <div class="brand">
    <div class="arrow-down"></div>
    <h2>Welcome to the Brand-New IObit Malware Fighter 8</h2>
    <div class="wrapper">
      <dl class="one">
        <dt><img src="<?php echo getStaticUrl('images/brand01.png')?>" alt=""/></dt>
        <dd>
          <h3>50% Faster</h3>
          <p>New-Gen Anti-Malware Engines<br> for faster scan </p>
        </dd>
      </dl>
      <dl class="two">
        <dt><img src="<?php echo getStaticUrl('images/brand02.png')?>" alt=""/></dt>
        <dd>
          <h3>2x Larger</h3>
          <p>Expanded IObit Malware<br> database for better protection</p>
        </dd>
      </dl>
      <dl class="three
      ">
        <dt><img src="<?php echo getStaticUrl('images/brand03.png')?>" alt=""/></dt>
        <dd>
          <h3>Email Protection</h3>
          <p>New function for malicious link<br> detection in emails</p>
        </dd>
      </dl>
    </div>
  </div>
  <!-- brand end -->

  <!-- feature start -->
  <div class="feature">
    <div class="wrapper">
      <h2>Much Better Version, Much Better Protection</h2>
      <div class="clearfix">
        <div class="message fl">
          <dl>
            <dt><b>Bitdefender & IObit Protection</b></dt>
            <dd>Dual Engines work to detect over 200 million malware with high accuracy.</dd>
          </dl>
          <dl>
            <dt><b>Ransomware Protection</b></dt>
            <dd>Take proactive protection against ransomware attacks in real time for your PC.</dd>
          </dl>
          <dl>
            <dt><b>USB Protection</b></dt>
            <dd>Prevent virus and malware infections that might be carried by USB devices.</dd>
          </dl>
        </div>
        <div class="imgbox fr"><img src="<?php echo getStaticUrl('images/screen01.png')?>" alt=""/></div>
      </div>
    </div>
  </div>
  <div class="feature feature02">
    <div class="wrapper clearfix">
      <div class="imgbox fl"><img src="<?php echo getStaticUrl('images/screen02.png')?>" alt=""/></div>
      <div class="message fr">
        <dl>
          <dt><b>Privacy Protection</b></dt>
          <dd>Protect your personal and sensitive data from those unauthorized accesses.</dd>
        </dl>
        <dl>
          <dt><b>Camera Protection</b></dt>
          <dd>Detect and stop intruders from webcam spying on you.</dd>
        </dl>
        <dl>
          <dt><b>Surfing Protection</b></dt>
          <dd>Erase your online traces automatically to ensure a safer surfing environment. </dd>
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
             href="https://www.iobit.com/buy.php?product=imf8preorder&ref=en-imf8preorderpopup<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_imf"
             onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf8preorderpopup');">
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
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>