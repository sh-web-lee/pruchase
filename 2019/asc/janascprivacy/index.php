<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';

$viewNum=rand(60,88);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}
if(!empty($_GET['action'])&&($_GET['action']=='getSales')){
  $date=$_GET['d'];
  $cName='enascpri'.$date;
  $cookie=$_COOKIE[$cName];
  if($cookie!==null){
    $packsNum=$_COOKIE[$cName];
    if($packsNum>0){
      $packsNum--;
      setcookie($cName,$packsNum);
    }else{
      $packsNum=0;
      setcookie($cName,$packsNum);
    }
  }else{
    $packsNum=rand(48,55);
    setcookie($cName,$packsNum);
  }
  echo $packsNum;
  exit();
}

$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
if(!empty($_GET['st'])){
  $refStr.='-'.$_GET['st'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>80% OFF to Get Advanced SystemCare PRO</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Lato:400,600,700'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
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
        <h1>Full Protection for Your Online Privacy</h1>
        <div class="palen clearfix">
          <div class="left fl">
            <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="Advanced SystemCare 12 PRO"/>
            <span>80% OFF New Year offer</span>
          </div>
          <div class="right fr">
            <h2>Advanced SystemCare 12 PRO</h2>
            <span>Stop trackers trying to steal and sell your personal data</span>
            <div class="price">
              <p><strong><small>$</small><span class="discount">19.99</span></strong> <del>$89.97</del></p>
              <p class="hurry">Hurry, only <b class="reduceGift"><span class="packsNum">**</span></b> left at this cost!</p>
              <div class="progressbar">
                <span></span>
              </div>
              <a class="buybtn" 
                 href="https://www.iobit.com/buy.php?product=asc123pc1999&ref=ascprivacy1999<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_asc"
                 onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase-privacy');">
                <i class="all-icons"></i>
                <span>Activate Now</span>
              </a>
              <p class="pc">1 Year Subscription / 3 PCs</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- banner end -->

    <!-- flow start -->
    <div class="flow wrapper">
      <h2 class="subtitle">Why Should I Protect Online Privacy?</h2>
      <div class="clearfix">
        <dl class="one fl">
          <dt class="all-icons">！</dt>
          <dd>
            <h3>Sensitive data</h3>
            <p>
              Fraudulent sites attempt to acquire sensitive information such as usernames, passwords, and credit card details.
            </p>
          </dd>
        </dl>
        <dl class="two fl">
          <dt class="all-icons">！</dt>
          <dd>
            <h3>Private files</h3>
            <p>A cybercriminal may be able to access your private documents, photos, programs ect. </p>
          </dd>
        </dl>
        <dl class="fr">
          <dt class="all-icons">！</dt>
          <dd>
            <h3>Online behavior</h3>
            <p>
              Hackers may know details about your preferences and almost everything you've done online and 
              share them with others.
            </p>
          </dd>
        </dl>
      </div>
    </div>
    <!-- flow end -->

    <!-- intro start -->
    <div class="intro">
      <div class="wrapper">
        <h2 class="subtitle">How Does Advanced SystemCare PRO Protect My Privacy?</h2>
        <div class="panel clearfix">
          <div class="left fl">
            <dl class="first">
              <dt><i class="all-icons">1</i></dt>
              <dd>
                <h3>Auto clean traces</h3>
                <p>
                  Auto clean your browsing data to secure your sensitive data and block ads which pop based on what you searched or visited.
                </p>
              </dd>
            </dl>
            <dl class="two">
              <dt><dt><i class="all-icons">2</i></dt></dt>
              <dd>
                <h3>Block untrusted program access</h3>
                <p>
                  Inform you when there is a secret access to your private files, photos, programs, etc. and allow you to block it.
                </p>
              </dd>
            </dl>
            <dl class="three">
              <dt><dt><i class="all-icons">3</i></dt></dt>
              <dd>
                <h3>Mask identity</h3>
                <p>
                  Constantly alter your digital fingerprint to prevent trackers from snooping on what you read, view, and purchase even you browse in stealth mode.
                </p>
              </dd>
            </dl>
          </div>
          <div class="right fr">
            <img src="<?php echo getStaticUrl('images/pc.png')?>" alt="Advanced SystemCare 12 PRO"/>
            <span class="one"><img src="<?php echo getStaticUrl('images/pc1.png')?>" alt=""/></span>
            <span class="two"><img src="<?php echo getStaticUrl('images/pc0.png')?>" alt=""/></span>
          </div>
        </div>
      </div>
    </div>
    <!-- intro end -->

    <!-- feature start -->
    <div class="feature">
      <div class="wrapper">
        <h2 class="subtitle">What Other Benefits Can I Get from Advanced SystemCare PRO?</h2>
        <ul class="clearfix">
          <li>
            <img src="<?php echo getStaticUrl('images/feature_01.png')?>" alt=""/>
            <h3>Faster Internet Connection</h3>
            <p>Accelerate download, surfing, gaming, YouTube viewing up to 300% faster.</p>
            <span>*Advanced SystemCare PRO only</span>
          </li>
          <li class="two">
            <img src="<?php echo getStaticUrl('images/feature_02.png')?>" alt=""/>
            <h3>Faster Computer</h3>
            <p>Reduce system stutter or lag and speed up your computer up to 200% faster.</p>
            <span>*Advanced SystemCare PRO only</span>
          </li>
          <li class="three">
            <img src="<?php echo getStaticUrl('images/feature_03.png')?>" alt=""/>
            <h3>Clean and Optimize Registry</h3>
            <p>Fully scan and repair harmful registry entries to reduce Windows crashes and error messages.</p>
            <span>*Advanced SystemCare PRO only</span>
          </li>
        </ul>
      </div>
    </div>
    <!-- feature end -->

    <!-- review start -->
    <div class="review wrapper">
      <h2 class="subtitle">Trusted by 3,500,00,000 Users</h2>
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
            <dt><img src="<?php echo getStaticUrl('images/bruce-ramsay.png')?>" alt="Bruce Ramsay"></dt>
            <dd>
              <h2>User Review</h2>
              <p>
                "I like many started off with the free version and eventually purchased the full version. It's been working to keep my computer clean and "bug" free for years now and it hasn't let me down yet. I contacted Advanced System Care recently and they responded within a day or two with all I needed to know. In my mind support is huge in the decision to stay with a product and ASC wins in both product and support."
              </p>
              <cite>Bruce Ramsay</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/hank-ewert.png')?>" alt="Hank Ewert"></dt>
            <dd>
              <h2>User Review</h2>
              <p>
                "Like most people I am not a computer expert. I don't know how many programs I have tried over the years, all claiming to be the best but never coming close to the Advanced SystemCare Pro protection that I have now. Since I got this awesome program I haven't had to call a tech even once. It has more than surpassed my expectations, always up to date, and the graphics are very cool too! Many thanks to all of you for making my life much easier."
              </p>
              <cite>Hank Ewert</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/loretta-harnarine.png')?>" alt="Loretta Harnarine"></dt>
            <dd>
              <h2>User Review</h2>
              <p>
                "This program is the very best one that I have ever tried out. My computer is running so much better and faster now that I have downloaded ASC10. It has cleaned up unnecessary and duplicate files, empty folders and I have used it to shred files. It cleaned and defragged the registry and all the files on this PC. I highly recommend that you purchase this program. It is not expensive and what it will do for your computer will be totally amazing. You will love it, I promise."
              </p>
              <cite>Loretta Harnarine</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/charles-r-widick.png')?>" alt="Charles R. Widick"></dt>
            <dd>
              <h2>User Review</h2>
              <p>
                "As a computer repair tech I find by downloading and scanning with ASC free most common problems are resolved. When finished with a repair I usually suggest the client purchase the Pro package. Who needs a tech when you have the power of Advanced System Care Pro working your system 24-7? This is the best product a home user can buy. Thank you for making my job easier."
              </p>
              <cite>Charles R. Widick</cite>
            </dd>
          </dl>
        </div>
      </div>
    </div>
    <!-- review end -->

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

    <div class="wrapper">
      <!-- service start -->
      <div class="service clearfix">
        <dl class="left fl">
          <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
          <dd> 
            <h4>Try it RISK FREE - with our 60-day Money Back Guarantee</h4>
            <p>
              We’re confident that activating PRO edition will improve your PC performance for affordable price!
            </p>
          </dd>
        </dl>
        <dl class="right fr">
          <dt><h4>We accept</h4></dt>
          <dd><img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/></dd>
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

    <!-- floatlayer start -->
    <div id="floatlayer" class="floatlayer">
      <div class="wrapper clearfix">
        <img class="fl" src="<?php echo getStaticUrl('images/asc-small-box.png')?>" alt="Advanced SystemCare 12 PRO"/>
        <div class="price fl">
          <p class="hurry"><em class="viewNum"><?php echo $viewNum; ?></em> visitors now, only <b class="reduceGift"><span class="packsNum">**</span></b> left at this cost!</p>
          <div class="progressbar">
            <span></span>
          </div>
        </div>
        <div class="price fr">
          <p><strong><small>$</small>19<small>.99</small></strong> <del>$89.97</del></p>
          <a class="buybtn" 
             href="https://www.iobit.com/buy.php?product=asc123pc1999&ref=ascprivacy1999<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_asc"
             onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase-privacy');">
            <i class="all-icons"></i>
            <span>Activate Now</span>
          </a>
        </div>
      </div>
    </div>
    <!-- floatlayer end -->

  </div>

  <script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
  <script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
  <script>
    var imgSrc = "<?php echo getStaticUrl('images/mask-box.png')?>";
    var _href = "https://www.iobit.com/buy.php?product=asc12sdiuamc1999p&ref=ascprivacy1999gift<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_asc&tw=-8";
    var _ga = "ga('send', 'event', 'ascbuypop', 'buy', 'ascpurchase-privacy');";
    var _hrefSold = "https://www.iobit.com/buy.php?product=asc123pc2198&ref=ascprivacy2198<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_asc&tw=-8";
    var _gaSold = "ga('send', 'event', 'ascbuysold', 'buy', 'ascpurchase-privacy');";
    var packsNum ='<?php echo $packsNum;?>';
  </script>

</body>
</html>