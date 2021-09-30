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
  $cName='sdexrprepa'.$date;
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
<title>65% OFF to Get Smart Defrag - Christmas Sale | IObit</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Montserrat:500,600,700'>
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
          <h4>Your registered Smart Defrag Pro has expired!</h4>
          <h1>Welcome Back and We Miss You</h1>
        </div>
        <div class="palen clearfix">
          <div class="left fl">
            <img src="<?php echo getStaticUrl('images/sd-box.png')?>" alt="Smart Defrag Pro"/>
            <div class="balloon"><img src="<?php echo getStaticUrl('images/balloon.png')?>" alt=""/></div>
          </div>
          <div class="right fr">
            <h2>65% OFF Christmas Sale</h2>
            <p>Exclusive for our gold member</p>
            <div class="price">
              <div class="count">
                <p class="watching">
                  <i class="all-icons"></i> <b id="packbox" class="reduceGift packbox"><span><b class="list"><strong>*</strong></b></span><span class="last"><b class="list"><strong>*</strong></b></span></b> seats left now! 
                </p>
                <div class="progressbar">
                  <span></span>
                </div>
                <ul class="clearfix">
                  <li class="fl"><span class="surplusGift viewNum"><?php echo $viewNum;?></span> watching</li>
                  <li id="bandown" class="countdown fr">Hurry! <b>05</b>M:<b>00</b>S:<b class="last">00</b> Ms* Left</li>
                </ul>
              </div>
              <p><strong>$<big>9</big>.99</strong> <del>$29.99</del></p>
              <a class="buybtn" href="https://www.iobit.com/buy.php?product=sd63pc999&ref=xr_sde&refs=purchase_sdex" onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdepurchase-xmas');">
                Renew Now
              </a>
              <p class="year">1 Year Subscription / 3 PCs</p>
              <img class="moneyback" src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/>
            </div>
          </div>
        </div>
      </div>
      <div class="left-bg"><img src="<?php echo getStaticUrl('images/banner-left.png')?>" alt=""/></div>
      <div class="right-bg"><img src="<?php echo getStaticUrl('images/banner-right.png')?>" alt=""/></div>
    </div>
    <!-- banner end -->

    <!-- feature start -->
    <div class="feature">
      <div class="wrapper">
        <h4>Since Being with You, </h4>
        <h2>What Did Smart Defrag PRO Do for You</h2>
        <div class="panel clearfix">
          <div class="screen fl">
            <img src="<?php echo getStaticUrl('images/screen.png')?>" alt="IObit Uninstaller Pro"/>
          </div>
          <div class="right fr">
            <dl class="one clearfix">
              <dt>1</dt>
              <dd>
                <h3>Up to 200%<span>*</span> Faster</h3>
                <p>
                  Accelerate file access speed & game launching speed with Large File Defrag
                </p>
              </dd>
            </dl>
            <dl class="two clearfix">
              <dt>2</dt>
              <dd>
                <h3>Up to 100%<span>*</span> Faster Startup</h3>
                <p>
                  Boot-time Defrag gives you quick PC startup and top system running speed.
                </p>
              </dd>
            </dl>
            <dl class="three clearfix">
              <dt>3</dt>
              <dd>
                <h3>Ultra-fast Defragment</h3>
                <p>
                  Defragment files more efficiently and thoroughly in less time.
                </p>
              </dd>
            </dl>
            <dl class="four clearfix">
              <dt>3</dt>
              <dd>
                <h3>Auto Smart Defrag</h3>
                <p>
                  Automatically defragment selected files and disks without interruption.
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
        <h2 class="btitle">Without Smart Defrag PRO,</h2>
        <p><i class="all-icons"></i> What Will You Lose <i class="all-icons right"></i></p>
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
              <td class="itema"><span>Deeper</span></td>
              <td class="itemb">Hard Drive Defragmentation and Optimization</td>
              <td class="itemc">Basic</td>
            </tr>
            <tr>
              <td class="itema"><span>Up to 200%* Faster</span></td>
              <td class="itemb">File Access Speed Acceleration</td>
              <td class="itemc">
                <i class="all-icons red">×</i>
                <span>Unavailable</span>
              </td>
            </tr>
            <tr>
              <td class="itema"><span>Up to 100%*  Faster</span></td>
              <td class="itemb">PC Startup Speed Acceleration</td>
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
              <td class="itemb">Customize Defrag Mode & Disks/Files to Be Defragged</td>
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
              <td class="itemb">DMA Applied for Better, Faster & More Stable Data Transfer</td>
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
              <td class="itemb">Auto Update to the Latest Version</td>
              <td class="itemc">
                <i class="all-icons red">×</i>
                <span>Unavailable</span>
              </td>
            </tr>
          </tbody>
        </table>
        <div class="price">
          <a class="buybtn bigbtn" href="https://www.iobit.com/buy.php?product=sd63pc999&ref=xr_sde&refs=purchase_sdex" onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdepurchase-xmas');">
            Renew Now & Save 65%
          </a>
          <p class="year">1 Year Subscription / 3 PCs</p>
        </div>
      </div>
    </div>
    <!-- comparison end -->

    <!-- awards start -->
    <div class="awards">
      <div class="wrapper">
        <h2>World-wide Awards</h2>
        <p>
          As being trusted and awarded by those world-class media in the past five years, you know you’ve got the right defrag tool.
        </p>
        <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
      </div>
    </div>
    <!-- awards end -->

    <!-- review start -->
    <div class="review wrapper">
      <h2 class="btitle">Trusted by 2,000,000 Users</h2>
      <div id="dg-container" class="dg-container">
        <div class="nav">
          <span class="dg-prev"></span>
          <span class="dg-next"></span>
        </div>
        <div class="content dg-wrapper">
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/cnet.png')?>" alt="Cnet"></dt>
            <dd>
              <h2>Media Review</h2>
              <h3>"IObit Smart Defrag is the best defragger we've tried yet."</h3>
              <p>
                "IObit Smart Defrag optimizes your PC to take full advantage of SSD performance while defragmenting your hard disks. Its SSD Trim tool automatically enables system tweaks that typically require experience to apply. Smart Defrag's updates include a new defrag engine, specialized Game Defrag, a cool new look, and many more language options (35 and counting)."
              </p>
              <cite>Cnet</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/amnon.png')?>" alt="Amnon"></dt>
            <dd>
              <h2>User Review</h2>
              <h3>"Smart defrag is a very well behaved disk defrag software."</h3>
              <p>
                "Smart defrag is a very well behaved disk defrag software, operating in the background whenever computer is idle so that you hardly notice it. As a result: drives are permanently defragmented allowing rapid access and less wear and tear. Smart defrag is the best Free disk defragmenter I've ever used and I'll definitely recommend it to my family and friends!"
              </p>
              <cite>Amnon</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/hans.png')?>" alt="Hans"></dt>
            <dd>
              <h2>User Review</h2>
              <h3>"Since using this fantastic software my desktop and my laptop are fast and save."</h3>
              <p>
                "I am a user of Smart defrag for many years. Since using this fantastic software my desktop and my laptop are fast and save. Together with advance system care ultimate you have a complete tool for keeping you system up to date, fast and secure.Using it every day without need to wait (pc closes itself) you keep your system in top condition even if you have no technical background!"
              </p>
              <cite>Hans</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/edward-lee-ah-yen.png')?>" alt="Edward Lee Ah Yen"></dt>
            <dd>
              <h2>User Review</h2>
              <h3>"It is easy to use, must have utility, for your hard disc or SSD."</h3>
              <p>
                "I run a combination of RAID 0 SSDs and RAID 0 HDDs and use Smart Defrag Pro to analyse, defrag and keep my drives running at peak performance. As with all IObit software it is easy to install, use and very reliable. Just set it up and forget it. Smart Defrag has a very small memory foot print so it won't slow down your system. Definitely recommended!"
              </p>
              <cite>Edward Lee Ah Yen</cite>
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
                We’re confident that activating PRO edition will keep your drives running at peak performance for affordable price!
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
            <dd>*.Such promotional programs are subject to change without notice, from time to time in our sole discretion.</dd>
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
          <img class="fl" src="<?php echo getStaticUrl('images/sd-small-box.png')?>" alt="Smart Defrag Pro"/>
          <div class="price fl">
            <div class="count">
              <ul class="clearfix">
                <li class="fl"><span class="surplusGift viewNum"><?php echo $viewNum;?></span> watching, <span class="packsNum"><?php echo $viewNum;?></span> seats left now! </li>
                <li id="bandown" class="countdown fr">Hurry! <b>05</b>M:<b>00</b>S:<b class="last">00</b>Ms* Left</li>
              </ul>
              <div class="progressbar">
                <span></span>
              </div>
            </div>
          </div>
          <!-- buybtn -->
          <a class="buybtn yellow fr" href="https://www.iobit.com/buy.php?product=sd63pc999&ref=xr_sde&refs=purchase_sdex" onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdepurchase-xmas');">
            Renew Now & Save 65%
          </a>
        </div>
    </div>
    <!-- float end -->

    <!-- mask start -->
    <div class="mask"></div>
    <div class="popShow">
      <div class="title">
        <h2>Oops! Chrisitmas Sale has ended!</h2>
        <h4>Don’t worry. Grab your last chance in 2018 for big saving!</h4>
      </div>
      <div class="clearfix">
        <div class="imgbox fl">
          <img src="<?php echo getStaticUrl('images/sd-box.png')?>" alt="Smart Defrag Pro"/>
        </div>
        <div class="price fl">
          <img src="<?php echo getStaticUrl('images/pop-off.png')?>" alt="45% OFF"/>
          <p><strong>$<big>12</big>.99</strong> <del>$29.99</del></p>
          <a class="buybtn yellow" href="https://www.iobit.com/buy.php?product=sd63pc1299&ref=xr_sde1299&refs=purchase_sdex" onclick="ga('send', 'event', 'sdbuypop', 'buy', 'sdepurchase-xmas');">
            Renew Now
          </a>
          <p class="year">1 Year Subscription / 3 PCs</p>
        </div>
      </div>
    </div>
    <!-- mask end -->

  </div>
  <script>
    var refStr = '<?php echo $refStr;?>';
    var viewNum = "<?php echo $viewNum;?>";
  </script>
  <script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
  <script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.min.js')?>"></script>

</body>
</html>