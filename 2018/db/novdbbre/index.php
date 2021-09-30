<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';

if(!empty($_GET['action'])&&($_GET['action']=='getSales')){
  $date=$_GET['d'];
  $cName='dbprepa'.$date;
  $cookie=$_COOKIE[$cName];
  if($cookie!==null){
    $packsNum=$_COOKIE[$cName];
    if($packsNum>=0){
      $packsNum--;
      setcookie($cName,$packsNum);
    }else{
      $packsNum=0;
    }
  }else{
    $packsNum=50;
    setcookie($cName,$packsNum);
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

$viewNum=rand(60,88);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}
$refStr=(empty($_GET['ref'])?'':('-'.$_GET['ref'])).(empty($_GET['st'])?'':('-'.$_GET['st']));
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>77% OFF to Get Driver Booster PRO- Black Friday Sale | IObit</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Montserrat:400,600,700'>
<link href="<?php echo getStaticUrl('style/style.min.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>
<body>

  <div class="main">
    <!-- banner start -->
    <div class="banner">
      <div class="wrapper">
        <a class="logo" href="https://www.iobit.com" target="_blank">
          <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
        </a>
        <h4>Your registered Driver Booster Pro has expired!</h4>
        <h1>Welcome Back and We Miss You</h1>
        <div class="palen clearfix">
          <div class="left fl">
            <img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="Driver Booster PRO"/>
            <div class="balloon"><img src="<?php echo getStaticUrl('images/balloon.png')?>" alt=""/></div>
          </div>
          <div class="right fr">
            <h2>77% OFF BLACK FRIDAY Sale</h2>
            <p>Exclusive for our gold member</p>
            <div class="price">
              <div class="count">
                <ul class="clearfix">
                  <li class="fl"><span class="surplusGift viewNum"><?php echo $viewNum;?></span> watching, <b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b> seats left now!</li>
                  <li id="bandown" class="countdown fr">Hurry! <b>05</b>M:<b>00</b>S:<b class="last">00</b>Ms* Left</li>
                </ul>
                <div class="progressbar">
                  <span></span>
                </div>
              </div>
              <p><strong>$<big>16</big>.95</strong> <del>$74.85</del></p>
              <a class="buybtn" href="https://www.iobit.com/buy.php?product=db63pc1695&ref=br_dbe&refs=purchase_dbbf" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase-bf');">
                Renew Now
              </a>
              <p class="year">1 Year Subscription / 3 PCs</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- banner end -->

    <!-- feature start -->
    <div class="feature">
      <div class="wrapper">
        <p>Since Being with You, </p>
        <h2 class="btitle">What Did Driver Booster PRO Do for You</h2>
        <div class="panel clearfix">
          <div class="screen fl">
            <img src="<?php echo getStaticUrl('images/screen.png')?>" alt="Driver Booster PRO"/>
          </div>
          <div class="fr">
            <dl class="clearfix">
              <dt><img src="<?php echo getStaticUrl('images/feature-01.png')?>" alt=""/></dt>
              <dd>
                <h3>Reduce freezes & crashes</h3>
                <p>
                  Auto check all your drivers and match the right ones to reduce computer crashes and improve system stability.
                </p>
              </dd>
            </dl>
            <dl class="clearfix">
              <dt><img src="<?php echo getStaticUrl('images/feature-02.png')?>" alt=""/></dt>
              <dd>
                <h3>Speed up driver update</h3>
                <p>
                  Pre-download your drivers to save update time and reduce computer stutter/lag during update.
                </p>
              </dd>
            </dl>
            <dl class="clearfix">
              <dt><img src="<?php echo getStaticUrl('images/feature-03.png')?>" alt=""/></dt>
              <dd>
                <h3>Solve sound & Internet issues</h3>
                <p>
                  Fix device errors to reduce problems and conflicts with your printer, screen, internet, mouse and external devices.
                </p>
              </dd>
            </dl>
          </div>
        </div>
      </div>
    </div>
    <!-- feature end -->

    <!-- comparison start -->
    <div class="comparison" id="compare">
      <div class="wrapper">
        <h2 class="btitle">Without Driver Booster PRO,</h2>
        <p>What Will You Lose</p>
        <table border="0" cellspacing="0" cellpadding="0" width="100%">
          <thead>
            <tr>
              <th class="itema">Before</th>
              <th class="itemb"></th>
              <th class="itemc">Now</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="itema">3,000,000+</td>
              <td class="itemb">Driver database</td>
              <td class="itemc">2,500,000+</td>
            </tr>
            <tr>
              <td class="itema">Unlimited</td>
              <td class="itemb">Driver download speed</td>
              <td class="itemc">Limited</td>
            </tr>
            <tr>
              <td class="itema">
                <i class="all-icons green">√</i>
                <span>Available</span>
              </td>
              <td class="itemb">Auto update outdated drivers</td>
              <td class="itemc">
                <i class="all-icons red">×</i>
                <span>Unavailable</span>
              </td>
            </tr>
            <tr>
              <td class="itema">
                <i class="all-icons green">√</i>
                <span>Available</span>
              </td>
              <td class="itemb">Auto back up drivers against accidents</td>
              <td class="itemc">
                <i class="all-icons red">×</i>
                <span>Unavailable</span>
              </td>
            </tr>
            <tr>
              <td class="itema">
                <i class="all-icons green">√</i>
                <span>Available</span>
              </td>
              <td class="itemb">Check game components</td>
              <td class="itemc">
                <i class="all-icons red">×</i>
                <span>Unavailable</span>
              </td>
            </tr>
            <tr>
              <td class="itema">
                <i class="all-icons green">√</i>
                <span>Available</span>
              </td>
              <td class="itemb">Priority to check game ready drivers</td>
              <td class="itemc">
                <i class="all-icons red">×</i>
                <span>Unavailable</span>
              </td>
            </tr>
            <tr>
              <td class="itema">
                <i class="all-icons green">√</i>
                <span>Available</span>
              </td>
              <td class="itemb">Fix device errors</td>
              <td class="itemc">
                <i class="all-icons red">×</i>
                <span>Unavailable</span>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <!-- comparison end -->

    <!-- centbuy start -->
    <div class="centbuy">
      <div class="wrapper">
        <h2 class="btitle">Now Come Back with New Driver Booster PRO</h2>
        <p>Make Driver Update Easier and Game Performance Faster</p>
        <div class="clearfix">
          <dl>
            <dt><img src="<?php echo getStaticUrl('images/new-icon01.png')?>" alt=""/></dt>
            <dd>
              <strong>20%</strong>
              <p>Larger</p>
              <b>Driver Database</b>
              <p><span>IMPROVED</span></p>
            </dd>
          </dl>
          <dl class="center">
            <dt><img src="<?php echo getStaticUrl('images/new-icon02.png')?>" alt=""/></dt>
            <dd>
              <strong>150%</strong>
              <p>Quicker</p>
              <b>Driver Download</b>
              <p><span>IMPROVED</span></p>
            </dd>
          </dl>
          <dl>
            <dt><img src="<?php echo getStaticUrl('images/new-icon03.png')?>" alt=""/></dt>
            <dd>
              <strong>28%</strong>
              <p>Faster</p>
              <b>Game Performance</b>
              <p><span class="green">NEW</span></p>
            </dd>
          </dl>
        </div>
        <div class="price">
          <a class="buybtn bigbtn" href="https://www.iobit.com/buy.php?product=db63pc1695&ref=br_dbe&refs=purchase_dbbf" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase-bf');">
            Renew Now & Save 77%
          </a>
          <p class="year">1 Year Subscription / 3 PCs</p>
        </div>
      </div>
    </div>
    <!-- centbuy end -->

    <!-- awards start -->
    <div class="awards">
      <div class="wrapper">
        <h2>World-wide Awards</h2>
        <p>
          As being trusted and awarded by those world-class media in the past five years, you know you’ve got the right driver updater.
        </p>
        <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
      </div>
    </div>
    <!-- awards end -->

    <!-- review start -->
    <div class="review wrapper">
      <h2 class="btitle">Trusted by 150,000,000 Users</h2>
      <div id="dg-container" class="dg-container">
        <div class="nav">
          <span class="dg-prev"></span>
          <span class="dg-next"></span>
        </div>
        <div class="content dg-wrapper">
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/pc-mag.png')?>" alt=""></dt>
            <dd>
              <h2>Media Review</h2>
              <p>
                "IObit makes many utilities, and Driver Booster PRO, which automatically updates your drivers, is one of its best. Driver Booster PRO's simple core functionality is made even more attractive thanks to the inclusion of multiple licenses at a very wallet-friendly price, as well as a customizable interface that does a good job of displaying specific hardware-related information. Competitors Ashampoo Driver Updater and SlimWare Utilities DriverUpdate offer compelling features, but IObit Driver Booster PRO leads the pack."
              </p>
              <cite>PC Magazine</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/myo-thuya.png')?>" alt=""></dt>
            <dd>
              <h2>User Review</h2>
              <p>
                "With Driver Booster, I can easily know which devices drivers are out of date and can easily update them. Besides, it helps me to fix sound error, network error, device error etc...I don't believe it before I using, but after using it I really love it..just my PC is faster ,securer and newer more than the last 8 months ago..so thank you IObit."
              </p>
              <cite>Myo Thuya</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/adam-backlund.png')?>" alt=""></dt>
            <dd>
              <h2>User Review</h2>
              <p>
                "Driver booster is an amazing application. As for someone who has a lot of applications and drives as does not have the time to manually update them, I strongly recommend Driver Booster, it will help to update the driver quickly and easily."
              </p>
              <cite>Adam Backlund</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/wayne-bowler.png')?>" alt=""></dt>
            <dd>
              <h2>User Review</h2>
              <p>
                "This is one of the best driver updater programs around. Microsoft has even led me astray by suggesting updates that wouldn’t work with my machine. This program knew what updates I needed without any conflicts. It worked perfectly. Easy to use, informative, and intuitive. This one will stay in my toolbox forever... Great job!"
              </p>
              <cite>Wayne Bowler</cite>
            </dd>
          </dl>
        </div>
      </div>
    </div>
    <!-- review end -->

    <div class="bottom">
      <div class="wrapper">
        <!-- service start -->
        <div class="service clearfix">
          <dl class="fl">
            <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
            <dd>
              <h4>Try it RISK FREE - with our 60-day Money Back Guarantee</h4>
              <p>
                We’re confident that activating PRO edition will fix all your headache driver matters for affordable price!
              </p>
            </dd>
          </dl>
          <dl class="fr">
            <dd>
              <h4>We accept</h4>
            </dd>
            <dt><img src="<?php echo getStaticUrl('images/payments.png')?>" alt=""/></dt>
          </dl>
        </div>
        <!-- service end -->

        <!-- footer start -->
        <div class="footer">
          <dl>
            <dt>Note:</dt>
            <dd>*.Data may vary based on different system or computer.</dd>
            <dd>
              *.Such promotional programs are subject to change without notice, from time to time in our sole discretion.
            </dd>
          </dl>
          <p>Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p>
        </div>
        <!-- footer end -->
      </div>
    </div>

    <!-- backtotop start -->
    <div id="backtotop" class="backtotop">top</div>
    <!-- backtotop end -->

    <!-- float start -->
    <div class="floatlayer">
        <div class="wrapper clearfix">
          <img class="fl" src="<?php echo getStaticUrl('images/db-float-box.png')?>" alt=""/>
          <div class="price fl">
            <div class="count">
              <p class="watch"><span class="surplusGift viewNum"><?php echo $viewNum;?></span> watching, <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> seats left now!</p>
              <div class="progressbar">
                <span></span>
              </div>
              <p id="floatdown" class="countdown">Hurry! <b>05</b>M:<b>00</b>S:<b class="last">00</b>Ms* Left</p>
            </div>
          </div>
          <!-- buybtn -->
          <a class="buybtn bigbtn fr" href="https://www.iobit.com/buy.php?product=db63pc1695&ref=br_dbe&refs=purchase_dbbf" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase-bf');">
            Renew Now & Save 77%
          </a>
        </div>
    </div>
    <!-- float end -->

  </div>
  <script>
    var refStr = '<?php echo $refStr;?>';
    var imgSrc = "<?php echo getStaticUrl('images/db-mask-box.png')?>";
    var imgoffSrc = "<?php echo getStaticUrl('images/mask-off.png')?>";
    var _href = "https://www.iobit.com/buy.php?product=db63pc1995&ref=br_dbe1995&refs=purchase_dbbf&tw=-8";
    var _ga = "ga('send', 'event', 'dbbuypop', 'buy', 'dbpurchase-bf');";
    var viewNum = "<?php echo $viewNum;?>";
  </script>
  <script src="<?php echo getStaticUrl('script/modernizr.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/review-3d-carousel.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.min.js')?>"></script>

</body>
</html>