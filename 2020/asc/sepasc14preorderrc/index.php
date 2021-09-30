<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
    $pResUrl = './';
    $pRootUrl = '../../../';
}
if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'enascrc_p' . $date;
  $c_name_t='enascrc_t' . $date;
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=rand(64,78);
    setcookie($c_name, $packsNum, time() + 3600 * 24);
    setcookie($c_name_t,$totalNum, time() + 3600 * 24);
  } else {
    if (intval($_COOKIE[$c_name]) <= 0) {
      $packsNum = 0;
      setcookie($c_name, $packsNum, time() + 3600 * 24);
    } else {
      $packsNum = $_COOKIE[$c_name] - 1;
      setcookie($c_name, $packsNum, time() + 3600 * 24);
    }
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

$viewNum=rand(99,156);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}
include $pRootUrl.'include/common.inc.php';
include 'lang/en.php';

$refStr = empty($_GET['st'])?'':('-'.$_GET['st']);
$refStr .= empty($_GET['instd'])?'':('-i'.$_GET['instd']);
$ver_arr = explode('.',$_GET['ver']);
$refStr .= empty($_GET['ver']) ? '' : '-'.$ver_arr[0].$ver_arr[1];


$content = $text['content'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php echo $text['title']; ?></title>
<meta name="Copyright" content="IObit">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>

<!-- banner start -->
<div class="sepacesCon">
<div class="banner">
  <div class="wrapper">
    <a class="logo" href="https://www.iobit.com/en/index.php" target="_blank">IObit</a>
    <img src="<?php echo $pResUrl; ?>images/asc-box.png" alt="Advanced SystemCare 14 PRO" class="asc-box"/>
    <div class="right-message">
      <p>The Presale Is On</p>
      <h1>Get PRO Edition for $0 </h1>
      <div class="limitedText">
        Limited to first 500 preorders per day before October 22<span class="minText">nd</span>
      </div>
      <div class="numbox">
        <span id="topNum" class="giftNum">
          <b class="nwrap"><b class="numlist"><span id="numlist01">5</span></b></b>
          <b class="nwrap"><b class="numlist"><span id="numlist02">0</span></b></b>
          <b class="nwrap"><b class="numlist"><span id="numlist03">0</span></b></b>
        </span>
        <span class="tips-text">left now</span><span class="progreBox">
          <span class="minpro"></span>
          <span class="pro_icon"></span>
        </span>     </div>
      <div class="price">
        <span class="Presale">Presale <br> Price:</span>
        <strong>$<b>0</b> <sup>*</sup></strong>
        <div class="soldMsg">1 Year Subscription / 3PCs</div>
          <a href="https://www.iobit.com/buy.php?product=asc14preorder&ref=en-asc14preorderrc<?php echo $refStr; ?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_asc"
             onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc14predorderrc')" class="buybtn">Pre-order Now</a>
      </div>
    </div>
  </div>
</div>
<!-- banner end -->
<!-- <div class="beforeBlack"></div> -->
<div class="feature-main">
  <!-- get pro -->
  <div class="whyGet wrapper">
       <div class="whyGet-title">Why Get PRO?</div>
       <h2 class="why-maxtitle">Optimize with AI-powered Analysis
      </h2>
      <div class="starBg-left">
      </div>
      <div class="starBg-right">
      </div>
      <div class="whyGetList">
        <div class="why-left animation"> <div class="mintitle">Smarter</div>
      <p class="minMsg minMsg01">
        Learn from experience to scan<br/> your computer in an<br/> intelligent way. </p></div>
        <div class="why-center">
          <div class="quickerCon animation">
            <div class="mintitle">Quicker</div>
            <p class="minMsg minMsg02">Only scans modules which are<br/>
                most likely to slow down your<br/>  PC every time.</p>
          </div>
          <div class="aiCon animation"></div>
          <div class="minCircle"></div>
        </div>
        <div class="why-right animation">
          <div class="mintitle">Simpler </div>
          <p class="minMsg minMsg03">Lighten the burden for you, and<br/> all you
             need to do is to click the<br/>  scan button.</p>
        </div>
      </div>
  </div>
  <!-- get pro end -->
  <!-- tab -->
  
  <div class="preNum">
      <div class="preMaxContain wrapper">
      <div class="title">Unlock Premium Features</div>
     <div class="preTab">
       <ul class="preTab-nav" id="barUl">
         <li class="one navactive">Optimization</li>
         <li class="two">Protection</li>
       </ul>
       <div class="preTab-list">
         <div class="list-item list01 clearfix">
            <div class="listitem01 fleft">
              <!-- <div class="rocketIcon animation"></div> -->
              <img class="rocketIcon rocketPlay" src="<?php echo $pResUrl; ?>images/rocket.png" alt="">
            </div>
            <div class="listCon01 fleft animation">
              <div class="optitem optitemTop">
                <div class="text">200% Faster PC</div>
                <p class="conmsg">Speed up computer running up to <span class="gpldBo">200% faster</span> with deeper<br/> clean and optimization.  </p>
              </div>
              <div class="optitem">
                <div class="text">300% Faster Internet.</div>
                <p class="conmsg"> Accelerate download, surfing, gaming, YouTube viewing up<br/>  to <span class="gpldBo">300% faster</span> Internet</p>
              </div>
            </div>
         </div>
         <div class="list-item list02 noneshow  clearfix">
         <div class="listitem02 fleft">
         <!-- <img src="<?php echo $pResUrl; ?>images/feature-box-03.png?t=1600332997" alt="" class="on"> -->
              <img class="bottTuopan" src="<?php echo $pResUrl; ?>images/feature-box-03.png" alt="">
            <span class="light"></span>
            <div class="list001">
              <span class="line"></span>
              <img src="<?php echo $pResUrl; ?>images/feature-03-03.png" alt="">
            </div>
            <div class="list002">
              <span class="line"></span>
              <img src="<?php echo $pResUrl; ?>images/feature-03-04.png" alt="">
            </div>
            <div class="list003">
              <span class="line"></span>
              <img src="<?php echo $pResUrl; ?>images/feature-03-05.png" alt="">
            </div>
            <div class="list004 animation"></div>
            <div class="list005"></div>
            <div class="list006"></div>
            <div class="safe"></div>
             
         </div>
         <div class="listCon02 animation">
         
         <div class="optitem optitemTop">
                <div class="text">Privacy Protection</div>
                <p class="conmsg">
                Stop untrusted programs to access your sensitive
                 data<br/> like contact, e-mail data, Dropbox, OneDrive etc.
                            </p>
              </div>
              <div class="optitem">
                <div class="text">Safe Browsing</div>
                <p class="conmsg">
                Auto clear browsing data and hide your 
                trace to prevent trackers<br/> from snooping on what you read, view and purchase.
                            </p>
              </div>
         </div>
         </div>
       </div>
     </div>
        </div>
  </div>
  <!-- tab end -->
  <!-- more -->
  <div class="moreAbout">
    <div class="wrapper">
      <div class="moreAbout-title">More About PRO Edition</div>
      <div class="morelist clearfix">
        <div class="more-left fl">
          <ul>
            <li><img src="<?php echo $pResUrl; ?>images/icon1.png" alt=""><spab class="leftinfo">Basic PC cleaning and optimization </spab></li>
            <li><img style="width:23px;height:23px" src="<?php echo $pResUrl; ?>images/spidericon.png" alt=""><spab class="leftinfo">Turn on Antivirus Protection & Firewall to prevent potential threats </spab></li>
            <li><img src="<?php echo $pResUrl; ?>images/icon03.png" alt=""><spab class="leftinfo">Capture intruders automatically with FaceID</spab></li>
            <li><img style="margin-right:15px" src="<?php echo $pResUrl; ?>images/icon04.png" alt=""><spab class="leftinfo">Detect malicious links in your web email</spab></li>
            <li><img src="<?php echo $pResUrl; ?>images/icon05.png" alt=""><spab class="leftinfo">Auto clean and optimization at a schedule time</spab></li>
            <li><img style="margin-right:15px" src="<?php echo $pResUrl; ?>images/icon06.png" alt=""><spab class="leftinfo">Deeply clean registry to reduce system crashes and errors</spab></li>
            <li><img src="<?php echo $pResUrl; ?>images/icon07.png" alt=""><spab class="leftinfo">Auto protect against malware infection in real time</spab></li>
            <li><img src="<?php echo $pResUrl; ?>images/icon08.png" alt=""><spab class="leftinfo">Auto stop unnecessary services to release RAM</spab></li>
            <li><img style="margin-right:15px" src="<?php echo $pResUrl; ?>images/icon09.png" alt=""><spab class="leftinfo">Detect the deepest threats rooted in computer</spab></li>
            <li><img style="margin-right:14px" src="<?php echo $pResUrl; ?>images/icon10.png" alt=""><spab class="leftinfo">Auto remove annoying ads on webpage</spab></li>
            <li><img style="margin-right:12px" src="<?php echo $pResUrl; ?>images/icon11.png" alt=""><spab class="leftinfo">Update outdated software with 1-click to fix security vulnerabilities</spab></li>
            <li><img src="<?php echo $pResUrl; ?>images/icon12.png" alt=""><spab class="leftinfo">Auto Update to the latest version</spab></li>
            <li><img style="margin-right:15px" src="<?php echo $pResUrl; ?>images/icon13.png" alt=""><spab class="leftinfo">Free 24/7 technical support on demand</spab></li>
          </ul>
        </div>
        <div class="more-center fl">
          <div class="title">Your Current Edition </div>
          <ul>
            <li><img src="<?php echo $pResUrl; ?>images/succ_white.png" alt=""></li>
            <li><img src="<?php echo $pResUrl; ?>images/succ_white.png" alt=""></li>
            <li><img src="<?php echo $pResUrl; ?>images/succ_white.png" alt=""></li>
            <li><img src="<?php echo $pResUrl; ?>images/succ_white.png" alt=""></li>
            <li><span class="spacebox"></span></li>
            <li><span class="spacebox"></span></li>
            <li><span class="spacebox"></span></li>
            <li><span class="spacebox"></span></li>
            <li><span class="spacebox"></span></li>
            <li><span class="spacebox"></span></li>
            <li><span class="spacebox"></span></li>
            <li><span class="spacebox"></span></li>
            <li><span class="spacebox"></span></li>
          </ul>
        </div>
        <div class="more-right fl">
        <div class="title"> PRO Edition</div>
          <ul>
            <li><img src="<?php echo $pResUrl; ?>images/succ_white.png" alt=""></li>
            <li><img src="<?php echo $pResUrl; ?>images/succ_white.png" alt=""></li>
            <li><img src="<?php echo $pResUrl; ?>images/succ_white.png" alt=""></li>
            <li><img src="<?php echo $pResUrl; ?>images/succ_white.png" alt=""></li>
            <li><img src="<?php echo $pResUrl; ?>images/succ_white.png" alt=""></li>
            <li><img src="<?php echo $pResUrl; ?>images/succ_white.png" alt=""></li>
            <li><img src="<?php echo $pResUrl; ?>images/succ_white.png" alt=""></li>
            <li><img src="<?php echo $pResUrl; ?>images/succ_white.png" alt=""></li>
            <li><img src="<?php echo $pResUrl; ?>images/succ_white.png" alt=""></li>
            <li><img src="<?php echo $pResUrl; ?>images/succ_white.png" alt=""></li>
            <li><img src="<?php echo $pResUrl; ?>images/succ_white.png" alt=""></li>
            <li><img src="<?php echo $pResUrl; ?>images/succ_white.png" alt=""></li>
            <li><img src="<?php echo $pResUrl; ?>images/succ_white.png" alt=""></li>
          </ul>
        </div>
      </div>
      </div>
  </div>
</div>
<div class="bottom-bg">
  <div class="worthy wrapper">
    <h2>It’s the Top-ranking & Trust-worthy PC Optimizer</h2>
    <dl>
      <dt>30M+</dt>
      <dd>Downloads</dd>
    </dl>
     <dl class="center">
      <dt>4.5+</dt>
      <dd>User’s Rating</dd>
    </dl>
     <dl class="last">
      <dt>1000+</dt>
      <dd>Media Recommendations</dd>
    </dl>
  </div>
  <div class="review wrapper">
    <h2>User Review</h2>
    <ul>
      <li><img src="<?php echo $pResUrl; ?>images/ryan.png" alt="Ryan Hill"> </li>
      <li><img src="<?php echo $pResUrl; ?>images/lyle.png" alt="Lyle Stelmaschuk"> </li>
      <li class="active"><img src="<?php echo $pResUrl; ?>images/cnet.png" alt=""> </li>
      <li><img src="<?php echo $pResUrl; ?>images/brendon.png" alt="Brendon O'Rourke"> </li>
      <li><img src="<?php echo $pResUrl; ?>images/anthony-baker.png" alt="Anthony Baker"> </li>
    </ul>
    <div class="content">
      <dl>
        <dt>Ryan Hill</dt>
        <dd>Advanced system care 14 is the most complete all in one system on the market. I've been using the products for years now and every year there getting better the new easy interface  the deep cleaning you get with the  software its  breeze to use one click and its doing its magic all the other options that come within system are great  also the empty folder finder the internet booster even game booster rocks!!  I think it's one of the best cleaning systems out there today.</dd>
      </dl>
      <dl>
        <dt>Lyle Stelmaschuk</dt>
        <dd>I have purchased many different software programs to speed up and fix problems with my PC. Unfortunately, most of them really didn't help or make a difference until I tried out Advanced System Care 14. I love that there are so many options and solutions to fix any problem. It's amazing how much faster my PC is now after the first scan and repair. Definitely the best product I have come across.</dd>
      </dl>
      <dl class="active">
        <dt>Cnet</dt>
        <dd>"Advanced SystemCare is a great all-in-one PC utility that can scan, repair, and optimize many aspects of your system.It aims to remedy whatever ails your computer by not only cleaning up junk files, malware, and invalid registry entries, but by giving your computer a boost to optimize your PC experience."</dd>
      </dl>
        <dl>
        <dt>Brendon O'Rourke</dt>
        <dd>I have been using ASC for years now. I have recently tested the latest version V14. And it is by far the most comprehensive version to date. IObit continue to improve their Products and Technology. With more options and easier navigation that help find solutions. I don't need to shop elsewhere. </dd>
      </dl>
      <dl>
        <dt>Anthony Baker</dt>
        <dd>The features in Advanced System Care (ASC) 14 are awesome and the overall appearance is clean, fresh, and modern. I have used other all-in-one system maintenance programs, but none have been as effective as ASC 14. The program reduces and eliminates the use of non-essential resources which allow your computer to run cooler and more efficiently. This product is amazing and the best in class. If you care about your laptop or pc, use Advanced System Care 14!</dd>
      </dl>
    </div>
    <div class="change">
      <span></span>
      <span></span>
      <span class="active"></span>
      <span></span>
      <span></span>
    </div>
  </div>
  <div class="awards wrapper">
    <h2>World-wide Awards</h2>
    <img src="<?php echo $pResUrl; ?>images/awards.png" />
  </div>
</div>
</div>
  <!-- footer start -->
  <div class="footer">
    <dl class="wrapper">
      <dd>
          Note:      </dd>
      <dd>*.We tested the Advanced SystemCare 14 PRO in our internal test lab. Your results may vary.</dd>
      <dd>*.At the end of the 30-day free trial period, your credit card or PayPal account will be charged $19.99 automatically. This 60% discount from the original price of $49.99 is bonus only for preorders!</dd>
    </dl>
    <p>Copyright © 2005 - 2020 IObit. All Rights Reserved</p>
  </div>
  <!-- footer end -->


<!-- floatlayer start -->
<div id="floatlayer" class="floatlayer">
  <div class="wrapper clearfix">
    <img class="fl" src="<?php echo $pResUrl; ?>images/fl-box.png" alt="Advanced SystemCare 14 PRO" />
     <div class="numbox">
      <span id="botNum" class="giftNum">
        <b class="nwrap"><b class="numlist"><span id="numlist04">5</span></b></b>
        <b class="nwrap"><b class="numlist"><span id="numlist05">0</span></b></b>
        <b class="nwrap"><b class="numlist"><span id="numlist06">0</span></b></b>
      </span>
         <span style="margin-left:10px">of 500 places left only!</span>    </div>
    <div class="price">
        <strong>$<b>0</b> <sup>*</sup></strong>
        <a href="https://www.iobit.com/buy.php?product=asc14preorder&ref=en-asc14preorderrc<?php echo $refStr; ?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc14predorderrc')" class="buybtn">Pre-order Now</a>
      </div>
  </div>
</div>
<!-- floatlayer end -->
  <script>refStr="<?php echo $refStr;?>";</script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/digitRoll.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/new-script.js')?>"></script>
</body>
</html>