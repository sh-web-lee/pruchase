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
$refStr=(empty($_GET['ref'])?'':('-'.$_GET['ref'])).(empty($_GET['st'])?'':('-'.$_GET['st']));
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Pay $0 to pre-order the new Advanced SystemCare PRO</title>
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
        <h1>The Global Presale Is Live</h1>
        <h3>Rush! 500 limited quantities available, <span class="soldNum">453</span> sold now</h3>
        <div class="palen clearfix">
          <div class="left fl"><img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt=""/></div>
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
                 href="https://www.iobit.com/buy.php?product=asc12preorder&ref=asc12preorderrc<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_asc"
                 onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc12predorderrc');"
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

    <!-- intro start -->
    <div class="intro wrapper">
      <h2>Pre-order Now to Unlock the Following PRO Features</h2>
      <div class="panel">
        <img src="<?php echo getStaticUrl('images/screen.png')?>" alt=""/>
        <dl class="first">
          <dt><img src="<?php echo getStaticUrl('images/icons01.png')?>" alt=""/></dt>
          <dd>
            <h4>Clean and Optimization</h4>
            <h5>Speed up slow computer up to 200% faster</h5>
            <p>
              Clean up all useless files and optimize CPU and RAM for <br> a 2 times faster startup and system running.
            </p>
          </dd>
        </dl>
        <dl class="two">
          <dt><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt=""/></dt>
          <dd>
            <h4>Internet Booster</h4>
            <h5>Accelerate Internet connection up to 300% faster</h5>
            <p>Optimize browser settings for a 3 times faster downloading, <br> web surfing, online gaming and YouTube viewing.</p>
          </dd>
        </dl>
        <dl class="three">
          <dt><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt=""/></dt>
          <dd>
            <h4>Digital Fingerprint Protection</h4>
            <h5>No one can know the things you do online</h5>
            <p>Prevent trackers from snooping on what you read, view, <br> and purchase by disguising your digital fingerprint.</p>
          </dd>
        </dl>
        <dl class="four">
          <dt><img src="<?php echo getStaticUrl('images/icons04.png')?>" alt=""/></dt>
          <dd>
            <h4>Privacy Shield</h4>
            <h5>Block secret access to your files and photos</h5>
            <p>Inform you when there is a secret access to your private <br> files and photos and allow you to block it.</p>
          </dd>
        </dl>
      </div>
    </div>
    <!-- intro end -->
    <!-- comparison start -->
    <div class="comparison" id="compare">
      <div class="wrapper">
        <h2>Learn More About PRO Edition</h2>
        <table border="0" cellspacing="0" cellpadding="0" width="100%">
          <thead>
            <tr>
              <th class="itema">Advanced SystemCare 12 FREE <span>Your Current Version</span></th>
              <th class="space"></th>
              <th class="itemb"><img src="<?php echo getStaticUrl('images/vs.png')?>"></th>
              <th class="space"></th>
              <th class="itemc">Advanced SystemCare 12 PRO    </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="itema"><i class="pro"></i></td>
              <td class="space"></td>
              <td class="itemb"><span><img src="<?php echo getStaticUrl('images/icons_01.png')?>" alt=""></span> Basic system clean, fix and optimization</td>
              <td class="space"></td>
              <td class="itemc"><i class="pro"></i></td>
            </tr>
            <tr>
              <td class="itema"><i class="close"></i></td>
              <td class="space"></td>
              <td class="itemb"><span><img src="<?php echo getStaticUrl('images/icons_02.png')?>" alt=""></span> Block unauthorized access to your private files</td>
              <td class="space"></td>
              <td class="itemc"><i class="pro"></i></td>
            </tr>
            <tr>
              <td class="itema"><i class="close"></i></td>
              <td class="space"></td>
              <td class="itemb"><span><img src="<?php echo getStaticUrl('images/icons_03.png')?>" alt=""></span> Prevent spyware and malware in real time</td>
              <td class="space"></td>
              <td class="itemc"><i class="pro"></i></td>
            </tr>
            <tr>
              <td class="itema"><i class="close"></i></td>
              <td class="space"></td>
              <td class="itemb"><span><img src="<?php echo getStaticUrl('images/icons_04.png')?>" alt=""></span> Reduce and repair system crashes and errors</td>
              <td class="space"></td>
              <td class="itemc"><i class="pro"></i></td>
            </tr>
            <tr>
              <td class="itema"><i class="close"></i></td>
              <td class="space"></td>
              <td class="itemb"><span><img src="<?php echo getStaticUrl('images/icons_05.png')?>" alt=""></span> Speed up computer up to 200% faster</td>
              <td class="space"></td>
              <td class="itemc"><i class="pro"></i></td>
            </tr>
            <tr>
              <td class="itema"><i class="close"></i></td>
              <td class="space"></td>
              <td class="itemb"><span><img src="<?php echo getStaticUrl('images/icons_06.png')?>" alt=""></span> Accelerate Internet speed up to 300% faster</td>
              <td class="space"></td>
              <td class="itemc"><i class="pro"></i></td>
            </tr>
            <tr>
              <td class="itema"><i class="close"></i></td>
              <td class="space"></td>
              <td class="itemb"><span><img src="<?php echo getStaticUrl('images/icons_07.png')?>" alt=""></span> Auto keep essential programs up-to-date</td>
              <td class="space"></td>
              <td class="itemc"><i class="pro"></i></td>
            </tr>
            <tr>
              <td class="itema"><i class="close"></i></td>
              <td class="space"></td>
              <td class="itemb"><span><img src="<?php echo getStaticUrl('images/icons_08.png')?>" alt=""></span> Auto remove privacy traces for safe browsing</td>
              <td class="space"></td>
              <td class="itemc"><i class="pro"></i></td>
            </tr>
            <tr>
              <td class="itema last"><i class="close"></i></td>
              <td class="space"></td>
              <td class="itemb"><span><img src="<?php echo getStaticUrl('images/icons_09.png')?>" alt=""></span> Auto update to the latest version</td>
              <td class="space"></td>
              <td class="itemc last"><i class="pro"></i></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <!-- comparison end -->

    <!-- centbuy start -->
    <div class="centbuy">
      <div class="wrapper">
        <h2>Pre-order for <b>$0</b> Now to Make Your PC Faster, Cleaner and More Secure!</h2>
        <a class="buybtn" 
           href="https://www.iobit.com/buy.php?product=asc12preorder&ref=asc12preorderrc<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc12predorderrc');"
           data-text="Pre-order Now">
          <span>Pre-order Now</span>
        </a>
        <ul class="price">
          <li><span class="surplusGift viewNum"><?php echo $viewNum;?></span> watching , <b class="reduceGift"><span class="packsNum">**</span></b> seats left now!</li>
        </ul>
      </div>
    </div>
    <!-- centbuy end -->

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
          </dl>
          <p>Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p>
        </div>
        <!-- footer end -->
      </div>
    </div>

    <!-- floatlayer start -->
    <div id="floatlayer" class="floatlayer">
      <div class="wrapper clearfix">
        <img class="fl" src="<?php echo getStaticUrl('images/asc-small-box.png')?>" alt=""/>
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
           href="https://www.iobit.com/buy.php?product=asc12preorder&ref=asc12preorderrc<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc12predorderrc');"
           data-text="Pre-order Now">
          <span>Pre-order Now</span>
        </a>
      </div>
    </div>
    <!-- floatlayer end -->

  </div>
  <script>
    refStr='<?php echo $refStr;?>';
  </script>
  <script src="<?php echo $pRootUrl;?>tpl/js/TweenMax.min.js"></script>
  <script src="<?php echo getStaticUrl('script/modernizr.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/review-3d-carousel.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>

</body>
</html>