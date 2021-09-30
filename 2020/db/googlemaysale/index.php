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
    $c_name = 'endbgooglemaysale_p' . $date;
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
<title>Up to 69% OFF on Driver Booster PRO - IObit</title>
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
      <h1>Driver Booster 7</h1>
      <ul class="banlist">
        <li>3,500,000+ Drivers Update</li>
        <li>1-click Fixing</li>
        <li>Better Gaming</li>
      </ul>
      <b class="saveall">Save 69%</b>
      <div class="clearfix">
        <div class="offer">
          <h2>1 Year / 1 PC</h2>
          <div class="price">
            <strong><sup>$</sup><big>19</big>.95</strong>
            <p><del>$39.95</del></p>
            <p class="save">Save 50%</p>
            <a class="buybtn gray"
               href="https://www.iobit.com/buy.php?product=db1pcgl&ref=en-db1pcgl<?php echo $refStr;?>&refs=purchase_db"
               onclick="ga('send', 'event', 'db1pcbuy', 'buy', 'dbpurchase-google');">
              Get It Now
            </a>
          </div>
        </div>
        <div class="offer white">
          <h2>1 Year / 3 PCs</h2>
          <div class="price">
            <strong><sup>$</sup><big>22</big>.95</strong>
            <p><del>$74.85</del></p>
            <p class="save">Save 69%</p>
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=db3pcgl&ref=en-db3pcgl<?php echo $refStr;?>&refs=purchase_db"
               onclick="ga('send', 'event', 'db3pcbuy', 'buy', 'dbpurchase-google');">
              Get It Now 
            </a>
          </div>
        </div>
        <div class="offer">
          <h2>1 Year / 5 PCs</h2>
          <div class="price">
            <strong><sup>$</sup><big>39</big>.99</strong>
            <p><del>$99.95</del></p>
            <p class="save">Save 60%</p>
            <a class="buybtn gray"
               href="https://www.iobit.com/buy.php?product=db5pcgl&ref=en-db5pcgl<?php echo $refStr;?>&refs=purchase_db"
               onclick="ga('send', 'event', 'db5pcbuy', 'buy', 'dbpurchase-google');">
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
          Driver Booster PRO is the best seller of IObit which has been working on developing innovative system utilities and security software during past 16 years. 
        </p>
        <p>
          It helps you updating all missing, faulty and outdated drivers for less freezing & crashing, faster PC running and better gaming. <a href="https://www.iobit.com/buy.php?product=db3pcgl&ref=en-db3pcgl<?php echo $refStr;?>&refs=purchase_db" onclick="ga('send', 'event', 'db3pcbuy', 'buy', 'dbpurchase-google');">Buy now & save 69%</a>
        </p>
        <ul class="review-point">
          <li class="first">
            <span>Media Recommendations</span>
            <b>1000+</b>
          </li>
          <li>
            <span>Downloads</span>
            <b>40+ million</b>
          </li>
          <li>
            <span>User<br> Rating</span>
            <b>4.7</b>
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
              <div class="review-icon"><img src="<?php echo getStaticUrl('images/pc-magazine.png')?>" alt=""/></div>
              <div class="review-title">
                <h2>Media Review</h2>
                <span>- PC Magazine</span>
              </div>
            </div>
            <p>
              Driver Booster PRO's simple core functionality is made even more attractive thanks to the inclusion of multiple licenses at a very wallet-friendly price, as well as a customizable interface that does a good job of displaying specific hardware-related information. Competitors Ashampoo Driver Updater and SlimWare Utilities DriverUpdate offer compelling features, but IObit Driver Booster PRO leads the pack. 
            </p>
          </li>
          <li>
            <div class="review-box clearfix">
              <div class="review-icon"><img src="<?php echo getStaticUrl('images/thinkmobiles.png')?>" alt=""/></div>
              <div class="review-title">
                <h2>Media Review</h2>
                <span>- thinkmobiles.com</span>
              </div>
            </div>
            <p>
              Driver Booster searches and updates drivers for Windows OS from an extensive library including drivers for a wide range of hardware. The only action you need is to click and it will install the selected ones on your command.
            </p>
          </li>
          <li>
            <div class="review-box clearfix">
              <div class="review-icon"><img src="<?php echo getStaticUrl('images/ldplayer-net.png')?>" alt=""/></div>
              <div class="review-title">
                <h2>Media Review</h2>
                <span>- ldplayer.net</span>
              </div>
            </div>
            <p>
              IObit Driver Booster is really a great helper that can update all your drivers for Windows OS just in one click. For our emulator users, Driver Booster scans and updates their graphics drivers in an easy way so as to boost the PC gaming performance. IObit Driver Booster is highly recommended.
            </p>
          </li>
          <li>
            <div class="review-box clearfix">
              <div class="review-icon"><img src="<?php echo getStaticUrl('images/carlos-alexandre.png')?>" alt=""/></div>
              <div class="review-title">
                <h2>User Review</h2>
                <span>- Carlos Alexandre Veríssimo</span>
              </div>
            </div>
            <p>
              It helped solve slowliness problems with my laptop gamer without crashing it. Sometimes when I tried updating my drivers the computer crashed and I had to format my computer in order to restore functions and now it doesn’t happen with DB7. Easy to use and fast downloads it is the best tool in the Market until now!
            </p>
          </li>
          <li>
            <div class="review-box clearfix">
              <div class="review-icon"><img src="<?php echo getStaticUrl('images/dunston-diaz.png')?>" alt=""/></div>
              <div class="review-title">
                <h2>User Review</h2>
                <span>- Dunston Diaz</span>
              </div>
            </div>
            <p>
              First, I must say its a very light and easy to use handy software. driver booster runs in the background and won't strain the CPU and RAM, i was able to play new game titles without having to shutdown any background process. I usually run windows updates daily to get the latest drivers and driver booster updated and fixed my PC drivers extremely accurately even better than windows update did. I'm really impressed with the software and would highly recommend it as a product.
            </p>
          </li>
          <li>
            <div class="review-box clearfix">
              <div class="review-icon"><img src="<?php echo getStaticUrl('images/hishaam-salasa.png')?>" alt=""/></div>
              <div class="review-title">
                <h2>User Review</h2>
                <span>- Hishaam Salasa</span>
              </div>
            </div>
            <p>
              Truly the best driver updater on the market. It's user friendly, has a simple and easy to use interface and does its job better than any application I've used. This program is worth a 5 start rating. Highly recommended.
            </p>
          </li>
          <li>
            <div class="review-box clearfix">
              <div class="review-icon"><img src="<?php echo getStaticUrl('images/harold-barr.png')?>" alt=""/></div>
              <div class="review-title">
                <h2>User Review</h2>
                <span>- Harold Barr</span>
              </div>
            </div>
            <p>
              What a surprise to receive the new Driver Booster from IObit. Once installed and its update began, I hadn't known that half of the programs on my PC were there let alone needed an upgrade. Once upgrading was complete it was as if my PC had a complete makeover. Sensational!
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
      <div id="three" class="three clearfix">
        <div class="feature-txt fl">
          <h2>1-click and safe update</h2>
          <p>
            Driver Booster PRO offers 1-click solution for detecting and updating drivers which are intact and have passed the Microsoft WHQL tests. 
          </p>
          <p>
            With scan schedules and auto update, Driver Booster PRO makes driver updating easier and time saving. Moreover, there is no risk of updating drivers with Driver Booster PRO for it will auto back up and create system restore point before updating. <a href="https://www.iobit.com/buy.php?product=db3pcgl&ref=en-db3pcgl<?php echo $refStr;?>&refs=purchase_db" onclick="ga('send', 'event', 'db3pcbuy', 'buy', 'dbpurchase-google');">Buy now & save 69%</a>
          </p>
          <ul class="feature-point small">
            <li class="first on">
              <h3><i class="all-icons">1、</i></h3>
              <span>Database of 3,500,000 Drivers</span>
            </li>
            <li>
              <h3><i class="all-icons two">2、</i></h3>
              <span>Microsoft<br> WHQL Certified </span>
            </li>
            <li>
              <h3><i class="all-icons three">3、</i></h3>
              <span>Auto<br> Update </span>
            </li>
            <li class="last">
              <h3><i class="all-icons four">4、</i></h3>
              <span>Restore<br> Point</span>
            </li>
          </ul>
        </div>
        <div class="feature-img fr">
          <div class="feature-box three">
            <img src="<?php echo getStaticUrl('images/feature-screen04.png')?>" alt="0"/>
            <img src="<?php echo getStaticUrl('images/feature-screen05.png')?>" alt="1"/>
            <img src="<?php echo getStaticUrl('images/feature-screen06.png')?>" alt="2"/>
            <img src="<?php echo getStaticUrl('images/feature-screen07.png')?>" alt="3"/>
          </div>
          <ul class="imglist"><li class="on">1</li><li>2</li><li>3</li><li>4</li></ul>
        </div>
      </div>
      <div id="two" class="two clearfix">
        <div class="feature-img fl">
          <div class="feature-box two">
            <img src="<?php echo getStaticUrl('images/feature-screen02.png')?>" alt="0"/>
            <img src="<?php echo getStaticUrl('images/feature-screen03.png')?>" alt="1"/>
            <img src="<?php echo getStaticUrl('images/feature-screen08.png')?>" alt="2"/>
            <img src="<?php echo getStaticUrl('images/feature-screen09.png')?>" alt="3"/>
          </div>
          <ul class="imglist"><li class="on">1</li><li>2</li><li>3</li><li>4</li></ul>
        </div>
        <div class="feature-txt fr">
          <h2>Fix hardware problems</h2>
          <p>Driver Booster PRO provides you 1-clcik solution for fixing the following problems. </p>
          <p>
            Webcam results in poor image or video quality. Computer refuses to play sound or makes unclear or stuttering sound. Internet is dropped out for a few seconds. Printer, mouse and external devices are not working. <a href="https://www.iobit.com/buy.php?product=db3pcgl&ref=en-db3pcgl<?php echo $refStr;?>&refs=purchase_db" onclick="ga('send', 'event', 'db3pcbuy', 'buy', 'dbpurchase-google');">Buy now & save 69%</a>
          </p>
          <ul class="feature-point small">
            <li class="first on">
              <h3><i class="all-icons five">1、</i></h3>
              <span>No Sound</span>
            </li>
            <li>
              <h3><i class="all-icons six">2、</i></h3>
              <span>Webcam Issues </span>
            </li>
            <li>
              <h3><i class="all-icons seven">3、</i></h3>
              <span>Disconnecting Internet</span>
            </li>
            <li class="last">
              <h3><i class="all-icons eight">4、</i></h3>
              <span>Device Errors</span>
            </li>
          </ul>
        </div>
      </div>
      <div id="one" class="clearfix">
        <div class="feature-txt fl">
          <h2>Better gaming</h2>
          <p>
            Driver Booster gives you a better gaming experience by providing the latest game-ready drivers and components. 
          </p>
          <p>
            It checks for the latest game related drivers and components in real-time to help reduce computer lags or screen tears and give you smoother gaming and new game features. With Silent Mode, it stops disturbing and allows you to focus more on gaming. <a href="https://www.iobit.com/buy.php?product=db3pcgl&ref=en-db3pcgl<?php echo $refStr;?>&refs=purchase_db" onclick="ga('send', 'event', 'db3pcbuy', 'buy', 'dbpurchase-google');">Buy now & save 69%</a>
          </p>
          <ul class="feature-point">
            <li class="first">
              <h3><i class="all-icons night">1、</i></h3>
              <span>90% PC Games</span>
            </li>
            <li>
              <h3><i class="all-icons ten">2、</i></h3>
              <span>Game Boost</span>
            </li>
            <li class="last">
              <h3><i class="all-icons eleven">3、</i></h3>
              <span>Silent Mode</span>
            </li>
          </ul>
        </div>
        <div class="feature-img fr">
          <div class="feature-box one"></div>
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
            <strong><sup>$</sup><big>19</big>.95</strong>
            <p><del>$39.95</del></p>
            <p class="save">Save 50%</p>
            <a class="buybtn gray"
               href="https://www.iobit.com/buy.php?product=db1pcgl&ref=en-db1pcgl<?php echo $refStr;?>&refs=purchase_db"
               onclick="ga('send', 'event', 'db1pcbuy', 'buy', 'dbpurchase-google');">
              Get It Now
            </a>
          </div>
        </div>
        <div class="offer white">
          <h2>1 Year / 3 PCs</h2>
          <div class="price">
            <strong><sup>$</sup><big>22</big>.95</strong>
            <p><del>$74.85</del></p>
            <p class="save">Save 69%</p>
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=db3pcgl&ref=en-db3pcgl<?php echo $refStr;?>&refs=purchase_db"
               onclick="ga('send', 'event', 'db3pcbuy', 'buy', 'dbpurchase-google');">
              Get It Now 
            </a>
          </div>
        </div>
        <div class="offer">
          <h2>1 Year / 5 PCs</h2>
          <div class="price">
            <strong><sup>$</sup><big>39</big>.99</strong>
            <p><del>$99.95</del></p>
            <p class="save">Save 60%</p>
            <a class="buybtn gray"
               href="https://www.iobit.com/buy.php?product=db5pcgl&ref=en-db5pcgl<?php echo $refStr;?>&refs=purchase_db"
               onclick="ga('send', 'event', 'db5pcbuy', 'buy', 'dbpurchase-google');">
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