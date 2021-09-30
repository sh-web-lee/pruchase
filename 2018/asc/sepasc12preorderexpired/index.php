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
  $cName='ascprepa'.$date;
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

$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);

$params=json_decode(base64_decode($_GET['data']));
$reg=empty($params->reg)?1113:$params->reg;
$junk=round((empty($params->junk)?9762:(($params->junk)/1024)),2);
$startUp=empty($params->startup)?19:$params->startup;
$internet=empty($params->internet)?21:$params->internet;
$privacy=empty($params->privacy)?2014:$params->privacy;
$ad=empty($params->ad)?376:$params->ad;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>$0 to Back to Latest Advanced SystemCare 12 PRO</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Lato:400,700'>
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
        <h1>Welcome Back & Join $0 Global Presale</h1>
        <h3>Rush! 500 limited quantities available, <span class="soldNum">449</span> sold now</h3>
        <div class="palen clearfix">
          <div class="left fl"><img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="Advanced SystemCare 12 PRO"/></div>
          <div class="right fr">
            <h2>Advanced SystemCare 12 PRO</h2>
            <div class="price">
              <p>
                Now: <del>$49.99</del>
                <img src="<?php echo getStaticUrl('images/price.png')?>" alt=""/>
              </p>
              <ul>
                <li>
                  <span class="surplusGift viewNum"><?php echo $viewNum;?></span> watching , <b class="reduceGift"><span class="packsNum">**</span></b> seats left now!
                </li>
                <li id="bandown" class="countdown">Expected to run out : <b>05</b>M: <b>00</b>S: <b>00</b>Ms</li>
              </ul>
              <div class="progressbar">
                <span></span>
              </div>
              <a class="buybtn" 
                 href="https://www.iobit.com/buy.php?product=asc12preorder&ref=asc12preorderexpired<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_asc"
                 onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc12predorderexpired');"
                 data-text="Pre-order Now">
                <span>Pre-order Now</span>
              </a>
              <h5>1 Year Subscription / 3 PCs</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- banner end -->

    <!-- flow start -->
    <div class="flow wrapper clearfix">
      <p>If satisfied, get 60% OFF original price 30 days after pre-order</p>
      <h2>$0 pre-order today</h2>
      <p>If unsatisfied, cancel within 30 days without paying a fee</p>
    </div>
    <!-- flow end -->

    <!-- intro-part01 start -->
    <div class="intro intro-part01">
      <div class="wrapper">
        <h3>Let’s Flashback: </h3>
        <h2>How’s Your Computer with Advanced SystemCare 11 PRO?</h2>
        <div class="event">
          <!-- bight -->
          <div class="bight"></div>
          <!-- optimized for faster PC -->
          <dl class="optimized clearfix">
            <dd class="fr">
              <p>
                <strong class="startupNum"><?php echo $startUp;?></strong> startup items and<br>
                <strong class="browserNum"><?php echo $internet;?></strong> browser settings<br>
                optimized for faster PC
              </P>
              <span></span>
            </dd>
            <dt class="fr"><img src="<?php echo $pResUrl;?>images/intro-icon01.png" alt=""></dt>
          </dl>
          <!-- during online surfing  -->
          <dl class="online clearfix">
            <dd>
              <p>
                <strong class="personalNum"><?php echo $privacy;?></strong> personal trace and<br>
                <strong class="popupNum"><?php echo $ad;?></strong> pop-up ads removed<br>
                during online surfing
              </P>
              <span></span>
            </dd>
            <dt class="fr"><img src="<?php echo $pResUrl;?>images/intro-icon02.png" alt=""></dt>
          </dl>
          <!-- to free up disk  -->
          <dl class="disk">
            <dd>
              <p>
                <strong class="bytesNum"><?php echo $junk;?></strong> MB junk files and<br>
                <strong class="regNum"><?php echo $reg;?></strong> registries deleted<br>
                to free up disk
              </P>
              <span></span>
            </dd>
            <dt><img src="<?php echo $pResUrl;?>images/intro-icon03.png" alt=""></dt>
          </dl>
          <!-- Better PC Performance -->
          <p class="better">Better PC Performance</p>
        </div>
      </div>
    </div>
    <!-- intro-part01 end -->

    <!-- intro-part02 start -->
    <div class="intro intro-part02">
      <div class="wrapper clearfix">
        <h3>From Now on: </h3>
        <h2>1 Explore Features Only Available on New Advanced SystemCare 12 PRO</h2>
        <img class="intro-pc fl" src="<?php echo $pResUrl;?>images/intro-pc.jpg" alt="">
        <div class="right-message fr">
          <!-- Privacy Shield -->
          <dl>
            <dt><img src="<?php echo $pResUrl;?>images/intro-icon04.png" alt=""></dt>
            <dd>
              <h4>Privacy Shield <span>exclusive</span></h4>
              <p>Sensitive data stay unrevealed for untrusted programs.</p>
            </dd>
          </dl>
          <!-- Digital Fingerprint Protection -->
          <dl>
            <dt><img src="<?php echo $pResUrl;?>images/intro-icon05.png" alt=""></dt>
            <dd>
              <h4>Digital Fingerprint Protection <span>exclusive</span></h4>
              <p>No hackers can track and invade your personal information.</p>
            </dd>
          </dl>
          <!-- Unfinished Downloads File Cleaning -->
          <dl>
            <dt><img src="<?php echo $pResUrl;?>images/intro-icon06.png" alt=""></dt>
            <dd>
              <h4>Unfinished Downloads File Cleaning <span>exclusive</span></h4>
              <p>Quickly get rid of unfinished downloaded files to free up disk<br> space.</p>
            </dd>
          </dl>
        </div>
      </div>
    </div>
    <!-- intro-part02 end -->

    <!-- intro-part03 start -->
    <div class="intro intro-part03">
      <div class="wrapper clearfix">
        <h2>Enjoy Important Improvements Comparing to Advanced SystemCare 11 PRO</h2>
        <!-- Cleaner -->
        <dl class="cleaner fl">
          <dt>
            <h4>Cleaner</h4>
            <img src="<?php echo $pResUrl;?>images/intro-cleaner.png" alt="">
          </dt>
          <dd>
            <img src="<?php echo $pResUrl;?>images/intro-more30.png" alt="">
            <p>Spare Disk Space</p>
          </dd>
        </dl>
        <!-- Faster -->
        <dl class="faster fl">
          <dt>
            <h4>Faster</h4>
            <img src="<?php echo $pResUrl;?>images/intro-faster.png" alt="">
          </dt>
          <dd>
            <img src="<?php echo $pResUrl;?>images/intro-faster20.png" alt="">
            <p>PC Startup</p>
          </dd>
        </dl>
        <!-- Safer -->
        <dl class="safer fl">
          <dt>
            <h4>Safer</h4>
            <img src="<?php echo $pResUrl;?>images/intro-safer.png" alt="">
          </dt>
          <dd>
            <img src="<?php echo $pResUrl;?>images/intro-more40.png" alt="">
            <p>Ads Removal</p>
          </dd>
        </dl>
      </div>
    </div>
    <!-- intro-part03 end -->

    <!-- centbuy start -->
    <div class="centbuy">
      <div class="wrapper">
        <h2>Only<b>$0</b> <span>to Back to PRO and Enjoy All These Exciting Features!</span></h2>
        <a class="buybtn" 
           href="https://www.iobit.com/buy.php?product=asc12preorder&ref=asc12preorderexpired<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc12predorderexpired');"
           data-text="Pre-order Now">
          <span>Pre-order Now</span>
        </a>
        <p class="price">1 Year Subscription / 3 PCs</p>
      </div>
    </div>
    <!-- centbuy end -->

    <!-- intro-part04 start -->
    <div class="intro-part04">
      <div class="wrapper">
        <h3>
          Without PRO Version Now,<br>
          Are You Suffering Following Problems?
        </h3>
        <div class="intro-top clearfix">
          <!-- slow computer -->
          <dl class="fl clearfix">
            <dd class="fl">
              <strong>Slow Computer</strong> taking too long to<br>
              respond and load webpages
            </dd>
            <dt class="fr"><img src="<?php echo $pResUrl;?>images/intro-icon08.png" alt=""></dt>
          </dl>
          <!-- system freezes or crashes -->
          <dl class="fr clearfix">
            <dt class="fl"><img src="<?php echo $pResUrl;?>images/intro-icon09.png" alt=""></dt>
            <dd class="fr">
              Occasionally encounter sudden<br>
              <strong>system freezes or crashes</strong>
            </dd>
          </dl>
        </div>
        <div class="intro-bottom clearfix">
          <!-- cluttering up -->
          <dl class="fl clearfix">
            <dd class="fl">
              Useless and unimportant files<br>
              <strong>cluttering up</strong> your hard drive
            </dd>
            <dt class="fr"><img src="<?php echo $pResUrl;?>images/intro-icon10.png" alt=""></dt>
          </dl>
          <!-- annoying ads -->
          <dl class="fr clearfix">
            <dt class="fl"><img src="<?php echo $pResUrl;?>images/intro-icon11.png" alt=""></dt>
            <dd class="fr">
              <strong>Annoying ads</strong> pop up every time<br>
              you surfing online
            </dd>
          </dl>
        </div>
        <h2>It’s Time to Turn to Advanced SystemCare 12 PRO with <b>$0</b></h2>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=asc12preorder&ref=asc12preorderexpired<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc12predorderexpired');"
           data-text="Pre-order Now">
          <span>Pre-order Now</span>
        </a>
        <p class="price">1 Year Subscription / 3 PCs</p>
      </div>
    </div>
    <!-- intro-part04 end -->

    <!-- review start -->
    <div class="review wrapper">
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
              <h4>"My choice is still overwhelmingly Advanced SystemCare Pro"</h4>
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
          As being trusted and awarded by those world-class media in the past ten years, you know you’ve got the right PC optimizer.
        </p>
        <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
      </div>
    </div>
    <!-- awards end -->

    <div class="bottom">
      <div class="wrapper">
        <!-- service start -->
        <div class="service clearfix">
          <dl>
            <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
            <dd>
              <h4>Money Back Guarantee</h4>
              <p>If you're not satisfied in the first 60 days, we will give you back your money.</p>
            </dd>
          </dl>
          <dl>
            <dt><img src="<?php echo getStaticUrl('images/godaddy.png')?>" alt=""/></dt>
            <dd>
              <h4>Secure Payment</h4>
              <p>IObit supports several safe modes of payment.</p>
            </dd>
          </dl>
          <dl>
            <dt><img src="<?php echo getStaticUrl('images/car.png')?>" alt=""/></dt>
            <dd>
              <h4>Get License</h4>
              <p>You will receive the license within a few minutes after purchase.</p>
            </dd>
          </dl>
        </div>
        <!-- service end -->

        <!-- footer start -->
        <div class="footer">
          <dl>
            <dd>
              *At the end of the 30-day free trial period, your credit card or PayPal account will be charged $19.99 automatically. This 60% discount from the original price of $49.99 is bonus only for preorders!
            </dd>
            <dd>*.Data may vary based on different system or computer.</dd>
          </dl>
          <p>Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p>
        </div>
        <!-- footer end -->
      </div>
    </div>

    <!-- floatlayer start -->
    <div id="floatlayer" class="floatlayer">
      <div class="wrapper clearfix">
        <img class="fl" src="<?php echo getStaticUrl('images/asc-small-box.png')?>" alt="Advanced SystemCare 12 PRO"/>
        <div class="price fl">
          <ul>
            <li>
              <span class="surplusGift viewNum"><?php echo $viewNum;?></span> watching , <b class="reduceGift"><span class="packsNum">**</span></b> seats left now!
            </li>
            <li id="floatdown" class="countdown">Expected to run out : <b>05</b>M: <b>00</b>S: <b>00</b>Ms</li>
          </ul>
          <div class="progressbar">
            <span></span>
          </div>
        </div>
        <a class="buybtn fr" 
           href="https://www.iobit.com/buy.php?product=asc12preorder&ref=asc12preorderexpired<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc12predorderexpired');"
           data-text="$0 Pre-order Now">
          <span>$0 Pre-order Now</span>
        </a>
      </div>
    </div>
    <!-- floatlayer end -->
  </div>

  <script src="<?php echo $pRootUrl;?>tpl/js/TweenMax.min.js"></script>
  <script src="<?php echo getStaticUrl('script/modernizr.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/review-3d-carousel.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
  <script>
    var imgUrl = "<?php echo getStaticUrl('images/asc-off-box.png')?>";
    var _ga = "ga('send', 'event', 'asc1677buy', 'buy', 'asc12predorderexpired');";
    var _url = "https://www.iobit.com/buy.php?product=asc12preorder1677&ref=asc12preorderexpired1677<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_asc";
  </script>

</body>
</html>