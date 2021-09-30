<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';

  $viewNum=rand(49,88);
  if($_GET['action']=='getViewNum'){
    echo $viewNum;
    exit();
  }
  if ($_GET['action'] == 'getPacks') {
    $date = $_GET['d'];
    $c_name = 'enimf8rc_p' . $date;
    $c_name_t='enimf8rc_t' . $date;
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
<title>Pay $0 to upgrade to new IObit Malware Fighter PRO</title>
<meta name="Copyright" content="IObit">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700&display=swap" rel="stylesheet">
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
          <span class="shield"></span>
        </div>
        <div class="msgbox fr">
          <span class="once">Once-per-year Presale</span>
          <h2>Get PRO Version at $0</h2>
          <div class="numbox">
            <div id="topnum" class="reduceNum">
              <div class="reduce-list"></div>
              <div class="reduce-list"></div>
              <div class="reduce-list"></div>
            </div>
            <span class="change">of <span class="totalNum">500</span> places left today!</span>
          </div>
          <p class="instead">Or you’ll have to pay $24.95 instead.</p>
          <ul class="price">
            <li class="first">
              <p><strong>$0</strong><sup>*</sup></p>
            </li>
            <li>
              <a class="buybtn"
                 href="https://www.iobit.com/buy.php?product=imf8preorder&ref=en-imf8preorderrc<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_imf"
                 onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf8preorderrc');">
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
  <div class="feature">
    <div class="wrapper">
      <h2>Stay Safe Online with IObit Malware Fighter 8 PRO</h2>
      <div class="feature-list clearfix">
        <span class="screen"><em class="star"></em></span>
        <div class="left fl">
          <h3>ONLINE</h3>
          <img class="feature-img" src="<?php echo getStaticUrl('images/feature01.png')?>" alt=""/>
          <dl class="one">
            <dt><b>Browsing Protection</b></dt>
            <dd>Block malicious websites </dd>
          </dl>
          <dl class="two">
            <dt><b>E-mail Protection</b></dt>
            <dd>Detect malicious links in mail</dd>
          </dl>
          <dl class="three">
            <dt><b class="green">Online Trace Protection</b> <span class="pro">PRO</span></dt>
            <dd>Auto delete online traces</dd>
          </dl>
        </div>
        <div class="center fl">
          <h3>PRIVACY</h3>
          <img class="feature-img" src="<?php echo getStaticUrl('images/feature02.png')?>" alt=""/>
          <dl class="one">
            <dt><b class="green">Camera Protection</b> <span class="pro">PRO</span></dt>
            <dd>Can’t open camera without permission</dd>
          </dl>
          <dl class="two">
            <dt><b class="green">Personal Data Protection</b> <span class="pro">PRO</span></dt>
            <dd>Can’t access without password</dd>
          </dl>
        </div>
        <div class="right fr">
          <h3>SECURITY</h3>
          <img class="feature-img" src="<?php echo getStaticUrl('images/feature03.png')?>" alt=""/>
          <dl class="one">
            <dt><b>Malware Protection</b></dt>
            <dd>Detect 9 million malware </dd>
          </dl>
          <dl class="two">
            <dt><b class="green">Bitdefender Virus Protection</b> <span class="pro">PRO</span></dt>
            <dd>Detect 200 million malware & virus</dd>
          </dl>
          <dl class="three">
            <dt><b class="green">Ransomware Protection</b> <span class="pro">PRO</span></dt>
            <dd>Stop ransomware attacks</dd>
          </dl>
        </div>
      </div>
      <div class="arrow-down"></div>

      <div class="comparison" id="compare">
        <h2>And There Are More that You Can Enjoy</h2>
        <table border="0" cellspacing="0" cellpadding="0" width="100%">
          <thead>
            <tr>
              <th class="virtue"></th>
              <th class="itema">Your Current Version</th>
              <th class="itemb">
                <div class="name">IObit Malware Fighter 8<br> PRO</div>
              </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="virtue">
                <img src="<?php echo getStaticUrl('images/icons01.png')?>" alt=""/>
                <span>Basic real-time protection</span>  
              </td>
              <td class="itema"><i class="all-icons"></i></td>
              <td class="itemb"><i class="all-icons green-fork"></i></td>
            </tr>
            <tr>
              <td class="virtue">
                <img src="<?php echo getStaticUrl('images/icons02.png')?>" alt=""/>
                <span>Comprehensive real-time protection </span>  
              </td>
              <td class="itema"><i class="all-icons circle"></i></td>
              <td class="itemb"><i class="all-icons green-fork"></i></td>
            </tr>
            <tr>
              <td class="virtue">
                <img src="<?php echo getStaticUrl('images/icons03.png')?>" alt=""/>
                <span>USB drive virus can’t harm your computer  </span>  
              </td>
              <td class="itema"><i class="all-icons circle"></i></td>
              <td class="itemb"><i class="all-icons green-fork"></i></td>
            </tr>
            <tr>
              <td class="virtue">
                <img src="<?php echo getStaticUrl('images/icons04.png')?>" alt=""/>
                <span>Auto scan your computer to detect existing threats</span>  
              </td>
              <td class="itema"><i class="all-icons circle"></i></td>
              <td class="itemb"><i class="all-icons green-fork"></i></td>
            </tr>
            <tr>
              <td class="virtue">
                <img src="<?php echo getStaticUrl('images/icons05.png')?>" alt=""/>
                <span>Auto update to latest database to identify more threats </span>  
              </td>
              <td class="itema"><i class="all-icons circle"></i></td>
              <td class="itemb"><i class="all-icons green-fork"></i></td>
            </tr>
            <tr>
              <td class="virtue">
                <img src="<?php echo getStaticUrl('images/icons06.png')?>" alt=""/>
                <span>Auto update to latest version </span>  
              </td>
              <td class="itema"><i class="all-icons circle"></i></td>
              <td class="itemb"><i class="all-icons green-fork"></i></td>
            </tr>
            <tr class="last">
              <td class="virtue">
                <img src="<?php echo getStaticUrl('images/icons07.png')?>" alt=""/>
                <span>24/7 premium technical support</span>  
              </td>
              <td class="itema"><i class="all-icons circle"></i></td>
              <td class="itemb"><i class="all-icons green-fork"></i></td>
            </tr>
          </tbody>
        </table>
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
             href="https://www.iobit.com/buy.php?product=imf8preorder&ref=en-imf8preorderrc<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_imf"
             onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf8preorderrc');">
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
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>