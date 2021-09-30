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
  $cName='ascpdbprepa'.$date;
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
<title>The Best and Last Chance to Get Driver Booster Pro – 73% OFF | IObit</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Montserrat:500,600,800'>
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
        <div class="title">
          <h1>BLACK FRIDAY EXCLUSIVE SAlE</h1>
          <p>Best Chance to Save Big – Once Per Year Only!</p>
        </div>
        <div class="palen clearfix">
          <div class="left fl">
            <img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="Driver Booster 6 Pro"/>
          </div>
          <div class="right fr">
            <h2>Driver Booster 6 Pro</h2>
            <div class="price">
              <div class="count">
                <p class="watching">
                  <span class="surplusGift viewNum"><?php echo $viewNum;?></span> watching, <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> seats left now!
                </p>
                <div class="progressbar">
                  <span></span>
                </div>
                <p id="bandown" class="countdown">Hurry! <b>05</b>M:<b>00</b>S:<b class="last">00</b>Ms Left</p>
              </div>
              <p><strong>$<big>19</big>.95</strong> <del>$74.85</del></p>
              <a class="buybtn" href="https://www.iobit.com/buy.php?product=db3pc1995&ref=br_ascpdb&refs=purchase_dbbf" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase-bf');">
                <div class="inner">
                  <i class="all-icons"></i>
                  <span>Activate Now</span>
                </div>
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
        <h2>What will you benefit from Driver Booster 6 Pro?</h2>
        <p class="over">
          As the No.1 PC driver updater - easier, safer and faster driver update, Driver Booster Pro is over 150 million users' choice. Because their PCs run up to 200% faster* than before, by keeping device drivers always Up-to-date and improving Stability of PC Performance, with the proven driver updating and security technology.
        </p>
        <div class="screen">
          <dl class="one">
            <dt><img src="<?php echo getStaticUrl('images/feature-01.png')?>" alt=""/></dt>
            <dd>
              <h3>No need of one-by-one driver update</h3>
              <p>Providing you one-stop driver detecting & updating solution.</p>
            </dd>
          </dl>
          <dl class="two">
            <dt><img src="<?php echo getStaticUrl('images/feature-02.png')?>" alt=""/></dt>
            <dd>
              <h3>Safe driver download & update</h3>
              <p>
                Automatically backing up & creating system restore point before updating, in case of anything unexpected.
              </p>
            </dd>
          </dl>
          <dl class="three">
            <dt><img src="<?php echo getStaticUrl('images/feature-03.png')?>" alt=""/></dt>
            <dd>
              <h3>No unexpected system crash</h3>
              <p>Always keeping all drivers up-to-date to ensure you a stable PC.</p>
            </dd>
          </dl>
          <dl class="four">
            <dt><img src="<?php echo getStaticUrl('images/feature-04.png')?>" alt=""/></dt>
            <dd>
              <h3>100% * faster download</h3>
              <p>Time-saving with system idle time downloading with up to 100% faster speed.</p>
            </dd>
          </dl>
          <dl class="five">
            <dt><img src="<?php echo getStaticUrl('images/feature-05.png')?>" alt=""/></dt>
            <dd>
              <h3>Peak gaming performance guaranteed</h3>
              <p>Game Ready Driver and necessary game components are available to help run game smoothly.</p>
            </dd>
          </dl>
        </div>
      </div>
    </div>
    <!-- feature end -->

    <!-- together start -->
    <div class="together">
      <div class="wrapper">
        <h2>
          Together with Advanced SystemCare Pro, you will enjoy <br>top PC performance and peak game experience!
        </h2>
        <div class="panel clearfix">
          <div class="asc-box fl clearfix">
            <div class="box fl">
              <h3>Top PC Performance <i></i></h3>
              <dl>
                <dt><strong>Cleaner & Faster PC</strong></dt>
                <dd>
                  Auto clean junk files and optimize registries to accelerate running speed.
                  <span>* Advanced SystemCare pro only</span>
                </dd>
              </dl>
              <dl>
                <dt><strong>More Stable PC</strong></dt>
                <dd>
                  Missing/faulty/outdated/rare PC driver updating.
                  <span>* Driver Booster Pro only</span>
                </dd>
              </dl>
            </div>
            <div class="imgbox fr"><img src="<?php echo getStaticUrl('images/left-asc-box.png')?>" alt="Advanced SystemCare Pro"/></div>
          </div>
          <div class="db-box fl clearfix">
            <div class="imgbox fl"><img src="<?php echo getStaticUrl('images/right-db-box.png')?>" alt="Driver Booster 6 Pro"/></div>
            <div class="box fl">
              <h3><i></i> Peak Game Experience </h3>
              <dl>
                <dt><strong>Faster Gaming</strong></dt>
                <dd>
                  Auto clean RAM and stop useless <br>processes.
                  <span>* Advanced SystemCare pro only</span>
                </dd>
              </dl>
              <dl>
                <dt><strong>Smoother Gaming</strong></dt>
                <dd>
                  Game Ready Drivers and components available to improve gaming experience.
                  <span>* Driver Booster Pro only</span>
                </dd>
              </dl>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- together end -->

    <!-- centbuy start -->
    <div class="centbuy">
      <h2>Activate Driver Booster Pro Now - The Best Price of the Year!</h2>
      <div class="wrapper clearfix">
        <div class="fl">
          <img src="<?php echo getStaticUrl('images/db-small-box.png')?>" alt="Driver Booster 6 Pro"/>
        </div>
        <div class="price fr">
          <div class="count">
            <p class="watching">
              <span class="surplusGift viewNum"><?php echo $viewNum;?></span> watching, <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> seats left now!
            </p>
          </div>
          <p><strong>$<big>19</big>.95</strong> <del>$74.85</del></p>
          <a class="buybtn" href="https://www.iobit.com/buy.php?product=db3pc1995&ref=br_ascpdb&refs=purchase_dbbf" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase-bf');">
            <div class="inner">
              <i class="all-icons"></i>
              <span>Activate Now</span>
            </div>
          </a>
          <p class="year">1 Year Subscription / 3 PCs</p>
        </div>
      </div>
    </div>
    <!-- centbuy end -->

    <!-- comparison start -->
    <div class="comparison" id="compare">
      <div class="wrapper">
        <h2>Quick view about the comparison between Free and Pro</h2>
        <table border="0" cellspacing="0" cellpadding="0" width="100%">
          <thead>
            <tr>
              <th class="itema" colspan="2"></th>
              <th class="itemb">Driver Booster 6 FREE</th>
              <th class="itemc"><span>Driver Booster 6 Pro PRO</span></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="icons"><img src="<?php echo getStaticUrl('images/icons_01.png')?>" alt=""/></td>
              <td class="itema">Auto Scan Outdated/Missing Drivers</td>
              <td class="itemb"><i class="all-icons">√</i></td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="icons"><img src="<?php echo getStaticUrl('images/icons_02.png')?>" alt=""/></td>
              <td class="itema">Priority to Get Latest Game Ready Driver</td>
              <td class="itemb"><i class="all-icons free">√</i></td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="icons"><img src="<?php echo getStaticUrl('images/icons_03.png')?>" alt=""/></td>
              <td class="itema">Necessary Components for Smooth Game</td>
              <td class="itemb"><i class="all-icons free">√</i></td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="icons"><img src="<?php echo getStaticUrl('images/icons_04.png')?>" alt=""/></td>
              <td class="itema">200% More Devices Supported</td>
              <td class="itemb"><i class="all-icons free">√</i></td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="icons"><img src="<?php echo getStaticUrl('images/icons_05.png')?>" alt=""/></td>
              <td class="itema">Up to 100% Higher Update Speed</td>
              <td class="itemb"><i class="all-icons free">√</i></td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr class="last">
              <td class="icons"><img src="<?php echo getStaticUrl('images/icons_06.png')?>" alt=""/></td>
              <td class="itema">Auto Download & Backup</td>
              <td class="itemb"><i class="all-icons free">√</i></td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <!-- comparison end -->

    <!-- footbuy start -->
    <div class="footbuy">
      <div class="wrapper">
        <h3>DON'T MISS OUT!</h3>
        <h2>Get Exclusive 73% OFF to Keep Drivers Up-to-date and PC Performance Stable</h2>
        <div class="price">
          <p><strong>$<big>19</big>.95</strong> <del>$74.85</del></p>
          <a class="buybtn" href="https://www.iobit.com/buy.php?product=db3pc1995&ref=br_ascpdb&refs=purchase_dbbf" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase-bf');">
            <div class="inner">
              <i class="all-icons"></i>
              <span>Activate Now</span>
            </div>
          </a>
          <p id="footdown" class="countdown">Hurry! <b>05</b>M:<b>00</b>S:<b class="last">00</b>Ms Left</p>
        </div>
      </div>
    </div>
    <!-- footbuy end -->

    <!-- review start -->
    <div class="review wrapper">
      <div id="dg-container" class="dg-container">
        <div class="nav">
          <span class="dg-prev"></span>
          <span class="dg-next"></span>
        </div>
        <div class="content dg-wrapper">
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/pc.png')?>" alt=""></dt>
            <dd>
              <h2>Media Review</h2>
              <h4>IObit makes many utilities, and Driver Booster PRO, which automatically updates your drivers, is one of its best.</h4>
              <p>
                Driver Booster PRO's simple core functionality is made even more attractive thanks to the inclusion of multiple licenses at a very wallet-friendly price, as well as a customizable interface that does a good job of displaying specific hardware-related information. Competitors Ashampoo Driver Updater and SlimWare Utilities DriverUpdate offer compelling features, but IObit Driver Booster PRO leads the pack.
              </p>
              <cite>PC Magazine</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/myo-thuya.png')?>" alt=""></dt>
            <dd>
              <h2>User Review</h2>
              <h4>"My PC is faster, securer and newer more than the last 8 months ago."</h4>
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
              <h4>"I strongly recommend Driver Booster, it will help to update the driver quickly and easily."</h4>
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
              <h4>"It worked perfectly. Easy to use, informative, and intuitive. This one will stay in my toolbox forever... Great job!"</h4>
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

    <!-- awards start -->
    <div class="awards wrapper">
      <h2>World-wide Awards</h2>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
    </div>
    <!-- awards end -->

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

  </div>
  <script>
    var refStr = '<?php echo $refStr;?>';
    var imgSrc = "<?php echo getStaticUrl('images/db-mask-box.png')?>";
    var imgOff = "<?php echo getStaticUrl('images/mask-off.png')?>";
    var _href = "https://www.iobit.com/buy.php?product=db3pc2195&ref=br_ascpdb2195&refs=purchase_dbbf&tw=-8";
    var _ga = "ga('send', 'event', 'dbbuypop', 'buy', 'dbpurchase-bf');";
    var viewNum = "<?php echo $viewNum;?>";
  </script>
  <script src="<?php echo getStaticUrl('script/modernizr.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/review-3d-carousel.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.min.js')?>"></script>

</body>
</html>

