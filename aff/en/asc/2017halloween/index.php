<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../../';
}
include $pRootUrl . 'include/common.inc.php';

function microtime_float()
{
  list($usec, $sec) = explode(' ', microtime());
  return ((float)$usec + (float)$sec);
}
if($_GET['action']=='clickCount'){
  try{
    $dsn="mysql:host=mariadb-071.wc2.dfw3.stabletransit.com;dbname=1015490_pricssw";
    $pdo=new PDO($dsn,'1015490_pricssw','7CcjUGsxLN82');
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $pdo->query("set names utf8");

    $sql="insert into enaschalloween (ip,addTime,timezone,ctype,ctime) values(:ip,:addTime,:timezone,:ctype,:ctime)";
    $pre=$pdo->prepare($sql);
    $timezone=empty($_GET['timezone'])?13:intval($_GET['timezone']);
    $clientIp=empty($_GET['ip'])?getIP():$_GET['ip'];
    $addTime=time();
    $cType=empty($_GET['ctype'])?0:$_GET['ctype'];
    $cTime=empty($_GET['ctime'])?0:$_GET['ctime'];
    $pre->bindParam(':ip',$clientIp);
    $pre->bindParam(':timezone',$timezone);
    $pre->bindParam(':addTime',$addTime);
    $pre->bindParam(':ctype',$cType);
    $pre->bindParam(':ctime',$cTime);

    $pre->execute();
  }catch(PDOException $e){
    var_dump($e->getMessage());
  }
  exit();
}
if (empty($_GET['ref'])) $_GET['ref'] = 'enaff_asc10_2017halloween';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Get Advanced SystemCare PRO for free, speed up, protect and optimize your PC!</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public']; ?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
<div class="main">
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
<div class="banner">
  <div class="wrapper">
    <a href="http://www.iobit.com" target="_blank"class="logo">IObit</a>
    <h1>What Do You Get with PRO Edition? </h1>
    <div class="top-message">
      <dl class="computer" >
        <dt><i></i></dt>
        <dd>
          <strong>Your Computer</strong>
          200% Quicker Startup <br> and Running
        </dd>
      </dl>
      <dl class="internet">
        <dt><i></i></dt>
        <dd>
          <strong>Your Internet</strong>
          300%* Faster Download <br> and Browsing
        </dd>
      </dl>
      <dl class="security">
        <dt><i></i></dt>
        <dd>
          <strong>Your Security</strong>
          Real-time Protection <br> against Infections
        </dd>
      </dl>
      <dl class="last">
        <dt><i></i></dt>
        <dd>
          <strong>Your Software</strong>
          Auto Update Programs <br> on PC
        </dd>
      </dl>
      <div class="buy-top"><a href="http://www.iobit.com/buy.php?product=asc103pc1999_aff&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_asc&tw=-8" onclick="ga('send', 'event', 'ascbuy', 'buy', 'enaffasc102017halloween');clickCount(1)" class="buybtn">Activate Now for $19.99 </a></div>
      <p>1 Year Subscription / 3 PCs</p>
    </div>
    <div class="content">
      <div class="title">
        <h2>Play Halloween Cards to Win a Free Gift</h2>
      </div>
      <div class="btn-content">
        <a href="javascript:void (0);" class="buybtn btn-start">PLAY NOW <span class="down"> <span class="animationdown"></span></span></a>
      </div>
      <div class="card-content wrapper">
        <div class="card" data-index="1">
          <div class="container">
            <div class="card-after"></div>
            <div class="changecard"></div>
            <div class="ribbon"></div>
          </div>
        </div>
        <div class="card" data-index="2">
          <div class="container">
            <div class="card-after"></div>
            <div class="changecard"></div>
            <div class="ribbon"></div>
          </div>
        </div>
        <div class="card" data-index="3">
          <div class="container">
            <div class="card-after"></div>
            <div class="changecard"></div>
            <div class="ribbon"></div>
          </div>
        </div>
      </div>
      <div class="asc-buy wrapper">
        <div class="asc-box"></div>
        <dl>
          <dt><strong>$19.99</strong> <del>$104.96</del></dt>
          <dd><a href="http://www.iobit.com/buy.php?product=asc103pc14m1999_aff&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_asc&tw=-8" onclick="ga('send', 'event', 'ascbuy', 'buy', 'enaffasc102017halloween');clickCount(1)" class="buybtn">Activate Now</a></dd>
          <dd><i></i>Act Fast! <strong class="date"><span class="minutes">02</span>:<span class="seconds">00</span></strong> remaining</dd>
        </dl>
      </div>
    </div>
  </div>
