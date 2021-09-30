<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';

$viewNum=rand(98,165);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}
if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'enascexd_p' . $date;
  $c_name_t='enascexd_t' . $date;
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=rand(49,55);
    setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
    setcookie($c_name_t,$totalNum, time() + 3600 * 24 *2);
  } else {
    if (intval($_COOKIE[$c_name]) <= 0) {
      $packsNum = 0;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    } else {
      $packsNum = $_COOKIE[$c_name] - 1;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    }
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

$refStr=empty($_GET['st'])?'':('-'.$_GET['st']);

function paramDeal($num,$decimals,$separate=',',$decimal='.'){
  return empty($num)?'':number_format($num,$decimals,$decimal,$separate);
}

$params=json_decode(base64_decode($_GET['data']));
$fileSizeShow=paramDeal($params->junk/(1024*1024*1024),2,',','.');
$fileSizeUnit='GB';
if($fileSizeShow<=1){
  $fileSizeShow=paramDeal($params->junk/(1024*1024),2,',','.');
  $fileSizeUnit='MB';
}
$paramJunk=empty($fileSizeShow)?'':($fileSizeShow.' '.$fileSizeUnit);
$paramPri=paramDeal($params->privacy,0,',','.');
$paramPro=paramDeal($params->program,0,',','.');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Pay $0 to get the newest Advanced SystemCare 13 PRO - IObit</title>
<meta name="Copyright" content="IObit">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700,800&display=swap" rel="stylesheet">
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>

<!-- banner start -->
<div class="banner">
  <div class="wrapper clearfix">
    <a class="logo" href="https://www.iobit.com" target="_blank">IObit</a>
    <span class="delta delta01"></span>
    <span class="delta delta02"></span>
    <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="Advanced SystemCare 13 PRO" class="asc-box"/>
    <div class="right-message">
      <h2><span>Advanced SystemCare 13 PRO</span> <i></i></h2>
      <h3>Make your slow PC 200%* faster</h3>
      <dl>
        <dt class="price">
          <strong>$<b>0</b><sup>*</sup></strong> <a href="https://www.iobit.com/buy.php?product=asc13preorder&ref=asc13preorderexpired<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc13predorderexpired');" class="buybtn"><span>Pre-order Now</span></a>
        </dt>
        <dd class="number">
          HURRY, ONLY 
          <div class="countdown">
            <div class="scroll-tick"><span>0</span></div>
            <div class="scroll-tick"><span>0</span></div>
            <div class="scroll-tick"><span>0</span></div>
            <div class="scroll-tick last"><span>0</span></div>
          </div>
          LEFT. <span><span class="viewNum"><?php echo $viewNum;?></span> WATCHING NOW. </span>
        </dd>
      </dl>
    </div>
    <span class="arrow"></span>
  </div>
</div>
<!-- banner end -->

<!-- intro start -->
<div class="intro">
  <div class="wrapper">
    <h2>What Did Advanced SystemCare PRO Do for You?</h2>
    <div class="clearfix">
      <div class="left fl">
        <img src="<?php echo getStaticUrl('images/screen01.png')?>" alt=""/>
        <img class="besom" src="<?php echo getStaticUrl('images/besom.png')?>" alt=""/>
        <div class="scan">SCAN</div>
      </div>
      <ul class="right fr">
        <li>
          <i class="all-icons">●</i>
          <span>Freed up <b>XX</b> disk space</span>
        </li>
        <li>
          <i class="all-icons">●</i>
          <span>Erased <b>XX</b> private traces</span>
        </li>
        <li>
          <i class="all-icons">●</i>
          <span>Accelerated PC boot time up to <b>200%</b>* faster</span>
        </li>
        <li>
          <i class="all-icons">●</i>
          <span>Accelerated internet connection up to <b>300%</b>* faster</span>
        </li>
        <li>
          <i class="all-icons">●</i>
          <span>Blocked <b>XX</b> untrusted accesses to your personal data</span>
        </li>
      </ul>
    </div>
  </div>
</div>
<!-- intro end -->

<!-- enjoy start -->
<div class="enjoy">
  <div class="wrapper clearfix">
    <span class="arrow"></span>
    <div class="left fl">
      <h3>Now with Expired Version,</h3>
      <h2>You No <b>Longer</b> Enjoy:</h2>
      <ul>
        <li>
          <i class="all-icons">√</i>
          <span>Deep registry files cleaning to fix system problems</span>
        </li>
        <li>
          <i class="all-icons">√</i>
          <span>Auto RAM cleaning to keep PC running smoothly</span>
        </li>
        <li>
          <i class="all-icons">√</i>
          <span>PC startup and Internet connection acceleration</span>
        </li>
        <li>
          <i class="all-icons">√</i>
          <span>Personal data protection to avoid privacy leak</span>
        </li>
        <li>
          <i class="all-icons">√</i>
          <span>Real-time protection to block malware infection</span>
        </li>
      </ul>
    </div>
    <div class="right fr">
      <img src="<?php echo getStaticUrl('images/screen02.png')?>" alt=""/>
      <img class="forbid" src="<?php echo getStaticUrl('images/forbid.png')?>" alt="">
    </div>
  </div>
</div>
<!-- enjoy end -->

<!-- feature start -->
<div class="feature">
  <div class="wrapper">
    <h2>Pre-order New PRO Version,<br> Get Back What You’ve Lost & Enjoy Following Ones</h2>
    <div class="clearfix">
      <dl class="blue">
        <dt><img src="<?php echo getStaticUrl('images/f-icons01.png')?>" alt=""/></dt>
        <dd>
          <h3>4GB<small>*</small></h3>
          <p>Detect and clean <b>4GB*</b> more junk files</p>
        </dd>
      </dl>
      <dl class="purple">
        <dt><img src="<?php echo getStaticUrl('images/f-icons02.png')?>" alt=""/></dt>
        <dd>
          <h3>200+</h3>
          <p>Sweep personal traces from <b>200+</b> programs and <b>15</b> browsers for all user accounts</p>
        </dd>
      </dl>
      <dl class="green">
        <dt><img src="<?php echo getStaticUrl('images/f-icons03.png')?>" alt=""/></dt>
        <dd>
          <h3>e-mail</h3>
          <p>Protect <b>e-mail</b> from various mail-borne threats</p>
        </dd>
      </dl>
      <dl class="orange">
        <dt><img src="<?php echo getStaticUrl('images/f-icons04.png')?>" alt=""/></dt>
        <dd>
          <h3>60%</h3>
          <p><b>60%</b> more software can be updated with 1-click</p>
        </dd>
      </dl>
    </div>
  </div>
</div>
<!-- feature end -->

<!-- review start -->
<div class="review-wrap">
  <div class="wrapper">
    <span class="arrow"></span>
    <h2>What We’ve Achieved & Received</h2>
    <div class="present clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/p-icons01.png')?>" alt=""/></dt>
        <dd>Fix issues for <h4 class="first">00,000,000</h4> users</dd>
      </dl>
      <dl class="center">
        <dt><img src="<?php echo getStaticUrl('images/p-icons02.png')?>" alt=""/></dt>
        <dd>Save <h4 class="two">0,000,000</h4> hours per month</dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/p-icons03.png')?>" alt=""/></dt>
        <dd>Save <h4>$1.18 billion</h4> per year</dd>
      </dl>
    </div>
    
    <div class="review">
      <div id="dg-container" class="dg-container">
        <div class="nav">
          <span class="dg-prev"></span>
          <span class="dg-next"></span>
        </div>
        <div class="content dg-wrapper">
          <dl class="reviews active">
            <dt><h2><span>Media Review</span></h2></dt>
            <dd>
              <p class="on">"Advanced SystemCare is a great all-in-one PC utility that can scan, repair, and optimize many aspects of your system.It aims to remedy whatever ails your computer by not only cleaning up junk files, malware, and invalid registry entries, but by giving your computer a boost to optimize your PC experience."</p>
             <cite>Cnet</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h2><span>User Review</span></h2></dt>
            <dd> 
              <p>"I have tried various programs over time which have promised to keep my computers running problem free. I turned to ASC years ago using the free version at first. Finding that I no longer suffered from the niggles and bloating that occurs I upgraded to the Paid version and have never looked back since. Advanced SystemCare Pro is the only one I would recommend based on my experiences.  I also use IObit Uninstaller, Smart Defrag and Driver Booster just make things much better."</p>
              <cite>Richard Beavers</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h2><span>User Review</span></h2></dt>
            <dd>
              <p>"Advanced System Care is a great program.  I have used this program for many years and it works great. They're always improving their products and just get better over the years. I use many of their products and they all work great."</p>
              <cite>Patsy Clark</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h2><span>User Review</span></h2></dt>
            <dd>
              <p>" I have never found a better pc maintenance or security program than Advanced Systems Care, since buying ASC I've never had issues with viruses, phishing, black screens or any other kind of bugaboo one could think of, best money I've ever spent when it comes to computers, thank you ASC for making my pc experience so much more enjoyable."</p>
              <cite>Danny R. Sheets</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h2><span>User Review</span></h2></dt>
            <dd> 
              <p>"I have been using Advanced SystemCare Pro for a long time and this latest version 13 is even better than version 12. It can find and fix problems very quickly and has so many extra features you can use to keep your computer running well and stable. I cannot recommend it more highly."</p>
              <cite>Tony Fisher</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h2><span>User Review</span></h2></dt>
            <dd>
              <p>"The New ASC 13 is a must have for all PC users. Its clean and intuitive interface makes it easy to use for the novice as well as the advanced user. Many powerful tools included to keep your PC running at its peak performance. Kudos to you IObit for such a wonderful set of tools all in one place."</p>
              <cite>Daniel Sanders</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h2><span>User Review</span></h2></dt>
            <dd>
              <p>"I love using Advanced SystemCare 13 Beta. It is fast. It cleans up privacy traces, junk files and registry fragments. I especially like the sensitive area access permission pop-up. The first time an app tries to access sensitive files, a window opens to either allow access or deny. Once permission is granted for an app, the pop-up no longer occurs for that app. I know my sensitive files will be kept safe."</p>
              <cite>Richard Preston</cite>
            </dd>
          </dl>
        </div>
        <ul>
          <li class="first" data-num="4"><img src="<?php echo getStaticUrl('images/tony-fisher.png')?>" alt="Tony Fisher"></li>
          <li class="two" data-num="5"><img src="<?php echo getStaticUrl('images/daniel-sanders.png')?>" alt="Daniel Sanders"></li>
          <li class="three" data-num="6"><img src="<?php echo getStaticUrl('images/richard-preston.png')?>" alt="Richard Preston"></li>
          <li class="active" data-num="0"><img src="<?php echo getStaticUrl('images/cnet.png')?>" alt="Cnet"></li>
          <li class="four" data-num="1"><img src="<?php echo getStaticUrl('images/richard-beavers.png')?>" alt="Richard Beavers"></li>
          <li class="five" data-num="2"><img src="<?php echo getStaticUrl('images/patsy-clark.png')?>" alt="Patsy Clark"></li>
          <li class="six last" data-num="3"><img src="<?php echo getStaticUrl('images/danny-r-sheets.png')?>" alt="Danny R. Sheets"></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- review end -->

<!-- awards start -->
<div class="awards">
  <div class="wrapper">
    <h2>World-wide Awards</h2>
    <p>
      As being trusted and awarded by those world-class media in the past twelve years, you know you’ve got the right PC optimizer.
    </p>
    <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
  </div>
</div>
<!-- awards end -->

  
  <!-- footer start -->
  <div class="footer">
    <dl class="wrapper">
      <dd>
       Note:
      </dd>
      <dd>*.We tested the Advanced SystemCare 13 PRO in our internal test lab. Your results may vary.</dd>
      <dd>*.At the end of the 30-day free trial period, your credit card or PayPal account will be charged $19.99 automatically. This 60% discount from the original price of $49.99 is bonus only for preorders!</dd>
    </dl>
    <p>Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p>
  </div>
  <!-- footer end -->

<!-- floatlayer start -->
<div id="floatlayer" class="floatlayer">
  <div class="wrapper clearfix">
    <img class="fl" src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="Advanced SystemCare 12 PRO" width="121"/>
    <div class="number">
      HURRY, ONLY 
      <div class="countdown">
        <div class="scroll-tick"><span>0</span></div>
        <div class="scroll-tick"><span>0</span></div>
        <div class="scroll-tick"><span>0</span></div>
        <div class="scroll-tick last"><span>0</span></div>
      </div>
      LEFT. <span><span class="viewNum"><?php echo $viewNum;?></span> WATCHING NOW. </span>
    </div>
    <div class="price">
      <strong>$<b>0</b><sup>*</sup></strong> <a href="https://www.iobit.com/buy.php?product=asc13preorder&ref=asc13preorderexpired<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc13predorderexpired');" class="buybtn"><span>Pre-order Now</span></a>
    </div>
  </div>
</div>
<!-- floatlayer end -->
  <script>
    $(".intro .wrapper .right b").eq(0).html("<?php echo $paramJunk?>").end().eq(1).html("<?php echo $paramPri?>").end().
      eq(4).html("<?php echo $paramPro;?>");
  </script>
  <script>refStr="<?php echo $refStr;?>";</script>
  <script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>