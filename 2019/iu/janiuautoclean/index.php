<?php
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './';
    $pRootUrl = '../../../';
  }
  include $pRootUrl.'include/common.inc.php';

$viewNum=rand(126,158);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}
if(!empty($_GET['action'])&&($_GET['action']=='getSales')){
  $date=$_GET['d'];
  $cName='eniuauto'.$date;
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
    $packsNum=rand(78,98);
    setcookie($cName,$packsNum);
  }
  echo $packsNum;
  exit();
}
$transData=json_decode(base64_decode($_GET['data']));

$refStr='';
if (!empty($_GET['ver'])) {
    $ver_arr = explode('.', $_GET['ver']);
    $ver = 'v'.$ver_arr[0] . $ver_arr[1];
}else{
    $ver = 'unknown';
}
$refStr = '-' . ((strlen($_GET['to']) == 0) ? 'unknown' : $_GET['to']);
$refStr .= '-' . $ver;
$refStr .= '-' . ((strlen($_GET['user']) == 0) ? 'unknown' : 'u'.$_GET['user']);
$refStr .= '-' . ((strlen($_GET['insday']) == 0) ? 'unknown' : 'i'.$_GET['insday']);
$refStr .= '-' . ((strlen($_GET['insur']) == 0) ? 'unknown' : $_GET['insur']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>75% OFF to Get IObit Uninstalller PRO</title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href='https://fonts.googleapis.com/css?family=Cabin:400,700' rel='stylesheet' type='text/css'>
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
  <!-- banner -->
  <div class="banner">
    <div class="wrapper">
      <a href="https://www.iobit.com/en/index.php" class="logo" target="_blank">IObit</a>
      <ul>
        <li class="first"><i></i> ATTENTION! Your Incomplete Uninstall Leaves</li>
        <li class="default hide"><i></i> We have successfully cleaned residual files of the uninstalled program.</li>
        <?php if($transData->trd->file>0):?>
        <li><strong><?php echo $transData->trd->file;?></strong> <?php echo ($transData->trd->file==1)?'useless file':'useless files';?></li>
        <?php endif;?>
        <?php if($transData->trd->reg>0):?>
        <li class="last <?php echo ($transData->trd->file>0)?'class="last-line"':'';?>"><strong><?php echo $transData->trd->reg;?></strong> <?php echo ($transData->trd->reg==1)?'useless registry entry':'useless registry entries';?></li>
        <?php endif;?>
      </ul>
      <div class="left-img"><img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="IObit Uninstalller PRO"></div>
      <div class="right-message">
        <h1>IObit Uninstaller 11 PRO</h1>
        <h2>Help to auto clean leftovers of programs</h2>
        <p class="price"><strong>$<b>14</b>.77</strong> <del>$59.93</del></p>
        <p class="pc"><span></span> 1 Year Subscription / 3 PCs</p>
        <div class="number-message">
          <div class="number">
            <div class="countdown">
              <div class="scroll-tick"><span>0</span></div>
              <div class="scroll-tick"><span>0</span></div>
              <div class="scroll-tick"><span>0</span></div>
              <div class="scroll-tick"><span>0</span></div>
            </div>
            <p>Hurry, only <span class="gift">50</span> left at this cost!</p>
          </div>
          <div class="buy-content">
            <a href="https://www.iobit.com/buy.php?product=iu113pc1477&ref=en-iu3pcautoclean<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase-autoclean');" class="buybtn"><i></i> <span>Activate Now</span></a>
          </div>
        </div>
      </div>
    </div>
    
  </div>
  <!-- end banner -->
  <!-- problem -->
  <div class="problem ">
    <h2>What <span>Problems</span> May Result from Leftovers of Programs?</h2>
    <div class="wrapper-box">
      <div class="message-box">
        <dl class="list01">
          <dt><span>Problem 1</span> Low disk space</dt>
          <dd>Leftovers take up your disk space and make your disk run <br> low on available storage.</dd>
        </dl>
        <dl class="list02">
          <dt><span>Problem 2</span> Slow computer</dt>
          <dd>Useless files take up valuable resources on your computer <br> and make system get slower over time.</dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- end problem -->
  <div class="feature">
    <div class="wrapper">
      <div class="left-message">
        <h2>Why <span>IObit Uninstaller PRO</span> Is the <br> Uninstaller I Need?</h2>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/list01.png')?>" alt=""></dt>
          <dd>
            <strong>Auto detect</strong>
            <p>Auto detect leftovers of programs uninstalled <br> via Control Panel or other utilities. </p>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/list02.png')?>" alt=""></dt>
          <dd>
            <strong>Auto clean</strong>
            <p>Auto clean any residual files failed to delete via <br> Control Panel or other utilities. </p>
          </dd>
        </dl>

      </div>
      <img src="<?php echo getStaticUrl('images/cleaning.png')?>" alt="" class="img-box">
    </div>
  </div>
  <!-- benfits -->
  <div class="benfits ">
    <div class="wrapper">
      <h2>What Other Benefits Can I Get from <br> IObit Uninstaller PRO?</h2>
      <dl class="list01">
        <dt>Fast & Safe Browser</dt>
        <dd>Quickly find and eliminate malware & malicious <br> plug-ins to protect your online privacy.</dd>
        <dd><strong>*Pro only</strong></dd>
      </dl>
      <dl class="list02">
        <dt>Better Software Performance</dt>
        <dd>1-click to manage software permission, disable notifications, fix uninstall issues, and clean installation files.</dd>
        <dd><strong>*Pro only</strong></dd>
      </dl>
      <dl class="list03">
        <dt>Uninstall Stubborn Programs</dt>
        <dd>Safely & completely uninstall 1000+ <br> stubborn  programs that refuse <br> to remove from your PC.</dd>
        <dd><strong>*Pro only</strong></dd>
      </dl>
      <dl class="list04">
        <dt>Update Software With 1-click</dt>
        <dd>Upgrade all your important software easily <br> with the support of the latest database.</dd>
        <dd><strong>*Pro only</strong></dd>
      </dl>
      <dl class="list05">
        <dt>Real-time Installation Monitor</dt>
        <dd>Track all changes made to system during program installation and fully revert them to the pre-installation state when uninstalling</dd>
        <dd><strong>*Pro only</strong></dd>
      </dl>
    </div>
  </div>
  <!-- end benfits -->


  <div class="review wrapper">
    <h2>What Other Users and Media Say</h2>
    <div id="dg-container" class="dg-container">
      <div class="nav"> 
        <span class="dg-prev"></span>
        <span class="dg-next"></span>
      </div>
        <div class="content dg-wrapper">  
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/PCMAG.png')?>" alt="MakeUseOf"></dt>
            <dd>
              <h2>Media Review</h2>
              <p>"If you need a program that lets you cleanly and completely uninstall applications, fire up IObit Uninstaller. This free utility makes it a breeze to delete apps, including stray files that are often left behind when you use Windows to delete software from your hard drive or SSD."</p>
              <cite>PC Magazine</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/samrat.png')?>" alt="Samrat Kumar Chakrabortty"></dt>
            <dd>
              <h2>User Review</h2>
              <p>"I have used multiple uninstallers in the past, however, once I started using IOBit since ver.7.0, I have never gone back to any other application. It has an easy to use interface and does the job it is meant for with pin-point perfection. It helps you to clean up the registry automatically which otherwise gets choked with leftovers, and thus maintain PC Health. The ability to identify Bundleware and remove them is one great feature present in IOBit which is unsurpassed. "</p>
              <cite>Samrat Kumar Chakrabortty</cite>
            </dd>
          </dl>    
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/john.png')?>" alt="John Glenn Perong"></dt>
            <dd>
              <h2>User Review</h2>
              <p>"IObit Uninstaller finds plugins in my browsers that I didn’t even know existed. The clean-up of the residual files is very good; it doesn’t leave any useless data left on the uninstalled software. It reminds me of the available updates for all my programs. Overall, my computer’s performance improved thanks to this. It is very convenient and easily manageable; I even recommended this to my friends."</p>
              <cite>John Glenn Perong</cite>
            </dd>
          </dl>         
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/ivan.png')?>" alt="Ivan White"></dt>
            <dd>
              <h2>User Review</h2>
              <p>"IObit uninstaller has come a long way, I have used it for a long time, I love it, it is very thorough, now it is even getting better. Very pleased with it, would not be without it. If you do not use it you might wish to try it, it is 100% better today than it was a year ago. It cleans up all the extra registry junk and does it very well."</p>
              <cite>Ivan White/cite>
            </dd>
          </dl>                 

          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/Ali.png')?>" alt="Ali Tekin"></dt>
            <dd>
              <h2>User Review</h2>
              <p>"This program saved my money. Before using this program, my computer was very slow. I couldn't do anything. But my computer is very clean now. Thanks to this program, my computer got very Fast. I saved everything through this program. Thank you so much IOBit I love you."</p>
              <cite>Ali Tekin</cite>
            </dd>
          </dl>
        </div>               
    </div>
  </div>
  <div class="bottom">
      <div class="award wrapper ">
        <h2>World-wide Awards</h2>
        <p>As being trusted and awarded by those world-class media in the past ten years, you know you've got the right PC uninstaller. </p>
        <img src="<?php echo getStaticUrl('images/award.png')?>" alt="">
    </div>
    <!-- service start -->
    <div class="service wrapper clearfix">
      <dl class="fl">
        <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dt>
        <dd>
          <h4>Try it RISK FREE - with our 60-day Money Back Guarantee</h4>
          <p>
           We’re confident that activating PRO edition will quickly uninstall unwanted programs for affordable price!
          </p>
        </dd>
      </dl>
      <dl class="fr">
        <dd>
          <h4>We accept</h4>
        </dd>
        <dt><img src="<?php echo getStaticUrl('images/payments.png')?>" alt=""></dt>
      </dl>
    </div>
    <!-- service end -->
    <!-- annotation -->
    <dl class="annotation wrapper">
      <dt>Note: </dt>
      <dd>*.Data may vary based on different system or computer.</dd>
      <dd>*.Such promotional programs are subject to change without notice, from time to time in our sole discretion.</dd>
    </dl>

    <!-- footer -->
    <div class="footer">    
      <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p>
    </div>
  </div>




  <!-- float -->
  <div class="float clearfix">
    <div class="wrapper">
      <div class="left-img"><img src="<?php echo getStaticUrl('images/fl-iu-box.png')?>" alt=" IObit Uninstalller PRO"></div>
      <div class="number">
        <div class="countdown">
          <div class="scroll-tick"><span>0</span></div>
          <div class="scroll-tick"><span>0</span></div>
          <div class="scroll-tick"><span>0</span></div>
          <div class="scroll-tick"><span>0</span></div>
        </div>
        <p><span class="viewNum"><?php echo $viewNum;?></span> visitors now, only <span class="gift">50</span> left at this cost!</p>
      </div>
      <p class="price"> <del>$59.93</del> <strong>$<b>14</b>.77</strong></p>
      <a href="https://www.iobit.com/buy.php?product=iu113pc1477&ref=en-iu3pcautoclean<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase-autoclean');" class="buybtn"><i></i> <span>Activate Now</span></a>
    </div>
  </div>
  <div class="pop-over ">
    
    <h2>Surprise! Free Gifts for Our Lucky Visitor</h2>
    <h3>Activate IObit Uninstaller Pro Today to Get Your Free Gifts (Value $39.98)</h3>
    <p>Limited Offer! Ends in <strong><span class="count-time">60</span>s</strong></p>
    <img src="<?php echo getStaticUrl('images/pop-iu-box.png')?>" alt=" IObit Uninstalller PRO" class="imgbox">
    <a href="https://www.iobit.com/buy.php?product=iu11sdpf1477&ref=en-iu3pcsdpfpopautoclean<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_iu" onclick="ga('send', 'event', 'iubuypop', 'buy', 'iupurchase-autoclean ');" class="buybtn buybtn-pop">Get My Free Gifts</a>
  </div>
  <div class="pop-bg "><span class="close">X</span></div>
  <script>refStr="<?php echo $refStr;?>";</script>
  <script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
  <script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>