</div>
<div class="payment">
  <div class="wrapper">
    <img src="<?php echo $pResUrl; ?>images/payment.png" alt="">
  </div>
</div>

<div class="comparison ">
  <div class="wrapper">
    <h2>More Amazing Features with PRO Edition</h2>
    <div class="table">
      <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <thead>
        <tr>
          <th class="itema"></th>
          <th class="space"></th>
          <th class="itemc"><strong>PRO</strong> Advanced SystemCare</th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td class="itema">Faster Computer</td>
          <td class="space"></td>
          <td class="itemc">200% faster</td>
        </tr>
        <tr>
          <td class="itema">Faster Internet </td>
          <td class="space"></td>
          <td class="itemc">300%* faster</td>
        </tr>
        <tr>
          <td class="itema">Scheduled Cleaning    </td>
          <td class="space"></td>
          <td class="itemc"> <i></i> </td>
        </tr>
        <tr>
          <td class="itema">Deep-rooted Threat Removal</td>
          <td class="space"></td>
          <td class="itemc"> <i></i></td>
        </tr>
        <tr>
          <td class="itema">Stop Windows Crashes and Errors     </td>
          <td class="space"></td>
          <td class="itemc"> <i></i></td>
        </tr>
        <tr>
          <td class="itema">Automatic Traces Clean </td>
          <td class="space"></td>
          <td class="itemc"> <i></i></td>
        </tr>
        <tr>
          <td class="itema">Automatic Update</td>
          <td class="space"></td>
          <td class="itemc"> <i></i></td>
        </tr>
        <tr>
          <td class="itema">24/7 Technical Support </td>
          <td class="space"></td>
          <td class="itemc"> <i></i></td>
        </tr>
        </tbody>
      </table>
    </div>
    <div class="price">
      <h2>Activate Now to Enjoy a Faster, Cleaner and More Secure PC!</h2>
      <span></span><a href="http://www.iobit.com/buy.php?product=asc103pc1999_aff&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_asc&tw=-8" onclick="ga('send', 'event', 'ascbuy', 'buy', 'enaffasc102017halloween');clickCount(1)" class="buybtn big">Activate Now for <strong>$19.99</strong></a><span></span>
      <p>1 Year / 3 PCs </p>
    </div>
  </div>
