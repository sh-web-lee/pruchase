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
  $cName='eniusoft'.$date;
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
$plugins=intval($transData->softwarehealth->plugin);
$software=intval($transData->softwarehealth->software);

$refStr='';
if(in_array($_GET['st'],array('iu_xmas','iuxmasr','iu_ascxmas','iu_dbxmas','iu_imfxmas'))){
  $refStr.='-'.$_GET['st'];
}
if(!empty($_GET['to'])){
  $refStr.='-'.$_GET['to'];
}
if($_GET['pop']=='x_iu'){
  $refStr.='-'.$_GET['pop'];
}
if(preg_match('/^([0-9]*)\.([0-9]*)\./',$_GET['ver'],$matches)){
  $ver=$matches[1].'-'.$matches[2];
  $refStr.='-'.$ver;
}
if(in_array($_GET['st'],array('iu_wr'))){
  $refStr.='-'.$_GET['st'];
}
if(!empty($_GET['user'])){
  $refStr.='-'.$_GET['user'];
}
if(!empty($_GET['insday'])){
  $refStr.='-'.$_GET['insday'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Save up to 75% OFF on IObit Uninstaller PRO and Get free gift pack - IObit</title>
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
      <a href="https://www.iobit.com" target="_blank" class="logo" target="_blank">IObit</a>
      <!-- <ul>
        <li class="first"><i></i> ATTENTION! Your Incomplete Uninstall Leaves</li>
        <?php if($transData->trd->file>0):?>
        <li><strong><?php echo $transData->trd->file;?></strong> <?php echo ($transData->trd->file==1)?'useless file':'useless files';?></li>
        <?php endif;?>
        <?php if($transData->trd->reg>0):?>
        <li class="last <?php echo ($transData->trd->file>0)?'class="last-line"':'';?>"><strong><?php echo $transData->trd->reg;?></strong> <?php echo ($transData->trd->reg==1)?'useless registry entry':'useless registry entries';?></li>
        <?php endif;?>
      </ul> -->
      <ul>
        <li class="first"><i></i> <span>Attention!</span></li>
        <?php if(!empty($plugins+$software)):?>
        <?php if(!empty($plugins)):?>
          <li class="<?php echo empty($software)?'last':'center'?>"><strong><?php echo $plugins?></strong> malicious/ads plug-ins found</li>
        <?php endif;?>
        <?php if(!empty($software)):?>
          <li class="last"><strong><?php echo $software?></strong> outdated software found</li>
        <?php endif;?>
        <?php else:?>
            <li class="sold">Malicious/ads plug-ins and outdated softeware may cause problems.</li>
        <?php endif;?>
        <li class="sold _hide">Malicious/ads plug-ins & outdated software may put your computer at risk</li>
      </ul>
      <div class="left-img"><img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="IObit Uninstalller PRO"></div>
      <div class="right-message">
        <h1>IObit Uninstaller 9 PRO</h1>
        <h2>Identify malicious/ads plug-ins & update <br>outdated software with 1-click</h2>
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
            <a href="https://www.iobit.com/buy.php?product=iu93pc1477&ref=iu9softwarehealth1477<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_iu" onclick="ga('send', 'event', 'iu3pcbuy', 'buy', 'iupurchase-softwarehealth');" class="buybtn"><i></i> <span>Activate Now</span></a>
          </div>
        </div>
      </div>
    </div>
    
  </div>
  <!-- end banner -->
  <!-- problem -->
  <div class="problem">
    <h2>What <span>Problems</span> May Result from Malicious/Ads Plug-ins <br>and Outdated Software?</h2>
    <div class="wrapper-box">
      <div class="message-box">
        <dl class="list01">
          <dt><span>Problem 1</span> Malware Infection</dt>
          <dd>Hackers are able to turn plug-ins into malware which may evade antivirus.</dd>
        </dl>
        <dl class="list02">
          <dt><span>Problem 2</span> Security Holes</dt>
          <dd>Hackers may target known vulnerabilities of outdated<br> software to gain unauthorized access.</dd>
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
            <p>Auto identify malicious/ads plug-ins and detect all<br> outdated programs on your computer.</p>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/list02.png')?>" alt=""></dt>
          <dd>
            <strong>ONE CLICK</strong>
            <p>Remove all malicious/ads plug-ins and update outdated<br> programs with one click.</p>
          </dd>
        </dl>

      </div>
      <img src="<?php echo getStaticUrl('images/cleaning.png')?>" alt="" class="img-box">
    </div>
  </div>
  <!-- benfits -->
  <div class="benfits">
    <div class="wrapper">
      <h2>What Other Benefits Can I Get from <br> IObit Uninstaller PRO?</h2>
      <dl class="list01">
        <dt>Delete Stubborn Programs <sup>IMPROVED</sup></dt>
        <dd>Completely delete stubborn<br> programs that can't be uninstalled<br> by conventional means.</dd>
        <dd><strong>*Pro only</strong></dd>
      </dl>
      <dl class="list02">
        <dt>Remove Bundleware <sup>IMPROVED</sup></dt>
        <dd>Remove unwanted third-party programs<br> installed alongside freeware to advertise<br> or steal privacy data.</dd>
        <dd><strong>*Pro only</strong></dd>
      </dl>
      <dl class="list03">
        <dt><sup>IMPROVED</sup> Complete Clean</dt>
        <dd>Auto clean leftover files of programs<br> uninstalled without using IObit<br> Uninstaller.</dd>
        <dd><strong>*Pro only</strong></dd>
      </dl>
      <dl class="list04">
        <dt><sup class="new">NEW</sup>Installation Monitor</dt>
        <dd>Monitor and record all things that a program did to<br> your system during installation and fully revert all<br> changes when the program is no longer needed.</dd>
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
            <dt><img src="<?php echo getStaticUrl('images/makeuseof.png')?>" alt="MakeUseOf"></dt>
            <dd>
              <h2>Media Review</h2>
              <p>" This easy-to-use and informative uninstall tool cleans, configures, and optimizes your PC. Users can download it virtually in a blink of an eye. This uninstall tool can be categorized as the best uninstaller and allows users to do uninstallation in bulk. It will offer users to do a "Powerful Scan" to go deeper and find leftovers. The performance alone makes this little uninstall tool worth keeping."</p>
              <cite>MakeUseOf</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/jeff-a-watts.png')?>" alt="Jeff A Watts"></dt>
            <dd>
              <h2>User Review</h2>
              <p>"I have used IObit programs for years with great effect ! For this reason I stay with IObit products. I, in the past have serviced and fixed laptops and mobiles (android) and always leave them, with IObit products installed, and ask them to regularly 'hit the big' C' and tell them it will automatically fix and speed up their laptop/computer/mobile! :) I highly recommend the uninstaller (and the latest beta) as a safe reliable program that shifts stubborn programs! Most importantly, remove 'hidden' coding that the programmer intended to leave, which then brings adverts to re-install again! IObit 'ALL' products are safe' and easy to use' most of all look after your PC's."</p>
              <cite>Jeff A Watts</cite>
            </dd>
          </dl>             
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/lynett-van-niekerk.png')?>" alt="Lynette van Niekerk"></dt>
            <dd>
              <h2>User Review</h2>
              <p>"I find IObit uninstaller excellent to use as it has all you could wish for. I love the fact that it uninstalls all the left over fragments. It also has a software updater which reminds you when one of the programs need updating, and the fact that it will uninstall batch programs really makes it a winner. In fact it is basically just what one needs to keep your computer good to go."</p>
              <cite>Lynette van Niekerk</cite>
            </dd>
          </dl>                 
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/paulo-martins.png')?>" alt="Paulo Martins"></dt>
            <dd>
              <h2>User Review</h2>
              <p>"IObit Uninstaller is the best software to remove programs on the computer, it is fast and very effective it does not compare anything with basic uninstaller of windows, it seriously cleans all the rest of the program and so there are no delays in the computer. I have been using it for a few months and I do not know how to live without it, I recommend it to my friends and family. Thanks IObit Uninstaller is fantastic."</p>
              <cite>Paulo Martins</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/lovro-zuzic.png')?>" alt="Lovro Žužić"></dt>
            <dd>
              <h2>User Review</h2>
              <p>"The IObit Uninstaller gets better with every update. I've been using it for more than 3 years now. It's fast to load and has simple UI. Some of the many features I regularly use are Batch uninstall, Powerful scan, File shredder and Recently installed feature which gives me quick access to a program that I just installed which I don't like or it doesn't work properly."</p>
              <cite>Lovro Žužić</cite>
            </dd>
          </dl>
        </div>               
    </div>
  </div>
  
  <div class="bottom">
      <div class="award wrapper ">
        <h2>World-wide Awards</h2>
        <p>As being trusted and awarded by those world-class media in the past eight years, you know you’ve got the right PC uninstaller.</p>
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
      <a href="https://www.iobit.com/buy.php?product=iu93pc1477&ref=iu9softwarehealth1477<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_iu" onclick="ga('send', 'event', 'iu3pcbuy', 'buy', 'iupurchase-softwarehealth');" class="buybtn"><i></i> <span>Activate Now</span></a>
    </div>
  </div>
  <div class="pop-over">
    <h2>Surprise! Free Gifts for Our Lucky Visitor</h2>
    <h3>Activate IObit Uninstaller Pro Today to Get Your Free Gifts (Value $39.98)</h3>
    <p>Limited Offer! Ends in <strong><span class="count-time">60</span>s</strong></p>
    <img src="<?php echo getStaticUrl('images/pop-iu-box.png')?>" alt=" IObit Uninstalller PRO" class="imgbox">
    <a href="https://www.iobit.com/buy.php?product=iu9sdpf1477&ref=iu9softwarehealthgift<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_iu" onclick="ga('send', 'event', 'iubundlebuy', 'buy', 'iupurchase-softwarehealth');" class="buybtn buybtn-pop">Get My Free Gifts</a>
  </div>
  <div class="pop-bg"><span class="close">X</span></div>
  <script>refStr="<?php echo $refStr;?>";</script>
  <script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
  <script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>