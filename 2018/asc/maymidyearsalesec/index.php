<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';
$viewNum=rand(70,150);
if ($_GET['action'] == 'getPacks') {
  $timeNow=($_GET['timeNow']);
  $timeTo=($_GET['timeTo']);
  $packsNum=ceil((($timeTo-$timeNow)/1000)/5);
  echo json_encode(array('packsNum'=>$packsNum,'viewNum'=>$viewNum));
  exit();
}

if($_GET['action']=='viewCount'){
  try{
    $dsn="mysql:host=mariadb-071.wc2.dfw3.stabletransit.com;dbname=1015490_pricssw";
    $pdo=new PDO($dsn,'1015490_pricssw','7CcjUGsxLN82');
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $pdo->query("set names utf8");

    $insertSql="insert into enascmdcount (ip,addtime,timezone,statusCode,buttonClick) VALUES (:ip,:addtime,:timezone,:statusCode,:buttonClick)";
    $pre=$pdo->prepare($insertSql);
    $clientIP=empty($_GET['ip'])?getIP():$_GET['ip'];
    $timezone=empty($_GET['timezone'])?13:intval($_GET['timezone']);
    $addTime=time();
    $statusCode=$_GET['statusCode'];
    $buttonClick=$_GET['buttonClick'];

    $pre->bindParam(':ip',$clientIP);
    $pre->bindParam(':timezone',$timezone);
    $pre->bindParam(':addtime',$addTime);
    $pre->bindParam('statusCode',$statusCode);
    $pre->bindParam(':buttonClick',$buttonClick);
    $pre->execute();
  }catch(PDOException $e){
  }
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Save Up to 75% OFF on Advanced SystemCare PRO</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Montserrat:500,600,800i'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

  <div class="main">
    <!-- banner start -->
    <div class="banner">
      <div class="wrapper">
        <a class="logo" href="http://www.iobit.com" target="_blank">
          <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit" />
        </a>
        <h1>Mid-Year Special Offer</h1>
        <p class="subtitle"></p>
        <div class="countbox">
          <h4>Ends in:</h4>
          <ul id="banCountdown" class="countdown clearfix">
            <li><strong>09</strong>m:</li>
            <li><strong>59</strong>s:</li>
            <li class="last"><strong>123</strong>ms</li>
          </ul>
        </div>
        <div class="offer" data-num="1">
          <div class="left fl">
            <div class="top">
              <h2>Advanced SystemCare 11 PRO</h2>
              <b class="sign">Personal</b>
              <div class="price">
                <h4>Special Price</h4>
                <h5><strong><small>$</small>15.99</strong>/ year</h5>
              </div>
              <del>$29.99</del>
              <p>1 PC, $15.99 per PC <b>SAVE 45%</b></p>
            </div>
            <a class="buybtn" href="https://www.iobit.com/buy.php?product=asc111pc1599&ref=asc1pc1599midyear&aff=<?php echo $_GET['aff']; ?>&refs=purchase_asc" onclick="ga('send', 'event', 'asc1pcbuy', 'buy', 'ascpurchase-201805c');">
              <i class="all-icons"></i>
              <span>Activate Now</span>
            </a>
          </div>
          <div class="right fr">
            <div class="top">
              <h2>Advanced SystemCare 11 PRO</h2>
              <b class="sign">Home</b>
              <div class="price">
                <h4>Special Price</h4>
                <h5><strong><small>$</small>16.77</strong>/ year</h5>
              </div>
              <del>$89.97</del>
              <p>3 PCs, $5.59 per PC <b>SAVE 85%</b></p>
            </div>
            <a class="buybtn" href="https://www.iobit.com/buy.php?product=asc113pcs1677&ref=asc3pc1677midyear&aff=<?php echo $_GET['aff']; ?>&refs=purchase_asc" onclick="ga('send', 'event', 'asc3pcbuy', 'buy', 'ascpurchase-201805c');">
              <i class="all-icons"></i>
              <span>Activate Now</span>
            </a>
          </div>
        </div>
        <div class="payments"><img src="<?php echo getStaticUrl('images/payments.png')?>" alt=""/></div>
      </div>
    </div>
    <!-- banner end -->

    <!-- feature start -->
    <div class="feature">
      <div class="wrapper clearfix">
        <div class="item one">
          <h2>Activate Now to Enjoy FREE cleaning plus PRO benefits:</h2>
        </div>
        <div class="item">
          <div class="imgbox"><img src="<?php echo getStaticUrl('images/feature-01.png')?>" alt=""/></div>
          <h3>Real-time Protector</h3>
          <p>Prevent spyware, adware, and Trojans  in real time.</p>
        </div>
        <div class="item three">
          <div class="imgbox"><img src="<?php echo getStaticUrl('images/feature-02.png')?>" alt=""/></div>
          <h3>Deep Registry Clean</h3>
          <p>Reduce Windows crashes and errors and improve stability.</p>
        </div>
        <div class="item one">
          <div class="imgbox"><img src="<?php echo getStaticUrl('images/feature-03.png')?>" alt=""/></div>
          <h3>Auto RAM Clean</h3>
          <p>Speed up computer up to 200% faster. </p>
        </div>
        <div class="item">
          <div class="imgbox"><img src="<?php echo getStaticUrl('images/feature-04.png')?>" alt=""/></div>
          <h3>Ultimate Tuneup</h3>
          <p>Accelerate Internet speed up to 300% faster. </p>
        </div>
        <div class="item three">
          <div class="imgbox"><img src="<?php echo getStaticUrl('images/feature-05.png')?>" alt=""/></div>
          <h3>Automatic Updater</h3>
          <p>Always keep your essential programs up-to-date.</p>
        </div>
      </div>
    </div>
    <!-- feature end -->

    <!-- comparison start -->
    <div class="comparison" id="compare">
      <div class="wrapper">
        <table border="0" cellspacing="0" cellpadding="0" width="100%">
          <thead>
            <tr>
              <th class="itema">
                <h4>Advanced SystemCare 11 FREE</h4>
                <p>Your Current Version</p>
              </th>
              <th class="itemb">Learn more about PRO edition</th>
              <th class="itemc">
                <h4>Advanced SystemCare 11 PRO</h4>
                <p>1 Year / 3 PCs</p>
              </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="itema"><i class="all-icons">√</i></td>
              <td class="itemb">Basic system clean, fix and optimization</td>
              <td class="itemc"><i class="all-icons orange">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons blue">×</i></td>
              <td class="itemb">Prevent spyware and malware in real time</td>
              <td class="itemc"><i class="all-icons orange">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons blue">×</i></td>
              <td class="itemb">Reduce and repair system crashes and errors</td>
              <td class="itemc"><i class="all-icons orange">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons blue">×</i></td>
              <td class="itemb">Speed up computer up to 200% faster</td>
              <td class="itemc"><i class="all-icons orange">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons blue">×</i></td>
              <td class="itemb">Accelerate Internet speed up to 300% faster</td>
              <td class="itemc"><i class="all-icons orange">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons blue">×</i></td>
              <td class="itemb">Auto keep essential programs up-to-date</td>
              <td class="itemc"><i class="all-icons orange">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons blue">×</i></td>
              <td class="itemb">Auto remove privacy traces for safe browsing</td>
              <td class="itemc"><i class="all-icons orange">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons blue">×</i></td>
              <td class="itemb">Auto update to the latest version</td>
              <td class="itemc"><i class="all-icons orange">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons blue">×</i></td>
              <td class="itemb">Free 24/7 technical support on demand</td>
              <td class="itemc"><i class="all-icons orange">√</i></td>
            </tr>
          </tbody>
          <tfoot>
            <tr>
              <th class="itema"></th>
              <th class="itemb"></th>
              <th class="itemc">
                <div class="price"><del>$89.97</del> <strong>Special Price <big>$16.77</big></strong></div>
                <a class="buybtn" href="https://www.iobit.com/buy.php?product=asc113pcs1677&ref=asc3pc1677midyear&aff=<?php echo $_GET['aff']; ?>&refs=purchase_asc" onclick="ga('send', 'event', 'asc3pcbuy', 'buy', 'ascpurchase-201805c');">
                  <i class="all-icons"></i>
                  <span>Activate Now</span>
                </a>
                <div class="countbox">
                  <h4>Offer Ends: </h4>
                  <ul id="tabCountdown" class="countdown clearfix">
                    <li><strong>09</strong>m:</li>
                    <li><strong>59</strong>s:</li>
                    <li class="last"><strong>123</strong>ms</li>
                  </ul>
                </div>
              </th>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
    <!-- comparison end -->

    <!-- giveaway end -->
    <div class="wrapper">
      <div class="giveaway _hide">
        <h2><b>Free Gift Pack</b> <small>($59.97 Value)</small> Includes</h2>
        <ul class="clearfix">
          <li>
            <img src="<?php echo getStaticUrl('images/sd.png')?>" alt=""/>
            <h3>Smart Defrag PRO</h3>
            <h4><strong>$0</strong> <del>$19.99</del>  1 Year / 1 PC</h4>
            <p>Max Hard Drive Optimization for <b>Faster PC</b></p>
          </li>
          <li>
            <img src="<?php echo getStaticUrl('images/iu.png')?>" alt=""/>
            <h3>IObit Uninstaller PRO</h3>
            <h4><strong>$0</strong> <del>$19.99</del>  1 Year / 1 PC</h4>
            <p>Uninstall Unwanted Plug-ins for <b>Cleaner PC & Browsing</b></p>
          </li>
          <li class="last">
            <img src="<?php echo getStaticUrl('images/amc.png')?>" alt=""/>
            <h3>AMC Security PRO</h3>
            <h4><strong>$0</strong> <del>$19.99</del> 1 Year / Multi Devices</h4>
            <p>All-in-One Protector and Booster for <b>Android Device</b></p>
          </li>
        </ul>
        <a class="buybtn" 
           href="https://www.iobit.com/buy.php?product=asc11sdiuamc2198&ref=ascsdiuamc2198midyear&aff=<?php echo $_GET['aff']; ?>&refs=purchase_asc"
           onclick="ga('send', 'event', 'asc3pcbuy', 'buy', 'ascpurchase-201805a');">
          Get My Free Gifts 
        </a>
      </div>
    </div>
    <!-- giveaway end -->

    <!-- review start -->
    <div class="review">
      <div class="wrapper">
        <div class="content">
          <dl>
            <dt><h2>User Review</h2></dt>
            <dd>
              <h3>"Not only is it a great product, but the support is equally great"</h3>
              <p>
                "I like many started off with the free version and eventually purchased the full version. It's been working to keep my computer clean and "bug" free for years now and it hasn't let me down yet. I contacted Advanced System Care recently and they responded within a day or two with all I needed to know. In my mind support is huge in the decision to stay with a product and ASC wins in both product and support."
              </p>
            </dd>
          </dl>
          <dl>
            <dt><h2>User Review</h2></dt>
            <dd>
              <h3>"Cleaned up Spyware and Malware My antivirus lets slip through"</h3>
              <p>
                "We used to use up to a dozen different programs to keep our machines running smoothly and keep the bad guys out. It took hours every week to maintain security and performance. Now, with Advanced System Care Pro, everything is in one place and it takes us just a few minutes every couple of days to do the same jobs with much more confidence"
              </p>
            </dd>
          </dl>
          <dl class="active">
            <dt><h2>Media Review</h2></dt>
            <dd>
              <h3>"A PC optimization tool that wipes out security threats and helps stop new ones in their tracks."</h3>
              <p>IObit Avanced SystemCare is one of our favorite PC cleanup and maintenance tools, and the latest version builds on an already great toolkit with new security-focused options.</p>
            </dd>
          </dl>
          <dl>
            <dt><h2>User Review</h2></dt>
            <dd>
              <h3>"My choice is still overwhelmingly Advanced SystemCare Pro"</h3>
              <p>
                "As a computer repair tech I find by downloading and scanning with ASC free most common problems are resolved. When finished with a repair I usually suggest the client purchase the Pro package. Who needs a tech when you have the power of Advanced System Care Pro working your system 24-7? This is the best product a home user can buy. Thank you for making my job easier."
              </p>
            </dd>
          </dl>
          <dl>
            <dt><h2>User Review</h2></dt>
            <dd>
              <h3>"My system has never run better."</h3>
              <p>
                "In my opinion, IObit's ASC Pro is the best maintenance application available for the Windows user, providing excellent value and function in both its shareware and freeware versions. IObit provides expert technical support that is competent, knowledgeable and responsive, adding significant value to their products and services for their customers."
              </p>
            </dd>
          </dl>
        </div>
        <ul class="users clearfix">
          <li>
            <div class="pic"><img src="<?php echo $pResUrl; ?>images/bruce-ramsay.png" alt="Bruce Ramsay">
            </div>
            <p>Bruce Ramsay</p>
          </li>
          <li>
            <div class="pic"><img src="<?php echo $pResUrl; ?>images/bob-bassett.png" alt="Bob Bassett"></div>
            <p>Bob Bassett</p>
          </li>
          <li class="active">
            <div class="pic"><img src="<?php echo $pResUrl; ?>images/techradar.png" alt="Techradar"></div>
            <p>Techradar</p>
          </li>
          <li>
            <div class="pic"><img src="<?php echo $pResUrl; ?>images/charles-r-widick.png" alt="Charles R. Widick">
            </div>
            <p>Charles R. Widick</p>
          </li>
          <li>
            <div class="pic"><img src="<?php echo $pResUrl; ?>images/gordon-griswold.png" alt="Gordon Griswold">
            </div>
            <p>Gordon Griswold</p>
          </li>
        </ul>
      </div>
    </div>
    <!-- review end -->

    <!-- bottom start -->
    <div class="awards">
      <div class="wrapper">
        <h2>World-wide Awards</h2>
        <h4>As being trusted and awarded by those world-class media in the past ten years, you know you’ve got the right PC optimizer.</h4>
        <div class="imgbox">
          <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
        </div>
      </div>
    </div>
    <div class="service">
      <div class="wrapper clearfix">
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
          <dd>
            <h3>Money Back Guarantee</h3>
            <p>If you're not satisfied in the first 60 days, we will give you back your money.</p>
          </dd>
        </dl>
        <dl class="center">
          <dt><img src="<?php echo getStaticUrl('images/godaddy-secure.png')?>" alt=""/></dt>
          <dd>
            <h3>Secure Payment</h3>
            <p>IObit supports several safe modes of payment.</p>
          </dd>
        </dl>
        <dl class="last">
          <dt><img src="<?php echo getStaticUrl('images/car.png')?>" alt=""/></dt>
          <dd>
            <h3>Get License</h3>
            <p>You will receive the license within a few minutes after purchase.</p>
          </dd>
        </dl>
      </div>
    </div>
    <!-- bottom end -->
    <div class="annotation _hide">
      <div class="wrapper">
        <p>Note:</p>
        <p>*.License for AMC Security Full Version with in-app ads.</p>
      </div>
    </div>

    <!-- footer start -->
    <div class="footer">Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</div>
    <!-- footer end -->

    <!-- backtotop start -->
    <div class="backtotop" id="backtotop">top</div>
    <!-- backtotop end -->

    <!-- floatlayer start -->
    <div class="floatbox">
      <div class="floatlayer" id="floatlayer">
        <h4>Ends in:</h4>
        <ul id="floatCountdown" class="countdown">
          <li><strong>09</strong>m:</li>
          <li><strong>59</strong>s:</li>
          <li class="last"><strong>123</strong>ms</li>
        </ul>
      </div>
    </div>
    <!-- floatlayer end -->

    <!-- bottomlayer start -->
    <div id="bottomlayer" class="bottomlayer">
      <div class="wrapper">
        <div class="left fl">
          <div class="imgbox fl">
            <img src="<?php echo getStaticUrl('images/bottom-gift.png')?>" alt=""/>
            <div class="reducebox"></div>
          </div>
          <div class="content fl">
            <div class="notice">
              <b>Hurry, Only <span id="packbox" class="packbox"></span> Free Gift Packs Left!</b> <span class="viewNum"><?php echo $viewNum?></span> people are viewing this page now.
            </div>
            <div class="progress"><div class="progressbar"></div></div>
          </div>
        </div>
        <div class="right fr">
          <a class="buybtn" 
             href="https://www.iobit.com/buy.php?product=asc11sdiuamc2198&ref=ascsdiuamc2198midyearpop&aff=<?php echo $_GET['aff']; ?>&refs=purchase_asc"
             onclick="ga('send', 'event', 'asc3pcpopbuy', 'buy', 'ascpurchase-201805a');">
            Get My Free Gifts 
          </a>
        </div>
      </div>
    </div>
    <!-- bottomlayer end -->
  </div>

<script>
  var popgift = "<?php echo getStaticUrl('images/pop-gift.png')?>";
  var awardspurple = "<?php echo getStaticUrl('images/awards.png')?>";
  var awardsbalck = "<?php echo getStaticUrl('images/awards-black.png')?>";
  var cart = "<?php echo getStaticUrl('images/car.png')?>";
  var cartpurple = "<?php echo getStaticUrl('images/car-purple.png')?>";
</script>
<script src="http://codes.iobit.com/js/TweenMax.min.js"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>