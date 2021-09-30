<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
  $pResUrl = './';
  $pRootUrl = '../../../../';
}
include $pRootUrl.'include/common.inc.php';

if (empty($_GET['ref'])) $_GET['ref'] = 'enaff_asc12_2018xmas';
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
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>65% OFF to Get Cleaner, Faster and More Secure PC - Christmas Sale | IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>

<body>

<div class="main">

  <!-- banner start -->
  <div class="banner">
    <div class="flower clearfix">
      <img class="fl" src="<?php echo $pResUrl;?>images/banner-left.png" alt="">
      <img class="fr" src="<?php echo $pResUrl;?>images/banner-right.png" alt="">
    </div>
    <div class="wrapper">
      <!-- logo -->
      <a class="logo" href="https://www.iobit.com" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
      </a>
      <!-- title -->
      <div class="title">
        <h1>Merry Christmas! Special Sale</h1>
        <p>Last chance to Save Big-Once Per Year Only!</p>
      </div>
      <!-- palen -->
      <div class="palen clearfix">
        <!-- left-message -->
        <div class="left fl">
          <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="Advanced SystemCare 12 Pro"/>
          <img class="balloon" src="<?php echo getStaticUrl('images/balloon.png')?>" alt="">
        </div>
        <!-- right-message -->
        <div class="right fr">
          <h2>Advanced SystemCare 12 Pro</h2>
          <div class="price">
            <!-- progress bar -->
            <div class="count">
              <p class="watching">
                <i class="all-icons"></i> <b id="packbox" class="reduceGift packbox"><span><b class="list"><strong>*</strong></b></span><span class="last"><b class="list"><strong>*</strong></b></span></b> seats left now!
              </p>
              <div class="progressbar">
                <span></span>
              </div>
              <ul class="clearfix">
                <li class="fl"><span class="surplusGift viewNum"><?php echo $viewNum;?></span> watching</li>
                <li id="bandown" class="countdown fr">Hurry! <b>05</b>M:<b>00</b>S:<b class="last">000</b> Ms Left</li>
              </ul>
            </div>
            <p class="rate"><strong>$<big>16</big>.77</strong> <del>$49.99</del></p>
            <!-- buybtn -->
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=enaff-asc123pc1677&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>"
               onclick="ga('send', 'event', 'ascbuy', 'buy', 'enaffasc122018xmas');">
              Activate Now
            </a>
            <img class="moneyback" src="<?php echo $pResUrl;?>images/moneyback.png" alt="">
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
      <!-- title -->
      <h2>Get Full Cleaning, Optimization and Protection Tool for Affordable Price!</h2>
      <!-- describe -->
      <p class="over">
        Over 35,000,000 worldwide users choose Advanced SystemCare Pro as their PC optimization tool to make their old PC run like new one and optimize new PC for faster running.
      </p>
      <!-- content -->
      <div class="container clearfix">
        <!-- feature-message -->
        <div class="feature-message fl">
          <!-- 200 faster pc -->
          <dl>
            <dt>200%* Faster PC <span class="red">Enhanced</span></dt>
            <dd>
              Reduce system stutter/lag and <br>
              speed up PC up to <b>200% faster</b>.
            </dd>
          </dl>
          <!--- deeper clean -->
          <dl class="down">
            <dt>Deeper Clean <span class="red">Enhanced</span></dt>
            <dd>
              Auto release RAM for <b>better PC <br>
                performance</b>, and fix registry <br>
              issues for stable system.
            </dd>
          </dl>
        </div>
        <!-- feature-icons -->
        <div class="feature-icons fl">
          <!-- icon01 -->
          <dl class="icon icon01">
            <dt><img src="<?php echo $pResUrl;?>images/feature-icon01.png" alt=""></dt>
            <dd>
              <span class="line"></span>
              <i class="point"></i>
            </dd>
          </dl>
          <!-- icon02 -->
          <dl class="icon icon02">
            <dd>
              <i class="point"></i>
              <span class="line"></span>
            </dd>
            <dt><img src="<?php echo $pResUrl;?>images/feature-icon02.png" alt=""></dt>
          </dl>
          <!-- icon03 -->
          <dl class="icon icon03">
            <dt><img src="<?php echo $pResUrl;?>images/feature-icon03.png" alt=""></dt>
            <dd>
              <span class="line"></span>
              <i class="point"></i>
            </dd>
          </dl>
          <!-- icon04 -->
          <dl class="icon icon04">
            <dd>
              <i class="point"></i>
              <span class="line"></span>
            </dd>
            <dt><img src="<?php echo $pResUrl;?>images/feature-icon04.png" alt=""></dt>
          </dl>
        </div>
        <!-- feature-message -->
        <div class="feature-message fr">
          <!-- 300%* Faster -->
          <dl>
            <dt>300%* Faster <span class="red">Enhanced</span></dt>
            <dd>
              Accelerate download, surfing, gaming,
              YouTube viewing up to <b> 300% faster</b>.
            </dd>
          </dl>
          <!--- safer privacy -->
          <dl class="down">
            <dt>Safer Privacy <span class="yellow">New</span></dt>
            <dd>
              <b>Erase privacy traces</b> to prevent from
              being tracked, and keep your sensitive
              data from any secret access.
            </dd>
          </dl>
        </div>
      </div>
    </div>
  </div>
  <!-- feature end -->

  <!-- centbuy start -->
  <div class="centbuy">
    <h2>Get Pro for cleaner, faster and more secure PC!</h2>
    <div class="wrapper clearfix">
      <div class="fl">
        <img src="<?php echo getStaticUrl('images/asc-small-box.png')?>" alt="Advanced SystemCare 12 Pro"/>
      </div>
      <div class="price fr">
        <div class="count">
          <p class="watching">
            <span class="surplusGift viewNum"><?php echo $viewNum;?></span> watching, <b id="packbox" class="reduceGift packbox"><span><b class="list"><strong>*</strong></b></span><span class="last"><b class="list"><strong>*</strong></b></span></b> seats left now!
          </p>
        </div>
        <p><strong>$<big>16</big>.77</strong> <del>$49.99</del></p>
        <!-- buybtn -->
        <a class="buybtn yellow"
           href="https://www.iobit.com/buy.php?product=enaff-asc123pc1677&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'enaffasc122018xmas');">
          Activate Now
        </a>
        <img class="moneyback" src="<?php echo $pResUrl;?>images/moneyback.png" alt="">
        <p class="year">1 Year Subscription / 3 PCs</p>
      </div>
    </div>
  </div>
  <!-- centbuy end -->

  <!-- comparison start -->
  <div class="comparison" id="compare">
    <div class="wrapper">
      <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <thead>
        <tr>
          <th class="itemb"><span>To See Clearly What You Will Get from Pro, <br><span>if You Activate Now:</span></span></th>
          <th class="itemc"><span>Advanced SystemCare <b>PRO</b></span></th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td class="itemb">Basic system clean, fix and optimization</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itemb">Block unauthorized access to your private files</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itemb">Prevent spyware and malware in real time</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itemb">Reduce and repair system crashes and errors</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itemb">Speed up computer up to 200% faster</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itemb">Accelerate Internet speed up to 300% faster</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itemb">Auto keep essential programs up-to-date</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itemb">Auto remove privacy traces for safe browsing</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itemb">Auto update to the latest version</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itemb"></td>
          <td class="itemc last"></td>
        </tr>
        </tbody>
      </table>
    </div>
  </div>
  <!-- comparison end -->

  <!-- footbuy start -->
  <div class="footbuy wrapper">
    <h3>DON'T MISS OUT!</h3>
    <h2>Get Exclusive 65% OFF to Care You and Yours for a Whole Year.</h2>
    <div class="price">
      <p class="rate"><strong>$<big>16</big>.77</strong> <del>$49.99</del></p>
      <a class="buybtn"
         href="https://www.iobit.com/buy.php?product=enaff-asc123pc1677&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>"
         onclick="ga('send', 'event', 'ascbuy', 'buy', 'enaffasc122018xmas');">
        Activate Now
      </a>
      <p id="footdown" class="countdown">Hurry! <b>05</b>M:<b>00</b>S:<b class="last">000</b>Ms Left</p>
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

  <!-- floatlayer start -->
  <div class="floatlayer">
    <div class="wrapper clearfix">
      <!-- box -->
      <img class="fl" src="<?php echo $pResUrl;?>images/asc-floatlayer-box.png" alt="">
      <!-- progress bar -->
      <div class="price fl">
        <div class="count">
          <ul class="clearfix">
            <li class="fl"><span class="surplusGift viewNum"><?php echo $viewNum;?></span> watching, <span class="packsNum"><?php echo $viewNum;?></span> seats left now! </li>
            <li id="bandown" class="countdown fr">Hurry! <b>05</b>M:<b>00</b>S:<b class="last">000</b>Ms Left</li>
          </ul>
          <div class="progressbar">
            <span></span>
          </div>
        </div>
      </div>
      <!-- buybtn -->
      <a class="buybtn yellow fr"
         href="https://www.iobit.com/buy.php?product=enaff-asc123pc1677&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>"
         onclick="ga('send', 'event', 'ascbuy', 'buy', 'enaffasc122018xmas');">
        Activate Now
      </a>
    </div>
  </div>
  <!-- floatlayer end -->

  <!-- mask start -->
  <div class="mask"></div>
  <div class="mask-box">
    <div class="title">
      <h2>SURPRISE!! Merry Christmas!</h2>
    </div>
    <div class="clearfix">
      <div class="fl left">
        <img src="<?php echo getStaticUrl('images/asc-mask-box.png')?>" alt="Advanced SystemCare 12 Pro"/>
      </div>
      <div class="price fl">
        <h3>Extra $ <b>1</b> OFF as our gift for you!</h3>
        <p><strong>Only $<big>15</big>.<sup>77</sup></strong> <b>1 year / 3 PCs</b></p>
        <a class="buybtn yellow"
           href="https://www.iobit.com/buy.php?product=enaff-asc123pc1577&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'enaffasc122018xmas');">
          Activate Now
        </a>
        <p class="year">Seize your last chance for the biggest saving ever!</p>
      </div>
    </div>
  </div>
  <!-- mask end -->
    <div class="pop-up">
        <div class="pop-main">
            <div class="pop-box">
                <h2>Note:</h2>
                <p>Thank you for your visiting and your interest in IObit products! This Special Offer is over now.</p>
                <p>You will be redirected to the latest IObit promotion page automatically.</p>
            </div>
        </div>
    </div>
</div>



<!-- backtotop start -->
<div id="backtotop" class="backtotop">top</div>
<!-- backtotop end -->

<script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
<script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
<script>
  var viewNum = "<?php echo $viewNum;?>";
</script>
<script>setTimeout('window.location.href="http://purchase.iobit.com/aff/en/asc/2017asc10general/index.php'+location.search+'"',5000);</script>
</body>
</html>