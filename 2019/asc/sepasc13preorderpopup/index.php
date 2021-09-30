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
  $c_name = 'enascpup_p' . $date;
  $c_name_t='enascpup_t' . $date;
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
if(preg_match_all('/([0-9]*)\./',$_GET['ver'],$matches)){
  $ver=$matches[1][0].$matches[1][1];
  $refStr.='-'.$ver;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Pay $0 to get the newest Advanced SystemCare 13 PRO - IObit</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Montserrat:500,600&display=swap" rel="stylesheet">
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>

<!-- banner start -->
<div class="banner">
  <div class="wrapper">
    <a class="logo" href="https://www.iobit.com" target="_blank">IObit</a>
    <span class="delta delta01"></span>
    <span class="delta delta02"></span>
    <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="Advanced SystemCare 13 PRO" class="asc-box"/>
    <div class="right-message">
      <h2><span>Advanced SystemCare 13 PRO</span> <i></i></h2>
      <h3>Make your slow PC 200%* faster</h3>
      <dl>
        <dt class="price">
          <strong>$<b>0</b><sup>*</sup></strong> <a href="https://www.iobit.com/buy.php?product=asc13preorder&ref=asc13preorderpopup<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc13predorderpopup');" class="buybtn"><span>Pre-order Now</span></a>
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
  </div>
</div>
<!-- banner end -->
<div class="intro wrapper clearfix">
  <span class="arrow"></span>
  <h2> Why Upgrade to Advanced SystemCare 13 PRO?</h2>
  <h3><strong>Your Computer would Run at <span>Peak Performance</span></strong></h3>
  <div class="message01">
    <img src="<?php echo getStaticUrl('images/list01.png')?>" alt="" class="img-box ">
    <img src="<?php echo getStaticUrl('images/guide.png')?>" alt="" class="guide">
    <img src="<?php echo getStaticUrl('images/good.png')?>" alt="" class="good">
    <img src="<?php echo getStaticUrl('images/intro-list01.png')?>" alt="" class="icons01">
    <img src="<?php echo getStaticUrl('images/intro-list02.png')?>" alt="" class="icons02">
    <div class="round">
      <div class="top-round"></div>
      <div class="circle right">
        <div class="circleprogress rightcircle"></div>
      </div>
    </div>
    <div class="left-round"></div>
    <dl class="list01">
      <dt>Larger Disk Space <span><em>PRO only</em></span></dt>
      <dd>Deep registry clean and maximized disk <br> defrag release more disk space to <br> guarantee smooth PC performance.</dd>
    </dl>
    <dl class="list02">
      <dt>200%* Faster PC <span><em>PRO only</em></span></dt>
      <dd>Clean and optimize system to speed up startup <br> and computer running up to 200% faster.</dd>
    </dl>
    <dl class="list03">
      <dt>No Unnecessary Processes <span><em>PRO only</em></span></dt>
      <dd>Never worry about hackers breaking into your <br> computer and encrypting your important files <br> and personal data.</dd>
    </dl>
    <dl class="list04">
      <dt>300%* Faster Internet <span><em>PRO only</em></span></dt>
      <dd>Optimize browser settings to accelerate download, <br> surfing, gaming, YouTube viewing up to 300% faster.</dd>
    </dl>
  </div>

  <h3 class="title2"><strong>Your Computer and Privacy would <span>Stay Safe</span></strong></h3>
  <div class="message02">
    <div class="img-box">
      <img src="<?php echo getStaticUrl('images/computer.png')?>" alt="">
      <img src="<?php echo getStaticUrl('images/lock.png')?>" alt="" class="lock">
    </div>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/icons01.png')?>" alt=""></dt>
      <dd>
        <strong>No Unauthorized Accesses <span><em>PRO only</em></span></strong>
        Programs attempt to access to your personal data secretly would be detected immediately. </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt=""></dt>
      <dd>
        <strong>Stop Malware Infections <span><em>PRO only</em></span></strong>
        Malware and spyware can no longer break into your computer with real-time protection.</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt=""></dt>
      <dd>
        <strong>Erase Online Traces <span><em>PRO only</em></span></strong>
        Your private online traces would be erased automatically to stop malicious track. </dd>
    </dl>
  </div>

  <h3 class="title3"><strong>Moreover, Advanced SystemCare 13 PRO Is <span>Much Better</span> Than What You Have Now</strong></h3>
  <div class="message03">
    <div class="box clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/icons04.png')?>" alt=""></dt>
        <dd>
          Clean <strong>4GB* More</strong> junk files on your computer
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/icons05.png')?>" alt=""></dt>
        <dd>
          Sweep Traces of <strong>200+ Programs</strong> for all user accounts
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/icons06.png')?>" alt=""></dt>
        <dd>
          Optimize  <strong>30% More</strong> Startup items for faster PC 
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/icons07.png')?>" alt=""></dt>
        <dd>
          Support Update <strong>60% More</strong> software on your computer 
        </dd>
      </dl>

    </div>
    <div class="line"><span class="trigon"></span></div>
    <ul>
      <li>
        <span><img src="<?php echo getStaticUrl('images/icons08.png')?>" alt=""></span>
        Protect <strong> Personal Data</strong> from secret accesses to avoid privacy leak; 
      </li>
      <li>
        <span><img src="<?php echo getStaticUrl('images/icons09.png')?>" alt=""></span>
         Protect <strong>E-mail</strong> from malicious mail-borne threats;
      </li>
      <li>
        <span><img src="<?php echo getStaticUrl('images/icons10.png')?>" alt=""></span>
        Optimize <strong> Universal Windows Platform Apps </strong> for Windows 10 users; 
      </li>
      <li>
        <span><img src="<?php echo getStaticUrl('images/icons11.png')?>" alt=""></span>
         New Context Menu Manager helps manage  <strong>context menu </strong> easily;
      </li>
    </ul>
  </div>
</div>




<div class="bottom">
  <!-- review start -->
  <div class="review wrapper">
    <div id="dg-container" class="dg-container">
      <div class="nav">
        <span class="dg-prev"></span>
        <span class="dg-next"></span>
      </div>
      <div class="content dg-wrapper">
        <dl class="reviews active">
          <dt><h2><span>Media Review</span></h2></dt>
          <dd>
            <p>"Advanced SystemCare is a great all-in-one PC utility that can scan, repair, and optimize many aspects of your system.It aims to remedy whatever ails your computer by not only cleaning up junk files, malware, and invalid registry entries, but by giving your computer a boost to optimize your PC experience."</p>
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
        <li class="six" data-num="3"><img src="<?php echo getStaticUrl('images/danny-r-sheets.png')?>" alt="Danny R. Sheets"></li>
      </ul>
    </div>
  </div>
  <!-- review end -->
  <!-- awards start -->
  <div class="awards wrapper">
    <h2>World-wide Awards</h2>
    <p>
      As being trusted and awarded by those world-class media in the past twelve years, you know you’ve got the right PC optimizer.
    </p>
    <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
  </div>
  <!-- awards end -->
  <!-- footer start -->
  <div class="footer wrapper">
    <dl>
      <dd>
       Note:
      </dd>
      <dd>*.We tested the Advanced SystemCare 13 PRO in our internal test lab. Your results may vary.</dd>
      <dd>*.At the end of the 30-day free trial period, your credit card or PayPal account will be charged $19.99 automatically. This 60% discount from the original price of $49.99 is bonus only for preorders!</dd>
    </dl>
    <p>Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p>
  </div>
  <!-- footer end -->

</div>

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
      <strong>$<b>0</b><sup>*</sup></strong> <a href="https://www.iobit.com/buy.php?product=asc13preorder&ref=asc13preorderpopup<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc13predorderpopup');" class="buybtn"><span>Pre-order Now</span></a>
    </div>
  </div>
</div>
<!-- floatlayer end -->
  <script>refStr="<?php echo $refStr;?>";</script>
  <script src="<?php echo $pRootUrl;?>tpl/js/TweenMax.min.js"></script>
  <script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>