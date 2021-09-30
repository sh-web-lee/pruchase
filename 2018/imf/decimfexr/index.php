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
  $cName='imfprepa'.$date;
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
<title>65% OFF to Get Full, Smarter and Faster Protection - Christmas Sale | IObit</title>
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
          <h4>Your registered IObit Malware Fighter Pro has expired!</h4>
          <h1>Welcome Back and We Miss You</h1>
        </div>
        
        <div class="palen clearfix">
          <div class="left fl">
            <img src="<?php echo getStaticUrl('images/imf-box.png')?>" alt="IObit Malware Fighter PRO"/>
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
                  <li id="bandown" class="countdown fr">Hurry! <b>05</b>M:<b>00</b>S:<b class="last">00</b> Ms Left</li>
                </ul>
              </div>
              <p><strong>$<big>19</big>.95</strong> <del>$54.95</del></p>
              <a class="buybtn" href="https://www.iobit.com/buy.php?product=imf63pc1995&ref=xr_imfe&refs=purchase_imfex" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfepurchase-xmas');">
                Activate Now
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
        <h4>Since Being With You, </h4>
        <h2>What Did IObit Malware Fighter PRO Do for You</h2>
        <div class="panel clearfix">
          <div class="screen fl">
            <img src="<?php echo getStaticUrl('images/screen.png')?>" alt="IObit Malware Fighter PRO"/>
          </div>
          <div class="right fr">
            <dl class="one">
              <dt>1</dt>
              <dd>
                <h3>Provide Dual PC Protection</h3>
                <p>
                  Advanced Bitdefender Anti-virus Engine & IObit Anti-Malware Engine ensure your PC free from various viruses and malware.
                </p>
              </dd>
            </dl>
            <dl class="two">
              <dt>2</dt>
              <dd>
                <h3>Block Ransomware Attack</h3>
                <p>
                  Detect & avoid ransomware attacks proactively, and disable infected ransomware from encrypting your files.
                </p>
              </dd>
            </dl>
            <dl class="three">
              <dt>3</dt>
              <dd>
                <h3>Complete Protect in Real Time</h3>
                <p>
                  Automatically block & remove millions of threats in real time.
                </p>
              </dd>
            </dl>
            <dl class="four">
              <dt>4</dt>
              <dd>
                <h3>Ensure Privacy Security</h3>
                <p>
                  Auto clean surfing traces and harmful tracking data with Browser Anti-Tracking.
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
        <h2>Without IObit Malware Fighter PRO,</h2>
        <p><i class="all-icons"></i> What Will You Lose <i class="all-icons right"></i></p>
        <table border="0" cellspacing="0" cellpadding="0" width="100%">
          <thead>
            <tr>
              <th class="red"><img src="<?php echo getStaticUrl('images/problems.png')?>" alt="PROTECTION"/></th>
              <th><b>B</b>itdefender Anti-virus Engine</th>
              <th><b>I</b>Obit Anti-ransomware Engine</th>
              <th><b>I</b>Obit Anti-malware Engine</th>
              <th><b>R</b>eal-time PC Protection</th>
              <th><b>S</b>afeguard Your Camera</th>
              <th><b>A</b>uto Clean Surfing Trace</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="itema red">IObit Malware Fighter <br>PRO</td>
              <td class="itema">
                <i class="all-icons">√</i> <span>Available</span>
              </td>
              <td class="itema">
                <i class="all-icons">√</i> <span>Available</span>
              </td>
              <td class="itema">
                <i class="all-icons">√</i> <span>Comprehensive</span>
              </td>
              <td class="itema">
                <i class="all-icons">√</i> <span>Comprehensive</span>
              </td>
              <td class="itema">
                <i class="all-icons">√</i> <span>Available</span>
              </td>
              <td class="itema">
                <i class="all-icons">√</i> <span>Available</span>
              </td>
            </tr>
            <tr>
              <td class="itemb black">IObit Malware Fighter FREE <p>Your Current Edition</p></td>
              <td class="itemb">
                <i class="all-icons fork">×</i> <span>Unavailable</span>
              </td>
              <td class="itemb">
                <i class="all-icons fork">×</i> <span>Unavailable</span>
              </td>
              <td class="itemb last">
                <i class="all-icons circle">×</i> <span>Basic</span>
              </td>
              <td class="itemb last">
                <i class="all-icons circle">×</i> <span>Basic</span>
              </td>
              <td class="itemb">
                <i class="all-icons fork">×</i> <span>Unavailable</span>
              </td>
              <td class="itemb">
                <i class="all-icons fork">×</i> <span>Unavailable</span>
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
        <h2>Now Come Back with New IObit Malware Fighter PRO</h2>
        <p>Get More Complete Cyber-security Protection for A Whole Year</p>
        <div class="clearfix">
          <dl>
            <dt><img src="<?php echo getStaticUrl('images/new-icon01.png')?>" alt=""/></dt>
            <dd>
              <h4>Folder Protection</h4>
              <p><span class="green">NEW</span></p>
            </dd>
          </dl>
          <dl class="center">
            <dt><img src="<?php echo getStaticUrl('images/new-icon02.png')?>" alt=""/></dt>
            <dd>
              <h4>Boot-time Guard</h4>
              <p><span class="green">NEW</span></p>
            </dd>
          </dl>
          <dl>
            <dt><img src="<?php echo getStaticUrl('images/new-icon03.png')?>" alt=""/></dt>
            <dd>
              <h4>More Threats Can Be Detected</h4>
              <p><span>Enhanced</span></p>
            </dd>
          </dl>
          <dl>
            <dt><img src="<?php echo getStaticUrl('images/new-icon04.png')?>" alt=""/></dt>
            <dd>
              <h4>Faster Camera Guard Scan</h4>
              <p><span>Enhanced</span></p>
            </dd>
          </dl>
        </div>
        <div class="price">
          <a class="buybtn bigbtn" href="https://www.iobit.com/buy.php?product=imf63pc1995&ref=xr_imfe&refs=purchase_imfex" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfepurchase-xmas');">
            Renew Now & Save 65%
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
          As being trusted and awarded by those world-class media in the past five years, you know you’ve got the right PC protection
        </p>
        <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
      </div>
    </div>
    <!-- awards end -->

    <!-- review start -->
    <div class="review wrapper">
      <h2>Trusted by 5,500,000 Users</h2>
      <div id="dg-container" class="dg-container">
        <div class="nav">
          <span class="dg-prev"></span>
          <span class="dg-next"></span>
        </div>
        <div class="content dg-wrapper">
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/software-informer.png')?>" alt="software.informer"></dt>
            <dd>
              <h2>Media Review</h2>
              <p>
                The program uses two AV engines, its own and BitDefender, and seems to be effective against malware that cannot be detected by other similartools so it is good that it can run together with your standard AV software. It can detect a wide array of spyware, ransomware, adware, Trojans, worms, keyloggers and bots.
              </p>
              <cite>software.informer</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/david-cassidy.png')?>" alt="David Cassidy"></dt>
            <dd>
              <h2>User Review</h2>
              <p>
                "I would like to say a great thanks to all the staff at IObit for working hard to bring us the best programs out. It is great update you have made for your users. It is lot quicker at scanner and easy to use. People who really want a good Malware and ant-virus program which is also good value for money need to look no further than IObit Malware Fighter. I would recommend that they forget the rest and get the best which is IObit Malware Fighter."
              </p>
              <cite>David Cassidy</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/gelu-batir.png')?>" alt="Gelu Batir"></dt>
            <dd>
              <h2>User Review</h2>
              <p>
                I am very satisfied with your product IObit Maleware Fighter. Previously this product came to me I had a lot of troubles with malicious interferences, I was not able to watch an entire movie or concert, which I like very much. Due to your product now every operation is clear, safe and well protected. It scans my laptop without affecting its performance while I also recommended this product to two of my friends.
              </p>
              <cite>Gelu Batir</cite>
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
                We’re confident that activating PRO edition will ensure your PC security for affordable price!
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
          <img class="fl" src="<?php echo getStaticUrl('images/imf-small-box.png')?>" alt="IObit Malware Fighter PRO"/>
          <div class="price fl">
            <div class="count">
              <ul class="clearfix">
                <li class="fl"><span class="surplusGift viewNum"><?php echo $viewNum;?></span> watching, <span class="packsNum"><?php echo $viewNum;?></span> seats left now! </li>
                <li id="bandown" class="countdown fr">Hurry! <b>05</b>M:<b>00</b>S:<b class="last">00</b>Ms Left</li>
              </ul>
              <div class="progressbar">
                <span></span>
              </div>
            </div>
          </div>
          <!-- buybtn -->
          <a class="buybtn yellow fr" href="https://www.iobit.com/buy.php?product=imf63pc1995&ref=xr_imfe&refs=purchase_imfex" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfepurchase-xmas');">
            Activate Now
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
          <img src="<?php echo getStaticUrl('images/imf-box.png')?>" alt="IObit Malware Fighter PRO"/>
        </div>
        <div class="price fl">
          <img src="<?php echo getStaticUrl('images/pop-off.png')?>" alt="45% OFF"/>
          <p><strong>$<big>23</big>.99</strong> <del>$54.95</del></p>
          <a class="buybtn yellow" href="https://www.iobit.com/buy.php?product=imf63pc2399&ref=xr_imfe2399&ref=purchase_imfex" onclick="ga('send', 'event', 'imfbuypop', 'buy', 'imfepurchase-xmas');">
            Activate Now
          </a>
          <p class="year">1 Year Subscription / 3 PCs</p>
        </div>
      </div>
    </div>
    <!-- mask end -->

  </div>
  <script>var viewNum = "<?php echo $viewNum;?>";</script>
  <script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
  <script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.min.js')?>"></script>

</body>
</html>