</div>
<!-- review -->
<div class="review ">
  <div class="wrapper">
    <div id="dg-container" class="dg-container">
      <div class="nav">
        <span class="dg-prev"></span>
        <span class="dg-next"></span>
      </div>
      <div class="content dg-wrapper">
        <dl class="reviews">
          <dt><img src="<?php echo $pResUrl; ?>images/clnet.png" alt=""></dt>
          <dd>
            <h2>Media Review</h2>
            <h3>"Advanced Systemcare aims to remedy whatever ails your computer."</h3>
            <p>There's nothing worse than a computer that is bogged down so much that it impedes your ability to work or play games. Advanced Systemcare aims to remedy whatever ails your computer by not only cleaning up junk files, malware, and invalid registry entries, but by giving your computer a boost to optimize your PC experience.</p>
            <cite>Cnet</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo $pResUrl; ?>images/gordon-griswold.png" alt=""></dt>
          <dd>
            <h2>User Review</h2>
            <h3>"My system has never run better."</h3>
            <p>"In my opinion, IObit's ASC Pro is the best maintenance application available for the Windows user, providing excellent value and function in both its shareware and freeware versions. IObit provides expert technical support that is competent, knowledgeable and responsive, adding significant value to their products and services for their customers."</p>
            <cite>Gordon Griswold</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo $pResUrl; ?>images/bruce-ramsay.png" alt=""></dt>
          <dd>
            <h2>User Review</h2>
            <h3>"Not only is it a great product, but the support is equally great"</h3>
            <p>"I like many started off with the free version and eventually purchased the full version. It's been working to keep my computer clean and "bug" free for years now and it hasn't let me down yet. I contacted Advanced System Care recently and they responded within a day or two with all I needed to know. In my mind support is huge in the decision to stay with a product and ASC wins in both product and support."</p>
            <cite>Bruce Ramsay</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo $pResUrl; ?>images/charles-r-widick.png" alt=""></dt>
          <dd>
            <h2>User Review</h2>
            <h3>"My choice is still overwhelmingly Advanced SystemCare Pro"</h3>
            <p>"As a computer repair tech I find by downloading and scanning with ASC free most common problems are resolved. When finished with a repair I usually suggest the client purchase the Pro package. Who needs a tech when you have the power of Advanced System Care Pro working your system 24-7? This is the best product a home user can buy. Thank you for making my job easier."</p>
            <cite>Charles R. Widick</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo $pResUrl; ?>images/bob-bassett.png" alt=""></dt>
          <dd>
            <h2>User Review</h2>
            <h3>"Cleaned up Spyware and Malware My antivirus lets slip through"</h3>
            <p>"We used to use up to a dozen different programs to keep our machines running smoothly and keep the bad guys out. It took hours every week to maintain security and performance. Now, with Advanced System Care Pro, everything is in one place and it takes us just a few minutes every couple of days to do the same jobs with much more confidence"</p>
            <cite>Bob Bassett</cite>
          </dd>
        </dl>
      </div>
    </div>
  </div>
</div>
<!-- end review -->
<!-- awards -->
<div class="awards">
  <div class="wrapper">
    <h2>World-wide Awards</h2>
    <p>As being trusted and awarded by those world-class media in the past ten years, you know you’ve got the right PC optimizer.</p>
    <img src="<?php echo $pResUrl; ?>images/awards.png" alt="">
  </div>
</div>
<!-- end awards -->
<div class="servizio  clearfix">
  <div class="wrapper">
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/money-back.png" alt=""></dt>
      <dd><strong>Money Back Guarantee</strong> If you're not satisfied in the first 60 days, we will give you back your money.</dd>
    </dl>
    <dl class="secure">
      <dt><img src="<?php echo $pResUrl; ?>images/verified.png" alt=""></dt>
      <dd><strong>Secure Payment</strong> IObit supports several safe modes of <br> payment.</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/veloce.png" alt=""></dt>
      <dd><strong>Get License</strong>You will receive the license within a few minutes after purchase.</dd>
    </dl>
  </div>
</div>
<div class="footer">
  <!-- annotation start -->
  <dl class="annotation wrapper">
    <dt>Note:</dt>
    <dd>
      *.Such promotional programs are subject to change without notice, from time to time in our sole discretion.
    </dd>
    <dd>
      *.Data may vary based on different system or computer.
    </dd>
  </dl>
  <div class="copyright">Copyright © 2005 - 2017 IObit. All Rights Reserved</div>
</div>
<div class="pop-up">
    <div class="pop-main">
        <div class="pop-box">
            <h2>Note:</h2>
            <p>Thank you for your visiting and your interest in IObit products! This Special Offer is over now.</p>
            <p>You will be redirected to the latest IObit promotion page automatically.</p>
        </div>
    </div>
</div>
<script src="<?php echo $pResUrl; ?>script/modernizr.min.js"></script>
<script src="<?php echo $pResUrl; ?>script/review-3d-carousel.min.js"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
    <script>setTimeout('window.location.href="http://purchase.iobit.com/aff/en/asc/2017asc10general/index.php'+location.search+'"',5000);</script></div>
</body>
</html>