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
  $cName='ascexrprepa'.$date;
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
$data=json_decode(base64_decode($_GET['data']));
//$junk=empty($data->junk)?0:number_format(round(($data->junk/(1024*1024*1024)),2),2);
$reg=empty($data->reg)?0:number_format($data->reg);
$privacy=empty($data->privacy)?0:number_format($data->privacy);

$junkMb=$data->junk/(1024*1024);
$junkGb=$data->junk/(1024*1024*1024);
$junk=number_format(round(($junkGb>=1)?$junkGb:$junkMb,2),2);
$junkStr=$junk.(($junkGb>=1)?' GB':' MB');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>70% OFF to Get Cleaner, Faster and More Secure PC - Christmas Sale | IObit</title>
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
          <h4>Your registered Advanced SystemCare Pro has expired!</h4>
          <h1>Welcome Back and We Miss You</h1>
        </div>
        
        <div class="palen clearfix">
          <div class="left fl">
            <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="Advanced SystemCare Pro"/>
            <div class="balloon"><img src="<?php echo getStaticUrl('images/balloon.png')?>" alt=""/></div>
          </div>
          <div class="right fr">
            <h2>70% OFF Christmas Sale</h2>
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
              <p><strong>$<big>14</big>.77</strong> <del>$49.99</del></p>
              <a class="buybtn" href="https://www.iobit.com/buy.php?product=asc3pc1477x&ref=xr_asce&refs=purchase_ascex" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascepurchase-xmas');">
                Renew Now
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
        <h2>What Have Advanced SystemCare PRO Help You</h2>
        <div class="panel clearfix">
          <div class="screen fl">
            <img src="<?php echo getStaticUrl('images/screen.png')?>" alt="IObit Malware Fighter PRO"/>
          </div>
          <div class="right fr">
            <dl class="one clearfix <?php echo ($junk!=0)?'':'datahide';?>">
              <dt>1</dt>
              <dd>
                <b>Clean Junk Files</b>
                <h3 class="data <?php echo ($junk!=0)?'':'hide';?>"><span><?php echo $junkStr;?></span></h3>
                <p>for larger disk space & faster PC</p>
              </dd>
            </dl>
            <dl class="two clearfix <?php echo $reg?'':'datahide';?>">
              <dt>2</dt>
              <dd>
                <b>Fix Registry Entries</b>
                <h3 class="data <?php echo $reg?'':'hide';?>"><?php echo $reg;?></h3>
                <p>to avoid system crashes/errors</p>
              </dd>
            </dl>
            <dl class="three clearfix <?php echo $privacy?'':'datahide';?>">
              <dt>3</dt>
              <dd>
                <b>Erase Online Traces</b>
                <h3 class="data <?php echo $privacy?'':'hide';?>"><?php echo $privacy;?></h3>
                <p>for better privacy protection</p>
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
        <h2 class="btitle">Without Advanced SystemCare PRO Now,</h2>
        <p><i class="all-icons"></i> See What You Already Lose <i class="all-icons right"></i></p>
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
              <td class="itema">
                <i class="all-icons green">√</i>
                <span>Available</span>
              </td>
              <td class="itemb">Deep PC Cleaning</td>
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
              <td class="itemb">Auto RAM Clean</td>
              <td class="itemc">
                <i class="all-icons red">×</i>
                <span>Unavailable</span>
              </td>
            </tr>
            <tr>
              <td class="itema"><span class="green">200% Faster</span></td>
              <td class="itemb">Optimize PC Startup & Running Speed </td>
              <td class="itemc">
                <i class="all-icons red">×</i>
                <span>Unavailable</span>
              </td>
            </tr>
            <tr>
              <td class="itema"><span class="green">300% Faster</span></td>
              <td class="itemb">Speed up Online Browsing</td>
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
              <td class="itemb">No Unauthorized Access to Private Files</td>
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
              <td class="itemb">Auto Online Trace Cleaning</td>
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
              <td class="itemb">Real-time Protection</td>
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
        <h2>Now Come Back with New Advanced SystemCare PRO</h2>
        <p>New & Improved features to make your old computer run like new</p>
        <div class="clearfix">
          <dl>
            <dt><img src="<?php echo getStaticUrl('images/new-icon01.png')?>" alt=""/></dt>
            <dd>
              <strong>30%</strong>
              <p>More</p>
              <b>Disk Space</b>
              <p><span>IMPROVED</span></p>
            </dd>
          </dl>
          <dl class="center">
            <dt><img src="<?php echo getStaticUrl('images/new-icon02.png')?>" alt=""/></dt>
            <dd>
              <strong>Fully<sup>*</sup></strong>
              <p>Protected</p>
              <b>Sensitive Personal Data</b>
              <p><span class="green">NEW</span></p>
            </dd>
          </dl>
          <dl>
            <dt><img src="<?php echo getStaticUrl('images/new-icon03.png')?>" alt=""/></dt>
            <dd>
              <strong>40%<sup>*</sup></strong> 
              <p>More</p>
              <b>Ads Removed</b>
              <p><span>IMPROVED</span></p>
            </dd>
          </dl>
        </div>
        <div class="price">
          <a class="buybtn bigbtn" href="https://www.iobit.com/buy.php?product=asc3pc1477x&ref=xr_asce&refs=purchase_ascex" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascepurchase-xmas');">
            Renew Now & Save 70%
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
          As being trusted and awarded by those world-class media in the past eleven years, you know you’ve got the right PC optimizer.
        </p>
        <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
      </div>
    </div>
    <!-- awards end -->

    <!-- review start -->
    <div class="review wrapper">
      <h2 class="btitle">Trusted by 3,500,000,000 Users</h2>
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
              <p>
                "Advanced SystemCare is a great all-in-one PC utility that can scan, repair, and optimize many aspects of your system.It aims to remedy whatever ails your computer by not only cleaning up junk files, malware, and invalid registry entries, but by giving your computer a boost to optimize your PC experience."
              </p>
              <cite>Cnet</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/hal-barry-koren.png')?>" alt="Hal Barry Koren"></dt>
            <dd>
              <h2>User Review</h2>
              <p>
                "Your software has improved greatly through the years. Disk Scan repairs without rebooting, atleast for minor errors. Speed UP Turbo Boost has greatly improved boot-up, all programs and browsers too. Fact is, everything works well with little cpu or disk usage. Your Driver Booster is a real time saver with no problems. I've been using your Uninstaller for years because it deletes thoroughly. Your Defrager is excellent. My machine runs like a fine tuned clock with the assistance of your programs."
              </p>
              <cite>Hal Barry Koren</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/michael-d-masters.png')?>" alt="Michael D. Masters"></dt>
            <dd>
              <h2>User Review</h2>
              <p>
                "Version 11 is the best balance between strength and ease of use yet. Facial recognition security is a new and welcome addition to the arsenal that ASC 11 brings to bear, against security threats both major and minor. System monitor shows you, in real time, what sort of load your RAM, and CPU are experiencing. This is especially important in the world of Windows 10, where some updates can result in high commitment of both resources. I love the improved RAM release utility. It's much smoother, and finishes faster. If I had to pick a favorite element, it would be Win10 Reinforce"
              </p>
              <cite>Michael D. Masters</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/savio-da-rocha-lobo.png')?>" alt="Savio Da Rocha Lobo"></dt>
            <dd>
              <h2>User Review</h2>
              <p>
                "I have been using ASC for as long as I can remember - over 5 years now I think, and it is just the thing I need to keep my PC shipshape and up and running as good as new, every time that I need my system to work better and faster. The Advanced System Care just keeps getting better and better with each passing version - a truly dependable and much needed software for any computer. I am now looking forward to your further software upgrades. Thanks again!"
              </p>
              <cite>Savio Da Rocha Lobo</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/stephen-h-littleton.png')?>" alt="Stephen H. Littleton"></dt>
            <dd>
              <h2>User Review</h2>
              <p>
                "Upon installing, I noticed Advanced System Care breathed new life into my PC! Instantly I noticed an amazing difference. The startup time was faster, the general issues which were causing a laggy and slow performance were gone! I was so impressed I decided to download your other products. Thank you so much for such an amazing program. It is the best and I will be recommending it every chance I get!!"
              </p>
              <cite>Stephen H. Littleton</cite>
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
                We’re confident that activating PRO edition will improve your PC performance for affordable price!
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
          <img class="fl" src="<?php echo getStaticUrl('images/asc-small-box.png')?>" alt="Advanced SystemCare Pro"/>
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
          <a class="buybtn yellow fr" href="https://www.iobit.com/buy.php?product=asc3pc1477x&ref=xr_asce&refs=purchase_ascex" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascepurchase-xmas');">
            Renew Now & Save 70%
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
          <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="Advanced SystemCare Pro"/>
        </div>
        <div class="price fl">
          <img src="<?php echo getStaticUrl('images/pop-off.png')?>" alt="66% OFF"/>
          <p><strong>$<big>16</big>.77</strong> <del>$49.99</del></p>
          <a class="buybtn yellow" href="https://www.iobit.com/buy.php?product=asc123pc1677x&ref=xr_asce1677&refs=purchase_ascex" onclick="ga('send', 'event', 'ascbuypop', 'buy', 'ascepurchase-xmas');">
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
    var junk="<?php echo $junk;?>";
    var reg="<?php echo $reg;?>";
    var privacy="<?php echo $privacy;?>";
  </script>
  <script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
  <script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.min.js')?>"></script>

</body>
</html>