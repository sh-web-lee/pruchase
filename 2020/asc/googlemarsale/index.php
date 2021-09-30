<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';
  if ($_GET['action'] == 'getPacks') {
    $date = $_GET['d'];
    $c_name = 'enascmarsale_p' . $date;
    if ($_COOKIE[$c_name]===null) {
      $packsNum=rand(68,78);
      setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
    } else {
      if (intval($_COOKIE[$c_name]) <= 0) {
        $packsNum = 0;
        setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
      } else {
        $packsNum = $_COOKIE[$c_name] - 1;
        setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
      }
    }
    echo json_encode(array('packsNum'=>$packsNum)); 
    exit();
  }
  $data = json_decode(base64_decode($_GET['data']));
  $se = $data->se;
  $ps = $data->ps;
  $st = $data->st;
  $fp = $data->se+$data->ps+$data->st;
  $refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);

if(!empty($_GET['k'])){
  $k = str_replace(array('{','}'), "", $_GET['k']);
  $k = str_replace(' ', "_", $k);
  $refStr.='-'.$k;
}
if(!empty($_GET['c'])){
  $refStr.='-'.$_GET['c'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Up to 60% OFF on Advanced SystemCare PRO - IObit</title>
<meta name="Copyright" content="IObit">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Rubik:400,600&display=swap" rel="stylesheet">
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com" target="_blank">IObit</a>
      <h1>Advanced SystemCare 13 PRO</h1>
      <ul class="banlist">
        <li>Up to 200% Faster PC</li>
        <li>Up to 300% Faster Internet</li>
        <li>Privacy Protection</li>
      </ul>
      <b class="saveall">Save 60%</b>
      <div class="clearfix">
        <div class="offer">
          <h2>1 Year / 1 PC</h2>
          <div class="price">
            <strong><sup>$</sup><big>16</big>.77</strong>
            <p><del>$29.99</del></p>
            <p class="save">Save 44%</p>
            <a class="buybtn gray"
               href="https://www.iobit.com/buy.php?product=asc1pcgl&ref=en-asc1pcgl<?php echo $refStr;?>&refs=purchase_asc"
               onclick="ga('send', 'event', 'asc1pcbuy', 'buy', 'ascpurchase-google');">
              Get It Now
            </a>
          </div>
        </div>
        <div class="offer white">
          <h2>1 Year / 3 PCs</h2>
          <div class="price">
            <strong><sup>$</sup><big>19</big>.99</strong>
            <p><del>$49.99</del></p>
            <p class="save">Save 60%</p>
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=asc3pcgl&ref=en-asc3pcgl<?php echo $refStr;?>&refs=purchase_asc"
               onclick="ga('send', 'event', 'asc3pcbuy', 'buy', 'ascpurchase-google');">
              Get It Now 
            </a>
          </div>
        </div>
        <div class="offer">
          <h2>1 Year / 5 PCs</h2>
          <div class="price">
            <strong><sup>$</sup><big>29</big>.99</strong>
            <p><del>$59.99</del></p>
            <p class="save">Save 50%</p>
            <a class="buybtn gray"
               href="https://www.iobit.com/buy.php?product=asc5pcgl&ref=en-asc5pcgl<?php echo $refStr;?>&refs=purchase_asc"
               onclick="ga('send', 'event', 'asc5pcbuy', 'buy', 'ascpurchase-google');">
              Get It Now
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- review start -->
  <div class="review">
    <div class="wrapper clearfix">
      <div class="overview fl">
        <h2>Overview</h2>
        <p>
          Advanced SystemCare PRO is the flagship product of IObit which has been working on developing innovative system utilities and security software during past 16 years. 
        </p>
        <p>
          It offers an easy-to-use and powerful solution to make your computer faster, cleaner and safer. <a href="https://www.iobit.com/buy.php?product=asc3pcgl&ref=en-asc3pcgl<?php echo $refStr;?>&refs=purchase_asc" onclick="ga('send', 'event', 'asc3pcbuy', 'buy', 'ascpurchase-google');">Buy now & save 60%</a>
        </p>
        <ul class="review-point">
          <li class="first">
            <span>Media Recommendations</span>
            <b>1000+</b>
          </li>
          <li>
            <span>User<br> Rating</span>
            <b>4.6</b>
          </li>
          <li>
            <span>Downloads</span>
            <b>30+ million</b>
          </li>
          <li>
            <span>Money-back<br> Guarantee</span>
            <b>60-day</b>
          </li>
          <li>
            <span>Technical<br> Support</span>
            <b>24/7</b>
          </li>
        </ul>
      </div>
      <div class="userview fr">
        <ul>
          <li>
            <div class="review-box clearfix">
              <div class="review-icon"><img src="<?php echo getStaticUrl('images/pc-worid.png')?>" alt=""/></div>
              <div class="review-title">
                <h2>Media Review</h2>
                <span>- PC World</span>
              </div>
            </div>
            <p>
              It's exceedingly simple to use; run the program, then choose which feature you want to use, and it goes about its work. There's too much here to go into detail about it all, but each module is surprisingly fully featured, something you wouldn't expect in an all-in-one tool.
            </p>
          </li>
          <li>
            <div class="review-box clearfix">
              <div class="review-icon"><img src="<?php echo getStaticUrl('images/cnet.png')?>" alt=""/></div>
              <div class="review-title">
                <h2>Media Review</h2>
                <span>- Cnet</span>
              </div>
            </div>
            <p>
              Advanced SystemCare is a great all-in-one PC utility that can scan, repair, and optimize many aspects of your system.It aims to remedy whatever ails your computer by not only cleaning up junk files, malware, and invalid registry entries, but by giving your computer a boost to optimize your PC experience.
            </p>
          </li>
          <li>
            <div class="review-box clearfix">
              <div class="review-icon"><img src="<?php echo getStaticUrl('images/topten.png')?>" alt=""/></div>
              <div class="review-title">
                <h2>Media Review</h2>
                <span>- TopTenReviews</span>
              </div>
            </div>
            <p>
              Advanced SystemCare PRO from IObit is a great set of PC system utilities that does exactly what it set out to do: get your computer up to speed and keep it running with optimum performance. Complete with a variety of superb features, Advanced SystemCare is a great option for keeping your PC running like new.
            </p>
          </li>
          <li>
            <div class="review-box clearfix">
              <div class="review-icon"><img src="<?php echo getStaticUrl('images/danny-r-sheets.png')?>" alt=""/></div>
              <div class="review-title">
                <h2>User Review</h2>
                <span>- Danny R. Sheets</span>
              </div>
            </div>
            <p>
              I have never found a better pc maintenance or security program than Advanced Systems Care, since buying ASC I've never had issues with viruses, phishing, black screens or any other kind of bugaboo one could think of, best money I've ever spent when it comes to computers, thank you ASC for making my pc experience so much more enjoyable.
            </p>
          </li>
          <li>
            <div class="review-box clearfix">
              <div class="review-icon"><img src="<?php echo getStaticUrl('images/tony-fisher.png')?>" alt=""/></div>
              <div class="review-title">
                <h2>User Review</h2>
                <span>- Tony Fisher</span>
              </div>
            </div>
            <p>
              I have been using Advanced SystemCare Pro for a long time and this latest version 13 is even better than version 12. It can find and fix problems very quickly and has so many extra features you can use to keep your computer running well and stable. I cannot recommend it more highly.
            </p>
          </li>
          <li>
            <div class="review-box clearfix">
              <div class="review-icon"><img src="<?php echo getStaticUrl('images/daniel-sanders.png')?>" alt=""/></div>
              <div class="review-title">
                <h2>User Review</h2>
                <span>- Daniel Sanders</span>
              </div>
            </div>
            <p>
              The New ASC 13 is a must have for all PC users. Its clean and intuitive interface makes it easy to use for the novice as well as the advanced user. Many powerful tools included to keep your PC running at its peak performance. Kudos to you IObit for such a wonderful set of tools all in one place.
            </p>
          </li>
        </ul>
        <span class="next"></span>
      </div>
    </div>
  </div>
  <!-- review end -->

  <!-- feature start -->
  <div class="feature">
    <div class="wrapper">
      <div class="clearfix">
        <div class="feature-txt fl">
          <h2>Faster PC </h2>
          <p>
            Advanced SystemCare PRO performs an automatic maintenance to clean and optimize your computer when it becomes slow. 
          </p>
          <p>
            It provides 1-click solution for slow boot, low disk space, and slow system running and optimizes browser settings to accelerate the download, surfing, gaming, YouTube viewing. <a href="https://www.iobit.com/buy.php?product=asc3pcgl&ref=en-asc3pcgl<?php echo $refStr;?>&refs=purchase_asc" onclick="ga('send', 'event', 'asc3pcbuy', 'buy', 'ascpurchase-google');">Buy now & save 60%</a>
          </p>
          <ul class="feature-point">
            <li class="first">
              <h3>3GB</h3>
              <span>More Space</span>
            </li>
            <li>
              <h3>12%</h3>
              <span>More RAM</span>
            </li>
            <li>
              <h3>180%</h3>
              <span>Faster Startup</span>
            </li>
            <li class="last">
              <h3>330%</h3>
              <span>Faster Internet</span>
            </li>
          </ul>
          <p class="note">*.Data from our internal test lab. Your results may vary.</p>
        </div>
        <div class="feature-img fr">
          <div class="feature-box one">
            <ul>
              <li class="one">
                <span class="gray"><b id="oneb" class="one"><em>57</em>GB</b></span>
                <span class="orange"><b class="two"><em>60</em>GB</b></span>
              </li>
              <li class="two">
                <span class="gray"><b class="three"><em>57</em>%</b></span>
                <span class="orange"><b class="four"><em>69</em>%</b></span>
              </li>
              <li class="three">
                <span class="gray"><b class="five"><em>104</em>s</b></span>
                <span class="orange"><b class="six"><em>58</em>s</b></span>
              </li>
              <li class="four">
                <span class="gray"><b class="seven"><em>4.21</em>mb/s</b></span>
                <span class="orange"><b class="eight"><em>14.0</em>mb/s</b></span>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div id="two" class="two clearfix">
        <div class="feature-img fl">
          <div class="feature-box two">
            <img src="<?php echo getStaticUrl('images/feature-screen02.png')?>" alt="0"/>
            <img src="<?php echo getStaticUrl('images/feature-screen03.png')?>" alt="1"/>
          </div>
          <ul class="imglist"><li class="on">1</li><li>2</li></ul>
        </div>
        <div class="feature-txt fr">
          <h2>Safer PC</h2>
          <p>Advanced SystemCare PRO protects your computer against adware and spyware in real time.</p>
          <p>
            It automatically blocks malicious websites, ads, emails and cryptocurrency mining web pages and updates outdated programs with 1-click to cover the security holes in time and keep hackers out. <br><a href="https://www.iobit.com/buy.php?product=asc3pcgl&ref=en-asc3pcgl<?php echo $refStr;?>&refs=purchase_asc" onclick="ga('send', 'event', 'asc3pcbuy', 'buy', 'ascpurchase-google');">Buy now & save 60%</a>
          </p>
          <ul class="feature-point small">
            <li class="first on">
              <h3>3 <small>Ads</small></h3>
              <span>Blocked</span>
            </li>
            <li class="last">
              <h3>14 <small>Programs</small></h3>
              <span>1-click update</span>
            </li>
          </ul>
          <p class="note">*.Data from our internal test lab. Your results may vary.</p>
        </div>
      </div>
      <div id="three" class="three clearfix">
        <div class="feature-txt fl">
          <h2>Privacy Protection</h2>
          <p>Advanced SystemCare PRO enhances the protection for your sensitive data when you surf the Internet. </p>
          <p>
            It captures the intruders with FaceID and stops unauthorized accesses to your sensitive data like contact, e-mail data, Dropbox, OneDrive etc. Moreover, it auto clears browsing data and hides your trace to prevent trackers from snooping on what you read, view and purchase. <br><a href="https://www.iobit.com/buy.php?product=asc3pcgl&ref=en-asc3pcgl<?php echo $refStr;?>&refs=purchase_asc" onclick="ga('send', 'event', 'asc3pcbuy', 'buy', 'ascpurchase-google');">Buy now & save 60%</a>
          </p>
          <ul class="feature-point small">
            <li class="first on">
              <h3>619 <small>Traces</small></h3>
              <span>Removed</span>
            </li>
            <li>
              <h3>11 <small>Intruders</small></h3>
              <span>Detected</span>
            </li>
            <li class="last">
              <h3>55 <small>Accesses</small></h3>
              <span>Blocked</span>
            </li>
          </ul>
          <p class="note">*.Data from our internal test lab. Your results may vary.</p>
        </div>
        <div class="feature-img fr">
          <div class="feature-box three">
            <img src="<?php echo getStaticUrl('images/feature-screen04.png')?>" alt="0"/>
            <img src="<?php echo getStaticUrl('images/feature-screen05.png')?>" alt="1"/>
            <img src="<?php echo getStaticUrl('images/feature-screen06.png')?>" alt="2"/>
          </div>
          <ul class="imglist"><li class="on">1</li><li>2</li><li>3</li></ul>
        </div>
      </div>
    </div>
  </div>
  <!-- feature end -->

  <!-- choose start -->
  <div class="choose">
    <div class="wrapper">
      <h2>Choose your plan</h2>
      <p>60-day Money-back Guarantee</p>
      <div class="clearfix">
        <div class="offer">
          <h2>1 Year / 1 PC</h2>
          <div class="price">
            <strong><sup>$</sup><big>16</big>.77</strong>
            <p><del>$29.99</del></p>
            <p class="save">Save 44%</p>
            <a class="buybtn gray"
               href="https://www.iobit.com/buy.php?product=asc1pcgl&ref=en-asc1pcgl<?php echo $refStr;?>&refs=purchase_asc"
               onclick="ga('send', 'event', 'asc1pcbuy', 'buy', 'ascpurchase-google');">
              Get It Now
            </a>
          </div>
        </div>
        <div class="offer white">
          <h2>1 Year / 3 PCs</h2>
          <div class="price">
            <strong><sup>$</sup><big>19</big>.99</strong>
            <p><del>$49.99</del></p>
            <p class="save">Save 60%</p>
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=asc3pcgl&ref=en-asc3pcgl<?php echo $refStr;?>&refs=purchase_asc"
               onclick="ga('send', 'event', 'asc3pcbuy', 'buy', 'ascpurchase-google');">
              Get It Now 
            </a>
          </div>
        </div>
        <div class="offer">
          <h2>1 Year / 5 PCs</h2>
          <div class="price">
            <strong><sup>$</sup><big>29</big>.99</strong>
            <p><del>$59.99</del></p>
            <p class="save">Save 50%</p>
            <a class="buybtn gray"
               href="https://www.iobit.com/buy.php?product=asc5pcgl&ref=en-asc5pcgl<?php echo $refStr;?>&refs=purchase_asc"
               onclick="ga('send', 'event', 'asc5pcbuy', 'buy', 'ascpurchase-google');">
              Get It Now
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- choose end -->

  <!-- footer start -->
  <div class="footer">Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</div>
  <!-- footer end -->

  <script>
    packsNum='<?php echo $packsNum;?>';
    refStr="<?php echo $refStr;?>";
  </script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>